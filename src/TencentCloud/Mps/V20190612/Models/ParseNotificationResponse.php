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
 * @method string getEventType() Obtain Supported event type. Valid values:
<li>WorkflowTask: Video workflow processing task.</li>
 * @method void setEventType(string $EventType) Set Supported event type. Valid values:
<li>WorkflowTask: Video workflow processing task.</li>
 * @method WorkflowTask getWorkflowTaskEvent() Obtain Information of a video processing task. This field has a value only when `TaskType` is `WorkflowTask`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowTaskEvent(WorkflowTask $WorkflowTaskEvent) Set Information of a video processing task. This field has a value only when `TaskType` is `WorkflowTask`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSessionId() Obtain The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
 * @method void setSessionId(string $SessionId) Set The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
 * @method string getSessionContext() Obtain The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ParseNotificationResponse extends AbstractModel
{
    /**
     * @var string Supported event type. Valid values:
<li>WorkflowTask: Video workflow processing task.</li>
     */
    public $EventType;

    /**
     * @var WorkflowTask Information of a video processing task. This field has a value only when `TaskType` is `WorkflowTask`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowTaskEvent;

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
     * @param string $EventType Supported event type. Valid values:
<li>WorkflowTask: Video workflow processing task.</li>
     * @param WorkflowTask $WorkflowTaskEvent Information of a video processing task. This field has a value only when `TaskType` is `WorkflowTask`.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("WorkflowTaskEvent",$param) and $param["WorkflowTaskEvent"] !== null) {
            $this->WorkflowTaskEvent = new WorkflowTask();
            $this->WorkflowTaskEvent->deserialize($param["WorkflowTaskEvent"]);
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
