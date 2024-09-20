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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Machine selection rule
 *
 * @method integer getTaskGroupInstancesExecuteMode() Obtain Instance selection mode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskGroupInstancesExecuteMode(integer $TaskGroupInstancesExecuteMode) Set Instance selection mode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskGroupInstancesExecutePercent() Obtain Proportion of selected machines in selection by proportion mode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskGroupInstancesExecutePercent(integer $TaskGroupInstancesExecutePercent) Set Proportion of selected machines in selection by proportion mode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskGroupInstancesExecuteNum() Obtain Number of selected machines in selection by quantity mode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskGroupInstancesExecuteNum(integer $TaskGroupInstancesExecuteNum) Set Number of selected machines in selection by quantity mode
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TaskGroupInstancesExecuteRules extends AbstractModel
{
    /**
     * @var integer Instance selection mode
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskGroupInstancesExecuteMode;

    /**
     * @var integer Proportion of selected machines in selection by proportion mode
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskGroupInstancesExecutePercent;

    /**
     * @var integer Number of selected machines in selection by quantity mode
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskGroupInstancesExecuteNum;

    /**
     * @param integer $TaskGroupInstancesExecuteMode Instance selection mode
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskGroupInstancesExecutePercent Proportion of selected machines in selection by proportion mode
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskGroupInstancesExecuteNum Number of selected machines in selection by quantity mode
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
        if (array_key_exists("TaskGroupInstancesExecuteMode",$param) and $param["TaskGroupInstancesExecuteMode"] !== null) {
            $this->TaskGroupInstancesExecuteMode = $param["TaskGroupInstancesExecuteMode"];
        }

        if (array_key_exists("TaskGroupInstancesExecutePercent",$param) and $param["TaskGroupInstancesExecutePercent"] !== null) {
            $this->TaskGroupInstancesExecutePercent = $param["TaskGroupInstancesExecutePercent"];
        }

        if (array_key_exists("TaskGroupInstancesExecuteNum",$param) and $param["TaskGroupInstancesExecuteNum"] !== null) {
            $this->TaskGroupInstancesExecuteNum = $param["TaskGroupInstancesExecuteNum"];
        }
    }
}
