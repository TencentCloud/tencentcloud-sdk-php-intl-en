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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBAuditLogs request structure.
 *
 * @method string getProduct() Obtain <p>Service product type. Currently, Cloud API only supports: dcdb, mariadb (cdb and cynosdb have been migrated to the central platform).</p>
 * @method void setProduct(string $Product) Set <p>Service product type. Currently, Cloud API only supports: dcdb, mariadb (cdb and cynosdb have been migrated to the central platform).</p>
 * @method string getStartTime() Obtain <p>Start time, format yyyy-MM-dd HH:mm:ss.</p>
 * @method void setStartTime(string $StartTime) Set <p>Start time, format yyyy-MM-dd HH:mm:ss.</p>
 * @method string getEndTime() Obtain <p>End time, format: yyyy-MM-dd HH:mm:ss.</p>
 * @method void setEndTime(string $EndTime) Set <p>End time, format: yyyy-MM-dd HH:mm:ss.</p>
 * @method string getInstanceId() Obtain <p>Instance ID, required. In dcdb and mariadb scenarios, query audit logs by instance dimension.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID, required. In dcdb and mariadb scenarios, query audit logs by instance dimension.</p>
 * @method string getLogType() Obtain <p>Log type: Proxy log, DB database log, All.</p>
 * @method void setLogType(string $LogType) Set <p>Log type: Proxy log, DB database log, All.</p>
 * @method string getSortBy() Obtain <p>Sorting field. Default: Timestamp.</p>
 * @method void setSortBy(string $SortBy) Set <p>Sorting field. Default: Timestamp.</p>
 * @method string getOrderBy() Obtain <p>Sorting method: ASC for ascending order, DESC for descending order. Default: DESC.</p>
 * @method void setOrderBy(string $OrderBy) Set <p>Sorting method: ASC for ascending order, DESC for descending order. Default: DESC.</p>
 * @method integer getOffset() Obtain <p>Offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset. Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Number of returned results. Default: 20. Maximum: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of returned results. Default: 20. Maximum: 100.</p>
 * @method integer getSqlStartTime() Obtain <p>SQL start time (millisecond-level timestamp), used when performing a join query by QueryId.</p>
 * @method void setSqlStartTime(integer $SqlStartTime) Set <p>SQL start time (millisecond-level timestamp), used when performing a join query by QueryId.</p>
 * @method AuditLogQueryFilter getFilter() Obtain <p>A collection of query filter criteria for audit logs.</p>
 * @method void setFilter(AuditLogQueryFilter $Filter) Set <p>A collection of query filter criteria for audit logs.</p>
 * @method string getClusterId() Obtain <p>Cluster ID. Query audit logs for the dcdb product at the cluster level</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID. Query audit logs for the dcdb product at the cluster level</p>
 */
class DescribeDBAuditLogsRequest extends AbstractModel
{
    /**
     * @var string <p>Service product type. Currently, Cloud API only supports: dcdb, mariadb (cdb and cynosdb have been migrated to the central platform).</p>
     */
    public $Product;

    /**
     * @var string <p>Start time, format yyyy-MM-dd HH:mm:ss.</p>
     */
    public $StartTime;

    /**
     * @var string <p>End time, format: yyyy-MM-dd HH:mm:ss.</p>
     */
    public $EndTime;

    /**
     * @var string <p>Instance ID, required. In dcdb and mariadb scenarios, query audit logs by instance dimension.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Log type: Proxy log, DB database log, All.</p>
     */
    public $LogType;

    /**
     * @var string <p>Sorting field. Default: Timestamp.</p>
     */
    public $SortBy;

    /**
     * @var string <p>Sorting method: ASC for ascending order, DESC for descending order. Default: DESC.</p>
     */
    public $OrderBy;

    /**
     * @var integer <p>Offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of returned results. Default: 20. Maximum: 100.</p>
     */
    public $Limit;

    /**
     * @var integer <p>SQL start time (millisecond-level timestamp), used when performing a join query by QueryId.</p>
     */
    public $SqlStartTime;

    /**
     * @var AuditLogQueryFilter <p>A collection of query filter criteria for audit logs.</p>
     */
    public $Filter;

    /**
     * @var string <p>Cluster ID. Query audit logs for the dcdb product at the cluster level</p>
     */
    public $ClusterId;

    /**
     * @param string $Product <p>Service product type. Currently, Cloud API only supports: dcdb, mariadb (cdb and cynosdb have been migrated to the central platform).</p>
     * @param string $StartTime <p>Start time, format yyyy-MM-dd HH:mm:ss.</p>
     * @param string $EndTime <p>End time, format: yyyy-MM-dd HH:mm:ss.</p>
     * @param string $InstanceId <p>Instance ID, required. In dcdb and mariadb scenarios, query audit logs by instance dimension.</p>
     * @param string $LogType <p>Log type: Proxy log, DB database log, All.</p>
     * @param string $SortBy <p>Sorting field. Default: Timestamp.</p>
     * @param string $OrderBy <p>Sorting method: ASC for ascending order, DESC for descending order. Default: DESC.</p>
     * @param integer $Offset <p>Offset. Default value: 0.</p>
     * @param integer $Limit <p>Number of returned results. Default: 20. Maximum: 100.</p>
     * @param integer $SqlStartTime <p>SQL start time (millisecond-level timestamp), used when performing a join query by QueryId.</p>
     * @param AuditLogQueryFilter $Filter <p>A collection of query filter criteria for audit logs.</p>
     * @param string $ClusterId <p>Cluster ID. Query audit logs for the dcdb product at the cluster level</p>
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SqlStartTime",$param) and $param["SqlStartTime"] !== null) {
            $this->SqlStartTime = $param["SqlStartTime"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new AuditLogQueryFilter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
