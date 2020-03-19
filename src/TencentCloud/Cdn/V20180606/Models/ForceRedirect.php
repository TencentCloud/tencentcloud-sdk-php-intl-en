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
 * @method string getSwitch() Obtain Access forced redirect configuration switch
on: enabled
off: disabled
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSwitch(string $Switch) Set Access forced redirect configuration switch
on: enabled
off: disabled
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRedirectType() Obtain Access forced redirect types
http: forced HTTP redirect
https: forced HTTPS redirect
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRedirectType(string $RedirectType) Set Access forced redirect types
http: forced HTTP redirect
https: forced HTTPS redirect
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getRedirectStatusCode() Obtain Status code returned for forced redirect 
Supports 301, 302.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRedirectStatusCode(integer $RedirectStatusCode) Set Status code returned for forced redirect 
Supports 301, 302.
Note: this field may return null, indicating that no valid values can be obtained.
 */

/**
 *Access protocol forced redirect configuration. This is disabled by default.
 */
class ForceRedirect extends AbstractModel
{
    /**
     * @var string Access forced redirect configuration switch
on: enabled
off: disabled
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Switch;

    /**
     * @var string Access forced redirect types
http: forced HTTP redirect
https: forced HTTPS redirect
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RedirectType;

    /**
     * @var integer Status code returned for forced redirect 
Supports 301, 302.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RedirectStatusCode;
    /**
     * @param string $Switch Access forced redirect configuration switch
on: enabled
off: disabled
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RedirectType Access forced redirect types
http: forced HTTP redirect
https: forced HTTPS redirect
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $RedirectStatusCode Status code returned for forced redirect 
Supports 301, 302.
Note: this field may return null, indicating that no valid values can be obtained.
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
    }
}
