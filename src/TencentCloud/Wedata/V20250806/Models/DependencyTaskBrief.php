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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dependency Task Information - Value Reference Table:

Value description table:
| Current Task Cycle Type | Upstream Task Cycle Type | Configuration Mode | MainCyclicConfig Value | Time Dimension / Instance Scope        | SubordinateCyclicConfig Value     | offset Value                         |
| ----------------------- | ------------------------ | ------------------ | ---------------------- | -------------------------------------- | --------------------------------- | ------------------------------------ |
| HOUR_CYCLE              | YEAR_CYCLE               | Recommended Policy | YEAR                   | By Year / Current Year                 | CURRENT_YEAR                      | None                                 |
| MINUTE_CYCLE            | MONTH_CYCLE              | Recommended Policy | MONTH                  | By Month / Current Month               | CURRENT_MONTH                     | None                                 |
| DAY_CYCLE               | WEEK_CYCLE               | Recommended Policy | WEEK                   | By Week / Current Week                 | CURRENT_WEEK                      | None                                 |
| DAY_CYCLE               | WEEK_CYCLE               | Recommended Policy | DAY                    | By Day / Instance of Latest Data Time  | RECENT_DATE                       | None                                 |
| HOUR_CYCLE              | HOUR_CYCLE               | Recommended Policy | HOUR                   | By Hour / Latest Instance              | CURRENT_HOUR                      | None                                 |
| HOUR_CYCLE              | HOUR_CYCLE               | Recommended Policy | HOUR                   | By Hour / Previous Cycle               | PREVIOUS_HOUR_CYCLE               | None                                 |
| HOUR_CYCLE              | DAY_CYCLE                | Recommended Policy | DAY                    | By Day / Current Day                   | CURRENT_DAY                       | None                                 |
| WEEK_CYCLE              | DAY_CYCLE                | Recommended Policy | WEEK                   | By Week / Previous Week                | PREVIOUS_WEEK                     | None                                 |
| WEEK_CYCLE              | DAY_CYCLE                | Recommended Policy | WEEK                   | By Week / Previous Friday              | PREVIOUS_FRIDAY                   | None                                 |
| WEEK_CYCLE              | DAY_CYCLE                | Recommended Policy | WEEK                   | By Week / Previous Sunday              | PREVIOUS_WEEKEND                  | None                                 |
| WEEK_CYCLE              | DAY_CYCLE                | Recommended Policy | WEEK                   | By Week / Current Week                 | CURRENT_WEEK                      | None                                 |
| WEEK_CYCLE              | DAY_CYCLE                | Recommended Policy | DAY                    | By Day / Current Day                   | CURRENT_DAY                       | None                                 |
| WEEK_CYCLE              | DAY_CYCLE                | Recommended Policy | DAY                    | By Day / Previous Day                  | PREVIOUS_DAY                      | None                                 |
| WEEK_CYCLE              | ONEOFF_CYCLE             | Recommended Policy | WEEK                   | By Week / Current Week                 | CURRENT_WEEK                      | None                                 |
| HOUR_CYCLE              | MINUTE_CYCLE             | Recommended Policy | HOUR                   | By Hour / Previous Hour (-60,0]        | PREVIOUS_HOUR_LATER_OFFSET_MINUTE | None                                 |
| HOUR_CYCLE              | MINUTE_CYCLE             | Recommended Policy | HOUR                   | By Hour / Previous Hour                | PREVIOUS_HOUR                     | None                                 |
| HOUR_CYCLE              | MINUTE_CYCLE             | Recommended Policy | HOUR                   | By Hour / Current Hour                 | CURRENT_HOUR                      | None                                 |
| YEAR_CYCLE              | WEEK_CYCLE               | Recommended Policy | YEAR                   | By Year / Current Year                 | CURRENT_YEAR                      | None                                 |
| WEEK_CYCLE              | YEAR_CYCLE               | Recommended Policy | YEAR                   | By Year / Current Year                 | CURRENT_YEAR                      | None                                 |
| MINUTE_CYCLE            | YEAR_CYCLE               | Recommended Policy | YEAR                   | By Year / Current Year                 | CURRENT_YEAR                      | None                                 |
| WEEK_CYCLE              | HOUR_CYCLE               | Recommended Policy | WEEK                   | By Week / Previous Week                | PREVIOUS_WEEK                     | None                                 |
| WEEK_CYCLE              | HOUR_CYCLE               | Recommended Policy | WEEK                   | By Week / Current Week                 | CURRENT_WEEK                      | None                                 |
| MINUTE_CYCLE            | HOUR_CYCLE               | Recommended Policy | HOUR                   | By Hour / Current Hour                 | CURRENT_HOUR                      | None                                 |
| HOUR_CYCLE              | MONTH_CYCLE              | Recommended Policy | MONTH                  | By Month / Current Month               | CURRENT_MONTH                     | None                                 |
| MONTH_CYCLE             | HOUR_CYCLE               | Recommended Policy | MONTH                  | By Month / Previous Month              | PREVIOUS_MONTH                    | None                                 |
| MONTH_CYCLE             | HOUR_CYCLE               | Recommended Policy | MONTH                  | By Month / Current Month               | CURRENT_MONTH                     | None                                 |
| MONTH_CYCLE             | ONEOFF_CYCLE             | Recommended Policy | MONTH                  | By Month / Current Month               | CURRENT_MONTH                     | None                                 |
| DAY_CYCLE               | MONTH_CYCLE              | Recommended Policy | MONTH                  | By Month / Current Month               | CURRENT_MONTH                     | None                                 |
| DAY_CYCLE               | MONTH_CYCLE              | Recommended Policy | DAY                    | By Day / Instance of Latest Data Time  | RECENT_DATE                       | None                                 |
| MONTH_CYCLE             | YEAR_CYCLE               | Recommended Policy | YEAR                   | By Year / Current Year                 | CURRENT_YEAR                      | None                                 |
| ONEOFF_CYCLE            | WEEK_CYCLE               | Recommended Policy | WEEK                   | By Week / Current Week                 | CURRENT_WEEK                      | None                                 |
| MINUTE_CYCLE            | MINUTE_CYCLE             | Recommended Policy | MINUTE                 | By Minute / Current Minute             | CURRENT_MINUTE                    | None                                 |
| MINUTE_CYCLE            | MINUTE_CYCLE             | Recommended Policy | MINUTE                 | By Minute / Previous Cycle             | PREVIOUS_MINUTE_CYCLE             | None                                 |
| YEAR_CYCLE              | MINUTE_CYCLE             | Recommended Policy | YEAR                   | By Year / Current Year                 | CURRENT_YEAR                      | None                                 |
| ONEOFF_CYCLE            | DAY_CYCLE                | Recommended Policy | DAY                    | By Day / Current Day                   | CURRENT_DAY                       | None                                 |
| DAY_CYCLE               | MINUTE_CYCLE             | Recommended Policy | DAY                    | By Day / Previous Day (-24 * 60,0]     | PREVIOUS_DAY_LATER_OFFSET_MINUTE  | None                                 |
| DAY_CYCLE               | MINUTE_CYCLE             | Recommended Policy | DAY                    | By Day / Previous Day                  | PREVIOUS_DAY                      | None                                 |
| DAY_CYCLE               | MINUTE_CYCLE             | Recommended Policy | DAY                    | By Day / Current Day                   | CURRENT_DAY                       | None                                 |
| MINUTE_CYCLE            | DAY_CYCLE                | Recommended Policy | DAY                    | By Day / Current Day                   | CURRENT_DAY                       | None                                 |
| WEEK_CYCLE              | WEEK_CYCLE               | Recommended Policy | WEEK                   | By Week / Current Week                 | CURRENT_WEEK                      | None                                 |
| WEEK_CYCLE              | WEEK_CYCLE               | Recommended Policy | DAY                    | By Day / Instance of Latest Data Time  | RECENT_DATE                       | None                                 |
| YEAR_CYCLE              | YEAR_CYCLE               | Recommended Policy | DAY                    | By Day / Instance of Latest Data Time  | RECENT_DATE                       | None                                 |
| YEAR_CYCLE              | YEAR_CYCLE               | Recommended Policy | YEAR                   | By Year / Current Year                 | CURRENT_YEAR                      | None                                 |
| YEAR_CYCLE              | HOUR_CYCLE               | Recommended Policy | YEAR                   | By Year / Current Year                 | CURRENT_YEAR                      | None                                 |
| MINUTE_CYCLE            | WEEK_CYCLE               | Recommended Policy | WEEK                   | By Week / Current Week                 | CURRENT_WEEK                      | None                                 |
| ONEOFF_CYCLE            | MINUTE_CYCLE             | Recommended Policy | DAY                    | By Day / Current Day                   | CURRENT_DAY                       | None                                 |
| HOUR_CYCLE              | ONEOFF_CYCLE             | Recommended Policy | DAY                    | By Day / Current Day                   | CURRENT_DAY                       | None                                 |
| WEEK_CYCLE              | MINUTE_CYCLE             | Recommended Policy | WEEK                   | By Week / Previous Week                | PREVIOUS_WEEK                     | None                                 |
| WEEK_CYCLE              | MINUTE_CYCLE             | Recommended Policy | WEEK                   | By Week / Current Week                 | CURRENT_WEEK                      | None                                 |
| DAY_CYCLE               | HOUR_CYCLE               | Recommended Policy | DAY                    | By Day / Previous Day (-24,0]          | PREVIOUS_DAY_LATER_OFFSET_HOUR    | None                                 |
| DAY_CYCLE               | HOUR_CYCLE               | Recommended Policy | DAY                    | By Day / Previous Day [-24,0)          | PREVIOUS_DAY                      | None                                 |
| DAY_CYCLE               | HOUR_CYCLE               | Recommended Policy | DAY                    | By Day / Current Day                   | CURRENT_DAY                       | None                                 |
| YEAR_CYCLE              | MONTH_CYCLE              | Recommended Policy | DAY                    | By Day / Instance of Latest Data Time  | RECENT_DATE                       | None                                 |
| YEAR_CYCLE              | MONTH_CYCLE              | Recommended Policy | MONTH                  | By Month / All Months of Current Year  | ALL_MONTH_OF_YEAR                 | None                                 |
| YEAR_CYCLE              | MONTH_CYCLE              | Recommended Policy | MONTH                  | By Month / Current Month               | CURRENT_MONTH                     | None                                 |
| YEAR_CYCLE              | MONTH_CYCLE              | Recommended Policy | MONTH                  | By Month / Previous Month              | PREVIOUS_MONTH                    | None                                 |
| YEAR_CYCLE              | MONTH_CYCLE              | Recommended Policy | MONTH                  | By Month / End of Previous Month       | PREVIOUS_END_OF_MONTH             | None                                 |
| YEAR_CYCLE              | MONTH_CYCLE              | Recommended Policy | MONTH                  | By Month / Beginning of Previous Month | PREVIOUS_BEGIN_OF_MONTH           | None                                 |
| ONEOFF_CYCLE            | YEAR_CYCLE               | Recommended Policy | YEAR                   | By Year / Current Year                 | CURRENT_YEAR                      | None                                 |
| DAY_CYCLE               | DAY_CYCLE                | Recommended Policy | DAY                    | By Day / Current Day                   | CURRENT_DAY                       | None                                 |
| ONEOFF_CYCLE            | HOUR_CYCLE               | Recommended Policy | DAY                    | By Day / Current Day                   | CURRENT_DAY                       | None                                 |
| DAY_CYCLE               | ONEOFF_CYCLE             | Recommended Policy | DAY                    | By Day / Current Day                   | CURRENT_DAY                       | None                                 |
| MINUTE_CYCLE            | ONEOFF_CYCLE             | Recommended Policy | DAY                    | By Day / Current Day                   | CURRENT_DAY                       | None                                 |
| WEEK_CYCLE              | MONTH_CYCLE              | Recommended Policy | MONTH                  | By Month / Current Month               | CURRENT_MONTH                     | None                                 |
| WEEK_CYCLE              | MONTH_CYCLE              | Recommended Policy | DAY                    | By Day / Instance of Latest Data Time  | RECENT_DATE                       | None                                 |
| YEAR_CYCLE              | ONEOFF_CYCLE             | Recommended Policy | YEAR                   | By Year / Current Year                 | CURRENT_YEAR                      | None                                 |
| MONTH_CYCLE             | DAY_CYCLE                | Recommended Policy | MONTH                  | By Month / Previous Month              | PREVIOUS_MONTH                    | None                                 |
| MONTH_CYCLE             | DAY_CYCLE                | Recommended Policy | MONTH                  | By Month / End of Previous Month       | PREVIOUS_END_OF_MONTH             | None                                 |
| MONTH_CYCLE             | DAY_CYCLE                | Recommended Policy | MONTH                  | By Month / Current Month               | CURRENT_MONTH                     | None                                 |
| MONTH_CYCLE             | DAY_CYCLE                | Recommended Policy | DAY                    | By Day / Current Day                   | CURRENT_DAY                       | None                                 |
| MONTH_CYCLE             | DAY_CYCLE                | Recommended Policy | DAY                    | By Day / Previous Day                  | PREVIOUS_DAY                      | None                                 |
| YEAR_CYCLE              | DAY_CYCLE                | Recommended Policy | DAY                    | By Day / All Days of Current Year      | ALL_DAY_OF_YEAR                   | None                                 |
| YEAR_CYCLE              | DAY_CYCLE                | Recommended Policy | DAY                    | By Day / Current Day                   | CURRENT_DAY                       | None                                 |
| YEAR_CYCLE              | DAY_CYCLE                | Recommended Policy | DAY                    | By Day / Previous Day                  | PREVIOUS_DAY                      | None                                 |
| HOUR_CYCLE              | WEEK_CYCLE               | Recommended Policy | WEEK                   | By Week / Current Week                 | CURRENT_WEEK                      | None                                 |
| MONTH_CYCLE             | MONTH_CYCLE              | Recommended Policy | MONTH                  | By Month / Current Month               | CURRENT_MONTH                     | None                                 |
| MONTH_CYCLE             | MONTH_CYCLE              | Recommended Policy | DAY                    | By Day / Instance of Latest Data Time  | RECENT_DATE                       | None                                 |
| MONTH_CYCLE             | MINUTE_CYCLE             | Recommended Policy | MONTH                  | By Month / Previous Month              | PREVIOUS_MONTH                    | None                                 |
| MONTH_CYCLE             | MINUTE_CYCLE             | Recommended Policy | MONTH                  | By Month / Current Month               | CURRENT_MONTH                     | None                                 |
| MONTH_CYCLE             | WEEK_CYCLE               | Recommended Policy | MONTH                  | By Month / Previous Month              | PREVIOUS_MONTH                    | None                                 |
| MONTH_CYCLE             | WEEK_CYCLE               | Recommended Policy | MONTH                  | By Month / Current Month               | CURRENT_MONTH                     | None                                 |
| MONTH_CYCLE             | WEEK_CYCLE               | Recommended Policy | DAY                    | By Day / Instance of Latest Data Time  | RECENT_DATE                       | None                                 |
| DAY_CYCLE               | YEAR_CYCLE               | Recommended Policy | YEAR                   | By Year / Current Year                 | CURRENT_YEAR                      | None                                 |
| DAY_CYCLE               | YEAR_CYCLE               | Recommended Policy | DAY                    | By Day / Instance of Latest Data Time  | RECENT_DATE                       | None                                 |
| ONEOFF_CYCLE            | ONEOFF_CYCLE             | Recommended Policy | DAY                    | By Day / Current Day                   | CURRENT_DAY                       | None                                 |
| ONEOFF_CYCLE            | MONTH_CYCLE              | Recommended Policy | MONTH                  | By Month / Current Month               | CURRENT_MONTH                     | None                                 |
| CRONTAB_CYCLE           | CRONTAB_CYCLE            | Recommended Policy | CRONTAB                | None                                   | CURRENT                           | None                                 |
| HOUR_CYCLE              | HOUR_CYCLE               | Custom             | RANGE_HOUR             | Range (hours)                          | None                              | Comma-separated integers, e.g., -1,0 |
| HOUR_CYCLE              | DAY_CYCLE                | Custom             | RANGE_DAY              | Range (days)                           | None                              | Comma-separated integers, e.g., -1,0 |
| WEEK_CYCLE              | DAY_CYCLE                | Custom             | RANGE_DAY              | Range (days)                           | None                              | Comma-separated integers, e.g., -1,0 |
| HOUR_CYCLE              | MINUTE_CYCLE             | Custom             | RANGE_MINUTE           | Range (minutes)                        | None                              | Comma-separated integers, e.g., -1,0 |
| WEEK_CYCLE              | HOUR_CYCLE               | Custom             | RANGE_HOUR             | Range (hours)                          | None                              | Comma-separated integers, e.g., -1,0 |
| MINUTE_CYCLE            | HOUR_CYCLE               | Custom             | RANGE_HOUR             | Range (hours)                          | None                              | Comma-separated integers, e.g., -1,0 |
| MONTH_CYCLE             | HOUR_CYCLE               | Custom             | RANGE_HOUR             | Range (hours)                          | None                              | Comma-separated integers, e.g., -1,0 |
| MINUTE_CYCLE            | MINUTE_CYCLE             | Custom             | RANGE_MINUTE           | Range (minutes)                        | None                              | Comma-separated integers, e.g., -1,0 |
| YEAR_CYCLE              | MINUTE_CYCLE             | Custom             | RANGE_MINUTE           | Range (minutes)                        | None                              | Comma-separated integers, e.g., -1,0 |
| DAY_CYCLE               | MINUTE_CYCLE             | Custom             | RANGE_MINUTE           | Range (minutes)                        | None                              | Comma-separated integers, e.g., -1,0 |
| MINUTE_CYCLE            | DAY_CYCLE                | Custom             | RANGE_DAY              | Range (days)                           | None                              | Comma-separated integers, e.g., -1,0 |
| YEAR_CYCLE              | HOUR_CYCLE               | Custom             | RANGE_HOUR             | Range (hours)                          | None                              | Comma-separated integers, e.g., -1,0 |
| WEEK_CYCLE              | MINUTE_CYCLE             | Custom             | RANGE_MINUTE           | Range (minutes)                        | None                              | Comma-separated integers, e.g., -1,0 |
| DAY_CYCLE               | HOUR_CYCLE               | Custom             | RANGE_HOUR             | Range (hours)                          | None                              | Comma-separated integers, e.g., -1,0 |
| DAY_CYCLE               | DAY_CYCLE                | Custom             | RANGE_DAY              | Range (days)                           | None                              | Comma-separated integers, e.g., -1,0 |
| MONTH_CYCLE             | DAY_CYCLE                | Custom             | RANGE_DAY              | Range (days)                           | None                              | Comma-separated integers, e.g., -1,0 |
| YEAR_CYCLE              | DAY_CYCLE                | Custom             | RANGE_DAY              | Range (days)                           | None                              | Comma-separated integers, e.g., -1,0 |
| MONTH_CYCLE             | MINUTE_CYCLE             | Custom             | RANGE_MINUTE           | Range (minutes)                        | None                              | Comma-separated integers, e.g., -1,0 |
| HOUR_CYCLE              | HOUR_CYCLE               | Custom             | LIST_HOUR              | List (hours)                           | None                              | Comma-separated integers, e.g., -1,0 |
| HOUR_CYCLE              | DAY_CYCLE                | Custom             | LIST_DAY               | List (days)                            | None                              | Comma-separated integers, e.g., -1,0 |
| WEEK_CYCLE              | DAY_CYCLE                | Custom             | LIST_DAY               | List (days)                            | None                              | Comma-separated integers, e.g., -1,0 |
| HOUR_CYCLE              | MINUTE_CYCLE             | Custom             | LIST_MINUTE            | List (minutes)                         | None                              | Comma-separated integers, e.g., -1,0 |
| WEEK_CYCLE              | HOUR_CYCLE               | Custom             | LIST_HOUR              | List (hours)                           | None                              | Comma-separated integers, e.g., -1,0 |
| MINUTE_CYCLE            | HOUR_CYCLE               | Custom             | LIST_HOUR              | List (hours)                           | None                              | Comma-separated integers, e.g., -1,0 |
| MONTH_CYCLE             | HOUR_CYCLE               | Custom             | LIST_HOUR              | List (hours)                           | None                              | Comma-separated integers, e.g., -1,0 |
| MINUTE_CYCLE            | MINUTE_CYCLE             | Custom             | LIST_MINUTE            | List (minutes)                         | None                              | Comma-separated integers, e.g., -1,0 |
| YEAR_CYCLE              | MINUTE_CYCLE             | Custom             | LIST_MINUTE            | List (minutes)                         | None                              | Comma-separated integers, e.g., -1,0 |
| DAY_CYCLE               | MINUTE_CYCLE             | Custom             | LIST_MINUTE            | List (minutes)                         | None                              | Comma-separated integers, e.g., -1,0 |
| MINUTE_CYCLE            | DAY_CYCLE                | Custom             | LIST_DAY               | List (days)                            | None                              | Comma-separated integers, e.g., -1,0 |
| YEAR_CYCLE              | HOUR_CYCLE               | Custom             | LIST_HOUR              | List (hours)                           | None                              | Comma-separated integers, e.g., -1,0 |
| WEEK_CYCLE              | MINUTE_CYCLE             | Custom             | LIST_MINUTE            | List (minutes)                         | None                              | Comma-separated integers, e.g., -1,0 |
| DAY_CYCLE               | HOUR_CYCLE               | Custom             | LIST_HOUR              | List (hours)                           | None                              | Comma-separated integers, e.g., -1,0 |
| DAY_CYCLE               | DAY_CYCLE                | Custom             | LIST_DAY               | List (days)                            | None                              | Comma-separated integers, e.g., -1,0 |
| MONTH_CYCLE             | DAY_CYCLE                | Custom             | LIST_DAY               | List (days)                            | None                              | Comma-separated integers, e.g., -1,0 |
| YEAR_CYCLE              | DAY_CYCLE                | Custom             | LIST_DAY               | List (days)                            | None                              | Comma-separated integers, e.g., -1,0 |
| MONTH_CYCLE             | MINUTE_CYCLE             | Custom             | LIST_MINUTE            | List (minutes)                         | None                              | Comma-separated integers, e.g., -1,0 |
 *
 * @method string getTaskId() Obtain Task ID

 * @method void setTaskId(string $TaskId) Set Task ID

 * @method string getMainCyclicConfig() Obtain Main dependency configuration. Valid values:

* CRONTAB
* DAY
* HOUR
* LIST_DAY
* LIST_HOUR
* LIST_MINUTE
* MINUTE
* MONTH
* RANGE_DAY
* RANGE_HOUR
* RANGE_MINUTE
* WEEK
* YEAR
 * @method void setMainCyclicConfig(string $MainCyclicConfig) Set Main dependency configuration. Valid values:

* CRONTAB
* DAY
* HOUR
* LIST_DAY
* LIST_HOUR
* LIST_MINUTE
* MINUTE
* MONTH
* RANGE_DAY
* RANGE_HOUR
* RANGE_MINUTE
* WEEK
* YEAR
 * @method string getSubordinateCyclicConfig() Obtain Configures secondary dependencies.  Valid values:
* ALL_DAY_OF_YEAR
* ALL_MONTH_OF_YEAR
* CURRENT
* CURRENT_DAY
* CURRENT_HOUR
* CURRENT_MINUTE
* CURRENT_MONTH
* CURRENT_WEEK
* CURRENT_YEAR
* PREVIOUS_BEGIN_OF_MONTH
* PREVIOUS_DAY
* PREVIOUS_DAY_LATER_OFFSET_HOUR
* PREVIOUS_DAY_LATER_OFFSET_MINUTE
* PREVIOUS_END_OF_MONTH
* PREVIOUS_FRIDAY
* PREVIOUS_HOUR
* PREVIOUS_HOUR_CYCLE
* PREVIOUS_HOUR_LATER_OFFSET_MINUTE
* PREVIOUS_MINUTE_CYCLE
* PREVIOUS_MONTH
* PREVIOUS_WEEK
* PREVIOUS_WEEKEND
* RECENT_DATE
 * @method void setSubordinateCyclicConfig(string $SubordinateCyclicConfig) Set Configures secondary dependencies.  Valid values:
* ALL_DAY_OF_YEAR
* ALL_MONTH_OF_YEAR
* CURRENT
* CURRENT_DAY
* CURRENT_HOUR
* CURRENT_MINUTE
* CURRENT_MONTH
* CURRENT_WEEK
* CURRENT_YEAR
* PREVIOUS_BEGIN_OF_MONTH
* PREVIOUS_DAY
* PREVIOUS_DAY_LATER_OFFSET_HOUR
* PREVIOUS_DAY_LATER_OFFSET_MINUTE
* PREVIOUS_END_OF_MONTH
* PREVIOUS_FRIDAY
* PREVIOUS_HOUR
* PREVIOUS_HOUR_CYCLE
* PREVIOUS_HOUR_LATER_OFFSET_MINUTE
* PREVIOUS_MINUTE_CYCLE
* PREVIOUS_MONTH
* PREVIOUS_WEEK
* PREVIOUS_WEEKEND
* RECENT_DATE
 * @method string getOffset() Obtain Offset in Range/List Mode
 * @method void setOffset(string $Offset) Set Offset in Range/List Mode
 * @method DependencyStrategyTask getDependencyStrategy() Obtain Dependency Execution Policy
 * @method void setDependencyStrategy(DependencyStrategyTask $DependencyStrategy) Set Dependency Execution Policy
 */
class DependencyTaskBrief extends AbstractModel
{
    /**
     * @var string Task ID

     */
    public $TaskId;

    /**
     * @var string Main dependency configuration. Valid values:

* CRONTAB
* DAY
* HOUR
* LIST_DAY
* LIST_HOUR
* LIST_MINUTE
* MINUTE
* MONTH
* RANGE_DAY
* RANGE_HOUR
* RANGE_MINUTE
* WEEK
* YEAR
     */
    public $MainCyclicConfig;

    /**
     * @var string Configures secondary dependencies.  Valid values:
* ALL_DAY_OF_YEAR
* ALL_MONTH_OF_YEAR
* CURRENT
* CURRENT_DAY
* CURRENT_HOUR
* CURRENT_MINUTE
* CURRENT_MONTH
* CURRENT_WEEK
* CURRENT_YEAR
* PREVIOUS_BEGIN_OF_MONTH
* PREVIOUS_DAY
* PREVIOUS_DAY_LATER_OFFSET_HOUR
* PREVIOUS_DAY_LATER_OFFSET_MINUTE
* PREVIOUS_END_OF_MONTH
* PREVIOUS_FRIDAY
* PREVIOUS_HOUR
* PREVIOUS_HOUR_CYCLE
* PREVIOUS_HOUR_LATER_OFFSET_MINUTE
* PREVIOUS_MINUTE_CYCLE
* PREVIOUS_MONTH
* PREVIOUS_WEEK
* PREVIOUS_WEEKEND
* RECENT_DATE
     */
    public $SubordinateCyclicConfig;

    /**
     * @var string Offset in Range/List Mode
     */
    public $Offset;

    /**
     * @var DependencyStrategyTask Dependency Execution Policy
     */
    public $DependencyStrategy;

    /**
     * @param string $TaskId Task ID

     * @param string $MainCyclicConfig Main dependency configuration. Valid values:

* CRONTAB
* DAY
* HOUR
* LIST_DAY
* LIST_HOUR
* LIST_MINUTE
* MINUTE
* MONTH
* RANGE_DAY
* RANGE_HOUR
* RANGE_MINUTE
* WEEK
* YEAR
     * @param string $SubordinateCyclicConfig Configures secondary dependencies.  Valid values:
* ALL_DAY_OF_YEAR
* ALL_MONTH_OF_YEAR
* CURRENT
* CURRENT_DAY
* CURRENT_HOUR
* CURRENT_MINUTE
* CURRENT_MONTH
* CURRENT_WEEK
* CURRENT_YEAR
* PREVIOUS_BEGIN_OF_MONTH
* PREVIOUS_DAY
* PREVIOUS_DAY_LATER_OFFSET_HOUR
* PREVIOUS_DAY_LATER_OFFSET_MINUTE
* PREVIOUS_END_OF_MONTH
* PREVIOUS_FRIDAY
* PREVIOUS_HOUR
* PREVIOUS_HOUR_CYCLE
* PREVIOUS_HOUR_LATER_OFFSET_MINUTE
* PREVIOUS_MINUTE_CYCLE
* PREVIOUS_MONTH
* PREVIOUS_WEEK
* PREVIOUS_WEEKEND
* RECENT_DATE
     * @param string $Offset Offset in Range/List Mode
     * @param DependencyStrategyTask $DependencyStrategy Dependency Execution Policy
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("MainCyclicConfig",$param) and $param["MainCyclicConfig"] !== null) {
            $this->MainCyclicConfig = $param["MainCyclicConfig"];
        }

        if (array_key_exists("SubordinateCyclicConfig",$param) and $param["SubordinateCyclicConfig"] !== null) {
            $this->SubordinateCyclicConfig = $param["SubordinateCyclicConfig"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("DependencyStrategy",$param) and $param["DependencyStrategy"] !== null) {
            $this->DependencyStrategy = new DependencyStrategyTask();
            $this->DependencyStrategy->deserialize($param["DependencyStrategy"]);
        }
    }
}
