
document.addEventListener("DOMContentLoaded", function () {
    const addButton = document.getElementById("add_btn");
    const container = document.getElementById("inputFieldsContainer");

    function createInputField() {
        const newInputGroup = document.createElement("div");
        newInputGroup.classList.add("input-group", "mb-3");

        newInputGroup.innerHTML = `
            <div class="input-group mb-3">
                <span class="input-group-text border border-primary bg-primary-subtle" id="inputGroup-sizing-default"><span class="paddinAnswer">Answer</span></span>
                <input  type="text" name="answer[]" class="form-control border border-primary" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                <span class="input-group-text border border-primary bg-danger" id="inputGroup-sizing-default">
                    <button type="button" class="btn text-black fw-bold remove_btn"><b><i class="bi bi-dash-lg"></i></b></button>
                </span>
            </div>
        `;

        return newInputGroup;
    }

    // Initialize with four input fields
    for (let i = 0; i < 3; i++) {
        container.appendChild(createInputField());
    }

    addButton.addEventListener("click", function () {
        container.appendChild(createInputField());
    });

    container.addEventListener("click", function (event) {
        if (event.target.classList.contains("remove_btn")) {
            const inputGroups = container.querySelectorAll(".input-group");
            if (inputGroups.length > 4) {
                event.target.closest(".input-group").remove();
            } else {
                alert("You must have at least 4 input fields.");
            }
        }
    });
});
//no limit
//---------------------------

// document.addEventListener("DOMContentLoaded", function () {
//     const addButton = document.getElementById("add_btn");
//     const container = document.getElementById("inputFieldsContainer");

//     addButton.addEventListener("click", function () {
//         const newInputGroup = document.createElement("div");
//         newInputGroup.classList.add("input-group", "mb-3");

//         newInputGroup.innerHTML = `
//         <div class="input-group mb-3">
//         <span class="input-group-text border border-primary bg-primary-subtle" id="inputGroup-sizing-default">Answer</span>
//         <input type="text" name="answer[]" class="form-control border border-primary" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
//         <span class="input-group-text border border-primary bg-danger-subtle" id="inputGroup-sizing-default"><button type="button" class="btn btn-danger remove_btn">-</button></span>
//     </div>
//         `;

//         container.appendChild(newInputGroup);
//     });

//     container.addEventListener("click", function (event) {
//         if (event.target.classList.contains("remove_btn")) {
//             event.target.closest(".input-group").remove();
//         }
//     });
// });
