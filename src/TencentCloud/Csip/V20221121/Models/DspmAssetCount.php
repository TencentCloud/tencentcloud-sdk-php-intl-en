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
 * Dspm asset statistics
 *
 * @method integer getAssetCount() Obtain Number of assets
 * @method void setAssetCount(integer $AssetCount) Set Number of assets
 * @method integer getDangerRiskCount() Obtain Number of assets with dangerous risks
 * @method void setDangerRiskCount(integer $DangerRiskCount) Set Number of assets with dangerous risks
 * @method integer getLowRiskCount() Obtain Number of assets with low risk
 * @method void setLowRiskCount(integer $LowRiskCount) Set Number of assets with low risk
 * @method integer getRiskAssetCount() Obtain Number of instances with pending risks
 * @method void setRiskAssetCount(integer $RiskAssetCount) Set Number of instances with pending risks
 * @method integer getAlarmAssetCount() Obtain Number of instances with pending alarms
 * @method void setAlarmAssetCount(integer $AlarmAssetCount) Set Number of instances with pending alarms
 */
class DspmAssetCount extends AbstractModel
{
    /**
     * @var integer Number of assets
     */
    public $AssetCount;

    /**
     * @var integer Number of assets with dangerous risks
     */
    public $DangerRiskCount;

    /**
     * @var integer Number of assets with low risk
     */
    public $LowRiskCount;

    /**
     * @var integer Number of instances with pending risks
     */
    public $RiskAssetCount;

    /**
     * @var integer Number of instances with pending alarms
     */
    public $AlarmAssetCount;

    /**
     * @param integer $AssetCount Number of assets
     * @param integer $DangerRiskCount Number of assets with dangerous risks
     * @param integer $LowRiskCount Number of assets with low risk
     * @param integer $RiskAssetCount Number of instances with pending risks
     * @param integer $AlarmAssetCount Number of instances with pending alarms
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
        if (array_key_exists("AssetCount",$param) and $param["AssetCount"] !== null) {
            $this->AssetCount = $param["AssetCount"];
        }

        if (array_key_exists("DangerRiskCount",$param) and $param["DangerRiskCount"] !== null) {
            $this->DangerRiskCount = $param["DangerRiskCount"];
        }

        if (array_key_exists("LowRiskCount",$param) and $param["LowRiskCount"] !== null) {
            $this->LowRiskCount = $param["LowRiskCount"];
        }

        if (array_key_exists("RiskAssetCount",$param) and $param["RiskAssetCount"] !== null) {
            $this->RiskAssetCount = $param["RiskAssetCount"];
        }

        if (array_key_exists("AlarmAssetCount",$param) and $param["AlarmAssetCount"] !== null) {
            $this->AlarmAssetCount = $param["AlarmAssetCount"];
        }
    }
}
