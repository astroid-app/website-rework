<?php include 'inc/decoration.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>💖 Astroid | Privacy</title>

  <link href="/src/styles/output.css" rel="stylesheet">
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <link rel="stylesheet" href="/src/assets/overrides.css">
  <link rel="icon" href="favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <meta name="description" content="Astroid enables seamless integration of Discord, Guilded, Nerimity, and Revolt servers. Messaging across platforms, fostering streamlined communication on community growth. Expand your reach and engage with a broader audience, accelerating online community development.">
  <meta name="author" content="💖 Astroid | Privacy">
  <meta content="#3D66EEFF" data-react-helmet="true" name="theme-color">
  <meta property="og:image" content="favicon.png">

  <?php include 'inc/head.php'; ?>
</head>

<body class="bg-gray-900">

<?php include 'inc/nav.php'; ?>

  <div class="relative isolate overflow-hidden bg-gray-900">
    <svg class="absolute inset-0 -z-10 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)] animate-fade-down" aria-hidden="true">
      <defs>
        <pattern id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
          <path d="M.5 200V.5H200" fill="none" />
        </pattern>
      </defs>
      <svg x="50%" y="-1" class="overflow-visible fill-gray-800/20">
        <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z" stroke-width="0" />
      </svg>
      <rect width="100%" height="100%" stroke-width="0" fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)" />
    </svg>
    <div class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)] animate-fade animate-duration-[3000ms]" aria-hidden="true">
      <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#00AEFFFF] to-[ #0051FFFF] opacity-20" style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)"></div>
    </div>
    <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40 animate-fade">
      <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
        <h1 class="mt-10 text-4xl font-bold tracking-tight text-white sm:text-6xl">Privacy Policy</h1>
        <p class="mt-6 text-lg leading-8 text-gray-300">This privacy policy is effective as of 11th September 2024</p>
      </div>
    </div>
  </div>

  <div class="container mx-auto px-6 py-10 text-white">

        <div class="privacy-section space-y-8">
            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">Introduction</h2>
                <p class="mt-4 text-gray-300">Astroid is a multiplatform bridge service that enables communication between Discord, Guilded, Nerimity and Revolt. This Privacy Declaration outlines the data collection, use, and retention practices of Astroid, as well as the security measures in place to protect user information.</p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">1. Data Collection</h2>
                <p class="mt-4 text-gray-300">Astroid collects and processes data solely for the purpose of facilitating communication and interaction between Discord, Guilded, Nerimity and Revolt. This may include server information, messages, user IDs, and other relevant data necessary for the proper functioning of the bridge service. However, Astroid does not collect or store any personal information of users. <br><br>For attachments (files) bridged with Astroid: <br>Attachments are temporarily stored solely for the purpose of transferring files. The file itself is assigned a unique ID by Astroid during the storage process. In the event of an error during the download, sending, or deletion of files, the folder containing these files will be cleared every hour, resulting in the deletion of any remaining files.</p>
            </div>
            
            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">2. Use of Information</h2>
                <p class="mt-4 text-gray-300">The data collected by Astroid is used exclusively for bridging communications between Discord, Guilded, Nerimity and Revolt. This includes relaying messages, managing server connections, and ensuring seamless interoperability. Astroid does not engage in any form of data mining or profiling. Addition for attachments: Astroid does not monitor, edit, or track files. Only the file name is replaced with an ID issued by Astroid.</p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">3. Token protected endpoints</h2>
                <p class="mt-4 text-gray-300">Endpoint data is secured with tokens in place to prevent unauthorized access, data breaches, or malicious activities. Astroid does not take responsibility if you give your tokens to third-party persons.</p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">4. Public REST API</h2>
                <p class="mt-4 text-gray-300">Astroid provides a public REST API for developers to integrate with the bridge service. While using the API, developers are responsible for ensuring the security and privacy of the data they access or transmit. Astroid does not assume liability for any misuse or mishandling of data by third-party developers.</p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">5. Open Source Code</h2>
                <p class="mt-4 text-gray-300">Astroid is built on open-source principles, and its source code is publicly available for review and contribution. Transparency is fundamental to Astroid's commitment to privacy and security. Users are encouraged to inspect the codebase, report issues, and contribute to its improvement.</p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">6. Data Retention</h2>
                <p class="mt-4 text-gray-300">Astroid retains certain data for long-term operational purposes, including but not limited to:</p>
                <ul class="mt-4 list-disc list-inside text-gray-300 space-y-2">
                    <li>Discord Server ID</li>
                    <li>Guilded Server ID</li>
                    <li>Revolt Server ID</li>
                    <li>Nerimity Server ID</li>
                    <li>Discord Webhook URL/s</li>
                    <li>Guilded Webhook URL/s</li>
                    <li>Discord Channel ID/s</li>
                    <li>Guilded Channel ID/s</li>
                    <li>Nerimity Channel ID/s</li>
                    <li>Revolt Channel ID/s</li>
                    <li>Discord User ID/s</li>
                    <li>Guilded User ID/s</li>
                    <li>Revolt User ID/s</li>
                    <li>Nerimity User ID/s</li>
                    <li>Manually entered blacklisted Words/Sentences/Links/Numbers</li>
                </ul>
                <p class="mt-4 text-gray-300">Astroid temporarily stores files including their data up to an hour. Normally, the files get deleted directly after being sent out to all platforms but in the event of an error, the folder containing these files is cleared every hour at minute ten (e.g. 9:10, 10:10, 11:10..).</p>
                <p class="mt-4 text-gray-300">This data is securely stored and used solely for the purpose of maintaining and improving the functionality of the Astroid service.</p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">7. Data Deletion</h2>
                <p class="mt-4 text-gray-300">Users may delete their data from Astroid's servers at any time by running the <code class="bg-gray-800 text-white px-1 py-0.5 rounded">/delete</code> command on discord, using Astroid's API (<code class="bg-gray-800 text-white px-1 py-0.5 rounded">curl -X DELETE https://astroid.deutscher775.de/delete/[ENDPOINT-ID]?token=[TOKEN]</code> in console) or contacting us at <a href="mailto:info@astroid.cc" class="text-blue-500 underline">info@astroid.cc</a>. Upon deletion, all data associated with the user or the servers will be permanently removed from Astroid's servers.</p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">8. Third-Party Services</h2>
                <p class="mt-4 text-gray-300">Astroid may utilize third-party services or APIs to enhance its functionality. This includes services like Cloudflare for content delivery network (CDN) and security purposes, and Sentry for error tracking and monitoring. These third-party services have their own privacy policies and terms of service, and Astroid is not responsible for their practices. <br><br>
                The Privacy Policies of these services can be found here:<br>
                <ul class="mt-4 list-disc list-inside text-gray-300 space-y-2">
                    <li><a href="https://www.cloudflare.com/privacypolicy/" class="text-blue-500 underline">Cloudflare Privacy Policy</a></li>
                    <li><a href="https://sentry.io/privacy/" class="text-blue-500 underline">Sentry Privacy Policy</a></li>
                </ul>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">Disclaimer of Liability for attachments</h2>
                <p class="mt-4 text-gray-300">Astroid does not take any liability or responsibility for the content contained within the files.</p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">9. Updates to Privacy Declaration</h2>
                <p class="mt-4 text-gray-300">Astroid reserves the right to update or modify this Privacy Declaration to reflect changes in our practices or legal requirements. Users will be notified 7 or more days in advance of any significant updates, and continued use of the service constitutes acceptance of the revised terms.</p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-semibold text-white">10. Contact Information</h2>
                <p class="mt-4 text-gray-300">By using Astroid's multiplatform bridge service and associated public REST API, you acknowledge and consent to the practices described in this Privacy Declaration. If you have any questions or concerns about our privacy practices, please contact us at <a href="mailto:info@astroid.cc" class="text-blue-500 underline">info@astroid.cc</a>.</p>
            </div>
        </div>

  </div>



  <?php include 'inc/footer.php'; ?>
</body>
<?php include 'inc/scripts.php'; ?>
<script>
  const nav = document.querySelector('.nav');
window.addEventListener('scroll', fixNav);

function fixNav() {
  if (window.scrollY > nav.offsetHeight + 10) {
    nav.classList.add('active');
  } else {
    nav.classList.remove('active');
  }
}

var item = document.getElementsByClassName('item');

for (let i = 0; i < item.length; i++) {
  item[i].addEventListener('click', function(el) {
    
    el.currentTarget.classList.toggle('item--open');
    
    for (let i = 0; i < item.length; i++) {
      if (item[i] !== el.currentTarget && item[i].className === "item item--open") {
        item[i].classList.remove('item--open');
      }
    }
  });
};

  function toggleDropdown() {
    var dropdown = document.getElementById("dropdown");
    if (dropdown.style.display === "block") {
        dropdown.style.display = "none";
    } else {
        dropdown.style.display = "block";
    }
}

</script>

</html>