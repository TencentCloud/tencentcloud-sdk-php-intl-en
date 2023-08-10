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
 * DescribeRocketMQMsg request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getEnvironmentId() Obtain Namespace ID
 * @method void setEnvironmentId(string $EnvironmentId) Set Namespace ID
 * @method string getTopicName() Obtain Topic name. Pass in the group ID when querying a dead letter queue.
 * @method void setTopicName(string $TopicName) Set Topic name. Pass in the group ID when querying a dead letter queue.
 * @method string getMsgId() Obtain Message ID
 * @method void setMsgId(string $MsgId) Set Message ID
 * @method string getPulsarMsgId() Obtain ID of a TDMQ for Pulsar message
 * @method void setPulsarMsgId(string $PulsarMsgId) Set ID of a TDMQ for Pulsar message
 * @method boolean getQueryDlqMsg() Obtain The value of this parameter is `true` when you query a dead letter queue. It only applies to TDMQ for RocketMQ.
 * @method void setQueryDlqMsg(boolean $QueryDlqMsg) Set The value of this parameter is `true` when you query a dead letter queue. It only applies to TDMQ for RocketMQ.
 */
class DescribeRocketMQMsgRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Namespace ID
     */
    public $EnvironmentId;

    /**
     * @var string Topic name. Pass in the group ID when querying a dead letter queue.
     */
    public $TopicName;

    /**
     * @var string Message ID
     */
    public $MsgId;

    /**
     * @var string ID of a TDMQ for Pulsar message
     */
    public $PulsarMsgId;

    /**
     * @var boolean The value of this parameter is `true` when you query a dead letter queue. It only applies to TDMQ for RocketMQ.
     */
    public $QueryDlqMsg;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $EnvironmentId Namespace ID
     * @param string $TopicName Topic name. Pass in the group ID when querying a dead letter queue.
     * @param string $MsgId Message ID
     * @param string $PulsarMsgId ID of a TDMQ for Pulsar message
     * @param boolean $QueryDlqMsg The value of this parameter is `true` when you query a dead letter queue. It only applies to TDMQ for RocketMQ.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("PulsarMsgId",$param) and $param["PulsarMsgId"] !== null) {
            $this->PulsarMsgId = $param["PulsarMsgId"];
        }

        if (array_key_exists("QueryDlqMsg",$param) and $param["QueryDlqMsg"] !== null) {
            $this->QueryDlqMsg = $param["QueryDlqMsg"];
        }
    }
}
