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
 * Information of the database proxy address
 *
 * @method string getProxyAddressId() Obtain Address ID of the proxy group
 * @method void setProxyAddressId(string $ProxyAddressId) Set Address ID of the proxy group
 * @method string getUniqVpcId() Obtain VPC ID
 * @method void setUniqVpcId(string $UniqVpcId) Set VPC ID
 * @method string getUniqSubnetId() Obtain VPC subnet ID
 * @method void setUniqSubnetId(string $UniqSubnetId) Set VPC subnet ID
 * @method string getVip() Obtain IP address
 * @method void setVip(string $Vip) Set IP address
 * @method integer getVPort() Obtain Port
 * @method void setVPort(integer $VPort) Set Port
 * @method string getWeightMode() Obtain Assignment mode of weights. Valid values: `system` (auto-assigned), `custom`. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWeightMode(string $WeightMode) Set Assignment mode of weights. Valid values: `system` (auto-assigned), `custom`. Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsKickOut() Obtain Whether to remove delayed read-only instances from the proxy group Valid values: `true`, `false`. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsKickOut(boolean $IsKickOut) Set Whether to remove delayed read-only instances from the proxy group Valid values: `true`, `false`. Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMinCount() Obtain Least read-only instances. Minimum value:  `0`. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMinCount(integer $MinCount) Set Least read-only instances. Minimum value:  `0`. Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxDelay() Obtain The delay threshold. Minimum value:  `0`. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxDelay(integer $MaxDelay) Set The delay threshold. Minimum value:  `0`. Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getAutoAddRo() Obtain Whether to automatically add newly created read-only instances. Valid values: `true`, `false`. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAutoAddRo(boolean $AutoAddRo) Set Whether to automatically add newly created read-only instances. Valid values: `true`, `false`. Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getReadOnly() Obtain Whether it is read-only. Valid values: `true`, `false`. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReadOnly(boolean $ReadOnly) Set Whether it is read-only. Valid values: `true`, `false`. Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getTransSplit() Obtain Whether to enable transaction splitting Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTransSplit(boolean $TransSplit) Set Whether to enable transaction splitting Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getFailOver() Obtain Whether to enable failover Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFailOver(boolean $FailOver) Set Whether to enable failover Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getConnectionPool() Obtain Whether to enable the connection pool Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConnectionPool(boolean $ConnectionPool) Set Whether to enable the connection pool Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDesc() Obtain Note:  This field may return null, indicating that no valid values can be obtained.
 * @method void setDesc(string $Desc) Set Note:  This field may return null, indicating that no valid values can be obtained.
 * @method array getProxyAllocation() Obtain Read weight assignment for an instance Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProxyAllocation(array $ProxyAllocation) Set Read weight assignment for an instance Note: This field may return null, indicating that no valid values can be obtained.
 */
class ProxyAddress extends AbstractModel
{
    /**
     * @var string Address ID of the proxy group
     */
    public $ProxyAddressId;

    /**
     * @var string VPC ID
     */
    public $UniqVpcId;

    /**
     * @var string VPC subnet ID
     */
    public $UniqSubnetId;

    /**
     * @var string IP address
     */
    public $Vip;

    /**
     * @var integer Port
     */
    public $VPort;

    /**
     * @var string Assignment mode of weights. Valid values: `system` (auto-assigned), `custom`. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WeightMode;

    /**
     * @var boolean Whether to remove delayed read-only instances from the proxy group Valid values: `true`, `false`. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsKickOut;

    /**
     * @var integer Least read-only instances. Minimum value:  `0`. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MinCount;

    /**
     * @var integer The delay threshold. Minimum value:  `0`. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxDelay;

    /**
     * @var boolean Whether to automatically add newly created read-only instances. Valid values: `true`, `false`. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AutoAddRo;

    /**
     * @var boolean Whether it is read-only. Valid values: `true`, `false`. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReadOnly;

    /**
     * @var boolean Whether to enable transaction splitting Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TransSplit;

    /**
     * @var boolean Whether to enable failover Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FailOver;

    /**
     * @var boolean Whether to enable the connection pool Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConnectionPool;

    /**
     * @var string Note:  This field may return null, indicating that no valid values can be obtained.
     */
    public $Desc;

    /**
     * @var array Read weight assignment for an instance Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProxyAllocation;

    /**
     * @param string $ProxyAddressId Address ID of the proxy group
     * @param string $UniqVpcId VPC ID
     * @param string $UniqSubnetId VPC subnet ID
     * @param string $Vip IP address
     * @param integer $VPort Port
     * @param string $WeightMode Assignment mode of weights. Valid values: `system` (auto-assigned), `custom`. Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsKickOut Whether to remove delayed read-only instances from the proxy group Valid values: `true`, `false`. Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MinCount Least read-only instances. Minimum value:  `0`. Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxDelay The delay threshold. Minimum value:  `0`. Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $AutoAddRo Whether to automatically add newly created read-only instances. Valid values: `true`, `false`. Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $ReadOnly Whether it is read-only. Valid values: `true`, `false`. Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $TransSplit Whether to enable transaction splitting Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $FailOver Whether to enable failover Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $ConnectionPool Whether to enable the connection pool Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Desc Note:  This field may return null, indicating that no valid values can be obtained.
     * @param array $ProxyAllocation Read weight assignment for an instance Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ProxyAddressId",$param) and $param["ProxyAddressId"] !== null) {
            $this->ProxyAddressId = $param["ProxyAddressId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VPort",$param) and $param["VPort"] !== null) {
            $this->VPort = $param["VPort"];
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

        if (array_key_exists("AutoAddRo",$param) and $param["AutoAddRo"] !== null) {
            $this->AutoAddRo = $param["AutoAddRo"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("TransSplit",$param) and $param["TransSplit"] !== null) {
            $this->TransSplit = $param["TransSplit"];
        }

        if (array_key_exists("FailOver",$param) and $param["FailOver"] !== null) {
            $this->FailOver = $param["FailOver"];
        }

        if (array_key_exists("ConnectionPool",$param) and $param["ConnectionPool"] !== null) {
            $this->ConnectionPool = $param["ConnectionPool"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
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
