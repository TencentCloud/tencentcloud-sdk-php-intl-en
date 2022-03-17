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
 * CreateConsumer request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getGroupName() Obtain Group name.
 * @method void setGroupName(string $GroupName) Set Group name.
 * @method string getTopicName() Obtain Topic name. You must specify the name of an existing topic for either `TopicName` or `TopicNameList`.
 * @method void setTopicName(string $TopicName) Set Topic name. You must specify the name of an existing topic for either `TopicName` or `TopicNameList`.
 * @method array getTopicNameList() Obtain Topic name array.
 * @method void setTopicNameList(array $TopicNameList) Set Topic name array.
 */
class CreateConsumerRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Group name.
     */
    public $GroupName;

    /**
     * @var string Topic name. You must specify the name of an existing topic for either `TopicName` or `TopicNameList`.
     */
    public $TopicName;

    /**
     * @var array Topic name array.
     */
    public $TopicNameList;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $GroupName Group name.
     * @param string $TopicName Topic name. You must specify the name of an existing topic for either `TopicName` or `TopicNameList`.
     * @param array $TopicNameList Topic name array.
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
