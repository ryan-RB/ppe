document.addEventListener("DOMContentLoaded", e => {
    
    const elements = document.querySelectorAll("input");
    const el = document.querySelector(".forma");

    const form = {
        first_name: document.getElementsByName("nom")[0],
        last_name: document.getElementsByName("prenom")[0],
        phone: document.getElementsByName("phone")[0],
        date: document.getElementsByName("date")[0],
        btn_validation: document.querySelector("button"),
        warning: document.querySelector(".warning"),
        info: [],
        control() {
            if (this.first_name.value && this.last_name.value && this.phone.value && this.date.value) {
                form.info.push(this.first_name.value, this.last_name.value, this.date.value, this.phone.value);
                localStorage.setItem('User', JSON.stringify(form.info));
                form.warning.classList.remove("show-warning");
            } else {
                form.warning.classList.add("show-warning");
                form.warning.innerText = "Veuillez remplir les champs vides.";
            }
        }
    };

    //console.log(btn_validation)

    form.btn_validation.addEventListener("click", e => {
        e.preventDefault();
        
    });
});