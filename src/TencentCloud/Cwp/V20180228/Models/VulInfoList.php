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
 * @method integer getFrom() Obtain This field has been deprecated.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFrom(integer $From) Set This field has been deprecated.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescript() Obtain Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescript(string $Descript) Set Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPublishTimeWisteria() Obtain This field has been deprecated.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPublishTimeWisteria(string $PublishTimeWisteria) Set This field has been deprecated.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNameWisteria() Obtain This field has been deprecated.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNameWisteria(string $NameWisteria) Set This field has been deprecated.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescriptWisteria() Obtain This field has been deprecated.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescriptWisteria(string $DescriptWisteria) Set This field has been deprecated.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatusStr() Obtain Event status after aggregation
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatusStr(string $StatusStr) Set Event status after aggregation
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCveId() Obtain CVE ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCveId(string $CveId) Set CVE ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getCvssScore() Obtain CVSS score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCvssScore(float $CvssScore) Set CVSS score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLabels() Obtain Vulnerability tags, separated by multiple commas
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabels(string $Labels) Set Vulnerability tags, separated by multiple commas
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFixSwitch() Obtain Whether automatic fixing is supported and hosts that support automatic fixing are included. 0: no; 1: yes.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFixSwitch(integer $FixSwitch) Set Whether automatic fixing is supported and hosts that support automatic fixing are included. 0: no; 1: yes.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskId() Obtain ID of the last scan task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(integer $TaskId) Set ID of the last scan task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsSupportDefense() Obtain Whether defense is supported. 0: not supported; 1: supported.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsSupportDefense(integer $IsSupportDefense) Set Whether defense is supported. 0: not supported; 1: supported.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDefenseAttackCount() Obtain Number of attacks defended
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefenseAttackCount(integer $DefenseAttackCount) Set Number of attacks defended
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstAppearTime() Obtain First occurrence time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFirstAppearTime(string $FirstAppearTime) Set First occurrence time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVulCategory() Obtain Vulnerability category. 1: web CMS vulnerability; 2: application vulnerability; 4: Linux software vulnerability; 5: Windows system vulnerability.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVulCategory(integer $VulCategory) Set Vulnerability category. 1: web CMS vulnerability; 2: application vulnerability; 4: Linux software vulnerability; 5: Windows system vulnerability.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAttackLevel() Obtain Attack intensity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackLevel(integer $AttackLevel) Set Attack intensity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getFixNoNeedRestart() Obtain Whether a restart is required after the vulnerability is fixed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFixNoNeedRestart(boolean $FixNoNeedRestart) Set Whether a restart is required after the vulnerability is fixed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMethod() Obtain Detection method. 0: version comparison; 1: POC verification.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMethod(integer $Method) Set Detection method. 0: version comparison; 1: POC verification.Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var integer This field has been deprecated.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $From;

    /**
     * @var string Description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Descript;

    /**
     * @var string This field has been deprecated.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PublishTimeWisteria;

    /**
     * @var string This field has been deprecated.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NameWisteria;

    /**
     * @var string This field has been deprecated.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DescriptWisteria;

    /**
     * @var string Event status after aggregation
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StatusStr;

    /**
     * @var string CVE ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CveId;

    /**
     * @var float CVSS score
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CvssScore;

    /**
     * @var string Vulnerability tags, separated by multiple commas
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Labels;

    /**
     * @var integer Whether automatic fixing is supported and hosts that support automatic fixing are included. 0: no; 1: yes.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FixSwitch;

    /**
     * @var integer ID of the last scan task
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var integer Whether defense is supported. 0: not supported; 1: supported.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsSupportDefense;

    /**
     * @var integer Number of attacks defended
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefenseAttackCount;

    /**
     * @var string First occurrence time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FirstAppearTime;

    /**
     * @var integer Vulnerability category. 1: web CMS vulnerability; 2: application vulnerability; 4: Linux software vulnerability; 5: Windows system vulnerability.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VulCategory;

    /**
     * @var integer Attack intensity
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackLevel;

    /**
     * @var boolean Whether a restart is required after the vulnerability is fixed
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FixNoNeedRestart;

    /**
     * @var integer Detection method. 0: version comparison; 1: POC verification.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Method;

    /**
     * @param string $Ids IDs of events corresponding to a vulnerability, separated by commas (,)
     * @param string $Name Vulnerability name
     * @param integer $Status 0: pending; 1: ignored; 3: fixed; 5: detecting; 6: fixing; 8: fixing failed
     * @param integer $VulId Vulnerability ID
     * @param string $PublishTime Vulnerability disclosure time
     * @param string $LastTime Last detection time
     * @param integer $HostCount Number of affected hosts
     * @param integer $Level Vulnerability level. 1: low-risk; 2: medium-risk; 3: high-risk; 4: critical.
     * @param integer $From This field has been deprecated.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Descript Description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PublishTimeWisteria This field has been deprecated.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NameWisteria This field has been deprecated.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DescriptWisteria This field has been deprecated.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StatusStr Event status after aggregation
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CveId CVE ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $CvssScore CVSS score
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Labels Vulnerability tags, separated by multiple commas
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FixSwitch Whether automatic fixing is supported and hosts that support automatic fixing are included. 0: no; 1: yes.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskId ID of the last scan task
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsSupportDefense Whether defense is supported. 0: not supported; 1: supported.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DefenseAttackCount Number of attacks defended
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstAppearTime First occurrence time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VulCategory Vulnerability category. 1: web CMS vulnerability; 2: application vulnerability; 4: Linux software vulnerability; 5: Windows system vulnerability.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AttackLevel Attack intensity
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $FixNoNeedRestart Whether a restart is required after the vulnerability is fixed
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Method Detection method. 0: version comparison; 1: POC verification.Note: This field may return null, indicating that no valid values can be obtained.
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
    }
}
