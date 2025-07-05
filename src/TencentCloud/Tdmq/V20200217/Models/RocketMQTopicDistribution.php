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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TDMQ for RocketMQ topic distribution
 *
 * @method string getTopicType() Obtain Topic type
 * @method void setTopicType(string $TopicType) Set Topic type
 * @method integer getCount() Obtain Number of topics
 * @method void setCount(integer $Count) Set Number of topics
 */
class RocketMQTopicDistribution extends AbstractModel
{
    /**
     * @var string Topic type
     */
    public $TopicType;

    /**
     * @var integer Number of topics
     */
    public $Count;

    /**
     * @param string $TopicType Topic type
     * @param integer $Count Number of topics
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
        if (array_key_exists("TopicType",$param) and $param["TopicType"] !== null) {
            $this->TopicType = $param["TopicType"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
