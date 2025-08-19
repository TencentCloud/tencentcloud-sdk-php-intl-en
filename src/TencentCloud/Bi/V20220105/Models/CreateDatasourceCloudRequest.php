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
 * CreateDatasourceCloud request structure.
 *
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
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getVip() Obtain Private network IP address of the public cloud.
 * @method void setVip(string $Vip) Set Private network IP address of the public cloud.
 * @method string getVport() Obtain Private network port of the public cloud.
 * @method void setVport(string $Vport) Set Private network port of the public cloud.
 * @method string getVpcId() Obtain VPC identifier.
 * @method void setVpcId(string $VpcId) Set VPC identifier.
 * @method string getUniqVpcId() Obtain Unified VPC identifier.
 * @method void setUniqVpcId(string $UniqVpcId) Set Unified VPC identifier.
 * @method string getRegionId() Obtain Region identifier (gz, bj).
 * @method void setRegionId(string $RegionId) Set Region identifier (gz, bj).
 * @method string getExtraParam() Obtain Extension parameter.
 * @method void setExtraParam(string $ExtraParam) Set Extension parameter.
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getProdDbName() Obtain Product name of the data source.
 * @method void setProdDbName(string $ProdDbName) Set Product name of the data source.
 * @method string getDataOrigin() Obtain Third-party data source identifier.
 * @method void setDataOrigin(string $DataOrigin) Set Third-party data source identifier.
 * @method string getDataOriginProjectId() Obtain Third-party project ID.
 * @method void setDataOriginProjectId(string $DataOriginProjectId) Set Third-party project ID.
 * @method string getDataOriginDatasourceId() Obtain Third-party data source ID.
 * @method void setDataOriginDatasourceId(string $DataOriginDatasourceId) Set Third-party data source ID.
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method string getSchema() Obtain 
 * @method void setSchema(string $Schema) Set 
 * @method string getDbVersion() Obtain 
 * @method void setDbVersion(string $DbVersion) Set 
 */
class CreateDatasourceCloudRequest extends AbstractModel
{
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
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Private network IP address of the public cloud.
     */
    public $Vip;

    /**
     * @var string Private network port of the public cloud.
     */
    public $Vport;

    /**
     * @var string VPC identifier.
     */
    public $VpcId;

    /**
     * @var string Unified VPC identifier.
     */
    public $UniqVpcId;

    /**
     * @var string Region identifier (gz, bj).
     */
    public $RegionId;

    /**
     * @var string Extension parameter.
     */
    public $ExtraParam;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Product name of the data source.
     */
    public $ProdDbName;

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
     * @var string Cluster ID.
     */
    public $ClusterId;

    /**
     * @var string 
     */
    public $Schema;

    /**
     * @var string 
     */
    public $DbVersion;

    /**
     * @param string $ServiceType The backend provides dictionaries: domain type. 1. Tencent Cloud, 2. local.
     * @param string $DbType Drive.
     * @param string $Charset Database encoding.
     * @param string $DbUser Username.
     * @param string $DbPwd Password.
     * @param string $DbName Database name.
     * @param string $SourceName Database alias.
     * @param string $ProjectId Project ID.
     * @param string $Vip Private network IP address of the public cloud.
     * @param string $Vport Private network port of the public cloud.
     * @param string $VpcId VPC identifier.
     * @param string $UniqVpcId Unified VPC identifier.
     * @param string $RegionId Region identifier (gz, bj).
     * @param string $ExtraParam Extension parameter.
     * @param string $InstanceId Instance ID.
     * @param string $ProdDbName Product name of the data source.
     * @param string $DataOrigin Third-party data source identifier.
     * @param string $DataOriginProjectId Third-party project ID.
     * @param string $DataOriginDatasourceId Third-party data source ID.
     * @param string $ClusterId Cluster ID.
     * @param string $Schema 
     * @param string $DbVersion 
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

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
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

        if (array_key_exists("ExtraParam",$param) and $param["ExtraParam"] !== null) {
            $this->ExtraParam = $param["ExtraParam"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ProdDbName",$param) and $param["ProdDbName"] !== null) {
            $this->ProdDbName = $param["ProdDbName"];
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

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = $param["Schema"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }
    }
}
