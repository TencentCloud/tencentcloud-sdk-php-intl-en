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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sales region information
 *
 * @method string getRegion() Obtain English name of the region
 * @method void setRegion(string $Region) Set English name of the region
 * @method integer getRegionId() Obtain Region numeric ID.
 * @method void setRegionId(integer $RegionId) Set Region numeric ID.
 * @method string getRegionZh() Obtain Region Name in Chinese
 * @method void setRegionZh(string $RegionZh) Set Region Name in Chinese
 * @method array getZoneSet() Obtain List of available saleable zones
 * @method void setZoneSet(array $ZoneSet) Set List of available saleable zones
 * @method string getDbType() Obtain Engine type.
 * @method void setDbType(string $DbType) Set Engine type.
 * @method array getModules() Obtain Region module support status
 * @method void setModules(array $Modules) Set Region module support status
 */
class SaleRegion extends AbstractModel
{
    /**
     * @var string English name of the region
     */
    public $Region;

    /**
     * @var integer Region numeric ID.
     */
    public $RegionId;

    /**
     * @var string Region Name in Chinese
     */
    public $RegionZh;

    /**
     * @var array List of available saleable zones
     */
    public $ZoneSet;

    /**
     * @var string Engine type.
     */
    public $DbType;

    /**
     * @var array Region module support status
     */
    public $Modules;

    /**
     * @param string $Region English name of the region
     * @param integer $RegionId Region numeric ID.
     * @param string $RegionZh Region Name in Chinese
     * @param array $ZoneSet List of available saleable zones
     * @param string $DbType Engine type.
     * @param array $Modules Region module support status
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionZh",$param) and $param["RegionZh"] !== null) {
            $this->RegionZh = $param["RegionZh"];
        }

        if (array_key_exists("ZoneSet",$param) and $param["ZoneSet"] !== null) {
            $this->ZoneSet = [];
            foreach ($param["ZoneSet"] as $key => $value){
                $obj = new SaleZone();
                $obj->deserialize($value);
                array_push($this->ZoneSet, $obj);
            }
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("Modules",$param) and $param["Modules"] !== null) {
            $this->Modules = [];
            foreach ($param["Modules"] as $key => $value){
                $obj = new Module();
                $obj->deserialize($value);
                array_push($this->Modules, $obj);
            }
        }
    }
}
