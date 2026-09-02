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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Topic configuration for log type shipping.
 *
 * @method integer getLogType() Obtain Log type
 * @method void setLogType(integer $LogType) Set Log type
 * @method string getTopicId() Obtain Shipping topicid.
 * @method void setTopicId(string $TopicId) Set Shipping topicid.
 * @method string getTopicName() Obtain Shipped topicname.
 * @method void setTopicName(string $TopicName) Set Shipped topicname.
 */
class LogDeliveryInfo extends AbstractModel
{
    /**
     * @var integer Log type
     */
    public $LogType;

    /**
     * @var string Shipping topicid.
     */
    public $TopicId;

    /**
     * @var string Shipped topicname.
     */
    public $TopicName;

    /**
     * @param integer $LogType Log type
     * @param string $TopicId Shipping topicid.
     * @param string $TopicName Shipped topicname.
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
        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }
    }
}
