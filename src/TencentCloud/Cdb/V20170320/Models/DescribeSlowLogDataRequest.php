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
 * DescribeSlowLogData request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getStartTime() Obtain Start timestamp, such as 1585142640.
 * @method void setStartTime(integer $StartTime) Set Start timestamp, such as 1585142640.
 * @method integer getEndTime() Obtain End timestamp, such as 1585142640.
 * @method void setEndTime(integer $EndTime) Set End timestamp, such as 1585142640.
 * @method array getUserHosts() Obtain Client `Host` list.
 * @method void setUserHosts(array $UserHosts) Set Client `Host` list.
 * @method array getUserNames() Obtain Client username list.
 * @method void setUserNames(array $UserNames) Set Client username list.
 * @method array getDataBases() Obtain Accessed database list.
 * @method void setDataBases(array $DataBases) Set Accessed database list.
 * @method string getSortBy() Obtain Sort by field. Valid values: Timestamp, QueryTime, LockTime, RowsExamined, RowsSent.
 * @method void setSortBy(string $SortBy) Set Sort by field. Valid values: Timestamp, QueryTime, LockTime, RowsExamined, RowsSent.
 * @method string getOrderBy() Obtain Sorting order. Valid values: ASC (ascending), DESC (descending).
 * @method void setOrderBy(string $OrderBy) Set Sorting order. Valid values: ASC (ascending), DESC (descending).
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain The number of results per page in paginated queries. Default value: 100. Maximum value: 400.
 * @method void setLimit(integer $Limit) Set The number of results per page in paginated queries. Default value: 100. Maximum value: 400.
 * @method string getInstType() Obtain This parameter is valid only for source or disaster recovery instances. Valid value: `slave`, which indicates pulling logs from the replica.
 * @method void setInstType(string $InstType) Set This parameter is valid only for source or disaster recovery instances. Valid value: `slave`, which indicates pulling logs from the replica.
 */
class DescribeSlowLogDataRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Start timestamp, such as 1585142640.
     */
    public $StartTime;

    /**
     * @var integer End timestamp, such as 1585142640.
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
     * @var string Sort by field. Valid values: Timestamp, QueryTime, LockTime, RowsExamined, RowsSent.
     */
    public $SortBy;

    /**
     * @var string Sorting order. Valid values: ASC (ascending), DESC (descending).
     */
    public $OrderBy;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer The number of results per page in paginated queries. Default value: 100. Maximum value: 400.
     */
    public $Limit;

    /**
     * @var string This parameter is valid only for source or disaster recovery instances. Valid value: `slave`, which indicates pulling logs from the replica.
     */
    public $InstType;

    /**
     * @param string $InstanceId Instance ID.
     * @param integer $StartTime Start timestamp, such as 1585142640.
     * @param integer $EndTime End timestamp, such as 1585142640.
     * @param array $UserHosts Client `Host` list.
     * @param array $UserNames Client username list.
     * @param array $DataBases Accessed database list.
     * @param string $SortBy Sort by field. Valid values: Timestamp, QueryTime, LockTime, RowsExamined, RowsSent.
     * @param string $OrderBy Sorting order. Valid values: ASC (ascending), DESC (descending).
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit The number of results per page in paginated queries. Default value: 100. Maximum value: 400.
     * @param string $InstType This parameter is valid only for source or disaster recovery instances. Valid value: `slave`, which indicates pulling logs from the replica.
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
    }
}
