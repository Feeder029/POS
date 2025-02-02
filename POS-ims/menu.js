document.querySelectorAll('.menu-btn').forEach(menuBtn => {
    const inputField = menuBtn.querySelector('input');
    const addBtn = menuBtn.querySelector('#add');
    const subtractBtn = menuBtn.querySelector('#subtract');
    const itemDetail = menuBtn.closest('.menu').querySelector('.menu-detail');
    const itemName = itemDetail.querySelector('h3').innerText;
    const itemPrice = parseFloat(itemDetail.querySelector('p').innerText.replace('₱', '').trim());

    // Initialize the input field value
    inputField.value = 0;

    // Add button click event
    addBtn.addEventListener('click', () => {
        inputField.value = parseInt(inputField.value) + 1;

        // Send the item details to the parent page (mainDashboard.html)
        window.parent.postMessage({
            type: 'add-to-cart',
            name: itemName,
            price: itemPrice
        }, '*');
    });

    // Subtract button click event
    subtractBtn.addEventListener('click', () => {
        if (parseInt(inputField.value) > 0) {
            inputField.value = parseInt(inputField.value) - 1;

            // Send the update to remove the item from the cart if the quantity is 0
            if (inputField.value === 0) {
                window.parent.postMessage({
                    type: 'remove-from-cart',
                    name: itemName,
                    price: itemPrice
                }, '*');
            } else {
                // Send updated quantity (optional)
                window.parent.postMessage({
                    type: 'update-quantity',
                    name: itemName,
                    price: itemPrice,
                    quantity: inputField.value
                }, '*');
            }
        }
    });
});
