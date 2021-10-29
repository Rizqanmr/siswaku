<!-- Navigation -->
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <div class="container">
        <div class="navbar-header"> 
           
            <a class="navbar-brand" href="/"><img src="img/laravel.png" width="20" height="20">SiswakuApp</a>
        </div>

            <ul class="nav navbar-nav">
                @if (!empty($halaman) && $halaman == 'siswa')
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('siswa') }}">Siswa
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('siswa') }}">Siswa</a>
                </li>
                @endif

                @if (!empty($halaman) && $halaman == 'about')
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('about') }}">About
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('about') }}">About</a>
                </li>
                @endif

                @if (!empty($halaman) && $halaman == 'profile')
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('profile') }}">Profile
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('profile') }}">Profile</a>
                </li>
                @endif

                @if (!empty($halaman) && $halaman == 'contact')
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('contact') }}">Contact
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                </li>
                @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><button href="#" class="btn btn-outline-primary">Login</button></li>
                <li class="dropdown"></li>
            </ul>
            

    </div>

</nav>