const cep = document.querySelector("#cep")

/**o cep.addEventListener("blur" , (e)=>{ 
 * serve para que toda vez que a pessoa digitar aogo na região do cep e dá enter
 * pegar os dados digitados e devolver em uma função anonima que pega os dados
 * e faz alguma coisa

**/

const showData = (result)=>{
    for (const campo in result){
        if (document.querySelector("#"+campo)){
            document.querySelector("#"+campo).value = result[campo]
            
        }

    }
}

cep.addEventListener("blur", (dadosCep)=>{
    let search = cep.value.replace("-", "")
    const options = {
        metodo: 'GET',
        modo: 'cors',
        cache: 'default'
    }

    //consultando url do via cep com o fetch
    fetch(`https://viacep.com.br/ws/${search}/json/`)
    //O fech api funciona como uma Promisse, que se der certo retorna um.then
    .then(response => {response.json()
        .then( data => {showData(data)})}) 
    .catch(err => {alert("Você colocou algo errado!"); console.log("O erro foi esse: ",err);}) // e se der errado e não retornar nada usa o catch
})

