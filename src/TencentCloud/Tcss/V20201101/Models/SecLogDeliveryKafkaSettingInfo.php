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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Settings of security log delivery to Kafka
 *
 * @method string getLogType() Obtain Log type
 * @method void setLogType(string $LogType) Set Log type
 * @method string getTopicID() Obtain Topic ID
 * @method void setTopicID(string $TopicID) Set Topic ID
 * @method string getTopicName() Obtain Topic name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicName(string $TopicName) Set Topic name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getState() Obtain Delivery status. Valid values: `false` (disabled); `true` (enabled).
 * @method void setState(boolean $State) Set Delivery status. Valid values: `false` (disabled); `true` (enabled).
 */
class SecLogDeliveryKafkaSettingInfo extends AbstractModel
{
    /**
     * @var string Log type
     */
    public $LogType;

    /**
     * @var string Topic ID
     */
    public $TopicID;

    /**
     * @var string Topic name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicName;

    /**
     * @var boolean Delivery status. Valid values: `false` (disabled); `true` (enabled).
     */
    public $State;

    /**
     * @param string $LogType Log type
     * @param string $TopicID Topic ID
     * @param string $TopicName Topic name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $State Delivery status. Valid values: `false` (disabled); `true` (enabled).
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

        if (array_key_exists("TopicID",$param) and $param["TopicID"] !== null) {
            $this->TopicID = $param["TopicID"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
