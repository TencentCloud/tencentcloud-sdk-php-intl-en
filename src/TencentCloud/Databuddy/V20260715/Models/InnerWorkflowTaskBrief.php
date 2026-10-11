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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Built-in workflow task brief information (currently only FOR_EACH workflow tasks have a value for this field)
 *
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method string getTaskName() Obtain Task name.
 * @method void setTaskName(string $TaskName) Set Task name.
 * @method string getTaskTypeName() Obtain Task Type Name. For details, see the description of the TaskTypeName field in the TaskType data structure.
 * @method void setTaskTypeName(string $TaskTypeName) Set Task Type Name. For details, see the description of the TaskTypeName field in the TaskType data structure.
 */
class InnerWorkflowTaskBrief extends AbstractModel
{
    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var string Task name.
     */
    public $TaskName;

    /**
     * @var string Task Type Name. For details, see the description of the TaskTypeName field in the TaskType data structure.
     */
    public $TaskTypeName;

    /**
     * @param string $TaskId Task ID.
     * @param string $TaskName Task name.
     * @param string $TaskTypeName Task Type Name. For details, see the description of the TaskTypeName field in the TaskType data structure.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskTypeName",$param) and $param["TaskTypeName"] !== null) {
            $this->TaskTypeName = $param["TaskTypeName"];
        }
    }
}
