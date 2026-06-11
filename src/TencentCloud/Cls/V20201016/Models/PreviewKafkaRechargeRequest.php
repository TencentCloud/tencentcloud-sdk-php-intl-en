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
 * PreviewKafkaRecharge request structure.
 *
 * @method integer getPreviewType() Obtain Preview type. 1: preview of source data; 2: preview of exported results.
 * @method void setPreviewType(integer $PreviewType) Set Preview type. 1: preview of source data; 2: preview of exported results.
 * @method integer getKafkaType() Obtain Import Kafka type. 0: Tencent Cloud CKafka; 1: user-built kafka.
 * @method void setKafkaType(integer $KafkaType) Set Import Kafka type. 0: Tencent Cloud CKafka; 1: user-built kafka.
 * @method string getUserKafkaTopics() Obtain List of Kafka-related topics to be imported by the user, topics separated by commas.
Supports up to 100.
 * @method void setUserKafkaTopics(string $UserKafkaTopics) Set List of Kafka-related topics to be imported by the user, topics separated by commas.
Supports up to 100.
 * @method integer getOffset() Obtain Import data location. -2: earliest; -1: latest.
 * @method void setOffset(integer $Offset) Set Import data location. -2: earliest; -1: latest.
 * @method string getKafkaInstance() Obtain Tencent Cloud CKafka instance ID. The parameter KafkaInstance is valid and required when KafkaType is 0.
-Get the instance id through [Get Instance List](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
 * @method void setKafkaInstance(string $KafkaInstance) Set Tencent Cloud CKafka instance ID. The parameter KafkaInstance is valid and required when KafkaType is 0.
-Get the instance id through [Get Instance List](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
 * @method string getServerAddr() Obtain Service address.
When KafkaType is 1, ServerAddr is required.
 * @method void setServerAddr(string $ServerAddr) Set Service address.
When KafkaType is 1, ServerAddr is required.
 * @method boolean getIsEncryptionAddr() Obtain Whether ServerAddr is a secure connection.
Valid when KafkaType is 1.
 * @method void setIsEncryptionAddr(boolean $IsEncryptionAddr) Set Whether ServerAddr is a secure connection.
Valid when KafkaType is 1.
 * @method KafkaProtocolInfo getProtocol() Obtain Encrypted Access Protocol.
When KafkaType is 1 and IsEncryptionAddr is true, Protocol is required.
 * @method void setProtocol(KafkaProtocolInfo $Protocol) Set Encrypted Access Protocol.
When KafkaType is 1 and IsEncryptionAddr is true, Protocol is required.
 * @method string getConsumerGroupName() Obtain User Kafka consumer group.

-A consumption group is a scalable and fault-tolerant consumer mechanism provided by Kafka. Multiple consumers exist in a consumption group, and all consumers in the group consume subscribed data of messages in the Topic. A consumer can consume multiple partitions simultaneously, but one Partition can only be consumed by a single consumer in the group.
 * @method void setConsumerGroupName(string $ConsumerGroupName) Set User Kafka consumer group.

-A consumption group is a scalable and fault-tolerant consumer mechanism provided by Kafka. Multiple consumers exist in a consumption group, and all consumers in the group consume subscribed data of messages in the Topic. A consumer can consume multiple partitions simultaneously, but one Partition can only be consumed by a single consumer in the group.
 * @method LogRechargeRuleInfo getLogRechargeRule() Obtain Log import rule
 * @method void setLogRechargeRule(LogRechargeRuleInfo $LogRechargeRule) Set Log import rule
 * @method UserKafkaMeta getUserKafkaMeta() Obtain User kafka extended information
 * @method void setUserKafkaMeta(UserKafkaMeta $UserKafkaMeta) Set User kafka extended information
 */
class PreviewKafkaRechargeRequest extends AbstractModel
{
    /**
     * @var integer Preview type. 1: preview of source data; 2: preview of exported results.
     */
    public $PreviewType;

    /**
     * @var integer Import Kafka type. 0: Tencent Cloud CKafka; 1: user-built kafka.
     */
    public $KafkaType;

    /**
     * @var string List of Kafka-related topics to be imported by the user, topics separated by commas.
Supports up to 100.
     */
    public $UserKafkaTopics;

    /**
     * @var integer Import data location. -2: earliest; -1: latest.
     */
    public $Offset;

    /**
     * @var string Tencent Cloud CKafka instance ID. The parameter KafkaInstance is valid and required when KafkaType is 0.
-Get the instance id through [Get Instance List](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
     */
    public $KafkaInstance;

    /**
     * @var string Service address.
When KafkaType is 1, ServerAddr is required.
     */
    public $ServerAddr;

    /**
     * @var boolean Whether ServerAddr is a secure connection.
Valid when KafkaType is 1.
     */
    public $IsEncryptionAddr;

    /**
     * @var KafkaProtocolInfo Encrypted Access Protocol.
When KafkaType is 1 and IsEncryptionAddr is true, Protocol is required.
     */
    public $Protocol;

    /**
     * @var string User Kafka consumer group.

-A consumption group is a scalable and fault-tolerant consumer mechanism provided by Kafka. Multiple consumers exist in a consumption group, and all consumers in the group consume subscribed data of messages in the Topic. A consumer can consume multiple partitions simultaneously, but one Partition can only be consumed by a single consumer in the group.
     */
    public $ConsumerGroupName;

    /**
     * @var LogRechargeRuleInfo Log import rule
     */
    public $LogRechargeRule;

    /**
     * @var UserKafkaMeta User kafka extended information
     */
    public $UserKafkaMeta;

    /**
     * @param integer $PreviewType Preview type. 1: preview of source data; 2: preview of exported results.
     * @param integer $KafkaType Import Kafka type. 0: Tencent Cloud CKafka; 1: user-built kafka.
     * @param string $UserKafkaTopics List of Kafka-related topics to be imported by the user, topics separated by commas.
Supports up to 100.
     * @param integer $Offset Import data location. -2: earliest; -1: latest.
     * @param string $KafkaInstance Tencent Cloud CKafka instance ID. The parameter KafkaInstance is valid and required when KafkaType is 0.
-Get the instance id through [Get Instance List](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
     * @param string $ServerAddr Service address.
When KafkaType is 1, ServerAddr is required.
     * @param boolean $IsEncryptionAddr Whether ServerAddr is a secure connection.
Valid when KafkaType is 1.
     * @param KafkaProtocolInfo $Protocol Encrypted Access Protocol.
When KafkaType is 1 and IsEncryptionAddr is true, Protocol is required.
     * @param string $ConsumerGroupName User Kafka consumer group.

-A consumption group is a scalable and fault-tolerant consumer mechanism provided by Kafka. Multiple consumers exist in a consumption group, and all consumers in the group consume subscribed data of messages in the Topic. A consumer can consume multiple partitions simultaneously, but one Partition can only be consumed by a single consumer in the group.
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
        if (array_key_exists("PreviewType",$param) and $param["PreviewType"] !== null) {
            $this->PreviewType = $param["PreviewType"];
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
