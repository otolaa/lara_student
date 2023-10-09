<!-- need to remove -->
<!--<li class="nav-item">
    <a href="{{ route('admin.main.index') }}" class="nav-link {{ (request()->is('admin')) ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Главная</p>
    </a>
</li>-->
<li class="nav-item">
    <a href="{{ route('admin.user.index') }}" class="nav-link {{ (request()->is('admin/users*')) ? 'active' : '' }}">
        <i class="nav-icon fas fa-user"></i>
        <p>Пользователи</p>
    </a>
</li>
