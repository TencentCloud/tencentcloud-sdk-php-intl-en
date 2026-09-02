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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Exports the task list
 *
 * @method integer getId() Obtain Task ID
 * @method void setId(integer $Id) Set Task ID
 * @method integer getAppId() Obtain User AppId
 * @method void setAppId(integer $AppId) Set User AppId
 * @method integer getPercentage() Obtain Progress percentage
 * @method void setPercentage(integer $Percentage) Set Progress percentage
 * @method integer getTaskStatus() Obtain Task status: 0: not started; 1: executing; 2: executed successfully; 3: timed out; 4: execution failed.
 * @method void setTaskStatus(integer $TaskStatus) Set Task status: 0: not started; 1: executing; 2: executed successfully; 3: timed out; 4: execution failed.
 * @method integer getCreateTime() Obtain Task creation time
 * @method void setCreateTime(integer $CreateTime) Set Task creation time
 * @method integer getModifyTime() Obtain Task update time
 * @method void setModifyTime(integer $ModifyTime) Set Task update time
 * @method string getFileName() Obtain File name
 * @method void setFileName(string $FileName) Set File name
 * @method integer getFileSize() Obtain File size in bytes.
 * @method void setFileSize(integer $FileSize) Set File size in bytes.
 * @method integer getRemainingTime() Obtain Remaining time (in seconds).
 * @method void setRemainingTime(integer $RemainingTime) Set Remaining time (in seconds).
 */
class ExportTask extends AbstractModel
{
    /**
     * @var integer Task ID
     */
    public $Id;

    /**
     * @var integer User AppId
     */
    public $AppId;

    /**
     * @var integer Progress percentage
     */
    public $Percentage;

    /**
     * @var integer Task status: 0: not started; 1: executing; 2: executed successfully; 3: timed out; 4: execution failed.
     */
    public $TaskStatus;

    /**
     * @var integer Task creation time
     */
    public $CreateTime;

    /**
     * @var integer Task update time
     */
    public $ModifyTime;

    /**
     * @var string File name
     */
    public $FileName;

    /**
     * @var integer File size in bytes.
     */
    public $FileSize;

    /**
     * @var integer Remaining time (in seconds).
     */
    public $RemainingTime;

    /**
     * @param integer $Id Task ID
     * @param integer $AppId User AppId
     * @param integer $Percentage Progress percentage
     * @param integer $TaskStatus Task status: 0: not started; 1: executing; 2: executed successfully; 3: timed out; 4: execution failed.
     * @param integer $CreateTime Task creation time
     * @param integer $ModifyTime Task update time
     * @param string $FileName File name
     * @param integer $FileSize File size in bytes.
     * @param integer $RemainingTime Remaining time (in seconds).
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Percentage",$param) and $param["Percentage"] !== null) {
            $this->Percentage = $param["Percentage"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("RemainingTime",$param) and $param["RemainingTime"] !== null) {
            $this->RemainingTime = $param["RemainingTime"];
        }
    }
}
