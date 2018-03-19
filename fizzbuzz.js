module.exports.print = function(size) {
    Array.from(new Array(size),(val,number)=>console.log(number % 3 == 0 && number % 5 == 0 && 'Linianos' || number % 5 == 0 && 'IT' ||  number % 3 == 0 && 'linio' || number));
}
