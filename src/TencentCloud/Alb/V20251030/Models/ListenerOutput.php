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
 * Listener brief information output parameters
 *
 * @method boolean getCaEnable() Obtain <p>Whether mutual authentication is enabled.</p>
 * @method void setCaEnable(boolean $CaEnable) Set <p>Whether mutual authentication is enabled.</p>
 * @method string getCreateTime() Obtain <p>Creation time of the listener instance. Format: ISO 8601 (for example, 2025-01-01T08:30:00+08:00)</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time of the listener instance. Format: ISO 8601 (for example, 2025-01-01T08:30:00+08:00)</p>
 * @method boolean getGzipEnabled() Obtain <p>Whether to enable Gzip compression.</p>
 * @method void setGzipEnabled(boolean $GzipEnabled) Set <p>Whether to enable Gzip compression.</p>
 * @method boolean getHttp2Enable() Obtain <p>Whether to enable http/2.</p>
 * @method void setHttp2Enable(boolean $Http2Enable) Set <p>Whether to enable http/2.</p>
 * @method integer getIdleTimeout() Obtain <p>Idle timeout period.</p>
 * @method void setIdleTimeout(integer $IdleTimeout) Set <p>Idle timeout period.</p>
 * @method string getListenerId() Obtain <p>Listener ID, format: lst- followed by 8 alphanumeric characters.</p>
 * @method void setListenerId(string $ListenerId) Set <p>Listener ID, format: lst- followed by 8 alphanumeric characters.</p>
 * @method string getListenerName() Obtain <p>Listener name.</p>
 * @method void setListenerName(string $ListenerName) Set <p>Listener name.</p>
 * @method integer getListenerPort() Obtain <p>Listener port.</p>
 * @method void setListenerPort(integer $ListenerPort) Set <p>Listener port.</p>
 * @method string getListenerProtocol() Obtain <p>Listener protocol.</p>
 * @method void setListenerProtocol(string $ListenerProtocol) Set <p>Listener protocol.</p>
 * @method string getListenerStatus() Obtain <p>Listener status. Value:</p><ul><li><strong>Active</strong>: Running.</li><li><strong>Provisioning</strong>: Creating.</li><li><strong>Configuring</strong>: Modifying configuration.</li><li><strong>ProvisionFailed</strong>: Creation failed</li></ul>
 * @method void setListenerStatus(string $ListenerStatus) Set <p>Listener status. Value:</p><ul><li><strong>Active</strong>: Running.</li><li><strong>Provisioning</strong>: Creating.</li><li><strong>Configuring</strong>: Modifying configuration.</li><li><strong>ProvisionFailed</strong>: Creation failed</li></ul>
 * @method string getModifyTime() Obtain <p>Last change time of the listener instance. Format: ISO 8601 (for example, 2025-01-01T08:30:00+08:00)</p>
 * @method void setModifyTime(string $ModifyTime) Set <p>Last change time of the listener instance. Format: ISO 8601 (for example, 2025-01-01T08:30:00+08:00)</p>
 * @method integer getRequestTimeout() Obtain <p>Connection request timeout period.</p>
 * @method void setRequestTimeout(integer $RequestTimeout) Set <p>Connection request timeout period.</p>
 * @method array getTags() Obtain <p>Tag.</p>
 * @method void setTags(array $Tags) Set <p>Tag.</p>
 * @method string getTlsSecurityPolicyId() Obtain <p>Security policy ID.</p>
 * @method void setTlsSecurityPolicyId(string $TlsSecurityPolicyId) Set <p>Security policy ID.</p>
 * @method XForwardedForConfig getXForwardedForConfig() Obtain <p>XForwardedFor configuration.</p>
 * @method void setXForwardedForConfig(XForwardedForConfig $XForwardedForConfig) Set <p>XForwardedFor configuration.</p>
 */
class ListenerOutput extends AbstractModel
{
    /**
     * @var boolean <p>Whether mutual authentication is enabled.</p>
     */
    public $CaEnable;

    /**
     * @var string <p>Creation time of the listener instance. Format: ISO 8601 (for example, 2025-01-01T08:30:00+08:00)</p>
     */
    public $CreateTime;

    /**
     * @var boolean <p>Whether to enable Gzip compression.</p>
     */
    public $GzipEnabled;

    /**
     * @var boolean <p>Whether to enable http/2.</p>
     */
    public $Http2Enable;

    /**
     * @var integer <p>Idle timeout period.</p>
     */
    public $IdleTimeout;

    /**
     * @var string <p>Listener ID, format: lst- followed by 8 alphanumeric characters.</p>
     */
    public $ListenerId;

    /**
     * @var string <p>Listener name.</p>
     */
    public $ListenerName;

    /**
     * @var integer <p>Listener port.</p>
     */
    public $ListenerPort;

    /**
     * @var string <p>Listener protocol.</p>
     */
    public $ListenerProtocol;

    /**
     * @var string <p>Listener status. Value:</p><ul><li><strong>Active</strong>: Running.</li><li><strong>Provisioning</strong>: Creating.</li><li><strong>Configuring</strong>: Modifying configuration.</li><li><strong>ProvisionFailed</strong>: Creation failed</li></ul>
     */
    public $ListenerStatus;

    /**
     * @var string <p>Last change time of the listener instance. Format: ISO 8601 (for example, 2025-01-01T08:30:00+08:00)</p>
     */
    public $ModifyTime;

    /**
     * @var integer <p>Connection request timeout period.</p>
     */
    public $RequestTimeout;

    /**
     * @var array <p>Tag.</p>
     */
    public $Tags;

    /**
     * @var string <p>Security policy ID.</p>
     */
    public $TlsSecurityPolicyId;

    /**
     * @var XForwardedForConfig <p>XForwardedFor configuration.</p>
     */
    public $XForwardedForConfig;

    /**
     * @param boolean $CaEnable <p>Whether mutual authentication is enabled.</p>
     * @param string $CreateTime <p>Creation time of the listener instance. Format: ISO 8601 (for example, 2025-01-01T08:30:00+08:00)</p>
     * @param boolean $GzipEnabled <p>Whether to enable Gzip compression.</p>
     * @param boolean $Http2Enable <p>Whether to enable http/2.</p>
     * @param integer $IdleTimeout <p>Idle timeout period.</p>
     * @param string $ListenerId <p>Listener ID, format: lst- followed by 8 alphanumeric characters.</p>
     * @param string $ListenerName <p>Listener name.</p>
     * @param integer $ListenerPort <p>Listener port.</p>
     * @param string $ListenerProtocol <p>Listener protocol.</p>
     * @param string $ListenerStatus <p>Listener status. Value:</p><ul><li><strong>Active</strong>: Running.</li><li><strong>Provisioning</strong>: Creating.</li><li><strong>Configuring</strong>: Modifying configuration.</li><li><strong>ProvisionFailed</strong>: Creation failed</li></ul>
     * @param string $ModifyTime <p>Last change time of the listener instance. Format: ISO 8601 (for example, 2025-01-01T08:30:00+08:00)</p>
     * @param integer $RequestTimeout <p>Connection request timeout period.</p>
     * @param array $Tags <p>Tag.</p>
     * @param string $TlsSecurityPolicyId <p>Security policy ID.</p>
     * @param XForwardedForConfig $XForwardedForConfig <p>XForwardedFor configuration.</p>
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
        if (array_key_exists("CaEnable",$param) and $param["CaEnable"] !== null) {
            $this->CaEnable = $param["CaEnable"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("GzipEnabled",$param) and $param["GzipEnabled"] !== null) {
            $this->GzipEnabled = $param["GzipEnabled"];
        }

        if (array_key_exists("Http2Enable",$param) and $param["Http2Enable"] !== null) {
            $this->Http2Enable = $param["Http2Enable"];
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

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("RequestTimeout",$param) and $param["RequestTimeout"] !== null) {
            $this->RequestTimeout = $param["RequestTimeout"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("TlsSecurityPolicyId",$param) and $param["TlsSecurityPolicyId"] !== null) {
            $this->TlsSecurityPolicyId = $param["TlsSecurityPolicyId"];
        }

        if (array_key_exists("XForwardedForConfig",$param) and $param["XForwardedForConfig"] !== null) {
            $this->XForwardedForConfig = new XForwardedForConfig();
            $this->XForwardedForConfig->deserialize($param["XForwardedForConfig"]);
        }
    }
}
