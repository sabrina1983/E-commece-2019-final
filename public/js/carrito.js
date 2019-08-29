window.onload = function(){
    //Este es un javascript muy sencillo que les construi para que puedan ejecuyar el cálculo del total de lo que desean en su carrito de compras. Les puede servir tambien a otros grupos.
    let quantity = document.getElementById("quantity")
    let error = document.getElementById("errorQuantity")
    let subtotal = document.getElementById('subtotal')
    let total = document.getElementById('total')
​
    if (quantity.value === "" || quantity.value === null)
    {
​
        error.innerHTML = "Por favor, seleccione la cantidad deseada"
        error.setAttribute("class","invalid-feedback" )
        quantity.setAttribute("class", "form-control is-invalid")
        quantity.addEventListener("change", change)
        return false;
    }
    //Aquí es donde ejecuto el cambio del total de la compra del cliente, es algo parecido a lo que les indique al equipo de Debru - Trylce y Tomy.
    total.innerText = subtotal.value * quantity
​
​
        function change(){
        error.innerHTML = ""
        error.setAttribute("class","" )
        name.setAttribute("class", "form-control")
        return 
       }
}