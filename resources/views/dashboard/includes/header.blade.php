<div class="sidebar-wrapper ">
    <div class="sidebar-header">
    <img src="https://socializaplus.com.br/web_assets/img/logo_footer.png">
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class='sidebar-title'>Menu Socializa Plus</li>
            <li class="sidebar-item {{ isActive('dashboard.index') }}">
                <a href="{{ route('dashboard.index') }}" class='sidebar-link'>
                    <i data-feather="activity" width="20"></i>
                    <span>Gestão de Métricas</span>
                </a>
            </li>
            <li class="sidebar-item {{ isActive('dashboard.comprasMensal') }}">
                <a href="{{ route('dashboard.comprasMensal') }}" class='sidebar-link'>
                    <i data-feather="activity" width="20"></i>
                    <span>Vendas Mensal</span>
                </a>
            </li>
            <li class="sidebar-item {{ isActive('dashboard.purchases.index') }}">
                <a href="{{ route('dashboard.purchases.index') }}" class='sidebar-link'>
                    <i data-feather="shopping-cart" width="20"></i>
                    <span>Pedidos</span>
                </a>
            </li>
            <li class="sidebar-item {{ isActive('dashboard.categories.index') }}">
                <a href="{{ route('dashboard.categories.index') }}" class='sidebar-link'>
                    <i data-feather="edit" width="20"></i>
                    <span>Serviços</span>
                </a>
                </li>
            <li class="sidebar-item {{ isActive('dashboard.cupons.index') }}">
                <a href="{{ route('dashboard.cupons.index') }}" class='sidebar-link'>
                    <i data-feather="tag" width="20"></i>
                    <span>Cupons</span>
                </a>
            </li>
            <li class="sidebar-item {{ isActive('dashboard.provedores.index') }}">
                <a href="{{ route('dashboard.provedores.index') }}" class='sidebar-link'>
                    <i data-feather="server" width="20"></i>
                    <span>Provedores</span>
                </a>
            </li>

        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
