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
 * IaC detection file risk
 *
 * @method integer getLevel() Obtain <p>Risk level (0: low-risk, 1: medium-risk, 2: high-risk, 3: critical)</p>
 * @method void setLevel(integer $Level) Set <p>Risk level (0: low-risk, 1: medium-risk, 2: high-risk, 3: critical)</p>
 * @method integer getLine() Obtain <p>Row count of risk location</p>
 * @method void setLine(integer $Line) Set <p>Row count of risk location</p>
 * @method string getRuleName() Obtain <p>rule name</p>
 * @method void setRuleName(string $RuleName) Set <p>rule name</p>
 * @method string getDescription() Obtain <p>Problem description</p>
 * @method void setDescription(string $Description) Set <p>Problem description</p>
 * @method string getSuggestion() Obtain <p>Repair recommendation</p>
 * @method void setSuggestion(string $Suggestion) Set <p>Repair recommendation</p>
 */
class IaCFileRisk extends AbstractModel
{
    /**
     * @var integer <p>Risk level (0: low-risk, 1: medium-risk, 2: high-risk, 3: critical)</p>
     */
    public $Level;

    /**
     * @var integer <p>Row count of risk location</p>
     */
    public $Line;

    /**
     * @var string <p>rule name</p>
     */
    public $RuleName;

    /**
     * @var string <p>Problem description</p>
     */
    public $Description;

    /**
     * @var string <p>Repair recommendation</p>
     */
    public $Suggestion;

    /**
     * @param integer $Level <p>Risk level (0: low-risk, 1: medium-risk, 2: high-risk, 3: critical)</p>
     * @param integer $Line <p>Row count of risk location</p>
     * @param string $RuleName <p>rule name</p>
     * @param string $Description <p>Problem description</p>
     * @param string $Suggestion <p>Repair recommendation</p>
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
        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Line",$param) and $param["Line"] !== null) {
            $this->Line = $param["Line"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }
    }
}
