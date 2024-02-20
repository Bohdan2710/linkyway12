function calculatorPackages(){
  // Function to update the amount
  function updateTotalSum() {
    //value forms
    const valueOptionNiche = $('select[name="niche"] option:selected').val(),
      valueOptionLanguage = $('select[name="language"] option:selected').val(),
      valueOptionCountry = $('select[name="country"] option:selected').val(),
      valueQuantity = $('input[name="quantity"]').val(),
      //result
      totalText = $(".total__sum"),
      //result in block approximatePrice
      approximatePrice = $(".request_packages__sum"),
      //array niche for checks
      nicheOptions = ["Adult", "Essay", "Gambling/betting", "Crypto"],
      isNicheValid = nicheOptions.includes(valueOptionNiche);
    let total = 0;

    if (
      isNicheValid &&
      valueOptionLanguage === "English" &&
      valueOptionCountry === "USA"
    ) {
      total = valueQuantity * 180;
      totalText.text(`$${total}`);
      approximatePrice.text(`$${valueQuantity * 35 + total}`);
    } else if (
      !isNicheValid &&
      valueOptionLanguage === "English" &&
      valueOptionCountry === "USA"
    ) {
      total = valueQuantity * 100;
      totalText.text(`$${total}`);
      approximatePrice.text(`$${valueQuantity * 35 + total}`);
    } else if (
      !isNicheValid &&
      valueOptionLanguage === "Ukrainian" &&
      valueOptionCountry === "Ukraine"
    ) {
      total = valueQuantity * 20;
      totalText.text(`$${total}`);
      approximatePrice.text(`$${valueQuantity * 35 + total}`);
    } else if (
      isNicheValid &&
      valueOptionLanguage === "Ukrainian" &&
      valueOptionCountry === "Ukraine"
    ) {
      total = valueQuantity * 50;
      totalText.text(`$${total}`);
      approximatePrice.text(`$${valueQuantity * 35 + total}`);
    } else if (
      !isNicheValid &&
      (valueOptionLanguage === "French" ||
        valueOptionLanguage === "German" ||
        valueOptionLanguage === "Other" ||
        valueOptionLanguage === "English")
    ) {
      total = valueQuantity * 130;
      totalText.text(`$${total}`);
      approximatePrice.text(`$${valueQuantity * 35 + total}`);
    } else if (
      isNicheValid &&
      (valueOptionLanguage === "French" ||
        valueOptionLanguage === "German" ||
        valueOptionLanguage === "Other" ||
        valueOptionLanguage === "English")
    ) {
      total = valueQuantity * 180;
      totalText.text(`$${total}`);
      approximatePrice.text(`$${valueQuantity * 35 + total}`);
    } else {
      totalText.text(`$-`);
      approximatePrice.text(`$-`);
    }
  }

  // Calling a function when values ​​in a form change
  $(
    'select[name="niche"], select[name="language"], select[name="country"], input[name="quantity"]'
  ).on("change", updateTotalSum);

  // Initialization on page load
  updateTotalSum();
}
export { calculatorPackages };