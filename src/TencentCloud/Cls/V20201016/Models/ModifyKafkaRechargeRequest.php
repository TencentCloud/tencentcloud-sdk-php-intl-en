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
 * ModifyKafkaRecharge request structure.
 *
 * @method string getId() Obtain Import configuration Id.
-Create a Kafka Data Subscription Task (https://www.tencentcloud.com/document/product/614/94448?from_cn_redirect=1) to obtain the Kafka import configuration Id.
-Get the Kafka import configuration Id by searching the [Kafka Data Subscription Task list](https://www.tencentcloud.com/document/product/614/94446?from_cn_redirect=1).
 * @method void setId(string $Id) Set Import configuration Id.
-Create a Kafka Data Subscription Task (https://www.tencentcloud.com/document/product/614/94448?from_cn_redirect=1) to obtain the Kafka import configuration Id.
-Get the Kafka import configuration Id by searching the [Kafka Data Subscription Task list](https://www.tencentcloud.com/document/product/614/94446?from_cn_redirect=1).
 * @method string getTopicId() Obtain Import the target topic ID of CLS.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
 * @method void setTopicId(string $TopicId) Set Import the target topic ID of CLS.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
 * @method string getName() Obtain Kafka data import configuration name
 * @method void setName(string $Name) Set Kafka data import configuration name
 * @method integer getKafkaType() Obtain Import Kafka type. 0: Tencent Cloud CKafka; 1: user-built kafka.
 * @method void setKafkaType(integer $KafkaType) Set Import Kafka type. 0: Tencent Cloud CKafka; 1: user-built kafka.
 * @method string getKafkaInstance() Obtain Tencent Cloud CKafka instance ID. Required when KafkaType is 0.
- Obtain the instance id by searching the instance list information (https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
 * @method void setKafkaInstance(string $KafkaInstance) Set Tencent Cloud CKafka instance ID. Required when KafkaType is 0.
- Obtain the instance id by searching the instance list information (https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
 * @method string getServerAddr() Obtain Service address, which is required when KafkaType is 1.
 * @method void setServerAddr(string $ServerAddr) Set Service address, which is required when KafkaType is 1.
 * @method boolean getIsEncryptionAddr() Obtain Whether ServerAddr is an encrypted connection. Required when KafkaType is 1.
 * @method void setIsEncryptionAddr(boolean $IsEncryptionAddr) Set Whether ServerAddr is an encrypted connection. Required when KafkaType is 1.
 * @method KafkaProtocolInfo getProtocol() Obtain Encrypted access protocol. It is required when the parameter KafkaType is 1 and the parameter IsEncryptionAddr is true.
 * @method void setProtocol(KafkaProtocolInfo $Protocol) Set Encrypted access protocol. It is required when the parameter KafkaType is 1 and the parameter IsEncryptionAddr is true.
 * @method string getUserKafkaTopics() Obtain List of Kafka-related topics to be imported by the user, separated by commas.

-When Kafka Type is Tencent Cloud CKafka: Get TopicName by searching the topic list (https://www.tencentcloud.com/document/product/597/40847?from_cn_redirect=1).
 * @method void setUserKafkaTopics(string $UserKafkaTopics) Set List of Kafka-related topics to be imported by the user, separated by commas.

-When Kafka Type is Tencent Cloud CKafka: Get TopicName by searching the topic list (https://www.tencentcloud.com/document/product/597/40847?from_cn_redirect=1).
 * @method string getConsumerGroupName() Obtain Kafka consumer group name
 * @method void setConsumerGroupName(string $ConsumerGroupName) Set Kafka consumer group name
 * @method LogRechargeRuleInfo getLogRechargeRule() Obtain Log import rule
 * @method void setLogRechargeRule(LogRechargeRuleInfo $LogRechargeRule) Set Log import rule
 * @method integer getStatusControl() Obtain Import control, 1: suspend; 2: start.
 * @method void setStatusControl(integer $StatusControl) Set Import control, 1: suspend; 2: start.
 * @method UserKafkaMeta getUserKafkaMeta() Obtain User kafka extended information
 * @method void setUserKafkaMeta(UserKafkaMeta $UserKafkaMeta) Set User kafka extended information
 */
class ModifyKafkaRechargeRequest extends AbstractModel
{
    /**
     * @var string Import configuration Id.
-Create a Kafka Data Subscription Task (https://www.tencentcloud.com/document/product/614/94448?from_cn_redirect=1) to obtain the Kafka import configuration Id.
-Get the Kafka import configuration Id by searching the [Kafka Data Subscription Task list](https://www.tencentcloud.com/document/product/614/94446?from_cn_redirect=1).
     */
    public $Id;

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
     * @var integer Import Kafka type. 0: Tencent Cloud CKafka; 1: user-built kafka.
     */
    public $KafkaType;

    /**
     * @var string Tencent Cloud CKafka instance ID. Required when KafkaType is 0.
- Obtain the instance id by searching the instance list information (https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
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
     * @var KafkaProtocolInfo Encrypted access protocol. It is required when the parameter KafkaType is 1 and the parameter IsEncryptionAddr is true.
     */
    public $Protocol;

    /**
     * @var string List of Kafka-related topics to be imported by the user, separated by commas.

-When Kafka Type is Tencent Cloud CKafka: Get TopicName by searching the topic list (https://www.tencentcloud.com/document/product/597/40847?from_cn_redirect=1).
     */
    public $UserKafkaTopics;

    /**
     * @var string Kafka consumer group name
     */
    public $ConsumerGroupName;

    /**
     * @var LogRechargeRuleInfo Log import rule
     */
    public $LogRechargeRule;

    /**
     * @var integer Import control, 1: suspend; 2: start.
     */
    public $StatusControl;

    /**
     * @var UserKafkaMeta User kafka extended information
     */
    public $UserKafkaMeta;

    /**
     * @param string $Id Import configuration Id.
-Create a Kafka Data Subscription Task (https://www.tencentcloud.com/document/product/614/94448?from_cn_redirect=1) to obtain the Kafka import configuration Id.
-Get the Kafka import configuration Id by searching the [Kafka Data Subscription Task list](https://www.tencentcloud.com/document/product/614/94446?from_cn_redirect=1).
     * @param string $TopicId Import the target topic ID of CLS.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
     * @param string $Name Kafka data import configuration name
     * @param integer $KafkaType Import Kafka type. 0: Tencent Cloud CKafka; 1: user-built kafka.
     * @param string $KafkaInstance Tencent Cloud CKafka instance ID. Required when KafkaType is 0.
- Obtain the instance id by searching the instance list information (https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
     * @param string $ServerAddr Service address, which is required when KafkaType is 1.
     * @param boolean $IsEncryptionAddr Whether ServerAddr is an encrypted connection. Required when KafkaType is 1.
     * @param KafkaProtocolInfo $Protocol Encrypted access protocol. It is required when the parameter KafkaType is 1 and the parameter IsEncryptionAddr is true.
     * @param string $UserKafkaTopics List of Kafka-related topics to be imported by the user, separated by commas.

-When Kafka Type is Tencent Cloud CKafka: Get TopicName by searching the topic list (https://www.tencentcloud.com/document/product/597/40847?from_cn_redirect=1).
     * @param string $ConsumerGroupName Kafka consumer group name
     * @param LogRechargeRuleInfo $LogRechargeRule Log import rule
     * @param integer $StatusControl Import control, 1: suspend; 2: start.
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

        if (array_key_exists("LogRechargeRule",$param) and $param["LogRechargeRule"] !== null) {
            $this->LogRechargeRule = new LogRechargeRuleInfo();
            $this->LogRechargeRule->deserialize($param["LogRechargeRule"]);
        }

        if (array_key_exists("StatusControl",$param) and $param["StatusControl"] !== null) {
            $this->StatusControl = $param["StatusControl"];
        }

        if (array_key_exists("UserKafkaMeta",$param) and $param["UserKafkaMeta"] !== null) {
            $this->UserKafkaMeta = new UserKafkaMeta();
            $this->UserKafkaMeta->deserialize($param["UserKafkaMeta"]);
        }
    }
}
