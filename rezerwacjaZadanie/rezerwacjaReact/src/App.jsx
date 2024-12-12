import { useState } from 'react'
import './App.css'
import { Scene } from "./components/Scene";
import { Form } from "./components/Form";
import { createLocalRecord, readLocalRecord } from "./components/modules/handleLocalStorage";
import {isAvailable } from "./components/modules/checkForCurrentDate";

function App() {
  const [showForm, setShowForm] = useState(false)
  const [currentId, setCurrentId] = useState()

  const submit = (localName, localSurname, localTel, localDatetime, localTime) => {
    createLocalRecord(currentId, localName, localSurname, localTel, localDatetime, localTime)
    setShowForm(false)
  }
/*
  const mouseEnter = (id) => {

  }
*/
  const click = (id) => {
    setCurrentId(id);
    console.log(id, "current id");

    const currentRecord = readLocalRecord(id) ;
    console.log("current record:", currentRecord);

    if (currentRecord) {
        if (isAvailable(currentRecord.datetime, currentRecord.time)) {
            
            setShowForm(true);
        } else {
            setShowForm(false);
        }
    } else {
        console.warn("No record found for id:", id);
        setShowForm(true);
    }
};


  return (
    <>
      <Scene /*mouseEnter={mouseEnter}*/ click={click} />

      {showForm &&
        (
          <Form submit={submit} currentId={currentId}/>
        )
      }
    </>
  )
}

export default App
