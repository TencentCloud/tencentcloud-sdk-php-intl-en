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
 * DescribeLogs request structure.
 *
 * @method string getInstanceId() Obtain <p>Specify the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Specify the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
 * @method string getStartTime() Obtain <p>Start time of retrieval.</p><p>Parameter format: YYYY-MM-DD HH:mm:ss, for example 2026-03-06 00:00:00. The returned result contains only the logs at this time point and afterward.</p>
 * @method void setStartTime(string $StartTime) Set <p>Start time of retrieval.</p><p>Parameter format: YYYY-MM-DD HH:mm:ss, for example 2026-03-06 00:00:00. The returned result contains only the logs at this time point and afterward.</p>
 * @method string getEndTime() Obtain <p>End time of log retrieval.</p><p>Parameter format: YYYY-MM-DD HH:mm:ss, for example 2026-03-06 23:59:59. The returned result contains only the logs at this time point and earlier.</p>
 * @method void setEndTime(string $EndTime) Set <p>End time of log retrieval.</p><p>Parameter format: YYYY-MM-DD HH:mm:ss, for example 2026-03-06 23:59:59. The returned result contains only the logs at this time point and earlier.</p>
 * @method string getLogType() Obtain <p>Log type.</p><p>Enumeration value:</p><ul><li>auditLog: Audit log.</li></ul>
 * @method void setLogType(string $LogType) Set <p>Log type.</p><p>Enumeration value:</p><ul><li>auditLog: Audit log.</li></ul>
 * @method array getLogFilter() Obtain <p>Filter conditions.</p>
 * @method void setLogFilter(array $LogFilter) Set <p>Filter conditions.</p>
 * @method integer getLimit() Obtain <p>List size of returned logs per page.</p><ul><li>Default value: 20.</li><li>Value ranges from 1 to 100.</li></ul>
 * @method void setLimit(integer $Limit) Set <p>List size of returned logs per page.</p><ul><li>Default value: 20.</li><li>Value ranges from 1 to 100.</li></ul>
 * @method integer getOffset() Obtain <p>Starting offset amount of pagination.</p><ul><li>Default: 0.</li><li>Value: Multiple of Limit. Calculation formula: offset=limit*(page number-1).</li></ul>
 * @method void setOffset(integer $Offset) Set <p>Starting offset amount of pagination.</p><ul><li>Default: 0.</li><li>Value: Multiple of Limit. Calculation formula: offset=limit*(page number-1).</li></ul>
 * @method string getOrder() Obtain <p>Log sorting method. Default value is DESC. Values are as follows:</p><ul><li>ASC: Sort in ascending order by time with the earliest log first.</li><li>DESC: Sort in descending order with the latest log first.</li></ul>
 * @method void setOrder(string $Order) Set <p>Log sorting method. Default value is DESC. Values are as follows:</p><ul><li>ASC: Sort in ascending order by time with the earliest log first.</li><li>DESC: Sort in descending order with the latest log first.</li></ul>
 * @method string getOrderBy() Obtain <p>Sorting field. Specifies the field used to sort logs.</p>
 * @method void setOrderBy(string $OrderBy) Set <p>Sorting field. Specifies the field used to sort logs.</p>
 */
class DescribeLogsRequest extends AbstractModel
{
    /**
     * @var string <p>Specify the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Start time of retrieval.</p><p>Parameter format: YYYY-MM-DD HH:mm:ss, for example 2026-03-06 00:00:00. The returned result contains only the logs at this time point and afterward.</p>
     */
    public $StartTime;

    /**
     * @var string <p>End time of log retrieval.</p><p>Parameter format: YYYY-MM-DD HH:mm:ss, for example 2026-03-06 23:59:59. The returned result contains only the logs at this time point and earlier.</p>
     */
    public $EndTime;

    /**
     * @var string <p>Log type.</p><p>Enumeration value:</p><ul><li>auditLog: Audit log.</li></ul>
     */
    public $LogType;

    /**
     * @var array <p>Filter conditions.</p>
     */
    public $LogFilter;

    /**
     * @var integer <p>List size of returned logs per page.</p><ul><li>Default value: 20.</li><li>Value ranges from 1 to 100.</li></ul>
     */
    public $Limit;

    /**
     * @var integer <p>Starting offset amount of pagination.</p><ul><li>Default: 0.</li><li>Value: Multiple of Limit. Calculation formula: offset=limit*(page number-1).</li></ul>
     */
    public $Offset;

    /**
     * @var string <p>Log sorting method. Default value is DESC. Values are as follows:</p><ul><li>ASC: Sort in ascending order by time with the earliest log first.</li><li>DESC: Sort in descending order with the latest log first.</li></ul>
     */
    public $Order;

    /**
     * @var string <p>Sorting field. Specifies the field used to sort logs.</p>
     */
    public $OrderBy;

    /**
     * @param string $InstanceId <p>Specify the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
     * @param string $StartTime <p>Start time of retrieval.</p><p>Parameter format: YYYY-MM-DD HH:mm:ss, for example 2026-03-06 00:00:00. The returned result contains only the logs at this time point and afterward.</p>
     * @param string $EndTime <p>End time of log retrieval.</p><p>Parameter format: YYYY-MM-DD HH:mm:ss, for example 2026-03-06 23:59:59. The returned result contains only the logs at this time point and earlier.</p>
     * @param string $LogType <p>Log type.</p><p>Enumeration value:</p><ul><li>auditLog: Audit log.</li></ul>
     * @param array $LogFilter <p>Filter conditions.</p>
     * @param integer $Limit <p>List size of returned logs per page.</p><ul><li>Default value: 20.</li><li>Value ranges from 1 to 100.</li></ul>
     * @param integer $Offset <p>Starting offset amount of pagination.</p><ul><li>Default: 0.</li><li>Value: Multiple of Limit. Calculation formula: offset=limit*(page number-1).</li></ul>
     * @param string $Order <p>Log sorting method. Default value is DESC. Values are as follows:</p><ul><li>ASC: Sort in ascending order by time with the earliest log first.</li><li>DESC: Sort in descending order with the latest log first.</li></ul>
     * @param string $OrderBy <p>Sorting field. Specifies the field used to sort logs.</p>
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

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("LogFilter",$param) and $param["LogFilter"] !== null) {
            $this->LogFilter = [];
            foreach ($param["LogFilter"] as $key => $value){
                $obj = new LogFilter();
                $obj->deserialize($value);
                array_push($this->LogFilter, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }
    }
}
