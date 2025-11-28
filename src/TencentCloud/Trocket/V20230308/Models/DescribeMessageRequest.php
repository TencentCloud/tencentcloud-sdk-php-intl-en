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
 * DescribeMessage request structure.
 *
 * @method string getInstanceId() Obtain TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.comom/document/api/1493/106745?from_cn_redirect=1) or the console.
 * @method void setInstanceId(string $InstanceId) Set TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.comom/document/api/1493/106745?from_cn_redirect=1) or the console.
 * @method string getTopic() Obtain Topic name. It can be obtained from [TopicItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#TopicItem) returned by the API [DescribeTopicList](https://www.tencentcloud.comom/document/api/1493/96030?from_cn_redirect=1) or from the console.
 * @method void setTopic(string $Topic) Set Topic name. It can be obtained from [TopicItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#TopicItem) returned by the API [DescribeTopicList](https://www.tencentcloud.comom/document/api/1493/96030?from_cn_redirect=1) or from the console.
 * @method string getMsgId() Obtain Message ID. It can be obtained from the API [DescribeMessageList](https://www.tencentcloud.comom/document/api/1493/114593?from_cn_redirect=1) or workload logs.
 * @method void setMsgId(string $MsgId) Set Message ID. It can be obtained from the API [DescribeMessageList](https://www.tencentcloud.comom/document/api/1493/114593?from_cn_redirect=1) or workload logs.
 * @method integer getOffset() Obtain Starting position of the query. Default value: 0.
 * @method void setOffset(integer $Offset) Set Starting position of the query. Default value: 0.
 * @method integer getLimit() Obtain Maximum number of queried results. Default value: 20.
 * @method void setLimit(integer $Limit) Set Maximum number of queried results. Default value: 20.
 * @method boolean getQueryDeadLetterMessage() Obtain Whether the message is dead letter message. Default value: false.
 * @method void setQueryDeadLetterMessage(boolean $QueryDeadLetterMessage) Set Whether the message is dead letter message. Default value: false.
 * @method boolean getQueryDelayMessage() Obtain Whether the message is delayed. Default value: false.
 * @method void setQueryDelayMessage(boolean $QueryDelayMessage) Set Whether the message is delayed. Default value: false.
 */
class DescribeMessageRequest extends AbstractModel
{
    /**
     * @var string TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.comom/document/api/1493/106745?from_cn_redirect=1) or the console.
     */
    public $InstanceId;

    /**
     * @var string Topic name. It can be obtained from [TopicItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#TopicItem) returned by the API [DescribeTopicList](https://www.tencentcloud.comom/document/api/1493/96030?from_cn_redirect=1) or from the console.
     */
    public $Topic;

    /**
     * @var string Message ID. It can be obtained from the API [DescribeMessageList](https://www.tencentcloud.comom/document/api/1493/114593?from_cn_redirect=1) or workload logs.
     */
    public $MsgId;

    /**
     * @var integer Starting position of the query. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Maximum number of queried results. Default value: 20.
     */
    public $Limit;

    /**
     * @var boolean Whether the message is dead letter message. Default value: false.
     */
    public $QueryDeadLetterMessage;

    /**
     * @var boolean Whether the message is delayed. Default value: false.
     */
    public $QueryDelayMessage;

    /**
     * @param string $InstanceId TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.comom/document/api/1493/106745?from_cn_redirect=1) or the console.
     * @param string $Topic Topic name. It can be obtained from [TopicItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#TopicItem) returned by the API [DescribeTopicList](https://www.tencentcloud.comom/document/api/1493/96030?from_cn_redirect=1) or from the console.
     * @param string $MsgId Message ID. It can be obtained from the API [DescribeMessageList](https://www.tencentcloud.comom/document/api/1493/114593?from_cn_redirect=1) or workload logs.
     * @param integer $Offset Starting position of the query. Default value: 0.
     * @param integer $Limit Maximum number of queried results. Default value: 20.
     * @param boolean $QueryDeadLetterMessage Whether the message is dead letter message. Default value: false.
     * @param boolean $QueryDelayMessage Whether the message is delayed. Default value: false.
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

        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("QueryDeadLetterMessage",$param) and $param["QueryDeadLetterMessage"] !== null) {
            $this->QueryDeadLetterMessage = $param["QueryDeadLetterMessage"];
        }

        if (array_key_exists("QueryDelayMessage",$param) and $param["QueryDelayMessage"] !== null) {
            $this->QueryDelayMessage = $param["QueryDelayMessage"];
        }
    }
}
