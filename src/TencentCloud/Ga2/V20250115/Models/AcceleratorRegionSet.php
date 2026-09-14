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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Acceleration region info
 *
 * @method string getName() Obtain <p>Chinese Name of Region.</p>
 * @method void setName(string $Name) Set <p>Chinese Name of Region.</p>
 * @method integer getIsAvailable() Obtain <p>Whether available; 0: unavailable, 1: available.</p>
 * @method void setIsAvailable(integer $IsAvailable) Set <p>Whether available; 0: unavailable, 1: available.</p>
 * @method string getRegion() Obtain <p>Regional information.</p>
 * @method void setRegion(string $Region) Set <p>Regional information.</p>
 * @method string getAreaName() Obtain <p>Zone name.</p>
 * @method void setAreaName(string $AreaName) Set <p>Zone name.</p>
 * @method integer getIsChinaMainland() Obtain <p>Whether it is a China region.</p>
 * @method void setIsChinaMainland(integer $IsChinaMainland) Set <p>Whether it is a China region.</p>
 * @method array getSupportIspType() Obtain <p>Support the IspType type.</p>
 * @method void setSupportIspType(array $SupportIspType) Set <p>Support the IspType type.</p>
 * @method integer getIsTencentRegion() Obtain <p>Whether it is a Tencent region.</p>
 * @method void setIsTencentRegion(integer $IsTencentRegion) Set <p>Whether it is a Tencent region.</p>
 */
class AcceleratorRegionSet extends AbstractModel
{
    /**
     * @var string <p>Chinese Name of Region.</p>
     */
    public $Name;

    /**
     * @var integer <p>Whether available; 0: unavailable, 1: available.</p>
     */
    public $IsAvailable;

    /**
     * @var string <p>Regional information.</p>
     */
    public $Region;

    /**
     * @var string <p>Zone name.</p>
     */
    public $AreaName;

    /**
     * @var integer <p>Whether it is a China region.</p>
     */
    public $IsChinaMainland;

    /**
     * @var array <p>Support the IspType type.</p>
     */
    public $SupportIspType;

    /**
     * @var integer <p>Whether it is a Tencent region.</p>
     */
    public $IsTencentRegion;

    /**
     * @param string $Name <p>Chinese Name of Region.</p>
     * @param integer $IsAvailable <p>Whether available; 0: unavailable, 1: available.</p>
     * @param string $Region <p>Regional information.</p>
     * @param string $AreaName <p>Zone name.</p>
     * @param integer $IsChinaMainland <p>Whether it is a China region.</p>
     * @param array $SupportIspType <p>Support the IspType type.</p>
     * @param integer $IsTencentRegion <p>Whether it is a Tencent region.</p>
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

        if (array_key_exists("IsAvailable",$param) and $param["IsAvailable"] !== null) {
            $this->IsAvailable = $param["IsAvailable"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AreaName",$param) and $param["AreaName"] !== null) {
            $this->AreaName = $param["AreaName"];
        }

        if (array_key_exists("IsChinaMainland",$param) and $param["IsChinaMainland"] !== null) {
            $this->IsChinaMainland = $param["IsChinaMainland"];
        }

        if (array_key_exists("SupportIspType",$param) and $param["SupportIspType"] !== null) {
            $this->SupportIspType = $param["SupportIspType"];
        }

        if (array_key_exists("IsTencentRegion",$param) and $param["IsTencentRegion"] !== null) {
            $this->IsTencentRegion = $param["IsTencentRegion"];
        }
    }
}
