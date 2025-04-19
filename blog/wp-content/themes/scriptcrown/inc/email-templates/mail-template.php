<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Email Template</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900,900i&display=swap" rel="stylesheet">
</head>


<body style="background-color: #fff;margin: auto;text-align: center;font-family: 'Roboto', sans-serif;">
    <?php 
      global $wpdb;
      global $mrcopyorder_id;
      $wpdb->prefix; 
      $table_name = $wpdb->prefix . 'orders';
      $result = $wpdb->get_row("SELECT * FROM $table_name WHERE order_id = '".$mrcopyorder_id."'");
      $course_order_tbl = $wpdb->get_results("SELECT * FROM `wp_order_courses` WHERE order_tbl_id = '".$result->id."'");
      if($result->state == "WB"){
        $gstlabel = "Incl. SGST- 9% & CGST- 9%";  
      } else {
        $gstlabel = "Incl. IGST- 18%"; 
      }
    ?>
    <table style="background-color: #eee;margin: 0 auto;padding: 0 33px;border-collapse: collapse;border: 14px solid #eee;border-bottom: 0;width: 700px;">
        <thead style="width: 100%;display: block;">
            <tr>
                <th style="width: 15%;text-align: left;">
                    <a href="#"><img style="width: 100%;" src="https://www.icajobguarantee.com/wp-content/themes/ica/admin-booking/images/logo-main.png" alt=""></a>
                </th>
                <th style="width: 70%;">
                    <p style="font-weight: 400;margin-bottom: 0 !important;">Original</p>
                    <h2 style="margin-top: 10px;font-size: 22px;">Money Receipt cum Tax Invoice</h2>
                </th>

                <th style="width: 15%;text-align: right;">
                    <img style="width: 100%;" src="https://www.icajobguarantee.com/wp-content/themes/ica/admin-booking/images/logo-right.png" alt="">
                </th>
            </tr>
        </thead>
        <tbody style="background-color: #fff;">
            <tr>
                <th style="padding: 20px;">
                    <h4 style="background-color: #5bc0de;padding: 10px 0;border-radius: 4px;color: #fff;margin: 0;font-size: 22px;">ICA Edu Skills Pvt. Ltd.</h4>
                </th>
            </tr>
        </tbody>
    </table>



    <table style="width: 700px;background-color: #eee;margin: 0 auto;padding: 0 33px;border-collapse: collapse;border: 14px solid #eee;border-top: 0">
        <tbody style="background-color: #fff;width: 100%;display: block;">
            <tr>
                <td style="width: 26%;text-align: left;padding: 10px; padding-left: 20px;">State Code:</td>
                <td style="width: 50%;text-align: left;color: #000000;font-weight: 700;">West Bengal (19)</td>
                <td style="width: 24%;padding-right: 20px;font-size: 14px;" colspan="3">Date: <?php echo date("d/m/Y"); ?></td>
            </tr>

            <tr>
                <td style="width: 26%;text-align: left;padding: 10px; padding-left: 20px;">Address:</td>
                <td style="width: 50%;text-align: left;color: #000000;font-weight: 700;">UNIT-1401, Eco Centre, Plot-04, BLOCK-EM, Sector V, Saltlake, Kolkata-700091, West bengal </td>
            </tr>

            <tr>
                <td style="width: 26%;text-align: left;padding: 10px;padding-left: 20px;">GSTIN:</td>
                <td style="width: 50%;text-align: left;color: #000000;font-weight: 700;" colspan="3">19AABCI0017R1ZE</td>
            </tr>

            <tr>
                <td style="width: 26%;text-align: left;padding: 10px;padding-left: 20px;">Phone:</td>
                <td style="width: 50%;text-align: left;color: #000000;font-weight: 700;" colspan="3">8820-004-000</td>
            </tr>

            <tr>
                <td style="width: 26%;text-align: left;padding: 10px;padding-left: 20px;">EMAIL:</td>
                <td style="width: 50%;text-align: left;color: #000000;font-weight: 700;" colspan="3"><a href="mailto:crm@icagroup.in">crm@icagroup.in</a></td>
            </tr>

            <tr>
                <td style="width: 26%;text-align: left;padding: 10px;padding-left: 20px;">SAC Code:</td>
                <td style="width: 50%;text-align: left;color: #000000;font-weight: 700;" colspan="3">999243</td>
            </tr>

            <tr>
                <td style="width: 26%;text-align: left;padding: 10px;padding-left: 20px;">Payment Info:</td>
                <td style="width: 50%;text-align: left;color: #000000;font-weight: 700;" colspan="3">By UPI Trans Id : <?php echo $result->payment_id; ?></td>
            </tr>



            <tr>
                <th style="padding:20px;" colspan="4">
                    <h4 style="background-color:#5bc0de;padding:10px 0;border-radius:4px;color:#fff;margin:0;font-size:22px">Student Details</h4>
                </th>
            </tr>

            <tr>
                <td style="width: 26%;text-align: left;padding: 10px;padding-left: 20px;">Student Code:</td>
                <td style="width: 50%;text-align: left;color: #000000;font-weight: 700;" colspan="3"><?php echo $result->student_code; ?></td>
            </tr>

            <tr>
                <td style="width: 26%;text-align: left;padding: 10px;padding-left: 20px;">Student Name:</td>
                <td style="width: 50%;text-align: left;color: #000000;font-weight: 700;" colspan="3"><?php echo $result->first_name.' '.$result->last_name; ?></td>
            </tr>

            <tr>
                <td style="width: 26%;text-align: left;padding: 10px;padding-left: 20px;">Address:</td>
                <td style="width: 50%;text-align: left;color: #000000;font-weight: 700;" colspan="3"><?php echo $result->addressline_1.' -'.$result->addressline_2.', '.$result->pincode; ?></td>
            </tr>

            <tr>
                <td style="width: 26%;text-align: left;padding: 10px;padding-left: 20px;">Place of Supply:</td>
                <td style="width: 50%;text-align: left;color: #000000;font-weight: 700;" colspan="3"><?php echo $result->state; ?> </td>
            </tr>

            <tr>
                <td style="width: 26%;text-align: left;padding: 10px;padding-left: 20px;">Phone:</td>
                <td style="width: 50%;text-align: left;color: #000000;font-weight: 700;" colspan="3"><?php echo $result->mobile; ?></td>
            </tr>



            <tr>

                <td style="width: 26%;text-align: left;padding: 10px;padding-left: 20px;">EMAIL:</td>

                <td style="width: 50%;text-align: left;color: #000000;font-weight: 700;" colspan="3"><?php echo $result->email_address; ?></td>

            </tr>

            <tr>

                <td style="width: 26%;text-align: left;padding: 10px;padding-left: 20px;">DOB:</td>
                <td style="width: 50%;text-align: left;color: #000000;font-weight: 700;" colspan="3"><?php echo $result->date_of_birth; ?></td>

            </tr>



            <tr>
                <th style="text-align: left; padding-top: 8px; padding-bottom: 8px; padding-right: 8px; padding-left: 8px; line-height: 1.42857143; border-top-width: 1px; border-top-style: solid; border-top-color: #ddd; vertical-align: bottom; border-bottom-style: solid; border-bottom-color: #ddd; border-width: 1px; border-style: solid; border-color: #ddd; border-bottom-width: 2px">Sl No. </th>

                <th style="text-align: left; padding-top: 8px; padding-bottom: 8px; padding-right: 8px; padding-left: 8px; line-height: 1.42857143; border-top-width: 1px; border-top-style: solid; border-top-color: #ddd; vertical-align: bottom; border-bottom-style: solid; border-bottom-color: #ddd; border-width: 1px; border-style: solid; border-color: #ddd; border-bottom-width: 2px">Particulars</th>

                <th style="text-align: left; padding-top: 8px; padding-bottom: 8px; padding-right: 8px; padding-left: 8px; line-height: 1.42857143; border-top-width: 1px; border-top-style: solid; border-top-color: #ddd; vertical-align: bottom; border-bottom-style: solid; border-bottom-color: #ddd; border-width: 1px; border-style: solid; border-color: #ddd; border-bottom-width: 2px">Amount</th>
            </tr>
            <?php $i = 1; $amount = 0; foreach ($course_order_tbl as $key => $value) { ?>
            <tr>
                <td style="padding-top: 8px; padding-bottom: 8px; padding-right: 8px; padding-left: 8px; line-height: 1.42857143; vertical-align: top; border-top-width: 1px; border-top-style: solid; border-top-color: #ddd; border-width: 1px; border-style: solid; border-color: #ddd;text-align: left;"><?php echo $i; ?></td>

                <td style="padding-top: 8px; padding-bottom: 8px; padding-right: 8px; padding-left: 8px; line-height: 1.42857143; vertical-align: top; border-top-width: 1px; border-top-style: solid; border-top-color: #ddd; border-width: 1px; border-style: solid; border-color: #ddd;text-align: left;"> <?php echo $value->course_name; ?> Course</td>

                <td style="padding-top: 8px; padding-bottom: 8px; padding-right: 8px; padding-left: 8px; line-height: 1.42857143; vertical-align: top; border-top-width: 1px; border-top-style: solid; border-top-color: #ddd; border-width: 1px; border-style: solid; border-color: #ddd;text-align: left;">Rs.  <?php echo $value->course_fees ?> /-
                </td>
            </tr>
            <?php $amount += $value->amount; $i++; } ?>    
            <tr>
                <td style="padding-top: 8px; padding-bottom: 8px; padding-right: 8px; padding-left: 8px; line-height: 1.42857143; vertical-align: top; border-top-width: 1px; border-top-style: solid; border-top-color: #ddd; border-width: 1px; border-style: solid; border-color: #ddd;text-align: left;"></td>
                <td style="padding-top: 8px; padding-bottom: 8px; padding-right: 8px; padding-left: 8px; line-height: 1.42857143; vertical-align: top; border-top-width: 1px; border-top-style: solid; border-top-color: #ddd; border-width: 1px; border-style: solid; border-color: #ddd;text-align: left;"> Admission Fee : </td>
                <td style="padding-top: 8px; padding-bottom: 8px; padding-right: 8px; padding-left: 8px; line-height: 1.42857143; vertical-align: top; border-top-width: 1px; border-top-style: solid; border-top-color: #ddd; border-width: 1px; border-style: solid; border-color: #ddd;text-align: left;">Rs. <?php 
                $percentage = 18;
                $percentage_amount = ($percentage / 100) * $amount;
                $netamount = $amount - $percentage_amount;
                echo number_format($netamount,2); ?> /- 
                </td>
            </tr>
            <?php if($result->state == "WB") { ?>
            <tr>
                <td style="padding-top: 8px; padding-bottom: 8px; padding-right: 8px; padding-left: 8px; line-height: 1.42857143; vertical-align: top; border-top-width: 1px; border-top-style: solid; border-top-color: #ddd; border-width: 1px; border-style: solid; border-color: #ddd;text-align: left;"></td>

                <td style="padding-top: 8px; padding-bottom: 8px; padding-right: 8px; padding-left: 8px; line-height: 1.42857143; vertical-align: top; border-top-width: 1px; border-top-style: solid; border-top-color: #ddd; border-width: 1px; border-style: solid; border-color: #ddd;text-align: left;">CGST@9% : </td>

                <td style="padding-top: 8px; padding-bottom: 8px; padding-right: 8px; padding-left: 8px; line-height: 1.42857143; vertical-align: top; border-top-width: 1px; border-top-style: solid; border-top-color: #ddd; border-width: 1px; border-style: solid; border-color: #ddd;text-align: left;">Rs. <?php 

                    $percentage = 9;
                    $percentage_amount = ($percentage / 100) * $amount;
                    echo number_format($percentage_amount,2); ?> /- 
                </td>
            </tr>

            <tr>

                <td style="padding-top: 8px; padding-bottom: 8px; padding-right: 8px; padding-left: 8px; line-height: 1.42857143; vertical-align: top; border-top-width: 1px; border-top-style: solid; border-top-color: #ddd; border-width: 1px; border-style: solid; border-color: #ddd;text-align: left;"></td>
                
                <td style="padding-top: 8px; padding-bottom: 8px; padding-right: 8px; padding-left: 8px; line-height: 1.42857143; vertical-align: top; border-top-width: 1px; border-top-style: solid; border-top-color: #ddd; border-width: 1px; border-style: solid; border-color: #ddd;text-align: left;">SGST@9% : </td>

                <td style="padding-top: 8px; padding-bottom: 8px; padding-right: 8px; padding-left: 8px; line-height: 1.42857143; vertical-align: top; border-top-width: 1px; border-top-style: solid; border-top-color: #ddd; border-width: 1px; border-style: solid; border-color: #ddd;text-align: left;">Rs. <?php 
                    $percentage = 9;
                    $percentage_amount = ($percentage / 100) * $amount;
                    echo number_format($percentage_amount,2); ?> /- 
                </td>

            </tr>

            <?php } else { ?>

            <tr>

                <td style="padding-top: 8px; padding-bottom: 8px; padding-right: 8px; padding-left: 8px; line-height: 1.42857143; vertical-align: top; border-top-width: 1px; border-top-style: solid; border-top-color: #ddd; border-width: 1px; border-style: solid; border-color: #ddd;text-align: left;"></td>

                <td style="padding-top: 8px; padding-bottom: 8px; padding-right: 8px; padding-left: 8px; line-height: 1.42857143; vertical-align: top; border-top-width: 1px; border-top-style: solid; border-top-color: #ddd; border-width: 1px; border-style: solid; border-color: #ddd;text-align: left;">IGST@18% : </td>

                <td style="padding-top: 8px; padding-bottom: 8px; padding-right: 8px; padding-left: 8px; line-height: 1.42857143; vertical-align: top; border-top-width: 1px; border-top-style: solid; border-top-color: #ddd; border-width: 1px; border-style: solid; border-color: #ddd;text-align: left;">Rs. <?php 

                    $percentage = 18;

                    $percentage_amount = ($percentage / 100) * $amount;

                    echo number_format($percentage_amount,2); ?> /- 

                </td>

            </tr>

            <?php }  ?>

            <tr>
              <td style="padding-top: 8px; padding-bottom: 8px; padding-right: 8px; padding-left: 8px; line-height: 1.42857143; vertical-align: top; border-top-width: 1px; border-top-style: solid; border-top-color: #ddd; border-width: 1px; border-style: solid; border-color: #ddd;text-align: left;"></td>

              <td style="padding-top: 8px; padding-bottom: 8px; padding-right: 8px; padding-left: 8px; line-height: 1.42857143; vertical-align: top; border-top-width: 1px; border-top-style: solid; border-top-color: #ddd; border-width: 1px; border-style: solid; border-color: #ddd;text-align: left;"> <b>Total Amount Paid :</b> </td>

              <td style="padding-top: 8px; padding-bottom: 8px; padding-right: 8px; padding-left: 8px; line-height: 1.42857143; vertical-align: top; border-top-width: 1px; border-top-style: solid; border-top-color: #ddd; border-width: 1px; border-style: solid; border-color: #ddd;text-align: left;"><a><b>Rs. <?php echo number_format($amount,2); ?> /- <br> <span style="font-size: 9px;"></span></b></b></a></td>

            </tr>

            

            <tr>
                <td colspan="4">
                    <p style="border-top: 1px solid #000;padding-top: 20px;margin-bottom: 5px;">This is a system generated invoice and does not need any signature.</p>
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    <p style="margin-top: 5px;margin-bottom: 20px;">Fee once paid is not refundable. Pay within time every month to avoid penalty. <a href="https://www.icajobguarantee.com/terms-conditions-online-courses/" >T&C</a> Apply</p>
                </td>

            </tr>
            <tr>
                <td colspan="3">
                    <h5 style="font-size:16px"><a href="https://www.icajobguarantee.com/wp-content/uploads/course-guide/online-course-process.pdf" style="padding: 10px 20px;background: #15c;color: #fff;text-decoration: none;border-radius: 10px;"> Download Course Guide </a></h5>
                </td>
            </tr>
            <tr>

                <td colspan="3">
                    <h5 style="font-size: 16px;">Thank you for choosing ICA. We believe you will be satisfied by our services.</h5>
                </td>

            </tr>

            <tr>
                <td colspan="3">
                    <ul style="padding-left: 0;">
                        <li style="display: inline-block;vertical-align: middle;margin: 0 5px;">
                            <a href="https://www.instagram.com/icaeduskills/"><img src="https://www.icajobguarantee.com/wp-content/themes/ica/admin-booking/images/s-icon-1.png" alt=""></a>
                        </li>

                        <li style="display: inline-block;vertical-align: middle;margin: 0 5px;">
                            <a href="https://www.youtube.com/channel/UC6WWqdZzUMAsZqTQHRyEj_A"><img src="https://www.icajobguarantee.com/wp-content/themes/ica/admin-booking/images/s-icon-2.png" alt=""></a>
                        </li>

                        <li style="display: inline-block;vertical-align: middle;margin: 0 5px;">
                            <a href="https://www.linkedin.com/company/icaeduskills/"><img src="https://www.icajobguarantee.com/wp-content/themes/ica/admin-booking/images/s-icon-3.png" alt=""></a>
                        </li>

                        <li style="display: inline-block;vertical-align: middle;margin: 0 5px;">
                            <a href="https://www.facebook.com/ICAJobguarantee"><img src="https://www.icajobguarantee.com/wp-content/themes/ica/admin-booking/images/s-icon-4.png" alt=""></a>
                        </li>

                        <li style="display: inline-block;vertical-align: middle;margin: 0 5px;">
                            <a href="https://twitter.com/icaskills"><img src="https://www.icajobguarantee.com/wp-content/themes/ica/admin-booking/images/s-icon-5.png" alt=""></a>
                        </li>
                    </ul>
                </td>
            </tr>

            <tr>
                <td colspan="3">Copyright ©1999-2021 ICA EDU SKILL PVT LTD</td>
            </tr>
        </tbody>

    </table>







</body>



</html>