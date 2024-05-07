let clickCount = 0;
const button = document.getElementById('myButton');
const clickCountDisplay = document.getElementById('clickCount');

button.addEventListener('click', () => {
  clickCount++;
  clickCountDisplay.textContent = clickCount;
});


