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
 * CVM and IP information.
 *
 * @method string getCkafkaInstanceId() Obtain The ckafka cluster instance Id.
 * @method void setCkafkaInstanceId(string $CkafkaInstanceId) Set The ckafka cluster instance Id.
 * @method string getInstanceId() Obtain CVM instance ID (ins-test) or POD IP (10.0.0.30).
 * @method void setInstanceId(string $InstanceId) Set CVM instance ID (ins-test) or POD IP (10.0.0.30).
 * @method string getIp() Obtain IP address.
 * @method void setIp(string $Ip) Set IP address.
 */
class CvmAndIpInfo extends AbstractModel
{
    /**
     * @var string The ckafka cluster instance Id.
     */
    public $CkafkaInstanceId;

    /**
     * @var string CVM instance ID (ins-test) or POD IP (10.0.0.30).
     */
    public $InstanceId;

    /**
     * @var string IP address.
     */
    public $Ip;

    /**
     * @param string $CkafkaInstanceId The ckafka cluster instance Id.
     * @param string $InstanceId CVM instance ID (ins-test) or POD IP (10.0.0.30).
     * @param string $Ip IP address.
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
        if (array_key_exists("CkafkaInstanceId",$param) and $param["CkafkaInstanceId"] !== null) {
            $this->CkafkaInstanceId = $param["CkafkaInstanceId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }
    }
}
