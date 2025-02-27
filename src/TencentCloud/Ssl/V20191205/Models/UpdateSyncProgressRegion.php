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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Update the progress of asynchronous task.
 *
 * @method string getRegion() Obtain Resource type.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Resource type.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Total number
.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total number
.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getOffsetCount() Obtain Quantity of executions completed.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOffsetCount(integer $OffsetCount) Set Quantity of executions completed.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Asynchronous update progress status: 0, pending, 1 processed, 3 processing.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Asynchronous update progress status: 0, pending, 1 processed, 3 processing.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class UpdateSyncProgressRegion extends AbstractModel
{
    /**
     * @var string Resource type.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var integer Total number
.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var integer Quantity of executions completed.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OffsetCount;

    /**
     * @var integer Asynchronous update progress status: 0, pending, 1 processed, 3 processing.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @param string $Region Resource type.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount Total number
.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $OffsetCount Quantity of executions completed.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Asynchronous update progress status: 0, pending, 1 processed, 3 processing.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("OffsetCount",$param) and $param["OffsetCount"] !== null) {
            $this->OffsetCount = $param["OffsetCount"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
