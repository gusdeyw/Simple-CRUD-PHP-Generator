<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <title>Login | SCP-G</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css"
        integrity="sha512-KulI0psuJQK8UMpOeiMLDXJtGOZEBm8RZNTyBBHIWqoXoPMFcw+L5AEo0YMpsW8BfiuWrdD1rH6GWGgQBF59Lg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!--Replace with your tailwind.css once created-->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"
        integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-800">
    <div class="w-3/6 mx-auto mt-10">
        <div class="rounded-t-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h3 class="font-bold pl-2">Login <i class="em em-dart" aria-role="presentation" aria-label="DIRECT HIT"></i>
            </h3>
        </div>
        <div class="bg-gray-100 p-6 rounded-b-3xl">
            <form class="">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Username
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="Username">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" type="password" placeholder="******************">
                    <!-- <p class="text-red-500 text-xs italic">Please choose a password.</p> -->
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="button">
                        Sign In
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                        Forgot Password?
                    </a>
                </div>
            </form>
        </div>
        <p class="mt-5 text-center text-white text-md">
            &copy;2023 Dualima Creative. All rights reserved.
        </p>
    </div>
</body>

</html>