<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <title>Thank You for Contacting Us</title>
</head>

<body style='font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;'>
    <table width='100%' cellspacing='0' cellpadding='10'
        style='max-width: 600px; margin: auto; background: white; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>
        <tr>
            <td style='background-color: #2e1334; color: white; text-align: center; padding: 15px; font-size: 20px;'>
                Thank You for Reaching Out
            </td>
        </tr>
        <tr>
            <td style='padding: 15px;'>
                <p>Hi <strong>{{ $data['firstname'] ?? 'Customer' }}</strong>,</p>

                <p>Thank you for contacting us. We’ve received your message and will be in touch with you soon.
                </p>

                <h4 style='color: #2e1334;'>Your Submission Details</h4>
                <ul>
                    <li><strong>First Name:</strong> {{ $data['firstname'] ?? '' }}</li>
                    <li><strong>Last Name:</strong> {{ $data['lastname'] ?? '' }}</li>
                    <li><strong>Email:</strong> {{ $data['email'] ?? '' }}</li>
                    <li><strong>Contact Number:</strong> {{ $data['phone'] ?? '' }}</li>
                    <li><strong>Message:</strong> {{ $data['message'] ?? '' }}</li>
                </ul>

                <p>We appreciate your interest.</p>
            </td>
        </tr>
        <!-- Professional Footer -->
        <tr>
            <td style='padding: 20px; background-color:#f9f9f9; color:#333; font-size: 13px; line-height: 1.5;'>
                <p style="margin:0; font-weight:bold; color:#4b0082;">
                    AERO LAUNCH PVT LTD
                </p>
                <p style="margin:5px 0;">
                    <a href="https://www.aerolaunch.net"
                        style="color:#2e1334; text-decoration:none;">www.aerolaunch.net</a> |
                    Tel: +44 79 33 58 1318 |
                    E-Mail: <a href="mailto:hello@aerolaunch.net"
                        style="color:#2e1334; text-decoration:none;">hello@aerolaunch.net</a>
                </p>

                <!-- Social Icons -->
                <p style="margin:10px 0;">
                    <a href="https://www.linkedin.com/company/aero-launch/" style="margin-right:10px;"><img
                            src="https://cdn-icons-png.flaticon.com/512/174/174857.png" width="20"
                            alt="LinkedIn"></a>
                    <a href="https://web.facebook.com/profile.php?id=61565896706200" style="margin-right:10px;"><img
                            src="https://cdn-icons-png.flaticon.com/512/733/733547.png" width="20"
                            alt="Facebook"></a>
                    <a href="https://www.youtube.com/@aerolaunch"><img
                            src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" width="20"
                            alt="YouTube"></a>
                </p>

                <!-- Disclaimer -->
                <p style="margin-top:10px; font-size:12px; color:#555;">
                    <strong>Note:</strong> This email is sent subject to contract and without prejudice, commitment, or
                    obligation to Aero Launch. The information contained in this e-mail and any subsequent
                    correspondence
                    is private and is solely for the use of the intended recipient(s). For those other than the
                    recipient(s), any disclosure, copying, distribution, or action taken or omitted to be taken in
                    reliance on such information is prohibited and may be unlawful.
                </p>
            </td>
        </tr>
    </table>
</body>

</html>
