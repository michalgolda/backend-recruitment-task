<table class="table">
    <tr class="table__row">
        <th class="table__cell">Name</th>
        <th class="table__cell">Username</th>
        <th class="table__cell">Email</th>
        <th class="table__cell">Address</th>
        <th class="table__cell">Phone</th>
        <th class="table__cell">Company</th>
        <th></th>
    </tr>
    <?php
    $users = $context["users"];

    foreach ($users as $user) {
        $id = $user->getId();
        $name = $user->getName();
        $username = $user->getUsername();
        $email = $user->getEmail();
        $phone = $user->getPhone();
        $addressStreet = $user->getAddressStreet();
        $addressZipcode = $user->getAddressZipcode();
        $addressCity = $user->getAddressCity();
        $address = "{$addressStreet}, {$addressZipcode} {$addressCity}";
        $companyName = $user->getCompanyName();

        $row = <<<ROW
        <tr class="table__row">
            <td class="table__cell">{$name}</td>
            <td class="table__cell">{$username}</td>
            <td class="table__cell">{$email}</td>
            <td class="table__cell">{$address}</td>
            <td class="table__cell">{$phone}</td>
            <td class="table__cell">{$companyName}</td>
            <td class="table__cell">
                <form action="/delete" method="POST">
                    <input name="userId" type="hidden" value="{$id}">
                    <button class="btn btn--delete" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        ROW;

        echo $row;
    }
    ?>
</table>