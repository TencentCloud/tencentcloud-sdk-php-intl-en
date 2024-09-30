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
 * ParseNotification response structure.
 *
 * @method string getEventType() Obtain The event type. Valid values:
<li>WorkflowTask</li>
<li>EditMediaTask</li>
<li>ScheduleTask (scheme)</li>
 * @method void setEventType(string $EventType) Set The event type. Valid values:
<li>WorkflowTask</li>
<li>EditMediaTask</li>
<li>ScheduleTask (scheme)</li>
 * @method WorkflowTask getWorkflowTaskEvent() Obtain The information of a video processing task. Information will be returned only if `EventType` is `WorkflowTask`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowTaskEvent(WorkflowTask $WorkflowTaskEvent) Set The information of a video processing task. Information will be returned only if `EventType` is `WorkflowTask`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method EditMediaTask getEditMediaTaskEvent() Obtain The information of a video editing task. Information will be returned only if `EventType` is `EditMediaTask`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEditMediaTaskEvent(EditMediaTask $EditMediaTaskEvent) Set The information of a video editing task. Information will be returned only if `EventType` is `EditMediaTask`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSessionId() Obtain The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
 * @method void setSessionId(string $SessionId) Set The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
 * @method string getSessionContext() Obtain The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
 * @method ScheduleTask getScheduleTaskEvent() Obtain The information of a scheme. Information will be returned only if `EventType` is `ScheduleTask`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScheduleTaskEvent(ScheduleTask $ScheduleTaskEvent) Set The information of a scheme. Information will be returned only if `EventType` is `ScheduleTask`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTimestamp() Obtain - The expiration time (Unix timestamp) of the notification's signature.
- By default, notifications sent by MPS expire after 10 minutes. If the expiration time specified has elapsed, a notification will be considered invalid. This can prevent replay attacks.
- The format of this parameter is a decimal Unix timestamp, i.e., the number of seconds that have elapsed since 00:00 (UTC/GMT time) on January 1, 1970.

 * @method void setTimestamp(integer $Timestamp) Set - The expiration time (Unix timestamp) of the notification's signature.
- By default, notifications sent by MPS expire after 10 minutes. If the expiration time specified has elapsed, a notification will be considered invalid. This can prevent replay attacks.
- The format of this parameter is a decimal Unix timestamp, i.e., the number of seconds that have elapsed since 00:00 (UTC/GMT time) on January 1, 1970.

 * @method string getSign() Obtain Event notification security signature. Sign = MD5 (Timestamp + NotifyKey). Note: Media Processing Service concatenates Timestamp and NotifyKey from TaskNotifyConfig as a string and calculates the Sign value through MD5. This value is included in the notification message. Your backend server can verify whether the Sign is correct using the same algorithm, to confirm whether the message is indeed from the Media Processing Service backend.
 * @method void setSign(string $Sign) Set Event notification security signature. Sign = MD5 (Timestamp + NotifyKey). Note: Media Processing Service concatenates Timestamp and NotifyKey from TaskNotifyConfig as a string and calculates the Sign value through MD5. This value is included in the notification message. Your backend server can verify whether the Sign is correct using the same algorithm, to confirm whether the message is indeed from the Media Processing Service backend.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class ParseNotificationResponse extends AbstractModel
{
    /**
     * @var string The event type. Valid values:
<li>WorkflowTask</li>
<li>EditMediaTask</li>
<li>ScheduleTask (scheme)</li>
     */
    public $EventType;

    /**
     * @var WorkflowTask The information of a video processing task. Information will be returned only if `EventType` is `WorkflowTask`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowTaskEvent;

    /**
     * @var EditMediaTask The information of a video editing task. Information will be returned only if `EventType` is `EditMediaTask`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EditMediaTaskEvent;

    /**
     * @var string The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
     */
    public $SessionId;

    /**
     * @var string The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var ScheduleTask The information of a scheme. Information will be returned only if `EventType` is `ScheduleTask`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScheduleTaskEvent;

    /**
     * @var integer - The expiration time (Unix timestamp) of the notification's signature.
- By default, notifications sent by MPS expire after 10 minutes. If the expiration time specified has elapsed, a notification will be considered invalid. This can prevent replay attacks.
- The format of this parameter is a decimal Unix timestamp, i.e., the number of seconds that have elapsed since 00:00 (UTC/GMT time) on January 1, 1970.

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
     * @param string $EventType The event type. Valid values:
<li>WorkflowTask</li>
<li>EditMediaTask</li>
<li>ScheduleTask (scheme)</li>
     * @param WorkflowTask $WorkflowTaskEvent The information of a video processing task. Information will be returned only if `EventType` is `WorkflowTask`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param EditMediaTask $EditMediaTaskEvent The information of a video editing task. Information will be returned only if `EventType` is `EditMediaTask`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SessionId The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
     * @param string $SessionContext The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
     * @param ScheduleTask $ScheduleTaskEvent The information of a scheme. Information will be returned only if `EventType` is `ScheduleTask`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Timestamp - The expiration time (Unix timestamp) of the notification's signature.
- By default, notifications sent by MPS expire after 10 minutes. If the expiration time specified has elapsed, a notification will be considered invalid. This can prevent replay attacks.
- The format of this parameter is a decimal Unix timestamp, i.e., the number of seconds that have elapsed since 00:00 (UTC/GMT time) on January 1, 1970.

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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
