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
 * High frequency scan protection configuration option. when a visitor's frequent requests hit the managed rule configured as block, ban all requests from that visitor within a period of time.
 *
 * @method string getEnabled() Obtain Whether the high-frequency scan protection rule is enabled. valid values: <li>on: enable. the high-frequency scan protection rule takes effect.</li><li>off: disable. the high-frequency scan protection rule does not take effect.</li>.	
 * @method void setEnabled(string $Enabled) Set Whether the high-frequency scan protection rule is enabled. valid values: <li>on: enable. the high-frequency scan protection rule takes effect.</li><li>off: disable. the high-frequency scan protection rule does not take effect.</li>.	
 * @method SecurityAction getAction() Obtain The handling action for high-frequency scan protection. required when Enabled is on. valid values for SecurityAction Name: <li>Deny: block and respond with an interception page;</li> <li>Monitor: observe without processing requests, log security events in logs;</li> <li>JSChallenge: respond with a JavaScript challenge page.</li>.
 * @method void setAction(SecurityAction $Action) Set The handling action for high-frequency scan protection. required when Enabled is on. valid values for SecurityAction Name: <li>Deny: block and respond with an interception page;</li> <li>Monitor: observe without processing requests, log security events in logs;</li> <li>JSChallenge: respond with a JavaScript challenge page.</li>.
 * @method string getCountBy() Obtain The match mode for request statistics. required when Enabled is on. valid values: <li>http.request.xff_header_ip: client ip (priority match xff header);</li><li>http.request.ip: client ip.</li>.
 * @method void setCountBy(string $CountBy) Set The match mode for request statistics. required when Enabled is on. valid values: <li>http.request.xff_header_ip: client ip (priority match xff header);</li><li>http.request.ip: client ip.</li>.
 * @method integer getBlockThreshold() Obtain This parameter specifies the threshold for high-frequency scan protection, which is the intercept count of managed rules set to interception within the time range set by CountingPeriod. value range: 1 to 4294967294, for example 100. when exceeding this statistical value, subsequent requests will trigger the handling Action set by Action. required when Enabled is on.
 * @method void setBlockThreshold(integer $BlockThreshold) Set This parameter specifies the threshold for high-frequency scan protection, which is the intercept count of managed rules set to interception within the time range set by CountingPeriod. value range: 1 to 4294967294, for example 100. when exceeding this statistical value, subsequent requests will trigger the handling Action set by Action. required when Enabled is on.
 * @method string getCountingPeriod() Obtain This parameter specifies the statistical time window for high-frequency scan protection, which is the time window for counting requests that hit managed rules configured as block. valid values: 5-1800. measurement unit: seconds (s) only, such as 5s. this field is required when Enabled is on.
 * @method void setCountingPeriod(string $CountingPeriod) Set This parameter specifies the statistical time window for high-frequency scan protection, which is the time window for counting requests that hit managed rules configured as block. valid values: 5-1800. measurement unit: seconds (s) only, such as 5s. this field is required when Enabled is on.
 * @method string getActionDuration() Obtain This parameter specifies the duration of the handling Action set by the high frequency scan protection Action parameter. value range: 60 to 86400. measurement unit: seconds (s) only, for example 60s. this field is required when Enabled is on.
 * @method void setActionDuration(string $ActionDuration) Set This parameter specifies the duration of the handling Action set by the high frequency scan protection Action parameter. value range: 60 to 86400. measurement unit: seconds (s) only, for example 60s. this field is required when Enabled is on.
 */
class FrequentScanningProtection extends AbstractModel
{
    /**
     * @var string Whether the high-frequency scan protection rule is enabled. valid values: <li>on: enable. the high-frequency scan protection rule takes effect.</li><li>off: disable. the high-frequency scan protection rule does not take effect.</li>.	
     */
    public $Enabled;

    /**
     * @var SecurityAction The handling action for high-frequency scan protection. required when Enabled is on. valid values for SecurityAction Name: <li>Deny: block and respond with an interception page;</li> <li>Monitor: observe without processing requests, log security events in logs;</li> <li>JSChallenge: respond with a JavaScript challenge page.</li>.
     */
    public $Action;

    /**
     * @var string The match mode for request statistics. required when Enabled is on. valid values: <li>http.request.xff_header_ip: client ip (priority match xff header);</li><li>http.request.ip: client ip.</li>.
     */
    public $CountBy;

    /**
     * @var integer This parameter specifies the threshold for high-frequency scan protection, which is the intercept count of managed rules set to interception within the time range set by CountingPeriod. value range: 1 to 4294967294, for example 100. when exceeding this statistical value, subsequent requests will trigger the handling Action set by Action. required when Enabled is on.
     */
    public $BlockThreshold;

    /**
     * @var string This parameter specifies the statistical time window for high-frequency scan protection, which is the time window for counting requests that hit managed rules configured as block. valid values: 5-1800. measurement unit: seconds (s) only, such as 5s. this field is required when Enabled is on.
     */
    public $CountingPeriod;

    /**
     * @var string This parameter specifies the duration of the handling Action set by the high frequency scan protection Action parameter. value range: 60 to 86400. measurement unit: seconds (s) only, for example 60s. this field is required when Enabled is on.
     */
    public $ActionDuration;

    /**
     * @param string $Enabled Whether the high-frequency scan protection rule is enabled. valid values: <li>on: enable. the high-frequency scan protection rule takes effect.</li><li>off: disable. the high-frequency scan protection rule does not take effect.</li>.	
     * @param SecurityAction $Action The handling action for high-frequency scan protection. required when Enabled is on. valid values for SecurityAction Name: <li>Deny: block and respond with an interception page;</li> <li>Monitor: observe without processing requests, log security events in logs;</li> <li>JSChallenge: respond with a JavaScript challenge page.</li>.
     * @param string $CountBy The match mode for request statistics. required when Enabled is on. valid values: <li>http.request.xff_header_ip: client ip (priority match xff header);</li><li>http.request.ip: client ip.</li>.
     * @param integer $BlockThreshold This parameter specifies the threshold for high-frequency scan protection, which is the intercept count of managed rules set to interception within the time range set by CountingPeriod. value range: 1 to 4294967294, for example 100. when exceeding this statistical value, subsequent requests will trigger the handling Action set by Action. required when Enabled is on.
     * @param string $CountingPeriod This parameter specifies the statistical time window for high-frequency scan protection, which is the time window for counting requests that hit managed rules configured as block. valid values: 5-1800. measurement unit: seconds (s) only, such as 5s. this field is required when Enabled is on.
     * @param string $ActionDuration This parameter specifies the duration of the handling Action set by the high frequency scan protection Action parameter. value range: 60 to 86400. measurement unit: seconds (s) only, for example 60s. this field is required when Enabled is on.
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

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new SecurityAction();
            $this->Action->deserialize($param["Action"]);
        }

        if (array_key_exists("CountBy",$param) and $param["CountBy"] !== null) {
            $this->CountBy = $param["CountBy"];
        }

        if (array_key_exists("BlockThreshold",$param) and $param["BlockThreshold"] !== null) {
            $this->BlockThreshold = $param["BlockThreshold"];
        }

        if (array_key_exists("CountingPeriod",$param) and $param["CountingPeriod"] !== null) {
            $this->CountingPeriod = $param["CountingPeriod"];
        }

        if (array_key_exists("ActionDuration",$param) and $param["ActionDuration"] !== null) {
            $this->ActionDuration = $param["ActionDuration"];
        }
    }
}
