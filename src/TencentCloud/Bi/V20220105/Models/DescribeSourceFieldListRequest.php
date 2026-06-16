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
 * DescribeSourceFieldList request structure.
 *
 * @method integer getDataSourceId() Obtain data source Id
 * @method void setDataSourceId(integer $DataSourceId) Set data source Id
 * @method string getTableName() Obtain Table name
 * @method void setTableName(string $TableName) Set Table name
 * @method string getSql() Obtain sql content
 * @method void setSql(string $Sql) Set sql content
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method boolean getAsyncRequest() Obtain whether
 * @method void setAsyncRequest(boolean $AsyncRequest) Set whether
 * @method string getTranId() Obtain async transaction id
 * @method void setTranId(string $TranId) Set async transaction id
 * @method array getParamList() Obtain 11
 * @method void setParamList(array $ParamList) Set 11
 * @method string getDlcExtInfo() Obtain DLC extension parameter
 * @method void setDlcExtInfo(string $DlcExtInfo) Set DLC extension parameter
 * @method string getQueryDbData() Obtain Query database required or not
 * @method void setQueryDbData(string $QueryDbData) Set Query database required or not
 * @method string getTableId() Obtain Data table Id
 * @method void setTableId(string $TableId) Set Data table Id
 * @method integer getTableType() Obtain The backend provides a dictionary: table type, 1. database table creation, 2. SQL table creation, 3. Excel upload, 4. API connection, 5. Tencent documentation, 6. cloud database, 7. manually enter, 8. join query.
 * @method void setTableType(integer $TableType) Set The backend provides a dictionary: table type, 1. database table creation, 2. SQL table creation, 3. Excel upload, 4. API connection, 5. Tencent documentation, 6. cloud database, 7. manually enter, 8. join query.
 */
class DescribeSourceFieldListRequest extends AbstractModel
{
    /**
     * @var integer data source Id
     */
    public $DataSourceId;

    /**
     * @var string Table name
     */
    public $TableName;

    /**
     * @var string sql content
     */
    public $Sql;

    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var boolean whether
     */
    public $AsyncRequest;

    /**
     * @var string async transaction id
     */
    public $TranId;

    /**
     * @var array 11
     */
    public $ParamList;

    /**
     * @var string DLC extension parameter
     */
    public $DlcExtInfo;

    /**
     * @var string Query database required or not
     */
    public $QueryDbData;

    /**
     * @var string Data table Id
     */
    public $TableId;

    /**
     * @var integer The backend provides a dictionary: table type, 1. database table creation, 2. SQL table creation, 3. Excel upload, 4. API connection, 5. Tencent documentation, 6. cloud database, 7. manually enter, 8. join query.
     */
    public $TableType;

    /**
     * @param integer $DataSourceId data source Id
     * @param string $TableName Table name
     * @param string $Sql sql content
     * @param integer $ProjectId Project ID.
     * @param boolean $AsyncRequest whether
     * @param string $TranId async transaction id
     * @param array $ParamList 11
     * @param string $DlcExtInfo DLC extension parameter
     * @param string $QueryDbData Query database required or not
     * @param string $TableId Data table Id
     * @param integer $TableType The backend provides a dictionary: table type, 1. database table creation, 2. SQL table creation, 3. Excel upload, 4. API connection, 5. Tencent documentation, 6. cloud database, 7. manually enter, 8. join query.
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
        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AsyncRequest",$param) and $param["AsyncRequest"] !== null) {
            $this->AsyncRequest = $param["AsyncRequest"];
        }

        if (array_key_exists("TranId",$param) and $param["TranId"] !== null) {
            $this->TranId = $param["TranId"];
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

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }
    }
}
