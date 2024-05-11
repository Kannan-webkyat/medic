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
                              <!-- <div class="option">
                                        <a href="add-facility.php"><button class="assign_button">Add Facility<ion-icon name="add-outline">
                                                            </ion-icon></button></a>
                              </div> -->
                              <!-- <div class="option">
                <input id="searchFilter" type="text" placeholder="Search Students">
            </div> -->
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
                                                            $query = "SELECT * FROM common_leads";
                                                            $stmt = $conn->prepare($query);
                                                            $stmt->execute();
                                                            $leads = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                                                            ?>

                                                            <?php foreach ($leads as $index => $lead) : ?>
                                                                      <tr>
                                                                                <td class="<?= $lead['read_status'] ? 'bg-color' : '' ?>"><?= $index + 1 ?></td>
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
                              </div>
                              <ul id="pagination-demo" class="pagination-sm"></ul>
                    </div>

                    <!-- delete -->
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                              $id = $_POST['read'];
                              $updateStatus = $conn->prepare("UPDATE common_leads SET read_status = ? WHERE id = ?");
                              $updateStatus->bind_param("ii", $status, $id);
                              $status = 1;
                              if ($updateStatus->execute()) {
                                        echo '<script>window.location = "list-leads.php"</script>';
                              }
                    }
                    ?>
          </main>
</body>

<script src="https://unpkg.com/swup@4"></script>
<script src="https://unpkg.com/@swup/progress-plugin@3"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- global jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- app js -->
<!-- tiny editor -->
<script src="https://cdn.tiny.cloud/1/43aunf39f890dvkf0odugutyswrwof33rftvvs52jrl27zli/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="module" src="src/app.js"></script>

</html>