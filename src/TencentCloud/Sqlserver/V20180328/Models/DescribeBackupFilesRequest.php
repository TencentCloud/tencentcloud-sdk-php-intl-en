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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupFiles request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of mssql-njj2mtpl
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of mssql-njj2mtpl
 * @method string getGroupId() Obtain Group ID of unarchived backup files, which can be obtained by the `DescribeBackups` API (Querying archived backup record is not supported).
 * @method void setGroupId(string $GroupId) Set Group ID of unarchived backup files, which can be obtained by the `DescribeBackups` API (Querying archived backup record is not supported).
 * @method integer getLimit() Obtain Number of entries to be returned per page. Value range: 1-100. Default value: `20`
 * @method void setLimit(integer $Limit) Set Number of entries to be returned per page. Value range: 1-100. Default value: `20`
 * @method integer getOffset() Obtain Page number. Default value: `0`
 * @method void setOffset(integer $Offset) Set Page number. Default value: `0`
 * @method string getDatabaseName() Obtain Filter backups by database name. If the parameter is left empty, this filter criterion will not take effect.
 * @method void setDatabaseName(string $DatabaseName) Set Filter backups by database name. If the parameter is left empty, this filter criterion will not take effect.
 * @method string getOrderBy() Obtain List items sorting by backup size. Valid values: `desc`(descending order), `asc` (ascending order). Default value: `desc`.
 * @method void setOrderBy(string $OrderBy) Set List items sorting by backup size. Valid values: `desc`(descending order), `asc` (ascending order). Default value: `desc`.
 */
class DescribeBackupFilesRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of mssql-njj2mtpl
     */
    public $InstanceId;

    /**
     * @var string Group ID of unarchived backup files, which can be obtained by the `DescribeBackups` API (Querying archived backup record is not supported).
     */
    public $GroupId;

    /**
     * @var integer Number of entries to be returned per page. Value range: 1-100. Default value: `20`
     */
    public $Limit;

    /**
     * @var integer Page number. Default value: `0`
     */
    public $Offset;

    /**
     * @var string Filter backups by database name. If the parameter is left empty, this filter criterion will not take effect.
     */
    public $DatabaseName;

    /**
     * @var string List items sorting by backup size. Valid values: `desc`(descending order), `asc` (ascending order). Default value: `desc`.
     */
    public $OrderBy;

    /**
     * @param string $InstanceId Instance ID in the format of mssql-njj2mtpl
     * @param string $GroupId Group ID of unarchived backup files, which can be obtained by the `DescribeBackups` API (Querying archived backup record is not supported).
     * @param integer $Limit Number of entries to be returned per page. Value range: 1-100. Default value: `20`
     * @param integer $Offset Page number. Default value: `0`
     * @param string $DatabaseName Filter backups by database name. If the parameter is left empty, this filter criterion will not take effect.
     * @param string $OrderBy List items sorting by backup size. Valid values: `desc`(descending order), `asc` (ascending order). Default value: `desc`.
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }
    }
}
