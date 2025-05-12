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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Read/write separation information of the database proxy group
 *
 * @method string getConsistencyType() Obtain Consistency type. Valid values: `eventual` (eventual consistency), `session` (session consistency), `global` (global consistency).
 * @method void setConsistencyType(string $ConsistencyType) Set Consistency type. Valid values: `eventual` (eventual consistency), `session` (session consistency), `global` (global consistency).
 * @method integer getConsistencyTimeOut() Obtain Consistency timeout period
 * @method void setConsistencyTimeOut(integer $ConsistencyTimeOut) Set Consistency timeout period
 * @method string getWeightMode() Obtain Weight mode. Valid values: `system` (auto-assigned), `custom`.
 * @method void setWeightMode(string $WeightMode) Set Weight mode. Valid values: `system` (auto-assigned), `custom`.
 * @method string getFailOver() Obtain Whether to enable failover
 * @method void setFailOver(string $FailOver) Set Whether to enable failover
 * @method string getAutoAddRo() Obtain Whether to automatically add read-only instance. Valid value: `yes`, `no`.
 * @method void setAutoAddRo(string $AutoAddRo) Set Whether to automatically add read-only instance. Valid value: `yes`, `no`.
 * @method array getInstanceWeights() Obtain Instance weight array
 * @method void setInstanceWeights(array $InstanceWeights) Set Instance weight array
 * @method string getOpenRw() Obtain Whether to enable read-write nodes. valid values: yes, no.
 * @method void setOpenRw(string $OpenRw) Set Whether to enable read-write nodes. valid values: yes, no.
 * @method string getRwType() Obtain Read/write attribute. Valid values: `READWRITE`, `READONLY`.
 * @method void setRwType(string $RwType) Set Read/write attribute. Valid values: `READWRITE`, `READONLY`.
 * @method boolean getTransSplit() Obtain Transaction split
 * @method void setTransSplit(boolean $TransSplit) Set Transaction split
 * @method string getAccessMode() Obtain Connection mode. Valid values: `balance`, `nearby`.
 * @method void setAccessMode(string $AccessMode) Set Connection mode. Valid values: `balance`, `nearby`.
 */
class ProxyGroupRwInfo extends AbstractModel
{
    /**
     * @var string Consistency type. Valid values: `eventual` (eventual consistency), `session` (session consistency), `global` (global consistency).
     */
    public $ConsistencyType;

    /**
     * @var integer Consistency timeout period
     */
    public $ConsistencyTimeOut;

    /**
     * @var string Weight mode. Valid values: `system` (auto-assigned), `custom`.
     */
    public $WeightMode;

    /**
     * @var string Whether to enable failover
     */
    public $FailOver;

    /**
     * @var string Whether to automatically add read-only instance. Valid value: `yes`, `no`.
     */
    public $AutoAddRo;

    /**
     * @var array Instance weight array
     */
    public $InstanceWeights;

    /**
     * @var string Whether to enable read-write nodes. valid values: yes, no.
     */
    public $OpenRw;

    /**
     * @var string Read/write attribute. Valid values: `READWRITE`, `READONLY`.
     */
    public $RwType;

    /**
     * @var boolean Transaction split
     */
    public $TransSplit;

    /**
     * @var string Connection mode. Valid values: `balance`, `nearby`.
     */
    public $AccessMode;

    /**
     * @param string $ConsistencyType Consistency type. Valid values: `eventual` (eventual consistency), `session` (session consistency), `global` (global consistency).
     * @param integer $ConsistencyTimeOut Consistency timeout period
     * @param string $WeightMode Weight mode. Valid values: `system` (auto-assigned), `custom`.
     * @param string $FailOver Whether to enable failover
     * @param string $AutoAddRo Whether to automatically add read-only instance. Valid value: `yes`, `no`.
     * @param array $InstanceWeights Instance weight array
     * @param string $OpenRw Whether to enable read-write nodes. valid values: yes, no.
     * @param string $RwType Read/write attribute. Valid values: `READWRITE`, `READONLY`.
     * @param boolean $TransSplit Transaction split
     * @param string $AccessMode Connection mode. Valid values: `balance`, `nearby`.
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
    }
}
