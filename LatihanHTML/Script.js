//Letak javascript
        console.log("Latihan javascript");

            function masukkan_nama(){
                let nama = prompt("Masukkan nama anda:");
                console.log("Halooo "+ nama);
                document.getElementById("jawaban").innerHTML = "Halooo "+ nama;
            }

            document.getElementById("pertanyaan").onclick = function() {
                //ini isinya
                let jawab = confirm("Apa sudah KALCER?");
                if(jawab == true){
                console.log("Sudah KALCER");
                 document.getElementById("jawaban").innerHTML = "Sudah KALCER";
                }else{
                console.log("Jangan lupa KALCER");
                 document.getElementById("jawaban").innerHTML = "Jangan lupa KALCER";
                }
            }

            let gelap = false; //putih
            document.getElementById("tema").onclick = function(){
                if(gelap == true){
                document.body.style.background = "black";
                document.body.style.color = "white";
                gelap = false;
                }else{
                    document.body.style.background = "white";
                document.body.style.color = "black";
                gelap = true;
                }
            }