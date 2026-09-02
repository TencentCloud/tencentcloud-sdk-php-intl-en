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
 * Cloud resource configuration detection clause fund
 *
 * @method integer getTermID() Obtain <p>Clause ID</p>
 * @method void setTermID(integer $TermID) Set <p>Clause ID</p>
 * @method string getDescription() Obtain <p>Clause description.</p>
 * @method void setDescription(string $Description) Set <p>Clause description.</p>
 * @method string getName() Obtain <p>Term name</p>
 * @method void setName(string $Name) Set <p>Term name</p>
 * @method integer getRuleCount() Obtain <p>Number of association rules</p>
 * @method void setRuleCount(integer $RuleCount) Set <p>Number of association rules</p>
 * @method string getRationale() Obtain <p>Clause principle</p>
 * @method void setRationale(string $Rationale) Set <p>Clause principle</p>
 * @method string getSn() Obtain <p>No.</p>
 * @method void setSn(string $Sn) Set <p>No.</p>
 */
class ComplianceTermItem extends AbstractModel
{
    /**
     * @var integer <p>Clause ID</p>
     */
    public $TermID;

    /**
     * @var string <p>Clause description.</p>
     */
    public $Description;

    /**
     * @var string <p>Term name</p>
     */
    public $Name;

    /**
     * @var integer <p>Number of association rules</p>
     */
    public $RuleCount;

    /**
     * @var string <p>Clause principle</p>
     */
    public $Rationale;

    /**
     * @var string <p>No.</p>
     */
    public $Sn;

    /**
     * @param integer $TermID <p>Clause ID</p>
     * @param string $Description <p>Clause description.</p>
     * @param string $Name <p>Term name</p>
     * @param integer $RuleCount <p>Number of association rules</p>
     * @param string $Rationale <p>Clause principle</p>
     * @param string $Sn <p>No.</p>
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
        if (array_key_exists("TermID",$param) and $param["TermID"] !== null) {
            $this->TermID = $param["TermID"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RuleCount",$param) and $param["RuleCount"] !== null) {
            $this->RuleCount = $param["RuleCount"];
        }

        if (array_key_exists("Rationale",$param) and $param["Rationale"] !== null) {
            $this->Rationale = $param["Rationale"];
        }

        if (array_key_exists("Sn",$param) and $param["Sn"] !== null) {
            $this->Sn = $param["Sn"];
        }
    }
}
