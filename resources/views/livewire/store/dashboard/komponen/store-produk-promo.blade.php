<div>
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-edit"></i>
                Promo Hari Ini
            </h3>
            <div class="card-tools">
                <a href="#">Lihat Semua</a>
            </div>
        </div>

        <div class="p-0 card-body">
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
    </div>
</div>
