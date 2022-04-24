// const titre = document.getElementById("titre");
// const autheur = document.getElementById("autheur");
// const description = document.getElementById("description");
// const corps = document.getElementById("corps");
// const ajouterArticle = document.getElementById("ajouterArticle");
// const errorMessages = document.getElementById("errorMessages");

// ajouterArticle.addEventListener("submit", (e) => {
//     // console.log("first")
//     let errors = [];

//     // ecriture reguliere, expression reguliere
//     let regex = /^[a-zA-Z\n]+$/;  

//     if(regex.test(titre.value) === false) {
//         console.log("error")
//         errors.push("le titre ne doit contenir que du lettre");
//     }

//     if(autheur.value.length >= 15 ) {
//         errors.push("le nom de l'auteur est trop long");
//     }

//     if(errors.length > 0) {
//         e.preventDefault();
//         errorMessages.innerText = errors.join(",");
//         errorMessages.style.color = "crimson";
//     }
// })

function subst(){
    // const article = document.querySelectorAll('.articles .article');
    // // const art = article.textContent.substring(0,20) + '...';
    // // article.innerText = art;
    // article.forEach(element => {
        
    //     console.log(element)
    // });
    const articles = document.querySelectorAll('#article');
        // article.innerText = art;

        articles.forEach(element => {
            const art = element.textContent.substring(0,20) + '...';
            console.log(art);
            element.textContent.innerText = art;
            console.log(element.textContent)
        });
}

subst();
