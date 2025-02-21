<div class="">
    <div class="mt-4 row">
        <div class="col">
            <h5 class="card-title">Promo Hari Ini </h5>
            <p class="text-bold"></p>
        </div>
        <div class="text-right col">
            <p>Lihat Semua</p>
        </div>
    </div>

    <div class="table-responsive">
        <table class="h-auto bg-white">
            <tr>
                @foreach ($produks_promo as $item)
                    <td>
                        <a href="#">
                            <div class="mx-1 my-1 card" style="width: 10rem;">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvCdRF6Uk0-Dc74_oneS-URNGSW1oaarJXpw&s"
                                    class="card-img-top" alt="{{ $item->name }}">
                                <div class="p-1 text-center card-body">
                                    {{-- <h5 class="text-sm card-title text-bold text-dark">{{ $item->relProdukDetail->name }}</h5>
                                    <br> --}}
                                    <p class="card-text text-dark">
                                        {{ $item->relProdukDetail->name }}
                                        <br>
                                        <code class="text-bold">
                                            <strike>Rp {{ number_format($item->relProdukDetail->price/1000,0) }}K</strike>
                                        </code>
                                        {{-- <br> --}}
                                        <code>

                                            Rp {{ number_format($item->relProdukDetail->promo_price ?? '0',2) }}
                                        </code>
                                    </p>

                                </div>
                            </div>

                        </a>
                    </td>
                @endforeach
            </tr>
        </table>
    </div>

    <div class="m-0 row">
        @foreach ($produks_promo as $item)
            <a href="#">
                <div class="px-1 py-0 col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                    <div class="my-1 card">
                        <img src="https://m.media-amazon.com/images/I/81o0nv1qK1L._AC_UF1000,1000_QL80_.jpg"
                            class="card-img-top" alt="...">
                        <div class="p-1 card-body">
                            <h5 class="text-sm card-title text-bold text-dark">{{ $item->relProdukDetail->name }}</h5>
                            <p class="card-text text-dark">Some quick example text to build on the card title and make
                                up the bulk
                                of
                                the card's
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
