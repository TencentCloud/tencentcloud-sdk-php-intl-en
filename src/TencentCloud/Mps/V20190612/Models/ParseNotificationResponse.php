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
 * ParseNotification response structure.
 *
 * @method string getEventType() Obtain Supported event types. Currently, the valid values include:
<li>WorkflowTask: video workflow processing task.</li>
<li>EditMediaTask: video editing task.</li>
<li>ScheduleTask: orchestration task.</li>
 * @method void setEventType(string $EventType) Set Supported event types. Currently, the valid values include:
<li>WorkflowTask: video workflow processing task.</li>
<li>EditMediaTask: video editing task.</li>
<li>ScheduleTask: orchestration task.</li>
 * @method WorkflowTask getWorkflowTaskEvent() Obtain Video processing task information. This field has a value only when EventType is WorkflowTask.
 * @method void setWorkflowTaskEvent(WorkflowTask $WorkflowTaskEvent) Set Video processing task information. This field has a value only when EventType is WorkflowTask.
 * @method EditMediaTask getEditMediaTaskEvent() Obtain Video editing task information. This field has a value only when EventType is EditMediaTask.
 * @method void setEditMediaTaskEvent(EditMediaTask $EditMediaTaskEvent) Set Video editing task information. This field has a value only when EventType is EditMediaTask.
 * @method string getSessionId() Obtain An identifier for deduplication. If there has been a request with the same identifier within the past seven days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
 * @method void setSessionId(string $SessionId) Set An identifier for deduplication. If there has been a request with the same identifier within the past seven days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
 * @method string getSessionContext() Obtain Source context, which is used to pass through user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, which is used to pass through user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method ScheduleTask getScheduleTaskEvent() Obtain Orchestration task information. This field has a value only when EventType is ScheduleTask.
 * @method void setScheduleTaskEvent(ScheduleTask $ScheduleTaskEvent) Set Orchestration task information. This field has a value only when EventType is ScheduleTask.
 * @method integer getTimestamp() Obtain -Expiration time. The event notification signature expires at this UNIX timestamp.
-The default expiration time for notifications from Media Processing Service (MPS) is 10 minutes. If the time specified by the Timestamp value in a notification has expired, the notification can be deemed invalid, which can prevent network replay attacks.
-Timestamp is in decimal UNIX timestamp format, i.e., the seconds elapsed since January 1, 1970 (UTC/GMT midnight).

 * @method void setTimestamp(integer $Timestamp) Set -Expiration time. The event notification signature expires at this UNIX timestamp.
-The default expiration time for notifications from Media Processing Service (MPS) is 10 minutes. If the time specified by the Timestamp value in a notification has expired, the notification can be deemed invalid, which can prevent network replay attacks.
-Timestamp is in decimal UNIX timestamp format, i.e., the seconds elapsed since January 1, 1970 (UTC/GMT midnight).

 * @method string getSign() Obtain Event notification security signature. Sign = MD5 (Timestamp + NotifyKey). Note: Media Processing Service concatenates Timestamp and NotifyKey from TaskNotifyConfig as a string and calculates the Sign value through MD5. This value is included in the notification message. Your backend server can verify whether the Sign is correct using the same algorithm, to confirm whether the message is indeed from the Media Processing Service backend.
 * @method void setSign(string $Sign) Set Event notification security signature. Sign = MD5 (Timestamp + NotifyKey). Note: Media Processing Service concatenates Timestamp and NotifyKey from TaskNotifyConfig as a string and calculates the Sign value through MD5. This value is included in the notification message. Your backend server can verify whether the Sign is correct using the same algorithm, to confirm whether the message is indeed from the Media Processing Service backend.
 * @method BatchSubTaskResult getBatchTaskEvent() Obtain Batch operation information. This field has a value only when EventType is BatchTask.
 * @method void setBatchTaskEvent(BatchSubTaskResult $BatchTaskEvent) Set Batch operation information. This field has a value only when EventType is BatchTask.
 * @method ExtractBlindWatermarkTask getExtractBlindWatermarkTask() Obtain Information about the digital watermark extraction task. This field has a value only when EventType is ExtractBlindWatermark.
 * @method void setExtractBlindWatermarkTask(ExtractBlindWatermarkTask $ExtractBlindWatermarkTask) Set Information about the digital watermark extraction task. This field has a value only when EventType is ExtractBlindWatermark.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class ParseNotificationResponse extends AbstractModel
{
    /**
     * @var string Supported event types. Currently, the valid values include:
<li>WorkflowTask: video workflow processing task.</li>
<li>EditMediaTask: video editing task.</li>
<li>ScheduleTask: orchestration task.</li>
     */
    public $EventType;

    /**
     * @var WorkflowTask Video processing task information. This field has a value only when EventType is WorkflowTask.
     */
    public $WorkflowTaskEvent;

    /**
     * @var EditMediaTask Video editing task information. This field has a value only when EventType is EditMediaTask.
     */
    public $EditMediaTaskEvent;

    /**
     * @var string An identifier for deduplication. If there has been a request with the same identifier within the past seven days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
     */
    public $SessionId;

    /**
     * @var string Source context, which is used to pass through user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var ScheduleTask Orchestration task information. This field has a value only when EventType is ScheduleTask.
     */
    public $ScheduleTaskEvent;

    /**
     * @var integer -Expiration time. The event notification signature expires at this UNIX timestamp.
-The default expiration time for notifications from Media Processing Service (MPS) is 10 minutes. If the time specified by the Timestamp value in a notification has expired, the notification can be deemed invalid, which can prevent network replay attacks.
-Timestamp is in decimal UNIX timestamp format, i.e., the seconds elapsed since January 1, 1970 (UTC/GMT midnight).

     */
    public $Timestamp;

    /**
     * @var string Event notification security signature. Sign = MD5 (Timestamp + NotifyKey). Note: Media Processing Service concatenates Timestamp and NotifyKey from TaskNotifyConfig as a string and calculates the Sign value through MD5. This value is included in the notification message. Your backend server can verify whether the Sign is correct using the same algorithm, to confirm whether the message is indeed from the Media Processing Service backend.
     */
    public $Sign;

    /**
     * @var BatchSubTaskResult Batch operation information. This field has a value only when EventType is BatchTask.
     */
    public $BatchTaskEvent;

    /**
     * @var ExtractBlindWatermarkTask Information about the digital watermark extraction task. This field has a value only when EventType is ExtractBlindWatermark.
     */
    public $ExtractBlindWatermarkTask;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $EventType Supported event types. Currently, the valid values include:
<li>WorkflowTask: video workflow processing task.</li>
<li>EditMediaTask: video editing task.</li>
<li>ScheduleTask: orchestration task.</li>
     * @param WorkflowTask $WorkflowTaskEvent Video processing task information. This field has a value only when EventType is WorkflowTask.
     * @param EditMediaTask $EditMediaTaskEvent Video editing task information. This field has a value only when EventType is EditMediaTask.
     * @param string $SessionId An identifier for deduplication. If there has been a request with the same identifier within the past seven days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
     * @param string $SessionContext Source context, which is used to pass through user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     * @param ScheduleTask $ScheduleTaskEvent Orchestration task information. This field has a value only when EventType is ScheduleTask.
     * @param integer $Timestamp -Expiration time. The event notification signature expires at this UNIX timestamp.
-The default expiration time for notifications from Media Processing Service (MPS) is 10 minutes. If the time specified by the Timestamp value in a notification has expired, the notification can be deemed invalid, which can prevent network replay attacks.
-Timestamp is in decimal UNIX timestamp format, i.e., the seconds elapsed since January 1, 1970 (UTC/GMT midnight).

     * @param string $Sign Event notification security signature. Sign = MD5 (Timestamp + NotifyKey). Note: Media Processing Service concatenates Timestamp and NotifyKey from TaskNotifyConfig as a string and calculates the Sign value through MD5. This value is included in the notification message. Your backend server can verify whether the Sign is correct using the same algorithm, to confirm whether the message is indeed from the Media Processing Service backend.
     * @param BatchSubTaskResult $BatchTaskEvent Batch operation information. This field has a value only when EventType is BatchTask.
     * @param ExtractBlindWatermarkTask $ExtractBlindWatermarkTask Information about the digital watermark extraction task. This field has a value only when EventType is ExtractBlindWatermark.
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
        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("WorkflowTaskEvent",$param) and $param["WorkflowTaskEvent"] !== null) {
            $this->WorkflowTaskEvent = new WorkflowTask();
            $this->WorkflowTaskEvent->deserialize($param["WorkflowTaskEvent"]);
        }

        if (array_key_exists("EditMediaTaskEvent",$param) and $param["EditMediaTaskEvent"] !== null) {
            $this->EditMediaTaskEvent = new EditMediaTask();
            $this->EditMediaTaskEvent->deserialize($param["EditMediaTaskEvent"]);
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("ScheduleTaskEvent",$param) and $param["ScheduleTaskEvent"] !== null) {
            $this->ScheduleTaskEvent = new ScheduleTask();
            $this->ScheduleTaskEvent->deserialize($param["ScheduleTaskEvent"]);
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Sign",$param) and $param["Sign"] !== null) {
            $this->Sign = $param["Sign"];
        }

        if (array_key_exists("BatchTaskEvent",$param) and $param["BatchTaskEvent"] !== null) {
            $this->BatchTaskEvent = new BatchSubTaskResult();
            $this->BatchTaskEvent->deserialize($param["BatchTaskEvent"]);
        }

        if (array_key_exists("ExtractBlindWatermarkTask",$param) and $param["ExtractBlindWatermarkTask"] !== null) {
            $this->ExtractBlindWatermarkTask = new ExtractBlindWatermarkTask();
            $this->ExtractBlindWatermarkTask->deserialize($param["ExtractBlindWatermarkTask"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
