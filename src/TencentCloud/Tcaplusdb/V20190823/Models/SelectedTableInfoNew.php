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
 * Information of selected table
 *
 * @method string getTableGroupId() Obtain ID of the table group where a table resides
 * @method void setTableGroupId(string $TableGroupId) Set ID of the table group where a table resides
 * @method string getTableName() Obtain Table name
 * @method void setTableName(string $TableName) Set Table name
 * @method string getTableInstanceId() Obtain Table instance ID
 * @method void setTableInstanceId(string $TableInstanceId) Set Table instance ID
 * @method string getTableIdlType() Obtain Table description language type. Valid values: PROTO, TDR
 * @method void setTableIdlType(string $TableIdlType) Set Table description language type. Valid values: PROTO, TDR
 * @method string getTableType() Obtain Table data structure type. Valid values: GENERIC, LIST
 * @method void setTableType(string $TableType) Set Table data structure type. Valid values: GENERIC, LIST
 * @method integer getListElementNum() Obtain Number of LIST-type table elements
 * @method void setListElementNum(integer $ListElementNum) Set Number of LIST-type table elements
 * @method integer getReservedVolume() Obtain Reserved table capacity in GB
 * @method void setReservedVolume(integer $ReservedVolume) Set Reserved table capacity in GB
 * @method integer getReservedReadQps() Obtain Reserved table read QPS
 * @method void setReservedReadQps(integer $ReservedReadQps) Set Reserved table read QPS
 * @method integer getReservedWriteQps() Obtain Reserved table write QPS
 * @method void setReservedWriteQps(integer $ReservedWriteQps) Set Reserved table write QPS
 * @method string getMemo() Obtain Table remarks
 * @method void setMemo(string $Memo) Set Table remarks
 * @method string getFileName() Obtain Key rollback filename, which is only used for rollback
 * @method void setFileName(string $FileName) Set Key rollback filename, which is only used for rollback
 * @method string getFileExtType() Obtain Key rollback file extension, which is only used for rollback
 * @method void setFileExtType(string $FileExtType) Set Key rollback file extension, which is only used for rollback
 * @method integer getFileSize() Obtain Key rollback file size, which is only used for rollback
 * @method void setFileSize(integer $FileSize) Set Key rollback file size, which is only used for rollback
 * @method string getFileContent() Obtain Key rollback file content, which is only used for rollback
 * @method void setFileContent(string $FileContent) Set Key rollback file content, which is only used for rollback
 */
class SelectedTableInfoNew extends AbstractModel
{
    /**
     * @var string ID of the table group where a table resides
     */
    public $TableGroupId;

    /**
     * @var string Table name
     */
    public $TableName;

    /**
     * @var string Table instance ID
     */
    public $TableInstanceId;

    /**
     * @var string Table description language type. Valid values: PROTO, TDR
     */
    public $TableIdlType;

    /**
     * @var string Table data structure type. Valid values: GENERIC, LIST
     */
    public $TableType;

    /**
     * @var integer Number of LIST-type table elements
     */
    public $ListElementNum;

    /**
     * @var integer Reserved table capacity in GB
     */
    public $ReservedVolume;

    /**
     * @var integer Reserved table read QPS
     */
    public $ReservedReadQps;

    /**
     * @var integer Reserved table write QPS
     */
    public $ReservedWriteQps;

    /**
     * @var string Table remarks
     */
    public $Memo;

    /**
     * @var string Key rollback filename, which is only used for rollback
     */
    public $FileName;

    /**
     * @var string Key rollback file extension, which is only used for rollback
     */
    public $FileExtType;

    /**
     * @var integer Key rollback file size, which is only used for rollback
     */
    public $FileSize;

    /**
     * @var string Key rollback file content, which is only used for rollback
     */
    public $FileContent;

    /**
     * @param string $TableGroupId ID of the table group where a table resides
     * @param string $TableName Table name
     * @param string $TableInstanceId Table instance ID
     * @param string $TableIdlType Table description language type. Valid values: PROTO, TDR
     * @param string $TableType Table data structure type. Valid values: GENERIC, LIST
     * @param integer $ListElementNum Number of LIST-type table elements
     * @param integer $ReservedVolume Reserved table capacity in GB
     * @param integer $ReservedReadQps Reserved table read QPS
     * @param integer $ReservedWriteQps Reserved table write QPS
     * @param string $Memo Table remarks
     * @param string $FileName Key rollback filename, which is only used for rollback
     * @param string $FileExtType Key rollback file extension, which is only used for rollback
     * @param integer $FileSize Key rollback file size, which is only used for rollback
     * @param string $FileContent Key rollback file content, which is only used for rollback
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

        if (array_key_exists("TableInstanceId",$param) and $param["TableInstanceId"] !== null) {
            $this->TableInstanceId = $param["TableInstanceId"];
        }

        if (array_key_exists("TableIdlType",$param) and $param["TableIdlType"] !== null) {
            $this->TableIdlType = $param["TableIdlType"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }

        if (array_key_exists("ListElementNum",$param) and $param["ListElementNum"] !== null) {
            $this->ListElementNum = $param["ListElementNum"];
        }

        if (array_key_exists("ReservedVolume",$param) and $param["ReservedVolume"] !== null) {
            $this->ReservedVolume = $param["ReservedVolume"];
        }

        if (array_key_exists("ReservedReadQps",$param) and $param["ReservedReadQps"] !== null) {
            $this->ReservedReadQps = $param["ReservedReadQps"];
        }

        if (array_key_exists("ReservedWriteQps",$param) and $param["ReservedWriteQps"] !== null) {
            $this->ReservedWriteQps = $param["ReservedWriteQps"];
        }

        if (array_key_exists("Memo",$param) and $param["Memo"] !== null) {
            $this->Memo = $param["Memo"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileExtType",$param) and $param["FileExtType"] !== null) {
            $this->FileExtType = $param["FileExtType"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }
    }
}
