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
 * ExportRocketMQMessageDetail request structure.
 *
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method string getEnvironmentId() Obtain Application namespace.
 * @method void setEnvironmentId(string $EnvironmentId) Set Application namespace.
 * @method string getTopicName() Obtain Topic name.
If it is a dead letter message, isDlqMsg=true.
 * @method void setTopicName(string $TopicName) Set Topic name.
If it is a dead letter message, isDlqMsg=true.
 * @method string getMsgId() Obtain Message ID
 * @method void setMsgId(string $MsgId) Set Message ID
 * @method boolean getIncludeMsgBody() Obtain Whether to Includes Message Body
 * @method void setIncludeMsgBody(boolean $IncludeMsgBody) Set Whether to Includes Message Body
 * @method boolean getDeadLetterMsg() Obtain Whether It a Dead Letter Message
 * @method void setDeadLetterMsg(boolean $DeadLetterMsg) Set Whether It a Dead Letter Message
 */
class ExportRocketMQMessageDetailRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $ClusterId;

    /**
     * @var string Application namespace.
     */
    public $EnvironmentId;

    /**
     * @var string Topic name.
If it is a dead letter message, isDlqMsg=true.
     */
    public $TopicName;

    /**
     * @var string Message ID
     */
    public $MsgId;

    /**
     * @var boolean Whether to Includes Message Body
     */
    public $IncludeMsgBody;

    /**
     * @var boolean Whether It a Dead Letter Message
     */
    public $DeadLetterMsg;

    /**
     * @param string $ClusterId Cluster ID.
     * @param string $EnvironmentId Application namespace.
     * @param string $TopicName Topic name.
If it is a dead letter message, isDlqMsg=true.
     * @param string $MsgId Message ID
     * @param boolean $IncludeMsgBody Whether to Includes Message Body
     * @param boolean $DeadLetterMsg Whether It a Dead Letter Message
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

        if (array_key_exists("IncludeMsgBody",$param) and $param["IncludeMsgBody"] !== null) {
            $this->IncludeMsgBody = $param["IncludeMsgBody"];
        }

        if (array_key_exists("DeadLetterMsg",$param) and $param["DeadLetterMsg"] !== null) {
            $this->DeadLetterMsg = $param["DeadLetterMsg"];
        }
    }
}
