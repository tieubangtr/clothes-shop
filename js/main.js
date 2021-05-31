let carts = document.querySelectorAll('.add_item');
let price = document.querySelectorAll('.product-price');
let name = document.querySelectorAll('.p-name');

var products = [];

for(let i = 0; i< carts.length; i++){
    let product = {"productId" : (document.getElementsByClassName('add_item')[i].id).toString(), "name": (document.getElementsByClassName('p-name')[i].innerHTML).toString() ,"inCart" : 0, "price": parseInt((document.getElementsByClassName('product-price')[i].id).toString())};
    products.push(product);
    carts[i].addEventListener('click', function(){
        cartNumbers(products[i]);
        totalBilling(products[i]);
    });
}

function onLoadCartNumbers(){
    let productNumbers = localStorage.getItem('cartNumbers');
    if(productNumbers){
        document.querySelector('#cart-items').innerHTML = productNumbers;
    }
}

function cartNumbers(p){
    let productNumbers = localStorage.getItem('cartNumbers');
    
    productNumbers = parseInt(productNumbers);

    if(productNumbers){
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('#cart-items').innerHTML = productNumbers + 1;
    }else{
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('#cart-items').innerHTML = 1;
    }

    setItems(p);
}

function setItems(p){
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    if(cartItems != null){
        if(cartItems[p.productId] == undefined){
            cartItems = {
                ...cartItems,
                [p.productId]:p
            }
        }
        cartItems[p.productId].inCart += 1; 
    }else{
        p.inCart = 1;
        cartItems = {
            [p.productId]:p
        }
    }
    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function totalBilling(p){
    let cartTotal = localStorage.getItem('totalBilling');
    if(cartTotal != null){
        cartTotal = parseInt(cartTotal);
        localStorage.setItem("totalBilling", cartTotal + p.price);
    }else{
        localStorage.setItem("totalBilling", p.price);
    }
}

var orders = [];

function displayCart(){
    let cartItems = localStorage.getItem("productsInCart");
    let total = localStorage.getItem("totalBilling");
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector(".cart-modal-body");
    productContainer.innerHTML = '';
    Object.values(cartItems).map(item => {
        
        productContainer.innerHTML += `
            <div class="form-group" id="cart-${item.productId}">
                <div>
                    <label class="col-form-label">${item.name}: x ${item.inCart}</label>
                    <button type="button" class="btn btn-danger btn-sm" style="float:right; margin-top:7px;" onclick="removeFromCart('${item.productId}')">Xóa</button>
                <div>
            </div>
            <hr>`
    });

    productContainer.innerHTML += `<div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Họ và tên:</label>
                                        <input type="text" class="form-control" id="ordername" name="customername" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Số điện thoại:</label>
                                        <input type="number" class="form-control" id="orderphone" name="customerphone" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Địa chỉ:</label>
                                        <input type="text" class="form-control" id="orderaddress" name="customeraddress" required>
                                    </div>
                                    <div style="text-align:right;">
                                        <h5 class="modal-title" style="color:red;" id="cartTotalPrice">Tổng tiền: ${total} VNĐ</h5>
                                    </div>`
}

function removeFromCart(id){
    console.log(id);
    document.getElementById("cart-" + id).remove();
    let cartItems = JSON.parse(localStorage.getItem("productsInCart"));
    let currentTotalPrice = parseInt(localStorage.getItem("totalBilling"));
    let currentCartNumbers = parseInt(localStorage.getItem("cartNumbers"));
    let price = cartItems[id].price;
    let quantity = cartItems[id].inCart;
    let productPrice = parseInt(price) * parseInt(quantity);
    let newPrice = currentTotalPrice - productPrice;
    let newCartNumber = parseInt(currentCartNumbers) - parseInt(quantity);
    delete cartItems[id];
    console.log(cartItems);
    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
    localStorage.setItem("totalBilling", newPrice);
    localStorage.setItem("cartNumbers", newCartNumber);
    document.getElementById('cart-items').innerHTML = newCartNumber;
    document.getElementById('cartTotalPrice').innerHTML = "Tổng tiền: " + newPrice + " VNĐ";
}

onLoadCartNumbers();