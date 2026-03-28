import axios from "axios";

export default axios.create({
  baseURL: "http://localhost/trimlog/api",
  headers: {
    "Content-Type": "application/json",
  },
});
