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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryTableData request structure.
 *
 * @method string getDatabase() Obtain Database name
 * @method void setDatabase(string $Database) Set Database name
 * @method string getTable() Obtain Table name
 * @method void setTable(string $Table) Set Table name
 * @method string getInstanceId() Obtain InstanceId
 * @method void setInstanceId(string $InstanceId) Set InstanceId
 * @method array getSelectedFields() Obtain Array of fields to be queried
 * @method void setSelectedFields(array $SelectedFields) Set Array of fields to be queried
 * @method integer getPageNum() Obtain Page number, which is 1 by default.
 * @method void setPageNum(integer $PageNum) Set Page number, which is 1 by default.
 * @method integer getPageSize() Obtain Number of records per page, which is 10 by default.
 * @method void setPageSize(integer $PageSize) Set Number of records per page, which is 10 by default.
 * @method string getUserName() Obtain Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method void setUserName(string $UserName) Set Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method string getPassWord() Obtain Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method void setPassWord(string $PassWord) Set Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method string getCatalogName() Obtain Catalog name, defaults to 'internal' if not specified.

 * @method void setCatalogName(string $CatalogName) Set Catalog name, defaults to 'internal' if not specified.
 */
class QueryTableDataRequest extends AbstractModel
{
    /**
     * @var string Database name
     */
    public $Database;

    /**
     * @var string Table name
     */
    public $Table;

    /**
     * @var string InstanceId
     */
    public $InstanceId;

    /**
     * @var array Array of fields to be queried
     */
    public $SelectedFields;

    /**
     * @var integer Page number, which is 1 by default.
     */
    public $PageNum;

    /**
     * @var integer Number of records per page, which is 10 by default.
     */
    public $PageSize;

    /**
     * @var string Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     */
    public $UserName;

    /**
     * @var string Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     */
    public $PassWord;

    /**
     * @var string Catalog name, defaults to 'internal' if not specified.

     */
    public $CatalogName;

    /**
     * @param string $Database Database name
     * @param string $Table Table name
     * @param string $InstanceId InstanceId
     * @param array $SelectedFields Array of fields to be queried
     * @param integer $PageNum Page number, which is 1 by default.
     * @param integer $PageSize Number of records per page, which is 10 by default.
     * @param string $UserName Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     * @param string $PassWord Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     * @param string $CatalogName Catalog name, defaults to 'internal' if not specified.
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
        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SelectedFields",$param) and $param["SelectedFields"] !== null) {
            $this->SelectedFields = $param["SelectedFields"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PassWord",$param) and $param["PassWord"] !== null) {
            $this->PassWord = $param["PassWord"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }
    }
}
