<?php
$routes = [
    'metadata',
    'createIdentificationEnrollment',
    'createIdentificationProfile',
    'deleteIdentificationProfile',
    'getAllIdentificationProfiles',
    'getSingleIdentificationProfile',
    'deleteIdentificationProfileEnrollments',
    'getOperationStatus',
    'getSpeakerIdentification',
    'getSpeakerVerification',
    'getAllSupportedVerificationPhrases',
    'createVerificationEnrollment',
    'createVerificationProfile',
    'deleteVerificationProfile',
    'getAllVerificationProfiles',
    'getSingleVerificationProfile',
    'deleteVerificationProfileEnrollments'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

