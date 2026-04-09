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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Trigger threshold for verification in Bot management.
 *
 * @method string getMaxNewSessionCountInterval() Obtain Time window for trigger threshold statistics. valid values: <li>5s: within 5 seconds;</li><li>10s: within 10 seconds;</li><li>15s: within 15 seconds;</li><li>30s: within 30 seconds;</li><li>60s: within 60 seconds;</li><li>5m: within 5 minutes;</li><li>10m: within 10 minutes;</li><li>30m: within 30 minutes;</li><li>60m: within 60 minutes.</li>.
 * @method void setMaxNewSessionCountInterval(string $MaxNewSessionCountInterval) Set Time window for trigger threshold statistics. valid values: <li>5s: within 5 seconds;</li><li>10s: within 10 seconds;</li><li>15s: within 15 seconds;</li><li>30s: within 30 seconds;</li><li>60s: within 60 seconds;</li><li>5m: within 5 minutes;</li><li>10m: within 10 minutes;</li><li>30m: within 30 minutes;</li><li>60m: within 60 minutes.</li>.
 * @method integer getMaxNewSessionCountThreshold() Obtain Trigger threshold cumulative count. value range: 1-100000000.
 * @method void setMaxNewSessionCountThreshold(integer $MaxNewSessionCountThreshold) Set Trigger threshold cumulative count. value range: 1-100000000.
 */
class MaxNewSessionTriggerConfig extends AbstractModel
{
    /**
     * @var string Time window for trigger threshold statistics. valid values: <li>5s: within 5 seconds;</li><li>10s: within 10 seconds;</li><li>15s: within 15 seconds;</li><li>30s: within 30 seconds;</li><li>60s: within 60 seconds;</li><li>5m: within 5 minutes;</li><li>10m: within 10 minutes;</li><li>30m: within 30 minutes;</li><li>60m: within 60 minutes.</li>.
     */
    public $MaxNewSessionCountInterval;

    /**
     * @var integer Trigger threshold cumulative count. value range: 1-100000000.
     */
    public $MaxNewSessionCountThreshold;

    /**
     * @param string $MaxNewSessionCountInterval Time window for trigger threshold statistics. valid values: <li>5s: within 5 seconds;</li><li>10s: within 10 seconds;</li><li>15s: within 15 seconds;</li><li>30s: within 30 seconds;</li><li>60s: within 60 seconds;</li><li>5m: within 5 minutes;</li><li>10m: within 10 minutes;</li><li>30m: within 30 minutes;</li><li>60m: within 60 minutes.</li>.
     * @param integer $MaxNewSessionCountThreshold Trigger threshold cumulative count. value range: 1-100000000.
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
        if (array_key_exists("MaxNewSessionCountInterval",$param) and $param["MaxNewSessionCountInterval"] !== null) {
            $this->MaxNewSessionCountInterval = $param["MaxNewSessionCountInterval"];
        }

        if (array_key_exists("MaxNewSessionCountThreshold",$param) and $param["MaxNewSessionCountThreshold"] !== null) {
            $this->MaxNewSessionCountThreshold = $param["MaxNewSessionCountThreshold"];
        }
    }
}
