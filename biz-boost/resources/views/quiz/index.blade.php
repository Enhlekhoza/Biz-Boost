<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Health Assessment</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
        }
        .btn-custom:hover {
            background-color: #0056b3;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center">Business Health Assessment Questions</h1>
    <form action="{{ route('quiz.submit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="income">1. How much money does your business make each month?</label><br>
            <select class="form-control" id="income" name="income">
                <option>Less than R5,000</option>
                <option>R5,000 - R10,000</option>
                <option>R10,000 - R20,000</option>
                <option>Over R20,000</option>
            </select>
        </div>

        <div class="form-group">
            <label for="expenses">2. How much money do you spend on your business each month?</label><br>
            <select class="form-control" id="expenses" name="expenses">
                <option>Less than R2,500</option>
                <option>R2,500 - R7,500</option>
                <option>R7,500 - R15,000</option>
                <option>Over R15,000</option>
            </select>
        </div>

        <div class="form-group">
            <label>3. Do you pay yourself from your business money?</label><br>
            <select class="form-control" name="pay_self">
                <option>Yes, regularly</option>
                <option>Yes, sometimes</option>
                <option>No</option>
            </select>
        </div>

        <div class="form-group">
            <label>4. How often do you run out of money to pay bills for your business?</label><br>
            <select class="form-control" name="money_run_out">
                <option>Rarely</option>
                <option>Sometimes</option>
                <option>Often</option>
                <option>Almost always</option>
            </select>
        </div>

        <div class="form-group">
            <label>5. Do you have some money saved just for your business?</label><br>
            <select class="form-control" name="savings">
                <option>Yes, enough for 3+ months</option>
                <option>Yes, but less than 3 months</option>
                <option>No</option>
            </select>
        </div>

        <div class="form-group">
            <label>6. How often do you pay back any loans or money you owe?</label><br>
            <select class="form-control" name="loan_repayment">
                <option>Always on time</option>
                <option>Sometimes late</option>
                <option>Rarely on time</option>
                <option>I have no debt</option>
            </select>
        </div>

        <div class="form-group">
            <label>7. How often do customers pay you late?</label><br>
            <select class="form-control" name="customer_payment_late">
                <option>Rarely</option>
                <option>Sometimes</option>
                <option>Often</option>
                <option>Always</option>
            </select>
        </div>

        <div class="form-group">
            <label>8. Is most of your money earned in cash or through bank payments?</label><br>
            <select class="form-control" name="payment_method">
                <option>Mostly cash</option>
                <option>Mixed</option>
                <option>Mostly bank payments</option>
            </select>
        </div>

        <div class="form-group">
            <label>9. How long has your business been running?</label><br>
            <select class="form-control" name="business_duration">
                <option>Less than 1 year</option>
                <option>1-3 years</option>
                <option>3-5 years</option>
                <option>Over 5 years</option>
            </select>
        </div>

        <div class="form-group">
            <label>10. Do you have any employees who help you run your business?</label><br>
            <select class="form-control" name="employees">
                <option>None</option>
                <option>1-2</option>
                <option>3-5</option>
                <option>More than 5</option>
            </select>
        </div>

        <div class="form-group">
            <label>11. How often do you write down all the money your business makes and spends?</label><br>
            <select class="form-control" name="recording">
                <option>Very often</option>
                <option>Sometimes</option>
                <option>Rarely</option>
                <option>Never</option>
            </select>
        </div>

        <div class="form-group">
            <label>12. How often do you buy new supplies or products for your business?</label><br>
            <select class="form-control" name="supplies">
                <option>Weekly</option>
                <option>Bi-weekly</option>
                <option>Monthly</option>
                <option>Less than once a month</option>
            </select>
        </div>

        <div class="form-group">
            <label>13. Is your business getting more or fewer customers each year?</label><br>
            <select class="form-control" name="customer_growth">
                <option>Growing</option>
                <option>Staying the same</option>
                <option>Getting fewer customers</option>
                <option>Not sure</option>
            </select>
        </div>

        <div class="form-group">
            <label>14. Do you have a plan for where you want your business to go?</label><br>
            <select class="form-control" name="business_plan">
                <option>Yes, I update it</option>
                <option>Yes, but I haven’t updated it</option>
                <option>No</option>
            </select>
        </div>

        <div class="form-group">
            <label>15. How much of your money comes from people who buy from you again?</label><br>
            <select class="form-control" name="repeat_customers">
                <option>Over 75%</option>
                <option>50%-75%</option>
                <option>25%-50%</option>
                <option>Less than 25%</option>
            </select>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-custom rounded-pill py-3 px-4">Submit Assessment</button>
            <a class="btn btn-primary rounded-pill py-3 px-4 ms-2" href="{{ route('quiz.index') }}">Take A Quiz</a>
        </div>
    </form>
</div>

<!-- Bootstrap JS and dependencies (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>