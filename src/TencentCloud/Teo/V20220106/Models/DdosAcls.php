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
 * DDoS port filtering
 *
 * @method string getSwitch() Obtain Whether to remove all settings when empty strings are passed in. Default value: `off` (remove)
 * @method void setSwitch(string $Switch) Set Whether to remove all settings when empty strings are passed in. Default value: `off` (remove)
 * @method array getAcl() Obtain DDoS port filtering parameters
 * @method void setAcl(array $Acl) Set DDoS port filtering parameters
 */
class DdosAcls extends AbstractModel
{
    /**
     * @var string Whether to remove all settings when empty strings are passed in. Default value: `off` (remove)
     */
    public $Switch;

    /**
     * @var array DDoS port filtering parameters
     */
    public $Acl;

    /**
     * @param string $Switch Whether to remove all settings when empty strings are passed in. Default value: `off` (remove)
     * @param array $Acl DDoS port filtering parameters
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

        if (array_key_exists("Acl",$param) and $param["Acl"] !== null) {
            $this->Acl = [];
            foreach ($param["Acl"] as $key => $value){
                $obj = new DDoSAcl();
                $obj->deserialize($value);
                array_push($this->Acl, $obj);
            }
        }
    }
}
