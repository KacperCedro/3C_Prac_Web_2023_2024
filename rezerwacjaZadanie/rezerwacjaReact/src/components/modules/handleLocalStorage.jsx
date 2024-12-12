const readLocalRecord = (id) => {
    
    const record = localStorage.getItem(id)

    console.log("record handle: ", JSON.parse(id))
    console.log("record json: ", JSON.parse(record) );
    return JSON.parse(record)
}
const createLocalRecord = (id, name, surname, tel, datetime, time) => {
    const record = {
        name: name,
        surname: surname,
        tel: tel,
        datetime: datetime,
        time: time,
    }

    localStorage.setItem(id, JSON.stringify(record))
}
export {readLocalRecord, createLocalRecord}