# SimHealth
## Centralized Hospital Record Management

The process of keeping patient information in different health facilities in a particular
country leads to data redundancy and also affects the time it takes for a physician to attend to a
patient when they first visit. Thus, the project aims to implement a centralized data management
system. A centralized system helps to reduce the risk of errors and improves the accuracy of the
data. It also helps to reduce the cost of maintaining multiple systems. There are also many
problems when scheduling an appointment with the doctor, such as patients having to wait in
long queues.

## Features
* Registration of Hospitals to the Centralized Database
* Adding Doctors in a Hospital by the Hospital Admin
* Patient Registration and Login
* Doctor Appointment and Management
* Provide the Doctor with medical records of the consulting patients.
* Role Based Authorization of Data (Data Protection).

## Technologies Used
* PHP
* MySQL
* Apache Web Server

## Frameworks Used
* Laravel
* Tailwind CSS
* Alpine JS

## Usage - SuperAdmin
1. Navigate to the application's URL on your web browser
2. Sign in using SuperAdmin Credentials.
3. Can now access evey module in the system.
4. New Hospitals can be registered.
5. Add Doctors to corresponding hospitals.
6. Assign Roles for Authorized Access of Data.
7. View all the Pending Appointments.

## Usage - Hospitals
1. Navigate to the application's URL on your web browser.
2. Sign in using allocated credentials of the hospital.
3. Add doctors in the hospital to the system.
4. View all Pending Appointments.
5. Access and analyze the data related to the doctors' performance, including their success rates, patient outcomes, and medical practices(TO DO).

## Usage - Doctors
1. Naviagte to the application's URL on your web browser.
2. Sign in using allocated crendentials of the doctor.
3. View all the pending appointments.
4. View the medical records of the patient appointed to him/her.
5. Add the diagonsis and treatmet provided to the patient as new medical record.

## Usage - Patients
1. Navigate to the application's URL on your web browser.
2. If not registered already, register by filling the details.
3. Sign in using the allocated credentials of the patient.
4. Make appointments to a doctor specialized in the appropriate field at the required hospital.
5. View all past medical records of the patient.

## Potential Features(Future)
1. Implement virtual queues which uses efficient algorithms to allocate appointments for patients.
2. Implement emergency mode which efficiently directs patients to available hospitals and to warn nearby hospitals about the emergencies.
3. Remainders for Patients to take medication at the correct time.
4. Analyse the performance of doctors and the particular hospital to further improve efficiency of the organization.

## License
This project is licensed under the MIT License - see the LICENSE.md file for details.

