# JavaScript-Warenkorb-Example ![data](https://img.shields.io/badge/Status-development-orange.svg)
A simple example of an shopping page

## Javascript and Jquery functions
**Update the number from the shopping basket**
```javascript
document.getElementById("chart").innerHTML = "(" + countClick + ")";
```

**Get the src attribut from the img element**
```javascript
$(this).find("img").attr("src")
```

**Find the element with the class "panel-heading" and search on this the element with the class "productName". From the child element it will grab the property "innerHTML" which is the plain text**
```javascript
$(this).find(".panel-heading").find(".productName").prop("innerHTML")
```
**Get the price of the selected Product**
```javascript
$(this).find(".panel-body").find(".price").prop("innerHTML")
```

**Get the id of the selected Product**
```javascript
$(this).find(".panel-heading").find("input").attr("value")
```
## Version
1.0

## Authors
[Luca Marti](https://www.luca-marti.ch)
Software Developer

## License
You can use this code for free. It would be great, if you mentioning me in your documentation/readme. :)

