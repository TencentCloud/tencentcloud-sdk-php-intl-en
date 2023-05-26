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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the DDoS attacker
 *
 * @method string getEventId() Obtain The event ID.
 * @method void setEventId(string $EventId) Set The event ID.
 * @method string getAttackType() Obtain The attack type.
 * @method void setAttackType(string $AttackType) Set The attack type.
 * @method integer getAttackStatus() Obtain The attack status.
 * @method void setAttackStatus(integer $AttackStatus) Set The attack status.
 * @method integer getAttackMaxBandWidth() Obtain The maximum attack bandwidth.
 * @method void setAttackMaxBandWidth(integer $AttackMaxBandWidth) Set The maximum attack bandwidth.
 * @method integer getAttackPacketMaxRate() Obtain The peak attack packet rate.
 * @method void setAttackPacketMaxRate(integer $AttackPacketMaxRate) Set The peak attack packet rate.
 * @method integer getAttackStartTime() Obtain The attack start time recorded in seconds.
 * @method void setAttackStartTime(integer $AttackStartTime) Set The attack start time recorded in seconds.
 * @method integer getAttackEndTime() Obtain The attack end time recorded in seconds.
 * @method void setAttackEndTime(integer $AttackEndTime) Set The attack end time recorded in seconds.
 * @method integer getPolicyId() Obtain The DDoS policy ID. 
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setPolicyId(integer $PolicyId) Set The DDoS policy ID. 
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getZoneId() Obtain The site ID. 
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setZoneId(string $ZoneId) Set The site ID. 
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getArea() Obtain Geolocation scope. Values: 
<li>`overseas`: Regions outside the Chinese mainland</li>
<li>`mainland`: Chinese mainland</li>
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setArea(string $Area) Set Geolocation scope. Values: 
<li>`overseas`: Regions outside the Chinese mainland</li>
<li>`mainland`: Chinese mainland</li>
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getDDoSBlockData() Obtain The blocking time of a DDoS attack. 
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setDDoSBlockData(array $DDoSBlockData) Set The blocking time of a DDoS attack. 
Note: This field may return `null`, indicating that no valid value was found.
 */
class DDoSAttackEvent extends AbstractModel
{
    /**
     * @var string The event ID.
     */
    public $EventId;

    /**
     * @var string The attack type.
     */
    public $AttackType;

    /**
     * @var integer The attack status.
     */
    public $AttackStatus;

    /**
     * @var integer The maximum attack bandwidth.
     */
    public $AttackMaxBandWidth;

    /**
     * @var integer The peak attack packet rate.
     */
    public $AttackPacketMaxRate;

    /**
     * @var integer The attack start time recorded in seconds.
     */
    public $AttackStartTime;

    /**
     * @var integer The attack end time recorded in seconds.
     */
    public $AttackEndTime;

    /**
     * @var integer The DDoS policy ID. 
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $PolicyId;

    /**
     * @var string The site ID. 
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ZoneId;

    /**
     * @var string Geolocation scope. Values: 
<li>`overseas`: Regions outside the Chinese mainland</li>
<li>`mainland`: Chinese mainland</li>
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Area;

    /**
     * @var array The blocking time of a DDoS attack. 
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $DDoSBlockData;

    /**
     * @param string $EventId The event ID.
     * @param string $AttackType The attack type.
     * @param integer $AttackStatus The attack status.
     * @param integer $AttackMaxBandWidth The maximum attack bandwidth.
     * @param integer $AttackPacketMaxRate The peak attack packet rate.
     * @param integer $AttackStartTime The attack start time recorded in seconds.
     * @param integer $AttackEndTime The attack end time recorded in seconds.
     * @param integer $PolicyId The DDoS policy ID. 
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $ZoneId The site ID. 
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $Area Geolocation scope. Values: 
<li>`overseas`: Regions outside the Chinese mainland</li>
<li>`mainland`: Chinese mainland</li>
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $DDoSBlockData The blocking time of a DDoS attack. 
Note: This field may return `null`, indicating that no valid value was found.
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
    }
}
