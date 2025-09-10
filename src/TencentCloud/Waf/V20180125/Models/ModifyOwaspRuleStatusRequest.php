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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyOwaspRuleStatus request structure.
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method integer getRuleStatus() Obtain Rule switch. valid values: 0 (disabled), 1 (enabled), 2 (observation only).
 * @method void setRuleStatus(integer $RuleStatus) Set Rule switch. valid values: 0 (disabled), 1 (enabled), 2 (observation only).
 * @method boolean getSelectAll() Obtain Specifies whether to select all.
 * @method void setSelectAll(boolean $SelectAll) Set Specifies whether to select all.
 * @method array getRuleIDs() Obtain Rule ID list
 * @method void setRuleIDs(array $RuleIDs) Set Rule ID list
 * @method integer getTypeId() Obtain If reverse requires the input of data type.
 * @method void setTypeId(integer $TypeId) Set If reverse requires the input of data type.
 * @method integer getReason() Obtain Reason for modification. valid values: 0: none (compatibility record is empty). 1: avoid false positives due to business characteristics. 2: reporting of rule-based false positives. 3: gray release of core business rules. 4: others.
 * @method void setReason(integer $Reason) Set Reason for modification. valid values: 0: none (compatibility record is empty). 1: avoid false positives due to business characteristics. 2: reporting of rule-based false positives. 3: gray release of core business rules. 4: others.
 */
class ModifyOwaspRuleStatusRequest extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var integer Rule switch. valid values: 0 (disabled), 1 (enabled), 2 (observation only).
     */
    public $RuleStatus;

    /**
     * @var boolean Specifies whether to select all.
     */
    public $SelectAll;

    /**
     * @var array Rule ID list
     */
    public $RuleIDs;

    /**
     * @var integer If reverse requires the input of data type.
     */
    public $TypeId;

    /**
     * @var integer Reason for modification. valid values: 0: none (compatibility record is empty). 1: avoid false positives due to business characteristics. 2: reporting of rule-based false positives. 3: gray release of core business rules. 4: others.
     */
    public $Reason;

    /**
     * @param string $Domain Domain name
     * @param integer $RuleStatus Rule switch. valid values: 0 (disabled), 1 (enabled), 2 (observation only).
     * @param boolean $SelectAll Specifies whether to select all.
     * @param array $RuleIDs Rule ID list
     * @param integer $TypeId If reverse requires the input of data type.
     * @param integer $Reason Reason for modification. valid values: 0: none (compatibility record is empty). 1: avoid false positives due to business characteristics. 2: reporting of rule-based false positives. 3: gray release of core business rules. 4: others.
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("RuleStatus",$param) and $param["RuleStatus"] !== null) {
            $this->RuleStatus = $param["RuleStatus"];
        }

        if (array_key_exists("SelectAll",$param) and $param["SelectAll"] !== null) {
            $this->SelectAll = $param["SelectAll"];
        }

        if (array_key_exists("RuleIDs",$param) and $param["RuleIDs"] !== null) {
            $this->RuleIDs = $param["RuleIDs"];
        }

        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
