<h1>Add Product </h1>

<form action="/" method ="POST">
  @csrf 
  Product_id : <input type="text"  name="product_id"><br><br>
  Name : <input type="text"  name="name"><br><br>
  Description : <input type="text"  name="description"><br><br>
  price : <input type="text"  name="price"><br><br>
  image_url : <input type="text"  name="image_url"><br><br><br>
  <input type="Submit"  value = "Save"><br>
</form>