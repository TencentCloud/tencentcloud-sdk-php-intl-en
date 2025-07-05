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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Region information
 *
 * @method string getRegionName() Obtain Region name
 * @method void setRegionName(string $RegionName) Set Region name
 * @method array getZoneSet() Obtain AZ information
 * @method void setZoneSet(array $ZoneSet) Set AZ information
 */
class RegionSet extends AbstractModel
{
    /**
     * @var string Region name
     */
    public $RegionName;

    /**
     * @var array AZ information
     */
    public $ZoneSet;

    /**
     * @param string $RegionName Region name
     * @param array $ZoneSet AZ information
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
        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("ZoneSet",$param) and $param["ZoneSet"] !== null) {
            $this->ZoneSet = [];
            foreach ($param["ZoneSet"] as $key => $value){
                $obj = new ZoneInfo();
                $obj->deserialize($value);
                array_push($this->ZoneSet, $obj);
            }
        }
    }
}
