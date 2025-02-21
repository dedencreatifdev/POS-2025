<div>
    <div class="table-responsive">
        <table class="bg-white">
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
                        <a class="m-1 text-sm btn btn-app">
                            <i class="fas fa-edit"></i> <small>{{ $item->name }}</small>
                        </a>
                    </td>
                @endforeach
            </tr>
        </table>
    </div>
</div>
