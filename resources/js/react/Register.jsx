import React, { useState, useEffect } from "react";

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
    const [isValid, setIsValid] = useState(false);
    const [serverError, setServerError] = useState([]);

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
                    confirmPassword: confirmPassword,
                })
                .then((data) => {
                    if (data.status === 200 && data.data.success === true) {
                        location.reload();
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
            <h1>REGISTER</h1>
            <div
                className={`err reg ${isValid ? "hidden" : "visible"}`}
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
                class="modal__form reg"
            >
                <input
                    className="name"
                    type="text"
                    class="fullname"
                    placeholder="Full name"
                />
                <input
                    className="email"
                    type="text"
                    class="username"
                    placeholder="Username(email)"
                />
                <input
                    className="password"
                    type="password"
                    placeholder="password atleast(6 chars)"
                    class="password"
                />
                <input
                    className="password_confirmation"
                    type="password"
                    placeholder="confirm-password"
                    class="confirm-password"
                />
                <div className="error-message-register">
                    {serverError.map((error, counter) => {
                        return <p key={counter}>{error}</p>;
                    })}
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
