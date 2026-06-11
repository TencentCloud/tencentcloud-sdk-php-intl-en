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
 * CreateKafkaRecharge request structure.
 *
 * @method string getTopicId() Obtain Import the target topic ID of CLS.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
 * @method void setTopicId(string $TopicId) Set Import the target topic ID of CLS.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
 * @method string getName() Obtain Kafka data import configuration name
 * @method void setName(string $Name) Set Kafka data import configuration name
 * @method integer getKafkaType() Obtain Kafka type. Valid values: 0 (Tencent Cloud CKafka) and 1 (customer's Kafka).
 * @method void setKafkaType(integer $KafkaType) Set Kafka type. Valid values: 0 (Tencent Cloud CKafka) and 1 (customer's Kafka).
 * @method string getUserKafkaTopics() Obtain List of Kafka topics to import data from. Separate multiple topics with commas (,).
 * @method void setUserKafkaTopics(string $UserKafkaTopics) Set List of Kafka topics to import data from. Separate multiple topics with commas (,).
 * @method integer getOffset() Obtain Position for data import. Valid values: -2 (earliest, default) and -1 (latest).
 * @method void setOffset(integer $Offset) Set Position for data import. Valid values: -2 (earliest, default) and -1 (latest).
 * @method LogRechargeRuleInfo getLogRechargeRule() Obtain Log Import Rules.
 * @method void setLogRechargeRule(LogRechargeRuleInfo $LogRechargeRule) Set Log Import Rules.
 * @method string getKafkaInstance() Obtain Tencent Cloud CKafka instance ID. Required when KafkaType is 0.
-Obtain the instance id through [Get Instance List Information](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
 * @method void setKafkaInstance(string $KafkaInstance) Set Tencent Cloud CKafka instance ID. Required when KafkaType is 0.
-Obtain the instance id through [Get Instance List Information](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
 * @method string getServerAddr() Obtain Service address, which is required when KafkaType is 1.
 * @method void setServerAddr(string $ServerAddr) Set Service address, which is required when KafkaType is 1.
 * @method boolean getIsEncryptionAddr() Obtain Whether ServerAddr is an encrypted connection. Required when KafkaType is 1.
 * @method void setIsEncryptionAddr(boolean $IsEncryptionAddr) Set Whether ServerAddr is an encrypted connection. Required when KafkaType is 1.
 * @method KafkaProtocolInfo getProtocol() Obtain Encrypted Access Protocol.
When KafkaType is 1 and IsEncryptionAddr is true, Protocol is required.
 * @method void setProtocol(KafkaProtocolInfo $Protocol) Set Encrypted Access Protocol.
When KafkaType is 1 and IsEncryptionAddr is true, Protocol is required.
 * @method string getConsumerGroupName() Obtain User Kafka consumer group name.
-A consumption group is a scalable and fault-tolerant consumer mechanism provided by Kafka. Multiple consumers exist in a consumption group, and all consumers in the group consume subscribed messages of the Topic. A consumer can consume multiple partitions simultaneously, but one Partition can only be consumed by one consumer in the group.
 * @method void setConsumerGroupName(string $ConsumerGroupName) Set User Kafka consumer group name.
-A consumption group is a scalable and fault-tolerant consumer mechanism provided by Kafka. Multiple consumers exist in a consumption group, and all consumers in the group consume subscribed messages of the Topic. A consumer can consume multiple partitions simultaneously, but one Partition can only be consumed by one consumer in the group.
 * @method UserKafkaMeta getUserKafkaMeta() Obtain User kafka extended information
 * @method void setUserKafkaMeta(UserKafkaMeta $UserKafkaMeta) Set User kafka extended information
 */
class CreateKafkaRechargeRequest extends AbstractModel
{
    /**
     * @var string Import the target topic ID of CLS.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
     */
    public $TopicId;

    /**
     * @var string Kafka data import configuration name
     */
    public $Name;

    /**
     * @var integer Kafka type. Valid values: 0 (Tencent Cloud CKafka) and 1 (customer's Kafka).
     */
    public $KafkaType;

    /**
     * @var string List of Kafka topics to import data from. Separate multiple topics with commas (,).
     */
    public $UserKafkaTopics;

    /**
     * @var integer Position for data import. Valid values: -2 (earliest, default) and -1 (latest).
     */
    public $Offset;

    /**
     * @var LogRechargeRuleInfo Log Import Rules.
     */
    public $LogRechargeRule;

    /**
     * @var string Tencent Cloud CKafka instance ID. Required when KafkaType is 0.
-Obtain the instance id through [Get Instance List Information](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
     */
    public $KafkaInstance;

    /**
     * @var string Service address, which is required when KafkaType is 1.
     */
    public $ServerAddr;

    /**
     * @var boolean Whether ServerAddr is an encrypted connection. Required when KafkaType is 1.
     */
    public $IsEncryptionAddr;

    /**
     * @var KafkaProtocolInfo Encrypted Access Protocol.
When KafkaType is 1 and IsEncryptionAddr is true, Protocol is required.
     */
    public $Protocol;

    /**
     * @var string User Kafka consumer group name.
-A consumption group is a scalable and fault-tolerant consumer mechanism provided by Kafka. Multiple consumers exist in a consumption group, and all consumers in the group consume subscribed messages of the Topic. A consumer can consume multiple partitions simultaneously, but one Partition can only be consumed by one consumer in the group.
     */
    public $ConsumerGroupName;

    /**
     * @var UserKafkaMeta User kafka extended information
     */
    public $UserKafkaMeta;

    /**
     * @param string $TopicId Import the target topic ID of CLS.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
     * @param string $Name Kafka data import configuration name
     * @param integer $KafkaType Kafka type. Valid values: 0 (Tencent Cloud CKafka) and 1 (customer's Kafka).
     * @param string $UserKafkaTopics List of Kafka topics to import data from. Separate multiple topics with commas (,).
     * @param integer $Offset Position for data import. Valid values: -2 (earliest, default) and -1 (latest).
     * @param LogRechargeRuleInfo $LogRechargeRule Log Import Rules.
     * @param string $KafkaInstance Tencent Cloud CKafka instance ID. Required when KafkaType is 0.
-Obtain the instance id through [Get Instance List Information](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
     * @param string $ServerAddr Service address, which is required when KafkaType is 1.
     * @param boolean $IsEncryptionAddr Whether ServerAddr is an encrypted connection. Required when KafkaType is 1.
     * @param KafkaProtocolInfo $Protocol Encrypted Access Protocol.
When KafkaType is 1 and IsEncryptionAddr is true, Protocol is required.
     * @param string $ConsumerGroupName User Kafka consumer group name.
-A consumption group is a scalable and fault-tolerant consumer mechanism provided by Kafka. Multiple consumers exist in a consumption group, and all consumers in the group consume subscribed messages of the Topic. A consumer can consume multiple partitions simultaneously, but one Partition can only be consumed by one consumer in the group.
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("KafkaType",$param) and $param["KafkaType"] !== null) {
            $this->KafkaType = $param["KafkaType"];
        }

        if (array_key_exists("UserKafkaTopics",$param) and $param["UserKafkaTopics"] !== null) {
            $this->UserKafkaTopics = $param["UserKafkaTopics"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("LogRechargeRule",$param) and $param["LogRechargeRule"] !== null) {
            $this->LogRechargeRule = new LogRechargeRuleInfo();
            $this->LogRechargeRule->deserialize($param["LogRechargeRule"]);
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

        if (array_key_exists("ConsumerGroupName",$param) and $param["ConsumerGroupName"] !== null) {
            $this->ConsumerGroupName = $param["ConsumerGroupName"];
        }

        if (array_key_exists("UserKafkaMeta",$param) and $param["UserKafkaMeta"] !== null) {
            $this->UserKafkaMeta = new UserKafkaMeta();
            $this->UserKafkaMeta->deserialize($param["UserKafkaMeta"]);
        }
    }
}
