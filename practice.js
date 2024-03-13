let car = {
    model: "fearari112",
    company: "ferari",
    id:"123",
    functions: function () {
        console.log(`${car.model} is already`)
        console.log(this)
    }

}
// car.functions();
// car.model = "lamborghini"
// car.functions(this)

// const number = (a,b)=>{
//     return a + b
// }

const add = (num1 , num2) => ({number : "hello duniya"})
console.log(add())