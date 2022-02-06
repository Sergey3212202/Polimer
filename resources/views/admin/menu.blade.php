<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('admin.users.index') }}" class="nav-link text-white">
                <i class="nav-icon fas fa-table"></i>
                <p>Пользователи</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.products.index') }}" class="nav-link text-white">
                <i class="nav-icon fas fa-table"></i>
                <p>Продукты</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.orders.index') }}" class="nav-link text-white">
                <i class="nav-icon fas fa-table"></i>
                <p>Заказы</p>
            </a>
        </li>
{{--        <li class="nav-item">--}}
{{--            <a href="{{ route('admin.orders.index') }}" class="nav-link">--}}
{{--                <i class="far fa-circle nav-icon"></i>--}}
{{--                <p>Orders</p>--}}
{{--            </a>--}}
{{--        </li>--}}
    </ul>
</nav>
<!-- /.sidebar-menu -->
