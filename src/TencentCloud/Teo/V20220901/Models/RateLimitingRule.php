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
 * Specifies the rate limit configuration.
 *
 * @method string getId() Obtain The ID of precise rate limiting. rule ID supports different rule configuration operations: <li><b>add</b> a new rule: leave the ID empty or do not specify the ID parameter.</li> <li><b>modify</b> an existing rule: specify the rule ID that needs to be updated/modified.</li> <li><b>delete</b> an existing rule: existing Rules not included in the Rules list under the RateLimitingRules parameter will be deleted.</li>.
 * @method void setId(string $Id) Set The ID of precise rate limiting. rule ID supports different rule configuration operations: <li><b>add</b> a new rule: leave the ID empty or do not specify the ID parameter.</li> <li><b>modify</b> an existing rule: specify the rule ID that needs to be updated/modified.</li> <li><b>delete</b> an existing rule: existing Rules not included in the Rules list under the RateLimitingRules parameter will be deleted.</li>.
 * @method string getName() Obtain Specifies the name of the precise rate limit.
 * @method void setName(string $Name) Set Specifies the name of the precise rate limit.
 * @method string getCondition() Obtain The specific content of precise speed limit shall comply with the expression syntax. for detailed specifications, see the product documentation.
 * @method void setCondition(string $Condition) Set The specific content of precise speed limit shall comply with the expression syntax. for detailed specifications, see the product documentation.
 * @method array getCountBy() Obtain Rate threshold request feature match mode. this field is required when Enabled is on.  when there are multiple conditions, composite multiple conditions will perform statistics count. the maximum number of conditions must not exceed 5. valid values: <li><b>http.request.ip</b>: client ip;</li> <li><b>http.request.xff_header_ip</b>: client ip (priority match xff header);</li> <li><b>http.request.uri.path</b>: request access path;</li> <li><b>http.request.cookies['session']</b>: Cookie named session, where session can be replaced with your own specified parameter;</li> <li><b>http.request.headers['user-agent']</b>: http header named user-agent, where user-agent can be replaced with your own specified parameter;</li> <li><b>http.request.ja3</b>: request ja3 fingerprint;</li> <li><b>http.request.uri.query['test']</b>: URL query parameter named test, where test can be replaced with your own specified parameter.</li>.
 * @method void setCountBy(array $CountBy) Set Rate threshold request feature match mode. this field is required when Enabled is on.  when there are multiple conditions, composite multiple conditions will perform statistics count. the maximum number of conditions must not exceed 5. valid values: <li><b>http.request.ip</b>: client ip;</li> <li><b>http.request.xff_header_ip</b>: client ip (priority match xff header);</li> <li><b>http.request.uri.path</b>: request access path;</li> <li><b>http.request.cookies['session']</b>: Cookie named session, where session can be replaced with your own specified parameter;</li> <li><b>http.request.headers['user-agent']</b>: http header named user-agent, where user-agent can be replaced with your own specified parameter;</li> <li><b>http.request.ja3</b>: request ja3 fingerprint;</li> <li><b>http.request.uri.query['test']</b>: URL query parameter named test, where test can be replaced with your own specified parameter.</li>.
 * @method integer getMaxRequestThreshold() Obtain Precision rate limiting specifies the cumulative number of interceptions within the time range. value ranges from 1 to 100000.
 * @method void setMaxRequestThreshold(integer $MaxRequestThreshold) Set Precision rate limiting specifies the cumulative number of interceptions within the time range. value ranges from 1 to 100000.
 * @method string getCountingPeriod() Obtain Specifies the time window for statistics. valid values: <li>1s: 1 second;</li><li>5s: 5 seconds;</li><li>10s: 10 seconds;</li><li>20s: 20 seconds;</li><li>30s: 30 seconds;</li><li>40s: 40 seconds;</li><li>50s: 50 seconds;</li><li>1m: 1 minute;</li><li>2m: 2 minutes;</li><li>5m: 5 minutes;</li><li>10m: 10 minutes;</li><li>1h: 1 hour.</li>.
 * @method void setCountingPeriod(string $CountingPeriod) Set Specifies the time window for statistics. valid values: <li>1s: 1 second;</li><li>5s: 5 seconds;</li><li>10s: 10 seconds;</li><li>20s: 20 seconds;</li><li>30s: 30 seconds;</li><li>40s: 40 seconds;</li><li>50s: 50 seconds;</li><li>1m: 1 minute;</li><li>2m: 2 minutes;</li><li>5m: 5 minutes;</li><li>10m: 10 minutes;</li><li>1h: 1 hour.</li>.
 * @method string getActionDuration() Obtain The duration of an Action is only supported in the following units: <li>s: seconds, value range 1–120;</li> <li>m: minutes, value range 1–120;</li> <li>h: hours, value range 1–48;</li> <li>d: days, value range 1–30.</li>.
 * @method void setActionDuration(string $ActionDuration) Set The duration of an Action is only supported in the following units: <li>s: seconds, value range 1–120;</li> <li>m: minutes, value range 1–120;</li> <li>h: hours, value range 1–48;</li> <li>d: days, value range 1–30.</li>.
 * @method SecurityAction getAction() Obtain Precision rate limiting handling methods. valid values: <li>Monitor: Monitor;</li> <li>Deny: block, where DenyActionParameters.Name supports Deny and ReturnCustomPage;</li> <li>Challenge: Challenge, where ChallengeActionParameters.Name supports JSChallenge and ManagedChallenge;</li> <li>Redirect: Redirect to URL;</li>.
 * @method void setAction(SecurityAction $Action) Set Precision rate limiting handling methods. valid values: <li>Monitor: Monitor;</li> <li>Deny: block, where DenyActionParameters.Name supports Deny and ReturnCustomPage;</li> <li>Challenge: Challenge, where ChallengeActionParameters.Name supports JSChallenge and ManagedChallenge;</li> <li>Redirect: Redirect to URL;</li>.
 * @method integer getPriority() Obtain Precision rate limiting specifies the priority. value range is 0 to 100. default is 0.
 * @method void setPriority(integer $Priority) Set Precision rate limiting specifies the priority. value range is 0 to 100. default is 0.
 * @method string getEnabled() Obtain Whether the precise rate limiting rule is enabled. valid values: <li>on: enabled;</li> <li>off: disabled.</li>.
 * @method void setEnabled(string $Enabled) Set Whether the precise rate limiting rule is enabled. valid values: <li>on: enabled;</li> <li>off: disabled.</li>.
 */
class RateLimitingRule extends AbstractModel
{
    /**
     * @var string The ID of precise rate limiting. rule ID supports different rule configuration operations: <li><b>add</b> a new rule: leave the ID empty or do not specify the ID parameter.</li> <li><b>modify</b> an existing rule: specify the rule ID that needs to be updated/modified.</li> <li><b>delete</b> an existing rule: existing Rules not included in the Rules list under the RateLimitingRules parameter will be deleted.</li>.
     */
    public $Id;

    /**
     * @var string Specifies the name of the precise rate limit.
     */
    public $Name;

    /**
     * @var string The specific content of precise speed limit shall comply with the expression syntax. for detailed specifications, see the product documentation.
     */
    public $Condition;

    /**
     * @var array Rate threshold request feature match mode. this field is required when Enabled is on.  when there are multiple conditions, composite multiple conditions will perform statistics count. the maximum number of conditions must not exceed 5. valid values: <li><b>http.request.ip</b>: client ip;</li> <li><b>http.request.xff_header_ip</b>: client ip (priority match xff header);</li> <li><b>http.request.uri.path</b>: request access path;</li> <li><b>http.request.cookies['session']</b>: Cookie named session, where session can be replaced with your own specified parameter;</li> <li><b>http.request.headers['user-agent']</b>: http header named user-agent, where user-agent can be replaced with your own specified parameter;</li> <li><b>http.request.ja3</b>: request ja3 fingerprint;</li> <li><b>http.request.uri.query['test']</b>: URL query parameter named test, where test can be replaced with your own specified parameter.</li>.
     */
    public $CountBy;

    /**
     * @var integer Precision rate limiting specifies the cumulative number of interceptions within the time range. value ranges from 1 to 100000.
     */
    public $MaxRequestThreshold;

    /**
     * @var string Specifies the time window for statistics. valid values: <li>1s: 1 second;</li><li>5s: 5 seconds;</li><li>10s: 10 seconds;</li><li>20s: 20 seconds;</li><li>30s: 30 seconds;</li><li>40s: 40 seconds;</li><li>50s: 50 seconds;</li><li>1m: 1 minute;</li><li>2m: 2 minutes;</li><li>5m: 5 minutes;</li><li>10m: 10 minutes;</li><li>1h: 1 hour.</li>.
     */
    public $CountingPeriod;

    /**
     * @var string The duration of an Action is only supported in the following units: <li>s: seconds, value range 1–120;</li> <li>m: minutes, value range 1–120;</li> <li>h: hours, value range 1–48;</li> <li>d: days, value range 1–30.</li>.
     */
    public $ActionDuration;

    /**
     * @var SecurityAction Precision rate limiting handling methods. valid values: <li>Monitor: Monitor;</li> <li>Deny: block, where DenyActionParameters.Name supports Deny and ReturnCustomPage;</li> <li>Challenge: Challenge, where ChallengeActionParameters.Name supports JSChallenge and ManagedChallenge;</li> <li>Redirect: Redirect to URL;</li>.
     */
    public $Action;

    /**
     * @var integer Precision rate limiting specifies the priority. value range is 0 to 100. default is 0.
     */
    public $Priority;

    /**
     * @var string Whether the precise rate limiting rule is enabled. valid values: <li>on: enabled;</li> <li>off: disabled.</li>.
     */
    public $Enabled;

    /**
     * @param string $Id The ID of precise rate limiting. rule ID supports different rule configuration operations: <li><b>add</b> a new rule: leave the ID empty or do not specify the ID parameter.</li> <li><b>modify</b> an existing rule: specify the rule ID that needs to be updated/modified.</li> <li><b>delete</b> an existing rule: existing Rules not included in the Rules list under the RateLimitingRules parameter will be deleted.</li>.
     * @param string $Name Specifies the name of the precise rate limit.
     * @param string $Condition The specific content of precise speed limit shall comply with the expression syntax. for detailed specifications, see the product documentation.
     * @param array $CountBy Rate threshold request feature match mode. this field is required when Enabled is on.  when there are multiple conditions, composite multiple conditions will perform statistics count. the maximum number of conditions must not exceed 5. valid values: <li><b>http.request.ip</b>: client ip;</li> <li><b>http.request.xff_header_ip</b>: client ip (priority match xff header);</li> <li><b>http.request.uri.path</b>: request access path;</li> <li><b>http.request.cookies['session']</b>: Cookie named session, where session can be replaced with your own specified parameter;</li> <li><b>http.request.headers['user-agent']</b>: http header named user-agent, where user-agent can be replaced with your own specified parameter;</li> <li><b>http.request.ja3</b>: request ja3 fingerprint;</li> <li><b>http.request.uri.query['test']</b>: URL query parameter named test, where test can be replaced with your own specified parameter.</li>.
     * @param integer $MaxRequestThreshold Precision rate limiting specifies the cumulative number of interceptions within the time range. value ranges from 1 to 100000.
     * @param string $CountingPeriod Specifies the time window for statistics. valid values: <li>1s: 1 second;</li><li>5s: 5 seconds;</li><li>10s: 10 seconds;</li><li>20s: 20 seconds;</li><li>30s: 30 seconds;</li><li>40s: 40 seconds;</li><li>50s: 50 seconds;</li><li>1m: 1 minute;</li><li>2m: 2 minutes;</li><li>5m: 5 minutes;</li><li>10m: 10 minutes;</li><li>1h: 1 hour.</li>.
     * @param string $ActionDuration The duration of an Action is only supported in the following units: <li>s: seconds, value range 1–120;</li> <li>m: minutes, value range 1–120;</li> <li>h: hours, value range 1–48;</li> <li>d: days, value range 1–30.</li>.
     * @param SecurityAction $Action Precision rate limiting handling methods. valid values: <li>Monitor: Monitor;</li> <li>Deny: block, where DenyActionParameters.Name supports Deny and ReturnCustomPage;</li> <li>Challenge: Challenge, where ChallengeActionParameters.Name supports JSChallenge and ManagedChallenge;</li> <li>Redirect: Redirect to URL;</li>.
     * @param integer $Priority Precision rate limiting specifies the priority. value range is 0 to 100. default is 0.
     * @param string $Enabled Whether the precise rate limiting rule is enabled. valid values: <li>on: enabled;</li> <li>off: disabled.</li>.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("CountBy",$param) and $param["CountBy"] !== null) {
            $this->CountBy = $param["CountBy"];
        }

        if (array_key_exists("MaxRequestThreshold",$param) and $param["MaxRequestThreshold"] !== null) {
            $this->MaxRequestThreshold = $param["MaxRequestThreshold"];
        }

        if (array_key_exists("CountingPeriod",$param) and $param["CountingPeriod"] !== null) {
            $this->CountingPeriod = $param["CountingPeriod"];
        }

        if (array_key_exists("ActionDuration",$param) and $param["ActionDuration"] !== null) {
            $this->ActionDuration = $param["ActionDuration"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new SecurityAction();
            $this->Action->deserialize($param["Action"]);
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
