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
 * Rule Execution Result Details
 *
 * @method integer getDatasourceId() Obtain Data source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceId(integer $DatasourceId) Set Data source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatasourceName() Obtain Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceName(string $DatasourceName) Set Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatabaseId() Obtain Database GUID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatabaseId(string $DatabaseId) Set Database GUID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatabaseName() Obtain Database nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatabaseName(string $DatabaseName) Set Database nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getInstanceId() Obtain Instance IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableId() Obtain table guid
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableId(string $TableId) Set table guid
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableName() Obtain Table nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableName(string $TableName) Set Table nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method RuleExecResult getRuleExecResult() Obtain rule execution record
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleExecResult(RuleExecResult $RuleExecResult) Set rule execution record
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTableOwnerUserId() Obtain table owner userId
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableOwnerUserId(integer $TableOwnerUserId) Set table owner userId
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDatasourceType() Obtain 2.HIVE 3.DLC
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceType(integer $DatasourceType) Set 2.HIVE 3.DLC
Note: This field may return null, indicating that no valid value can be obtained.
 */
class RuleExecResultDetail extends AbstractModel
{
    /**
     * @var integer Data source ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceId;

    /**
     * @var string Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceName;

    /**
     * @var string Database GUID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatabaseId;

    /**
     * @var string Database nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatabaseName;

    /**
     * @var string Instance IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceId;

    /**
     * @var string table guid
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableId;

    /**
     * @var string Table nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableName;

    /**
     * @var RuleExecResult rule execution record
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleExecResult;

    /**
     * @var integer table owner userId
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableOwnerUserId;

    /**
     * @var integer 2.HIVE 3.DLC
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceType;

    /**
     * @param integer $DatasourceId Data source ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatasourceName Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatabaseId Database GUID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatabaseName Database nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $InstanceId Instance IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableId table guid
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableName Table nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param RuleExecResult $RuleExecResult rule execution record
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TableOwnerUserId table owner userId
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DatasourceType 2.HIVE 3.DLC
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
        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatasourceName",$param) and $param["DatasourceName"] !== null) {
            $this->DatasourceName = $param["DatasourceName"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("RuleExecResult",$param) and $param["RuleExecResult"] !== null) {
            $this->RuleExecResult = new RuleExecResult();
            $this->RuleExecResult->deserialize($param["RuleExecResult"]);
        }

        if (array_key_exists("TableOwnerUserId",$param) and $param["TableOwnerUserId"] !== null) {
            $this->TableOwnerUserId = $param["TableOwnerUserId"];
        }

        if (array_key_exists("DatasourceType",$param) and $param["DatasourceType"] !== null) {
            $this->DatasourceType = $param["DatasourceType"];
        }
    }
}
