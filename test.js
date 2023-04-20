const form = document.querySelector('form');
const submitBtn = document.getElementById('submit-btn');
const resetBtn = document.getElementById('reset-btn');

form.addEventListener('submit', e => {
	e.preventDefault();
	const formData = new FormData(form);
	fetch('submit.php', {
		method: 'POST',
		body: formData
	})
	.then(response => response.text())
	.then(data => {
		console.log(data);
		form.reset();
		alert('Student information saved successfully!');
	})
	.catch(error => {
		console.error(error);
		alert('An error occurred while saving the student information!');
	});
});

resetBtn.addEventListener('click', e => {
	form.reset();
});
