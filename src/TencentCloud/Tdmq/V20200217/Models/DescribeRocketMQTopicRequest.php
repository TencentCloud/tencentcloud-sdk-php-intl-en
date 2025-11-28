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
 * DescribeRocketMQTopic request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getNamespaceId() Obtain Namespace
 * @method void setNamespaceId(string $NamespaceId) Set Namespace
 * @method string getTopicName() Obtain Topic name
 * @method void setTopicName(string $TopicName) Set Topic name
 * @method string getConsumerGroup() Obtain Consumer group name.
 * @method void setConsumerGroup(string $ConsumerGroup) Set Consumer group name.
 * @method integer getOffset() Obtain Subscription list pagination parameter Offset.
 * @method void setOffset(integer $Offset) Set Subscription list pagination parameter Offset.
 * @method integer getLimit() Obtain Subscription list pagination parameter Limit.
 * @method void setLimit(integer $Limit) Set Subscription list pagination parameter Limit.
 */
class DescribeRocketMQTopicRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Namespace
     */
    public $NamespaceId;

    /**
     * @var string Topic name
     */
    public $TopicName;

    /**
     * @var string Consumer group name.
     */
    public $ConsumerGroup;

    /**
     * @var integer Subscription list pagination parameter Offset.
     */
    public $Offset;

    /**
     * @var integer Subscription list pagination parameter Limit.
     */
    public $Limit;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $NamespaceId Namespace
     * @param string $TopicName Topic name
     * @param string $ConsumerGroup Consumer group name.
     * @param integer $Offset Subscription list pagination parameter Offset.
     * @param integer $Limit Subscription list pagination parameter Limit.
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

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
