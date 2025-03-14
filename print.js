// chữ chạy trên title

const text = "Axle";
const container = document.getElementById("text-container");
let index = 0;

function typeWriter() {
    if (index < text.length) {
        container.innerHTML += text.charAt(index);
        index++;
        setTimeout(typeWriter, 750); 
    } else {
        index = 0;
        container.innerHTML = "";
        setTimeout(typeWriter, 1000);
    }
}
typeWriter();