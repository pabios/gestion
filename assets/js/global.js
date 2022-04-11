/**
 * fetch api 
 * method -> get 
 * return text
 */
 let resultat = document.querySelector('.resultat')

 let apiGet = '/api/5 '

console.log('bonjour le monde')
document.addEventListener('DOMContentLoaded',function(){
    
        fetch(apiGet)
        .then(res => {
            if(res.ok){
                return res.text()
            }
        })
        .then(data =>{
            console.log(data)
                data.forEach(elm => {
                    resultat.innerHTML += `
                        <tr>
                            <td> 
                                ${elm.id}
                            </td>
                            <td> 
                                ${elm.title}
                            </td>
                            <td> 
                            ${elm.description}
                        </td>
                    </tr> 
                 `             
                });
        })
        .catch(e => {
            console.log('erreur de lecture'+e);
        })
    
})



    // lien.addEventListener('click',ismaApi,false)