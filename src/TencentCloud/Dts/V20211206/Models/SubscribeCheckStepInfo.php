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
 * Information about each step of the subscription check task.
 *
 * @method string getStepName() Obtain Step name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepName(string $StepName) Set Step name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStepId() Obtain Step Id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepId(string $StepId) Set Step Id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStepNo() Obtain Step number, starting from 1
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepNo(integer $StepNo) Set Step number, starting from 1
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Current step status. Valid values: notStarted, running, finished, failed.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Current step status. Valid values: notStarted, running, finished, failed.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPercent() Obtain Current step progressNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setPercent(integer $Percent) Set Current step progressNote: This field may return null, indicating that no valid values can be obtained.
 * @method array getErrors() Obtain Error messageNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrors(array $Errors) Set Error messageNote: This field may return null, indicating that no valid values can be obtained.
 * @method array getWarnings() Obtain Warning messageNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setWarnings(array $Warnings) Set Warning messageNote: This field may return null, indicating that no valid values can be obtained.
 */
class SubscribeCheckStepInfo extends AbstractModel
{
    /**
     * @var string Step name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepName;

    /**
     * @var string Step Id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepId;

    /**
     * @var integer Step number, starting from 1
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepNo;

    /**
     * @var string Current step status. Valid values: notStarted, running, finished, failed.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Current step progressNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Percent;

    /**
     * @var array Error messageNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Errors;

    /**
     * @var array Warning messageNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Warnings;

    /**
     * @param string $StepName Step name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StepId Step Id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StepNo Step number, starting from 1
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Current step status. Valid values: notStarted, running, finished, failed.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Percent Current step progressNote: This field may return null, indicating that no valid values can be obtained.
     * @param array $Errors Error messageNote: This field may return null, indicating that no valid values can be obtained.
     * @param array $Warnings Warning messageNote: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("StepName",$param) and $param["StepName"] !== null) {
            $this->StepName = $param["StepName"];
        }

        if (array_key_exists("StepId",$param) and $param["StepId"] !== null) {
            $this->StepId = $param["StepId"];
        }

        if (array_key_exists("StepNo",$param) and $param["StepNo"] !== null) {
            $this->StepNo = $param["StepNo"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("Errors",$param) and $param["Errors"] !== null) {
            $this->Errors = [];
            foreach ($param["Errors"] as $key => $value){
                $obj = new SubscribeCheckStepTip();
                $obj->deserialize($value);
                array_push($this->Errors, $obj);
            }
        }

        if (array_key_exists("Warnings",$param) and $param["Warnings"] !== null) {
            $this->Warnings = [];
            foreach ($param["Warnings"] as $key => $value){
                $obj = new SubscribeCheckStepTip();
                $obj->deserialize($value);
                array_push($this->Warnings, $obj);
            }
        }
    }
}
