      <h1>Downloads</h1>
      <h2>Bootstrap</h2>
      <p>The easiest way to use <span class="label">bibimbap</span> is via its  bootstrap
program. The bootstrapper will make sure you are always running the latest stable version.
The check is performed each time the program is started, and the updates are automatic.</p>

          <a class="btn btn-success" href="/files/bibimbap-bootstrap.jar"><i class="icon-hdd icon-white"></i> Download Bootstrap</a>
          <a class="btn" href="/files/bibimbap-bootstrap.jar.md5"><i class="icon-lock"></i> md5</a>

      <br />
      <br />
      <h2>Available Versions</h2>
      <p>You can also directly run specific versions of <span class="label">bibimbap</span> by downloading 
and executing the corresponding jar files directly.</p>
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
            <td>
                <a class="btn btn-success" href="/files/'.basename($file).'"><i class="icon-hdd icon-white"></i> Download</a>
                <a class="btn" href="/files/'.basename($file).'.md5"><i class="icon-lock"></i> md5</a>
            </td>
          </tr>';
        }
        ?>
        </tbody>
      </table>
