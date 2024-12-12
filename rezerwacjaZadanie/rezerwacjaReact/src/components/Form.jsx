import { useState } from "react"

export const Form = ({currentId, submit}) => {
    const [name, setName] = useState("");
    const [surname, setSurname] = useState("");
    const [tel, setTel] = useState("");
    const [datetime, setDatetime] = useState((Date.now()))
    const [time, setTime] = useState()

    return(
        <>
            <form className="form" onSubmit={(e) => {
                e.preventDefault()
                console.log(name, surname, tel, datetime, time, currentId)
                submit(name, surname, tel, datetime, time)
            }}>
                <label htmlFor="name" className="form__label form__label--name">
                    Name
                </label>
                <input type="text" name="name" className="form__input form__input--name" onChange={(e) => {setName(e.target.value)}} required/>
                <label htmlFor="surname" className="form__label form__label--surname" >
                    Surname
                </label>
                <input type="text" name="surname" className="form__input form__input--surname" onChange={(e) => {setSurname(e.target.value)}} required/>
                <label htmlFor="tel" className="form__label form__label--tel">
                    Tel
                </label>
                <input type="text" name="tel" className="form__input form__input--tel" onChange={(e) => {setTel(e.target.value)}} required/>
                <label htmlFor="datetime" className="form__label form__label--datetime">
                    Date and time
                </label>
                <input type="datetime-local" name="datetime" className="form__input form__input--datetime" onChange={(e) => {setDatetime(e.target.value)}} required/>
                <label htmlFor="duration" className="form__label form__label--duration">
                    End
                </label>
                <input type="time" name="duration" className="form__input form__input--duration" onChange={(e) => {setTime(e.target.value)}} required/>
                <button>
                    Submit
                </button>

            </form>
        </>
    )
}