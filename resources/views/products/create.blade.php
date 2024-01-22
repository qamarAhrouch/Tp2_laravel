<h1>Its A create blade</h1>
<form action="{{ route('products.insert') }}" method="post">
    @csrf
    @method('post')
    <input type="text" name="libelle" required placeholder="libelle"/><br/>
    <input type="text" name="marque" required placeholder="marque"/><br/>
    <input type="text" name="prix" required placeholder="prix"/><br/>
    <input type="number" name="stock" required min="1" max="9999" placeholder="stock"/><br/>
    <input type="file" name="image" placeholder="image"/><br/>
    <button type="submit">Submit</button>
</form>
