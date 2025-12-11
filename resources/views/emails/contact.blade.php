<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #2563eb;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background-color: #f9fafb;
            padding: 30px;
            border: 1px solid #e5e7eb;
            border-top: none;
        }
        .field {
            margin-bottom: 20px;
        }
        .label {
            font-weight: bold;
            color: #1f2937;
            margin-bottom: 5px;
        }
        .value {
            padding: 10px;
            background-color: white;
            border-radius: 4px;
            border: 1px solid #e5e7eb;
        }
        .footer {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
            text-align: center;
            color: #6b7280;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>New Contact Form Submission</h1>
    </div>
    <div class="content">
        <div class="field">
            <div class="label">Name:</div>
            <div class="value">{{ $contactData['name'] }}</div>
        </div>
        
        <div class="field">
            <div class="label">Email:</div>
            <div class="value">{{ $contactData['email'] }}</div>
        </div>
        
        <div class="field">
            <div class="label">Subject:</div>
            <div class="value">{{ $contactData['subject'] }}</div>
        </div>
        
        <div class="field">
            <div class="label">Message:</div>
            <div class="value">{{ $contactData['message'] }}</div>
        </div>
        
        <div class="footer">
            <p>This email was sent from the contact form on your website.</p>
            <p>Reply directly to this email to respond to {{ $contactData['name'] }}.</p>
        </div>
    </div>
</body>
</html>
