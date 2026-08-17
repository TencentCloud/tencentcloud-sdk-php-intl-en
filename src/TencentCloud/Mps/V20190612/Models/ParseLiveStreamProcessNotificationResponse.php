<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
<li>AiReviewResult: content moderation result;</li>
<li>AiRecognitionResult: content recognition result;</li>
<li>LiveRecordResult: live streaming result;</li>
<li>AiQualityControlResult: media quality inspection result.</li>
<li>AiAnalysisResult: content analysis result.</li>
<li>AiSmartSubtitleResult: smart subtitle result;</li>
<li>ProcessEof: end of live stream processing.</li>
 * @method void setNotificationType(string $NotificationType) Set Live stream processing result type, including:
<li>AiReviewResult: content moderation result;</li>
<li>AiRecognitionResult: content recognition result;</li>
<li>LiveRecordResult: live streaming result;</li>
<li>AiQualityControlResult: media quality inspection result.</li>
<li>AiAnalysisResult: content analysis result.</li>
<li>AiSmartSubtitleResult: smart subtitle result;</li>
<li>ProcessEof: end of live stream processing.</li>
 * @method string getTaskId() Obtain Task ID for video processing.
 * @method void setTaskId(string $TaskId) Set Task ID for video processing.
 * @method LiveStreamProcessErrorInfo getProcessEofInfo() Obtain 
 * @method void setProcessEofInfo(LiveStreamProcessErrorInfo $ProcessEofInfo) Set 
 * @method LiveStreamAiReviewResultInfo getAiReviewResultInfo() Obtain 
 * @method void setAiReviewResultInfo(LiveStreamAiReviewResultInfo $AiReviewResultInfo) Set 
 * @method LiveStreamAiRecognitionResultInfo getAiRecognitionResultInfo() Obtain 
 * @method void setAiRecognitionResultInfo(LiveStreamAiRecognitionResultInfo $AiRecognitionResultInfo) Set 
 * @method LiveStreamAiAnalysisResultInfo getAiAnalysisResultInfo() Obtain 
 * @method void setAiAnalysisResultInfo(LiveStreamAiAnalysisResultInfo $AiAnalysisResultInfo) Set 
 * @method LiveStreamAiQualityControlResultInfo getAiQualityControlResultInfo() Obtain 
 * @method void setAiQualityControlResultInfo(LiveStreamAiQualityControlResultInfo $AiQualityControlResultInfo) Set 
 * @method LiveStreamRecordResultInfo getLiveRecordResultInfo() Obtain 
 * @method void setLiveRecordResultInfo(LiveStreamRecordResultInfo $LiveRecordResultInfo) Set 
 * @method LiveStreamAiSmartSubtitleResultInfo getAiSmartSubtitleResultInfo() Obtain Smart subtitle result, valid when NotificationType is AiSmartSubtitleResult.
 * @method void setAiSmartSubtitleResultInfo(LiveStreamAiSmartSubtitleResultInfo $AiSmartSubtitleResultInfo) Set Smart subtitle result, valid when NotificationType is AiSmartSubtitleResult.
 * @method string getSessionId() Obtain An identifier for deduplication. If there has been a request with the same identifier within the past seven days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
 * @method void setSessionId(string $SessionId) Set An identifier for deduplication. If there has been a request with the same identifier within the past seven days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
 * @method string getSessionContext() Obtain Source context, which is used to pass through user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, which is used to pass through user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method integer getTimestamp() Obtain -Expiration time, the UNIX timestamp for event notification signature expiration. Notifications from Media Processing Service (MPS) have a default expiration time of 10 minutes. If the time specified by the Timestamp value in a notification has expired, the notification can be deemed invalid, which helps prevent network replay attacks. The Timestamp format is a decimal UNIX timestamp, representing the seconds elapsed since midnight on January 1, 1970 (UTC/GMT).
 * @method void setTimestamp(integer $Timestamp) Set -Expiration time, the UNIX timestamp for event notification signature expiration. Notifications from Media Processing Service (MPS) have a default expiration time of 10 minutes. If the time specified by the Timestamp value in a notification has expired, the notification can be deemed invalid, which helps prevent network replay attacks. The Timestamp format is a decimal UNIX timestamp, representing the seconds elapsed since midnight on January 1, 1970 (UTC/GMT).
 * @method string getSign() Obtain Event notification security signature. Sign = MD5 (Timestamp + NotifyKey). Note: Media Processing Service concatenates Timestamp and NotifyKey from TaskNotifyConfig as a string and calculates the Sign value through MD5. This value is included in the notification message. Your backend server can verify whether the Sign is correct using the same algorithm, to confirm whether the message is indeed from the Media Processing Service backend.
 * @method void setSign(string $Sign) Set Event notification security signature. Sign = MD5 (Timestamp + NotifyKey). Note: Media Processing Service concatenates Timestamp and NotifyKey from TaskNotifyConfig as a string and calculates the Sign value through MD5. This value is included in the notification message. Your backend server can verify whether the Sign is correct using the same algorithm, to confirm whether the message is indeed from the Media Processing Service backend.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class ParseLiveStreamProcessNotificationResponse extends AbstractModel
{
    /**
     * @var string Live stream processing result type, including:
<li>AiReviewResult: content moderation result;</li>
<li>AiRecognitionResult: content recognition result;</li>
<li>LiveRecordResult: live streaming result;</li>
<li>AiQualityControlResult: media quality inspection result.</li>
<li>AiAnalysisResult: content analysis result.</li>
<li>AiSmartSubtitleResult: smart subtitle result;</li>
<li>ProcessEof: end of live stream processing.</li>
     */
    public $NotificationType;

    /**
     * @var string Task ID for video processing.
     */
    public $TaskId;

    /**
     * @var LiveStreamProcessErrorInfo 
     */
    public $ProcessEofInfo;

    /**
     * @var LiveStreamAiReviewResultInfo 
     */
    public $AiReviewResultInfo;

    /**
     * @var LiveStreamAiRecognitionResultInfo 
     */
    public $AiRecognitionResultInfo;

    /**
     * @var LiveStreamAiAnalysisResultInfo 
     */
    public $AiAnalysisResultInfo;

    /**
     * @var LiveStreamAiQualityControlResultInfo 
     */
    public $AiQualityControlResultInfo;

    /**
     * @var LiveStreamRecordResultInfo 
     */
    public $LiveRecordResultInfo;

    /**
     * @var LiveStreamAiSmartSubtitleResultInfo Smart subtitle result, valid when NotificationType is AiSmartSubtitleResult.
     */
    public $AiSmartSubtitleResultInfo;

    /**
     * @var string An identifier for deduplication. If there has been a request with the same identifier within the past seven days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
     */
    public $SessionId;

    /**
     * @var string Source context, which is used to pass through user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var integer -Expiration time, the UNIX timestamp for event notification signature expiration. Notifications from Media Processing Service (MPS) have a default expiration time of 10 minutes. If the time specified by the Timestamp value in a notification has expired, the notification can be deemed invalid, which helps prevent network replay attacks. The Timestamp format is a decimal UNIX timestamp, representing the seconds elapsed since midnight on January 1, 1970 (UTC/GMT).
     */
    public $Timestamp;

    /**
     * @var string Event notification security signature. Sign = MD5 (Timestamp + NotifyKey). Note: Media Processing Service concatenates Timestamp and NotifyKey from TaskNotifyConfig as a string and calculates the Sign value through MD5. This value is included in the notification message. Your backend server can verify whether the Sign is correct using the same algorithm, to confirm whether the message is indeed from the Media Processing Service backend.
     */
    public $Sign;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $NotificationType Live stream processing result type, including:
<li>AiReviewResult: content moderation result;</li>
<li>AiRecognitionResult: content recognition result;</li>
<li>LiveRecordResult: live streaming result;</li>
<li>AiQualityControlResult: media quality inspection result.</li>
<li>AiAnalysisResult: content analysis result.</li>
<li>AiSmartSubtitleResult: smart subtitle result;</li>
<li>ProcessEof: end of live stream processing.</li>
     * @param string $TaskId Task ID for video processing.
     * @param LiveStreamProcessErrorInfo $ProcessEofInfo 
     * @param LiveStreamAiReviewResultInfo $AiReviewResultInfo 
     * @param LiveStreamAiRecognitionResultInfo $AiRecognitionResultInfo 
     * @param LiveStreamAiAnalysisResultInfo $AiAnalysisResultInfo 
     * @param LiveStreamAiQualityControlResultInfo $AiQualityControlResultInfo 
     * @param LiveStreamRecordResultInfo $LiveRecordResultInfo 
     * @param LiveStreamAiSmartSubtitleResultInfo $AiSmartSubtitleResultInfo Smart subtitle result, valid when NotificationType is AiSmartSubtitleResult.
     * @param string $SessionId An identifier for deduplication. If there has been a request with the same identifier within the past seven days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
     * @param string $SessionContext Source context, which is used to pass through user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     * @param integer $Timestamp -Expiration time, the UNIX timestamp for event notification signature expiration. Notifications from Media Processing Service (MPS) have a default expiration time of 10 minutes. If the time specified by the Timestamp value in a notification has expired, the notification can be deemed invalid, which helps prevent network replay attacks. The Timestamp format is a decimal UNIX timestamp, representing the seconds elapsed since midnight on January 1, 1970 (UTC/GMT).
     * @param string $Sign Event notification security signature. Sign = MD5 (Timestamp + NotifyKey). Note: Media Processing Service concatenates Timestamp and NotifyKey from TaskNotifyConfig as a string and calculates the Sign value through MD5. This value is included in the notification message. Your backend server can verify whether the Sign is correct using the same algorithm, to confirm whether the message is indeed from the Media Processing Service backend.
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

        if (array_key_exists("AiSmartSubtitleResultInfo",$param) and $param["AiSmartSubtitleResultInfo"] !== null) {
            $this->AiSmartSubtitleResultInfo = new LiveStreamAiSmartSubtitleResultInfo();
            $this->AiSmartSubtitleResultInfo->deserialize($param["AiSmartSubtitleResultInfo"]);
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
