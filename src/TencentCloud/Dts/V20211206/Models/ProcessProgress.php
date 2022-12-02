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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task step information
 *
 * @method string getStatus() Obtain Step status. Valid values: `notStarted`, `running`, `success`, `failed`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Step status. Valid values: `notStarted`, `running`, `success`, `failed`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPercent() Obtain Progress information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPercent(integer $Percent) Set Progress information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStepAll() Obtain Total number of steps
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepAll(integer $StepAll) Set Total number of steps
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStepNow() Obtain Current step
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepNow(integer $StepNow) Set Current step
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMessage() Obtain The prompt output in the current step
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set The prompt output in the current step
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSteps() Obtain Step information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSteps(array $Steps) Set Step information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ProcessProgress extends AbstractModel
{
    /**
     * @var string Step status. Valid values: `notStarted`, `running`, `success`, `failed`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Progress information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Percent;

    /**
     * @var integer Total number of steps
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepAll;

    /**
     * @var integer Current step
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepNow;

    /**
     * @var string The prompt output in the current step
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @var array Step information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Steps;

    /**
     * @param string $Status Step status. Valid values: `notStarted`, `running`, `success`, `failed`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Percent Progress information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StepAll Total number of steps
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StepNow Current step
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Message The prompt output in the current step
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Steps Step information
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("StepAll",$param) and $param["StepAll"] !== null) {
            $this->StepAll = $param["StepAll"];
        }

        if (array_key_exists("StepNow",$param) and $param["StepNow"] !== null) {
            $this->StepNow = $param["StepNow"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Steps",$param) and $param["Steps"] !== null) {
            $this->Steps = [];
            foreach ($param["Steps"] as $key => $value){
                $obj = new StepDetailInfo();
                $obj->deserialize($value);
                array_push($this->Steps, $obj);
            }
        }
    }
}
