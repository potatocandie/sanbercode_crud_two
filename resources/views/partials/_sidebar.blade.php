<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="#" class="brand-link bg-primary">
        <span class="brand-text font-weight-light"><strong>LARA</strong>HUB</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://picsum.photos/50/50" class="img-circle elevation-2" alt="User Image">

            </div>
            <div class="info">
                <a href="#" class="d-block">Ipin Sanber</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column">

                <li class="nav-item">
                    <a href="{{ route('questions.index') }}"
                        class="nav-link {{ Request::is('pertanyaan') ? 'active' : '' }}">
                        <i class="fa fa-list-alt nav-icon"></i>
                        <p>Questions</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('questions.create') }}"
                        class="nav-link {{ Request::is('pertanyaan/create') ? 'active' : '' }}">
                        <i class="fa fa-comment nav-icon"></i>
                        <p>Ask Something</p>
                    </a>
                </li>

            </ul>
        </nav>

    </div>
</aside>