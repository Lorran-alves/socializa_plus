<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">

          <a href="{{route('web.home')}}" class="logo active">
            <img src="{{asset("web_assets/img/logo.png")}}" alt="" height="42" width="42">
          </a>

          <ul class="nav">
            @php
              $categories = \App\Models\Category::all();
              $array = ['TikTok', 'Youtube', 'Kwai', 'Facebook', 'Instagram']
            @endphp
            @foreach($categories as $category)
              @if(!$category->manual && in_array($category->title, $array))

                <li class="nav-item mauto" aria-current="page">
                  <a class="nav-link" href="{{ route('web.categories.show', ['slug' => $category->slug]) }}"
                    style="padding: 0">{{ $category->title }}</a>
                </li>

              @elseif(!$category->manual)

                <?php $categoriesForDropdown[] = $category; ?>

              @endif
            @endforeach
           
            <li class="nav-item mauto">
              <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                          data-bs-toggle="dropdown" aria-expanded="false" style="    background: #A54800;
                          border-radius: 16px;
                          padding: 5px 15px;
                          border: none;">
                      + Serviços
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      @foreach($categoriesForDropdown as $category)
                        <li>
                            <a class="dropdown-item"
                                href="{{ route('web.categories.show', ['slug' => $category->slug]) }}">
                                {{$category->title}}
                            </a>
                        </li>
                      @endforeach     
                  </ul>
              </div>
            </li>
  
            <li class="nav-item mauto">
              <button data-bs-toggle="modal" data-bs-target="#pedido" style="    background: #A54800;
              border-radius: 16px;
              padding: 5px 25px;
              border: none;
              color:white;">
                <i class="fa-solid fa-magnifying-glass icon-pedido"></i> Pedidos</button>
            </li>

          </ul>        
          <a class='menu-trigger'>
              <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>