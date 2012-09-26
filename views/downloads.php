      <h1>Downloads</h1>
      <h2>Latest Version</h2>
      <p>The latest version is automatically build whenever we push a change to
our github repository. Since <span class="label">bibimbap</span> is of course
entirely bug-free, this version should be safe to use at your own risk!</p>

      <table class="table">
        <thead>
          <tr>
            <td>bibimbap latest</td>
            <td><?php echo date("r", filemtime(FILES_PATH.'/bibimbap-latest.jar')); ?></td>
            <td><a class="btn btn-success" href="/files/bibimbap-latest.jar"><i class="icon-hdd icon-white"></i> Download</a></td>
          </tr>
        </thead>
      </table>

      <h2>Archives</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Version</th>
            <th>Date</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        <?php

        function fileVersion($name) {
            return str_replace(array(".jar", "-assembly-"), array("", " "), basename($name));
        }
        foreach(glob(FILES_PATH.'/bibimbap-assembly*.jar') as $file) {
            echo '
          <tr>
            <td>'.fileVersion($file).'</td>
            <td>'.date("r", filemtime($file)).'</td>
            <td><a class="btn btn-success" href="/files/'.basename($file).'"><i class="icon-hdd icon-white"></i> Download</a></td>
          </tr>';
        }
        ?>
        </tbody>
      </table>
