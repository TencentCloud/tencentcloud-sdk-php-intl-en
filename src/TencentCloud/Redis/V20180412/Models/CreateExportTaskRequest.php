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
 * CreateExportTask request structure.
 *
 * @method string getInstanceId() Obtain <p>Specify the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Specify the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
 * @method string getLogType() Obtain <p>Log type.</p><p>Enumeration value:</p><ul><li>auditLog: Audit log.</li></ul>
 * @method void setLogType(string $LogType) Set <p>Log type.</p><p>Enumeration value:</p><ul><li>auditLog: Audit log.</li></ul>
 * @method string getStartTime() Obtain <p>Start time of retrieval.</p><p>Parameter format: YYYY-MM-DD HH:mm:ss, for example 2026-03-06 00:00:00. The returned result contains only the logs at this time point and afterward.</p>
 * @method void setStartTime(string $StartTime) Set <p>Start time of retrieval.</p><p>Parameter format: YYYY-MM-DD HH:mm:ss, for example 2026-03-06 00:00:00. The returned result contains only the logs at this time point and afterward.</p>
 * @method string getEndTime() Obtain <p>End time of log retrieval.</p><p>Parameter format: YYYY-MM-DD HH:mm:ss, for example 2026-03-06 23:59:59. The returned result contains only the logs at this time point and earlier.</p>
 * @method void setEndTime(string $EndTime) Set <p>End time of log retrieval.</p><p>Parameter format: YYYY-MM-DD HH:mm:ss, for example 2026-03-06 23:59:59. The returned result contains only the logs at this time point and earlier.</p>
 * @method array getLogFilter() Obtain <p>Set the log filter field to filter and download qualified logs.</p>
 * @method void setLogFilter(array $LogFilter) Set <p>Set the log filter field to filter and download qualified logs.</p>
 * @method array getColumnFilter() Obtain <p>Custom log fields for download, multiple fields separated by commas, such as "timestamp,operation,user". Only the data of selected fields will be downloaded when specified. The parameter defaults to downloading all fields when not passed.</p>
 * @method void setColumnFilter(array $ColumnFilter) Set <p>Custom log fields for download, multiple fields separated by commas, such as "timestamp,operation,user". Only the data of selected fields will be downloaded when specified. The parameter defaults to downloading all fields when not passed.</p>
 */
class CreateExportTaskRequest extends AbstractModel
{
    /**
     * @var string <p>Specify the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Log type.</p><p>Enumeration value:</p><ul><li>auditLog: Audit log.</li></ul>
     */
    public $LogType;

    /**
     * @var string <p>Start time of retrieval.</p><p>Parameter format: YYYY-MM-DD HH:mm:ss, for example 2026-03-06 00:00:00. The returned result contains only the logs at this time point and afterward.</p>
     */
    public $StartTime;

    /**
     * @var string <p>End time of log retrieval.</p><p>Parameter format: YYYY-MM-DD HH:mm:ss, for example 2026-03-06 23:59:59. The returned result contains only the logs at this time point and earlier.</p>
     */
    public $EndTime;

    /**
     * @var array <p>Set the log filter field to filter and download qualified logs.</p>
     */
    public $LogFilter;

    /**
     * @var array <p>Custom log fields for download, multiple fields separated by commas, such as "timestamp,operation,user". Only the data of selected fields will be downloaded when specified. The parameter defaults to downloading all fields when not passed.</p>
     */
    public $ColumnFilter;

    /**
     * @param string $InstanceId <p>Specify the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
     * @param string $LogType <p>Log type.</p><p>Enumeration value:</p><ul><li>auditLog: Audit log.</li></ul>
     * @param string $StartTime <p>Start time of retrieval.</p><p>Parameter format: YYYY-MM-DD HH:mm:ss, for example 2026-03-06 00:00:00. The returned result contains only the logs at this time point and afterward.</p>
     * @param string $EndTime <p>End time of log retrieval.</p><p>Parameter format: YYYY-MM-DD HH:mm:ss, for example 2026-03-06 23:59:59. The returned result contains only the logs at this time point and earlier.</p>
     * @param array $LogFilter <p>Set the log filter field to filter and download qualified logs.</p>
     * @param array $ColumnFilter <p>Custom log fields for download, multiple fields separated by commas, such as "timestamp,operation,user". Only the data of selected fields will be downloaded when specified. The parameter defaults to downloading all fields when not passed.</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("LogFilter",$param) and $param["LogFilter"] !== null) {
            $this->LogFilter = [];
            foreach ($param["LogFilter"] as $key => $value){
                $obj = new LogFilter();
                $obj->deserialize($value);
                array_push($this->LogFilter, $obj);
            }
        }

        if (array_key_exists("ColumnFilter",$param) and $param["ColumnFilter"] !== null) {
            $this->ColumnFilter = $param["ColumnFilter"];
        }
    }
}
