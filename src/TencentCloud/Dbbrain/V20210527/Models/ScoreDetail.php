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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Deduction details.
 *
 * @method string getIssueType() Obtain Deduction item type. Valid values: `Availability`, `Maintainability`, `Performance`, `Reliability`.
 * @method void setIssueType(string $IssueType) Set Deduction item type. Valid values: `Availability`, `Maintainability`, `Performance`, `Reliability`.
 * @method integer getScoreLost() Obtain Total deducted scores.
 * @method void setScoreLost(integer $ScoreLost) Set Total deducted scores.
 * @method integer getScoreLostMax() Obtain Upper limit of the deducted scores.
 * @method void setScoreLostMax(integer $ScoreLostMax) Set Upper limit of the deducted scores.
 * @method array getItems() Obtain List of deduction items.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setItems(array $Items) Set List of deduction items.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ScoreDetail extends AbstractModel
{
    /**
     * @var string Deduction item type. Valid values: `Availability`, `Maintainability`, `Performance`, `Reliability`.
     */
    public $IssueType;

    /**
     * @var integer Total deducted scores.
     */
    public $ScoreLost;

    /**
     * @var integer Upper limit of the deducted scores.
     */
    public $ScoreLostMax;

    /**
     * @var array List of deduction items.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Items;

    /**
     * @param string $IssueType Deduction item type. Valid values: `Availability`, `Maintainability`, `Performance`, `Reliability`.
     * @param integer $ScoreLost Total deducted scores.
     * @param integer $ScoreLostMax Upper limit of the deducted scores.
     * @param array $Items List of deduction items.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("IssueType",$param) and $param["IssueType"] !== null) {
            $this->IssueType = $param["IssueType"];
        }

        if (array_key_exists("ScoreLost",$param) and $param["ScoreLost"] !== null) {
            $this->ScoreLost = $param["ScoreLost"];
        }

        if (array_key_exists("ScoreLostMax",$param) and $param["ScoreLostMax"] !== null) {
            $this->ScoreLostMax = $param["ScoreLostMax"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new ScoreItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
