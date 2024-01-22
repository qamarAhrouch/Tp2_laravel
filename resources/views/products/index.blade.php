<h1>All products</h1>
<button>
    <a href="{{route('products.deleteAll.truncate')}}" >delete all</a>
</button>
<button>
    <a href="{{route('products.create')}}">Insert prd</a>
</button>
<table border="2">
    <tr>
        <th>#</th>
        <th>libelle</th>
        <th>marque</th>
        <th>prix</th>
        <th>stock</th>
        <th>image</th>
        <th>op</th>
    </tr>
    @foreach($prds as $prd)
        <tr>
            <td>{{$prd->id}}</td>
            <td>{{$prd->libelle}}</td>
            <td>{{$prd->marque}}</td>
            <td>{{$prd->prix}}</td>
            <td>{{$prd->stock}}</td>
            <td>{{$prd->image}}</td>
            <td>
                <button>
                    <a href="{{ route('products.edit', $prd->id) }}">edit</a>
                </button>
                <button>
                    <a href="{{route('products.delete', $prd->id)}}">delete</a>
                </button>
            </td>
        </tr>
    @endforeach

</table>

