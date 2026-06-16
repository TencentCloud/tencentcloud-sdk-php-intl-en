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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDataTable request structure.
 *
 * @method integer getType() Obtain The backend provides a dictionary: table type, 1. database table creation, 2. SQL table creation, 3. Excel upload, 4. API connection, 5. Tencent documentation, 6. cloud database, 7. manually enter, 8. join query.
 * @method void setType(integer $Type) Set The backend provides a dictionary: table type, 1. database table creation, 2. SQL table creation, 3. Excel upload, 4. API connection, 5. Tencent documentation, 6. cloud database, 7. manually enter, 8. join query.
 * @method string getName() Obtain Data table name
 * @method void setName(string $Name) Set Data table name
 * @method integer getProjectId() Obtain None.
 * @method void setProjectId(integer $ProjectId) Set None.
 * @method integer getFoldId() Obtain folder
 * @method void setFoldId(integer $FoldId) Set folder
 * @method string getDatasourceId() Obtain data source Id
 * @method void setDatasourceId(string $DatasourceId) Set data source Id
 * @method string getTableName() Obtain physical table name
 * @method void setTableName(string $TableName) Set physical table name
 * @method string getSql() Obtain sql statement
 * @method void setSql(string $Sql) Set sql statement
 * @method string getExcelUrl() Obtain excel address
 * @method void setExcelUrl(string $ExcelUrl) Set excel address
 * @method array getFields() Obtain configure field
 * @method void setFields(array $Fields) Set configure field
 * @method integer getTableNodeType() Obtain Multi-table join usage: 1: Data source original table, 2: Local table, 3: Excel table, 4: API table
 * @method void setTableNodeType(integer $TableNodeType) Set Multi-table join usage: 1: Data source original table, 2: Local table, 3: Excel table, 4: API table
 * @method array getTables() Obtain Original table information for multi-table join
 * @method void setTables(array $Tables) Set Original table information for multi-table join
 * @method array getJoins() Obtain Multi-table join association information
 * @method void setJoins(array $Joins) Set Multi-table join association information
 * @method string getExtInfo() Obtain Additional info, such as api data source info and Tencent document access info
 * @method void setExtInfo(string $ExtInfo) Set Additional info, such as api data source info and Tencent document access info
 * @method boolean getAsyncRequest() Obtain whether
 * @method void setAsyncRequest(boolean $AsyncRequest) Set whether
 * @method string getParentTranId() Obtain dependent async transaction id
 * @method void setParentTranId(string $ParentTranId) Set dependent async transaction id
 * @method ApiDatasourceConfig getApiDatasourceConfig() Obtain API data source configuration
 * @method void setApiDatasourceConfig(ApiDatasourceConfig $ApiDatasourceConfig) Set API data source configuration
 * @method array getParamList() Obtain 1
 * @method void setParamList(array $ParamList) Set 1
 * @method string getDlcExtInfo() Obtain dlc advanced parameter
 * @method void setDlcExtInfo(string $DlcExtInfo) Set dlc advanced parameter
 * @method string getQueryDbData() Obtain Query database required or not
 * @method void setQueryDbData(string $QueryDbData) Set Query database required or not
 * @method string getTableComment() Obtain Table remark
 * @method void setTableComment(string $TableComment) Set Table remark
 * @method integer getQueryFieldRemark() Obtain Whether to query field remarks
 * @method void setQueryFieldRemark(integer $QueryFieldRemark) Set Whether to query field remarks
 * @method array getFieldRemarkList() Obtain Field remarks list
 * @method void setFieldRemarkList(array $FieldRemarkList) Set Field remarks list
 */
class CreateDataTableRequest extends AbstractModel
{
    /**
     * @var integer The backend provides a dictionary: table type, 1. database table creation, 2. SQL table creation, 3. Excel upload, 4. API connection, 5. Tencent documentation, 6. cloud database, 7. manually enter, 8. join query.
     */
    public $Type;

    /**
     * @var string Data table name
     */
    public $Name;

    /**
     * @var integer None.
     */
    public $ProjectId;

    /**
     * @var integer folder
     */
    public $FoldId;

    /**
     * @var string data source Id
     */
    public $DatasourceId;

    /**
     * @var string physical table name
     */
    public $TableName;

    /**
     * @var string sql statement
     */
    public $Sql;

    /**
     * @var string excel address
     */
    public $ExcelUrl;

    /**
     * @var array configure field
     */
    public $Fields;

    /**
     * @var integer Multi-table join usage: 1: Data source original table, 2: Local table, 3: Excel table, 4: API table
     */
    public $TableNodeType;

    /**
     * @var array Original table information for multi-table join
     */
    public $Tables;

    /**
     * @var array Multi-table join association information
     */
    public $Joins;

    /**
     * @var string Additional info, such as api data source info and Tencent document access info
     */
    public $ExtInfo;

    /**
     * @var boolean whether
     */
    public $AsyncRequest;

    /**
     * @var string dependent async transaction id
     */
    public $ParentTranId;

    /**
     * @var ApiDatasourceConfig API data source configuration
     */
    public $ApiDatasourceConfig;

    /**
     * @var array 1
     */
    public $ParamList;

    /**
     * @var string dlc advanced parameter
     */
    public $DlcExtInfo;

    /**
     * @var string Query database required or not
     */
    public $QueryDbData;

    /**
     * @var string Table remark
     */
    public $TableComment;

    /**
     * @var integer Whether to query field remarks
     */
    public $QueryFieldRemark;

    /**
     * @var array Field remarks list
     */
    public $FieldRemarkList;

    /**
     * @param integer $Type The backend provides a dictionary: table type, 1. database table creation, 2. SQL table creation, 3. Excel upload, 4. API connection, 5. Tencent documentation, 6. cloud database, 7. manually enter, 8. join query.
     * @param string $Name Data table name
     * @param integer $ProjectId None.
     * @param integer $FoldId folder
     * @param string $DatasourceId data source Id
     * @param string $TableName physical table name
     * @param string $Sql sql statement
     * @param string $ExcelUrl excel address
     * @param array $Fields configure field
     * @param integer $TableNodeType Multi-table join usage: 1: Data source original table, 2: Local table, 3: Excel table, 4: API table
     * @param array $Tables Original table information for multi-table join
     * @param array $Joins Multi-table join association information
     * @param string $ExtInfo Additional info, such as api data source info and Tencent document access info
     * @param boolean $AsyncRequest whether
     * @param string $ParentTranId dependent async transaction id
     * @param ApiDatasourceConfig $ApiDatasourceConfig API data source configuration
     * @param array $ParamList 1
     * @param string $DlcExtInfo dlc advanced parameter
     * @param string $QueryDbData Query database required or not
     * @param string $TableComment Table remark
     * @param integer $QueryFieldRemark Whether to query field remarks
     * @param array $FieldRemarkList Field remarks list
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("FoldId",$param) and $param["FoldId"] !== null) {
            $this->FoldId = $param["FoldId"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("ExcelUrl",$param) and $param["ExcelUrl"] !== null) {
            $this->ExcelUrl = $param["ExcelUrl"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = [];
            foreach ($param["Fields"] as $key => $value){
                $obj = new TableField();
                $obj->deserialize($value);
                array_push($this->Fields, $obj);
            }
        }

        if (array_key_exists("TableNodeType",$param) and $param["TableNodeType"] !== null) {
            $this->TableNodeType = $param["TableNodeType"];
        }

        if (array_key_exists("Tables",$param) and $param["Tables"] !== null) {
            $this->Tables = [];
            foreach ($param["Tables"] as $key => $value){
                $obj = new JoinSourceTable();
                $obj->deserialize($value);
                array_push($this->Tables, $obj);
            }
        }

        if (array_key_exists("Joins",$param) and $param["Joins"] !== null) {
            $this->Joins = [];
            foreach ($param["Joins"] as $key => $value){
                $obj = new JoinRelation();
                $obj->deserialize($value);
                array_push($this->Joins, $obj);
            }
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }

        if (array_key_exists("AsyncRequest",$param) and $param["AsyncRequest"] !== null) {
            $this->AsyncRequest = $param["AsyncRequest"];
        }

        if (array_key_exists("ParentTranId",$param) and $param["ParentTranId"] !== null) {
            $this->ParentTranId = $param["ParentTranId"];
        }

        if (array_key_exists("ApiDatasourceConfig",$param) and $param["ApiDatasourceConfig"] !== null) {
            $this->ApiDatasourceConfig = new ApiDatasourceConfig();
            $this->ApiDatasourceConfig->deserialize($param["ApiDatasourceConfig"]);
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new ParamCreateDTO();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }

        if (array_key_exists("DlcExtInfo",$param) and $param["DlcExtInfo"] !== null) {
            $this->DlcExtInfo = $param["DlcExtInfo"];
        }

        if (array_key_exists("QueryDbData",$param) and $param["QueryDbData"] !== null) {
            $this->QueryDbData = $param["QueryDbData"];
        }

        if (array_key_exists("TableComment",$param) and $param["TableComment"] !== null) {
            $this->TableComment = $param["TableComment"];
        }

        if (array_key_exists("QueryFieldRemark",$param) and $param["QueryFieldRemark"] !== null) {
            $this->QueryFieldRemark = $param["QueryFieldRemark"];
        }

        if (array_key_exists("FieldRemarkList",$param) and $param["FieldRemarkList"] !== null) {
            $this->FieldRemarkList = [];
            foreach ($param["FieldRemarkList"] as $key => $value){
                $obj = new FieldRemarkDTO();
                $obj->deserialize($value);
                array_push($this->FieldRemarkList, $obj);
            }
        }
    }
}
