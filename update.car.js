function modify() {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "update.car.php");

    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
        let message = JSON.parse(this.responseText);
        if (message.status == 1) {
            window.location.replace("carList.php");
        }

        console.log(message);
    }

    let x = document.getElementById("inputValue");

    let id = x.dataset.id;
    let price = x.value;

    let dataSubmitted = "id=$id&price=$price"
        .replace("$id", id)
        .replace("$price", price);

    xhr.send(dataSubmitted);

    console.log({ dataSubmitted, id, price });
}