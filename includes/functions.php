<?php
function getRolePermissions($role) {
    $permissions = [
        'admin' => ['FullAccess', 'ManageUsers', 'Override', 'SystemSettings'],
        'directors' => ['ViewReports', 'ApproveBudgets', 'ApproveCourses', 
                       'ManageFaculty', 'AccessDepartmentData', 'ViewGrades'],
        'finance' => ['ManageFunds', 'ProcessPayroll', 'GenerateFinancialReports'],
        'professor' => ['UploadGrades', 'ManageCourses', 'SubmitRequests'],
        'student' => ['EnrollCourses', 'ViewGrades', 'UpdateProfile'],
        'receptionist' => ['ManageVisitors', 'ScheduleAppointments', 'VerifyEnrollment']
    ];
    return $permissions[$role] ?? [];
}
?>