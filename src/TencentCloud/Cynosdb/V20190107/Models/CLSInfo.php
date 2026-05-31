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
 * 
 *
 * @method string getTopicOperation() Obtain 
 * @method void setTopicOperation(string $TopicOperation) Set 
 * @method string getGroupOperation() Obtain 
 * @method void setGroupOperation(string $GroupOperation) Set 
 * @method string getRegion() Obtain 
 * @method void setRegion(string $Region) Set 
 * @method string getTopicId() Obtain 
 * @method void setTopicId(string $TopicId) Set 
 * @method string getTopicName() Obtain 
 * @method void setTopicName(string $TopicName) Set 
 * @method string getGroupId() Obtain 
 * @method void setGroupId(string $GroupId) Set 
 * @method string getGroupName() Obtain 
 * @method void setGroupName(string $GroupName) Set 
 */
class CLSInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $TopicOperation;

    /**
     * @var string 
     */
    public $GroupOperation;

    /**
     * @var string 
     */
    public $Region;

    /**
     * @var string 
     */
    public $TopicId;

    /**
     * @var string 
     */
    public $TopicName;

    /**
     * @var string 
     */
    public $GroupId;

    /**
     * @var string 
     */
    public $GroupName;

    /**
     * @param string $TopicOperation 
     * @param string $GroupOperation 
     * @param string $Region 
     * @param string $TopicId 
     * @param string $TopicName 
     * @param string $GroupId 
     * @param string $GroupName 
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
