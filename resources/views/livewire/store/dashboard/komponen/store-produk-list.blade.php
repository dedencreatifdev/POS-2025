<div>
    <div class="m-0 row">
        <div class="px-1 py-0 mt-3 col ">
            <div class="p-1 my-1 card card-lightblue card-outline">
                <div class="p-1 text-center card-body">
                    <h5 class="text-bold">REKOMENDASI</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="m-0 row">
        @foreach ($produks_list as $item)
            <div class="px-1 py-0 col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                <a href="#">
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
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <div class="m-0 row">
        <div class="px-1 py-0 col ">
            <div class="col-4"></div>
            <div class="col">
                <button type="button" class="btn btn-block btn-default btn-flat">LIHAT SEMUA</button>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</div>
