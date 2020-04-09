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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Region information
 *
 * @method string getRegion() Obtain Region ID in the format of ap-guangzhou
 * @method void setRegion(string $Region) Set Region ID in the format of ap-guangzhou
 * @method string getRegionName() Obtain Region name
 * @method void setRegionName(string $RegionName) Set Region name
 * @method integer getRegionId() Obtain Numeric ID of region
 * @method void setRegionId(integer $RegionId) Set Numeric ID of region
 * @method string getRegionState() Obtain Current purchasability of this region. UNAVAILABLE: not purchasable, AVAILABLE: purchasable
 * @method void setRegionState(string $RegionState) Set Current purchasability of this region. UNAVAILABLE: not purchasable, AVAILABLE: purchasable
 */
class RegionInfo extends AbstractModel
{
    /**
     * @var string Region ID in the format of ap-guangzhou
     */
    public $Region;

    /**
     * @var string Region name
     */
    public $RegionName;

    /**
     * @var integer Numeric ID of region
     */
    public $RegionId;

    /**
     * @var string Current purchasability of this region. UNAVAILABLE: not purchasable, AVAILABLE: purchasable
     */
    public $RegionState;

    /**
     * @param string $Region Region ID in the format of ap-guangzhou
     * @param string $RegionName Region name
     * @param integer $RegionId Numeric ID of region
     * @param string $RegionState Current purchasability of this region. UNAVAILABLE: not purchasable, AVAILABLE: purchasable
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

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionState",$param) and $param["RegionState"] !== null) {
            $this->RegionState = $param["RegionState"];
        }
    }
}
