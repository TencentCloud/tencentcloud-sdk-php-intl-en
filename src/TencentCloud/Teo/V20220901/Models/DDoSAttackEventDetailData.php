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
 * The details of a DDoS attack event
 *
 * @method integer getAttackStatus() Obtain The attack status. Values:
<li>`1`: The attack is being observed;</li>
<li>`2`: The attack started;</li>
<li>`3`: The attack ended.</li>
 * @method void setAttackStatus(integer $AttackStatus) Set The attack status. Values:
<li>`1`: The attack is being observed;</li>
<li>`2`: The attack started;</li>
<li>`3`: The attack ended.</li>
 * @method string getAttackType() Obtain The attack type.
 * @method void setAttackType(string $AttackType) Set The attack type.
 * @method integer getEndTime() Obtain The end time.
 * @method void setEndTime(integer $EndTime) Set The end time.
 * @method integer getStartTime() Obtain The start time.
 * @method void setStartTime(integer $StartTime) Set The start time.
 * @method integer getMaxBandWidth() Obtain The maximum bandwidth.
 * @method void setMaxBandWidth(integer $MaxBandWidth) Set The maximum bandwidth.
 * @method integer getPacketMaxRate() Obtain The maximum packet rate.
 * @method void setPacketMaxRate(integer $PacketMaxRate) Set The maximum packet rate.
 * @method string getEventId() Obtain The event ID.
 * @method void setEventId(string $EventId) Set The event ID.
 * @method integer getPolicyId() Obtain The DDoS policy ID.
 * @method void setPolicyId(integer $PolicyId) Set The DDoS policy ID.
 */
class DDoSAttackEventDetailData extends AbstractModel
{
    /**
     * @var integer The attack status. Values:
<li>`1`: The attack is being observed;</li>
<li>`2`: The attack started;</li>
<li>`3`: The attack ended.</li>
     */
    public $AttackStatus;

    /**
     * @var string The attack type.
     */
    public $AttackType;

    /**
     * @var integer The end time.
     */
    public $EndTime;

    /**
     * @var integer The start time.
     */
    public $StartTime;

    /**
     * @var integer The maximum bandwidth.
     */
    public $MaxBandWidth;

    /**
     * @var integer The maximum packet rate.
     */
    public $PacketMaxRate;

    /**
     * @var string The event ID.
     */
    public $EventId;

    /**
     * @var integer The DDoS policy ID.
     */
    public $PolicyId;

    /**
     * @param integer $AttackStatus The attack status. Values:
<li>`1`: The attack is being observed;</li>
<li>`2`: The attack started;</li>
<li>`3`: The attack ended.</li>
     * @param string $AttackType The attack type.
     * @param integer $EndTime The end time.
     * @param integer $StartTime The start time.
     * @param integer $MaxBandWidth The maximum bandwidth.
     * @param integer $PacketMaxRate The maximum packet rate.
     * @param string $EventId The event ID.
     * @param integer $PolicyId The DDoS policy ID.
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
        if (array_key_exists("AttackStatus",$param) and $param["AttackStatus"] !== null) {
            $this->AttackStatus = $param["AttackStatus"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("MaxBandWidth",$param) and $param["MaxBandWidth"] !== null) {
            $this->MaxBandWidth = $param["MaxBandWidth"];
        }

        if (array_key_exists("PacketMaxRate",$param) and $param["PacketMaxRate"] !== null) {
            $this->PacketMaxRate = $param["PacketMaxRate"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }
    }
}
