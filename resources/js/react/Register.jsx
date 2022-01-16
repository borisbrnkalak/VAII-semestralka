import React, { useState, useEffect, useRef } from "react";
import axios from "axios";

export default function Register() {
    const [name, setName] = useState("");
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const [confirmPassword, setConfirmPassword] = useState("");
    const [error, setError] = useState({
        name: "",
        email: "",
        password: "",
        confirmPassword: "",
    });
    const [isValid, setIsValid] = useState(true);
    const [serverError, setServerError] = useState([]);

    const passwordEl = useRef(null);

    const sendForm = () => {
        if (
            error.name === "" &&
            error.email === "" &&
            error.password === "" &&
            error.confirmPassword === ""
        ) {
            axios
                .post(location.origin + "/api/register", {
                    name: name,
                    email: email,
                    password: password,
                    password_confirmation: confirmPassword,
                })
                .then((data) => {
                    if (data.status === 200 && data.data.success === true) {
                        location.reload();
                    }
                    console.log(data);
                })
                .catch((error) => {
                    setServerError(error.response.data.errors);
                    console.log(error.response);
                });
        }
    };

    const strong = new RegExp(
        "(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{6,})"
    );

    useEffect(() => {
        if (name === "") {
            setError({ ...error, name: "Missing name!" });
        } else {
            setError({ ...error, name: "" });
        }
    }, [name]);

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
            if (strong.test(password)) {
                passwordEl.current.style.outlineColor = "green";
                setError({ ...error, password: "" });
            } else {
                passwordEl.current.style.outlineColor = "red";
                setError({ ...error, password: "Weak password" });
            }
        }
    }, [password]);

    useEffect(() => {
        if (confirmPassword !== password) {
            setError({
                ...error,
                confirmPassword: "Passwords does not match!",
            });
        } else {
            setError({ ...error, confirmPassword: "" });
        }
    }, [confirmPassword]);

    return (
        <>
            <h1>REGISTER</h1>
            <div
                className={`err reg ${isValid ? "visible" : "hidden"}`}
                disabled
            >
                {error.name.length > 0 && <p>{error.name}</p>}
                {error.email.length > 0 && <p>{error.email}</p>}
                {error.password.length > 0 && <p>{error.password}</p>}
                {error.confirmPassword.length > 0 && (
                    <p>{error.confirmPassword}</p>
                )}
            </div>
            <form
                action="{{ route('register') }}"
                method="POST"
                className="modal__form reg"
            >
                <input
                    name="name"
                    type="text"
                    className="fullname"
                    placeholder="Full name"
                    onInput={(event) => {
                        setName(event.target.value);
                    }}
                />
                <input
                    name="email"
                    type="text"
                    className="username"
                    placeholder="Username(email)"
                    onInput={(event) => {
                        setEmail(event.target.value);
                    }}
                />
                <input
                    name="password"
                    type="password"
                    ref={passwordEl}
                    placeholder="password atleast(6 chars)"
                    className="password"
                    onInput={(event) => {
                        setPassword(event.target.value);
                    }}
                />
                <input
                    name="password_confirmation"
                    type="password"
                    placeholder="confirm-password"
                    className="confirm-password"
                    onInput={(event) => {
                        setConfirmPassword(event.target.value);
                    }}
                />
                <div className="error-message-register">
                    {serverError.name?.map((error, counter) => {
                        return <p key={counter}>{error}</p>;
                    })}
                    {serverError.email?.map((error, counter) => {
                        return <p key={counter}>{error}</p>;
                    })}
                    {serverError.password?.map((error, counter) => {
                        return <p key={counter}>{error}</p>;
                    })}
                    {serverError.password_confirmation?.map(
                        (error, counter) => {
                            return <p key={counter}>{error}</p>;
                        }
                    )}
                </div>
                <button
                    type="button"
                    name="register-btn"
                    className="btn"
                    onClick={() => sendForm()}
                >
                    Done
                </button>
            </form>
        </>
    );
}
