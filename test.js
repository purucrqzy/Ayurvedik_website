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
