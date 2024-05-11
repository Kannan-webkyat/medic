<?php
session_start();
if (!isset($_SESSION['user_id'])) {
          header('Location: index.php');
          exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
          <title>All Leads</title>
          <!-- main style -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
          <link rel="stylesheet" href="libs/css/style.css" />
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
          <style>
                    .bg-color {
                              background-color: #bfffbf;
                    }
          </style>
</head>

<body data-barba="wrapper">

          <main id="swup" class="transition-fade" page-ref="leads">
                    <div data-swup-name="list-leads"></div>
                    <div class="page-header">
                              <h1 class="page-title">Leads</h1>
                    </div>
                    <div class="table-options">
                    </div>
                    <div class="content">
                              <div class="table-container">
                                        <table id="list-leads">
                                                  <thead>
                                                            <tr>
                                                                      <th scope="col">No</th>
                                                                      <th scope="col">Name</th>
                                                                      <th scope="col">Email</th>
                                                                      <th scope="col">Phone</th>
                                                                      <th scope="col">For</th>
                                                                      <th scope="col">Date/Time</th>
                                                                      <th scope="col">action</th>
                                                            </tr>
                                                  </thead>
                                                  <tbody>
                                                            <?php
                                                            include '../_class/dbConfig.php';
                                                            include './action/facility/FacilityManager.php';

                                                            $conn = (new dbConfig)->getConnection();
                                                            $perPage = 10;
                                                            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                                                            $startAt = ($page - 1) * $perPage;
                                                            $query = "SELECT * FROM common_leads ORDER BY id DESC LIMIT ?, ?";
                                                            $stmt = $conn->prepare($query);
                                                            $stmt->bind_param("ii", $startAt, $perPage);
                                                            $stmt->execute();
                                                            $leads = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                                                            ?>

                                                            <?php foreach ($leads as $index => $lead) : ?>
                                                                      <tr>
                                                                                <td class="<?= $lead['read_status'] ? 'bg-color' : '' ?>"><?= $startAt + $index + 1 ?></td>
                                                                                <td class="<?= $lead['read_status'] ? 'bg-color' : '' ?>"><?= $lead['name']; ?></td>
                                                                                <td class="<?= $lead['read_status'] ? 'bg-color' : '' ?>"><?= $lead['email']; ?></td>
                                                                                <td class="<?= $lead['read_status'] ? 'bg-color' : '' ?>"><?= $lead['phone']; ?></td>
                                                                                <td class="<?= $lead['read_status'] ? 'bg-color' : '' ?>"><?= $lead['for']; ?></td>
                                                                                <td class="<?= $lead['read_status'] ? 'bg-color' : '' ?>"><?= date('d M y H:i a', strtotime($lead['date_time'])) ?></td>
                                                                                <td class="<?= $lead['read_status'] ? 'bg-color' : '' ?>">
                                                                                          <?php if (!$lead['read_status']) : ?>
                                                                                                    <form action="" method="POST">
                                                                                                              <input type="text" value="<?= $lead['id'] ?>" name="read" hidden>
                                                                                                              <button style="padding: 10px; font-size: 12px; font-weight: 700;" type="submit">Done</button>
                                                                                                    </form>
                                                                                          <?php endif; ?>
                                                                                </td>

                                                                      </tr>
                                                            <?php endforeach; ?>
                                                  </tbody>
                                        </table>
                                        <!-- Pagination -->
                                        <div class="pagination" style="text-align: right; margin-top: 20px;">
                                                  <?php
                                                  $result = $conn->query("SELECT COUNT(id) AS total FROM common_leads");
                                                  $row = $result->fetch_assoc();
                                                  $totalPages = ceil($row['total'] / $perPage);

                                                  // First page button
                                                  if ($page > 1) : ?>
                                                            <a style='padding: 8px; background:#1f1f1f; color: white; border-radius:5px; margin-right: 5px;' href='list-leads.php?page=1'>First</a>
                                                  <?php endif ?>

                                                  <?php for ($i = 1; $i <= $totalPages; $i++) :
                                                            $style = $page == $i ? "background:#1f1f1f; color: white;" : "background:none; color: #1f1f1f;"; ?>
                                                            <a style='padding: 8px; border: 1px solid #1f1f1f; border-radius:5px; margin-right: 5px; <?= $style ?>' href='list-leads.php?page=<?= $i ?>'><?= $i ?></a>
                                                  <?php endfor; ?>

                                                  <?php if ($page < $totalPages) : ?>
                                                            <a style='padding: 8px; background:#1f1f1f; color: white; border-radius:5px; margin-left: 5px;' href='list-leads.php?page=<?= $totalPages ?>'>Last</a>
                                                  <?php endif; ?>
                                        </div>
                              </div>
                    </div>

                    <!-- delete -->
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                              $id = $_POST['read'];
                              $updateStatus = $conn->prepare("UPDATE common_leads SET read_status = ? WHERE id = ?");
                              $updateStatus->bind_param("ii", $status, $id);
                              $status = 1;
                              if ($updateStatus->execute()) {
                                        echo '<script>window.location.href = window.location.href;</script>';
                              }
                    }
                    ?>
          </main>
</body>
<script src="https://unpkg.com/swup@4"></script>
<script src="https://unpkg.com/@swup/progress-plugin@3"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.tiny.cloud/1/43aunf39f890dvkf0odugutyswrwof33rftvvs52jrl27zli/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="module" src="src/app.js"></script>

</html>