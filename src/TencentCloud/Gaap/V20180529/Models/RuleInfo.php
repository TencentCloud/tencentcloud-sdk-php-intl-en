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
 * Forwarding rule of layer-7 listeners
 *
 * @method string getRuleId() Obtain Rule information
 * @method void setRuleId(string $RuleId) Set Rule information
 * @method string getListenerId() Obtain Listener information
 * @method void setListenerId(string $ListenerId) Set Listener information
 * @method string getDomain() Obtain Rule domain name
 * @method void setDomain(string $Domain) Set Rule domain name
 * @method string getPath() Obtain Rule path
 * @method void setPath(string $Path) Set Rule path
 * @method string getRealServerType() Obtain Origin server type
 * @method void setRealServerType(string $RealServerType) Set Origin server type
 * @method string getScheduler() Obtain The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
 * @method void setScheduler(string $Scheduler) Set The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
 * @method integer getHealthCheck() Obtain Whether health check is enabled. 1: enabled, 0: disabled
 * @method void setHealthCheck(integer $HealthCheck) Set Whether health check is enabled. 1: enabled, 0: disabled
 * @method integer getRuleStatus() Obtain Rule status. 0: running, 1: creating, 2: terminating, 3: binding/unbinding origin server, 4: updating configuration
 * @method void setRuleStatus(integer $RuleStatus) Set Rule status. 0: running, 1: creating, 2: terminating, 3: binding/unbinding origin server, 4: updating configuration
 * @method RuleCheckParams getCheckParams() Obtain Health check parameters
 * @method void setCheckParams(RuleCheckParams $CheckParams) Set Health check parameters
 * @method array getRealServerSet() Obtain Bound origin server information
 * @method void setRealServerSet(array $RealServerSet) Set Bound origin server information
 * @method integer getBindStatus() Obtain Origin server service status. 0: exceptional, 1: normal
If health check is not enabled, this status will always be normal.
As long as one origin server is exceptional, this status will be exceptional. Please view `RealServerSet` for the status of specific origin servers.
 * @method void setBindStatus(integer $BindStatus) Set Origin server service status. 0: exceptional, 1: normal
If health check is not enabled, this status will always be normal.
As long as one origin server is exceptional, this status will be exceptional. Please view `RealServerSet` for the status of specific origin servers.
 * @method string getForwardHost() Obtain The `host` carried in the request forwarded from the connection to the origin server. `default` indicates directly forwarding the received 'host'.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setForwardHost(string $ForwardHost) Set The `host` carried in the request forwarded from the connection to the origin server. `default` indicates directly forwarding the received 'host'.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getServerNameIndicationSwitch() Obtain Specifies whether to enable Server Name Indication (SNI). Valid values: `ON` (enable) and `OFF` (disable).
Note: This field may return `null`, indicating that no valid value can be obtained.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setServerNameIndicationSwitch(string $ServerNameIndicationSwitch) Set Specifies whether to enable Server Name Indication (SNI). Valid values: `ON` (enable) and `OFF` (disable).
Note: This field may return `null`, indicating that no valid value can be obtained.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getServerNameIndication() Obtain Server Name Indication (SNI). This field is required when `ServerNameIndicationSwitch` is `ON`.
Note: This field may return `null`, indicating that no valid value can be obtained.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setServerNameIndication(string $ServerNameIndication) Set Server Name Indication (SNI). This field is required when `ServerNameIndicationSwitch` is `ON`.
Note: This field may return `null`, indicating that no valid value can be obtained.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getForcedRedirect() Obtain Forces requests to redirect to HTTPS. When `https:` is passed in, all requests are redirected to HTTPS.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setForcedRedirect(string $ForcedRedirect) Set Forces requests to redirect to HTTPS. When `https:` is passed in, all requests are redirected to HTTPS.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RuleInfo extends AbstractModel
{
    /**
     * @var string Rule information
     */
    public $RuleId;

    /**
     * @var string Listener information
     */
    public $ListenerId;

    /**
     * @var string Rule domain name
     */
    public $Domain;

    /**
     * @var string Rule path
     */
    public $Path;

    /**
     * @var string Origin server type
     */
    public $RealServerType;

    /**
     * @var string The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
     */
    public $Scheduler;

    /**
     * @var integer Whether health check is enabled. 1: enabled, 0: disabled
     */
    public $HealthCheck;

    /**
     * @var integer Rule status. 0: running, 1: creating, 2: terminating, 3: binding/unbinding origin server, 4: updating configuration
     */
    public $RuleStatus;

    /**
     * @var RuleCheckParams Health check parameters
     */
    public $CheckParams;

    /**
     * @var array Bound origin server information
     */
    public $RealServerSet;

    /**
     * @var integer Origin server service status. 0: exceptional, 1: normal
If health check is not enabled, this status will always be normal.
As long as one origin server is exceptional, this status will be exceptional. Please view `RealServerSet` for the status of specific origin servers.
     */
    public $BindStatus;

    /**
     * @var string The `host` carried in the request forwarded from the connection to the origin server. `default` indicates directly forwarding the received 'host'.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ForwardHost;

    /**
     * @var string Specifies whether to enable Server Name Indication (SNI). Valid values: `ON` (enable) and `OFF` (disable).
Note: This field may return `null`, indicating that no valid value can be obtained.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ServerNameIndicationSwitch;

    /**
     * @var string Server Name Indication (SNI). This field is required when `ServerNameIndicationSwitch` is `ON`.
Note: This field may return `null`, indicating that no valid value can be obtained.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ServerNameIndication;

    /**
     * @var string Forces requests to redirect to HTTPS. When `https:` is passed in, all requests are redirected to HTTPS.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ForcedRedirect;

    /**
     * @param string $RuleId Rule information
     * @param string $ListenerId Listener information
     * @param string $Domain Rule domain name
     * @param string $Path Rule path
     * @param string $RealServerType Origin server type
     * @param string $Scheduler The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
     * @param integer $HealthCheck Whether health check is enabled. 1: enabled, 0: disabled
     * @param integer $RuleStatus Rule status. 0: running, 1: creating, 2: terminating, 3: binding/unbinding origin server, 4: updating configuration
     * @param RuleCheckParams $CheckParams Health check parameters
     * @param array $RealServerSet Bound origin server information
     * @param integer $BindStatus Origin server service status. 0: exceptional, 1: normal
If health check is not enabled, this status will always be normal.
As long as one origin server is exceptional, this status will be exceptional. Please view `RealServerSet` for the status of specific origin servers.
     * @param string $ForwardHost The `host` carried in the request forwarded from the connection to the origin server. `default` indicates directly forwarding the received 'host'.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ServerNameIndicationSwitch Specifies whether to enable Server Name Indication (SNI). Valid values: `ON` (enable) and `OFF` (disable).
Note: This field may return `null`, indicating that no valid value can be obtained.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ServerNameIndication Server Name Indication (SNI). This field is required when `ServerNameIndicationSwitch` is `ON`.
Note: This field may return `null`, indicating that no valid value can be obtained.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ForcedRedirect Forces requests to redirect to HTTPS. When `https:` is passed in, all requests are redirected to HTTPS.
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
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

        if (array_key_exists("RuleStatus",$param) and $param["RuleStatus"] !== null) {
            $this->RuleStatus = $param["RuleStatus"];
        }

        if (array_key_exists("CheckParams",$param) and $param["CheckParams"] !== null) {
            $this->CheckParams = new RuleCheckParams();
            $this->CheckParams->deserialize($param["CheckParams"]);
        }

        if (array_key_exists("RealServerSet",$param) and $param["RealServerSet"] !== null) {
            $this->RealServerSet = [];
            foreach ($param["RealServerSet"] as $key => $value){
                $obj = new BindRealServer();
                $obj->deserialize($value);
                array_push($this->RealServerSet, $obj);
            }
        }

        if (array_key_exists("BindStatus",$param) and $param["BindStatus"] !== null) {
            $this->BindStatus = $param["BindStatus"];
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
