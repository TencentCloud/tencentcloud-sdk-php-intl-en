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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data consistency check result
 *
 * @method string getCompareTaskId() Obtain Data consistency check task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCompareTaskId(string $CompareTaskId) Set Data consistency check task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Data consistency check result. Valid values: `unstart` (the task is not started); `running` (the task is running); `canceled` (the task is stopped); `failed` (the task failed); `inconsistent` (the data is inconsistent); `consistent` (the data is consistent); `notexist` (the task does not exist).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Data consistency check result. Valid values: `unstart` (the task is not started); `running` (the task is running); `canceled` (the task is stopped); `failed` (the task failed); `inconsistent` (the data is inconsistent); `consistent` (the data is consistent); `notexist` (the task does not exist).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CompareTaskInfo extends AbstractModel
{
    /**
     * @var string Data consistency check task ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CompareTaskId;

    /**
     * @var string Data consistency check result. Valid values: `unstart` (the task is not started); `running` (the task is running); `canceled` (the task is stopped); `failed` (the task failed); `inconsistent` (the data is inconsistent); `consistent` (the data is consistent); `notexist` (the task does not exist).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @param string $CompareTaskId Data consistency check task ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Data consistency check result. Valid values: `unstart` (the task is not started); `running` (the task is running); `canceled` (the task is stopped); `failed` (the task failed); `inconsistent` (the data is inconsistent); `consistent` (the data is consistent); `notexist` (the task does not exist).
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
        if (array_key_exists("CompareTaskId",$param) and $param["CompareTaskId"] !== null) {
            $this->CompareTaskId = $param["CompareTaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
