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
 * DeleteRocketMQTopic request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getNamespaceId() Obtain Namespace of the topic. For 4.x common clusters, the Cluster Namespace is fixed as: tdmq_default
 * @method void setNamespaceId(string $NamespaceId) Set Namespace of the topic. For 4.x common clusters, the Cluster Namespace is fixed as: tdmq_default
 * @method string getTopic() Obtain Topic name
 * @method void setTopic(string $Topic) Set Topic name
 */
class DeleteRocketMQTopicRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Namespace of the topic. For 4.x common clusters, the Cluster Namespace is fixed as: tdmq_default
     */
    public $NamespaceId;

    /**
     * @var string Topic name
     */
    public $Topic;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $NamespaceId Namespace of the topic. For 4.x common clusters, the Cluster Namespace is fixed as: tdmq_default
     * @param string $Topic Topic name
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

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }
    }
}
