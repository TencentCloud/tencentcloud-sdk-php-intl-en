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
 * Workflow Unified Scheduling Parameter Input - Dependency Task Value Reference:

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
 * @method string getScheduleTimeZone() Obtain Specifies the time zone.
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) Set Specifies the time zone.
 * @method string getCycleType() Obtain Period type. Supported types:

ONEOFF_CYCLE: specifies a one-time cycle.
YEAR_CYCLE: specifies the year cycle.
MONTH_CYCLE: specifies the monthly cycle.
WEEK_CYCLE: specifies the week cycle.
DAY_CYCLE: specifies the day cycle.
HOUR_CYCLE: specifies the hour cycle.
MINUTE_CYCLE: specifies the minute cycle.
CRONTAB_CYCLE: specifies the crontab expression type
 * @method void setCycleType(string $CycleType) Set Period type. Supported types:

ONEOFF_CYCLE: specifies a one-time cycle.
YEAR_CYCLE: specifies the year cycle.
MONTH_CYCLE: specifies the monthly cycle.
WEEK_CYCLE: specifies the week cycle.
DAY_CYCLE: specifies the day cycle.
HOUR_CYCLE: specifies the hour cycle.
MINUTE_CYCLE: specifies the minute cycle.
CRONTAB_CYCLE: specifies the crontab expression type
 * @method string getSelfDepend() Obtain Self-Dependent. Valid values: parallel, serial, orderly. Default value: serial. 
 * @method void setSelfDepend(string $SelfDepend) Set Self-Dependent. Valid values: parallel, serial, orderly. Default value: serial. 
 * @method string getStartTime() Obtain Effective Start Time
 * @method void setStartTime(string $StartTime) Set Effective Start Time
 * @method string getEndTime() Obtain Effective End Time
 * @method void setEndTime(string $EndTime) Set Effective End Time
 * @method string getCrontabExpression() Obtain Cron expression
 * @method void setCrontabExpression(string $CrontabExpression) Set Cron expression
 * @method string getDependencyWorkflow() Obtain Workflow dependency. Valid values: yes or no.
 * @method void setDependencyWorkflow(string $DependencyWorkflow) Set Workflow dependency. Valid values: yes or no.
 * @method string getModifyCycleValue() Obtain 0: Do not modify
1: Reset the task's upstream dependency configuration to the default value
 * @method void setModifyCycleValue(string $ModifyCycleValue) Set 0: Do not modify
1: Reset the task's upstream dependency configuration to the default value
 * @method boolean getClearLink() Obtain The workflow contains cross-workflow dependencies and uses a cron expression for scheduling. If unified scheduling is saved, unsupported dependencies will be disconnected.
 * @method void setClearLink(boolean $ClearLink) Set The workflow contains cross-workflow dependencies and uses a cron expression for scheduling. If unified scheduling is saved, unsupported dependencies will be disconnected.
 * @method string getMainCyclicConfig() Obtain Takes effect when ModifyCycleValue = 1. Indicates the default modification of the upstream dependency time dimension. Valid values are:
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

https://capi.woa.com/object/detail?product=wedata&env=api_dev&version=2025-08-06&name=WorkflowSchedulerConfigurationInfo
 * @method void setMainCyclicConfig(string $MainCyclicConfig) Set Takes effect when ModifyCycleValue = 1. Indicates the default modification of the upstream dependency time dimension. Valid values are:
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

https://capi.woa.com/object/detail?product=wedata&env=api_dev&version=2025-08-06&name=WorkflowSchedulerConfigurationInfo
 * @method string getSubordinateCyclicConfig() Obtain Takes effect when ModifyCycleValue = 1. Indicates the default modification of the upstream dependency - instance scope. Valid values are:
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

https://capi.woa.com/object/detail?product=wedata&env=api_dev&version=2025-08-06&name=WorkflowSchedulerConfigurationInfo
 * @method void setSubordinateCyclicConfig(string $SubordinateCyclicConfig) Set Takes effect when ModifyCycleValue = 1. Indicates the default modification of the upstream dependency - instance scope. Valid values are:
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

https://capi.woa.com/object/detail?product=wedata&env=api_dev&version=2025-08-06&name=WorkflowSchedulerConfigurationInfo
 * @method string getExecutionStartTime() Obtain Execution time left closed interval, for example: 00:00. only required when the CycleType is MINUTE_CYCLE.
 * @method void setExecutionStartTime(string $ExecutionStartTime) Set Execution time left closed interval, for example: 00:00. only required when the CycleType is MINUTE_CYCLE.
 * @method string getExecutionEndTime() Obtain Execution time right closed interval, for example: 23:59. only required when the CycleType is MINUTE_CYCLE.
 * @method void setExecutionEndTime(string $ExecutionEndTime) Set Execution time right closed interval, for example: 23:59. only required when the CycleType is MINUTE_CYCLE.
 * @method string getCalendarOpen() Obtain Whether calendar scheduling is enabled. Valid values: 1 (enabled), 0 (disabled).
 * @method void setCalendarOpen(string $CalendarOpen) Set Whether calendar scheduling is enabled. Valid values: 1 (enabled), 0 (disabled).
 * @method string getCalendarId() Obtain Calendar id.
 * @method void setCalendarId(string $CalendarId) Set Calendar id.
 */
class WorkflowSchedulerConfigurationInfo extends AbstractModel
{
    /**
     * @var string Specifies the time zone.
     */
    public $ScheduleTimeZone;

    /**
     * @var string Period type. Supported types:

ONEOFF_CYCLE: specifies a one-time cycle.
YEAR_CYCLE: specifies the year cycle.
MONTH_CYCLE: specifies the monthly cycle.
WEEK_CYCLE: specifies the week cycle.
DAY_CYCLE: specifies the day cycle.
HOUR_CYCLE: specifies the hour cycle.
MINUTE_CYCLE: specifies the minute cycle.
CRONTAB_CYCLE: specifies the crontab expression type
     */
    public $CycleType;

    /**
     * @var string Self-Dependent. Valid values: parallel, serial, orderly. Default value: serial. 
     */
    public $SelfDepend;

    /**
     * @var string Effective Start Time
     */
    public $StartTime;

    /**
     * @var string Effective End Time
     */
    public $EndTime;

    /**
     * @var string Cron expression
     */
    public $CrontabExpression;

    /**
     * @var string Workflow dependency. Valid values: yes or no.
     */
    public $DependencyWorkflow;

    /**
     * @var string 0: Do not modify
1: Reset the task's upstream dependency configuration to the default value
     */
    public $ModifyCycleValue;

    /**
     * @var boolean The workflow contains cross-workflow dependencies and uses a cron expression for scheduling. If unified scheduling is saved, unsupported dependencies will be disconnected.
     */
    public $ClearLink;

    /**
     * @var string Takes effect when ModifyCycleValue = 1. Indicates the default modification of the upstream dependency time dimension. Valid values are:
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

https://capi.woa.com/object/detail?product=wedata&env=api_dev&version=2025-08-06&name=WorkflowSchedulerConfigurationInfo
     */
    public $MainCyclicConfig;

    /**
     * @var string Takes effect when ModifyCycleValue = 1. Indicates the default modification of the upstream dependency - instance scope. Valid values are:
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

https://capi.woa.com/object/detail?product=wedata&env=api_dev&version=2025-08-06&name=WorkflowSchedulerConfigurationInfo
     */
    public $SubordinateCyclicConfig;

    /**
     * @var string Execution time left closed interval, for example: 00:00. only required when the CycleType is MINUTE_CYCLE.
     */
    public $ExecutionStartTime;

    /**
     * @var string Execution time right closed interval, for example: 23:59. only required when the CycleType is MINUTE_CYCLE.
     */
    public $ExecutionEndTime;

    /**
     * @var string Whether calendar scheduling is enabled. Valid values: 1 (enabled), 0 (disabled).
     */
    public $CalendarOpen;

    /**
     * @var string Calendar id.
     */
    public $CalendarId;

    /**
     * @param string $ScheduleTimeZone Specifies the time zone.
     * @param string $CycleType Period type. Supported types:

ONEOFF_CYCLE: specifies a one-time cycle.
YEAR_CYCLE: specifies the year cycle.
MONTH_CYCLE: specifies the monthly cycle.
WEEK_CYCLE: specifies the week cycle.
DAY_CYCLE: specifies the day cycle.
HOUR_CYCLE: specifies the hour cycle.
MINUTE_CYCLE: specifies the minute cycle.
CRONTAB_CYCLE: specifies the crontab expression type
     * @param string $SelfDepend Self-Dependent. Valid values: parallel, serial, orderly. Default value: serial. 
     * @param string $StartTime Effective Start Time
     * @param string $EndTime Effective End Time
     * @param string $CrontabExpression Cron expression
     * @param string $DependencyWorkflow Workflow dependency. Valid values: yes or no.
     * @param string $ModifyCycleValue 0: Do not modify
1: Reset the task's upstream dependency configuration to the default value
     * @param boolean $ClearLink The workflow contains cross-workflow dependencies and uses a cron expression for scheduling. If unified scheduling is saved, unsupported dependencies will be disconnected.
     * @param string $MainCyclicConfig Takes effect when ModifyCycleValue = 1. Indicates the default modification of the upstream dependency time dimension. Valid values are:
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

https://capi.woa.com/object/detail?product=wedata&env=api_dev&version=2025-08-06&name=WorkflowSchedulerConfigurationInfo
     * @param string $SubordinateCyclicConfig Takes effect when ModifyCycleValue = 1. Indicates the default modification of the upstream dependency - instance scope. Valid values are:
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

https://capi.woa.com/object/detail?product=wedata&env=api_dev&version=2025-08-06&name=WorkflowSchedulerConfigurationInfo
     * @param string $ExecutionStartTime Execution time left closed interval, for example: 00:00. only required when the CycleType is MINUTE_CYCLE.
     * @param string $ExecutionEndTime Execution time right closed interval, for example: 23:59. only required when the CycleType is MINUTE_CYCLE.
     * @param string $CalendarOpen Whether calendar scheduling is enabled. Valid values: 1 (enabled), 0 (disabled).
     * @param string $CalendarId Calendar id.
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
        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("SelfDepend",$param) and $param["SelfDepend"] !== null) {
            $this->SelfDepend = $param["SelfDepend"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CrontabExpression",$param) and $param["CrontabExpression"] !== null) {
            $this->CrontabExpression = $param["CrontabExpression"];
        }

        if (array_key_exists("DependencyWorkflow",$param) and $param["DependencyWorkflow"] !== null) {
            $this->DependencyWorkflow = $param["DependencyWorkflow"];
        }

        if (array_key_exists("ModifyCycleValue",$param) and $param["ModifyCycleValue"] !== null) {
            $this->ModifyCycleValue = $param["ModifyCycleValue"];
        }

        if (array_key_exists("ClearLink",$param) and $param["ClearLink"] !== null) {
            $this->ClearLink = $param["ClearLink"];
        }

        if (array_key_exists("MainCyclicConfig",$param) and $param["MainCyclicConfig"] !== null) {
            $this->MainCyclicConfig = $param["MainCyclicConfig"];
        }

        if (array_key_exists("SubordinateCyclicConfig",$param) and $param["SubordinateCyclicConfig"] !== null) {
            $this->SubordinateCyclicConfig = $param["SubordinateCyclicConfig"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }

        if (array_key_exists("CalendarOpen",$param) and $param["CalendarOpen"] !== null) {
            $this->CalendarOpen = $param["CalendarOpen"];
        }

        if (array_key_exists("CalendarId",$param) and $param["CalendarId"] !== null) {
            $this->CalendarId = $param["CalendarId"];
        }
    }
}
