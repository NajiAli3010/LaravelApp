<!DOCTYPE html>
<html>
<head>
    <title>New Feedback Submission</title>
</head>
<body>
    <h1>{{ $mailData['title'] }}</h1>
    <br>
    <p>{{ $mailData['body'] }}</p>
    <br>
    

    {{-- 'title' => $title,
            'body' => $body,
            'subject' => $subject,
            'feedback' => $feedback,
            'file' => $file,
            'created_at' => $created_at, --}}
            
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Subject</th>
            <th scope="col">Feedback</th>
            <th scope="col">File</th>
            <th scope="col">Create Time</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$mailData['subject']}}</td>
            <td>{{$mailData['feedback']}}</td>
            <td>{{$mailData['file']}}</td>
            <td>{{$mailData['created_at']}}</td>
          </tr>
        </tbody>
      </table>
      <br>
      <p>Thank you,</p>
</body>
</html>