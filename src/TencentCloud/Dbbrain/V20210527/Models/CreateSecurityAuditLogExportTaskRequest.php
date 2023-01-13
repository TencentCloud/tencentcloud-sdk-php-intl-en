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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSecurityAuditLogExportTask request structure.
 *
 * @method string getSecAuditGroupId() Obtain Security audit group ID.
 * @method void setSecAuditGroupId(string $SecAuditGroupId) Set Security audit group ID.
 * @method string getStartTime() Obtain Exported log start time, such as 2020-12-28 00:00:00.
 * @method void setStartTime(string $StartTime) Set Exported log start time, such as 2020-12-28 00:00:00.
 * @method string getEndTime() Obtain Exported log end time, such as 2020-12-28 01:00:00.
 * @method void setEndTime(string $EndTime) Set Exported log end time, such as 2020-12-28 01:00:00.
 * @method string getProduct() Obtain Service type. Valid value: `mysql` (TencentDB for MySQL).
 * @method void setProduct(string $Product) Set Service type. Valid value: `mysql` (TencentDB for MySQL).
 * @method array getDangerLevels() Obtain List of log risk levels. Valid values: `0` (no risk), `1` (low risk), `2` (medium risk), `3` (high risk).
 * @method void setDangerLevels(array $DangerLevels) Set List of log risk levels. Valid values: `0` (no risk), `1` (low risk), `2` (medium risk), `3` (high risk).
 */
class CreateSecurityAuditLogExportTaskRequest extends AbstractModel
{
    /**
     * @var string Security audit group ID.
     */
    public $SecAuditGroupId;

    /**
     * @var string Exported log start time, such as 2020-12-28 00:00:00.
     */
    public $StartTime;

    /**
     * @var string Exported log end time, such as 2020-12-28 01:00:00.
     */
    public $EndTime;

    /**
     * @var string Service type. Valid value: `mysql` (TencentDB for MySQL).
     */
    public $Product;

    /**
     * @var array List of log risk levels. Valid values: `0` (no risk), `1` (low risk), `2` (medium risk), `3` (high risk).
     */
    public $DangerLevels;

    /**
     * @param string $SecAuditGroupId Security audit group ID.
     * @param string $StartTime Exported log start time, such as 2020-12-28 00:00:00.
     * @param string $EndTime Exported log end time, such as 2020-12-28 01:00:00.
     * @param string $Product Service type. Valid value: `mysql` (TencentDB for MySQL).
     * @param array $DangerLevels List of log risk levels. Valid values: `0` (no risk), `1` (low risk), `2` (medium risk), `3` (high risk).
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
        if (array_key_exists("SecAuditGroupId",$param) and $param["SecAuditGroupId"] !== null) {
            $this->SecAuditGroupId = $param["SecAuditGroupId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("DangerLevels",$param) and $param["DangerLevels"] !== null) {
            $this->DangerLevels = $param["DangerLevels"];
        }
    }
}
