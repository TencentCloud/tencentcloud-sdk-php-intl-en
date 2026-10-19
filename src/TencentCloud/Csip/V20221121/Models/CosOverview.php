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
 * Data structure of the COS audit overview page
 *
 * @method integer getAssetCount() Obtain <p>Total number of assets</p>
 * @method void setAssetCount(integer $AssetCount) Set <p>Total number of assets</p>
 * @method integer getAlarmAssetCount() Obtain <p>Number of assets that need to be processed immediately</p>
 * @method void setAlarmAssetCount(integer $AlarmAssetCount) Set <p>Number of assets that need to be processed immediately</p>
 * @method integer getRiskAssetCount() Obtain <p>Number of assets to be hardened</p>
 * @method void setRiskAssetCount(integer $RiskAssetCount) Set <p>Number of assets to be hardened</p>
 * @method integer getAlarmCount() Obtain <p>Total number of alarms</p>
 * @method void setAlarmCount(integer $AlarmCount) Set <p>Total number of alarms</p>
 * @method integer getIncrementAlarmCount() Obtain <p>Total number of new alarms on the day</p>
 * @method void setIncrementAlarmCount(integer $IncrementAlarmCount) Set <p>Total number of new alarms on the day</p>
 * @method integer getRiskCount() Obtain <p>Total number of risks</p>
 * @method void setRiskCount(integer $RiskCount) Set <p>Total number of risks</p>
 * @method integer getIncrementRiskCount() Obtain <p>Total number of new alarms on the day</p>
 * @method void setIncrementRiskCount(integer $IncrementRiskCount) Set <p>Total number of new alarms on the day</p>
 * @method array getRiskTop() Obtain <p>Risk top details</p>
 * @method void setRiskTop(array $RiskTop) Set <p>Risk top details</p>
 * @method array getAlarmTop() Obtain <p>top alarm risks</p>
 * @method void setAlarmTop(array $AlarmTop) Set <p>top alarm risks</p>
 * @method integer getHighLevelSensitiveFileCount() Obtain <p>Number of high-level sensitive files</p>
 * @method void setHighLevelSensitiveFileCount(integer $HighLevelSensitiveFileCount) Set <p>Number of high-level sensitive files</p>
 */
class CosOverview extends AbstractModel
{
    /**
     * @var integer <p>Total number of assets</p>
     */
    public $AssetCount;

    /**
     * @var integer <p>Number of assets that need to be processed immediately</p>
     */
    public $AlarmAssetCount;

    /**
     * @var integer <p>Number of assets to be hardened</p>
     */
    public $RiskAssetCount;

    /**
     * @var integer <p>Total number of alarms</p>
     */
    public $AlarmCount;

    /**
     * @var integer <p>Total number of new alarms on the day</p>
     */
    public $IncrementAlarmCount;

    /**
     * @var integer <p>Total number of risks</p>
     */
    public $RiskCount;

    /**
     * @var integer <p>Total number of new alarms on the day</p>
     */
    public $IncrementRiskCount;

    /**
     * @var array <p>Risk top details</p>
     */
    public $RiskTop;

    /**
     * @var array <p>top alarm risks</p>
     */
    public $AlarmTop;

    /**
     * @var integer <p>Number of high-level sensitive files</p>
     */
    public $HighLevelSensitiveFileCount;

    /**
     * @param integer $AssetCount <p>Total number of assets</p>
     * @param integer $AlarmAssetCount <p>Number of assets that need to be processed immediately</p>
     * @param integer $RiskAssetCount <p>Number of assets to be hardened</p>
     * @param integer $AlarmCount <p>Total number of alarms</p>
     * @param integer $IncrementAlarmCount <p>Total number of new alarms on the day</p>
     * @param integer $RiskCount <p>Total number of risks</p>
     * @param integer $IncrementRiskCount <p>Total number of new alarms on the day</p>
     * @param array $RiskTop <p>Risk top details</p>
     * @param array $AlarmTop <p>top alarm risks</p>
     * @param integer $HighLevelSensitiveFileCount <p>Number of high-level sensitive files</p>
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

        if (array_key_exists("AlarmAssetCount",$param) and $param["AlarmAssetCount"] !== null) {
            $this->AlarmAssetCount = $param["AlarmAssetCount"];
        }

        if (array_key_exists("RiskAssetCount",$param) and $param["RiskAssetCount"] !== null) {
            $this->RiskAssetCount = $param["RiskAssetCount"];
        }

        if (array_key_exists("AlarmCount",$param) and $param["AlarmCount"] !== null) {
            $this->AlarmCount = $param["AlarmCount"];
        }

        if (array_key_exists("IncrementAlarmCount",$param) and $param["IncrementAlarmCount"] !== null) {
            $this->IncrementAlarmCount = $param["IncrementAlarmCount"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("IncrementRiskCount",$param) and $param["IncrementRiskCount"] !== null) {
            $this->IncrementRiskCount = $param["IncrementRiskCount"];
        }

        if (array_key_exists("RiskTop",$param) and $param["RiskTop"] !== null) {
            $this->RiskTop = [];
            foreach ($param["RiskTop"] as $key => $value){
                $obj = new CosRiskInfo();
                $obj->deserialize($value);
                array_push($this->RiskTop, $obj);
            }
        }

        if (array_key_exists("AlarmTop",$param) and $param["AlarmTop"] !== null) {
            $this->AlarmTop = [];
            foreach ($param["AlarmTop"] as $key => $value){
                $obj = new CosRiskInfo();
                $obj->deserialize($value);
                array_push($this->AlarmTop, $obj);
            }
        }

        if (array_key_exists("HighLevelSensitiveFileCount",$param) and $param["HighLevelSensitiveFileCount"] !== null) {
            $this->HighLevelSensitiveFileCount = $param["HighLevelSensitiveFileCount"];
        }
    }
}
