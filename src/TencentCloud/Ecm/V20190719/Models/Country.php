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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Country/Region information
 *
 * @method string getCountryId() Obtain Country/Region ID
 * @method void setCountryId(string $CountryId) Set Country/Region ID
 * @method string getCountryName() Obtain Country/Region name
 * @method void setCountryName(string $CountryName) Set Country/Region name
 */
class Country extends AbstractModel
{
    /**
     * @var string Country/Region ID
     */
    public $CountryId;

    /**
     * @var string Country/Region name
     */
    public $CountryName;

    /**
     * @param string $CountryId Country/Region ID
     * @param string $CountryName Country/Region name
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
        if (array_key_exists("CountryId",$param) and $param["CountryId"] !== null) {
            $this->CountryId = $param["CountryId"];
        }

        if (array_key_exists("CountryName",$param) and $param["CountryName"] !== null) {
            $this->CountryName = $param["CountryName"];
        }
    }
}
