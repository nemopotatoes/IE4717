// form
const orderForm = document.getElementById('order-form');

// quantities
const qtyJustJava = document.getElementById('qty-just-java');
const qtyCafeAuLait = document.getElementById('qty-cafeaulait');
const qtyCappuccino = document.getElementById('qty-cappuccino');

// radio elements (just justjava)
const justJava = document.getElementById('endless-just-java')

// subtotals
const subJustJava = document.getElementById('subtotal-just-java');
const subCafeAuLait = document.getElementById('subtotal-cafeaulait');
const subCappuccino = document.getElementById('subtotal-cappuccino');

// total price
const totalPrice = document.getElementById('total-price');

/** calculate total & subtotals of items */

orderForm.addEventListener("change", () => {
    if (justJava.checked) {
        const priceJustJava = parseFloat(justJava.value);
        console.log(priceJustJava);
        const qtyOrderedJustJava = parseInt(qtyJustJava.value);
        subJustJava.textContent = calculateSubtotal(priceJustJava, qtyOrderedJustJava);
    }

    if (getCafeAuLaitPrice()) {
        const priceCafeAuLait = getCafeAuLaitPrice();
        const qtyOrderedCafeAuLait = parseInt(qtyCafeAuLait.value);
        subCafeAuLait.textContent = calculateSubtotal(priceCafeAuLait, qtyOrderedCafeAuLait);
    }

    if (getCappucinoPrice()) {
        const priceCappuccino = getCappucinoPrice();
        const qtyOrderedCappuccino = parseInt(qtyCappuccino.value);
        subCappuccino.textContent = calculateSubtotal(priceCappuccino, qtyOrderedCappuccino);
    }

    totalPrice.textContent = parseFloat(subJustJava.textContent) +
    parseFloat(subCafeAuLait.textContent) +
    parseFloat(subCappuccino.textContent);
})

function calculateSubtotal(price, qty) {
    return (price * qty);
}

function getCafeAuLaitPrice() {
    for (let i = 0; i < orderForm.cafeaulait.length; i++) {
        if (orderForm.cafeaulait[i].checked) {
            return (parseFloat(orderForm.cafeaulait[i].value));
        }
    }
}

function getCappucinoPrice() {
    for (let i = 0; i < orderForm.cappuccino.length; i++) {
        if (orderForm.cappuccino[i].checked) {
            return (parseFloat(orderForm.cappuccino[i].value));
        }
    }
}

