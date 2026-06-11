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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Settings of security log delivery to Kafka
 *
 * @method string getLogType() Obtain Security log module.
 * @method void setLogType(string $LogType) Set Security log module.
 * @method string getTopicID() Obtain Topic ID
 * @method void setTopicID(string $TopicID) Set Topic ID
 * @method string getTopicName() Obtain Topic name
 * @method void setTopicName(string $TopicName) Set Topic name
 * @method boolean getState() Obtain Delivery status. Valid values: `false` (disabled); `true` (enabled).
 * @method void setState(boolean $State) Set Delivery status. Valid values: `false` (disabled); `true` (enabled).
 * @method array getSubLogType() Obtain Log type
 * @method void setSubLogType(array $SubLogType) Set Log type
 * @method string getErrMsg() Obtain Error message
 * @method void setErrMsg(string $ErrMsg) Set Error message
 */
class SecLogDeliveryKafkaSettingInfo extends AbstractModel
{
    /**
     * @var string Security log module.
     */
    public $LogType;

    /**
     * @var string Topic ID
     */
    public $TopicID;

    /**
     * @var string Topic name
     */
    public $TopicName;

    /**
     * @var boolean Delivery status. Valid values: `false` (disabled); `true` (enabled).
     */
    public $State;

    /**
     * @var array Log type
     */
    public $SubLogType;

    /**
     * @var string Error message
     */
    public $ErrMsg;

    /**
     * @param string $LogType Security log module.
     * @param string $TopicID Topic ID
     * @param string $TopicName Topic name
     * @param boolean $State Delivery status. Valid values: `false` (disabled); `true` (enabled).
     * @param array $SubLogType Log type
     * @param string $ErrMsg Error message
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

        if (array_key_exists("SubLogType",$param) and $param["SubLogType"] !== null) {
            $this->SubLogType = $param["SubLogType"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
