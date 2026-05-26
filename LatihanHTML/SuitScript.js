let scoreUser = 0;
let scoreCom = 0;

function main (pilihan_user){
    //alert(pilihan_user);

    //set pilihan kompueter random
    const komputer = ["batu", "gunting", "kertas"];
    const random = Math.floor(Math.random() * komputer.length);
    let pilihan_komputer = komputer[random];
    document.getElementById('pil_com').src = "img/"+pilihan_komputer+".png";
    document.getElementById('pil_user').src = "img/"+pilihan_user+".png";

//seri, menang ,kalah
//kertas vs batu > menang,
//batu vs gunting > menang,
//gunting vs kertas > menang
    if(pilihan_user === pilihan_komputer){
        document.getElementById('hasil').innerHTML = "SERI";
    } else if (
        (pilihan_user==="kertas" && pilihan_komputer==="batu") ||
        (pilihan_user==="batu" && pilihan_komputer==="gunting") ||
        (pilihan_user==="gunting" && pilihan_komputer==="kertas")){
            document.getElementById('hasil').innerHTML = "MENANG";
              scoreUser++;
        } else{
            document.getElementById('hasil').innerHTML = "KALAH";
              scoreCom++;
        }
         document.getElementById("score_user").innerHTML = scoreUser;
    document.getElementById("score_com").innerHTML = scoreCom;
    }
