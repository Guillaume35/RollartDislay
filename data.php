<?php

$content = json_decode(file_get_contents('./data.json'));

$content->liveScoreEl = isset($_GET['liveScoreEl']) ? $_GET['liveScoreEl'] : $content->liveScoreEl;
$content->liveScoreVal = isset($_GET['liveScoreVal']) ? $_GET['liveScoreVal'] : $content->liveScoreVal;
$content->liveScoreSk = isset($_GET['liveScoreSk']) ? $_GET['liveScoreSk'] : $content->liveScoreSk;
$content->teamA = isset($_GET['teamA']) ? $_GET['teamA'] : $content->teamA;
$content->teamB = isset($_GET['teamB']) ? $_GET['teamB'] : $content->teamB;
$content->finalScoreTechnical = isset($_GET['finalScoreTechnical']) ? $_GET['finalScoreTechnical'] : $content->finalScoreTechnical;
$content->finalScoreComponents = isset($_GET['finalScoreComponents']) ? $_GET['finalScoreComponents'] : $content->finalScoreComponents;
$content->finalScoreDeduction = isset($_GET['finalScoreDeduction']) ? $_GET['finalScoreDeduction'] : $content->finalScoreDeduction;
$content->segmentScore = isset($_GET['segmentScore']) ? $_GET['segmentScore'] : $content->segmentScore;
$content->finalScore = isset($_GET['finalScore']) ? $_GET['finalScore'] : $content->finalScore;
$content->rank = isset($_GET['rank']) ? $_GET['rank'] : $content->rank;
$content->skaterName = isset($_GET['skaterName']) ? $_GET['skaterName'] : $content->skaterName;
$content->skaterTeam = isset($_GET['skaterTeam']) ? $_GET['skaterTeam'] : $content->skaterTeam;

file_put_contents('./data.json', json_encode($content));

?>
