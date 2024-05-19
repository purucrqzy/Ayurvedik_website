
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


/* For hospitalpage */
function showContent(contentId) {
    // Remove 'active' class from all tabs
    const tabs = document.querySelectorAll('.tab');
    tabs.forEach(tab => tab.classList.remove('active'));

    // Add 'active' class to the clicked tab
    const activeTab = document.querySelector(`[onclick="showContent('${contentId}')"]`);
    activeTab.classList.add('active');

    // Hide all content items
    const contentItems = document.querySelectorAll('.content-item');
    contentItems.forEach(item => item.classList.remove('active'));

    // Show the selected content item
    const activeContent = document.getElementById(contentId);
    activeContent.classList.add('active');
}
