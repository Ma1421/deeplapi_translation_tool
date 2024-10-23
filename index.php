<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeepL Translation Tool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">DeepL Translation Tool</h1>
        <form method="POST" action="translate.php">
            <div class="mb-3">
                <label for="textToTranslate" class="form-label">Text to Translate</label>
                <input type="text" class="form-control" id="textToTranslate" name="textToTranslate" required>
            </div>
            <div class="mb-3">
                <label for="targetLanguage" class="form-label">Target Language</label>
                <select class="form-select" id="targetLanguage" name="targetLanguage">
                    <option value="EN">English</option>
                    <option value="JA">Japanese</option>
                    <option value="FR">French</option>
                    <!-- 他の言語も追加可能 -->
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Translate</button>
        </form>
    </div>
</body>
</html>
