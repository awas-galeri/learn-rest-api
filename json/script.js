// let siswa = {
//     nama : "Sano",
//     nip : "012345678",
//     email : "sano@gmail.com"
// }

// console.log(JSON.stringify(siswa));

// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function() {
//     if(xhr.readyState == 4 && xhr.status == 200) {
//         let siswa = JSON.parse(this.responseText);
//         console.log(siswa);
//     }
// }

// xhr.open('GET', 'coba.json', true);
// xhr.send();

$.getJSON('coba.json', function(data) {
    console.log(data);
});