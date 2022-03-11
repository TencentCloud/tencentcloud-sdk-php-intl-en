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
 * Location information of the instance.
 *
 * @method ZoneInfo getZoneInfo() Obtain Zone information of the instance.
 * @method void setZoneInfo(ZoneInfo $ZoneInfo) Set Zone information of the instance.
 * @method Country getCountry() Obtain Country/Region information of the instance.
 * @method void setCountry(Country $Country) Set Country/Region information of the instance.
 * @method Area getArea() Obtain Area information of the instance.
 * @method void setArea(Area $Area) Set Area information of the instance.
 * @method Province getProvince() Obtain Province/State information of the instance.
 * @method void setProvince(Province $Province) Set Province/State information of the instance.
 * @method City getCity() Obtain City information of the instance.
 * @method void setCity(City $City) Set City information of the instance.
 * @method RegionInfo getRegionInfo() Obtain Region information of the instance.
 * @method void setRegionInfo(RegionInfo $RegionInfo) Set Region information of the instance.
 */
class Position extends AbstractModel
{
    /**
     * @var ZoneInfo Zone information of the instance.
     */
    public $ZoneInfo;

    /**
     * @var Country Country/Region information of the instance.
     */
    public $Country;

    /**
     * @var Area Area information of the instance.
     */
    public $Area;

    /**
     * @var Province Province/State information of the instance.
     */
    public $Province;

    /**
     * @var City City information of the instance.
     */
    public $City;

    /**
     * @var RegionInfo Region information of the instance.
     */
    public $RegionInfo;

    /**
     * @param ZoneInfo $ZoneInfo Zone information of the instance.
     * @param Country $Country Country/Region information of the instance.
     * @param Area $Area Area information of the instance.
     * @param Province $Province Province/State information of the instance.
     * @param City $City City information of the instance.
     * @param RegionInfo $RegionInfo Region information of the instance.
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
        if (array_key_exists("ZoneInfo",$param) and $param["ZoneInfo"] !== null) {
            $this->ZoneInfo = new ZoneInfo();
            $this->ZoneInfo->deserialize($param["ZoneInfo"]);
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = new Country();
            $this->Country->deserialize($param["Country"]);
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = new Area();
            $this->Area->deserialize($param["Area"]);
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = new Province();
            $this->Province->deserialize($param["Province"]);
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = new City();
            $this->City->deserialize($param["City"]);
        }

        if (array_key_exists("RegionInfo",$param) and $param["RegionInfo"] !== null) {
            $this->RegionInfo = new RegionInfo();
            $this->RegionInfo->deserialize($param["RegionInfo"]);
        }
    }
}
