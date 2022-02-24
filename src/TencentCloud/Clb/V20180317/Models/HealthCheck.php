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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Health check information.
Note: Custom check parameters are currently supported only in certain beta test regions.
 *
 * @method integer getHealthSwitch() Obtain Whether to enable health check. 1: enable; 0: disable.
 * @method void setHealthSwitch(integer $HealthSwitch) Set Whether to enable health check. 1: enable; 0: disable.
 * @method integer getTimeOut() Obtain Health check response timeout period in seconds (applicable only to layer-4 listeners). Value range: 2-60. Default value: 2. This parameter should be less than the check interval.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimeOut(integer $TimeOut) Set Health check response timeout period in seconds (applicable only to layer-4 listeners). Value range: 2-60. Default value: 2. This parameter should be less than the check interval.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIntervalTime() Obtain Health check interval in seconds. Value range: 5-300. Default value: 5.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIntervalTime(integer $IntervalTime) Set Health check interval in seconds. Value range: 5-300. Default value: 5.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHealthNum() Obtain Health threshold. Default value: 3, indicating that if a forward is found healthy three consecutive times, it is considered to be normal. Value range: 2-10
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHealthNum(integer $HealthNum) Set Health threshold. Default value: 3, indicating that if a forward is found healthy three consecutive times, it is considered to be normal. Value range: 2-10
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUnHealthNum() Obtain Unhealthy threshold. Default value: 3, indicating that if a forward is found unhealthy three consecutive times, it is considered to be exceptional. Value range: 2-10
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnHealthNum(integer $UnHealthNum) Set Unhealthy threshold. Default value: 3, indicating that if a forward is found unhealthy three consecutive times, it is considered to be exceptional. Value range: 2-10
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHttpCode() Obtain Health check status code (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners). Value range: 1-31. Default value: 31.
1 means that the return value of 1xx after detection means healthy, 2 for returning 2xx for healthy, 4 for returning 3xx for healthy, 8 for returning 4xx for healthy, and 16 for returning 5xx for healthy. If you want multiple return codes to represent healthy, sum up the corresponding values. Note: The HTTP health check mode of TCP listeners only supports specifying one kind of health check status code.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpCode(integer $HttpCode) Set Health check status code (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners). Value range: 1-31. Default value: 31.
1 means that the return value of 1xx after detection means healthy, 2 for returning 2xx for healthy, 4 for returning 3xx for healthy, 8 for returning 4xx for healthy, and 16 for returning 5xx for healthy. If you want multiple return codes to represent healthy, sum up the corresponding values. Note: The HTTP health check mode of TCP listeners only supports specifying one kind of health check status code.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHttpCheckPath() Obtain Health check path (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpCheckPath(string $HttpCheckPath) Set Health check path (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHttpCheckDomain() Obtain Health check domain name (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpCheckDomain(string $HttpCheckDomain) Set Health check domain name (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHttpCheckMethod() Obtain Health check method (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners). Value range: HEAD, GET. Default value: HEAD.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpCheckMethod(string $HttpCheckMethod) Set Health check method (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners). Value range: HEAD, GET. Default value: HEAD.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCheckPort() Obtain Health check port (a custom check parameter), which is the port of the real server by default. Unless you want to specify a port, it is recommended to leave it empty. (Applicable only to TCP/UDP listeners.)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCheckPort(integer $CheckPort) Set Health check port (a custom check parameter), which is the port of the real server by default. Unless you want to specify a port, it is recommended to leave it empty. (Applicable only to TCP/UDP listeners.)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContextType() Obtain Health check protocol (a custom check parameter), which is required if the value of CheckType is CUSTOM. This parameter represents the input format of the health check. Value range: HEX, TEXT. If the value is HEX, the characters of SendContext and RecvContext can only be selected from 0123456789ABCDEF and the length must be an even number. (Applicable only to TCP/UDP listeners.)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContextType(string $ContextType) Set Health check protocol (a custom check parameter), which is required if the value of CheckType is CUSTOM. This parameter represents the input format of the health check. Value range: HEX, TEXT. If the value is HEX, the characters of SendContext and RecvContext can only be selected from 0123456789ABCDEF and the length must be an even number. (Applicable only to TCP/UDP listeners.)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSendContext() Obtain Health check protocol (a custom check parameter), which is required if the value of CheckType is CUSTOM. This parameter represents the content of the request sent by the health check. Only ASCII visible characters are allowed, and the maximum length is 500. (Applicable only to TCP/UDP listeners.)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSendContext(string $SendContext) Set Health check protocol (a custom check parameter), which is required if the value of CheckType is CUSTOM. This parameter represents the content of the request sent by the health check. Only ASCII visible characters are allowed, and the maximum length is 500. (Applicable only to TCP/UDP listeners.)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRecvContext() Obtain Health check protocol (a custom check parameter), which is required if the value of CheckType is CUSTOM. This parameter represents the result returned by the health check. Only ASCII visible characters are allowed, and the maximum length is 500. (Applicable only to TCP/UDP listeners.)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecvContext(string $RecvContext) Set Health check protocol (a custom check parameter), which is required if the value of CheckType is CUSTOM. This parameter represents the result returned by the health check. Only ASCII visible characters are allowed, and the maximum length is 500. (Applicable only to TCP/UDP listeners.)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCheckType() Obtain Health check protocol (a custom check parameter). Value range: TCP, HTTP, CUSTOM (applicable only to TCP/UDP listeners, where UDP listeners only support CUSTOM. If custom health check is used, this parameter is required).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCheckType(string $CheckType) Set Health check protocol (a custom check parameter). Value range: TCP, HTTP, CUSTOM (applicable only to TCP/UDP listeners, where UDP listeners only support CUSTOM. If custom health check is used, this parameter is required).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHttpVersion() Obtain Health check protocol (a custom check parameter), which is required if the value of CheckType is HTTP. This parameter represents the HTTP version of the real server. Value range: HTTP/1.0, HTTP/1.1. (Applicable only to TCP listeners.)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpVersion(string $HttpVersion) Set Health check protocol (a custom check parameter), which is required if the value of CheckType is HTTP. This parameter represents the HTTP version of the real server. Value range: HTTP/1.0, HTTP/1.1. (Applicable only to TCP listeners.)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSourceIpType() Obtain Specifies the type of IP for health check. `0` (default): Use the CLB VIP as the source IP. `1`: Use the IP range starting with 100.64 as the source IP.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSourceIpType(integer $SourceIpType) Set Specifies the type of IP for health check. `0` (default): Use the CLB VIP as the source IP. `1`: Use the IP range starting with 100.64 as the source IP.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class HealthCheck extends AbstractModel
{
    /**
     * @var integer Whether to enable health check. 1: enable; 0: disable.
     */
    public $HealthSwitch;

    /**
     * @var integer Health check response timeout period in seconds (applicable only to layer-4 listeners). Value range: 2-60. Default value: 2. This parameter should be less than the check interval.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimeOut;

    /**
     * @var integer Health check interval in seconds. Value range: 5-300. Default value: 5.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IntervalTime;

    /**
     * @var integer Health threshold. Default value: 3, indicating that if a forward is found healthy three consecutive times, it is considered to be normal. Value range: 2-10
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HealthNum;

    /**
     * @var integer Unhealthy threshold. Default value: 3, indicating that if a forward is found unhealthy three consecutive times, it is considered to be exceptional. Value range: 2-10
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UnHealthNum;

    /**
     * @var integer Health check status code (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners). Value range: 1-31. Default value: 31.
1 means that the return value of 1xx after detection means healthy, 2 for returning 2xx for healthy, 4 for returning 3xx for healthy, 8 for returning 4xx for healthy, and 16 for returning 5xx for healthy. If you want multiple return codes to represent healthy, sum up the corresponding values. Note: The HTTP health check mode of TCP listeners only supports specifying one kind of health check status code.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpCode;

    /**
     * @var string Health check path (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpCheckPath;

    /**
     * @var string Health check domain name (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpCheckDomain;

    /**
     * @var string Health check method (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners). Value range: HEAD, GET. Default value: HEAD.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpCheckMethod;

    /**
     * @var integer Health check port (a custom check parameter), which is the port of the real server by default. Unless you want to specify a port, it is recommended to leave it empty. (Applicable only to TCP/UDP listeners.)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CheckPort;

    /**
     * @var string Health check protocol (a custom check parameter), which is required if the value of CheckType is CUSTOM. This parameter represents the input format of the health check. Value range: HEX, TEXT. If the value is HEX, the characters of SendContext and RecvContext can only be selected from 0123456789ABCDEF and the length must be an even number. (Applicable only to TCP/UDP listeners.)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContextType;

    /**
     * @var string Health check protocol (a custom check parameter), which is required if the value of CheckType is CUSTOM. This parameter represents the content of the request sent by the health check. Only ASCII visible characters are allowed, and the maximum length is 500. (Applicable only to TCP/UDP listeners.)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SendContext;

    /**
     * @var string Health check protocol (a custom check parameter), which is required if the value of CheckType is CUSTOM. This parameter represents the result returned by the health check. Only ASCII visible characters are allowed, and the maximum length is 500. (Applicable only to TCP/UDP listeners.)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecvContext;

    /**
     * @var string Health check protocol (a custom check parameter). Value range: TCP, HTTP, CUSTOM (applicable only to TCP/UDP listeners, where UDP listeners only support CUSTOM. If custom health check is used, this parameter is required).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CheckType;

    /**
     * @var string Health check protocol (a custom check parameter), which is required if the value of CheckType is HTTP. This parameter represents the HTTP version of the real server. Value range: HTTP/1.0, HTTP/1.1. (Applicable only to TCP listeners.)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpVersion;

    /**
     * @var integer Specifies the type of IP for health check. `0` (default): Use the CLB VIP as the source IP. `1`: Use the IP range starting with 100.64 as the source IP.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SourceIpType;

    /**
     * @param integer $HealthSwitch Whether to enable health check. 1: enable; 0: disable.
     * @param integer $TimeOut Health check response timeout period in seconds (applicable only to layer-4 listeners). Value range: 2-60. Default value: 2. This parameter should be less than the check interval.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IntervalTime Health check interval in seconds. Value range: 5-300. Default value: 5.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $HealthNum Health threshold. Default value: 3, indicating that if a forward is found healthy three consecutive times, it is considered to be normal. Value range: 2-10
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $UnHealthNum Unhealthy threshold. Default value: 3, indicating that if a forward is found unhealthy three consecutive times, it is considered to be exceptional. Value range: 2-10
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $HttpCode Health check status code (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners). Value range: 1-31. Default value: 31.
1 means that the return value of 1xx after detection means healthy, 2 for returning 2xx for healthy, 4 for returning 3xx for healthy, 8 for returning 4xx for healthy, and 16 for returning 5xx for healthy. If you want multiple return codes to represent healthy, sum up the corresponding values. Note: The HTTP health check mode of TCP listeners only supports specifying one kind of health check status code.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HttpCheckPath Health check path (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HttpCheckDomain Health check domain name (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HttpCheckMethod Health check method (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners). Value range: HEAD, GET. Default value: HEAD.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CheckPort Health check port (a custom check parameter), which is the port of the real server by default. Unless you want to specify a port, it is recommended to leave it empty. (Applicable only to TCP/UDP listeners.)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ContextType Health check protocol (a custom check parameter), which is required if the value of CheckType is CUSTOM. This parameter represents the input format of the health check. Value range: HEX, TEXT. If the value is HEX, the characters of SendContext and RecvContext can only be selected from 0123456789ABCDEF and the length must be an even number. (Applicable only to TCP/UDP listeners.)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SendContext Health check protocol (a custom check parameter), which is required if the value of CheckType is CUSTOM. This parameter represents the content of the request sent by the health check. Only ASCII visible characters are allowed, and the maximum length is 500. (Applicable only to TCP/UDP listeners.)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RecvContext Health check protocol (a custom check parameter), which is required if the value of CheckType is CUSTOM. This parameter represents the result returned by the health check. Only ASCII visible characters are allowed, and the maximum length is 500. (Applicable only to TCP/UDP listeners.)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CheckType Health check protocol (a custom check parameter). Value range: TCP, HTTP, CUSTOM (applicable only to TCP/UDP listeners, where UDP listeners only support CUSTOM. If custom health check is used, this parameter is required).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HttpVersion Health check protocol (a custom check parameter), which is required if the value of CheckType is HTTP. This parameter represents the HTTP version of the real server. Value range: HTTP/1.0, HTTP/1.1. (Applicable only to TCP listeners.)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SourceIpType Specifies the type of IP for health check. `0` (default): Use the CLB VIP as the source IP. `1`: Use the IP range starting with 100.64 as the source IP.
Note: This field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("UnHealthNum",$param) and $param["UnHealthNum"] !== null) {
            $this->UnHealthNum = $param["UnHealthNum"];
        }

        if (array_key_exists("HttpCode",$param) and $param["HttpCode"] !== null) {
            $this->HttpCode = $param["HttpCode"];
        }

        if (array_key_exists("HttpCheckPath",$param) and $param["HttpCheckPath"] !== null) {
            $this->HttpCheckPath = $param["HttpCheckPath"];
        }

        if (array_key_exists("HttpCheckDomain",$param) and $param["HttpCheckDomain"] !== null) {
            $this->HttpCheckDomain = $param["HttpCheckDomain"];
        }

        if (array_key_exists("HttpCheckMethod",$param) and $param["HttpCheckMethod"] !== null) {
            $this->HttpCheckMethod = $param["HttpCheckMethod"];
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

        if (array_key_exists("HttpVersion",$param) and $param["HttpVersion"] !== null) {
            $this->HttpVersion = $param["HttpVersion"];
        }

        if (array_key_exists("SourceIpType",$param) and $param["SourceIpType"] !== null) {
            $this->SourceIpType = $param["SourceIpType"];
        }
    }
}
