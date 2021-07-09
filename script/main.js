window.onload = () => {
	let buttons = document.querySelectorAll(".card-item__button");
	let modal = document.querySelector(".modal-container")
	let close = document.querySelector(".close")
	buttons.forEach((e) => e.onclick = () => {
		modal.style.display = "block"

	})
	close.onclick = (e) => {
		e.preventDefault();
		modal.style.display = "none"

	}

}