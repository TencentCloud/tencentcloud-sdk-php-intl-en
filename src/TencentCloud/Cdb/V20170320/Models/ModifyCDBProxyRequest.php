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
 * ModifyCDBProxy request structure.
 *
 * @method string getProxyGroupId() Obtain Unique ID of the database proxy group
 * @method void setProxyGroupId(string $ProxyGroupId) Set Unique ID of the database proxy group
 * @method boolean getIsKickout() Obtain Whether to remove delayed read-only instances from the proxy group. Valid values: `true`, `false`. Default value: `false`.
 * @method void setIsKickout(boolean $IsKickout) Set Whether to remove delayed read-only instances from the proxy group. Valid values: `true`, `false`. Default value: `false`.
 * @method integer getMinCount() Obtain The minimum number of read-only instances allowed by the proxy group. Minimum value: 1; maximum value: The number of instances.
 * @method void setMinCount(integer $MinCount) Set The minimum number of read-only instances allowed by the proxy group. Minimum value: 1; maximum value: The number of instances.
 * @method integer getMaxDelay() Obtain Delay threshold. If `IsKickOut` is set to `true`, this parameter is required.
 * @method void setMaxDelay(integer $MaxDelay) Set Delay threshold. If `IsKickOut` is set to `true`, this parameter is required.
 * @method string getWeightMode() Obtain Assignment mode of read/write weights. Valid values: `system` (auto-assigned), `custom`
 * @method void setWeightMode(string $WeightMode) Set Assignment mode of read/write weights. Valid values: `system` (auto-assigned), `custom`
 * @method RoWeight getRoWeightValues() Obtain Read-Only weight of an instance
 * @method void setRoWeightValues(RoWeight $RoWeightValues) Set Read-Only weight of an instance
 * @method boolean getFailOver() Obtain Whether to enable failover. If it is enabled, the connection address will route requests to the source instance in case of proxy failure. Valid values: `true`, `false`. Default value: `false`.
 * @method void setFailOver(boolean $FailOver) Set Whether to enable failover. If it is enabled, the connection address will route requests to the source instance in case of proxy failure. Valid values: `true`, `false`. Default value: `false`.
 * @method boolean getAutoAddRo() Obtain Whether to automatically add newly created read-only instances to the proxy group. Valid values: `true`, `false` Default value: `false`.
 * @method void setAutoAddRo(boolean $AutoAddRo) Set Whether to automatically add newly created read-only instances to the proxy group. Valid values: `true`, `false` Default value: `false`.
 */
class ModifyCDBProxyRequest extends AbstractModel
{
    /**
     * @var string Unique ID of the database proxy group
     */
    public $ProxyGroupId;

    /**
     * @var boolean Whether to remove delayed read-only instances from the proxy group. Valid values: `true`, `false`. Default value: `false`.
     */
    public $IsKickout;

    /**
     * @var integer The minimum number of read-only instances allowed by the proxy group. Minimum value: 1; maximum value: The number of instances.
     */
    public $MinCount;

    /**
     * @var integer Delay threshold. If `IsKickOut` is set to `true`, this parameter is required.
     */
    public $MaxDelay;

    /**
     * @var string Assignment mode of read/write weights. Valid values: `system` (auto-assigned), `custom`
     */
    public $WeightMode;

    /**
     * @var RoWeight Read-Only weight of an instance
     */
    public $RoWeightValues;

    /**
     * @var boolean Whether to enable failover. If it is enabled, the connection address will route requests to the source instance in case of proxy failure. Valid values: `true`, `false`. Default value: `false`.
     */
    public $FailOver;

    /**
     * @var boolean Whether to automatically add newly created read-only instances to the proxy group. Valid values: `true`, `false` Default value: `false`.
     */
    public $AutoAddRo;

    /**
     * @param string $ProxyGroupId Unique ID of the database proxy group
     * @param boolean $IsKickout Whether to remove delayed read-only instances from the proxy group. Valid values: `true`, `false`. Default value: `false`.
     * @param integer $MinCount The minimum number of read-only instances allowed by the proxy group. Minimum value: 1; maximum value: The number of instances.
     * @param integer $MaxDelay Delay threshold. If `IsKickOut` is set to `true`, this parameter is required.
     * @param string $WeightMode Assignment mode of read/write weights. Valid values: `system` (auto-assigned), `custom`
     * @param RoWeight $RoWeightValues Read-Only weight of an instance
     * @param boolean $FailOver Whether to enable failover. If it is enabled, the connection address will route requests to the source instance in case of proxy failure. Valid values: `true`, `false`. Default value: `false`.
     * @param boolean $AutoAddRo Whether to automatically add newly created read-only instances to the proxy group. Valid values: `true`, `false` Default value: `false`.
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
        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("IsKickout",$param) and $param["IsKickout"] !== null) {
            $this->IsKickout = $param["IsKickout"];
        }

        if (array_key_exists("MinCount",$param) and $param["MinCount"] !== null) {
            $this->MinCount = $param["MinCount"];
        }

        if (array_key_exists("MaxDelay",$param) and $param["MaxDelay"] !== null) {
            $this->MaxDelay = $param["MaxDelay"];
        }

        if (array_key_exists("WeightMode",$param) and $param["WeightMode"] !== null) {
            $this->WeightMode = $param["WeightMode"];
        }

        if (array_key_exists("RoWeightValues",$param) and $param["RoWeightValues"] !== null) {
            $this->RoWeightValues = new RoWeight();
            $this->RoWeightValues->deserialize($param["RoWeightValues"]);
        }

        if (array_key_exists("FailOver",$param) and $param["FailOver"] !== null) {
            $this->FailOver = $param["FailOver"];
        }

        if (array_key_exists("AutoAddRo",$param) and $param["AutoAddRo"] !== null) {
            $this->AutoAddRo = $param["AutoAddRo"];
        }
    }
}
