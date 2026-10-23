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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLS log shipping configuration
 *
 * @method string getTopicOperation() Obtain Log topic operation. Options: create, reuse.
Create: Add a log topic. Use TopicName to create a log topic.
reuse: Use an existing log topic and specify it by TopicId.
It is not allowed to use a combination of an existing log topic and a new log set.
 * @method void setTopicOperation(string $TopicOperation) Set Log topic operation. Options: create, reuse.
Create: Add a log topic. Use TopicName to create a log topic.
reuse: Use an existing log topic and specify it by TopicId.
It is not allowed to use a combination of an existing log topic and a new log set.
 * @method string getGroupOperation() Obtain Logset operation. Options: create, reuse.
create: add a new log set using GroupName.
reuse: utilize an existing logset and specify the logset by GroupId.
It is not allowed to use a combination of an existing log topic and a new log set.
 * @method void setGroupOperation(string $GroupOperation) Set Logset operation. Options: create, reuse.
create: add a new log set using GroupName.
reuse: utilize an existing logset and specify the logset by GroupId.
It is not allowed to use a combination of an existing log topic and a new log set.
 * @method string getRegion() Obtain Log delivery region
 * @method void setRegion(string $Region) Set Log delivery region
 * @method string getTopicId() Obtain Log topic id
 * @method void setTopicId(string $TopicId) Set Log topic id
 * @method string getTopicName() Obtain Log topic name
 * @method void setTopicName(string $TopicName) Set Log topic name
 * @method string getGroupId() Obtain Logset id
 * @method void setGroupId(string $GroupId) Set Logset id
 * @method string getGroupName() Obtain Log set name.
 * @method void setGroupName(string $GroupName) Set Log set name.
 */
class CLSInfo extends AbstractModel
{
    /**
     * @var string Log topic operation. Options: create, reuse.
Create: Add a log topic. Use TopicName to create a log topic.
reuse: Use an existing log topic and specify it by TopicId.
It is not allowed to use a combination of an existing log topic and a new log set.
     */
    public $TopicOperation;

    /**
     * @var string Logset operation. Options: create, reuse.
create: add a new log set using GroupName.
reuse: utilize an existing logset and specify the logset by GroupId.
It is not allowed to use a combination of an existing log topic and a new log set.
     */
    public $GroupOperation;

    /**
     * @var string Log delivery region
     */
    public $Region;

    /**
     * @var string Log topic id
     */
    public $TopicId;

    /**
     * @var string Log topic name
     */
    public $TopicName;

    /**
     * @var string Logset id
     */
    public $GroupId;

    /**
     * @var string Log set name.
     */
    public $GroupName;

    /**
     * @param string $TopicOperation Log topic operation. Options: create, reuse.
Create: Add a log topic. Use TopicName to create a log topic.
reuse: Use an existing log topic and specify it by TopicId.
It is not allowed to use a combination of an existing log topic and a new log set.
     * @param string $GroupOperation Logset operation. Options: create, reuse.
create: add a new log set using GroupName.
reuse: utilize an existing logset and specify the logset by GroupId.
It is not allowed to use a combination of an existing log topic and a new log set.
     * @param string $Region Log delivery region
     * @param string $TopicId Log topic id
     * @param string $TopicName Log topic name
     * @param string $GroupId Logset id
     * @param string $GroupName Log set name.
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
        if (array_key_exists("TopicOperation",$param) and $param["TopicOperation"] !== null) {
            $this->TopicOperation = $param["TopicOperation"];
        }

        if (array_key_exists("GroupOperation",$param) and $param["GroupOperation"] !== null) {
            $this->GroupOperation = $param["GroupOperation"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }
    }
}
