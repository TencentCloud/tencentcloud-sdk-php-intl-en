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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task details
 *
 * @method string getTaskName() Obtain Task
 * @method void setTaskName(string $TaskName) Set Task
 * @method string getTaskUUID() Obtain Task UUID
 * @method void setTaskUUID(string $TaskUUID) Set Task UUID
 * @method string getTaskStatus() Obtain Task status
 * @method void setTaskStatus(string $TaskStatus) Set Task status
 * @method string getTaskMessage() Obtain Task details
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTaskMessage(string $TaskMessage) Set Task details
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Start time of the task
 * @method void setCreatedTime(string $CreatedTime) Set Start time of the task
 * @method string getFinishedTime() Obtain End time of the task
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setFinishedTime(string $FinishedTime) Set End time of the task
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class TaskDetail extends AbstractModel
{
    /**
     * @var string Task
     */
    public $TaskName;

    /**
     * @var string Task UUID
     */
    public $TaskUUID;

    /**
     * @var string Task status
     */
    public $TaskStatus;

    /**
     * @var string Task details
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TaskMessage;

    /**
     * @var string Start time of the task
     */
    public $CreatedTime;

    /**
     * @var string End time of the task
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $FinishedTime;

    /**
     * @param string $TaskName Task
     * @param string $TaskUUID Task UUID
     * @param string $TaskStatus Task status
     * @param string $TaskMessage Task details
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $CreatedTime Start time of the task
     * @param string $FinishedTime End time of the task
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskUUID",$param) and $param["TaskUUID"] !== null) {
            $this->TaskUUID = $param["TaskUUID"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TaskMessage",$param) and $param["TaskMessage"] !== null) {
            $this->TaskMessage = $param["TaskMessage"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("FinishedTime",$param) and $param["FinishedTime"] !== null) {
            $this->FinishedTime = $param["FinishedTime"];
        }
    }
}
