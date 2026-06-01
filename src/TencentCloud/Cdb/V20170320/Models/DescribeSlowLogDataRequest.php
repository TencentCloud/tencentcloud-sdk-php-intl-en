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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowLogData request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method integer getStartTime() Obtain Session start timestamp. For example, 1585142640.
Description: This parameter is a timestamp in seconds.
 * @method void setStartTime(integer $StartTime) Set Session start timestamp. For example, 1585142640.
Description: This parameter is a timestamp in seconds.
 * @method integer getEndTime() Obtain End timestamp. Example: 1585142640.
Description: This parameter is a timestamp in seconds.
 * @method void setEndTime(integer $EndTime) Set End timestamp. Example: 1585142640.
Description: This parameter is a timestamp in seconds.
 * @method array getUserHosts() Obtain Client `Host` list.
 * @method void setUserHosts(array $UserHosts) Set Client `Host` list.
 * @method array getUserNames() Obtain Client username list.
 * @method void setUserNames(array $UserNames) Set Client username list.
 * @method array getDataBases() Obtain Accessed database list.
 * @method void setDataBases(array $DataBases) Set Accessed database list.
 * @method string getSortBy() Obtain Sorting field. Currently supported fields and their meanings are as follows. Default value is Timestamp.
1. Timestamp: SQL execution time
2. QueryTime: SQL execution duration (seconds)
3. LockTime: Lock duration (seconds)
4. RowsExamined: Number of scanned rows
5. RowsSent: Result set row count
 * @method void setSortBy(string $SortBy) Set Sorting field. Currently supported fields and their meanings are as follows. Default value is Timestamp.
1. Timestamp: SQL execution time
2. QueryTime: SQL execution duration (seconds)
3. LockTime: Lock duration (seconds)
4. RowsExamined: Number of scanned rows
5. RowsSent: Result set row count
 * @method string getOrderBy() Obtain Ascending or descending order. Valid values: "ASC" - Ascending order, "DESC" - Descending order. Default value: "ASC".
 * @method void setOrderBy(string $OrderBy) Set Ascending or descending order. Valid values: "ASC" - Ascending order, "DESC" - Descending order. Default value: "ASC".
 * @method integer getOffset() Obtain Offset. The default is 0, and the maximum is 9999.
 * @method void setOffset(integer $Offset) Set Offset. The default is 0, and the maximum is 9999.
 * @method integer getLimit() Obtain The number of records returned in a single use, default is 100, maximum is 800.
 * @method void setLimit(integer $Limit) Set The number of records returned in a single use, default is 100, maximum is 800.
 * @method string getInstType() Obtain This parameter is valid only for source or disaster recovery instances. Valid value: `slave`, which indicates pulling logs from the replica.
 * @method void setInstType(string $InstType) Set This parameter is valid only for source or disaster recovery instances. Valid value: `slave`, which indicates pulling logs from the replica.
 * @method string getOpResourceId() Obtain Node ID.
 * @method void setOpResourceId(string $OpResourceId) Set Node ID.
 */
class DescribeSlowLogDataRequest extends AbstractModel
{
    /**
     * @var string Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     */
    public $InstanceId;

    /**
     * @var integer Session start timestamp. For example, 1585142640.
Description: This parameter is a timestamp in seconds.
     */
    public $StartTime;

    /**
     * @var integer End timestamp. Example: 1585142640.
Description: This parameter is a timestamp in seconds.
     */
    public $EndTime;

    /**
     * @var array Client `Host` list.
     */
    public $UserHosts;

    /**
     * @var array Client username list.
     */
    public $UserNames;

    /**
     * @var array Accessed database list.
     */
    public $DataBases;

    /**
     * @var string Sorting field. Currently supported fields and their meanings are as follows. Default value is Timestamp.
1. Timestamp: SQL execution time
2. QueryTime: SQL execution duration (seconds)
3. LockTime: Lock duration (seconds)
4. RowsExamined: Number of scanned rows
5. RowsSent: Result set row count
     */
    public $SortBy;

    /**
     * @var string Ascending or descending order. Valid values: "ASC" - Ascending order, "DESC" - Descending order. Default value: "ASC".
     */
    public $OrderBy;

    /**
     * @var integer Offset. The default is 0, and the maximum is 9999.
     */
    public $Offset;

    /**
     * @var integer The number of records returned in a single use, default is 100, maximum is 800.
     */
    public $Limit;

    /**
     * @var string This parameter is valid only for source or disaster recovery instances. Valid value: `slave`, which indicates pulling logs from the replica.
     */
    public $InstType;

    /**
     * @var string Node ID.
     */
    public $OpResourceId;

    /**
     * @param string $InstanceId Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     * @param integer $StartTime Session start timestamp. For example, 1585142640.
Description: This parameter is a timestamp in seconds.
     * @param integer $EndTime End timestamp. Example: 1585142640.
Description: This parameter is a timestamp in seconds.
     * @param array $UserHosts Client `Host` list.
     * @param array $UserNames Client username list.
     * @param array $DataBases Accessed database list.
     * @param string $SortBy Sorting field. Currently supported fields and their meanings are as follows. Default value is Timestamp.
1. Timestamp: SQL execution time
2. QueryTime: SQL execution duration (seconds)
3. LockTime: Lock duration (seconds)
4. RowsExamined: Number of scanned rows
5. RowsSent: Result set row count
     * @param string $OrderBy Ascending or descending order. Valid values: "ASC" - Ascending order, "DESC" - Descending order. Default value: "ASC".
     * @param integer $Offset Offset. The default is 0, and the maximum is 9999.
     * @param integer $Limit The number of records returned in a single use, default is 100, maximum is 800.
     * @param string $InstType This parameter is valid only for source or disaster recovery instances. Valid value: `slave`, which indicates pulling logs from the replica.
     * @param string $OpResourceId Node ID.
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

        if (array_key_exists("UserHosts",$param) and $param["UserHosts"] !== null) {
            $this->UserHosts = $param["UserHosts"];
        }

        if (array_key_exists("UserNames",$param) and $param["UserNames"] !== null) {
            $this->UserNames = $param["UserNames"];
        }

        if (array_key_exists("DataBases",$param) and $param["DataBases"] !== null) {
            $this->DataBases = $param["DataBases"];
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

        if (array_key_exists("InstType",$param) and $param["InstType"] !== null) {
            $this->InstType = $param["InstType"];
        }

        if (array_key_exists("OpResourceId",$param) and $param["OpResourceId"] !== null) {
            $this->OpResourceId = $param["OpResourceId"];
        }
    }
}
