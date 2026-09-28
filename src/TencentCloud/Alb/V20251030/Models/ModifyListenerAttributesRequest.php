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
 * ModifyListenerAttributes request structure.
 *
 * @method string getListenerId() Obtain Listener ID, format: lst- followed by 8 alphanumeric characters.
 * @method void setListenerId(string $ListenerId) Set Listener ID, format: lst- followed by 8 alphanumeric characters.
 * @method string getLoadBalancerId() Obtain Cloud Load Balancer instance ID, in the format of "alb-" followed by 8 alphanumeric characters.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set Cloud Load Balancer instance ID, in the format of "alb-" followed by 8 alphanumeric characters.
 * @method array getCaCertificateIds() Obtain CA certificate ID list for the listener configuration. Currently only support adding 1 CA certificate.
 * @method void setCaCertificateIds(array $CaCertificateIds) Set CA certificate ID list for the listener configuration. Currently only support adding 1 CA certificate.
 * @method boolean getCaEnabled() Obtain Whether mutual authentication is enabled.
Valid values:
true: enabled.
false (default value): not enabled.
 * @method void setCaEnabled(boolean $CaEnabled) Set Whether mutual authentication is enabled.
Valid values:
true: enabled.
false (default value): not enabled.
 * @method array getCertificateIds() Obtain List of server certificate IDs.
 * @method void setCertificateIds(array $CertificateIds) Set List of server certificate IDs.
 * @method string getClientToken() Obtain Client Token, used for ensuring request idempotency.  

Generate a parameter value from your client to underwrite the uniqueness of the value for different requests. ClientToken supports only ASCII characters.
 * @method void setClientToken(string $ClientToken) Set Client Token, used for ensuring request idempotency.  

Generate a parameter value from your client to underwrite the uniqueness of the value for different requests. ClientToken supports only ASCII characters.
 * @method array getDefaultActions() Obtain List of default forward rule actions. Currently, a listener supports adding only 1 default forward rule action.
 * @method void setDefaultActions(array $DefaultActions) Set List of default forward rule actions. Currently, a listener supports adding only 1 default forward rule action.
 * @method boolean getGzipEnabled() Obtain Whether to enable Gzip compression.
 * @method void setGzipEnabled(boolean $GzipEnabled) Set Whether to enable Gzip compression.
 * @method boolean getHttp2Enabled() Obtain Whether to enable HTTP/2. Only HTTPS protocol supports this parameter.
 * @method void setHttp2Enabled(boolean $Http2Enabled) Set Whether to enable HTTP/2. Only HTTPS protocol supports this parameter.
 * @method integer getIdleTimeout() Obtain Specify the idle timeout for a connection. Unit: seconds.
Valid values: 1-600.
Default value: 15.
If no access request is received within the set time, load balancing will temporarily disconnect the current connection and reestablish a new connection when the next request arrives.
 * @method void setIdleTimeout(integer $IdleTimeout) Set Specify the idle timeout for a connection. Unit: seconds.
Valid values: 1-600.
Default value: 15.
If no access request is received within the set time, load balancing will temporarily disconnect the current connection and reestablish a new connection when the next request arrives.
 * @method string getListenerName() Obtain Custom listener name, 1–255 characters in length. It must contain Chinese and harmless string characters, and can contain Chinese, letters, digits, dashes (-), forward slashes (/), half-width periods (.), and underscores (_).
 * @method void setListenerName(string $ListenerName) Set Custom listener name, 1–255 characters in length. It must contain Chinese and harmless string characters, and can contain Chinese, letters, digits, dashes (-), forward slashes (/), half-width periods (.), and underscores (_).
 * @method integer getRequestTimeout() Obtain Specify the request timeout. Unit: seconds.
Value: 1-600.
Default value: 60.
If the real server does not respond within the timeout period, load balancing will abandon waiting and return an HTTP 504 error code to the client.
 * @method void setRequestTimeout(integer $RequestTimeout) Set Specify the request timeout. Unit: seconds.
Value: 1-600.
Default value: 60.
If the real server does not respond within the timeout period, load balancing will abandon waiting and return an HTTP 504 error code to the client.
 * @method string getSecurityPolicyId() Obtain Security policy ID in the format of tls- followed by 8 alphanumeric characters.
 * @method void setSecurityPolicyId(string $SecurityPolicyId) Set Security policy ID in the format of tls- followed by 8 alphanumeric characters.
 * @method XForwardedForConfig getXForwardedForConfig() Obtain XForwardedFor configuration.
 * @method void setXForwardedForConfig(XForwardedForConfig $XForwardedForConfig) Set XForwardedFor configuration.
 */
class ModifyListenerAttributesRequest extends AbstractModel
{
    /**
     * @var string Listener ID, format: lst- followed by 8 alphanumeric characters.
     */
    public $ListenerId;

    /**
     * @var string Cloud Load Balancer instance ID, in the format of "alb-" followed by 8 alphanumeric characters.
     */
    public $LoadBalancerId;

    /**
     * @var array CA certificate ID list for the listener configuration. Currently only support adding 1 CA certificate.
     */
    public $CaCertificateIds;

    /**
     * @var boolean Whether mutual authentication is enabled.
Valid values:
true: enabled.
false (default value): not enabled.
     */
    public $CaEnabled;

    /**
     * @var array List of server certificate IDs.
     */
    public $CertificateIds;

    /**
     * @var string Client Token, used for ensuring request idempotency.  

Generate a parameter value from your client to underwrite the uniqueness of the value for different requests. ClientToken supports only ASCII characters.
     */
    public $ClientToken;

    /**
     * @var array List of default forward rule actions. Currently, a listener supports adding only 1 default forward rule action.
     */
    public $DefaultActions;

    /**
     * @var boolean Whether to enable Gzip compression.
     */
    public $GzipEnabled;

    /**
     * @var boolean Whether to enable HTTP/2. Only HTTPS protocol supports this parameter.
     */
    public $Http2Enabled;

    /**
     * @var integer Specify the idle timeout for a connection. Unit: seconds.
Valid values: 1-600.
Default value: 15.
If no access request is received within the set time, load balancing will temporarily disconnect the current connection and reestablish a new connection when the next request arrives.
     */
    public $IdleTimeout;

    /**
     * @var string Custom listener name, 1–255 characters in length. It must contain Chinese and harmless string characters, and can contain Chinese, letters, digits, dashes (-), forward slashes (/), half-width periods (.), and underscores (_).
     */
    public $ListenerName;

    /**
     * @var integer Specify the request timeout. Unit: seconds.
Value: 1-600.
Default value: 60.
If the real server does not respond within the timeout period, load balancing will abandon waiting and return an HTTP 504 error code to the client.
     */
    public $RequestTimeout;

    /**
     * @var string Security policy ID in the format of tls- followed by 8 alphanumeric characters.
     */
    public $SecurityPolicyId;

    /**
     * @var XForwardedForConfig XForwardedFor configuration.
     */
    public $XForwardedForConfig;

    /**
     * @param string $ListenerId Listener ID, format: lst- followed by 8 alphanumeric characters.
     * @param string $LoadBalancerId Cloud Load Balancer instance ID, in the format of "alb-" followed by 8 alphanumeric characters.
     * @param array $CaCertificateIds CA certificate ID list for the listener configuration. Currently only support adding 1 CA certificate.
     * @param boolean $CaEnabled Whether mutual authentication is enabled.
Valid values:
true: enabled.
false (default value): not enabled.
     * @param array $CertificateIds List of server certificate IDs.
     * @param string $ClientToken Client Token, used for ensuring request idempotency.  

Generate a parameter value from your client to underwrite the uniqueness of the value for different requests. ClientToken supports only ASCII characters.
     * @param array $DefaultActions List of default forward rule actions. Currently, a listener supports adding only 1 default forward rule action.
     * @param boolean $GzipEnabled Whether to enable Gzip compression.
     * @param boolean $Http2Enabled Whether to enable HTTP/2. Only HTTPS protocol supports this parameter.
     * @param integer $IdleTimeout Specify the idle timeout for a connection. Unit: seconds.
Valid values: 1-600.
Default value: 15.
If no access request is received within the set time, load balancing will temporarily disconnect the current connection and reestablish a new connection when the next request arrives.
     * @param string $ListenerName Custom listener name, 1–255 characters in length. It must contain Chinese and harmless string characters, and can contain Chinese, letters, digits, dashes (-), forward slashes (/), half-width periods (.), and underscores (_).
     * @param integer $RequestTimeout Specify the request timeout. Unit: seconds.
Value: 1-600.
Default value: 60.
If the real server does not respond within the timeout period, load balancing will abandon waiting and return an HTTP 504 error code to the client.
     * @param string $SecurityPolicyId Security policy ID in the format of tls- followed by 8 alphanumeric characters.
     * @param XForwardedForConfig $XForwardedForConfig XForwardedFor configuration.
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
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

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("RequestTimeout",$param) and $param["RequestTimeout"] !== null) {
            $this->RequestTimeout = $param["RequestTimeout"];
        }

        if (array_key_exists("SecurityPolicyId",$param) and $param["SecurityPolicyId"] !== null) {
            $this->SecurityPolicyId = $param["SecurityPolicyId"];
        }

        if (array_key_exists("XForwardedForConfig",$param) and $param["XForwardedForConfig"] !== null) {
            $this->XForwardedForConfig = new XForwardedForConfig();
            $this->XForwardedForConfig->deserialize($param["XForwardedForConfig"]);
        }
    }
}
