
//scroll to top button javascript
document.addEventListener('DOMContentLoaded',function(){
    const scrollToTopButton= document.getElementById('scrollToTopButton');

    window.addEventListener('scroll',function(){
        if(this.window.scrollY>100){
            scrollToTopButton.style.display='block';
        }else{
            scrollToTopButton.style.display='none';
        }
    });

    scrollToTopButton.addEventListener('click',function(){
        window.scrollTo({
            top:0,behavior:'smooth'
        });
    });
});