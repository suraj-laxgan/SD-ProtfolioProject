<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: sans-serif; line-height: 1.6; color: #333; }
        .container { padding: 20px; border: 1px solid #eee; border-radius: 5px; }
        .message-box { background: #f9f9f9; padding: 15px; border-left: 4px solid #007bff; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hello, {{ $name }}!</h2>
        <p>Thank you for reaching out. We have received your message regarding <strong>{{ $subject ?? 'General Inquiry' }}</strong>.</p>
        
        <div class="message-box">
            <p><strong>Your Message:</strong></p>
            <!-- nl2br preserves your Word formatting in the email -->
            <p>{!! nl2br(e($messages)) !!}</p>
            {{-- <p>{{$messages}}</p> --}}

        </div>

        <p>Our team will get back to you shortly.</p>
        <hr>
        <p><small>This is an automated response from {{ config('app.name') }}.</small></p>
    </div>
</body>
</html>