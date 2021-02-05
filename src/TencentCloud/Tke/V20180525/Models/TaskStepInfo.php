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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task step information
 *
 * @method string getStep() Obtain Step name
 * @method void setStep(string $Step) Set Step name
 * @method string getLifeState() Obtain Lifecycle
pending: the step is not started
running: the step is in progress
success: the step is completed
failed: the step failed
 * @method void setLifeState(string $LifeState) Set Lifecycle
pending: the step is not started
running: the step is in progress
success: the step is completed
failed: the step failed
 * @method string getStartAt() Obtain Step start time
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setStartAt(string $StartAt) Set Step start time
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getEndAt() Obtain Step end time
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setEndAt(string $EndAt) Set Step end time
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getFailedMsg() Obtain If the lifecycle of the step is failed, this field will display the error information.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setFailedMsg(string $FailedMsg) Set If the lifecycle of the step is failed, this field will display the error information.
Note: this field may return `null`, indicating that no valid value is obtained.
 */
class TaskStepInfo extends AbstractModel
{
    /**
     * @var string Step name
     */
    public $Step;

    /**
     * @var string Lifecycle
pending: the step is not started
running: the step is in progress
success: the step is completed
failed: the step failed
     */
    public $LifeState;

    /**
     * @var string Step start time
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $StartAt;

    /**
     * @var string Step end time
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $EndAt;

    /**
     * @var string If the lifecycle of the step is failed, this field will display the error information.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $FailedMsg;

    /**
     * @param string $Step Step name
     * @param string $LifeState Lifecycle
pending: the step is not started
running: the step is in progress
success: the step is completed
failed: the step failed
     * @param string $StartAt Step start time
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $EndAt Step end time
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $FailedMsg If the lifecycle of the step is failed, this field will display the error information.
Note: this field may return `null`, indicating that no valid value is obtained.
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
        if (array_key_exists("Step",$param) and $param["Step"] !== null) {
            $this->Step = $param["Step"];
        }

        if (array_key_exists("LifeState",$param) and $param["LifeState"] !== null) {
            $this->LifeState = $param["LifeState"];
        }

        if (array_key_exists("StartAt",$param) and $param["StartAt"] !== null) {
            $this->StartAt = $param["StartAt"];
        }

        if (array_key_exists("EndAt",$param) and $param["EndAt"] !== null) {
            $this->EndAt = $param["EndAt"];
        }

        if (array_key_exists("FailedMsg",$param) and $param["FailedMsg"] !== null) {
            $this->FailedMsg = $param["FailedMsg"];
        }
    }
}
