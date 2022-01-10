function toggleActive(el) {
        el.classList.toggle('active');
        var x = document.getElementById("nav-bar");
        if (x.style.visibility === "hidden") {
                x.style.visibility = "visible";
                x.style.opacity = "1";
        } else {
                x.style.visibility = "hidden";
                x.style.opacity = "0";
                x.style.transition = " visibility 0s, opacity 0.2s linear";
        }
}

function chooseWebdev() {
        x = document.getElementById("product");
        x.options[x.selectedIndex].text = "website development";
        document.getElementById('contact-us').scrollIntoView();
}

function chooseAppdev() {
        x = document.getElementById("product");
        x.options[x.selectedIndex].text = "app development";
        document.getElementById('contact-us').scrollIntoView();    
}

function chooseDesign() {
        x = document.getElementById("product");
        x.options[x.selectedIndex].text = "design";
        document.getElementById('contact-us').scrollIntoView();    
}

document.addEventListener('mousemove', (e) => {
        const wand = document.querySelector('#wand');
        const mouseX = e.pageX;
        const mouseY = e.pageY;

        const wandX = wand.offsetLeft + 20;
        const wandY = wand.offsetTop + 20;

        const diffX = mouseX - wandX;
        const diffY = mouseY - wandY;

        const radians = Math.atan2(diffY, diffX);
        const angle = radians * 180 / Math.PI;

        wand.style.transform = `rotate(${angle}deg)`;
});

document.querySelector("#wand").addEventListener('click', (e) => {
        const wand = document.querySelector("#wand");
        wand.style.transform = `rotate(360deg)`;
})