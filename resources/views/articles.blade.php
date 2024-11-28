<x-layout>
         <!-- Header -->
         <header class="container-fluid">
            <div class="row vh-100 header text-center text-light align-items-center">
                <div class="col-12">
                    <h1>STORE</h1>
                    <h4>Tutti gli articoli qui per voi.</h4>
                </div>
            </div>
         </header>
    {{-- main  --}}
    <main>
        {{-- section  --}}
        <section class="container-fluid my-5 min-vh-100">
          <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <h1>STORE</h1>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row">
                @if(!empty($articles) && count($articles) > 0)
                @foreach ($articles as $article)
                <div class="col-12 col-md-3 my-3">
                    <x-cards 
                        :img="$article['image']"
                        :name="$article['title']"
                        :price="$article['price']"
                        :id="$article['id']"
                    />
                </div>
            @endforeach
            
            @else
                <div class="col-12">
                    <p>Nessun articolo disponibile.</p>
                </div>
            @endif
            </div>
        </div>

        </section>
    </main>
        <!-- footer  -->
        <div class="container-fluid" id="footerDark">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 text-light">
              <p class="col-md-4 mb-0 text-footer">&copy; 2024 Company, Inc</p>
    
              <a class="navbar-brand text-footer" href="{{route('homepage')}}">store</a>
          
              <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link px-2 text-light">Home</a></li>
                <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link px-2 text-light">Features</a></li>
                <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link px-2 text-light">Pricing</a></li>
                <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link px-2 text-light">FAQs</a></li>
                <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link px-2 text-light">About</a></li>
              </ul>
            </footer>
          </div>
</x-layout>