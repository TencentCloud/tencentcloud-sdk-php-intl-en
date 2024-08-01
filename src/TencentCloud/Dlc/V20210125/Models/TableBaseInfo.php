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
 * Table configurations
 *
 * @method string getDatabaseName() Obtain The database name.
 * @method void setDatabaseName(string $DatabaseName) Set The database name.
 * @method string getTableName() Obtain The table name.
 * @method void setTableName(string $TableName) Set The table name.
 * @method string getDatasourceConnectionName() Obtain The data source name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) Set The data source name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTableComment() Obtain The table remarks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableComment(string $TableComment) Set The table remarks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain The specific type: `table` or `view`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set The specific type: `table` or `view`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTableFormat() Obtain The data format type, such as `hive` and `iceberg`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableFormat(string $TableFormat) Set The data format type, such as `hive` and `iceberg`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserAlias() Obtain The table creator name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserAlias(string $UserAlias) Set The table creator name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserSubUin() Obtain The table creator ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserSubUin(string $UserSubUin) Set The table creator ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DataGovernPolicy getGovernPolicy() Obtain The data governance configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGovernPolicy(DataGovernPolicy $GovernPolicy) Set The data governance configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDbGovernPolicyIsDisable() Obtain Whether database data governance is disabled. Valid values: `true` (disabled) and `false` (not disabled).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbGovernPolicyIsDisable(string $DbGovernPolicyIsDisable) Set Whether database data governance is disabled. Valid values: `true` (disabled) and `false` (not disabled).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SmartPolicy getSmartPolicy() Obtain Smart data governance configuration items
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSmartPolicy(SmartPolicy $SmartPolicy) Set Smart data governance configuration items
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TableBaseInfo extends AbstractModel
{
    /**
     * @var string The database name.
     */
    public $DatabaseName;

    /**
     * @var string The table name.
     */
    public $TableName;

    /**
     * @var string The data source name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DatasourceConnectionName;

    /**
     * @var string The table remarks.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableComment;

    /**
     * @var string The specific type: `table` or `view`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string The data format type, such as `hive` and `iceberg`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableFormat;

    /**
     * @var string The table creator name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserAlias;

    /**
     * @var string The table creator ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserSubUin;

    /**
     * @var DataGovernPolicy The data governance configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $GovernPolicy;

    /**
     * @var string Whether database data governance is disabled. Valid values: `true` (disabled) and `false` (not disabled).
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $DbGovernPolicyIsDisable;

    /**
     * @var SmartPolicy Smart data governance configuration items
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SmartPolicy;

    /**
     * @param string $DatabaseName The database name.
     * @param string $TableName The table name.
     * @param string $DatasourceConnectionName The data source name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TableComment The table remarks.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type The specific type: `table` or `view`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TableFormat The data format type, such as `hive` and `iceberg`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserAlias The table creator name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserSubUin The table creator ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DataGovernPolicy $GovernPolicy The data governance configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DbGovernPolicyIsDisable Whether database data governance is disabled. Valid values: `true` (disabled) and `false` (not disabled).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SmartPolicy $SmartPolicy Smart data governance configuration items
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
            $this->GovernPolicy = new DataGovernPolicy();
            $this->GovernPolicy->deserialize($param["GovernPolicy"]);
        }

        if (array_key_exists("DbGovernPolicyIsDisable",$param) and $param["DbGovernPolicyIsDisable"] !== null) {
            $this->DbGovernPolicyIsDisable = $param["DbGovernPolicyIsDisable"];
        }

        if (array_key_exists("SmartPolicy",$param) and $param["SmartPolicy"] !== null) {
            $this->SmartPolicy = new SmartPolicy();
            $this->SmartPolicy->deserialize($param["SmartPolicy"]);
        }
    }
}
