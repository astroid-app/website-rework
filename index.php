<?php include 'inc/decoration.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>💖 Astroid</title>

  <link href="/src/styles/output.css" rel="stylesheet">
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <link rel="stylesheet" href="/src/assets/overrides.css">
  <link rel="icon" href="favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <meta name="description" content="Astroid enables seamless integration of Discord, Guilded, Nerimity, and Revolt servers. Messaging across platforms, fostering streamlined communication on community growth. Expand your reach and engage with a broader audience, accelerating online community development.">
  <meta name="author" content="💖 Astroid">
  <meta content="#A97EBD" data-react-helmet="true" name="theme-color">
  <meta property="og:image" content="favicon.png">

  <?php include 'inc/head.php'; ?>
</head>

<!--
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣰⣰⣰⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣠⣰⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣾⠗⠁⠋⠯⣽⣐⠀⠀⠀⠀⠀⠀⠀⢀⣾⡿⠇⠃⠯⣽⡐⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣺⠗⠀⠀⠀⠀⠊⢿⣴⡀⠀⠀⠀⠀⢠⣿⠇⠀⠀⠀⠀⠊⣿⣐⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀Meow meow ⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣨⡿⠀⠀⠀⠀⠀⠀⠀⠋⠿⠿⠿⠿⠿⠿⠅⠀⠀⠀⠀⠀⠀⠊⢿⣔⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣨⣿⠅⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠂⢯⣵⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣺⡿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠯⣽⣐⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣾⡟⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠊⢿⣔⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣾⡗⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠂⢯⣵⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣀⣀⣀⠀⢪⡟⠀⠀⠀⠈⠿⠀⠀⠀⠀⠀⠀⢀⣐⠀⢀⡀⠀⠀⢀⠀⠀⠀⠀⠀⠀⠀⢨⡔⠀⠀⠀⠀⠀⢯⣔⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣰⣼⠼⠿⠏⠏⠏⢃⣣⡃⠀⢯⣵⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠂⢿⣴⣾⣿⣴⣰⣾⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢂⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠂⠏⠁⠀⠀⠀⢀⣰⣾⠿⠇⠁⠀⠀⠋⠯⢽⣴⣐⡀⠀⠀⠀⠀⠀⠀⠀⠀⠃⠃⠀⠀⠃⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣠⣼⡿⠇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠟⠇⠀⠀⠀⠀⠀⠀⠀⠀⠀⣺⡿⠏⠿⠄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣰⣼⣾⡟⠇⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣾⠟⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠃⠃⠀⠋⢿⣴⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣾⠗⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠂⢯⣵⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⣐⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠂⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠂⠏⢿⡕⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢪⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⡰⡼⠿⠇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢿⡕⠀⠀⠀⠀⢀⣠⣼⡿⠿⢿⣔⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢯⣕⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢾⣵⣰⣰⡼⠾⠟⠇⠁⠀⠀⣪⡟⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠂⣿⡐⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⣵⣰⣀⣀⣀⣀⣀⣰⣸⣾⠟⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠪⣽⡀⠀⠀⠀⢀⡀⠀⣀⣀⣀⣰⣰⣰⣰⣰⣰⣰⣀⠀⠀⠀⣨⣿⠁⠃⠃⠃⠃⠃⠃⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠋⠿⣽⣼⣾⠿⠏⠏⠏⠏⠃⠃⠃⠃⠃⠃⠁⠊⠏⠿⠼⠾⠿⠅⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀

-->

<body class="bg-gray-900" data-scroll-container>

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
    <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
      <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8 animate-fade">
        <div class="mt-24 sm:mt-32 lg:mt-16">
          <a class="inline-flex space-x-6">
            <span class="rounded-full bg-blue-500/10 px-3 py-1 text-sm font-semibold leading-6 text-blue-300 ring-1 ring-inset ring-indigo-500/20">✨ Nerimity now as new platform ✨</span>
          </a>
        </div>
        <h1 class="mt-10 text-4xl font-bold tracking-tight text-white sm:text-6xl animate-fade animate-delay-250">A Bridge Between All Platforms</h1>
        <p class="mt-6 text-lg leading-8 text-gray-300 animate-fade animate-delay-500">Astroid enables seamless integration of Discord, Guilded, Nerimity, and Revolt servers. Messaging across platforms, fostering streamlined communication on community growth. Expand your reach and engage with a broader audience, accelerating online community development.</p>
        <div class="mt-10 flex items-center gap-x-5">
          <a href="/invite" class=" flex-1 text-center rounded-md bg-blue-900 px-3.5 py-2.5 text-sm font-semibold text-blue-300 shadow-sm hover:bg-blue-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-400"><i class="fa-solid fa-link"></i> Get Astroid</a>
          <a href="https://github.com/astroid-app" class=" flex-1 text-center rounded-md bg-blue-900 px-3.5 py-2.5 text-sm font-semibold text-blue-300 shadow-sm hover:bg-blue-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-400"><i class="fa-brands fa-github"></i> View on GitHub</a>
        </div>
        <div class="mt-5 flex items-center gap-x-5">
          <a href="https://api.astroid.cc/discord" class=" flex-1 text-center rounded-md bg-blue-900 px-3.5 py-2.5 text-sm font-semibold text-blue-300 shadow-sm hover:bg-blue-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-400"><i class="fa-brands fa-discord"></i> Join Discord</a>
          <a href="https://ko-fi.com/astroidapp" class=" flex-1 text-center rounded-md bg-blue-900 px-3.5 py-2.5 text-sm font-semibold text-blue-300 shadow-sm hover:bg-blue-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-400"><i class="fa-solid fa-circle-dollar-to-slot"></i> Support Us</a>
        </div>
      </div>
      <div class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32 animate-fade-left">
        <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
          <img src="/placeholder.png" alt="App screenshot" width="2432" height="1442" class="w-[76rem] rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10">
        </div>
      </div>
    </div>
  </div>

  <!--
  <hr class="border-t-2 border-gray-700 w-full bg-gray-900">
-->

  <section id="stats-section" class="bg-gray-900 py-16" >
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-bold text-white">Current statistics</h2>
      <div class="mt-12 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <div class="p-6 bg-gray-800 rounded-lg shadow-lg animate-fade animate-fill-forwards">
          <h3 class=" text-lg font-medium text-white" id="total-messages-num">-</h3>
          <p class="mt-2 text-base text-gray-300"><i class="fa-solid fa-message"></i> Total messages</p>
        </div>
        <div class="p-6 bg-gray-800 rounded-lg shadow-lg animate-fade animate-fill-forwards">
          <h3 class=" text-lg font-medium text-white" id="messages-month-num">-</h3>
          <p class="mt-2 text-base text-gray-300"><i class="fa-solid fa-message"></i> Total messages this month</p>
        </div>
        <div class="p-6 bg-gray-800 rounded-lg shadow-lg animate-fade animate-fill-forwards">
          <h3 class=" text-lg font-medium text-white" id="total-servers-num">-</h3>
          <p class="mt-2 text-base text-gray-300"><i class="fa-solid fa-server"></i> Total servers</p>
        </div>
      </div>
    </div>
  </section>

  <section class="relative py-16 dark:bg-gray-900 bg-gray-800 border-t-2 border-b-2 border-gray-700" id="our-team">
    <div class="absolute inset-0">
      <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" style="stop-color:rgb(61,96,255);stop-opacity:0.9" />
            <stop offset="100%" style="stop-color:rgb(52, 213, 235);stop-opacity: 0.9em;" />
          </linearGradient>
          <filter id="blur" x="-50%" y="-50%" width="200%" height="200%">
            <feGaussianBlur in="SourceGraphic" stdDeviation="40" />
          </filter>
        </defs>
        <rect width="100%" height="100%" fill="url(#grid)" />
        <circle cx="30%" cy="30%" r="20%" fill="url(#grad1)" filter="url(#blur)" opacity="0.5" />
        <circle cx="70%" cy="70%" r="25%" fill="url(#grad1)" filter="url(#blur)" opacity="0.5" />
        <circle cx="50%" cy="50%" r="15%" fill="url(#grad1)" filter="url(#blur)" opacity="0.5" />
      </svg>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-bold text-white dark:text-gray-900">Dashboard (coming soon)</h2>
      <p class="text-1xl font-bold text-white dark:text-gray-900">Our upcoming dashboard will provide real-time analytics, user management, and seamless integration with all your favorite platforms. Stay tuned for more updates!</p>
      <div class="mt-12 grid grid-cols-1 gap-6 sm:grid-cols-3">
        <div class="p-6 bg-gray-900 dark:bg-gray-700 rounded-lg shadow-lg">
          <h3 class=" text-lg font-medium text-white dark:text-gray-900">#general</h3>
          <a class="mt-4 inline-block text-center rounded-md bg-blue-900 px-3.5 py-1 text-sm font-semibold text-blue-300 shadow-sm hover:bg-blue-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-400">Edit channel</a>
        </div>
        <div class="p-6 bg-gray-900 dark:bg-gray-700 rounded-lg shadow-lg">
          <h3 class=" text-lg font-medium text-white dark:text-gray-900">#random</h3>
          <a class="mt-4 inline-block text-center rounded-md bg-blue-900 px-3.5 py-1 text-sm font-semibold text-blue-300 shadow-sm hover:bg-blue-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-400">Edit channel</a>
        </div>
        <div class="p-6 bg-gray-900 dark:bg-gray-700 rounded-lg shadow-lg">
          <h3 class=" text-lg font-medium text-white dark:text-gray-900">#support</h3>
          <a class="mt-4 inline-block text-center rounded-md bg-blue-900 px-3.5 py-1 text-sm font-semibold text-blue-300 shadow-sm hover:bg-blue-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-400">Edit channel</a>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-gray-900 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-bold text-white">Our features</h2>
      <div class="mt-12 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
        <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
          <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 shadow-purple text text-blue-300">
            <i class="fa-solid fa-server"></i>
          </div>
          <h3 class="mt-4 text-lg font-medium text-white">Easily control everything on your Servers</h3>
        </div>
        <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
          <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 shadow-purple text text-blue-300">
            <i class="fa-solid fa-gear"></i>
          </div>
          <h3 class="mt-4 text-lg font-medium text-white">Edit every config value of your endpoint with commands</h3>
        </div>
        <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
          <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 shadow-purple text text-blue-300">
            <i class="fa-regular fa-comments"></i>
          </div>
          <h3 class="mt-4 text-lg font-medium text-white">Add every channel you want to connect to all other platforms</h3>
        </div>
        <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
          <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 shadow-purple text text-blue-300">
            <i class="fa-solid fa-right-to-bracket"></i>
          </div>
          <h3 class="mt-4 text-lg font-medium text-white">Easily register your Server via Discord</h3>
        </div>
      </div>
    </div>
  </section>


  <?php include 'inc/footer.php'; ?>
</body>
<?php include 'inc/scripts.php'; ?>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const section = document.getElementById('stats-section');

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          getStats();
          observer.unobserve(section);
        }
      });
    }, {
      threshold: 0.1
    });

    observer.observe(section);
  });
</script>
<script>
  async function getStats() {
    const res = await fetch("https://api.astroid.cc/statistics");
    const data = await res.json();

    // animation from https://jshakespeare.com/simple-count-up-number-animation-javascript-react/
    const animationDuration = 1500;
    const frameDuration = 1000 / 60;
    const totalFrames = Math.round(animationDuration / frameDuration);
    const easeOutQuad = t => t * (2 - t);

    const animateCountUp = el => {
      let frame = 0;
      const countTo = parseInt(el.innerHTML, 10);
      const counter = setInterval(() => {
        frame++;
        const progress = easeOutQuad(frame / totalFrames);
        const currentCount = Math.round(countTo * progress);
        if (parseInt(el.innerHTML, 10) !== currentCount) {
          el.innerHTML = currentCount;
        }
        if (frame === totalFrames) {
          clearInterval(counter);
          if (el.id == "total-messages-num") {
            el.innerText = data.messages.total_rounded + "+";
          }

        }
      }, frameDuration);
    };
    document.querySelector("#total-servers-num").innerText = data.endpoints;
    document.querySelector("#total-messages-num").innerText = data.messages.total_rounded;
    document.querySelector("#messages-month-num").innerText = data.messages.month;

    animateCountUp(document.querySelector('#total-servers-num'));
    animateCountUp(document.querySelector('#total-messages-num'));
    animateCountUp(document.querySelector('#messages-month-num'));

    document.querySelector("#total-servers-num").innerText = document.querySelector("#total-messages-num").innerText + "+";
  }
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