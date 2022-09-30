<tr>
    <td>
        <div class="d-flex align-items-center">
            <div class="ms-3">
                <p class="fw-bold mb-1"><?= $firstName . " " . $lastName ?></p>
            </div>
        </div>
    </td>
    <td>
        <p class="fw-normal mb-1"><?= $proficiency ?></p>
    </td>
    <td>
        <p class="text-muted mb-0"><?= $emailAddress ?></p>
    </td>
    <td>
        <a href="applicationProfile.php?nationalId=<?= $nationalId ?>">
            <button type="button" class="btn btn-link btn-sm btn-rounded">
                View
            </button>
        </a>
    </td>
</tr>