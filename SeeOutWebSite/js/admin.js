

function printError(x){

    let mes= '';
    for (var j = 0; j < x.length; j++) 
        mes=mes+x[j]+'\n';

    swal({
        title: "invalid inputs",
        text: mes,
        icon: null,
        button: "ok",
      });
}

   


function changeImage(newSrc, link) {                  //change icons when "onmuseover" or "onmuseout"
    var x = document.getElementById(link);
    x.src = newSrc;
    x.style.display = "inline";
}




//////////////////////////////////////////////////////////////////////////////users


function toggleDropdown() {
    var dropdownContent = document.getElementById('dropdownContent');
    if (dropdownContent.style.display === "none" || dropdownContent.style.display === "") {
        dropdownContent.style.display = "block";
    } else {
        dropdownContent.style.display = "none";
    }
}

function filterOptions() {
    var input = document.getElementById('searchInput');
    var filter = input.value.toLowerCase();
    var select = document.getElementById('listbox');
    var options = select.getElementsByTagName('option');

    for (var i = 0; i < options.length; i++) {
        var txtValue = options[i].textContent || options[i].innerText;
        if (txtValue.toLowerCase().indexOf(filter) > -1) {
            options[i].style.display = "";
        } else {
            options[i].style.display = "none";
        }
    }
}

function selectOption() {
    var select = document.getElementById('listbox');
    var selectedItem = select.value;
    document.querySelector('.dropdown-button').textContent = selectedItem;
    document.getElementById('info').textContent = 'You selected: ' + selectedItem;
    toggleDropdown();
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.closest('#dropdownContainer')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.style.display === "block") {
                openDropdown.style.display = "none";
            }
        }
    }
}

// Generate options dynamically
function generateOptions(numberOfOptions) {
    var select = document.getElementById('listbox');
    for (var i = 1; i <= numberOfOptions; i++) {
        var option = document.createElement('option');
        option.value = 'Item ' + i;
        option.textContent = 'Item ' + i;
        select.appendChild(option);
    }
}

// Call the function to generate options
generateOptions(10); // Change the number 10 to any number you want