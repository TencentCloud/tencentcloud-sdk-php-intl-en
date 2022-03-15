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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DLQ configuration of rule
 *
 * @method string getDisposeMethod() Obtain Three modes are supported: DLQ, drop, and ignore error, which correspond to `DLQ`, `DROP`, and `IGNORE_ERROR` respectively
 * @method void setDisposeMethod(string $DisposeMethod) Set Three modes are supported: DLQ, drop, and ignore error, which correspond to `DLQ`, `DROP`, and `IGNORE_ERROR` respectively
 * @method CkafkaDeliveryParams getCkafkaDeliveryParams() Obtain If the DLQ mode is set, this option is required. Error messages will be delivered to the corresponding Kafka topic
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCkafkaDeliveryParams(CkafkaDeliveryParams $CkafkaDeliveryParams) Set If the DLQ mode is set, this option is required. Error messages will be delivered to the corresponding Kafka topic
Note: this field may return null, indicating that no valid values can be obtained.
 */
class DeadLetterConfig extends AbstractModel
{
    /**
     * @var string Three modes are supported: DLQ, drop, and ignore error, which correspond to `DLQ`, `DROP`, and `IGNORE_ERROR` respectively
     */
    public $DisposeMethod;

    /**
     * @var CkafkaDeliveryParams If the DLQ mode is set, this option is required. Error messages will be delivered to the corresponding Kafka topic
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CkafkaDeliveryParams;

    /**
     * @param string $DisposeMethod Three modes are supported: DLQ, drop, and ignore error, which correspond to `DLQ`, `DROP`, and `IGNORE_ERROR` respectively
     * @param CkafkaDeliveryParams $CkafkaDeliveryParams If the DLQ mode is set, this option is required. Error messages will be delivered to the corresponding Kafka topic
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("DisposeMethod",$param) and $param["DisposeMethod"] !== null) {
            $this->DisposeMethod = $param["DisposeMethod"];
        }

        if (array_key_exists("CkafkaDeliveryParams",$param) and $param["CkafkaDeliveryParams"] !== null) {
            $this->CkafkaDeliveryParams = new CkafkaDeliveryParams();
            $this->CkafkaDeliveryParams->deserialize($param["CkafkaDeliveryParams"]);
        }
    }
}
