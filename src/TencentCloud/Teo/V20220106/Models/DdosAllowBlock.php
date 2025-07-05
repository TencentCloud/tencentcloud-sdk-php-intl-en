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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS blocklist/allowlist
 *
 * @method string getSwitch() Obtain Whether to remove all settings when empty strings are passed in. Default value: `off` (remove)
 * @method void setSwitch(string $Switch) Set Whether to remove all settings when empty strings are passed in. Default value: `off` (remove)
 * @method array getUserAllowBlockIp() Obtain Array of objects in blocklist/allowlist configuration
 * @method void setUserAllowBlockIp(array $UserAllowBlockIp) Set Array of objects in blocklist/allowlist configuration
 */
class DdosAllowBlock extends AbstractModel
{
    /**
     * @var string Whether to remove all settings when empty strings are passed in. Default value: `off` (remove)
     */
    public $Switch;

    /**
     * @var array Array of objects in blocklist/allowlist configuration
     */
    public $UserAllowBlockIp;

    /**
     * @param string $Switch Whether to remove all settings when empty strings are passed in. Default value: `off` (remove)
     * @param array $UserAllowBlockIp Array of objects in blocklist/allowlist configuration
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

        if (array_key_exists("UserAllowBlockIp",$param) and $param["UserAllowBlockIp"] !== null) {
            $this->UserAllowBlockIp = [];
            foreach ($param["UserAllowBlockIp"] as $key => $value){
                $obj = new DDoSUserAllowBlockIP();
                $obj->deserialize($value);
                array_push($this->UserAllowBlockIp, $obj);
            }
        }
    }
}
