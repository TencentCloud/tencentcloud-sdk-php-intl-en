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
 * CheckRechargeKafkaServer request structure.
 *
 * @method integer getKafkaType() Obtain Kafka type. Valid values: 0 (Tencent Cloud CKafka) and 1 (customer's Kafka).
 * @method void setKafkaType(integer $KafkaType) Set Kafka type. Valid values: 0 (Tencent Cloud CKafka) and 1 (customer's Kafka).
 * @method string getKafkaInstance() Obtain Tencent Cloud CKafka Instance IDWhen KafkaType is 0, KafkaInstance is required
 * @method void setKafkaInstance(string $KafkaInstance) Set Tencent Cloud CKafka Instance IDWhen KafkaType is 0, KafkaInstance is required
 * @method string getServerAddr() Obtain Service AddressWhen KafkaType is 1, ServerAddr is required
 * @method void setServerAddr(string $ServerAddr) Set Service AddressWhen KafkaType is 1, ServerAddr is required
 * @method boolean getIsEncryptionAddr() Obtain Whether the service address uses an encrypted connection
 * @method void setIsEncryptionAddr(boolean $IsEncryptionAddr) Set Whether the service address uses an encrypted connection
 * @method KafkaProtocolInfo getProtocol() Obtain Encryption access protocol. Required when IsEncryptionAddr parameter is set to true
 * @method void setProtocol(KafkaProtocolInfo $Protocol) Set Encryption access protocol. Required when IsEncryptionAddr parameter is set to true
 */
class CheckRechargeKafkaServerRequest extends AbstractModel
{
    /**
     * @var integer Kafka type. Valid values: 0 (Tencent Cloud CKafka) and 1 (customer's Kafka).
     */
    public $KafkaType;

    /**
     * @var string Tencent Cloud CKafka Instance IDWhen KafkaType is 0, KafkaInstance is required
     */
    public $KafkaInstance;

    /**
     * @var string Service AddressWhen KafkaType is 1, ServerAddr is required
     */
    public $ServerAddr;

    /**
     * @var boolean Whether the service address uses an encrypted connection
     */
    public $IsEncryptionAddr;

    /**
     * @var KafkaProtocolInfo Encryption access protocol. Required when IsEncryptionAddr parameter is set to true
     */
    public $Protocol;

    /**
     * @param integer $KafkaType Kafka type. Valid values: 0 (Tencent Cloud CKafka) and 1 (customer's Kafka).
     * @param string $KafkaInstance Tencent Cloud CKafka Instance IDWhen KafkaType is 0, KafkaInstance is required
     * @param string $ServerAddr Service AddressWhen KafkaType is 1, ServerAddr is required
     * @param boolean $IsEncryptionAddr Whether the service address uses an encrypted connection
     * @param KafkaProtocolInfo $Protocol Encryption access protocol. Required when IsEncryptionAddr parameter is set to true
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
    }
}
