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
 * AdjustCdbProxyAddress request structure.
 *
 * @method string getProxyGroupId() Obtain Proxy group ID
 * @method void setProxyGroupId(string $ProxyGroupId) Set Proxy group ID
 * @method string getWeightMode() Obtain Assignment mode of weights. Valid values: `system` (auto-assigned), `custom`.
 * @method void setWeightMode(string $WeightMode) Set Assignment mode of weights. Valid values: `system` (auto-assigned), `custom`.
 * @method boolean getIsKickOut() Obtain Whether to remove delayed read-only instances from the proxy group Valid values: `true`, `false`.
 * @method void setIsKickOut(boolean $IsKickOut) Set Whether to remove delayed read-only instances from the proxy group Valid values: `true`, `false`.
 * @method integer getMinCount() Obtain Least read-only instances. Minimum value:  `0`
 * @method void setMinCount(integer $MinCount) Set Least read-only instances. Minimum value:  `0`
 * @method integer getMaxDelay() Obtain The delay threshold. Minimum value:  `0`
 * @method void setMaxDelay(integer $MaxDelay) Set The delay threshold. Minimum value:  `0`
 * @method boolean getFailOver() Obtain Whether to enable failover. Valid values: `true`, `false`.
 * @method void setFailOver(boolean $FailOver) Set Whether to enable failover. Valid values: `true`, `false`.
 * @method boolean getAutoAddRo() Obtain Whether to automatically add newly created read-only instances. Valid values: `true`, `false`.
 * @method void setAutoAddRo(boolean $AutoAddRo) Set Whether to automatically add newly created read-only instances. Valid values: `true`, `false`.
 * @method boolean getReadOnly() Obtain Whether it is read-only. Valid values: `true`, `false`.
 * @method void setReadOnly(boolean $ReadOnly) Set Whether it is read-only. Valid values: `true`, `false`.
 * @method string getProxyAddressId() Obtain Address ID of the proxy group
 * @method void setProxyAddressId(string $ProxyAddressId) Set Address ID of the proxy group
 * @method boolean getTransSplit() Obtain Whether to enable transaction splitting. Valid values: `true`, `false`.
 * @method void setTransSplit(boolean $TransSplit) Set Whether to enable transaction splitting. Valid values: `true`, `false`.
 * @method boolean getConnectionPool() Obtain Whether to enable the connection pool
 * @method void setConnectionPool(boolean $ConnectionPool) Set Whether to enable the connection pool
 * @method array getProxyAllocation() Obtain Assignment of read/write weights If `system` is passed in for `WeightMode`, only the default weight assigned by the system will take effect.
 * @method void setProxyAllocation(array $ProxyAllocation) Set Assignment of read/write weights If `system` is passed in for `WeightMode`, only the default weight assigned by the system will take effect.
 */
class AdjustCdbProxyAddressRequest extends AbstractModel
{
    /**
     * @var string Proxy group ID
     */
    public $ProxyGroupId;

    /**
     * @var string Assignment mode of weights. Valid values: `system` (auto-assigned), `custom`.
     */
    public $WeightMode;

    /**
     * @var boolean Whether to remove delayed read-only instances from the proxy group Valid values: `true`, `false`.
     */
    public $IsKickOut;

    /**
     * @var integer Least read-only instances. Minimum value:  `0`
     */
    public $MinCount;

    /**
     * @var integer The delay threshold. Minimum value:  `0`
     */
    public $MaxDelay;

    /**
     * @var boolean Whether to enable failover. Valid values: `true`, `false`.
     */
    public $FailOver;

    /**
     * @var boolean Whether to automatically add newly created read-only instances. Valid values: `true`, `false`.
     */
    public $AutoAddRo;

    /**
     * @var boolean Whether it is read-only. Valid values: `true`, `false`.
     */
    public $ReadOnly;

    /**
     * @var string Address ID of the proxy group
     */
    public $ProxyAddressId;

    /**
     * @var boolean Whether to enable transaction splitting. Valid values: `true`, `false`.
     */
    public $TransSplit;

    /**
     * @var boolean Whether to enable the connection pool
     */
    public $ConnectionPool;

    /**
     * @var array Assignment of read/write weights If `system` is passed in for `WeightMode`, only the default weight assigned by the system will take effect.
     */
    public $ProxyAllocation;

    /**
     * @param string $ProxyGroupId Proxy group ID
     * @param string $WeightMode Assignment mode of weights. Valid values: `system` (auto-assigned), `custom`.
     * @param boolean $IsKickOut Whether to remove delayed read-only instances from the proxy group Valid values: `true`, `false`.
     * @param integer $MinCount Least read-only instances. Minimum value:  `0`
     * @param integer $MaxDelay The delay threshold. Minimum value:  `0`
     * @param boolean $FailOver Whether to enable failover. Valid values: `true`, `false`.
     * @param boolean $AutoAddRo Whether to automatically add newly created read-only instances. Valid values: `true`, `false`.
     * @param boolean $ReadOnly Whether it is read-only. Valid values: `true`, `false`.
     * @param string $ProxyAddressId Address ID of the proxy group
     * @param boolean $TransSplit Whether to enable transaction splitting. Valid values: `true`, `false`.
     * @param boolean $ConnectionPool Whether to enable the connection pool
     * @param array $ProxyAllocation Assignment of read/write weights If `system` is passed in for `WeightMode`, only the default weight assigned by the system will take effect.
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

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("ProxyAddressId",$param) and $param["ProxyAddressId"] !== null) {
            $this->ProxyAddressId = $param["ProxyAddressId"];
        }

        if (array_key_exists("TransSplit",$param) and $param["TransSplit"] !== null) {
            $this->TransSplit = $param["TransSplit"];
        }

        if (array_key_exists("ConnectionPool",$param) and $param["ConnectionPool"] !== null) {
            $this->ConnectionPool = $param["ConnectionPool"];
        }

        if (array_key_exists("ProxyAllocation",$param) and $param["ProxyAllocation"] !== null) {
            $this->ProxyAllocation = [];
            foreach ($param["ProxyAllocation"] as $key => $value){
                $obj = new ProxyAllocation();
                $obj->deserialize($value);
                array_push($this->ProxyAllocation, $obj);
            }
        }
    }
}
