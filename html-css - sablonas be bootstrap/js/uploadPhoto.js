let imgInput = document.querySelector('#img-input');
let container = document.querySelector('.js-image-container');
imgInput.addEventListener('change', function (){
  let input = imgInput;
  let file = input.files[0];
  // FileReader support
  if (FileReader && file) {
    let fr = new FileReader();
    fr.readAsDataURL(file);
    fr.addEventListener('load', function(event) {
      let image = document.createElement('div');
      image.style.backgroundImage = 'url(' + event.target.result + ')';
      image.style.minHeight = '220px';
      image.style.width = '100%';
      image.style.backgroundSize = 'cover';
      image.style.backgroundPosition = 'center';
      container.innerHTML = '';
      container.append(image);
    });
  }
});