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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Region information
 *
 * @method string getCountry() Obtain Country. Except for support for the specific country identifiers, it also supports domestic and foreign identifiers.
 * @method void setCountry(string $Country) Set Country. Except for support for the specific country identifiers, it also supports domestic and foreign identifiers.
 * @method string getRegion() Obtain Province
 * @method void setRegion(string $Region) Set Province
 * @method string getCity() Obtain City
 * @method void setCity(string $City) Set City
 */
class Area extends AbstractModel
{
    /**
     * @var string Country. Except for support for the specific country identifiers, it also supports domestic and foreign identifiers.
     */
    public $Country;

    /**
     * @var string Province
     */
    public $Region;

    /**
     * @var string City
     */
    public $City;

    /**
     * @param string $Country Country. Except for support for the specific country identifiers, it also supports domestic and foreign identifiers.
     * @param string $Region Province
     * @param string $City City
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
        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }
    }
}
