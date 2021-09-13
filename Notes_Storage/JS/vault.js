// searching
let search = document.getElementById("searchTxt");
search.addEventListener("input", function(){
    let inputVal = search.value.toLowerCase();
    let noteCards = document.getElementsByClassName('noteCard');
    Array.from(noteCards).forEach(function(element){
        let cardTxt = element.getElementsByTagName("h5")[0].innerText;
        if(cardTxt.includes(inputVal)){
            element.style.display = "block";
        }
        else{
            element.style.display = "none";
        }
    })

})




// searching





// Sidebar toggle

var menu_btn = document.querySelector("#menu-btn");
var sidebar = document.querySelector("#sidebar");
var container = document.querySelector(".my-container");
menu_btn.addEventListener("click", () => {
  sidebar.classList.toggle("active-nav");
  container.classList.toggle("active-cont");
});

// Sidebar toggle

// TODO List 

const PARSER = document.createElement("div");
const listBody = elem(".list-body");
const itemInput = elem(".item-input");

function elem(selector)
{
    return document.querySelector(selector);
}

function newItem(value)
{
    PARSER.innerHTML = `<div class="list-item">
            <input id="todo_check" class="status" type="checkbox" title="Mark as complete"/>
            <span class="item">${value}</span>
            <span class="remove-item" title="Remove Item"></span>
        </div>`;
    
    return PARSER.firstChild;
}

function addItem()
{
    if(itemInput.value)
        listBody.appendChild(newItem(itemInput.value));
    
    itemInput.value = "";
}

listBody.addEventListener("click", (e) => {
    let target = e.target;
    
    if(target.classList.contains("remove-item"))
        target.parentNode.remove();
});

itemInput.addEventListener("keydown", (e) => {
    if(e.which == 13)
        addItem();
});

elem(".add-item").addEventListener("click", (e) => {
    addItem();
});

// TODO List