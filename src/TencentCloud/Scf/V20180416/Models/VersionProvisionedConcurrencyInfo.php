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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Provisioned concurrency information of function version, including the set provisioned concurrency amount, available provisioned concurrency amount, and provisioned concurrency setting task status.
 *
 * @method integer getAllocatedProvisionedConcurrencyNum() Obtain Set provisioned concurrency amount.
 * @method void setAllocatedProvisionedConcurrencyNum(integer $AllocatedProvisionedConcurrencyNum) Set Set provisioned concurrency amount.
 * @method integer getAvailableProvisionedConcurrencyNum() Obtain Currently available provisioned concurrency amount.
 * @method void setAvailableProvisionedConcurrencyNum(integer $AvailableProvisionedConcurrencyNum) Set Currently available provisioned concurrency amount.
 * @method string getStatus() Obtain Provisioned concurrency setting task status. `Done`: completed; `InProgress`: in progress; `Failed`: partially or completely failed.
 * @method void setStatus(string $Status) Set Provisioned concurrency setting task status. `Done`: completed; `InProgress`: in progress; `Failed`: partially or completely failed.
 * @method string getStatusReason() Obtain Status description of provisioned concurrency setting task.
 * @method void setStatusReason(string $StatusReason) Set Status description of provisioned concurrency setting task.
 * @method string getQualifier() Obtain Function version number
 * @method void setQualifier(string $Qualifier) Set Function version number
 * @method array getTriggerActions() Obtain List of scheduled provisioned concurrency scaling actions
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTriggerActions(array $TriggerActions) Set List of scheduled provisioned concurrency scaling actions
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class VersionProvisionedConcurrencyInfo extends AbstractModel
{
    /**
     * @var integer Set provisioned concurrency amount.
     */
    public $AllocatedProvisionedConcurrencyNum;

    /**
     * @var integer Currently available provisioned concurrency amount.
     */
    public $AvailableProvisionedConcurrencyNum;

    /**
     * @var string Provisioned concurrency setting task status. `Done`: completed; `InProgress`: in progress; `Failed`: partially or completely failed.
     */
    public $Status;

    /**
     * @var string Status description of provisioned concurrency setting task.
     */
    public $StatusReason;

    /**
     * @var string Function version number
     */
    public $Qualifier;

    /**
     * @var array List of scheduled provisioned concurrency scaling actions
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TriggerActions;

    /**
     * @param integer $AllocatedProvisionedConcurrencyNum Set provisioned concurrency amount.
     * @param integer $AvailableProvisionedConcurrencyNum Currently available provisioned concurrency amount.
     * @param string $Status Provisioned concurrency setting task status. `Done`: completed; `InProgress`: in progress; `Failed`: partially or completely failed.
     * @param string $StatusReason Status description of provisioned concurrency setting task.
     * @param string $Qualifier Function version number
     * @param array $TriggerActions List of scheduled provisioned concurrency scaling actions
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("AllocatedProvisionedConcurrencyNum",$param) and $param["AllocatedProvisionedConcurrencyNum"] !== null) {
            $this->AllocatedProvisionedConcurrencyNum = $param["AllocatedProvisionedConcurrencyNum"];
        }

        if (array_key_exists("AvailableProvisionedConcurrencyNum",$param) and $param["AvailableProvisionedConcurrencyNum"] !== null) {
            $this->AvailableProvisionedConcurrencyNum = $param["AvailableProvisionedConcurrencyNum"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusReason",$param) and $param["StatusReason"] !== null) {
            $this->StatusReason = $param["StatusReason"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("TriggerActions",$param) and $param["TriggerActions"] !== null) {
            $this->TriggerActions = [];
            foreach ($param["TriggerActions"] as $key => $value){
                $obj = new TriggerAction();
                $obj->deserialize($value);
                array_push($this->TriggerActions, $obj);
            }
        }
    }
}
