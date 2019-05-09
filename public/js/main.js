// console.log('Hello there')
// console.error('this is an error')
// console.warn('this is a warn')
// let myAge
// console.log(myAge)
// myAge = 23
// console.log(myAge)


// const myName = 'Ali'
// console.log(myName.length)


// let someString = 'ali,mohsen,others'
// console.log(someString.split(''))


// let numbers = new Array(1,2,3,4,5,6)
// let nums = [1,2,3,45,6]
// console.log(nums)



// let person = {
//   name:'Ali',
//   lastName:'Arabgary',
//   hobbies: ['Football,Movie,Friends'],
//   age:22,
//   address:{
//     street:'nilofar-numer 5',
//     email: 'aliarabgary@gmail.com'
//   }
// }
//
// console.log(person.address.street)
// let json = JSON.stringify(person)
// console.log(json)


// for (let i = 0 ; i<11 ; i++){
//       console.log('this is number'+ i)
// }



// let x = '10'
// if (x === 10 ){
//   console.log('x is 10')
// }



// let num = 7
// let color = num>8? 'yellow':'pink'
// console.log(color)
// switch (color) {
//   case 'red':
//     console.log('the color is red')
//   case  'pink':
//     console.log('the color is Pink')
//     break;
//   case  'yellow':
//     console.log('the color is yellow')
//
// }



//One Sort Of OOP in JS
// function Person(firstName,lastName,dob){
// this.firstName = firstName
//   this.lastName = lastName
//   this.dob = new Date(dob)
// }
//
// Person.prototype.getFullName = function(){
//   var fullName = this.firstName + " " + this.lastName
//   return fullName
//
//
// }
//
// let person1 = new Person('Ali','Arabgary','1374/10/11')
// person1.firstName = 'Bahram'
// console.log(person1.getFullName())
// console.log(person1)


//new way of OOP in JS
//
// class Person {
//   constructor(fn,ln,dob){
//     this.fn = fn
//     this.ln = ln
//     this.dob = dob
//   }
//   getFullName(){
//     return this.fn + ' ' + this.ln
//   }
// }
//
// let person1 = new Person('Ali','Arabgary','1374/10/11')
// person1.firstName = 'Bahram'
// console.log(person1.getFullName())
// console.log(person1)

// console.log(window)

//single selection
// let form = console.log(document.getElementById('my-form'))
// console.log(document.querySelector('.container'))

//mutiple selection
let items = document.querySelectorAll('.item')
// for (var i = 0; i<=items.length; i++){
//   items[i].innerHTML = 'aliMan'
// }
let button = document.querySelector('.btn')
button.style.background = 'blue'
button.textContent = 'Sign Up Now'
button.addEventListener('click',(e)=>{
  e.preventDefault()
  console.log(e.target.className)
  document.querySelector('#my-form').style.background = 'pink'
  console.log(document.querySelector('body').classList.add('bg-dark'))
})
function onClicked(e) {
}
































