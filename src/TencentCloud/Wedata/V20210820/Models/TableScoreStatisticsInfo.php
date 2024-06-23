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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Table Scoring Statistics
 *
 * @method integer getLevel() Obtain Levels 1,2,3,4,5
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLevel(integer $Level) Set Levels 1,2,3,4,5
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getScale() Obtain PercentageNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setScale(integer $Scale) Set PercentageNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTableNumber() Obtain Table quantityNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableNumber(integer $TableNumber) Set Table quantityNote: This field may return null, indicating that no valid value can be obtained.
 */
class TableScoreStatisticsInfo extends AbstractModel
{
    /**
     * @var integer Levels 1,2,3,4,5
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Level;

    /**
     * @var integer PercentageNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Scale;

    /**
     * @var integer Table quantityNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableNumber;

    /**
     * @param integer $Level Levels 1,2,3,4,5
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Scale PercentageNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TableNumber Table quantityNote: This field may return null, indicating that no valid value can be obtained.
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

        if (array_key_exists("Scale",$param) and $param["Scale"] !== null) {
            $this->Scale = $param["Scale"];
        }

        if (array_key_exists("TableNumber",$param) and $param["TableNumber"] !== null) {
            $this->TableNumber = $param["TableNumber"];
        }
    }
}
