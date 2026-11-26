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
 * HSTS configuration parameters.
 *
 * @method string getSwitch() Obtain HSTS configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method void setSwitch(string $Switch) Set HSTS configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method integer getTimeout() Obtain Cache HSTS header time in seconds. Value range: 1-31536000.<br>Note: This field is required when Switch is on. When Switch is off, no need to specify this field, and it does not take effect if specified.
 * @method void setTimeout(integer $Timeout) Set Cache HSTS header time in seconds. Value range: 1-31536000.<br>Note: This field is required when Switch is on. When Switch is off, no need to specify this field, and it does not take effect if specified.
 * @method string getIncludeSubDomains() Obtain Whether other subdomains are allowed to inherit the same HSTS header. Valid values:
<li>on: Allow other subdomains to inherit the same HSTS header;</li>
<li>off: Other subdomains cannot inherit the same HSTS header.</li>Note: This field is required when Switch is on. When Switch is off, no need to specify this field, and it does not take effect if specified.
 * @method void setIncludeSubDomains(string $IncludeSubDomains) Set Whether other subdomains are allowed to inherit the same HSTS header. Valid values:
<li>on: Allow other subdomains to inherit the same HSTS header;</li>
<li>off: Other subdomains cannot inherit the same HSTS header.</li>Note: This field is required when Switch is on. When Switch is off, no need to specify this field, and it does not take effect if specified.
 * @method string getPreload() Obtain Whether the browser is allowed to preload the HSTS header. Valid values:
<li>on: Allow the browser to preload the HSTS header;</li>
<li>off: The browser is not allowed to preload the HSTS header.</li>Note: This field is required when Switch is on. When Switch is off, no need to specify this field, and it does not take effect if specified.
 * @method void setPreload(string $Preload) Set Whether the browser is allowed to preload the HSTS header. Valid values:
<li>on: Allow the browser to preload the HSTS header;</li>
<li>off: The browser is not allowed to preload the HSTS header.</li>Note: This field is required when Switch is on. When Switch is off, no need to specify this field, and it does not take effect if specified.
 */
class HSTSParameters extends AbstractModel
{
    /**
     * @var string HSTS configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     */
    public $Switch;

    /**
     * @var integer Cache HSTS header time in seconds. Value range: 1-31536000.<br>Note: This field is required when Switch is on. When Switch is off, no need to specify this field, and it does not take effect if specified.
     */
    public $Timeout;

    /**
     * @var string Whether other subdomains are allowed to inherit the same HSTS header. Valid values:
<li>on: Allow other subdomains to inherit the same HSTS header;</li>
<li>off: Other subdomains cannot inherit the same HSTS header.</li>Note: This field is required when Switch is on. When Switch is off, no need to specify this field, and it does not take effect if specified.
     */
    public $IncludeSubDomains;

    /**
     * @var string Whether the browser is allowed to preload the HSTS header. Valid values:
<li>on: Allow the browser to preload the HSTS header;</li>
<li>off: The browser is not allowed to preload the HSTS header.</li>Note: This field is required when Switch is on. When Switch is off, no need to specify this field, and it does not take effect if specified.
     */
    public $Preload;

    /**
     * @param string $Switch HSTS configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     * @param integer $Timeout Cache HSTS header time in seconds. Value range: 1-31536000.<br>Note: This field is required when Switch is on. When Switch is off, no need to specify this field, and it does not take effect if specified.
     * @param string $IncludeSubDomains Whether other subdomains are allowed to inherit the same HSTS header. Valid values:
<li>on: Allow other subdomains to inherit the same HSTS header;</li>
<li>off: Other subdomains cannot inherit the same HSTS header.</li>Note: This field is required when Switch is on. When Switch is off, no need to specify this field, and it does not take effect if specified.
     * @param string $Preload Whether the browser is allowed to preload the HSTS header. Valid values:
<li>on: Allow the browser to preload the HSTS header;</li>
<li>off: The browser is not allowed to preload the HSTS header.</li>Note: This field is required when Switch is on. When Switch is off, no need to specify this field, and it does not take effect if specified.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("IncludeSubDomains",$param) and $param["IncludeSubDomains"] !== null) {
            $this->IncludeSubDomains = $param["IncludeSubDomains"];
        }

        if (array_key_exists("Preload",$param) and $param["Preload"] !== null) {
            $this->Preload = $param["Preload"];
        }
    }
}
