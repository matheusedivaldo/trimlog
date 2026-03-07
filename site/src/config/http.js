import axios from "axios";

export default axios.create({
    baseURL: "http://localhost:777/",
    headers: {
        "Content-Type": "application/json"
    },
});