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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Purchasable specification details in an AZ in a region.
 *
 * @method string getRegion() Obtain Region abbreviation, which corresponds to the `Region` field of `RegionSet`
 * @method void setRegion(string $Region) Set Region abbreviation, which corresponds to the `Region` field of `RegionSet`
 * @method string getZone() Obtain AZ abbreviate, which corresponds to the `Zone` field of `ZoneSet`
 * @method void setZone(string $Zone) Set AZ abbreviate, which corresponds to the `Zone` field of `ZoneSet`
 * @method array getSpecItemInfoList() Obtain Specification details list
 * @method void setSpecItemInfoList(array $SpecItemInfoList) Set Specification details list
 * @method array getSupportKMSRegions() Obtain Regions where KMS is supported
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setSupportKMSRegions(array $SupportKMSRegions) Set Regions where KMS is supported
Note: This field may return `null`, indicating that no valid value was found.
 */
class SpecInfo extends AbstractModel
{
    /**
     * @var string Region abbreviation, which corresponds to the `Region` field of `RegionSet`
     */
    public $Region;

    /**
     * @var string AZ abbreviate, which corresponds to the `Zone` field of `ZoneSet`
     */
    public $Zone;

    /**
     * @var array Specification details list
     */
    public $SpecItemInfoList;

    /**
     * @var array Regions where KMS is supported
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $SupportKMSRegions;

    /**
     * @param string $Region Region abbreviation, which corresponds to the `Region` field of `RegionSet`
     * @param string $Zone AZ abbreviate, which corresponds to the `Zone` field of `ZoneSet`
     * @param array $SpecItemInfoList Specification details list
     * @param array $SupportKMSRegions Regions where KMS is supported
Note: This field may return `null`, indicating that no valid value was found.
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SpecItemInfoList",$param) and $param["SpecItemInfoList"] !== null) {
            $this->SpecItemInfoList = [];
            foreach ($param["SpecItemInfoList"] as $key => $value){
                $obj = new SpecItemInfo();
                $obj->deserialize($value);
                array_push($this->SpecItemInfoList, $obj);
            }
        }

        if (array_key_exists("SupportKMSRegions",$param) and $param["SupportKMSRegions"] !== null) {
            $this->SupportKMSRegions = $param["SupportKMSRegions"];
        }
    }
}
