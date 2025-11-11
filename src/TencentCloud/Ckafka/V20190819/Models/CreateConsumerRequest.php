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
 * CreateConsumer request structure.
 *
 * @method string getInstanceId() Obtain The ckafka cluster instance Id, which can be obtained through the [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1) api.
 * @method void setInstanceId(string $InstanceId) Set The ckafka cluster instance Id, which can be obtained through the [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1) api.
 * @method string getGroupName() Obtain Consumer group name.
 * @method void setGroupName(string $GroupName) Set Consumer group name.
 * @method string getTopicName() Obtain Topic name. one of TopicName or TopicNameList must display a specified existing topic name.
 * @method void setTopicName(string $TopicName) Set Topic name. one of TopicName or TopicNameList must display a specified existing topic name.
 * @method array getTopicNameList() Obtain Topic name list.
 * @method void setTopicNameList(array $TopicNameList) Set Topic name list.
 */
class CreateConsumerRequest extends AbstractModel
{
    /**
     * @var string The ckafka cluster instance Id, which can be obtained through the [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1) api.
     */
    public $InstanceId;

    /**
     * @var string Consumer group name.
     */
    public $GroupName;

    /**
     * @var string Topic name. one of TopicName or TopicNameList must display a specified existing topic name.
     */
    public $TopicName;

    /**
     * @var array Topic name list.
     */
    public $TopicNameList;

    /**
     * @param string $InstanceId The ckafka cluster instance Id, which can be obtained through the [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1) api.
     * @param string $GroupName Consumer group name.
     * @param string $TopicName Topic name. one of TopicName or TopicNameList must display a specified existing topic name.
     * @param array $TopicNameList Topic name list.
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

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("TopicNameList",$param) and $param["TopicNameList"] !== null) {
            $this->TopicNameList = $param["TopicNameList"];
        }
    }
}
