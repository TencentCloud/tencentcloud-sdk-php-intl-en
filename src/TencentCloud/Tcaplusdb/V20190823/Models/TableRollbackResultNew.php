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
 * Table rollback result information
 *
 * @method string getTableInstanceId() Obtain Table instance ID in the format of `tcaplus-3be64cbb`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTableInstanceId(string $TableInstanceId) Set Table instance ID in the format of `tcaplus-3be64cbb`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTaskId() Obtain Task ID, which is valid for the API that creates one task
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set Task ID, which is valid for the API that creates one task
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTableName() Obtain Table name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTableName(string $TableName) Set Table name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTableType() Obtain Table data structure type, such as `GENERIC` or `LIST`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTableType(string $TableType) Set Table data structure type, such as `GENERIC` or `LIST`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTableIdlType() Obtain Table data interface description language (IDL) type, such as `PROTO` or `TDR`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTableIdlType(string $TableIdlType) Set Table data interface description language (IDL) type, such as `PROTO` or `TDR`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTableGroupId() Obtain ID of the table group where a table resides
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTableGroupId(string $TableGroupId) Set ID of the table group where a table resides
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ErrorInfo getError() Obtain Error message
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setError(ErrorInfo $Error) Set Error message
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTaskIds() Obtain Task ID list, which is valid for the API that creates multiple tasks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTaskIds(array $TaskIds) Set Task ID list, which is valid for the API that creates multiple tasks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFileId() Obtain ID of uploaded key file
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFileId(string $FileId) Set ID of uploaded key file
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSuccKeyNum() Obtain Number of keys successfully verified
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSuccKeyNum(integer $SuccKeyNum) Set Number of keys successfully verified
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalKeyNum() Obtain Total number of keys contained in key file
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTotalKeyNum(integer $TotalKeyNum) Set Total number of keys contained in key file
Note: this field may return null, indicating that no valid values can be obtained.
 */
class TableRollbackResultNew extends AbstractModel
{
    /**
     * @var string Table instance ID in the format of `tcaplus-3be64cbb`
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TableInstanceId;

    /**
     * @var string Task ID, which is valid for the API that creates one task
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string Table name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TableName;

    /**
     * @var string Table data structure type, such as `GENERIC` or `LIST`
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TableType;

    /**
     * @var string Table data interface description language (IDL) type, such as `PROTO` or `TDR`
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TableIdlType;

    /**
     * @var string ID of the table group where a table resides
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TableGroupId;

    /**
     * @var ErrorInfo Error message
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Error;

    /**
     * @var array Task ID list, which is valid for the API that creates multiple tasks
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TaskIds;

    /**
     * @var string ID of uploaded key file
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FileId;

    /**
     * @var integer Number of keys successfully verified
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SuccKeyNum;

    /**
     * @var integer Total number of keys contained in key file
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TotalKeyNum;

    /**
     * @param string $TableInstanceId Table instance ID in the format of `tcaplus-3be64cbb`
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TaskId Task ID, which is valid for the API that creates one task
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TableName Table name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TableType Table data structure type, such as `GENERIC` or `LIST`
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TableIdlType Table data interface description language (IDL) type, such as `PROTO` or `TDR`
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TableGroupId ID of the table group where a table resides
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ErrorInfo $Error Error message
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $TaskIds Task ID list, which is valid for the API that creates multiple tasks
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $FileId ID of uploaded key file
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SuccKeyNum Number of keys successfully verified
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalKeyNum Total number of keys contained in key file
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TableInstanceId",$param) and $param["TableInstanceId"] !== null) {
            $this->TableInstanceId = $param["TableInstanceId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }

        if (array_key_exists("TableIdlType",$param) and $param["TableIdlType"] !== null) {
            $this->TableIdlType = $param["TableIdlType"];
        }

        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = new ErrorInfo();
            $this->Error->deserialize($param["Error"]);
        }

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("SuccKeyNum",$param) and $param["SuccKeyNum"] !== null) {
            $this->SuccKeyNum = $param["SuccKeyNum"];
        }

        if (array_key_exists("TotalKeyNum",$param) and $param["TotalKeyNum"] !== null) {
            $this->TotalKeyNum = $param["TotalKeyNum"];
        }
    }
}
