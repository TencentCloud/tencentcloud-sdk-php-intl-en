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
 * Node information
 *
 * @method ZoneInfo getZoneInfo() Obtain Zone information.
 * @method void setZoneInfo(ZoneInfo $ZoneInfo) Set Zone information.
 * @method Country getCountry() Obtain Country/Region information.
 * @method void setCountry(Country $Country) Set Country/Region information.
 * @method Area getArea() Obtain Region information.
 * @method void setArea(Area $Area) Set Region information.
 * @method Province getProvince() Obtain Province/State information.
 * @method void setProvince(Province $Province) Set Province/State information.
 * @method City getCity() Obtain City information.
 * @method void setCity(City $City) Set City information.
 * @method RegionInfo getRegionInfo() Obtain Region information.
 * @method void setRegionInfo(RegionInfo $RegionInfo) Set Region information.
 * @method array getISPSet() Obtain List of ISPs.
 * @method void setISPSet(array $ISPSet) Set List of ISPs.
 * @method integer getISPNum() Obtain Number of ISPs.
 * @method void setISPNum(integer $ISPNum) Set Number of ISPs.
 */
class Node extends AbstractModel
{
    /**
     * @var ZoneInfo Zone information.
     */
    public $ZoneInfo;

    /**
     * @var Country Country/Region information.
     */
    public $Country;

    /**
     * @var Area Region information.
     */
    public $Area;

    /**
     * @var Province Province/State information.
     */
    public $Province;

    /**
     * @var City City information.
     */
    public $City;

    /**
     * @var RegionInfo Region information.
     */
    public $RegionInfo;

    /**
     * @var array List of ISPs.
     */
    public $ISPSet;

    /**
     * @var integer Number of ISPs.
     */
    public $ISPNum;

    /**
     * @param ZoneInfo $ZoneInfo Zone information.
     * @param Country $Country Country/Region information.
     * @param Area $Area Region information.
     * @param Province $Province Province/State information.
     * @param City $City City information.
     * @param RegionInfo $RegionInfo Region information.
     * @param array $ISPSet List of ISPs.
     * @param integer $ISPNum Number of ISPs.
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

        if (array_key_exists("ISPSet",$param) and $param["ISPSet"] !== null) {
            $this->ISPSet = [];
            foreach ($param["ISPSet"] as $key => $value){
                $obj = new ISP();
                $obj->deserialize($value);
                array_push($this->ISPSet, $obj);
            }
        }

        if (array_key_exists("ISPNum",$param) and $param["ISPNum"] !== null) {
            $this->ISPNum = $param["ISPNum"];
        }
    }
}
