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
 * @method integer getRiskID() Obtain <p>Risk record ID (host_vul_risk.id)</p>
 * @method void setRiskID(integer $RiskID) Set <p>Risk record ID (host_vul_risk.id)</p>
 * @method integer getEffectHostCount() Obtain <p>Number of affected hosts</p>
 * @method void setEffectHostCount(integer $EffectHostCount) Set <p>Number of affected hosts</p>
 * @method string getLatestScanTime() Obtain <p>Latest scan time<br>Parameter format: YYYY-MM-DD HH:mm:ss</p>
 * @method void setLatestScanTime(string $LatestScanTime) Set <p>Latest scan time<br>Parameter format: YYYY-MM-DD HH:mm:ss</p>
 * @method array getAccount() Obtain <p>Account list it belongs to</p>
 * @method void setAccount(array $Account) Set <p>Account list it belongs to</p>
 * @method string getDefendStatus() Obtain <p>Vulnerability defense status<br>Enumeration value:<br>ENABLED: Enabled<br>NOT_SUPPORTED: Unsupported<br>NOT_ENABLED: Not enabled</p>
 * @method void setDefendStatus(string $DefendStatus) Set <p>Vulnerability defense status<br>Enumeration value:<br>ENABLED: Enabled<br>NOT_SUPPORTED: Unsupported<br>NOT_ENABLED: Not enabled</p>
 * @method string getRiskStatus() Obtain <p>Remediation status<br>Enumeration values:<br>PENDING: to be fixed<br>SCANNING: scan in progress<br>FIXED: fixed<br>IGNORED: whitelisted<br>FIXING: fix<br>FIX_FAILED: FIX_FAILURE<br>NOTSCAN: unscanned<br>WITHOUT_RISK: no risk<br>NEED_REBOOT: pending restart</p>
 * @method void setRiskStatus(string $RiskStatus) Set <p>Remediation status<br>Enumeration values:<br>PENDING: to be fixed<br>SCANNING: scan in progress<br>FIXED: fixed<br>IGNORED: whitelisted<br>FIXING: fix<br>FIX_FAILED: FIX_FAILURE<br>NOTSCAN: unscanned<br>WITHOUT_RISK: no risk<br>NEED_REBOOT: pending restart</p>
 * @method VulDetailInfo getVulDetail() Obtain <p>Vulnerability details</p>
 * @method void setVulDetail(VulDetailInfo $VulDetail) Set <p>Vulnerability details</p>
 */
class HostVulRisk extends AbstractModel
{
    /**
     * @var integer <p>Risk record ID (host_vul_risk.id)</p>
     */
    public $RiskID;

    /**
     * @var integer <p>Number of affected hosts</p>
     */
    public $EffectHostCount;

    /**
     * @var string <p>Latest scan time<br>Parameter format: YYYY-MM-DD HH:mm:ss</p>
     */
    public $LatestScanTime;

    /**
     * @var array <p>Account list it belongs to</p>
     */
    public $Account;

    /**
     * @var string <p>Vulnerability defense status<br>Enumeration value:<br>ENABLED: Enabled<br>NOT_SUPPORTED: Unsupported<br>NOT_ENABLED: Not enabled</p>
     */
    public $DefendStatus;

    /**
     * @var string <p>Remediation status<br>Enumeration values:<br>PENDING: to be fixed<br>SCANNING: scan in progress<br>FIXED: fixed<br>IGNORED: whitelisted<br>FIXING: fix<br>FIX_FAILED: FIX_FAILURE<br>NOTSCAN: unscanned<br>WITHOUT_RISK: no risk<br>NEED_REBOOT: pending restart</p>
     */
    public $RiskStatus;

    /**
     * @var VulDetailInfo <p>Vulnerability details</p>
     */
    public $VulDetail;

    /**
     * @param integer $RiskID <p>Risk record ID (host_vul_risk.id)</p>
     * @param integer $EffectHostCount <p>Number of affected hosts</p>
     * @param string $LatestScanTime <p>Latest scan time<br>Parameter format: YYYY-MM-DD HH:mm:ss</p>
     * @param array $Account <p>Account list it belongs to</p>
     * @param string $DefendStatus <p>Vulnerability defense status<br>Enumeration value:<br>ENABLED: Enabled<br>NOT_SUPPORTED: Unsupported<br>NOT_ENABLED: Not enabled</p>
     * @param string $RiskStatus <p>Remediation status<br>Enumeration values:<br>PENDING: to be fixed<br>SCANNING: scan in progress<br>FIXED: fixed<br>IGNORED: whitelisted<br>FIXING: fix<br>FIX_FAILED: FIX_FAILURE<br>NOTSCAN: unscanned<br>WITHOUT_RISK: no risk<br>NEED_REBOOT: pending restart</p>
     * @param VulDetailInfo $VulDetail <p>Vulnerability details</p>
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

        if (array_key_exists("DefendStatus",$param) and $param["DefendStatus"] !== null) {
            $this->DefendStatus = $param["DefendStatus"];
        }

        if (array_key_exists("RiskStatus",$param) and $param["RiskStatus"] !== null) {
            $this->RiskStatus = $param["RiskStatus"];
        }

        if (array_key_exists("VulDetail",$param) and $param["VulDetail"] !== null) {
            $this->VulDetail = new VulDetailInfo();
            $this->VulDetail->deserialize($param["VulDetail"]);
        }
    }
}
