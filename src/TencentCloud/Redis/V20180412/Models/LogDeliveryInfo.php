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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log shipping information.
 *
 * @method boolean getEnabled() Obtain Enabling status of log shipping. true: enabled; false: disabled.
 * @method void setEnabled(boolean $Enabled) Set Enabling status of log shipping. true: enabled; false: disabled.
 * @method string getLogsetId() Obtain Log set ID.
 * @method void setLogsetId(string $LogsetId) Set Log set ID.
 * @method string getTopicId() Obtain Log topic ID.
 * @method void setTopicId(string $TopicId) Set Log topic ID.
 * @method string getLogRegion() Obtain Logset region
 * @method void setLogRegion(string $LogRegion) Set Logset region
 */
class LogDeliveryInfo extends AbstractModel
{
    /**
     * @var boolean Enabling status of log shipping. true: enabled; false: disabled.
     */
    public $Enabled;

    /**
     * @var string Log set ID.
     */
    public $LogsetId;

    /**
     * @var string Log topic ID.
     */
    public $TopicId;

    /**
     * @var string Logset region
     */
    public $LogRegion;

    /**
     * @param boolean $Enabled Enabling status of log shipping. true: enabled; false: disabled.
     * @param string $LogsetId Log set ID.
     * @param string $TopicId Log topic ID.
     * @param string $LogRegion Logset region
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
