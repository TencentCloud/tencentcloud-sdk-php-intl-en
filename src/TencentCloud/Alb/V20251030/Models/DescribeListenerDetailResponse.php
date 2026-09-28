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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeListenerDetail response structure.
 *
 * @method array getCaCertificateIds() Obtain <p>List of CA certificate IDs bound to the listener.</p>
 * @method void setCaCertificateIds(array $CaCertificateIds) Set <p>List of CA certificate IDs bound to the listener.</p>
 * @method boolean getCaEnabled() Obtain <p>Whether to enable mutual authentication.</p>
 * @method void setCaEnabled(boolean $CaEnabled) Set <p>Whether to enable mutual authentication.</p>
 * @method array getCertificateIds() Obtain <p>List of server certificate IDs.</p>
 * @method void setCertificateIds(array $CertificateIds) Set <p>List of server certificate IDs.</p>
 * @method string getCreateTime() Obtain <p>Creation time of the listener instance. Format: ISO 8601 (for example, 2025-01-01T08:30:00+08:00)</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time of the listener instance. Format: ISO 8601 (for example, 2025-01-01T08:30:00+08:00)</p>
 * @method array getDefaultActions() Obtain <p>Action list of the rule.</p>
 * @method void setDefaultActions(array $DefaultActions) Set <p>Action list of the rule.</p>
 * @method boolean getGzipEnabled() Obtain <p>Whether to enable Gzip compression.</p>
 * @method void setGzipEnabled(boolean $GzipEnabled) Set <p>Whether to enable Gzip compression.</p>
 * @method boolean getHttp2Enabled() Obtain <p>Whether to enable the HTTP/2 feature.</p>
 * @method void setHttp2Enabled(boolean $Http2Enabled) Set <p>Whether to enable the HTTP/2 feature.</p>
 * @method integer getIdleTimeout() Obtain <p>Specify the connection idle timeout period. Unit: seconds.</p>
 * @method void setIdleTimeout(integer $IdleTimeout) Set <p>Specify the connection idle timeout period. Unit: seconds.</p>
 * @method string getListenerId() Obtain <p>Listener ID, in the format of lst- followed by 8 alphanumeric characters.</p>
 * @method void setListenerId(string $ListenerId) Set <p>Listener ID, in the format of lst- followed by 8 alphanumeric characters.</p>
 * @method string getListenerName() Obtain <p>Custom listener name.</p>
 * @method void setListenerName(string $ListenerName) Set <p>Custom listener name.</p>
 * @method integer getListenerPort() Obtain <p>Port used by the load balancing instance frontend.</p>
 * @method void setListenerPort(integer $ListenerPort) Set <p>Port used by the load balancing instance frontend.</p>
 * @method string getListenerProtocol() Obtain <p>Listening protocol.</p>
 * @method void setListenerProtocol(string $ListenerProtocol) Set <p>Listening protocol.</p>
 * @method string getListenerStatus() Obtain <p>Listener status. Value range:</p><ul><li><strong>Active</strong>: running.</li><li><strong>Provisioning</strong>: under creation.</li><li><strong>Configuring</strong>: changing.</li><li><strong>ProvisionFailed</strong>: creation failed</li></ul>
 * @method void setListenerStatus(string $ListenerStatus) Set <p>Listener status. Value range:</p><ul><li><strong>Active</strong>: running.</li><li><strong>Provisioning</strong>: under creation.</li><li><strong>Configuring</strong>: changing.</li><li><strong>ProvisionFailed</strong>: creation failed</li></ul>
 * @method string getLoadBalancerId() Obtain <p>Cloud Load Balancer instance ID. The format is alb- followed by 8 alphanumeric characters.</p>
 * @method void setLoadBalancerId(string $LoadBalancerId) Set <p>Cloud Load Balancer instance ID. The format is alb- followed by 8 alphanumeric characters.</p>
 * @method string getModifyTime() Obtain <p>Last change time of the listener instance. Format: ISO 8601 (for example, 2025-01-01T08:30:00+08:00)</p>
 * @method void setModifyTime(string $ModifyTime) Set <p>Last change time of the listener instance. Format: ISO 8601 (for example, 2025-01-01T08:30:00+08:00)</p>
 * @method integer getRequestTimeout() Obtain <p>Connection request timeout period. Unit: seconds.</p>
 * @method void setRequestTimeout(integer $RequestTimeout) Set <p>Connection request timeout period. Unit: seconds.</p>
 * @method string getSecurityPolicyId() Obtain <p>Security policy ID, format: tls- followed by 8 alphanumeric characters.</p>
 * @method void setSecurityPolicyId(string $SecurityPolicyId) Set <p>Security policy ID, format: tls- followed by 8 alphanumeric characters.</p>
 * @method array getTags() Obtain <p>Tag.</p>
 * @method void setTags(array $Tags) Set <p>Tag.</p>
 * @method XForwardedForConfig getXForwardedForConfig() Obtain <p>XForwardedFor configuration.</p>
 * @method void setXForwardedForConfig(XForwardedForConfig $XForwardedForConfig) Set <p>XForwardedFor configuration.</p>
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeListenerDetailResponse extends AbstractModel
{
    /**
     * @var array <p>List of CA certificate IDs bound to the listener.</p>
     */
    public $CaCertificateIds;

    /**
     * @var boolean <p>Whether to enable mutual authentication.</p>
     */
    public $CaEnabled;

    /**
     * @var array <p>List of server certificate IDs.</p>
     */
    public $CertificateIds;

    /**
     * @var string <p>Creation time of the listener instance. Format: ISO 8601 (for example, 2025-01-01T08:30:00+08:00)</p>
     */
    public $CreateTime;

    /**
     * @var array <p>Action list of the rule.</p>
     */
    public $DefaultActions;

    /**
     * @var boolean <p>Whether to enable Gzip compression.</p>
     */
    public $GzipEnabled;

    /**
     * @var boolean <p>Whether to enable the HTTP/2 feature.</p>
     */
    public $Http2Enabled;

    /**
     * @var integer <p>Specify the connection idle timeout period. Unit: seconds.</p>
     */
    public $IdleTimeout;

    /**
     * @var string <p>Listener ID, in the format of lst- followed by 8 alphanumeric characters.</p>
     */
    public $ListenerId;

    /**
     * @var string <p>Custom listener name.</p>
     */
    public $ListenerName;

    /**
     * @var integer <p>Port used by the load balancing instance frontend.</p>
     */
    public $ListenerPort;

    /**
     * @var string <p>Listening protocol.</p>
     */
    public $ListenerProtocol;

    /**
     * @var string <p>Listener status. Value range:</p><ul><li><strong>Active</strong>: running.</li><li><strong>Provisioning</strong>: under creation.</li><li><strong>Configuring</strong>: changing.</li><li><strong>ProvisionFailed</strong>: creation failed</li></ul>
     */
    public $ListenerStatus;

    /**
     * @var string <p>Cloud Load Balancer instance ID. The format is alb- followed by 8 alphanumeric characters.</p>
     */
    public $LoadBalancerId;

    /**
     * @var string <p>Last change time of the listener instance. Format: ISO 8601 (for example, 2025-01-01T08:30:00+08:00)</p>
     */
    public $ModifyTime;

    /**
     * @var integer <p>Connection request timeout period. Unit: seconds.</p>
     */
    public $RequestTimeout;

    /**
     * @var string <p>Security policy ID, format: tls- followed by 8 alphanumeric characters.</p>
     */
    public $SecurityPolicyId;

    /**
     * @var array <p>Tag.</p>
     */
    public $Tags;

    /**
     * @var XForwardedForConfig <p>XForwardedFor configuration.</p>
     */
    public $XForwardedForConfig;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $CaCertificateIds <p>List of CA certificate IDs bound to the listener.</p>
     * @param boolean $CaEnabled <p>Whether to enable mutual authentication.</p>
     * @param array $CertificateIds <p>List of server certificate IDs.</p>
     * @param string $CreateTime <p>Creation time of the listener instance. Format: ISO 8601 (for example, 2025-01-01T08:30:00+08:00)</p>
     * @param array $DefaultActions <p>Action list of the rule.</p>
     * @param boolean $GzipEnabled <p>Whether to enable Gzip compression.</p>
     * @param boolean $Http2Enabled <p>Whether to enable the HTTP/2 feature.</p>
     * @param integer $IdleTimeout <p>Specify the connection idle timeout period. Unit: seconds.</p>
     * @param string $ListenerId <p>Listener ID, in the format of lst- followed by 8 alphanumeric characters.</p>
     * @param string $ListenerName <p>Custom listener name.</p>
     * @param integer $ListenerPort <p>Port used by the load balancing instance frontend.</p>
     * @param string $ListenerProtocol <p>Listening protocol.</p>
     * @param string $ListenerStatus <p>Listener status. Value range:</p><ul><li><strong>Active</strong>: running.</li><li><strong>Provisioning</strong>: under creation.</li><li><strong>Configuring</strong>: changing.</li><li><strong>ProvisionFailed</strong>: creation failed</li></ul>
     * @param string $LoadBalancerId <p>Cloud Load Balancer instance ID. The format is alb- followed by 8 alphanumeric characters.</p>
     * @param string $ModifyTime <p>Last change time of the listener instance. Format: ISO 8601 (for example, 2025-01-01T08:30:00+08:00)</p>
     * @param integer $RequestTimeout <p>Connection request timeout period. Unit: seconds.</p>
     * @param string $SecurityPolicyId <p>Security policy ID, format: tls- followed by 8 alphanumeric characters.</p>
     * @param array $Tags <p>Tag.</p>
     * @param XForwardedForConfig $XForwardedForConfig <p>XForwardedFor configuration.</p>
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("CaCertificateIds",$param) and $param["CaCertificateIds"] !== null) {
            $this->CaCertificateIds = $param["CaCertificateIds"];
        }

        if (array_key_exists("CaEnabled",$param) and $param["CaEnabled"] !== null) {
            $this->CaEnabled = $param["CaEnabled"];
        }

        if (array_key_exists("CertificateIds",$param) and $param["CertificateIds"] !== null) {
            $this->CertificateIds = $param["CertificateIds"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DefaultActions",$param) and $param["DefaultActions"] !== null) {
            $this->DefaultActions = [];
            foreach ($param["DefaultActions"] as $key => $value){
                $obj = new DefaultAction();
                $obj->deserialize($value);
                array_push($this->DefaultActions, $obj);
            }
        }

        if (array_key_exists("GzipEnabled",$param) and $param["GzipEnabled"] !== null) {
            $this->GzipEnabled = $param["GzipEnabled"];
        }

        if (array_key_exists("Http2Enabled",$param) and $param["Http2Enabled"] !== null) {
            $this->Http2Enabled = $param["Http2Enabled"];
        }

        if (array_key_exists("IdleTimeout",$param) and $param["IdleTimeout"] !== null) {
            $this->IdleTimeout = $param["IdleTimeout"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("ListenerPort",$param) and $param["ListenerPort"] !== null) {
            $this->ListenerPort = $param["ListenerPort"];
        }

        if (array_key_exists("ListenerProtocol",$param) and $param["ListenerProtocol"] !== null) {
            $this->ListenerProtocol = $param["ListenerProtocol"];
        }

        if (array_key_exists("ListenerStatus",$param) and $param["ListenerStatus"] !== null) {
            $this->ListenerStatus = $param["ListenerStatus"];
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("RequestTimeout",$param) and $param["RequestTimeout"] !== null) {
            $this->RequestTimeout = $param["RequestTimeout"];
        }

        if (array_key_exists("SecurityPolicyId",$param) and $param["SecurityPolicyId"] !== null) {
            $this->SecurityPolicyId = $param["SecurityPolicyId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("XForwardedForConfig",$param) and $param["XForwardedForConfig"] !== null) {
            $this->XForwardedForConfig = new XForwardedForConfig();
            $this->XForwardedForConfig->deserialize($param["XForwardedForConfig"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
