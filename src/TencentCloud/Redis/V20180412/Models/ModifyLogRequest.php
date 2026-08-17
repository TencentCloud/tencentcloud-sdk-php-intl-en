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
 * ModifyLog request structure.
 *
 * @method string getInstanceId() Obtain <p>Specify the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Specify the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
 * @method string getLogType() Obtain <p>Log type.</p><p>Enumeration value:</p><ul><li>auditLog: Audit log.</li></ul>
 * @method void setLogType(string $LogType) Set <p>Log type.</p><p>Enumeration value:</p><ul><li>auditLog: Audit log.</li></ul>
 * @method string getLogSubType() Obtain <p>Log subcategory.</p><p>Enumeration value:</p><ul><li>write: Write command.</li><li>read: Read command.</li><li>all: All commands.</li></ul>
 * @method void setLogSubType(string $LogSubType) Set <p>Log subcategory.</p><p>Enumeration value:</p><ul><li>write: Write command.</li><li>read: Read command.</li><li>all: All commands.</li></ul>
 * @method integer getLogExpireDay() Obtain <p>Log expiration time, unit: day.</p><p>Enumeration value:</p><ul><li>7: 7 days</li><li>30: 30 days</li></ul>
 * @method void setLogExpireDay(integer $LogExpireDay) Set <p>Log expiration time, unit: day.</p><p>Enumeration value:</p><ul><li>7: 7 days</li><li>30: 30 days</li></ul>
 * @method integer getHighLogExpireDay() Obtain <p>High-frequency log expiration time, unit: day.</p><p>Enumeration value:</p><ul><li>7: 7 days</li></ul><p>Default value: 7</p>
 * @method void setHighLogExpireDay(integer $HighLogExpireDay) Set <p>High-frequency log expiration time, unit: day.</p><p>Enumeration value:</p><ul><li>7: 7 days</li></ul><p>Default value: 7</p>
 * @method integer getDegradeStrategy() Obtain <p>Downgrade policy, unit: ms. When the instance P99 reaches the downgrade policy, audit data is automatically discarded to prioritize business availability. Default value: 500 ms.</p><p>Value ranges from 300 to 1000.</p>
 * @method void setDegradeStrategy(integer $DegradeStrategy) Set <p>Downgrade policy, unit: ms. When the instance P99 reaches the downgrade policy, audit data is automatically discarded to prioritize business availability. Default value: 500 ms.</p><p>Value ranges from 300 to 1000.</p>
 */
class ModifyLogRequest extends AbstractModel
{
    /**
     * @var string <p>Specify the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Log type.</p><p>Enumeration value:</p><ul><li>auditLog: Audit log.</li></ul>
     */
    public $LogType;

    /**
     * @var string <p>Log subcategory.</p><p>Enumeration value:</p><ul><li>write: Write command.</li><li>read: Read command.</li><li>all: All commands.</li></ul>
     */
    public $LogSubType;

    /**
     * @var integer <p>Log expiration time, unit: day.</p><p>Enumeration value:</p><ul><li>7: 7 days</li><li>30: 30 days</li></ul>
     */
    public $LogExpireDay;

    /**
     * @var integer <p>High-frequency log expiration time, unit: day.</p><p>Enumeration value:</p><ul><li>7: 7 days</li></ul><p>Default value: 7</p>
     */
    public $HighLogExpireDay;

    /**
     * @var integer <p>Downgrade policy, unit: ms. When the instance P99 reaches the downgrade policy, audit data is automatically discarded to prioritize business availability. Default value: 500 ms.</p><p>Value ranges from 300 to 1000.</p>
     */
    public $DegradeStrategy;

    /**
     * @param string $InstanceId <p>Specify the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
     * @param string $LogType <p>Log type.</p><p>Enumeration value:</p><ul><li>auditLog: Audit log.</li></ul>
     * @param string $LogSubType <p>Log subcategory.</p><p>Enumeration value:</p><ul><li>write: Write command.</li><li>read: Read command.</li><li>all: All commands.</li></ul>
     * @param integer $LogExpireDay <p>Log expiration time, unit: day.</p><p>Enumeration value:</p><ul><li>7: 7 days</li><li>30: 30 days</li></ul>
     * @param integer $HighLogExpireDay <p>High-frequency log expiration time, unit: day.</p><p>Enumeration value:</p><ul><li>7: 7 days</li></ul><p>Default value: 7</p>
     * @param integer $DegradeStrategy <p>Downgrade policy, unit: ms. When the instance P99 reaches the downgrade policy, audit data is automatically discarded to prioritize business availability. Default value: 500 ms.</p><p>Value ranges from 300 to 1000.</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("LogSubType",$param) and $param["LogSubType"] !== null) {
            $this->LogSubType = $param["LogSubType"];
        }

        if (array_key_exists("LogExpireDay",$param) and $param["LogExpireDay"] !== null) {
            $this->LogExpireDay = $param["LogExpireDay"];
        }

        if (array_key_exists("HighLogExpireDay",$param) and $param["HighLogExpireDay"] !== null) {
            $this->HighLogExpireDay = $param["HighLogExpireDay"];
        }

        if (array_key_exists("DegradeStrategy",$param) and $param["DegradeStrategy"] !== null) {
            $this->DegradeStrategy = $param["DegradeStrategy"];
        }
    }
}
