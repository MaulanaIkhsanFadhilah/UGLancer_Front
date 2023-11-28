<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>UGLancer</title>
</head>

<body>
    <!-- Main modal -->
    @include('layouts.nav-bar')
    @include('layouts.sign-up')
    @include('layouts.sign-in')

    <section
        class="pt-32 bg-gradient-to-r from-purple-800 to-blue-900 hover:bg-gradient-to-l focus:ring-1 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
        <div>
            <img src="{{ URL('assets/person.png') }}" alt="Person">
        </div>
    </section>


    <script type="text/javascript" src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>


</html>
