<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('dashboard') }}">
        <i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}
    </a>
</li>
<li class='nav-item'>
    <a class='nav-link' href='{{ backpack_url('user') }}'>
        <i class='nav-icon las la-user-circle'></i> Пользователи
    </a>
</li>
<li class='nav-item'>
    <a class='nav-link' href='{{ backpack_url('position') }}'>
        <i class='nav-icon las la-user-tie'></i> Должности
    </a>
</li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#">
        <i class="nav-icon las la-feather-alt"></i> Статусы
    </a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'>
            <a class='nav-link' href='{{ backpack_url('completion-status') }}'>
                <i class='nav-icon las la-feather'></i> Акт выполненных работ
            </a>
        </li>
        <li class='nav-item'>
            <a class='nav-link' href='{{ backpack_url('application-status') }}'>
                <i class='nav-icon las la-feather'></i> Договора и приложения
            </a>
        </li>
        <li class='nav-item'>
            <a class='nav-link' href='{{ backpack_url('invoice-status') }}'>
                <i class='nav-icon las la-feather'></i> Счет на оплату
            </a>
        </li>
    </ul>
</li>