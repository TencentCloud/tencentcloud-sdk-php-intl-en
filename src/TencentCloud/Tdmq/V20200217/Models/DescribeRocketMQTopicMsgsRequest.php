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
 * DescribeRocketMQTopicMsgs request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getEnvironmentId() Obtain Namespace
 * @method void setEnvironmentId(string $EnvironmentId) Set Namespace
 * @method string getTopicName() Obtain Topic name, which is groupId when the system queries dead letters.
 * @method void setTopicName(string $TopicName) Set Topic name, which is groupId when the system queries dead letters.
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain End time.
 * @method void setEndTime(string $EndTime) Set End time.
 * @method string getMsgId() Obtain Message ID.
 * @method void setMsgId(string $MsgId) Set Message ID.
 * @method string getMsgKey() Obtain Message key
 * @method void setMsgKey(string $MsgKey) Set Message key
 * @method integer getOffset() Obtain Query Offset
 * @method void setOffset(integer $Offset) Set Query Offset
 * @method integer getLimit() Obtain Query Quotas
 * @method void setLimit(integer $Limit) Set Query Quotas
 * @method string getTaskRequestId() Obtain Mark a pagination transaction.
 * @method void setTaskRequestId(string $TaskRequestId) Set Mark a pagination transaction.
 * @method boolean getQueryDlqMsg() Obtain This value is true when the system queries dead letters, and is only valid for RocketMQ.
 * @method void setQueryDlqMsg(boolean $QueryDlqMsg) Set This value is true when the system queries dead letters, and is only valid for RocketMQ.
 * @method integer getNumOfLatestMsg() Obtain Query the last N messages. The value of N cannot exceed 1024. By default, -1 indicates other query conditions.
 * @method void setNumOfLatestMsg(integer $NumOfLatestMsg) Set Query the last N messages. The value of N cannot exceed 1024. By default, -1 indicates other query conditions.
 * @method string getTag() Obtain Tag expression.
 * @method void setTag(string $Tag) Set Tag expression.
 * @method boolean getQueryDeadLetterMessage() Obtain This value is true when the system queries dead letters, and is only valid for RocketMQ.
 * @method void setQueryDeadLetterMessage(boolean $QueryDeadLetterMessage) Set This value is true when the system queries dead letters, and is only valid for RocketMQ.
 */
class DescribeRocketMQTopicMsgsRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Namespace
     */
    public $EnvironmentId;

    /**
     * @var string Topic name, which is groupId when the system queries dead letters.
     */
    public $TopicName;

    /**
     * @var string Start time.
     */
    public $StartTime;

    /**
     * @var string End time.
     */
    public $EndTime;

    /**
     * @var string Message ID.
     */
    public $MsgId;

    /**
     * @var string Message key
     */
    public $MsgKey;

    /**
     * @var integer Query Offset
     */
    public $Offset;

    /**
     * @var integer Query Quotas
     */
    public $Limit;

    /**
     * @var string Mark a pagination transaction.
     */
    public $TaskRequestId;

    /**
     * @var boolean This value is true when the system queries dead letters, and is only valid for RocketMQ.
     * @deprecated
     */
    public $QueryDlqMsg;

    /**
     * @var integer Query the last N messages. The value of N cannot exceed 1024. By default, -1 indicates other query conditions.
     */
    public $NumOfLatestMsg;

    /**
     * @var string Tag expression.
     */
    public $Tag;

    /**
     * @var boolean This value is true when the system queries dead letters, and is only valid for RocketMQ.
     */
    public $QueryDeadLetterMessage;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $EnvironmentId Namespace
     * @param string $TopicName Topic name, which is groupId when the system queries dead letters.
     * @param string $StartTime Start time.
     * @param string $EndTime End time.
     * @param string $MsgId Message ID.
     * @param string $MsgKey Message key
     * @param integer $Offset Query Offset
     * @param integer $Limit Query Quotas
     * @param string $TaskRequestId Mark a pagination transaction.
     * @param boolean $QueryDlqMsg This value is true when the system queries dead letters, and is only valid for RocketMQ.
     * @param integer $NumOfLatestMsg Query the last N messages. The value of N cannot exceed 1024. By default, -1 indicates other query conditions.
     * @param string $Tag Tag expression.
     * @param boolean $QueryDeadLetterMessage This value is true when the system queries dead letters, and is only valid for RocketMQ.
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("MsgKey",$param) and $param["MsgKey"] !== null) {
            $this->MsgKey = $param["MsgKey"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TaskRequestId",$param) and $param["TaskRequestId"] !== null) {
            $this->TaskRequestId = $param["TaskRequestId"];
        }

        if (array_key_exists("QueryDlqMsg",$param) and $param["QueryDlqMsg"] !== null) {
            $this->QueryDlqMsg = $param["QueryDlqMsg"];
        }

        if (array_key_exists("NumOfLatestMsg",$param) and $param["NumOfLatestMsg"] !== null) {
            $this->NumOfLatestMsg = $param["NumOfLatestMsg"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("QueryDeadLetterMessage",$param) and $param["QueryDeadLetterMessage"] !== null) {
            $this->QueryDeadLetterMessage = $param["QueryDeadLetterMessage"];
        }
    }
}
