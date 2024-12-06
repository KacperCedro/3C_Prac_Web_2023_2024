
const run = (button) => {
    var formSection = document.querySelector(".section_form")
    formSection.innerHTML = ""

    getForm()
}

const getForm = () => {
    var formSection = document.querySelector(".section_form")

    var form = document.createElement("form")
    form.className = "form"

    let labelName = document.createElement("label")
    labelName.htmlFor = "name"
    labelName.innerText = "Name"

    let inputName = document.createElement("input")
    inputName.className = "inputName"
    inputName.name = "name"
    inputName.type = "text"

    let labelSurname = document.createElement("label")
    labelSurname.htmlFor = "surname"
    labelSurname.innerText = "Surname"

    let inputSurname = document.createElement("input")
    inputSurname.className = "surname"
    inputSurname.name = "surname"
    inputSurname.type = "text"

    let labelTel = document.createElement("label")
    labelTel.htmlFor = "tel"
    labelTel.innerText = "Tel"

    let inputTel = document.createElement("input")
    inputTel.className = "tel"
    inputTel.name = "tel"
    inputTel.type = "tel"

    let labelDate = document.createElement("label")
    labelDate.htmlFor = "date"
    labelDate.innerText = "Date"

    let inputDate = document.createElement("input")
    inputDate.className = "date"
    inputDate.name = "date"
    inputDate.type = "date"

    let submitButton = document.createElement("button")
    submitButton.innerText = "Submit"

    form.appendChild(labelName)
    form.appendChild(inputName)

    form.appendChild(labelSurname)
    form.appendChild(inputSurname)

    form.appendChild(labelTel)
    form.appendChild(inputTel)

    form.appendChild(labelDate)
    form.appendChild(inputDate)

    form.appendChild(submitButton)

    formSection.appendChild(form)
}
