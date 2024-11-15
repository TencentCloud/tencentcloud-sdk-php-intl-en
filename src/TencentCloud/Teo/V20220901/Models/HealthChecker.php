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
 * LoadBalancer health check policy.
 *
 * @method string getType() Obtain Health check policy. Valid values:
<li>HTTP.</li>
<li>HTTPS.</li>
<li>TCP.</li>
<li>UDP.</li>
<li>ICMP Ping.</li>
<li>NoCheck.</li>
Note: NoCheck means the health check policy is not enabled.
 * @method void setType(string $Type) Set Health check policy. Valid values:
<li>HTTP.</li>
<li>HTTPS.</li>
<li>TCP.</li>
<li>UDP.</li>
<li>ICMP Ping.</li>
<li>NoCheck.</li>
Note: NoCheck means the health check policy is not enabled.
 * @method integer getPort() Obtain Check port, which is required when Type = HTTP, Type = HTTPS, Type = TCP, or Type = UDP.
 * @method void setPort(integer $Port) Set Check port, which is required when Type = HTTP, Type = HTTPS, Type = TCP, or Type = UDP.
 * @method integer getInterval() Obtain Check frequency, in seconds. It indicates how often a health check task is initiated. Valid values: 30, 60, 180, 300, 600.
 * @method void setInterval(integer $Interval) Set Check frequency, in seconds. It indicates how often a health check task is initiated. Valid values: 30, 60, 180, 300, 600.
 * @method integer getTimeout() Obtain Timeout for each health check, in seconds. If the health check time exceeds this value, the check result is determined as "unhealthy". The default value is 5s, and the value should be less than Interval.
 * @method void setTimeout(integer $Timeout) Set Timeout for each health check, in seconds. If the health check time exceeds this value, the check result is determined as "unhealthy". The default value is 5s, and the value should be less than Interval.
 * @method integer getHealthThreshold() Obtain Healthy state threshold, in the number of times. It indicates that if the consecutive health check results are "healthy" for a certain number of times, an origin server is considered "healthy". The default value is 3 times, with the minimum value of 1 time.
 * @method void setHealthThreshold(integer $HealthThreshold) Set Healthy state threshold, in the number of times. It indicates that if the consecutive health check results are "healthy" for a certain number of times, an origin server is considered "healthy". The default value is 3 times, with the minimum value of 1 time.
 * @method integer getCriticalThreshold() Obtain Unhealthy state threshold, in the number of times. It indicates that if the consecutive health check results are "unhealthy" for a certain number of times, an origin server is considered "unhealthy". The default value is 2 times.
 * @method void setCriticalThreshold(integer $CriticalThreshold) Set Unhealthy state threshold, in the number of times. It indicates that if the consecutive health check results are "unhealthy" for a certain number of times, an origin server is considered "unhealthy". The default value is 2 times.
 * @method string getPath() Obtain Probe path. This parameter is valid only when Type = HTTP or Type = HTTPS. It needs to include the complete host/path and should not contain a protocol, for example, www.example.com/test.

 * @method void setPath(string $Path) Set Probe path. This parameter is valid only when Type = HTTP or Type = HTTPS. It needs to include the complete host/path and should not contain a protocol, for example, www.example.com/test.

 * @method string getMethod() Obtain Request method. This parameter is valid only when Type = HTTP or Type = HTTPS. Valid values:
<li>GET.</li>
<li>HEAD.</li>
 * @method void setMethod(string $Method) Set Request method. This parameter is valid only when Type = HTTP or Type = HTTPS. Valid values:
<li>GET.</li>
<li>HEAD.</li>
 * @method array getExpectedCodes() Obtain The status codes used to determine that the probe result is healthy when the probe node initiates a health check to an origin server. This parameter is valid only when Type = HTTP or Type = HTTPS.
 * @method void setExpectedCodes(array $ExpectedCodes) Set The status codes used to determine that the probe result is healthy when the probe node initiates a health check to an origin server. This parameter is valid only when Type = HTTP or Type = HTTPS.
 * @method array getHeaders() Obtain The custom HTTP request header carried by a probe request, with a maximum value of 10. This parameter is valid only when Type = HTTP or Type = HTTPS.
 * @method void setHeaders(array $Headers) Set The custom HTTP request header carried by a probe request, with a maximum value of 10. This parameter is valid only when Type = HTTP or Type = HTTPS.
 * @method string getFollowRedirect() Obtain Whether to follow 301/302 redirect. When enabled, 301/302 is considered a "healthy" status code, redirecting 3 times by default. This parameter is valid only when Type = HTTP or Type = HTTPS.
 * @method void setFollowRedirect(string $FollowRedirect) Set Whether to follow 301/302 redirect. When enabled, 301/302 is considered a "healthy" status code, redirecting 3 times by default. This parameter is valid only when Type = HTTP or Type = HTTPS.
 * @method string getSendContext() Obtain The content sent by a health check. Only ASCII visible characters are allowed, with up to 500 characters. This parameter is valid only when Type = UDP.
 * @method void setSendContext(string $SendContext) Set The content sent by a health check. Only ASCII visible characters are allowed, with up to 500 characters. This parameter is valid only when Type = UDP.
 * @method string getRecvContext() Obtain The expected return result from an origin server during health check. Only ASCII visible characters are allowed, with up to 500 characters. This parameter is valid only when Type = UDP.
 * @method void setRecvContext(string $RecvContext) Set The expected return result from an origin server during health check. Only ASCII visible characters are allowed, with up to 500 characters. This parameter is valid only when Type = UDP.
 */
class HealthChecker extends AbstractModel
{
    /**
     * @var string Health check policy. Valid values:
<li>HTTP.</li>
<li>HTTPS.</li>
<li>TCP.</li>
<li>UDP.</li>
<li>ICMP Ping.</li>
<li>NoCheck.</li>
Note: NoCheck means the health check policy is not enabled.
     */
    public $Type;

    /**
     * @var integer Check port, which is required when Type = HTTP, Type = HTTPS, Type = TCP, or Type = UDP.
     */
    public $Port;

    /**
     * @var integer Check frequency, in seconds. It indicates how often a health check task is initiated. Valid values: 30, 60, 180, 300, 600.
     */
    public $Interval;

    /**
     * @var integer Timeout for each health check, in seconds. If the health check time exceeds this value, the check result is determined as "unhealthy". The default value is 5s, and the value should be less than Interval.
     */
    public $Timeout;

    /**
     * @var integer Healthy state threshold, in the number of times. It indicates that if the consecutive health check results are "healthy" for a certain number of times, an origin server is considered "healthy". The default value is 3 times, with the minimum value of 1 time.
     */
    public $HealthThreshold;

    /**
     * @var integer Unhealthy state threshold, in the number of times. It indicates that if the consecutive health check results are "unhealthy" for a certain number of times, an origin server is considered "unhealthy". The default value is 2 times.
     */
    public $CriticalThreshold;

    /**
     * @var string Probe path. This parameter is valid only when Type = HTTP or Type = HTTPS. It needs to include the complete host/path and should not contain a protocol, for example, www.example.com/test.

     */
    public $Path;

    /**
     * @var string Request method. This parameter is valid only when Type = HTTP or Type = HTTPS. Valid values:
<li>GET.</li>
<li>HEAD.</li>
     */
    public $Method;

    /**
     * @var array The status codes used to determine that the probe result is healthy when the probe node initiates a health check to an origin server. This parameter is valid only when Type = HTTP or Type = HTTPS.
     */
    public $ExpectedCodes;

    /**
     * @var array The custom HTTP request header carried by a probe request, with a maximum value of 10. This parameter is valid only when Type = HTTP or Type = HTTPS.
     */
    public $Headers;

    /**
     * @var string Whether to follow 301/302 redirect. When enabled, 301/302 is considered a "healthy" status code, redirecting 3 times by default. This parameter is valid only when Type = HTTP or Type = HTTPS.
     */
    public $FollowRedirect;

    /**
     * @var string The content sent by a health check. Only ASCII visible characters are allowed, with up to 500 characters. This parameter is valid only when Type = UDP.
     */
    public $SendContext;

    /**
     * @var string The expected return result from an origin server during health check. Only ASCII visible characters are allowed, with up to 500 characters. This parameter is valid only when Type = UDP.
     */
    public $RecvContext;

    /**
     * @param string $Type Health check policy. Valid values:
<li>HTTP.</li>
<li>HTTPS.</li>
<li>TCP.</li>
<li>UDP.</li>
<li>ICMP Ping.</li>
<li>NoCheck.</li>
Note: NoCheck means the health check policy is not enabled.
     * @param integer $Port Check port, which is required when Type = HTTP, Type = HTTPS, Type = TCP, or Type = UDP.
     * @param integer $Interval Check frequency, in seconds. It indicates how often a health check task is initiated. Valid values: 30, 60, 180, 300, 600.
     * @param integer $Timeout Timeout for each health check, in seconds. If the health check time exceeds this value, the check result is determined as "unhealthy". The default value is 5s, and the value should be less than Interval.
     * @param integer $HealthThreshold Healthy state threshold, in the number of times. It indicates that if the consecutive health check results are "healthy" for a certain number of times, an origin server is considered "healthy". The default value is 3 times, with the minimum value of 1 time.
     * @param integer $CriticalThreshold Unhealthy state threshold, in the number of times. It indicates that if the consecutive health check results are "unhealthy" for a certain number of times, an origin server is considered "unhealthy". The default value is 2 times.
     * @param string $Path Probe path. This parameter is valid only when Type = HTTP or Type = HTTPS. It needs to include the complete host/path and should not contain a protocol, for example, www.example.com/test.

     * @param string $Method Request method. This parameter is valid only when Type = HTTP or Type = HTTPS. Valid values:
<li>GET.</li>
<li>HEAD.</li>
     * @param array $ExpectedCodes The status codes used to determine that the probe result is healthy when the probe node initiates a health check to an origin server. This parameter is valid only when Type = HTTP or Type = HTTPS.
     * @param array $Headers The custom HTTP request header carried by a probe request, with a maximum value of 10. This parameter is valid only when Type = HTTP or Type = HTTPS.
     * @param string $FollowRedirect Whether to follow 301/302 redirect. When enabled, 301/302 is considered a "healthy" status code, redirecting 3 times by default. This parameter is valid only when Type = HTTP or Type = HTTPS.
     * @param string $SendContext The content sent by a health check. Only ASCII visible characters are allowed, with up to 500 characters. This parameter is valid only when Type = UDP.
     * @param string $RecvContext The expected return result from an origin server during health check. Only ASCII visible characters are allowed, with up to 500 characters. This parameter is valid only when Type = UDP.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("HealthThreshold",$param) and $param["HealthThreshold"] !== null) {
            $this->HealthThreshold = $param["HealthThreshold"];
        }

        if (array_key_exists("CriticalThreshold",$param) and $param["CriticalThreshold"] !== null) {
            $this->CriticalThreshold = $param["CriticalThreshold"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("ExpectedCodes",$param) and $param["ExpectedCodes"] !== null) {
            $this->ExpectedCodes = $param["ExpectedCodes"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new CustomizedHeader();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }

        if (array_key_exists("FollowRedirect",$param) and $param["FollowRedirect"] !== null) {
            $this->FollowRedirect = $param["FollowRedirect"];
        }

        if (array_key_exists("SendContext",$param) and $param["SendContext"] !== null) {
            $this->SendContext = $param["SendContext"];
        }

        if (array_key_exists("RecvContext",$param) and $param["RecvContext"] !== null) {
            $this->RecvContext = $param["RecvContext"];
        }
    }
}
