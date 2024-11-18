const token = localStorage.getItem("token");
const endpoint_id = localStorage.getItem("endpoint_id");

async function login() {
  document.querySelector(".error-div").style.display = "none";
  document.getElementById("span-login").style.display = "none";
  document.getElementById("btn-load").style.display = "flex";
  const endpoint_id = document.getElementById("endpoint-id").value;
  const token = document.getElementById("token").value;
  const apiUrl = `https://api.astroid.cc/${endpoint_id}?token=${token}`;

  await fetch(apiUrl).then(async (response) => {
    if (response.status == 200) {
      var data = await response.json();
      console.log(data);
      console.log(data.config.isbeta);
      if (data.config.isbeta != true) {
        document.querySelector(".error-div").style.display = "block";
        document.getElementById("error").innerText =
          "Only beta endpoints are supported at the moment";
      } else {
        localStorage.setItem("token", token);
        localStorage.setItem("endpoint_id", endpoint_id);
        location.reload();
      }
    } else if (response.status == 404) {
      document.querySelector(".error-div").style.display = "block";
      document.getElementById("error").innerText =
        "This endpoint does not exist";
    } else if (response.status == 401) {
      document.querySelector(".error-div").style.display = "block";
      document.getElementById("error").innerText =
        "You are not authorized to access this endpoint";
    } else {
      document.querySelector(".error-div").style.display = "block";
      document.getElementById("error").innerText =
        "An unexpected error occurred";
    }
  });
  document.getElementById("span-login").style.display = "block";
  document.getElementById("btn-load").style.display = "none";
}

window.onresize = function () {
  if (window.innerWidth <= 550) {
    document.querySelector(".logo img").src =
      "../assets/Astroid Logo no bg.png";
  } else {
    document.querySelector(".logo img").src = "../assets/Astroid-banner.png";
  }
};

window.onload = async function () {
  if (window.innerWidth <= 550) {
    document.querySelector(".logo img").src =
      "../assets/Astroid Logo no bg.png";
  } else {
    document.querySelector(".logo img").src = "../assets/Astroid-banner.png";
  }

  document.querySelector(".logo img").onclick = function () {
    window.location.href = "/";
  };

  try {
    if (
      localStorage.getItem("token") == null ||
      localStorage.getItem("token") == "null"
    ) {
      document.getElementById("login-popup").style.display = "block";
      const urlParams = new URLSearchParams(window.location.search);
      const endpoint_id = urlParams.get("endpoint");
      const token = urlParams.get("token");
      if (endpoint_id == null || token == null) {
      } else {
        console.log(endpoint_id);
        console.log(token);
        document.getElementById("endpoint-id").value = endpoint_id;
        document.getElementById("token").value = token;
        await login();
        window.location.search = "";
      }
    } else {
      document.getElementById("login-popup").style.display = "none";
    }
  } catch (error) {
    console.error(error);
  }

  if (
    token == null ||
    endpoint_id == null ||
    token == "null" ||
    endpoint_id == "null"
  ) {
    document.getElementById("login-popup").style.display = "block";
  }

  document.getElementById("login").onclick = async function () {
    await login();
  };

  document.getElementById("logout").onclick = function () {
    localStorage.removeItem("token");
    localStorage.removeItem("endpoint_id");
    location.reload();
  };

  const apiUrl = `https://api.astroid.cc/${endpoint_id}?token=${token}`;

  await fetch(apiUrl)
    .then((response) => response.json())
    .then(async (data) => {
      localStorage.setItem("config", JSON.stringify(data.config));

      var discord_channels = [];
      var guilded_channels = [];
      var revolt_channels = [];
      var nerimity_channels = [];

      for (discord_channel of data.config.channels.discord) {
        discord_channels.push(discord_channel);
      }
      for (guilded_channel of data.config.channels.guilded) {
        guilded_channels.push(guilded_channel);
      }
      for (revolt_channel of data.config.channels.revolt) {
        revolt_channels.push(revolt_channel);
      }
      for (nerimity_channel of data.config.channels.nerimity) {
        nerimity_channels.push(nerimity_channel);
      }

      for (channel of discord_channels) {
        const channels = document.getElementById("discord_channels");
        var channel_div = document.createElement("div");
        channel_div.className = "channel";
        channel_div.id = "discord_channel";
        var channel_id_p = document.createElement("p");
        channel_id_p.className = "channel-id";
        channel_id_p.innerText = channel;
        var channel_name_p = document.createElement("p");
        channel_name_p.className = "channel-name";
        channel_name_p.innerText = await getChannelNameById(channel, "discord");
        channel_div.appendChild(channel_name_p);
        channel_div.appendChild(channel_id_p);
        var edit_channel_btn = document.createElement("button");
        edit_channel_btn.className = "edit-channel";
        edit_channel_btn.innerHTML = "Edit channel";
        channel_div.appendChild(edit_channel_btn);
        channels.appendChild(channel_div);
      }

      for (channel of guilded_channels) {
        const channels = document.getElementById("guilded_channels");
        channel_div = document.createElement("div");
        channel_div.className = "channel";
        channel_div.id = "guilded_channel";
        var channel_id_p = document.createElement("p");
        channel_id_p.className = "channel-id";
        channel_id_p.innerText = channel;
        var channel_name_p = document.createElement("p");
        channel_name_p.className = "channel-name";
        channel_name_p.innerText = await getChannelNameById(channel, "guilded");
        channel_div.appendChild(channel_name_p);
        channel_div.appendChild(channel_id_p);
        var edit_channel_btn = document.createElement("button");
        edit_channel_btn.className = "edit-channel";
        edit_channel_btn.innerHTML = "Edit channel";
        channel_div.appendChild(edit_channel_btn);
        channels.appendChild(channel_div);
      }

      for (channel of revolt_channels) {
        const channels = document.getElementById("revolt_channels");
        channel_div = document.createElement("div");
        channel_div.className = "channel";
        channel_div.id = "revolt_channel";
        var channel_id_p = document.createElement("p");
        channel_id_p.className = "channel-id";
        channel_id_p.innerText = channel;
        var channel_name_p = document.createElement("p");
        channel_name_p.className = "channel-name";
        channel_name_p.innerText = channel;
        channel_div.appendChild(channel_name_p);
        channel_div.appendChild(channel_id_p);
        var edit_channel_btn = document.createElement("button");
        edit_channel_btn.className = "edit-channel";
        edit_channel_btn.innerHTML = "Edit channel";
        channel_div.appendChild(edit_channel_btn);
        channels.appendChild(channel_div);
      }

      for (channel of nerimity_channels) {
        const channels = document.getElementById("nerimity_channels");
        channel_div = document.createElement("div");
        channel_div.className = "channel";
        channel_div.id = "nerimity_channel";
        var channel_id_p = document.createElement("p");
        channel_id_p.className = "channel-id";
        channel_id_p.innerText = channel;
        var channel_name_p = document.createElement("p");
        channel_name_p.className = "channel-name";
        channel_name_p.innerText = await getChannelNameById(channel, "nerimity");
        channel_div.appendChild(channel_name_p);
        channel_div.appendChild(channel_id_p);
        var edit_channel_btn = document.createElement("button");
        edit_channel_btn.className = "edit-channel";
        edit_channel_btn.innerHTML = "Edit channel";
        channel_div.appendChild(edit_channel_btn);
        channels.appendChild(channel_div);
      }
      var logs = JSON.parse(localStorage.getItem("config")).logs;
      console.log(logs);
      document.querySelector(".log-channels #log-discord").value =
        logs.discord || "Not set";
      document.querySelector(".log-channels #log-guilded").value =
        logs.guilded || "Not set";
      document.querySelector(".log-channels #log-revolt").value =
        logs.revolt || "Not set";
      document.querySelector(".log-channels #log-nerimity").value =
        logs.nerimity || "Not set";
    });

  document.querySelectorAll(".edit-channel").forEach((btn) => {
    btn.onclick = function () {
      openEditModal(btn);
    };
  });
  document.querySelectorAll("#close").forEach((btn) => {
    btn.onclick = function () {
      closeModal(btn);
    };
  });
  document.getElementById("add-channel").onclick = function () {
    openAddChannelModal();
  };

  document.querySelectorAll("#save").forEach((btn) => {
    btn.onclick = function () {
      save(btn);
    };
  });

  document.getElementById("delete").onclick = function () {
    deleteChannel();
  };

  var blacklist = JSON.parse(localStorage.getItem("config")).blacklist;
  if (
    blacklist != undefined &&
    blacklist != null &&
    blacklist != "undefined" &&
    blacklist != "" &&
    blacklist.length > 0
  ) {
    for (word of blacklist) {
      var word_p = document.createElement("p");
      word_p.className = "word";
      word_p.innerText = word;
      word_p.id = "word";
      word_p.onclick = async function () {
        await deleteBlacklistedWord(word);
      };
      document
        .querySelector(".blacklist #blacklisted-words")
        .appendChild(word_p);
    }
  } else {
    document.querySelector(".blacklist #blacklisted-words").innerText =
      "No blacklisted words";
  }

  var allowed_ids = JSON.parse(localStorage.getItem("config"))["allowed-ids"];
  if (
    allowed_ids != undefined &&
    allowed_ids != null &&
    allowed_ids != "undefined" &&
    allowed_ids != "" &&
    allowed_ids.length > 0
  ) {
    for (id of allowed_ids) {
      var id_p = document.createElement("p");
      id_p.className = "allowed-id";
      id_p.innerText = id;
      id_p.id = "allowed-id";
      id_p.onclick = async function () {
        await deleteAllowedId(id);
      };
      document.querySelector(".allowed-ids-div #allowed-ids").appendChild(id_p);
    }
  } else {
    document.querySelector(".allowed-ids-div #allowed-ids").innerText =
      "No allowed ids";
  }

  exitLoading();
};

async function openEditModal(btn) {
  var modal = document.getElementById("edit-popup");
  modal.style.display = "block";
  document.getElementById("filter").style.display = "block";
  var platform = btn.parentElement.id.split("_")[0];
  var channel_id =
    btn.parentElement.getElementsByClassName("channel-id")[0].innerText;
  const endpoint_data = JSON.parse(localStorage.getItem("config"));
  const discord_channels = endpoint_data.channels.discord;
  const guilded_channels = endpoint_data.channels.guilded;
  const revolt_channels = endpoint_data.channels.revolt;
  const nerimity_channels = endpoint_data.channels.nerimity;
  const discord_webhooks = endpoint_data.webhooks.discord;
  const guilded_webhooks = endpoint_data.webhooks.guilded;
  // const revolt_webhooks = endpoint_data.webhooks.revolt
  // const nerimity_webhooks = endpoint_data.webhooks.nerimity
  var this_index = endpoint_data.channels[platform].indexOf(channel_id);
  document.querySelector(".edit-popup #popup-channel-id").innerText =
    channel_id;
  document.querySelector(".edit-popup #popup-platform").innerText = platform;

  try {
    document.querySelector(".edit-popup #discord_channel_id").value =
      discord_channels[this_index];
  } catch {
    document.querySelector(".edit-popup #discord_channel_id").value =
      "No channel";
  }
  try {
    document.querySelector(".edit-popup #guilded_channel_id").value =
      guilded_channels[this_index];
  } catch {
    document.querySelector(".edit-popup #guilded_channel_id").value =
      "No channel";
  }
  try {
    document.querySelector(".edit-popup #revolt_channel_id").value =
      revolt_channels[this_index];
  } catch {
    document.querySelector(".edit-popup #revolt_channel_id").value =
      "No channel";
  }
  try {
    document.querySelector(".edit-popup #nerimity_channel_id").value =
      nerimity_channels[this_index];
  } catch {
    document.querySelector(".edit-popup #nerimity_channel_id").value =
      "No channel";
  }

  try {
    document.querySelector(".edit-popup #discord_webhook_url").value =
      discord_webhooks[this_index];
  } catch {
    document.querySelector(".edit-popup #discord_webhook_url").value =
      "No webhook";
  }
  try {
    document.querySelector(".edit-popup #guilded_webhook_url").value =
      guilded_webhooks[this_index];
  } catch {
    document.querySelector(".edit-popup #guilded_webhook_url").value =
      "No webhook";
  }

  /* 
    
                TODO: Add revolt and nerimity webhooks when available


    try {
        document.querySelector(".edit-popup #revolt_webhook_url").value = "No webhook"
    }
    catch {
        document.querySelector(".edit-popup #revolt_webhook_url").value = "No webhook"
    } 

    try {
        document.querySelector(".edit-popup #nerimity_webhook_url").value = "No webhook"
    }
    catch {
        document.querySelector(".edit-popup #nerimity_webhook_url").value = "No webhook"
    } 
    
    
    */

  document.getElementById("channel-name").innerText = await getChannelNameById(
    channel_id,
    platform
  );
}

function openAddChannelModal() {
  var modal = document.getElementById("add-channel-popup");
  modal.style.display = "block";
  document.getElementById("filter").style.display = "block";
}

function closeModal(btn) {
  var modal = document.getElementById(btn.parentElement.id);
  modal.style.display = "none";
  document.getElementById("filter").style.display = "none";

  document.querySelector(".edit-popup #discord_channel_id").value = "";
  document.querySelector(".edit-popup #guilded_channel_id").value = "";
  document.querySelector(".edit-popup #revolt_channel_id").value = "";
  document.querySelector(".edit-popup #nerimity_channel_id").value = "";
  document.querySelector(".edit-popup #discord_webhook_url").value = "";
  document.querySelector(".edit-popup #guilded_webhook_url").value = "";
  // document.querySelector(".edit-popup #revolt_webhook_url").value = ""
  // document.querySelector(".edit-popup #nerimity_webhook_url").value = ""
  document.getElementById("channel-name").innerText = "";
}

async function getChannelNameById(id, platform) {
  if (platform == "revolt") {
    return id;
  }
  return fetch(
    `https://api.astroid.cc/channel/name/${platform}?id=${id}&token=${token}`
  )
    .then((response) => response.json())
    .then((data) => {
      return data;
    });
}

function exitLoading() {
  document.getElementById("loading").style.display = "none";
}

async function deleteChannel() {
  var deleteUrl = `https://api.astroid.cc/delete/data/${endpoint_id}?token=${token}`;
  var discord_channel = document.querySelector(
    ".edit-popup #discord_channel_id"
  ).value;
  var guilded_channel = document.querySelector(
    ".edit-popup #guilded_channel_id"
  ).value;
  var revolt_channel = document.querySelector(
    ".edit-popup #revolt_channel_id"
  ).value;
  var nerimity_channel = document.querySelector(
    ".edit-popup #nerimity_channel_id"
  ).value;
  var discord_webhook = document.querySelector(
    ".edit-popup #discord_webhook_url"
  ).value;
  var guilded_webhook = document.querySelector(
    ".edit-popup #guilded_webhook_url"
  ).value;

  if (
    discord_channel != "No channel" &&
    discord_channel != undefined &&
    discord_channel != "" &&
    discord_channel != null &&
    discord_channel != "undefined"
  ) {
    deleteUrl += `&channel_discord=${discord_channel}`;
  }
  if (
    guilded_channel != "No channel" &&
    guilded_channel != undefined &&
    guilded_channel != "" &&
    guilded_channel != null &&
    guilded_channel != "undefined"
  ) {
    deleteUrl += `&channel_guilded=${guilded_channel}`;
  }
  if (
    revolt_channel != "No channel" &&
    revolt_channel != undefined &&
    revolt_channel != "" &&
    revolt_channel != null &&
    revolt_channel != "undefined"
  ) {
    deleteUrl += `&channel_revolt=${revolt_channel}`;
  }
  if (
    nerimity_channel != "No channel" &&
    nerimity_channel != undefined &&
    nerimity_channel != "" &&
    nerimity_channel != null &&
    nerimity_channel != "undefined"
  ) {
    deleteUrl += `&channel_nerimity=${nerimity_channel}`;
  }
  if (
    discord_webhook != "No webhook" &&
    discord_webhook != undefined &&
    discord_webhook != "" &&
    discord_webhook != null &&
    discord_webhook != "undefined"
  ) {
    deleteUrl += `&webhook_discord=${discord_webhook}`;
  }
  if (
    guilded_webhook != "No webhook" &&
    guilded_webhook != undefined &&
    guilded_webhook != "" &&
    guilded_webhook != null &&
    guilded_webhook != "undefined"
  ) {
    deleteUrl += `&webhook_guilded=${guilded_webhook}`;
  }

  // if (revolt_webhook != "No webhook" && revolt_webhook != undefined && revolt_webhook != "" && revolt_webhook != null && revolt_webhook != "undefined") {
  //     updateUrl += `&webhook_revolt=${revolt_webhook}`
  // }
  // if (nerimity_webhook != "No webhook" && nerimity_webhook != undefined && nerimity_webhook != "" && nerimity_webhook != null && nerimity_webhook != "undefined") {
  //     updateUrl += `&webhook_nerimity=${nerimity_webhook}`
  // }

  await fetch(deleteUrl, { method: "DELETE" });
  location.reload();
}

async function save(btn) {
  var updateUrl = `https://api.astroid.cc/update/${endpoint_id}?token=${token}`;
  var platform = document.getElementById("popup-platform").innerText;
  var save = btn.parentElement.id.split("-")[0];
  if (save == "edit") {
    var channel_id = document.getElementById("popup-channel-id").innerText;
    var endpoint_data = JSON.parse(localStorage.getItem("config"));
    var this_index = endpoint_data.channels[platform].indexOf(channel_id);
    var discord_channel = document.querySelector(
      ".edit-popup #discord_channel_id"
    ).value;
    var guilded_channel = document.querySelector(
      ".edit-popup #guilded_channel_id"
    ).value;
    var revolt_channel = document.querySelector(
      ".edit-popup #revolt_channel_id"
    ).value;
    var nerimity_channel = document.querySelector(
      ".edit-popup #nerimity_channel_id"
    ).value;
    var discord_webhook = document.querySelector(
      ".edit-popup #discord_webhook_url"
    ).value;
    var guilded_webhook = document.querySelector(
      ".edit-popup #guilded_webhook_url"
    ).value;
    // var revolt_webhook = document.querySelector(".edit-popup #revolt_webhook_url").value
    // var nerimity_webhook = document.querySelector(".edit-popup #nerimity_webhook_url").value
    updateUrl += `&index=${this_index}`;

    if (
      discord_channel != "No channel" &&
      discord_channel != undefined &&
      discord_channel.replace(" ", "") != "" &&
      discord_channel != null &&
      discord_channel != "undefined"
    ) {
      updateUrl += `&channel_discord=${discord_channel}`;
    }
    if (
      guilded_channel != "No channel" &&
      guilded_channel != undefined &&
      guilded_channel.replace(" ", "") != "" &&
      guilded_channel != null &&
      guilded_channel != "undefined"
    ) {
      updateUrl += `&channel_guilded=${guilded_channel}`;
    }
    if (
      revolt_channel != "No channel" &&
      revolt_channel != undefined &&
      revolt_channel.replace(" ", "") != "" &&
      revolt_channel != null &&
      revolt_channel != "undefined"
    ) {
      updateUrl += `&channel_revolt=${revolt_channel}`;
    }
    if (
      nerimity_channel != "No channel" &&
      nerimity_channel != undefined &&
      nerimity_channel.replace(" ", "") != "" &&
      nerimity_channel != null &&
      nerimity_channel != "undefined"
    ) {
      updateUrl += `&channel_nerimity=${nerimity_channel}`;
    }
    if (
      discord_webhook != "No webhook" &&
      discord_webhook != undefined &&
      discord_webhook.replace(" ", "") != "" &&
      discord_webhook != null &&
      discord_webhook != "undefined"
    ) {
      updateUrl += `&webhook_discord=${discord_webhook}`;
    }
    if (
      guilded_webhook != "No webhook" &&
      guilded_webhook != undefined &&
      guilded_webhook.replace(" ", "") != "" &&
      guilded_webhook != null &&
      guilded_webhook != "undefined"
    ) {
      updateUrl += `&webhook_guilded=${guilded_webhook}`;
    }
    // if (revolt_webhook != "No webhook" && revolt_webhook != undefined && revolt_webhook.replace(" ", "") != "" && revolt_webhook != null && revolt_webhook != "undefined") {
    //     updateUrl += `&webhook_revolt=${revolt_webhook}`
    // }
    // if (nerimity_webhook != "No webhook" && nerimity_webhook != undefined && nerimity_webhook.replace(" ", "") != "" && nerimity_webhook != null && nerimity_webhook != "undefined") {
    //     updateUrl += `&webhook_nerimity=${nerimity_webhook}`
    // }

    await fetch(updateUrl, { method: "POST" });
    location.reload();
  } else if (save == "add") {
    var discord_channel = document.querySelector(
      ".add-channel-popup #discord_channel_id"
    ).value;
    var guilded_channel = document.querySelector(
      ".add-channel-popup #guilded_channel_id"
    ).value;
    var revolt_channel = document.querySelector(
      ".add-channel-popup #revolt_channel_id"
    ).value;
    var nerimity_channel = document.querySelector(
      ".add-channel-popup #nerimity_channel_id"
    ).value;
    var discord_webhook = document.querySelector(
      ".add-channel-popup #discord_webhook_url"
    ).value;
    var guilded_webhook = document.querySelector(
      ".add-channel-popup #guilded_webhook_url"
    ).value;
    // var revolt_webhook = document.querySelector(".add-channel-popup #revolt_webhook_url").value
    // var nerimity_webhook = document.querySelector(".add-channel-popup #nerimity_webhook_url").value

    if (
      discord_channel != "No channel" &&
      discord_channel != undefined &&
      discord_channel != "" &&
      discord_channel != null &&
      discord_channel != "undefined"
    ) {
      updateUrl += `&channel_discord=${discord_channel}`;
    }
    if (
      guilded_channel != "No channel" &&
      guilded_channel != undefined &&
      guilded_channel != "" &&
      guilded_channel != null &&
      guilded_channel != "undefined"
    ) {
      updateUrl += `&channel_guilded=${guilded_channel}`;
    }
    if (
      revolt_channel != "No channel" &&
      revolt_channel != undefined &&
      revolt_channel != "" &&
      revolt_channel != null &&
      revolt_channel != "undefined"
    ) {
      updateUrl += `&channel_revolt=${revolt_channel}`;
    }
    if (
      nerimity_channel != "No channel" &&
      nerimity_channel != undefined &&
      nerimity_channel != "" &&
      nerimity_channel != null &&
      nerimity_channel != "undefined"
    ) {
      updateUrl += `&channel_nerimity=${nerimity_channel}`;
    }
    if (
      discord_webhook != "No webhook" &&
      discord_webhook != undefined &&
      discord_webhook != "" &&
      discord_webhook != null &&
      discord_webhook != "undefined"
    ) {
      updateUrl += `&webhook_discord=${discord_webhook}`;
    }
    if (
      guilded_webhook != "No webhook" &&
      guilded_webhook != undefined &&
      guilded_webhook != "" &&
      guilded_webhook != null &&
      guilded_webhook != "undefined"
    ) {
      updateUrl += `&webhook_guilded=${guilded_webhook}`;
    }
    // if (revolt_webhook != "No webhook" && revolt_webhook != undefined && revolt_webhook != "" && revolt_webhook != null && revolt_webhook != "undefined") {
    //     updateUrl += `&webhook_revolt=${revolt_webhook}`
    // }
    // if (nerimity_webhook != "No webhook" && nerimity_webhook != undefined && nerimity_webhook != "" && nerimity_webhook != null && nerimity_webhook != "undefined") {
    //     updateUrl += `&webhook_nerimity=${nerimity_webhook}`
    // }

    await fetch(updateUrl, { method: "POST" });
    location.reload();
  } else if (save == "log") {
    var discord_channel = document.querySelector(
      ".log-channels #log-discord"
    ).value;
    var guilded_channel = document.querySelector(
      ".log-channels #log-guilded"
    ).value;
    var revolt_channel = document.querySelector(
      ".log-channels #log-revolt"
    ).value;
    var nerimity_channel = document.querySelector(
      ".log-channels #log-nerimity"
    ).value;

    document.querySelector(".log-channels #log-discord").value = "Updating...";
    document.querySelector(".log-channels #log-guilded").value = "Updating...";
    document.querySelector(".log-channels #log-revolt").value = "Updating...";
    document.querySelector(".log-channels #log-nerimity").value = "Updating...";

    if (
      discord_channel != "Not set" &&
      discord_channel != undefined &&
      discord_channel != "" &&
      discord_channel != null &&
      discord_channel != "undefined"
    ) {
      updateUrl += `&log_discord=${discord_channel}`;
    }
    if (
      guilded_channel != "Not set" &&
      guilded_channel != undefined &&
      guilded_channel != "" &&
      guilded_channel != null &&
      guilded_channel != "undefined"
    ) {
      updateUrl += `&log_guilded=${guilded_channel}`;
    }
    if (
      revolt_channel != "Not set" &&
      revolt_channel != undefined &&
      revolt_channel != "" &&
      revolt_channel != null &&
      revolt_channel != "undefined"
    ) {
      updateUrl += `&log_revolt=${revolt_channel}`;
    }
    if (
      nerimity_channel != "Not set" &&
      nerimity_channel != undefined &&
      nerimity_channel != "" &&
      nerimity_channel != null &&
      nerimity_channel != "undefined"
    ) {
      updateUrl += `&log_nerimity=${nerimity_channel}`;
    }

    await fetch(updateUrl, { method: "POST" });
    await reloadSpecific("logs");
  } else if (save == "blacklist") {
    var blacklist = document.querySelector(".blacklist #blacklist-input").value;
    document.querySelector(".blacklist #blacklist-input").value = "Updating...";
    document.querySelector(".blacklist #blacklisted-words").innerHTML =
      "Updating...";
    if (
      blacklist != undefined &&
      blacklist != "" &&
      blacklist != null &&
      blacklist != "undefined"
    ) {
      updateUrl += `&blacklist=${blacklist}`;
    }
    updateUrl += `&blacklist=${blacklist}`;
    await fetch(updateUrl, { method: "POST" });
    await reloadSpecific("blacklist");
    document.querySelector(".blacklist #blacklist-input").value = "";
  } else if (save == "allowed") {
    var allowed_ids = document.querySelector(
      ".allowed-ids-div #allowed-ids-input"
    ).value;
    document.querySelector(".allowed-ids-div #allowed-ids-input").value =
      "Updating...";
    document.querySelector(".allowed-ids-div #allowed-ids").innerHTML =
      "Updating...";
    if (
      allowed_ids != undefined &&
      allowed_ids != "" &&
      allowed_ids != null &&
      allowed_ids != "undefined"
    ) {
      updateUrl += `&allowed_ids=${allowed_ids}`;
    }
    updateUrl += `&allowed_ids=${allowed_ids}`;
    await fetch(updateUrl, { method: "POST" });
    await reloadSpecific("allowed-ids");
    document.querySelector(".allowed-ids-div #allowed-ids-input").value = "";
  }
}

async function deleteBlacklistedWord(word) {
  var updateUrl = `https://api.astroid.cc/delete/data/${endpoint_id}?token=${token}`;
  document.querySelector(".blacklist #blacklisted-words").innerHTML =
    "Updating...";
  updateUrl += `&blacklist=${word}`;
  await fetch(updateUrl, { method: "DELETE" });
  await reloadSpecific("blacklist");
}

async function deleteAllowedId(id) {
  var updateUrl = `https://api.astroid.cc/delete/data/${endpoint_id}?token=${token}`;
  document.querySelector(".allowed-ids-div #allowed-ids").innerHTML =
    "Updating...";
  updateUrl += `&allowed_ids=${id}`;
  await fetch(updateUrl, { method: "DELETE" });
  await reloadSpecific("allowed-ids");
}

async function reloadSpecific(specific) {
  if (specific == "logs") {
    document.querySelector(".log-channels #log-discord").value = "";
    document.querySelector(".log-channels #log-guilded").value = "";
    document.querySelector(".log-channels #log-revolt").value = "";
    document.querySelector(".log-channels #log-nerimity").value = "";
    await fetch(`https://api.astroid.cc/${endpoint_id}?token=${token}`)
      .then((response) => response.json())
      .then((data) => {
        var logs = data.config.logs;
        document.querySelector(".log-channels #log-discord").value =
          logs.discord || "Not set";
        document.querySelector(".log-channels #log-guilded").value =
          logs.guilded || "Not set";
        document.querySelector(".log-channels #log-revolt").value =
          logs.revolt || "Not set";
        document.querySelector(".log-channels #log-nerimity").value =
          logs.nerimity || "Not set";
      });
  } else if (specific == "blacklist") {
    document.querySelector(".blacklist #blacklisted-words").innerHTML = "";
    await fetch(`https://api.astroid.cc/${endpoint_id}?token=${token}`)
      .then((response) => response.json())
      .then((data) => {
        var blacklist = data.config.blacklist;
        if (
          blacklist != undefined &&
          blacklist != null &&
          blacklist != "undefined" &&
          blacklist != "" &&
          blacklist.length > 0
        ) {
          for (word of blacklist) {
            var word_p = document.createElement("p");
            word_p.className = "word";
            word_p.innerText = word;
            word_p.id = "word";
            word_p.onclick = function () {
              deleteBlacklistedWord(word);
            };
            document
              .querySelector(".blacklist #blacklisted-words")
              .appendChild(word_p);
          }
        } else {
          document.querySelector(".blacklist #blacklisted-words").innerText =
            "No blacklisted words";
        }
      });
  } else if (specific == "allowed-ids") {
    document.querySelector(".allowed-ids-div #allowed-ids").innerHTML = "";
    await fetch(`https://api.astroid.cc/${endpoint_id}?token=${token}`)
      .then((response) => response.json())
      .then((data) => {
        var allowed_ids = data.config["allowed-ids"];
        if (
          allowed_ids != undefined &&
          allowed_ids != null &&
          allowed_ids != "undefined" &&
          allowed_ids != "" &&
          allowed_ids.length > 0
        ) {
          for (id of allowed_ids) {
            var id_p = document.createElement("p");
            id_p.className = "allowed-id";
            id_p.innerText = id;
            id_p.id = "allowed-id";
            id_p.onclick = function () {
              deleteAllowedId(id);
            };
            document
              .querySelector(".allowed-ids-div #allowed-ids")
              .appendChild(id_p);
          }
        } else {
          document.querySelector(".allowed-ids-div #allowed-ids").innerText =
            "No allowed ids";
        }
      });
  }
}
