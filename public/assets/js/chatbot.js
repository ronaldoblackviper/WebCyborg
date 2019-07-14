var trigger = [
    ["hi","hey","hello"],
    ["bisakah saya bertanya","saya ingin bertanya"]
];

var reply = [
    ["Hi","Hey","Hello"],
    ["Apa yang ingin anda tanyakan?","Silahkan ajukan pertanyaan"]
];

var alternative = ["sorry i am still learning"];
document.querySelector("#input").addEventListener("keypress",function(e){
    var key = e.which || e.keycode;
    if(key === 13){//enter button
        var input = document.getElementById("input").value;
        document.getElementById("user").innerHTML = input;
        output(input);
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