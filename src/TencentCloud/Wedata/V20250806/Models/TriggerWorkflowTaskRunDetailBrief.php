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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Workflow task execution details.
 *
 * @method TriggerWorkflowRunBrief getTriggerWorkflowRun() Obtain Workflow running information.
 * @method void setTriggerWorkflowRun(TriggerWorkflowRunBrief $TriggerWorkflowRun) Set Workflow running information.
 * @method array getTriggerTaskRuns() Obtain Task running information.
 * @method void setTriggerTaskRuns(array $TriggerTaskRuns) Set Task running information.
 * @method array getBizStateEnumInfos() Obtain Business status enumeration info.
 * @method void setBizStateEnumInfos(array $BizStateEnumInfos) Set Business status enumeration info.
 */
class TriggerWorkflowTaskRunDetailBrief extends AbstractModel
{
    /**
     * @var TriggerWorkflowRunBrief Workflow running information.
     */
    public $TriggerWorkflowRun;

    /**
     * @var array Task running information.
     */
    public $TriggerTaskRuns;

    /**
     * @var array Business status enumeration info.
     */
    public $BizStateEnumInfos;

    /**
     * @param TriggerWorkflowRunBrief $TriggerWorkflowRun Workflow running information.
     * @param array $TriggerTaskRuns Task running information.
     * @param array $BizStateEnumInfos Business status enumeration info.
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
        if (array_key_exists("TriggerWorkflowRun",$param) and $param["TriggerWorkflowRun"] !== null) {
            $this->TriggerWorkflowRun = new TriggerWorkflowRunBrief();
            $this->TriggerWorkflowRun->deserialize($param["TriggerWorkflowRun"]);
        }

        if (array_key_exists("TriggerTaskRuns",$param) and $param["TriggerTaskRuns"] !== null) {
            $this->TriggerTaskRuns = [];
            foreach ($param["TriggerTaskRuns"] as $key => $value){
                $obj = new TriggerTaskRunBrief();
                $obj->deserialize($value);
                array_push($this->TriggerTaskRuns, $obj);
            }
        }

        if (array_key_exists("BizStateEnumInfos",$param) and $param["BizStateEnumInfos"] !== null) {
            $this->BizStateEnumInfos = [];
            foreach ($param["BizStateEnumInfos"] as $key => $value){
                $obj = new BizStateEnumInfoBrief();
                $obj->deserialize($value);
                array_push($this->BizStateEnumInfos, $obj);
            }
        }
    }
}
