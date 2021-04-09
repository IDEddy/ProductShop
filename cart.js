 function myCart() {
var x = document.getElementById("cartTable");
if(x.style.display === "none"){
	x.style.display = "block";
}else{
	x.style.display = "none";
	}
}


/* let locationName = document.getElementById("location-selection").value;
let colourSelection = document.getElementById("colour-selection").value; */
/* let qtySelect = document.querySelector("quantity");
 let quantity = qtySelect.value; 
	 */
$(document).ready(function(){
let name = document.getElementById("item-name").innerText;
let price = document.getElementById("item-cost").innerText;

  $("#addtocart").click(function(){
	  
  alert('item added to cart'); 
    $("ol").append(" <li> " + name + "&emsp; Price: " + price + "</li>.");
  });
});




