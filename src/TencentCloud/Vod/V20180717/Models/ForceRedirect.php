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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Forced redirect configuration for access protocols. Disabled by default.
 *
 * @method string getSwitch() Obtain Access the forced redirect configuration switch. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
 * @method void setSwitch(string $Switch) Set Access the forced redirect configuration switch. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
 * @method string getRedirectType() Obtain Access forced redirect type:
<li>http: Force HTTP redirection</li>
<li>`https`: Force HTTPS redirect</li>
 * @method void setRedirectType(string $RedirectType) Set Access forced redirect type:
<li>http: Force HTTP redirection</li>
<li>`https`: Force HTTPS redirect</li>
 * @method integer getRedirectStatusCode() Obtain Status code returned for forced redirection. Supports 301 and 302.
 * @method void setRedirectStatusCode(integer $RedirectStatusCode) Set Status code returned for forced redirection. Supports 301 and 302.
 * @method string getCarryHeaders() Obtain Whether to return the added header during forced redirection.
 * @method void setCarryHeaders(string $CarryHeaders) Set Whether to return the added header during forced redirection.
 */
class ForceRedirect extends AbstractModel
{
    /**
     * @var string Access the forced redirect configuration switch. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
     */
    public $Switch;

    /**
     * @var string Access forced redirect type:
<li>http: Force HTTP redirection</li>
<li>`https`: Force HTTPS redirect</li>
     */
    public $RedirectType;

    /**
     * @var integer Status code returned for forced redirection. Supports 301 and 302.
     */
    public $RedirectStatusCode;

    /**
     * @var string Whether to return the added header during forced redirection.
     */
    public $CarryHeaders;

    /**
     * @param string $Switch Access the forced redirect configuration switch. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
     * @param string $RedirectType Access forced redirect type:
<li>http: Force HTTP redirection</li>
<li>`https`: Force HTTPS redirect</li>
     * @param integer $RedirectStatusCode Status code returned for forced redirection. Supports 301 and 302.
     * @param string $CarryHeaders Whether to return the added header during forced redirection.
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

        if (array_key_exists("RedirectType",$param) and $param["RedirectType"] !== null) {
            $this->RedirectType = $param["RedirectType"];
        }

        if (array_key_exists("RedirectStatusCode",$param) and $param["RedirectStatusCode"] !== null) {
            $this->RedirectStatusCode = $param["RedirectStatusCode"];
        }

        if (array_key_exists("CarryHeaders",$param) and $param["CarryHeaders"] !== null) {
            $this->CarryHeaders = $param["CarryHeaders"];
        }
    }
}
