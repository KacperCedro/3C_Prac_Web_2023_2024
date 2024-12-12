import { Table } from "./Table"

export const Scene = ({/*mouseEnter,*/ click}) => {

    const tables = () => {
        let tmpTables = []
        for (let i = 0; i < 12; i++) {
            tmpTables.push(<Table id={i} key={i} /*mouseEnter={mouseEnter} */click={click}/>)
        }
        return tmpTables
    }

    return(
        <>
            <section className="section section--scene">
                {tables()}
            </section>
        </>
    )
}