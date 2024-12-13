const addToCartButtons = document.querySelectorAll(".add-to-cart");

addToCartButtons.forEach((button) => {
    button.addEventListener("click", addToCart);
});

function addToCart(event) {
    const productId = event.target.getAttribute("product-id");
    console.log(productId)
    const existingItems = JSON.parse(localStorage.getItem("cart")) || [];
    const existingItem = existingItems.find((item) => item.id === productId);

    if (!existingItem) {
        existingItems.push({ id: productId });
        localStorage.setItem("cart", JSON.stringify(existingItems));
        alert("Product added to the cart!");
    } else {
        alert("Product is already in the cart!");
    }
}
