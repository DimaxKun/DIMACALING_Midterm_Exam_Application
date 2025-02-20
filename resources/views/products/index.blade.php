<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Isekai Anime List</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Poppins:wght@300;400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: url('https://wallpapercave.com/wp/wp7412053.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
            text-align: center;
        }

        h1 {
            font-family: 'Luckiest Guy', cursive;
            font-size: 3rem;
            text-shadow: 3px 3px 10px rgba(255, 255, 255, 0.8);
            margin-top: 20px;
        }

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background: rgba(0, 0, 0, 0.8);
            box-shadow: 4px 4px 20px rgba(255, 255, 255, 0.5);
            border-radius: 10px;
            overflow: hidden;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: center;
            font-size: 1.2rem;
        }

        th {
            background: linear-gradient(45deg, #ff4e50, #fc913a);
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.1);
        }

        tr:hover {
            background-color: rgba(255, 255, 255, 0.3);
            transition: 0.3s;
        }

        .home-btn {
            display: inline-block;
            width: 200px;
            padding: 12px;
            font-size: 1.2rem;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            background: linear-gradient(90deg, #ff4e50, #fc913a);
            color: white;
            border-radius: 10px;
            box-shadow: 2px 2px 15px rgba(255, 255, 255, 0.5);
            margin-top: 20px;
            transition: transform 0.2s, box-shadow 0.3s;
        }

        .home-btn:hover {
            transform: scale(1.1);
            box-shadow: 4px 4px 25px rgba(255, 255, 255, 0.8);
        }
    </style>
</head>
<body>
    <h1>Isekai Anime List</h1>
    <table>
        <tr>
            <th>Title</th>
            <th>Episodes</th>
            <th>Main Character</th>
            <th>Rating</th>
        </tr>
        @foreach($isekaiAnime as $anime)
        <tr>
            <td>{{ $anime['title'] }}</td>
            <td>{{ $anime['episodes'] }}</td>
            <td>{{ $anime['main_character'] }}</td>
            <td>{{ $anime['rating'] }}</td>
        </tr>
        @endforeach
    </table>

    <a href="/" class="home-btn">Go to Home</a>
</body>
</html>
