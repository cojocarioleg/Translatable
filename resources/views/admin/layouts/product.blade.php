<li class="nav-item">
    <a href="#" class="nav-link">
    <i class="nav-icon fas fa-edit">   </i>
    <p>
       Products
        <i class="right fas fa-angle-left"></i>
    </p>
    </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ route('products.index') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>List of Products</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('products.create') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>New Product</p>
      </a>
    </li>
    
  </ul>
</li>