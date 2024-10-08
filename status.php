<?php include 'inc/decoration.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>💖 Astroid | Status</title>

    <link href="/src/styles/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="/src/assets/overrides.css">
    <link rel="icon" href="favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <meta name="description" content="Astroid enables seamless integration of Discord, Guilded, Nerimity, and Revolt servers. Messaging across platforms, fostering streamlined communication on community growth. Expand your reach and engage with a broader audience, accelerating online community development.">
    <meta name="author" content="💖 Astroid | Status">
    <meta content="#A97EBD" data-react-helmet="true" name="theme-color">
    <meta property="og:image" content="favicon.png">
</head>

<body class="bg-gray-900">

    <?php include 'inc/nav.php'; ?>


    <div class="relative isolate overflow-hidden bg-gray-900">
        <svg class="absolute inset-0 -z-10 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
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
        <div class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]" aria-hidden="true">
            <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#00AEFFFF] to-[ #0051FFFF] opacity-20" style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)"></div>
        </div>
        <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
            <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
                <h1 class="mt-10 text-4xl font-bold tracking-tight text-white sm:text-6xl">Astroid Network Status</h1>
                <div class="mt-10 flex items-center gap-x-5">
                    <a onclick="history.back()" style="cursor: pointer;" class="flex-1 text-center rounded-md bg-blue-900 px-3.5 py-2.5 text-sm font-semibold text-blue-300 shadow-sm hover:bg-blue-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-400"><i class="fa-solid fa-arrow-left"></i> Go Back</a>
                    <a href="/" class="flex-1 text-center rounded-md bg-blue-900 px-3.5 py-2.5 text-sm font-semibold text-blue-300 shadow-sm hover:bg-blue-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-400"><i class="fa-solid fa-house"></i> Back Home</a>
                </div>
            </div>

        </div>
    </div>

    <div id="overall-status-message" class="text-center text-xl font-bold py-4"></div>

    <div class="container mx-auto px-6 py-10">
        <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
            <table class="w-full border-2 border-gray-700">
                <thead>
                    <tr>
                        <th class="py-3 px-4 bg-gray-900 text-left text-xs font-semibold text-gray-300 uppercase tracking-wider">Name</th>
                        <th class="py-3 px-4 bg-gray-900 text-left text-xs font-semibold text-gray-300 uppercase tracking-wider">Incident</th>
                        <th class="py-3 px-4 bg-gray-900 text-left text-xs font-semibold text-gray-300 uppercase tracking-wider">Status</th>
                    </tr>
                </thead>
                <tbody id="status-table-body">
                    <!-- Status data will be inserted here -->
                </tbody>
            </table>
        </div>
    </div>



    <?php include 'inc/footer.php'; ?>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        fetch('https://status.astroid.cc/monitor')
            .then(response => response.json())
            .then(data => {
                const tableBody = document.getElementById('status-table-body');
                let allUp = true; // Flag to track if all statuses are 'up'
                
                for (const [key, value] of Object.entries(data)) {
                    const row = document.createElement('tr');
                    
                    const nameCell = document.createElement('td');
                    nameCell.className = 'py-3 px-4 border-b border-gray-700 text-gray-300';
                    nameCell.textContent = key.charAt(0).toUpperCase() + key.slice(1);
                    row.appendChild(nameCell);
                    
                    const incidentCell = document.createElement('td');
                    incidentCell.className = 'py-3 px-4 border-b border-gray-700 text-gray-300';
                    incidentCell.textContent = value.incident || 'No incidents';
                    row.appendChild(incidentCell);
                    
                    const statusCell = document.createElement('td');
                    statusCell.className = 'py-3 px-4 border-b border-gray-700';
                    const statusSpan = document.createElement('span');
                    statusSpan.className = 'inline-block py-1 px-2 rounded-full text-xs font-semibold';
                    statusSpan.textContent = value.status.charAt(0).toUpperCase() + value.status.slice(1);
                    
                    if (value.status === 'up') {
                        statusSpan.classList.add('text-green-200', 'bg-green-900');
                    } else if (value.status === 'down') {
                        statusSpan.classList.add('text-red-200', 'bg-red-900');
                        allUp = false; // Update flag if any status is 'down'
                    } else if (value.status === 'unknown') {
                        statusSpan.classList.add('text-orange-200', 'bg-orange-900');
                        allUp = false; // Update flag if any status is 'unknown'
                    }
                    
                    statusCell.appendChild(statusSpan);
                    row.appendChild(statusCell);
                    
                    tableBody.appendChild(row);
                }
                
                if (allUp) {
                    console.log('All systems are up!');
                }
            })
            .catch(error => console.error('Error fetching status:', error));
    });
</script>
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