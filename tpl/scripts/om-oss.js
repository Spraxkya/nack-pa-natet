sessionStorage.setItem('info', 1);

const pilV = document.getElementById("pilV");
const pilH = document.getElementById("pilH");

var infoP1 = document.getElementById('info1');
var infoP2 = document.getElementById('info2');
var infoP3 = document.getElementById('info3');
var infoP4 = document.getElementById('info4');
var infoP5 = document.getElementById('info5');

var dot1 = document.getElementById('dot1');
var dot2 = document.getElementById('dot2');
var dot3 = document.getElementById('dot3');
var dot4 = document.getElementById('dot4');
var dot5 = document.getElementById('dot5');

pilV.addEventListener("click", () => {

    var info = sessionStorage.getItem('info');

    switch (info) {
        case '1':
            console.log('Info is 5');
            infoP1.style.display = 'none';
            infoP2.style.display = 'none';
            infoP3.style.display = 'none';
            infoP4.style.display = 'none';
            infoP5.style.display = 'block';
            dot1.style.fontSize = '30px';
            dot2.style.fontSize = '30px';
            dot3.style.fontSize = '30px';
            dot4.style.fontSize = '30px';
            dot5.style.fontSize = '50px';
            dot1.style.marginLeft = '5%';
            dot2.style.marginLeft = '5%';
            dot3.style.marginLeft = '5%';
            dot4.style.marginLeft = '5%';
            dot5.style.marginLeft = '30px';
            sessionStorage.setItem('info', 5);
            break;
        case '2':
            console.log('Info is 1');
            infoP1.style.display = 'block';
            infoP2.style.display = 'none';
            infoP3.style.display = 'none';
            infoP4.style.display = 'none';
            infoP5.style.display = 'none';
            dot1.style.fontSize = '50px';
            dot2.style.fontSize = '30px';
            dot3.style.fontSize = '30px';
            dot4.style.fontSize = '30px';
            dot5.style.fontSize = '30px';
            dot1.style.marginLeft = '30px';
            dot2.style.marginLeft = '5%';
            dot3.style.marginLeft = '5%';
            dot4.style.marginLeft = '5%';
            dot5.style.marginLeft = '5%';
            sessionStorage.setItem('info', 1);
            break;
        case '3':
            console.log('Info is 2');
            infoP1.style.display = 'none';
            infoP2.style.display = 'block';
            infoP3.style.display = 'none';
            infoP4.style.display = 'none';
            infoP5.style.display = 'none';
            dot1.style.fontSize = '30px';
            dot2.style.fontSize = '50px';
            dot3.style.fontSize = '30px';
            dot4.style.fontSize = '30px';
            dot5.style.fontSize = '30px';
            dot1.style.marginLeft = '5%';
            dot2.style.marginLeft = '30px';
            dot3.style.marginLeft = '5%';
            dot4.style.marginLeft = '5%';
            dot5.style.marginLeft = '5%';
            sessionStorage.setItem('info', 2);
            break;
        case '4':
            console.log('Info is 3');
            infoP1.style.display = 'none';
            infoP2.style.display = 'none';
            infoP3.style.display = 'block';
            infoP4.style.display = 'none';
            infoP5.style.display = 'none';
            dot1.style.fontSize = '30px';
            dot2.style.fontSize = '30px';
            dot3.style.fontSize = '50px';
            dot4.style.fontSize = '30px';
            dot5.style.fontSize = '30px';
            dot1.style.marginLeft = '5%';
            dot2.style.marginLeft = '5%';
            dot3.style.marginLeft = '30px';
            dot4.style.marginLeft = '5%';
            dot5.style.marginLeft = '5%';
            sessionStorage.setItem('info', 3);
            break;
        case '5':
            console.log('Info is 4');
            infoP1.style.display = 'none';
            infoP2.style.display = 'none';
            infoP3.style.display = 'none';
            infoP4.style.display = 'block';
            infoP5.style.display = 'none';
            dot1.style.fontSize = '30px';
            dot2.style.fontSize = '30px';
            dot3.style.fontSize = '30px';
            dot4.style.fontSize = '50px';
            dot5.style.fontSize = '30px';
            dot1.style.marginLeft = '5%';
            dot2.style.marginLeft = '5%';
            dot3.style.marginLeft = '5%';
            dot4.style.marginLeft = '30px';
            dot5.style.marginLeft = '5%';
            sessionStorage.setItem('info', 4);
            break;
        default:
            console.log('Info is not recognized');
            break;
    }
});

pilH.addEventListener("click", () => {

    var info = sessionStorage.getItem('info');

    switch (info) {
        case '1':
            console.log('Info is 2');
            infoP1.style.display = 'none';
            infoP2.style.display = 'block';
            infoP3.style.display = 'none';
            infoP4.style.display = 'none';
            infoP5.style.display = 'none';
            dot1.style.fontSize = '30px';
            dot2.style.fontSize = '50px';
            dot3.style.fontSize = '30px';
            dot4.style.fontSize = '30px';
            dot5.style.fontSize = '30px';
            dot1.style.marginLeft = '5%';
            dot2.style.marginLeft = '30px';
            dot3.style.marginLeft = '5%';
            dot4.style.marginLeft = '5%';
            dot5.style.marginLeft = '5%';
            sessionStorage.setItem('info', 2);
            break;
        case '2':
            console.log('Info is 3');
            infoP1.style.display = 'none';
            infoP2.style.display = 'none';
            infoP3.style.display = 'block';
            infoP4.style.display = 'none';
            infoP5.style.display = 'none';
            dot1.style.fontSize = '30px';
            dot2.style.fontSize = '30px';
            dot3.style.fontSize = '50px';
            dot4.style.fontSize = '30px';
            dot5.style.fontSize = '30px';
            dot1.style.marginLeft = '5%';
            dot2.style.marginLeft = '5%';
            dot3.style.marginLeft = '30px';
            dot4.style.marginLeft = '5%';
            dot5.style.marginLeft = '5%';
            sessionStorage.setItem('info', 3);
            break;
        case '3':
            console.log('Info is 4');
            infoP1.style.display = 'none';
            infoP2.style.display = 'none';
            infoP3.style.display = 'none';
            infoP4.style.display = 'block';
            infoP5.style.display = 'none';
            dot1.style.fontSize = '30px';
            dot2.style.fontSize = '30px';
            dot3.style.fontSize = '30px';
            dot4.style.fontSize = '50px';
            dot5.style.fontSize = '30px';
            dot1.style.marginLeft = '5%';
            dot2.style.marginLeft = '5%';
            dot3.style.marginLeft = '5%';
            dot4.style.marginLeft = '30px';
            dot5.style.marginLeft = '5%';
            sessionStorage.setItem('info', 4);
            break;
        case '4':
            console.log('Info is 5');
            infoP1.style.display = 'none';
            infoP2.style.display = 'none';
            infoP3.style.display = 'none';
            infoP4.style.display = 'none';
            infoP5.style.display = 'block';
            dot1.style.fontSize = '30px';
            dot2.style.fontSize = '30px';
            dot3.style.fontSize = '30px';
            dot4.style.fontSize = '30px';
            dot5.style.fontSize = '50px';
            dot1.style.marginLeft = '5%';
            dot2.style.marginLeft = '5%';
            dot3.style.marginLeft = '5%';
            dot4.style.marginLeft = '5%';
            dot5.style.marginLeft = '30px';
            sessionStorage.setItem('info', 5);
            break;
        case '5':
            console.log('Info is 1');
            infoP1.style.display = 'block';
            infoP2.style.display = 'none';
            infoP3.style.display = 'none';
            infoP4.style.display = 'none';
            infoP5.style.display = 'none';
            dot1.style.fontSize = '50px';
            dot2.style.fontSize = '30px';
            dot3.style.fontSize = '30px';
            dot4.style.fontSize = '30px';
            dot5.style.fontSize = '30px';
            dot1.style.marginLeft = '30px';
            dot2.style.marginLeft = '5%';
            dot3.style.marginLeft = '5%';
            dot4.style.marginLeft = '5%';
            dot5.style.marginLeft = '5%';
            sessionStorage.setItem('info', 1);
            break;
        default:
            console.log('Info is not recognized');
            break;
    }
});


function info() {
    var gren = document.getElementById('gren');
    var info = sessionStorage.getItem('info');

    switch (info) {
        case '1':
            console.log('Info is 1');
            infoP1.style.display = 'block';
            infoP2.style.display = 'none';
            infoP3.style.display = 'none';
            infoP4.style.display = 'none';
            infoP5.style.display = 'none';
            gren.style.top = '240px';
            break;
        case '2':
            console.log('Info is 2');
            infoP1.style.display = 'none';
            infoP2.style.display = 'block';
            infoP3.style.display = 'none';
            infoP4.style.display = 'none';
            infoP5.style.display = 'none';
            gren.style.top = '370px';
            break;
        case '3':
            console.log('Info is 3');
            infoP1.style.display = 'none';
            infoP2.style.display = 'none';
            infoP3.style.display = 'block';
            infoP4.style.display = 'none';
            infoP5.style.display = 'none';
            gren.style.top = '500px';
            break;
        case '4':
            console.log('Info is 4');
            infoP1.style.display = 'none';
            infoP2.style.display = 'none';
            infoP3.style.display = 'none';
            infoP4.style.display = 'block';
            infoP5.style.display = 'none';
            gren.style.top = '620px';
            break;
        case '5':
            console.log('Info is 5');
            infoP1.style.display = 'none';
            infoP2.style.display = 'none';
            infoP3.style.display = 'none';
            infoP4.style.display = 'none';
            infoP5.style.display = 'block';
            gren.style.top = '755px';
            break;
        default:
            console.log('Info is not recognized');
            break;
    }
}