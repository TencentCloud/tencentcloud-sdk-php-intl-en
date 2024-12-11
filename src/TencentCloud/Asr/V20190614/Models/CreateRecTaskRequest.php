<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRecTask request structure.
 *
 * @method string getEngineModelType() Obtain Engine model type.
Each recognition engine adopts a specific billing plan. Engines marked with "large model version" adopt the large model billing plan. For product billing instructions, [click here] (https://intl.cloud.tencent.com/document/product/1093/35686?from_cn_redirect=1).


Note: If you want to recognize telecommunication audio but find that a 16k engine is required, you can use a 16k engine as described below for recognition. However, ** the 16k engines are not trained for recognizing telecommunication audio. Therefore, the recognition results cannot be guaranteed. You need to check whether the recognition results can be used. **

Engines for general scenarios:
** Note: Use 16k engines for scenarios other than telecommunication. **
** 16k_zh_large: ** Engine (large model version) for Mandarin, Chinese dialects, and English. This engine supports recognizing audio in Chinese, English, and [various Chinese dialects] (https://intl.cloud.tencent.com/document/product/1093/35682?from_cn_redirect=1). It has a large number of parameters, enhanced performance, and greatly improved recognition accuracy for low-quality audio with loud noise, too much echo, low voice volume, or faint voices. [Click here] (https://console.cloud.tencent.com/asr/demonstrate) to compare the recognition performance of the 16k_zh engine and this one.
** 16k_multi_lang: ** Engine (large model version) for multiple languages. This engine supports recognizing audio in English, Japanese, Korean, Arabic, Filipino, French, Hindi, Indonesian, Malay, Portuguese, Spanish, Thai, Turkish, Vietnamese, and German (sentence-level or paragraph-level).
** 16k_zh-PY: ** Engine for Chinese, English, and Cantonese. The engine supports recognizing audio in Mandarin, English, and Cantonese at the same time.
** 16k_ms: ** Engine for Malay.
** 16k_id: ** Engine for Indonesian.
** 16k_th: ** Engine for Thai.
 * @method void setEngineModelType(string $EngineModelType) Set Engine model type.
Each recognition engine adopts a specific billing plan. Engines marked with "large model version" adopt the large model billing plan. For product billing instructions, [click here] (https://intl.cloud.tencent.com/document/product/1093/35686?from_cn_redirect=1).


Note: If you want to recognize telecommunication audio but find that a 16k engine is required, you can use a 16k engine as described below for recognition. However, ** the 16k engines are not trained for recognizing telecommunication audio. Therefore, the recognition results cannot be guaranteed. You need to check whether the recognition results can be used. **

Engines for general scenarios:
** Note: Use 16k engines for scenarios other than telecommunication. **
** 16k_zh_large: ** Engine (large model version) for Mandarin, Chinese dialects, and English. This engine supports recognizing audio in Chinese, English, and [various Chinese dialects] (https://intl.cloud.tencent.com/document/product/1093/35682?from_cn_redirect=1). It has a large number of parameters, enhanced performance, and greatly improved recognition accuracy for low-quality audio with loud noise, too much echo, low voice volume, or faint voices. [Click here] (https://console.cloud.tencent.com/asr/demonstrate) to compare the recognition performance of the 16k_zh engine and this one.
** 16k_multi_lang: ** Engine (large model version) for multiple languages. This engine supports recognizing audio in English, Japanese, Korean, Arabic, Filipino, French, Hindi, Indonesian, Malay, Portuguese, Spanish, Thai, Turkish, Vietnamese, and German (sentence-level or paragraph-level).
** 16k_zh-PY: ** Engine for Chinese, English, and Cantonese. The engine supports recognizing audio in Mandarin, English, and Cantonese at the same time.
** 16k_ms: ** Engine for Malay.
** 16k_id: ** Engine for Indonesian.
** 16k_th: ** Engine for Thai.
 * @method integer getChannelNum() Obtain Number of recognition channels.
1: Mono. (16k engines only support mono. ** Do no t** set to stereo.)
2: Stereo. (Stereo is supported only for 8k engines, and the two channels should correspond to the respective communication parties.)

Note:
16k engines: Only support mono. ** ChannelNum should be set to 1 **.
8k engines: Support both mono and stereo. ** It is recommended to set ChannelNum to 2 (indicating stereo) **. Stereo can physically distinguish speakers to avoid recognition mistakes caused by overlapping speech. It can provide the best speaker separation and recognition effects. Once stereo is set, the speakers are automatically separated. ** You do not need to enable the speaker separation feature **. You can use the default values for related parameters (** SpeakerDiarization and SpeakerNumber **). For speakerId in the returned ResultDetail, the value 0 represents the left channel, and the value 1 represents the right channel.
 * @method void setChannelNum(integer $ChannelNum) Set Number of recognition channels.
1: Mono. (16k engines only support mono. ** Do no t** set to stereo.)
2: Stereo. (Stereo is supported only for 8k engines, and the two channels should correspond to the respective communication parties.)

Note:
16k engines: Only support mono. ** ChannelNum should be set to 1 **.
8k engines: Support both mono and stereo. ** It is recommended to set ChannelNum to 2 (indicating stereo) **. Stereo can physically distinguish speakers to avoid recognition mistakes caused by overlapping speech. It can provide the best speaker separation and recognition effects. Once stereo is set, the speakers are automatically separated. ** You do not need to enable the speaker separation feature **. You can use the default values for related parameters (** SpeakerDiarization and SpeakerNumber **). For speakerId in the returned ResultDetail, the value 0 represents the left channel, and the value 1 represents the right channel.
 * @method integer getResTextFormat() Obtain Format of the returned recognition result.
0: The basic recognition result (containing only valid voice timestamps but no word-level [detailed recognition result] (https://intl.cloud.tencent.com/document/api/1093/37824?from_cn_redirect=1#SentenceDetail)).
1: The basic recognition result and word-level [detailed recognition result] (https://intl.cloud.tencent.com/document/api/1093/37824?from_cn_redirect=1#SentenceDetail) (containing word-level timestamps and speech speed value but ** no punctuation **).
2: The basic recognition result and word-level [detailed recognition result] (https://intl.cloud.tencent.com/document/api/1093/37824?from_cn_redirect=1#SentenceDetail) (containing word-level timestamps, speech speed value, and ** punctuation **).
3: The basic recognition result and word-level [detailed recognition result] (https://intl.cloud.tencent.com/document/api/1093/37824?from_cn_redirect=1#SentenceDetail) (containing word-level timestamps, speech speed value, and ** punctuation **). The recognition results are segmented by punctuation. ** This format applies to subtitle scenarios **.
4: ** [Value-added paid feature] ** The basic recognition result and word-level [detailed recognition result] (https://intl.cloud.tencent.com/document/api/1093/37824?from_cn_redirect=1#SentenceDetail) (containing word-level timestamps, speech speed value, and ** punctuation **). The recognition results are segmented by NLP semantics. ** This format applies to scenarios such as meeting and court record transcription ** and is supported only for 8k_zh and 16k_zh engines.
5: ** [Value-added paid feature] ** Basic recognition result and word-level [detailed recognition result] (https://intl.cloud.tencent.com/document/api/1093/37824?from_cn_redirect=1#SentenceDetail) (containing word-level timestamps, speech speed value, and ** punctuation **). The oral-to-written transcription result is also output, which has excluded modal particles and consecutive identical words, optimized expressions, and corrected speech mistakes. ** This format applies to scenarios of generating minutes for online and offline meetings** and is supported only for 8k_zh and 16k_zh engines.

Notes:
If this parameter is set to 4, make sure that a [semantics-based segmentation resource package] (https://intl.cloud.tencent.com/document/product/1093/35686?from_cn_redirect=1#97ae4aa0-29a0-4066-9f07-ccaf8856a16b) is purchased for your account or that your account has enabled post-payment. ** If post-payment is enabled and this parameter is set to 4, [automatic billing] (https://intl.cloud.tencent.com/document/product/1093/35686?from_cn_redirect=1#d912167d-ffd5-41a9-8b1c-2e89845a6852) will apply **.
If this parameter is set to 5, make sure that an [oral-to-written resource package] (https://intl.cloud.tencent.com/document/product/1093/35686?from_cn_redirect=1#97ae4aa0-29a0-4066-9f07-ccaf8856a16b) is purchased for your account or that your account has enabled post-payment. ** If post-payment is enabled and this parameter is set to 5, [automatic billing] (https://intl.cloud.tencent.com/document/product/1093/35686?from_cn_redirect=1#d912167d-ffd5-41a9-8b1c-2e89845a6852) will apply **.
 * @method void setResTextFormat(integer $ResTextFormat) Set Format of the returned recognition result.
0: The basic recognition result (containing only valid voice timestamps but no word-level [detailed recognition result] (https://intl.cloud.tencent.com/document/api/1093/37824?from_cn_redirect=1#SentenceDetail)).
1: The basic recognition result and word-level [detailed recognition result] (https://intl.cloud.tencent.com/document/api/1093/37824?from_cn_redirect=1#SentenceDetail) (containing word-level timestamps and speech speed value but ** no punctuation **).
2: The basic recognition result and word-level [detailed recognition result] (https://intl.cloud.tencent.com/document/api/1093/37824?from_cn_redirect=1#SentenceDetail) (containing word-level timestamps, speech speed value, and ** punctuation **).
3: The basic recognition result and word-level [detailed recognition result] (https://intl.cloud.tencent.com/document/api/1093/37824?from_cn_redirect=1#SentenceDetail) (containing word-level timestamps, speech speed value, and ** punctuation **). The recognition results are segmented by punctuation. ** This format applies to subtitle scenarios **.
4: ** [Value-added paid feature] ** The basic recognition result and word-level [detailed recognition result] (https://intl.cloud.tencent.com/document/api/1093/37824?from_cn_redirect=1#SentenceDetail) (containing word-level timestamps, speech speed value, and ** punctuation **). The recognition results are segmented by NLP semantics. ** This format applies to scenarios such as meeting and court record transcription ** and is supported only for 8k_zh and 16k_zh engines.
5: ** [Value-added paid feature] ** Basic recognition result and word-level [detailed recognition result] (https://intl.cloud.tencent.com/document/api/1093/37824?from_cn_redirect=1#SentenceDetail) (containing word-level timestamps, speech speed value, and ** punctuation **). The oral-to-written transcription result is also output, which has excluded modal particles and consecutive identical words, optimized expressions, and corrected speech mistakes. ** This format applies to scenarios of generating minutes for online and offline meetings** and is supported only for 8k_zh and 16k_zh engines.

Notes:
If this parameter is set to 4, make sure that a [semantics-based segmentation resource package] (https://intl.cloud.tencent.com/document/product/1093/35686?from_cn_redirect=1#97ae4aa0-29a0-4066-9f07-ccaf8856a16b) is purchased for your account or that your account has enabled post-payment. ** If post-payment is enabled and this parameter is set to 4, [automatic billing] (https://intl.cloud.tencent.com/document/product/1093/35686?from_cn_redirect=1#d912167d-ffd5-41a9-8b1c-2e89845a6852) will apply **.
If this parameter is set to 5, make sure that an [oral-to-written resource package] (https://intl.cloud.tencent.com/document/product/1093/35686?from_cn_redirect=1#97ae4aa0-29a0-4066-9f07-ccaf8856a16b) is purchased for your account or that your account has enabled post-payment. ** If post-payment is enabled and this parameter is set to 5, [automatic billing] (https://intl.cloud.tencent.com/document/product/1093/35686?from_cn_redirect=1#d912167d-ffd5-41a9-8b1c-2e89845a6852) will apply **.
 * @method integer getSourceType() Obtain Audio source.
0: Audio URL.
1: Local audio file (body of the POST request).
 * @method void setSourceType(integer $SourceType) Set Audio source.
0: Audio URL.
1: Local audio file (body of the POST request).
 * @method string getData() Obtain Audio file Base64 code.
** This parameter is required if SourceType is set to 1. Otherwise, it can be left blank. **

Note: The audio data size cannot exceed 5 MB.
 * @method void setData(string $Data) Set Audio file Base64 code.
** This parameter is required if SourceType is set to 1. Otherwise, it can be left blank. **

Note: The audio data size cannot exceed 5 MB.
 * @method integer getDataLen() Obtain Data length (before Base64 encoding).
 * @method void setDataLen(integer $DataLen) Set Data length (before Base64 encoding).
 * @method string getUrl() Obtain Audio URL. (The audio should be downloadable via a public network browser.)
** This parameter is required if SourceType is set to 0. Otherwise, it can be left blank. **

Notes:
1. Make sure that the total audio duration of recording files does not exceed 5 hours. Otherwise, recognition may fail.
2. Pay attention to file download to avoid download failure.
 * @method void setUrl(string $Url) Set Audio URL. (The audio should be downloadable via a public network browser.)
** This parameter is required if SourceType is set to 0. Otherwise, it can be left blank. **

Notes:
1. Make sure that the total audio duration of recording files does not exceed 5 hours. Otherwise, recognition may fail.
2. Pay attention to file download to avoid download failure.
 * @method string getCallbackUrl() Obtain Callback URL

User-defined service URL for receiving recognition results.
For the callback format and content, see [Callback Description] (https://intl.cloud.tencent.com/document/product/1093/52632?from_cn_redirect=1).

Notes:

- If you use the polling method to obtain recognition results, this parameter is not required.
- It is recommended to include your business ID and other information in the callback URL for handling business logic.
 * @method void setCallbackUrl(string $CallbackUrl) Set Callback URL

User-defined service URL for receiving recognition results.
For the callback format and content, see [Callback Description] (https://intl.cloud.tencent.com/document/product/1093/52632?from_cn_redirect=1).

Notes:

- If you use the polling method to obtain recognition results, this parameter is not required.
- It is recommended to include your business ID and other information in the callback URL for handling business logic.
 * @method integer getSpeakerDiarization() Obtain Whether to enable speaker separation.
0: Disable.
1: Enable. (This value is supported only for the following engines: 8k_zh, 16k_zh, 16k_ms, 16k_en, 16k_id, 16k_zh_large, and 16k_zh_dialect. ChannelNum should be set to 1.)
The default value is 0.

Note:
If an 8k engine is used and ChannelNum is set to 2 (stereo), use the default values for corresponding parameters as stated in the ** ChannelNum ** parameter description.
 * @method void setSpeakerDiarization(integer $SpeakerDiarization) Set Whether to enable speaker separation.
0: Disable.
1: Enable. (This value is supported only for the following engines: 8k_zh, 16k_zh, 16k_ms, 16k_en, 16k_id, 16k_zh_large, and 16k_zh_dialect. ChannelNum should be set to 1.)
The default value is 0.

Note:
If an 8k engine is used and ChannelNum is set to 2 (stereo), use the default values for corresponding parameters as stated in the ** ChannelNum ** parameter description.
 * @method integer getSpeakerNumber() Obtain Number of speakers to be separated.
** Speaker separation must be enabled. Otherwise, this parameter does not take effect. ** Value range: 0-10.
0: Automatic separation. (Up to 20 speakers can be separated.)
1-10: Specify the number of speakers.
The default value is 0.
 * @method void setSpeakerNumber(integer $SpeakerNumber) Set Number of speakers to be separated.
** Speaker separation must be enabled. Otherwise, this parameter does not take effect. ** Value range: 0-10.
0: Automatic separation. (Up to 20 speakers can be separated.)
1-10: Specify the number of speakers.
The default value is 0.
 * @method string getHotwordId() Obtain This service is not available.
 * @method void setHotwordId(string $HotwordId) Set This service is not available.
 * @method integer getReinforceHotword() Obtain This service is not available.
 * @method void setReinforceHotword(integer $ReinforceHotword) Set This service is not available.
 * @method string getCustomizationId() Obtain This service is not available.
 * @method void setCustomizationId(string $CustomizationId) Set This service is not available.
 * @method integer getEmotionRecognition() Obtain This service is not available.
 * @method void setEmotionRecognition(integer $EmotionRecognition) Set This service is not available.
 * @method integer getEmotionalEnergy() Obtain Emotional energy value.
The value is the result of dividing the sound volume in dB by 10. Value range: [1,10]. The higher the value, the stronger the emotion.
0: Disable.
1: Enable.
The default value is 0.
 * @method void setEmotionalEnergy(integer $EmotionalEnergy) Set Emotional energy value.
The value is the result of dividing the sound volume in dB by 10. Value range: [1,10]. The higher the value, the stronger the emotion.
0: Disable.
1: Enable.
The default value is 0.
 * @method integer getConvertNumMode() Obtain Intelligent conversion into Arabic numerals (supported only for engines for recognizing audio in Mandarin).
0: Do not convert, but directly output Chinese numerals.
1: Intelligently convert into Arabic numerals based on the scenario.
3: Enable conversion for math-related letters.
The default value is 1.
 * @method void setConvertNumMode(integer $ConvertNumMode) Set Intelligent conversion into Arabic numerals (supported only for engines for recognizing audio in Mandarin).
0: Do not convert, but directly output Chinese numerals.
1: Intelligently convert into Arabic numerals based on the scenario.
3: Enable conversion for math-related letters.
The default value is 1.
 * @method integer getFilterDirty() Obtain Dirty word filtering (supported only for engines for recognizing audio in Mandarin).
0: Do not filter out dirty words.
1: Filter out dirty words.
2: Replace dirty words with *.
The default value is 0.
 * @method void setFilterDirty(integer $FilterDirty) Set Dirty word filtering (supported only for engines for recognizing audio in Mandarin).
0: Do not filter out dirty words.
1: Filter out dirty words.
2: Replace dirty words with *.
The default value is 0.
 * @method integer getFilterPunc() Obtain Punctuation filtering (supported only for engines for recognizing audio in Mandarin).
0: Do not filter out punctuation.
1: Filter out sentence-ending punctuation.
2: Filter out all punctuation.
The default value is 0.
 * @method void setFilterPunc(integer $FilterPunc) Set Punctuation filtering (supported only for engines for recognizing audio in Mandarin).
0: Do not filter out punctuation.
1: Filter out sentence-ending punctuation.
2: Filter out all punctuation.
The default value is 0.
 * @method integer getFilterModal() Obtain Modal particle filtering (supported only for engines for recognizing audio in Mandarin).
0: Do not filter out modal particles.
1: Filter out specified modal particles.
2: Filter out all modal particles.
The default value is 0.
 * @method void setFilterModal(integer $FilterModal) Set Modal particle filtering (supported only for engines for recognizing audio in Mandarin).
0: Do not filter out modal particles.
1: Filter out specified modal particles.
2: Filter out all modal particles.
The default value is 0.
 * @method integer getSentenceMaxLength() Obtain The maximum number of characters per line (supported only for engines for recognizing audio in Mandarin). A punctuation mark is added if this limit is reached.
** This parameter can control the maximum number of characters per line, which applies to subtitle generation scenarios. ** Value range: [6,40].
0: Disable this feature.
The default value is 0.

Note: To enable this feature, ResTextFormat should be set to 3. The recognition result can be obtained from FinalSentence by parsing the list in the returned ResultDetail.
 * @method void setSentenceMaxLength(integer $SentenceMaxLength) Set The maximum number of characters per line (supported only for engines for recognizing audio in Mandarin). A punctuation mark is added if this limit is reached.
** This parameter can control the maximum number of characters per line, which applies to subtitle generation scenarios. ** Value range: [6,40].
0: Disable this feature.
The default value is 0.

Note: To enable this feature, ResTextFormat should be set to 3. The recognition result can be obtained from FinalSentence by parsing the list in the returned ResultDetail.
 * @method string getExtra() Obtain Additional parameter. ** (This parameter is meaningless. Ignore it.) **
 * @method void setExtra(string $Extra) Set Additional parameter. ** (This parameter is meaningless. Ignore it.) **
 * @method string getHotwordList() Obtain Temporary term list. This parameter is used to improve the recognition accuracy.

- Restrictions for individual terms: The format is "term|weight". Each term can contain no more than 30 characters (or 10 Chinese characters. The weight can be in the range of [1-11] or 100. For example, "Tencent Cloud|5" or "ASR|11".

- Restrictions for the temporary term list: Multiple terms are separated by commas. The list can contain up to 128 terms. For example, "Tencent Cloud|10, Audio Recognition|5, ASR|11".

- Difference between hotword_id (term list) and hotword_list (temporary term list):

    - hotword_id: Term list. You need to create a term list in the console or by using the API first and obtain the term list ID.

    - hotword_list: Temporary term list. You can directly enter the ID of the temporary term list each time you initiate a request. The temporary term list is not retained on the cloud. This parameter applies to users with a massive number of terms.

Notes:

- If both hotword_id and hotword_list are specified, hotword_list will take effect first.

- When the weight of a term is set to 11, this term becomes a super term. It is recommended that the weight is set to 11 only for critical and necessary terms. The overall accuracy will be affected if the weight is set to 11 for too many terms.

- When the weight of a term is set to 100, the term enhancement feature is enabled to replace homophones of this term. (This feature is supported only for 8k_zh and 16k_zh engines.) For example, if you configure "mizhi 1|100", the recognized word "mizhi 2", which is a homophone of "mizhi 2", will be forcibly replaced with "mizhi 2". It is recommended that you enable this feature based on the actual needs. You can set the weight to 100 for only critical and necessary terms. The overall accuracy will be affected if the weight is set to 100 for too many terms.
 * @method void setHotwordList(string $HotwordList) Set Temporary term list. This parameter is used to improve the recognition accuracy.

- Restrictions for individual terms: The format is "term|weight". Each term can contain no more than 30 characters (or 10 Chinese characters. The weight can be in the range of [1-11] or 100. For example, "Tencent Cloud|5" or "ASR|11".

- Restrictions for the temporary term list: Multiple terms are separated by commas. The list can contain up to 128 terms. For example, "Tencent Cloud|10, Audio Recognition|5, ASR|11".

- Difference between hotword_id (term list) and hotword_list (temporary term list):

    - hotword_id: Term list. You need to create a term list in the console or by using the API first and obtain the term list ID.

    - hotword_list: Temporary term list. You can directly enter the ID of the temporary term list each time you initiate a request. The temporary term list is not retained on the cloud. This parameter applies to users with a massive number of terms.

Notes:

- If both hotword_id and hotword_list are specified, hotword_list will take effect first.

- When the weight of a term is set to 11, this term becomes a super term. It is recommended that the weight is set to 11 only for critical and necessary terms. The overall accuracy will be affected if the weight is set to 11 for too many terms.

- When the weight of a term is set to 100, the term enhancement feature is enabled to replace homophones of this term. (This feature is supported only for 8k_zh and 16k_zh engines.) For example, if you configure "mizhi 1|100", the recognized word "mizhi 2", which is a homophone of "mizhi 2", will be forcibly replaced with "mizhi 2". It is recommended that you enable this feature based on the actual needs. You can set the weight to 100 for only critical and necessary terms. The overall accuracy will be affected if the weight is set to 100 for too many terms.
 * @method array getKeyWordLibIdList() Obtain List of keyword IDs for recognition. This parameter is left blank by default, indicating that no keyword is recognized. You can enter up to 10 IDs.

 * @method void setKeyWordLibIdList(array $KeyWordLibIdList) Set List of keyword IDs for recognition. This parameter is left blank by default, indicating that no keyword is recognized. You can enter up to 10 IDs.
 */
class CreateRecTaskRequest extends AbstractModel
{
    /**
     * @var string Engine model type.
Each recognition engine adopts a specific billing plan. Engines marked with "large model version" adopt the large model billing plan. For product billing instructions, [click here] (https://intl.cloud.tencent.com/document/product/1093/35686?from_cn_redirect=1).


Note: If you want to recognize telecommunication audio but find that a 16k engine is required, you can use a 16k engine as described below for recognition. However, ** the 16k engines are not trained for recognizing telecommunication audio. Therefore, the recognition results cannot be guaranteed. You need to check whether the recognition results can be used. **

Engines for general scenarios:
** Note: Use 16k engines for scenarios other than telecommunication. **
** 16k_zh_large: ** Engine (large model version) for Mandarin, Chinese dialects, and English. This engine supports recognizing audio in Chinese, English, and [various Chinese dialects] (https://intl.cloud.tencent.com/document/product/1093/35682?from_cn_redirect=1). It has a large number of parameters, enhanced performance, and greatly improved recognition accuracy for low-quality audio with loud noise, too much echo, low voice volume, or faint voices. [Click here] (https://console.cloud.tencent.com/asr/demonstrate) to compare the recognition performance of the 16k_zh engine and this one.
** 16k_multi_lang: ** Engine (large model version) for multiple languages. This engine supports recognizing audio in English, Japanese, Korean, Arabic, Filipino, French, Hindi, Indonesian, Malay, Portuguese, Spanish, Thai, Turkish, Vietnamese, and German (sentence-level or paragraph-level).
** 16k_zh-PY: ** Engine for Chinese, English, and Cantonese. The engine supports recognizing audio in Mandarin, English, and Cantonese at the same time.
** 16k_ms: ** Engine for Malay.
** 16k_id: ** Engine for Indonesian.
** 16k_th: ** Engine for Thai.
     */
    public $EngineModelType;

    /**
     * @var integer Number of recognition channels.
1: Mono. (16k engines only support mono. ** Do no t** set to stereo.)
2: Stereo. (Stereo is supported only for 8k engines, and the two channels should correspond to the respective communication parties.)

Note:
16k engines: Only support mono. ** ChannelNum should be set to 1 **.
8k engines: Support both mono and stereo. ** It is recommended to set ChannelNum to 2 (indicating stereo) **. Stereo can physically distinguish speakers to avoid recognition mistakes caused by overlapping speech. It can provide the best speaker separation and recognition effects. Once stereo is set, the speakers are automatically separated. ** You do not need to enable the speaker separation feature **. You can use the default values for related parameters (** SpeakerDiarization and SpeakerNumber **). For speakerId in the returned ResultDetail, the value 0 represents the left channel, and the value 1 represents the right channel.
     */
    public $ChannelNum;

    /**
     * @var integer Format of the returned recognition result.
0: The basic recognition result (containing only valid voice timestamps but no word-level [detailed recognition result] (https://intl.cloud.tencent.com/document/api/1093/37824?from_cn_redirect=1#SentenceDetail)).
1: The basic recognition result and word-level [detailed recognition result] (https://intl.cloud.tencent.com/document/api/1093/37824?from_cn_redirect=1#SentenceDetail) (containing word-level timestamps and speech speed value but ** no punctuation **).
2: The basic recognition result and word-level [detailed recognition result] (https://intl.cloud.tencent.com/document/api/1093/37824?from_cn_redirect=1#SentenceDetail) (containing word-level timestamps, speech speed value, and ** punctuation **).
3: The basic recognition result and word-level [detailed recognition result] (https://intl.cloud.tencent.com/document/api/1093/37824?from_cn_redirect=1#SentenceDetail) (containing word-level timestamps, speech speed value, and ** punctuation **). The recognition results are segmented by punctuation. ** This format applies to subtitle scenarios **.
4: ** [Value-added paid feature] ** The basic recognition result and word-level [detailed recognition result] (https://intl.cloud.tencent.com/document/api/1093/37824?from_cn_redirect=1#SentenceDetail) (containing word-level timestamps, speech speed value, and ** punctuation **). The recognition results are segmented by NLP semantics. ** This format applies to scenarios such as meeting and court record transcription ** and is supported only for 8k_zh and 16k_zh engines.
5: ** [Value-added paid feature] ** Basic recognition result and word-level [detailed recognition result] (https://intl.cloud.tencent.com/document/api/1093/37824?from_cn_redirect=1#SentenceDetail) (containing word-level timestamps, speech speed value, and ** punctuation **). The oral-to-written transcription result is also output, which has excluded modal particles and consecutive identical words, optimized expressions, and corrected speech mistakes. ** This format applies to scenarios of generating minutes for online and offline meetings** and is supported only for 8k_zh and 16k_zh engines.

Notes:
If this parameter is set to 4, make sure that a [semantics-based segmentation resource package] (https://intl.cloud.tencent.com/document/product/1093/35686?from_cn_redirect=1#97ae4aa0-29a0-4066-9f07-ccaf8856a16b) is purchased for your account or that your account has enabled post-payment. ** If post-payment is enabled and this parameter is set to 4, [automatic billing] (https://intl.cloud.tencent.com/document/product/1093/35686?from_cn_redirect=1#d912167d-ffd5-41a9-8b1c-2e89845a6852) will apply **.
If this parameter is set to 5, make sure that an [oral-to-written resource package] (https://intl.cloud.tencent.com/document/product/1093/35686?from_cn_redirect=1#97ae4aa0-29a0-4066-9f07-ccaf8856a16b) is purchased for your account or that your account has enabled post-payment. ** If post-payment is enabled and this parameter is set to 5, [automatic billing] (https://intl.cloud.tencent.com/document/product/1093/35686?from_cn_redirect=1#d912167d-ffd5-41a9-8b1c-2e89845a6852) will apply **.
     */
    public $ResTextFormat;

    /**
     * @var integer Audio source.
0: Audio URL.
1: Local audio file (body of the POST request).
     */
    public $SourceType;

    /**
     * @var string Audio file Base64 code.
** This parameter is required if SourceType is set to 1. Otherwise, it can be left blank. **

Note: The audio data size cannot exceed 5 MB.
     */
    public $Data;

    /**
     * @var integer Data length (before Base64 encoding).
     */
    public $DataLen;

    /**
     * @var string Audio URL. (The audio should be downloadable via a public network browser.)
** This parameter is required if SourceType is set to 0. Otherwise, it can be left blank. **

Notes:
1. Make sure that the total audio duration of recording files does not exceed 5 hours. Otherwise, recognition may fail.
2. Pay attention to file download to avoid download failure.
     */
    public $Url;

    /**
     * @var string Callback URL

User-defined service URL for receiving recognition results.
For the callback format and content, see [Callback Description] (https://intl.cloud.tencent.com/document/product/1093/52632?from_cn_redirect=1).

Notes:

- If you use the polling method to obtain recognition results, this parameter is not required.
- It is recommended to include your business ID and other information in the callback URL for handling business logic.
     */
    public $CallbackUrl;

    /**
     * @var integer Whether to enable speaker separation.
0: Disable.
1: Enable. (This value is supported only for the following engines: 8k_zh, 16k_zh, 16k_ms, 16k_en, 16k_id, 16k_zh_large, and 16k_zh_dialect. ChannelNum should be set to 1.)
The default value is 0.

Note:
If an 8k engine is used and ChannelNum is set to 2 (stereo), use the default values for corresponding parameters as stated in the ** ChannelNum ** parameter description.
     */
    public $SpeakerDiarization;

    /**
     * @var integer Number of speakers to be separated.
** Speaker separation must be enabled. Otherwise, this parameter does not take effect. ** Value range: 0-10.
0: Automatic separation. (Up to 20 speakers can be separated.)
1-10: Specify the number of speakers.
The default value is 0.
     */
    public $SpeakerNumber;

    /**
     * @var string This service is not available.
     */
    public $HotwordId;

    /**
     * @var integer This service is not available.
     * @deprecated
     */
    public $ReinforceHotword;

    /**
     * @var string This service is not available.
     */
    public $CustomizationId;

    /**
     * @var integer This service is not available.
     */
    public $EmotionRecognition;

    /**
     * @var integer Emotional energy value.
The value is the result of dividing the sound volume in dB by 10. Value range: [1,10]. The higher the value, the stronger the emotion.
0: Disable.
1: Enable.
The default value is 0.
     */
    public $EmotionalEnergy;

    /**
     * @var integer Intelligent conversion into Arabic numerals (supported only for engines for recognizing audio in Mandarin).
0: Do not convert, but directly output Chinese numerals.
1: Intelligently convert into Arabic numerals based on the scenario.
3: Enable conversion for math-related letters.
The default value is 1.
     */
    public $ConvertNumMode;

    /**
     * @var integer Dirty word filtering (supported only for engines for recognizing audio in Mandarin).
0: Do not filter out dirty words.
1: Filter out dirty words.
2: Replace dirty words with *.
The default value is 0.
     */
    public $FilterDirty;

    /**
     * @var integer Punctuation filtering (supported only for engines for recognizing audio in Mandarin).
0: Do not filter out punctuation.
1: Filter out sentence-ending punctuation.
2: Filter out all punctuation.
The default value is 0.
     */
    public $FilterPunc;

    /**
     * @var integer Modal particle filtering (supported only for engines for recognizing audio in Mandarin).
0: Do not filter out modal particles.
1: Filter out specified modal particles.
2: Filter out all modal particles.
The default value is 0.
     */
    public $FilterModal;

    /**
     * @var integer The maximum number of characters per line (supported only for engines for recognizing audio in Mandarin). A punctuation mark is added if this limit is reached.
** This parameter can control the maximum number of characters per line, which applies to subtitle generation scenarios. ** Value range: [6,40].
0: Disable this feature.
The default value is 0.

Note: To enable this feature, ResTextFormat should be set to 3. The recognition result can be obtained from FinalSentence by parsing the list in the returned ResultDetail.
     */
    public $SentenceMaxLength;

    /**
     * @var string Additional parameter. ** (This parameter is meaningless. Ignore it.) **
     */
    public $Extra;

    /**
     * @var string Temporary term list. This parameter is used to improve the recognition accuracy.

- Restrictions for individual terms: The format is "term|weight". Each term can contain no more than 30 characters (or 10 Chinese characters. The weight can be in the range of [1-11] or 100. For example, "Tencent Cloud|5" or "ASR|11".

- Restrictions for the temporary term list: Multiple terms are separated by commas. The list can contain up to 128 terms. For example, "Tencent Cloud|10, Audio Recognition|5, ASR|11".

- Difference between hotword_id (term list) and hotword_list (temporary term list):

    - hotword_id: Term list. You need to create a term list in the console or by using the API first and obtain the term list ID.

    - hotword_list: Temporary term list. You can directly enter the ID of the temporary term list each time you initiate a request. The temporary term list is not retained on the cloud. This parameter applies to users with a massive number of terms.

Notes:

- If both hotword_id and hotword_list are specified, hotword_list will take effect first.

- When the weight of a term is set to 11, this term becomes a super term. It is recommended that the weight is set to 11 only for critical and necessary terms. The overall accuracy will be affected if the weight is set to 11 for too many terms.

- When the weight of a term is set to 100, the term enhancement feature is enabled to replace homophones of this term. (This feature is supported only for 8k_zh and 16k_zh engines.) For example, if you configure "mizhi 1|100", the recognized word "mizhi 2", which is a homophone of "mizhi 2", will be forcibly replaced with "mizhi 2". It is recommended that you enable this feature based on the actual needs. You can set the weight to 100 for only critical and necessary terms. The overall accuracy will be affected if the weight is set to 100 for too many terms.
     */
    public $HotwordList;

    /**
     * @var array List of keyword IDs for recognition. This parameter is left blank by default, indicating that no keyword is recognized. You can enter up to 10 IDs.

     */
    public $KeyWordLibIdList;

    /**
     * @param string $EngineModelType Engine model type.
Each recognition engine adopts a specific billing plan. Engines marked with "large model version" adopt the large model billing plan. For product billing instructions, [click here] (https://intl.cloud.tencent.com/document/product/1093/35686?from_cn_redirect=1).


Note: If you want to recognize telecommunication audio but find that a 16k engine is required, you can use a 16k engine as described below for recognition. However, ** the 16k engines are not trained for recognizing telecommunication audio. Therefore, the recognition results cannot be guaranteed. You need to check whether the recognition results can be used. **

Engines for general scenarios:
** Note: Use 16k engines for scenarios other than telecommunication. **
** 16k_zh_large: ** Engine (large model version) for Mandarin, Chinese dialects, and English. This engine supports recognizing audio in Chinese, English, and [various Chinese dialects] (https://intl.cloud.tencent.com/document/product/1093/35682?from_cn_redirect=1). It has a large number of parameters, enhanced performance, and greatly improved recognition accuracy for low-quality audio with loud noise, too much echo, low voice volume, or faint voices. [Click here] (https://console.cloud.tencent.com/asr/demonstrate) to compare the recognition performance of the 16k_zh engine and this one.
** 16k_multi_lang: ** Engine (large model version) for multiple languages. This engine supports recognizing audio in English, Japanese, Korean, Arabic, Filipino, French, Hindi, Indonesian, Malay, Portuguese, Spanish, Thai, Turkish, Vietnamese, and German (sentence-level or paragraph-level).
** 16k_zh-PY: ** Engine for Chinese, English, and Cantonese. The engine supports recognizing audio in Mandarin, English, and Cantonese at the same time.
** 16k_ms: ** Engine for Malay.
** 16k_id: ** Engine for Indonesian.
** 16k_th: ** Engine for Thai.
     * @param integer $ChannelNum Number of recognition channels.
1: Mono. (16k engines only support mono. ** Do no t** set to stereo.)
2: Stereo. (Stereo is supported only for 8k engines, and the two channels should correspond to the respective communication parties.)

Note:
16k engines: Only support mono. ** ChannelNum should be set to 1 **.
8k engines: Support both mono and stereo. ** It is recommended to set ChannelNum to 2 (indicating stereo) **. Stereo can physically distinguish speakers to avoid recognition mistakes caused by overlapping speech. It can provide the best speaker separation and recognition effects. Once stereo is set, the speakers are automatically separated. ** You do not need to enable the speaker separation feature **. You can use the default values for related parameters (** SpeakerDiarization and SpeakerNumber **). For speakerId in the returned ResultDetail, the value 0 represents the left channel, and the value 1 represents the right channel.
     * @param integer $ResTextFormat Format of the returned recognition result.
0: The basic recognition result (containing only valid voice timestamps but no word-level [detailed recognition result] (https://intl.cloud.tencent.com/document/api/1093/37824?from_cn_redirect=1#SentenceDetail)).
1: The basic recognition result and word-level [detailed recognition result] (https://intl.cloud.tencent.com/document/api/1093/37824?from_cn_redirect=1#SentenceDetail) (containing word-level timestamps and speech speed value but ** no punctuation **).
2: The basic recognition result and word-level [detailed recognition result] (https://intl.cloud.tencent.com/document/api/1093/37824?from_cn_redirect=1#SentenceDetail) (containing word-level timestamps, speech speed value, and ** punctuation **).
3: The basic recognition result and word-level [detailed recognition result] (https://intl.cloud.tencent.com/document/api/1093/37824?from_cn_redirect=1#SentenceDetail) (containing word-level timestamps, speech speed value, and ** punctuation **). The recognition results are segmented by punctuation. ** This format applies to subtitle scenarios **.
4: ** [Value-added paid feature] ** The basic recognition result and word-level [detailed recognition result] (https://intl.cloud.tencent.com/document/api/1093/37824?from_cn_redirect=1#SentenceDetail) (containing word-level timestamps, speech speed value, and ** punctuation **). The recognition results are segmented by NLP semantics. ** This format applies to scenarios such as meeting and court record transcription ** and is supported only for 8k_zh and 16k_zh engines.
5: ** [Value-added paid feature] ** Basic recognition result and word-level [detailed recognition result] (https://intl.cloud.tencent.com/document/api/1093/37824?from_cn_redirect=1#SentenceDetail) (containing word-level timestamps, speech speed value, and ** punctuation **). The oral-to-written transcription result is also output, which has excluded modal particles and consecutive identical words, optimized expressions, and corrected speech mistakes. ** This format applies to scenarios of generating minutes for online and offline meetings** and is supported only for 8k_zh and 16k_zh engines.

Notes:
If this parameter is set to 4, make sure that a [semantics-based segmentation resource package] (https://intl.cloud.tencent.com/document/product/1093/35686?from_cn_redirect=1#97ae4aa0-29a0-4066-9f07-ccaf8856a16b) is purchased for your account or that your account has enabled post-payment. ** If post-payment is enabled and this parameter is set to 4, [automatic billing] (https://intl.cloud.tencent.com/document/product/1093/35686?from_cn_redirect=1#d912167d-ffd5-41a9-8b1c-2e89845a6852) will apply **.
If this parameter is set to 5, make sure that an [oral-to-written resource package] (https://intl.cloud.tencent.com/document/product/1093/35686?from_cn_redirect=1#97ae4aa0-29a0-4066-9f07-ccaf8856a16b) is purchased for your account or that your account has enabled post-payment. ** If post-payment is enabled and this parameter is set to 5, [automatic billing] (https://intl.cloud.tencent.com/document/product/1093/35686?from_cn_redirect=1#d912167d-ffd5-41a9-8b1c-2e89845a6852) will apply **.
     * @param integer $SourceType Audio source.
0: Audio URL.
1: Local audio file (body of the POST request).
     * @param string $Data Audio file Base64 code.
** This parameter is required if SourceType is set to 1. Otherwise, it can be left blank. **

Note: The audio data size cannot exceed 5 MB.
     * @param integer $DataLen Data length (before Base64 encoding).
     * @param string $Url Audio URL. (The audio should be downloadable via a public network browser.)
** This parameter is required if SourceType is set to 0. Otherwise, it can be left blank. **

Notes:
1. Make sure that the total audio duration of recording files does not exceed 5 hours. Otherwise, recognition may fail.
2. Pay attention to file download to avoid download failure.
     * @param string $CallbackUrl Callback URL

User-defined service URL for receiving recognition results.
For the callback format and content, see [Callback Description] (https://intl.cloud.tencent.com/document/product/1093/52632?from_cn_redirect=1).

Notes:

- If you use the polling method to obtain recognition results, this parameter is not required.
- It is recommended to include your business ID and other information in the callback URL for handling business logic.
     * @param integer $SpeakerDiarization Whether to enable speaker separation.
0: Disable.
1: Enable. (This value is supported only for the following engines: 8k_zh, 16k_zh, 16k_ms, 16k_en, 16k_id, 16k_zh_large, and 16k_zh_dialect. ChannelNum should be set to 1.)
The default value is 0.

Note:
If an 8k engine is used and ChannelNum is set to 2 (stereo), use the default values for corresponding parameters as stated in the ** ChannelNum ** parameter description.
     * @param integer $SpeakerNumber Number of speakers to be separated.
** Speaker separation must be enabled. Otherwise, this parameter does not take effect. ** Value range: 0-10.
0: Automatic separation. (Up to 20 speakers can be separated.)
1-10: Specify the number of speakers.
The default value is 0.
     * @param string $HotwordId This service is not available.
     * @param integer $ReinforceHotword This service is not available.
     * @param string $CustomizationId This service is not available.
     * @param integer $EmotionRecognition This service is not available.
     * @param integer $EmotionalEnergy Emotional energy value.
The value is the result of dividing the sound volume in dB by 10. Value range: [1,10]. The higher the value, the stronger the emotion.
0: Disable.
1: Enable.
The default value is 0.
     * @param integer $ConvertNumMode Intelligent conversion into Arabic numerals (supported only for engines for recognizing audio in Mandarin).
0: Do not convert, but directly output Chinese numerals.
1: Intelligently convert into Arabic numerals based on the scenario.
3: Enable conversion for math-related letters.
The default value is 1.
     * @param integer $FilterDirty Dirty word filtering (supported only for engines for recognizing audio in Mandarin).
0: Do not filter out dirty words.
1: Filter out dirty words.
2: Replace dirty words with *.
The default value is 0.
     * @param integer $FilterPunc Punctuation filtering (supported only for engines for recognizing audio in Mandarin).
0: Do not filter out punctuation.
1: Filter out sentence-ending punctuation.
2: Filter out all punctuation.
The default value is 0.
     * @param integer $FilterModal Modal particle filtering (supported only for engines for recognizing audio in Mandarin).
0: Do not filter out modal particles.
1: Filter out specified modal particles.
2: Filter out all modal particles.
The default value is 0.
     * @param integer $SentenceMaxLength The maximum number of characters per line (supported only for engines for recognizing audio in Mandarin). A punctuation mark is added if this limit is reached.
** This parameter can control the maximum number of characters per line, which applies to subtitle generation scenarios. ** Value range: [6,40].
0: Disable this feature.
The default value is 0.

Note: To enable this feature, ResTextFormat should be set to 3. The recognition result can be obtained from FinalSentence by parsing the list in the returned ResultDetail.
     * @param string $Extra Additional parameter. ** (This parameter is meaningless. Ignore it.) **
     * @param string $HotwordList Temporary term list. This parameter is used to improve the recognition accuracy.

- Restrictions for individual terms: The format is "term|weight". Each term can contain no more than 30 characters (or 10 Chinese characters. The weight can be in the range of [1-11] or 100. For example, "Tencent Cloud|5" or "ASR|11".

- Restrictions for the temporary term list: Multiple terms are separated by commas. The list can contain up to 128 terms. For example, "Tencent Cloud|10, Audio Recognition|5, ASR|11".

- Difference between hotword_id (term list) and hotword_list (temporary term list):

    - hotword_id: Term list. You need to create a term list in the console or by using the API first and obtain the term list ID.

    - hotword_list: Temporary term list. You can directly enter the ID of the temporary term list each time you initiate a request. The temporary term list is not retained on the cloud. This parameter applies to users with a massive number of terms.

Notes:

- If both hotword_id and hotword_list are specified, hotword_list will take effect first.

- When the weight of a term is set to 11, this term becomes a super term. It is recommended that the weight is set to 11 only for critical and necessary terms. The overall accuracy will be affected if the weight is set to 11 for too many terms.

- When the weight of a term is set to 100, the term enhancement feature is enabled to replace homophones of this term. (This feature is supported only for 8k_zh and 16k_zh engines.) For example, if you configure "mizhi 1|100", the recognized word "mizhi 2", which is a homophone of "mizhi 2", will be forcibly replaced with "mizhi 2". It is recommended that you enable this feature based on the actual needs. You can set the weight to 100 for only critical and necessary terms. The overall accuracy will be affected if the weight is set to 100 for too many terms.
     * @param array $KeyWordLibIdList List of keyword IDs for recognition. This parameter is left blank by default, indicating that no keyword is recognized. You can enter up to 10 IDs.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("EngineModelType",$param) and $param["EngineModelType"] !== null) {
            $this->EngineModelType = $param["EngineModelType"];
        }

        if (array_key_exists("ChannelNum",$param) and $param["ChannelNum"] !== null) {
            $this->ChannelNum = $param["ChannelNum"];
        }

        if (array_key_exists("ResTextFormat",$param) and $param["ResTextFormat"] !== null) {
            $this->ResTextFormat = $param["ResTextFormat"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("DataLen",$param) and $param["DataLen"] !== null) {
            $this->DataLen = $param["DataLen"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("SpeakerDiarization",$param) and $param["SpeakerDiarization"] !== null) {
            $this->SpeakerDiarization = $param["SpeakerDiarization"];
        }

        if (array_key_exists("SpeakerNumber",$param) and $param["SpeakerNumber"] !== null) {
            $this->SpeakerNumber = $param["SpeakerNumber"];
        }

        if (array_key_exists("HotwordId",$param) and $param["HotwordId"] !== null) {
            $this->HotwordId = $param["HotwordId"];
        }

        if (array_key_exists("ReinforceHotword",$param) and $param["ReinforceHotword"] !== null) {
            $this->ReinforceHotword = $param["ReinforceHotword"];
        }

        if (array_key_exists("CustomizationId",$param) and $param["CustomizationId"] !== null) {
            $this->CustomizationId = $param["CustomizationId"];
        }

        if (array_key_exists("EmotionRecognition",$param) and $param["EmotionRecognition"] !== null) {
            $this->EmotionRecognition = $param["EmotionRecognition"];
        }

        if (array_key_exists("EmotionalEnergy",$param) and $param["EmotionalEnergy"] !== null) {
            $this->EmotionalEnergy = $param["EmotionalEnergy"];
        }

        if (array_key_exists("ConvertNumMode",$param) and $param["ConvertNumMode"] !== null) {
            $this->ConvertNumMode = $param["ConvertNumMode"];
        }

        if (array_key_exists("FilterDirty",$param) and $param["FilterDirty"] !== null) {
            $this->FilterDirty = $param["FilterDirty"];
        }

        if (array_key_exists("FilterPunc",$param) and $param["FilterPunc"] !== null) {
            $this->FilterPunc = $param["FilterPunc"];
        }

        if (array_key_exists("FilterModal",$param) and $param["FilterModal"] !== null) {
            $this->FilterModal = $param["FilterModal"];
        }

        if (array_key_exists("SentenceMaxLength",$param) and $param["SentenceMaxLength"] !== null) {
            $this->SentenceMaxLength = $param["SentenceMaxLength"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("HotwordList",$param) and $param["HotwordList"] !== null) {
            $this->HotwordList = $param["HotwordList"];
        }

        if (array_key_exists("KeyWordLibIdList",$param) and $param["KeyWordLibIdList"] !== null) {
            $this->KeyWordLibIdList = $param["KeyWordLibIdList"];
        }
    }
}
