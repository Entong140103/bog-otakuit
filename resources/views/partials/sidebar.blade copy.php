<aside id="sidebar">
    <div class="d-flex">
        <button id="toggle-btn" type="button">
        <i class="lni lni-dashboard-square-1"></i>
        </button>

        <div class="sidebar-logo">
            <a href="#">halooo</a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="/" class="sidebar-link">
                <i class="bi bi-house"></i>
            <span>Home</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
            <i class="lni lni-agenda"></i>
            <span>Taks</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                <i class="bi bi-bookmarks-fill"></i>
                <span>Category</span>
            </a>
            <ul id="auth" class="sidebar-dropdown list-unstyled collapse"  data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="/login" class="sidebar-link">Anime</a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Game</a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">IT</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
            <i class="bi bi-shield-check"></i>
                <span>Auth</span>
            </a>
            <ul id="auth" class="sidebar-dropdown list-unstyled collapse"  data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="/login" class="sidebar-link">Login</a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Register</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
             <a href="#" class="sidebar-link has-dropdown collapsed"  data-bs-toggle="collapse" data-bs-target="#multi" aria-expanded="false" aria-controls="multi"">
                 <i class="lni lni-layout-9"></i>
                    <span>Multi Level</span>
            </a>
             <ul id="multi" class="sidebar-dropdown list-unstyled collapse"  data-bs-parent="#sidebar">
                 <li class="sidebar-item">
                    <a href="#" class="sidebar-link  collapsed " data-bs-toggle="collapse" data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two"">
                     Two Links
                    </a>
                    <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                        <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 1</a>
                        </li>
                        <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 2</a>
                        </li>
                    </ul>
                  </li>
             </ul>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
            <i class="bi bi-bell"></i>
            <span>Notifikation</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
            <i class="bi bi-gear-wide-connected"></i>
            <span>Setting</span>
            </a>
        </li>

    </ul>
    <div class="sidebar-footer">
            <a href="#" class="sidebar-link">
            <i class="bi bi-box-arrow-left"></i>
                <span>Logout</span>
            </a>
        </div>
</aside>
