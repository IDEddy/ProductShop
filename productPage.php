<!DOCTYPE html>
<!--
Edgar Giang

-->
<html>

	<head>
	
	<title>AccessTechList</title>
			<meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="stylesheet.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	  <div>
	  
	  </div>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<script type = "text/javascript"  src = "stacking.js"></script>
	<script type = "text/javascript"  src = "location.js"></script>
	  <script type = "text/javascript"  src = "cart.js"></script>
	  <script type = "text/javascript"  src = "search.js"></script>
	  
	 </head>


	<body>
	
		<div class="sidenav">
		  <a href="#gpu">Home</a>
		  <a href="#gpu">gpus</a>
		  <a href="#cpu">cpus</a>
		  <a href="#Hardrive">hardrives</a>
		  <a href="#Monitors">Monitors</a>
		  <a href="#Cases">Cases</a>
		  <a href="#Fans">Fans</a>
		  <a href="#PSU">PSU</a>
		  <a href="#Motherboards">Motherboards</a>
		  <a href="#RAM">RAM</a>
		  <a href="#Other">Other</a>
		</div>
		
	<div class="page-header">	
			<img src="images/logo.png" alt="..." class="img-fluid">
			<img src="images/title.png" class="img-fluid" alt="Responsive image">   
	</div>

	

	<div class="row">
	 <div class="p-3 col-md-8 offset-md-2">
		<div class="input-group">
			<input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
				aria-describedby="search-addon" onkeyup="showHint(this.value)"  />
			<button type="button" class="btn btn-outline-primary" href="#searchButton">search</button>
		
		</div>
	</div>
		<p id="searchSuggestion"><span id="txtHint"></span></p> 
		<button type="button" class="btn btn-dark p-2 col-md-1 offset-md-9" onclick="myCart()">View Cart</button>
		
	</div> 
	

	
	
	
	<div id="cartTable"  style="display:none"> 
		<ol>
		  <li>Items in Cart:</li>
		 
		</ol>
	</div>
	
	<div class= "product-row">
		<div class="p-3">
			
				<h2 id="item-name">NZXT H510 Compact Atx Mid-Tower PC Gaming Case, Front I/O USB C Port, Tempered Glass Side Panel, Cable Management System</h2>
				
					<img src="https://images-na.ssl-images-amazon.com/images/I/71QSKpbzlQL._AC_SL1500_.jpg" alt="PC PICTURE" class="pc1" id="pc1" width="304" height="236" onclick = "toTop('pc1')">
					<img src="https://m.media-amazon.com/images/S/aplus-media/vc/beb3e83a-d757-4b01-81d3-131e0b7fafa0.__CR0,0,300,300_PT0_SX300_V1___.jpg" alt="PC PICTURE" class="pc2" id="pc2" width="304" height="236" onclick = "toTop('pc2')">
					<img src="https://images-na.ssl-images-amazon.com/images/I/51At-cIHAnL._AC_SL1000_.jpg" alt="PC PICTURE" class="pc3" id="pc3" width="304" height="236" onclick = "toTop('pc3')">
			

	</div>
	
	<div id="dropdown">
		<h2 id="item-cost"> $177.77</h2>
					
							 
		<p>Select colour</p>
		<select name="colour" id="colour" class="form-control input-lg">
			<option value= "white" id="colour-selection">Select colour</option>
		   </select>
		   <br />
		   
		   
		   <p>Select Available Location</p>
		   <select name="location" id="location" class="form-control input-lg">
		   <h4>Available Locations</h4>
			<option value="north york" id="location-selection">Select location</option>
		   </select>
		   <br />
		   
		
				
		
		<h1>Quantity: </h1>
	
		<input class="w3-input w3-border" type="text" placeholder="1" id="quantity">
		
	
		<button type="button" class="btn btn-dark" id="addtocart" >Add to cart</button>
	
				 
		 
			<div class="p-0">
				<h1>Product Description</h1>
				<p>New features: Front I/O USB Type-C Port and Tempered glass side panel with single screw installation
Enhanced cable management: Our patented cable routing kit with pre-installed channels and straps makes wiring easy and intuitive
STREAMLINED COOLING: Two Aer F120mm fans included for optimal internal airflow and the front panel and PSU intakes include removable filters, removable bracket designed for radiators up to 240mm - simplifies the installation of either closed-loop or custom-loop water cooling
Motherboard support: Mini-ITX, MicroATX, and ATX</p>
			
			<p>Features</p>
				<ul class="a">
				  <li>Front I/O USB Type-C Port and Tempered glass side panel with single screw installation</li>
				  <li>Enhanced cable management: Our patented cable routing kit with pre-installed channels and straps makes wiring easy and intuitive</li>
				  <li>Two Aer F120mm fans included for optimal internal airflow and the front panel and PSU intakes include removable filters, removable bracket designed for radiators up to 240mm - simplifies the installation of either closed-loop or custom-loop water cooling</li>
				</ul>
			
			
			</div>
			
	</div>
	
	
	 <br>
    
	
	<div class="srow p-1">
		<h3>similar products</h3>
	</div>
		
		<div class="row">
			<div class="p-1 col-md-3">
		
				<h3>NZXT H510 Compact Atx Mid-Tower PC Gaming Case, Front I/O USB C Port, Tempered Glass Side Panel, Cable Management System</h3>
					<img src="https://images-na.ssl-images-amazon.com/images/I/71QSKpbzlQL._AC_SL1500_.jpg" alt="..." class="rounded mx-auto d-block" width="400" height="300">
			<button type="button" class="btn btn-dark">View
				 </button>
			
			</div>
			
			<div class="p-1 col-md-3">
				<h3>MSI Gaming GeForce GTX 1660 Super 192-bit HDMI/DP 6GB GDRR6 HDCP Support DirectX 12 Dual Fan VR Ready OC Graphics Card</h3>
				<img src="https://images-na.ssl-images-amazon.com/images/I/91iv60t7rQL._AC_SL1500_.jpg" alt="..." class="rounded mx-auto d-block" width="400" height="300">
				<button type="button" class="btn btn-dark">View
				 </button>
			</div>
			
			<div class="p-1 col-md-3">
				<h3>MSI Gaming GeForce GTX 1660 Super 192-bit HDMI/DP 6GB GDRR6 HDCP Support DirectX 12 Dual Fan VR Ready OC Graphics Card</h3>
				<img src="https://images-na.ssl-images-amazon.com/images/I/91iv60t7rQL._AC_SL1500_.jpg" alt="..." class="rounded mx-auto d-block" width="400" height="300">
				<button type="button" class="btn btn-dark">View
				 </button>
			
			</div>
			
				<div class="p-1 col-md-3">
			
				<h3>NZXT H510 Compact Atx Mid-Tower PC Gaming Case, Front I/O USB C Port, Tempered Glass Side Panel, Cable Management System</h3>
					<img src="https://images-na.ssl-images-amazon.com/images/I/71QSKpbzlQL._AC_SL1500_.jpg" alt="..." class="rounded mx-auto d-block" width="400" height="300">
				<button type="button" class="btn btn-dark">View
				 </button>
			</div>
			
		</div>
	

	</body>



</html>