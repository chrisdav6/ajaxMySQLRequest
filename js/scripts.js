const partName = document.querySelector('#partName');
const partNumber = document.querySelector('#partNumber');
const description = document.querySelector('#description');
const vendor = document.querySelector('#vendor');
const qty = document.querySelector('#qty');
const time = document.querySelector('#time');
const message = document.querySelector('.message');

partName.addEventListener('input', e => {
  console.log(e.target.value);

  async function getData() {
    let response = await fetch('./js/mockDb.json');
    let data = await response.json();

    const foundPart = await data.parts.find(part => part.partName.includes(e.target.value));
    console.log(foundPart);

    if (!foundPart) {
      message.classList.add('show');
      partNumber.value = '';
      description.value = '';
      vendor.value = '';
      qty.value = '';
      time.value = '';
    } else {
      message.classList.remove('show');
      //Populate HTML
      partNumber.value = foundPart.partNumber;
      description.value = foundPart.description;
      vendor.value = foundPart.vendor;
      qty.value = foundPart.qty;
      time.value = foundPart.vendorTurnaround;
    }

    //Clear inputs if partNumber field is blank
    if (partName.value === '') {
      //Clear Values from form
      partNumber.value = '';
      description.value = '';
      vendor.value = '';
      qty.value = '';
      time.value = '';
    }
  }

  getData();
});
