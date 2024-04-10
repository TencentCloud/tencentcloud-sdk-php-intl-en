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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kafka data import configuration
 *
 * @method string getId() Obtain ID of the Kafka data subscription configuration.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(string $Id) Set ID of the Kafka data subscription configuration.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTopicId() Obtain Log topic ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicId(string $TopicId) Set Log topic ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Kafka data import task name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Kafka data import task name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getKafkaType() Obtain Kafka type. Valid values: 0 (Tencent Cloud CKafka) and 1 (customer's Kafka).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKafkaType(integer $KafkaType) Set Kafka type. Valid values: 0 (Tencent Cloud CKafka) and 1 (customer's Kafka).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getKafkaInstance() Obtain CKafka instance ID, which is required when `KafkaType` is set to `0`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKafkaInstance(string $KafkaInstance) Set CKafka instance ID, which is required when `KafkaType` is set to `0`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getServerAddr() Obtain Service address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServerAddr(string $ServerAddr) Set Service address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsEncryptionAddr() Obtain Whether the service address uses an encrypted connection	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsEncryptionAddr(boolean $IsEncryptionAddr) Set Whether the service address uses an encrypted connection	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method KafkaProtocolInfo getProtocol() Obtain Encryption access protocol, which is required when `IsEncryptionAddr` is set to `true`
 * @method void setProtocol(KafkaProtocolInfo $Protocol) Set Encryption access protocol, which is required when `IsEncryptionAddr` is set to `true`
 * @method string getUserKafkaTopics() Obtain List of Kafka topics to import data from. Separate multiple topics with commas (,).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserKafkaTopics(string $UserKafkaTopics) Set List of Kafka topics to import data from. Separate multiple topics with commas (,).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConsumerGroupName() Obtain Kafka consumer group name	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConsumerGroupName(string $ConsumerGroupName) Set Kafka consumer group name	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Status, 1: running; 2: paused.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Status, 1: running; 2: paused.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOffset() Obtain Import data position, -2: earliest (default), -1: latestNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setOffset(integer $Offset) Set Import data position, -2: earliest (default), -1: latestNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method LogRechargeRuleInfo getLogRechargeRule() Obtain Log import rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogRechargeRule(LogRechargeRuleInfo $LogRechargeRule) Set Log import rule
Note: This field may return null, indicating that no valid values can be obtained.
 */
class KafkaRechargeInfo extends AbstractModel
{
    /**
     * @var string ID of the Kafka data subscription configuration.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var string Log topic ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicId;

    /**
     * @var string Kafka data import task name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var integer Kafka type. Valid values: 0 (Tencent Cloud CKafka) and 1 (customer's Kafka).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KafkaType;

    /**
     * @var string CKafka instance ID, which is required when `KafkaType` is set to `0`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KafkaInstance;

    /**
     * @var string Service address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServerAddr;

    /**
     * @var boolean Whether the service address uses an encrypted connection	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsEncryptionAddr;

    /**
     * @var KafkaProtocolInfo Encryption access protocol, which is required when `IsEncryptionAddr` is set to `true`
     */
    public $Protocol;

    /**
     * @var string List of Kafka topics to import data from. Separate multiple topics with commas (,).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserKafkaTopics;

    /**
     * @var string Kafka consumer group name	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConsumerGroupName;

    /**
     * @var integer Status, 1: running; 2: paused.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Import data position, -2: earliest (default), -1: latestNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Offset;

    /**
     * @var string Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var LogRechargeRuleInfo Log import rule
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogRechargeRule;

    /**
     * @param string $Id ID of the Kafka data subscription configuration.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TopicId Log topic ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Kafka data import task name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $KafkaType Kafka type. Valid values: 0 (Tencent Cloud CKafka) and 1 (customer's Kafka).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $KafkaInstance CKafka instance ID, which is required when `KafkaType` is set to `0`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ServerAddr Service address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsEncryptionAddr Whether the service address uses an encrypted connection	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param KafkaProtocolInfo $Protocol Encryption access protocol, which is required when `IsEncryptionAddr` is set to `true`
     * @param string $UserKafkaTopics List of Kafka topics to import data from. Separate multiple topics with commas (,).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ConsumerGroupName Kafka consumer group name	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Status, 1: running; 2: paused.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Offset Import data position, -2: earliest (default), -1: latestNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param LogRechargeRuleInfo $LogRechargeRule Log import rule
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("KafkaType",$param) and $param["KafkaType"] !== null) {
            $this->KafkaType = $param["KafkaType"];
        }

        if (array_key_exists("KafkaInstance",$param) and $param["KafkaInstance"] !== null) {
            $this->KafkaInstance = $param["KafkaInstance"];
        }

        if (array_key_exists("ServerAddr",$param) and $param["ServerAddr"] !== null) {
            $this->ServerAddr = $param["ServerAddr"];
        }

        if (array_key_exists("IsEncryptionAddr",$param) and $param["IsEncryptionAddr"] !== null) {
            $this->IsEncryptionAddr = $param["IsEncryptionAddr"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = new KafkaProtocolInfo();
            $this->Protocol->deserialize($param["Protocol"]);
        }

        if (array_key_exists("UserKafkaTopics",$param) and $param["UserKafkaTopics"] !== null) {
            $this->UserKafkaTopics = $param["UserKafkaTopics"];
        }

        if (array_key_exists("ConsumerGroupName",$param) and $param["ConsumerGroupName"] !== null) {
            $this->ConsumerGroupName = $param["ConsumerGroupName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("LogRechargeRule",$param) and $param["LogRechargeRule"] !== null) {
            $this->LogRechargeRule = new LogRechargeRuleInfo();
            $this->LogRechargeRule->deserialize($param["LogRechargeRule"]);
        }
    }
}
