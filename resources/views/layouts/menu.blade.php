<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.products.index') }}" class="nav-link {{ Request::is('dashboard.products*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Products</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.availabilities.index') }}" class="nav-link {{ Request::is('dashboard.availabilities*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Availabilities</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.catalogs.index') }}" class="nav-link {{ Request::is('dashboard.catalogs*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Catalogs</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.serviceTypes.index') }}" class="nav-link {{ Request::is('dashboard.serviceTypes*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Service Types</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.services.index') }}" class="nav-link {{ Request::is('dashboard.services*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Services</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.currencies.index') }}" class="nav-link {{ Request::is('dashboard.currencies*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Currencies</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.rates.index') }}" class="nav-link {{ Request::is('dashboard.rates*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Rates</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.adresseHomes.index') }}" class="nav-link {{ Request::is('dashboard.adresseHomes*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Adresse Homes</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.addressDesks.index') }}" class="nav-link {{ Request::is('dashboard.addressDesks*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Address Desks</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.occupations.index') }}" class="nav-link {{ Request::is('dashboard.occupations*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Occupations</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.appointments.index') }}" class="nav-link {{ Request::is('dashboard.appointments*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Appointments</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dashboard.customEvents.index') }}" class="nav-link {{ Request::is('dashboard.customEvents*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Custom Events</p>
    </a>
</li>
