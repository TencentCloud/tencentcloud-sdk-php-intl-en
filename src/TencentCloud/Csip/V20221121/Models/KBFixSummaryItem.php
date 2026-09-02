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
 * Summary of KB patch repair
 *
 * @method integer getKBId() Obtain KB patch ID
 * @method void setKBId(integer $KBId) Set KB patch ID
 * @method string getKBName() Obtain KB patch name
 * @method void setKBName(string $KBName) Set KB patch name
 * @method string getKBNo() Obtain KB No. (for example, KB5001234)
 * @method void setKBNo(string $KBNo) Set KB No. (for example, KB5001234)
 * @method integer getRelatedVulCount() Obtain Number of related vulnerabilities
 * @method void setRelatedVulCount(integer $RelatedVulCount) Set Number of related vulnerabilities
 * @method integer getAffectedCount() Obtain Number of affected hosts
 * @method void setAffectedCount(integer $AffectedCount) Set Number of affected hosts
 * @method boolean getNeedReboot() Obtain Whether a system restart is required after the repair
 * @method void setNeedReboot(boolean $NeedReboot) Set Whether a system restart is required after the repair
 * @method string getKBPreCondition() Obtain Prerequisite dependency patches (comma-separated list of KB numbers)
 * @method void setKBPreCondition(string $KBPreCondition) Set Prerequisite dependency patches (comma-separated list of KB numbers)
 */
class KBFixSummaryItem extends AbstractModel
{
    /**
     * @var integer KB patch ID
     */
    public $KBId;

    /**
     * @var string KB patch name
     */
    public $KBName;

    /**
     * @var string KB No. (for example, KB5001234)
     */
    public $KBNo;

    /**
     * @var integer Number of related vulnerabilities
     */
    public $RelatedVulCount;

    /**
     * @var integer Number of affected hosts
     */
    public $AffectedCount;

    /**
     * @var boolean Whether a system restart is required after the repair
     */
    public $NeedReboot;

    /**
     * @var string Prerequisite dependency patches (comma-separated list of KB numbers)
     */
    public $KBPreCondition;

    /**
     * @param integer $KBId KB patch ID
     * @param string $KBName KB patch name
     * @param string $KBNo KB No. (for example, KB5001234)
     * @param integer $RelatedVulCount Number of related vulnerabilities
     * @param integer $AffectedCount Number of affected hosts
     * @param boolean $NeedReboot Whether a system restart is required after the repair
     * @param string $KBPreCondition Prerequisite dependency patches (comma-separated list of KB numbers)
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
        if (array_key_exists("KBId",$param) and $param["KBId"] !== null) {
            $this->KBId = $param["KBId"];
        }

        if (array_key_exists("KBName",$param) and $param["KBName"] !== null) {
            $this->KBName = $param["KBName"];
        }

        if (array_key_exists("KBNo",$param) and $param["KBNo"] !== null) {
            $this->KBNo = $param["KBNo"];
        }

        if (array_key_exists("RelatedVulCount",$param) and $param["RelatedVulCount"] !== null) {
            $this->RelatedVulCount = $param["RelatedVulCount"];
        }

        if (array_key_exists("AffectedCount",$param) and $param["AffectedCount"] !== null) {
            $this->AffectedCount = $param["AffectedCount"];
        }

        if (array_key_exists("NeedReboot",$param) and $param["NeedReboot"] !== null) {
            $this->NeedReboot = $param["NeedReboot"];
        }

        if (array_key_exists("KBPreCondition",$param) and $param["KBPreCondition"] !== null) {
            $this->KBPreCondition = $param["KBPreCondition"];
        }
    }
}
