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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cloud-native gateway Tse traffic throttling plugin configuration
 *
 * @method boolean getEnabled() Obtain Plug-in enable status
 * @method void setEnabled(boolean $Enabled) Set Plug-in enable status
 * @method array getQpsThresholds() Obtain qps threshold
 * @method void setQpsThresholds(array $QpsThresholds) Set qps threshold
 * @method string getPath() Obtain Request path that requires traffic control
 * @method void setPath(string $Path) Set Request path that requires traffic control
 * @method string getHeader() Obtain Request header Key for traffic control
 * @method void setHeader(string $Header) Set Request header Key for traffic control
 * @method string getLimitBy() Obtain Traffic throttling basis
ip service consumer credential path header
 * @method void setLimitBy(string $LimitBy) Set Traffic throttling basis
ip service consumer credential path header
 * @method ExternalRedis getExternalRedis() Obtain external redis configuration
 * @method void setExternalRedis(ExternalRedis $ExternalRedis) Set external redis configuration
 * @method string getGlobalConfigId() Obtain redis configuration in global configuration
 * @method void setGlobalConfigId(string $GlobalConfigId) Set redis configuration in global configuration
 * @method string getPolicy() Obtain Counter policy 
local standalone
default redis
external redis

 * @method void setPolicy(string $Policy) Set Counter policy 
local standalone
default redis
external redis

 * @method RateLimitResponse getRateLimitResponse() Obtain Response configuration, response policy is text

 * @method void setRateLimitResponse(RateLimitResponse $RateLimitResponse) Set Response configuration, response policy is text

 * @method string getRateLimitResponseUrl() Obtain Request forwarding address
 * @method void setRateLimitResponseUrl(string $RateLimitResponseUrl) Set Request forwarding address
 * @method string getResponseType() Obtain response policy
url request forwarding
Response configuration
default mode: return directly.

 * @method void setResponseType(string $ResponseType) Set response policy
url request forwarding
Response configuration
default mode: return directly.

 * @method boolean getHideClientHeaders() Obtain Whether to hide the traffic throttling client response header
 * @method void setHideClientHeaders(boolean $HideClientHeaders) Set Whether to hide the traffic throttling client response header
 * @method integer getLineUpTime() Obtain queuing time
 * @method void setLineUpTime(integer $LineUpTime) Set queuing time
 * @method boolean getIsDelay() Obtain Whether request queuing is enabled
 * @method void setIsDelay(boolean $IsDelay) Set Whether request queuing is enabled
 * @method array getBasicLimitQpsThresholds() Obtain Basic throttling
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBasicLimitQpsThresholds(array $BasicLimitQpsThresholds) Set Basic throttling
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getLimitRules() Obtain Parameter throttling policy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLimitRules(array $LimitRules) Set Parameter throttling policy
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CloudNativeAPIGatewayRateLimitDetail extends AbstractModel
{
    /**
     * @var boolean Plug-in enable status
     */
    public $Enabled;

    /**
     * @var array qps threshold
     */
    public $QpsThresholds;

    /**
     * @var string Request path that requires traffic control
     */
    public $Path;

    /**
     * @var string Request header Key for traffic control
     */
    public $Header;

    /**
     * @var string Traffic throttling basis
ip service consumer credential path header
     */
    public $LimitBy;

    /**
     * @var ExternalRedis external redis configuration
     */
    public $ExternalRedis;

    /**
     * @var string redis configuration in global configuration
     */
    public $GlobalConfigId;

    /**
     * @var string Counter policy 
local standalone
default redis
external redis

     */
    public $Policy;

    /**
     * @var RateLimitResponse Response configuration, response policy is text

     */
    public $RateLimitResponse;

    /**
     * @var string Request forwarding address
     */
    public $RateLimitResponseUrl;

    /**
     * @var string response policy
url request forwarding
Response configuration
default mode: return directly.

     */
    public $ResponseType;

    /**
     * @var boolean Whether to hide the traffic throttling client response header
     */
    public $HideClientHeaders;

    /**
     * @var integer queuing time
     */
    public $LineUpTime;

    /**
     * @var boolean Whether request queuing is enabled
     */
    public $IsDelay;

    /**
     * @var array Basic throttling
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BasicLimitQpsThresholds;

    /**
     * @var array Parameter throttling policy
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LimitRules;

    /**
     * @param boolean $Enabled Plug-in enable status
     * @param array $QpsThresholds qps threshold
     * @param string $Path Request path that requires traffic control
     * @param string $Header Request header Key for traffic control
     * @param string $LimitBy Traffic throttling basis
ip service consumer credential path header
     * @param ExternalRedis $ExternalRedis external redis configuration
     * @param string $GlobalConfigId redis configuration in global configuration
     * @param string $Policy Counter policy 
local standalone
default redis
external redis

     * @param RateLimitResponse $RateLimitResponse Response configuration, response policy is text

     * @param string $RateLimitResponseUrl Request forwarding address
     * @param string $ResponseType response policy
url request forwarding
Response configuration
default mode: return directly.

     * @param boolean $HideClientHeaders Whether to hide the traffic throttling client response header
     * @param integer $LineUpTime queuing time
     * @param boolean $IsDelay Whether request queuing is enabled
     * @param array $BasicLimitQpsThresholds Basic throttling
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $LimitRules Parameter throttling policy
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("QpsThresholds",$param) and $param["QpsThresholds"] !== null) {
            $this->QpsThresholds = [];
            foreach ($param["QpsThresholds"] as $key => $value){
                $obj = new QpsThreshold();
                $obj->deserialize($value);
                array_push($this->QpsThresholds, $obj);
            }
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Header",$param) and $param["Header"] !== null) {
            $this->Header = $param["Header"];
        }

        if (array_key_exists("LimitBy",$param) and $param["LimitBy"] !== null) {
            $this->LimitBy = $param["LimitBy"];
        }

        if (array_key_exists("ExternalRedis",$param) and $param["ExternalRedis"] !== null) {
            $this->ExternalRedis = new ExternalRedis();
            $this->ExternalRedis->deserialize($param["ExternalRedis"]);
        }

        if (array_key_exists("GlobalConfigId",$param) and $param["GlobalConfigId"] !== null) {
            $this->GlobalConfigId = $param["GlobalConfigId"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("RateLimitResponse",$param) and $param["RateLimitResponse"] !== null) {
            $this->RateLimitResponse = new RateLimitResponse();
            $this->RateLimitResponse->deserialize($param["RateLimitResponse"]);
        }

        if (array_key_exists("RateLimitResponseUrl",$param) and $param["RateLimitResponseUrl"] !== null) {
            $this->RateLimitResponseUrl = $param["RateLimitResponseUrl"];
        }

        if (array_key_exists("ResponseType",$param) and $param["ResponseType"] !== null) {
            $this->ResponseType = $param["ResponseType"];
        }

        if (array_key_exists("HideClientHeaders",$param) and $param["HideClientHeaders"] !== null) {
            $this->HideClientHeaders = $param["HideClientHeaders"];
        }

        if (array_key_exists("LineUpTime",$param) and $param["LineUpTime"] !== null) {
            $this->LineUpTime = $param["LineUpTime"];
        }

        if (array_key_exists("IsDelay",$param) and $param["IsDelay"] !== null) {
            $this->IsDelay = $param["IsDelay"];
        }

        if (array_key_exists("BasicLimitQpsThresholds",$param) and $param["BasicLimitQpsThresholds"] !== null) {
            $this->BasicLimitQpsThresholds = [];
            foreach ($param["BasicLimitQpsThresholds"] as $key => $value){
                $obj = new QpsThreshold();
                $obj->deserialize($value);
                array_push($this->BasicLimitQpsThresholds, $obj);
            }
        }

        if (array_key_exists("LimitRules",$param) and $param["LimitRules"] !== null) {
            $this->LimitRules = [];
            foreach ($param["LimitRules"] as $key => $value){
                $obj = new LimitRule();
                $obj->deserialize($value);
                array_push($this->LimitRules, $obj);
            }
        }
    }
}
