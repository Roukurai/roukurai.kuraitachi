const iframe = document.getElementById('main-container-iframe')


function loadPHPContent(url) {
    const xhr = new XMLHttpRequest();
    xhr.open('GET',url,true);
    xhr.send();
    xhr.onload=function() {
        if (xhr.status===200) {
            const responseHTML = xhr.responseText;
            document.querySelector('.main-container').innerHTML = responseHTML;
        }
    };
}

document.addEventListener('click',function(event){
    if (event.target.hasAttribute('href')) {
        const newUrl = event.target.getAttribute('href');
        event.preventDefault();
        loadPHPContent(newUrl);
        iframe.src = newUrl;
        console.log('Testing ggg');
    }
});