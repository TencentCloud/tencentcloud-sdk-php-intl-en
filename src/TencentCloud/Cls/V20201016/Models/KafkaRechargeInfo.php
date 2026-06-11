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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kafka data import configuration
 *
 * @method string getId() Obtain ID of Kafka data subscription configuration.
 * @method void setId(string $Id) Set ID of Kafka data subscription configuration.
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method string getName() Obtain Name of the Kafka import task
 * @method void setName(string $Name) Set Name of the Kafka import task
 * @method integer getKafkaType() Obtain Imports Kafka type. 0: Cloud CKafka; 1: user-built Kafka
 * @method void setKafkaType(integer $KafkaType) Set Imports Kafka type. 0: Cloud CKafka; 1: user-built Kafka
 * @method string getKafkaInstance() Obtain CKafka instance ID of cloud platform, required when KafkaType is 0.
 * @method void setKafkaInstance(string $KafkaInstance) Set CKafka instance ID of cloud platform, required when KafkaType is 0.
 * @method string getServerAddr() Obtain Service address
 * @method void setServerAddr(string $ServerAddr) Set Service address
 * @method boolean getIsEncryptionAddr() Obtain Whether ServerAddr is an encrypted connection	
 * @method void setIsEncryptionAddr(boolean $IsEncryptionAddr) Set Whether ServerAddr is an encrypted connection	
 * @method KafkaProtocolInfo getProtocol() Obtain Encryption access protocol, which is required when `IsEncryptionAddr` is set to `true`
 * @method void setProtocol(KafkaProtocolInfo $Protocol) Set Encryption access protocol, which is required when `IsEncryptionAddr` is set to `true`
 * @method string getUserKafkaTopics() Obtain The list of Kafka-related topics that the user needs to import. Separate multiple topics by commas.
 * @method void setUserKafkaTopics(string $UserKafkaTopics) Set The list of Kafka-related topics that the user needs to import. Separate multiple topics by commas.
 * @method string getConsumerGroupName() Obtain Kafka consumer group name of the user	
 * @method void setConsumerGroupName(string $ConsumerGroupName) Set Kafka consumer group name of the user	
 * @method integer getStatus() Obtain Status. 1: Running; 2: Suspension.
 * @method void setStatus(integer $Status) Set Status. 1: Running; 2: Suspension.
 * @method integer getOffset() Obtain Data import position. -2: earliest (default); -1: latest
 * @method void setOffset(integer $Offset) Set Data import position. -2: earliest (default); -1: latest
 * @method string getCreateTime() Obtain Creation time. Format `YYYY-MM-DD HH:MM:SS`
 * @method void setCreateTime(string $CreateTime) Set Creation time. Format `YYYY-MM-DD HH:MM:SS`
 * @method string getUpdateTime() Obtain Update time. Format: `YYYY-MM-DD HH:MM:SS`
 * @method void setUpdateTime(string $UpdateTime) Set Update time. Format: `YYYY-MM-DD HH:MM:SS`
 * @method LogRechargeRuleInfo getLogRechargeRule() Obtain Log import rule
 * @method void setLogRechargeRule(LogRechargeRuleInfo $LogRechargeRule) Set Log import rule
 * @method UserKafkaMeta getUserKafkaMeta() Obtain User kafka extended information
 * @method void setUserKafkaMeta(UserKafkaMeta $UserKafkaMeta) Set User kafka extended information
 */
class KafkaRechargeInfo extends AbstractModel
{
    /**
     * @var string ID of Kafka data subscription configuration.
     */
    public $Id;

    /**
     * @var string Log topic ID
     */
    public $TopicId;

    /**
     * @var string Name of the Kafka import task
     */
    public $Name;

    /**
     * @var integer Imports Kafka type. 0: Cloud CKafka; 1: user-built Kafka
     */
    public $KafkaType;

    /**
     * @var string CKafka instance ID of cloud platform, required when KafkaType is 0.
     */
    public $KafkaInstance;

    /**
     * @var string Service address
     */
    public $ServerAddr;

    /**
     * @var boolean Whether ServerAddr is an encrypted connection	
     */
    public $IsEncryptionAddr;

    /**
     * @var KafkaProtocolInfo Encryption access protocol, which is required when `IsEncryptionAddr` is set to `true`
     */
    public $Protocol;

    /**
     * @var string The list of Kafka-related topics that the user needs to import. Separate multiple topics by commas.
     */
    public $UserKafkaTopics;

    /**
     * @var string Kafka consumer group name of the user	
     */
    public $ConsumerGroupName;

    /**
     * @var integer Status. 1: Running; 2: Suspension.
     */
    public $Status;

    /**
     * @var integer Data import position. -2: earliest (default); -1: latest
     */
    public $Offset;

    /**
     * @var string Creation time. Format `YYYY-MM-DD HH:MM:SS`
     */
    public $CreateTime;

    /**
     * @var string Update time. Format: `YYYY-MM-DD HH:MM:SS`
     */
    public $UpdateTime;

    /**
     * @var LogRechargeRuleInfo Log import rule
     */
    public $LogRechargeRule;

    /**
     * @var UserKafkaMeta User kafka extended information
     */
    public $UserKafkaMeta;

    /**
     * @param string $Id ID of Kafka data subscription configuration.
     * @param string $TopicId Log topic ID
     * @param string $Name Name of the Kafka import task
     * @param integer $KafkaType Imports Kafka type. 0: Cloud CKafka; 1: user-built Kafka
     * @param string $KafkaInstance CKafka instance ID of cloud platform, required when KafkaType is 0.
     * @param string $ServerAddr Service address
     * @param boolean $IsEncryptionAddr Whether ServerAddr is an encrypted connection	
     * @param KafkaProtocolInfo $Protocol Encryption access protocol, which is required when `IsEncryptionAddr` is set to `true`
     * @param string $UserKafkaTopics The list of Kafka-related topics that the user needs to import. Separate multiple topics by commas.
     * @param string $ConsumerGroupName Kafka consumer group name of the user	
     * @param integer $Status Status. 1: Running; 2: Suspension.
     * @param integer $Offset Data import position. -2: earliest (default); -1: latest
     * @param string $CreateTime Creation time. Format `YYYY-MM-DD HH:MM:SS`
     * @param string $UpdateTime Update time. Format: `YYYY-MM-DD HH:MM:SS`
     * @param LogRechargeRuleInfo $LogRechargeRule Log import rule
     * @param UserKafkaMeta $UserKafkaMeta User kafka extended information
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

        if (array_key_exists("UserKafkaMeta",$param) and $param["UserKafkaMeta"] !== null) {
            $this->UserKafkaMeta = new UserKafkaMeta();
            $this->UserKafkaMeta->deserialize($param["UserKafkaMeta"]);
        }
    }
}
