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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Permission objects
 *
 * @method string getDatabase() Obtain The name of the target database. `*` represents all databases in the current catalog. To grant admin permissions, it must be `*`; to grant data connection permissions, it must be null; to grant other permissions, it can be any database.
 * @method void setDatabase(string $Database) Set The name of the target database. `*` represents all databases in the current catalog. To grant admin permissions, it must be `*`; to grant data connection permissions, it must be null; to grant other permissions, it can be any database.
 * @method string getCatalog() Obtain The name of the target data source. To grant admin permission, it must be `*` (all resources at this level); to grant data source and database permissions, it must be `COSDataCatalog` or `*`; to grant table permissions, it can be a custom data source; if it is left empty, `DataLakeCatalog` is used. Note: To grant permissions on a custom data source, the permissions that can be managed in the Data Lake Compute console are subsets of the account permissions granted when you connect the data source to the console.
 * @method void setCatalog(string $Catalog) Set The name of the target data source. To grant admin permission, it must be `*` (all resources at this level); to grant data source and database permissions, it must be `COSDataCatalog` or `*`; to grant table permissions, it can be a custom data source; if it is left empty, `DataLakeCatalog` is used. Note: To grant permissions on a custom data source, the permissions that can be managed in the Data Lake Compute console are subsets of the account permissions granted when you connect the data source to the console.
 * @method string getTable() Obtain The name of the target table. `*` represents all tables in the current database. To grant admin permissions, it must be `*`; to grant data connection and database permissions, it must be null; to grant other permissions, it can be any table.
 * @method void setTable(string $Table) Set The name of the target table. `*` represents all tables in the current database. To grant admin permissions, it must be `*`; to grant data connection and database permissions, it must be null; to grant other permissions, it can be any table.
 * @method string getOperation() Obtain The target permissions, which vary by permission level. Admin: `ALL` (default); data connection: `CREATE`; database: `ALL`, `CREATE`, `ALTER`, and `DROP`; table: `ALL`, `SELECT`, `INSERT`, `ALTER`, `DELETE`, `DROP`, and `UPDATE`. Note: For table permissions, if a data source other than `COSDataCatalog` is specified, only the `SELECT` permission can be granted here.
 * @method void setOperation(string $Operation) Set The target permissions, which vary by permission level. Admin: `ALL` (default); data connection: `CREATE`; database: `ALL`, `CREATE`, `ALTER`, and `DROP`; table: `ALL`, `SELECT`, `INSERT`, `ALTER`, `DELETE`, `DROP`, and `UPDATE`. Note: For table permissions, if a data source other than `COSDataCatalog` is specified, only the `SELECT` permission can be granted here.
 * @method string getPolicyType() Obtain The permission type. Valid values: `ADMIN`, `DATASOURCE`, `DATABASE`, `TABLE`, `VIEW`, `FUNCTION`, `COLUMN`, and `ENGINE`. Note: If it is left empty, `ADMIN` is used.
 * @method void setPolicyType(string $PolicyType) Set The permission type. Valid values: `ADMIN`, `DATASOURCE`, `DATABASE`, `TABLE`, `VIEW`, `FUNCTION`, `COLUMN`, and `ENGINE`. Note: If it is left empty, `ADMIN` is used.
 * @method string getFunction() Obtain The name of the target function. `*` represents all functions in the current catalog. To grant admin permissions, it must be `*`; to grant data connection permissions, it must be null; to grant other permissions, it can be any function.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFunction(string $Function) Set The name of the target function. `*` represents all functions in the current catalog. To grant admin permissions, it must be `*`; to grant data connection permissions, it must be null; to grant other permissions, it can be any function.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getView() Obtain The name of the target view. `*` represents all views in the current database. To grant admin permissions, it must be `*`; to grant data connection and database permissions, it must be null; to grant other permissions, it can be any view.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setView(string $View) Set The name of the target view. `*` represents all views in the current database. To grant admin permissions, it must be `*`; to grant data connection and database permissions, it must be null; to grant other permissions, it can be any view.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getColumn() Obtain The name of the target column. `*` represents all columns. To grant admin permissions, it must be `*`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setColumn(string $Column) Set The name of the target column. `*` represents all columns. To grant admin permissions, it must be `*`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDataEngine() Obtain The name of the target data engine. `*` represents all engines. To grant admin permissions, it must be `*`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataEngine(string $DataEngine) Set The name of the target data engine. `*` represents all engines. To grant admin permissions, it must be `*`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getReAuth() Obtain Whether the grantee is allowed to further grant the permissions. Valid values: `false` (default) and `true` (the grantee can grant permissions gained here to other sub-users).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReAuth(boolean $ReAuth) Set Whether the grantee is allowed to further grant the permissions. Valid values: `false` (default) and `true` (the grantee can grant permissions gained here to other sub-users).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSource() Obtain The permission source, which is not required when input parameters are passed in. Valid values: `USER` (from the user) and `WORKGROUP` (from one or more associated work groups).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSource(string $Source) Set The permission source, which is not required when input parameters are passed in. Valid values: `USER` (from the user) and `WORKGROUP` (from one or more associated work groups).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMode() Obtain The grant mode, which is not required as an input parameter. Valid values: `COMMON` and `SENIOR`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMode(string $Mode) Set The grant mode, which is not required as an input parameter. Valid values: `COMMON` and `SENIOR`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOperator() Obtain The operator, which is not required as an input parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOperator(string $Operator) Set The operator, which is not required as an input parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain The permission policy creation time, which is not required as an input parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set The permission policy creation time, which is not required as an input parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSourceId() Obtain The ID of the work group, which applies only when the value of the `Source` field is `WORKGROUP`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourceId(integer $SourceId) Set The ID of the work group, which applies only when the value of the `Source` field is `WORKGROUP`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSourceName() Obtain The name of the work group, which applies only when the value of the `Source` field is `WORKGROUP`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourceName(string $SourceName) Set The name of the work group, which applies only when the value of the `Source` field is `WORKGROUP`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getId() Obtain The policy ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(integer $Id) Set The policy ID.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Policy extends AbstractModel
{
    /**
     * @var string The name of the target database. `*` represents all databases in the current catalog. To grant admin permissions, it must be `*`; to grant data connection permissions, it must be null; to grant other permissions, it can be any database.
     */
    public $Database;

    /**
     * @var string The name of the target data source. To grant admin permission, it must be `*` (all resources at this level); to grant data source and database permissions, it must be `COSDataCatalog` or `*`; to grant table permissions, it can be a custom data source; if it is left empty, `DataLakeCatalog` is used. Note: To grant permissions on a custom data source, the permissions that can be managed in the Data Lake Compute console are subsets of the account permissions granted when you connect the data source to the console.
     */
    public $Catalog;

    /**
     * @var string The name of the target table. `*` represents all tables in the current database. To grant admin permissions, it must be `*`; to grant data connection and database permissions, it must be null; to grant other permissions, it can be any table.
     */
    public $Table;

    /**
     * @var string The target permissions, which vary by permission level. Admin: `ALL` (default); data connection: `CREATE`; database: `ALL`, `CREATE`, `ALTER`, and `DROP`; table: `ALL`, `SELECT`, `INSERT`, `ALTER`, `DELETE`, `DROP`, and `UPDATE`. Note: For table permissions, if a data source other than `COSDataCatalog` is specified, only the `SELECT` permission can be granted here.
     */
    public $Operation;

    /**
     * @var string The permission type. Valid values: `ADMIN`, `DATASOURCE`, `DATABASE`, `TABLE`, `VIEW`, `FUNCTION`, `COLUMN`, and `ENGINE`. Note: If it is left empty, `ADMIN` is used.
     */
    public $PolicyType;

    /**
     * @var string The name of the target function. `*` represents all functions in the current catalog. To grant admin permissions, it must be `*`; to grant data connection permissions, it must be null; to grant other permissions, it can be any function.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Function;

    /**
     * @var string The name of the target view. `*` represents all views in the current database. To grant admin permissions, it must be `*`; to grant data connection and database permissions, it must be null; to grant other permissions, it can be any view.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $View;

    /**
     * @var string The name of the target column. `*` represents all columns. To grant admin permissions, it must be `*`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Column;

    /**
     * @var string The name of the target data engine. `*` represents all engines. To grant admin permissions, it must be `*`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataEngine;

    /**
     * @var boolean Whether the grantee is allowed to further grant the permissions. Valid values: `false` (default) and `true` (the grantee can grant permissions gained here to other sub-users).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReAuth;

    /**
     * @var string The permission source, which is not required when input parameters are passed in. Valid values: `USER` (from the user) and `WORKGROUP` (from one or more associated work groups).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Source;

    /**
     * @var string The grant mode, which is not required as an input parameter. Valid values: `COMMON` and `SENIOR`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Mode;

    /**
     * @var string The operator, which is not required as an input parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Operator;

    /**
     * @var string The permission policy creation time, which is not required as an input parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer The ID of the work group, which applies only when the value of the `Source` field is `WORKGROUP`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourceId;

    /**
     * @var string The name of the work group, which applies only when the value of the `Source` field is `WORKGROUP`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourceName;

    /**
     * @var integer The policy ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @param string $Database The name of the target database. `*` represents all databases in the current catalog. To grant admin permissions, it must be `*`; to grant data connection permissions, it must be null; to grant other permissions, it can be any database.
     * @param string $Catalog The name of the target data source. To grant admin permission, it must be `*` (all resources at this level); to grant data source and database permissions, it must be `COSDataCatalog` or `*`; to grant table permissions, it can be a custom data source; if it is left empty, `DataLakeCatalog` is used. Note: To grant permissions on a custom data source, the permissions that can be managed in the Data Lake Compute console are subsets of the account permissions granted when you connect the data source to the console.
     * @param string $Table The name of the target table. `*` represents all tables in the current database. To grant admin permissions, it must be `*`; to grant data connection and database permissions, it must be null; to grant other permissions, it can be any table.
     * @param string $Operation The target permissions, which vary by permission level. Admin: `ALL` (default); data connection: `CREATE`; database: `ALL`, `CREATE`, `ALTER`, and `DROP`; table: `ALL`, `SELECT`, `INSERT`, `ALTER`, `DELETE`, `DROP`, and `UPDATE`. Note: For table permissions, if a data source other than `COSDataCatalog` is specified, only the `SELECT` permission can be granted here.
     * @param string $PolicyType The permission type. Valid values: `ADMIN`, `DATASOURCE`, `DATABASE`, `TABLE`, `VIEW`, `FUNCTION`, `COLUMN`, and `ENGINE`. Note: If it is left empty, `ADMIN` is used.
     * @param string $Function The name of the target function. `*` represents all functions in the current catalog. To grant admin permissions, it must be `*`; to grant data connection permissions, it must be null; to grant other permissions, it can be any function.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $View The name of the target view. `*` represents all views in the current database. To grant admin permissions, it must be `*`; to grant data connection and database permissions, it must be null; to grant other permissions, it can be any view.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Column The name of the target column. `*` represents all columns. To grant admin permissions, it must be `*`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DataEngine The name of the target data engine. `*` represents all engines. To grant admin permissions, it must be `*`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $ReAuth Whether the grantee is allowed to further grant the permissions. Valid values: `false` (default) and `true` (the grantee can grant permissions gained here to other sub-users).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Source The permission source, which is not required when input parameters are passed in. Valid values: `USER` (from the user) and `WORKGROUP` (from one or more associated work groups).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Mode The grant mode, which is not required as an input parameter. Valid values: `COMMON` and `SENIOR`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Operator The operator, which is not required as an input parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime The permission policy creation time, which is not required as an input parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SourceId The ID of the work group, which applies only when the value of the `Source` field is `WORKGROUP`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SourceName The name of the work group, which applies only when the value of the `Source` field is `WORKGROUP`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Id The policy ID.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("Function",$param) and $param["Function"] !== null) {
            $this->Function = $param["Function"];
        }

        if (array_key_exists("View",$param) and $param["View"] !== null) {
            $this->View = $param["View"];
        }

        if (array_key_exists("Column",$param) and $param["Column"] !== null) {
            $this->Column = $param["Column"];
        }

        if (array_key_exists("DataEngine",$param) and $param["DataEngine"] !== null) {
            $this->DataEngine = $param["DataEngine"];
        }

        if (array_key_exists("ReAuth",$param) and $param["ReAuth"] !== null) {
            $this->ReAuth = $param["ReAuth"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
