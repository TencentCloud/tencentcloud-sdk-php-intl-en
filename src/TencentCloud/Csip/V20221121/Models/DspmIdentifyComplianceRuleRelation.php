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
 * Association relationships of data items in the dspm data identification template
 *
 * @method integer getRuleId() Obtain <p>Data item ID</p>
 * @method void setRuleId(integer $RuleId) Set <p>Data item ID</p>
 * @method string getRuleName() Obtain <p>Data item name.</p>
 * @method void setRuleName(string $RuleName) Set <p>Data item name.</p>
 * @method integer getLevelId() Obtain <p>Level ID</p>
 * @method void setLevelId(integer $LevelId) Set <p>Level ID</p>
 * @method string getLevelName() Obtain <p>Level name</p>
 * @method void setLevelName(string $LevelName) Set <p>Level name</p>
 * @method integer getLevelScore() Obtain <p>Level</p><p>Unit: score</p>
 * @method void setLevelScore(integer $LevelScore) Set <p>Level</p><p>Unit: score</p>
 * @method integer getStructuredStatus() Obtain <p>Structured rule status</p><p>Enumeration values:</p><ul><li>0: Unconfigured</li><li>1: Configured</li></ul>
 * @method void setStructuredStatus(integer $StructuredStatus) Set <p>Structured rule status</p><p>Enumeration values:</p><ul><li>0: Unconfigured</li><li>1: Configured</li></ul>
 * @method integer getUnStructuredStatus() Obtain <p>Unstructured rule status</p><p>Enumeration values:</p><ul><li>0: no configuration</li><li>1: configured</li></ul>
 * @method void setUnStructuredStatus(integer $UnStructuredStatus) Set <p>Unstructured rule status</p><p>Enumeration values:</p><ul><li>0: no configuration</li><li>1: configured</li></ul>
 * @method integer getStatus() Obtain <p>Data item status</p><p>Enumeration values:</p><ul><li>0: Not enabled</li><li>1: Enabled</li></ul>
 * @method void setStatus(integer $Status) Set <p>Data item status</p><p>Enumeration values:</p><ul><li>0: Not enabled</li><li>1: Enabled</li></ul>
 */
class DspmIdentifyComplianceRuleRelation extends AbstractModel
{
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
     * @var integer <p>Level</p><p>Unit: score</p>
     */
    public $LevelScore;

    /**
     * @var integer <p>Structured rule status</p><p>Enumeration values:</p><ul><li>0: Unconfigured</li><li>1: Configured</li></ul>
     */
    public $StructuredStatus;

    /**
     * @var integer <p>Unstructured rule status</p><p>Enumeration values:</p><ul><li>0: no configuration</li><li>1: configured</li></ul>
     */
    public $UnStructuredStatus;

    /**
     * @var integer <p>Data item status</p><p>Enumeration values:</p><ul><li>0: Not enabled</li><li>1: Enabled</li></ul>
     */
    public $Status;

    /**
     * @param integer $RuleId <p>Data item ID</p>
     * @param string $RuleName <p>Data item name.</p>
     * @param integer $LevelId <p>Level ID</p>
     * @param string $LevelName <p>Level name</p>
     * @param integer $LevelScore <p>Level</p><p>Unit: score</p>
     * @param integer $StructuredStatus <p>Structured rule status</p><p>Enumeration values:</p><ul><li>0: Unconfigured</li><li>1: Configured</li></ul>
     * @param integer $UnStructuredStatus <p>Unstructured rule status</p><p>Enumeration values:</p><ul><li>0: no configuration</li><li>1: configured</li></ul>
     * @param integer $Status <p>Data item status</p><p>Enumeration values:</p><ul><li>0: Not enabled</li><li>1: Enabled</li></ul>
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

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("LevelId",$param) and $param["LevelId"] !== null) {
            $this->LevelId = $param["LevelId"];
        }

        if (array_key_exists("LevelName",$param) and $param["LevelName"] !== null) {
            $this->LevelName = $param["LevelName"];
        }

        if (array_key_exists("LevelScore",$param) and $param["LevelScore"] !== null) {
            $this->LevelScore = $param["LevelScore"];
        }

        if (array_key_exists("StructuredStatus",$param) and $param["StructuredStatus"] !== null) {
            $this->StructuredStatus = $param["StructuredStatus"];
        }

        if (array_key_exists("UnStructuredStatus",$param) and $param["UnStructuredStatus"] !== null) {
            $this->UnStructuredStatus = $param["UnStructuredStatus"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
