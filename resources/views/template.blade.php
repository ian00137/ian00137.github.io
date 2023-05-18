<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ian00137 | {{ $title }}</title>
    <link rel="stylesheet" href="http://www.ian00137.test/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body class="flex admin">
    <nav id="navbar" class="flex-column bg-primary pdx-2 border-box">
        <div id="nav-mobile" class="flex-betwen flex-align pd-2">
            <p>Admin</p>
            <button class="pd-1" id="nav-button" onclick="navButtonClick()">
                <svg viewBox="0 0 175 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.39395 7.63635H167.758" stroke-width="13.3636" stroke-linecap="round"/>
                    <path d="M7.39395 52.1818H167.758" stroke-width="13.3636" stroke-linecap="round"/>
                    <path d="M7.39395 96.7273H167.758" stroke-width="13.3636" stroke-linecap="round"/>
                </svg>     
            </button>
        </div>



        <div id="nav-content" class="nav-trigger flex-column bg-primary pd-2 flex-betwen border-box">
            <div class="flex-column">
                <a href="/profil" class="pd-2 w-auto mgy-1 br-1 @if ($title == 'Profil') active @endif">Profil</a>
                <a href="/project" class="pd-2 w-auto mgy-1 br-1 @if ($title == 'Project') active @endif">Project</a>
                <a href="/skill" class="pd-2 w-auto mgy-1 br-1 @if ($title == 'Skill') active @endif">Skill</a>
                <a href="/social" class="pd-2 w-auto mgy-1 br-1 @if ($title == 'Sosmed') active @endif">Sosial</a>
            </div>
            <div class="flex-column">
                <a href="/logout" class="pd-2 w-auto mgy-1 br-1">Logout</a>
            </div>
        </div>
    </nav>

    <div class="project flex-column pd-2 border-box w-100" id="admin">
        @yield('content')
    </div>
    <script src="http://www.ian00137.test/script.js"></script>
</body>

</html>