<li class="nav-item">
    <a href="#" class="nav-link">
    <i class="nav-icon fas fa-tags">   </i>
    <p>
        Tags
        <i class="right fas fa-angle-left"></i>
    </p>
    </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ route('tags.index') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>List of Tags</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('tags.create') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>New Tag</p>
      </a>
    </li>
    
  </ul>
</li>