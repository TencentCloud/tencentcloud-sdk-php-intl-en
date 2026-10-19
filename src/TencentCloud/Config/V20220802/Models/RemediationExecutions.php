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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Correction records.
 *
 * @method integer getExecutionStatus() Obtain Remediation status. Valid values: 1 (running), 2 (successful), and 3 (failed).
 * @method void setExecutionStatus(integer $ExecutionStatus) Set Remediation status. Valid values: 1 (running), 2 (successful), and 3 (failed).
 * @method string getExecutionResourceType() Obtain Resource type.
 * @method void setExecutionResourceType(string $ExecutionResourceType) Set Resource type.
 * @method string getExecutionCreateDate() Obtain Fixing time
 * @method void setExecutionCreateDate(string $ExecutionCreateDate) Set Fixing time
 * @method string getExecutionStatusMessage() Obtain Error message
 * @method void setExecutionStatusMessage(string $ExecutionStatusMessage) Set Error message
 * @method string getExecutionResourceIds() Obtain Resource ID
 * @method void setExecutionResourceIds(string $ExecutionResourceIds) Set Resource ID
 */
class RemediationExecutions extends AbstractModel
{
    /**
     * @var integer Remediation status. Valid values: 1 (running), 2 (successful), and 3 (failed).
     */
    public $ExecutionStatus;

    /**
     * @var string Resource type.
     */
    public $ExecutionResourceType;

    /**
     * @var string Fixing time
     */
    public $ExecutionCreateDate;

    /**
     * @var string Error message
     */
    public $ExecutionStatusMessage;

    /**
     * @var string Resource ID
     */
    public $ExecutionResourceIds;

    /**
     * @param integer $ExecutionStatus Remediation status. Valid values: 1 (running), 2 (successful), and 3 (failed).
     * @param string $ExecutionResourceType Resource type.
     * @param string $ExecutionCreateDate Fixing time
     * @param string $ExecutionStatusMessage Error message
     * @param string $ExecutionResourceIds Resource ID
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
        if (array_key_exists("ExecutionStatus",$param) and $param["ExecutionStatus"] !== null) {
            $this->ExecutionStatus = $param["ExecutionStatus"];
        }

        if (array_key_exists("ExecutionResourceType",$param) and $param["ExecutionResourceType"] !== null) {
            $this->ExecutionResourceType = $param["ExecutionResourceType"];
        }

        if (array_key_exists("ExecutionCreateDate",$param) and $param["ExecutionCreateDate"] !== null) {
            $this->ExecutionCreateDate = $param["ExecutionCreateDate"];
        }

        if (array_key_exists("ExecutionStatusMessage",$param) and $param["ExecutionStatusMessage"] !== null) {
            $this->ExecutionStatusMessage = $param["ExecutionStatusMessage"];
        }

        if (array_key_exists("ExecutionResourceIds",$param) and $param["ExecutionResourceIds"] !== null) {
            $this->ExecutionResourceIds = $param["ExecutionResourceIds"];
        }
    }
}
