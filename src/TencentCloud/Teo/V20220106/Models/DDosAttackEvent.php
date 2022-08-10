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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS attack event object
 *
 * @method integer getPolicyId() Obtain DDoS policy group ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolicyId(integer $PolicyId) Set DDoS policy group ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAttackType() Obtain Attack type (corresponding to interaction event name)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackType(string $AttackType) Set Attack type (corresponding to interaction event name)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAttackStatus() Obtain Attack status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackStatus(integer $AttackStatus) Set Attack status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAttackMaxBandWidth() Obtain Maximum attack bandwidth
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackMaxBandWidth(integer $AttackMaxBandWidth) Set Maximum attack bandwidth
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAttackPacketMaxRate() Obtain Peak attack packet rate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackPacketMaxRate(integer $AttackPacketMaxRate) Set Peak attack packet rate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAttackStartTime() Obtain Attack start time in seconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackStartTime(integer $AttackStartTime) Set Attack start time in seconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAttackEndTime() Obtain Attack end time in seconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackEndTime(integer $AttackEndTime) Set Attack end time in seconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEventId() Obtain Event ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEventId(string $EventId) Set Event ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZoneId() Obtain Site ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneId(string $ZoneId) Set Site ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DDosAttackEvent extends AbstractModel
{
    /**
     * @var integer DDoS policy group ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PolicyId;

    /**
     * @var string Attack type (corresponding to interaction event name)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackType;

    /**
     * @var integer Attack status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackStatus;

    /**
     * @var integer Maximum attack bandwidth
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackMaxBandWidth;

    /**
     * @var integer Peak attack packet rate
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackPacketMaxRate;

    /**
     * @var integer Attack start time in seconds
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackStartTime;

    /**
     * @var integer Attack end time in seconds
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackEndTime;

    /**
     * @var string Event ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EventId;

    /**
     * @var string Site ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneId;

    /**
     * @param integer $PolicyId DDoS policy group ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AttackType Attack type (corresponding to interaction event name)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AttackStatus Attack status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AttackMaxBandWidth Maximum attack bandwidth
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AttackPacketMaxRate Peak attack packet rate
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AttackStartTime Attack start time in seconds
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AttackEndTime Attack end time in seconds
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EventId Event ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ZoneId Site ID
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("AttackStatus",$param) and $param["AttackStatus"] !== null) {
            $this->AttackStatus = $param["AttackStatus"];
        }

        if (array_key_exists("AttackMaxBandWidth",$param) and $param["AttackMaxBandWidth"] !== null) {
            $this->AttackMaxBandWidth = $param["AttackMaxBandWidth"];
        }

        if (array_key_exists("AttackPacketMaxRate",$param) and $param["AttackPacketMaxRate"] !== null) {
            $this->AttackPacketMaxRate = $param["AttackPacketMaxRate"];
        }

        if (array_key_exists("AttackStartTime",$param) and $param["AttackStartTime"] !== null) {
            $this->AttackStartTime = $param["AttackStartTime"];
        }

        if (array_key_exists("AttackEndTime",$param) and $param["AttackEndTime"] !== null) {
            $this->AttackEndTime = $param["AttackEndTime"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }
    }
}
