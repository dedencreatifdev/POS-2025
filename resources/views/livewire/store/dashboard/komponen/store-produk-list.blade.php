<div>
    <div class="mt-4 row">
        <div class="col">
            <h5 class="card-title text-bold">Semua Produk </h5>
            <p class="text-bold"></p>
        </div>
        <div class="text-right col">
            <p>Lihat Semua</p>
        </div>
    </div>

    <div class="m-0 row">
        @foreach ($produks_list as $item)
            <a href="#">
                <div class="px-1 py-0 col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                    <div class="my-1 card">
                        <img src="https://m.media-amazon.com/images/I/81o0nv1qK1L._AC_UF1000,1000_QL80_.jpg"
                            class="card-img-top" alt="{{ substr($item->name, 0, 18) }}">

                        <div class="ribbon-wrapper ribbon-md">
                            <div class="text-sm ribbon bg-success">
                                25%
                            </div>
                        </div>

                        <div class="p-1 card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="text-sm card-title text-bold text-dark">
                                        {{ substr($item->name, 0, 18) }}
                                    </h5>
                                </div>
                                <div class="col-12">
                                    Rp{{ number_format($item->price / 1000, 0) }}K
                                </div>
                                <div class="col">
                                    {{ substr($item->name, 0, 18) }}
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
