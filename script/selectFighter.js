const aside = document.querySelector("aside");
const cardContainer = document.querySelector(".character-list");

let selectedFighter;

fetch("getAllFighter.php")
.then(res => res.json())
.then(data => {
    console.log(data)
    displayAllFighters(data);
    changeAside(data);
})


function displayAllFighters(fighters){
    fighters.forEach(fighter => {
        const card = document.createElement("div");
        const name = document.createElement("p");

        card.classList.add("character-card");
        name.classList.add("character-name");

        card.style.backgroundImage = `url(${fighter.thumb})`;
        card.dataset.id = fighter.id
        card.fighter = fighter;
        name.textContent = fighter.name;

        card.appendChild(name);
        cardContainer.appendChild(card);
    });
}



function changeAside(data){
document.querySelectorAll(".character-card").forEach(card => {
   card.addEventListener("click", () => {
        if (selectedFighter === card) return;
       selectedFighter = card;

       aside.style.backgroundImage = `url(${data[card.dataset.id - 1].gif})`
   })
   
})
}


