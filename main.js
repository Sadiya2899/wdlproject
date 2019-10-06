let popupButtons = document.querySelectorAll('.popup-btn');
let serviceList = ['Electricians and Plumber', 'Packers and Movers', 'Maids', 'Pest Control', 'Tiffin Service', 'Electronics & Appliances Repair'];
let popup = document.querySelector('.popup');
let popupModal = document.querySelector('.popup-modal');
let popupLeftHalf = document.querySelector('#left-half');
let popupRightHalf = document.querySelector('#right-half');
let leftButtons = [];
let allOptions = [['Electrician', 'Carpenter', 'Plumber'], ['Domestic relocation', 'Vehicle relocation'], [], ['Mosquito control', 'Cockroach control', 'Ant control', 'Bed bug control'], [], ['AC', 'Refrigerator', 'Washing Machine', 'Water purifier']];
let allIcons = [['fas fa-tools', 'fas fa-tools', 'fas fa-tools'], ['fas fa-tools', 'fas fa-tools', 'fas fa-tools'], ['fas fa-tools', 'fas fa-tools', 'fas fa-tools'], [], [], []];
let allLinks = [['/wdl/first.php', '/', '/'], ['/abcd.html', '/'], [], ['/', '/', '/', '/'], [], ['/', '/', '/', '/']];

const BASE_URL = 'http://localhost'

const populateLeft = () => {
	leftOptions.forEach((option, index) => {
		option.addEventListener('click', () => {
			leftOptions.forEach(option => {
				option.classList.remove('selected');
			});
			option.classList.add('selected');
			populateRight(index);
		});
	});
}

const populateRight = index => {
	popupRightHalf.innerHTML = '';
	allOptions[index].forEach((option, i) => {
		popupRightHalf.innerHTML = popupRightHalf.innerHTML + '<div class="right-option"><i class="right-icon ' + allIcons[index][i] + '"></i>' + option + '</div>';
	});
	let rightOptions = document.querySelectorAll('.right-option');
	rightOptions.forEach((rightOption, i) => {
		rightOption.addEventListener('click', event => {
			// console.log(event.target.childNodes[1]);
			window.location = BASE_URL + allLinks[index][i];
		});
	});
};

popupButtons.forEach((btn, index) => {
	btn.addEventListener('click', () => {
		leftOptions[index].classList.add('selected');
		popup.style.display = "block";
		populateRight(index);
	});
});

popupButtons.forEach(icon => {
	let newIcon = icon.cloneNode(true)
	newIcon.style = 'margin-right: 3%;';
	leftButtons.push(newIcon);
});

serviceList.forEach((service, index) => {
	popupLeftHalf.innerHTML = popupLeftHalf.innerHTML + '<div class="left-option">' + leftButtons[index].outerHTML + service + '</div>'
});

let leftOptions = document.querySelectorAll('.left-option');
populateLeft();

window.onclick = event => {
	if (event.target !== popupModal && event.target === popup) {
		popup.style.display = "none";
		leftOptions.forEach(option => {
			option.classList.remove('selected');
		});
	}
}