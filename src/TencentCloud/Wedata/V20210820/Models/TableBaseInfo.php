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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information Required for Creating DLC Table
 *
 * @method string getDatabaseName() Obtain Database nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatabaseName(string $DatabaseName) Set Database nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableName() Obtain Table NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableName(string $TableName) Set Table NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatasourceConnectionName() Obtain Data Table's Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) Set Data Table's Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableComment() Obtain Table Remarks
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableComment(string $TableComment) Set Table Remarks
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getType() Obtain TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableFormat() Obtain Data Format Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableFormat(string $TableFormat) Set Data Format Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUserAlias() Obtain User Nickname
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUserAlias(string $UserAlias) Set User Nickname
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUserSubUin() Obtain Table Creation User ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUserSubUin(string $UserSubUin) Set Table Creation User ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method DlcDataGovernPolicy getGovernPolicy() Obtain Data Governance Configuration ItemsNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setGovernPolicy(DlcDataGovernPolicy $GovernPolicy) Set Data Governance Configuration ItemsNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDbGovernPolicyIsDisable() Obtain Is Database Data Governance disabled, true for disabled, false for enabled
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDbGovernPolicyIsDisable(string $DbGovernPolicyIsDisable) Set Is Database Data Governance disabled, true for disabled, false for enabled
Note: This field may return null, indicating that no valid value can be obtained.
 */
class TableBaseInfo extends AbstractModel
{
    /**
     * @var string Database nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatabaseName;

    /**
     * @var string Table NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableName;

    /**
     * @var string Data Table's Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceConnectionName;

    /**
     * @var string Table Remarks
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableComment;

    /**
     * @var string TypeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var string Data Format Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableFormat;

    /**
     * @var string User Nickname
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UserAlias;

    /**
     * @var string Table Creation User ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UserSubUin;

    /**
     * @var DlcDataGovernPolicy Data Governance Configuration ItemsNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $GovernPolicy;

    /**
     * @var string Is Database Data Governance disabled, true for disabled, false for enabled
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DbGovernPolicyIsDisable;

    /**
     * @param string $DatabaseName Database nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableName Table NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatasourceConnectionName Data Table's Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableComment Table Remarks
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Type TypeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableFormat Data Format Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UserAlias User Nickname
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UserSubUin Table Creation User ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param DlcDataGovernPolicy $GovernPolicy Data Governance Configuration ItemsNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $DbGovernPolicyIsDisable Is Database Data Governance disabled, true for disabled, false for enabled
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }

        if (array_key_exists("TableComment",$param) and $param["TableComment"] !== null) {
            $this->TableComment = $param["TableComment"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TableFormat",$param) and $param["TableFormat"] !== null) {
            $this->TableFormat = $param["TableFormat"];
        }

        if (array_key_exists("UserAlias",$param) and $param["UserAlias"] !== null) {
            $this->UserAlias = $param["UserAlias"];
        }

        if (array_key_exists("UserSubUin",$param) and $param["UserSubUin"] !== null) {
            $this->UserSubUin = $param["UserSubUin"];
        }

        if (array_key_exists("GovernPolicy",$param) and $param["GovernPolicy"] !== null) {
            $this->GovernPolicy = new DlcDataGovernPolicy();
            $this->GovernPolicy->deserialize($param["GovernPolicy"]);
        }

        if (array_key_exists("DbGovernPolicyIsDisable",$param) and $param["DbGovernPolicyIsDisable"] !== null) {
            $this->DbGovernPolicyIsDisable = $param["DbGovernPolicyIsDisable"];
        }
    }
}
