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
 * DeleteExportTask request structure.
 *
 * @method string getLogType() Obtain <p>Log type to specify deletion.</p><p>Enumeration value:</p><ul><li>auditLog: Audit log.</li></ul>
 * @method void setLogType(string $LogType) Set <p>Log type to specify deletion.</p><p>Enumeration value:</p><ul><li>auditLog: Audit log.</li></ul>
 * @method string getFileName() Obtain <p>Specify deletion of the log filename.</p>
 * @method void setFileName(string $FileName) Set <p>Specify deletion of the log filename.</p>
 * @method string getInstanceId() Obtain <p>Specify the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Specify the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
 */
class DeleteExportTaskRequest extends AbstractModel
{
    /**
     * @var string <p>Log type to specify deletion.</p><p>Enumeration value:</p><ul><li>auditLog: Audit log.</li></ul>
     */
    public $LogType;

    /**
     * @var string <p>Specify deletion of the log filename.</p>
     */
    public $FileName;

    /**
     * @var string <p>Specify the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
     */
    public $InstanceId;

    /**
     * @param string $LogType <p>Log type to specify deletion.</p><p>Enumeration value:</p><ul><li>auditLog: Audit log.</li></ul>
     * @param string $FileName <p>Specify deletion of the log filename.</p>
     * @param string $InstanceId <p>Specify the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
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

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
