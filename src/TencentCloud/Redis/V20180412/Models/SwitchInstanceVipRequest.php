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
 * @method string getSrcInstanceId() Obtain Source instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method void setSrcInstanceId(string $SrcInstanceId) Set Source instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method string getDstInstanceId() Obtain Target instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method void setDstInstanceId(string $DstInstanceId) Set Target instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method integer getTimeDelay() Obtain DTS disconnection time between the source instance and target instance. Unit: second. If the DTS disconnection time exceeds TimeDelay, the VIP will not be switched. It is recommended to set an acceptable value based on business needs.
 * @method void setTimeDelay(integer $TimeDelay) Set DTS disconnection time between the source instance and target instance. Unit: second. If the DTS disconnection time exceeds TimeDelay, the VIP will not be switched. It is recommended to set an acceptable value based on business needs.
 * @method integer getForceSwitch() Obtain Whether to force a switch in the case of a DTS disconnection.
- 1: Force the switch.
- 0: Do not force the switch.
 * @method void setForceSwitch(integer $ForceSwitch) Set Whether to force a switch in the case of a DTS disconnection.
- 1: Force the switch.
- 0: Do not force the switch.
 * @method string getSwitchTime() Obtain now: switch now; syncComplete: switch after sync is completed
 * @method void setSwitchTime(string $SwitchTime) Set now: switch now; syncComplete: switch after sync is completed
 */
class SwitchInstanceVipRequest extends AbstractModel
{
    /**
     * @var string Source instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     */
    public $SrcInstanceId;

    /**
     * @var string Target instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     */
    public $DstInstanceId;

    /**
     * @var integer DTS disconnection time between the source instance and target instance. Unit: second. If the DTS disconnection time exceeds TimeDelay, the VIP will not be switched. It is recommended to set an acceptable value based on business needs.
     */
    public $TimeDelay;

    /**
     * @var integer Whether to force a switch in the case of a DTS disconnection.
- 1: Force the switch.
- 0: Do not force the switch.
     */
    public $ForceSwitch;

    /**
     * @var string now: switch now; syncComplete: switch after sync is completed
     */
    public $SwitchTime;

    /**
     * @param string $SrcInstanceId Source instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     * @param string $DstInstanceId Target instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     * @param integer $TimeDelay DTS disconnection time between the source instance and target instance. Unit: second. If the DTS disconnection time exceeds TimeDelay, the VIP will not be switched. It is recommended to set an acceptable value based on business needs.
     * @param integer $ForceSwitch Whether to force a switch in the case of a DTS disconnection.
- 1: Force the switch.
- 0: Do not force the switch.
     * @param string $SwitchTime now: switch now; syncComplete: switch after sync is completed
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
