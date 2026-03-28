import axios from "axios";

export default axios.create({
  // Local
  // baseURL: "http://localhost/trimlog/api",
  // Production
  baseURL: "https://lp.trimlog.com.br/api",
  headers: {
    "Content-Type": "application/json",
  },
});
