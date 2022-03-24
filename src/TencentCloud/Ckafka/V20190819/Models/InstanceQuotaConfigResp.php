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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Traffic throttling policy in instance/topic dimension
 *
 * @method integer getQuotaProducerByteRate() Obtain Production throttling in MB/sec.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setQuotaProducerByteRate(integer $QuotaProducerByteRate) Set Production throttling in MB/sec.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getQuotaConsumerByteRate() Obtain Consumption throttling in MB/sec.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setQuotaConsumerByteRate(integer $QuotaConsumerByteRate) Set Consumption throttling in MB/sec.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class InstanceQuotaConfigResp extends AbstractModel
{
    /**
     * @var integer Production throttling in MB/sec.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $QuotaProducerByteRate;

    /**
     * @var integer Consumption throttling in MB/sec.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $QuotaConsumerByteRate;

    /**
     * @param integer $QuotaProducerByteRate Production throttling in MB/sec.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $QuotaConsumerByteRate Consumption throttling in MB/sec.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("QuotaProducerByteRate",$param) and $param["QuotaProducerByteRate"] !== null) {
            $this->QuotaProducerByteRate = $param["QuotaProducerByteRate"];
        }

        if (array_key_exists("QuotaConsumerByteRate",$param) and $param["QuotaConsumerByteRate"] !== null) {
            $this->QuotaConsumerByteRate = $param["QuotaConsumerByteRate"];
        }
    }
}
