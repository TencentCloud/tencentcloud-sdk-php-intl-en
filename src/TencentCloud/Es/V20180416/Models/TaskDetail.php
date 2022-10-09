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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of workflow task in instance operation history
 *
 * @method string getName() Obtain Task name
 * @method void setName(string $Name) Set Task name
 * @method float getProgress() Obtain Task progress
 * @method void setProgress(float $Progress) Set Task progress
 * @method string getFinishTime() Obtain Task completion time
 * @method void setFinishTime(string $FinishTime) Set Task completion time
 * @method array getSubTasks() Obtain Subtask
 * @method void setSubTasks(array $SubTasks) Set Subtask
 * @method integer getElapsedTime() Obtain The task time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setElapsedTime(integer $ElapsedTime) Set The task time.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TaskDetail extends AbstractModel
{
    /**
     * @var string Task name
     */
    public $Name;

    /**
     * @var float Task progress
     */
    public $Progress;

    /**
     * @var string Task completion time
     */
    public $FinishTime;

    /**
     * @var array Subtask
     */
    public $SubTasks;

    /**
     * @var integer The task time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ElapsedTime;

    /**
     * @param string $Name Task name
     * @param float $Progress Task progress
     * @param string $FinishTime Task completion time
     * @param array $SubTasks Subtask
     * @param integer $ElapsedTime The task time.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("SubTasks",$param) and $param["SubTasks"] !== null) {
            $this->SubTasks = [];
            foreach ($param["SubTasks"] as $key => $value){
                $obj = new SubTaskDetail();
                $obj->deserialize($value);
                array_push($this->SubTasks, $obj);
            }
        }

        if (array_key_exists("ElapsedTime",$param) and $param["ElapsedTime"] !== null) {
            $this->ElapsedTime = $param["ElapsedTime"];
        }
    }
}
