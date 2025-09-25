import { useParams } from "react-router-dom";
export default function ProductDetails() {
    const {id} = useParams()
    return <h2>Szczegóły produktu #{id}</h2>
}