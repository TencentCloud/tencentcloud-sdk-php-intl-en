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
 * DDoS attack event objects
 *
 * @method string getEventId() Obtain <p>Event ID.</p>
 * @method void setEventId(string $EventId) Set <p>Event ID.</p>
 * @method string getAttackType() Obtain <p>Attack type.</p>
 * @method void setAttackType(string $AttackType) Set <p>Attack type.</p>
 * @method integer getAttackStatus() Obtain <p>Attack status.</p><p>Enumeration values:</p><ul><li>0: Observing</li><li>1: Attacking</li><li>2: Attack ended</li></ul>
 * @method void setAttackStatus(integer $AttackStatus) Set <p>Attack status.</p><p>Enumeration values:</p><ul><li>0: Observing</li><li>1: Attacking</li><li>2: Attack ended</li></ul>
 * @method integer getAttackMaxBandWidth() Obtain <p>Maximum attack bandwidth, in bps.</p>
 * @method void setAttackMaxBandWidth(integer $AttackMaxBandWidth) Set <p>Maximum attack bandwidth, in bps.</p>
 * @method integer getAttackPacketMaxRate() Obtain <p>Peak attack packet rate, unit: pps.</p>
 * @method void setAttackPacketMaxRate(integer $AttackPacketMaxRate) Set <p>Peak attack packet rate, unit: pps.</p>
 * @method integer getAttackStartTime() Obtain <p>Attack start timestamp.</p><p>Unit: second</p>
 * @method void setAttackStartTime(integer $AttackStartTime) Set <p>Attack start timestamp.</p><p>Unit: second</p>
 * @method integer getAttackEndTime() Obtain <p>Attack end timestamp.</p><p>Unit: second</p>
 * @method void setAttackEndTime(integer $AttackEndTime) Set <p>Attack end timestamp.</p><p>Unit: second</p>
 * @method integer getPolicyId() Obtain <p>DDoS policy group ID.</p>
 * @method void setPolicyId(integer $PolicyId) Set <p>DDoS policy group ID.</p>
 * @method string getZoneId() Obtain <p>Zone ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Zone ID.</p>
 * @method string getArea() Obtain <p>Region of the attack event.</p><p>Enumeration values:</p><ul><li>overseas: global (excluding the Chinese mainland) data;</li><li>mainland: Chinese mainland data.</li></ul>
 * @method void setArea(string $Area) Set <p>Region of the attack event.</p><p>Enumeration values:</p><ul><li>overseas: global (excluding the Chinese mainland) data;</li><li>mainland: Chinese mainland data.</li></ul>
 * @method array getDDoSBlockData() Obtain <p>Block and unblock info.</p>
 * @method void setDDoSBlockData(array $DDoSBlockData) Set <p>Block and unblock info.</p>
 * @method array getDDoSAttackDips() Obtain <p>List of target IPs under DDoS attack.</p>
 * @method void setDDoSAttackDips(array $DDoSAttackDips) Set <p>List of target IPs under DDoS attack.</p>
 */
class DDoSAttackEvent extends AbstractModel
{
    /**
     * @var string <p>Event ID.</p>
     */
    public $EventId;

    /**
     * @var string <p>Attack type.</p>
     */
    public $AttackType;

    /**
     * @var integer <p>Attack status.</p><p>Enumeration values:</p><ul><li>0: Observing</li><li>1: Attacking</li><li>2: Attack ended</li></ul>
     */
    public $AttackStatus;

    /**
     * @var integer <p>Maximum attack bandwidth, in bps.</p>
     */
    public $AttackMaxBandWidth;

    /**
     * @var integer <p>Peak attack packet rate, unit: pps.</p>
     */
    public $AttackPacketMaxRate;

    /**
     * @var integer <p>Attack start timestamp.</p><p>Unit: second</p>
     */
    public $AttackStartTime;

    /**
     * @var integer <p>Attack end timestamp.</p><p>Unit: second</p>
     */
    public $AttackEndTime;

    /**
     * @var integer <p>DDoS policy group ID.</p>
     */
    public $PolicyId;

    /**
     * @var string <p>Zone ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Region of the attack event.</p><p>Enumeration values:</p><ul><li>overseas: global (excluding the Chinese mainland) data;</li><li>mainland: Chinese mainland data.</li></ul>
     */
    public $Area;

    /**
     * @var array <p>Block and unblock info.</p>
     */
    public $DDoSBlockData;

    /**
     * @var array <p>List of target IPs under DDoS attack.</p>
     */
    public $DDoSAttackDips;

    /**
     * @param string $EventId <p>Event ID.</p>
     * @param string $AttackType <p>Attack type.</p>
     * @param integer $AttackStatus <p>Attack status.</p><p>Enumeration values:</p><ul><li>0: Observing</li><li>1: Attacking</li><li>2: Attack ended</li></ul>
     * @param integer $AttackMaxBandWidth <p>Maximum attack bandwidth, in bps.</p>
     * @param integer $AttackPacketMaxRate <p>Peak attack packet rate, unit: pps.</p>
     * @param integer $AttackStartTime <p>Attack start timestamp.</p><p>Unit: second</p>
     * @param integer $AttackEndTime <p>Attack end timestamp.</p><p>Unit: second</p>
     * @param integer $PolicyId <p>DDoS policy group ID.</p>
     * @param string $ZoneId <p>Zone ID.</p>
     * @param string $Area <p>Region of the attack event.</p><p>Enumeration values:</p><ul><li>overseas: global (excluding the Chinese mainland) data;</li><li>mainland: Chinese mainland data.</li></ul>
     * @param array $DDoSBlockData <p>Block and unblock info.</p>
     * @param array $DDoSAttackDips <p>List of target IPs under DDoS attack.</p>
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
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

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("DDoSBlockData",$param) and $param["DDoSBlockData"] !== null) {
            $this->DDoSBlockData = [];
            foreach ($param["DDoSBlockData"] as $key => $value){
                $obj = new DDoSBlockData();
                $obj->deserialize($value);
                array_push($this->DDoSBlockData, $obj);
            }
        }

        if (array_key_exists("DDoSAttackDips",$param) and $param["DDoSAttackDips"] !== null) {
            $this->DDoSAttackDips = $param["DDoSAttackDips"];
        }
    }
}
