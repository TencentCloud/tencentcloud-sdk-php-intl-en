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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Frequently used log-in location
 *
 * @method integer getId() Obtain ID
 * @method void setId(integer $Id) Set ID
 * @method string getUuid() Obtain CWPP client UUID
 * @method void setUuid(string $Uuid) Set CWPP client UUID
 * @method integer getCountryId() Obtain Country ID
 * @method void setCountryId(integer $CountryId) Set Country ID
 * @method integer getProvinceId() Obtain Province ID
 * @method void setProvinceId(integer $ProvinceId) Set Province ID
 * @method integer getCityId() Obtain City ID
 * @method void setCityId(integer $CityId) Set City ID
 */
class UsualPlace extends AbstractModel
{
    /**
     * @var integer ID
     */
    public $Id;

    /**
     * @var string CWPP client UUID
     */
    public $Uuid;

    /**
     * @var integer Country ID
     */
    public $CountryId;

    /**
     * @var integer Province ID
     */
    public $ProvinceId;

    /**
     * @var integer City ID
     */
    public $CityId;

    /**
     * @param integer $Id ID
     * @param string $Uuid CWPP client UUID
     * @param integer $CountryId Country ID
     * @param integer $ProvinceId Province ID
     * @param integer $CityId City ID
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("CountryId",$param) and $param["CountryId"] !== null) {
            $this->CountryId = $param["CountryId"];
        }

        if (array_key_exists("ProvinceId",$param) and $param["ProvinceId"] !== null) {
            $this->ProvinceId = $param["ProvinceId"];
        }

        if (array_key_exists("CityId",$param) and $param["CityId"] !== null) {
            $this->CityId = $param["CityId"];
        }
    }
}
