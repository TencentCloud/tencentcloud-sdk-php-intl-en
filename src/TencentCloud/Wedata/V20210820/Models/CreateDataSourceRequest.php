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
 * CreateDataSource request structure.
 *
 * @method string getName() Obtain Data Source Name, cannot be empty under the same SpaceName
 * @method void setName(string $Name) Set Data Source Name, cannot be empty under the same SpaceName
 * @method string getCategory() Obtain Data Source Category: Binding Engine, Binding Database
 * @method void setCategory(string $Category) Set Data Source Category: Binding Engine, Binding Database
 * @method string getType() Obtain Data Source Type: enumerated values
 * @method void setType(string $Type) Set Data Source Type: enumerated values
 * @method string getOwnerProjectId() Obtain Project ID
 * @method void setOwnerProjectId(string $OwnerProjectId) Set Project ID
 * @method string getOwnerProjectName() Obtain Project Name
 * @method void setOwnerProjectName(string $OwnerProjectName) Set Project Name
 * @method string getOwnerProjectIdent() Obtain Project Name (Chinese)
 * @method void setOwnerProjectIdent(string $OwnerProjectIdent) Set Project Name (Chinese)
 * @method string getBizParams() Obtain Configuration Information Extension of Business Data Source
 * @method void setBizParams(string $BizParams) Set Configuration Information Extension of Business Data Source
 * @method string getParams() Obtain Data source configuration information, stored as JSON KV. The KV storage information varies according to the data source type
 * @method void setParams(string $Params) Set Data source configuration information, stored as JSON KV. The KV storage information varies according to the data source type
 * @method string getDescription() Obtain Data source description information
 * @method void setDescription(string $Description) Set Data source description information
 * @method string getDisplay() Obtain Data Source Display Name, for visual inspection
 * @method void setDisplay(string $Display) Set Data Source Display Name, for visual inspection
 * @method string getDatabaseName() Obtain If the data source list is bound to a database, then it is the database name
 * @method void setDatabaseName(string $DatabaseName) Set If the data source list is bound to a database, then it is the database name
 * @method string getInstance() Obtain Instance ID of the data source engine, e.g., CDB Instance ID
 * @method void setInstance(string $Instance) Set Instance ID of the data source engine, e.g., CDB Instance ID
 * @method integer getStatus() Obtain Visibility of the data source, where 1 is visible and 0 is not visible. Default is 1
 * @method void setStatus(integer $Status) Set Visibility of the data source, where 1 is visible and 0 is not visible. Default is 1
 * @method string getClusterId() Obtain Name of the business space to which the data source belongs
 * @method void setClusterId(string $ClusterId) Set Name of the business space to which the data source belongs
 * @method string getCollect() Obtain Collection Status
 * @method void setCollect(string $Collect) Set Collection Status
 * @method string getCOSBucket() Obtain COS Bucket Information
 * @method void setCOSBucket(string $COSBucket) Set COS Bucket Information
 * @method string getCOSRegion() Obtain cos region
 * @method void setCOSRegion(string $COSRegion) Set cos region
 * @method string getConnectResult() Obtain Connection Test Result
 * @method void setConnectResult(string $ConnectResult) Set Connection Test Result
 * @method string getDevelopmentParams() Obtain Development Environment Data Source Configuration
 * @method void setDevelopmentParams(string $DevelopmentParams) Set Development Environment Data Source Configuration
 */
class CreateDataSourceRequest extends AbstractModel
{
    /**
     * @var string Data Source Name, cannot be empty under the same SpaceName
     */
    public $Name;

    /**
     * @var string Data Source Category: Binding Engine, Binding Database
     */
    public $Category;

    /**
     * @var string Data Source Type: enumerated values
     */
    public $Type;

    /**
     * @var string Project ID
     */
    public $OwnerProjectId;

    /**
     * @var string Project Name
     */
    public $OwnerProjectName;

    /**
     * @var string Project Name (Chinese)
     */
    public $OwnerProjectIdent;

    /**
     * @var string Configuration Information Extension of Business Data Source
     */
    public $BizParams;

    /**
     * @var string Data source configuration information, stored as JSON KV. The KV storage information varies according to the data source type
     */
    public $Params;

    /**
     * @var string Data source description information
     */
    public $Description;

    /**
     * @var string Data Source Display Name, for visual inspection
     */
    public $Display;

    /**
     * @var string If the data source list is bound to a database, then it is the database name
     */
    public $DatabaseName;

    /**
     * @var string Instance ID of the data source engine, e.g., CDB Instance ID
     */
    public $Instance;

    /**
     * @var integer Visibility of the data source, where 1 is visible and 0 is not visible. Default is 1
     */
    public $Status;

    /**
     * @var string Name of the business space to which the data source belongs
     */
    public $ClusterId;

    /**
     * @var string Collection Status
     */
    public $Collect;

    /**
     * @var string COS Bucket Information
     */
    public $COSBucket;

    /**
     * @var string cos region
     */
    public $COSRegion;

    /**
     * @var string Connection Test Result
     */
    public $ConnectResult;

    /**
     * @var string Development Environment Data Source Configuration
     */
    public $DevelopmentParams;

    /**
     * @param string $Name Data Source Name, cannot be empty under the same SpaceName
     * @param string $Category Data Source Category: Binding Engine, Binding Database
     * @param string $Type Data Source Type: enumerated values
     * @param string $OwnerProjectId Project ID
     * @param string $OwnerProjectName Project Name
     * @param string $OwnerProjectIdent Project Name (Chinese)
     * @param string $BizParams Configuration Information Extension of Business Data Source
     * @param string $Params Data source configuration information, stored as JSON KV. The KV storage information varies according to the data source type
     * @param string $Description Data source description information
     * @param string $Display Data Source Display Name, for visual inspection
     * @param string $DatabaseName If the data source list is bound to a database, then it is the database name
     * @param string $Instance Instance ID of the data source engine, e.g., CDB Instance ID
     * @param integer $Status Visibility of the data source, where 1 is visible and 0 is not visible. Default is 1
     * @param string $ClusterId Name of the business space to which the data source belongs
     * @param string $Collect Collection Status
     * @param string $COSBucket COS Bucket Information
     * @param string $COSRegion cos region
     * @param string $ConnectResult Connection Test Result
     * @param string $DevelopmentParams Development Environment Data Source Configuration
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("OwnerProjectId",$param) and $param["OwnerProjectId"] !== null) {
            $this->OwnerProjectId = $param["OwnerProjectId"];
        }

        if (array_key_exists("OwnerProjectName",$param) and $param["OwnerProjectName"] !== null) {
            $this->OwnerProjectName = $param["OwnerProjectName"];
        }

        if (array_key_exists("OwnerProjectIdent",$param) and $param["OwnerProjectIdent"] !== null) {
            $this->OwnerProjectIdent = $param["OwnerProjectIdent"];
        }

        if (array_key_exists("BizParams",$param) and $param["BizParams"] !== null) {
            $this->BizParams = $param["BizParams"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Display",$param) and $param["Display"] !== null) {
            $this->Display = $param["Display"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = $param["Instance"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Collect",$param) and $param["Collect"] !== null) {
            $this->Collect = $param["Collect"];
        }

        if (array_key_exists("COSBucket",$param) and $param["COSBucket"] !== null) {
            $this->COSBucket = $param["COSBucket"];
        }

        if (array_key_exists("COSRegion",$param) and $param["COSRegion"] !== null) {
            $this->COSRegion = $param["COSRegion"];
        }

        if (array_key_exists("ConnectResult",$param) and $param["ConnectResult"] !== null) {
            $this->ConnectResult = $param["ConnectResult"];
        }

        if (array_key_exists("DevelopmentParams",$param) and $param["DevelopmentParams"] !== null) {
            $this->DevelopmentParams = $param["DevelopmentParams"];
        }
    }
}
