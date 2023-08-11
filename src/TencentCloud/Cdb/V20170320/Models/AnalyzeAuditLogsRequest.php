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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AnalyzeAuditLogs request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getStartTime() Obtain Start time of the log to be analyzed in the format of `2023-02-16 00:00:20`.
 * @method void setStartTime(string $StartTime) Set Start time of the log to be analyzed in the format of `2023-02-16 00:00:20`.
 * @method string getEndTime() Obtain End time of the log to be analyzed in the format of `2023-02-16 00:00:20`.
 * @method void setEndTime(string $EndTime) Set End time of the log to be analyzed in the format of `2023-02-16 00:00:20`.
 * @method array getAggregationConditions() Obtain Sorting conditions for aggregation dimension
 * @method void setAggregationConditions(array $AggregationConditions) Set Sorting conditions for aggregation dimension
 * @method AuditLogFilter getAuditLogFilter() Obtain This parameter is disused. The result set of the audit log filtered by this condition is set as the analysis log.
 * @method void setAuditLogFilter(AuditLogFilter $AuditLogFilter) Set This parameter is disused. The result set of the audit log filtered by this condition is set as the analysis log.
 * @method array getLogFilter() Obtain The result set of the audit log filtered by this condition is set as the analysis Log.
 * @method void setLogFilter(array $LogFilter) Set The result set of the audit log filtered by this condition is set as the analysis Log.
 */
class AnalyzeAuditLogsRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Start time of the log to be analyzed in the format of `2023-02-16 00:00:20`.
     */
    public $StartTime;

    /**
     * @var string End time of the log to be analyzed in the format of `2023-02-16 00:00:20`.
     */
    public $EndTime;

    /**
     * @var array Sorting conditions for aggregation dimension
     */
    public $AggregationConditions;

    /**
     * @var AuditLogFilter This parameter is disused. The result set of the audit log filtered by this condition is set as the analysis log.
     */
    public $AuditLogFilter;

    /**
     * @var array The result set of the audit log filtered by this condition is set as the analysis Log.
     */
    public $LogFilter;

    /**
     * @param string $InstanceId Instance ID
     * @param string $StartTime Start time of the log to be analyzed in the format of `2023-02-16 00:00:20`.
     * @param string $EndTime End time of the log to be analyzed in the format of `2023-02-16 00:00:20`.
     * @param array $AggregationConditions Sorting conditions for aggregation dimension
     * @param AuditLogFilter $AuditLogFilter This parameter is disused. The result set of the audit log filtered by this condition is set as the analysis log.
     * @param array $LogFilter The result set of the audit log filtered by this condition is set as the analysis Log.
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AggregationConditions",$param) and $param["AggregationConditions"] !== null) {
            $this->AggregationConditions = [];
            foreach ($param["AggregationConditions"] as $key => $value){
                $obj = new AggregationCondition();
                $obj->deserialize($value);
                array_push($this->AggregationConditions, $obj);
            }
        }

        if (array_key_exists("AuditLogFilter",$param) and $param["AuditLogFilter"] !== null) {
            $this->AuditLogFilter = new AuditLogFilter();
            $this->AuditLogFilter->deserialize($param["AuditLogFilter"]);
        }

        if (array_key_exists("LogFilter",$param) and $param["LogFilter"] !== null) {
            $this->LogFilter = [];
            foreach ($param["LogFilter"] as $key => $value){
                $obj = new InstanceAuditLogFilters();
                $obj->deserialize($value);
                array_push($this->LogFilter, $obj);
            }
        }
    }
}
