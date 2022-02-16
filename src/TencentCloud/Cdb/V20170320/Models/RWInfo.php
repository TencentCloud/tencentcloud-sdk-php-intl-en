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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Read/Write separation information of the proxy
 *
 * @method integer getInstCount() Obtain Number of instances in the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setInstCount(integer $InstCount) Set Number of instances in the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
 * @method string getWeightMode() Obtain Assignment mode of read/write weights
Valid values: `system` (auto-assigned), `custom`
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setWeightMode(string $WeightMode) Set Assignment mode of read/write weights
Valid values: `system` (auto-assigned), `custom`
Note: this field may return `null`, indicating that no valid value can be found.
 * @method boolean getIsKickOut() Obtain Whether to remove delayed read-only instances from the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setIsKickOut(boolean $IsKickOut) Set Whether to remove delayed read-only instances from the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
 * @method integer getMinCount() Obtain The minimum number of read-only instances allowed by the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setMinCount(integer $MinCount) Set The minimum number of read-only instances allowed by the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
 * @method integer getMaxDelay() Obtain Delay threshold
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setMaxDelay(integer $MaxDelay) Set Delay threshold
Note: this field may return `null`, indicating that no valid value can be found.
 * @method boolean getFailOver() Obtain Whether to enable failover
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setFailOver(boolean $FailOver) Set Whether to enable failover
Note: this field may return `null`, indicating that no valid value can be found.
 * @method boolean getAutoAddRo() Obtain Whether to automatically add newly created read-only instances to the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setAutoAddRo(boolean $AutoAddRo) Set Whether to automatically add newly created read-only instances to the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
 * @method RWInstanceInfo getRWInstInfo() Obtain Information of instances in the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setRWInstInfo(RWInstanceInfo $RWInstInfo) Set Information of instances in the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
 */
class RWInfo extends AbstractModel
{
    /**
     * @var integer Number of instances in the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $InstCount;

    /**
     * @var string Assignment mode of read/write weights
Valid values: `system` (auto-assigned), `custom`
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $WeightMode;

    /**
     * @var boolean Whether to remove delayed read-only instances from the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $IsKickOut;

    /**
     * @var integer The minimum number of read-only instances allowed by the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $MinCount;

    /**
     * @var integer Delay threshold
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $MaxDelay;

    /**
     * @var boolean Whether to enable failover
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $FailOver;

    /**
     * @var boolean Whether to automatically add newly created read-only instances to the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $AutoAddRo;

    /**
     * @var RWInstanceInfo Information of instances in the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $RWInstInfo;

    /**
     * @param integer $InstCount Number of instances in the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
     * @param string $WeightMode Assignment mode of read/write weights
Valid values: `system` (auto-assigned), `custom`
Note: this field may return `null`, indicating that no valid value can be found.
     * @param boolean $IsKickOut Whether to remove delayed read-only instances from the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
     * @param integer $MinCount The minimum number of read-only instances allowed by the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
     * @param integer $MaxDelay Delay threshold
Note: this field may return `null`, indicating that no valid value can be found.
     * @param boolean $FailOver Whether to enable failover
Note: this field may return `null`, indicating that no valid value can be found.
     * @param boolean $AutoAddRo Whether to automatically add newly created read-only instances to the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
     * @param RWInstanceInfo $RWInstInfo Information of instances in the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
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
        if (array_key_exists("InstCount",$param) and $param["InstCount"] !== null) {
            $this->InstCount = $param["InstCount"];
        }

        if (array_key_exists("WeightMode",$param) and $param["WeightMode"] !== null) {
            $this->WeightMode = $param["WeightMode"];
        }

        if (array_key_exists("IsKickOut",$param) and $param["IsKickOut"] !== null) {
            $this->IsKickOut = $param["IsKickOut"];
        }

        if (array_key_exists("MinCount",$param) and $param["MinCount"] !== null) {
            $this->MinCount = $param["MinCount"];
        }

        if (array_key_exists("MaxDelay",$param) and $param["MaxDelay"] !== null) {
            $this->MaxDelay = $param["MaxDelay"];
        }

        if (array_key_exists("FailOver",$param) and $param["FailOver"] !== null) {
            $this->FailOver = $param["FailOver"];
        }

        if (array_key_exists("AutoAddRo",$param) and $param["AutoAddRo"] !== null) {
            $this->AutoAddRo = $param["AutoAddRo"];
        }

        if (array_key_exists("RWInstInfo",$param) and $param["RWInstInfo"] !== null) {
            $this->RWInstInfo = new RWInstanceInfo();
            $this->RWInstInfo->deserialize($param["RWInstInfo"]);
        }
    }
}
