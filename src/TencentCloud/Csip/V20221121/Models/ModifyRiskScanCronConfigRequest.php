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
 * ModifyRiskScanCronConfig request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method integer getCronStatus() Obtain <p>Plan enabled status</p>
 * @method void setCronStatus(integer $CronStatus) Set <p>Plan enabled status</p>
 * @method string getCronPlanContent() Obtain <p>Plan expression</p>
 * @method void setCronPlanContent(string $CronPlanContent) Set <p>Plan expression</p>
 * @method boolean getRuleAutoEnable() Obtain <p>Whether to automatically execute new rules</p>
 * @method void setRuleAutoEnable(boolean $RuleAutoEnable) Set <p>Whether to automatically execute new rules</p>
 * @method string getScanPlanTimezone() Obtain <p>Time zone</p>
 * @method void setScanPlanTimezone(string $ScanPlanTimezone) Set <p>Time zone</p>
 * @method boolean getIncrementAssetScanRisk() Obtain <p>Enable risk scan for incremental assets</p>
 * @method void setIncrementAssetScanRisk(boolean $IncrementAssetScanRisk) Set <p>Enable risk scan for incremental assets</p>
 */
class ModifyRiskScanCronConfigRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>Plan enabled status</p>
     */
    public $CronStatus;

    /**
     * @var string <p>Plan expression</p>
     */
    public $CronPlanContent;

    /**
     * @var boolean <p>Whether to automatically execute new rules</p>
     */
    public $RuleAutoEnable;

    /**
     * @var string <p>Time zone</p>
     */
    public $ScanPlanTimezone;

    /**
     * @var boolean <p>Enable risk scan for incremental assets</p>
     */
    public $IncrementAssetScanRisk;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param integer $CronStatus <p>Plan enabled status</p>
     * @param string $CronPlanContent <p>Plan expression</p>
     * @param boolean $RuleAutoEnable <p>Whether to automatically execute new rules</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("CronStatus",$param) and $param["CronStatus"] !== null) {
            $this->CronStatus = $param["CronStatus"];
        }

        if (array_key_exists("CronPlanContent",$param) and $param["CronPlanContent"] !== null) {
            $this->CronPlanContent = $param["CronPlanContent"];
        }

        if (array_key_exists("RuleAutoEnable",$param) and $param["RuleAutoEnable"] !== null) {
            $this->RuleAutoEnable = $param["RuleAutoEnable"];
        }

        if (array_key_exists("ScanPlanTimezone",$param) and $param["ScanPlanTimezone"] !== null) {
            $this->ScanPlanTimezone = $param["ScanPlanTimezone"];
        }

        if (array_key_exists("IncrementAssetScanRisk",$param) and $param["IncrementAssetScanRisk"] !== null) {
            $this->IncrementAssetScanRisk = $param["IncrementAssetScanRisk"];
        }
    }
}
