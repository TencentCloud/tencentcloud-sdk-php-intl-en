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
 * Security log - Settings of delivery to CLS
 *
 * @method string getLogType() Obtain Log type
 * @method void setLogType(string $LogType) Set Log type
 * @method boolean getState() Obtain Delivery status. Valid values: `true` (enabled); `false` (disabled).
 * @method void setState(boolean $State) Set Delivery status. Valid values: `true` (enabled); `false` (disabled).
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getLogSet() Obtain Logset
 * @method void setLogSet(string $LogSet) Set Logset
 * @method string getTopicID() Obtain Topic ID
 * @method void setTopicID(string $TopicID) Set Topic ID
 * @method string getLogSetName() Obtain Logset name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogSetName(string $LogSetName) Set Logset name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTopicName() Obtain Topic name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicName(string $TopicName) Set Topic name
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SecLogDeliveryClsSettingInfo extends AbstractModel
{
    /**
     * @var string Log type
     */
    public $LogType;

    /**
     * @var boolean Delivery status. Valid values: `true` (enabled); `false` (disabled).
     */
    public $State;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string Logset
     */
    public $LogSet;

    /**
     * @var string Topic ID
     */
    public $TopicID;

    /**
     * @var string Logset name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogSetName;

    /**
     * @var string Topic name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicName;

    /**
     * @param string $LogType Log type
     * @param boolean $State Delivery status. Valid values: `true` (enabled); `false` (disabled).
     * @param string $Region Region
     * @param string $LogSet Logset
     * @param string $TopicID Topic ID
     * @param string $LogSetName Logset name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TopicName Topic name
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("LogSet",$param) and $param["LogSet"] !== null) {
            $this->LogSet = $param["LogSet"];
        }

        if (array_key_exists("TopicID",$param) and $param["TopicID"] !== null) {
            $this->TopicID = $param["TopicID"];
        }

        if (array_key_exists("LogSetName",$param) and $param["LogSetName"] !== null) {
            $this->LogSetName = $param["LogSetName"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }
    }
}
