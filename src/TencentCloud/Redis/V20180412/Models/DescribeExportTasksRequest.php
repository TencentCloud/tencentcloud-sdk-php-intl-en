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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExportTasks request structure.
 *
 * @method string getLogType() Obtain <p>Log type.</p><p>Enumeration value:</p><ul><li>auditLog: Audit log.</li></ul>
 * @method void setLogType(string $LogType) Set <p>Log type.</p><p>Enumeration value:</p><ul><li>auditLog: Audit log.</li></ul>
 * @method integer getLimit() Obtain <p>Size of the output task list per page.</p><ul><li>Default value: 20.</li><li>Value ranges from 1 to 100.</li></ul>
 * @method void setLimit(integer $Limit) Set <p>Size of the output task list per page.</p><ul><li>Default value: 20.</li><li>Value ranges from 1 to 100.</li></ul>
 * @method integer getOffset() Obtain <p>Pagination offset.</p><ul><li>Default value: 0.</li><li>Value: Multiple of Limit. Calculation formula: offset=limit*(page number-1).</li></ul>
 * @method void setOffset(integer $Offset) Set <p>Pagination offset.</p><ul><li>Default value: 0.</li><li>Value: Multiple of Limit. Calculation formula: offset=limit*(page number-1).</li></ul>
 * @method string getInstanceId() Obtain <p>Specified query instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Specified query instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
 */
class DescribeExportTasksRequest extends AbstractModel
{
    /**
     * @var string <p>Log type.</p><p>Enumeration value:</p><ul><li>auditLog: Audit log.</li></ul>
     */
    public $LogType;

    /**
     * @var integer <p>Size of the output task list per page.</p><ul><li>Default value: 20.</li><li>Value ranges from 1 to 100.</li></ul>
     */
    public $Limit;

    /**
     * @var integer <p>Pagination offset.</p><ul><li>Default value: 0.</li><li>Value: Multiple of Limit. Calculation formula: offset=limit*(page number-1).</li></ul>
     */
    public $Offset;

    /**
     * @var string <p>Specified query instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
     */
    public $InstanceId;

    /**
     * @param string $LogType <p>Log type.</p><p>Enumeration value:</p><ul><li>auditLog: Audit log.</li></ul>
     * @param integer $Limit <p>Size of the output task list per page.</p><ul><li>Default value: 20.</li><li>Value ranges from 1 to 100.</li></ul>
     * @param integer $Offset <p>Pagination offset.</p><ul><li>Default value: 0.</li><li>Value: Multiple of Limit. Calculation formula: offset=limit*(page number-1).</li></ul>
     * @param string $InstanceId <p>Specified query instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
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
        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
