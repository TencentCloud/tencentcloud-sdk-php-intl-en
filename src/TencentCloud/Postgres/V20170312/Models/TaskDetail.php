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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task details.
 *
 * @method string getCurrentStep() Obtain Current task step name.
 * @method void setCurrentStep(string $CurrentStep) Set Current task step name.
 * @method string getAllSteps() Obtain Describes the step description of the current task you own.
 * @method void setAllSteps(string $AllSteps) Set Describes the step description of the current task you own.
 * @method string getInput() Obtain Input of the task.
 * @method void setInput(string $Input) Set Input of the task.
 * @method string getOutput() Obtain Output parameter of the task.
 * @method void setOutput(string $Output) Set Output parameter of the task.
 * @method integer getSwitchTag() Obtain Specifies the switch time after instance configurations are modified. default value: 0.
This task does not require switching.
Switch immediately.
2: switch at specified time.
3: switch during maintenance time window.
 * @method void setSwitchTag(integer $SwitchTag) Set Specifies the switch time after instance configurations are modified. default value: 0.
This task does not require switching.
Switch immediately.
2: switch at specified time.
3: switch during maintenance time window.
 * @method string getSwitchTime() Obtain Specifies the switch time.
 * @method void setSwitchTime(string $SwitchTime) Set Specifies the switch time.
 * @method string getMessage() Obtain Note of the task.
 * @method void setMessage(string $Message) Set Note of the task.
 */
class TaskDetail extends AbstractModel
{
    /**
     * @var string Current task step name.
     */
    public $CurrentStep;

    /**
     * @var string Describes the step description of the current task you own.
     */
    public $AllSteps;

    /**
     * @var string Input of the task.
     */
    public $Input;

    /**
     * @var string Output parameter of the task.
     */
    public $Output;

    /**
     * @var integer Specifies the switch time after instance configurations are modified. default value: 0.
This task does not require switching.
Switch immediately.
2: switch at specified time.
3: switch during maintenance time window.
     */
    public $SwitchTag;

    /**
     * @var string Specifies the switch time.
     */
    public $SwitchTime;

    /**
     * @var string Note of the task.
     */
    public $Message;

    /**
     * @param string $CurrentStep Current task step name.
     * @param string $AllSteps Describes the step description of the current task you own.
     * @param string $Input Input of the task.
     * @param string $Output Output parameter of the task.
     * @param integer $SwitchTag Specifies the switch time after instance configurations are modified. default value: 0.
This task does not require switching.
Switch immediately.
2: switch at specified time.
3: switch during maintenance time window.
     * @param string $SwitchTime Specifies the switch time.
     * @param string $Message Note of the task.
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
        if (array_key_exists("CurrentStep",$param) and $param["CurrentStep"] !== null) {
            $this->CurrentStep = $param["CurrentStep"];
        }

        if (array_key_exists("AllSteps",$param) and $param["AllSteps"] !== null) {
            $this->AllSteps = $param["AllSteps"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("SwitchTag",$param) and $param["SwitchTag"] !== null) {
            $this->SwitchTag = $param["SwitchTag"];
        }

        if (array_key_exists("SwitchTime",$param) and $param["SwitchTime"] !== null) {
            $this->SwitchTime = $param["SwitchTime"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
