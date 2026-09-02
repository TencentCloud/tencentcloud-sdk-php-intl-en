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
 * Cloud resource configuration risk periodic scan configuration
 *
 * @method integer getCreateAppID() Obtain <p>appid of the periodic task creator.</p>
 * @method void setCreateAppID(integer $CreateAppID) Set <p>appid of the periodic task creator.</p>
 * @method string getPlanContent() Obtain <p>Periodic schedule</p>
 * @method void setPlanContent(string $PlanContent) Set <p>Periodic schedule</p>
 * @method integer getCronStatus() Obtain <p>Period scanning enabled status</p>
 * @method void setCronStatus(integer $CronStatus) Set <p>Period scanning enabled status</p>
 * @method boolean getAddRuleEnableStatus() Obtain <p>Whether to automatically join the scan for new rules</p>
 * @method void setAddRuleEnableStatus(boolean $AddRuleEnableStatus) Set <p>Whether to automatically join the scan for new rules</p>
 * @method string getScanPlanTimezone() Obtain <p>Time zone</p>
 * @method void setScanPlanTimezone(string $ScanPlanTimezone) Set <p>Time zone</p>
 * @method boolean getIncrementAssetScanRisk() Obtain <p>Enable risk scan for incremental assets</p>
 * @method void setIncrementAssetScanRisk(boolean $IncrementAssetScanRisk) Set <p>Enable risk scan for incremental assets</p>
 */
class RiskCronConfig extends AbstractModel
{
    /**
     * @var integer <p>appid of the periodic task creator.</p>
     */
    public $CreateAppID;

    /**
     * @var string <p>Periodic schedule</p>
     */
    public $PlanContent;

    /**
     * @var integer <p>Period scanning enabled status</p>
     */
    public $CronStatus;

    /**
     * @var boolean <p>Whether to automatically join the scan for new rules</p>
     */
    public $AddRuleEnableStatus;

    /**
     * @var string <p>Time zone</p>
     */
    public $ScanPlanTimezone;

    /**
     * @var boolean <p>Enable risk scan for incremental assets</p>
     */
    public $IncrementAssetScanRisk;

    /**
     * @param integer $CreateAppID <p>appid of the periodic task creator.</p>
     * @param string $PlanContent <p>Periodic schedule</p>
     * @param integer $CronStatus <p>Period scanning enabled status</p>
     * @param boolean $AddRuleEnableStatus <p>Whether to automatically join the scan for new rules</p>
     * @param string $ScanPlanTimezone <p>Time zone</p>
     * @param boolean $IncrementAssetScanRisk <p>Enable risk scan for incremental assets</p>
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
        if (array_key_exists("CreateAppID",$param) and $param["CreateAppID"] !== null) {
            $this->CreateAppID = $param["CreateAppID"];
        }

        if (array_key_exists("PlanContent",$param) and $param["PlanContent"] !== null) {
            $this->PlanContent = $param["PlanContent"];
        }

        if (array_key_exists("CronStatus",$param) and $param["CronStatus"] !== null) {
            $this->CronStatus = $param["CronStatus"];
        }

        if (array_key_exists("AddRuleEnableStatus",$param) and $param["AddRuleEnableStatus"] !== null) {
            $this->AddRuleEnableStatus = $param["AddRuleEnableStatus"];
        }

        if (array_key_exists("ScanPlanTimezone",$param) and $param["ScanPlanTimezone"] !== null) {
            $this->ScanPlanTimezone = $param["ScanPlanTimezone"];
        }

        if (array_key_exists("IncrementAssetScanRisk",$param) and $param["IncrementAssetScanRisk"] !== null) {
            $this->IncrementAssetScanRisk = $param["IncrementAssetScanRisk"];
        }
    }
}
