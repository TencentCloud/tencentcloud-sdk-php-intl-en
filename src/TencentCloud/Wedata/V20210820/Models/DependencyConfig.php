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
 * Dependency Configuration
 *
 * @method string getDependConfType() Obtain Only five types of periodic execution dependency configurations: HOUR, DAY, WEEK, MONTH, YEAR, CRONTAB, MINUTE
 * @method void setDependConfType(string $DependConfType) Set Only five types of periodic execution dependency configurations: HOUR, DAY, WEEK, MONTH, YEAR, CRONTAB, MINUTE
 * @method string getSubordinateCyclicType() Obtain Dependency Configuration Subordinate Period Type, CURRENT_HOUR, PREVIOUS_HOUR, CURRENT_DAY, PREVIOUS_DAY, PREVIOUS_WEEK, PREVIOUS_FRIDAY, PREVIOUS_WEEKEND, CURRENT_MONTH, PREVIOUS_MONTH, PREVIOUS_END_OF_MONTH
     * PREVIOUS_BEGIN_OF_MONTH,ALL_MONTH_OF_YEAR,ALL_DAY_OF_YEAR,CURRENT_YEAR,CURRENT,CURRENT_MINUTE,PREVIOUS_MINUTE_CYCLE,PREVIOUS_HOUR_CYCLE
 * @method void setSubordinateCyclicType(string $SubordinateCyclicType) Set Dependency Configuration Subordinate Period Type, CURRENT_HOUR, PREVIOUS_HOUR, CURRENT_DAY, PREVIOUS_DAY, PREVIOUS_WEEK, PREVIOUS_FRIDAY, PREVIOUS_WEEKEND, CURRENT_MONTH, PREVIOUS_MONTH, PREVIOUS_END_OF_MONTH
     * PREVIOUS_BEGIN_OF_MONTH,ALL_MONTH_OF_YEAR,ALL_DAY_OF_YEAR,CURRENT_YEAR,CURRENT,CURRENT_MINUTE,PREVIOUS_MINUTE_CYCLE,PREVIOUS_HOUR_CYCLE
 * @method string getDependencyStrategy() Obtain WAITING, waiting (default policy) EXECUTING: executing
 * @method void setDependencyStrategy(string $DependencyStrategy) Set WAITING, waiting (default policy) EXECUTING: executing
 * @method TaskInnerInfo getParentTask() Obtain Parent Task Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setParentTask(TaskInnerInfo $ParentTask) Set Parent Task Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method TaskInnerInfo getSonTask() Obtain Subtask Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSonTask(TaskInnerInfo $SonTask) Set Subtask Information
Note: This field may return null, indicating that no valid value can be obtained.
 */
class DependencyConfig extends AbstractModel
{
    /**
     * @var string Only five types of periodic execution dependency configurations: HOUR, DAY, WEEK, MONTH, YEAR, CRONTAB, MINUTE
     */
    public $DependConfType;

    /**
     * @var string Dependency Configuration Subordinate Period Type, CURRENT_HOUR, PREVIOUS_HOUR, CURRENT_DAY, PREVIOUS_DAY, PREVIOUS_WEEK, PREVIOUS_FRIDAY, PREVIOUS_WEEKEND, CURRENT_MONTH, PREVIOUS_MONTH, PREVIOUS_END_OF_MONTH
     * PREVIOUS_BEGIN_OF_MONTH,ALL_MONTH_OF_YEAR,ALL_DAY_OF_YEAR,CURRENT_YEAR,CURRENT,CURRENT_MINUTE,PREVIOUS_MINUTE_CYCLE,PREVIOUS_HOUR_CYCLE
     */
    public $SubordinateCyclicType;

    /**
     * @var string WAITING, waiting (default policy) EXECUTING: executing
     */
    public $DependencyStrategy;

    /**
     * @var TaskInnerInfo Parent Task Information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ParentTask;

    /**
     * @var TaskInnerInfo Subtask Information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SonTask;

    /**
     * @param string $DependConfType Only five types of periodic execution dependency configurations: HOUR, DAY, WEEK, MONTH, YEAR, CRONTAB, MINUTE
     * @param string $SubordinateCyclicType Dependency Configuration Subordinate Period Type, CURRENT_HOUR, PREVIOUS_HOUR, CURRENT_DAY, PREVIOUS_DAY, PREVIOUS_WEEK, PREVIOUS_FRIDAY, PREVIOUS_WEEKEND, CURRENT_MONTH, PREVIOUS_MONTH, PREVIOUS_END_OF_MONTH
     * PREVIOUS_BEGIN_OF_MONTH,ALL_MONTH_OF_YEAR,ALL_DAY_OF_YEAR,CURRENT_YEAR,CURRENT,CURRENT_MINUTE,PREVIOUS_MINUTE_CYCLE,PREVIOUS_HOUR_CYCLE
     * @param string $DependencyStrategy WAITING, waiting (default policy) EXECUTING: executing
     * @param TaskInnerInfo $ParentTask Parent Task Information
Note: This field may return null, indicating that no valid value can be obtained.
     * @param TaskInnerInfo $SonTask Subtask Information
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("DependConfType",$param) and $param["DependConfType"] !== null) {
            $this->DependConfType = $param["DependConfType"];
        }

        if (array_key_exists("SubordinateCyclicType",$param) and $param["SubordinateCyclicType"] !== null) {
            $this->SubordinateCyclicType = $param["SubordinateCyclicType"];
        }

        if (array_key_exists("DependencyStrategy",$param) and $param["DependencyStrategy"] !== null) {
            $this->DependencyStrategy = $param["DependencyStrategy"];
        }

        if (array_key_exists("ParentTask",$param) and $param["ParentTask"] !== null) {
            $this->ParentTask = new TaskInnerInfo();
            $this->ParentTask->deserialize($param["ParentTask"]);
        }

        if (array_key_exists("SonTask",$param) and $param["SonTask"] !== null) {
            $this->SonTask = new TaskInnerInfo();
            $this->SonTask->deserialize($param["SonTask"]);
        }
    }
}
