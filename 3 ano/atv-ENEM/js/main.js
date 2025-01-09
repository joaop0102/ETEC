document.addEventListener("DOMContentLoaded", function () {
    const headerTitle = document.querySelector("header h1");

    const colors = ["#00FFFF", "#AFEEEE", "#2196f3", "#48D1CC"];
    let colorIndex = 0;

    setInterval(() => {
        headerTitle.style.color = colors[colorIndex];
        colorIndex = (colorIndex + 1) % colors.length; 
    }, 1000); 
});
