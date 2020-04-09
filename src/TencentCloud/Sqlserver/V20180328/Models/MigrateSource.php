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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Source type of migration task
 *
 * @method string getInstanceId() Obtain Source instance ID in the format of `mssql-si2823jyl`, which is used when `MigrateType` is 1 (TencentDB for SQL Server)
 * @method void setInstanceId(string $InstanceId) Set Source instance ID in the format of `mssql-si2823jyl`, which is used when `MigrateType` is 1 (TencentDB for SQL Server)
 * @method string getCvmId() Obtain ID of source CVM instance, which is used when `MigrateType` is 2 (CVM-based self-created SQL Server database)
 * @method void setCvmId(string $CvmId) Set ID of source CVM instance, which is used when `MigrateType` is 2 (CVM-based self-created SQL Server database)
 * @method string getVpcId() Obtain VPC ID of source CVM instance in the format of vpc-6ys9ont9, which is used when `MigrateType` is 2 (CVM-based self-created SQL Server database)
 * @method void setVpcId(string $VpcId) Set VPC ID of source CVM instance in the format of vpc-6ys9ont9, which is used when `MigrateType` is 2 (CVM-based self-created SQL Server database)
 * @method string getSubnetId() Obtain VPC subnet ID of source CVM instance in the format of subnet-h9extioi, which is used when `MigrateType` is 2 (CVM-based self-created SQL Server database)
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID of source CVM instance in the format of subnet-h9extioi, which is used when `MigrateType` is 2 (CVM-based self-created SQL Server database)
 * @method string getUserName() Obtain Username, which is used when `MigrateType` is 1 or 2
 * @method void setUserName(string $UserName) Set Username, which is used when `MigrateType` is 1 or 2
 * @method string getPassword() Obtain Password, which is used when `MigrateType` is 1 or 2
 * @method void setPassword(string $Password) Set Password, which is used when `MigrateType` is 1 or 2
 * @method string getIp() Obtain Private IP of source CVM database, which is used when `MigrateType` is 2 (CVM-based self-created SQL Server database)
 * @method void setIp(string $Ip) Set Private IP of source CVM database, which is used when `MigrateType` is 2 (CVM-based self-created SQL Server database)
 * @method integer getPort() Obtain Port number of source CVM database, which is used when `MigrateType` is 2 (CVM-based self-created SQL Server database)
 * @method void setPort(integer $Port) Set Port number of source CVM database, which is used when `MigrateType` is 2 (CVM-based self-created SQL Server database)
 * @method array getUrl() Obtain Source backup address for offline migration, which is used when `MigrateType` is 4 or 5
 * @method void setUrl(array $Url) Set Source backup address for offline migration, which is used when `MigrateType` is 4 or 5
 * @method string getUrlPassword() Obtain Source backup password for offline migration, which is used when `MigrateType` is 4 or 5
 * @method void setUrlPassword(string $UrlPassword) Set Source backup password for offline migration, which is used when `MigrateType` is 4 or 5
 */
class MigrateSource extends AbstractModel
{
    /**
     * @var string Source instance ID in the format of `mssql-si2823jyl`, which is used when `MigrateType` is 1 (TencentDB for SQL Server)
     */
    public $InstanceId;

    /**
     * @var string ID of source CVM instance, which is used when `MigrateType` is 2 (CVM-based self-created SQL Server database)
     */
    public $CvmId;

    /**
     * @var string VPC ID of source CVM instance in the format of vpc-6ys9ont9, which is used when `MigrateType` is 2 (CVM-based self-created SQL Server database)
     */
    public $VpcId;

    /**
     * @var string VPC subnet ID of source CVM instance in the format of subnet-h9extioi, which is used when `MigrateType` is 2 (CVM-based self-created SQL Server database)
     */
    public $SubnetId;

    /**
     * @var string Username, which is used when `MigrateType` is 1 or 2
     */
    public $UserName;

    /**
     * @var string Password, which is used when `MigrateType` is 1 or 2
     */
    public $Password;

    /**
     * @var string Private IP of source CVM database, which is used when `MigrateType` is 2 (CVM-based self-created SQL Server database)
     */
    public $Ip;

    /**
     * @var integer Port number of source CVM database, which is used when `MigrateType` is 2 (CVM-based self-created SQL Server database)
     */
    public $Port;

    /**
     * @var array Source backup address for offline migration, which is used when `MigrateType` is 4 or 5
     */
    public $Url;

    /**
     * @var string Source backup password for offline migration, which is used when `MigrateType` is 4 or 5
     */
    public $UrlPassword;

    /**
     * @param string $InstanceId Source instance ID in the format of `mssql-si2823jyl`, which is used when `MigrateType` is 1 (TencentDB for SQL Server)
     * @param string $CvmId ID of source CVM instance, which is used when `MigrateType` is 2 (CVM-based self-created SQL Server database)
     * @param string $VpcId VPC ID of source CVM instance in the format of vpc-6ys9ont9, which is used when `MigrateType` is 2 (CVM-based self-created SQL Server database)
     * @param string $SubnetId VPC subnet ID of source CVM instance in the format of subnet-h9extioi, which is used when `MigrateType` is 2 (CVM-based self-created SQL Server database)
     * @param string $UserName Username, which is used when `MigrateType` is 1 or 2
     * @param string $Password Password, which is used when `MigrateType` is 1 or 2
     * @param string $Ip Private IP of source CVM database, which is used when `MigrateType` is 2 (CVM-based self-created SQL Server database)
     * @param integer $Port Port number of source CVM database, which is used when `MigrateType` is 2 (CVM-based self-created SQL Server database)
     * @param array $Url Source backup address for offline migration, which is used when `MigrateType` is 4 or 5
     * @param string $UrlPassword Source backup password for offline migration, which is used when `MigrateType` is 4 or 5
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CvmId",$param) and $param["CvmId"] !== null) {
            $this->CvmId = $param["CvmId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("UrlPassword",$param) and $param["UrlPassword"] !== null) {
            $this->UrlPassword = $param["UrlPassword"];
        }
    }
}
