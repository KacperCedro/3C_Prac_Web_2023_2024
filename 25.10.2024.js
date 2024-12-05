const divide = (a,b) => {
    if (b === 0) {
        return "dividing by 0 is forbidden!"
    }
    else if (b !== 0) {
        return (a/b)
    }
}

const isEven = (number) => {
    if (number % 2 === 0) {
        return true
    }
    else{
        return false
    }
}

console.log(isEven(3) + " 3")
console.log(isEven(2) + " 2")

const globalAndLocalVariable = () => {
    var globalVar = 3
    let localVar = 2
}

//console.log(globalVar + " global var") //undefined
//console.log(localVar, " local var") //undefined

const table = [1,2,3]
console.log(table)
table[0] = 4
console.log(table)
table.push(5)
console.log(table)
table.pop()
console.log(table)

const powitaj = (imie, wiek = 18) => {
    return `Cześć, ${imie}!, Masz ${wiek} lat.`
}

console.log(powitaj("Damian"))