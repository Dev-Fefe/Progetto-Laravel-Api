<x-layout>
   {{-- main  --}}
   <main>
       {{-- section  --}}
       <section class="container-fluid my-5">
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <h1>{{ $detail['title'] }}</h1>
                    <img src="{{ $detail['image'] }}" class="img-fluid" alt="{{ $detail['title'] }}">
                    <p class="mt-3">Descrizione: {{ $detail['description'] }}</p>
                    <p>Prezzo: ${{ $detail['price'] }}</p>
                    <p>Categoria: {{ $detail['category'] }}</p>
                </div>
            </div>
        </div>
       </section>
   </main>





        <!-- footer  -->
   <div class="container-fluid" id="footerDark">
       <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 text-light">
         <p class="col-md-4 mb-0 text-footer">&copy; 2024 Company, Inc</p>
 
         <a class="navbar-brand text-footer" href="{{route('homepage')}}">Agency</a>
     
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