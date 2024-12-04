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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log shipping information.
 *
 * @method boolean getEnabled() Obtain Whether log shipping is enabled. true: enabled; false: disabled.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEnabled(boolean $Enabled) Set Whether log shipping is enabled. true: enabled; false: disabled.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLogsetId() Obtain Logset ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLogsetId(string $LogsetId) Set Logset ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTopicId() Obtain Log topic ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTopicId(string $TopicId) Set Log topic ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLogRegion() Obtain Logset region

Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLogRegion(string $LogRegion) Set Logset region

Note: This field may return null, indicating that no valid value can be obtained.
 */
class LogDeliveryInfo extends AbstractModel
{
    /**
     * @var boolean Whether log shipping is enabled. true: enabled; false: disabled.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Enabled;

    /**
     * @var string Logset ID.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LogsetId;

    /**
     * @var string Log topic ID.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TopicId;

    /**
     * @var string Logset region

Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LogRegion;

    /**
     * @param boolean $Enabled Whether log shipping is enabled. true: enabled; false: disabled.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $LogsetId Logset ID.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TopicId Log topic ID.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $LogRegion Logset region

Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("LogRegion",$param) and $param["LogRegion"] !== null) {
            $this->LogRegion = $param["LogRegion"];
        }
    }
}
