<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('admin.main.index') }}" class="nav-link {{ (request()->is('admin')) ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Главная</p>
    </a>
</li>
