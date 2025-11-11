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
 * DescribeConsumerGroup request structure.
 *
 * @method string getInstanceId() Obtain ckafka cluster instance Id. obtain through the API [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1).
 * @method void setInstanceId(string $InstanceId) Set ckafka cluster instance Id. obtain through the API [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1).
 * @method string getGroupName() Obtain Specifies the group name you want to query.
 * @method void setGroupName(string $GroupName) Set Specifies the group name you want to query.
 * @method string getTopicName() Obtain Specifies the corresponding topic name in the group to be queried by the user. if this parameter is specified while the group is unspecified, ignore this parameter.
 * @method void setTopicName(string $TopicName) Set Specifies the corresponding topic name in the group to be queried by the user. if this parameter is specified while the group is unspecified, ignore this parameter.
 * @method integer getLimit() Obtain Returns the limit quantity of the consumption group. supports a maximum of 50.
 * @method void setLimit(integer $Limit) Set Returns the limit quantity of the consumption group. supports a maximum of 50.
 * @method integer getOffset() Obtain Specifies the starting offset amount of the consumer group list.
 * @method void setOffset(integer $Offset) Set Specifies the starting offset amount of the consumer group list.
 */
class DescribeConsumerGroupRequest extends AbstractModel
{
    /**
     * @var string ckafka cluster instance Id. obtain through the API [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1).
     */
    public $InstanceId;

    /**
     * @var string Specifies the group name you want to query.
     */
    public $GroupName;

    /**
     * @var string Specifies the corresponding topic name in the group to be queried by the user. if this parameter is specified while the group is unspecified, ignore this parameter.
     */
    public $TopicName;

    /**
     * @var integer Returns the limit quantity of the consumption group. supports a maximum of 50.
     */
    public $Limit;

    /**
     * @var integer Specifies the starting offset amount of the consumer group list.
     */
    public $Offset;

    /**
     * @param string $InstanceId ckafka cluster instance Id. obtain through the API [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1).
     * @param string $GroupName Specifies the group name you want to query.
     * @param string $TopicName Specifies the corresponding topic name in the group to be queried by the user. if this parameter is specified while the group is unspecified, ignore this parameter.
     * @param integer $Limit Returns the limit quantity of the consumption group. supports a maximum of 50.
     * @param integer $Offset Specifies the starting offset amount of the consumer group list.
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
