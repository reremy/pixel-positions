<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-hanken-grotesk bg-black pb-10 text-white">

    <div class="px-10">
        <nav class="flex items-center justify-between border-b border-white/10 py-4">
            <div>
                <a href="/"> <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt=""></a>
            </div>


            <div class="space-x-6 font-bold">
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>

            @auth
                <div>
                    <a href="/jobs/create">Post a job</a>

                    <form method="POST" action="/logout">
                        @csrf
                        <button>Log Out</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="">
                    <a href="/register">Register</a>
                    <a href="/login">Log In</a>
                </div>

            @endguest

        </nav>
    </div>

    <main class="mx-auto mt-10 max-w-[986px] px-10">
        {{ $slot }}
    </main>

</body>

</html>
