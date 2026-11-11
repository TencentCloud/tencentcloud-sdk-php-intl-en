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
 * Asset baseline risk
 *
 * @method string getRiskID() Obtain <p>Unique identifier of a risk record.</p>
 * @method void setRiskID(string $RiskID) Set <p>Unique identifier of a risk record.</p>
 * @method BaselineItem getItem() Obtain <p>Detection item details.</p>
 * @method void setItem(BaselineItem $Item) Set <p>Detection item details.</p>
 * @method string getLatestCheckTime() Obtain <p>Most recent detection time (ISO 8601 format).</p>
 * @method void setLatestCheckTime(string $LatestCheckTime) Set <p>Most recent detection time (ISO 8601 format).</p>
 * @method string getResultStatus() Obtain <p>Detection result status. Parameter values:</p><ul><li>NOT_PASS: failed</li><li>PASS: passed</li><li>CHECKING: in-progress detection</li></ul><p></p>
 * @method void setResultStatus(string $ResultStatus) Set <p>Detection result status. Parameter values:</p><ul><li>NOT_PASS: failed</li><li>PASS: passed</li><li>CHECKING: in-progress detection</li></ul><p></p>
 * @method BaselinePolicyBrief getPolicyInfo() Obtain <p>Brief information of the associated baseline policy.</p>
 * @method void setPolicyInfo(BaselinePolicyBrief $PolicyInfo) Set <p>Brief information of the associated baseline policy.</p>
 */
class AssetBaselineRisk extends AbstractModel
{
    /**
     * @var string <p>Unique identifier of a risk record.</p>
     */
    public $RiskID;

    /**
     * @var BaselineItem <p>Detection item details.</p>
     */
    public $Item;

    /**
     * @var string <p>Most recent detection time (ISO 8601 format).</p>
     */
    public $LatestCheckTime;

    /**
     * @var string <p>Detection result status. Parameter values:</p><ul><li>NOT_PASS: failed</li><li>PASS: passed</li><li>CHECKING: in-progress detection</li></ul><p></p>
     */
    public $ResultStatus;

    /**
     * @var BaselinePolicyBrief <p>Brief information of the associated baseline policy.</p>
     */
    public $PolicyInfo;

    /**
     * @param string $RiskID <p>Unique identifier of a risk record.</p>
     * @param BaselineItem $Item <p>Detection item details.</p>
     * @param string $LatestCheckTime <p>Most recent detection time (ISO 8601 format).</p>
     * @param string $ResultStatus <p>Detection result status. Parameter values:</p><ul><li>NOT_PASS: failed</li><li>PASS: passed</li><li>CHECKING: in-progress detection</li></ul><p></p>
     * @param BaselinePolicyBrief $PolicyInfo <p>Brief information of the associated baseline policy.</p>
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

        if (array_key_exists("Item",$param) and $param["Item"] !== null) {
            $this->Item = new BaselineItem();
            $this->Item->deserialize($param["Item"]);
        }

        if (array_key_exists("LatestCheckTime",$param) and $param["LatestCheckTime"] !== null) {
            $this->LatestCheckTime = $param["LatestCheckTime"];
        }

        if (array_key_exists("ResultStatus",$param) and $param["ResultStatus"] !== null) {
            $this->ResultStatus = $param["ResultStatus"];
        }

        if (array_key_exists("PolicyInfo",$param) and $param["PolicyInfo"] !== null) {
            $this->PolicyInfo = new BaselinePolicyBrief();
            $this->PolicyInfo->deserialize($param["PolicyInfo"]);
        }
    }
}
