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
 * Associated details of dspm data identification classification data items
 *
 * @method integer getComplianceId() Obtain <p>Identification template ID</p>
 * @method void setComplianceId(integer $ComplianceId) Set <p>Identification template ID</p>
 * @method integer getCategoryId() Obtain <p>Category ID</p>
 * @method void setCategoryId(integer $CategoryId) Set <p>Category ID</p>
 * @method integer getRuleId() Obtain <p>Data item ID</p>
 * @method void setRuleId(integer $RuleId) Set <p>Data item ID</p>
 * @method string getRuleName() Obtain <p>Data item name.</p>
 * @method void setRuleName(string $RuleName) Set <p>Data item name.</p>
 * @method integer getLevelId() Obtain <p>Level ID</p>
 * @method void setLevelId(integer $LevelId) Set <p>Level ID</p>
 * @method string getLevelName() Obtain <p>Level name</p>
 * @method void setLevelName(string $LevelName) Set <p>Level name</p>
 */
class DspmIdentifyCategoryRuleRelateDetailItem extends AbstractModel
{
    /**
     * @var integer <p>Identification template ID</p>
     */
    public $ComplianceId;

    /**
     * @var integer <p>Category ID</p>
     */
    public $CategoryId;

    /**
     * @var integer <p>Data item ID</p>
     */
    public $RuleId;

    /**
     * @var string <p>Data item name.</p>
     */
    public $RuleName;

    /**
     * @var integer <p>Level ID</p>
     */
    public $LevelId;

    /**
     * @var string <p>Level name</p>
     */
    public $LevelName;

    /**
     * @param integer $ComplianceId <p>Identification template ID</p>
     * @param integer $CategoryId <p>Category ID</p>
     * @param integer $RuleId <p>Data item ID</p>
     * @param string $RuleName <p>Data item name.</p>
     * @param integer $LevelId <p>Level ID</p>
     * @param string $LevelName <p>Level name</p>
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
        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("LevelId",$param) and $param["LevelId"] !== null) {
            $this->LevelId = $param["LevelId"];
        }

        if (array_key_exists("LevelName",$param) and $param["LevelName"] !== null) {
            $this->LevelName = $param["LevelName"];
        }
    }
}
