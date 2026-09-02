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
 * Matched rule items
 *
 * @method string getRuleID() Obtain Fusion rule number
Parameter format: such as 9xxxx
 * @method void setRuleID(string $RuleID) Set Fusion rule number
Parameter format: such as 9xxxx
 * @method string getDescription() Obtain Risk discovery description
 * @method void setDescription(string $Description) Set Risk discovery description
 */
class SkillScanRuleHit extends AbstractModel
{
    /**
     * @var string Fusion rule number
Parameter format: such as 9xxxx
     */
    public $RuleID;

    /**
     * @var string Risk discovery description
     */
    public $Description;

    /**
     * @param string $RuleID Fusion rule number
Parameter format: such as 9xxxx
     * @param string $Description Risk discovery description
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
