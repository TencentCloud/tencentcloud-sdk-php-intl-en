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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Read/write separation information of the database proxy group
 *
 * @method string getConsistencyType() Obtain <p>Consistency Type eventual-final consistency,global-global consistency,session-session consistency</p>
 * @method void setConsistencyType(string $ConsistencyType) Set <p>Consistency Type eventual-final consistency,global-global consistency,session-session consistency</p>
 * @method integer getConsistencyTimeOut() Obtain <p>Consistency timeout</p>
 * @method void setConsistencyTimeOut(integer $ConsistencyTimeOut) Set <p>Consistency timeout</p>
 * @method string getWeightMode() Obtain <p>Weight mode system-system-assigned, custom-custom</p>
 * @method void setWeightMode(string $WeightMode) Set <p>Weight mode system-system-assigned, custom-custom</p>
 * @method string getFailOver() Obtain <p>Whether fault migration is enabled</p>
 * @method void setFailOver(string $FailOver) Set <p>Whether fault migration is enabled</p>
 * @method string getAutoAddRo() Obtain <p>Automatically add read-only instance, yes-yes, no-no</p>
 * @method void setAutoAddRo(string $AutoAddRo) Set <p>Automatically add read-only instance, yes-yes, no-no</p>
 * @method array getInstanceWeights() Obtain <p>Instance weight array</p>
 * @method void setInstanceWeights(array $InstanceWeights) Set <p>Instance weight array</p>
 * @method string getOpenRw() Obtain <p>Whether to enable the read-write node, yes - enable, no - disable</p>
 * @method void setOpenRw(string $OpenRw) Set <p>Whether to enable the read-write node, yes - enable, no - disable</p>
 * @method string getRwType() Obtain <p>Read-write attribute, value range: READWRITE, READONLY</p>
 * @method void setRwType(string $RwType) Set <p>Read-write attribute, value range: READWRITE, READONLY</p>
 * @method boolean getTransSplit() Obtain <p>Transaction split</p>
 * @method void setTransSplit(boolean $TransSplit) Set <p>Transaction split</p>
 * @method string getAccessMode() Obtain <p>Connection mode, available values: balance, nearby</p>
 * @method void setAccessMode(string $AccessMode) Set <p>Connection mode, available values: balance, nearby</p>
 * @method boolean getApNodeAsRoNode() Obtain <p>Whether to treat the libra node as an ordinary RO node</p>
 * @method void setApNodeAsRoNode(boolean $ApNodeAsRoNode) Set <p>Whether to treat the libra node as an ordinary RO node</p>
 * @method boolean getApQueryToOtherNode() Obtain <p>Whether to forward to other nodes when a libra node fault occurs</p>
 * @method void setApQueryToOtherNode(boolean $ApQueryToOtherNode) Set <p>Whether to forward to other nodes when a libra node fault occurs</p>
 * @method string getLoadBalanceMode() Obtain <p>Auto load</p><p>Enumeration value:</p><ul><li>static: Static load</li><li>dynamic: Dynamic load</li></ul>
 * @method void setLoadBalanceMode(string $LoadBalanceMode) Set <p>Auto load</p><p>Enumeration value:</p><ul><li>static: Static load</li><li>dynamic: Dynamic load</li></ul>
 */
class ProxyGroupRwInfo extends AbstractModel
{
    /**
     * @var string <p>Consistency Type eventual-final consistency,global-global consistency,session-session consistency</p>
     */
    public $ConsistencyType;

    /**
     * @var integer <p>Consistency timeout</p>
     */
    public $ConsistencyTimeOut;

    /**
     * @var string <p>Weight mode system-system-assigned, custom-custom</p>
     */
    public $WeightMode;

    /**
     * @var string <p>Whether fault migration is enabled</p>
     */
    public $FailOver;

    /**
     * @var string <p>Automatically add read-only instance, yes-yes, no-no</p>
     */
    public $AutoAddRo;

    /**
     * @var array <p>Instance weight array</p>
     */
    public $InstanceWeights;

    /**
     * @var string <p>Whether to enable the read-write node, yes - enable, no - disable</p>
     */
    public $OpenRw;

    /**
     * @var string <p>Read-write attribute, value range: READWRITE, READONLY</p>
     */
    public $RwType;

    /**
     * @var boolean <p>Transaction split</p>
     */
    public $TransSplit;

    /**
     * @var string <p>Connection mode, available values: balance, nearby</p>
     */
    public $AccessMode;

    /**
     * @var boolean <p>Whether to treat the libra node as an ordinary RO node</p>
     */
    public $ApNodeAsRoNode;

    /**
     * @var boolean <p>Whether to forward to other nodes when a libra node fault occurs</p>
     */
    public $ApQueryToOtherNode;

    /**
     * @var string <p>Auto load</p><p>Enumeration value:</p><ul><li>static: Static load</li><li>dynamic: Dynamic load</li></ul>
     */
    public $LoadBalanceMode;

    /**
     * @param string $ConsistencyType <p>Consistency Type eventual-final consistency,global-global consistency,session-session consistency</p>
     * @param integer $ConsistencyTimeOut <p>Consistency timeout</p>
     * @param string $WeightMode <p>Weight mode system-system-assigned, custom-custom</p>
     * @param string $FailOver <p>Whether fault migration is enabled</p>
     * @param string $AutoAddRo <p>Automatically add read-only instance, yes-yes, no-no</p>
     * @param array $InstanceWeights <p>Instance weight array</p>
     * @param string $OpenRw <p>Whether to enable the read-write node, yes - enable, no - disable</p>
     * @param string $RwType <p>Read-write attribute, value range: READWRITE, READONLY</p>
     * @param boolean $TransSplit <p>Transaction split</p>
     * @param string $AccessMode <p>Connection mode, available values: balance, nearby</p>
     * @param boolean $ApNodeAsRoNode <p>Whether to treat the libra node as an ordinary RO node</p>
     * @param boolean $ApQueryToOtherNode <p>Whether to forward to other nodes when a libra node fault occurs</p>
     * @param string $LoadBalanceMode <p>Auto load</p><p>Enumeration value:</p><ul><li>static: Static load</li><li>dynamic: Dynamic load</li></ul>
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
        if (array_key_exists("ConsistencyType",$param) and $param["ConsistencyType"] !== null) {
            $this->ConsistencyType = $param["ConsistencyType"];
        }

        if (array_key_exists("ConsistencyTimeOut",$param) and $param["ConsistencyTimeOut"] !== null) {
            $this->ConsistencyTimeOut = $param["ConsistencyTimeOut"];
        }

        if (array_key_exists("WeightMode",$param) and $param["WeightMode"] !== null) {
            $this->WeightMode = $param["WeightMode"];
        }

        if (array_key_exists("FailOver",$param) and $param["FailOver"] !== null) {
            $this->FailOver = $param["FailOver"];
        }

        if (array_key_exists("AutoAddRo",$param) and $param["AutoAddRo"] !== null) {
            $this->AutoAddRo = $param["AutoAddRo"];
        }

        if (array_key_exists("InstanceWeights",$param) and $param["InstanceWeights"] !== null) {
            $this->InstanceWeights = [];
            foreach ($param["InstanceWeights"] as $key => $value){
                $obj = new ProxyInstanceWeight();
                $obj->deserialize($value);
                array_push($this->InstanceWeights, $obj);
            }
        }

        if (array_key_exists("OpenRw",$param) and $param["OpenRw"] !== null) {
            $this->OpenRw = $param["OpenRw"];
        }

        if (array_key_exists("RwType",$param) and $param["RwType"] !== null) {
            $this->RwType = $param["RwType"];
        }

        if (array_key_exists("TransSplit",$param) and $param["TransSplit"] !== null) {
            $this->TransSplit = $param["TransSplit"];
        }

        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
        }

        if (array_key_exists("ApNodeAsRoNode",$param) and $param["ApNodeAsRoNode"] !== null) {
            $this->ApNodeAsRoNode = $param["ApNodeAsRoNode"];
        }

        if (array_key_exists("ApQueryToOtherNode",$param) and $param["ApQueryToOtherNode"] !== null) {
            $this->ApQueryToOtherNode = $param["ApQueryToOtherNode"];
        }

        if (array_key_exists("LoadBalanceMode",$param) and $param["LoadBalanceMode"] !== null) {
            $this->LoadBalanceMode = $param["LoadBalanceMode"];
        }
    }
}
