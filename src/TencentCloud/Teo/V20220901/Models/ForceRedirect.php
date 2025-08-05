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
 * Forced HTTPS redirect configuration for access protocols.
 *
 * @method string getSwitch() Obtain Whether to enable force HTTPS redirect. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method void setSwitch(string $Switch) Set Whether to enable force HTTPS redirect. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method integer getRedirectStatusCode() Obtain Redirection status code. valid values:.
<Li>`301`: 301 redirect</li>.
<Li>`302`: 302 redirect</li>.
 * @method void setRedirectStatusCode(integer $RedirectStatusCode) Set Redirection status code. valid values:.
<Li>`301`: 301 redirect</li>.
<Li>`302`: 302 redirect</li>.
 */
class ForceRedirect extends AbstractModel
{
    /**
     * @var string Whether to enable force HTTPS redirect. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     */
    public $Switch;

    /**
     * @var integer Redirection status code. valid values:.
<Li>`301`: 301 redirect</li>.
<Li>`302`: 302 redirect</li>.
     */
    public $RedirectStatusCode;

    /**
     * @param string $Switch Whether to enable force HTTPS redirect. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     * @param integer $RedirectStatusCode Redirection status code. valid values:.
<Li>`301`: 301 redirect</li>.
<Li>`302`: 302 redirect</li>.
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

        if (array_key_exists("RedirectStatusCode",$param) and $param["RedirectStatusCode"] !== null) {
            $this->RedirectStatusCode = $param["RedirectStatusCode"];
        }
    }
}
