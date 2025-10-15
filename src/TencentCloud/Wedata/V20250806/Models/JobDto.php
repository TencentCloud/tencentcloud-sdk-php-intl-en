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
 * Data exploration JOB.
 *
 * @method string getJobId() Obtain Task ID of the data exploration.

 * @method void setJobId(string $JobId) Set Task ID of the data exploration.

 * @method string getJobName() Obtain Task name.
 * @method void setJobName(string $JobName) Set Task name.
 * @method string getJobType() Obtain Task type
 * @method void setJobType(string $JobType) Set Task type
 * @method string getScriptId() Obtain Script ID
 * @method void setScriptId(string $ScriptId) Set Script ID
 * @method array getJobExecutionList() Obtain Subtask List
 * @method void setJobExecutionList(array $JobExecutionList) Set Subtask List
 * @method string getScriptContent() Obtain Specifies the script content.
 * @method void setScriptContent(string $ScriptContent) Set Specifies the script content.
 * @method string getStatus() Obtain State of a task.
 * @method void setStatus(string $Status) Set State of a task.
 * @method string getCreateTime() Obtain Task creation time
 * @method void setCreateTime(string $CreateTime) Set Task creation time
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 * @method string getEndTime() Obtain End time.

 * @method void setEndTime(string $EndTime) Set End time.

 * @method string getOwnerUin() Obtain Root account UIN.
 * @method void setOwnerUin(string $OwnerUin) Set Root account UIN.
 * @method string getUserUin() Obtain Account UIN.
 * @method void setUserUin(string $UserUin) Set Account UIN.
 * @method integer getTimeCost() Obtain Duration. specifies the time taken.

 * @method void setTimeCost(integer $TimeCost) Set Duration. specifies the time taken.

 * @method boolean getScriptContentTruncate() Obtain Specifies whether the script content is truncated.

 * @method void setScriptContentTruncate(boolean $ScriptContentTruncate) Set Specifies whether the script content is truncated.
 */
class JobDto extends AbstractModel
{
    /**
     * @var string Task ID of the data exploration.

     */
    public $JobId;

    /**
     * @var string Task name.
     */
    public $JobName;

    /**
     * @var string Task type
     */
    public $JobType;

    /**
     * @var string Script ID
     */
    public $ScriptId;

    /**
     * @var array Subtask List
     */
    public $JobExecutionList;

    /**
     * @var string Specifies the script content.
     */
    public $ScriptContent;

    /**
     * @var string State of a task.
     */
    public $Status;

    /**
     * @var string Task creation time
     */
    public $CreateTime;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @var string End time.

     */
    public $EndTime;

    /**
     * @var string Root account UIN.
     */
    public $OwnerUin;

    /**
     * @var string Account UIN.
     */
    public $UserUin;

    /**
     * @var integer Duration. specifies the time taken.

     */
    public $TimeCost;

    /**
     * @var boolean Specifies whether the script content is truncated.

     */
    public $ScriptContentTruncate;

    /**
     * @param string $JobId Task ID of the data exploration.

     * @param string $JobName Task name.
     * @param string $JobType Task type
     * @param string $ScriptId Script ID
     * @param array $JobExecutionList Subtask List
     * @param string $ScriptContent Specifies the script content.
     * @param string $Status State of a task.
     * @param string $CreateTime Task creation time
     * @param string $UpdateTime Update time.
     * @param string $EndTime End time.

     * @param string $OwnerUin Root account UIN.
     * @param string $UserUin Account UIN.
     * @param integer $TimeCost Duration. specifies the time taken.

     * @param boolean $ScriptContentTruncate Specifies whether the script content is truncated.
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("ScriptId",$param) and $param["ScriptId"] !== null) {
            $this->ScriptId = $param["ScriptId"];
        }

        if (array_key_exists("JobExecutionList",$param) and $param["JobExecutionList"] !== null) {
            $this->JobExecutionList = [];
            foreach ($param["JobExecutionList"] as $key => $value){
                $obj = new JobExecutionDto();
                $obj->deserialize($value);
                array_push($this->JobExecutionList, $obj);
            }
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("TimeCost",$param) and $param["TimeCost"] !== null) {
            $this->TimeCost = $param["TimeCost"];
        }

        if (array_key_exists("ScriptContentTruncate",$param) and $param["ScriptContentTruncate"] !== null) {
            $this->ScriptContentTruncate = $param["ScriptContentTruncate"];
        }
    }
}
