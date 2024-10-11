// script.js
let cartItems = [];

function updateCart() {
    const cartList = document.getElementById("cart-items");
    cartList.innerHTML = "";

    let totalCost = 0;

    cartItems.forEach(item => {
        const li = document.createElement("li");
        li.textContent = `${item.name} - Quantity: ${item.quantity} - Price: ${item.price * item.quantity} ₹`;
        cartList.appendChild(li);
        totalCost += item.price * item.quantity;
    });

    document.getElementById("total-cost").textContent = `${totalCost.toFixed(2)} ₹`;
}

function addToCart(name, price) {
    const existingItem = cartItems.find(item => item.name === name);

    if (existingItem) {
        existingItem.quantity++;
    } else {
        cartItems.push({ name, price, quantity: 1 });
    }

    updateCart();
}

function checkout() {
    // Implement your checkout logic here
    console.log("Checkout function triggered");
}

// Example usage
addToCart("Medicine A", 10);
addToCart("Medicine B", 15);
//addToCart("Medicine A", 10);
