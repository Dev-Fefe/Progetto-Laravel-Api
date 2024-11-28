<a href="{{ route('detail', ['id' => $id]) }}" class="text-decoration-none">
    <div class="card" style="width: 18rem;">
        <img src="{{ $img }}" class="card-img-top" alt="{{ $name }}">
        <div class="card-body">
            <h5 class="card-title">{{ $name }}</h5>
            <p class="card-text">Prezzo: ${{ $price }}</p>
        </div>
    </div>
</a>
