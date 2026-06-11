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
 * Advanced configuration for CKafka shipping.
 *
 * @method boolean getPartitionHashStatus() Obtain Kafka partition hash status. Default false.

-true: Enable sending messages with equal field Hash values to the same Kafka partition.
-false: Disable sending messages with equivalent field Hash values to the same kafka partition.
 * @method void setPartitionHashStatus(boolean $PartitionHashStatus) Set Kafka partition hash status. Default false.

-true: Enable sending messages with equal field Hash values to the same Kafka partition.
-false: Disable sending messages with equivalent field Hash values to the same kafka partition.
 * @method array getPartitionFields() Obtain Field list to calculate hash. Supports a maximum of 5 fields.
 * @method void setPartitionFields(array $PartitionFields) Set Field list to calculate hash. Supports a maximum of 5 fields.
 */
class AdvancedConsumerConfiguration extends AbstractModel
{
    /**
     * @var boolean Kafka partition hash status. Default false.

-true: Enable sending messages with equal field Hash values to the same Kafka partition.
-false: Disable sending messages with equivalent field Hash values to the same kafka partition.
     */
    public $PartitionHashStatus;

    /**
     * @var array Field list to calculate hash. Supports a maximum of 5 fields.
     */
    public $PartitionFields;

    /**
     * @param boolean $PartitionHashStatus Kafka partition hash status. Default false.

-true: Enable sending messages with equal field Hash values to the same Kafka partition.
-false: Disable sending messages with equivalent field Hash values to the same kafka partition.
     * @param array $PartitionFields Field list to calculate hash. Supports a maximum of 5 fields.
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
        if (array_key_exists("PartitionHashStatus",$param) and $param["PartitionHashStatus"] !== null) {
            $this->PartitionHashStatus = $param["PartitionHashStatus"];
        }

        if (array_key_exists("PartitionFields",$param) and $param["PartitionFields"] !== null) {
            $this->PartitionFields = $param["PartitionFields"];
        }
    }
}
