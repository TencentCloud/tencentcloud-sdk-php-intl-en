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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Permission objects
 *
 * @method string getDatabase() Obtain The database name requiring authorization. use * to represent all databases under the current Catalog. for administrator level authorization type, only * is allowed. for data connection level authorization type, leave it blank. for other types, any specified database is allowed.
 * @method void setDatabase(string $Database) Set The database name requiring authorization. use * to represent all databases under the current Catalog. for administrator level authorization type, only * is allowed. for data connection level authorization type, leave it blank. for other types, any specified database is allowed.
 * @method string getCatalog() Obtain Specifies the name of the data source requiring authorization. at administrator level, only * is supported (representing all resources at this level). for database-level or data source-level authentication, only COSDataCatalog or * is supported. for table-level authentication, user-defined data sources can be filled. defaults to DataLakeCatalog if left blank. note: if authenticating a user-defined data source, the permissions DLC can manage are a subset of the account provided when the user accesses the data source.
 * @method void setCatalog(string $Catalog) Set Specifies the name of the data source requiring authorization. at administrator level, only * is supported (representing all resources at this level). for database-level or data source-level authentication, only COSDataCatalog or * is supported. for table-level authentication, user-defined data sources can be filled. defaults to DataLakeCatalog if left blank. note: if authenticating a user-defined data source, the permissions DLC can manage are a subset of the account provided when the user accesses the data source.
 * @method string getTable() Obtain Specifies the table name requiring authorization. use * to represent all tables in the current Database. for administrator-level authorization type, only * is allowed. for data connection level or Database-level authorization type, leave it blank. for other types, any specific data table can be specified.
 * @method void setTable(string $Table) Set Specifies the table name requiring authorization. use * to represent all tables in the current Database. for administrator-level authorization type, only * is allowed. for data connection level or Database-level authorization type, leave it blank. for other types, any specific data table can be specified.
 * @method string getOperation() Obtain The target permissions, which vary by permission level. Admin: `ALL` (default); data connection: `CREATE`; database: `ALL`, `CREATE`, `ALTER`, and `DROP`; table: `ALL`, `SELECT`, `INSERT`, `ALTER`, `DELETE`, `DROP`, and `UPDATE`. Note: For table permissions, if a data source other than `COSDataCatalog` is specified, only the `SELECT` permission can be granted here.
 * @method void setOperation(string $Operation) Set The target permissions, which vary by permission level. Admin: `ALL` (default); data connection: `CREATE`; database: `ALL`, `CREATE`, `ALTER`, and `DROP`; table: `ALL`, `SELECT`, `INSERT`, `ALTER`, `DELETE`, `DROP`, and `UPDATE`. Note: For table permissions, if a data source other than `COSDataCatalog` is specified, only the `SELECT` permission can be granted here.
 * @method string getPolicyType() Obtain The permission type. Valid values: `ADMIN`, `DATASOURCE`, `DATABASE`, `TABLE`, `VIEW`, `FUNCTION`, `COLUMN`, and `ENGINE`. Note: If it is left empty, `ADMIN` is used.
 * @method void setPolicyType(string $PolicyType) Set The permission type. Valid values: `ADMIN`, `DATASOURCE`, `DATABASE`, `TABLE`, `VIEW`, `FUNCTION`, `COLUMN`, and `ENGINE`. Note: If it is left empty, `ADMIN` is used.
 * @method string getFunction() Obtain Name of the function requiring authorization. use * to represent all functions in the current Catalog. for administrator-level authorization type, only * is allowed. for data connection-level authorization type, leave it blank. for other types, any function can be specified.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFunction(string $Function) Set Name of the function requiring authorization. use * to represent all functions in the current Catalog. for administrator-level authorization type, only * is allowed. for data connection-level authorization type, leave it blank. for other types, any function can be specified.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getView() Obtain Authorization is required for the view. fill in * to represent all views under the current Database. when the authorization type is administrator level, only * is allowed. when the authorization type is data connection level or Database level, only blank is allowed. for other types, any view can be specified.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setView(string $View) Set Authorization is required for the view. fill in * to represent all views under the current Database. when the authorization type is administrator level, only * is allowed. when the authorization type is data connection level or Database level, only blank is allowed. for other types, any view can be specified.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getColumn() Obtain Columns requiring authorization. use * to represent all current columns. when the authorization type is administrator level, only * is allowed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setColumn(string $Column) Set Columns requiring authorization. use * to represent all current columns. when the authorization type is administrator level, only * is allowed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDataEngine() Obtain The data engine requiring authorization. use * to represent all current engines. when the authorization type is administrator level, only * is allowed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataEngine(string $DataEngine) Set The data engine requiring authorization. use * to represent all current engines. when the authorization type is administrator level, only * is allowed.
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
 * @method string getEngineGeneration() Obtain Specifies the engine type.

 * @method void setEngineGeneration(string $EngineGeneration) Set Specifies the engine type.
 */
class Policy extends AbstractModel
{
    /**
     * @var string The database name requiring authorization. use * to represent all databases under the current Catalog. for administrator level authorization type, only * is allowed. for data connection level authorization type, leave it blank. for other types, any specified database is allowed.
     */
    public $Database;

    /**
     * @var string Specifies the name of the data source requiring authorization. at administrator level, only * is supported (representing all resources at this level). for database-level or data source-level authentication, only COSDataCatalog or * is supported. for table-level authentication, user-defined data sources can be filled. defaults to DataLakeCatalog if left blank. note: if authenticating a user-defined data source, the permissions DLC can manage are a subset of the account provided when the user accesses the data source.
     */
    public $Catalog;

    /**
     * @var string Specifies the table name requiring authorization. use * to represent all tables in the current Database. for administrator-level authorization type, only * is allowed. for data connection level or Database-level authorization type, leave it blank. for other types, any specific data table can be specified.
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
     * @var string Name of the function requiring authorization. use * to represent all functions in the current Catalog. for administrator-level authorization type, only * is allowed. for data connection-level authorization type, leave it blank. for other types, any function can be specified.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Function;

    /**
     * @var string Authorization is required for the view. fill in * to represent all views under the current Database. when the authorization type is administrator level, only * is allowed. when the authorization type is data connection level or Database level, only blank is allowed. for other types, any view can be specified.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $View;

    /**
     * @var string Columns requiring authorization. use * to represent all current columns. when the authorization type is administrator level, only * is allowed.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Column;

    /**
     * @var string The data engine requiring authorization. use * to represent all current engines. when the authorization type is administrator level, only * is allowed.
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
     * @var string Specifies the engine type.

     */
    public $EngineGeneration;

    /**
     * @param string $Database The database name requiring authorization. use * to represent all databases under the current Catalog. for administrator level authorization type, only * is allowed. for data connection level authorization type, leave it blank. for other types, any specified database is allowed.
     * @param string $Catalog Specifies the name of the data source requiring authorization. at administrator level, only * is supported (representing all resources at this level). for database-level or data source-level authentication, only COSDataCatalog or * is supported. for table-level authentication, user-defined data sources can be filled. defaults to DataLakeCatalog if left blank. note: if authenticating a user-defined data source, the permissions DLC can manage are a subset of the account provided when the user accesses the data source.
     * @param string $Table Specifies the table name requiring authorization. use * to represent all tables in the current Database. for administrator-level authorization type, only * is allowed. for data connection level or Database-level authorization type, leave it blank. for other types, any specific data table can be specified.
     * @param string $Operation The target permissions, which vary by permission level. Admin: `ALL` (default); data connection: `CREATE`; database: `ALL`, `CREATE`, `ALTER`, and `DROP`; table: `ALL`, `SELECT`, `INSERT`, `ALTER`, `DELETE`, `DROP`, and `UPDATE`. Note: For table permissions, if a data source other than `COSDataCatalog` is specified, only the `SELECT` permission can be granted here.
     * @param string $PolicyType The permission type. Valid values: `ADMIN`, `DATASOURCE`, `DATABASE`, `TABLE`, `VIEW`, `FUNCTION`, `COLUMN`, and `ENGINE`. Note: If it is left empty, `ADMIN` is used.
     * @param string $Function Name of the function requiring authorization. use * to represent all functions in the current Catalog. for administrator-level authorization type, only * is allowed. for data connection-level authorization type, leave it blank. for other types, any function can be specified.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $View Authorization is required for the view. fill in * to represent all views under the current Database. when the authorization type is administrator level, only * is allowed. when the authorization type is data connection level or Database level, only blank is allowed. for other types, any view can be specified.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Column Columns requiring authorization. use * to represent all current columns. when the authorization type is administrator level, only * is allowed.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DataEngine The data engine requiring authorization. use * to represent all current engines. when the authorization type is administrator level, only * is allowed.
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
     * @param string $EngineGeneration Specifies the engine type.
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

        if (array_key_exists("EngineGeneration",$param) and $param["EngineGeneration"] !== null) {
            $this->EngineGeneration = $param["EngineGeneration"];
        }
    }
}
