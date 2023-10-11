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
<li class="nav-item">
    <a href="{{ route('admin.sgcwts.index') }}" class="nav-link {{ (request()->is('admin/sgcwts*')) ? 'active' : '' }}">
        <i class="nav-icon fas fa-circle"></i>
        <p>Назначение</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.courses.index') }}" class="nav-link {{ (request()->is('admin/courses*')) ? 'active' : '' }}">
        <i class="nav-icon fas fa-circle"></i>
        <p>Курсы</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.groups.index') }}" class="nav-link {{ (request()->is('admin/groups*')) ? 'active' : '' }}">
        <i class="nav-icon fas fa-circle"></i>
        <p>Группы</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.statuses.index') }}" class="nav-link {{ (request()->is('admin/statuses*')) ? 'active' : '' }}">
        <i class="nav-icon fas fa-circle"></i>
        <p>Статус</p>
    </a>
</li>
<!--<li class="nav-header text-uppercase">Настройки</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-cog"></i>
        <p>Системные</p>
    </a>
</li>-->
