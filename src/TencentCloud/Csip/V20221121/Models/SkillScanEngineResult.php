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
 * Scanning result of the sub-engine
 *
 * @method string getScanType() Obtain Sub-engine type.
Enumeration values:
AI: AI engine
STATIC: static analysis engine
 * @method void setScanType(string $ScanType) Set Sub-engine type.
Enumeration values:
AI: AI engine
STATIC: static analysis engine
 * @method array getRuleList() Obtain Hit rule list.
 * @method void setRuleList(array $RuleList) Set Hit rule list.
 */
class SkillScanEngineResult extends AbstractModel
{
    /**
     * @var string Sub-engine type.
Enumeration values:
AI: AI engine
STATIC: static analysis engine
     */
    public $ScanType;

    /**
     * @var array Hit rule list.
     */
    public $RuleList;

    /**
     * @param string $ScanType Sub-engine type.
Enumeration values:
AI: AI engine
STATIC: static analysis engine
     * @param array $RuleList Hit rule list.
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
        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }

        if (array_key_exists("RuleList",$param) and $param["RuleList"] !== null) {
            $this->RuleList = [];
            foreach ($param["RuleList"] as $key => $value){
                $obj = new SkillScanRuleHit();
                $obj->deserialize($value);
                array_push($this->RuleList, $obj);
            }
        }
    }
}
