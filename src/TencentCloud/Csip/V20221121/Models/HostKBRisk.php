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
 * Host vulnerability risk
 *
 * @method integer getRiskID() Obtain <p>Risk record ID (kb_risk.id)</p>
 * @method void setRiskID(integer $RiskID) Set <p>Risk record ID (kb_risk.id)</p>
 * @method KBDetail getKBDetail() Obtain <p>Windows KB patch detailed information</p>
 * @method void setKBDetail(KBDetail $KBDetail) Set <p>Windows KB patch detailed information</p>
 * @method integer getEffectHostCount() Obtain <p>Number of affected hosts.</p>
 * @method void setEffectHostCount(integer $EffectHostCount) Set <p>Number of affected hosts.</p>
 * @method string getLatestScanTime() Obtain <p>Latest scan time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ</p>
 * @method void setLatestScanTime(string $LatestScanTime) Set <p>Latest scan time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ</p>
 * @method array getAccount() Obtain <p>Associated account list</p>
 * @method void setAccount(array $Account) Set <p>Associated account list</p>
 * @method string getRiskStatus() Obtain <p>Remediation status<br>Enumeration values:<br>PENDING: To be fixed<br>SCANNING: Scan in progress<br>FIXED: Fixed<br>IGNORED: Allowlisted<br>FIXING: In remediation<br>FIX_FAILED: Fix failure</p>
 * @method void setRiskStatus(string $RiskStatus) Set <p>Remediation status<br>Enumeration values:<br>PENDING: To be fixed<br>SCANNING: Scan in progress<br>FIXED: Fixed<br>IGNORED: Allowlisted<br>FIXING: In remediation<br>FIX_FAILED: Fix failure</p>
 */
class HostKBRisk extends AbstractModel
{
    /**
     * @var integer <p>Risk record ID (kb_risk.id)</p>
     */
    public $RiskID;

    /**
     * @var KBDetail <p>Windows KB patch detailed information</p>
     */
    public $KBDetail;

    /**
     * @var integer <p>Number of affected hosts.</p>
     */
    public $EffectHostCount;

    /**
     * @var string <p>Latest scan time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ</p>
     */
    public $LatestScanTime;

    /**
     * @var array <p>Associated account list</p>
     */
    public $Account;

    /**
     * @var string <p>Remediation status<br>Enumeration values:<br>PENDING: To be fixed<br>SCANNING: Scan in progress<br>FIXED: Fixed<br>IGNORED: Allowlisted<br>FIXING: In remediation<br>FIX_FAILED: Fix failure</p>
     */
    public $RiskStatus;

    /**
     * @param integer $RiskID <p>Risk record ID (kb_risk.id)</p>
     * @param KBDetail $KBDetail <p>Windows KB patch detailed information</p>
     * @param integer $EffectHostCount <p>Number of affected hosts.</p>
     * @param string $LatestScanTime <p>Latest scan time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ</p>
     * @param array $Account <p>Associated account list</p>
     * @param string $RiskStatus <p>Remediation status<br>Enumeration values:<br>PENDING: To be fixed<br>SCANNING: Scan in progress<br>FIXED: Fixed<br>IGNORED: Allowlisted<br>FIXING: In remediation<br>FIX_FAILED: Fix failure</p>
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
        if (array_key_exists("RiskID",$param) and $param["RiskID"] !== null) {
            $this->RiskID = $param["RiskID"];
        }

        if (array_key_exists("KBDetail",$param) and $param["KBDetail"] !== null) {
            $this->KBDetail = new KBDetail();
            $this->KBDetail->deserialize($param["KBDetail"]);
        }

        if (array_key_exists("EffectHostCount",$param) and $param["EffectHostCount"] !== null) {
            $this->EffectHostCount = $param["EffectHostCount"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = [];
            foreach ($param["Account"] as $key => $value){
                $obj = new AccountBriefInfo();
                $obj->deserialize($value);
                array_push($this->Account, $obj);
            }
        }

        if (array_key_exists("RiskStatus",$param) and $param["RiskStatus"] !== null) {
            $this->RiskStatus = $param["RiskStatus"];
        }
    }
}
