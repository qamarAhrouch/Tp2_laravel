<h1>Product Edited is : {{$prds->libelle}}</h1>
<form action="{{route('products.update', $prds->id)}}" method="post">
    @csrf
    @method('put')
    <input type="text" name="libelle" value="{{$prds->libelle}}" /> >
    <input type="text" name="marque" value="{{$prds->marque}}"/><br/>
    <input type="text" name="prix" value="{{$prds->prix}}"/><br/>
    <input type="number" name="stock" value="$prds->stock"/><br/>
    <input type="file" name="image" value="{{$prds->image}}"/><br/>
    <button type="submit">edit</button>
</form>
