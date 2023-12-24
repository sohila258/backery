let email = document.getElementById("email").value; 
let subscribe=document.getElementById("subscribe")
let tthh = document.getElementById("tthh"); 
let Done = document.getElementById("Done"); 

if( email!=null ){
    subscribe.addEventListener("click",function(){
        tthh.classList.toggle('hidden')
    
    });
}   

Done.addEventListener("click",function(){
    tthh.classList.toggle('hidden')
    document.getElementById("email").value = ''; // Clear the email input box


});
let cartCount = 0;

function addToCart() {
    cartCount++;
    updateCartCount();
}

function updateCartCount() {
    // Update the cart count in the HTML
    document.getElementById("cart-count").innerText = cartCount;
}






















    
