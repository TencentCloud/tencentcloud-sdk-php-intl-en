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
 * Specific configuration of the rate limit.
 *
 * @method string getId() Obtain <p>ID of the precise rate limiting rule.<br>Different rule configuration operations can be performed by rule ID:<br> <li> <b>Add</b> a new rule: leave ID empty or unspecified;</li><li><b>Modify</b> an existing rule: specify the rule ID that needs to be updated/modified;</li><li><b>Delete</b> an existing rule: existing rules not included in the Rules list in the RateLimitingRules parameter will be deleted.</li></p>
 * @method void setId(string $Id) Set <p>ID of the precise rate limiting rule.<br>Different rule configuration operations can be performed by rule ID:<br> <li> <b>Add</b> a new rule: leave ID empty or unspecified;</li><li><b>Modify</b> an existing rule: specify the rule ID that needs to be updated/modified;</li><li><b>Delete</b> an existing rule: existing rules not included in the Rules list in the RateLimitingRules parameter will be deleted.</li></p>
 * @method string getName() Obtain <p>Name of the precise rate limit.</p>
 * @method void setName(string $Name) Set <p>Name of the precise rate limit.</p>
 * @method string getCondition() Obtain <p>The specific content of precise rate limiting must comply with expression syntax. For detailed specifications, see <a href="https://www.tencentcloud.com/document/product/1552/125343?from_cn_redirect=1">product document</a>.</p>
 * @method void setCondition(string $Condition) Set <p>The specific content of precise rate limiting must comply with expression syntax. For detailed specifications, see <a href="https://www.tencentcloud.com/document/product/1552/125343?from_cn_redirect=1">product document</a>.</p>
 * @method string getMode() Obtain <p>Bandwidth limit mode. Within the statistical time window CountingPeriod, for requests that meet the CountBy feature, the following bandwidth limit modes can be configured: <li>Block: Block the access source. When the count exceeds the MaxRequestThreshold, execute the Action on all subsequent requests that meet the feature within the ActionDuration;</li><li>Throttle: Only handle excess requests. When the count exceeds the MaxRequestThreshold, execute the Action only on requests that exceed the threshold, and stop when the window ends. At this point, the ActionDuration parameter will be ignored.</li><br>Default value: Block.</p>
 * @method void setMode(string $Mode) Set <p>Bandwidth limit mode. Within the statistical time window CountingPeriod, for requests that meet the CountBy feature, the following bandwidth limit modes can be configured: <li>Block: Block the access source. When the count exceeds the MaxRequestThreshold, execute the Action on all subsequent requests that meet the feature within the ActionDuration;</li><li>Throttle: Only handle excess requests. When the count exceeds the MaxRequestThreshold, execute the Action only on requests that exceed the threshold, and stop when the window ends. At this point, the ActionDuration parameter will be ignored.</li><br>Default value: Block.</p>
 * @method array getCountBy() Obtain <p>Match mode of the rate threshold request feature. Required when Enabled is on.<br><br>When there are multiple conditions, they will be combined for statistics and calculation. A maximum of 5 conditions is allowed. Valid values:<br><li><b>http.request.ip</b>: client IP;</li><li><b>http.request.xff_header_ip</b>: client IP (priority match XFF header);</li><li><b>http.request.uri.path</b>: access path of the request;</li><li><b>http.request.cookies[&#39;session&#39;]</b>: Cookie named session, where session can be replaced with your own parameter;</li><li><b>http.request.headers[&#39;user-agent&#39;]</b>: HTTP header named user-agent, where user-agent can be replaced with your own parameter;</li><li><b>http.request.ja3</b>: JA3 fingerprint of the request;</li><li><b>http.request.ja4</b>: JA4 fingerprint of the request;</li><li><b>http.request.uri.query[&#39;test&#39;]</b>: URL query parameter named test, where test can be replaced with your own parameter.</li></p>
 * @method void setCountBy(array $CountBy) Set <p>Match mode of the rate threshold request feature. Required when Enabled is on.<br><br>When there are multiple conditions, they will be combined for statistics and calculation. A maximum of 5 conditions is allowed. Valid values:<br><li><b>http.request.ip</b>: client IP;</li><li><b>http.request.xff_header_ip</b>: client IP (priority match XFF header);</li><li><b>http.request.uri.path</b>: access path of the request;</li><li><b>http.request.cookies[&#39;session&#39;]</b>: Cookie named session, where session can be replaced with your own parameter;</li><li><b>http.request.headers[&#39;user-agent&#39;]</b>: HTTP header named user-agent, where user-agent can be replaced with your own parameter;</li><li><b>http.request.ja3</b>: JA3 fingerprint of the request;</li><li><b>http.request.ja4</b>: JA4 fingerprint of the request;</li><li><b>http.request.uri.query[&#39;test&#39;]</b>: URL query parameter named test, where test can be replaced with your own parameter.</li></p>
 * @method integer getMaxRequestThreshold() Obtain <p>Cumulative number of interceptions by precise rate limiting within the time range, with a value range of 1 to 100000.</p>
 * @method void setMaxRequestThreshold(integer $MaxRequestThreshold) Set <p>Cumulative number of interceptions by precise rate limiting within the time range, with a value range of 1 to 100000.</p>
 * @method string getCountingPeriod() Obtain <p>Time window for statistics. Valid values: <li>1s: 1 second;</li><li>5s: 5 seconds;</li><li>10s: 10 seconds;</li><li>20s: 20 seconds;</li><li>30s: 30 seconds;</li><li>40s: 40 seconds;</li><li>50s: 50 seconds;</li><li>1m: 1 minute;</li><li>2m: 2 minutes;</li><li>5m: 5 minutes;</li><li>10m: 10 minutes;</li><li>1h: 1 hour.</li></p>
 * @method void setCountingPeriod(string $CountingPeriod) Set <p>Time window for statistics. Valid values: <li>1s: 1 second;</li><li>5s: 5 seconds;</li><li>10s: 10 seconds;</li><li>20s: 20 seconds;</li><li>30s: 30 seconds;</li><li>40s: 40 seconds;</li><li>50s: 50 seconds;</li><li>1m: 1 minute;</li><li>2m: 2 minutes;</li><li>5m: 5 minutes;</li><li>10m: 10 minutes;</li><li>1h: 1 hour.</li></p>
 * @method string getActionDuration() Obtain <p>Duration of the Action. Supported units: <li>s: seconds, value range: 1-120;</li><li>m: minutes, value range: 1-120;</li><li>h: hours, value range: 1-48;</li><li>d: days, value range: 1-30.</li><br>When Mode is Throttle, this parameter will be ignored and will not take effect.</p>
 * @method void setActionDuration(string $ActionDuration) Set <p>Duration of the Action. Supported units: <li>s: seconds, value range: 1-120;</li><li>m: minutes, value range: 1-120;</li><li>h: hours, value range: 1-48;</li><li>d: days, value range: 1-30.</li><br>When Mode is Throttle, this parameter will be ignored and will not take effect.</p>
 * @method SecurityAction getAction() Obtain <p>Handling method for precise rate limiting. SecurityAction.Name value range is as follows:</p><ul><li>Allow: allow, where AllowActionParameters supports MinDelayTime and MaxDelayTime configuration;</li><li>Deny: block, where DenyActionParameters supports ReturnCustomPage and Stall configuration;</li><li>Monitor: observe;</li><li>Challenge: challenge, where ChallengeActionParameters.ChallengeOption supports JSChallenge and ManagedChallenge;</li><li>Redirect: redirect to a URL.</li></ul>
 * @method void setAction(SecurityAction $Action) Set <p>Handling method for precise rate limiting. SecurityAction.Name value range is as follows:</p><ul><li>Allow: allow, where AllowActionParameters supports MinDelayTime and MaxDelayTime configuration;</li><li>Deny: block, where DenyActionParameters supports ReturnCustomPage and Stall configuration;</li><li>Monitor: observe;</li><li>Challenge: challenge, where ChallengeActionParameters.ChallengeOption supports JSChallenge and ManagedChallenge;</li><li>Redirect: redirect to a URL.</li></ul>
 * @method integer getPriority() Obtain <p>Priority of precise rate limiting, ranging from 0 to 100, with a default value of 0.</p>
 * @method void setPriority(integer $Priority) Set <p>Priority of precise rate limiting, ranging from 0 to 100, with a default value of 0.</p>
 * @method string getEnabled() Obtain <p>Whether the precise rate limiting rule is enabled. Valid values: <li>on: enabled;</li><li>off: disabled.</li></p>
 * @method void setEnabled(string $Enabled) Set <p>Whether the precise rate limiting rule is enabled. Valid values: <li>on: enabled;</li><li>off: disabled.</li></p>
 */
class RateLimitingRule extends AbstractModel
{
    /**
     * @var string <p>ID of the precise rate limiting rule.<br>Different rule configuration operations can be performed by rule ID:<br> <li> <b>Add</b> a new rule: leave ID empty or unspecified;</li><li><b>Modify</b> an existing rule: specify the rule ID that needs to be updated/modified;</li><li><b>Delete</b> an existing rule: existing rules not included in the Rules list in the RateLimitingRules parameter will be deleted.</li></p>
     */
    public $Id;

    /**
     * @var string <p>Name of the precise rate limit.</p>
     */
    public $Name;

    /**
     * @var string <p>The specific content of precise rate limiting must comply with expression syntax. For detailed specifications, see <a href="https://www.tencentcloud.com/document/product/1552/125343?from_cn_redirect=1">product document</a>.</p>
     */
    public $Condition;

    /**
     * @var string <p>Bandwidth limit mode. Within the statistical time window CountingPeriod, for requests that meet the CountBy feature, the following bandwidth limit modes can be configured: <li>Block: Block the access source. When the count exceeds the MaxRequestThreshold, execute the Action on all subsequent requests that meet the feature within the ActionDuration;</li><li>Throttle: Only handle excess requests. When the count exceeds the MaxRequestThreshold, execute the Action only on requests that exceed the threshold, and stop when the window ends. At this point, the ActionDuration parameter will be ignored.</li><br>Default value: Block.</p>
     */
    public $Mode;

    /**
     * @var array <p>Match mode of the rate threshold request feature. Required when Enabled is on.<br><br>When there are multiple conditions, they will be combined for statistics and calculation. A maximum of 5 conditions is allowed. Valid values:<br><li><b>http.request.ip</b>: client IP;</li><li><b>http.request.xff_header_ip</b>: client IP (priority match XFF header);</li><li><b>http.request.uri.path</b>: access path of the request;</li><li><b>http.request.cookies[&#39;session&#39;]</b>: Cookie named session, where session can be replaced with your own parameter;</li><li><b>http.request.headers[&#39;user-agent&#39;]</b>: HTTP header named user-agent, where user-agent can be replaced with your own parameter;</li><li><b>http.request.ja3</b>: JA3 fingerprint of the request;</li><li><b>http.request.ja4</b>: JA4 fingerprint of the request;</li><li><b>http.request.uri.query[&#39;test&#39;]</b>: URL query parameter named test, where test can be replaced with your own parameter.</li></p>
     */
    public $CountBy;

    /**
     * @var integer <p>Cumulative number of interceptions by precise rate limiting within the time range, with a value range of 1 to 100000.</p>
     */
    public $MaxRequestThreshold;

    /**
     * @var string <p>Time window for statistics. Valid values: <li>1s: 1 second;</li><li>5s: 5 seconds;</li><li>10s: 10 seconds;</li><li>20s: 20 seconds;</li><li>30s: 30 seconds;</li><li>40s: 40 seconds;</li><li>50s: 50 seconds;</li><li>1m: 1 minute;</li><li>2m: 2 minutes;</li><li>5m: 5 minutes;</li><li>10m: 10 minutes;</li><li>1h: 1 hour.</li></p>
     */
    public $CountingPeriod;

    /**
     * @var string <p>Duration of the Action. Supported units: <li>s: seconds, value range: 1-120;</li><li>m: minutes, value range: 1-120;</li><li>h: hours, value range: 1-48;</li><li>d: days, value range: 1-30.</li><br>When Mode is Throttle, this parameter will be ignored and will not take effect.</p>
     */
    public $ActionDuration;

    /**
     * @var SecurityAction <p>Handling method for precise rate limiting. SecurityAction.Name value range is as follows:</p><ul><li>Allow: allow, where AllowActionParameters supports MinDelayTime and MaxDelayTime configuration;</li><li>Deny: block, where DenyActionParameters supports ReturnCustomPage and Stall configuration;</li><li>Monitor: observe;</li><li>Challenge: challenge, where ChallengeActionParameters.ChallengeOption supports JSChallenge and ManagedChallenge;</li><li>Redirect: redirect to a URL.</li></ul>
     */
    public $Action;

    /**
     * @var integer <p>Priority of precise rate limiting, ranging from 0 to 100, with a default value of 0.</p>
     */
    public $Priority;

    /**
     * @var string <p>Whether the precise rate limiting rule is enabled. Valid values: <li>on: enabled;</li><li>off: disabled.</li></p>
     */
    public $Enabled;

    /**
     * @param string $Id <p>ID of the precise rate limiting rule.<br>Different rule configuration operations can be performed by rule ID:<br> <li> <b>Add</b> a new rule: leave ID empty or unspecified;</li><li><b>Modify</b> an existing rule: specify the rule ID that needs to be updated/modified;</li><li><b>Delete</b> an existing rule: existing rules not included in the Rules list in the RateLimitingRules parameter will be deleted.</li></p>
     * @param string $Name <p>Name of the precise rate limit.</p>
     * @param string $Condition <p>The specific content of precise rate limiting must comply with expression syntax. For detailed specifications, see <a href="https://www.tencentcloud.com/document/product/1552/125343?from_cn_redirect=1">product document</a>.</p>
     * @param string $Mode <p>Bandwidth limit mode. Within the statistical time window CountingPeriod, for requests that meet the CountBy feature, the following bandwidth limit modes can be configured: <li>Block: Block the access source. When the count exceeds the MaxRequestThreshold, execute the Action on all subsequent requests that meet the feature within the ActionDuration;</li><li>Throttle: Only handle excess requests. When the count exceeds the MaxRequestThreshold, execute the Action only on requests that exceed the threshold, and stop when the window ends. At this point, the ActionDuration parameter will be ignored.</li><br>Default value: Block.</p>
     * @param array $CountBy <p>Match mode of the rate threshold request feature. Required when Enabled is on.<br><br>When there are multiple conditions, they will be combined for statistics and calculation. A maximum of 5 conditions is allowed. Valid values:<br><li><b>http.request.ip</b>: client IP;</li><li><b>http.request.xff_header_ip</b>: client IP (priority match XFF header);</li><li><b>http.request.uri.path</b>: access path of the request;</li><li><b>http.request.cookies[&#39;session&#39;]</b>: Cookie named session, where session can be replaced with your own parameter;</li><li><b>http.request.headers[&#39;user-agent&#39;]</b>: HTTP header named user-agent, where user-agent can be replaced with your own parameter;</li><li><b>http.request.ja3</b>: JA3 fingerprint of the request;</li><li><b>http.request.ja4</b>: JA4 fingerprint of the request;</li><li><b>http.request.uri.query[&#39;test&#39;]</b>: URL query parameter named test, where test can be replaced with your own parameter.</li></p>
     * @param integer $MaxRequestThreshold <p>Cumulative number of interceptions by precise rate limiting within the time range, with a value range of 1 to 100000.</p>
     * @param string $CountingPeriod <p>Time window for statistics. Valid values: <li>1s: 1 second;</li><li>5s: 5 seconds;</li><li>10s: 10 seconds;</li><li>20s: 20 seconds;</li><li>30s: 30 seconds;</li><li>40s: 40 seconds;</li><li>50s: 50 seconds;</li><li>1m: 1 minute;</li><li>2m: 2 minutes;</li><li>5m: 5 minutes;</li><li>10m: 10 minutes;</li><li>1h: 1 hour.</li></p>
     * @param string $ActionDuration <p>Duration of the Action. Supported units: <li>s: seconds, value range: 1-120;</li><li>m: minutes, value range: 1-120;</li><li>h: hours, value range: 1-48;</li><li>d: days, value range: 1-30.</li><br>When Mode is Throttle, this parameter will be ignored and will not take effect.</p>
     * @param SecurityAction $Action <p>Handling method for precise rate limiting. SecurityAction.Name value range is as follows:</p><ul><li>Allow: allow, where AllowActionParameters supports MinDelayTime and MaxDelayTime configuration;</li><li>Deny: block, where DenyActionParameters supports ReturnCustomPage and Stall configuration;</li><li>Monitor: observe;</li><li>Challenge: challenge, where ChallengeActionParameters.ChallengeOption supports JSChallenge and ManagedChallenge;</li><li>Redirect: redirect to a URL.</li></ul>
     * @param integer $Priority <p>Priority of precise rate limiting, ranging from 0 to 100, with a default value of 0.</p>
     * @param string $Enabled <p>Whether the precise rate limiting rule is enabled. Valid values: <li>on: enabled;</li><li>off: disabled.</li></p>
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

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
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
