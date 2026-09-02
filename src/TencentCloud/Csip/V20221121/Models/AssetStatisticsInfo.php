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
 * Asset Overview statistical information
 *
 * @method integer getAssetTotalCount() Obtain <p>Total number of assets</p>
 * @method void setAssetTotalCount(integer $AssetTotalCount) Set <p>Total number of assets</p>
 * @method integer getAssetAddCount() Obtain <p>New asset count in the last 7 days</p>
 * @method void setAssetAddCount(integer $AssetAddCount) Set <p>New asset count in the last 7 days</p>
 * @method integer getRiskAssetCount() Obtain <p>Number of risky assets</p>
 * @method void setRiskAssetCount(integer $RiskAssetCount) Set <p>Number of risky assets</p>
 * @method integer getAlarmAssetCount() Obtain <p>Number of assets with alarms.</p>
 * @method void setAlarmAssetCount(integer $AlarmAssetCount) Set <p>Number of assets with alarms.</p>
 * @method integer getPublicAssetCount() Obtain <p>Number of public network assets</p>
 * @method void setPublicAssetCount(integer $PublicAssetCount) Set <p>Number of public network assets</p>
 * @method integer getExposeAssetCount() Obtain <p>Number of exposed assets</p>
 * @method void setExposeAssetCount(integer $ExposeAssetCount) Set <p>Number of exposed assets</p>
 * @method integer getCloudHostAssetCount() Obtain <p>Host asset quantity</p>
 * @method void setCloudHostAssetCount(integer $CloudHostAssetCount) Set <p>Host asset quantity</p>
 */
class AssetStatisticsInfo extends AbstractModel
{
    /**
     * @var integer <p>Total number of assets</p>
     */
    public $AssetTotalCount;

    /**
     * @var integer <p>New asset count in the last 7 days</p>
     */
    public $AssetAddCount;

    /**
     * @var integer <p>Number of risky assets</p>
     */
    public $RiskAssetCount;

    /**
     * @var integer <p>Number of assets with alarms.</p>
     */
    public $AlarmAssetCount;

    /**
     * @var integer <p>Number of public network assets</p>
     */
    public $PublicAssetCount;

    /**
     * @var integer <p>Number of exposed assets</p>
     */
    public $ExposeAssetCount;

    /**
     * @var integer <p>Host asset quantity</p>
     */
    public $CloudHostAssetCount;

    /**
     * @param integer $AssetTotalCount <p>Total number of assets</p>
     * @param integer $AssetAddCount <p>New asset count in the last 7 days</p>
     * @param integer $RiskAssetCount <p>Number of risky assets</p>
     * @param integer $AlarmAssetCount <p>Number of assets with alarms.</p>
     * @param integer $PublicAssetCount <p>Number of public network assets</p>
     * @param integer $ExposeAssetCount <p>Number of exposed assets</p>
     * @param integer $CloudHostAssetCount <p>Host asset quantity</p>
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
        if (array_key_exists("AssetTotalCount",$param) and $param["AssetTotalCount"] !== null) {
            $this->AssetTotalCount = $param["AssetTotalCount"];
        }

        if (array_key_exists("AssetAddCount",$param) and $param["AssetAddCount"] !== null) {
            $this->AssetAddCount = $param["AssetAddCount"];
        }

        if (array_key_exists("RiskAssetCount",$param) and $param["RiskAssetCount"] !== null) {
            $this->RiskAssetCount = $param["RiskAssetCount"];
        }

        if (array_key_exists("AlarmAssetCount",$param) and $param["AlarmAssetCount"] !== null) {
            $this->AlarmAssetCount = $param["AlarmAssetCount"];
        }

        if (array_key_exists("PublicAssetCount",$param) and $param["PublicAssetCount"] !== null) {
            $this->PublicAssetCount = $param["PublicAssetCount"];
        }

        if (array_key_exists("ExposeAssetCount",$param) and $param["ExposeAssetCount"] !== null) {
            $this->ExposeAssetCount = $param["ExposeAssetCount"];
        }

        if (array_key_exists("CloudHostAssetCount",$param) and $param["CloudHostAssetCount"] !== null) {
            $this->CloudHostAssetCount = $param["CloudHostAssetCount"];
        }
    }
}
