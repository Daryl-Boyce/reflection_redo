

// Makes the header stick and return on scroll up
window.addEventListener('wheel', function(event)
{
 if (event.deltaY < 0)
 {
    document.querySelector('.header__sticky').classList.add('sticky');
 }
 else if (event.deltaY > 0)
 {
    document.querySelector('.header__sticky').classList.remove('sticky');
 }
});



