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
 * SwitchInstanceVip request structure.
 *
 * @method string getSrcInstanceId() Obtain Source instance ID.
 * @method void setSrcInstanceId(string $SrcInstanceId) Set Source instance ID.
 * @method string getDstInstanceId() Obtain Target instance ID.
 * @method void setDstInstanceId(string $DstInstanceId) Set Target instance ID.
 * @method integer getTimeDelay() Obtain The time that lapses in seconds since DTS is disconnected between the source instance and the target instance. If the DTS disconnection time period is greater than `TimeDelay`, the VIP will not be switched. We recommend setting an acceptable value based on the actual business conditions.
 * @method void setTimeDelay(integer $TimeDelay) Set The time that lapses in seconds since DTS is disconnected between the source instance and the target instance. If the DTS disconnection time period is greater than `TimeDelay`, the VIP will not be switched. We recommend setting an acceptable value based on the actual business conditions.
 * @method integer getForceSwitch() Obtain Whether to force the switch when DTS is disconnected. Valid values: 1 (yes), 0 (no).
 * @method void setForceSwitch(integer $ForceSwitch) Set Whether to force the switch when DTS is disconnected. Valid values: 1 (yes), 0 (no).
 * @method string getSwitchTime() Obtain Valid values: now (switch now), syncComplete (switch after sync is completed).
 * @method void setSwitchTime(string $SwitchTime) Set Valid values: now (switch now), syncComplete (switch after sync is completed).
 */
class SwitchInstanceVipRequest extends AbstractModel
{
    /**
     * @var string Source instance ID.
     */
    public $SrcInstanceId;

    /**
     * @var string Target instance ID.
     */
    public $DstInstanceId;

    /**
     * @var integer The time that lapses in seconds since DTS is disconnected between the source instance and the target instance. If the DTS disconnection time period is greater than `TimeDelay`, the VIP will not be switched. We recommend setting an acceptable value based on the actual business conditions.
     */
    public $TimeDelay;

    /**
     * @var integer Whether to force the switch when DTS is disconnected. Valid values: 1 (yes), 0 (no).
     */
    public $ForceSwitch;

    /**
     * @var string Valid values: now (switch now), syncComplete (switch after sync is completed).
     */
    public $SwitchTime;

    /**
     * @param string $SrcInstanceId Source instance ID.
     * @param string $DstInstanceId Target instance ID.
     * @param integer $TimeDelay The time that lapses in seconds since DTS is disconnected between the source instance and the target instance. If the DTS disconnection time period is greater than `TimeDelay`, the VIP will not be switched. We recommend setting an acceptable value based on the actual business conditions.
     * @param integer $ForceSwitch Whether to force the switch when DTS is disconnected. Valid values: 1 (yes), 0 (no).
     * @param string $SwitchTime Valid values: now (switch now), syncComplete (switch after sync is completed).
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
        if (array_key_exists("SrcInstanceId",$param) and $param["SrcInstanceId"] !== null) {
            $this->SrcInstanceId = $param["SrcInstanceId"];
        }

        if (array_key_exists("DstInstanceId",$param) and $param["DstInstanceId"] !== null) {
            $this->DstInstanceId = $param["DstInstanceId"];
        }

        if (array_key_exists("TimeDelay",$param) and $param["TimeDelay"] !== null) {
            $this->TimeDelay = $param["TimeDelay"];
        }

        if (array_key_exists("ForceSwitch",$param) and $param["ForceSwitch"] !== null) {
            $this->ForceSwitch = $param["ForceSwitch"];
        }

        if (array_key_exists("SwitchTime",$param) and $param["SwitchTime"] !== null) {
            $this->SwitchTime = $param["SwitchTime"];
        }
    }
}
