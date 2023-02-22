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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of a purchasable region
 *
 * @method string getRegion() Obtain Region name
 * @method void setRegion(string $Region) Set Region name
 * @method integer getRegionId() Obtain Numeric ID of a region
 * @method void setRegionId(integer $RegionId) Set Numeric ID of a region
 * @method string getRegionZh() Obtain Region name
 * @method void setRegionZh(string $RegionZh) Set Region name
 * @method array getZoneSet() Obtain List of purchasable AZs
 * @method void setZoneSet(array $ZoneSet) Set List of purchasable AZs
 * @method string getDbType() Obtain Engine type
 * @method void setDbType(string $DbType) Set Engine type
 * @method array getModules() Obtain Supported modules in a region
 * @method void setModules(array $Modules) Set Supported modules in a region
 */
class SaleRegion extends AbstractModel
{
    /**
     * @var string Region name
     */
    public $Region;

    /**
     * @var integer Numeric ID of a region
     */
    public $RegionId;

    /**
     * @var string Region name
     */
    public $RegionZh;

    /**
     * @var array List of purchasable AZs
     */
    public $ZoneSet;

    /**
     * @var string Engine type
     */
    public $DbType;

    /**
     * @var array Supported modules in a region
     */
    public $Modules;

    /**
     * @param string $Region Region name
     * @param integer $RegionId Numeric ID of a region
     * @param string $RegionZh Region name
     * @param array $ZoneSet List of purchasable AZs
     * @param string $DbType Engine type
     * @param array $Modules Supported modules in a region
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
