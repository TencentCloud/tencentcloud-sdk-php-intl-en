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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LoadBalancer health check policy.
 *
 * @method string getType() Obtain <p>Health check policy. Valid values:</p><li>HTTP;</li><li>HTTPS;</li><li>TCP;</li><li>UDP;</li><li>ICMP Ping;</li><li>NoCheck.</li>Note: NoCheck means health check policy is not enabled.
 * @method void setType(string $Type) Set <p>Health check policy. Valid values:</p><li>HTTP;</li><li>HTTPS;</li><li>TCP;</li><li>UDP;</li><li>ICMP Ping;</li><li>NoCheck.</li>Note: NoCheck means health check policy is not enabled.
 * @method integer getPort() Obtain <p>Check port, which is required when Type = HTTP, Type = HTTPS, Type = TCP, or Type = UDP.</p>
 * @method void setPort(integer $Port) Set <p>Check port, which is required when Type = HTTP, Type = HTTPS, Type = TCP, or Type = UDP.</p>
 * @method integer getInterval() Obtain <p>Check frequency, in seconds. It indicates how often a health check task is initiated. Configurable range: 10-600 seconds.</p>
 * @method void setInterval(integer $Interval) Set <p>Check frequency, in seconds. It indicates how often a health check task is initiated. Configurable range: 10-600 seconds.</p>
 * @method integer getTimeout() Obtain <p>Timeout for each health check, in seconds. If the health check time exceeds this value, the check result is determined as "unhealthy". The default value is 5s, and the value should be less than Interval.</p>
 * @method void setTimeout(integer $Timeout) Set <p>Timeout for each health check, in seconds. If the health check time exceeds this value, the check result is determined as "unhealthy". The default value is 5s, and the value should be less than Interval.</p>
 * @method integer getHealthThreshold() Obtain <p>Health threshold, in the number of times. It indicates that if the consecutive health check results are "healthy" for a certain number of times, an origin server is considered "healthy". The default value is 3 times, with the minimum value of 1 time.</p>
 * @method void setHealthThreshold(integer $HealthThreshold) Set <p>Health threshold, in the number of times. It indicates that if the consecutive health check results are "healthy" for a certain number of times, an origin server is considered "healthy". The default value is 3 times, with the minimum value of 1 time.</p>
 * @method integer getCriticalThreshold() Obtain <p>Unhealthy state threshold, in the number of times. It indicates that if the consecutive health check results are "unhealthy" for a certain number of times, an origin server is considered "unhealthy". The default value is 2 times.</p>
 * @method void setCriticalThreshold(integer $CriticalThreshold) Set <p>Unhealthy state threshold, in the number of times. It indicates that if the consecutive health check results are "unhealthy" for a certain number of times, an origin server is considered "unhealthy". The default value is 2 times.</p>
 * @method string getPath() Obtain <p>Probe path. This parameter is valid only when Type = HTTP or Type = HTTPS. It needs to include the complete host/path and should not contain a protocol, for example, www.example.com/test.</p>
 * @method void setPath(string $Path) Set <p>Probe path. This parameter is valid only when Type = HTTP or Type = HTTPS. It needs to include the complete host/path and should not contain a protocol, for example, www.example.com/test.</p>
 * @method string getHostHeaderPolicy() Obtain <p>Probe request Host Header policy. It takes effect only when Type=HTTP or Type=HTTPS and the instance type is HTTP-dedicated (V2). Valid values:</p><li>FollowCheckURL: Follows the Host specified by the probe URL, that is, the Host part in the HealthChecker.Path field will be used as the Host address for probing;</li><li>FollowOriginGroup: Follows the origin-pull Host Header configured in the origin group, that is, the OriginGroup.HostHeader field value of the origin group where the probed origin resides will be used as the Host address for probing. If the origin group has no HostHeader configured, the Host part in the HealthChecker.Path field will be used as the Host address for probing;</li><li>FollowOrigin: Follows the origin address, that is, the OriginGroup.Records[N].Record field value (the origin address itself) of the corresponding origin record in the origin group where the probed origin resides will be used as the Host address for probing.</li>Default: FollowCheckURL.
 * @method void setHostHeaderPolicy(string $HostHeaderPolicy) Set <p>Probe request Host Header policy. It takes effect only when Type=HTTP or Type=HTTPS and the instance type is HTTP-dedicated (V2). Valid values:</p><li>FollowCheckURL: Follows the Host specified by the probe URL, that is, the Host part in the HealthChecker.Path field will be used as the Host address for probing;</li><li>FollowOriginGroup: Follows the origin-pull Host Header configured in the origin group, that is, the OriginGroup.HostHeader field value of the origin group where the probed origin resides will be used as the Host address for probing. If the origin group has no HostHeader configured, the Host part in the HealthChecker.Path field will be used as the Host address for probing;</li><li>FollowOrigin: Follows the origin address, that is, the OriginGroup.Records[N].Record field value (the origin address itself) of the corresponding origin record in the origin group where the probed origin resides will be used as the Host address for probing.</li>Default: FollowCheckURL.
 * @method string getMethod() Obtain <p>Request method. This parameter is valid only when Type = HTTP or Type = HTTPS. Valid values:</p><li>GET;</li><li>HEAD.</li>
 * @method void setMethod(string $Method) Set <p>Request method. This parameter is valid only when Type = HTTP or Type = HTTPS. Valid values:</p><li>GET;</li><li>HEAD.</li>
 * @method array getExpectedCodes() Obtain <p>The status codes used to determine that the probe result is healthy when the probe node initiates a health check to an origin server. This parameter is valid only when Type = HTTP or Type = HTTPS.</p>
 * @method void setExpectedCodes(array $ExpectedCodes) Set <p>The status codes used to determine that the probe result is healthy when the probe node initiates a health check to an origin server. This parameter is valid only when Type = HTTP or Type = HTTPS.</p>
 * @method array getHeaders() Obtain <p>This parameter is valid only when Type=HTTP or Type=HTTPS. It refers to the custom HTTP request header carried in the probe request. Up to 10 can be configured.</p>
 * @method void setHeaders(array $Headers) Set <p>This parameter is valid only when Type=HTTP or Type=HTTPS. It refers to the custom HTTP request header carried in the probe request. Up to 10 can be configured.</p>
 * @method string getFollowRedirect() Obtain <p>Whether to follow 301/302 redirect. When enabled, 301/302 is considered a "healthy" status code, redirecting 3 times by default. This parameter is valid only when Type = HTTP or Type = HTTPS.</p>
 * @method void setFollowRedirect(string $FollowRedirect) Set <p>Whether to follow 301/302 redirect. When enabled, 301/302 is considered a "healthy" status code, redirecting 3 times by default. This parameter is valid only when Type = HTTP or Type = HTTPS.</p>
 * @method string getSendContext() Obtain <p>The content sent by a health check. Only ASCII visible characters are allowed, with up to 500 characters. This parameter is valid only when Type = UDP.</p>
 * @method void setSendContext(string $SendContext) Set <p>The content sent by a health check. Only ASCII visible characters are allowed, with up to 500 characters. This parameter is valid only when Type = UDP.</p>
 * @method string getRecvContext() Obtain <p>The expected return result from an origin server during health check. Only ASCII visible characters are allowed, with up to 500 characters. This parameter is valid only when Type = UDP.</p>
 * @method void setRecvContext(string $RecvContext) Set <p>The expected return result from an origin server during health check. Only ASCII visible characters are allowed, with up to 500 characters. This parameter is valid only when Type = UDP.</p>
 * @method string getProbeCluster() Obtain <p>Health check probe cluster. Specifies the cluster region scope from which this load balancer instance initiates health probes. For details on the regional distribution of probe clusters, see <a href="https://www.tencentcloud.com/document/product/1552/104228?from_cn_redirect=1">Health Check Policy Introduction</a>. This can be configured only for HTTP-dedicated (V2) load balancer instances. Valid values:</p><li>global: Probes are initiated by probe clusters in all regions worldwide, including the Chinese mainland and regions outside the Chinese mainland. Clusters in each region independently maintain their own probe results;</li><li>mainland_china: Probes are initiated only by probe clusters in the Chinese mainland. Currently, the Chinese mainland shares one probe cluster, and probe results are maintained by the probe cluster in the Chinese mainland. Other regions follow the probe results of the cluster in the Chinese mainland;</li><li>overseas: Probes are initiated only by probe clusters in regions outside the Chinese mainland. Currently, regions outside the Chinese mainland contain probe clusters in multiple areas, and probe results are independently maintained by the probe clusters in each area. Probe results for the Chinese mainland are generated by aggregating the probe results of the probe clusters in all other areas.</li>Default: global.
 * @method void setProbeCluster(string $ProbeCluster) Set <p>Health check probe cluster. Specifies the cluster region scope from which this load balancer instance initiates health probes. For details on the regional distribution of probe clusters, see <a href="https://www.tencentcloud.com/document/product/1552/104228?from_cn_redirect=1">Health Check Policy Introduction</a>. This can be configured only for HTTP-dedicated (V2) load balancer instances. Valid values:</p><li>global: Probes are initiated by probe clusters in all regions worldwide, including the Chinese mainland and regions outside the Chinese mainland. Clusters in each region independently maintain their own probe results;</li><li>mainland_china: Probes are initiated only by probe clusters in the Chinese mainland. Currently, the Chinese mainland shares one probe cluster, and probe results are maintained by the probe cluster in the Chinese mainland. Other regions follow the probe results of the cluster in the Chinese mainland;</li><li>overseas: Probes are initiated only by probe clusters in regions outside the Chinese mainland. Currently, regions outside the Chinese mainland contain probe clusters in multiple areas, and probe results are independently maintained by the probe clusters in each area. Probe results for the Chinese mainland are generated by aggregating the probe results of the probe clusters in all other areas.</li>Default: global.
 */
class HealthChecker extends AbstractModel
{
    /**
     * @var string <p>Health check policy. Valid values:</p><li>HTTP;</li><li>HTTPS;</li><li>TCP;</li><li>UDP;</li><li>ICMP Ping;</li><li>NoCheck.</li>Note: NoCheck means health check policy is not enabled.
     */
    public $Type;

    /**
     * @var integer <p>Check port, which is required when Type = HTTP, Type = HTTPS, Type = TCP, or Type = UDP.</p>
     */
    public $Port;

    /**
     * @var integer <p>Check frequency, in seconds. It indicates how often a health check task is initiated. Configurable range: 10-600 seconds.</p>
     */
    public $Interval;

    /**
     * @var integer <p>Timeout for each health check, in seconds. If the health check time exceeds this value, the check result is determined as "unhealthy". The default value is 5s, and the value should be less than Interval.</p>
     */
    public $Timeout;

    /**
     * @var integer <p>Health threshold, in the number of times. It indicates that if the consecutive health check results are "healthy" for a certain number of times, an origin server is considered "healthy". The default value is 3 times, with the minimum value of 1 time.</p>
     */
    public $HealthThreshold;

    /**
     * @var integer <p>Unhealthy state threshold, in the number of times. It indicates that if the consecutive health check results are "unhealthy" for a certain number of times, an origin server is considered "unhealthy". The default value is 2 times.</p>
     */
    public $CriticalThreshold;

    /**
     * @var string <p>Probe path. This parameter is valid only when Type = HTTP or Type = HTTPS. It needs to include the complete host/path and should not contain a protocol, for example, www.example.com/test.</p>
     */
    public $Path;

    /**
     * @var string <p>Probe request Host Header policy. It takes effect only when Type=HTTP or Type=HTTPS and the instance type is HTTP-dedicated (V2). Valid values:</p><li>FollowCheckURL: Follows the Host specified by the probe URL, that is, the Host part in the HealthChecker.Path field will be used as the Host address for probing;</li><li>FollowOriginGroup: Follows the origin-pull Host Header configured in the origin group, that is, the OriginGroup.HostHeader field value of the origin group where the probed origin resides will be used as the Host address for probing. If the origin group has no HostHeader configured, the Host part in the HealthChecker.Path field will be used as the Host address for probing;</li><li>FollowOrigin: Follows the origin address, that is, the OriginGroup.Records[N].Record field value (the origin address itself) of the corresponding origin record in the origin group where the probed origin resides will be used as the Host address for probing.</li>Default: FollowCheckURL.
     */
    public $HostHeaderPolicy;

    /**
     * @var string <p>Request method. This parameter is valid only when Type = HTTP or Type = HTTPS. Valid values:</p><li>GET;</li><li>HEAD.</li>
     */
    public $Method;

    /**
     * @var array <p>The status codes used to determine that the probe result is healthy when the probe node initiates a health check to an origin server. This parameter is valid only when Type = HTTP or Type = HTTPS.</p>
     */
    public $ExpectedCodes;

    /**
     * @var array <p>This parameter is valid only when Type=HTTP or Type=HTTPS. It refers to the custom HTTP request header carried in the probe request. Up to 10 can be configured.</p>
     */
    public $Headers;

    /**
     * @var string <p>Whether to follow 301/302 redirect. When enabled, 301/302 is considered a "healthy" status code, redirecting 3 times by default. This parameter is valid only when Type = HTTP or Type = HTTPS.</p>
     */
    public $FollowRedirect;

    /**
     * @var string <p>The content sent by a health check. Only ASCII visible characters are allowed, with up to 500 characters. This parameter is valid only when Type = UDP.</p>
     */
    public $SendContext;

    /**
     * @var string <p>The expected return result from an origin server during health check. Only ASCII visible characters are allowed, with up to 500 characters. This parameter is valid only when Type = UDP.</p>
     */
    public $RecvContext;

    /**
     * @var string <p>Health check probe cluster. Specifies the cluster region scope from which this load balancer instance initiates health probes. For details on the regional distribution of probe clusters, see <a href="https://www.tencentcloud.com/document/product/1552/104228?from_cn_redirect=1">Health Check Policy Introduction</a>. This can be configured only for HTTP-dedicated (V2) load balancer instances. Valid values:</p><li>global: Probes are initiated by probe clusters in all regions worldwide, including the Chinese mainland and regions outside the Chinese mainland. Clusters in each region independently maintain their own probe results;</li><li>mainland_china: Probes are initiated only by probe clusters in the Chinese mainland. Currently, the Chinese mainland shares one probe cluster, and probe results are maintained by the probe cluster in the Chinese mainland. Other regions follow the probe results of the cluster in the Chinese mainland;</li><li>overseas: Probes are initiated only by probe clusters in regions outside the Chinese mainland. Currently, regions outside the Chinese mainland contain probe clusters in multiple areas, and probe results are independently maintained by the probe clusters in each area. Probe results for the Chinese mainland are generated by aggregating the probe results of the probe clusters in all other areas.</li>Default: global.
     */
    public $ProbeCluster;

    /**
     * @param string $Type <p>Health check policy. Valid values:</p><li>HTTP;</li><li>HTTPS;</li><li>TCP;</li><li>UDP;</li><li>ICMP Ping;</li><li>NoCheck.</li>Note: NoCheck means health check policy is not enabled.
     * @param integer $Port <p>Check port, which is required when Type = HTTP, Type = HTTPS, Type = TCP, or Type = UDP.</p>
     * @param integer $Interval <p>Check frequency, in seconds. It indicates how often a health check task is initiated. Configurable range: 10-600 seconds.</p>
     * @param integer $Timeout <p>Timeout for each health check, in seconds. If the health check time exceeds this value, the check result is determined as "unhealthy". The default value is 5s, and the value should be less than Interval.</p>
     * @param integer $HealthThreshold <p>Health threshold, in the number of times. It indicates that if the consecutive health check results are "healthy" for a certain number of times, an origin server is considered "healthy". The default value is 3 times, with the minimum value of 1 time.</p>
     * @param integer $CriticalThreshold <p>Unhealthy state threshold, in the number of times. It indicates that if the consecutive health check results are "unhealthy" for a certain number of times, an origin server is considered "unhealthy". The default value is 2 times.</p>
     * @param string $Path <p>Probe path. This parameter is valid only when Type = HTTP or Type = HTTPS. It needs to include the complete host/path and should not contain a protocol, for example, www.example.com/test.</p>
     * @param string $HostHeaderPolicy <p>Probe request Host Header policy. It takes effect only when Type=HTTP or Type=HTTPS and the instance type is HTTP-dedicated (V2). Valid values:</p><li>FollowCheckURL: Follows the Host specified by the probe URL, that is, the Host part in the HealthChecker.Path field will be used as the Host address for probing;</li><li>FollowOriginGroup: Follows the origin-pull Host Header configured in the origin group, that is, the OriginGroup.HostHeader field value of the origin group where the probed origin resides will be used as the Host address for probing. If the origin group has no HostHeader configured, the Host part in the HealthChecker.Path field will be used as the Host address for probing;</li><li>FollowOrigin: Follows the origin address, that is, the OriginGroup.Records[N].Record field value (the origin address itself) of the corresponding origin record in the origin group where the probed origin resides will be used as the Host address for probing.</li>Default: FollowCheckURL.
     * @param string $Method <p>Request method. This parameter is valid only when Type = HTTP or Type = HTTPS. Valid values:</p><li>GET;</li><li>HEAD.</li>
     * @param array $ExpectedCodes <p>The status codes used to determine that the probe result is healthy when the probe node initiates a health check to an origin server. This parameter is valid only when Type = HTTP or Type = HTTPS.</p>
     * @param array $Headers <p>This parameter is valid only when Type=HTTP or Type=HTTPS. It refers to the custom HTTP request header carried in the probe request. Up to 10 can be configured.</p>
     * @param string $FollowRedirect <p>Whether to follow 301/302 redirect. When enabled, 301/302 is considered a "healthy" status code, redirecting 3 times by default. This parameter is valid only when Type = HTTP or Type = HTTPS.</p>
     * @param string $SendContext <p>The content sent by a health check. Only ASCII visible characters are allowed, with up to 500 characters. This parameter is valid only when Type = UDP.</p>
     * @param string $RecvContext <p>The expected return result from an origin server during health check. Only ASCII visible characters are allowed, with up to 500 characters. This parameter is valid only when Type = UDP.</p>
     * @param string $ProbeCluster <p>Health check probe cluster. Specifies the cluster region scope from which this load balancer instance initiates health probes. For details on the regional distribution of probe clusters, see <a href="https://www.tencentcloud.com/document/product/1552/104228?from_cn_redirect=1">Health Check Policy Introduction</a>. This can be configured only for HTTP-dedicated (V2) load balancer instances. Valid values:</p><li>global: Probes are initiated by probe clusters in all regions worldwide, including the Chinese mainland and regions outside the Chinese mainland. Clusters in each region independently maintain their own probe results;</li><li>mainland_china: Probes are initiated only by probe clusters in the Chinese mainland. Currently, the Chinese mainland shares one probe cluster, and probe results are maintained by the probe cluster in the Chinese mainland. Other regions follow the probe results of the cluster in the Chinese mainland;</li><li>overseas: Probes are initiated only by probe clusters in regions outside the Chinese mainland. Currently, regions outside the Chinese mainland contain probe clusters in multiple areas, and probe results are independently maintained by the probe clusters in each area. Probe results for the Chinese mainland are generated by aggregating the probe results of the probe clusters in all other areas.</li>Default: global.
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

        if (array_key_exists("HostHeaderPolicy",$param) and $param["HostHeaderPolicy"] !== null) {
            $this->HostHeaderPolicy = $param["HostHeaderPolicy"];
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

        if (array_key_exists("ProbeCluster",$param) and $param["ProbeCluster"] !== null) {
            $this->ProbeCluster = $param["ProbeCluster"];
        }
    }
}
