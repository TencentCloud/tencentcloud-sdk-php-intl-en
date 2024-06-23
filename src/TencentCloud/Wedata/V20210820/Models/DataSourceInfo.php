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
 * Data Source Object
 *
 * @method string getDatabaseName() Obtain If the data source list is bound to a database, then it is the database nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDatabaseName(string $DatabaseName) Set If the data source list is bound to a database, then it is the database nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDescription() Obtain Data source description informationNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescription(string $Description) Set Data source description informationNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getID() Obtain Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setID(integer $ID) Set Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInstance() Obtain Instance ID of the data source engine, e.g., CDB Instance IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstance(string $Instance) Set Instance ID of the data source engine, e.g., CDB Instance IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getName() Obtain Data Source Name, cannot be empty under the same SpaceNameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setName(string $Name) Set Data Source Name, cannot be empty under the same SpaceNameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getRegion() Obtain Region to which the data source engine belongs
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRegion(string $Region) Set Region to which the data source engine belongs
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getType() Obtain Data Source Type: enumerated valuesNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set Data Source Type: enumerated valuesNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getClusterId() Obtain Cluster ID to which the data source belongs
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setClusterId(string $ClusterId) Set Cluster ID to which the data source belongs
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getAppId() Obtain Application ID AppId
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAppId(integer $AppId) Set Application ID AppId
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getBizParams() Obtain Configuration Information Extension of Business Data SourceNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setBizParams(string $BizParams) Set Configuration Information Extension of Business Data SourceNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getCategory() Obtain Data Source Category: Binding Engine, Binding DatabaseNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCategory(string $Category) Set Data Source Category: Binding Engine, Binding DatabaseNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDisplay() Obtain Data Source Display Name, for visual inspectionNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDisplay(string $Display) Set Data Source Display Name, for visual inspectionNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwnerAccount() Obtain Data Source Responsible Person Account ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwnerAccount(string $OwnerAccount) Set Data Source Responsible Person Account ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getParams() Obtain Data source configuration information, stored as JSON KV. The KV storage information varies according to the data source typeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setParams(string $Params) Set Data source configuration information, stored as JSON KV. The KV storage information varies according to the data source typeNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getStatus() Obtain Visibility of the data source, where 1 is visible and 0 is not visible. Default is 1Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStatus(integer $Status) Set Visibility of the data source, where 1 is visible and 0 is not visible. Default is 1Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwnerAccountName() Obtain Data source owner account name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwnerAccountName(string $OwnerAccountName) Set Data source owner account name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getClusterName() Obtain Cluster NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setClusterName(string $ClusterName) Set Cluster NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwnerProjectId() Obtain Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwnerProjectId(string $OwnerProjectId) Set Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwnerProjectName() Obtain Project NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwnerProjectName(string $OwnerProjectName) Set Project NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwnerProjectIdent() Obtain Belonging project identifier
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwnerProjectIdent(string $OwnerProjectIdent) Set Belonging project identifier
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getAuthorityProjectName() Obtain Authorized project
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAuthorityProjectName(string $AuthorityProjectName) Set Authorized project
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getAuthorityUserName() Obtain Authorized user
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAuthorityUserName(string $AuthorityUserName) Set Authorized user
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getEdit() Obtain Edit permissions available
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEdit(boolean $Edit) Set Edit permissions available
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getAuthor() Obtain Authorization permissions available
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAuthor(boolean $Author) Set Authorization permissions available
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getDeliver() Obtain Transfer permissions available
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDeliver(boolean $Deliver) Set Transfer permissions available
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDataSourceStatus() Obtain Data source status
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDataSourceStatus(string $DataSourceStatus) Set Data source status
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getCreateTime() Obtain TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(integer $CreateTime) Set TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getParamsString() Obtain Params JSON string
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setParamsString(string $ParamsString) Set Params JSON string
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getBizParamsString() Obtain BizParams JSON string
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBizParamsString(string $BizParamsString) Set BizParams JSON string
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getModifiedTime() Obtain Modification TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setModifiedTime(integer $ModifiedTime) Set Modification TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getShowType() Obtain Data source display type, corresponding to Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setShowType(string $ShowType) Set Data source display type, corresponding to Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getProductId() Obtain Current data source production source Id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProductId(integer $ProductId) Set Current data source production source Id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDevelopmentId() Obtain Current data source development source Id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDevelopmentId(integer $DevelopmentId) Set Current data source development source Id
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDevelopmentParams() Obtain Same as params, content is the data for the development data source
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDevelopmentParams(string $DevelopmentParams) Set Same as params, content is the data for the development data source
Note: This field may return null, indicating that no valid value can be obtained.
 */
class DataSourceInfo extends AbstractModel
{
    /**
     * @var string If the data source list is bound to a database, then it is the database nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $DatabaseName;

    /**
     * @var string Data source description informationNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Description;

    /**
     * @var integer Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ID;

    /**
     * @var string Instance ID of the data source engine, e.g., CDB Instance IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Instance;

    /**
     * @var string Data Source Name, cannot be empty under the same SpaceNameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Name;

    /**
     * @var string Region to which the data source engine belongs
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Region;

    /**
     * @var string Data Source Type: enumerated valuesNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var string Cluster ID to which the data source belongs
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ClusterId;

    /**
     * @var integer Application ID AppId
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AppId;

    /**
     * @var string Configuration Information Extension of Business Data SourceNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $BizParams;

    /**
     * @var string Data Source Category: Binding Engine, Binding DatabaseNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Category;

    /**
     * @var string Data Source Display Name, for visual inspectionNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Display;

    /**
     * @var string Data Source Responsible Person Account ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OwnerAccount;

    /**
     * @var string Data source configuration information, stored as JSON KV. The KV storage information varies according to the data source typeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Params;

    /**
     * @var integer Visibility of the data source, where 1 is visible and 0 is not visible. Default is 1Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @var string Data source owner account name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OwnerAccountName;

    /**
     * @var string Cluster NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ClusterName;

    /**
     * @var string Project IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $OwnerProjectId;

    /**
     * @var string Project NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $OwnerProjectName;

    /**
     * @var string Belonging project identifier
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OwnerProjectIdent;

    /**
     * @var string Authorized project
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AuthorityProjectName;

    /**
     * @var string Authorized user
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AuthorityUserName;

    /**
     * @var boolean Edit permissions available
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Edit;

    /**
     * @var boolean Authorization permissions available
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Author;

    /**
     * @var boolean Transfer permissions available
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Deliver;

    /**
     * @var string Data source status
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DataSourceStatus;

    /**
     * @var integer TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Params JSON string
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ParamsString;

    /**
     * @var string BizParams JSON string
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $BizParamsString;

    /**
     * @var integer Modification TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ModifiedTime;

    /**
     * @var string Data source display type, corresponding to Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ShowType;

    /**
     * @var integer Current data source production source Id
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProductId;

    /**
     * @var integer Current data source development source Id
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DevelopmentId;

    /**
     * @var string Same as params, content is the data for the development data source
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DevelopmentParams;

    /**
     * @param string $DatabaseName If the data source list is bound to a database, then it is the database nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Description Data source description informationNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ID Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Instance Instance ID of the data source engine, e.g., CDB Instance IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Name Data Source Name, cannot be empty under the same SpaceNameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Region Region to which the data source engine belongs
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Type Data Source Type: enumerated valuesNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ClusterId Cluster ID to which the data source belongs
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $AppId Application ID AppId
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $BizParams Configuration Information Extension of Business Data SourceNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Category Data Source Category: Binding Engine, Binding DatabaseNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Display Data Source Display Name, for visual inspectionNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $OwnerAccount Data Source Responsible Person Account ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Params Data source configuration information, stored as JSON KV. The KV storage information varies according to the data source typeNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Status Visibility of the data source, where 1 is visible and 0 is not visible. Default is 1Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OwnerAccountName Data source owner account name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ClusterName Cluster NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $OwnerProjectId Project IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $OwnerProjectName Project NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $OwnerProjectIdent Belonging project identifier
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $AuthorityProjectName Authorized project
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $AuthorityUserName Authorized user
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $Edit Edit permissions available
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $Author Authorization permissions available
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $Deliver Transfer permissions available
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DataSourceStatus Data source status
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $CreateTime TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ParamsString Params JSON string
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $BizParamsString BizParams JSON string
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ModifiedTime Modification TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ShowType Data source display type, corresponding to Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ProductId Current data source production source Id
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DevelopmentId Current data source development source Id
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DevelopmentParams Same as params, content is the data for the development data source
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = $param["Instance"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("BizParams",$param) and $param["BizParams"] !== null) {
            $this->BizParams = $param["BizParams"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Display",$param) and $param["Display"] !== null) {
            $this->Display = $param["Display"];
        }

        if (array_key_exists("OwnerAccount",$param) and $param["OwnerAccount"] !== null) {
            $this->OwnerAccount = $param["OwnerAccount"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
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

        if (array_key_exists("AuthorityProjectName",$param) and $param["AuthorityProjectName"] !== null) {
            $this->AuthorityProjectName = $param["AuthorityProjectName"];
        }

        if (array_key_exists("AuthorityUserName",$param) and $param["AuthorityUserName"] !== null) {
            $this->AuthorityUserName = $param["AuthorityUserName"];
        }

        if (array_key_exists("Edit",$param) and $param["Edit"] !== null) {
            $this->Edit = $param["Edit"];
        }

        if (array_key_exists("Author",$param) and $param["Author"] !== null) {
            $this->Author = $param["Author"];
        }

        if (array_key_exists("Deliver",$param) and $param["Deliver"] !== null) {
            $this->Deliver = $param["Deliver"];
        }

        if (array_key_exists("DataSourceStatus",$param) and $param["DataSourceStatus"] !== null) {
            $this->DataSourceStatus = $param["DataSourceStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ParamsString",$param) and $param["ParamsString"] !== null) {
            $this->ParamsString = $param["ParamsString"];
        }

        if (array_key_exists("BizParamsString",$param) and $param["BizParamsString"] !== null) {
            $this->BizParamsString = $param["BizParamsString"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("ShowType",$param) and $param["ShowType"] !== null) {
            $this->ShowType = $param["ShowType"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DevelopmentId",$param) and $param["DevelopmentId"] !== null) {
            $this->DevelopmentId = $param["DevelopmentId"];
        }

        if (array_key_exists("DevelopmentParams",$param) and $param["DevelopmentParams"] !== null) {
            $this->DevelopmentParams = $param["DevelopmentParams"];
        }
    }
}
