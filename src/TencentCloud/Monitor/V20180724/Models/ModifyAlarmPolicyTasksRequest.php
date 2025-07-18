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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAlarmPolicyTasks request structure.
 *
 * @method string getModule() Obtain Module name. Enter "monitor" here
 * @method void setModule(string $Module) Set Module name. Enter "monitor" here
 * @method string getPolicyId() Obtain Alarm policy ID
 * @method void setPolicyId(string $PolicyId) Set Alarm policy ID
 * @method array getTriggerTasks() Obtain List of tasks triggered by alarm policy. If this parameter is left empty, it indicates to unbind all tasks
 * @method void setTriggerTasks(array $TriggerTasks) Set List of tasks triggered by alarm policy. If this parameter is left empty, it indicates to unbind all tasks
 */
class ModifyAlarmPolicyTasksRequest extends AbstractModel
{
    /**
     * @var string Module name. Enter "monitor" here
     */
    public $Module;

    /**
     * @var string Alarm policy ID
     */
    public $PolicyId;

    /**
     * @var array List of tasks triggered by alarm policy. If this parameter is left empty, it indicates to unbind all tasks
     */
    public $TriggerTasks;

    /**
     * @param string $Module Module name. Enter "monitor" here
     * @param string $PolicyId Alarm policy ID
     * @param array $TriggerTasks List of tasks triggered by alarm policy. If this parameter is left empty, it indicates to unbind all tasks
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("TriggerTasks",$param) and $param["TriggerTasks"] !== null) {
            $this->TriggerTasks = [];
            foreach ($param["TriggerTasks"] as $key => $value){
                $obj = new AlarmPolicyTriggerTask();
                $obj->deserialize($value);
                array_push($this->TriggerTasks, $obj);
            }
        }
    }
}
