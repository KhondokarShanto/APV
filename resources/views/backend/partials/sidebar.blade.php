<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </li>

            <li>
                <a href="{{ url('/panel') }}" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>

            @if (auth()->user()->type=='admin')
                <li>
                    <a href="{{ url('/show/product') }}"><i class="fa fa-table fa-fw"></i> Products </a>
                </li>
                <li>
                    <a href="{{ url('/show/task') }}"><i class="fa fa-table fa-fw"></i> Task </a>
                </li>
                <li>
                    <a href="{{ url('/show/distributor') }}"><i class="fa fa-table fa-fw"></i> Distributor</a>
                </li>
                <li>
                    <a href="{{ url('/show/supplier') }}"><i class="fa fa-table fa-fw"></i> Supplier</a>
                </li>
                <li>
                    <a href="{{ url('/show/merchandiser') }}"><i class="fa fa-table fa-fw"></i> Merchandiser</a>
                </li>
                <li>
                    <a href="{{ url('/show/requisition/') }}"><i class="fa fa-table fa-fw"></i> Requisition</a>
                </li>
                <li>
                    <a href="{{ url('/show/area') }}"><i class="fa fa-table fa-fw"></i> Area</a>
                </li>
                <li>
                    <a href="{{ url('/show/order') }}"><i class="fa fa-edit fa-fw"></i> Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('role_index') }}"><i class="fas fa-fw fa-folder"></i><span>Roles</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('show.user') }}"><i class="fas fa-fw fa-folder"></i><span>User</span></a>
                </li>
            @elseif (auth()->user()->type=='supplier')
                <li>
                    <a href="{{ url('/show/product') }}"><i class="fa fa-table fa-fw"></i> Products </a>
                </li>
                <li>
                    <a href="{{ url('show/requisition/') }}"><i class="fa fa-table fa-fw"></i> Requisition</a>
                </li>
            @elseif(auth()->user->type=='distributor')
                <li>
                    <a href="{{ url('/show/product') }}"><i class="fa fa-table fa-fw"></i> Products </a>
                </li>
                <li>
                    <a href="{{ url('/show/task') }}"><i class="fa fa-table fa-fw"></i> Task </a>
                </li>
                <li>
                    <a href="{{ url('/show/order') }}"><i class="fa fa-edit fa-fw"></i> Order</a>
                </li>
            @elseif(auth()->user->type=='marchandiser')
                <li>
                    <a href="{{ url('/show/product') }}"><i class="fa fa-table fa-fw"></i> Products </a>
                </li>
                <li>
                    <a href="{{ url('/show/order') }}"><i class="fa fa-edit fa-fw"></i> Order</a>
                </li>
            @endif

        </ul>
    </div>
</div>
