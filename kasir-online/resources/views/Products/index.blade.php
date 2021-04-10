<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>


<h1>List-List Product</h1>
<div class="bg-white mb-5"><a href="/add"><button type="button" class="btn bg-success" >ADD</button></a></div>
<div class="container">
  <div class="row">
    <div class="col-9" >
      <div class='row'>
      @foreach($products as $product)
        <div class = 'col-sm mr-3' style="background-color:DodgerBlue;">
            <div class='row'><img src="{{$product->image_url}}" class="img-rounded mb-3" alt="Gambar Makanan"></div>
            <div class='row'><p style="text-align:center">{{$product->name}}</p></div>
            <div class='row'><p style="text-align:center">Rp. {{$product->price}}</p></div>
            </div>
        @endforeach
        </div>
    </div>
    <div class="col-3" style="background-color:#fa6900;" >
    <center>  
        <h4 class="text-bold text-center text-dark">Payment Method</h4> 
            <select class="form-control" id="sel1" style="width: 50%;" >
            <option>COD</option>
            <option>E-Money</option>
            <option>Transfer Bank</option>
            <option>Debit/Kredit</option>
            </select>
            <div class="row mt-5 pt-3 rounded-sm" >
              <div class="col"> Delivery Fee</div>
              <div class="col"> Rp20.000</div>
          </div>
          <div class="row" >
              <div class="col"> Products</div>
              <div class="col"> Rp18.628.472</div>
          </div>
          <div class="row pb-3 " >
              <div class="col"> Total</div>
              <div class="col"> Rp18.648.472</div>
          </div>
          <div class="row pb-3 " >
              <div class="col"> <input type="submit" value="Pay"></div>
              <div class="col"><input type="submit" value="Print Bill"></div>
          </div>
    </center>
    </div>
  </div>
</div>


