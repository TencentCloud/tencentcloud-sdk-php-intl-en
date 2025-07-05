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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Request header and request URL access control
 *
 * @method string getSwitch() Obtain Whether to enable access control based on the request header and request URL. Values:
`on`: Enable
`off`: Disable
 * @method void setSwitch(string $Switch) Set Whether to enable access control based on the request header and request URL. Values:
`on`: Enable
`off`: Disable
 * @method array getAccessControlRules() Obtain Request header and request URL access rule
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAccessControlRules(array $AccessControlRules) Set Request header and request URL access rule
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getReturnCode() Obtain Returns status code
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setReturnCode(integer $ReturnCode) Set Returns status code
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class AccessControl extends AbstractModel
{
    /**
     * @var string Whether to enable access control based on the request header and request URL. Values:
`on`: Enable
`off`: Disable
     */
    public $Switch;

    /**
     * @var array Request header and request URL access rule
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $AccessControlRules;

    /**
     * @var integer Returns status code
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ReturnCode;

    /**
     * @param string $Switch Whether to enable access control based on the request header and request URL. Values:
`on`: Enable
`off`: Disable
     * @param array $AccessControlRules Request header and request URL access rule
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $ReturnCode Returns status code
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

        if (array_key_exists("AccessControlRules",$param) and $param["AccessControlRules"] !== null) {
            $this->AccessControlRules = [];
            foreach ($param["AccessControlRules"] as $key => $value){
                $obj = new AccessControlRule();
                $obj->deserialize($value);
                array_push($this->AccessControlRules, $obj);
            }
        }

        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }
    }
}
