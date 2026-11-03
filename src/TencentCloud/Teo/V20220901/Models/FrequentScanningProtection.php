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
 * High frequency scan protection configuration options. When a visitor's requests frequently hit managed rules configured as block, all requests from the visitor are blocked within a period of time.
 *
 * @method string getEnabled() Obtain Whether high-frequency scan protection is enabled. Valid values: <li>on: enabled, the high-frequency scan protection rule takes effect;</li><li>off: disabled, the high-frequency scan protection rule does not take effect.</li>	
 * @method void setEnabled(string $Enabled) Set Whether high-frequency scan protection is enabled. Valid values: <li>on: enabled, the high-frequency scan protection rule takes effect;</li><li>off: disabled, the high-frequency scan protection rule does not take effect.</li>	
 * @method string getId() Obtain Rule ID of high-frequency scan protection, returned only as an output parameter.
 * @method void setId(string $Id) Set Rule ID of high-frequency scan protection, returned only as an output parameter.
 * @method SecurityAction getAction() Obtain Handling action for high frequency scan protection. When Enabled is on, this field is required. The Name parameter of SecurityAction supports: <li>Deny: block and respond with an Interception page;</li><li>Monitor: observe, do not process request records, and log security events;</li><li>JSChallenge: javascript challenge and respond with a JavaScript challenge page.</li>
 * @method void setAction(SecurityAction $Action) Set Handling action for high frequency scan protection. When Enabled is on, this field is required. The Name parameter of SecurityAction supports: <li>Deny: block and respond with an Interception page;</li><li>Monitor: observe, do not process request records, and log security events;</li><li>JSChallenge: javascript challenge and respond with a JavaScript challenge page.</li>
 * @method string getCountBy() Obtain Match mode for request statistics. This field is required when Enabled is on. Valid values: <li>http.request.xff_header_ip: client ip (priority match xff header);</li><li>http.request.ip: client ip.</li>
 * @method void setCountBy(string $CountBy) Set Match mode for request statistics. This field is required when Enabled is on. Valid values: <li>http.request.xff_header_ip: client ip (priority match xff header);</li><li>http.request.ip: client ip.</li>
 * @method integer getBlockThreshold() Obtain This parameter specifies the threshold for high-frequency scan protection, which is the total interception count when managed rules configured for interception are hit within the time range set by CountingPeriod. The value ranges from 1 to 4294967294, for example, 100. When this statistical value is exceeded, subsequent requests trigger the handling action set by Action. This field is required when Enabled is on.
 * @method void setBlockThreshold(integer $BlockThreshold) Set This parameter specifies the threshold for high-frequency scan protection, which is the total interception count when managed rules configured for interception are hit within the time range set by CountingPeriod. The value ranges from 1 to 4294967294, for example, 100. When this statistical value is exceeded, subsequent requests trigger the handling action set by Action. This field is required when Enabled is on.
 * @method string getCountingPeriod() Obtain This parameter specifies the time window for high-frequency scan protection statistics, that is, the statistical time window for requests that hit managed rules configured for interception. Value range: 5-1800. The unit only supports seconds (s), for example, 5s. Required when Enabled is on.
 * @method void setCountingPeriod(string $CountingPeriod) Set This parameter specifies the time window for high-frequency scan protection statistics, that is, the statistical time window for requests that hit managed rules configured for interception. Value range: 5-1800. The unit only supports seconds (s), for example, 5s. Required when Enabled is on.
 * @method string getActionDuration() Obtain This parameter specifies the duration of the handling Action set by the high frequency scan protection Action parameter. The value ranges from 60 to 86400. The unit only supports seconds (s), for example, 60s. This field is required when Enabled is on.
 * @method void setActionDuration(string $ActionDuration) Set This parameter specifies the duration of the handling Action set by the high frequency scan protection Action parameter. The value ranges from 60 to 86400. The unit only supports seconds (s), for example, 60s. This field is required when Enabled is on.
 */
class FrequentScanningProtection extends AbstractModel
{
    /**
     * @var string Whether high-frequency scan protection is enabled. Valid values: <li>on: enabled, the high-frequency scan protection rule takes effect;</li><li>off: disabled, the high-frequency scan protection rule does not take effect.</li>	
     */
    public $Enabled;

    /**
     * @var string Rule ID of high-frequency scan protection, returned only as an output parameter.
     */
    public $Id;

    /**
     * @var SecurityAction Handling action for high frequency scan protection. When Enabled is on, this field is required. The Name parameter of SecurityAction supports: <li>Deny: block and respond with an Interception page;</li><li>Monitor: observe, do not process request records, and log security events;</li><li>JSChallenge: javascript challenge and respond with a JavaScript challenge page.</li>
     */
    public $Action;

    /**
     * @var string Match mode for request statistics. This field is required when Enabled is on. Valid values: <li>http.request.xff_header_ip: client ip (priority match xff header);</li><li>http.request.ip: client ip.</li>
     */
    public $CountBy;

    /**
     * @var integer This parameter specifies the threshold for high-frequency scan protection, which is the total interception count when managed rules configured for interception are hit within the time range set by CountingPeriod. The value ranges from 1 to 4294967294, for example, 100. When this statistical value is exceeded, subsequent requests trigger the handling action set by Action. This field is required when Enabled is on.
     */
    public $BlockThreshold;

    /**
     * @var string This parameter specifies the time window for high-frequency scan protection statistics, that is, the statistical time window for requests that hit managed rules configured for interception. Value range: 5-1800. The unit only supports seconds (s), for example, 5s. Required when Enabled is on.
     */
    public $CountingPeriod;

    /**
     * @var string This parameter specifies the duration of the handling Action set by the high frequency scan protection Action parameter. The value ranges from 60 to 86400. The unit only supports seconds (s), for example, 60s. This field is required when Enabled is on.
     */
    public $ActionDuration;

    /**
     * @param string $Enabled Whether high-frequency scan protection is enabled. Valid values: <li>on: enabled, the high-frequency scan protection rule takes effect;</li><li>off: disabled, the high-frequency scan protection rule does not take effect.</li>	
     * @param string $Id Rule ID of high-frequency scan protection, returned only as an output parameter.
     * @param SecurityAction $Action Handling action for high frequency scan protection. When Enabled is on, this field is required. The Name parameter of SecurityAction supports: <li>Deny: block and respond with an Interception page;</li><li>Monitor: observe, do not process request records, and log security events;</li><li>JSChallenge: javascript challenge and respond with a JavaScript challenge page.</li>
     * @param string $CountBy Match mode for request statistics. This field is required when Enabled is on. Valid values: <li>http.request.xff_header_ip: client ip (priority match xff header);</li><li>http.request.ip: client ip.</li>
     * @param integer $BlockThreshold This parameter specifies the threshold for high-frequency scan protection, which is the total interception count when managed rules configured for interception are hit within the time range set by CountingPeriod. The value ranges from 1 to 4294967294, for example, 100. When this statistical value is exceeded, subsequent requests trigger the handling action set by Action. This field is required when Enabled is on.
     * @param string $CountingPeriod This parameter specifies the time window for high-frequency scan protection statistics, that is, the statistical time window for requests that hit managed rules configured for interception. Value range: 5-1800. The unit only supports seconds (s), for example, 5s. Required when Enabled is on.
     * @param string $ActionDuration This parameter specifies the duration of the handling Action set by the high frequency scan protection Action parameter. The value ranges from 60 to 86400. The unit only supports seconds (s), for example, 60s. This field is required when Enabled is on.
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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
