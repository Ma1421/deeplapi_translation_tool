<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $textToTranslate = $_POST['textToTranslate'];
    $targetLanguage = $_POST['targetLanguage'];

    // DeepL APIキー
    $apiKey = 'c7e5a14f-66de-45a6-a726-232c3085fdd1:fx'; // DeepLから取得したAPIキーをここに設定

    // APIリクエストのエンドポイント
    $url = "https://api-free.deepl.com/v2/translate";

    // リクエストのデータ
    $data = [
        'auth_key' => $apiKey,
        'text' => $textToTranslate,
        'target_lang' => $targetLanguage
    ];

    // cURLを使ってAPIリクエストを送信
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
    $response = curl_exec($ch);
    curl_close($ch);

    // APIレスポンスの解析
    $responseData = json_decode($response, true);
    if (isset($responseData['translations'][0]['text'])) {
        $translatedText = $responseData['translations'][0]['text'];
        echo "<h2>Translated Text: $translatedText</h2>";
    } else {
        echo "<h2>Error: Unable to translate.</h2>";
    }
}
?>
