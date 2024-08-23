<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مملكة السرد</title>
    <link rel="icon" href="Website.jpg">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="centered-text">
        <p>اكتب القصة</p>
        <form>
            <label for="TitleOfTheStory">عنوان القصة:</label><br>
            <input type="text" id="TitleOfTheStory">
            <br><label for="StoryText">نص القصة:</label><br>
            <input type="text" id="StoryText">
            <p>اختر تصنيف القصة</p>
            <label for="StoryGenre">اختر نوع القصة:</label>
            <select id="StoryGenre" name="StoryGenre">
                <option value="Romance">رومانسي</option>
                <option value="ScienceFiction">خيال علمي</option>
                <option value="Horror">رعب</option>
                <option value="Mystery">غموض</option>
                <option value="Drama">دراما</option>
                <option value="Adventure">مغامرة</option>
                <option value="Fantasy">خيال</option>
                <option value="Biography">سيرة ذاتية</option>
                <option value="Historical">تاريخي</option>
                <option value="Comedy">كوميديا</option>
                <option value="fantasy">خيال</option>
            </select>
            <input type="submit" value="ارسال القصة">
            <textarea name="message" rows="200" cols="200"></textarea>
        </form>
    </div>
</body>
</html>
