// Load all products when page opens
fetch("http://localhost/backend/get_products.php")
.then(res => res.json())
.then(data => {

let output="";

data.forEach(product => {

output += `
<div class="product">
<h3>${product.name}</h3>
<p>Price: ${product.price}</p>
<button onclick="addToCart(${product.id})">Add to Cart</button>
</div>
`;

});

document.getElementById("products").innerHTML = output;

});


// CATEGORY FILTER FUNCTION
function filterProducts(){

let category = document.getElementById("categoryFilter").value;

fetch("http://localhost/automotive-parts-ecommerce/backend/get_products.php").then(res => res.json())
.then(data => {

let output="";

data.forEach(product => {

output += `
<div class="product">
<h3>${product.name}</h3>
<p>Price: ${product.price}</p>
<button onclick="addToCart(${product.id})">Add to Cart</button>
</div>
`;

});

document.getElementById("products").innerHTML = output;

});

}