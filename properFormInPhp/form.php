<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admission Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow p-4">
      <h2 class="mb-4 text-center">Admission Form</h2>
      <form action="saveData.php" method="post" enctype="multipart/form-data">
        <div class="row mb-3">
          <div class="col">
            <label for="username" class="form-label">First Name</label>
            <input type="text" class="form-control" name="username" id="username" required />
          </div>
          <div class="col">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lastname" id="lastname" required />
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Gender</label><br />
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="male" value="male" />
            <label class="form-check-label" for="male">Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="female" value="female" />
            <label class="form-check-label" for="female">Female</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="other" value="other" />
            <label class="form-check-label" for="other">Other</label>
          </div>
        </div>

        <div class="mb-3">
          <label for="phone" class="form-label">Phone Number</label>
          <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="123-45-678" required />
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" class="form-control" name="email" id="email"
            pattern="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*$" required />
        </div>

        <!-- <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="password"
            pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
            placeholder="At least 8 characters with uppercase, lowercase, and number/symbol" required />
        </div> -->

        <div class="mb-3">
          <label for="dateofBirth" class="form-label">Date of Birth</label>
          <input type="date" class="form-control" name="dateofBirth" id="dateofBirth" required />
        </div>

        <div class="mb-3">
          <label for="city" class="form-label">City</label>
          <input type="text" class="form-control" name="city" id="city" required />
        </div>

        <div class="mb-3">
          <label for="country" class="form-label">Country</label>
          <select class="form-select" name="country" id="country" required>
            <option value="">Choose...</option>
            <option value="pakistan">Pakistan</option>
            <option value="bangladesh">Bangladesh</option>
            <option value="india">India</option>
          </select>
        </div>
<!-- 
        <div class="mb-3">
          <label for="image" class="form-label">Upload Image</label>
          <input type="file" class="form-control" name="image" id="image" />
        </div> -->

        <div class="text-center">
          <button type="submit" class="btn btn-primary px-4">Submit</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
