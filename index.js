let container = document.querySelector(".list");
let button = document.querySelector(".button");
let list_name = document.querySelector(".items_name");
let deletebutton = document.querySelector(".delete");

button.addEventListener("click",()=>{

    if(list_name.value != ""){
        let checkbox = document.createElement("div")
        checkbox.classList.add("listbox")
        container.appendChild(checkbox);
        
        // alert("Hello")
        let inputcheck = document.createElement("input");
        inputcheck.classList.add('check')
        inputcheck.setAttribute("type", "checkbox");
        checkbox.appendChild(inputcheck);

        let inputdata = document.createElement("input")
        inputdata.classList.add("inputdata")
        checkbox.appendChild(inputdata);
        inputdata.value = list_name.value
        inputdata.setAttribute("readonly","true")

         list_name.value = inputdata.value;
         
         list_name.value = "";
         
         inputcheck.addEventListener('click',()=>{
            if(inputcheck.checked){
                deletebutton.style.display = "flex";
               }
               else{
                   deletebutton.style.display = "none"
               }
         }) 

            deletebutton.addEventListener("click", ()=>{
                if(inputcheck.checked){
                    checkbox.remove()
                    data()
                }
            })
    }
    else{
        alert("Please select")
    }
})

// let data = ()=>{
//     localStorage.setItem("data",container.innerHTML);
//     // localStorage.setItem("data",checkbox.innerText);

// }

// let showtask = ()=>{
//     container.innerHTML = localStorage.getItem("data")
// }
// showtask()