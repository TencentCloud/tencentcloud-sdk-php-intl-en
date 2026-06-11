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
 * CLS log delivery configuration.
 *
 * @method string getTopicOperation() Obtain Log topic operation: Options are create, reuse. 
create: Create a new log topic, using TopicName to create the log topic.
reuse: Use an existing log topic, using TopicId to specify the log topic.
The combination of using an existing log topic while creating a new logset is not allowed.
 * @method void setTopicOperation(string $TopicOperation) Set Log topic operation: Options are create, reuse. 
create: Create a new log topic, using TopicName to create the log topic.
reuse: Use an existing log topic, using TopicId to specify the log topic.
The combination of using an existing log topic while creating a new logset is not allowed.
 * @method string getGroupOperation() Obtain Logset operation: Options are create, reuse.
create: Create a new logset, using GroupName to create the logset.
reuse: Use an existing logset, using GroupId to specify the logset.
The combination of using an existing log topic while creating a new logset is not allowed.
 * @method void setGroupOperation(string $GroupOperation) Set Logset operation: Options are create, reuse.
create: Create a new logset, using GroupName to create the logset.
reuse: Use an existing logset, using GroupId to specify the logset.
The combination of using an existing log topic while creating a new logset is not allowed.
 * @method string getRegion() Obtain Log delivery region.
 * @method void setRegion(string $Region) Set Log delivery region.
 * @method string getTopicId() Obtain Log topic ID.
 * @method void setTopicId(string $TopicId) Set Log topic ID.
 * @method string getTopicName() Obtain Log topic name.
 * @method void setTopicName(string $TopicName) Set Log topic name.
 * @method string getGroupId() Obtain Logset ID.
 * @method void setGroupId(string $GroupId) Set Logset ID.
 * @method string getGroupName() Obtain Logset name.
 * @method void setGroupName(string $GroupName) Set Logset name.
 */
class CLSInfo extends AbstractModel
{
    /**
     * @var string Log topic operation: Options are create, reuse. 
create: Create a new log topic, using TopicName to create the log topic.
reuse: Use an existing log topic, using TopicId to specify the log topic.
The combination of using an existing log topic while creating a new logset is not allowed.
     */
    public $TopicOperation;

    /**
     * @var string Logset operation: Options are create, reuse.
create: Create a new logset, using GroupName to create the logset.
reuse: Use an existing logset, using GroupId to specify the logset.
The combination of using an existing log topic while creating a new logset is not allowed.
     */
    public $GroupOperation;

    /**
     * @var string Log delivery region.
     */
    public $Region;

    /**
     * @var string Log topic ID.
     */
    public $TopicId;

    /**
     * @var string Log topic name.
     */
    public $TopicName;

    /**
     * @var string Logset ID.
     */
    public $GroupId;

    /**
     * @var string Logset name.
     */
    public $GroupName;

    /**
     * @param string $TopicOperation Log topic operation: Options are create, reuse. 
create: Create a new log topic, using TopicName to create the log topic.
reuse: Use an existing log topic, using TopicId to specify the log topic.
The combination of using an existing log topic while creating a new logset is not allowed.
     * @param string $GroupOperation Logset operation: Options are create, reuse.
create: Create a new logset, using GroupName to create the logset.
reuse: Use an existing logset, using GroupId to specify the logset.
The combination of using an existing log topic while creating a new logset is not allowed.
     * @param string $Region Log delivery region.
     * @param string $TopicId Log topic ID.
     * @param string $TopicName Log topic name.
     * @param string $GroupId Logset ID.
     * @param string $GroupName Logset name.
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
