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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Region.
 *
 * @method string getRegion() Obtain Region code.
 * @method void setRegion(string $Region) Set Region code.
 * @method integer getRegionId() Obtain Region ID.
 * @method void setRegionId(integer $RegionId) Set Region ID.
 * @method string getArea() Obtain Area where the region is located.
 * @method void setArea(string $Area) Set Area where the region is located.
 * @method string getRegionName() Obtain Region name.
 * @method void setRegionName(string $RegionName) Set Region name.
 * @method integer getRegionState() Obtain Region state.
 * @method void setRegionState(integer $RegionState) Set Region state.
 * @method string getRegionShortName() Obtain Region abbreviation.
 * @method void setRegionShortName(string $RegionShortName) Set Region abbreviation.
 * @method string getCreatedAt() Obtain Create time.
 * @method void setCreatedAt(string $CreatedAt) Set Create time.
 * @method string getUpdatedAt() Obtain Update time.
 * @method void setUpdatedAt(string $UpdatedAt) Set Update time.
 */
class RegionDetail extends AbstractModel
{
    /**
     * @var string Region code.
     */
    public $Region;

    /**
     * @var integer Region ID.
     */
    public $RegionId;

    /**
     * @var string Area where the region is located.
     */
    public $Area;

    /**
     * @var string Region name.
     */
    public $RegionName;

    /**
     * @var integer Region state.
     */
    public $RegionState;

    /**
     * @var string Region abbreviation.
     */
    public $RegionShortName;

    /**
     * @var string Create time.
     */
    public $CreatedAt;

    /**
     * @var string Update time.
     */
    public $UpdatedAt;

    /**
     * @param string $Region Region code.
     * @param integer $RegionId Region ID.
     * @param string $Area Area where the region is located.
     * @param string $RegionName Region name.
     * @param integer $RegionState Region state.
     * @param string $RegionShortName Region abbreviation.
     * @param string $CreatedAt Create time.
     * @param string $UpdatedAt Update time.
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

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionState",$param) and $param["RegionState"] !== null) {
            $this->RegionState = $param["RegionState"];
        }

        if (array_key_exists("RegionShortName",$param) and $param["RegionShortName"] !== null) {
            $this->RegionShortName = $param["RegionShortName"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
