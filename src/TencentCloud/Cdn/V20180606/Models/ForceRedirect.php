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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Access protocol forced redirect configuration. This is disabled by default.
 *
 * @method string getSwitch() Obtain Whether to enable forced HTTPS redirects. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSwitch(string $Switch) Set Whether to enable forced HTTPS redirects. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getRedirectType() Obtain Access forced redirect types
http: forced HTTP redirect
https: forced HTTPS redirect
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRedirectType(string $RedirectType) Set Access forced redirect types
http: forced HTTP redirect
https: forced HTTPS redirect
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getRedirectStatusCode() Obtain Status code returned for forced redirect 
Supports 301, 302.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRedirectStatusCode(integer $RedirectStatusCode) Set Status code returned for forced redirect 
Supports 301, 302.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getCarryHeaders() Obtain Whether to return the newly added header during force redirection
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCarryHeaders(string $CarryHeaders) Set Whether to return the newly added header during force redirection
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class ForceRedirect extends AbstractModel
{
    /**
     * @var string Whether to enable forced HTTPS redirects. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Switch;

    /**
     * @var string Access forced redirect types
http: forced HTTP redirect
https: forced HTTPS redirect
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RedirectType;

    /**
     * @var integer Status code returned for forced redirect 
Supports 301, 302.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RedirectStatusCode;

    /**
     * @var string Whether to return the newly added header during force redirection
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CarryHeaders;

    /**
     * @param string $Switch Whether to enable forced HTTPS redirects. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $RedirectType Access forced redirect types
http: forced HTTP redirect
https: forced HTTPS redirect
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $RedirectStatusCode Status code returned for forced redirect 
Supports 301, 302.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $CarryHeaders Whether to return the newly added header during force redirection
Note: This field may return `null`, indicating that no valid value can be obtained.
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
