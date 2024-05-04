let numbers = [1,5,2,6,3,8];

// FIrst solution to be fix
// for(let i = 0; i < numbers.length; i++) {
    
//     // Validation if the i exceeds the length of array
//     if(i > numbers.length) {
//         break;
//     }

//     let firstNum = numbers[i];
//     let secondNum = numbers[i+1];

//     if(firstNum > secondNum) {
//         let temp = numbers[i];
//         numbers[i] = secondNum;
//         numbers[i+1] = temp;
//     }

// }


// Second 
for(let i = 0; i < numbers.length; i++) {
    for(let j = 0; j < numbers.length - 1; j++) {
        if(numbers[j] > numbers[j + 1]) {
            let temp = numbers[j];
            numbers[j] = numbers[j+1];
            numbers[j+1] = temp;
        }
    }
}

