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
 * Rule Group Association Table Information
 *
 * @method string getTableId() Obtain Table IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableId(string $TableId) Set Table IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTableName() Obtain Table NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTableName(string $TableName) Set Table NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getInstanceId() Obtain Instance IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatasourceId() Obtain Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceId(string $DatasourceId) Set Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatasourceName() Obtain Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceName(string $DatasourceName) Set Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDatasourceType() Obtain Data source typeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatasourceType(integer $DatasourceType) Set Data source typeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatabaseId() Obtain Database ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatabaseId(string $DatabaseId) Set Database ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDatabaseName() Obtain Database nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatabaseName(string $DatabaseName) Set Database nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getProjectId() Obtain Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectId(integer $ProjectId) Set Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getUserId() Obtain Responsible Person ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUserId(integer $UserId) Set Responsible Person ID
Note: This field may return null, indicating that no valid value can be obtained.
 */
class RuleGroupTableInnerInfo extends AbstractModel
{
    /**
     * @var string Table IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableId;

    /**
     * @var string Table NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TableName;

    /**
     * @var string Instance IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceId;

    /**
     * @var string Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceName;

    /**
     * @var integer Data source typeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatasourceType;

    /**
     * @var string Database ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatabaseId;

    /**
     * @var string Database nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatabaseName;

    /**
     * @var integer Project IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectId;

    /**
     * @var integer Responsible Person ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UserId;

    /**
     * @param string $TableId Table IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TableName Table NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $InstanceId Instance IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatasourceId Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatasourceName Data Source Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DatasourceType Data source typeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatabaseId Database ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DatabaseName Database nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ProjectId Project IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $UserId Responsible Person ID
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
        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatasourceName",$param) and $param["DatasourceName"] !== null) {
            $this->DatasourceName = $param["DatasourceName"];
        }

        if (array_key_exists("DatasourceType",$param) and $param["DatasourceType"] !== null) {
            $this->DatasourceType = $param["DatasourceType"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
