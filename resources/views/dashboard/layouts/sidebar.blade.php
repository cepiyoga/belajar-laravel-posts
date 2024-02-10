<div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
          <svg class="bi"><use xlink:href="#house-fill"/></svg>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/posts">
          <svg class="bi"><use xlink:href="#file-earmark"/></svg>
          My Post
        </a>
      </li>
      </ul>

      
      @can('admin')
        
      
      <hr class="my-3">
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted  ">
        <span>Administrator</span>
      </h6>

      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/categories">
                <i class="bi bi-ui-radios-grid text-black"></i> Post Category
          </a>
        </li>
      </ul>
      @endcan
      
    <hr class="my-3">

    <ul class="nav flex-column mb-auto">
      
      <li class="nav-item mx-3">
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
        </form>
      </li>
    </ul>
</div>