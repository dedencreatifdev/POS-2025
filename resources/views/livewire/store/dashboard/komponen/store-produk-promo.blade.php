<div class="bg-white">
    <div class="p-2 mt-4 row">
        <div class="col">
            <h5 class="card-title text-bold">Promo Hari Ini </h5>
            <p class="text-bold"></p>
        </div>
        <div class="text-right col">
            <p>Lihat Semua</p>
        </div>
        <hr>
    </div>

    <div class="table-responsive">
        <table class="h-auto bg-white">
            <tr>
                @foreach ($produks_promo as $item)
                    <td>
                        <a href="#">
                            <div class="mx-1 my-1 card" style="width: 10rem;">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvCdRF6Uk0-Dc74_oneS-URNGSW1oaarJXpw&s"
                                    class="card-img-top" alt="{{ substr($item->name, 0, 3) }}">

                                <div class="ribbon-wrapper ribbon-md">
                                    <div class="text-sm ribbon bg-danger">
                                        25%
                                    </div>
                                </div>

                                <div class="p-1 text-center card-body">
                                    {{-- <h5 class="text-sm card-title text-bold text-dark">{{ $item->relProdukDetail->name }}</h5>
                                    <br> --}}
                                    <p class="card-text text-dark text-bold">
                                        {{ substr($item->name, 0, 18) }}...
                                        <br>
                                        <code class="text-bold">
                                            <strike>Rp{{ number_format($item->price / 1000, 0) }}K</strike>
                                        </code>
                                        {{-- <br> --}}
                                        <code>

                                            Rp{{ number_format($item->promo_price / 1000 ?? '0', 0) }}K
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

</div>
