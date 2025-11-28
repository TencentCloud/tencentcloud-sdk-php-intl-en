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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log download task description.
 *
 * @method integer getTaskType() Obtain Download task type. 0: slow log; 1: error log.
 * @method void setTaskType(integer $TaskType) Set Download task type. 0: slow log; 1: error log.
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method string getCreateTime() Obtain Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFileSize() Obtain File size.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileSize(integer $FileSize) Set File size.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Task status. 0: initialized; 1: running; 2: successful; 3: failed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Task status. 0: initialized; 1: running; 2: successful; 3: failed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPercent() Obtain Percentage.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPercent(integer $Percent) Set Percentage.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUrl() Obtain Download URL.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set Download URL.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Task extends AbstractModel
{
    /**
     * @var integer Download task type. 0: slow log; 1: error log.
     */
    public $TaskType;

    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var string Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Update time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var integer File size.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileSize;

    /**
     * @var integer Task status. 0: initialized; 1: running; 2: successful; 3: failed.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Percentage.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Percent;

    /**
     * @var string Download URL.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @param integer $TaskType Download task type. 0: slow log; 1: error log.
     * @param string $TaskId Task ID.
     * @param string $CreateTime Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FileSize File size.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Task status. 0: initialized; 1: running; 2: successful; 3: failed.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Percent Percentage.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Url Download URL.
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
