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
 * ES cluster operation details
 *
 * @method integer getId() Obtain Unique operation ID
 * @method void setId(integer $Id) Set Unique operation ID
 * @method string getStartTime() Obtain Operation start time
 * @method void setStartTime(string $StartTime) Set Operation start time
 * @method string getType() Obtain Operation type
 * @method void setType(string $Type) Set Operation type
 * @method OperationDetail getDetail() Obtain Operation details
 * @method void setDetail(OperationDetail $Detail) Set Operation details
 * @method string getResult() Obtain Operation result
 * @method void setResult(string $Result) Set Operation result
 * @method array getTasks() Obtain Workflow task information
 * @method void setTasks(array $Tasks) Set Workflow task information
 * @method float getProgress() Obtain Operation progress
 * @method void setProgress(float $Progress) Set Operation progress
 */
class Operation extends AbstractModel
{
    /**
     * @var integer Unique operation ID
     */
    public $Id;

    /**
     * @var string Operation start time
     */
    public $StartTime;

    /**
     * @var string Operation type
     */
    public $Type;

    /**
     * @var OperationDetail Operation details
     */
    public $Detail;

    /**
     * @var string Operation result
     */
    public $Result;

    /**
     * @var array Workflow task information
     */
    public $Tasks;

    /**
     * @var float Operation progress
     */
    public $Progress;

    /**
     * @param integer $Id Unique operation ID
     * @param string $StartTime Operation start time
     * @param string $Type Operation type
     * @param OperationDetail $Detail Operation details
     * @param string $Result Operation result
     * @param array $Tasks Workflow task information
     * @param float $Progress Operation progress
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = new OperationDetail();
            $this->Detail->deserialize($param["Detail"]);
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new TaskDetail();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
