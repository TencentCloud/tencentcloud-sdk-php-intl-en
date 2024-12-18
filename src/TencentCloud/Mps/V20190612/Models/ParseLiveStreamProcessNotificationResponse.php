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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ParseLiveStreamProcessNotification response structure.
 *
 * @method string getNotificationType() Obtain Live stream processing result type, including:
<li>AiReviewResult: content auditing result.</li>
<li>AiRecognitionResult: content recognition result.</li>
<li>LiveRecordResult: live recording result.</li>
<li>AiQualityControlResult: media quality inspection result.</li>
<li>ProcessEof: live stream processing result.</li>
 * @method void setNotificationType(string $NotificationType) Set Live stream processing result type, including:
<li>AiReviewResult: content auditing result.</li>
<li>AiRecognitionResult: content recognition result.</li>
<li>LiveRecordResult: live recording result.</li>
<li>AiQualityControlResult: media quality inspection result.</li>
<li>ProcessEof: live stream processing result.</li>
 * @method string getTaskId() Obtain Video processing task ID.
 * @method void setTaskId(string $TaskId) Set Video processing task ID.
 * @method LiveStreamProcessErrorInfo getProcessEofInfo() Obtain Information of a live stream processing error, which is valid when `NotificationType` is `ProcessEof`.
Note: when this field return null, means no valid values can be obtained.
 * @method void setProcessEofInfo(LiveStreamProcessErrorInfo $ProcessEofInfo) Set Information of a live stream processing error, which is valid when `NotificationType` is `ProcessEof`.
Note: when this field return null, means no valid values can be obtained.
 * @method LiveStreamAiReviewResultInfo getAiReviewResultInfo() Obtain Content audit result, which is valid when `NotificationType` is `AiReviewResult`.
Note: when this field return null, means no valid values can be obtained.
 * @method void setAiReviewResultInfo(LiveStreamAiReviewResultInfo $AiReviewResultInfo) Set Content audit result, which is valid when `NotificationType` is `AiReviewResult`.
Note: when this field return null, means no valid values can be obtained.
 * @method LiveStreamAiRecognitionResultInfo getAiRecognitionResultInfo() Obtain Content recognition result, which is valid if `NotificationType` is `AiRecognitionResult`.
 * @method void setAiRecognitionResultInfo(LiveStreamAiRecognitionResultInfo $AiRecognitionResultInfo) Set Content recognition result, which is valid if `NotificationType` is `AiRecognitionResult`.
 * @method LiveStreamAiAnalysisResultInfo getAiAnalysisResultInfo() Obtain Content analysis result, which is valid if `NotificationType` is `AiAnalysisResult`.
 * @method void setAiAnalysisResultInfo(LiveStreamAiAnalysisResultInfo $AiAnalysisResultInfo) Set Content analysis result, which is valid if `NotificationType` is `AiAnalysisResult`.
 * @method LiveStreamAiQualityControlResultInfo getAiQualityControlResultInfo() Obtain Media quality inspection result, which is valid if `NotificationType` is `AiQualityControlResult`.
 * @method void setAiQualityControlResultInfo(LiveStreamAiQualityControlResultInfo $AiQualityControlResultInfo) Set Media quality inspection result, which is valid if `NotificationType` is `AiQualityControlResult`.
 * @method LiveStreamRecordResultInfo getLiveRecordResultInfo() Obtain Live recording result is valid when NotificationType is LiveRecordResult.
Note: when this field return null, means no valid values can be obtained.
 * @method void setLiveRecordResultInfo(LiveStreamRecordResultInfo $LiveRecordResultInfo) Set Live recording result is valid when NotificationType is LiveRecordResult.
Note: when this field return null, means no valid values can be obtained.
 * @method string getSessionId() Obtain The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
 * @method void setSessionId(string $SessionId) Set The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
 * @method string getSessionContext() Obtain The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
 * @method integer getTimestamp() Obtain - Expiration time, event notification signature expiration UNIX timestamp. - By default, notifications sent by MPS expire after 10 minutes. If the expiration time specified has elapsed, a notification will be considered invalid. This can prevent replay attacks. - The format of Timestamp is a decimal UNIX timestamp, which is the number of seconds that have elapsed since January 1, 1970 (midnight UTC/GMT).
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTimestamp(integer $Timestamp) Set - Expiration time, event notification signature expiration UNIX timestamp. - By default, notifications sent by MPS expire after 10 minutes. If the expiration time specified has elapsed, a notification will be considered invalid. This can prevent replay attacks. - The format of Timestamp is a decimal UNIX timestamp, which is the number of seconds that have elapsed since January 1, 1970 (midnight UTC/GMT).
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSign() Obtain Event notification security signature. Sign = MD5 (Timestamp + NotifyKey). Note: Media Processing Service concatenates Timestamp and NotifyKey from TaskNotifyConfig as a string and calculates the Sign value through MD5. This value is included in the notification message. Your backend server can verify whether the Sign is correct using the same algorithm, to confirm whether the message is indeed from the Media Processing Service backend.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSign(string $Sign) Set Event notification security signature. Sign = MD5 (Timestamp + NotifyKey). Note: Media Processing Service concatenates Timestamp and NotifyKey from TaskNotifyConfig as a string and calculates the Sign value through MD5. This value is included in the notification message. Your backend server can verify whether the Sign is correct using the same algorithm, to confirm whether the message is indeed from the Media Processing Service backend.

Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class ParseLiveStreamProcessNotificationResponse extends AbstractModel
{
    /**
     * @var string Live stream processing result type, including:
<li>AiReviewResult: content auditing result.</li>
<li>AiRecognitionResult: content recognition result.</li>
<li>LiveRecordResult: live recording result.</li>
<li>AiQualityControlResult: media quality inspection result.</li>
<li>ProcessEof: live stream processing result.</li>
     */
    public $NotificationType;

    /**
     * @var string Video processing task ID.
     */
    public $TaskId;

    /**
     * @var LiveStreamProcessErrorInfo Information of a live stream processing error, which is valid when `NotificationType` is `ProcessEof`.
Note: when this field return null, means no valid values can be obtained.
     */
    public $ProcessEofInfo;

    /**
     * @var LiveStreamAiReviewResultInfo Content audit result, which is valid when `NotificationType` is `AiReviewResult`.
Note: when this field return null, means no valid values can be obtained.
     */
    public $AiReviewResultInfo;

    /**
     * @var LiveStreamAiRecognitionResultInfo Content recognition result, which is valid if `NotificationType` is `AiRecognitionResult`.
     */
    public $AiRecognitionResultInfo;

    /**
     * @var LiveStreamAiAnalysisResultInfo Content analysis result, which is valid if `NotificationType` is `AiAnalysisResult`.
     */
    public $AiAnalysisResultInfo;

    /**
     * @var LiveStreamAiQualityControlResultInfo Media quality inspection result, which is valid if `NotificationType` is `AiQualityControlResult`.
     */
    public $AiQualityControlResultInfo;

    /**
     * @var LiveStreamRecordResultInfo Live recording result is valid when NotificationType is LiveRecordResult.
Note: when this field return null, means no valid values can be obtained.
     */
    public $LiveRecordResultInfo;

    /**
     * @var string The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
     */
    public $SessionId;

    /**
     * @var string The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var integer - Expiration time, event notification signature expiration UNIX timestamp. - By default, notifications sent by MPS expire after 10 minutes. If the expiration time specified has elapsed, a notification will be considered invalid. This can prevent replay attacks. - The format of Timestamp is a decimal UNIX timestamp, which is the number of seconds that have elapsed since January 1, 1970 (midnight UTC/GMT).
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Timestamp;

    /**
     * @var string Event notification security signature. Sign = MD5 (Timestamp + NotifyKey). Note: Media Processing Service concatenates Timestamp and NotifyKey from TaskNotifyConfig as a string and calculates the Sign value through MD5. This value is included in the notification message. Your backend server can verify whether the Sign is correct using the same algorithm, to confirm whether the message is indeed from the Media Processing Service backend.

Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Sign;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $NotificationType Live stream processing result type, including:
<li>AiReviewResult: content auditing result.</li>
<li>AiRecognitionResult: content recognition result.</li>
<li>LiveRecordResult: live recording result.</li>
<li>AiQualityControlResult: media quality inspection result.</li>
<li>ProcessEof: live stream processing result.</li>
     * @param string $TaskId Video processing task ID.
     * @param LiveStreamProcessErrorInfo $ProcessEofInfo Information of a live stream processing error, which is valid when `NotificationType` is `ProcessEof`.
Note: when this field return null, means no valid values can be obtained.
     * @param LiveStreamAiReviewResultInfo $AiReviewResultInfo Content audit result, which is valid when `NotificationType` is `AiReviewResult`.
Note: when this field return null, means no valid values can be obtained.
     * @param LiveStreamAiRecognitionResultInfo $AiRecognitionResultInfo Content recognition result, which is valid if `NotificationType` is `AiRecognitionResult`.
     * @param LiveStreamAiAnalysisResultInfo $AiAnalysisResultInfo Content analysis result, which is valid if `NotificationType` is `AiAnalysisResult`.
     * @param LiveStreamAiQualityControlResultInfo $AiQualityControlResultInfo Media quality inspection result, which is valid if `NotificationType` is `AiQualityControlResult`.
     * @param LiveStreamRecordResultInfo $LiveRecordResultInfo Live recording result is valid when NotificationType is LiveRecordResult.
Note: when this field return null, means no valid values can be obtained.
     * @param string $SessionId The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
     * @param string $SessionContext The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
     * @param integer $Timestamp - Expiration time, event notification signature expiration UNIX timestamp. - By default, notifications sent by MPS expire after 10 minutes. If the expiration time specified has elapsed, a notification will be considered invalid. This can prevent replay attacks. - The format of Timestamp is a decimal UNIX timestamp, which is the number of seconds that have elapsed since January 1, 1970 (midnight UTC/GMT).
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Sign Event notification security signature. Sign = MD5 (Timestamp + NotifyKey). Note: Media Processing Service concatenates Timestamp and NotifyKey from TaskNotifyConfig as a string and calculates the Sign value through MD5. This value is included in the notification message. Your backend server can verify whether the Sign is correct using the same algorithm, to confirm whether the message is indeed from the Media Processing Service backend.

Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("NotificationType",$param) and $param["NotificationType"] !== null) {
            $this->NotificationType = $param["NotificationType"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ProcessEofInfo",$param) and $param["ProcessEofInfo"] !== null) {
            $this->ProcessEofInfo = new LiveStreamProcessErrorInfo();
            $this->ProcessEofInfo->deserialize($param["ProcessEofInfo"]);
        }

        if (array_key_exists("AiReviewResultInfo",$param) and $param["AiReviewResultInfo"] !== null) {
            $this->AiReviewResultInfo = new LiveStreamAiReviewResultInfo();
            $this->AiReviewResultInfo->deserialize($param["AiReviewResultInfo"]);
        }

        if (array_key_exists("AiRecognitionResultInfo",$param) and $param["AiRecognitionResultInfo"] !== null) {
            $this->AiRecognitionResultInfo = new LiveStreamAiRecognitionResultInfo();
            $this->AiRecognitionResultInfo->deserialize($param["AiRecognitionResultInfo"]);
        }

        if (array_key_exists("AiAnalysisResultInfo",$param) and $param["AiAnalysisResultInfo"] !== null) {
            $this->AiAnalysisResultInfo = new LiveStreamAiAnalysisResultInfo();
            $this->AiAnalysisResultInfo->deserialize($param["AiAnalysisResultInfo"]);
        }

        if (array_key_exists("AiQualityControlResultInfo",$param) and $param["AiQualityControlResultInfo"] !== null) {
            $this->AiQualityControlResultInfo = new LiveStreamAiQualityControlResultInfo();
            $this->AiQualityControlResultInfo->deserialize($param["AiQualityControlResultInfo"]);
        }

        if (array_key_exists("LiveRecordResultInfo",$param) and $param["LiveRecordResultInfo"] !== null) {
            $this->LiveRecordResultInfo = new LiveStreamRecordResultInfo();
            $this->LiveRecordResultInfo->deserialize($param["LiveRecordResultInfo"]);
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Sign",$param) and $param["Sign"] !== null) {
            $this->Sign = $param["Sign"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
