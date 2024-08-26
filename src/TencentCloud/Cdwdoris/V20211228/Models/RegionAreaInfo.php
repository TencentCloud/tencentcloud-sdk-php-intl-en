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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Description of the region categories for availability zones
 *
 * @method string getName() Obtain Region category information, such as south_china, east_china, etc.
 * @method void setName(string $Name) Set Region category information, such as south_china, east_china, etc.
 * @method string getDesc() Obtain Description of the corresponding Name, such as South China, East China, etc.
 * @method void setDesc(string $Desc) Set Description of the corresponding Name, such as South China, East China, etc.
 * @method array getRegions() Obtain Specific region list 1
 * @method void setRegions(array $Regions) Set Specific region list 1
 */
class RegionAreaInfo extends AbstractModel
{
    /**
     * @var string Region category information, such as south_china, east_china, etc.
     */
    public $Name;

    /**
     * @var string Description of the corresponding Name, such as South China, East China, etc.
     */
    public $Desc;

    /**
     * @var array Specific region list 1
     */
    public $Regions;

    /**
     * @param string $Name Region category information, such as south_china, east_china, etc.
     * @param string $Desc Description of the corresponding Name, such as South China, East China, etc.
     * @param array $Regions Specific region list 1
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = [];
            foreach ($param["Regions"] as $key => $value){
                $obj = new RegionInfo();
                $obj->deserialize($value);
                array_push($this->Regions, $obj);
            }
        }
    }
}
