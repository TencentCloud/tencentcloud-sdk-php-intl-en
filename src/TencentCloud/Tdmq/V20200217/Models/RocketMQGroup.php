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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RocketMQ consumer group information
 *
 * @method string getName() Obtain Consumer group name
 * @method void setName(string $Name) Set Consumer group name
 * @method integer getConsumerNum() Obtain Number of online consumers
 * @method void setConsumerNum(integer $ConsumerNum) Set Number of online consumers
 * @method integer getTPS() Obtain Consumption TPS
 * @method void setTPS(integer $TPS) Set Consumption TPS
 * @method integer getTotalAccumulative() Obtain Total number of retained messages
 * @method void setTotalAccumulative(integer $TotalAccumulative) Set Total number of retained messages
 * @method integer getConsumptionMode() Obtain 0: cluster consumption mode; 1: broadcast consumption mode; -1: unknown
 * @method void setConsumptionMode(integer $ConsumptionMode) Set 0: cluster consumption mode; 1: broadcast consumption mode; -1: unknown
 * @method boolean getReadEnabled() Obtain Whether to allow consumption
 * @method void setReadEnabled(boolean $ReadEnabled) Set Whether to allow consumption
 * @method integer getRetryPartitionNum() Obtain Number of partitions in the retry letter topic
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRetryPartitionNum(integer $RetryPartitionNum) Set Number of partitions in the retry letter topic
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain Creation time in milliseconds
 * @method void setCreateTime(integer $CreateTime) Set Creation time in milliseconds
 * @method integer getUpdateTime() Obtain Modification time in milliseconds
 * @method void setUpdateTime(integer $UpdateTime) Set Modification time in milliseconds
 * @method string getClientProtocol() Obtain Client protocol
 * @method void setClientProtocol(string $ClientProtocol) Set Client protocol
 * @method string getRemark() Obtain Remarks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remarks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getConsumerType() Obtain Consumer type. Enumerated values: ACTIVELY, PASSIVELY
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setConsumerType(string $ConsumerType) Set Consumer type. Enumerated values: ACTIVELY, PASSIVELY
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getBroadcastEnabled() Obtain Whether to enable broadcast consumption
 * @method void setBroadcastEnabled(boolean $BroadcastEnabled) Set Whether to enable broadcast consumption
 */
class RocketMQGroup extends AbstractModel
{
    /**
     * @var string Consumer group name
     */
    public $Name;

    /**
     * @var integer Number of online consumers
     */
    public $ConsumerNum;

    /**
     * @var integer Consumption TPS
     */
    public $TPS;

    /**
     * @var integer Total number of retained messages
     */
    public $TotalAccumulative;

    /**
     * @var integer 0: cluster consumption mode; 1: broadcast consumption mode; -1: unknown
     */
    public $ConsumptionMode;

    /**
     * @var boolean Whether to allow consumption
     */
    public $ReadEnabled;

    /**
     * @var integer Number of partitions in the retry letter topic
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RetryPartitionNum;

    /**
     * @var integer Creation time in milliseconds
     */
    public $CreateTime;

    /**
     * @var integer Modification time in milliseconds
     */
    public $UpdateTime;

    /**
     * @var string Client protocol
     */
    public $ClientProtocol;

    /**
     * @var string Remarks
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var string Consumer type. Enumerated values: ACTIVELY, PASSIVELY
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ConsumerType;

    /**
     * @var boolean Whether to enable broadcast consumption
     */
    public $BroadcastEnabled;

    /**
     * @param string $Name Consumer group name
     * @param integer $ConsumerNum Number of online consumers
     * @param integer $TPS Consumption TPS
     * @param integer $TotalAccumulative Total number of retained messages
     * @param integer $ConsumptionMode 0: cluster consumption mode; 1: broadcast consumption mode; -1: unknown
     * @param boolean $ReadEnabled Whether to allow consumption
     * @param integer $RetryPartitionNum Number of partitions in the retry letter topic
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime Creation time in milliseconds
     * @param integer $UpdateTime Modification time in milliseconds
     * @param string $ClientProtocol Client protocol
     * @param string $Remark Remarks
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ConsumerType Consumer type. Enumerated values: ACTIVELY, PASSIVELY
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $BroadcastEnabled Whether to enable broadcast consumption
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ConsumerNum",$param) and $param["ConsumerNum"] !== null) {
            $this->ConsumerNum = $param["ConsumerNum"];
        }

        if (array_key_exists("TPS",$param) and $param["TPS"] !== null) {
            $this->TPS = $param["TPS"];
        }

        if (array_key_exists("TotalAccumulative",$param) and $param["TotalAccumulative"] !== null) {
            $this->TotalAccumulative = $param["TotalAccumulative"];
        }

        if (array_key_exists("ConsumptionMode",$param) and $param["ConsumptionMode"] !== null) {
            $this->ConsumptionMode = $param["ConsumptionMode"];
        }

        if (array_key_exists("ReadEnabled",$param) and $param["ReadEnabled"] !== null) {
            $this->ReadEnabled = $param["ReadEnabled"];
        }

        if (array_key_exists("RetryPartitionNum",$param) and $param["RetryPartitionNum"] !== null) {
            $this->RetryPartitionNum = $param["RetryPartitionNum"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ClientProtocol",$param) and $param["ClientProtocol"] !== null) {
            $this->ClientProtocol = $param["ClientProtocol"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ConsumerType",$param) and $param["ConsumerType"] !== null) {
            $this->ConsumerType = $param["ConsumerType"];
        }

        if (array_key_exists("BroadcastEnabled",$param) and $param["BroadcastEnabled"] !== null) {
            $this->BroadcastEnabled = $param["BroadcastEnabled"];
        }
    }
}
