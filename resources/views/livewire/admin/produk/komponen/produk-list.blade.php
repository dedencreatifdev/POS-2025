<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Monthly Recap Report</h5>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                <i class="fas fa-wrench"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <a class="dropdown-divider"></a>
                                <a href="#" class="dropdown-item">Separated link</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="p-0 card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>
                                        <div class="d-none d-sm-block">
                                            Satuan
                                        </div>
                                    </th>
                                    <th>
                                        <div class="d-none d-sm-block">
                                            Merk
                                        </div>
                                    </th>
                                    <th class="text-center">Harga</th>
                                    <th>Stok</th>
                                    <th class="text-center">Hpp</th>
                                    <th>
                                        <div class="d-none d-sm-block">
                                            Gudang
                                        </div>
                                    </th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produks as $item)
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $item->relProdukDetail->code }}</td>
                                        <td>
                                            {{ $item->relProdukDetail->name }}

                                        </td>
                                        <td>
                                            <div class="d-none d-sm-block">
                                                {{ $item->relProdukDetail->relSatuan->name }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-none d-sm-block">
                                                {{ $item->relProdukDetail->brand }}
                                            </div>
                                        </td>
                                        <td class="text-right">{{ number_format($item->relProdukDetail->price, 2) }}</td>
                                        <td class="text-center">{{ number_format($item->quantity, 2) }}</td>
                                        <td class="text-right">{{ number_format($item->avg_cost, 2) }}</td>
                                        <td>
                                            <div class="d-none d-sm-block">
                                                GD204001
                                            </div>
                                        </td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
</div>
