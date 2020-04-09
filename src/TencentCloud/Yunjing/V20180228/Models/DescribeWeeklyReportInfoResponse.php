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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWeeklyReportInfo response structure.
 *
 * @method string getCompanyName() Obtain Account owner name.
 * @method void setCompanyName(string $CompanyName) Set Account owner name.
 * @method integer getMachineNum() Obtain Total number of servers.
 * @method void setMachineNum(integer $MachineNum) Set Total number of servers.
 * @method integer getOnlineMachineNum() Obtain Number of online CWP agents
 * @method void setOnlineMachineNum(integer $OnlineMachineNum) Set Number of online CWP agents
 * @method integer getOfflineMachineNum() Obtain Number of offline CWP agents.
 * @method void setOfflineMachineNum(integer $OfflineMachineNum) Set Number of offline CWP agents.
 * @method integer getProVersionMachineNum() Obtain Number of servers on CWP Pro.
 * @method void setProVersionMachineNum(integer $ProVersionMachineNum) Set Number of servers on CWP Pro.
 * @method string getBeginDate() Obtain Weekly report start time
 * @method void setBeginDate(string $BeginDate) Set Weekly report start time
 * @method string getEndDate() Obtain Weekly report end time
 * @method void setEndDate(string $EndDate) Set Weekly report end time
 * @method string getLevel() Obtain Security level
<li>HIGH: high</li>
<li>MIDDLE: medium</li>
<li>LOW: low</li>
 * @method void setLevel(string $Level) Set Security level
<li>HIGH: high</li>
<li>MIDDLE: medium</li>
<li>LOW: low</li>
 * @method integer getMalwareNum() Obtain Number of trojan records.
 * @method void setMalwareNum(integer $MalwareNum) Set Number of trojan records.
 * @method integer getNonlocalLoginNum() Obtain Number of unusual login locations.
 * @method void setNonlocalLoginNum(integer $NonlocalLoginNum) Set Number of unusual login locations.
 * @method integer getBruteAttackSuccessNum() Obtain Number of successful brute force attacks.
 * @method void setBruteAttackSuccessNum(integer $BruteAttackSuccessNum) Set Number of successful brute force attacks.
 * @method integer getVulNum() Obtain Number of vulnerabilities.
 * @method void setVulNum(integer $VulNum) Set Number of vulnerabilities.
 * @method string getDownloadUrl() Obtain Download address for exported file.
 * @method void setDownloadUrl(string $DownloadUrl) Set Download address for exported file.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeWeeklyReportInfoResponse extends AbstractModel
{
    /**
     * @var string Account owner name.
     */
    public $CompanyName;

    /**
     * @var integer Total number of servers.
     */
    public $MachineNum;

    /**
     * @var integer Number of online CWP agents
     */
    public $OnlineMachineNum;

    /**
     * @var integer Number of offline CWP agents.
     */
    public $OfflineMachineNum;

    /**
     * @var integer Number of servers on CWP Pro.
     */
    public $ProVersionMachineNum;

    /**
     * @var string Weekly report start time
     */
    public $BeginDate;

    /**
     * @var string Weekly report end time
     */
    public $EndDate;

    /**
     * @var string Security level
<li>HIGH: high</li>
<li>MIDDLE: medium</li>
<li>LOW: low</li>
     */
    public $Level;

    /**
     * @var integer Number of trojan records.
     */
    public $MalwareNum;

    /**
     * @var integer Number of unusual login locations.
     */
    public $NonlocalLoginNum;

    /**
     * @var integer Number of successful brute force attacks.
     */
    public $BruteAttackSuccessNum;

    /**
     * @var integer Number of vulnerabilities.
     */
    public $VulNum;

    /**
     * @var string Download address for exported file.
     */
    public $DownloadUrl;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $CompanyName Account owner name.
     * @param integer $MachineNum Total number of servers.
     * @param integer $OnlineMachineNum Number of online CWP agents
     * @param integer $OfflineMachineNum Number of offline CWP agents.
     * @param integer $ProVersionMachineNum Number of servers on CWP Pro.
     * @param string $BeginDate Weekly report start time
     * @param string $EndDate Weekly report end time
     * @param string $Level Security level
<li>HIGH: high</li>
<li>MIDDLE: medium</li>
<li>LOW: low</li>
     * @param integer $MalwareNum Number of trojan records.
     * @param integer $NonlocalLoginNum Number of unusual login locations.
     * @param integer $BruteAttackSuccessNum Number of successful brute force attacks.
     * @param integer $VulNum Number of vulnerabilities.
     * @param string $DownloadUrl Download address for exported file.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }

        if (array_key_exists("MachineNum",$param) and $param["MachineNum"] !== null) {
            $this->MachineNum = $param["MachineNum"];
        }

        if (array_key_exists("OnlineMachineNum",$param) and $param["OnlineMachineNum"] !== null) {
            $this->OnlineMachineNum = $param["OnlineMachineNum"];
        }

        if (array_key_exists("OfflineMachineNum",$param) and $param["OfflineMachineNum"] !== null) {
            $this->OfflineMachineNum = $param["OfflineMachineNum"];
        }

        if (array_key_exists("ProVersionMachineNum",$param) and $param["ProVersionMachineNum"] !== null) {
            $this->ProVersionMachineNum = $param["ProVersionMachineNum"];
        }

        if (array_key_exists("BeginDate",$param) and $param["BeginDate"] !== null) {
            $this->BeginDate = $param["BeginDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("MalwareNum",$param) and $param["MalwareNum"] !== null) {
            $this->MalwareNum = $param["MalwareNum"];
        }

        if (array_key_exists("NonlocalLoginNum",$param) and $param["NonlocalLoginNum"] !== null) {
            $this->NonlocalLoginNum = $param["NonlocalLoginNum"];
        }

        if (array_key_exists("BruteAttackSuccessNum",$param) and $param["BruteAttackSuccessNum"] !== null) {
            $this->BruteAttackSuccessNum = $param["BruteAttackSuccessNum"];
        }

        if (array_key_exists("VulNum",$param) and $param["VulNum"] !== null) {
            $this->VulNum = $param["VulNum"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
