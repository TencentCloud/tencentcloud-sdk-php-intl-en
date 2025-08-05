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
 * HSTS configuration
 *
 * @method string getSwitch() Obtain Whether to enable the configuration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method void setSwitch(string $Switch) Set Whether to enable the configuration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method integer getMaxAge() Obtain MaxAge value. expressed in seconds, maximum value is 1 day.
 * @method void setMaxAge(integer $MaxAge) Set MaxAge value. expressed in seconds, maximum value is 1 day.
 * @method string getIncludeSubDomains() Obtain Specifies whether the subdomain is included. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>
 * @method void setIncludeSubDomains(string $IncludeSubDomains) Set Specifies whether the subdomain is included. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>
 * @method string getPreload() Obtain Whether to enable preloading. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>
 * @method void setPreload(string $Preload) Set Whether to enable preloading. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>
 */
class Hsts extends AbstractModel
{
    /**
     * @var string Whether to enable the configuration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     */
    public $Switch;

    /**
     * @var integer MaxAge value. expressed in seconds, maximum value is 1 day.
     */
    public $MaxAge;

    /**
     * @var string Specifies whether the subdomain is included. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>
     */
    public $IncludeSubDomains;

    /**
     * @var string Whether to enable preloading. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>
     */
    public $Preload;

    /**
     * @param string $Switch Whether to enable the configuration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     * @param integer $MaxAge MaxAge value. expressed in seconds, maximum value is 1 day.
     * @param string $IncludeSubDomains Specifies whether the subdomain is included. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>
     * @param string $Preload Whether to enable preloading. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>
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

        if (array_key_exists("MaxAge",$param) and $param["MaxAge"] !== null) {
            $this->MaxAge = $param["MaxAge"];
        }

        if (array_key_exists("IncludeSubDomains",$param) and $param["IncludeSubDomains"] !== null) {
            $this->IncludeSubDomains = $param["IncludeSubDomains"];
        }

        if (array_key_exists("Preload",$param) and $param["Preload"] !== null) {
            $this->Preload = $param["Preload"];
        }
    }
}
