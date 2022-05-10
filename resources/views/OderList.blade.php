<html>
    <head>

    </head>
    <body style="background-color:Dodgerblue; max-width: max-content; margin: left;">
    <h1>Oder List<h1>
            <table class="table table-borded">
            <tr>
                <td>Serial</td> <br>
                <td>Product Name</td> <br>
                <td>Product Id</td> <br>
                <td>Customer Name</td> <br>
                <td>Customer Mail</td> <br>
                <td>Purching Date</td> <br>
                <td>Quantity</td> <br>
                <td>Price</td> <br>
                <td>Delivery Address</td> <br>
                <td> Action </td> 

             </tr>
      <?php $i=1; ?>
      @foreach($oder as $p)
          <tr>
                <td>{{$i}}</td> <br>
                <td>{{$p->product_name}}</td> <br>
                <td>{{$p->product_id}}</td> <br>
                <td>{{$p->customer_name}}</td> <br>
                <td>{{$p->customer_mail}}</td> <br>
                <td>{{$p->purching_date}}</td> <br>
                <td>{{$p->quantity}}</td> <br>
                <td>{{$p->price}}</td> <br>
                <td>{{$p->delivery_address}}</td> <br>
                
          

          <td><a href="/OderListConfirm/{{$p->id}}"><h5 style="color:rgb(0, 0, 255);">Confirm</h5></td>
          <?php $i++; ?>
      </tr>   
      @endforeach
    

  </table>
  <br><br><br>

    </body>
</html>