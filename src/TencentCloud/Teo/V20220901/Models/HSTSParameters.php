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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HSTS configuration parameters.
 *
 * @method string getSwitch() Obtain Whether to enable hsts. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
 * @method void setSwitch(string $Switch) Set Whether to enable hsts. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
 * @method integer getTimeout() Obtain Cache hsts header time, unit: seconds. value range: 1-31536000.<br>note: this field is required when switch is on; when switch is off, this field is not required and will not take effect if filled.
 * @method void setTimeout(integer $Timeout) Set Cache hsts header time, unit: seconds. value range: 1-31536000.<br>note: this field is required when switch is on; when switch is off, this field is not required and will not take effect if filled.
 * @method string getIncludeSubDomains() Obtain Whether to allow other subdomains to inherit the same hsts header. values:.
<Li>On: allows other subdomains to inherit the same hsts header.</li>.
<Li>Off: does not allow other subdomains to inherit the same hsts header.</li> note: when switch is on, this field is required; when switch is off, this field is not required and will not take effect if filled.
 * @method void setIncludeSubDomains(string $IncludeSubDomains) Set Whether to allow other subdomains to inherit the same hsts header. values:.
<Li>On: allows other subdomains to inherit the same hsts header.</li>.
<Li>Off: does not allow other subdomains to inherit the same hsts header.</li> note: when switch is on, this field is required; when switch is off, this field is not required and will not take effect if filled.
 * @method string getPreload() Obtain Whether to allow the browser to preload the hsts header. valid values:.
<Li>On: allows the browser to preload the hsts header.</li>.
<Li>Off: does not allow the browser to preload the hsts header.</li> note: when switch is on, this field is required; when switch is off, this field is not required and will not take effect if filled.
 * @method void setPreload(string $Preload) Set Whether to allow the browser to preload the hsts header. valid values:.
<Li>On: allows the browser to preload the hsts header.</li>.
<Li>Off: does not allow the browser to preload the hsts header.</li> note: when switch is on, this field is required; when switch is off, this field is not required and will not take effect if filled.
 */
class HSTSParameters extends AbstractModel
{
    /**
     * @var string Whether to enable hsts. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
     */
    public $Switch;

    /**
     * @var integer Cache hsts header time, unit: seconds. value range: 1-31536000.<br>note: this field is required when switch is on; when switch is off, this field is not required and will not take effect if filled.
     */
    public $Timeout;

    /**
     * @var string Whether to allow other subdomains to inherit the same hsts header. values:.
<Li>On: allows other subdomains to inherit the same hsts header.</li>.
<Li>Off: does not allow other subdomains to inherit the same hsts header.</li> note: when switch is on, this field is required; when switch is off, this field is not required and will not take effect if filled.
     */
    public $IncludeSubDomains;

    /**
     * @var string Whether to allow the browser to preload the hsts header. valid values:.
<Li>On: allows the browser to preload the hsts header.</li>.
<Li>Off: does not allow the browser to preload the hsts header.</li> note: when switch is on, this field is required; when switch is off, this field is not required and will not take effect if filled.
     */
    public $Preload;

    /**
     * @param string $Switch Whether to enable hsts. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
     * @param integer $Timeout Cache hsts header time, unit: seconds. value range: 1-31536000.<br>note: this field is required when switch is on; when switch is off, this field is not required and will not take effect if filled.
     * @param string $IncludeSubDomains Whether to allow other subdomains to inherit the same hsts header. values:.
<Li>On: allows other subdomains to inherit the same hsts header.</li>.
<Li>Off: does not allow other subdomains to inherit the same hsts header.</li> note: when switch is on, this field is required; when switch is off, this field is not required and will not take effect if filled.
     * @param string $Preload Whether to allow the browser to preload the hsts header. valid values:.
<Li>On: allows the browser to preload the hsts header.</li>.
<Li>Off: does not allow the browser to preload the hsts header.</li> note: when switch is on, this field is required; when switch is off, this field is not required and will not take effect if filled.
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
