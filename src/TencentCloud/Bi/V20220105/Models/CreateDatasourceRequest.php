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
 * CreateDatasource request structure.
 *
 * @method string getDbHost() Obtain HOST
 * @method void setDbHost(string $DbHost) Set HOST
 * @method integer getDbPort() Obtain Port.
 * @method void setDbPort(integer $DbPort) Set Port.
 * @method string getServiceType() Obtain The backend provides dictionaries: domain type. 1. Tencent Cloud, 2. local.
 * @method void setServiceType(string $ServiceType) Set The backend provides dictionaries: domain type. 1. Tencent Cloud, 2. local.
 * @method string getDbType() Obtain Drive.
 * @method void setDbType(string $DbType) Set Drive.
 * @method string getCharset() Obtain Database encoding.
 * @method void setCharset(string $Charset) Set Database encoding.
 * @method string getDbUser() Obtain Username.
 * @method void setDbUser(string $DbUser) Set Username.
 * @method string getDbPwd() Obtain Password.
 * @method void setDbPwd(string $DbPwd) Set Password.
 * @method string getDbName() Obtain Database name.
 * @method void setDbName(string $DbName) Set Database name.
 * @method string getSourceName() Obtain Database alias.
 * @method void setSourceName(string $SourceName) Set Database alias.
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method string getCatalog() Obtain Catalog value.
 * @method void setCatalog(string $Catalog) Set Catalog value.
 * @method string getDataOrigin() Obtain Third-party data source identifier.
 * @method void setDataOrigin(string $DataOrigin) Set Third-party data source identifier.
 * @method string getDataOriginProjectId() Obtain Third-party project ID.
 * @method void setDataOriginProjectId(string $DataOriginProjectId) Set Third-party project ID.
 * @method string getDataOriginDatasourceId() Obtain Third-party data source ID.
 * @method void setDataOriginDatasourceId(string $DataOriginDatasourceId) Set Third-party data source ID.
 * @method string getExtraParam() Obtain Extension parameter.
 * @method void setExtraParam(string $ExtraParam) Set Extension parameter.
 * @method string getUniqVpcId() Obtain Unified identifier of the Tencent Cloud VPC.
 * @method void setUniqVpcId(string $UniqVpcId) Set Unified identifier of the Tencent Cloud VPC.
 * @method string getVip() Obtain VPC IP address.
 * @method void setVip(string $Vip) Set VPC IP address.
 * @method string getVport() Obtain VPC port.
 * @method void setVport(string $Vport) Set VPC port.
 * @method string getVpcId() Obtain Tencent Cloud VPC identifier.
 * @method void setVpcId(string $VpcId) Set Tencent Cloud VPC identifier.
 * @method array getOperationAuthLimit() Obtain Operation permission limitation.
 * @method void setOperationAuthLimit(array $OperationAuthLimit) Set Operation permission limitation.
 * @method boolean getUseVPC() Obtain Enables VPC.
 * @method void setUseVPC(boolean $UseVPC) Set Enables VPC.
 * @method string getRegionId() Obtain Region.
 * @method void setRegionId(string $RegionId) Set Region.
 */
class CreateDatasourceRequest extends AbstractModel
{
    /**
     * @var string HOST
     */
    public $DbHost;

    /**
     * @var integer Port.
     */
    public $DbPort;

    /**
     * @var string The backend provides dictionaries: domain type. 1. Tencent Cloud, 2. local.
     */
    public $ServiceType;

    /**
     * @var string Drive.
     */
    public $DbType;

    /**
     * @var string Database encoding.
     */
    public $Charset;

    /**
     * @var string Username.
     */
    public $DbUser;

    /**
     * @var string Password.
     */
    public $DbPwd;

    /**
     * @var string Database name.
     */
    public $DbName;

    /**
     * @var string Database alias.
     */
    public $SourceName;

    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var string Catalog value.
     */
    public $Catalog;

    /**
     * @var string Third-party data source identifier.
     */
    public $DataOrigin;

    /**
     * @var string Third-party project ID.
     */
    public $DataOriginProjectId;

    /**
     * @var string Third-party data source ID.
     */
    public $DataOriginDatasourceId;

    /**
     * @var string Extension parameter.
     */
    public $ExtraParam;

    /**
     * @var string Unified identifier of the Tencent Cloud VPC.
     */
    public $UniqVpcId;

    /**
     * @var string VPC IP address.
     */
    public $Vip;

    /**
     * @var string VPC port.
     */
    public $Vport;

    /**
     * @var string Tencent Cloud VPC identifier.
     */
    public $VpcId;

    /**
     * @var array Operation permission limitation.
     */
    public $OperationAuthLimit;

    /**
     * @var boolean Enables VPC.
     */
    public $UseVPC;

    /**
     * @var string Region.
     */
    public $RegionId;

    /**
     * @param string $DbHost HOST
     * @param integer $DbPort Port.
     * @param string $ServiceType The backend provides dictionaries: domain type. 1. Tencent Cloud, 2. local.
     * @param string $DbType Drive.
     * @param string $Charset Database encoding.
     * @param string $DbUser Username.
     * @param string $DbPwd Password.
     * @param string $DbName Database name.
     * @param string $SourceName Database alias.
     * @param integer $ProjectId Project ID.
     * @param string $Catalog Catalog value.
     * @param string $DataOrigin Third-party data source identifier.
     * @param string $DataOriginProjectId Third-party project ID.
     * @param string $DataOriginDatasourceId Third-party data source ID.
     * @param string $ExtraParam Extension parameter.
     * @param string $UniqVpcId Unified identifier of the Tencent Cloud VPC.
     * @param string $Vip VPC IP address.
     * @param string $Vport VPC port.
     * @param string $VpcId Tencent Cloud VPC identifier.
     * @param array $OperationAuthLimit Operation permission limitation.
     * @param boolean $UseVPC Enables VPC.
     * @param string $RegionId Region.
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
        if (array_key_exists("DbHost",$param) and $param["DbHost"] !== null) {
            $this->DbHost = $param["DbHost"];
        }

        if (array_key_exists("DbPort",$param) and $param["DbPort"] !== null) {
            $this->DbPort = $param["DbPort"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("Charset",$param) and $param["Charset"] !== null) {
            $this->Charset = $param["Charset"];
        }

        if (array_key_exists("DbUser",$param) and $param["DbUser"] !== null) {
            $this->DbUser = $param["DbUser"];
        }

        if (array_key_exists("DbPwd",$param) and $param["DbPwd"] !== null) {
            $this->DbPwd = $param["DbPwd"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
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

        if (array_key_exists("ExtraParam",$param) and $param["ExtraParam"] !== null) {
            $this->ExtraParam = $param["ExtraParam"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("OperationAuthLimit",$param) and $param["OperationAuthLimit"] !== null) {
            $this->OperationAuthLimit = $param["OperationAuthLimit"];
        }

        if (array_key_exists("UseVPC",$param) and $param["UseVPC"] !== null) {
            $this->UseVPC = $param["UseVPC"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
