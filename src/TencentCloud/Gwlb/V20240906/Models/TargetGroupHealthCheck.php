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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of target group health check
 *
 * @method boolean getHealthSwitch() Obtain Whether to enable the health check.
 * @method void setHealthSwitch(boolean $HealthSwitch) Set Whether to enable the health check.
 * @method string getProtocol() Obtain Protocol used for health check, which supports PING and TCP and is PING by default.

- PING: icmp
- TCP: tcp
 * @method void setProtocol(string $Protocol) Set Protocol used for health check, which supports PING and TCP and is PING by default.

- PING: icmp
- TCP: tcp
 * @method integer getPort() Obtain Health check port, which is required when the probe protocol is TCP.
 * @method void setPort(integer $Port) Set Health check port, which is required when the probe protocol is TCP.
 * @method integer getTimeout() Obtain Health check timeout. The default is 2 seconds. Value range: 2-30 seconds.
 * @method void setTimeout(integer $Timeout) Set Health check timeout. The default is 2 seconds. Value range: 2-30 seconds.
 * @method integer getIntervalTime() Obtain Detection interval time. The default is 5 seconds. Value range: 2-300 seconds.
 * @method void setIntervalTime(integer $IntervalTime) Set Detection interval time. The default is 5 seconds. Value range: 2-300 seconds.
 * @method integer getHealthNum() Obtain Health detection threshold. The default is 3 times. Value range: 2-10 times.
 * @method void setHealthNum(integer $HealthNum) Set Health detection threshold. The default is 3 times. Value range: 2-10 times.
 * @method integer getUnHealthNum() Obtain Unhealth detection threshold. The default is 3 times. Value range: 2-10 times.
 * @method void setUnHealthNum(integer $UnHealthNum) Set Unhealth detection threshold. The default is 3 times. Value range: 2-10 times.
 */
class TargetGroupHealthCheck extends AbstractModel
{
    /**
     * @var boolean Whether to enable the health check.
     */
    public $HealthSwitch;

    /**
     * @var string Protocol used for health check, which supports PING and TCP and is PING by default.

- PING: icmp
- TCP: tcp
     */
    public $Protocol;

    /**
     * @var integer Health check port, which is required when the probe protocol is TCP.
     */
    public $Port;

    /**
     * @var integer Health check timeout. The default is 2 seconds. Value range: 2-30 seconds.
     */
    public $Timeout;

    /**
     * @var integer Detection interval time. The default is 5 seconds. Value range: 2-300 seconds.
     */
    public $IntervalTime;

    /**
     * @var integer Health detection threshold. The default is 3 times. Value range: 2-10 times.
     */
    public $HealthNum;

    /**
     * @var integer Unhealth detection threshold. The default is 3 times. Value range: 2-10 times.
     */
    public $UnHealthNum;

    /**
     * @param boolean $HealthSwitch Whether to enable the health check.
     * @param string $Protocol Protocol used for health check, which supports PING and TCP and is PING by default.

- PING: icmp
- TCP: tcp
     * @param integer $Port Health check port, which is required when the probe protocol is TCP.
     * @param integer $Timeout Health check timeout. The default is 2 seconds. Value range: 2-30 seconds.
     * @param integer $IntervalTime Detection interval time. The default is 5 seconds. Value range: 2-300 seconds.
     * @param integer $HealthNum Health detection threshold. The default is 3 times. Value range: 2-10 times.
     * @param integer $UnHealthNum Unhealth detection threshold. The default is 3 times. Value range: 2-10 times.
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
        if (array_key_exists("HealthSwitch",$param) and $param["HealthSwitch"] !== null) {
            $this->HealthSwitch = $param["HealthSwitch"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("IntervalTime",$param) and $param["IntervalTime"] !== null) {
            $this->IntervalTime = $param["IntervalTime"];
        }

        if (array_key_exists("HealthNum",$param) and $param["HealthNum"] !== null) {
            $this->HealthNum = $param["HealthNum"];
        }

        if (array_key_exists("UnHealthNum",$param) and $param["UnHealthNum"] !== null) {
            $this->UnHealthNum = $param["UnHealthNum"];
        }
    }
}
