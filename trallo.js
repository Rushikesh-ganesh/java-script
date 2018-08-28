const days=['mon','tue','wed','thr','fri','sat']
console.log(days[0]);
//element itself of array and anthor index
days.forEach(function(day,index){
    console.log(`start with ${index+1}--${day}`);
})//