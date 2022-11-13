<li class="nav-item">
    <a href="#" class="nav-link">
    <i class="nav-icon fas fa-archive">   </i>
    <p>
        Categories
        <i class="right fas fa-angle-left"></i>
    </p>
    </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ route('categories.index') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>List of Category</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('categories.create') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>New Category</p>
      </a>
    </li>
    
  </ul>
</li>