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
 * DescribeRocketMQMsgTrace request structure.
 *
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method string getEnvironmentId() Obtain Namespace
 * @method void setEnvironmentId(string $EnvironmentId) Set Namespace
 * @method string getTopicName() Obtain Topic. When the system queries RocketMQ dead letters, the value is groupId.
 * @method void setTopicName(string $TopicName) Set Topic. When the system queries RocketMQ dead letters, the value is groupId.
 * @method string getMsgId() Obtain Message ID
 * @method void setMsgId(string $MsgId) Set Message ID
 * @method string getGroupName() Obtain Consumer Group and Subscription
 * @method void setGroupName(string $GroupName) Set Consumer Group and Subscription
 * @method boolean getQueryDLQMsg() Obtain The value is true when querying dead letters.
 * @method void setQueryDLQMsg(boolean $QueryDLQMsg) Set The value is true when querying dead letters.
 * @method string getQueryDeadLetterMessage() Obtain The value is true when querying dead letters.
 * @method void setQueryDeadLetterMessage(string $QueryDeadLetterMessage) Set The value is true when querying dead letters.
 */
class DescribeRocketMQMsgTraceRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $ClusterId;

    /**
     * @var string Namespace
     */
    public $EnvironmentId;

    /**
     * @var string Topic. When the system queries RocketMQ dead letters, the value is groupId.
     */
    public $TopicName;

    /**
     * @var string Message ID
     */
    public $MsgId;

    /**
     * @var string Consumer Group and Subscription
     */
    public $GroupName;

    /**
     * @var boolean The value is true when querying dead letters.
     * @deprecated
     */
    public $QueryDLQMsg;

    /**
     * @var string The value is true when querying dead letters.
     */
    public $QueryDeadLetterMessage;

    /**
     * @param string $ClusterId Cluster ID.
     * @param string $EnvironmentId Namespace
     * @param string $TopicName Topic. When the system queries RocketMQ dead letters, the value is groupId.
     * @param string $MsgId Message ID
     * @param string $GroupName Consumer Group and Subscription
     * @param boolean $QueryDLQMsg The value is true when querying dead letters.
     * @param string $QueryDeadLetterMessage The value is true when querying dead letters.
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

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("QueryDLQMsg",$param) and $param["QueryDLQMsg"] !== null) {
            $this->QueryDLQMsg = $param["QueryDLQMsg"];
        }

        if (array_key_exists("QueryDeadLetterMessage",$param) and $param["QueryDeadLetterMessage"] !== null) {
            $this->QueryDeadLetterMessage = $param["QueryDeadLetterMessage"];
        }
    }
}
