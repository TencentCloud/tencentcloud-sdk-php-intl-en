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
 * CreateListener request structure.
 *
 * @method array getDefaultActions() Obtain <p>Default forwarding rule action list. Currently, a listener supports adding only 1 default forwarding rule action.</p>
 * @method void setDefaultActions(array $DefaultActions) Set <p>Default forwarding rule action list. Currently, a listener supports adding only 1 default forwarding rule action.</p>
 * @method integer getListenerPort() Obtain <p>Port used by the load balancing instance frontend. Value: 1-65535.</p>
 * @method void setListenerPort(integer $ListenerPort) Set <p>Port used by the load balancing instance frontend. Value: 1-65535.</p>
 * @method string getListenerProtocol() Obtain <p>Listening protocol. Parameter Value: HTTP, HTTPS, or QUIC.</p>
 * @method void setListenerProtocol(string $ListenerProtocol) Set <p>Listening protocol. Parameter Value: HTTP, HTTPS, or QUIC.</p>
 * @method string getLoadBalancerId() Obtain <p>Cloud Load Balancer instance ID. The format is alb- followed by 8 alphanumeric characters.</p>
 * @method void setLoadBalancerId(string $LoadBalancerId) Set <p>Cloud Load Balancer instance ID. The format is alb- followed by 8 alphanumeric characters.</p>
 * @method array getCaCertificateIds() Obtain <p>List of CA certificate IDs configured for the listener. Currently, a listener supports adding only 1 CA certificate.<br>This parameter is required when the CaEnabled parameter value is true.</p>
 * @method void setCaCertificateIds(array $CaCertificateIds) Set <p>List of CA certificate IDs configured for the listener. Currently, a listener supports adding only 1 CA certificate.<br>This parameter is required when the CaEnabled parameter value is true.</p>
 * @method boolean getCaEnabled() Obtain <p>Whether mutual authentication is enabled.<br>Value:<br>true: enabled.<br>false (default value): not enabled.</p>
 * @method void setCaEnabled(boolean $CaEnabled) Set <p>Whether mutual authentication is enabled.<br>Value:<br>true: enabled.<br>false (default value): not enabled.</p>
 * @method array getCertificateIds() Obtain <p>List of server certificate IDs.</p>
 * @method void setCertificateIds(array $CertificateIds) Set <p>List of server certificate IDs.</p>
 * @method string getClientToken() Obtain <p>Client token, used to ensure the idempotency of requests.  </p><p>Generate a parameter value from your client to ensure the uniqueness of the value for different requests. ClientToken supports only ASCII characters.</p>
 * @method void setClientToken(string $ClientToken) Set <p>Client token, used to ensure the idempotency of requests.  </p><p>Generate a parameter value from your client to ensure the uniqueness of the value for different requests. ClientToken supports only ASCII characters.</p>
 * @method boolean getGzipEnabled() Obtain <p>Whether Gzip compression is enabled. Value: true (default): yes. false: no</p>
 * @method void setGzipEnabled(boolean $GzipEnabled) Set <p>Whether Gzip compression is enabled. Value: true (default): yes. false: no</p>
 * @method boolean getHttp2Enabled() Obtain <p>Whether HTTP/2 is enabled. Default value: false for HTTP and true for HTTPS. Only the HTTPS protocol supports this parameter.</p>
 * @method void setHttp2Enabled(boolean $Http2Enabled) Set <p>Whether HTTP/2 is enabled. Default value: false for HTTP and true for HTTPS. Only the HTTPS protocol supports this parameter.</p>
 * @method integer getIdleTimeout() Obtain <p>Connection idle timeout, in seconds.<br>Value range: 1–600.<br>Default value: 15.<br>If no access request is received within the timeout period, load balancing will disconnect the current connection and create a new connection when the next request arrives.</p>
 * @method void setIdleTimeout(integer $IdleTimeout) Set <p>Connection idle timeout, in seconds.<br>Value range: 1–600.<br>Default value: 15.<br>If no access request is received within the timeout period, load balancing will disconnect the current connection and create a new connection when the next request arrives.</p>
 * @method string getListenerName() Obtain <p>Custom listener name, containing 1–255 characters. It must contain Chinese and harmless string characters, and can contain Chinese, letters, digits, dashes (-), forward slashes (/), half-width periods (.), and underscores (_).</p>
 * @method void setListenerName(string $ListenerName) Set <p>Custom listener name, containing 1–255 characters. It must contain Chinese and harmless string characters, and can contain Chinese, letters, digits, dashes (-), forward slashes (/), half-width periods (.), and underscores (_).</p>
 * @method integer getRequestTimeout() Obtain <p>Connection request timeout period. Unit: second. Value: 1–600. Default value: 60. If the real server does not return a response within the timeout period, load balancing will abandon waiting and return an HTTP 504 error code to the client.</p>
 * @method void setRequestTimeout(integer $RequestTimeout) Set <p>Connection request timeout period. Unit: second. Value: 1–600. Default value: 60. If the real server does not return a response within the timeout period, load balancing will abandon waiting and return an HTTP 504 error code to the client.</p>
 * @method string getSecurityPolicyId() Obtain <p>Security policy ID, format: tls- followed by 8 alphanumeric characters.</p>
 * @method void setSecurityPolicyId(string $SecurityPolicyId) Set <p>Security policy ID, format: tls- followed by 8 alphanumeric characters.</p>
 * @method array getTags() Obtain <p>Tag list. Supports up to 20.</p>
 * @method void setTags(array $Tags) Set <p>Tag list. Supports up to 20.</p>
 * @method XForwardedForConfig getXForwardedForConfig() Obtain <p>X-Forwarded-For configuration</p>
 * @method void setXForwardedForConfig(XForwardedForConfig $XForwardedForConfig) Set <p>X-Forwarded-For configuration</p>
 */
class CreateListenerRequest extends AbstractModel
{
    /**
     * @var array <p>Default forwarding rule action list. Currently, a listener supports adding only 1 default forwarding rule action.</p>
     */
    public $DefaultActions;

    /**
     * @var integer <p>Port used by the load balancing instance frontend. Value: 1-65535.</p>
     */
    public $ListenerPort;

    /**
     * @var string <p>Listening protocol. Parameter Value: HTTP, HTTPS, or QUIC.</p>
     */
    public $ListenerProtocol;

    /**
     * @var string <p>Cloud Load Balancer instance ID. The format is alb- followed by 8 alphanumeric characters.</p>
     */
    public $LoadBalancerId;

    /**
     * @var array <p>List of CA certificate IDs configured for the listener. Currently, a listener supports adding only 1 CA certificate.<br>This parameter is required when the CaEnabled parameter value is true.</p>
     */
    public $CaCertificateIds;

    /**
     * @var boolean <p>Whether mutual authentication is enabled.<br>Value:<br>true: enabled.<br>false (default value): not enabled.</p>
     */
    public $CaEnabled;

    /**
     * @var array <p>List of server certificate IDs.</p>
     */
    public $CertificateIds;

    /**
     * @var string <p>Client token, used to ensure the idempotency of requests.  </p><p>Generate a parameter value from your client to ensure the uniqueness of the value for different requests. ClientToken supports only ASCII characters.</p>
     */
    public $ClientToken;

    /**
     * @var boolean <p>Whether Gzip compression is enabled. Value: true (default): yes. false: no</p>
     */
    public $GzipEnabled;

    /**
     * @var boolean <p>Whether HTTP/2 is enabled. Default value: false for HTTP and true for HTTPS. Only the HTTPS protocol supports this parameter.</p>
     */
    public $Http2Enabled;

    /**
     * @var integer <p>Connection idle timeout, in seconds.<br>Value range: 1–600.<br>Default value: 15.<br>If no access request is received within the timeout period, load balancing will disconnect the current connection and create a new connection when the next request arrives.</p>
     */
    public $IdleTimeout;

    /**
     * @var string <p>Custom listener name, containing 1–255 characters. It must contain Chinese and harmless string characters, and can contain Chinese, letters, digits, dashes (-), forward slashes (/), half-width periods (.), and underscores (_).</p>
     */
    public $ListenerName;

    /**
     * @var integer <p>Connection request timeout period. Unit: second. Value: 1–600. Default value: 60. If the real server does not return a response within the timeout period, load balancing will abandon waiting and return an HTTP 504 error code to the client.</p>
     */
    public $RequestTimeout;

    /**
     * @var string <p>Security policy ID, format: tls- followed by 8 alphanumeric characters.</p>
     */
    public $SecurityPolicyId;

    /**
     * @var array <p>Tag list. Supports up to 20.</p>
     */
    public $Tags;

    /**
     * @var XForwardedForConfig <p>X-Forwarded-For configuration</p>
     */
    public $XForwardedForConfig;

    /**
     * @param array $DefaultActions <p>Default forwarding rule action list. Currently, a listener supports adding only 1 default forwarding rule action.</p>
     * @param integer $ListenerPort <p>Port used by the load balancing instance frontend. Value: 1-65535.</p>
     * @param string $ListenerProtocol <p>Listening protocol. Parameter Value: HTTP, HTTPS, or QUIC.</p>
     * @param string $LoadBalancerId <p>Cloud Load Balancer instance ID. The format is alb- followed by 8 alphanumeric characters.</p>
     * @param array $CaCertificateIds <p>List of CA certificate IDs configured for the listener. Currently, a listener supports adding only 1 CA certificate.<br>This parameter is required when the CaEnabled parameter value is true.</p>
     * @param boolean $CaEnabled <p>Whether mutual authentication is enabled.<br>Value:<br>true: enabled.<br>false (default value): not enabled.</p>
     * @param array $CertificateIds <p>List of server certificate IDs.</p>
     * @param string $ClientToken <p>Client token, used to ensure the idempotency of requests.  </p><p>Generate a parameter value from your client to ensure the uniqueness of the value for different requests. ClientToken supports only ASCII characters.</p>
     * @param boolean $GzipEnabled <p>Whether Gzip compression is enabled. Value: true (default): yes. false: no</p>
     * @param boolean $Http2Enabled <p>Whether HTTP/2 is enabled. Default value: false for HTTP and true for HTTPS. Only the HTTPS protocol supports this parameter.</p>
     * @param integer $IdleTimeout <p>Connection idle timeout, in seconds.<br>Value range: 1–600.<br>Default value: 15.<br>If no access request is received within the timeout period, load balancing will disconnect the current connection and create a new connection when the next request arrives.</p>
     * @param string $ListenerName <p>Custom listener name, containing 1–255 characters. It must contain Chinese and harmless string characters, and can contain Chinese, letters, digits, dashes (-), forward slashes (/), half-width periods (.), and underscores (_).</p>
     * @param integer $RequestTimeout <p>Connection request timeout period. Unit: second. Value: 1–600. Default value: 60. If the real server does not return a response within the timeout period, load balancing will abandon waiting and return an HTTP 504 error code to the client.</p>
     * @param string $SecurityPolicyId <p>Security policy ID, format: tls- followed by 8 alphanumeric characters.</p>
     * @param array $Tags <p>Tag list. Supports up to 20.</p>
     * @param XForwardedForConfig $XForwardedForConfig <p>X-Forwarded-For configuration</p>
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
        if (array_key_exists("DefaultActions",$param) and $param["DefaultActions"] !== null) {
            $this->DefaultActions = [];
            foreach ($param["DefaultActions"] as $key => $value){
                $obj = new DefaultAction();
                $obj->deserialize($value);
                array_push($this->DefaultActions, $obj);
            }
        }

        if (array_key_exists("ListenerPort",$param) and $param["ListenerPort"] !== null) {
            $this->ListenerPort = $param["ListenerPort"];
        }

        if (array_key_exists("ListenerProtocol",$param) and $param["ListenerProtocol"] !== null) {
            $this->ListenerProtocol = $param["ListenerProtocol"];
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
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

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
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

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
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
    }
}
