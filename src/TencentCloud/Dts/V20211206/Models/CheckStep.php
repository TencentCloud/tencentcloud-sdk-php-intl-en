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
 * Check step
 *
 * @method integer getStepNo() Obtain Step number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepNo(integer $StepNo) Set Step number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStepId() Obtain Step ID such as `ConnectDBCheck`, `VersionCheck`, and `SrcPrivilegeCheck`. The specific check items are subject to source and target instances.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepId(string $StepId) Set Step ID such as `ConnectDBCheck`, `VersionCheck`, and `SrcPrivilegeCheck`. The specific check items are subject to source and target instances.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStepName() Obtain Step name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepName(string $StepName) Set Step name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStepStatus() Obtain Result of this check step. Valid values: `pass`, `failed`, `notStarted`, `blocked`, `warning`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepStatus(string $StepStatus) Set Result of this check step. Valid values: `pass`, `failed`, `notStarted`, `blocked`, `warning`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStepMessage() Obtain Error message in this check step
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStepMessage(string $StepMessage) Set Error message in this check step
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDetailCheckItems() Obtain Specific check item in this check step
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetailCheckItems(array $DetailCheckItems) Set Specific check item in this check step
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getHasSkipped() Obtain Whether this step was skipped
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHasSkipped(boolean $HasSkipped) Set Whether this step was skipped
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CheckStep extends AbstractModel
{
    /**
     * @var integer Step number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepNo;

    /**
     * @var string Step ID such as `ConnectDBCheck`, `VersionCheck`, and `SrcPrivilegeCheck`. The specific check items are subject to source and target instances.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepId;

    /**
     * @var string Step name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepName;

    /**
     * @var string Result of this check step. Valid values: `pass`, `failed`, `notStarted`, `blocked`, `warning`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepStatus;

    /**
     * @var string Error message in this check step
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StepMessage;

    /**
     * @var array Specific check item in this check step
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DetailCheckItems;

    /**
     * @var boolean Whether this step was skipped
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HasSkipped;

    /**
     * @param integer $StepNo Step number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StepId Step ID such as `ConnectDBCheck`, `VersionCheck`, and `SrcPrivilegeCheck`. The specific check items are subject to source and target instances.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StepName Step name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StepStatus Result of this check step. Valid values: `pass`, `failed`, `notStarted`, `blocked`, `warning`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StepMessage Error message in this check step
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DetailCheckItems Specific check item in this check step
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $HasSkipped Whether this step was skipped
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
        if (array_key_exists("StepNo",$param) and $param["StepNo"] !== null) {
            $this->StepNo = $param["StepNo"];
        }

        if (array_key_exists("StepId",$param) and $param["StepId"] !== null) {
            $this->StepId = $param["StepId"];
        }

        if (array_key_exists("StepName",$param) and $param["StepName"] !== null) {
            $this->StepName = $param["StepName"];
        }

        if (array_key_exists("StepStatus",$param) and $param["StepStatus"] !== null) {
            $this->StepStatus = $param["StepStatus"];
        }

        if (array_key_exists("StepMessage",$param) and $param["StepMessage"] !== null) {
            $this->StepMessage = $param["StepMessage"];
        }

        if (array_key_exists("DetailCheckItems",$param) and $param["DetailCheckItems"] !== null) {
            $this->DetailCheckItems = [];
            foreach ($param["DetailCheckItems"] as $key => $value){
                $obj = new DetailCheckItem();
                $obj->deserialize($value);
                array_push($this->DetailCheckItems, $obj);
            }
        }

        if (array_key_exists("HasSkipped",$param) and $param["HasSkipped"] !== null) {
            $this->HasSkipped = $param["HasSkipped"];
        }
    }
}
