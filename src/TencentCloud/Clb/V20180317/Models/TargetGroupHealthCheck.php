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
 * Details of target group health check
 *
 * @method boolean getHealthSwitch() Obtain Whether to enable the health check.
 * @method void setHealthSwitch(boolean $HealthSwitch) Set Whether to enable the health check.
 * @method string getProtocol() Obtain Health check method. among them, only the new version V2 target group type supports this parameter. valid values: TCP | HTTP | HTTPS | PING | CUSTOM. among them:.
<ur><li>When the backend forwarding protocol of the target group is TCP, the health check method supports TCP/HTTP/CUSTOM, with a default value of TCP.</li><li>when the backend forwarding protocol of the target group is UDP, the health check method supports PING/CUSTOM, with a default value of PING.</li><li>when the backend forwarding protocol of the target group is HTTP, the health check method supports HTTP/TCP, with a default value of HTTP.</li><li>when the backend forwarding protocol of the target group is HTTPS, the health check method supports HTTPS/TCP, with a default value of HTTPS.</li><li>when the backend forwarding protocol of the target group is GRPC, the health check method supports GRPC/TCP, with a default value of GRPC.</li></ur>.
 * @method void setProtocol(string $Protocol) Set Health check method. among them, only the new version V2 target group type supports this parameter. valid values: TCP | HTTP | HTTPS | PING | CUSTOM. among them:.
<ur><li>When the backend forwarding protocol of the target group is TCP, the health check method supports TCP/HTTP/CUSTOM, with a default value of TCP.</li><li>when the backend forwarding protocol of the target group is UDP, the health check method supports PING/CUSTOM, with a default value of PING.</li><li>when the backend forwarding protocol of the target group is HTTP, the health check method supports HTTP/TCP, with a default value of HTTP.</li><li>when the backend forwarding protocol of the target group is HTTPS, the health check method supports HTTPS/TCP, with a default value of HTTPS.</li><li>when the backend forwarding protocol of the target group is GRPC, the health check method supports GRPC/TCP, with a default value of GRPC.</li></ur>.
 * @method integer getPort() Obtain Custom check parameters. health check port, defaults to the port of the backend service unless you want to specify a specific port, otherwise leave it blank. (applicable only to TCP/UDP target group).

 * @method void setPort(integer $Port) Set Custom check parameters. health check port, defaults to the port of the backend service unless you want to specify a specific port, otherwise leave it blank. (applicable only to TCP/UDP target group).

 * @method integer getTimeout() Obtain Health check timeout. The default is 2 seconds. Value range: 2-30 seconds.
 * @method void setTimeout(integer $Timeout) Set Health check timeout. The default is 2 seconds. Value range: 2-30 seconds.
 * @method integer getGapTime() Obtain Detection interval time. The default is 5 seconds. Value range: 2-300 seconds.
 * @method void setGapTime(integer $GapTime) Set Detection interval time. The default is 5 seconds. Value range: 2-300 seconds.
 * @method integer getGoodLimit() Obtain Health detection threshold. The default is 3 times. Value range: 2-10 times.
 * @method void setGoodLimit(integer $GoodLimit) Set Health detection threshold. The default is 3 times. Value range: 2-10 times.
 * @method integer getBadLimit() Obtain Unhealth detection threshold. The default is 3 times. Value range: 2-10 times.
 * @method void setBadLimit(integer $BadLimit) Set Unhealth detection threshold. The default is 3 times. Value range: 2-10 times.
 * @method boolean getJumboFrame() Obtain Indicates whether jumbo frames are enabled for probe packets of all rss in the target group. enabled by default. this parameter is supported only for GWLB type target groups.
 * @method void setJumboFrame(boolean $JumboFrame) Set Indicates whether jumbo frames are enabled for probe packets of all rss in the target group. enabled by default. this parameter is supported only for GWLB type target groups.
 * @method integer getHttpCode() Obtain Health check status code (applicable only to HTTP/HTTPS target group and HTTP health check method of TCP target group). value range: 1~31. default: 31. among them: <url> <li>1 means post-detection return value 1xx represents health.</li> <li>2 means return 2xx represents health.</li> <li>4 means return 3xx represents health.</li> <li>8 means return 4xx represents health.</li> <li>16 means return 5xx represents health.</li></url> to have multiple return codes represent health, sum up corresponding values.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpCode(integer $HttpCode) Set Health check status code (applicable only to HTTP/HTTPS target group and HTTP health check method of TCP target group). value range: 1~31. default: 31. among them: <url> <li>1 means post-detection return value 1xx represents health.</li> <li>2 means return 2xx represents health.</li> <li>4 means return 3xx represents health.</li> <li>8 means return 4xx represents health.</li> <li>16 means return 5xx represents health.</li></url> to have multiple return codes represent health, sum up corresponding values.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHttpCheckDomain() Obtain Health check domain name. among them: <ur><li>applicable only to HTTP/HTTPS target groups and TCP target groups when using HTTP health check method.</li><li>targeting HTTP/HTTPS target groups, this parameter is required when using HTTP health check method.</li></ur>.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpCheckDomain(string $HttpCheckDomain) Set Health check domain name. among them: <ur><li>applicable only to HTTP/HTTPS target groups and TCP target groups when using HTTP health check method.</li><li>targeting HTTP/HTTPS target groups, this parameter is required when using HTTP health check method.</li></ur>.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHttpCheckPath() Obtain Health check path (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpCheckPath(string $HttpCheckPath) Set Health check path (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHttpCheckMethod() Obtain Health check method (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners). Default: HEAD. Valid values: HEAD and GET.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpCheckMethod(string $HttpCheckMethod) Set Health check method (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners). Default: HEAD. Valid values: HEAD and GET.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContextType() Obtain Input format of health check. required when health check method is CUSTOM. valid values: HEX or TEXT. among them:<ur><li>TEXT: TEXT format.</li><li>HEX: hexadecimal format. characters of SendContext and RecvContext can only be selected from 0123456789ABCDEF and the length must be an even number.</li><li>applicable only to TCP/UDP target group.</li></ur>.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContextType(string $ContextType) Set Input format of health check. required when health check method is CUSTOM. valid values: HEX or TEXT. among them:<ur><li>TEXT: TEXT format.</li><li>HEX: hexadecimal format. characters of SendContext and RecvContext can only be selected from 0123456789ABCDEF and the length must be an even number.</li><li>applicable only to TCP/UDP target group.</li></ur>.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSendContext() Obtain CUSTOM check parameters. required when the CheckType value is CUSTOM, represents the content of the request sent by the health check, only ASCII visible characters, maximum length limit 500. applicable only to TCP/UDP target group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSendContext(string $SendContext) Set CUSTOM check parameters. required when the CheckType value is CUSTOM, represents the content of the request sent by the health check, only ASCII visible characters, maximum length limit 500. applicable only to TCP/UDP target group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRecvContext() Obtain CUSTOM check parameters. required when the CheckType value is CUSTOM. represents the result returned by the health check. only ASCII visible characters are allowed. maximum length limit is 500. (applicable only to TCP/UDP target group).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecvContext(string $RecvContext) Set CUSTOM check parameters. required when the CheckType value is CUSTOM. represents the result returned by the health check. only ASCII visible characters are allowed. maximum length limit is 500. (applicable only to TCP/UDP target group).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHttpVersion() Obtain HTTP version, where: <ur><li>this field is required if the value of CheckType is HTTP.</li><li>supports configuration options: HTTP/1.0, HTTP/1.1.</li><li>applicable only to TCP target group.</li></ur>.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpVersion(string $HttpVersion) Set HTTP version, where: <ur><li>this field is required if the value of CheckType is HTTP.</li><li>supports configuration options: HTTP/1.0, HTTP/1.1.</li><li>applicable only to TCP target group.</li></ur>.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExtendedCode() Obtain Health check status code when the protocol is GRPC. (this parameter applies only to target groups with the backend forwarding protocol of GRPC.) default value: 12. valid values: a single numerical value, multiple numerical values, or a range. for example, 20, 20,25, or 0-99.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtendedCode(string $ExtendedCode) Set Health check status code when the protocol is GRPC. (this parameter applies only to target groups with the backend forwarding protocol of GRPC.) default value: 12. valid values: a single numerical value, multiple numerical values, or a range. for example, 20, 20,25, or 0-99.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TargetGroupHealthCheck extends AbstractModel
{
    /**
     * @var boolean Whether to enable the health check.
     */
    public $HealthSwitch;

    /**
     * @var string Health check method. among them, only the new version V2 target group type supports this parameter. valid values: TCP | HTTP | HTTPS | PING | CUSTOM. among them:.
<ur><li>When the backend forwarding protocol of the target group is TCP, the health check method supports TCP/HTTP/CUSTOM, with a default value of TCP.</li><li>when the backend forwarding protocol of the target group is UDP, the health check method supports PING/CUSTOM, with a default value of PING.</li><li>when the backend forwarding protocol of the target group is HTTP, the health check method supports HTTP/TCP, with a default value of HTTP.</li><li>when the backend forwarding protocol of the target group is HTTPS, the health check method supports HTTPS/TCP, with a default value of HTTPS.</li><li>when the backend forwarding protocol of the target group is GRPC, the health check method supports GRPC/TCP, with a default value of GRPC.</li></ur>.
     */
    public $Protocol;

    /**
     * @var integer Custom check parameters. health check port, defaults to the port of the backend service unless you want to specify a specific port, otherwise leave it blank. (applicable only to TCP/UDP target group).

     */
    public $Port;

    /**
     * @var integer Health check timeout. The default is 2 seconds. Value range: 2-30 seconds.
     */
    public $Timeout;

    /**
     * @var integer Detection interval time. The default is 5 seconds. Value range: 2-300 seconds.
     */
    public $GapTime;

    /**
     * @var integer Health detection threshold. The default is 3 times. Value range: 2-10 times.
     */
    public $GoodLimit;

    /**
     * @var integer Unhealth detection threshold. The default is 3 times. Value range: 2-10 times.
     */
    public $BadLimit;

    /**
     * @var boolean Indicates whether jumbo frames are enabled for probe packets of all rss in the target group. enabled by default. this parameter is supported only for GWLB type target groups.
     */
    public $JumboFrame;

    /**
     * @var integer Health check status code (applicable only to HTTP/HTTPS target group and HTTP health check method of TCP target group). value range: 1~31. default: 31. among them: <url> <li>1 means post-detection return value 1xx represents health.</li> <li>2 means return 2xx represents health.</li> <li>4 means return 3xx represents health.</li> <li>8 means return 4xx represents health.</li> <li>16 means return 5xx represents health.</li></url> to have multiple return codes represent health, sum up corresponding values.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpCode;

    /**
     * @var string Health check domain name. among them: <ur><li>applicable only to HTTP/HTTPS target groups and TCP target groups when using HTTP health check method.</li><li>targeting HTTP/HTTPS target groups, this parameter is required when using HTTP health check method.</li></ur>.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpCheckDomain;

    /**
     * @var string Health check path (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpCheckPath;

    /**
     * @var string Health check method (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners). Default: HEAD. Valid values: HEAD and GET.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpCheckMethod;

    /**
     * @var string Input format of health check. required when health check method is CUSTOM. valid values: HEX or TEXT. among them:<ur><li>TEXT: TEXT format.</li><li>HEX: hexadecimal format. characters of SendContext and RecvContext can only be selected from 0123456789ABCDEF and the length must be an even number.</li><li>applicable only to TCP/UDP target group.</li></ur>.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContextType;

    /**
     * @var string CUSTOM check parameters. required when the CheckType value is CUSTOM, represents the content of the request sent by the health check, only ASCII visible characters, maximum length limit 500. applicable only to TCP/UDP target group.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SendContext;

    /**
     * @var string CUSTOM check parameters. required when the CheckType value is CUSTOM. represents the result returned by the health check. only ASCII visible characters are allowed. maximum length limit is 500. (applicable only to TCP/UDP target group).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecvContext;

    /**
     * @var string HTTP version, where: <ur><li>this field is required if the value of CheckType is HTTP.</li><li>supports configuration options: HTTP/1.0, HTTP/1.1.</li><li>applicable only to TCP target group.</li></ur>.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpVersion;

    /**
     * @var string Health check status code when the protocol is GRPC. (this parameter applies only to target groups with the backend forwarding protocol of GRPC.) default value: 12. valid values: a single numerical value, multiple numerical values, or a range. for example, 20, 20,25, or 0-99.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExtendedCode;

    /**
     * @param boolean $HealthSwitch Whether to enable the health check.
     * @param string $Protocol Health check method. among them, only the new version V2 target group type supports this parameter. valid values: TCP | HTTP | HTTPS | PING | CUSTOM. among them:.
<ur><li>When the backend forwarding protocol of the target group is TCP, the health check method supports TCP/HTTP/CUSTOM, with a default value of TCP.</li><li>when the backend forwarding protocol of the target group is UDP, the health check method supports PING/CUSTOM, with a default value of PING.</li><li>when the backend forwarding protocol of the target group is HTTP, the health check method supports HTTP/TCP, with a default value of HTTP.</li><li>when the backend forwarding protocol of the target group is HTTPS, the health check method supports HTTPS/TCP, with a default value of HTTPS.</li><li>when the backend forwarding protocol of the target group is GRPC, the health check method supports GRPC/TCP, with a default value of GRPC.</li></ur>.
     * @param integer $Port Custom check parameters. health check port, defaults to the port of the backend service unless you want to specify a specific port, otherwise leave it blank. (applicable only to TCP/UDP target group).

     * @param integer $Timeout Health check timeout. The default is 2 seconds. Value range: 2-30 seconds.
     * @param integer $GapTime Detection interval time. The default is 5 seconds. Value range: 2-300 seconds.
     * @param integer $GoodLimit Health detection threshold. The default is 3 times. Value range: 2-10 times.
     * @param integer $BadLimit Unhealth detection threshold. The default is 3 times. Value range: 2-10 times.
     * @param boolean $JumboFrame Indicates whether jumbo frames are enabled for probe packets of all rss in the target group. enabled by default. this parameter is supported only for GWLB type target groups.
     * @param integer $HttpCode Health check status code (applicable only to HTTP/HTTPS target group and HTTP health check method of TCP target group). value range: 1~31. default: 31. among them: <url> <li>1 means post-detection return value 1xx represents health.</li> <li>2 means return 2xx represents health.</li> <li>4 means return 3xx represents health.</li> <li>8 means return 4xx represents health.</li> <li>16 means return 5xx represents health.</li></url> to have multiple return codes represent health, sum up corresponding values.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HttpCheckDomain Health check domain name. among them: <ur><li>applicable only to HTTP/HTTPS target groups and TCP target groups when using HTTP health check method.</li><li>targeting HTTP/HTTPS target groups, this parameter is required when using HTTP health check method.</li></ur>.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HttpCheckPath Health check path (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HttpCheckMethod Health check method (applicable only to HTTP/HTTPS forwarding rules and HTTP health checks of TCP listeners). Default: HEAD. Valid values: HEAD and GET.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ContextType Input format of health check. required when health check method is CUSTOM. valid values: HEX or TEXT. among them:<ur><li>TEXT: TEXT format.</li><li>HEX: hexadecimal format. characters of SendContext and RecvContext can only be selected from 0123456789ABCDEF and the length must be an even number.</li><li>applicable only to TCP/UDP target group.</li></ur>.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SendContext CUSTOM check parameters. required when the CheckType value is CUSTOM, represents the content of the request sent by the health check, only ASCII visible characters, maximum length limit 500. applicable only to TCP/UDP target group.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RecvContext CUSTOM check parameters. required when the CheckType value is CUSTOM. represents the result returned by the health check. only ASCII visible characters are allowed. maximum length limit is 500. (applicable only to TCP/UDP target group).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HttpVersion HTTP version, where: <ur><li>this field is required if the value of CheckType is HTTP.</li><li>supports configuration options: HTTP/1.0, HTTP/1.1.</li><li>applicable only to TCP target group.</li></ur>.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExtendedCode Health check status code when the protocol is GRPC. (this parameter applies only to target groups with the backend forwarding protocol of GRPC.) default value: 12. valid values: a single numerical value, multiple numerical values, or a range. for example, 20, 20,25, or 0-99.
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("GapTime",$param) and $param["GapTime"] !== null) {
            $this->GapTime = $param["GapTime"];
        }

        if (array_key_exists("GoodLimit",$param) and $param["GoodLimit"] !== null) {
            $this->GoodLimit = $param["GoodLimit"];
        }

        if (array_key_exists("BadLimit",$param) and $param["BadLimit"] !== null) {
            $this->BadLimit = $param["BadLimit"];
        }

        if (array_key_exists("JumboFrame",$param) and $param["JumboFrame"] !== null) {
            $this->JumboFrame = $param["JumboFrame"];
        }

        if (array_key_exists("HttpCode",$param) and $param["HttpCode"] !== null) {
            $this->HttpCode = $param["HttpCode"];
        }

        if (array_key_exists("HttpCheckDomain",$param) and $param["HttpCheckDomain"] !== null) {
            $this->HttpCheckDomain = $param["HttpCheckDomain"];
        }

        if (array_key_exists("HttpCheckPath",$param) and $param["HttpCheckPath"] !== null) {
            $this->HttpCheckPath = $param["HttpCheckPath"];
        }

        if (array_key_exists("HttpCheckMethod",$param) and $param["HttpCheckMethod"] !== null) {
            $this->HttpCheckMethod = $param["HttpCheckMethod"];
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

        if (array_key_exists("HttpVersion",$param) and $param["HttpVersion"] !== null) {
            $this->HttpVersion = $param["HttpVersion"];
        }

        if (array_key_exists("ExtendedCode",$param) and $param["ExtendedCode"] !== null) {
            $this->ExtendedCode = $param["ExtendedCode"];
        }
    }
}
