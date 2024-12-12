import { useState } from "react"
import { isAvailable } from "./modules/checkForCurrentDate"
import { readLocalRecord } from "./modules/handleLocalStorage"

export const Table = ({id /*,mouseEnter*/, click}) => {
    const [bgColor, setBgColor] = useState("black")
    const [buttonText, setButtonText] = useState("")

    const mouseEnter = () => {
        const currentRecord = readLocalRecord(id) 
        if (currentRecord) {
            if (isAvailable(currentRecord.datetime, currentRecord.time)) {
            setBgColor("green")
            setButtonText("")
        } else {
            setBgColor("red")
            setButtonText(currentRecord.time)
        }
        } else {
            console.warn("No record found for id:", id);
            setBgColor("green")
            setButtonText("")
        }
    }

    const mouseLeave = () => {
        setBgColor("black")
        setButtonText("")
    }
    return (
        <>
            <button 
                className={`button button--table`}
                onMouseEnter={() => {mouseEnter(id)}} 
                onMouseLeave={() => {mouseLeave(id)}}
                onClick={() => {click(id)}}
                style={{backgroundColor: `${bgColor}`}}
                >
                {buttonText}
            </button>
        </>
    )
}