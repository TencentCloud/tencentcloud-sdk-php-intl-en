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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupRecords request structure.
 *
 * @method string getClusterId() Obtain Cluster ID, which is used to query a specified cluster
 * @method void setClusterId(string $ClusterId) Set Cluster ID, which is used to query a specified cluster
 * @method integer getLimit() Obtain Number of results per page
 * @method void setLimit(integer $Limit) Set Number of results per page
 * @method integer getOffset() Obtain Page offset
 * @method void setOffset(integer $Offset) Set Page offset
 * @method string getTableGroupId() Obtain Table group ID used as a filter condition
 * @method void setTableGroupId(string $TableGroupId) Set Table group ID used as a filter condition
 * @method string getTableName() Obtain Table name used as a filter condition
 * @method void setTableName(string $TableName) Set Table name used as a filter condition
 */
class DescribeBackupRecordsRequest extends AbstractModel
{
    /**
     * @var string Cluster ID, which is used to query a specified cluster
     */
    public $ClusterId;

    /**
     * @var integer Number of results per page
     */
    public $Limit;

    /**
     * @var integer Page offset
     */
    public $Offset;

    /**
     * @var string Table group ID used as a filter condition
     */
    public $TableGroupId;

    /**
     * @var string Table name used as a filter condition
     */
    public $TableName;

    /**
     * @param string $ClusterId Cluster ID, which is used to query a specified cluster
     * @param integer $Limit Number of results per page
     * @param integer $Offset Page offset
     * @param string $TableGroupId Table group ID used as a filter condition
     * @param string $TableName Table name used as a filter condition
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }
    }
}
