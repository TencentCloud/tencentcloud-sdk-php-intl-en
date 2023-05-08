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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task view information
 *
 * @method string getTaskName() Obtain Task name
 * @method void setTaskName(string $TaskName) Set Task name
 * @method string getTaskState() Obtain Task status
 * @method void setTaskState(string $TaskState) Set Task status
 * @method string getCreateTime() Obtain Start time
 * @method void setCreateTime(string $CreateTime) Set Start time
 * @method string getEndTime() Obtain End time
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setEndTime(string $EndTime) Set End time
Note: This field may return `null`, indicating that no valid value was found.
 */
class TaskView extends AbstractModel
{
    /**
     * @var string Task name
     */
    public $TaskName;

    /**
     * @var string Task status
     */
    public $TaskState;

    /**
     * @var string Start time
     */
    public $CreateTime;

    /**
     * @var string End time
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $EndTime;

    /**
     * @param string $TaskName Task name
     * @param string $TaskState Task status
     * @param string $CreateTime Start time
     * @param string $EndTime End time
Note: This field may return `null`, indicating that no valid value was found.
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

        if (array_key_exists("TaskState",$param) and $param["TaskState"] !== null) {
            $this->TaskState = $param["TaskState"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
