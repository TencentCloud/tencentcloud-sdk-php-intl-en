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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Recent RocketMQ usage
 *
 * @method integer getTopicNum() Obtain Number of topics
 * @method void setTopicNum(integer $TopicNum) Set Number of topics
 * @method integer getProducedMsgNum() Obtain Number of produced messages
 * @method void setProducedMsgNum(integer $ProducedMsgNum) Set Number of produced messages
 * @method integer getConsumedMsgNum() Obtain Number of consumed messages
 * @method void setConsumedMsgNum(integer $ConsumedMsgNum) Set Number of consumed messages
 * @method integer getAccumulativeMsgNum() Obtain Number of retained messages
 * @method void setAccumulativeMsgNum(integer $AccumulativeMsgNum) Set Number of retained messages
 */
class RocketMQClusterRecentStats extends AbstractModel
{
    /**
     * @var integer Number of topics
     */
    public $TopicNum;

    /**
     * @var integer Number of produced messages
     */
    public $ProducedMsgNum;

    /**
     * @var integer Number of consumed messages
     */
    public $ConsumedMsgNum;

    /**
     * @var integer Number of retained messages
     */
    public $AccumulativeMsgNum;

    /**
     * @param integer $TopicNum Number of topics
     * @param integer $ProducedMsgNum Number of produced messages
     * @param integer $ConsumedMsgNum Number of consumed messages
     * @param integer $AccumulativeMsgNum Number of retained messages
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
        if (array_key_exists("TopicNum",$param) and $param["TopicNum"] !== null) {
            $this->TopicNum = $param["TopicNum"];
        }

        if (array_key_exists("ProducedMsgNum",$param) and $param["ProducedMsgNum"] !== null) {
            $this->ProducedMsgNum = $param["ProducedMsgNum"];
        }

        if (array_key_exists("ConsumedMsgNum",$param) and $param["ConsumedMsgNum"] !== null) {
            $this->ConsumedMsgNum = $param["ConsumedMsgNum"];
        }

        if (array_key_exists("AccumulativeMsgNum",$param) and $param["AccumulativeMsgNum"] !== null) {
            $this->AccumulativeMsgNum = $param["AccumulativeMsgNum"];
        }
    }
}
