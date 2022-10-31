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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task data
 *
 * @method string getTaskId() Obtain Task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set Task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDataId() Obtain Data ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataId(string $DataId) Set Data ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBizType() Obtain Service type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBizType(string $BizType) Set Service type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Task name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Task name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Task status. Values: `PENDING`, `RUNNING`, `ERROR`, `FINISH`, and `CANCELLED`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Task status. Values: `PENDING`, `RUNNING`, `ERROR`, `FINISH`, and `CANCELLED`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Task type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Task type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSuggestion() Obtain Suggestion
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSuggestion(string $Suggestion) Set Suggestion
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getLabels() Obtain Tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabels(array $Labels) Set Tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MediaInfo getMediaInfo() Obtain Media information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMediaInfo(MediaInfo $MediaInfo) Set Media information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method InputInfo getInputInfo() Obtain Input information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInputInfo(InputInfo $InputInfo) Set Input information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedAt() Obtain Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedAt(string $CreatedAt) Set Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdatedAt() Obtain Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdatedAt(string $UpdatedAt) Set Update time
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TaskData extends AbstractModel
{
    /**
     * @var string Task ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string Data ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataId;

    /**
     * @var string Service type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BizType;

    /**
     * @var string Task name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Task status. Values: `PENDING`, `RUNNING`, `ERROR`, `FINISH`, and `CANCELLED`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Task type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Suggestion
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Suggestion;

    /**
     * @var array Tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Labels;

    /**
     * @var MediaInfo Media information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MediaInfo;

    /**
     * @var InputInfo Input information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InputInfo;

    /**
     * @var string Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedAt;

    /**
     * @var string Update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdatedAt;

    /**
     * @param string $TaskId Task ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DataId Data ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BizType Service type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Task name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Task status. Values: `PENDING`, `RUNNING`, `ERROR`, `FINISH`, and `CANCELLED`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Task type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Suggestion Suggestion
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Labels Tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MediaInfo $MediaInfo Media information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param InputInfo $InputInfo Input information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedAt Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdatedAt Update time
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

        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new TaskLabel();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("MediaInfo",$param) and $param["MediaInfo"] !== null) {
            $this->MediaInfo = new MediaInfo();
            $this->MediaInfo->deserialize($param["MediaInfo"]);
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new InputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
