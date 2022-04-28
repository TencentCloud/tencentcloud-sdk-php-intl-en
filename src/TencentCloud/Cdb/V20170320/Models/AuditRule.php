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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audit rule
 *
 * @method string getRuleId() Obtain Audit rule ID
 * @method void setRuleId(string $RuleId) Set Audit rule ID
 * @method string getCreateTime() Obtain Creation time of audit rule in the format of 2019-03-20 17:09:13
 * @method void setCreateTime(string $CreateTime) Set Creation time of audit rule in the format of 2019-03-20 17:09:13
 * @method string getModifyTime() Obtain Last modified time of audit rule in the format of 2019-03-20 17:09:13
 * @method void setModifyTime(string $ModifyTime) Set Last modified time of audit rule in the format of 2019-03-20 17:09:13
 * @method string getRuleName() Obtain Audit rule name
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setRuleName(string $RuleName) Set Audit rule name
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getDescription() Obtain Audit rule description
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setDescription(string $Description) Set Audit rule description
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getRuleFilters() Obtain Audit rule filters
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setRuleFilters(array $RuleFilters) Set Audit rule filters
Note: This field may return `null`, indicating that no valid value was found.
 * @method boolean getAuditAll() Obtain Whether to enable full audit
 * @method void setAuditAll(boolean $AuditAll) Set Whether to enable full audit
 */
class AuditRule extends AbstractModel
{
    /**
     * @var string Audit rule ID
     */
    public $RuleId;

    /**
     * @var string Creation time of audit rule in the format of 2019-03-20 17:09:13
     */
    public $CreateTime;

    /**
     * @var string Last modified time of audit rule in the format of 2019-03-20 17:09:13
     */
    public $ModifyTime;

    /**
     * @var string Audit rule name
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $RuleName;

    /**
     * @var string Audit rule description
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Description;

    /**
     * @var array Audit rule filters
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $RuleFilters;

    /**
     * @var boolean Whether to enable full audit
     */
    public $AuditAll;

    /**
     * @param string $RuleId Audit rule ID
     * @param string $CreateTime Creation time of audit rule in the format of 2019-03-20 17:09:13
     * @param string $ModifyTime Last modified time of audit rule in the format of 2019-03-20 17:09:13
     * @param string $RuleName Audit rule name
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $Description Audit rule description
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $RuleFilters Audit rule filters
Note: This field may return `null`, indicating that no valid value was found.
     * @param boolean $AuditAll Whether to enable full audit
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RuleFilters",$param) and $param["RuleFilters"] !== null) {
            $this->RuleFilters = [];
            foreach ($param["RuleFilters"] as $key => $value){
                $obj = new AuditFilter();
                $obj->deserialize($value);
                array_push($this->RuleFilters, $obj);
            }
        }

        if (array_key_exists("AuditAll",$param) and $param["AuditAll"] !== null) {
            $this->AuditAll = $param["AuditAll"];
        }
    }
}
