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
 * DescribeConsumerLag request structure.
 *
 * @method string getInstanceId() Obtain TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.comom/document/api/1493/106745?from_cn_redirect=1) or the console.
 * @method void setInstanceId(string $InstanceId) Set TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.comom/document/api/1493/106745?from_cn_redirect=1) or the console.
 * @method string getConsumerGroup() Obtain Consumer group name. It can be obtained from [ConsumeGroupItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ConsumeGroupItem) returned by the API [DescribeConsumerGroupList](https://www.tencentcloud.comom/document/api/1493/101535?from_cn_redirect=1) or from the console.
 * @method void setConsumerGroup(string $ConsumerGroup) Set Consumer group name. It can be obtained from [ConsumeGroupItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ConsumeGroupItem) returned by the API [DescribeConsumerGroupList](https://www.tencentcloud.comom/document/api/1493/101535?from_cn_redirect=1) or from the console.
 * @method string getNamespace() Obtain Namespace. It is required for 4.x clusters. The namespace can be obtained from [RocketMQNamespace](https://www.tencentcloud.comom/document/api/1179/46089?from_cn_redirect=1#RocketMQNamespace) returned by the API [DescribeRocketMQNamespaces](https://www.tencentcloud.comom/document/api/1179/63419?from_cn_redirect=1) or from the console.
 * @method void setNamespace(string $Namespace) Set Namespace. It is required for 4.x clusters. The namespace can be obtained from [RocketMQNamespace](https://www.tencentcloud.comom/document/api/1179/46089?from_cn_redirect=1#RocketMQNamespace) returned by the API [DescribeRocketMQNamespaces](https://www.tencentcloud.comom/document/api/1179/63419?from_cn_redirect=1) or from the console.
 * @method string getSubscribeTopic() Obtain Subscribed topic. If it is not left blank, query heaped messages of consumer groups subscribing to the topic. The topic can be obtained from [TopicItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#TopicItem) returned by the API [DescribeTopicList](https://www.tencentcloud.comom/document/api/1493/96030?from_cn_redirect=1) or from the console.
 * @method void setSubscribeTopic(string $SubscribeTopic) Set Subscribed topic. If it is not left blank, query heaped messages of consumer groups subscribing to the topic. The topic can be obtained from [TopicItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#TopicItem) returned by the API [DescribeTopicList](https://www.tencentcloud.comom/document/api/1493/96030?from_cn_redirect=1) or from the console.
 */
class DescribeConsumerLagRequest extends AbstractModel
{
    /**
     * @var string TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.comom/document/api/1493/106745?from_cn_redirect=1) or the console.
     */
    public $InstanceId;

    /**
     * @var string Consumer group name. It can be obtained from [ConsumeGroupItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ConsumeGroupItem) returned by the API [DescribeConsumerGroupList](https://www.tencentcloud.comom/document/api/1493/101535?from_cn_redirect=1) or from the console.
     */
    public $ConsumerGroup;

    /**
     * @var string Namespace. It is required for 4.x clusters. The namespace can be obtained from [RocketMQNamespace](https://www.tencentcloud.comom/document/api/1179/46089?from_cn_redirect=1#RocketMQNamespace) returned by the API [DescribeRocketMQNamespaces](https://www.tencentcloud.comom/document/api/1179/63419?from_cn_redirect=1) or from the console.
     */
    public $Namespace;

    /**
     * @var string Subscribed topic. If it is not left blank, query heaped messages of consumer groups subscribing to the topic. The topic can be obtained from [TopicItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#TopicItem) returned by the API [DescribeTopicList](https://www.tencentcloud.comom/document/api/1493/96030?from_cn_redirect=1) or from the console.
     */
    public $SubscribeTopic;

    /**
     * @param string $InstanceId TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.comom/document/api/1493/106745?from_cn_redirect=1) or the console.
     * @param string $ConsumerGroup Consumer group name. It can be obtained from [ConsumeGroupItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ConsumeGroupItem) returned by the API [DescribeConsumerGroupList](https://www.tencentcloud.comom/document/api/1493/101535?from_cn_redirect=1) or from the console.
     * @param string $Namespace Namespace. It is required for 4.x clusters. The namespace can be obtained from [RocketMQNamespace](https://www.tencentcloud.comom/document/api/1179/46089?from_cn_redirect=1#RocketMQNamespace) returned by the API [DescribeRocketMQNamespaces](https://www.tencentcloud.comom/document/api/1179/63419?from_cn_redirect=1) or from the console.
     * @param string $SubscribeTopic Subscribed topic. If it is not left blank, query heaped messages of consumer groups subscribing to the topic. The topic can be obtained from [TopicItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#TopicItem) returned by the API [DescribeTopicList](https://www.tencentcloud.comom/document/api/1493/96030?from_cn_redirect=1) or from the console.
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

        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("SubscribeTopic",$param) and $param["SubscribeTopic"] !== null) {
            $this->SubscribeTopic = $param["SubscribeTopic"];
        }
    }
}
