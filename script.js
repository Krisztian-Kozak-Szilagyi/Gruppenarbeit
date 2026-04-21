document.addEventListener("DOMContentLoaded", () => {
        const btn = document.querySelector(".projekt-btn");
        const loader = document.getElementById("loading-screen");

        btn.addEventListener("click", (e) => {
            e.preventDefault();

            loader.style.display = "flex";

            const target = btn.getAttribute("href");

            setTimeout(() => {
                window.location.href = target;
            }, 4000);
        });
});
