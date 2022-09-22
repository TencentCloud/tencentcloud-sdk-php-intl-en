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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The purchasable specifications in a region
 *
 * @method array getConfigs() Obtain List of purchasable specifications
 * @method void setConfigs(array $Configs) Set List of purchasable specifications
 * @method array getRegions() Obtain List of AZs in purchasable regions
 * @method void setRegions(array $Regions) Set List of AZs in purchasable regions
 */
class CdbZoneDataResult extends AbstractModel
{
    /**
     * @var array List of purchasable specifications
     */
    public $Configs;

    /**
     * @var array List of AZs in purchasable regions
     */
    public $Regions;

    /**
     * @param array $Configs List of purchasable specifications
     * @param array $Regions List of AZs in purchasable regions
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
        if (array_key_exists("Configs",$param) and $param["Configs"] !== null) {
            $this->Configs = [];
            foreach ($param["Configs"] as $key => $value){
                $obj = new CdbSellConfig();
                $obj->deserialize($value);
                array_push($this->Configs, $obj);
            }
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = [];
            foreach ($param["Regions"] as $key => $value){
                $obj = new CdbRegionSellConf();
                $obj->deserialize($value);
                array_push($this->Regions, $obj);
            }
        }
    }
}
