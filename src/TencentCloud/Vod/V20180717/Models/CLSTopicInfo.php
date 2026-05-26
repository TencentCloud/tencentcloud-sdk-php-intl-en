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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getTopicId() Obtain Log topic ID.
 * @method void setTopicId(string $TopicId) Set Log topic ID.
 * @method string getTopicName() Obtain Log topic name.
 * @method void setTopicName(string $TopicName) Set Log topic name.
 * @method string getLogsetId() Obtain Log Set ID.
 * @method void setLogsetId(string $LogsetId) Set Log Set ID.
 */
class CLSTopicInfo extends AbstractModel
{
    /**
     * @var string Log topic ID.
     */
    public $TopicId;

    /**
     * @var string Log topic name.
     */
    public $TopicName;

    /**
     * @var string Log Set ID.
     */
    public $LogsetId;

    /**
     * @param string $TopicId Log topic ID.
     * @param string $TopicName Log topic name.
     * @param string $LogsetId Log Set ID.
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }
    }
}
