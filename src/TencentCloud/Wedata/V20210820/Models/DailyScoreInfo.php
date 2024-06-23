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
 * Daily Rating Information
 *
 * @method integer getStatisticsDate() Obtain Statistics Date TimestampNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setStatisticsDate(integer $StatisticsDate) Set Statistics Date TimestampNote: This field may return null, indicating that no valid value can be obtained.
 * @method float getScore() Obtain ScoringNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setScore(float $Score) Set ScoringNote: This field may return null, indicating that no valid value can be obtained.
 */
class DailyScoreInfo extends AbstractModel
{
    /**
     * @var integer Statistics Date TimestampNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $StatisticsDate;

    /**
     * @var float ScoringNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Score;

    /**
     * @param integer $StatisticsDate Statistics Date TimestampNote: This field may return null, indicating that no valid value can be obtained.
     * @param float $Score ScoringNote: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("StatisticsDate",$param) and $param["StatisticsDate"] !== null) {
            $this->StatisticsDate = $param["StatisticsDate"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}
