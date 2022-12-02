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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMigrationJobs request structure.
 *
 * @method string getJobId() Obtain Data migration task ID such as `dts-amm1jw5q`
 * @method void setJobId(string $JobId) Set Data migration task ID such as `dts-amm1jw5q`
 * @method string getJobName() Obtain Data migration task name
 * @method void setJobName(string $JobName) Set Data migration task name
 * @method array getStatus() Obtain Data migration task status. Valid values: `created`, `checking`, `checkPass`, `checkNotPass`, `readyRun`, `running`, `readyComplete`, `success`, `failed`, `stopping`, `completing`.
 * @method void setStatus(array $Status) Set Data migration task status. Valid values: `created`, `checking`, `checkPass`, `checkNotPass`, `readyRun`, `running`, `readyComplete`, `success`, `failed`, `stopping`, `completing`.
 * @method string getSrcInstanceId() Obtain Source instance ID in the format of `cdb-c1nl9rpv`
 * @method void setSrcInstanceId(string $SrcInstanceId) Set Source instance ID in the format of `cdb-c1nl9rpv`
 * @method string getSrcRegion() Obtain Source instance region, such as `ap-guangzhou`.
 * @method void setSrcRegion(string $SrcRegion) Set Source instance region, such as `ap-guangzhou`.
 * @method array getSrcDatabaseType() Obtain Source database type, such as `sqlserver`, `mysql`, `mongodb`, `redis`, `tendis`, `keewidb`, `clickhouse`, `cynosdbmysql`, `percona`, `tdsqlpercona`, `mariadb`, `tdsqlmysql`, `postgresql.
 * @method void setSrcDatabaseType(array $SrcDatabaseType) Set Source database type, such as `sqlserver`, `mysql`, `mongodb`, `redis`, `tendis`, `keewidb`, `clickhouse`, `cynosdbmysql`, `percona`, `tdsqlpercona`, `mariadb`, `tdsqlmysql`, `postgresql.
 * @method array getSrcAccessType() Obtain Source instance access type. Valid values: `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `cdb` (Database); `cvm` (self-build on CVM).
 * @method void setSrcAccessType(array $SrcAccessType) Set Source instance access type. Valid values: `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `cdb` (Database); `cvm` (self-build on CVM).
 * @method string getDstInstanceId() Obtain Target instance ID in the format of `cdb-c1nl9rpv`
 * @method void setDstInstanceId(string $DstInstanceId) Set Target instance ID in the format of `cdb-c1nl9rpv`
 * @method string getDstRegion() Obtain Target instance region, such as `ap-guangzhou`.
 * @method void setDstRegion(string $DstRegion) Set Target instance region, such as `ap-guangzhou`.
 * @method array getDstDatabaseType() Obtain Target database type, such as `sqlserver`, `mysql`, `mongodb`, `redis`, `tendis`, `keewidb`, `clickhouse`, `cynosdbmysql`, `percona`, `tdsqlpercona`, `mariadb`, `tdsqlmysql`, `postgresql.
 * @method void setDstDatabaseType(array $DstDatabaseType) Set Target database type, such as `sqlserver`, `mysql`, `mongodb`, `redis`, `tendis`, `keewidb`, `clickhouse`, `cynosdbmysql`, `percona`, `tdsqlpercona`, `mariadb`, `tdsqlmysql`, `postgresql.
 * @method array getDstAccessType() Obtain Target instance access type. Valid values: `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `cdb` (Database); `cvm` (self-build on CVM).
 * @method void setDstAccessType(array $DstAccessType) Set Target instance access type. Valid values: `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `cdb` (Database); `cvm` (self-build on CVM).
 * @method string getRunMode() Obtain Task running mode. Valid values: `immediate`, `timed`.
 * @method void setRunMode(string $RunMode) Set Task running mode. Valid values: `immediate`, `timed`.
 * @method string getOrderSeq() Obtain Sorting order. Valid values: `asc`, `desc`. Default value: `desc` by creation time.
 * @method void setOrderSeq(string $OrderSeq) Set Sorting order. Valid values: `asc`, `desc`. Default value: `desc` by creation time.
 * @method integer getLimit() Obtain Number of instances to be returned. Value range: [1,100]. Default value: `20`.
 * @method void setLimit(integer $Limit) Set Number of instances to be returned. Value range: [1,100]. Default value: `20`.
 * @method integer getOffset() Obtain Offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`.
 * @method array getTagFilters() Obtain Tag filter
 * @method void setTagFilters(array $TagFilters) Set Tag filter
 */
class DescribeMigrationJobsRequest extends AbstractModel
{
    /**
     * @var string Data migration task ID such as `dts-amm1jw5q`
     */
    public $JobId;

    /**
     * @var string Data migration task name
     */
    public $JobName;

    /**
     * @var array Data migration task status. Valid values: `created`, `checking`, `checkPass`, `checkNotPass`, `readyRun`, `running`, `readyComplete`, `success`, `failed`, `stopping`, `completing`.
     */
    public $Status;

    /**
     * @var string Source instance ID in the format of `cdb-c1nl9rpv`
     */
    public $SrcInstanceId;

    /**
     * @var string Source instance region, such as `ap-guangzhou`.
     */
    public $SrcRegion;

    /**
     * @var array Source database type, such as `sqlserver`, `mysql`, `mongodb`, `redis`, `tendis`, `keewidb`, `clickhouse`, `cynosdbmysql`, `percona`, `tdsqlpercona`, `mariadb`, `tdsqlmysql`, `postgresql.
     */
    public $SrcDatabaseType;

    /**
     * @var array Source instance access type. Valid values: `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `cdb` (Database); `cvm` (self-build on CVM).
     */
    public $SrcAccessType;

    /**
     * @var string Target instance ID in the format of `cdb-c1nl9rpv`
     */
    public $DstInstanceId;

    /**
     * @var string Target instance region, such as `ap-guangzhou`.
     */
    public $DstRegion;

    /**
     * @var array Target database type, such as `sqlserver`, `mysql`, `mongodb`, `redis`, `tendis`, `keewidb`, `clickhouse`, `cynosdbmysql`, `percona`, `tdsqlpercona`, `mariadb`, `tdsqlmysql`, `postgresql.
     */
    public $DstDatabaseType;

    /**
     * @var array Target instance access type. Valid values: `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `cdb` (Database); `cvm` (self-build on CVM).
     */
    public $DstAccessType;

    /**
     * @var string Task running mode. Valid values: `immediate`, `timed`.
     */
    public $RunMode;

    /**
     * @var string Sorting order. Valid values: `asc`, `desc`. Default value: `desc` by creation time.
     */
    public $OrderSeq;

    /**
     * @var integer Number of instances to be returned. Value range: [1,100]. Default value: `20`.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var array Tag filter
     */
    public $TagFilters;

    /**
     * @param string $JobId Data migration task ID such as `dts-amm1jw5q`
     * @param string $JobName Data migration task name
     * @param array $Status Data migration task status. Valid values: `created`, `checking`, `checkPass`, `checkNotPass`, `readyRun`, `running`, `readyComplete`, `success`, `failed`, `stopping`, `completing`.
     * @param string $SrcInstanceId Source instance ID in the format of `cdb-c1nl9rpv`
     * @param string $SrcRegion Source instance region, such as `ap-guangzhou`.
     * @param array $SrcDatabaseType Source database type, such as `sqlserver`, `mysql`, `mongodb`, `redis`, `tendis`, `keewidb`, `clickhouse`, `cynosdbmysql`, `percona`, `tdsqlpercona`, `mariadb`, `tdsqlmysql`, `postgresql.
     * @param array $SrcAccessType Source instance access type. Valid values: `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `cdb` (Database); `cvm` (self-build on CVM).
     * @param string $DstInstanceId Target instance ID in the format of `cdb-c1nl9rpv`
     * @param string $DstRegion Target instance region, such as `ap-guangzhou`.
     * @param array $DstDatabaseType Target database type, such as `sqlserver`, `mysql`, `mongodb`, `redis`, `tendis`, `keewidb`, `clickhouse`, `cynosdbmysql`, `percona`, `tdsqlpercona`, `mariadb`, `tdsqlmysql`, `postgresql.
     * @param array $DstAccessType Target instance access type. Valid values: `extranet` (public network); `vpncloud` (VPN access); `dcg` (Direct Connect); `ccn` (CCN); `cdb` (Database); `cvm` (self-build on CVM).
     * @param string $RunMode Task running mode. Valid values: `immediate`, `timed`.
     * @param string $OrderSeq Sorting order. Valid values: `asc`, `desc`. Default value: `desc` by creation time.
     * @param integer $Limit Number of instances to be returned. Value range: [1,100]. Default value: `20`.
     * @param integer $Offset Offset. Default value: `0`.
     * @param array $TagFilters Tag filter
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SrcInstanceId",$param) and $param["SrcInstanceId"] !== null) {
            $this->SrcInstanceId = $param["SrcInstanceId"];
        }

        if (array_key_exists("SrcRegion",$param) and $param["SrcRegion"] !== null) {
            $this->SrcRegion = $param["SrcRegion"];
        }

        if (array_key_exists("SrcDatabaseType",$param) and $param["SrcDatabaseType"] !== null) {
            $this->SrcDatabaseType = $param["SrcDatabaseType"];
        }

        if (array_key_exists("SrcAccessType",$param) and $param["SrcAccessType"] !== null) {
            $this->SrcAccessType = $param["SrcAccessType"];
        }

        if (array_key_exists("DstInstanceId",$param) and $param["DstInstanceId"] !== null) {
            $this->DstInstanceId = $param["DstInstanceId"];
        }

        if (array_key_exists("DstRegion",$param) and $param["DstRegion"] !== null) {
            $this->DstRegion = $param["DstRegion"];
        }

        if (array_key_exists("DstDatabaseType",$param) and $param["DstDatabaseType"] !== null) {
            $this->DstDatabaseType = $param["DstDatabaseType"];
        }

        if (array_key_exists("DstAccessType",$param) and $param["DstAccessType"] !== null) {
            $this->DstAccessType = $param["DstAccessType"];
        }

        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("OrderSeq",$param) and $param["OrderSeq"] !== null) {
            $this->OrderSeq = $param["OrderSeq"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }
    }
}
