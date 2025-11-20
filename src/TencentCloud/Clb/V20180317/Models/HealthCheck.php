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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Health check information.
Note: Custom check parameters are currently supported only in certain beta test regions.
 *
 * @method integer getHealthSwitch() Obtain Whether to enable health check. 1: Enable; 0: Disable.

It is enabled by default.
 * @method void setHealthSwitch(integer $HealthSwitch) Set Whether to enable health check. 1: Enable; 0: Disable.

It is enabled by default.
 * @method integer getTimeOut() Obtain Health check response timeout, in seconds. Value range: 2–60. Default value: 2. The response timeout should be less than the check interval.
 * @method void setTimeOut(integer $TimeOut) Set Health check response timeout, in seconds. Value range: 2–60. Default value: 2. The response timeout should be less than the check interval.
 * @method integer getIntervalTime() Obtain Health check interval, in seconds. Default value: 5. Value range: 2–300 for IPv4 CLB instances and 5–300 for IPv6 CLB instances.
Note: The value range is 5–300 for some IPv4 CLB instances of early versions.
 * @method void setIntervalTime(integer $IntervalTime) Set Health check interval, in seconds. Default value: 5. Value range: 2–300 for IPv4 CLB instances and 5–300 for IPv6 CLB instances.
Note: The value range is 5–300 for some IPv4 CLB instances of early versions.
 * @method integer getHealthNum() Obtain Healthy threshold. Default: 3, indicating that if a forwarding is found healthy three consecutive times, it is considered to be normal. Value range: 2-10. Unit: times.
 * @method void setHealthNum(integer $HealthNum) Set Healthy threshold. Default: 3, indicating that if a forwarding is found healthy three consecutive times, it is considered to be normal. Value range: 2-10. Unit: times.
 * @method integer getUnHealthNum() Obtain Unhealthy threshold. Default: 3, indicating that if a forwarding is found unhealthy three consecutive times, it is considered to be exceptional. Value range: 2-10. Unit: times.
 * @method void setUnHealthNum(integer $UnHealthNum) Set Unhealthy threshold. Default: 3, indicating that if a forwarding is found unhealthy three consecutive times, it is considered to be exceptional. Value range: 2-10. Unit: times.
 * @method integer getHttpCode() Obtain Health check status code. (This parameter applies only to HTTP/HTTPS forwarding rules and the HTTP health check method of TCP listeners.) Value range: 1–31. Default value: 31.
1: return 1xx after the check (healthy); 2: return 2xx after the check (healthy); 4: return 3xx after the check (healthy); 8: return 4xx after the check (healthy); 16: return 5xx after the check (healthy). If you expect that multiple codes represent a healthy real server, set the value to the sum of the corresponding values.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpCode(integer $HttpCode) Set Health check status code. (This parameter applies only to HTTP/HTTPS forwarding rules and the HTTP health check method of TCP listeners.) Value range: 1–31. Default value: 31.
1: return 1xx after the check (healthy); 2: return 2xx after the check (healthy); 4: return 3xx after the check (healthy); 8: return 4xx after the check (healthy); 16: return 5xx after the check (healthy). If you expect that multiple codes represent a healthy real server, set the value to the sum of the corresponding values.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHttpCheckPath() Obtain Health check path (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners).

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpCheckPath(string $HttpCheckPath) Set Health check path (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners).

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHttpCheckDomain() Obtain Health check domain name, which will be contained in a Host header field of the HTTP protocol. (This parameter applies only to HTTP/HTTPS listeners and the HTTP health check method of TCP listeners. For TCP listeners, this parameter is required if the HTTP health check method is used.)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpCheckDomain(string $HttpCheckDomain) Set Health check domain name, which will be contained in a Host header field of the HTTP protocol. (This parameter applies only to HTTP/HTTPS listeners and the HTTP health check method of TCP listeners. For TCP listeners, this parameter is required if the HTTP health check method is used.)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHttpCheckMethod() Obtain Health check method (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners). Default: HEAD. Valid values: HEAD and GET.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpCheckMethod(string $HttpCheckMethod) Set Health check method (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners). Default: HEAD. Valid values: HEAD and GET.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCheckPort() Obtain A custom check parameter, representing the health check port, which is the port of the real server by default. Unless you want to specify a port, it is recommended to leave it empty. (Applicable only to TCP/UDP listeners)

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCheckPort(integer $CheckPort) Set A custom check parameter, representing the health check port, which is the port of the real server by default. Unless you want to specify a port, it is recommended to leave it empty. (Applicable only to TCP/UDP listeners)

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContextType() Obtain A custom check parameter, which is required if the value of CheckType (health check protocol) is CUSTOM. This parameter represents the input format of the health check. Valid values: HEX and TEXT. If the value is HEX, the characters of SendContext and RecvContext can only be selected from 0123456789ABCDEF and the length must be an even number. (Applicable only to TCP/UDP listeners.)

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContextType(string $ContextType) Set A custom check parameter, which is required if the value of CheckType (health check protocol) is CUSTOM. This parameter represents the input format of the health check. Valid values: HEX and TEXT. If the value is HEX, the characters of SendContext and RecvContext can only be selected from 0123456789ABCDEF and the length must be an even number. (Applicable only to TCP/UDP listeners.)

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSendContext() Obtain A custom check parameter, which is required if the value of CheckType (health check protocol) is CUSTOM. This parameter represents the content of the request sent by the health check. Only ASCII visible characters are allowed, and the maximum length is 500. (Applicable only to TCP/UDP listeners.)

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSendContext(string $SendContext) Set A custom check parameter, which is required if the value of CheckType (health check protocol) is CUSTOM. This parameter represents the content of the request sent by the health check. Only ASCII visible characters are allowed, and the maximum length is 500. (Applicable only to TCP/UDP listeners.)

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRecvContext() Obtain A custom check parameter, which is required if the value of CheckType (health check protocol) is CUSTOM. This parameter represents the result returned by the health check. Only ASCII visible characters are allowed, and the maximum length is 500. (Applicable only to TCP/UDP listeners.)

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecvContext(string $RecvContext) Set A custom check parameter, which is required if the value of CheckType (health check protocol) is CUSTOM. This parameter represents the result returned by the health check. Only ASCII visible characters are allowed, and the maximum length is 500. (Applicable only to TCP/UDP listeners.)

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCheckType() Obtain Protocol used for health checks. Valid values: TCP (for TCP listeners, TCP_SSL listeners, and QUIC listeners), HTTP (for TCP listeners, TCP_SSL listeners, QUIC listeners, HTTP rules, and HTTPS rules), HTTPS (for HTTPS rules), GRPC (for HTTP rules and HTTPS rules), PING (for UDP listeners), and CUSTOM (for UDP listeners and TCP listeners). The default value is HTTP for HTTP listeners, TCP for TCP, TCP_SSL, and QUIC listeners, and PING for UDP listeners. For HTTPS listeners, the protocol is the same as the backend forwarding protocol.
 * @method void setCheckType(string $CheckType) Set Protocol used for health checks. Valid values: TCP (for TCP listeners, TCP_SSL listeners, and QUIC listeners), HTTP (for TCP listeners, TCP_SSL listeners, QUIC listeners, HTTP rules, and HTTPS rules), HTTPS (for HTTPS rules), GRPC (for HTTP rules and HTTPS rules), PING (for UDP listeners), and CUSTOM (for UDP listeners and TCP listeners). The default value is HTTP for HTTP listeners, TCP for TCP, TCP_SSL, and QUIC listeners, and PING for UDP listeners. For HTTPS listeners, the protocol is the same as the backend forwarding protocol.
 * @method string getHttpVersion() Obtain HTTP version. This field indicates the HTTP version of real servers and is required if the value of CheckType is HTTP. Valid values: HTTP/1.0 and HTTP/1.1. (This field applies only to TCP listeners.)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpVersion(string $HttpVersion) Set HTTP version. This field indicates the HTTP version of real servers and is required if the value of CheckType is HTTP. Valid values: HTTP/1.0 and HTTP/1.1. (This field applies only to TCP listeners.)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSourceIpType() Obtain Source IP address type for health checks. 0: use the LB VIP as the source IP address; 1: use an IP address in the 100.64 range as the source IP address.
 * @method void setSourceIpType(integer $SourceIpType) Set Source IP address type for health checks. 0: use the LB VIP as the source IP address; 1: use an IP address in the 100.64 range as the source IP address.
 * @method string getExtendedCode() Obtain Health check status code when the protocol is GRPC. (This parameter applies only to rules with the backend forwarding protocol of GRPC.) Default value: 12. You can enter a single numerical value, multiple numerical values, or a range. For example, 20, 20,25, or 0-99.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtendedCode(string $ExtendedCode) Set Health check status code when the protocol is GRPC. (This parameter applies only to rules with the backend forwarding protocol of GRPC.) Default value: 12. You can enter a single numerical value, multiple numerical values, or a range. For example, 20, 20,25, or 0-99.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class HealthCheck extends AbstractModel
{
    /**
     * @var integer Whether to enable health check. 1: Enable; 0: Disable.

It is enabled by default.
     */
    public $HealthSwitch;

    /**
     * @var integer Health check response timeout, in seconds. Value range: 2–60. Default value: 2. The response timeout should be less than the check interval.
     */
    public $TimeOut;

    /**
     * @var integer Health check interval, in seconds. Default value: 5. Value range: 2–300 for IPv4 CLB instances and 5–300 for IPv6 CLB instances.
Note: The value range is 5–300 for some IPv4 CLB instances of early versions.
     */
    public $IntervalTime;

    /**
     * @var integer Healthy threshold. Default: 3, indicating that if a forwarding is found healthy three consecutive times, it is considered to be normal. Value range: 2-10. Unit: times.
     */
    public $HealthNum;

    /**
     * @var integer Unhealthy threshold. Default: 3, indicating that if a forwarding is found unhealthy three consecutive times, it is considered to be exceptional. Value range: 2-10. Unit: times.
     */
    public $UnHealthNum;

    /**
     * @var integer Health check status code. (This parameter applies only to HTTP/HTTPS forwarding rules and the HTTP health check method of TCP listeners.) Value range: 1–31. Default value: 31.
1: return 1xx after the check (healthy); 2: return 2xx after the check (healthy); 4: return 3xx after the check (healthy); 8: return 4xx after the check (healthy); 16: return 5xx after the check (healthy). If you expect that multiple codes represent a healthy real server, set the value to the sum of the corresponding values.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpCode;

    /**
     * @var string Health check path (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners).

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpCheckPath;

    /**
     * @var string Health check domain name, which will be contained in a Host header field of the HTTP protocol. (This parameter applies only to HTTP/HTTPS listeners and the HTTP health check method of TCP listeners. For TCP listeners, this parameter is required if the HTTP health check method is used.)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpCheckDomain;

    /**
     * @var string Health check method (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners). Default: HEAD. Valid values: HEAD and GET.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpCheckMethod;

    /**
     * @var integer A custom check parameter, representing the health check port, which is the port of the real server by default. Unless you want to specify a port, it is recommended to leave it empty. (Applicable only to TCP/UDP listeners)

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CheckPort;

    /**
     * @var string A custom check parameter, which is required if the value of CheckType (health check protocol) is CUSTOM. This parameter represents the input format of the health check. Valid values: HEX and TEXT. If the value is HEX, the characters of SendContext and RecvContext can only be selected from 0123456789ABCDEF and the length must be an even number. (Applicable only to TCP/UDP listeners.)

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContextType;

    /**
     * @var string A custom check parameter, which is required if the value of CheckType (health check protocol) is CUSTOM. This parameter represents the content of the request sent by the health check. Only ASCII visible characters are allowed, and the maximum length is 500. (Applicable only to TCP/UDP listeners.)

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SendContext;

    /**
     * @var string A custom check parameter, which is required if the value of CheckType (health check protocol) is CUSTOM. This parameter represents the result returned by the health check. Only ASCII visible characters are allowed, and the maximum length is 500. (Applicable only to TCP/UDP listeners.)

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecvContext;

    /**
     * @var string Protocol used for health checks. Valid values: TCP (for TCP listeners, TCP_SSL listeners, and QUIC listeners), HTTP (for TCP listeners, TCP_SSL listeners, QUIC listeners, HTTP rules, and HTTPS rules), HTTPS (for HTTPS rules), GRPC (for HTTP rules and HTTPS rules), PING (for UDP listeners), and CUSTOM (for UDP listeners and TCP listeners). The default value is HTTP for HTTP listeners, TCP for TCP, TCP_SSL, and QUIC listeners, and PING for UDP listeners. For HTTPS listeners, the protocol is the same as the backend forwarding protocol.
     */
    public $CheckType;

    /**
     * @var string HTTP version. This field indicates the HTTP version of real servers and is required if the value of CheckType is HTTP. Valid values: HTTP/1.0 and HTTP/1.1. (This field applies only to TCP listeners.)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpVersion;

    /**
     * @var integer Source IP address type for health checks. 0: use the LB VIP as the source IP address; 1: use an IP address in the 100.64 range as the source IP address.
     */
    public $SourceIpType;

    /**
     * @var string Health check status code when the protocol is GRPC. (This parameter applies only to rules with the backend forwarding protocol of GRPC.) Default value: 12. You can enter a single numerical value, multiple numerical values, or a range. For example, 20, 20,25, or 0-99.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExtendedCode;

    /**
     * @param integer $HealthSwitch Whether to enable health check. 1: Enable; 0: Disable.

It is enabled by default.
     * @param integer $TimeOut Health check response timeout, in seconds. Value range: 2–60. Default value: 2. The response timeout should be less than the check interval.
     * @param integer $IntervalTime Health check interval, in seconds. Default value: 5. Value range: 2–300 for IPv4 CLB instances and 5–300 for IPv6 CLB instances.
Note: The value range is 5–300 for some IPv4 CLB instances of early versions.
     * @param integer $HealthNum Healthy threshold. Default: 3, indicating that if a forwarding is found healthy three consecutive times, it is considered to be normal. Value range: 2-10. Unit: times.
     * @param integer $UnHealthNum Unhealthy threshold. Default: 3, indicating that if a forwarding is found unhealthy three consecutive times, it is considered to be exceptional. Value range: 2-10. Unit: times.
     * @param integer $HttpCode Health check status code. (This parameter applies only to HTTP/HTTPS forwarding rules and the HTTP health check method of TCP listeners.) Value range: 1–31. Default value: 31.
1: return 1xx after the check (healthy); 2: return 2xx after the check (healthy); 4: return 3xx after the check (healthy); 8: return 4xx after the check (healthy); 16: return 5xx after the check (healthy). If you expect that multiple codes represent a healthy real server, set the value to the sum of the corresponding values.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HttpCheckPath Health check path (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners).

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HttpCheckDomain Health check domain name, which will be contained in a Host header field of the HTTP protocol. (This parameter applies only to HTTP/HTTPS listeners and the HTTP health check method of TCP listeners. For TCP listeners, this parameter is required if the HTTP health check method is used.)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HttpCheckMethod Health check method (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners). Default: HEAD. Valid values: HEAD and GET.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CheckPort A custom check parameter, representing the health check port, which is the port of the real server by default. Unless you want to specify a port, it is recommended to leave it empty. (Applicable only to TCP/UDP listeners)

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ContextType A custom check parameter, which is required if the value of CheckType (health check protocol) is CUSTOM. This parameter represents the input format of the health check. Valid values: HEX and TEXT. If the value is HEX, the characters of SendContext and RecvContext can only be selected from 0123456789ABCDEF and the length must be an even number. (Applicable only to TCP/UDP listeners.)

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SendContext A custom check parameter, which is required if the value of CheckType (health check protocol) is CUSTOM. This parameter represents the content of the request sent by the health check. Only ASCII visible characters are allowed, and the maximum length is 500. (Applicable only to TCP/UDP listeners.)

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RecvContext A custom check parameter, which is required if the value of CheckType (health check protocol) is CUSTOM. This parameter represents the result returned by the health check. Only ASCII visible characters are allowed, and the maximum length is 500. (Applicable only to TCP/UDP listeners.)

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CheckType Protocol used for health checks. Valid values: TCP (for TCP listeners, TCP_SSL listeners, and QUIC listeners), HTTP (for TCP listeners, TCP_SSL listeners, QUIC listeners, HTTP rules, and HTTPS rules), HTTPS (for HTTPS rules), GRPC (for HTTP rules and HTTPS rules), PING (for UDP listeners), and CUSTOM (for UDP listeners and TCP listeners). The default value is HTTP for HTTP listeners, TCP for TCP, TCP_SSL, and QUIC listeners, and PING for UDP listeners. For HTTPS listeners, the protocol is the same as the backend forwarding protocol.
     * @param string $HttpVersion HTTP version. This field indicates the HTTP version of real servers and is required if the value of CheckType is HTTP. Valid values: HTTP/1.0 and HTTP/1.1. (This field applies only to TCP listeners.)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SourceIpType Source IP address type for health checks. 0: use the LB VIP as the source IP address; 1: use an IP address in the 100.64 range as the source IP address.
     * @param string $ExtendedCode Health check status code when the protocol is GRPC. (This parameter applies only to rules with the backend forwarding protocol of GRPC.) Default value: 12. You can enter a single numerical value, multiple numerical values, or a range. For example, 20, 20,25, or 0-99.
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

        if (array_key_exists("ExtendedCode",$param) and $param["ExtendedCode"] !== null) {
            $this->ExtendedCode = $param["ExtendedCode"];
        }
    }
}
