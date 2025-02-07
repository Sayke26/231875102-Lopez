// JavaScript for Cart Functionality
let cart = [];
const cartCount = document.getElementById("cart");
const cartModal = document.getElementById("cartModal");
const cartItemsContainer = document.getElementById("cartItems");
const closeCart = document.getElementById("closeCart");

// Update Cart Display
function updateCartDisplay() {
  cartCount.textContent = `Cart (${cart.length})`;

  // Display Cart Items
  cartItemsContainer.innerHTML = '';
  if (cart.length > 0) {
    cart.forEach((item, index) => {
      const cartItemElement = document.createElement("div");
      cartItemElement.textContent = `${item.name} - ₱${item.price}`;
      
      // Add Remove Button
      const removeButton = document.createElement("button");
      removeButton.textContent = "Remove";
      removeButton.addEventListener('click', () => {
        cart.splice(index, 1); // Remove item from cart
        updateCartDisplay(); // Update cart display
      });

      cartItemElement.appendChild(removeButton);
      cartItemsContainer.appendChild(cartItemElement);
    });
  } else {
    cartItemsContainer.textContent = "Your cart is empty.";
  }
}

// Add Item to Cart
document.querySelectorAll('.cta-button').forEach(button => {
  button.addEventListener('click', (e) => {
    const itemName = e.target.getAttribute('data-name');
    const itemPrice = parseFloat(e.target.getAttribute('data-price'));

    cart.push({ name: itemName, price: itemPrice });
    updateCartDisplay();
  });
});

// Open Cart Modal
cartCount.addEventListener('click', () => {
  cartModal.style.display = 'flex';
});

// Close Cart Modal
closeCart.addEventListener('click', () => {
  cartModal.style.display = 'none';
});

// Close cart modal when clicking outside of it
window.addEventListener('click', (e) => {
  if (e.target === cartModal) {
    cartModal.style.display = 'none';
  }
});
