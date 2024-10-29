<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Financial Health Quiz</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4 text-success">Business Financial Health Quiz</h1>
        <form action="/quiz/submit" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> <!-- CSRF token for security -->

            <!-- Question 1 -->
            <div class="mb-4">
                <label for="q1" class="form-label text-success"><strong>1. How much money does your business make each month?</strong></label>
                <div>
                    <input type="radio" name="q1" value="Less than R5,000"> Less than R5,000<br>
                    <input type="radio" name="q1" value="R5,000 - R10,000"> R5,000 - R10,000<br>
                    <input type="radio" name="q1" value="R10,000 - R20,000"> R10,000 - R20,000<br>
                    <input type="radio" name="q1" value="Over R20,000"> Over R20,000
                </div>
            </div>

            <!-- Question 2 -->
            <div class="mb-4">
                <label for="q2" class="form-label text-success"><strong>2. How much money do you spend on your business each month?</strong></label>
                <div>
                    <input type="radio" name="q2" value="Less than R2,500"> Less than R2,500<br>
                    <input type="radio" name="q2" value="R2,500 - R7,500"> R2,500 - R7,500<br>
                    <input type="radio" name="q2" value="R7,500 - R15,000"> R7,500 - R15,000<br>
                    <input type="radio" name="q2" value="Over R15,000"> Over R15,000
                </div>
            </div>

            <!-- Question 3 -->
            <div class="mb-4">
                <label for="q3" class="form-label text-success"><strong>3. Do you pay yourself from your business money?</strong></label>
                <div>
                    <input type="radio" name="q3" value="Yes, regularly"> Yes, regularly<br>
                    <input type="radio" name="q3" value="Yes, sometimes"> Yes, sometimes<br>
                    <input type="radio" name="q3" value="No"> No
                </div>
            </div>

            <!-- Question 4 -->
            <div class="mb-4">
                <label for="q4" class="form-label text-success"><strong>4. How often do you run out of money to pay bills for your business?</strong></label>
                <div>
                    <input type="radio" name="q4" value="Rarely"> Rarely<br>
                    <input type="radio" name="q4" value="Sometimes"> Sometimes<br>
                    <input type="radio" name="q4" value="Often"> Often<br>
                    <input type="radio" name="q4" value="Almost always"> Almost always
                </div>
            </div>

            <!-- Question 5 -->
            <div class="mb-4">
                <label for="q5" class="form-label text-success"><strong>5. Do you have some money saved just for your business?</strong></label>
                <div>
                    <input type="radio" name="q5" value="Yes, enough for 3+ months"> Yes, enough for 3+ months<br>
                    <input type="radio" name="q5" value="Yes, but less than 3 months"> Yes, but less than 3 months<br>
                    <input type="radio" name="q5" value="No"> No
                </div>
            </div>

            <!-- Question 6 -->
            <div class="mb-4">
                <label for="q6" class="form-label text-success"><strong>6. How often do you pay back any loans or money you owe?</strong></label>
                <div>
                    <input type="radio" name="q6" value="Always on time"> Always on time<br>
                    <input type="radio" name="q6" value="Sometimes late"> Sometimes late<br>
                    <input type="radio" name="q6" value="Rarely on time"> Rarely on time<br>
                    <input type="radio" name="q6" value="I have no debt"> I have no debt
                </div>
            </div>

            <!-- Question 7 -->
            <div class="mb-4">
                <label for="q7" class="form-label text-success"><strong>7. How often do customers pay you late?</strong></label>
                <div>
                    <input type="radio" name="q7" value="Rarely"> Rarely<br>
                    <input type="radio" name="q7" value="Sometimes"> Sometimes<br>
                    <input type="radio" name="q7" value="Often"> Often<br>
                    <input type="radio" name="q7" value="Always"> Always
                </div>
            </div>

            <!-- Question 8 -->
            <div class="mb-4">
                <label for="q8" class="form-label text-success"><strong>8. Is most of your money earned in cash or through bank payments?</strong></label>
                <div>
                    <input type="radio" name="q8" value="Mostly cash"> Mostly cash<br>
                    <input type="radio" name="q8" value="Mixed"> Mixed<br>
                    <input type="radio" name="q8" value="Mostly bank payments"> Mostly bank payments
                </div>
            </div>

            <!-- Question 9 -->
            <div class="mb-4">
                <label for="q9" class="form-label text-success"><strong>9. How long has your business been running?</strong></label>
                <div>
                    <input type="radio" name="q9" value="Less than 1 year"> Less than 1 year<br>
                    <input type="radio" name="q9" value="1-3 years"> 1-3 years<br>
                    <input type="radio" name="q9" value="3-5 years"> 3-5 years<br>
                    <input type="radio" name="q9" value="Over 5 years"> Over 5 years
                </div>
            </div>

            <!-- Question 10 -->
            <div class="mb-4">
                <label for="q10" class="form-label text-success"><strong>10. Do you have any employees who help you run your business?</strong></label>
                <div>
                    <input type="radio" name="q10" value="None"> None<br>
                    <input type="radio" name="q10" value="1-2"> 1-2<br>
                    <input type="radio" name="q10" value="3-5"> 3-5<br>
                    <input type="radio" name="q10" value="More than 5"> More than 5
                </div>
            </div>

            <!-- Question 11 -->
            <div class="mb-4">
                <label for="q11" class="form-label text-success"><strong>11. How often do you write down all the money your business makes and spends?</strong></label>
                <div>
                    <input type="radio" name="q11" value="Very often"> Very often<br>
                    <input type="radio" name="q11" value="Sometimes"> Sometimes<br>
                    <input type="radio" name="q11" value="Rarely"> Rarely<br>
                    <input type="radio" name="q11" value="Never"> Never
                </div>
            </div>

            <!-- Question 12 -->
            <div class="mb-4">
                <label for="q12" class="form-label text-success"><strong>12. How often do you buy new supplies or products for your business?</strong></label>
                <div>
                    <input type="radio" name="q12" value="Weekly"> Weekly<br>
                    <input type="radio" name="q12" value="Bi-weekly"> Bi-weekly<br>
                    <input type="radio" name="q12" value="Monthly"> Monthly<br>
                    <input type="radio" name="q12" value="Less than once a month"> Less than once a month
                </div>
            </div>

            <!-- Question 13 -->
            <div class="mb-4">
                <label for="q13" class="form-label text-success"><strong>13. Is your business getting more or fewer customers each year?</strong></label>
                <div>
                    <input type="radio" name="q13" value="More customers"> More customers<br>
                    <input type="radio" name="q13" value="About the same"> About the same<br>
                    <input type="radio" name="q13" value="Fewer customers"> Fewer customers
                </div>
            </div>

            <!-- Question 14 -->
            <div class="mb-4">
                <label for="q14" class="form-label text-success"><strong>14. How often do you check how much money your business has in the bank?</strong></label>
                <div>
                    <input type="radio" name="q14" value="Daily"> Daily<br>
                    <input type="radio" name="q14" value="Weekly"> Weekly<br>
                    <input type="radio" name="q14" value="Monthly"> Monthly<br>
                    <input type="radio" name="q14" value="Less than once a month"> Less than once a month
                </div>
            </div>

            <!-- Question 15 -->
            <div class="mb-4">
                <label for="q15" class="form-label text-success"><strong>15. Are you happy with your business’s financial performance?</strong></label>
                <div>
                    <input type="radio" name="q15" value="Yes, very happy"> Yes, very happy<br>
                    <input type="radio" name="q15" value="Somewhat happy"> Somewhat happy<br>
                    <input type="radio" name="q15" value="Not happy"> Not happy
                </div>
            </div>

            <button type="submit" class="btn btn-success">Submit Quiz</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>