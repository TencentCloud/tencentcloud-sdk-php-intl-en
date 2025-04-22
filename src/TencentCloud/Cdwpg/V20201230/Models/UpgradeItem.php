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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Upgrade information
 *
 * @method string getTaskName() Obtain Task name.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskName(string $TaskName) Set Task name.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSourceVersion() Obtain Original kernel version.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourceVersion(string $SourceVersion) Set Original kernel version.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTargetVersion() Obtain Target kernel version.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetVersion(string $TargetVersion) Set Target kernel version.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Task creation time.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Task creation time.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain Task end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set Task end time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Task completion status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Task completion status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOperateUin() Obtain Operator.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOperateUin(string $OperateUin) Set Operator.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class UpgradeItem extends AbstractModel
{
    /**
     * @var string Task name.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskName;

    /**
     * @var string Original kernel version.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourceVersion;

    /**
     * @var string Target kernel version.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetVersion;

    /**
     * @var string Task creation time.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Task end time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string Task completion status.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Operator.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OperateUin;

    /**
     * @param string $TaskName Task name.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SourceVersion Original kernel version.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TargetVersion Target kernel version.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Task creation time.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime Task end time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Task completion status.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OperateUin Operator.
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("SourceVersion",$param) and $param["SourceVersion"] !== null) {
            $this->SourceVersion = $param["SourceVersion"];
        }

        if (array_key_exists("TargetVersion",$param) and $param["TargetVersion"] !== null) {
            $this->TargetVersion = $param["TargetVersion"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }
    }
}
