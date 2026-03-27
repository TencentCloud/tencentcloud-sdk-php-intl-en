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
 * CLS Log Delivery Configuration
 *
 * @method string getTopicOperation() Obtain Log topic operation: optional create, reuse.
create: create a new log topic using TopicName.
reuse: use an existing log topic by specifying TopicId.
Combining the use of an existing log topic and creating a new log set is not allowed.
 * @method void setTopicOperation(string $TopicOperation) Set Log topic operation: optional create, reuse.
create: create a new log topic using TopicName.
reuse: use an existing log topic by specifying TopicId.
Combining the use of an existing log topic and creating a new log set is not allowed.
 * @method string getGroupOperation() Obtain Log set operation: optional create, reuse.
create: create a new log set using GroupName.
reuse: use an existing log set by specifying GroupId.
Combining the use of an existing log topic and creating a new log set is not allowed.
 * @method void setGroupOperation(string $GroupOperation) Set Log set operation: optional create, reuse.
create: create a new log set using GroupName.
reuse: use an existing log set by specifying GroupId.
Combining the use of an existing log topic and creating a new log set is not allowed.
 * @method string getRegion() Obtain Log Delivery Region
 * @method void setRegion(string $Region) Set Log Delivery Region
 * @method string getTopicId() Obtain log topic id
 * @method void setTopicId(string $TopicId) Set log topic id
 * @method string getTopicName() Obtain log topic name
 * @method void setTopicName(string $TopicName) Set log topic name
 * @method string getGroupId() Obtain log set id
 * @method void setGroupId(string $GroupId) Set log set id
 * @method string getGroupName() Obtain log set name
 * @method void setGroupName(string $GroupName) Set log set name
 */
class CLSInfo extends AbstractModel
{
    /**
     * @var string Log topic operation: optional create, reuse.
create: create a new log topic using TopicName.
reuse: use an existing log topic by specifying TopicId.
Combining the use of an existing log topic and creating a new log set is not allowed.
     */
    public $TopicOperation;

    /**
     * @var string Log set operation: optional create, reuse.
create: create a new log set using GroupName.
reuse: use an existing log set by specifying GroupId.
Combining the use of an existing log topic and creating a new log set is not allowed.
     */
    public $GroupOperation;

    /**
     * @var string Log Delivery Region
     */
    public $Region;

    /**
     * @var string log topic id
     */
    public $TopicId;

    /**
     * @var string log topic name
     */
    public $TopicName;

    /**
     * @var string log set id
     */
    public $GroupId;

    /**
     * @var string log set name
     */
    public $GroupName;

    /**
     * @param string $TopicOperation Log topic operation: optional create, reuse.
create: create a new log topic using TopicName.
reuse: use an existing log topic by specifying TopicId.
Combining the use of an existing log topic and creating a new log set is not allowed.
     * @param string $GroupOperation Log set operation: optional create, reuse.
create: create a new log set using GroupName.
reuse: use an existing log set by specifying GroupId.
Combining the use of an existing log topic and creating a new log set is not allowed.
     * @param string $Region Log Delivery Region
     * @param string $TopicId log topic id
     * @param string $TopicName log topic name
     * @param string $GroupId log set id
     * @param string $GroupName log set name
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
