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
 * Workflow Execution Information
 *
 * @method string getStartTime() Obtain Start TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setStartTime(string $StartTime) Set Start TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getEndTime() Obtain End timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setEndTime(string $EndTime) Set End timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getStatus() Obtain Workflow Execution Status 0: Waiting to run, 1: Running, 2: Completed, 3: Error
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStatus(integer $Status) Set Workflow Execution Status 0: Waiting to run, 1: Running, 2: Completed, 3: Error
Note: This field may return null, indicating that no valid value can be obtained.
 */
class WorkFlowExecuteDto extends AbstractModel
{
    /**
     * @var string Start TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $StartTime;

    /**
     * @var string End timeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $EndTime;

    /**
     * @var integer Workflow Execution Status 0: Waiting to run, 1: Running, 2: Completed, 3: Error
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @param string $StartTime Start TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $EndTime End timeNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Status Workflow Execution Status 0: Waiting to run, 1: Running, 2: Completed, 3: Error
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
