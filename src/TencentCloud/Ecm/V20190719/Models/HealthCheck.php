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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLB health check
 *
 * @method integer getHealthSwitch() Obtain Whether to enable health check. Valid values: 1: enable; 0: disable
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHealthSwitch(integer $HealthSwitch) Set Whether to enable health check. Valid values: 1: enable; 0: disable
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTimeOut() Obtain Health check response timeout period in seconds. Value range: 2–60. Default value: 2. The value of this parameter should be smaller than the check interval.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTimeOut(integer $TimeOut) Set Health check response timeout period in seconds. Value range: 2–60. Default value: 2. The value of this parameter should be smaller than the check interval.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getIntervalTime() Obtain Health check interval in seconds. Value range: 5–300. Default value: 5.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIntervalTime(integer $IntervalTime) Set Health check interval in seconds. Value range: 5–300. Default value: 5.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getHealthNum() Obtain Health threshold. Value range: 2–10. Default value: 3, indicating that if a forward is found healthy three consecutive times, it will be considered normal.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHealthNum(integer $HealthNum) Set Health threshold. Value range: 2–10. Default value: 3, indicating that if a forward is found healthy three consecutive times, it will be considered normal.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getUnHealthyNum() Obtain Unhealthy threshold. Value range: 2–10. Default value: 3, indicating that if a forward is found unhealthy three consecutive times, it will be considered exceptional.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUnHealthyNum(integer $UnHealthyNum) Set Unhealthy threshold. Value range: 2–10. Default value: 3, indicating that if a forward is found unhealthy three consecutive times, it will be considered exceptional.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCheckPort() Obtain Health check port (a custom check parameter), which is the port of the real server by default. Unless you want to specify a port, we recommend you leave it empty.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCheckPort(integer $CheckPort) Set Health check port (a custom check parameter), which is the port of the real server by default. Unless you want to specify a port, we recommend you leave it empty.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getContextType() Obtain Health check protocol (a custom check parameter), which is required if the value of `CheckType` is `CUSTOM`. This parameter represents the input format of the health check. Valid values: HEX, TEXT. If the value is `HEX`, the characters of `SendContext` and `RecvContext` can only be selected from `0123456789ABCDEF`, and the length must be an even number.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setContextType(string $ContextType) Set Health check protocol (a custom check parameter), which is required if the value of `CheckType` is `CUSTOM`. This parameter represents the input format of the health check. Valid values: HEX, TEXT. If the value is `HEX`, the characters of `SendContext` and `RecvContext` can only be selected from `0123456789ABCDEF`, and the length must be an even number.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSendContext() Obtain Health check protocol (a custom check parameter), which is required if the value of `CheckType` is `CUSTOM`. This parameter represents the content of the request sent by the health check. It can contain up to 500 visible ASCII characters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSendContext(string $SendContext) Set Health check protocol (a custom check parameter), which is required if the value of `CheckType` is `CUSTOM`. This parameter represents the content of the request sent by the health check. It can contain up to 500 visible ASCII characters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRecvContext() Obtain Health check protocol (a custom check parameter), which is required if the value of `CheckType` is `CUSTOM`. This parameter represents the result returned by the health check. It can contain up to 500 visible ASCII characters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRecvContext(string $RecvContext) Set Health check protocol (a custom check parameter), which is required if the value of `CheckType` is `CUSTOM`. This parameter represents the result returned by the health check. It can contain up to 500 visible ASCII characters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCheckType() Obtain Health check protocol (a custom check parameter). Valid values: TCP, CUSTOM (applicable only to UDP listeners. If custom health check is used, this parameter will be required).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCheckType(string $CheckType) Set Health check protocol (a custom check parameter). Valid values: TCP, CUSTOM (applicable only to UDP listeners. If custom health check is used, this parameter will be required).
Note: this field may return null, indicating that no valid values can be obtained.
 */
class HealthCheck extends AbstractModel
{
    /**
     * @var integer Whether to enable health check. Valid values: 1: enable; 0: disable
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $HealthSwitch;

    /**
     * @var integer Health check response timeout period in seconds. Value range: 2–60. Default value: 2. The value of this parameter should be smaller than the check interval.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TimeOut;

    /**
     * @var integer Health check interval in seconds. Value range: 5–300. Default value: 5.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IntervalTime;

    /**
     * @var integer Health threshold. Value range: 2–10. Default value: 3, indicating that if a forward is found healthy three consecutive times, it will be considered normal.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $HealthNum;

    /**
     * @var integer Unhealthy threshold. Value range: 2–10. Default value: 3, indicating that if a forward is found unhealthy three consecutive times, it will be considered exceptional.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UnHealthyNum;

    /**
     * @var integer Health check port (a custom check parameter), which is the port of the real server by default. Unless you want to specify a port, we recommend you leave it empty.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CheckPort;

    /**
     * @var string Health check protocol (a custom check parameter), which is required if the value of `CheckType` is `CUSTOM`. This parameter represents the input format of the health check. Valid values: HEX, TEXT. If the value is `HEX`, the characters of `SendContext` and `RecvContext` can only be selected from `0123456789ABCDEF`, and the length must be an even number.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ContextType;

    /**
     * @var string Health check protocol (a custom check parameter), which is required if the value of `CheckType` is `CUSTOM`. This parameter represents the content of the request sent by the health check. It can contain up to 500 visible ASCII characters.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SendContext;

    /**
     * @var string Health check protocol (a custom check parameter), which is required if the value of `CheckType` is `CUSTOM`. This parameter represents the result returned by the health check. It can contain up to 500 visible ASCII characters.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RecvContext;

    /**
     * @var string Health check protocol (a custom check parameter). Valid values: TCP, CUSTOM (applicable only to UDP listeners. If custom health check is used, this parameter will be required).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CheckType;

    /**
     * @param integer $HealthSwitch Whether to enable health check. Valid values: 1: enable; 0: disable
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TimeOut Health check response timeout period in seconds. Value range: 2–60. Default value: 2. The value of this parameter should be smaller than the check interval.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $IntervalTime Health check interval in seconds. Value range: 5–300. Default value: 5.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $HealthNum Health threshold. Value range: 2–10. Default value: 3, indicating that if a forward is found healthy three consecutive times, it will be considered normal.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $UnHealthyNum Unhealthy threshold. Value range: 2–10. Default value: 3, indicating that if a forward is found unhealthy three consecutive times, it will be considered exceptional.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $CheckPort Health check port (a custom check parameter), which is the port of the real server by default. Unless you want to specify a port, we recommend you leave it empty.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ContextType Health check protocol (a custom check parameter), which is required if the value of `CheckType` is `CUSTOM`. This parameter represents the input format of the health check. Valid values: HEX, TEXT. If the value is `HEX`, the characters of `SendContext` and `RecvContext` can only be selected from `0123456789ABCDEF`, and the length must be an even number.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SendContext Health check protocol (a custom check parameter), which is required if the value of `CheckType` is `CUSTOM`. This parameter represents the content of the request sent by the health check. It can contain up to 500 visible ASCII characters.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RecvContext Health check protocol (a custom check parameter), which is required if the value of `CheckType` is `CUSTOM`. This parameter represents the result returned by the health check. It can contain up to 500 visible ASCII characters.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CheckType Health check protocol (a custom check parameter). Valid values: TCP, CUSTOM (applicable only to UDP listeners. If custom health check is used, this parameter will be required).
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("TimeOut",$param) and $param["TimeOut"] !== null) {
            $this->TimeOut = $param["TimeOut"];
        }

        if (array_key_exists("IntervalTime",$param) and $param["IntervalTime"] !== null) {
            $this->IntervalTime = $param["IntervalTime"];
        }

        if (array_key_exists("HealthNum",$param) and $param["HealthNum"] !== null) {
            $this->HealthNum = $param["HealthNum"];
        }

        if (array_key_exists("UnHealthyNum",$param) and $param["UnHealthyNum"] !== null) {
            $this->UnHealthyNum = $param["UnHealthyNum"];
        }

        if (array_key_exists("CheckPort",$param) and $param["CheckPort"] !== null) {
            $this->CheckPort = $param["CheckPort"];
        }

        if (array_key_exists("ContextType",$param) and $param["ContextType"] !== null) {
            $this->ContextType = $param["ContextType"];
        }

        if (array_key_exists("SendContext",$param) and $param["SendContext"] !== null) {
            $this->SendContext = $param["SendContext"];
        }

        if (array_key_exists("RecvContext",$param) and $param["RecvContext"] !== null) {
            $this->RecvContext = $param["RecvContext"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }
    }
}
