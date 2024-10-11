const product = [
    {
        id: 0,
        image: 'images/dom-tab-10-.png',
        title: 'Domperidone Tablet 10 Mg',
        price: 340.00,
    },
    {
        id: 1,
        image: 'images/paracetamol-tablet.png',
        title: 'paracetamol-tablet',
        price: 10.00,
    },
    {
        id: 2,
        image: 'images/Amoxicive.png',
        title: 'Amoxicive',
        price: 100.00,
    },
    {
        id: 3,
        image: 'images/Azithramicin.png',
        title: 'Azithramicin',
        price: 71.00,
    },
    {
        id: 4,
        image: 'images/Rubeprazole.png',
        title: 'Rubeprazole',
        price: 168.00,
    },
    {
        id: 5,
        image: 'images/Cefixime.png',
        title: 'Cefixime',
        price: 65.00,
    },
    {
        id: 6,
        image: 'images/Azithramicin.png',
        title: 'Azithramicin',
        price: 71.00,
    },
    {
        id: 7,
        image: 'images/Azithramicin.png',
        title: 'Azithramicin',
        price: 71.00,
    },
    {
        id: 8,
        image: 'images/Azithramicin.png',
        title: 'Azithramicin',
        price: 71.00,
    },
    {
        id: 9,
        image: 'images/Azithramicin.png',
        title: 'Azithramicin',
        price: 71.00,
    }
];
const categories = [...new Set(product.map((item) => { return item }))]
let i = 0;
document.getElementById('root').innerHTML = categories.map((item) => {
    var { image, title, price } = item;
    return (
        `<div class='box'l>
            <div class='img-box'>
                <img class='images' src=${image}></img>
            </div>
            <div class='bottom'>
                <p>${title}</p>
                <h2>₹ ${price}</h2>` +
        "<button onclick='addtocart(" + (i++) + ")'>Add to cart</button>" +
        `</div>
        </div>`
    )
}).join('')

var cart = [];

function addtocart(a) {
    cart.push({ ...categories[a] });
    displaycart();
}
function delElement(a) {
    cart.splice(a, 1);
    displaycart();
}

function displaycart(a) {
    let j = 0, total = 0;
    document.getElementById("count").innerHTML = cart.length;
    if (cart.length == 0) {
        document.getElementById('cartitem').innerHTML = "your cart is empty";
        document.getElementById("total").innerHTML = "₹ " + 0 ;
    }
    else {
        document.getElementById("cartitem").innerHTML = cart.map((item) => {
            var { image, title, price } = item;
            total = total + price;
            document.getElementById("total").innerHTML = "₹" + total ;
            return (
                `<div class='cart-item>
                <div class='row-img>
                <img class='rowing' src=${image} style="height: 90px; width: 90px;border-radius: 30%;">
                <p style='font-size:12px;'>${title}</p>
                <h2 style='font-size: 15px;'>₹${price}</h2>` +
                "<i class='fa-solid fa-trash' onclick='delElement(" + (j++) + ")'></i></div>"
            );
        }).join('');
    }
}