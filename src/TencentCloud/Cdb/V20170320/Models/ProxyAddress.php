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
 * @method string getWeightMode() Obtain Weight allocation mode.
System Auto-Assignment: "system", Custom: "custom"
 * @method void setWeightMode(string $WeightMode) Set Weight allocation mode.
System Auto-Assignment: "system", Custom: "custom"
 * @method boolean getIsKickOut() Obtain Whether to enable delay removal. Parameter value: "true" | "false"
 * @method void setIsKickOut(boolean $IsKickOut) Set Whether to enable delay removal. Parameter value: "true" | "false"
 * @method integer getMinCount() Obtain Minimum retention quantity, minimum value: 0.
 * @method void setMinCount(integer $MinCount) Set Minimum retention quantity, minimum value: 0.
 * @method integer getMaxDelay() Obtain Delay removal threshold, minimum value: 0
 * @method void setMaxDelay(integer $MaxDelay) Set Delay removal threshold, minimum value: 0
 * @method boolean getAutoAddRo() Obtain Automatically add RO. Value: "true" | "false"
 * @method void setAutoAddRo(boolean $AutoAddRo) Set Automatically add RO. Value: "true" | "false"
 * @method boolean getReadOnly() Obtain Whether it is read-only. Value: "true" | "false".
 * @method void setReadOnly(boolean $ReadOnly) Set Whether it is read-only. Value: "true" | "false".
 * @method boolean getTransSplit() Obtain Whether transaction splitting is enabled
 * @method void setTransSplit(boolean $TransSplit) Set Whether transaction splitting is enabled
 * @method boolean getFailOver() Obtain Whether fault migration is enabled
 * @method void setFailOver(boolean $FailOver) Set Whether fault migration is enabled
 * @method boolean getConnectionPool() Obtain Whether to enable connection pool
 * @method void setConnectionPool(boolean $ConnectionPool) Set Whether to enable connection pool
 * @method string getDesc() Obtain Description
 * @method void setDesc(string $Desc) Set Description
 * @method array getProxyAllocation() Obtain Read weight distribution of an instance
 * @method void setProxyAllocation(array $ProxyAllocation) Set Read weight distribution of an instance
 * @method string getAccessMode() Obtain Access mode
 * @method void setAccessMode(string $AccessMode) Set Access mode
 * @method boolean getAutoLoadBalance() Obtain Whether automatic CLB is enabled
 * @method void setAutoLoadBalance(boolean $AutoLoadBalance) Set Whether automatic CLB is enabled
 * @method boolean getApNodeAsRoNode() Obtain Whether to treat libra as a read-only node
 * @method void setApNodeAsRoNode(boolean $ApNodeAsRoNode) Set Whether to treat libra as a read-only node
 * @method boolean getApQueryToOtherNode() Obtain libra node fault, whether to forward to other nodes
 * @method void setApQueryToOtherNode(boolean $ApQueryToOtherNode) Set libra node fault, whether to forward to other nodes
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
     * @var string Weight allocation mode.
System Auto-Assignment: "system", Custom: "custom"
     */
    public $WeightMode;

    /**
     * @var boolean Whether to enable delay removal. Parameter value: "true" | "false"
     */
    public $IsKickOut;

    /**
     * @var integer Minimum retention quantity, minimum value: 0.
     */
    public $MinCount;

    /**
     * @var integer Delay removal threshold, minimum value: 0
     */
    public $MaxDelay;

    /**
     * @var boolean Automatically add RO. Value: "true" | "false"
     */
    public $AutoAddRo;

    /**
     * @var boolean Whether it is read-only. Value: "true" | "false".
     */
    public $ReadOnly;

    /**
     * @var boolean Whether transaction splitting is enabled
     */
    public $TransSplit;

    /**
     * @var boolean Whether fault migration is enabled
     */
    public $FailOver;

    /**
     * @var boolean Whether to enable connection pool
     */
    public $ConnectionPool;

    /**
     * @var string Description
     */
    public $Desc;

    /**
     * @var array Read weight distribution of an instance
     */
    public $ProxyAllocation;

    /**
     * @var string Access mode
     */
    public $AccessMode;

    /**
     * @var boolean Whether automatic CLB is enabled
     */
    public $AutoLoadBalance;

    /**
     * @var boolean Whether to treat libra as a read-only node
     */
    public $ApNodeAsRoNode;

    /**
     * @var boolean libra node fault, whether to forward to other nodes
     */
    public $ApQueryToOtherNode;

    /**
     * @param string $ProxyAddressId Address ID of the proxy group
     * @param string $UniqVpcId VPC ID
     * @param string $UniqSubnetId VPC subnet ID
     * @param string $Vip IP address
     * @param integer $VPort Port
     * @param string $WeightMode Weight allocation mode.
System Auto-Assignment: "system", Custom: "custom"
     * @param boolean $IsKickOut Whether to enable delay removal. Parameter value: "true" | "false"
     * @param integer $MinCount Minimum retention quantity, minimum value: 0.
     * @param integer $MaxDelay Delay removal threshold, minimum value: 0
     * @param boolean $AutoAddRo Automatically add RO. Value: "true" | "false"
     * @param boolean $ReadOnly Whether it is read-only. Value: "true" | "false".
     * @param boolean $TransSplit Whether transaction splitting is enabled
     * @param boolean $FailOver Whether fault migration is enabled
     * @param boolean $ConnectionPool Whether to enable connection pool
     * @param string $Desc Description
     * @param array $ProxyAllocation Read weight distribution of an instance
     * @param string $AccessMode Access mode
     * @param boolean $AutoLoadBalance Whether automatic CLB is enabled
     * @param boolean $ApNodeAsRoNode Whether to treat libra as a read-only node
     * @param boolean $ApQueryToOtherNode libra node fault, whether to forward to other nodes
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

        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
        }

        if (array_key_exists("AutoLoadBalance",$param) and $param["AutoLoadBalance"] !== null) {
            $this->AutoLoadBalance = $param["AutoLoadBalance"];
        }

        if (array_key_exists("ApNodeAsRoNode",$param) and $param["ApNodeAsRoNode"] !== null) {
            $this->ApNodeAsRoNode = $param["ApNodeAsRoNode"];
        }

        if (array_key_exists("ApQueryToOtherNode",$param) and $param["ApQueryToOtherNode"] !== null) {
            $this->ApQueryToOtherNode = $param["ApQueryToOtherNode"];
        }
    }
}
