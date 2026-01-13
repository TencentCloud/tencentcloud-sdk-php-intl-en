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
 * FetchMessageByOffset request structure.
 *
 * @method string getInstanceId() Obtain The ckafka cluster instance Id, which can be obtained through the [DescribeInstances](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1) api.
 * @method void setInstanceId(string $InstanceId) Set The ckafka cluster instance Id, which can be obtained through the [DescribeInstances](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1) api.
 * @method string getTopic() Obtain Specifies the topic name, which can be obtained through the [DescribeTopic](https://www.tencentcloud.com/document/product/597/40847?from_cn_redirect=1) api.
 * @method void setTopic(string $Topic) Set Specifies the topic name, which can be obtained through the [DescribeTopic](https://www.tencentcloud.com/document/product/597/40847?from_cn_redirect=1) api.
 * @method integer getPartition() Obtain Partition ID
 * @method void setPartition(integer $Partition) Set Partition ID
 * @method integer getOffset() Obtain Specifies the position information.
 * @method void setOffset(integer $Offset) Set Specifies the position information.
 */
class FetchMessageByOffsetRequest extends AbstractModel
{
    /**
     * @var string The ckafka cluster instance Id, which can be obtained through the [DescribeInstances](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1) api.
     */
    public $InstanceId;

    /**
     * @var string Specifies the topic name, which can be obtained through the [DescribeTopic](https://www.tencentcloud.com/document/product/597/40847?from_cn_redirect=1) api.
     */
    public $Topic;

    /**
     * @var integer Partition ID
     */
    public $Partition;

    /**
     * @var integer Specifies the position information.
     */
    public $Offset;

    /**
     * @param string $InstanceId The ckafka cluster instance Id, which can be obtained through the [DescribeInstances](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1) api.
     * @param string $Topic Specifies the topic name, which can be obtained through the [DescribeTopic](https://www.tencentcloud.com/document/product/597/40847?from_cn_redirect=1) api.
     * @param integer $Partition Partition ID
     * @param integer $Offset Specifies the position information.
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

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
