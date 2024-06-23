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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data Quality Production Scheduling Task Business Entity
 *
 * @method string getWorkflowId() Obtain Production Scheduling Task Workflow ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWorkflowId(string $WorkflowId) Set Production Scheduling Task Workflow ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskId() Obtain Production Scheduling Task ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskId(string $TaskId) Set Production Scheduling Task ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskName() Obtain Production Scheduling Task Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskName(string $TaskName) Set Production Scheduling Task Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getCycleType() Obtain Production Scheduling Task Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCycleType(integer $CycleType) Set Production Scheduling Task Type
Note: This field may return null, indicating that no valid value can be obtained.
 */
class ProdSchedulerTask extends AbstractModel
{
    /**
     * @var string Production Scheduling Task Workflow ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WorkflowId;

    /**
     * @var string Production Scheduling Task ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskId;

    /**
     * @var string Production Scheduling Task Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskName;

    /**
     * @var integer Production Scheduling Task Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CycleType;

    /**
     * @param string $WorkflowId Production Scheduling Task Workflow ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskId Production Scheduling Task ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskName Production Scheduling Task Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $CycleType Production Scheduling Task Type
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }
    }
}
