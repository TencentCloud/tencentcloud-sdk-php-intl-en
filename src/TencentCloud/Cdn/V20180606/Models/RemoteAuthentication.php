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
 * Configuration of remote authentication rules. Setting up multiple rules is supported.
`RemoteAuthenticationRules` and `Server` cannot be configured at the same time.
If only `Server` is configured, all parameters of `RemoteAuthenticationRules` will be set to the default values. The default values are described in each configuration parameter.
 *
 * @method string getSwitch() Obtain Whether to enable remote authentication. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSwitch(string $Switch) Set Whether to enable remote authentication. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getRemoteAuthenticationRules() Obtain Remote authentication rule configuration
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRemoteAuthenticationRules(array $RemoteAuthenticationRules) Set Remote authentication rule configuration
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getServer() Obtain Remote authentication server
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setServer(string $Server) Set Remote authentication server
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class RemoteAuthentication extends AbstractModel
{
    /**
     * @var string Whether to enable remote authentication. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Switch;

    /**
     * @var array Remote authentication rule configuration
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $RemoteAuthenticationRules;

    /**
     * @var string Remote authentication server
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Server;

    /**
     * @param string $Switch Whether to enable remote authentication. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $RemoteAuthenticationRules Remote authentication rule configuration
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Server Remote authentication server
Note: this field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("RemoteAuthenticationRules",$param) and $param["RemoteAuthenticationRules"] !== null) {
            $this->RemoteAuthenticationRules = [];
            foreach ($param["RemoteAuthenticationRules"] as $key => $value){
                $obj = new RemoteAuthenticationRule();
                $obj->deserialize($value);
                array_push($this->RemoteAuthenticationRules, $obj);
            }
        }

        if (array_key_exists("Server",$param) and $param["Server"] !== null) {
            $this->Server = $param["Server"];
        }
    }
}
