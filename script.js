document.addEventListener("DOMContentLoaded", () => {
    const btn = document.querySelector(".projekt-btn");
    const loader = document.getElementById("loading-screen");

    btn.addEventListener("click", (e) => {
        e.preventDefault();

        loader.style.display = "flex";

        const target = btn.getAttribute("href");

        setTimeout(() => {
            window.location.href = target;
        }, 4500);
    });
});

// Deleting virus images
document.querySelector(".ms-defender").addEventListener("click", function() {
    var length = document.querySelectorAll(".floating-virus").length;
    document.querySelector(".adware").removeAttribute("src");
    document.querySelector(".install-defender p").innerHTML = "Microsoft Defender erfolgreich installiert";
    document.querySelector(".install-defender p").style.color = "green";
    for (var i = 0; i < length; i++) {
        document.querySelectorAll(".floating-virus")[i].removeAttribute("src");
    }
});
