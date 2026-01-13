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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMessageList request structure.
 *
 * @method string getInstanceId() Obtain TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.com/document/api/1493/106745?from_cn_redirect=1) or the console.
 * @method void setInstanceId(string $InstanceId) Set TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.com/document/api/1493/106745?from_cn_redirect=1) or the console.
 * @method string getTopic() Obtain Topic name. It can be obtained from [TopicItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#TopicItem) returned by the API [DescribeTopicList](https://www.tencentcloud.com/document/api/1493/96030?from_cn_redirect=1) or from the console.
 * @method void setTopic(string $Topic) Set Topic name. It can be obtained from [TopicItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#TopicItem) returned by the API [DescribeTopicList](https://www.tencentcloud.com/document/api/1493/96030?from_cn_redirect=1) or from the console.
 * @method integer getStartTime() Obtain Start time for querying messages. **It is a Unix timestamp (ms).**
 * @method void setStartTime(integer $StartTime) Set Start time for querying messages. **It is a Unix timestamp (ms).**
 * @method integer getEndTime() Obtain End time for querying messages. **It is a Unix timestamp (ms).**
 * @method void setEndTime(integer $EndTime) Set End time for querying messages. **It is a Unix timestamp (ms).**
 * @method string getTaskRequestId() Obtain Query identifier. For the first query, input a null string. If the query results involve pagination, use the TaskRequestId value in the previous request response as the value of this input parameter for requesting data on the next page.
 * @method void setTaskRequestId(string $TaskRequestId) Set Query identifier. For the first query, input a null string. If the query results involve pagination, use the TaskRequestId value in the previous request response as the value of this input parameter for requesting data on the next page.
 * @method integer getOffset() Obtain Starting position of the query. Default value: 0.
 * @method void setOffset(integer $Offset) Set Starting position of the query. Default value: 0.
 * @method integer getLimit() Obtain Maximum number of queried results. Default value: 20.
 * @method void setLimit(integer $Limit) Set Maximum number of queried results. Default value: 20.
 * @method string getConsumerGroup() Obtain Consumer group name. It can be obtained from [ConsumeGroupItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#ConsumeGroupItem) returned by the API [DescribeConsumerGroupList](https://www.tencentcloud.com/document/api/1493/101535?from_cn_redirect=1) or from the console.
 * @method void setConsumerGroup(string $ConsumerGroup) Set Consumer group name. It can be obtained from [ConsumeGroupItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#ConsumeGroupItem) returned by the API [DescribeConsumerGroupList](https://www.tencentcloud.com/document/api/1493/101535?from_cn_redirect=1) or from the console.
 * @method string getMsgId() Obtain Message ID. It can be obtained from [MessageItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#MessageItem) returned by the API [DescribeMessageList](https://www.tencentcloud.com/document/api/1493/114593?from_cn_redirect=1) or from the workload logs.
 * @method void setMsgId(string $MsgId) Set Message ID. It can be obtained from [MessageItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#MessageItem) returned by the API [DescribeMessageList](https://www.tencentcloud.com/document/api/1493/114593?from_cn_redirect=1) or from the workload logs.
 * @method string getMsgKey() Obtain Message key. It can be obtained from [MessageItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#MessageItem) returned by the API [DescribeMessageList](https://www.tencentcloud.com/document/api/1493/114593?from_cn_redirect=1) or from workload logs.
 * @method void setMsgKey(string $MsgKey) Set Message key. It can be obtained from [MessageItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#MessageItem) returned by the API [DescribeMessageList](https://www.tencentcloud.com/document/api/1493/114593?from_cn_redirect=1) or from workload logs.
 * @method integer getRecentMessageNum() Obtain Query the last N messages. The value of N cannot exceed 1024. By default, -1 indicates other query conditions.
 * @method void setRecentMessageNum(integer $RecentMessageNum) Set Query the last N messages. The value of N cannot exceed 1024. By default, -1 indicates other query conditions.
 * @method boolean getQueryDeadLetterMessage() Obtain Whether to query dead letter messages. Default value: false.
 * @method void setQueryDeadLetterMessage(boolean $QueryDeadLetterMessage) Set Whether to query dead letter messages. Default value: false.
 * @method string getTag() Obtain Message tag. It can be obtained from [MessageItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#MessageItem) returned by the API [DescribeMessageList](https://www.tencentcloud.com/document/api/1493/114593?from_cn_redirect=1) or from workload logs.
 * @method void setTag(string $Tag) Set Message tag. It can be obtained from [MessageItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#MessageItem) returned by the API [DescribeMessageList](https://www.tencentcloud.com/document/api/1493/114593?from_cn_redirect=1) or from workload logs.
 */
class DescribeMessageListRequest extends AbstractModel
{
    /**
     * @var string TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.com/document/api/1493/106745?from_cn_redirect=1) or the console.
     */
    public $InstanceId;

    /**
     * @var string Topic name. It can be obtained from [TopicItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#TopicItem) returned by the API [DescribeTopicList](https://www.tencentcloud.com/document/api/1493/96030?from_cn_redirect=1) or from the console.
     */
    public $Topic;

    /**
     * @var integer Start time for querying messages. **It is a Unix timestamp (ms).**
     */
    public $StartTime;

    /**
     * @var integer End time for querying messages. **It is a Unix timestamp (ms).**
     */
    public $EndTime;

    /**
     * @var string Query identifier. For the first query, input a null string. If the query results involve pagination, use the TaskRequestId value in the previous request response as the value of this input parameter for requesting data on the next page.
     */
    public $TaskRequestId;

    /**
     * @var integer Starting position of the query. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Maximum number of queried results. Default value: 20.
     */
    public $Limit;

    /**
     * @var string Consumer group name. It can be obtained from [ConsumeGroupItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#ConsumeGroupItem) returned by the API [DescribeConsumerGroupList](https://www.tencentcloud.com/document/api/1493/101535?from_cn_redirect=1) or from the console.
     */
    public $ConsumerGroup;

    /**
     * @var string Message ID. It can be obtained from [MessageItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#MessageItem) returned by the API [DescribeMessageList](https://www.tencentcloud.com/document/api/1493/114593?from_cn_redirect=1) or from the workload logs.
     */
    public $MsgId;

    /**
     * @var string Message key. It can be obtained from [MessageItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#MessageItem) returned by the API [DescribeMessageList](https://www.tencentcloud.com/document/api/1493/114593?from_cn_redirect=1) or from workload logs.
     */
    public $MsgKey;

    /**
     * @var integer Query the last N messages. The value of N cannot exceed 1024. By default, -1 indicates other query conditions.
     */
    public $RecentMessageNum;

    /**
     * @var boolean Whether to query dead letter messages. Default value: false.
     */
    public $QueryDeadLetterMessage;

    /**
     * @var string Message tag. It can be obtained from [MessageItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#MessageItem) returned by the API [DescribeMessageList](https://www.tencentcloud.com/document/api/1493/114593?from_cn_redirect=1) or from workload logs.
     */
    public $Tag;

    /**
     * @param string $InstanceId TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.com/document/api/1493/106745?from_cn_redirect=1) or the console.
     * @param string $Topic Topic name. It can be obtained from [TopicItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#TopicItem) returned by the API [DescribeTopicList](https://www.tencentcloud.com/document/api/1493/96030?from_cn_redirect=1) or from the console.
     * @param integer $StartTime Start time for querying messages. **It is a Unix timestamp (ms).**
     * @param integer $EndTime End time for querying messages. **It is a Unix timestamp (ms).**
     * @param string $TaskRequestId Query identifier. For the first query, input a null string. If the query results involve pagination, use the TaskRequestId value in the previous request response as the value of this input parameter for requesting data on the next page.
     * @param integer $Offset Starting position of the query. Default value: 0.
     * @param integer $Limit Maximum number of queried results. Default value: 20.
     * @param string $ConsumerGroup Consumer group name. It can be obtained from [ConsumeGroupItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#ConsumeGroupItem) returned by the API [DescribeConsumerGroupList](https://www.tencentcloud.com/document/api/1493/101535?from_cn_redirect=1) or from the console.
     * @param string $MsgId Message ID. It can be obtained from [MessageItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#MessageItem) returned by the API [DescribeMessageList](https://www.tencentcloud.com/document/api/1493/114593?from_cn_redirect=1) or from the workload logs.
     * @param string $MsgKey Message key. It can be obtained from [MessageItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#MessageItem) returned by the API [DescribeMessageList](https://www.tencentcloud.com/document/api/1493/114593?from_cn_redirect=1) or from workload logs.
     * @param integer $RecentMessageNum Query the last N messages. The value of N cannot exceed 1024. By default, -1 indicates other query conditions.
     * @param boolean $QueryDeadLetterMessage Whether to query dead letter messages. Default value: false.
     * @param string $Tag Message tag. It can be obtained from [MessageItem](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#MessageItem) returned by the API [DescribeMessageList](https://www.tencentcloud.com/document/api/1493/114593?from_cn_redirect=1) or from workload logs.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskRequestId",$param) and $param["TaskRequestId"] !== null) {
            $this->TaskRequestId = $param["TaskRequestId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }

        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("MsgKey",$param) and $param["MsgKey"] !== null) {
            $this->MsgKey = $param["MsgKey"];
        }

        if (array_key_exists("RecentMessageNum",$param) and $param["RecentMessageNum"] !== null) {
            $this->RecentMessageNum = $param["RecentMessageNum"];
        }

        if (array_key_exists("QueryDeadLetterMessage",$param) and $param["QueryDeadLetterMessage"] !== null) {
            $this->QueryDeadLetterMessage = $param["QueryDeadLetterMessage"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }
    }
}
