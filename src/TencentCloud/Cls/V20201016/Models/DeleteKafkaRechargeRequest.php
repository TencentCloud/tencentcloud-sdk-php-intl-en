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
 * DeleteKafkaRecharge request structure.
 *
 * @method string getId() Obtain Kafka data import configuration ID
 * @method void setId(string $Id) Set Kafka data import configuration ID
 * @method string getTopicId() Obtain Target CLS log topic ID
 * @method void setTopicId(string $TopicId) Set Target CLS log topic ID
 */
class DeleteKafkaRechargeRequest extends AbstractModel
{
    /**
     * @var string Kafka data import configuration ID
     */
    public $Id;

    /**
     * @var string Target CLS log topic ID
     */
    public $TopicId;

    /**
     * @param string $Id Kafka data import configuration ID
     * @param string $TopicId Target CLS log topic ID
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
    }
}
