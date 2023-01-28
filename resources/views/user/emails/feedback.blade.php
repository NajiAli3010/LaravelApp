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
    <p>Thank you</p>

    {{$mailData['data']}}
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Subject</th>
            <th scope="col">Feedback</th>
            <th scope="col">File</th>
            <th scope="col">Create Time</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
        </tbody>
      </table>
</body>
</html>