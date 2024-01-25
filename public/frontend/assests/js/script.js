

function performSearch() {
  var searchValue = document
    .getElementById("combinedSearch")
    .value.toLowerCase();

  // Get the list items
  var listItems = document.querySelectorAll(".filterOneDiv");

  // Iterate through the list items
  listItems.forEach(function (item) {
    var name = item.getAttribute("data-name").toLowerCase();
    var position = item.getAttribute("data-position").toLowerCase();

    // Check if the item matches the search criteria
   if (
     name.includes(searchValue) ||
     position.includes(searchValue) ||
     !searchValue
   ) {
     item.style.display = "block";
   } else {
     item.style.display = "none";
   }
  });
}











// funcation  to filter elements based on the category, name, and position

// function MeetTeamFilter(category) {
//   var elements = document.querySelectorAll(".filterDiv");

//   // show all elements if the category is 'all'

//   if (category === "all") {
//     elements.forEach(function (element) {
//       element.style.display = "block";
//     });
//   } else {
//     // hide all elements and then show only those with the selected category
//     elements.forEach(function (element) {
//       element.style.display = "none";
//     });

//     var filteredElements = document.querySelectorAll("." + category);

//       filteredElements.forEach(function (element) {
//         element.style.display = "block";
//       });

//   }

//   var buttons = document.querySelectorAll('.Btns');
//   buttons.forEach(function (button) {
//     button.classList.remove('active');

//   });

//   Event.currentTarget.classList.add('active');

// }

// MeetTeamFilter("all");

// function MeetTeamFilter(c) {
//   let x, i;
//   x = document.getElementsByClassName("filterDiv");
//   if (c === "all") c = "";

//   for (i = 0; i < x.length; i++) {
//     TeamRemoveClass(x[i], "show");
//     if (x[i].className.indexOf(c) > -1) TeamAddClass(x[i], "show");
//   }
// }

// // Show filtered elements
// function TeamAddClass(element, name) {
//   let i, arr1, arr2;
//   arr1 = element.className.split(" ");
//   arr2 = name.split(" ");
//   for (i = 0; i < arr2.length; i++) {
//     if (arr1.indexOf(arr2[i]) == -1) {
//       element.className += " " + arr2[i];
//     }
//   }
// }

// // Hide elements that are not selected
// function TeamRemoveClass(element, name) {
//   let i, arr1, arr2;
//   arr1 = element.className.split(" ");
//   arr2 = name.split(" ");
//   for (i = 0; i < arr2.length; i++) {
//     while (arr1.indexOf(arr2[i]) > -1) {
//       arr1.splice(arr1.indexOf(arr2[i]), 1);
//     }
//   }
//   element.className = arr1.join(" ");
// }

// // Add active class to the current control button (highlight it)

// let btnContainer = document.getElementById("myBtnContainer");
// let btns = btnContainer.getElementsByClassName("Btns");
// for (var i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function () {
//     let current = document.getElementsByClassName("active");
//     current[0].className = current[0].className.replace(" active", "");
//     this.className += " active";
//   });
// }

// // function to handle combined name and position search

// function combinedSearch() {
//   var searchValue = document
//     .getElementById("combinedSearch")
//     .value.toLowerCase();
//   var elements = document.querySelectorAll(".filterDiv");

//   elements.forEach(function (element) {
//     var name = element.getAttribute("data-name").toLowerCase();
//     var position = element.getAttribute("data-position").toLowerCase();

//     // Show the element if it matches the search criteria or if no criteria are provided
//     if (
//       name.includes(searchValue) ||
//       position.includes(searchValue) ||
//       !searchValue
//     ) {
//       element.style.display = "block";
//     } else {
//       element.style.display = "none";
//     }
//   });
// }

// // Attach the search function to the input field's input event
// document
//   .getElementById("combinedSearch")
//   .addEventListener("input", combinedSearch);
