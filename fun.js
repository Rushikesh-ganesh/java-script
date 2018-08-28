let getmygread=function (currentmarks,totalmarks) {
    let myper=(currentmarks/totalmarks)*100
    let myGread=''

    if(myper>=90){
        myGread='a'
    }
    else if(myper>=80)
    {
        myGread='b'
    }
    
    else if(myper>=70)
    {
        myGread='c'
    }

     
    
    else if(myper>=60)
    {
        myGread='d'
    }

    else
   {
     myGread='f'
    }
    return`your gread is ${myGread}percentage is${myper}`
}
let result=getmygread(92,100)
console.log(result);
