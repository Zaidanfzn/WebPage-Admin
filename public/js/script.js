
//gak aku pake script nya, i forgor how to this wkwkw -DHY


// BAGIAN LOGIKA EYE-ICON PASSWORD ==================================================

let togglePasswordIcons = document.querySelectorAll(".toggle-password");

togglePasswordIcons.forEach(function(icon) {
    icon.addEventListener('click', function() {
        let passwordField = icon.previousElementSibling;

        if (passwordField.type === "password") {
            passwordField.type = "text";
            icon.src = icon.dataset.open;  
        } else {
            passwordField.type = "password";
            icon.src = icon.dataset.close; 
        }
    });
});


// BAGIAN LOGIKA SIDEBAR ==================================================

document.addEventListener('DOMContentLoaded', () => {
    const btn = document.querySelector('#btn');
    const sidebar = document.querySelector('#sidebars');

    btn.addEventListener('click', () => {
        sidebar.classList.toggle('active');
    });
});


// BAGIAN ADD DATA SCHEDULE ==================================================

document.addEventListener("DOMContentLoaded", function () {
//     const schedulePopup = document.getElementById("schedulePopup");
//     const closeSchedulePopupBtn = document.getElementById("closeSchedulePopupBtn");
//     const addScheduleForm = document.getElementById("addScheduleForm");

    if (closeSchedulePopupBtn) {
        closeSchedulePopupBtn.addEventListener("click", function () {
            schedulePopup.classList.add("hidden");
            window.location.href = "../dashboard.php"; // Mengarahkan ke dashboard.php
        });
    }

//     if (addScheduleForm) {
//         addScheduleForm.addEventListener("submit", function (event) {
//             event.preventDefault();
//             const name = document.getElementById("name").value;
//             const nim = document.getElementById("nim").value;
//             const assistantCode = document.getElementById("assistantCode").value;
//             const schedule = document.getElementById("schedule").value;

//             alert(`Schedule Added!\n\nName: ${name}\nNIM: ${nim}\nAssistant Code: ${assistantCode}\nSchedule: ${schedule}`);
//             schedulePopup.classList.add("hidden");
//         });
//     }
});

// BAGIAN ADD DATA ASSISTANT ==================================================

document.addEventListener("DOMContentLoaded", function () {
//     const assistantPopup = document.getElementById("assistantPopup");
//     const closeAssistantPopupBtn = document.getElementById("closeAssistantPopupBtn");
//     const addAssistantForm = document.getElementById("addAssistantForm");

    if (closeAssistantPopupBtn) {
        closeAssistantPopupBtn.addEventListener("click", function () {
            assistantPopup.classList.add("hidden");
            window.location.href = "../assistant.php"; // Mengarahkan ke assistant.php
        });
    }

//     if (addAssistantForm) {
//         addAssistantForm.addEventListener("submit", function (event) {
//             event.preventDefault();
//             const assistantName = document.getElementById("assistantName").value;
//             const assistantNIM = document.getElementById("assistantNIM").value;
//             const assistantCode = document.getElementById("assistantCode").value;

//             alert(`Assistant Added!\n\nName: ${assistantName}\nNIM: ${assistantNIM}\nAssistant Code: ${assistantCode}`);
//             assistantPopup.classList.add("hidden");
//         });
//     }
});

// BAGIAN ADD DATA SHIFT ==================================================

document.addEventListener("DOMContentLoaded", function () {
//     const shiftPopup = document.getElementById("shiftPopup");
//     const closeShiftPopupBtn = document.getElementById("closeShiftPopupBtn");
//     const addShiftForm = document.getElementById("addShiftForm");

    if (closeShiftPopupBtn) {
        closeShiftPopupBtn.addEventListener("click", function () {
            shiftPopup.classList.add("hidden");
            window.location.href = "../shift.php"; // Mengarahkan ke shift.php
        });
    }

//     if (addShiftForm) {
//         addShiftForm.addEventListener("submit", function (event) {
//             event.preventDefault();
//             const shift = document.getElementById("shift").value;
//             const startTime = document.getElementById("startTime").value;
//             const endTime = document.getElementById("endTime").value;

//             alert(`Shift Added!\n\nShift: ${shift}\nStart Time: ${startTime}\nEnd Time: ${endTime}`);
//             shiftPopup.classList.add("hidden");
//         });
//     }
});

// BAGIAN EDIT DATA SCHEDULE ==================================================

document.addEventListener('DOMContentLoaded', function() {
//     const editSchedulePopup = document.getElementById('editSchedulePopup');
//     const closeEditSchedulePopupBtn = document.getElementById('closeEditSchedulePopupBtn');
//     const editScheduleForm = document.getElementById('editScheduleForm');

//     function showEditSchedulePopup() {
//         editSchedulePopup.classList.remove('hidden');
//         populateEditScheduleForm(); // Populate the form with data from localStorage
//     }

//     function hideEditSchedulePopup() {
//         editSchedulePopup.classList.add('hidden');
//     }

    if (closeEditSchedulePopupBtn) {
        closeEditSchedulePopupBtn.addEventListener("click", function () {
            hideEditSchedulePopup();
            window.location.href = "../dashboard.php"; // Mengarahkan ke dashboard.php
        });
    }

//     function populateEditScheduleForm() {
//         const data = {
//             id: localStorage.getItem('editScheduleId'),
//             name: localStorage.getItem('editScheduleName'),
//             nim: localStorage.getItem('editScheduleNim'),
//             assistantCode: localStorage.getItem('editScheduleCode'),
//             schedule: localStorage.getItem('editScheduleSchedule')
//         };

//         if (data) {
//             document.getElementById('editId').value = data.id;
//             document.getElementById('editName').value = data.name;
//             document.getElementById('editNim').value = data.nim;
//             document.getElementById('editAssistantCode').value = data.assistantCode;
//             document.getElementById('editSchedule').value = data.schedule;
//         }
//     }

//     if (editScheduleForm) {
//         editScheduleForm.addEventListener("submit", function (event) {
//             event.preventDefault();
//             const id = document.getElementById('editId').value;
//             const name = document.getElementById('editName').value;
//             const nim = document.getElementById('editNim').value;
//             const assistantCode = document.getElementById('editAssistantCode').value;
//             const schedule = document.getElementById('editSchedule').value;

//             alert(`Schedule Updated!\n\nID: ${id}\nName: ${name}\nNIM: ${nim}\nAssistant Code: ${assistantCode}\nSchedule: ${schedule}`);
//             hideEditSchedulePopup();
//         });
//     }
});

// BAGIAN EDIT DATA ASSISTANT ==================================================

document.addEventListener("DOMContentLoaded", function () {
//     const editAssistantPopup = document.getElementById("editAssistantPopup");
//     const closeEditAssistantPopupBtn = document.getElementById("closeEditAssistantPopupBtn");
//     const editAssistantForm = document.getElementById("editAssistantForm");

//     function showEditAssistantPopup() {
//         editAssistantPopup.classList.remove('hidden');
//         populateEditAssistantForm(); // Populate the form with data from localStorage
//     }

//     function hideEditAssistantPopup() {
//         editAssistantPopup.classList.add('hidden');
//     }

    if (closeEditAssistantPopupBtn) {
        closeEditAssistantPopupBtn.addEventListener("click", function () {
            hideEditAssistantPopup();
            window.location.href = "../assistant.php";
        });
    }

//     function populateEditAssistantForm() {
//         const data = {
//             name: localStorage.getItem('editAssistantName'),
//             nim: localStorage.getItem('editAssistantNIM'),
//             code: localStorage.getItem('editAssistantCode')
//         };

//         if (data) {
//             document.getElementById('editAssistantName').value = data.name;
//             document.getElementById('editAssistantNIM').value = data.nim;
//             document.getElementById('editAssistantCode').value = data.code;
//         }
//     }

//     if (editAssistantForm) {
//         editAssistantForm.addEventListener("submit", function (event) {
//             event.preventDefault();
//             const name = document.getElementById("editAssistantName").value;
//             const nim = document.getElementById("editAssistantNIM").value;
//             const code = document.getElementById("editAssistantCode").value;

//             alert(`Assistant Updated!\n\nName: ${name}\nNIM: ${nim}\nAssistant Code: ${code}`);
//             hideEditAssistantPopup();
//         });
//     }
});

// BAGIAN EDIT DATA SHIFT ==================================================

document.addEventListener("DOMContentLoaded", function () {
//     const editShiftPopup = document.getElementById("editShiftPopup");
//     const closeEditShiftPopupBtn = document.getElementById("closeEditShiftPopupBtn");
//     const editShiftForm = document.getElementById("editShiftForm");

//     function showEditShiftPopup() {
//         editShiftPopup.classList.remove('hidden');
//         populateEditShiftForm(); // Populate the form with data from localStorage
//     }

//     function hideEditShiftPopup() {
//         editShiftPopup.classList.add('hidden');
//     }

    if (closeEditShiftPopupBtn) {
        closeEditShiftPopupBtn.addEventListener("click", function () {
            hideEditShiftPopup();
            window.location.href = "../shift.php"; // Mengarahkan ke shift.php
        });
    }

//     function populateEditShiftForm() {
//         const data = {
//             shift: localStorage.getItem('editShift'),
//             startTime: localStorage.getItem('editStartTime'),
//             endTime: localStorage.getItem('editEndTime')
//         };

//         if (data) {
//             document.getElementById('editShift').value = data.shift;
//             document.getElementById('editStartTime').value = data.startTime;
//             document.getElementById('editEndTime').value = data.endTime;
//         }
//     }

//     if (editShiftForm) {
//         editShiftForm.addEventListener("submit", function (event) {
//             event.preventDefault();
//             const shift = document.getElementById("editShift").value;
//             const startTime = document.getElementById("editStartTime").value;
//             const endTime = document.getElementById("editEndTime").value;

//             alert(`Shift Updated!\n\nShift: ${shift}\nStart Time: ${startTime}\nEnd Time: ${endTime}`);
//             hideEditShiftPopup();
//         });
//     }
});


// BAGIAN DELETE DATA ==================================================

// document.addEventListener("DOMContentLoaded", function () {
//     const deleteConfirmationPopup = document.getElementById("deleteConfirmationPopup");
//     const cancelDeleteBtn = document.getElementById("cancelDeleteBtn");
//     const confirmDeleteBtn = document.getElementById("confirmDeleteBtn");
//     let deleteCallback = null;

//     function showDeleteConfirmationPopup(callback) {
//         deleteCallback = callback;
//         if (deleteConfirmationPopup) {
//             deleteConfirmationPopup.classList.remove("hidden");
//         }
//     }

//     function hideDeleteConfirmationPopup() {
//         if (deleteConfirmationPopup) {
//             deleteConfirmationPopup.classList.add("hidden");
//         }
//     }

//     // Event listeners untuk tombol "No" dan "Yes"
//     if (cancelDeleteBtn) {
//         cancelDeleteBtn.addEventListener("click", function () {
//             hideDeleteConfirmationPopup();
//         });
//     }

//     if (confirmDeleteBtn) {
//         confirmDeleteBtn.addEventListener("click", function () {
//             if (deleteCallback) {
//                 deleteCallback(); // Jalankan callback untuk menghapus data
//                 alert("Data berhasil dihapus");
//             }
//             hideDeleteConfirmationPopup();
//         });
//     }

//     // Event listener untuk link delete
//     document.querySelectorAll(".delete-link").forEach(link => {
//         link.addEventListener("click", function (event) {
//             event.preventDefault(); // Mencegah navigasi default
//             const deleteAction = () => {
//                 // Logika penghapusan data dapat dimasukkan di sini
//                 console.log("Data dihapus");
//             };
//             showDeleteConfirmationPopup(deleteAction);
//         });
//     });
// });