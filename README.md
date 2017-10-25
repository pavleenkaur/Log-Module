# Log-Module
### Objective
Acts as a demo to the live code embedded in college's Examination website.<br>
Is used to create log files and record each online activity carried out by a user whlie logged in to their respective profiles.<br>
The main aim is bring about an additional security feature in the website and analyse any fraudulent activities.

### Functionality
The demo code covers Student Registrations and records the following activities :
<ol>
  <li>Creation of a new student account</li>
  <li>Updation of student details such as : 
    <ul>
      <li>Course</li>
      <li>Password</li>
      <li>Mobile Number</li>
      <li>Academic Year</li>
    </ul>
  </li>
  <li>Log-in and Log-out activities</li>
</ol>
The admin has access to all the saved log files and can choose to view the details in multiple available custom formats.

### Installation and Set-up
<ol>
  <li><a href = 'https://www.apachefriends.org/download.html'>Install Xampp</a></li>
  <li>Open the <b>Control Panel / Manager</b> from the downloaded Xampp file.</li>
  <li>Start the MySQL database and Apache Server.</li>
  <li>Open the <b>htdocs</b> folder in the Xampp file and clone <a href='https://github.com/pavleenkaur/Log-Module/'>this </a>repository.</li>
</ol>

### Usage
<ol>
  <li>Run the <b>database.php</b> file to create the requisite tables on the server.</li>  
  <li>Make a few registrations through <b>register.php</b></li>
  <li>Login onto the student profiles and make a few demo changes in the courses, year etc.</li>
  <li>Login onto the admin profile<br>Default Admin
    Login Credentials :
    <table>
      <tr>
        <td>Username</td>
        <td>Password</td>
      </tr>
      <tr>
        <td>admin@gmail.com</td>
        <td>admin</td>
      </tr>
    </table>
  </li>
  <li>Use the checkboxes and input fields to view custom details.</li>
  <li>The viewed records can also thereafter be printed or downloaded as an Excel File.</li>
</ol>
