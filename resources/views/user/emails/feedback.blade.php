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
   
    <table class="table">
        <thead>
         
        </thead>
        <tbody>
          <tr>
            <td>Subject: </td>
            <td>{{$mailData['subject']}}</td>
          </tr>
          <tr>
            <td>Feedback: </td>
            <td>{{$mailData['feedback']}}</td>
          </tr>
          <tr>
            <td>File: </td>
            <td>{{$mailData['file']}}</td>
          </tr>
          <tr>
            <td>Created At: </td>
            <td>{{$mailData['created_at']}}</td>
          </tr>
        </tbody>
      </table>
      <br>
      <p>Thank you,</p>
</body>
</html>