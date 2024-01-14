console.log("Fichier checkbox chargé");

const checkbox = document.querySelector('#retirer_options');
const hiddenOptions = document.querySelector('.hidden-options-retirer');

checkbox.addEventListener('change', function() {
  if (this.checked) {
    hiddenOptions.style.height = hiddenOptions.scrollHeight + 'px';
  } else {
    hiddenOptions.style.height = '0';
  }
});
