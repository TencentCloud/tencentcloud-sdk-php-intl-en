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
 * Diagnosis deduction item.
 *
 * @method string getDiagItem() Obtain Exception diagnosis item name.
 * @method void setDiagItem(string $DiagItem) Set Exception diagnosis item name.
 * @method string getIssueType() Obtain Diagnosis item type. Valid values: `Availability`, `Maintainability`, `Performance`, `Reliability`.
 * @method void setIssueType(string $IssueType) Set Diagnosis item type. Valid values: `Availability`, `Maintainability`, `Performance`, `Reliability`.
 * @method string getTopSeverity() Obtain Health level. Valid values: `Healthy`, `Reminder`, `Alarm`, `Severe`, `Critical`.
 * @method void setTopSeverity(string $TopSeverity) Set Health level. Valid values: `Healthy`, `Reminder`, `Alarm`, `Severe`, `Critical`.
 * @method integer getCount() Obtain Number of occurrences of this exception diagnosis item.
 * @method void setCount(integer $Count) Set Number of occurrences of this exception diagnosis item.
 * @method integer getScoreLost() Obtain Deducted scores.
 * @method void setScoreLost(integer $ScoreLost) Set Deducted scores.
 */
class ScoreItem extends AbstractModel
{
    /**
     * @var string Exception diagnosis item name.
     */
    public $DiagItem;

    /**
     * @var string Diagnosis item type. Valid values: `Availability`, `Maintainability`, `Performance`, `Reliability`.
     */
    public $IssueType;

    /**
     * @var string Health level. Valid values: `Healthy`, `Reminder`, `Alarm`, `Severe`, `Critical`.
     */
    public $TopSeverity;

    /**
     * @var integer Number of occurrences of this exception diagnosis item.
     */
    public $Count;

    /**
     * @var integer Deducted scores.
     */
    public $ScoreLost;

    /**
     * @param string $DiagItem Exception diagnosis item name.
     * @param string $IssueType Diagnosis item type. Valid values: `Availability`, `Maintainability`, `Performance`, `Reliability`.
     * @param string $TopSeverity Health level. Valid values: `Healthy`, `Reminder`, `Alarm`, `Severe`, `Critical`.
     * @param integer $Count Number of occurrences of this exception diagnosis item.
     * @param integer $ScoreLost Deducted scores.
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
        if (array_key_exists("DiagItem",$param) and $param["DiagItem"] !== null) {
            $this->DiagItem = $param["DiagItem"];
        }

        if (array_key_exists("IssueType",$param) and $param["IssueType"] !== null) {
            $this->IssueType = $param["IssueType"];
        }

        if (array_key_exists("TopSeverity",$param) and $param["TopSeverity"] !== null) {
            $this->TopSeverity = $param["TopSeverity"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("ScoreLost",$param) and $param["ScoreLost"] !== null) {
            $this->ScoreLost = $param["ScoreLost"];
        }
    }
}
