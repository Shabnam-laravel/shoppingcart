@include('enest/header1')
		<div class="null">
			
		</div>
		<div class="main-categorious">
			<div class="footer">
			@include('enest/leftcommon1')
				<div class="contact">
					<div class="contact-us">
						<p>Checkout</p>
					</div>
					<div class="dish-info">
						<div class="machine-info">
    <table class="tablepad" width="100%" border="2" align="center"  style="text-align:center;">
			      <tr> 
			        <th>ID</td>
			        <th>User name</td>
				    <th>Product name</td>
			        <th>Quantity</td>
						<th>Product price</td>


			    </tr>
				@php $totalprice=0 @endphp
				@php $totalquantity=0 @endphp


		@foreach($check as $c)
				<tr>
			     <td>{{$c->id}}</td>
				 <td>{{$c->fullname}}</td>
				 <td>{{$c->productname}}</td>
				 <td>{{$c->qty}}</td>
				  <td>{{$c->productprice}}</td> 

			  </tr>
			  @php $totalprice += $c->productprice @endphp
			  @php $totalquantity += $c->qty @endphp


		@endforeach
		<tr>
<th colspan="3">Total</th>
<td>{{$totalquantity}}</td>
<td>{{$totalprice}}</td>

		</tr>
			  </table>
						
						</div>
					</div>
					
				</div>
				@include('enest/footer1')
			</div>
		</div>
	</div>
    <style>
        .tablepad th{
            padding:15px;
        }
        .tablepad td{
            padding:10px;
        }
    </style>
</body>
</html>