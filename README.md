[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/MicrosoftSpeakerRecognition/functions?utm_source=RapidAPIGitHub_MicrosoftSpeakerRecognitionFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# MicrosoftSpeakerRecognition Package
Speaker Recognition APIs are cloud-based APIs that provide the most advanced algorithms for speaker verification and speaker identification. Speaker Recognition can be divided into two categories: speaker verification and speaker identification.
* Domain: [microsoft.com](https://microsoft.com)
* Credentials: subscriptionKey

## How to get credentials: 
1. Sign in [portal.azure.com](https://portal.azure.com).
2. Add new API subscription.

##### The audio file format must meet the following requirements:
 
 |Param|value|
 |---------|---|
 |Container|wav|
 |Encoding|PCM|
 |Rate|16k|
 |Sample Format|16 bit|
 |Channels|Mono|


## Custom datatypes:
  |Datatype|Description|Example
  |--------|-----------|----------
  |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
  |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
  |List|Simple array|```["123", "sample"]```
  |Select|String with predefined values|```sample```
  |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 
## MicrosoftSpeakerRecognition.createIdentificationEnrollment
Enrollment for speaker identification is text-independent, which means that there are no restrictions on what the speaker says in the audio. The speaker's voice is recorded, and a number of features are extracted to form a unique voiceprint.

| Field                  | Type       | Description
|------------------------|------------|----------
| subscriptionKey        | credentials| Subscription key which provides access to this API. Found in your Cognitive Services accounts.
| shortAudio             | Boolean     | Instruct the service to waive the recommended minimum audio limit needed for enrollment. Set value to “true” to force enrollment using any audio length (min. 1 second).
| identificationProfileId| String     | ID of speaker identification profile. GUID returned from Identification Profile - Create Profile API.
| file                   | File       | The audio file format must meet the following requirements.

## MicrosoftSpeakerRecognition.createIdentificationProfile
Create a new speaker identification profile with specified locale. One subscription can only create 1000 speaker verification/identification profiles at most.

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| Subscription key which provides access to this API. Found in your Cognitive Services accounts.
| locale         | Select     | Locale for the language of this speaker identification profile. Must be: en-US or zh-CN

## MicrosoftSpeakerRecognition.deleteIdentificationProfile
Deletes both speaker identification profile and all associated enrollments permanently from the service.

| Field                  | Type       | Description
|------------------------|------------|----------
| subscriptionKey        | credentials| Subscription key which provides access to this API. Found in your Cognitive Services accounts.
| identificationProfileId| String     | ID of speaker identification profile. GUID returned from Identification Profile - Create Profile API

## MicrosoftSpeakerRecognition.getAllIdentificationProfiles
Get all speaker identification profiles within the subscription.

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| Subscription key which provides access to this API. Found in your Cognitive Services accounts.

## MicrosoftSpeakerRecognition.getSingleIdentificationProfile
Get a speaker identification profile by identificationProfileId.

| Field                  | Type       | Description
|------------------------|------------|----------
| subscriptionKey        | credentials| Subscription key which provides access to this API. Found in your Cognitive Services accounts.
| identificationProfileId| String     | ID of speaker identification profile. GUID returned from Identification Profile - Create Profile API

## MicrosoftSpeakerRecognition.deleteIdentificationProfileEnrollments
Deletes all enrollments associated with the given speaker identification profile permanently from the service.

| Field                  | Type       | Description
|------------------------|------------|----------
| subscriptionKey        | credentials| Subscription key which provides access to this API. Found in your Cognitive Services accounts.
| identificationProfileId| String     | ID of speaker identification profile. GUID returned from Identification Profile - Create Profile API

## MicrosoftSpeakerRecognition.getOperationStatus
Get operation status or result.

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| Subscription key which provides access to this API. Found in your Cognitive Services accounts.
| operationId    | String     | The operation Id, created by Speaker Recognition - Identification or Identification Profile - Create Enrollment.

## MicrosoftSpeakerRecognition.getSpeakerIdentification
To automatically identify who is speaking given a group of speakers.

| Field                   | Type       | Description
|-------------------------|------------|----------
| subscriptionKey         | credentials| Subscription key which provides access to this API. Found in your Cognitive Services accounts.
| identificationProfileIds| List       | Comma-delimited identificationProfileIds, the id should be Guid. It can only support at most 10 profiles for one identification request.
| shortAudio              | Boolean     | Instruct the service to waive the recommended minimum audio limit needed for identification. Set value to “true” to force identification using any audio length (min. 1 second).
| file                    | File       | The audio file format must meet the following requirements.

## MicrosoftSpeakerRecognition.getSpeakerVerification
To automatically verify and authenticate users using their voice or speech.

| Field                | Type       | Description
|----------------------|------------|----------
| subscriptionKey      | credentials| Subscription key which provides access to this API. Found in your Cognitive Services accounts.
| verificationProfileId| String     | ID of speaker verification profile. It should be a GUID.
| file                 | File       | The audio file format must meet the following requirements.

## MicrosoftSpeakerRecognition.getAllSupportedVerificationPhrases
Returns the list of supported verification phrases.

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| Subscription key which provides access to this API. Found in your Cognitive Services accounts.
| locale         | String     | Locale for the language when retrieving verification phrases..

## MicrosoftSpeakerRecognition.createVerificationEnrollment
Enrollment for speaker verification is text-dependent, which means speaker need to choose a specific phrase to use in both enrollment and verification. List of supported phrases can be found in Verification Phrase - List All Supported Verification Phrases.

| Field                | Type       | Description
|----------------------|------------|----------
| subscriptionKey      | credentials| Subscription key which provides access to this API. Found in your Cognitive Services accounts.
| verificationProfileId| String     | ID of speaker verification profile. GUID returned from Verification Profile - Create Profile API
| file                 | File       | The audio file format must meet the following requirements.

## MicrosoftSpeakerRecognition.createVerificationProfile
Create a new speaker verification profile with specific locale.

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| Subscription key which provides access to this API. Found in your Cognitive Services accounts.
| locale         | Select     | Locale for language of the new speaker verification profile. Must be: en-US

## MicrosoftSpeakerRecognition.deleteVerificationProfile
Deletes both speaker verification profile and all associated enrollments permanently from the service.

| Field                | Type       | Description
|----------------------|------------|----------
| subscriptionKey      | credentials| Subscription key which provides access to this API. Found in your Cognitive Services accounts.
| verificationProfileId| String     | ID of speaker verification profile. It should be a GUID.

## MicrosoftSpeakerRecognition.getAllVerificationProfiles
Get all speaker verification profiles within the subscription.

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| Subscription key which provides access to this API. Found in your Cognitive Services accounts.

## MicrosoftSpeakerRecognition.getSingleVerificationProfile
Get a speaker verification profile by verificationProfileId.

| Field                | Type       | Description
|----------------------|------------|----------
| subscriptionKey      | credentials| Subscription key which provides access to this API. Found in your Cognitive Services accounts.
| verificationProfileId| String     | ID of speaker verification profile. It should be a GUID.

## MicrosoftSpeakerRecognition.deleteVerificationProfileEnrollments
Deletes all enrollments associated with the given speaker’s verification profile permanently from the service.

| Field                | Type       | Description
|----------------------|------------|----------
| subscriptionKey      | credentials| Subscription key which provides access to this API. Found in your Cognitive Services accounts.
| verificationProfileId| String     | ID of speaker verification profile. It should be a GUID.

