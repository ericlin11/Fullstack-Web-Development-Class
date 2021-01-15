function modify() {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "update.city.php");

    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
        let message = JSON.parse(this.responseText);
        if (message.status == 1) {
            window.location.replace("cityList.php");
        }

        console.log(message);
    }

    let x = document.getElementById("inputValue");

    let cityId = x.dataset.cityId;
    let regionName = x.value;

    let dataSubmitted = "regionName=$name&cityId=$id"
        .replace("$name", regionName)
        .replace("$id", cityId);

    xhr.send(dataSubmitted);

    console.log({ dataSubmitted, cityId, regionName });

}