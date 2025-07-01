<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard - Member Management</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="dashboard container py-5">
  <h2 class="mb-4 text-center">Admin Dashboard - Member Management</h2>
  <div class="row mb-4 filter-group">
    <div class="col-md-6 mb-2">
      <input type="text" id="searchName" class="form-control" placeholder="Search by member name...">
    </div>
    <div class="col-md-6">
      <select id="filterPayment" class="form-select">
        <option value="">All Payment Status</option>
        <option value="paid">Paid</option>
        <option value="unpaid">Unpaid</option>
      </select>
    </div>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-hover align-middle text-center">
      <thead class="table-light">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Tier</th>
          <th>Payment Status</th>
          <th>Membership Expiry</th>
          <th>Countdown</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody id="userTable">
        <!-- JS populates here -->
      </tbody>
    </table>
  </div>
  <div class="d-flex justify-content-end mt-3">
    <button class="btn btn-success" id="saveAllBtn">
      <i class="bi bi-save2-fill"></i> Save All Changes
    </button>
  </div>
</div>
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Member Tier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="editUserId">
        <label class="form-label">Tier:</label>
        <select id="editTier" class="form-select">
          <option value="0">Normal</option>
          <option value="1">Plus</option>
          <option value="2">Gold</option>
          <option value="3">Platinum</option>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="saveEdit">Save</button>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html> 