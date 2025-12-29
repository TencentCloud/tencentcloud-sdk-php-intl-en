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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of the latest version information.
 *
 * @method string getKafkaVersion() Obtain CKafka cluster instance version.
 * @method void setKafkaVersion(string $KafkaVersion) Set CKafka cluster instance version.
 * @method string getBrokerVersion() Obtain Broker version number.
 * @method void setBrokerVersion(string $BrokerVersion) Set Broker version number.
 */
class LatestBrokerVersion extends AbstractModel
{
    /**
     * @var string CKafka cluster instance version.
     */
    public $KafkaVersion;

    /**
     * @var string Broker version number.
     */
    public $BrokerVersion;

    /**
     * @param string $KafkaVersion CKafka cluster instance version.
     * @param string $BrokerVersion Broker version number.
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
        if (array_key_exists("KafkaVersion",$param) and $param["KafkaVersion"] !== null) {
            $this->KafkaVersion = $param["KafkaVersion"];
        }

        if (array_key_exists("BrokerVersion",$param) and $param["BrokerVersion"] !== null) {
            $this->BrokerVersion = $param["BrokerVersion"];
        }
    }
}
