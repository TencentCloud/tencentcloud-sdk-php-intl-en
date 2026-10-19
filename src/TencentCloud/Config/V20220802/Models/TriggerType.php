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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule supports trigger type
 *
 * @method string getMessageType() Obtain Trigger Type
 * @method void setMessageType(string $MessageType) Set Trigger Type
 * @method string getMaximumExecutionFrequency() Obtain Triggering time period.
 * @method void setMaximumExecutionFrequency(string $MaximumExecutionFrequency) Set Triggering time period.
 */
class TriggerType extends AbstractModel
{
    /**
     * @var string Trigger Type
     */
    public $MessageType;

    /**
     * @var string Triggering time period.
     */
    public $MaximumExecutionFrequency;

    /**
     * @param string $MessageType Trigger Type
     * @param string $MaximumExecutionFrequency Triggering time period.
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
        if (array_key_exists("MessageType",$param) and $param["MessageType"] !== null) {
            $this->MessageType = $param["MessageType"];
        }

        if (array_key_exists("MaximumExecutionFrequency",$param) and $param["MaximumExecutionFrequency"] !== null) {
            $this->MaximumExecutionFrequency = $param["MaximumExecutionFrequency"];
        }
    }
}
