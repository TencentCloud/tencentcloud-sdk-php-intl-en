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
 * @method string getTaskId() Obtain Video processing task ID.
 * @method void setTaskId(string $TaskId) Set Video processing task ID.
 * @method LiveStreamProcessErrorInfo getProcessEofInfo() Obtain Error information of live stream processing. Valid when NotificationType is ProcessEof.
 * @method void setProcessEofInfo(LiveStreamProcessErrorInfo $ProcessEofInfo) Set Error information of live stream processing. Valid when NotificationType is ProcessEof.
 * @method LiveStreamAiReviewResultInfo getAiReviewResultInfo() Obtain Content moderation result. Valid when NotificationType is AiReviewResult.
 * @method void setAiReviewResultInfo(LiveStreamAiReviewResultInfo $AiReviewResultInfo) Set Content moderation result. Valid when NotificationType is AiReviewResult.
 * @method LiveStreamAiRecognitionResultInfo getAiRecognitionResultInfo() Obtain Content recognition result. Valid when NotificationType is AiRecognitionResult.
 * @method void setAiRecognitionResultInfo(LiveStreamAiRecognitionResultInfo $AiRecognitionResultInfo) Set Content recognition result. Valid when NotificationType is AiRecognitionResult.
 * @method LiveStreamAiAnalysisResultInfo getAiAnalysisResultInfo() Obtain Content analysis result. Valid when NotificationType is AiAnalysisResult.
 * @method void setAiAnalysisResultInfo(LiveStreamAiAnalysisResultInfo $AiAnalysisResultInfo) Set Content analysis result. Valid when NotificationType is AiAnalysisResult.
 * @method LiveStreamAiQualityControlResultInfo getAiQualityControlResultInfo() Obtain Media quality inspection result. Valid when NotificationType is AiQualityControlResult.
 * @method void setAiQualityControlResultInfo(LiveStreamAiQualityControlResultInfo $AiQualityControlResultInfo) Set Media quality inspection result. Valid when NotificationType is AiQualityControlResult.
 * @method LiveStreamRecordResultInfo getLiveRecordResultInfo() Obtain Live streaming result is valid when NotificationType is LiveRecordResult.
 * @method void setLiveRecordResultInfo(LiveStreamRecordResultInfo $LiveRecordResultInfo) Set Live streaming result is valid when NotificationType is LiveRecordResult.
 * @method LiveStreamAiSmartSubtitleResultInfo getAiSmartSubtitleResultInfo() Obtain Smart subtitle result. Valid when NotificationType is AiSmartSubtitleResult.
 * @method void setAiSmartSubtitleResultInfo(LiveStreamAiSmartSubtitleResultInfo $AiSmartSubtitleResultInfo) Set Smart subtitle result. Valid when NotificationType is AiSmartSubtitleResult.
 * @method string getSessionId() Obtain An identifier for deduplication. If there has been a request with the same identifier within the past seven days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
 * @method void setSessionId(string $SessionId) Set An identifier for deduplication. If there has been a request with the same identifier within the past seven days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
 * @method string getSessionContext() Obtain Source context, which is used to pass through user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, which is used to pass through user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method integer getTimestamp() Obtain - Expiration time: the UNIX Timestamp when the event notification signature expires. - Message notifications from media processing expire after 10 minutes by default. If the time specified by the Timestamp value in a message notification has expired, the notification is deemed invalid, which prevents network replay attacks. - Timestamp is in decimal UNIX Timestamp format, which is the seconds elapsed since January 1, 1970 (UTC/GMT midnight).
 * @method void setTimestamp(integer $Timestamp) Set - Expiration time: the UNIX Timestamp when the event notification signature expires. - Message notifications from media processing expire after 10 minutes by default. If the time specified by the Timestamp value in a message notification has expired, the notification is deemed invalid, which prevents network replay attacks. - Timestamp is in decimal UNIX Timestamp format, which is the seconds elapsed since January 1, 1970 (UTC/GMT midnight).
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
     * @var string Video processing task ID.
     */
    public $TaskId;

    /**
     * @var LiveStreamProcessErrorInfo Error information of live stream processing. Valid when NotificationType is ProcessEof.
     */
    public $ProcessEofInfo;

    /**
     * @var LiveStreamAiReviewResultInfo Content moderation result. Valid when NotificationType is AiReviewResult.
     */
    public $AiReviewResultInfo;

    /**
     * @var LiveStreamAiRecognitionResultInfo Content recognition result. Valid when NotificationType is AiRecognitionResult.
     */
    public $AiRecognitionResultInfo;

    /**
     * @var LiveStreamAiAnalysisResultInfo Content analysis result. Valid when NotificationType is AiAnalysisResult.
     */
    public $AiAnalysisResultInfo;

    /**
     * @var LiveStreamAiQualityControlResultInfo Media quality inspection result. Valid when NotificationType is AiQualityControlResult.
     */
    public $AiQualityControlResultInfo;

    /**
     * @var LiveStreamRecordResultInfo Live streaming result is valid when NotificationType is LiveRecordResult.
     */
    public $LiveRecordResultInfo;

    /**
     * @var LiveStreamAiSmartSubtitleResultInfo Smart subtitle result. Valid when NotificationType is AiSmartSubtitleResult.
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
     * @var integer - Expiration time: the UNIX Timestamp when the event notification signature expires. - Message notifications from media processing expire after 10 minutes by default. If the time specified by the Timestamp value in a message notification has expired, the notification is deemed invalid, which prevents network replay attacks. - Timestamp is in decimal UNIX Timestamp format, which is the seconds elapsed since January 1, 1970 (UTC/GMT midnight).
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
     * @param string $TaskId Video processing task ID.
     * @param LiveStreamProcessErrorInfo $ProcessEofInfo Error information of live stream processing. Valid when NotificationType is ProcessEof.
     * @param LiveStreamAiReviewResultInfo $AiReviewResultInfo Content moderation result. Valid when NotificationType is AiReviewResult.
     * @param LiveStreamAiRecognitionResultInfo $AiRecognitionResultInfo Content recognition result. Valid when NotificationType is AiRecognitionResult.
     * @param LiveStreamAiAnalysisResultInfo $AiAnalysisResultInfo Content analysis result. Valid when NotificationType is AiAnalysisResult.
     * @param LiveStreamAiQualityControlResultInfo $AiQualityControlResultInfo Media quality inspection result. Valid when NotificationType is AiQualityControlResult.
     * @param LiveStreamRecordResultInfo $LiveRecordResultInfo Live streaming result is valid when NotificationType is LiveRecordResult.
     * @param LiveStreamAiSmartSubtitleResultInfo $AiSmartSubtitleResultInfo Smart subtitle result. Valid when NotificationType is AiSmartSubtitleResult.
     * @param string $SessionId An identifier for deduplication. If there has been a request with the same identifier within the past seven days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
     * @param string $SessionContext Source context, which is used to pass through user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     * @param integer $Timestamp - Expiration time: the UNIX Timestamp when the event notification signature expires. - Message notifications from media processing expire after 10 minutes by default. If the time specified by the Timestamp value in a message notification has expired, the notification is deemed invalid, which prevents network replay attacks. - Timestamp is in decimal UNIX Timestamp format, which is the seconds elapsed since January 1, 1970 (UTC/GMT midnight).
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
