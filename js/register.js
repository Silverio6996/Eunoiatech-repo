const form = document.querySelector('.form form'),
submitbtn = form.querySelector('.submit input');

form.onsubmit = (e) => {
    e.preventDefault();

}
submitbtn.onclick = () =>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST",",/Php/s")
}
