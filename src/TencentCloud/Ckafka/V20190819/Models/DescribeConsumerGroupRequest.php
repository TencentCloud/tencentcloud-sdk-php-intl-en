<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getInstanceId() Obtain CKafka instance ID.
 * @method void setInstanceId(string $InstanceId) Set CKafka instance ID.
 * @method string getGroupName() Obtain Name of the group to be queried, which is optional.
 * @method void setGroupName(string $GroupName) Set Name of the group to be queried, which is optional.
 * @method string getTopicName() Obtain Name of the corresponding topic in the group to be queried, which is optional. If this parameter is specified but `group` is not specified, this parameter will be ignored.
 * @method void setTopicName(string $TopicName) Set Name of the corresponding topic in the group to be queried, which is optional. If this parameter is specified but `group` is not specified, this parameter will be ignored.
 * @method integer getLimit() Obtain Number of results to be returned in this request
 * @method void setLimit(integer $Limit) Set Number of results to be returned in this request
 * @method integer getOffset() Obtain Offset position
 * @method void setOffset(integer $Offset) Set Offset position
 */
class DescribeConsumerGroupRequest extends AbstractModel
{
    /**
     * @var string CKafka instance ID.
     */
    public $InstanceId;

    /**
     * @var string Name of the group to be queried, which is optional.
     */
    public $GroupName;

    /**
     * @var string Name of the corresponding topic in the group to be queried, which is optional. If this parameter is specified but `group` is not specified, this parameter will be ignored.
     */
    public $TopicName;

    /**
     * @var integer Number of results to be returned in this request
     */
    public $Limit;

    /**
     * @var integer Offset position
     */
    public $Offset;

    /**
     * @param string $InstanceId CKafka instance ID.
     * @param string $GroupName Name of the group to be queried, which is optional.
     * @param string $TopicName Name of the corresponding topic in the group to be queried, which is optional. If this parameter is specified but `group` is not specified, this parameter will be ignored.
     * @param integer $Limit Number of results to be returned in this request
     * @param integer $Offset Offset position
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
