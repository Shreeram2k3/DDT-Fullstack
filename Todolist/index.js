
    const form = document.getElementById("form");
    const taskList = document.getElementById("taskList");

    // Function to render tasks from local storage
    function renderTasks() {
      const tasks = JSON.parse(localStorage.getItem("tasks")) || [];
      taskList.innerHTML = ""; // Clear the existing tasks
      tasks.forEach(task => {
        const li = document.createElement("li");
        li.innerHTML = `<label><input type="checkbox" ${task.completed ? 'checked' : ''}> ${task.Task}</label>`;
        taskList.appendChild(li);
      });
    }

    form.addEventListener("submit", function (ev) {
      ev.preventDefault();
      const taskInput = document.getElementById("taskinp");
      const taskValue = taskInput.value.trim();

      if (taskValue === "") {
        alert("Please enter a task.");
        return;
      }

      // Retrieve existing tasks or initialize to empty array
      const tasks = JSON.parse(localStorage.getItem("tasks")) || [];

      // Add the new task
      tasks.push({
        "Task": taskValue,
        "completed": false
      });

      // Save updated tasks array back to local storage
      localStorage.setItem("tasks", JSON.stringify(tasks));

      // Clear input and re-render tasks
      taskInput.value = "";
      renderTasks();
      alert("Task added!");
    });

    // Render tasks on page load
    renderTasks();
  