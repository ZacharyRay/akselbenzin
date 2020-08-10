<?php
/*
Template Name: Contact
*/
$id = get_queried_object_id();
$contact_information = get_field('contact_information', $id);
$employees = get_field('ask_me_employee', $id);
?>
<?php get_header(); ?>

<!-- Google maps -->
<div class="google_maps_wrapper">
    <div class="contact_text_wrap">
        <p>Aksel Benzin A/S</p>
        <p><?= $contact_information['contact_main_phone_number'] ?></p>
        <a href="#"><?= $contact_information['contact_main_email'] ?></a>
    </div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1786.0049051830822!2d12.499437787103117!3d55.75794907376001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465253aba04c6dcf%3A0xa3476cda1c2475b8!2sRosenfeldt!5e0!3m2!1sda!2sdk!4v1580201087113!5m2!1sda!2sdk" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>

<!-- Addresses -->
<div class="address_wrapper">
    <div class="address_grid">
        <?php foreach ($contact_information['contact_locations'] as $contact_information_id) { ?>
        <div class="address_one">
            <h5><?= $contact_information_id['contact_location'] ?></h5>
            <p><?= $contact_information_id['contact_location_address'] ?></p>
            <p><?= $contact_information_id['contact_location_phone_number'] ?></p>
            <p><?= $contact_information_id['contact_location_fax'] ?></p>
            <a href="#"><?= $contact_information_id['contact_location_email'] ?></a>
        </div>
        <?php } ?>
    </div>
</div>

<!-- Employee -->
<div class="employee_wrapper">
    <div class="contact_employees">
        <?php if(!empty($employees)) { ?>
            <?php foreach ($employees as $e) {
                $employee = get_post($e);
                $name = $employee->post_title;
                $image = get_the_post_thumbnail_url($e);
                $title = get_field('employee_title', $e);
                $phone = get_field('employee_phone', $e);
                $email = get_field('employee_mail', $e); ?>
                <div class="contact_person">
                    <img src="<?= $image; ?>" alt="">
                    <h4><?= $name; ?></h4>
                    <h5><?= $title; ?></h5>
                    <p><?= $phone; ?></p>
                    <a href="mailto:<?= $email; ?>"><?= $email; ?></a>
                </div>
            <?php }} ?>
    </div>
</div>
<?php get_footer(); ?>