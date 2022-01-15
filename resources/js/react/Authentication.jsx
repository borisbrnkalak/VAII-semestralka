import React, { useEffect, useState } from "react";
import ReactDOM from "react-dom";
import Login from "./Login";
import Register from "./Register";

function Authentication() {
    const [isLogin, setIsLogin] = useState(true);

    const changeWindow = () => {
        setIsLogin(!isLogin);
    };

    return (
        <>
            {isLogin ? <Login /> : <Register />}
            <div className="register-now">
                <p>
                    No account? Don't worry, you can{" "}
                    <button
                        onClick={() => changeWindow()}
                        className="register-btn"
                        href="#"
                    >
                        register
                    </button>{" "}
                    now!
                </p>
            </div>
        </>
    );
}

let app = document.getElementById("login-react");
if (app) {
    ReactDOM.render(<Authentication />, app);
}
