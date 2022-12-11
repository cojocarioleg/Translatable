<div class="row">
  <div class="col-12">
      @if ($errors->any())
     
          <div class="alert alert-danger">
              <ul class="list-unstyled">
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      
      @if (session()->has('success'))
        <div class="w3-panel w3-green w3-display-container w3-allign">
          <span onclick="this.parentElement.style.display='none'"
          class="w3-button w3-large w3-display-topright">&times;</span>
          <div class="alert-row">
            <div class="alert-row-img">
              <img src="{{ asset('images/checked.png') }}" class="w3-img-allign" alt="">
            </div>
            <h3>{{ session('success') }} </h3>
          </div>
        </div>
      @endif

      @if (session()->has('error'))
      
        <div class="w3-panel w3-red w3-display-container w3-allign">
          <span onclick="this.parentElement.style.display='none'"
          class="w3-button w3-large w3-display-topright">&times;</span>
          <div class="alert-row">
            <div class="alert-row-img">
              <img src="{{ asset('images/alert-red.png') }}" class="w3-img-allign " alt="">
            </div>
            <h3>{{ session('error') }} </h3>
          </div>
        </div>
          
      @endif


  </div>
</div>