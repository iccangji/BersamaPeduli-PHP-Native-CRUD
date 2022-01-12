var jsAmount = document.querySelectorAll('.js-amount');
	var inputField = document.querySelector("[name=jumlah-don");
	Array.from(jsAmount).forEach(link => {
		link.addEventListener('click', function(event) {
			inputField.value = this.dataset.value;

		});
	});