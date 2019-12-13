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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getRegionId() 获取Region ID
 * @method void setRegionId(string $RegionId) 设置Region ID
 * @method string getRegionName() 获取Region name
 * @method void setRegionName(string $RegionName) 设置Region name
 * @method string getRegionShortName() 获取Region abbreviation
 * @method void setRegionShortName(string $RegionShortName) 设置Region abbreviation
 * @method string getArea() 获取Name of the area where a region is located
 * @method void setArea(string $Area) 设置Name of the area where a region is located
 * @method array getZoneSet() 获取AZ information
 * @method void setZoneSet(array $ZoneSet) 设置AZ information
 */

/**
 *Region information
 */
class RegionConf extends AbstractModel
{
    /**
     * @var string Region ID
     */
    public $RegionId;

    /**
     * @var string Region name
     */
    public $RegionName;

    /**
     * @var string Region abbreviation
     */
    public $RegionShortName;

    /**
     * @var string Name of the area where a region is located
     */
    public $Area;

    /**
     * @var array AZ information
     */
    public $ZoneSet;
    /**
     * @param string $RegionId Region ID
     * @param string $RegionName Region name
     * @param string $RegionShortName Region abbreviation
     * @param string $Area Name of the area where a region is located
     * @param array $ZoneSet AZ information
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionShortName",$param) and $param["RegionShortName"] !== null) {
            $this->RegionShortName = $param["RegionShortName"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("ZoneSet",$param) and $param["ZoneSet"] !== null) {
            $this->ZoneSet = [];
            foreach ($param["ZoneSet"] as $key => $value){
                $obj = new ZoneCapacityConf();
                $obj->deserialize($value);
                array_push($this->ZoneSet, $obj);
            }
        }
    }
}
