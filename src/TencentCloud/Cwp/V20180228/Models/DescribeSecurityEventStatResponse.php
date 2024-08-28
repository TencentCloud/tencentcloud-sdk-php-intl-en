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
 * DescribeSecurityEventStat response structure.
 *
 * @method EventStat getMalwareStat() Obtain Trojan event statistics
 * @method void setMalwareStat(EventStat $MalwareStat) Set Trojan event statistics
 * @method EventStat getHostLoginStat() Obtain Statistics of cross-region log-in events
 * @method void setHostLoginStat(EventStat $HostLoginStat) Set Statistics of cross-region log-in events
 * @method EventStat getBruteAttackStat() Obtain Statistics of brute force cracking events
 * @method void setBruteAttackStat(EventStat $BruteAttackStat) Set Statistics of brute force cracking events
 * @method EventStat getMaliciousRequestStat() Obtain Malicious request event statistics
 * @method void setMaliciousRequestStat(EventStat $MaliciousRequestStat) Set Malicious request event statistics
 * @method EventStat getPrivilegeStat() Obtain Statistics of local privilege escalation events
 * @method void setPrivilegeStat(EventStat $PrivilegeStat) Set Statistics of local privilege escalation events
 * @method EventStat getReverseShellStat() Obtain Reverse shell event statistics
 * @method void setReverseShellStat(EventStat $ReverseShellStat) Set Reverse shell event statistics
 * @method EventStat getHighRiskBashStat() Obtain Statistics of high-risk command events
 * @method void setHighRiskBashStat(EventStat $HighRiskBashStat) Set Statistics of high-risk command events
 * @method EventStat getAttackLogsStat() Obtain Network attack event statistics
 * @method void setAttackLogsStat(EventStat $AttackLogsStat) Set Network attack event statistics
 * @method EventStat getVulHighStat() Obtain Statistics of high-risk vulnerability events
 * @method void setVulHighStat(EventStat $VulHighStat) Set Statistics of high-risk vulnerability events
 * @method EventStat getVulNormalStat() Obtain Statistics of medium-risk vulnerability events
 * @method void setVulNormalStat(EventStat $VulNormalStat) Set Statistics of medium-risk vulnerability events
 * @method EventStat getVulLowStat() Obtain Statistics of low-risk vulnerability events
 * @method void setVulLowStat(EventStat $VulLowStat) Set Statistics of low-risk vulnerability events
 * @method EventStat getBaselineHighStat() Obtain Statistics of high-risk baseline vulnerability events
 * @method void setBaselineHighStat(EventStat $BaselineHighStat) Set Statistics of high-risk baseline vulnerability events
 * @method EventStat getBaselineNormalStat() Obtain Statistics of medium-risk baseline vulnerability events
 * @method void setBaselineNormalStat(EventStat $BaselineNormalStat) Set Statistics of medium-risk baseline vulnerability events
 * @method EventStat getBaselineLowStat() Obtain Statistics of low-risk baseline vulnerability events
 * @method void setBaselineLowStat(EventStat $BaselineLowStat) Set Statistics of low-risk baseline vulnerability events
 * @method integer getMachineTotalAffectNum() Obtain Total number of machines with unfixed security events
 * @method void setMachineTotalAffectNum(integer $MachineTotalAffectNum) Set Total number of machines with unfixed security events
 * @method integer getInvasionTotalAffectNum() Obtain Total number of machines with unfixed intrusion security events
 * @method void setInvasionTotalAffectNum(integer $InvasionTotalAffectNum) Set Total number of machines with unfixed intrusion security events
 * @method integer getVulTotalAffectNum() Obtain Total number of machines with unfixed vulnerability security events
 * @method void setVulTotalAffectNum(integer $VulTotalAffectNum) Set Total number of machines with unfixed vulnerability security events
 * @method integer getBaseLineTotalAffectNum() Obtain Total number of machines with unfixed baseline security events
 * @method void setBaseLineTotalAffectNum(integer $BaseLineTotalAffectNum) Set Total number of machines with unfixed baseline security events
 * @method integer getCyberAttackTotalAffectNum() Obtain Total number of machines with unfixed network attack security events
 * @method void setCyberAttackTotalAffectNum(integer $CyberAttackTotalAffectNum) Set Total number of machines with unfixed network attack security events
 * @method EventStat getVulRiskStat() Obtain Critical vulnerability event statistics
 * @method void setVulRiskStat(EventStat $VulRiskStat) Set Critical vulnerability event statistics
 * @method EventStat getBaselineRiskStat() Obtain Statistics of critical baseline vulnerability events
 * @method void setBaselineRiskStat(EventStat $BaselineRiskStat) Set Statistics of critical baseline vulnerability events
 * @method EventStat getVulStat() Obtain Statistics on the number of vulnerabilities
 * @method void setVulStat(EventStat $VulStat) Set Statistics on the number of vulnerabilities
 * @method integer getScore() Obtain Security score
 * @method void setScore(integer $Score) Set Security score
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeSecurityEventStatResponse extends AbstractModel
{
    /**
     * @var EventStat Trojan event statistics
     */
    public $MalwareStat;

    /**
     * @var EventStat Statistics of cross-region log-in events
     */
    public $HostLoginStat;

    /**
     * @var EventStat Statistics of brute force cracking events
     */
    public $BruteAttackStat;

    /**
     * @var EventStat Malicious request event statistics
     */
    public $MaliciousRequestStat;

    /**
     * @var EventStat Statistics of local privilege escalation events
     */
    public $PrivilegeStat;

    /**
     * @var EventStat Reverse shell event statistics
     */
    public $ReverseShellStat;

    /**
     * @var EventStat Statistics of high-risk command events
     */
    public $HighRiskBashStat;

    /**
     * @var EventStat Network attack event statistics
     */
    public $AttackLogsStat;

    /**
     * @var EventStat Statistics of high-risk vulnerability events
     */
    public $VulHighStat;

    /**
     * @var EventStat Statistics of medium-risk vulnerability events
     */
    public $VulNormalStat;

    /**
     * @var EventStat Statistics of low-risk vulnerability events
     */
    public $VulLowStat;

    /**
     * @var EventStat Statistics of high-risk baseline vulnerability events
     */
    public $BaselineHighStat;

    /**
     * @var EventStat Statistics of medium-risk baseline vulnerability events
     */
    public $BaselineNormalStat;

    /**
     * @var EventStat Statistics of low-risk baseline vulnerability events
     */
    public $BaselineLowStat;

    /**
     * @var integer Total number of machines with unfixed security events
     */
    public $MachineTotalAffectNum;

    /**
     * @var integer Total number of machines with unfixed intrusion security events
     */
    public $InvasionTotalAffectNum;

    /**
     * @var integer Total number of machines with unfixed vulnerability security events
     */
    public $VulTotalAffectNum;

    /**
     * @var integer Total number of machines with unfixed baseline security events
     */
    public $BaseLineTotalAffectNum;

    /**
     * @var integer Total number of machines with unfixed network attack security events
     */
    public $CyberAttackTotalAffectNum;

    /**
     * @var EventStat Critical vulnerability event statistics
     */
    public $VulRiskStat;

    /**
     * @var EventStat Statistics of critical baseline vulnerability events
     */
    public $BaselineRiskStat;

    /**
     * @var EventStat Statistics on the number of vulnerabilities
     */
    public $VulStat;

    /**
     * @var integer Security score
     */
    public $Score;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param EventStat $MalwareStat Trojan event statistics
     * @param EventStat $HostLoginStat Statistics of cross-region log-in events
     * @param EventStat $BruteAttackStat Statistics of brute force cracking events
     * @param EventStat $MaliciousRequestStat Malicious request event statistics
     * @param EventStat $PrivilegeStat Statistics of local privilege escalation events
     * @param EventStat $ReverseShellStat Reverse shell event statistics
     * @param EventStat $HighRiskBashStat Statistics of high-risk command events
     * @param EventStat $AttackLogsStat Network attack event statistics
     * @param EventStat $VulHighStat Statistics of high-risk vulnerability events
     * @param EventStat $VulNormalStat Statistics of medium-risk vulnerability events
     * @param EventStat $VulLowStat Statistics of low-risk vulnerability events
     * @param EventStat $BaselineHighStat Statistics of high-risk baseline vulnerability events
     * @param EventStat $BaselineNormalStat Statistics of medium-risk baseline vulnerability events
     * @param EventStat $BaselineLowStat Statistics of low-risk baseline vulnerability events
     * @param integer $MachineTotalAffectNum Total number of machines with unfixed security events
     * @param integer $InvasionTotalAffectNum Total number of machines with unfixed intrusion security events
     * @param integer $VulTotalAffectNum Total number of machines with unfixed vulnerability security events
     * @param integer $BaseLineTotalAffectNum Total number of machines with unfixed baseline security events
     * @param integer $CyberAttackTotalAffectNum Total number of machines with unfixed network attack security events
     * @param EventStat $VulRiskStat Critical vulnerability event statistics
     * @param EventStat $BaselineRiskStat Statistics of critical baseline vulnerability events
     * @param EventStat $VulStat Statistics on the number of vulnerabilities
     * @param integer $Score Security score
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
        if (array_key_exists("MalwareStat",$param) and $param["MalwareStat"] !== null) {
            $this->MalwareStat = new EventStat();
            $this->MalwareStat->deserialize($param["MalwareStat"]);
        }

        if (array_key_exists("HostLoginStat",$param) and $param["HostLoginStat"] !== null) {
            $this->HostLoginStat = new EventStat();
            $this->HostLoginStat->deserialize($param["HostLoginStat"]);
        }

        if (array_key_exists("BruteAttackStat",$param) and $param["BruteAttackStat"] !== null) {
            $this->BruteAttackStat = new EventStat();
            $this->BruteAttackStat->deserialize($param["BruteAttackStat"]);
        }

        if (array_key_exists("MaliciousRequestStat",$param) and $param["MaliciousRequestStat"] !== null) {
            $this->MaliciousRequestStat = new EventStat();
            $this->MaliciousRequestStat->deserialize($param["MaliciousRequestStat"]);
        }

        if (array_key_exists("PrivilegeStat",$param) and $param["PrivilegeStat"] !== null) {
            $this->PrivilegeStat = new EventStat();
            $this->PrivilegeStat->deserialize($param["PrivilegeStat"]);
        }

        if (array_key_exists("ReverseShellStat",$param) and $param["ReverseShellStat"] !== null) {
            $this->ReverseShellStat = new EventStat();
            $this->ReverseShellStat->deserialize($param["ReverseShellStat"]);
        }

        if (array_key_exists("HighRiskBashStat",$param) and $param["HighRiskBashStat"] !== null) {
            $this->HighRiskBashStat = new EventStat();
            $this->HighRiskBashStat->deserialize($param["HighRiskBashStat"]);
        }

        if (array_key_exists("AttackLogsStat",$param) and $param["AttackLogsStat"] !== null) {
            $this->AttackLogsStat = new EventStat();
            $this->AttackLogsStat->deserialize($param["AttackLogsStat"]);
        }

        if (array_key_exists("VulHighStat",$param) and $param["VulHighStat"] !== null) {
            $this->VulHighStat = new EventStat();
            $this->VulHighStat->deserialize($param["VulHighStat"]);
        }

        if (array_key_exists("VulNormalStat",$param) and $param["VulNormalStat"] !== null) {
            $this->VulNormalStat = new EventStat();
            $this->VulNormalStat->deserialize($param["VulNormalStat"]);
        }

        if (array_key_exists("VulLowStat",$param) and $param["VulLowStat"] !== null) {
            $this->VulLowStat = new EventStat();
            $this->VulLowStat->deserialize($param["VulLowStat"]);
        }

        if (array_key_exists("BaselineHighStat",$param) and $param["BaselineHighStat"] !== null) {
            $this->BaselineHighStat = new EventStat();
            $this->BaselineHighStat->deserialize($param["BaselineHighStat"]);
        }

        if (array_key_exists("BaselineNormalStat",$param) and $param["BaselineNormalStat"] !== null) {
            $this->BaselineNormalStat = new EventStat();
            $this->BaselineNormalStat->deserialize($param["BaselineNormalStat"]);
        }

        if (array_key_exists("BaselineLowStat",$param) and $param["BaselineLowStat"] !== null) {
            $this->BaselineLowStat = new EventStat();
            $this->BaselineLowStat->deserialize($param["BaselineLowStat"]);
        }

        if (array_key_exists("MachineTotalAffectNum",$param) and $param["MachineTotalAffectNum"] !== null) {
            $this->MachineTotalAffectNum = $param["MachineTotalAffectNum"];
        }

        if (array_key_exists("InvasionTotalAffectNum",$param) and $param["InvasionTotalAffectNum"] !== null) {
            $this->InvasionTotalAffectNum = $param["InvasionTotalAffectNum"];
        }

        if (array_key_exists("VulTotalAffectNum",$param) and $param["VulTotalAffectNum"] !== null) {
            $this->VulTotalAffectNum = $param["VulTotalAffectNum"];
        }

        if (array_key_exists("BaseLineTotalAffectNum",$param) and $param["BaseLineTotalAffectNum"] !== null) {
            $this->BaseLineTotalAffectNum = $param["BaseLineTotalAffectNum"];
        }

        if (array_key_exists("CyberAttackTotalAffectNum",$param) and $param["CyberAttackTotalAffectNum"] !== null) {
            $this->CyberAttackTotalAffectNum = $param["CyberAttackTotalAffectNum"];
        }

        if (array_key_exists("VulRiskStat",$param) and $param["VulRiskStat"] !== null) {
            $this->VulRiskStat = new EventStat();
            $this->VulRiskStat->deserialize($param["VulRiskStat"]);
        }

        if (array_key_exists("BaselineRiskStat",$param) and $param["BaselineRiskStat"] !== null) {
            $this->BaselineRiskStat = new EventStat();
            $this->BaselineRiskStat->deserialize($param["BaselineRiskStat"]);
        }

        if (array_key_exists("VulStat",$param) and $param["VulStat"] !== null) {
            $this->VulStat = new EventStat();
            $this->VulStat->deserialize($param["VulStat"]);
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
