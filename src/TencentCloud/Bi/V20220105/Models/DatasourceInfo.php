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
 * Data source details
 *
 * @method integer getId() Obtain Database ID.
 * @method void setId(integer $Id) Set Database ID.
 * @method string getDbName() Obtain Database name.
 * @method void setDbName(string $DbName) Set Database name.
 * @method string getServiceType() Obtain Domain type. Valid values: 1: Tencent Cloud; 2: local.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceType(string $ServiceType) Set Domain type. Valid values: 1: Tencent Cloud; 2: local.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSourceName() Obtain Database alias.
 * @method void setSourceName(string $SourceName) Set Database alias.
 * @method string getDbType() Obtain Database driver.
 * @method void setDbType(string $DbType) Set Database driver.
 * @method string getDbHost() Obtain HOST
 * @method void setDbHost(string $DbHost) Set HOST
 * @method integer getDbPort() Obtain Port.
 * @method void setDbPort(integer $DbPort) Set Port.
 * @method string getDbUser() Obtain Username.
 * @method void setDbUser(string $DbUser) Set Username.
 * @method string getCharset() Obtain Database encoding.
 * @method void setCharset(string $Charset) Set Database encoding.
 * @method string getCreatedAt() Obtain Creation time.

 * @method void setCreatedAt(string $CreatedAt) Set Creation time.

 * @method string getUpdatedAt() Obtain Modification time.
 * @method void setUpdatedAt(string $UpdatedAt) Set Modification time.
 * @method string getCreatedUser() Obtain Creator.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedUser(string $CreatedUser) Set Creator.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCatalog() Obtain Catalog value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCatalog(string $Catalog) Set Catalog value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConnectType() Obtain Connection type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConnectType(string $ConnectType) Set Connection type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectId() Obtain Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDesc() Obtain Data source description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDesc(string $Desc) Set Data source description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Data source status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Data source status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSourcePlat() Obtain Source platform.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourcePlat(string $SourcePlat) Set Source platform.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExtraParam() Obtain Extension parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtraParam(string $ExtraParam) Set Extension parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAddInfo() Obtain Additional information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddInfo(string $AddInfo) Set Additional information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectName() Obtain Project name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEngineType() Obtain Engine type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEngineType(string $EngineType) Set Engine type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getManager() Obtain Data source owner.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setManager(string $Manager) Set Data source owner.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOperatorWhitelist() Obtain Operation personnel allowlist.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOperatorWhitelist(string $OperatorWhitelist) Set Operation personnel allowlist.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain VPC information of the data source.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set VPC information of the data source.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUniqVpcId() Obtain uniqVpc information of the data source.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUniqVpcId(string $UniqVpcId) Set uniqVpc information of the data source.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegionId() Obtain Data source region information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionId(string $RegionId) Set Data source region information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method BaseStateAction getStateAction() Obtain Operation attributes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStateAction(BaseStateAction $StateAction) Set Operation attributes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdatedUser() Obtain Updater.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdatedUser(string $UpdatedUser) Set Updater.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPermissionList() Obtain Permission list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPermissionList(array $PermissionList) Set Permission list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAuthList() Obtain Permission value list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuthList(array $AuthList) Set Permission value list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDataOrigin() Obtain Third-party data source identifier.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataOrigin(string $DataOrigin) Set Third-party data source identifier.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDataOriginProjectId() Obtain Third-party project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataOriginProjectId(string $DataOriginProjectId) Set Third-party project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDataOriginDatasourceId() Obtain Third-party data source ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataOriginDatasourceId(string $DataOriginDatasourceId) Set Third-party data source ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClusterId() Obtain Cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDbTypeName() Obtain Data source name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbTypeName(string $DbTypeName) Set Data source name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getUseVPC() Obtain Enable VPC.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUseVPC(boolean $UseVPC) Set Enable VPC.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOwner() Obtain Associated person ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOwner(string $Owner) Set Associated person ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOwnerName() Obtain Associated person name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOwnerName(string $OwnerName) Set Associated person name.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DatasourceInfo extends AbstractModel
{
    /**
     * @var integer Database ID.
     */
    public $Id;

    /**
     * @var string Database name.
     */
    public $DbName;

    /**
     * @var string Domain type. Valid values: 1: Tencent Cloud; 2: local.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceType;

    /**
     * @var string Database alias.
     */
    public $SourceName;

    /**
     * @var string Database driver.
     */
    public $DbType;

    /**
     * @var string HOST
     */
    public $DbHost;

    /**
     * @var integer Port.
     */
    public $DbPort;

    /**
     * @var string Username.
     */
    public $DbUser;

    /**
     * @var string Database encoding.
     */
    public $Charset;

    /**
     * @var string Creation time.

     */
    public $CreatedAt;

    /**
     * @var string Modification time.
     */
    public $UpdatedAt;

    /**
     * @var string Creator.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedUser;

    /**
     * @var string Catalog value.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Catalog;

    /**
     * @var string Connection type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConnectType;

    /**
     * @var string Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Data source description.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Desc;

    /**
     * @var string Data source status.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Source platform.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourcePlat;

    /**
     * @var string Extension parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExtraParam;

    /**
     * @var string Additional information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AddInfo;

    /**
     * @var string Project name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectName;

    /**
     * @var string Engine type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EngineType;

    /**
     * @var string Data source owner.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Manager;

    /**
     * @var string Operation personnel allowlist.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OperatorWhitelist;

    /**
     * @var string VPC information of the data source.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string uniqVpc information of the data source.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UniqVpcId;

    /**
     * @var string Data source region information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionId;

    /**
     * @var BaseStateAction Operation attributes.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StateAction;

    /**
     * @var string Updater.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdatedUser;

    /**
     * @var array Permission list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PermissionList;

    /**
     * @var array Permission value list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AuthList;

    /**
     * @var string Third-party data source identifier.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataOrigin;

    /**
     * @var string Third-party project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataOriginProjectId;

    /**
     * @var string Third-party data source ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataOriginDatasourceId;

    /**
     * @var string Cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterId;

    /**
     * @var string Data source name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DbTypeName;

    /**
     * @var boolean Enable VPC.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UseVPC;

    /**
     * @var string Associated person ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Owner;

    /**
     * @var string Associated person name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OwnerName;

    /**
     * @param integer $Id Database ID.
     * @param string $DbName Database name.
     * @param string $ServiceType Domain type. Valid values: 1: Tencent Cloud; 2: local.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SourceName Database alias.
     * @param string $DbType Database driver.
     * @param string $DbHost HOST
     * @param integer $DbPort Port.
     * @param string $DbUser Username.
     * @param string $Charset Database encoding.
     * @param string $CreatedAt Creation time.

     * @param string $UpdatedAt Modification time.
     * @param string $CreatedUser Creator.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Catalog Catalog value.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ConnectType Connection type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectId Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Desc Data source description.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Data source status.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SourcePlat Source platform.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExtraParam Extension parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AddInfo Additional information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectName Project name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EngineType Engine type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Manager Data source owner.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OperatorWhitelist Operation personnel allowlist.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcId VPC information of the data source.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UniqVpcId uniqVpc information of the data source.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegionId Data source region information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param BaseStateAction $StateAction Operation attributes.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdatedUser Updater.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PermissionList Permission list.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AuthList Permission value list.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DataOrigin Third-party data source identifier.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DataOriginProjectId Third-party project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DataOriginDatasourceId Third-party data source ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterId Cluster ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DbTypeName Data source name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $UseVPC Enable VPC.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Owner Associated person ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OwnerName Associated person name.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("DbHost",$param) and $param["DbHost"] !== null) {
            $this->DbHost = $param["DbHost"];
        }

        if (array_key_exists("DbPort",$param) and $param["DbPort"] !== null) {
            $this->DbPort = $param["DbPort"];
        }

        if (array_key_exists("DbUser",$param) and $param["DbUser"] !== null) {
            $this->DbUser = $param["DbUser"];
        }

        if (array_key_exists("Charset",$param) and $param["Charset"] !== null) {
            $this->Charset = $param["Charset"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("CreatedUser",$param) and $param["CreatedUser"] !== null) {
            $this->CreatedUser = $param["CreatedUser"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("ConnectType",$param) and $param["ConnectType"] !== null) {
            $this->ConnectType = $param["ConnectType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SourcePlat",$param) and $param["SourcePlat"] !== null) {
            $this->SourcePlat = $param["SourcePlat"];
        }

        if (array_key_exists("ExtraParam",$param) and $param["ExtraParam"] !== null) {
            $this->ExtraParam = $param["ExtraParam"];
        }

        if (array_key_exists("AddInfo",$param) and $param["AddInfo"] !== null) {
            $this->AddInfo = $param["AddInfo"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("Manager",$param) and $param["Manager"] !== null) {
            $this->Manager = $param["Manager"];
        }

        if (array_key_exists("OperatorWhitelist",$param) and $param["OperatorWhitelist"] !== null) {
            $this->OperatorWhitelist = $param["OperatorWhitelist"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("StateAction",$param) and $param["StateAction"] !== null) {
            $this->StateAction = new BaseStateAction();
            $this->StateAction->deserialize($param["StateAction"]);
        }

        if (array_key_exists("UpdatedUser",$param) and $param["UpdatedUser"] !== null) {
            $this->UpdatedUser = $param["UpdatedUser"];
        }

        if (array_key_exists("PermissionList",$param) and $param["PermissionList"] !== null) {
            $this->PermissionList = [];
            foreach ($param["PermissionList"] as $key => $value){
                $obj = new PermissionGroup();
                $obj->deserialize($value);
                array_push($this->PermissionList, $obj);
            }
        }

        if (array_key_exists("AuthList",$param) and $param["AuthList"] !== null) {
            $this->AuthList = $param["AuthList"];
        }

        if (array_key_exists("DataOrigin",$param) and $param["DataOrigin"] !== null) {
            $this->DataOrigin = $param["DataOrigin"];
        }

        if (array_key_exists("DataOriginProjectId",$param) and $param["DataOriginProjectId"] !== null) {
            $this->DataOriginProjectId = $param["DataOriginProjectId"];
        }

        if (array_key_exists("DataOriginDatasourceId",$param) and $param["DataOriginDatasourceId"] !== null) {
            $this->DataOriginDatasourceId = $param["DataOriginDatasourceId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("DbTypeName",$param) and $param["DbTypeName"] !== null) {
            $this->DbTypeName = $param["DbTypeName"];
        }

        if (array_key_exists("UseVPC",$param) and $param["UseVPC"] !== null) {
            $this->UseVPC = $param["UseVPC"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("OwnerName",$param) and $param["OwnerName"] !== null) {
            $this->OwnerName = $param["OwnerName"];
        }
    }
}
