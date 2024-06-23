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
 * ColumnItem
 *
 * @method string getEventName() Obtain ColumnName1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEventName(string $EventName) Set ColumnName1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getEventProjectName() Obtain ColumnName1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEventProjectName(string $EventProjectName) Set ColumnName1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getType() Obtain 1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set 1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCurRunDate() Obtain 1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCurRunDate(string $CurRunDate) Set 1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskId() Obtain 1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskId(string $TaskId) Set 1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getState() Obtain 1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setState(string $State) Set 1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getEventType() Obtain 1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEventType(string $EventType) Set 1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskName() Obtain Task NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskName(string $TaskName) Set Task NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectName() Obtain Project nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectId() Obtain Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project IDNote: This field may return null, indicating that no valid value can be obtained.
 */
class ColumnData extends AbstractModel
{
    /**
     * @var string ColumnName1
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EventName;

    /**
     * @var string ColumnName1
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EventProjectName;

    /**
     * @var string 1
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var string 1
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CurRunDate;

    /**
     * @var string 1
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskId;

    /**
     * @var string 1
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $State;

    /**
     * @var string 1
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EventType;

    /**
     * @var string Task NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskName;

    /**
     * @var string Project nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectName;

    /**
     * @var string Project IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectId;

    /**
     * @param string $EventName ColumnName1
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $EventProjectName ColumnName1
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Type 1
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CurRunDate 1
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskId 1
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $State 1
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $EventType 1
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskName Task NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectName Project nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectId Project IDNote: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventProjectName",$param) and $param["EventProjectName"] !== null) {
            $this->EventProjectName = $param["EventProjectName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
