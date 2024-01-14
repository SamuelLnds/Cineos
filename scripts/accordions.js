console.log("Fichier accordéon chargé");

var accordion = document.querySelectorAll('.accordion_element')
var arrow = document.querySelectorAll('.arrow_accordion')

document.querySelectorAll('.accordion_element').forEach(accItem => {
    let header = null;
    let content = null;

    for ( let i = 0 ; i < accItem.children.length ; i++) {
        let child = accItem.children[i]
        if (child.classList.contains('header_accordion')) {
            header = child;
        } else if (child.classList.contains('content_accordion')) {
            content = child;
        }
    }

    header.addEventListener('click', function() {
        content.classList.toggle('open')

        if( content.classList.contains('open')) {
            content.style.height = content.scrollHeight + "px"
        } else {
            content.style.height = 0
        }
    })
})