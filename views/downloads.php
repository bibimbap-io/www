      <h1>Downloads</h1>
      <h2>Bootstrap</h2>
      <p>By running <span class="label">bibimbap</span> using the bootstrap
jar file, you will always be running the latest stable
version. The check is performed when starting <span 
class="label">bibimbap</span>, and the updates are automatic.</p>

      <table class="table table-striped">
        <thead>
          <tr>
            <th>File</th>
            <th>Date</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>bibimbap</td>
            <td><?php echo date("r", filemtime(FILES_PATH.'/bibimbap-bootstrap.jar')); ?></td>
            <td>
                <a class="btn btn-success" href="/files/bibimbap-bootstrap.jar"><i class="icon-hdd icon-white"></i> Download</a>
                <a class="btn" href="/files/bibimbap-bootstrap.jar.md5"><i class="icon-lock"></i> md5</a>
            </td>
          </tr>
        </tbody>
      </table>


      <h2>Available Versions</h2>
      <p>You can also directly run specific versions of <span class="label">bibimbap</span> by downlading and executing the corresponding jar files directly</p>
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
