<div class="wrap">
    <h1>UTM Grabber Configuration</h1>
    <?php
    if (isset($_POST['utm-selector'])) {
        update_option('ABHINASH_UTM_GRABBER_DATA', $_POST['utm-selector']);
    ?>
        <div class="notice notice-success is-dismissible">
            <p>Data successfully saved.</p>
        </div>
    <?php
    }
    ?>
    <form method="post">
        <table class="form-table" role="presentation">
            <tbody>
                <tr>
                    <th scope="row">
                        <label for="utm-selector">Selector</label>
                    </th>
                    <td>
                        <input name="utm-selector" type="text" id="utm-selector" value="<?php echo (get_option('ABHINASH_UTM_GRABBER_DATA')) ?>" class="regular-text" />
                        <p class="description">
                            This is the <strong>CSS selector</strong>
                            for DOM elements that should be appended
                            with the UTM data from the URL query params.
                            <br />
                            UTM params are appended to the <code>href</code>
                            attribute of the given selector.
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php submit_button("Save", "primary", "submit", true); ?>
    </form>
</div>