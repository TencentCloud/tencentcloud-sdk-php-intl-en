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
namespace TencentCloud\Ip\V20210409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Get an element type of the country code interface
 *
 * @method string getEnName() Obtain Country English Name
 * @method void setEnName(string $EnName) Set Country English Name
 * @method string getName() Obtain Country Chinese Name
 * @method void setName(string $Name) Set Country Chinese Name
 * @method string getIOS2() Obtain IOS2 standard country/region code
 * @method void setIOS2(string $IOS2) Set IOS2 standard country/region code
 * @method string getIOS3() Obtain IOS3 standard country/region code
 * @method void setIOS3(string $IOS3) Set IOS3 standard country/region code
 * @method string getCode() Obtain Phone Code
 * @method void setCode(string $Code) Set Phone Code
 */
class CountryCodeItem extends AbstractModel
{
    /**
     * @var string Country English Name
     */
    public $EnName;

    /**
     * @var string Country Chinese Name
     */
    public $Name;

    /**
     * @var string IOS2 standard country/region code
     */
    public $IOS2;

    /**
     * @var string IOS3 standard country/region code
     */
    public $IOS3;

    /**
     * @var string Phone Code
     */
    public $Code;

    /**
     * @param string $EnName Country English Name
     * @param string $Name Country Chinese Name
     * @param string $IOS2 IOS2 standard country/region code
     * @param string $IOS3 IOS3 standard country/region code
     * @param string $Code Phone Code
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
