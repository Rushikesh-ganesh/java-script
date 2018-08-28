let isVerified=false
let isLoggedIn=true
let hasPaymentToken=true
let isGuest =true

if(!isVerified && isLoggedIn && hasPaymentToken){
    console.log('greeting message to user')
    console.log('greeting access  to paid  user')
    }
else if (isVerified || isGuest)
{
    console.log('allow free coures')
    
}else{
    console.log("contact the admin ")
}