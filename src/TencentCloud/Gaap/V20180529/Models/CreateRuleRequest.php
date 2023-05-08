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
 * CreateRule request structure.
 *
 * @method string getListenerId() Obtain Layer-7 listener ID
 * @method void setListenerId(string $ListenerId) Set Layer-7 listener ID
 * @method string getDomain() Obtain Domain name of the forwarding rule
 * @method void setDomain(string $Domain) Set Domain name of the forwarding rule
 * @method string getPath() Obtain Path of the forwarding rule
 * @method void setPath(string $Path) Set Path of the forwarding rule
 * @method string getRealServerType() Obtain The origin server type of the forwarding rule, which supports IP and DOMAIN types.
 * @method void setRealServerType(string $RealServerType) Set The origin server type of the forwarding rule, which supports IP and DOMAIN types.
 * @method string getScheduler() Obtain The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy).
 * @method void setScheduler(string $Scheduler) Set The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy).
 * @method integer getHealthCheck() Obtain Whether the health check is enabled for rules. 1: enabled; 0: disabled.
 * @method void setHealthCheck(integer $HealthCheck) Set Whether the health check is enabled for rules. 1: enabled; 0: disabled.
 * @method RuleCheckParams getCheckParams() Obtain Parameters related to origin server health check
 * @method void setCheckParams(RuleCheckParams $CheckParams) Set Parameters related to origin server health check
 * @method string getForwardProtocol() Obtain Protocol types of the forwarding from acceleration connection to origin server, which supports HTTP or HTTPS.
If this field is not passed in, it indicates that the ForwardProtocol of the corresponding listener will be used.
 * @method void setForwardProtocol(string $ForwardProtocol) Set Protocol types of the forwarding from acceleration connection to origin server, which supports HTTP or HTTPS.
If this field is not passed in, it indicates that the ForwardProtocol of the corresponding listener will be used.
 * @method string getForwardHost() Obtain The host to which the acceleration connection forwards. If this parameter is not specified, the default host will be used, i.e., the host with which the client initiates HTTP requests.
 * @method void setForwardHost(string $ForwardHost) Set The host to which the acceleration connection forwards. If this parameter is not specified, the default host will be used, i.e., the host with which the client initiates HTTP requests.
 * @method string getServerNameIndicationSwitch() Obtain Whether to enable SNI. Values: `on` (enable), `off` (disable). For creation of HTTP listener forwarding rules, SNI is disabled by default.
 * @method void setServerNameIndicationSwitch(string $ServerNameIndicationSwitch) Set Whether to enable SNI. Values: `on` (enable), `off` (disable). For creation of HTTP listener forwarding rules, SNI is disabled by default.
 * @method string getServerNameIndication() Obtain Server Name Indication (SNI). This field is required when `ServerNameIndicationSwitch` is `ON`.
 * @method void setServerNameIndication(string $ServerNameIndication) Set Server Name Indication (SNI). This field is required when `ServerNameIndicationSwitch` is `ON`.
 * @method string getForcedRedirect() Obtain Enables HTTP-to-HTTPS force redirect for a forwarding rule. Enter a hostname and path of the current forwarding rule.
 * @method void setForcedRedirect(string $ForcedRedirect) Set Enables HTTP-to-HTTPS force redirect for a forwarding rule. Enter a hostname and path of the current forwarding rule.
 */
class CreateRuleRequest extends AbstractModel
{
    /**
     * @var string Layer-7 listener ID
     */
    public $ListenerId;

    /**
     * @var string Domain name of the forwarding rule
     */
    public $Domain;

    /**
     * @var string Path of the forwarding rule
     */
    public $Path;

    /**
     * @var string The origin server type of the forwarding rule, which supports IP and DOMAIN types.
     */
    public $RealServerType;

    /**
     * @var string The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy).
     */
    public $Scheduler;

    /**
     * @var integer Whether the health check is enabled for rules. 1: enabled; 0: disabled.
     */
    public $HealthCheck;

    /**
     * @var RuleCheckParams Parameters related to origin server health check
     */
    public $CheckParams;

    /**
     * @var string Protocol types of the forwarding from acceleration connection to origin server, which supports HTTP or HTTPS.
If this field is not passed in, it indicates that the ForwardProtocol of the corresponding listener will be used.
     */
    public $ForwardProtocol;

    /**
     * @var string The host to which the acceleration connection forwards. If this parameter is not specified, the default host will be used, i.e., the host with which the client initiates HTTP requests.
     */
    public $ForwardHost;

    /**
     * @var string Whether to enable SNI. Values: `on` (enable), `off` (disable). For creation of HTTP listener forwarding rules, SNI is disabled by default.
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
     * @param string $ListenerId Layer-7 listener ID
     * @param string $Domain Domain name of the forwarding rule
     * @param string $Path Path of the forwarding rule
     * @param string $RealServerType The origin server type of the forwarding rule, which supports IP and DOMAIN types.
     * @param string $Scheduler The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy).
     * @param integer $HealthCheck Whether the health check is enabled for rules. 1: enabled; 0: disabled.
     * @param RuleCheckParams $CheckParams Parameters related to origin server health check
     * @param string $ForwardProtocol Protocol types of the forwarding from acceleration connection to origin server, which supports HTTP or HTTPS.
If this field is not passed in, it indicates that the ForwardProtocol of the corresponding listener will be used.
     * @param string $ForwardHost The host to which the acceleration connection forwards. If this parameter is not specified, the default host will be used, i.e., the host with which the client initiates HTTP requests.
     * @param string $ServerNameIndicationSwitch Whether to enable SNI. Values: `on` (enable), `off` (disable). For creation of HTTP listener forwarding rules, SNI is disabled by default.
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("RealServerType",$param) and $param["RealServerType"] !== null) {
            $this->RealServerType = $param["RealServerType"];
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
