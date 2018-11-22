var prexcant1=document.getElementById("prexcant1");
var cant1=document.getElementById("cantidad1");
var precio1=document.getElementById("precio1");

var prexcant2=document.getElementById("prexcant2");
var cant2=document.getElementById("cantidad2");
var precio2=document.getElementById("precio2");

var prexcant3=document.getElementById("prexcant3");
var cant3=document.getElementById("cantidad3");
var precio3=document.getElementById("precio3");

var prexcant4=document.getElementById("prexcant4");
var cant4=document.getElementById("cantidad4");
var precio4=document.getElementById("precio4");

var prexcant5=document.getElementById("prexcant5");
var cant5=document.getElementById("cantidad5");
var precio5=document.getElementById("precio5");

var agregar=document.getElementById("agregar");

var total=document.getElementById("total");

var suma=0;

var cont=0;

$("#tr2").hide();
$("#tr3").hide();
$("#tr4").hide();
$("#tr5").hide();
$("#agregar").click(function(){
    cont=cont+1;
    $("#tr2").show();
    if(cont==2)
        $("#tr3").show();
    if(cont==3)
        $("#tr4").show();
    if(cont==4)
        $("#tr5").show();

});


$("#cantidad1").on('input',function(){

    var count1=cant1.value*precio1.textContent;
    prexcant1.value= count1;
    prexcant1.setAttribute('value', count1);
    suma= count1;
    total.innerHTML= "precio total es :"+suma;

});

$("#cantidad2").on('input',function(){

var count2=cant2.value*precio2.textContent;
prexcant2.value= count2;
prexcant2.setAttribute('value', count2);
suma= suma+count2;
    total.innerHTML= "precio total es :"+suma;
});

$("#cantidad3").on('input',function(){

var count3=cant3.value*precio3.textContent;
prexcant3.value= count3;
prexcant3.setAttribute('value', count3);
suma= suma+count3;
    total.innerHTML= "precio total es :"+suma;
});

$("#cantidad4").on('input',function(){

var count4=cant4.value*precio4.textContent;
prexcant4.value= count4;
prexcant4.setAttribute('value', count4);
suma= suma+count4;
    total.innerHTML= "precio total es :"+suma;

});

$("#cantidad5").on('input',function(){

var count5=cant5.value*precio5.textContent;
prexcant5.value= count5;
prexcant5.setAttribute('value', count5);
suma= suma+count5;
    total.innerHTML= "precio total es :"+suma;
});



var enviar= $('#producto1').val();
$("#proveedor1").html("");

$.get("../controllers/ajax.php",{proveedor:enviar},function(recibido){  //ojo las carpetas!!
    recibido=JSON.parse(recibido);

    for(i in recibido){
        var nuevo=document.createElement("option");
        nuevo.innerHTML=recibido[i].razon_social;
        nuevo.value = recibido[i].cuit;
        document.getElementById("proveedor1").appendChild(nuevo);
    }
});



var enviar= $('#producto2').val();
$("#proveedor2").html("");

$.get("../controllers/ajax.php",{proveedor:enviar},function(recibido){  //ojo las carpetas!!
    recibido=JSON.parse(recibido);

    for(i in recibido){
        var nuevo=document.createElement("option");
        nuevo.innerHTML=recibido[i].razon_social;
        nuevo.value = recibido[i].cuit;
        document.getElementById("proveedor2").appendChild(nuevo);
    }
});

    var enviar= $('#producto3').val();
$("#proveedor3").html("");

$.get("../controllers/ajax.php",{proveedor:enviar},function(recibido){  //ojo las carpetas!!
    recibido=JSON.parse(recibido);

    for(i in recibido){
        var nuevo=document.createElement("option");
        nuevo.innerHTML=recibido[i].razon_social;
        nuevo.value = recibido[i].cuit;
        document.getElementById("proveedor3").appendChild(nuevo);
    }
});

    var enviar= $('#producto4').val();
$("#proveedor4").html("");

$.get("../controllers/ajax.php",{proveedor:enviar},function(recibido){  //ojo las carpetas!!
    recibido=JSON.parse(recibido);

    for(i in recibido){
        var nuevo=document.createElement("option");
        nuevo.innerHTML=recibido[i].razon_social;
        nuevo.value = recibido[i].cuit;
        document.getElementById("proveedor4").appendChild(nuevo);
    }
});

    var enviar= $('#producto5').val();
$("#proveedor5").html("");

$.get("../controllers/ajax.php",{proveedor:enviar},function(recibido){  //ojo las carpetas!!
    recibido=JSON.parse(recibido);

    for(i in recibido){
        var nuevo=document.createElement("option");
        nuevo.innerHTML=recibido[i].razon_social;
        nuevo.value = recibido[i].cuit;
        document.getElementById("proveedor5").appendChild(nuevo);
    }
});



$("#proveedor1").change(function(){
    var enviar= this.value;
    var enviar2=document.getElementById("producto1").value;
    $("#precio1").html("");
    console.log(enviar);
    console.log(enviar2);
    $.get("../controllers/ajax.php",{precio:enviar,proveedor:enviar2},function(recibido){  //ojo las carpetas!!
        recibido=JSON.parse(recibido);
        console.log(recibido);
        for(i in recibido){
            if(recibido[i].cuit==enviar){

            var nuevo=document.createElement("input");
            nuevo.setAttribute('type', 'text');
            
            nuevo.value = recibido[i].precio_producto;
            nuevo.setAttribute('value', recibido[i].precio_producto);
            nuevo.innerHTML=recibido[i].precio_producto; 
            document.getElementById("precio1").appendChild(nuevo);
            }
        }
    });
});


$("#producto1").change(function(){
    //$('#producto1').val();
    var enviar= this.value;
    $("#proveedor1").html("");

    $.get("../controllers/ajax.php",{proveedor:enviar},function(recibido){  //ojo las carpetas!!
        recibido=JSON.parse(recibido);

        for(i in recibido){
            var nuevo=document.createElement("option");
            nuevo.innerHTML=recibido[i].razon_social;
            nuevo.value = recibido[i].cuit;
            document.getElementById("proveedor1").appendChild(nuevo);
        }
    });
});

$("#proveedor2").change(function(){
    var enviar= this.value;
    var enviar2=document.getElementById("producto2").value;
    $("#precio2").html("");
    console.log(enviar);
    console.log(enviar2);
    $.get("../controllers/ajax.php",{precio:enviar,proveedor:enviar2},function(recibido){  //ojo las carpetas!!
        recibido=JSON.parse(recibido);
        console.log(recibido);
        for(i in recibido){
            if(recibido[i].cuit==enviar){

            var nuevo=document.createElement("input");
            nuevo.setAttribute('type', 'text');
            nuevo.setAttribute('value', recibido[i].precio_producto);
            nuevo.innerHTML=recibido[i].precio_producto;
            //nuevo.value = recibido[i].precio_producto; 
            document.getElementById("precio2").appendChild(nuevo);
            }
        }
    });
});


$("#producto2").change(function(){
    var enviar= this.value;
    $("#proveedor2").html("");

    $.get("../controllers/ajax.php",{proveedor:enviar},function(recibido){  //ojo las carpetas!!
        recibido=JSON.parse(recibido);

        for(i in recibido){
            var nuevo=document.createElement("option");
            nuevo.innerHTML=recibido[i].razon_social;
            nuevo.value = recibido[i].cuit;
            document.getElementById("proveedor2").appendChild(nuevo);
        }
    });
});

$("#proveedor3").change(function(){
    var enviar= this.value;
    var enviar2=document.getElementById("producto3").value;
    $("#precio3").html("");
    console.log(enviar);
    console.log(enviar2);
    $.get("../controllers/ajax.php",{precio:enviar,proveedor:enviar2},function(recibido){  //ojo las carpetas!!
        recibido=JSON.parse(recibido);
        console.log(recibido);
        for(i in recibido){
            if(recibido[i].cuit==enviar){

            var nuevo=document.createElement("input");
            nuevo.setAttribute('type', 'text');
            nuevo.setAttribute('value', recibido[i].precio_producto);
            nuevo.innerHTML=recibido[i].precio_producto;
            //nuevo.value = recibido[i].precio_producto; 
            document.getElementById("precio3").appendChild(nuevo);
            }
        }
    });
});


$("#producto3").change(function(){
    var enviar= this.value;
    $("#proveedor3").html("");

    $.get("../controllers/ajax.php",{proveedor:enviar},function(recibido){  //ojo las carpetas!!
        recibido=JSON.parse(recibido);

        for(i in recibido){
            var nuevo=document.createElement("option");
            nuevo.innerHTML=recibido[i].razon_social;
            nuevo.value = recibido[i].cuit;
            document.getElementById("proveedor3").appendChild(nuevo);
        }
    });
});

$("#proveedor4").change(function(){
    var enviar= this.value;
    var enviar2=document.getElementById("producto4").value;
    $("#precio4").html("");
    console.log(enviar);
    console.log(enviar2);
    $.get("../controllers/ajax.php",{precio:enviar,proveedor:enviar2},function(recibido){  //ojo las carpetas!!
        recibido=JSON.parse(recibido);
        console.log(recibido);
        for(i in recibido){
            if(recibido[i].cuit==enviar){

            var nuevo=document.createElement("input");
            nuevo.setAttribute('type', 'text');
            nuevo.setAttribute('value', recibido[i].precio_producto);
            nuevo.innerHTML=recibido[i].precio_producto;
            //nuevo.value = recibido[i].precio_producto; 
            document.getElementById("precio4").appendChild(nuevo);
            }
        }
    });
});

$("#producto4").change(function(){
    var enviar= this.value;
    $("#proveedor4").html("");

    $.get("../controllers/ajax.php",{proveedor:enviar},function(recibido){  //ojo las carpetas!!
        recibido=JSON.parse(recibido);

        for(i in recibido){
            var nuevo=document.createElement("option");
            nuevo.innerHTML=recibido[i].razon_social;
            nuevo.value = recibido[i].cuit;
            document.getElementById("proveedor4").appendChild(nuevo);
        }
    });
});

$("#proveedor5").change(function(){
    var enviar= this.value;
    var enviar2=document.getElementById("producto5").value;
    $("#precio5").html("");
    console.log(enviar);
    console.log(enviar2);
    $.get("../controllers/ajax.php",{precio:enviar,proveedor:enviar2},function(recibido){  //ojo las carpetas!!
        recibido=JSON.parse(recibido);
        console.log(recibido);
        for(i in recibido){
            if(recibido[i].cuit==enviar){

            var nuevo=document.createElement("input");
            nuevo.setAttribute('type', 'text');
            nuevo.setAttribute('value', recibido[i].precio_producto);
            nuevo.innerHTML=recibido[i].precio_producto;
            //nuevo.value = recibido[i].precio_producto; 
            document.getElementById("precio5").appendChild(nuevo);
            }
        }
    });
});

$("#producto5").change(function(){
    var enviar= this.value;
    $("#proveedor5").html("");

    $.get("../controllers/ajax.php",{proveedor:enviar},function(recibido){  //ojo las carpetas!!
        recibido=JSON.parse(recibido);

        for(i in recibido){
            var nuevo=document.createElement("option");
            nuevo.innerHTML=recibido[i].razon_social;
            nuevo.value = recibido[i].cuit;
            document.getElementById("proveedor5").appendChild(nuevo);
        }
    });
});