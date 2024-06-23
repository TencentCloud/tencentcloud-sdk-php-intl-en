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
 * Task Attributes
 *
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getTaskName() Obtain Task Name
 * @method void setTaskName(string $TaskName) Set Task Name
 * @method string getWorkflowId() Obtain Workflow ID
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
 * @method integer getCycleType() Obtain Cycle Type 0: Crontab Type, 1: minutes, 2: Hour, 3: Days, 4: Weekly, 5: Month, 6: One-time, 7: User-driven, 10: Elastic Cycle (Week), 11: Elastic Cycle (Month), 12: Year, 13: Instant Trigger (Instant Type), isolated from normal cyclic scheduling tasks
 * @method void setCycleType(integer $CycleType) Set Cycle Type 0: Crontab Type, 1: minutes, 2: Hour, 3: Days, 4: Weekly, 5: Month, 6: One-time, 7: User-driven, 10: Elastic Cycle (Week), 11: Elastic Cycle (Month), 12: Year, 13: Instant Trigger (Instant Type), isolated from normal cyclic scheduling tasks
 * @method string getVirtualTaskId() Obtain Virtual Task ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setVirtualTaskId(string $VirtualTaskId) Set Virtual Task ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getVirtualFlag() Obtain Virtual Task Marker
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setVirtualFlag(boolean $VirtualFlag) Set Virtual Task Marker
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRealWorkflowId() Obtain Real Task Workflow ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRealWorkflowId(string $RealWorkflowId) Set Real Task Workflow ID
Note: This field may return null, indicating that no valid value can be obtained.
 */
class TaskInnerInfo extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Task Name
     */
    public $TaskName;

    /**
     * @var string Workflow ID
     */
    public $WorkflowId;

    /**
     * @var integer Cycle Type 0: Crontab Type, 1: minutes, 2: Hour, 3: Days, 4: Weekly, 5: Month, 6: One-time, 7: User-driven, 10: Elastic Cycle (Week), 11: Elastic Cycle (Month), 12: Year, 13: Instant Trigger (Instant Type), isolated from normal cyclic scheduling tasks
     */
    public $CycleType;

    /**
     * @var string Virtual Task ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $VirtualTaskId;

    /**
     * @var boolean Virtual Task Marker
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $VirtualFlag;

    /**
     * @var string Real Task Workflow ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RealWorkflowId;

    /**
     * @param string $TaskId Task ID
     * @param string $TaskName Task Name
     * @param string $WorkflowId Workflow ID
     * @param integer $CycleType Cycle Type 0: Crontab Type, 1: minutes, 2: Hour, 3: Days, 4: Weekly, 5: Month, 6: One-time, 7: User-driven, 10: Elastic Cycle (Week), 11: Elastic Cycle (Month), 12: Year, 13: Instant Trigger (Instant Type), isolated from normal cyclic scheduling tasks
     * @param string $VirtualTaskId Virtual Task ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $VirtualFlag Virtual Task Marker
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $RealWorkflowId Real Task Workflow ID
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("VirtualTaskId",$param) and $param["VirtualTaskId"] !== null) {
            $this->VirtualTaskId = $param["VirtualTaskId"];
        }

        if (array_key_exists("VirtualFlag",$param) and $param["VirtualFlag"] !== null) {
            $this->VirtualFlag = $param["VirtualFlag"];
        }

        if (array_key_exists("RealWorkflowId",$param) and $param["RealWorkflowId"] !== null) {
            $this->RealWorkflowId = $param["RealWorkflowId"];
        }
    }
}
