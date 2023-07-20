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
 * CreateCdbProxyAddress request structure.
 *
 * @method string getProxyGroupId() Obtain Proxy group ID
 * @method void setProxyGroupId(string $ProxyGroupId) Set Proxy group ID
 * @method string getWeightMode() Obtain Assignment mode of weights. Valid values: `system` (auto-assigned), `custom`.
 * @method void setWeightMode(string $WeightMode) Set Assignment mode of weights. Valid values: `system` (auto-assigned), `custom`.
 * @method boolean getIsKickOut() Obtain Whether to remove delayed read-only instances from the proxy group. Valid values: `true`, `false`.
 * @method void setIsKickOut(boolean $IsKickOut) Set Whether to remove delayed read-only instances from the proxy group. Valid values: `true`, `false`.
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
 * @method boolean getTransSplit() Obtain Whether to enable transaction splitting. Valid values: `true`, `false`.
 * @method void setTransSplit(boolean $TransSplit) Set Whether to enable transaction splitting. Valid values: `true`, `false`.
 * @method array getProxyAllocation() Obtain Assignment of read/write weights
 * @method void setProxyAllocation(array $ProxyAllocation) Set Assignment of read/write weights
 * @method string getUniqVpcId() Obtain VPC ID
 * @method void setUniqVpcId(string $UniqVpcId) Set VPC ID
 * @method string getUniqSubnetId() Obtain VPC subnet ID
 * @method void setUniqSubnetId(string $UniqSubnetId) Set VPC subnet ID
 * @method boolean getConnectionPool() Obtain Whether to enable the connection pool. Valid values: 
 * @method void setConnectionPool(boolean $ConnectionPool) Set Whether to enable the connection pool. Valid values: 
 * @method string getDesc() Obtain Description
 * @method void setDesc(string $Desc) Set Description
 * @method string getVip() Obtain IP address
 * @method void setVip(string $Vip) Set IP address
 * @method integer getVPort() Obtain Port
 * @method void setVPort(integer $VPort) Set Port
 * @method array getSecurityGroup() Obtain Security group
 * @method void setSecurityGroup(array $SecurityGroup) Set Security group
 * @method string getConnectionPoolType() Obtain Connection pool type, which will take effect only when `ConnectionPool` is `true`. Valid values:  `transaction` (transaction-level), `connection` (session-level).
 * @method void setConnectionPoolType(string $ConnectionPoolType) Set Connection pool type, which will take effect only when `ConnectionPool` is `true`. Valid values:  `transaction` (transaction-level), `connection` (session-level).
 */
class CreateCdbProxyAddressRequest extends AbstractModel
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
     * @var boolean Whether to remove delayed read-only instances from the proxy group. Valid values: `true`, `false`.
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
     * @var boolean Whether to enable transaction splitting. Valid values: `true`, `false`.
     */
    public $TransSplit;

    /**
     * @var array Assignment of read/write weights
     */
    public $ProxyAllocation;

    /**
     * @var string VPC ID
     */
    public $UniqVpcId;

    /**
     * @var string VPC subnet ID
     */
    public $UniqSubnetId;

    /**
     * @var boolean Whether to enable the connection pool. Valid values: 
     */
    public $ConnectionPool;

    /**
     * @var string Description
     */
    public $Desc;

    /**
     * @var string IP address
     */
    public $Vip;

    /**
     * @var integer Port
     */
    public $VPort;

    /**
     * @var array Security group
     */
    public $SecurityGroup;

    /**
     * @var string Connection pool type, which will take effect only when `ConnectionPool` is `true`. Valid values:  `transaction` (transaction-level), `connection` (session-level).
     */
    public $ConnectionPoolType;

    /**
     * @param string $ProxyGroupId Proxy group ID
     * @param string $WeightMode Assignment mode of weights. Valid values: `system` (auto-assigned), `custom`.
     * @param boolean $IsKickOut Whether to remove delayed read-only instances from the proxy group. Valid values: `true`, `false`.
     * @param integer $MinCount Least read-only instances. Minimum value:  `0`
     * @param integer $MaxDelay The delay threshold. Minimum value:  `0`
     * @param boolean $FailOver Whether to enable failover. Valid values: `true`, `false`.
     * @param boolean $AutoAddRo Whether to automatically add newly created read-only instances. Valid values: `true`, `false`.
     * @param boolean $ReadOnly Whether it is read-only. Valid values: `true`, `false`.
     * @param boolean $TransSplit Whether to enable transaction splitting. Valid values: `true`, `false`.
     * @param array $ProxyAllocation Assignment of read/write weights
     * @param string $UniqVpcId VPC ID
     * @param string $UniqSubnetId VPC subnet ID
     * @param boolean $ConnectionPool Whether to enable the connection pool. Valid values: 
     * @param string $Desc Description
     * @param string $Vip IP address
     * @param integer $VPort Port
     * @param array $SecurityGroup Security group
     * @param string $ConnectionPoolType Connection pool type, which will take effect only when `ConnectionPool` is `true`. Valid values:  `transaction` (transaction-level), `connection` (session-level).
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

        if (array_key_exists("TransSplit",$param) and $param["TransSplit"] !== null) {
            $this->TransSplit = $param["TransSplit"];
        }

        if (array_key_exists("ProxyAllocation",$param) and $param["ProxyAllocation"] !== null) {
            $this->ProxyAllocation = [];
            foreach ($param["ProxyAllocation"] as $key => $value){
                $obj = new ProxyAllocation();
                $obj->deserialize($value);
                array_push($this->ProxyAllocation, $obj);
            }
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("ConnectionPool",$param) and $param["ConnectionPool"] !== null) {
            $this->ConnectionPool = $param["ConnectionPool"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VPort",$param) and $param["VPort"] !== null) {
            $this->VPort = $param["VPort"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("ConnectionPoolType",$param) and $param["ConnectionPoolType"] !== null) {
            $this->ConnectionPoolType = $param["ConnectionPoolType"];
        }
    }
}
