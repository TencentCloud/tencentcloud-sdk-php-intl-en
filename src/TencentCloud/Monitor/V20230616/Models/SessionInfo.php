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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Session entity
 *
 * @method string getSessionId() Obtain <p>Session ID</p>
 * @method void setSessionId(string $SessionId) Set <p>Session ID</p>
 * @method string getAgentId() Obtain <p>Agent ID</p>
 * @method void setAgentId(string $AgentId) Set <p>Agent ID</p>
 * @method string getTitle() Obtain <p>Session title</p>
 * @method void setTitle(string $Title) Set <p>Session title</p>
 * @method string getStatus() Obtain <p>Status: active / archived / deleted</p>
 * @method void setStatus(string $Status) Set <p>Status: active / archived / deleted</p>
 * @method string getTaskId() Obtain <p>If the session is triggered by a task, carry the task ID that triggers the session.</p>
 * @method void setTaskId(string $TaskId) Set <p>If the session is triggered by a task, carry the task ID that triggers the session.</p>
 */
class SessionInfo extends AbstractModel
{
    /**
     * @var string <p>Session ID</p>
     */
    public $SessionId;

    /**
     * @var string <p>Agent ID</p>
     */
    public $AgentId;

    /**
     * @var string <p>Session title</p>
     */
    public $Title;

    /**
     * @var string <p>Status: active / archived / deleted</p>
     */
    public $Status;

    /**
     * @var string <p>If the session is triggered by a task, carry the task ID that triggers the session.</p>
     */
    public $TaskId;

    /**
     * @param string $SessionId <p>Session ID</p>
     * @param string $AgentId <p>Agent ID</p>
     * @param string $Title <p>Session title</p>
     * @param string $Status <p>Status: active / archived / deleted</p>
     * @param string $TaskId <p>If the session is triggered by a task, carry the task ID that triggers the session.</p>
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
