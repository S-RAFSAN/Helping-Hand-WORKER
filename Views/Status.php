<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helping Hand Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            height: 100vh;
            margin: 0;
            padding: 0;
            background: rgb(167, 254, 255);
            background: linear-gradient(0deg, rgba(167, 254, 255, 1) 0%, rgba(255, 228, 170, 1) 100%);
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="datetime-local"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container">
        
        <h3>Awaiting Task</h3>
        <form id="awaited-task-form">
            <div class="form-group">
                <label for="service-description">Service description:</label>
                <input type="text" id="service-description" name="service-description"
                    placeholder="Enter service description">
            </div>
            <div class="form-group">
                <label>Service Type:</label>
                <div class="select-checkboxes">
                    <label><input type="checkbox" name="service-type" value="Sweeping floor"> Sweeping floor</label>
                    <label><input type="checkbox" name="service-type" value="Washing Dishes"> Washing Dishes</label>
                    <label><input type="checkbox" name="service-type" value="Doing Laundry"> Doing Laundry</label>
                    <label><input type="checkbox" name="service-type" value="Cleaning Toilet"> Cleaning Toilet</label>
                    <label><input type="checkbox" name="service-type" value="Cooking"> Cooking</label>
                    <label><input type="checkbox" name="service-type" value="Dusting and Polishing"> Dusting and
                        Polishing</label>
                </div>
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" id="location" name="location" placeholder="Enter your location">
            </div>
            <div class="form-group">
                <label for="awaited-task-datetime">Task Deadline:</label>
                <input type="datetime-local" id="awaited-task-datetime" name="awaited-task-datetime">
            </div>
            <div class="form-group">
                <label for="payment-status">Payment Status:</label>
                <input type="text" id="payment-status" name="payment-status" placeholder="Enter payment status">
            </div>
            <button type="submit">Add Awaited Task</button>
        </form>
    </div>

</body>

</html>