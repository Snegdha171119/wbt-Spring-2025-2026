let a = 10;
let b=8;
[a,b]= [b,a];
console.log(a,b);

function square (n){
    return n*n;
}
for(let i=1; i<=10; i++){
    
}




numbers =[9,53,26,90,1];
let large = numbers[0];

for (const a of numbers){

    if(a > large){
        large = a;
    }
}
console.log(`Largest number is: ${large} `);
