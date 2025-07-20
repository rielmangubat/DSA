<nav class="sidebar d-flex flex-column align-items-center py-4">
  <div class="logo-section text-center mb-4 p-4">
    <img src="logo.png" alt="Logo" width="60" class="logo-circle mb-3">
    <h5 class="mb-0 fw-bold">SICT</h5>
    <small class="opacity-75">Admin Panel</small>
  </div>
  <a href="admin_dashboard.html" class="<?= basename($_SERVER['PHP_SELF']) == 'admin_dashboard.html' ? 'active' : '' ?>">
    <i class="bi bi-speedometer2 me-2"></i>Dashboard
  </a>
  <a href="manage_incidents.html" class="<?= basename($_SERVER['PHP_SELF']) == 'manage_incidents.html' ? 'active' : '' ?>">
    <i class="bi bi-flag-fill me-2"></i>Manage Incidents
  </a>
  <a href="manage_complaints.html" class="<?= basename($_SERVER['PHP_SELF']) == 'manage_complaints.html' ? 'active' : '' ?>">
    <i class="bi bi-megaphone-fill me-2"></i>Manage Complaints
  </a>
  <a href="manage_students.html" class="<?= basename($_SERVER['PHP_SELF']) == 'manage_students.html' ? 'active' : '' ?>">
    <i class="bi bi-people-fill me-2"></i>Students
  </a>
  <hr class="border-light opacity-25 w-100" />
  <a href="#"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
</nav> 