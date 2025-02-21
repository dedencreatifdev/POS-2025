<div>
    <div class="row">
        <div class="col">
            <p>Brands</p>
        </div>
        <div class="text-right col">
            <p>Lihat Semua</p>
        </div>
    </div>
    <div class="table-responsive">
        <table class="h-auto bg-white">
            {{-- <tr>
                @for ($i = 0; $i < 24; $i++)
                    <td>
                        <a class="m-1 btn btn-app">
                            <i class="fas fa-edit"></i>
                            <div>
                                <img src="https://www.onepoundeliquid.com/cdn/shop/files/Original-ForestFruits.jpg?v=1711628322&width=533"
                                    class="d-block w-100" alt="slider1">
                                <br>
                                Edit
                            </div>
                        </a>
                    </td>
                @endfor
            </tr> --}}
            <tr>
                @foreach ($merk as $item)
                    <td>
                        <a href="#">
                            <div class="mx-1 my-1 card" style="width: 5rem;">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvCdRF6Uk0-Dc74_oneS-URNGSW1oaarJXpw&s"
                                    class="card-img-top" alt="{{ $item->name }}">
                                <div class="p-1 text-center card-body">
                                    <small class="text-dark">{{ $item->name }}</small>
                                </div>
                            </div>

                        </a>
                    </td>
                @endforeach
            </tr>
        </table>
    </div>
</div>
