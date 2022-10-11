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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRuleAttribute request structure.
 *
 * @method string getListenerId() Obtain Listener ID
 * @method void setListenerId(string $ListenerId) Set Listener ID
 * @method string getRuleId() Obtain Forwarding rule ID
 * @method void setRuleId(string $RuleId) Set Forwarding rule ID
 * @method string getScheduler() Obtain The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
 * @method void setScheduler(string $Scheduler) Set The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
 * @method integer getHealthCheck() Obtain Whether to enable the origin server health check:
1: enable;
0: disable.
 * @method void setHealthCheck(integer $HealthCheck) Set Whether to enable the origin server health check:
1: enable;
0: disable.
 * @method RuleCheckParams getCheckParams() Obtain Health check configuration parameters
 * @method void setCheckParams(RuleCheckParams $CheckParams) Set Health check configuration parameters
 * @method string getPath() Obtain Forwarding rule path
 * @method void setPath(string $Path) Set Forwarding rule path
 * @method string getForwardProtocol() Obtain Protocol types of the forwarding from acceleration connection to origin server, which supports default, HTTP and HTTPS.
If `ForwardProtocol=default`, the `ForwardProtocol` of the listener will be used.
 * @method void setForwardProtocol(string $ForwardProtocol) Set Protocol types of the forwarding from acceleration connection to origin server, which supports default, HTTP and HTTPS.
If `ForwardProtocol=default`, the `ForwardProtocol` of the listener will be used.
 * @method string getForwardHost() Obtain The forwarding host, which is carried in the request forwarded from the acceleration connection to the origin server.
If `ForwardHost=default`, the domain name configured with the forwarding rule will be used. For other cases, the value set in this field will be used.
 * @method void setForwardHost(string $ForwardHost) Set The forwarding host, which is carried in the request forwarded from the acceleration connection to the origin server.
If `ForwardHost=default`, the domain name configured with the forwarding rule will be used. For other cases, the value set in this field will be used.
 * @method string getServerNameIndicationSwitch() Obtain Specifies whether to enable Server Name Indication (SNI). Valid values: `ON` (enable) and `OFF` (disable).
 * @method void setServerNameIndicationSwitch(string $ServerNameIndicationSwitch) Set Specifies whether to enable Server Name Indication (SNI). Valid values: `ON` (enable) and `OFF` (disable).
 * @method string getServerNameIndication() Obtain Server Name Indication (SNI). This field is required when `ServerNameIndicationSwitch` is `ON`.
 * @method void setServerNameIndication(string $ServerNameIndication) Set Server Name Indication (SNI). This field is required when `ServerNameIndicationSwitch` is `ON`.
 * @method string getForcedRedirect() Obtain Enables HTTP-to-HTTPS force redirect for a forwarding rule. Enter a hostname and path of the current forwarding rule.
 * @method void setForcedRedirect(string $ForcedRedirect) Set Enables HTTP-to-HTTPS force redirect for a forwarding rule. Enter a hostname and path of the current forwarding rule.
 */
class ModifyRuleAttributeRequest extends AbstractModel
{
    /**
     * @var string Listener ID
     */
    public $ListenerId;

    /**
     * @var string Forwarding rule ID
     */
    public $RuleId;

    /**
     * @var string The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
     */
    public $Scheduler;

    /**
     * @var integer Whether to enable the origin server health check:
1: enable;
0: disable.
     */
    public $HealthCheck;

    /**
     * @var RuleCheckParams Health check configuration parameters
     */
    public $CheckParams;

    /**
     * @var string Forwarding rule path
     */
    public $Path;

    /**
     * @var string Protocol types of the forwarding from acceleration connection to origin server, which supports default, HTTP and HTTPS.
If `ForwardProtocol=default`, the `ForwardProtocol` of the listener will be used.
     */
    public $ForwardProtocol;

    /**
     * @var string The forwarding host, which is carried in the request forwarded from the acceleration connection to the origin server.
If `ForwardHost=default`, the domain name configured with the forwarding rule will be used. For other cases, the value set in this field will be used.
     */
    public $ForwardHost;

    /**
     * @var string Specifies whether to enable Server Name Indication (SNI). Valid values: `ON` (enable) and `OFF` (disable).
     */
    public $ServerNameIndicationSwitch;

    /**
     * @var string Server Name Indication (SNI). This field is required when `ServerNameIndicationSwitch` is `ON`.
     */
    public $ServerNameIndication;

    /**
     * @var string Enables HTTP-to-HTTPS force redirect for a forwarding rule. Enter a hostname and path of the current forwarding rule.
     */
    public $ForcedRedirect;

    /**
     * @param string $ListenerId Listener ID
     * @param string $RuleId Forwarding rule ID
     * @param string $Scheduler The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
     * @param integer $HealthCheck Whether to enable the origin server health check:
1: enable;
0: disable.
     * @param RuleCheckParams $CheckParams Health check configuration parameters
     * @param string $Path Forwarding rule path
     * @param string $ForwardProtocol Protocol types of the forwarding from acceleration connection to origin server, which supports default, HTTP and HTTPS.
If `ForwardProtocol=default`, the `ForwardProtocol` of the listener will be used.
     * @param string $ForwardHost The forwarding host, which is carried in the request forwarded from the acceleration connection to the origin server.
If `ForwardHost=default`, the domain name configured with the forwarding rule will be used. For other cases, the value set in this field will be used.
     * @param string $ServerNameIndicationSwitch Specifies whether to enable Server Name Indication (SNI). Valid values: `ON` (enable) and `OFF` (disable).
     * @param string $ServerNameIndication Server Name Indication (SNI). This field is required when `ServerNameIndicationSwitch` is `ON`.
     * @param string $ForcedRedirect Enables HTTP-to-HTTPS force redirect for a forwarding rule. Enter a hostname and path of the current forwarding rule.
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

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = $param["HealthCheck"];
        }

        if (array_key_exists("CheckParams",$param) and $param["CheckParams"] !== null) {
            $this->CheckParams = new RuleCheckParams();
            $this->CheckParams->deserialize($param["CheckParams"]);
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("ForwardProtocol",$param) and $param["ForwardProtocol"] !== null) {
            $this->ForwardProtocol = $param["ForwardProtocol"];
        }

        if (array_key_exists("ForwardHost",$param) and $param["ForwardHost"] !== null) {
            $this->ForwardHost = $param["ForwardHost"];
        }

        if (array_key_exists("ServerNameIndicationSwitch",$param) and $param["ServerNameIndicationSwitch"] !== null) {
            $this->ServerNameIndicationSwitch = $param["ServerNameIndicationSwitch"];
        }

        if (array_key_exists("ServerNameIndication",$param) and $param["ServerNameIndication"] !== null) {
            $this->ServerNameIndication = $param["ServerNameIndication"];
        }

        if (array_key_exists("ForcedRedirect",$param) and $param["ForcedRedirect"] !== null) {
            $this->ForcedRedirect = $param["ForcedRedirect"];
        }
    }
}
