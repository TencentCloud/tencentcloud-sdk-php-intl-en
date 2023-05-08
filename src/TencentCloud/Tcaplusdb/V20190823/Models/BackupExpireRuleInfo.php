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
 * The details of backup retention policy
Policy for cluster: `ClusterId` = cluster ID, TableGroupId·= `-1`, `TableName`= `-1`.
Policy for cluster + table group: `ClusterId` = cluster ID, `TableGroupId` = table group ID, `TableName` = `-1`.
Policy for cluster + table group + table: ClusterId` = cluster ID, `TableGroupId` = table group ID, `TableName` = table name.

For `FileTag`, valid values: `0` (txh engine file), `1` (ulog file). When `FileTag` is set to `1`, `TableGroupId` = `-1` and `TableName` = `-1` remain unchanged.
`ExpireDay` is an integer number falling in the range of 1 (inclusive) to 999 (exclusive).
For `OperType, valid values: `0` (Add), `1` (Delete), `2` (Modify). The values `0` and `2` can be mixed, and the backend implementation is compatible.
 *
 * @method string getTableGroupId() Obtain The ID of the table group where the table resides
 * @method void setTableGroupId(string $TableGroupId) Set The ID of the table group where the table resides
 * @method string getTableName() Obtain Table name
 * @method void setTableName(string $TableName) Set Table name
 * @method integer getFileTag() Obtain file tag, which is described above.
 * @method void setFileTag(integer $FileTag) Set file tag, which is described above.
 * @method integer getExpireDay() Obtain Retention days, which is described above.
 * @method void setExpireDay(integer $ExpireDay) Set Retention days, which is described above.
 * @method integer getOperType() Obtain Operation type, which is described above.
 * @method void setOperType(integer $OperType) Set Operation type, which is described above.
 */
class BackupExpireRuleInfo extends AbstractModel
{
    /**
     * @var string The ID of the table group where the table resides
     */
    public $TableGroupId;

    /**
     * @var string Table name
     */
    public $TableName;

    /**
     * @var integer file tag, which is described above.
     */
    public $FileTag;

    /**
     * @var integer Retention days, which is described above.
     */
    public $ExpireDay;

    /**
     * @var integer Operation type, which is described above.
     */
    public $OperType;

    /**
     * @param string $TableGroupId The ID of the table group where the table resides
     * @param string $TableName Table name
     * @param integer $FileTag file tag, which is described above.
     * @param integer $ExpireDay Retention days, which is described above.
     * @param integer $OperType Operation type, which is described above.
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
        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("FileTag",$param) and $param["FileTag"] !== null) {
            $this->FileTag = $param["FileTag"];
        }

        if (array_key_exists("ExpireDay",$param) and $param["ExpireDay"] !== null) {
            $this->ExpireDay = $param["ExpireDay"];
        }

        if (array_key_exists("OperType",$param) and $param["OperType"] !== null) {
            $this->OperType = $param["OperType"];
        }
    }
}
