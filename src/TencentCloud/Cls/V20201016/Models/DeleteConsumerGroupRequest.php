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
 * DeleteConsumerGroup request structure.
 *
 * @method string getConsumerGroup() Obtain Consumer group flag to be deleted.
 * @method void setConsumerGroup(string $ConsumerGroup) Set Consumer group flag to be deleted.
 * @method string getLogsetId() Obtain Logset id
 * @method void setLogsetId(string $LogsetId) Set Logset id
 */
class DeleteConsumerGroupRequest extends AbstractModel
{
    /**
     * @var string Consumer group flag to be deleted.
     */
    public $ConsumerGroup;

    /**
     * @var string Logset id
     */
    public $LogsetId;

    /**
     * @param string $ConsumerGroup Consumer group flag to be deleted.
     * @param string $LogsetId Logset id
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
        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }
    }
}
