<header>
    <h1>Gerstner.blog</h1>
    <nav>
        
        <li>
            <a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' :/*else*/'' }}">Home</a>
        </li>
        <li>
            <a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' :/*else*/'' }}">cursos</a>
        </li>
        <li>
            <a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' :/*else*/'' }}">Nosotros</a>
        </li>
            
        <li><a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.index') ? 'active' :/*else*/'' }}">Contactanos</a></li>
        
    </nav>
</header>