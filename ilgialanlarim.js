function verigetir()
{
    const table=document.getElementById("usertable");
    fetch("https://app.sportdataapi.com/api/v1/soccer/leagues?apikey=30d70a30-b891-11eb-969c-4fe62e2ec86f")
    .then(response=>response.json())
    .then(data=>{
       //console.log(data);
        for(user of data.data)
        {
            console.log(user);
            if(user.country_id==120)
            {
                
                table.innerHTML +=`<tr>
           
            <td>
                <input type="text " class="form-control" id="" value="${user.name}">
            </td>
        </tr>`
            }
            
            

        }
    })
}

verigetir();