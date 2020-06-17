lista = [
    "Dorflex              =  (relaxante muscular)",
     "Xarelto             =  (anticoagulante)",
     "Neosaldina          =  (analgésico)",
     "Torsilax            =  (relaxante muscular)",
     "Aradois             =  (anti-hipertensivo)",
    "Glifage XR           =  (antidiabético)",
     "Selozok             =  (redução da pressão arterial)",
     "Addera D3           =  (suplemento de vitamina D)",
     "Anthelios           =  (protetor solar)",
     "Buscopan composto   =  (reduz sintomas de cólicas menstruais) "


];


lista_genericos = [
    "Dorflex               Genérico =  (relaxante muscular)",
     "Xarelto              Genérico =  (anticoagulante)",
     "Neosaldina           Genérico =  (analgésico)",
     "Torsilax             Genérico =  (relaxante muscular)",
     "Aradois              Genérico =  (anti-hipertensivo)",
    "Glifage XR            Genérico =  (antidiabético)",
     "Selozok              Genérico =  (redução da pressão arterial)",
     "Addera D3            Genérico =  (suplemento de vitamina D)",
     "Anthelios            Genérico =  (protetor solar)",
     "Buscopan composto    Genérico =  (reduz sintomas de cólicas menstruais) "


];

function genericos(){
    lista_genericos.forEach((e, i) => {
        document.getElementById('generator').innerHTML += `<tr>
        <th>ID</th>
        <th>REFERNCIA</th></tr> `
        
        document.getElementById('generator').innerHTML += `<tr><th>${i + 1}  ==> ${e}<th></tr>`
    });
}

Clipboard.write()

function remedios(){
    lista.forEach((e, i) => {
        document.getElementById('generator').innerHTML += "<style><style><tr><th>ID</th><th>REFERNCIA</th></tr> <br><br>"
       
        document.getElementById('generator').innerHTML += "<tr><th>", i + 1," ", e, "<th></tr>"
    })
   
}

function higiene(){    
    lista.forEach((e, i) => {
   
    })
}

function covid(){
    lista.forEach((e, i) => {
    
    })
}

function refresh(){
    location.reload()
}