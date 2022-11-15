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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Element type of the `GetCountryCodes` API
 *
 * @method string getEnName() Obtain Country/region name in English
 * @method void setEnName(string $EnName) Set Country/region name in English
 * @method string getName() Obtain Country/region name in Chinese
 * @method void setName(string $Name) Set Country/region name in Chinese
 * @method string getIOS2() Obtain 
 * @method void setIOS2(string $IOS2) Set 
 * @method string getIOS3() Obtain 
 * @method void setIOS3(string $IOS3) Set 
 * @method string getCode() Obtain International dialing code
 * @method void setCode(string $Code) Set International dialing code
 */
class CountryCodeItem extends AbstractModel
{
    /**
     * @var string Country/region name in English
     */
    public $EnName;

    /**
     * @var string Country/region name in Chinese
     */
    public $Name;

    /**
     * @var string 
     */
    public $IOS2;

    /**
     * @var string 
     */
    public $IOS3;

    /**
     * @var string International dialing code
     */
    public $Code;

    /**
     * @param string $EnName Country/region name in English
     * @param string $Name Country/region name in Chinese
     * @param string $IOS2 
     * @param string $IOS3 
     * @param string $Code International dialing code
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
        if (array_key_exists("EnName",$param) and $param["EnName"] !== null) {
            $this->EnName = $param["EnName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IOS2",$param) and $param["IOS2"] !== null) {
            $this->IOS2 = $param["IOS2"];
        }

        if (array_key_exists("IOS3",$param) and $param["IOS3"] !== null) {
            $this->IOS3 = $param["IOS3"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }
    }
}
