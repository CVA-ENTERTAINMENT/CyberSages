const imgSlider = document.querySelector('.img-slider');
const items = document.querySelectorAll('.item');
const imgItems = document.querySelectorAll('.img-item');
const infoItems = document.querySelectorAll('.info-item');

const nextBtn = document.querySelector('.next-btn');
const prevBtn = document.querySelector('.prev-btn');

let colors = ['#3674be','#d26181','#ceb13d','#c6414c']
let indexSlider = 0;
let index = 0;

let currentPrice = 0;

function getCart() {
    const cart = localStorage.getItem('cart');
    return cart ? JSON.parse(cart) : [];
}

function saveCart(cart) {
    localStorage.setItem('cart', JSON.stringify(cart));
}

function openPurchaseModal(productName, price) {
    const modal = document.getElementById('purchaseModal');
    const titleElement = document.getElementById('modal-product-title');
    const priceElement = document.getElementById('modal-product-price');
    
    currentPrice = price;
    titleElement.textContent = productName;
    priceElement.textContent = `Price: RM${price.toFixed(2)}`;
    updateTotal();
    
    modal.style.display = 'block';
}

function closeModal() {
    const modal = document.getElementById('purchaseModal');
    modal.style.display = 'none';
    document.getElementById('quantity').value = 1;
}

function increaseQuantity() {
    const qtyInput = document.getElementById('quantity');
    qtyInput.value = parseInt(qtyInput.value) + 1;
    updateTotal();
}

function decreaseQuantity() {
    const qtyInput = document.getElementById('quantity');
    if (parseInt(qtyInput.value) > 1) {
        qtyInput.value = parseInt(qtyInput.value) - 1;
        updateTotal();
    }
}

function updateTotal() {
    const quantity = parseInt(document.getElementById('quantity').value);
    const totalElement = document.getElementById('total-price');
    const total = currentPrice * quantity;
    totalElement.textContent = total.toFixed(2);
}

const slider = () => {
    imgSlider.style.transform = `rotate(${indexSlider * 60}deg)`;

    items.forEach(item => {
        item.style.transform = `rotate(${indexSlider * -60}deg)`;
    });

    document.querySelector('.img-item.active').classList.remove('active');
    imgItems[index].classList.add('active');

    document.querySelector('.info-item.active').classList.remove('active');
    infoItems[index].classList.add('active');

    document.body.style.background = colors[index]
}

nextBtn.addEventListener('click', () => {
    indexSlider++;
    index++;
    if(index > imgItems.length - 1)
    {
        index = 0;
    }

    slider();
});

prevBtn.addEventListener('click', () => {
    indexSlider--;
    index--;
    if(index < 0)
    {
        index = imgItems.length-1;
    }

    slider();
});

document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.close-modal').addEventListener('click', closeModal);
    
    window.addEventListener('click', function(event) {
        const modal = document.getElementById('purchaseModal');
        if (event.target === modal) {
            closeModal();
        }
    });

    document.getElementById('quantity').addEventListener('change', updateTotal);

    document.querySelector('.add-to-cart-btn').addEventListener('click', function() {
        const productName = document.getElementById('modal-product-title').textContent;
        const quantity = parseInt(document.getElementById('quantity').value);
        const price = currentPrice;
        const total = price * quantity;
        
        const cart = getCart();
        cart.push({
            productName,
            quantity,
            price,
            total
        });
        
        saveCart(cart);
        alert(`Added to cart:\n${quantity}x ${productName}\nTotal: RM${total.toFixed(2)}`);
        closeModal();
        updateCartCount();
    });
});