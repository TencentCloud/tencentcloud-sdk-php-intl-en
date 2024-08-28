<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityProtectionStat response structure.
 *
 * @method integer getAssetManageStat() Obtain 0: asset not paid; 1: agent not installed; 2: Pro or Ultimate Edition for some assets; 3: Pro or Ultimate Edition for all assets.
 * @method void setAssetManageStat(integer $AssetManageStat) Set 0: asset not paid; 1: agent not installed; 2: Pro or Ultimate Edition for some assets; 3: Pro or Ultimate Edition for all assets.
 * @method integer getVulManageStat() Obtain 0: never scanned or asset not paid; 1: vulnerability risk found; 2: no risk.
 * @method void setVulManageStat(integer $VulManageStat) Set 0: never scanned or asset not paid; 1: vulnerability risk found; 2: no risk.
 * @method integer getSecureBasicLineStat() Obtain 0: never scanned or asset not paid; 1: baseline risk found; 2: no risk.
 * @method void setSecureBasicLineStat(integer $SecureBasicLineStat) Set 0: never scanned or asset not paid; 1: baseline risk found; 2: no risk.
 * @method integer getMalwareScanStat() Obtain 0: never scanned or asset not paid; 1: scanned and malicious files found; 2: scanned but isolation protection disabled; 3: scanned, protection enabled, and no risk found.
 * @method void setMalwareScanStat(integer $MalwareScanStat) Set 0: never scanned or asset not paid; 1: scanned and malicious files found; 2: scanned but isolation protection disabled; 3: scanned, protection enabled, and no risk found.
 * @method integer getDefenseBruteAttackStat() Obtain Enabling status of password cracking prevention. 0: disabled or asset not paid; 1: enabled; 2: events pending fixing found.
 * @method void setDefenseBruteAttackStat(integer $DefenseBruteAttackStat) Set Enabling status of password cracking prevention. 0: disabled or asset not paid; 1: enabled; 2: events pending fixing found.
 * @method integer getFileTamperStat() Obtain Core file monitoring. 0: disabled (asset not paid); 1: enabled.
 * @method void setFileTamperStat(integer $FileTamperStat) Set Core file monitoring. 0: disabled (asset not paid); 1: enabled.
 * @method integer getWebPageStat() Obtain Web page tamper prevention. 0: disabled; 1: enabled.
 * @method void setWebPageStat(integer $WebPageStat) Set Web page tamper prevention. 0: disabled; 1: enabled.
 * @method integer getLoginLogStat() Obtain Abnormal log-in. 0: unfixed risks found; 1: no risk and allowlist not configured; 2: no risk and allowlist configured.
 * @method void setLoginLogStat(integer $LoginLogStat) Set Abnormal log-in. 0: unfixed risks found; 1: no risk and allowlist not configured; 2: no risk and allowlist configured.
 * @method integer getDiscoverBruteAttackStat() Obtain Password cracking risk detection. 0: unfixed risks found; 1: no risk with detection in progress.
 * @method void setDiscoverBruteAttackStat(integer $DiscoverBruteAttackStat) Set Password cracking risk detection. 0: unfixed risks found; 1: no risk with detection in progress.
 * @method integer getMaliciousRequestStat() Obtain Malicious request. 0: no asset in Pro or Ultimate Edition; 1: unfixed malicious request risks found; 2: paid assets found with no risk.
 * @method void setMaliciousRequestStat(integer $MaliciousRequestStat) Set Malicious request. 0: no asset in Pro or Ultimate Edition; 1: unfixed malicious request risks found; 2: paid assets found with no risk.
 * @method integer getPrivilegeStat() Obtain Local privilege escalation. 0: no asset in Pro or Ultimate Edition; 1: unfixed risks found; 2: paid assets found with no risk.
 * @method void setPrivilegeStat(integer $PrivilegeStat) Set Local privilege escalation. 0: no asset in Pro or Ultimate Edition; 1: unfixed risks found; 2: paid assets found with no risk.
 * @method integer getReverseShellStat() Obtain Reverse shell. 0: no asset in Pro or Ultimate Edition; 1: unfixed risks found; 2: paid assets found with no risk.
 * @method void setReverseShellStat(integer $ReverseShellStat) Set Reverse shell. 0: no asset in Pro or Ultimate Edition; 1: unfixed risks found; 2: paid assets found with no risk.
 * @method integer getExpertServiceStat() Obtain Expert service. 0: disabled; 1: enabled.
 * @method void setExpertServiceStat(integer $ExpertServiceStat) Set Expert service. 0: disabled; 1: enabled.
 * @method integer getLogAnalysisStat() Obtain Log analysis. 0: disabled; 1: enabled.
 * @method void setLogAnalysisStat(integer $LogAnalysisStat) Set Log analysis. 0: disabled; 1: enabled.
 * @method integer getWarningSetStat() Obtain Security alarm. 0: disabled (for all assets); 1: enabled (for at least one asset).
 * @method void setWarningSetStat(integer $WarningSetStat) Set Security alarm. 0: disabled (for all assets); 1: enabled (for at least one asset).
 * @method integer getEventBashStat() Obtain High-risk command. 0: no asset in Pro or Ultimate Edition; 1: unfixed risks found; 2: paid assets found with no risk.
 * @method void setEventBashStat(integer $EventBashStat) Set High-risk command. 0: no asset in Pro or Ultimate Edition; 1: unfixed risks found; 2: paid assets found with no risk.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeSecurityProtectionStatResponse extends AbstractModel
{
    /**
     * @var integer 0: asset not paid; 1: agent not installed; 2: Pro or Ultimate Edition for some assets; 3: Pro or Ultimate Edition for all assets.
     */
    public $AssetManageStat;

    /**
     * @var integer 0: never scanned or asset not paid; 1: vulnerability risk found; 2: no risk.
     */
    public $VulManageStat;

    /**
     * @var integer 0: never scanned or asset not paid; 1: baseline risk found; 2: no risk.
     */
    public $SecureBasicLineStat;

    /**
     * @var integer 0: never scanned or asset not paid; 1: scanned and malicious files found; 2: scanned but isolation protection disabled; 3: scanned, protection enabled, and no risk found.
     */
    public $MalwareScanStat;

    /**
     * @var integer Enabling status of password cracking prevention. 0: disabled or asset not paid; 1: enabled; 2: events pending fixing found.
     */
    public $DefenseBruteAttackStat;

    /**
     * @var integer Core file monitoring. 0: disabled (asset not paid); 1: enabled.
     */
    public $FileTamperStat;

    /**
     * @var integer Web page tamper prevention. 0: disabled; 1: enabled.
     */
    public $WebPageStat;

    /**
     * @var integer Abnormal log-in. 0: unfixed risks found; 1: no risk and allowlist not configured; 2: no risk and allowlist configured.
     */
    public $LoginLogStat;

    /**
     * @var integer Password cracking risk detection. 0: unfixed risks found; 1: no risk with detection in progress.
     */
    public $DiscoverBruteAttackStat;

    /**
     * @var integer Malicious request. 0: no asset in Pro or Ultimate Edition; 1: unfixed malicious request risks found; 2: paid assets found with no risk.
     */
    public $MaliciousRequestStat;

    /**
     * @var integer Local privilege escalation. 0: no asset in Pro or Ultimate Edition; 1: unfixed risks found; 2: paid assets found with no risk.
     */
    public $PrivilegeStat;

    /**
     * @var integer Reverse shell. 0: no asset in Pro or Ultimate Edition; 1: unfixed risks found; 2: paid assets found with no risk.
     */
    public $ReverseShellStat;

    /**
     * @var integer Expert service. 0: disabled; 1: enabled.
     */
    public $ExpertServiceStat;

    /**
     * @var integer Log analysis. 0: disabled; 1: enabled.
     */
    public $LogAnalysisStat;

    /**
     * @var integer Security alarm. 0: disabled (for all assets); 1: enabled (for at least one asset).
     */
    public $WarningSetStat;

    /**
     * @var integer High-risk command. 0: no asset in Pro or Ultimate Edition; 1: unfixed risks found; 2: paid assets found with no risk.
     */
    public $EventBashStat;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $AssetManageStat 0: asset not paid; 1: agent not installed; 2: Pro or Ultimate Edition for some assets; 3: Pro or Ultimate Edition for all assets.
     * @param integer $VulManageStat 0: never scanned or asset not paid; 1: vulnerability risk found; 2: no risk.
     * @param integer $SecureBasicLineStat 0: never scanned or asset not paid; 1: baseline risk found; 2: no risk.
     * @param integer $MalwareScanStat 0: never scanned or asset not paid; 1: scanned and malicious files found; 2: scanned but isolation protection disabled; 3: scanned, protection enabled, and no risk found.
     * @param integer $DefenseBruteAttackStat Enabling status of password cracking prevention. 0: disabled or asset not paid; 1: enabled; 2: events pending fixing found.
     * @param integer $FileTamperStat Core file monitoring. 0: disabled (asset not paid); 1: enabled.
     * @param integer $WebPageStat Web page tamper prevention. 0: disabled; 1: enabled.
     * @param integer $LoginLogStat Abnormal log-in. 0: unfixed risks found; 1: no risk and allowlist not configured; 2: no risk and allowlist configured.
     * @param integer $DiscoverBruteAttackStat Password cracking risk detection. 0: unfixed risks found; 1: no risk with detection in progress.
     * @param integer $MaliciousRequestStat Malicious request. 0: no asset in Pro or Ultimate Edition; 1: unfixed malicious request risks found; 2: paid assets found with no risk.
     * @param integer $PrivilegeStat Local privilege escalation. 0: no asset in Pro or Ultimate Edition; 1: unfixed risks found; 2: paid assets found with no risk.
     * @param integer $ReverseShellStat Reverse shell. 0: no asset in Pro or Ultimate Edition; 1: unfixed risks found; 2: paid assets found with no risk.
     * @param integer $ExpertServiceStat Expert service. 0: disabled; 1: enabled.
     * @param integer $LogAnalysisStat Log analysis. 0: disabled; 1: enabled.
     * @param integer $WarningSetStat Security alarm. 0: disabled (for all assets); 1: enabled (for at least one asset).
     * @param integer $EventBashStat High-risk command. 0: no asset in Pro or Ultimate Edition; 1: unfixed risks found; 2: paid assets found with no risk.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("AssetManageStat",$param) and $param["AssetManageStat"] !== null) {
            $this->AssetManageStat = $param["AssetManageStat"];
        }

        if (array_key_exists("VulManageStat",$param) and $param["VulManageStat"] !== null) {
            $this->VulManageStat = $param["VulManageStat"];
        }

        if (array_key_exists("SecureBasicLineStat",$param) and $param["SecureBasicLineStat"] !== null) {
            $this->SecureBasicLineStat = $param["SecureBasicLineStat"];
        }

        if (array_key_exists("MalwareScanStat",$param) and $param["MalwareScanStat"] !== null) {
            $this->MalwareScanStat = $param["MalwareScanStat"];
        }

        if (array_key_exists("DefenseBruteAttackStat",$param) and $param["DefenseBruteAttackStat"] !== null) {
            $this->DefenseBruteAttackStat = $param["DefenseBruteAttackStat"];
        }

        if (array_key_exists("FileTamperStat",$param) and $param["FileTamperStat"] !== null) {
            $this->FileTamperStat = $param["FileTamperStat"];
        }

        if (array_key_exists("WebPageStat",$param) and $param["WebPageStat"] !== null) {
            $this->WebPageStat = $param["WebPageStat"];
        }

        if (array_key_exists("LoginLogStat",$param) and $param["LoginLogStat"] !== null) {
            $this->LoginLogStat = $param["LoginLogStat"];
        }

        if (array_key_exists("DiscoverBruteAttackStat",$param) and $param["DiscoverBruteAttackStat"] !== null) {
            $this->DiscoverBruteAttackStat = $param["DiscoverBruteAttackStat"];
        }

        if (array_key_exists("MaliciousRequestStat",$param) and $param["MaliciousRequestStat"] !== null) {
            $this->MaliciousRequestStat = $param["MaliciousRequestStat"];
        }

        if (array_key_exists("PrivilegeStat",$param) and $param["PrivilegeStat"] !== null) {
            $this->PrivilegeStat = $param["PrivilegeStat"];
        }

        if (array_key_exists("ReverseShellStat",$param) and $param["ReverseShellStat"] !== null) {
            $this->ReverseShellStat = $param["ReverseShellStat"];
        }

        if (array_key_exists("ExpertServiceStat",$param) and $param["ExpertServiceStat"] !== null) {
            $this->ExpertServiceStat = $param["ExpertServiceStat"];
        }

        if (array_key_exists("LogAnalysisStat",$param) and $param["LogAnalysisStat"] !== null) {
            $this->LogAnalysisStat = $param["LogAnalysisStat"];
        }

        if (array_key_exists("WarningSetStat",$param) and $param["WarningSetStat"] !== null) {
            $this->WarningSetStat = $param["WarningSetStat"];
        }

        if (array_key_exists("EventBashStat",$param) and $param["EventBashStat"] !== null) {
            $this->EventBashStat = $param["EventBashStat"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
