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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Vulnerability list on the vulnerability management page of CWPP
 *
 * @method string getIds() Obtain IDs of events corresponding to a vulnerability, separated by commas (,)
 * @method void setIds(string $Ids) Set IDs of events corresponding to a vulnerability, separated by commas (,)
 * @method string getName() Obtain Vulnerability name
 * @method void setName(string $Name) Set Vulnerability name
 * @method integer getStatus() Obtain 0: pending; 1: ignored; 3: fixed; 5: detecting; 6: fixing; 8: fixing failed
 * @method void setStatus(integer $Status) Set 0: pending; 1: ignored; 3: fixed; 5: detecting; 6: fixing; 8: fixing failed
 * @method integer getVulId() Obtain Vulnerability ID
 * @method void setVulId(integer $VulId) Set Vulnerability ID
 * @method string getPublishTime() Obtain Vulnerability disclosure time
 * @method void setPublishTime(string $PublishTime) Set Vulnerability disclosure time
 * @method string getLastTime() Obtain Last detection time
 * @method void setLastTime(string $LastTime) Set Last detection time
 * @method integer getHostCount() Obtain Number of affected hosts
 * @method void setHostCount(integer $HostCount) Set Number of affected hosts
 * @method integer getLevel() Obtain Vulnerability level. 1: low-risk; 2: medium-risk; 3: high-risk; 4: critical.
 * @method void setLevel(integer $Level) Set Vulnerability level. 1: low-risk; 2: medium-risk; 3: high-risk; 4: critical.
 * @method integer getFrom() Obtain Obsolete
 * @method void setFrom(integer $From) Set Obsolete
 * @method string getDescript() Obtain Description
 * @method void setDescript(string $Descript) Set Description
 * @method string getPublishTimeWisteria() Obtain Obsolete
 * @method void setPublishTimeWisteria(string $PublishTimeWisteria) Set Obsolete
 * @method string getNameWisteria() Obtain Obsolete
 * @method void setNameWisteria(string $NameWisteria) Set Obsolete
 * @method string getDescriptWisteria() Obtain Obsolete
 * @method void setDescriptWisteria(string $DescriptWisteria) Set Obsolete
 * @method string getStatusStr() Obtain Event status after aggregation
 * @method void setStatusStr(string $StatusStr) Set Event status after aggregation
 * @method string getCveId() Obtain CVE ID
 * @method void setCveId(string $CveId) Set CVE ID
 * @method float getCvssScore() Obtain CVSS score
 * @method void setCvssScore(float $CvssScore) Set CVSS score
 * @method string getLabels() Obtain Vulnerability Tags, Separated by Multiple Commas

EXP exists
Wild Attacks: KNOWN_EXPLOITED
LOCAL: Local use
Mandatory vulnerabilities: NEED_FIX
RemoteExploit:NETWORK
POC exists: POC
System RESTART
 * @method void setLabels(string $Labels) Set Vulnerability Tags, Separated by Multiple Commas

EXP exists
Wild Attacks: KNOWN_EXPLOITED
LOCAL: Local use
Mandatory vulnerabilities: NEED_FIX
RemoteExploit:NETWORK
POC exists: POC
System RESTART
 * @method integer getFixSwitch() Obtain Whether automatic fixing is supported and hosts that support automatic fixing, 0=No 1=Yes
 * @method void setFixSwitch(integer $FixSwitch) Set Whether automatic fixing is supported and hosts that support automatic fixing, 0=No 1=Yes
 * @method integer getTaskId() Obtain id of the last scan task
 * @method void setTaskId(integer $TaskId) Set id of the last scan task
 * @method integer getIsSupportDefense() Obtain Support defense, 0: no support 1: support
 * @method void setIsSupportDefense(integer $IsSupportDefense) Set Support defense, 0: no support 1: support
 * @method integer getDefenseAttackCount() Obtain Number of Attacks Defended
 * @method void setDefenseAttackCount(integer $DefenseAttackCount) Set Number of Attacks Defended
 * @method string getFirstAppearTime() Obtain first occurrence time
 * @method void setFirstAppearTime(string $FirstAppearTime) Set first occurrence time
 * @method integer getVulCategory() Obtain Vulnerability Category 1: web-cms Vulnerability 2: Application Vulnerability 4: Linux Software Vulnerability 5: Windows System Vulnerability
 * @method void setVulCategory(integer $VulCategory) Set Vulnerability Category 1: web-cms Vulnerability 2: Application Vulnerability 4: Linux Software Vulnerability 5: Windows System Vulnerability
 * @method integer getAttackLevel() Obtain Attack intensity level.
 * @method void setAttackLevel(integer $AttackLevel) Set Attack intensity level.
 * @method boolean getFixNoNeedRestart() Obtain Whether a restart is required after vulnerability repair.
 * @method void setFixNoNeedRestart(boolean $FixNoNeedRestart) Set Whether a restart is required after vulnerability repair.
 * @method integer getMethod() Obtain Detection method. 0: version comparison, 1: POC verification.
 * @method void setMethod(integer $Method) Set Detection method. 0: version comparison, 1: POC verification.
 * @method integer getVulFixSwitch() Obtain Whether vulnerability fixing is supported. 0: not supported; 1: supported.
 * @method void setVulFixSwitch(integer $VulFixSwitch) Set Whether vulnerability fixing is supported. 0: not supported; 1: supported.
 * @method string getLatestFixTime() Obtain Latest remediation time
 * @method void setLatestFixTime(string $LatestFixTime) Set Latest remediation time
 * @method integer getRaspOpenNodeCount() Obtain Number of application protection activations for machines with vulnerability correspondence
 * @method void setRaspOpenNodeCount(integer $RaspOpenNodeCount) Set Number of application protection activations for machines with vulnerability correspondence
 * @method integer getRaspClosedNodeCount() Obtain Number of application protection deactivations for machines with vulnerability correspondence
 * @method void setRaspClosedNodeCount(integer $RaspClosedNodeCount) Set Number of application protection deactivations for machines with vulnerability correspondence
 */
class VulInfoList extends AbstractModel
{
    /**
     * @var string IDs of events corresponding to a vulnerability, separated by commas (,)
     */
    public $Ids;

    /**
     * @var string Vulnerability name
     */
    public $Name;

    /**
     * @var integer 0: pending; 1: ignored; 3: fixed; 5: detecting; 6: fixing; 8: fixing failed
     */
    public $Status;

    /**
     * @var integer Vulnerability ID
     */
    public $VulId;

    /**
     * @var string Vulnerability disclosure time
     */
    public $PublishTime;

    /**
     * @var string Last detection time
     */
    public $LastTime;

    /**
     * @var integer Number of affected hosts
     */
    public $HostCount;

    /**
     * @var integer Vulnerability level. 1: low-risk; 2: medium-risk; 3: high-risk; 4: critical.
     */
    public $Level;

    /**
     * @var integer Obsolete
     */
    public $From;

    /**
     * @var string Description
     */
    public $Descript;

    /**
     * @var string Obsolete
     */
    public $PublishTimeWisteria;

    /**
     * @var string Obsolete
     */
    public $NameWisteria;

    /**
     * @var string Obsolete
     */
    public $DescriptWisteria;

    /**
     * @var string Event status after aggregation
     */
    public $StatusStr;

    /**
     * @var string CVE ID
     */
    public $CveId;

    /**
     * @var float CVSS score
     */
    public $CvssScore;

    /**
     * @var string Vulnerability Tags, Separated by Multiple Commas

EXP exists
Wild Attacks: KNOWN_EXPLOITED
LOCAL: Local use
Mandatory vulnerabilities: NEED_FIX
RemoteExploit:NETWORK
POC exists: POC
System RESTART
     */
    public $Labels;

    /**
     * @var integer Whether automatic fixing is supported and hosts that support automatic fixing, 0=No 1=Yes
     */
    public $FixSwitch;

    /**
     * @var integer id of the last scan task
     */
    public $TaskId;

    /**
     * @var integer Support defense, 0: no support 1: support
     */
    public $IsSupportDefense;

    /**
     * @var integer Number of Attacks Defended
     */
    public $DefenseAttackCount;

    /**
     * @var string first occurrence time
     */
    public $FirstAppearTime;

    /**
     * @var integer Vulnerability Category 1: web-cms Vulnerability 2: Application Vulnerability 4: Linux Software Vulnerability 5: Windows System Vulnerability
     */
    public $VulCategory;

    /**
     * @var integer Attack intensity level.
     */
    public $AttackLevel;

    /**
     * @var boolean Whether a restart is required after vulnerability repair.
     */
    public $FixNoNeedRestart;

    /**
     * @var integer Detection method. 0: version comparison, 1: POC verification.
     */
    public $Method;

    /**
     * @var integer Whether vulnerability fixing is supported. 0: not supported; 1: supported.
     */
    public $VulFixSwitch;

    /**
     * @var string Latest remediation time
     */
    public $LatestFixTime;

    /**
     * @var integer Number of application protection activations for machines with vulnerability correspondence
     */
    public $RaspOpenNodeCount;

    /**
     * @var integer Number of application protection deactivations for machines with vulnerability correspondence
     */
    public $RaspClosedNodeCount;

    /**
     * @param string $Ids IDs of events corresponding to a vulnerability, separated by commas (,)
     * @param string $Name Vulnerability name
     * @param integer $Status 0: pending; 1: ignored; 3: fixed; 5: detecting; 6: fixing; 8: fixing failed
     * @param integer $VulId Vulnerability ID
     * @param string $PublishTime Vulnerability disclosure time
     * @param string $LastTime Last detection time
     * @param integer $HostCount Number of affected hosts
     * @param integer $Level Vulnerability level. 1: low-risk; 2: medium-risk; 3: high-risk; 4: critical.
     * @param integer $From Obsolete
     * @param string $Descript Description
     * @param string $PublishTimeWisteria Obsolete
     * @param string $NameWisteria Obsolete
     * @param string $DescriptWisteria Obsolete
     * @param string $StatusStr Event status after aggregation
     * @param string $CveId CVE ID
     * @param float $CvssScore CVSS score
     * @param string $Labels Vulnerability Tags, Separated by Multiple Commas

EXP exists
Wild Attacks: KNOWN_EXPLOITED
LOCAL: Local use
Mandatory vulnerabilities: NEED_FIX
RemoteExploit:NETWORK
POC exists: POC
System RESTART
     * @param integer $FixSwitch Whether automatic fixing is supported and hosts that support automatic fixing, 0=No 1=Yes
     * @param integer $TaskId id of the last scan task
     * @param integer $IsSupportDefense Support defense, 0: no support 1: support
     * @param integer $DefenseAttackCount Number of Attacks Defended
     * @param string $FirstAppearTime first occurrence time
     * @param integer $VulCategory Vulnerability Category 1: web-cms Vulnerability 2: Application Vulnerability 4: Linux Software Vulnerability 5: Windows System Vulnerability
     * @param integer $AttackLevel Attack intensity level.
     * @param boolean $FixNoNeedRestart Whether a restart is required after vulnerability repair.
     * @param integer $Method Detection method. 0: version comparison, 1: POC verification.
     * @param integer $VulFixSwitch Whether vulnerability fixing is supported. 0: not supported; 1: supported.
     * @param string $LatestFixTime Latest remediation time
     * @param integer $RaspOpenNodeCount Number of application protection activations for machines with vulnerability correspondence
     * @param integer $RaspClosedNodeCount Number of application protection deactivations for machines with vulnerability correspondence
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
        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("Descript",$param) and $param["Descript"] !== null) {
            $this->Descript = $param["Descript"];
        }

        if (array_key_exists("PublishTimeWisteria",$param) and $param["PublishTimeWisteria"] !== null) {
            $this->PublishTimeWisteria = $param["PublishTimeWisteria"];
        }

        if (array_key_exists("NameWisteria",$param) and $param["NameWisteria"] !== null) {
            $this->NameWisteria = $param["NameWisteria"];
        }

        if (array_key_exists("DescriptWisteria",$param) and $param["DescriptWisteria"] !== null) {
            $this->DescriptWisteria = $param["DescriptWisteria"];
        }

        if (array_key_exists("StatusStr",$param) and $param["StatusStr"] !== null) {
            $this->StatusStr = $param["StatusStr"];
        }

        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }

        if (array_key_exists("CvssScore",$param) and $param["CvssScore"] !== null) {
            $this->CvssScore = $param["CvssScore"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("FixSwitch",$param) and $param["FixSwitch"] !== null) {
            $this->FixSwitch = $param["FixSwitch"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("IsSupportDefense",$param) and $param["IsSupportDefense"] !== null) {
            $this->IsSupportDefense = $param["IsSupportDefense"];
        }

        if (array_key_exists("DefenseAttackCount",$param) and $param["DefenseAttackCount"] !== null) {
            $this->DefenseAttackCount = $param["DefenseAttackCount"];
        }

        if (array_key_exists("FirstAppearTime",$param) and $param["FirstAppearTime"] !== null) {
            $this->FirstAppearTime = $param["FirstAppearTime"];
        }

        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }

        if (array_key_exists("AttackLevel",$param) and $param["AttackLevel"] !== null) {
            $this->AttackLevel = $param["AttackLevel"];
        }

        if (array_key_exists("FixNoNeedRestart",$param) and $param["FixNoNeedRestart"] !== null) {
            $this->FixNoNeedRestart = $param["FixNoNeedRestart"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("VulFixSwitch",$param) and $param["VulFixSwitch"] !== null) {
            $this->VulFixSwitch = $param["VulFixSwitch"];
        }

        if (array_key_exists("LatestFixTime",$param) and $param["LatestFixTime"] !== null) {
            $this->LatestFixTime = $param["LatestFixTime"];
        }

        if (array_key_exists("RaspOpenNodeCount",$param) and $param["RaspOpenNodeCount"] !== null) {
            $this->RaspOpenNodeCount = $param["RaspOpenNodeCount"];
        }

        if (array_key_exists("RaspClosedNodeCount",$param) and $param["RaspClosedNodeCount"] !== null) {
            $this->RaspClosedNodeCount = $param["RaspClosedNodeCount"];
        }
    }
}
