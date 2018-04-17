//Task 1
function sum(a,b) {
    if (typeof a != "number") a = 0;
    if (typeof b != "number") b = 0;
    return a+b;
}
console.log(sum(2,3))
console.log(sum(2,"123"))
console.log(sum(2,"asd"))
console.log(sum(2,"asd"))

//Task 2
var object = {
    variableOne: 1,
    variableTwo: 2
}
console.log(object)

//Task 3
var arr = new Array("Apples","Banana");
arr.push("Potato")
console.log(arr)

//Task 4
document.body.onclick = function(){
    console.log("This is body")
}

//Task 5
var obj = { a:12, b:56 };
obj.emptyArray = []
console.log(obj)