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
 * Task info of data source.
 *
 * @method string getTaskType() Obtain Task type

-OfflineIntegration --- offline integration task.
-RealtimeIntegration --- real-time integration task.
-DataDevelopment - data development task.
-DataQuality - data quality tasks.
-DataService - data service task.
-MetadataCollection --- metadata collection task.
 * @method void setTaskType(string $TaskType) Set Task type

-OfflineIntegration --- offline integration task.
-RealtimeIntegration --- real-time integration task.
-DataDevelopment - data development task.
-DataQuality - data quality tasks.
-DataService - data service task.
-MetadataCollection --- metadata collection task.
 * @method integer getTaskNum() Obtain Number of Tasks
 * @method void setTaskNum(integer $TaskNum) Set Number of Tasks
 * @method array getTaskList() Obtain Task details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskList(array $TaskList) Set Task details.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RelateTask extends AbstractModel
{
    /**
     * @var string Task type

-OfflineIntegration --- offline integration task.
-RealtimeIntegration --- real-time integration task.
-DataDevelopment - data development task.
-DataQuality - data quality tasks.
-DataService - data service task.
-MetadataCollection --- metadata collection task.
     */
    public $TaskType;

    /**
     * @var integer Number of Tasks
     */
    public $TaskNum;

    /**
     * @var array Task details.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskList;

    /**
     * @param string $TaskType Task type

-OfflineIntegration --- offline integration task.
-RealtimeIntegration --- real-time integration task.
-DataDevelopment - data development task.
-DataQuality - data quality tasks.
-DataService - data service task.
-MetadataCollection --- metadata collection task.
     * @param integer $TaskNum Number of Tasks
     * @param array $TaskList Task details.
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskNum",$param) and $param["TaskNum"] !== null) {
            $this->TaskNum = $param["TaskNum"];
        }

        if (array_key_exists("TaskList",$param) and $param["TaskList"] !== null) {
            $this->TaskList = [];
            foreach ($param["TaskList"] as $key => $value){
                $obj = new BriefTask();
                $obj->deserialize($value);
                array_push($this->TaskList, $obj);
            }
        }
    }
}
