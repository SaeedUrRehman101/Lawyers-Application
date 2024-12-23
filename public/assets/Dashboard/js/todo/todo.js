var notificationTimeout;

    // Function to show notification
    var showNotification = function (task, message, type) {
      var $popup = $(".notification-popup");
      $popup.find(".task").text(task);
      $popup.find(".notification-text").text(message);
      $popup.removeClass("hide success");
      if (type) $popup.addClass(type);
      if (notificationTimeout) clearTimeout(notificationTimeout);
      notificationTimeout = setTimeout(function () {
        $popup.addClass("hide");
      }, 3000);
    };

!(function ($) {
  $(document).ready(function () {
    // Function to add a new task
    var addTask = function () {
      var taskValue = $("#new-task").val();
      if (taskValue === "") {
        $("#new-task").addClass("error");
        $(".new-task-wrapper .error-message").removeClass("hidden");
      } else {
        var $taskTemplate = $($("#task-template").html());
        $taskTemplate.find(".task-label").val(taskValue); // Set value in input
        $("#todo-list").prepend($taskTemplate);
        $("#new-task").val("");
        showNotification(taskValue, "added to the list", "success");
      }
    };

    // Event to handle adding tasks
    $("#add-task").click(addTask);

    // Delete task on click
    $("#todo-list").on("click", ".task-action-btn .delete-btn", function () {
      var $task = $(this).closest(".task");
      var taskValue = $task.find(".task-label").val();
      $task.remove();
      showNotification(taskValue, "has been deleted.");
    });

    // Add task on Enter key, close on Escape key
    $("#new-task").keydown(function (e) {
      if (e.keyCode === 13) {
        e.preventDefault();
        addTask();
      } else if (e.keyCode === 27) {
        $(this).val("");
      }
    });
  });

})(jQuery);


// Function to format date and time
function formatDateTime(isoDateTime) {
  var date = new Date(isoDateTime);
  var options = {
    year: "numeric",
    month: "short",
    day: "2-digit",
    hour: "2-digit",
    minute: "2-digit",
    hour12: true, // For AM/PM format
  };
  return date.toLocaleString("en-US", options); // Returns formatted string
}

// Function to format time in 12-hour format with AM/PM
function formatTimeTo12Hour(time) {
  const [hour, minute] = time.split(":");
  let formattedHour = parseInt(hour, 10);
  const ampm = formattedHour >= 12 ? "PM" : "AM";
  formattedHour = formattedHour % 12 || 12; // Convert to 12-hour format
  return `${formattedHour}:${minute} ${ampm}`;
}


// Add Task Function
function addTask() {
  var taskValue = $("#new-task").val(); // Get start time value from input
  var endTime = $("#end-time").val();   // Get end time value from input

  if (taskValue === "" || endTime === "") {
    // Show error if either input is empty
    $("#new-task").addClass("error");
    $(".new-task-wrapper .error-message").removeClass("hidden");
  } else {
    // Format the input date and time
    var formattedStartTime = formatDateTime(taskValue);
    var formattedEndTime = formatTimeTo12Hour(endTime); // Format end time to 12-hour format

    // Clone the task template
    var $taskTemplate = $($("#task-template").html());

    // Set the formatted values in the task inputs
    $taskTemplate.find(".task-label").val(formattedStartTime);
    $taskTemplate.find(".task-end-time").val(formattedEndTime);

    // Append the new task to the list
    $("#todo-list").prepend($taskTemplate);

    // Reset the input fields
    $("#new-task").val("");
    $("#end-time").val("");

    // Show success notification
    showNotification(formattedStartTime + " to " + formattedEndTime, "added to the list", "success");
  }
}


// Attach the addTask function to button click
$("#add-task").click(addTask);

// For 'Enter' key in input field
$("#new-task").keydown(function (e) {
  if (e.keyCode === 13) {
    e.preventDefault();
    addTask();
  }
});