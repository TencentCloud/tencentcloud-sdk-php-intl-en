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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchModifyTopicAttributes request structure.
 *
 * @method string getInstanceId() Obtain The ckafka cluster instance Id, which can be obtained through the [DescribeInstances](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1) api.
 * @method void setInstanceId(string $InstanceId) Set The ckafka cluster instance Id, which can be obtained through the [DescribeInstances](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1) api.
 * @method array getTopic() Obtain Specifies the topic attribute list (a maximum of 10 per batch), which can be obtained through the [DescribeTopic](https://www.tencentcloud.com/document/product/597/40847?from_cn_redirect=1) api.
 * @method void setTopic(array $Topic) Set Specifies the topic attribute list (a maximum of 10 per batch), which can be obtained through the [DescribeTopic](https://www.tencentcloud.com/document/product/597/40847?from_cn_redirect=1) api.
 */
class BatchModifyTopicAttributesRequest extends AbstractModel
{
    /**
     * @var string The ckafka cluster instance Id, which can be obtained through the [DescribeInstances](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1) api.
     */
    public $InstanceId;

    /**
     * @var array Specifies the topic attribute list (a maximum of 10 per batch), which can be obtained through the [DescribeTopic](https://www.tencentcloud.com/document/product/597/40847?from_cn_redirect=1) api.
     */
    public $Topic;

    /**
     * @param string $InstanceId The ckafka cluster instance Id, which can be obtained through the [DescribeInstances](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1) api.
     * @param array $Topic Specifies the topic attribute list (a maximum of 10 per batch), which can be obtained through the [DescribeTopic](https://www.tencentcloud.com/document/product/597/40847?from_cn_redirect=1) api.
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
            $this->Topic = [];
            foreach ($param["Topic"] as $key => $value){
                $obj = new BatchModifyTopicInfo();
                $obj->deserialize($value);
                array_push($this->Topic, $obj);
            }
        }
    }
}
