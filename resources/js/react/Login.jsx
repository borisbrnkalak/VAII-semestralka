import React, { useState, useEffect } from "react";
import axios from "axios";

export default function Login() {
    const [email, setEmail] = useState("admin@admin.com");
    const [password, setPassword] = useState("uwu");
    const [error, setError] = useState({ email: "", password: "" });
    const [isValid, setIsValid] = useState(false);
    const [serverError, setServerError] = useState([]);

    const sendForm = () => {
        if (error.email === "" && error.password === "") {
            axios
                .post(location.origin + "/api/login", {
                    email: email,
                    password: password,
                })
                .then((data) => {
                    if (data.status === 200 && data.data.success === true) {
                        //location.reload();
                    }
                    console.log(data);
                })
                .catch((error) => {
                    setServerError(error.response.data.errors.email);
                    console.log(error.response);
                });
        }
    };

    useEffect(() => {
        if (email.indexOf("@") == -1) {
            setError({ ...error, email: "This is not an email!" });
        } else {
            setError({ ...error, email: "" });
        }
    }, [email]);

    useEffect(() => {
        if (password === "") {
            setError({ ...error, password: "Missing password!" });
        } else {
            setError({ ...error, password: "" });
        }
    }, [password]);

    return (
        <>
            <h1>LOGIN</h1>
            <div
                className={`err log ${isValid ? "hidden" : "visible"}`}
                disabled
            >
                {error.email.length > 0 && <p>{error.email}</p>}
                {error.password.length > 0 && <p>{error.password}</p>}
            </div>
            <form
                action="{{ route('login') }}"
                method="POST"
                className="modal__form log"
                onSubmit={(event) => event.preventDefault()}
            >
                <input
                    name="email"
                    type="text"
                    className="username"
                    placeholder="email"
                    value={email}
                    onChange={(event) => {
                        setEmail(event.target.value);
                    }}
                />
                <input
                    name="password"
                    type="password"
                    className="password"
                    placeholder="password"
                    value={password}
                    onChange={(event) => {
                        setPassword(event.target.value);
                    }}
                />
                <div className="error-message-login">
                    {serverError.map((error, counter) => {
                        return <p key={counter}>{error}</p>;
                    })}
                </div>
                <button
                    type="button"
                    onClick={() => sendForm()}
                    name="submit-btn"
                    className="btn"
                >
                    Done
                </button>
            </form>
        </>
    );
}
