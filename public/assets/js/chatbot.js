var trigger = [
    ["hi","hey","hello","p","tes"],
    ["bisakah saya bertanya","saya ingin bertanya"],
    ["pembayaran","bayar","bagaimana cara saya membayar aplikasi ini","metode pembayaran apa yang digunakan"],
    ["password","saya lupa password","saya mengalami masalah dengan password saya","saya gagal login","bagaimana saya mengatasi gagal login"],
    ["bagaimana cara menghubungi admin","kontak email admin","email admin"],
    ["terimakasih","thx","thanks"],
    ["saya tidak bisa membeli aplikasi ini","aplikasi tidak dapat dibeli","tidak bisa beli"],
    ["bagaimana cara saya mengunduh petunjuk cara pakai aplikasi","petunjuk aplikasi","unduh petunjuk aplikasi","download petunjuk aplikasi"," unduh petunjuk pemakaian aplikasi",
    "pemakaian aplikasi","cara menggunakan aplikasi","bagaimana saya menggunakan aplikasi","petunjuk aplikasi"],
    ["lokasi","lokasi cyborgITcenter","CITC","citc"],
    

];

var reply = [
    ["Hi","Hey","Hello"],
    ["Apa yang ingin anda tanyakan?","Silahkan ajukan pertanyaan"],
    ["silahkan ke menu product -> shop now -> process check out -> pilih metode pembayaran  :) "],
    ["silahkan ke menu contact dan kirimkan keluhan anda :) "],
    ["silahkan ke menu contact dan kirimkan keluhan anda :) "],
    ["terimakasih kembali","terimakasih, hubungi kami jika mengalami kendala lagi"],
    ["pastikan anda login terlebihdulu", "periksa apakah anda sudah login","aplikasi hanya dapat dibeli dengan login user terlebih dahulu"],
    ["silahkan klik petunjuk pemakaian aplikai pada halaman product, untuk mengunduh dan membaca petunjuk penggunaan aplikasi"],
    ["silahkan ke menu about us, temukan lokasi kami disana :)"],


];

var alternative = ["kata kunci yang anda masukkan kurang tepat"];
document.querySelector("#input").addEventListener("keypress",function(e){
    var key = e.which || e.keycode;
    if(key === 13){//enter button
        var input = document.getElementById("input").value;
        document.getElementById("user").innerHTML = input;
        output(input);
    }
    if($(this).val() == "" && e.keyCode == 13) {
        e.preventDefault();
    }
});

function output(input){
    try{
        var product = input + "=" + eval(input);
    }catch(e){
        var text = (input.toLowerCase()).replace(/[^\w\s\d]/gi, "");//remove all chars except words, space and
        text = text.replace(/ a /g, "").replace(/i feel /g, "").replace(/whats/g, "what is").replace(/please /g, "").replace(/ please/g, "");
        if(compare(trigger, reply, text)){
            var product = compare(trigger, reply, text);
        }else{
            var product = alternative[Math.floor(Math.random()*alternative.length)];
        }
    }
    document.getElementById("chatbot").innerHTML = product;
    //speak(product);
    document.getElementById("input").value = "";
}

function compare(arr,array,string){
    var item;
    for(var x=0;x<arr.length;x++){
        for(var y=0;y<array.length;y++){
            if(arr[x][y] == string){
                items = array[x];
                item = items[Math.floor(Math.random()*items.length)];
            }
        }
    }
    return item;
}

//chatbot speak
function speak(string){
    var utterance = new SpeechSynthesisUtterance();
    utterance.voice = speechSynthesis.getVoices().filter(function(voice){
        return voice.name == "agnes";})[0];
    utterance.text = string;
    utterance.lang = "en-US";
    utterance.volume = 1;
    utterance.rate = 1;
    utterance.pitch = 2;
    speechSynthesis.speak(utterance);
}