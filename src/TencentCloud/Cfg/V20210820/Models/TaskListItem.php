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
 * Task list information
 *
 * @method integer getTaskId() Obtain Task ID
 * @method void setTaskId(integer $TaskId) Set Task ID
 * @method string getTaskTitle() Obtain Task name
 * @method void setTaskTitle(string $TaskTitle) Set Task name
 * @method string getTaskDescription() Obtain Task description
 * @method void setTaskDescription(string $TaskDescription) Set Task description
 * @method string getTaskTag() Obtain Task tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskTag(string $TaskTag) Set Task tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskStatus() Obtain Task status (1001: not started; 1002: in progress; 1003: paused; 1004: ended)
 * @method void setTaskStatus(integer $TaskStatus) Set Task status (1001: not started; 1002: in progress; 1003: paused; 1004: ended)
 * @method string getTaskCreateTime() Obtain Task creation time
 * @method void setTaskCreateTime(string $TaskCreateTime) Set Task creation time
 * @method string getTaskUpdateTime() Obtain Task update time
 * @method void setTaskUpdateTime(string $TaskUpdateTime) Set Task update time
 * @method integer getTaskPreCheckStatus() Obtain 0: not started; 1: in progress; 2: completed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskPreCheckStatus(integer $TaskPreCheckStatus) Set 0: not started; 1: in progress; 2: completed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getTaskPreCheckSuccess() Obtain Whether the environmental check is passed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskPreCheckSuccess(boolean $TaskPreCheckSuccess) Set Whether the environmental check is passed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskExpect() Obtain Whether the experiment result meets expectations. 1: expectations met; 2: expectations not met.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskExpect(integer $TaskExpect) Set Whether the experiment result meets expectations. 1: expectations met; 2: expectations not met.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationId() Obtain ID of the associated application
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationId(string $ApplicationId) Set ID of the associated application
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationName() Obtain Name of the associated application
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationName(string $ApplicationName) Set Name of the associated application
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVerifyId() Obtain Verification item ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVerifyId(integer $VerifyId) Set Verification item ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskStatusType() Obtain Status. 0: no status; 1: successful; 2: failed; 3: terminated.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskStatusType(integer $TaskStatusType) Set Status. 0: no status; 1: successful; 2: failed; 3: terminated.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TaskListItem extends AbstractModel
{
    /**
     * @var integer Task ID
     */
    public $TaskId;

    /**
     * @var string Task name
     */
    public $TaskTitle;

    /**
     * @var string Task description
     */
    public $TaskDescription;

    /**
     * @var string Task tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskTag;

    /**
     * @var integer Task status (1001: not started; 1002: in progress; 1003: paused; 1004: ended)
     */
    public $TaskStatus;

    /**
     * @var string Task creation time
     */
    public $TaskCreateTime;

    /**
     * @var string Task update time
     */
    public $TaskUpdateTime;

    /**
     * @var integer 0: not started; 1: in progress; 2: completed.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskPreCheckStatus;

    /**
     * @var boolean Whether the environmental check is passed
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskPreCheckSuccess;

    /**
     * @var integer Whether the experiment result meets expectations. 1: expectations met; 2: expectations not met.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskExpect;

    /**
     * @var string ID of the associated application
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationId;

    /**
     * @var string Name of the associated application
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationName;

    /**
     * @var integer Verification item ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VerifyId;

    /**
     * @var integer Status. 0: no status; 1: successful; 2: failed; 3: terminated.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskStatusType;

    /**
     * @param integer $TaskId Task ID
     * @param string $TaskTitle Task name
     * @param string $TaskDescription Task description
     * @param string $TaskTag Task tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskStatus Task status (1001: not started; 1002: in progress; 1003: paused; 1004: ended)
     * @param string $TaskCreateTime Task creation time
     * @param string $TaskUpdateTime Task update time
     * @param integer $TaskPreCheckStatus 0: not started; 1: in progress; 2: completed.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $TaskPreCheckSuccess Whether the environmental check is passed
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskExpect Whether the experiment result meets expectations. 1: expectations met; 2: expectations not met.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationId ID of the associated application
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationName Name of the associated application
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VerifyId Verification item ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskStatusType Status. 0: no status; 1: successful; 2: failed; 3: terminated.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskTitle",$param) and $param["TaskTitle"] !== null) {
            $this->TaskTitle = $param["TaskTitle"];
        }

        if (array_key_exists("TaskDescription",$param) and $param["TaskDescription"] !== null) {
            $this->TaskDescription = $param["TaskDescription"];
        }

        if (array_key_exists("TaskTag",$param) and $param["TaskTag"] !== null) {
            $this->TaskTag = $param["TaskTag"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TaskCreateTime",$param) and $param["TaskCreateTime"] !== null) {
            $this->TaskCreateTime = $param["TaskCreateTime"];
        }

        if (array_key_exists("TaskUpdateTime",$param) and $param["TaskUpdateTime"] !== null) {
            $this->TaskUpdateTime = $param["TaskUpdateTime"];
        }

        if (array_key_exists("TaskPreCheckStatus",$param) and $param["TaskPreCheckStatus"] !== null) {
            $this->TaskPreCheckStatus = $param["TaskPreCheckStatus"];
        }

        if (array_key_exists("TaskPreCheckSuccess",$param) and $param["TaskPreCheckSuccess"] !== null) {
            $this->TaskPreCheckSuccess = $param["TaskPreCheckSuccess"];
        }

        if (array_key_exists("TaskExpect",$param) and $param["TaskExpect"] !== null) {
            $this->TaskExpect = $param["TaskExpect"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("VerifyId",$param) and $param["VerifyId"] !== null) {
            $this->VerifyId = $param["VerifyId"];
        }

        if (array_key_exists("TaskStatusType",$param) and $param["TaskStatusType"] !== null) {
            $this->TaskStatusType = $param["TaskStatusType"];
        }
    }
}
