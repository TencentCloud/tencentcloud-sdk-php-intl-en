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
 * Cloud resource configuration risk statistical information
 *
 * @method integer getTotalRiskCount() Obtain <p>Total number of risks</p>
 * @method void setTotalRiskCount(integer $TotalRiskCount) Set <p>Total number of risks</p>
 * @method integer getRiskAddCount() Obtain <p>Number of newly-added risks in the past 7 days</p>
 * @method void setRiskAddCount(integer $RiskAddCount) Set <p>Number of newly-added risks in the past 7 days</p>
 * @method integer getCheckViewCount() Obtain <p>All cloud resource configuration risk items to be fixed</p>
 * @method void setCheckViewCount(integer $CheckViewCount) Set <p>All cloud resource configuration risk items to be fixed</p>
 * @method integer getHighPriorityRiskCount() Obtain <p>High priority risk to be fixed</p>
 * @method void setHighPriorityRiskCount(integer $HighPriorityRiskCount) Set <p>High priority risk to be fixed</p>
 * @method integer getCheckViewAddCount() Obtain <p>Newly-added pending repair items in the last 7 days</p>
 * @method void setCheckViewAddCount(integer $CheckViewAddCount) Set <p>Newly-added pending repair items in the last 7 days</p>
 * @method integer getHighPriorityCheckViewCount() Obtain <p>All cloud resource configuration risk items to be fixed, with high priority first</p>
 * @method void setHighPriorityCheckViewCount(integer $HighPriorityCheckViewCount) Set <p>All cloud resource configuration risk items to be fixed, with high priority first</p>
 * @method integer getAssetViewCount() Obtain <p>Display quantity from the asset perspective</p>
 * @method void setAssetViewCount(integer $AssetViewCount) Set <p>Display quantity from the asset perspective</p>
 * @method integer getAssetViewAddCount() Obtain <p>Number of newly-added assets to be fixed in the last 7 days</p>
 * @method void setAssetViewAddCount(integer $AssetViewAddCount) Set <p>Number of newly-added assets to be fixed in the last 7 days</p>
 * @method integer getHighPriorityAssetViewCount() Obtain <p>Display quantity from asset perspective, number of high-priority fixes</p>
 * @method void setHighPriorityAssetViewCount(integer $HighPriorityAssetViewCount) Set <p>Display quantity from asset perspective, number of high-priority fixes</p>
 */
class CFGRiskStatisticsItem extends AbstractModel
{
    /**
     * @var integer <p>Total number of risks</p>
     */
    public $TotalRiskCount;

    /**
     * @var integer <p>Number of newly-added risks in the past 7 days</p>
     */
    public $RiskAddCount;

    /**
     * @var integer <p>All cloud resource configuration risk items to be fixed</p>
     */
    public $CheckViewCount;

    /**
     * @var integer <p>High priority risk to be fixed</p>
     */
    public $HighPriorityRiskCount;

    /**
     * @var integer <p>Newly-added pending repair items in the last 7 days</p>
     */
    public $CheckViewAddCount;

    /**
     * @var integer <p>All cloud resource configuration risk items to be fixed, with high priority first</p>
     */
    public $HighPriorityCheckViewCount;

    /**
     * @var integer <p>Display quantity from the asset perspective</p>
     */
    public $AssetViewCount;

    /**
     * @var integer <p>Number of newly-added assets to be fixed in the last 7 days</p>
     */
    public $AssetViewAddCount;

    /**
     * @var integer <p>Display quantity from asset perspective, number of high-priority fixes</p>
     */
    public $HighPriorityAssetViewCount;

    /**
     * @param integer $TotalRiskCount <p>Total number of risks</p>
     * @param integer $RiskAddCount <p>Number of newly-added risks in the past 7 days</p>
     * @param integer $CheckViewCount <p>All cloud resource configuration risk items to be fixed</p>
     * @param integer $HighPriorityRiskCount <p>High priority risk to be fixed</p>
     * @param integer $CheckViewAddCount <p>Newly-added pending repair items in the last 7 days</p>
     * @param integer $HighPriorityCheckViewCount <p>All cloud resource configuration risk items to be fixed, with high priority first</p>
     * @param integer $AssetViewCount <p>Display quantity from the asset perspective</p>
     * @param integer $AssetViewAddCount <p>Number of newly-added assets to be fixed in the last 7 days</p>
     * @param integer $HighPriorityAssetViewCount <p>Display quantity from asset perspective, number of high-priority fixes</p>
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
        if (array_key_exists("TotalRiskCount",$param) and $param["TotalRiskCount"] !== null) {
            $this->TotalRiskCount = $param["TotalRiskCount"];
        }

        if (array_key_exists("RiskAddCount",$param) and $param["RiskAddCount"] !== null) {
            $this->RiskAddCount = $param["RiskAddCount"];
        }

        if (array_key_exists("CheckViewCount",$param) and $param["CheckViewCount"] !== null) {
            $this->CheckViewCount = $param["CheckViewCount"];
        }

        if (array_key_exists("HighPriorityRiskCount",$param) and $param["HighPriorityRiskCount"] !== null) {
            $this->HighPriorityRiskCount = $param["HighPriorityRiskCount"];
        }

        if (array_key_exists("CheckViewAddCount",$param) and $param["CheckViewAddCount"] !== null) {
            $this->CheckViewAddCount = $param["CheckViewAddCount"];
        }

        if (array_key_exists("HighPriorityCheckViewCount",$param) and $param["HighPriorityCheckViewCount"] !== null) {
            $this->HighPriorityCheckViewCount = $param["HighPriorityCheckViewCount"];
        }

        if (array_key_exists("AssetViewCount",$param) and $param["AssetViewCount"] !== null) {
            $this->AssetViewCount = $param["AssetViewCount"];
        }

        if (array_key_exists("AssetViewAddCount",$param) and $param["AssetViewAddCount"] !== null) {
            $this->AssetViewAddCount = $param["AssetViewAddCount"];
        }

        if (array_key_exists("HighPriorityAssetViewCount",$param) and $param["HighPriorityAssetViewCount"] !== null) {
            $this->HighPriorityAssetViewCount = $param["HighPriorityAssetViewCount"];
        }
    }
}
