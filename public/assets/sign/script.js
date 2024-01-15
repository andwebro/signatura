document.addEventListener("DOMContentLoaded", function() {
  // Verifică dacă există elemente cu clasa '.js-swap' și '.image-container'
  const buttons = document.querySelectorAll('.js-swap');
  const imageContainers = document.querySelectorAll('.image-container');

  if (buttons.length > 0 && imageContainers.length > 0) {
    buttons.forEach((button, index) => {
      button.addEventListener('click', () => {
        buttons.forEach(btn => {
          btn.classList.remove('sm:bg-white', 'lg:bg-white/10', 'lg:ring-1', 'bg-white', 'hover:bg-white/10', 'bg-white/10');
        });

        button.classList.add('rounded-full', 'px-4', 'py-1', 'lg:rounded-l-xl', 'hover:bg-white/10', 'lg:rounded-r-none', 'lg:p-6', 'lg:bg-white/10', 'lg:ring-1', 'lg:ring-inset', 'lg:ring-white/10', 'sm:bg-white');

        imageContainers.forEach(container => {
          container.style.display = 'none';
        });

        imageContainers[index].style.display = 'block';
      });
    });
  }

  const parentTags = document.querySelectorAll('.parent-tag');
  const secondaryImg = document.querySelectorAll('.secondary-img-bg');
  const secondaryTitle = document.querySelectorAll('.secondary-title');

  if (parentTags.length > 0 && secondaryImg.length > 0 && secondaryTitle.length > 0) {
    parentTags.forEach((parentTag, index) => {
      parentTag.addEventListener('click', () => {
        parentTags.forEach(ptag => {
          ptag.classList.remove('opacity-75', 'hover:opacity-100');
        });

        parentTags.forEach((ptag, i) => {
          if (i !== index) {
            ptag.classList.add('opacity-75', 'hover:opacity-100');
          }
        });
        secondaryImg.forEach((img, i) => {
          if (i === index) {
            img.classList.remove('bg-slate-500');
            img.classList.add('bg-blue-600');
          } else {
            img.classList.remove('bg-blue-600');
            img.classList.add('bg-slate-500');
          }
        });
        secondaryTitle.forEach((title, i) => {
          if (i === index) {
            title.classList.remove('text-slate-600');
            title.classList.add('text-blue-600');
          } else {
            title.classList.remove('text-blue-600');
            title.classList.add('text-slate-600');
          }
        });
      });
    });
  }
  const imageContainer = document.getElementById('imageContainer');
  if (imageContainer) {
    const imageDivs = imageContainer.children;
    const imageWidth = 52.75; // in rem

    const divs = document.querySelectorAll('.parent-tag');

    divs.forEach((div, index) => {
      div.addEventListener('click', () => {
        const translationValue = `calc(-${index * imageWidth}rem)`;
        imageContainer.style.transform = `translateX(${translationValue})`;

        for (let i = 0; i < imageDivs.length; i++) {
          imageDivs[i].classList.remove('opacity-100');
          imageDivs[i].classList.add('opacity-60');
        }
        imageDivs[index].classList.remove('opacity-60');
        imageDivs[index].classList.add('opacity-100');
      });
    });
  }

  const myAccount = document.getElementById('mobile-menu');
  const toggleButton = document.getElementById('toggler');

  if (myAccount && toggleButton) {
    toggleButton.addEventListener('click', () => {
      if (myAccount.classList.contains('hidden')) {
        myAccount.classList.remove('hidden');
        myAccount.classList.add('block');
      } else {
        myAccount.classList.remove('block');
        myAccount.classList.add('hidden');
      }
    });
  }
});
    var currentUrl = window.location.pathname;

    var menuLinks = document.querySelectorAll('.acc-undl a');

    menuLinks.forEach(function(link) {
        var linkUrl = link.getAttribute('href');

        if (currentUrl === linkUrl) {
            link.classList.add('underline');
        } else {
            link.classList.remove('underline');
        }
    });