
function load(radio) {

        var hp = document.getElementById("hp");
        let a = String(document.getElementById("a").value);
        let b = String(document.getElementById("b").value);
        let arr = a.split(' ')
        let arrb = b.split(' ')
        hp.value = Number(arr[0]) + Number(arrb[0]);
} 
