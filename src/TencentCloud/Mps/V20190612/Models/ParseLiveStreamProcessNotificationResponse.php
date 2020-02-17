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
 * @method string getNotificationType() Obtain Result type of live stream processing. Valid values:
<li>AiReviewResult: Content audit result;</li>
<li>ProcessEof: Live stream processing has been completed.</li>
 * @method void setNotificationType(string $NotificationType) Set Result type of live stream processing. Valid values:
<li>AiReviewResult: Content audit result;</li>
<li>ProcessEof: Live stream processing has been completed.</li>
 * @method string getTaskId() Obtain Video processing task ID.
 * @method void setTaskId(string $TaskId) Set Video processing task ID.
 * @method LiveStreamProcessErrorInfo getProcessEofInfo() Obtain Information of a live stream processing error, which is valid when `NotificationType` is `ProcessEof`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcessEofInfo(LiveStreamProcessErrorInfo $ProcessEofInfo) Set Information of a live stream processing error, which is valid when `NotificationType` is `ProcessEof`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method LiveStreamAiReviewResultInfo getAiReviewResultInfo() Obtain Content audit result, which is valid when `NotificationType` is `AiReviewResult`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAiReviewResultInfo(LiveStreamAiReviewResultInfo $AiReviewResultInfo) Set Content audit result, which is valid when `NotificationType` is `AiReviewResult`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method LiveStreamAiRecognitionResultInfo getAiRecognitionResultInfo() Obtain 
 * @method void setAiRecognitionResultInfo(LiveStreamAiRecognitionResultInfo $AiRecognitionResultInfo) Set 
 * @method string getSessionId() Obtain The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
 * @method void setSessionId(string $SessionId) Set The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
 * @method string getSessionContext() Obtain The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *ParseLiveStreamProcessNotification response structure.
 */
class ParseLiveStreamProcessNotificationResponse extends AbstractModel
{
    /**
     * @var string Result type of live stream processing. Valid values:
<li>AiReviewResult: Content audit result;</li>
<li>ProcessEof: Live stream processing has been completed.</li>
     */
    public $NotificationType;

    /**
     * @var string Video processing task ID.
     */
    public $TaskId;

    /**
     * @var LiveStreamProcessErrorInfo Information of a live stream processing error, which is valid when `NotificationType` is `ProcessEof`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcessEofInfo;

    /**
     * @var LiveStreamAiReviewResultInfo Content audit result, which is valid when `NotificationType` is `AiReviewResult`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AiReviewResultInfo;

    /**
     * @var LiveStreamAiRecognitionResultInfo 
     */
    public $AiRecognitionResultInfo;

    /**
     * @var string The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
     */
    public $SessionId;

    /**
     * @var string The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param string $NotificationType Result type of live stream processing. Valid values:
<li>AiReviewResult: Content audit result;</li>
<li>ProcessEof: Live stream processing has been completed.</li>
     * @param string $TaskId Video processing task ID.
     * @param LiveStreamProcessErrorInfo $ProcessEofInfo Information of a live stream processing error, which is valid when `NotificationType` is `ProcessEof`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param LiveStreamAiReviewResultInfo $AiReviewResultInfo Content audit result, which is valid when `NotificationType` is `AiReviewResult`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param LiveStreamAiRecognitionResultInfo $AiRecognitionResultInfo 
     * @param string $SessionId The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
     * @param string $SessionContext The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
