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
 * Vulnerability repair summary
 *
 * @method integer getVulId() Obtain <p>Vulnerability ID</p>
 * @method void setVulId(integer $VulId) Set <p>Vulnerability ID</p>
 * @method string getVulName() Obtain <p>Vulnerability name</p>
 * @method void setVulName(string $VulName) Set <p>Vulnerability name</p>
 * @method string getCveId() Obtain <p>CVE id</p>
 * @method void setCveId(string $CveId) Set <p>CVE id</p>
 * @method integer getAffectedCount() Obtain <p>Number of affected hosts</p>
 * @method void setAffectedCount(integer $AffectedCount) Set <p>Number of affected hosts</p>
 * @method boolean getNeedReboot() Obtain <p>Whether restart is required after repair</p>
 * @method void setNeedReboot(boolean $NeedReboot) Set <p>Whether restart is required after repair</p>
 * @method boolean getFixSwitch() Obtain <p>Whether one-click repair is supported true-supported false-unsupported</p>
 * @method void setFixSwitch(boolean $FixSwitch) Set <p>Whether one-click repair is supported true-supported false-unsupported</p>
 */
class VulFixSummaryItem extends AbstractModel
{
    /**
     * @var integer <p>Vulnerability ID</p>
     */
    public $VulId;

    /**
     * @var string <p>Vulnerability name</p>
     */
    public $VulName;

    /**
     * @var string <p>CVE id</p>
     */
    public $CveId;

    /**
     * @var integer <p>Number of affected hosts</p>
     */
    public $AffectedCount;

    /**
     * @var boolean <p>Whether restart is required after repair</p>
     */
    public $NeedReboot;

    /**
     * @var boolean <p>Whether one-click repair is supported true-supported false-unsupported</p>
     */
    public $FixSwitch;

    /**
     * @param integer $VulId <p>Vulnerability ID</p>
     * @param string $VulName <p>Vulnerability name</p>
     * @param string $CveId <p>CVE id</p>
     * @param integer $AffectedCount <p>Number of affected hosts</p>
     * @param boolean $NeedReboot <p>Whether restart is required after repair</p>
     * @param boolean $FixSwitch <p>Whether one-click repair is supported true-supported false-unsupported</p>
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }

        if (array_key_exists("AffectedCount",$param) and $param["AffectedCount"] !== null) {
            $this->AffectedCount = $param["AffectedCount"];
        }

        if (array_key_exists("NeedReboot",$param) and $param["NeedReboot"] !== null) {
            $this->NeedReboot = $param["NeedReboot"];
        }

        if (array_key_exists("FixSwitch",$param) and $param["FixSwitch"] !== null) {
            $this->FixSwitch = $param["FixSwitch"];
        }
    }
}
