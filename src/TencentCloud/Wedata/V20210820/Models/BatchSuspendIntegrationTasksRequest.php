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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchSuspendIntegrationTasks request structure.
 *
 * @method array getTaskIds() Obtain Task ID
 * @method void setTaskIds(array $TaskIds) Set Task ID
 * @method integer getTaskType() Obtain Task Type, 201 for real-time tasks, 202 for offline tasks
 * @method void setTaskType(integer $TaskType) Set Task Type, 201 for real-time tasks, 202 for offline tasks
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getEvent() Obtain Event Type (START, STOP, SUSPEND, SUSPEND_WITHOUT_SP, RESUME, COMMIT, TIMESTAMP)	
 * @method void setEvent(string $Event) Set Event Type (START, STOP, SUSPEND, SUSPEND_WITHOUT_SP, RESUME, COMMIT, TIMESTAMP)	
 * @method array getTaskNames() Obtain This batch operation involves tasks for auditing
 * @method void setTaskNames(array $TaskNames) Set This batch operation involves tasks for auditing
 */
class BatchSuspendIntegrationTasksRequest extends AbstractModel
{
    /**
     * @var array Task ID
     */
    public $TaskIds;

    /**
     * @var integer Task Type, 201 for real-time tasks, 202 for offline tasks
     */
    public $TaskType;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Event Type (START, STOP, SUSPEND, SUSPEND_WITHOUT_SP, RESUME, COMMIT, TIMESTAMP)	
     */
    public $Event;

    /**
     * @var array This batch operation involves tasks for auditing
     */
    public $TaskNames;

    /**
     * @param array $TaskIds Task ID
     * @param integer $TaskType Task Type, 201 for real-time tasks, 202 for offline tasks
     * @param string $ProjectId Project ID
     * @param string $Event Event Type (START, STOP, SUSPEND, SUSPEND_WITHOUT_SP, RESUME, COMMIT, TIMESTAMP)	
     * @param array $TaskNames This batch operation involves tasks for auditing
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
        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Event",$param) and $param["Event"] !== null) {
            $this->Event = $param["Event"];
        }

        if (array_key_exists("TaskNames",$param) and $param["TaskNames"] !== null) {
            $this->TaskNames = $param["TaskNames"];
        }
    }
}
