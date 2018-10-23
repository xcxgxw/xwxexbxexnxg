var colorPickers = document.querySelectorAll('.main__colorpicker');
var hexCodeInputs = document.querySelectorAll('.main__hexcode');
var shareInput = document.getElementById('share-colors');
var radioInputs = document.querySelectorAll('.radio__input');

function handleColorPickerUpdate() {
  document.documentElement.style.setProperty('--' + this.id, this.value);
  var hexcodeDiv = document.querySelectorAll('.main__hexcode[data-color=\'' + this.id + '\']');

  hexcodeDiv[0].value = this.value;
  generateShareString();
}

colorPickers.forEach(function (input) {
  input.addEventListener('change', handleColorPickerUpdate);
});

function updateShareInput(newStr, presetThemeId) {
  if (!newStr) newStr = '#4D394B,#3E313C,#4C9689,#FFFFFF,#3E313C,#FFFFFF,#38978D,#EB4D5C';

  if (!presetThemeId) presetThemeId = 'aubergine';

  shareInput.value = newStr;
  var evt = new CustomEvent('change');
  shareInput.dispatchEvent(evt);

  localStorage.setItem('slack-demo-theme', newStr);
  if (presetThemeId) {
    document.getElementById(presetThemeId).checked = true;
    localStorage.setItem('slack-demo-theme-id', presetThemeId);
  } else {
    localStorage.removeItem('slack-demo-theme-id');
  }
}

function generateShareString() {
  var shareArr = [];

  colorPickers.forEach(function (input) {
    var colorHex = window.getComputedStyle(document.body).getPropertyValue('--' + input.id).trim();
    input.value = colorHex;

    var hexcodeDiv = document.querySelectorAll('.main__hexcode[data-color=\'' + input.id + '\']');

    hexcodeDiv[0].value = colorHex;
    shareArr.push(colorHex);
  });
  var themeStr = shareArr.join(',');

  if (shareInput.value.toUpperCase() !== themeStr.toUpperCase()) updateShareInput(themeStr);
}

function handleShareUpdate() {
  var newShareArr = shareInput.value.split(',');

  newShareArr.forEach(function (hexcode, i) {
    var trimmedHex = hexcode.trim();
    var colorPicker = colorPickers[i];

    if (colorPicker.value === trimmedHex || !/^#[0-9a-f]{3}[0-9a-f]{3}?$/i.test(trimmedHex)) return;
    colorPicker.value = trimmedHex;
    var evt = new CustomEvent('change');
    colorPicker.dispatchEvent(evt);
  });
}

shareInput.addEventListener('keyup', handleShareUpdate);
shareInput.addEventListener('change', handleShareUpdate);

function handleHexCodeInputChange() {
  var hexCode = this.value;
  if (/^#[0-9a-f]{3}[0-9a-f]{3}?$/i.test(hexCode)) {
    var colorPicker = document.getElementById(this.getAttribute('data-color'));
    colorPicker.value = hexCode;
    var evt = new CustomEvent('change');
    colorPicker.dispatchEvent(evt);
  }
}

hexCodeInputs.forEach(function (input) {
  ['keyup', 'change'].forEach(function (evt) {
    input.addEventListener(evt, handleHexCodeInputChange);
  });
});

function updateTheme() {
  var hexString = void 0;

  switch (this.id) {
    case 'aubergine':
      hexString = '#4D394B,#3E313C,#4C9689,#FFFFFF,#3E313C,#FFFFFF,#38978D,#EB4D5C';
      break;
    case 'hoth':
      hexString = '#F8F8FA,#F8F8FA,#CAD1D9,#FFFFFF,#FFFFFF,#383F45,#60D156,#FF8669';
      break;
    case 'monument':
      hexString = '#0D7E83,#076570,#F79F66,#FFFFFF,#D37C71,#FFFFFF,#F79F66,#F15340';
      break;
    case 'chocolate':
      hexString = '#544538,#42362B,#5DB09D,#FFFFFF,#4A3C30,#FFFFFF,#FFFFFF,#5DB09D';
      break;
    case 'ochin':
      hexString = '#303E4D,#2C3849,#6698C8,#FFFFFF,#4A5664,#FFFFFF,#94E864,#78AF8F';
      break;
    case 'workhard':
      hexString = '#4D5250,#444A47,#D39B46,#FFFFFF,#434745,#FFFFFF,#99D04A,#DB6668';
      break;
    case 'solanum':
      hexString = '#4F2F4C,#452842,#8C5888,#FFFFFF,#3E313C,#FFFFFF,#D0FF00,#889100';
      break;
    case 'brinjal':
      hexString = '#4F2F4C,#452842,#8C5888,#FFFFFF,#3E313C,#FFFFFF,#00FFB7,#DE4C0D';
      break;}


  updateShareInput(hexString, this.id);
}

radioInputs.forEach(function (radio) {
  radio.addEventListener('click', updateTheme);
});

updateShareInput(localStorage.getItem('slack-demo-theme'), localStorage.getItem('slack-demo-theme-id'));