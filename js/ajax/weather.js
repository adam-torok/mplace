fetch('https://api.openweathermap.org/data/2.5/weather?id=715429&units=metric&lang=hu&appid=53a8a64a78d4bc026804722d8a88eb29')
.then((response) => {
    return response.json();
})
.then((data) => {
    var name = data['name'];
    var temp = data['main']['temp'];
    var country = data['sys']['country'];
    var desc = data['weather'][0]['description'];
    console.log(data);
    
    $("#temp").text(temp + "C");
    $("#country").text(country);
    $("#city").text(name);
    $("#desc").text(desc);
});
