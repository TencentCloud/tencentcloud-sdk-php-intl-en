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
 * Task submission detail response parameters structure.
 *
 * @method string getEngineTaskId() Obtain Engine task id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEngineTaskId(string $EngineTaskId) Set Engine task id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEngineExeStatus() Obtain Engine execution status, enumerate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEngineExeStatus(string $EngineExeStatus) Set Engine execution status, enumerate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEngineExeStartTime() Obtain Engine execution start time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEngineExeStartTime(string $EngineExeStartTime) Set Engine execution start time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEngineExeEndTime() Obtain Engine execution end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEngineExeEndTime(string $EngineExeEndTime) Set Engine execution end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskTypeId() Obtain Task type id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskTypeId(integer $TaskTypeId) Set Task type id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBusinessInfo() Obtain Business information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBusinessInfo(string $BusinessInfo) Set Business information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method EngineTaskInfo getEngineTaskInfo() Obtain Engine task information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEngineTaskInfo(EngineTaskInfo $EngineTaskInfo) Set Engine task information.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ReportTaskDetail extends AbstractModel
{
    /**
     * @var string Engine task id.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EngineTaskId;

    /**
     * @var string Engine execution status, enumerate.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EngineExeStatus;

    /**
     * @var string Engine execution start time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EngineExeStartTime;

    /**
     * @var string Engine execution end time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EngineExeEndTime;

    /**
     * @var integer Task type id.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskTypeId;

    /**
     * @var string Business information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BusinessInfo;

    /**
     * @var EngineTaskInfo Engine task information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EngineTaskInfo;

    /**
     * @param string $EngineTaskId Engine task id.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EngineExeStatus Engine execution status, enumerate.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EngineExeStartTime Engine execution start time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EngineExeEndTime Engine execution end time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskTypeId Task type id.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BusinessInfo Business information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param EngineTaskInfo $EngineTaskInfo Engine task information.
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
        if (array_key_exists("EngineTaskId",$param) and $param["EngineTaskId"] !== null) {
            $this->EngineTaskId = $param["EngineTaskId"];
        }

        if (array_key_exists("EngineExeStatus",$param) and $param["EngineExeStatus"] !== null) {
            $this->EngineExeStatus = $param["EngineExeStatus"];
        }

        if (array_key_exists("EngineExeStartTime",$param) and $param["EngineExeStartTime"] !== null) {
            $this->EngineExeStartTime = $param["EngineExeStartTime"];
        }

        if (array_key_exists("EngineExeEndTime",$param) and $param["EngineExeEndTime"] !== null) {
            $this->EngineExeEndTime = $param["EngineExeEndTime"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("BusinessInfo",$param) and $param["BusinessInfo"] !== null) {
            $this->BusinessInfo = $param["BusinessInfo"];
        }

        if (array_key_exists("EngineTaskInfo",$param) and $param["EngineTaskInfo"] !== null) {
            $this->EngineTaskInfo = new EngineTaskInfo();
            $this->EngineTaskInfo->deserialize($param["EngineTaskInfo"]);
        }
    }
}
