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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceChargeType request structure.
 *
 * @method array getInstanceIds() Obtain <p>Instance ID Array</p><p>Input parameter limitation: Length of batch operation array not exceeding 20</p>
 * @method void setInstanceIds(array $InstanceIds) Set <p>Instance ID Array</p><p>Input parameter limitation: Length of batch operation array not exceeding 20</p>
 * @method string getInstanceChargeType() Obtain <p>Operation type for billing mode change</p><p>Enumeration value:</p><ul><li>PREPAID: Transition from pay-as-you-go to monthly subscription</li><li>POSTPAID: Monthly subscription to pay-as-you-go</li></ul>
 * @method void setInstanceChargeType(string $InstanceChargeType) Set <p>Operation type for billing mode change</p><p>Enumeration value:</p><ul><li>PREPAID: Transition from pay-as-you-go to monthly subscription</li><li>POSTPAID: Monthly subscription to pay-as-you-go</li></ul>
 * @method integer getPeriod() Obtain <p>Purchase duration is required only when InstanceChargeType=PREPAID.</p><p>Valid values: 1 to 36.</p><p>Unit: months.</p>
 * @method void setPeriod(integer $Period) Set <p>Purchase duration is required only when InstanceChargeType=PREPAID.</p><p>Valid values: 1 to 36.</p><p>Unit: months.</p>
 */
class ModifyInstanceChargeTypeRequest extends AbstractModel
{
    /**
     * @var array <p>Instance ID Array</p><p>Input parameter limitation: Length of batch operation array not exceeding 20</p>
     */
    public $InstanceIds;

    /**
     * @var string <p>Operation type for billing mode change</p><p>Enumeration value:</p><ul><li>PREPAID: Transition from pay-as-you-go to monthly subscription</li><li>POSTPAID: Monthly subscription to pay-as-you-go</li></ul>
     */
    public $InstanceChargeType;

    /**
     * @var integer <p>Purchase duration is required only when InstanceChargeType=PREPAID.</p><p>Valid values: 1 to 36.</p><p>Unit: months.</p>
     */
    public $Period;

    /**
     * @param array $InstanceIds <p>Instance ID Array</p><p>Input parameter limitation: Length of batch operation array not exceeding 20</p>
     * @param string $InstanceChargeType <p>Operation type for billing mode change</p><p>Enumeration value:</p><ul><li>PREPAID: Transition from pay-as-you-go to monthly subscription</li><li>POSTPAID: Monthly subscription to pay-as-you-go</li></ul>
     * @param integer $Period <p>Purchase duration is required only when InstanceChargeType=PREPAID.</p><p>Valid values: 1 to 36.</p><p>Unit: months.</p>
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
