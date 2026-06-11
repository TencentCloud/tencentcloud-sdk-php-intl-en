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
 * CheckRechargeKafkaServer request structure.
 *
 * @method integer getKafkaType() Obtain Import Kafka type. 0: Tencent Cloud CKafka; 1: user-built kafka.
 * @method void setKafkaType(integer $KafkaType) Set Import Kafka type. 0: Tencent Cloud CKafka; 1: user-built kafka.
 * @method string getKafkaInstance() Obtain Tencent Cloud CKafka instance ID.
When KafkaType is 0, KafkaInstance is required

- Obtain the instance id by searching the instance list information (https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
 * @method void setKafkaInstance(string $KafkaInstance) Set Tencent Cloud CKafka instance ID.
When KafkaType is 0, KafkaInstance is required

- Obtain the instance id by searching the instance list information (https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
 * @method string getServerAddr() Obtain Service AddressWhen KafkaType is 1, ServerAddr is required
 * @method void setServerAddr(string $ServerAddr) Set Service AddressWhen KafkaType is 1, ServerAddr is required
 * @method boolean getIsEncryptionAddr() Obtain Whether ServerAddr is an encrypted connection. The default value is false. It is valid when KafkaType is 1, indicating a user self-built Kafka.
 * @method void setIsEncryptionAddr(boolean $IsEncryptionAddr) Set Whether ServerAddr is an encrypted connection. The default value is false. It is valid when KafkaType is 1, indicating a user self-built Kafka.
 * @method KafkaProtocolInfo getProtocol() Obtain Encrypted access protocol. It is required when the parameter KafkaType is 1 and the parameter IsEncryptionAddr is true.
 * @method void setProtocol(KafkaProtocolInfo $Protocol) Set Encrypted access protocol. It is required when the parameter KafkaType is 1 and the parameter IsEncryptionAddr is true.
 * @method UserKafkaMeta getUserKafkaMeta() Obtain User kafka extended information
 * @method void setUserKafkaMeta(UserKafkaMeta $UserKafkaMeta) Set User kafka extended information
 */
class CheckRechargeKafkaServerRequest extends AbstractModel
{
    /**
     * @var integer Import Kafka type. 0: Tencent Cloud CKafka; 1: user-built kafka.
     */
    public $KafkaType;

    /**
     * @var string Tencent Cloud CKafka instance ID.
When KafkaType is 0, KafkaInstance is required

- Obtain the instance id by searching the instance list information (https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
     */
    public $KafkaInstance;

    /**
     * @var string Service AddressWhen KafkaType is 1, ServerAddr is required
     */
    public $ServerAddr;

    /**
     * @var boolean Whether ServerAddr is an encrypted connection. The default value is false. It is valid when KafkaType is 1, indicating a user self-built Kafka.
     */
    public $IsEncryptionAddr;

    /**
     * @var KafkaProtocolInfo Encrypted access protocol. It is required when the parameter KafkaType is 1 and the parameter IsEncryptionAddr is true.
     */
    public $Protocol;

    /**
     * @var UserKafkaMeta User kafka extended information
     */
    public $UserKafkaMeta;

    /**
     * @param integer $KafkaType Import Kafka type. 0: Tencent Cloud CKafka; 1: user-built kafka.
     * @param string $KafkaInstance Tencent Cloud CKafka instance ID.
When KafkaType is 0, KafkaInstance is required

- Obtain the instance id by searching the instance list information (https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
     * @param string $ServerAddr Service AddressWhen KafkaType is 1, ServerAddr is required
     * @param boolean $IsEncryptionAddr Whether ServerAddr is an encrypted connection. The default value is false. It is valid when KafkaType is 1, indicating a user self-built Kafka.
     * @param KafkaProtocolInfo $Protocol Encrypted access protocol. It is required when the parameter KafkaType is 1 and the parameter IsEncryptionAddr is true.
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

        if (array_key_exists("UserKafkaMeta",$param) and $param["UserKafkaMeta"] !== null) {
            $this->UserKafkaMeta = new UserKafkaMeta();
            $this->UserKafkaMeta->deserialize($param["UserKafkaMeta"]);
        }
    }
}
