import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
window.Echo.private('App.Models.User.'+ id).notification((event)=>{
    console.log(event);
    
});
console.log('fgfhfh');
console.log(id);

