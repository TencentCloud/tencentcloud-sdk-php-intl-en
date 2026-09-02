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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Asset type and number of asset types with existing risks
 *
 * @method integer getAssetTypeCount() Obtain <p>Asset type count</p>
 * @method void setAssetTypeCount(integer $AssetTypeCount) Set <p>Asset type count</p>
 * @method integer getRiskAssetTypeCount() Obtain <p>Number of asset types with existing risks</p>
 * @method void setRiskAssetTypeCount(integer $RiskAssetTypeCount) Set <p>Number of asset types with existing risks</p>
 */
class AssetTypeStatisticsInfo extends AbstractModel
{
    /**
     * @var integer <p>Asset type count</p>
     */
    public $AssetTypeCount;

    /**
     * @var integer <p>Number of asset types with existing risks</p>
     */
    public $RiskAssetTypeCount;

    /**
     * @param integer $AssetTypeCount <p>Asset type count</p>
     * @param integer $RiskAssetTypeCount <p>Number of asset types with existing risks</p>
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
        if (array_key_exists("AssetTypeCount",$param) and $param["AssetTypeCount"] !== null) {
            $this->AssetTypeCount = $param["AssetTypeCount"];
        }

        if (array_key_exists("RiskAssetTypeCount",$param) and $param["RiskAssetTypeCount"] !== null) {
            $this->RiskAssetTypeCount = $param["RiskAssetTypeCount"];
        }
    }
}
