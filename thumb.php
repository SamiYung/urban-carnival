<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Registration Portal</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <img alt="Covenant University Logo" src="image/cu-logo.png" class="logo">
        <h1 class="page-title">Course Registration</h1>

        <div class="grid">

            <form id="regForm" class="card">
                <label for="Fullname">Fullname: </label>
                <input type="text" id="fullname" placeholder="Enter your fullname" required>

                <label for="matric-number">Matric-number:</label>
                <input type="text" id="matric-number" placeholder="Enter your matric-number" required>

                <label for="Department">Department:</label>
                <select id="dept" required>
                    <option value="">-- Select Department --</option>
                    <option>Computer Science</option>
                    <option>Information Technology</option>
                    <option>Computer Engineering</option>
                    <option>Software Engineering</option>
                </select>

                <label for="courses">Choose Courses</label>
                <select id="courses" required>
                    <option value="">-- Select Courses --</option>
                    <option>MTH 101</option>
                    <option>ENG 101</option>
                    <option>CVE 101</option>
                    <option>GST 101</option>
                </select>
                <small>Use CTRL to select multiple courses</small>

                <label for="session">Session: </label>
                <select id="session" required>
                    <option value="">-- Choose Session --</option>
                    <option>2025/2026</option>
                </select>

                <label for="semester">Semester:</label>
                <select id="semester" required>
                    <option value="">-- Choose Semester --</option>
                    <option>Alpha Semester</option>
                    <option>Omega Semester</option>
                </select>

                <button type="submit" class="btn">✅Register</button>
                

            </form>
        </div>

    </div>
</body>
</html>