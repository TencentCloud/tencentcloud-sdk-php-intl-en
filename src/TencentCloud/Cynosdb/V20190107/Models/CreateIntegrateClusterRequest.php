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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateIntegrateCluster request structure.
 *
 * @method string getZone() Obtain Availability zone
 * @method void setZone(string $Zone) Set Availability zone
 * @method string getVpcId() Obtain VPC network ID
 * @method void setVpcId(string $VpcId) Set VPC network ID
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method string getDbVersion() Obtain Database version. Valid values: 
<li> MYSQL available values: 5.7, 8.0 </li>
 * @method void setDbVersion(string $DbVersion) Set Database version. Valid values: 
<li> MYSQL available values: 5.7, 8.0 </li>
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getClusterName() Obtain Cluster name. The length must be less than 64 characters. Each character can be an uppercase or lowercase letter, digit, or special symbol (-, _, .).
 * @method void setClusterName(string $ClusterName) Set Cluster name. The length must be less than 64 characters. Each character can be an uppercase or lowercase letter, digit, or special symbol (-, _, .).
 * @method string getAdminPassword() Obtain Account (8-64 characters, containing any three of the following: uppercase and lowercase letters, digits, and symbols ~!@#$%^&*_-+=`|\(){}[]:;'<>,.?/)
 * @method void setAdminPassword(string $AdminPassword) Set Account (8-64 characters, containing any three of the following: uppercase and lowercase letters, digits, and symbols ~!@#$%^&*_-+=`|\(){}[]:;'<>,.?/)
 * @method integer getPort() Obtain Port. Default value: 3306. Value range: [0, 65535).
 * @method void setPort(integer $Port) Set Port. Default value: 3306. Value range: [0, 65535).
 * @method integer getPayMode() Obtain Billing mode. Pay-as-you-go: 0; monthly subscription: 1. Default: pay-as-you-go.
 * @method void setPayMode(integer $PayMode) Set Billing mode. Pay-as-you-go: 0; monthly subscription: 1. Default: pay-as-you-go.
 * @method integer getCount() Obtain Number of clusters to purchase. Range of optional values: [1,3]. Default value: 1
 * @method void setCount(integer $Count) Set Number of clusters to purchase. Range of optional values: [1,3]. Default value: 1
 * @method integer getStorageLimit() Obtain Storage limit of a regular instance in GB
When `DbType` is `MYSQL` and the storage billing mode is prepaid, this parameter cannot exceed the maximum storage specification corresponding to the cpu and memory.
 * @method void setStorageLimit(integer $StorageLimit) Set Storage limit of a regular instance in GB
When `DbType` is `MYSQL` and the storage billing mode is prepaid, this parameter cannot exceed the maximum storage specification corresponding to the cpu and memory.
 * @method integer getTimeSpan() Obtain Annual and monthly subscription duration.
 * @method void setTimeSpan(integer $TimeSpan) Set Annual and monthly subscription duration.
 * @method string getTimeUnit() Obtain Unit of the annual and monthly subscription duration. Valid values: s, d, m, y.
 * @method void setTimeUnit(string $TimeUnit) Set Unit of the annual and monthly subscription duration. Valid values: s, d, m, y.
 * @method integer getAutoRenewFlag() Obtain Whether Annual/Monthly Subscription is auto-renewed. Default value: 0.
0: default renewal method. 1: auto-renew. 2: no auto-renewal.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Whether Annual/Monthly Subscription is auto-renewed. Default value: 0.
0: default renewal method. 1: auto-renew. 2: no auto-renewal.
 * @method integer getAutoVoucher() Obtain Whether to automatically select a voucher. 1: Yes; 0: No. Default is 0.
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically select a voucher. 1: Yes; 0: No. Default is 0.
 * @method array getResourceTags() Obtain tag array information that needs to be bound for cluster creation
 * @method void setResourceTags(array $ResourceTags) Set tag array information that needs to be bound for cluster creation
 * @method integer getStoragePayMode() Obtain Cluster storage billing mode. Pay-as-you-go: 0. Monthly subscription: 1. Default: pay-as-you-go.
When `DbType` is `MYSQL` and the cluster compute billing mode is pay-as-you-go (including when `DbMode` is `SERVERLESS`), the storage billing mode can only be pay-as-you-go.
Rollback and clone do not support monthly subscription storage.
 * @method void setStoragePayMode(integer $StoragePayMode) Set Cluster storage billing mode. Pay-as-you-go: 0. Monthly subscription: 1. Default: pay-as-you-go.
When `DbType` is `MYSQL` and the cluster compute billing mode is pay-as-you-go (including when `DbMode` is `SERVERLESS`), the storage billing mode can only be pay-as-you-go.
Rollback and clone do not support monthly subscription storage.
 * @method array getSecurityGroupIds() Obtain Security group id array
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group id array
 * @method array getAlarmPolicyIds() Obtain Alarm policy Id array
 * @method void setAlarmPolicyIds(array $AlarmPolicyIds) Set Alarm policy Id array
 * @method array getClusterParams() Obtain Parameter array. It temporarily supports `character_set_server` (utf8 | latin1 | gbk | utf8mb4) and `lower_case_table_names`. 1: not case-sensitive; 0: case-sensitive.
 * @method void setClusterParams(array $ClusterParams) Set Parameter array. It temporarily supports `character_set_server` (utf8 | latin1 | gbk | utf8mb4) and `lower_case_table_names`. 1: not case-sensitive; 0: case-sensitive.
 * @method integer getDealMode() Obtain Transaction mode. 0: Place order and pay. 1: Place order
 * @method void setDealMode(integer $DealMode) Set Transaction mode. 0: Place order and pay. 1: Place order
 * @method integer getParamTemplateId() Obtain Parameter template ID, which can be obtained by querying parameter template information through DescribeParamTemplates.
 * @method void setParamTemplateId(integer $ParamTemplateId) Set Parameter template ID, which can be obtained by querying parameter template information through DescribeParamTemplates.
 * @method string getSlaveZone() Obtain Multi-az address
 * @method void setSlaveZone(string $SlaveZone) Set Multi-az address
 * @method array getInstanceInitInfos() Obtain Instance initialization configuration information, primarily used for selecting different specification instances during cluster purchase.
 * @method void setInstanceInitInfos(array $InstanceInitInfos) Set Instance initialization configuration information, primarily used for selecting different specification instances during cluster purchase.
 * @method string getGdnId() Obtain Global database unique ID
 * @method void setGdnId(string $GdnId) Set Global database unique ID
 * @method ProxyConfigInfo getProxyConfig() Obtain Database proxy configuration
 * @method void setProxyConfig(ProxyConfigInfo $ProxyConfig) Set Database proxy configuration
 * @method string getAutoArchive() Obtain Whether to automatically archive
 * @method void setAutoArchive(string $AutoArchive) Set Whether to automatically archive
 * @method integer getAutoArchiveDelayHours() Obtain Archiving processing time after pausing
 * @method void setAutoArchiveDelayHours(integer $AutoArchiveDelayHours) Set Archiving processing time after pausing
 * @method string getEncryptMethod() Obtain Encryption method (consists of the encryption algorithm and key pair version)
 * @method void setEncryptMethod(string $EncryptMethod) Set Encryption method (consists of the encryption algorithm and key pair version)
 * @method IntegrateCreateClusterConfig getIntegrateCreateClusterConfig() Obtain Integrated cluster configuration information
 * @method void setIntegrateCreateClusterConfig(IntegrateCreateClusterConfig $IntegrateCreateClusterConfig) Set Integrated cluster configuration information
 * @method string getStorageVersion() Obtain Storage architecture type. Enumeration values: 1.0/2.0. Default value: 1.0
 * @method void setStorageVersion(string $StorageVersion) Set Storage architecture type. Enumeration values: 1.0/2.0. Default value: 1.0
 */
class CreateIntegrateClusterRequest extends AbstractModel
{
    /**
     * @var string Availability zone
     */
    public $Zone;

    /**
     * @var string VPC network ID
     */
    public $VpcId;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var string Database version. Valid values: 
<li> MYSQL available values: 5.7, 8.0 </li>
     */
    public $DbVersion;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var string Cluster name. The length must be less than 64 characters. Each character can be an uppercase or lowercase letter, digit, or special symbol (-, _, .).
     */
    public $ClusterName;

    /**
     * @var string Account (8-64 characters, containing any three of the following: uppercase and lowercase letters, digits, and symbols ~!@#$%^&*_-+=`|\(){}[]:;'<>,.?/)
     */
    public $AdminPassword;

    /**
     * @var integer Port. Default value: 3306. Value range: [0, 65535).
     */
    public $Port;

    /**
     * @var integer Billing mode. Pay-as-you-go: 0; monthly subscription: 1. Default: pay-as-you-go.
     */
    public $PayMode;

    /**
     * @var integer Number of clusters to purchase. Range of optional values: [1,3]. Default value: 1
     */
    public $Count;

    /**
     * @var integer Storage limit of a regular instance in GB
When `DbType` is `MYSQL` and the storage billing mode is prepaid, this parameter cannot exceed the maximum storage specification corresponding to the cpu and memory.
     */
    public $StorageLimit;

    /**
     * @var integer Annual and monthly subscription duration.
     */
    public $TimeSpan;

    /**
     * @var string Unit of the annual and monthly subscription duration. Valid values: s, d, m, y.
     */
    public $TimeUnit;

    /**
     * @var integer Whether Annual/Monthly Subscription is auto-renewed. Default value: 0.
0: default renewal method. 1: auto-renew. 2: no auto-renewal.
     */
    public $AutoRenewFlag;

    /**
     * @var integer Whether to automatically select a voucher. 1: Yes; 0: No. Default is 0.
     */
    public $AutoVoucher;

    /**
     * @var array tag array information that needs to be bound for cluster creation
     */
    public $ResourceTags;

    /**
     * @var integer Cluster storage billing mode. Pay-as-you-go: 0. Monthly subscription: 1. Default: pay-as-you-go.
When `DbType` is `MYSQL` and the cluster compute billing mode is pay-as-you-go (including when `DbMode` is `SERVERLESS`), the storage billing mode can only be pay-as-you-go.
Rollback and clone do not support monthly subscription storage.
     */
    public $StoragePayMode;

    /**
     * @var array Security group id array
     */
    public $SecurityGroupIds;

    /**
     * @var array Alarm policy Id array
     */
    public $AlarmPolicyIds;

    /**
     * @var array Parameter array. It temporarily supports `character_set_server` (utf8 | latin1 | gbk | utf8mb4) and `lower_case_table_names`. 1: not case-sensitive; 0: case-sensitive.
     */
    public $ClusterParams;

    /**
     * @var integer Transaction mode. 0: Place order and pay. 1: Place order
     */
    public $DealMode;

    /**
     * @var integer Parameter template ID, which can be obtained by querying parameter template information through DescribeParamTemplates.
     */
    public $ParamTemplateId;

    /**
     * @var string Multi-az address
     */
    public $SlaveZone;

    /**
     * @var array Instance initialization configuration information, primarily used for selecting different specification instances during cluster purchase.
     */
    public $InstanceInitInfos;

    /**
     * @var string Global database unique ID
     */
    public $GdnId;

    /**
     * @var ProxyConfigInfo Database proxy configuration
     */
    public $ProxyConfig;

    /**
     * @var string Whether to automatically archive
     */
    public $AutoArchive;

    /**
     * @var integer Archiving processing time after pausing
     */
    public $AutoArchiveDelayHours;

    /**
     * @var string Encryption method (consists of the encryption algorithm and key pair version)
     */
    public $EncryptMethod;

    /**
     * @var IntegrateCreateClusterConfig Integrated cluster configuration information
     */
    public $IntegrateCreateClusterConfig;

    /**
     * @var string Storage architecture type. Enumeration values: 1.0/2.0. Default value: 1.0
     */
    public $StorageVersion;

    /**
     * @param string $Zone Availability zone
     * @param string $VpcId VPC network ID
     * @param string $SubnetId Subnet ID
     * @param string $DbVersion Database version. Valid values: 
<li> MYSQL available values: 5.7, 8.0 </li>
     * @param integer $ProjectId Project ID
     * @param string $ClusterName Cluster name. The length must be less than 64 characters. Each character can be an uppercase or lowercase letter, digit, or special symbol (-, _, .).
     * @param string $AdminPassword Account (8-64 characters, containing any three of the following: uppercase and lowercase letters, digits, and symbols ~!@#$%^&*_-+=`|\(){}[]:;'<>,.?/)
     * @param integer $Port Port. Default value: 3306. Value range: [0, 65535).
     * @param integer $PayMode Billing mode. Pay-as-you-go: 0; monthly subscription: 1. Default: pay-as-you-go.
     * @param integer $Count Number of clusters to purchase. Range of optional values: [1,3]. Default value: 1
     * @param integer $StorageLimit Storage limit of a regular instance in GB
When `DbType` is `MYSQL` and the storage billing mode is prepaid, this parameter cannot exceed the maximum storage specification corresponding to the cpu and memory.
     * @param integer $TimeSpan Annual and monthly subscription duration.
     * @param string $TimeUnit Unit of the annual and monthly subscription duration. Valid values: s, d, m, y.
     * @param integer $AutoRenewFlag Whether Annual/Monthly Subscription is auto-renewed. Default value: 0.
0: default renewal method. 1: auto-renew. 2: no auto-renewal.
     * @param integer $AutoVoucher Whether to automatically select a voucher. 1: Yes; 0: No. Default is 0.
     * @param array $ResourceTags tag array information that needs to be bound for cluster creation
     * @param integer $StoragePayMode Cluster storage billing mode. Pay-as-you-go: 0. Monthly subscription: 1. Default: pay-as-you-go.
When `DbType` is `MYSQL` and the cluster compute billing mode is pay-as-you-go (including when `DbMode` is `SERVERLESS`), the storage billing mode can only be pay-as-you-go.
Rollback and clone do not support monthly subscription storage.
     * @param array $SecurityGroupIds Security group id array
     * @param array $AlarmPolicyIds Alarm policy Id array
     * @param array $ClusterParams Parameter array. It temporarily supports `character_set_server` (utf8 | latin1 | gbk | utf8mb4) and `lower_case_table_names`. 1: not case-sensitive; 0: case-sensitive.
     * @param integer $DealMode Transaction mode. 0: Place order and pay. 1: Place order
     * @param integer $ParamTemplateId Parameter template ID, which can be obtained by querying parameter template information through DescribeParamTemplates.
     * @param string $SlaveZone Multi-az address
     * @param array $InstanceInitInfos Instance initialization configuration information, primarily used for selecting different specification instances during cluster purchase.
     * @param string $GdnId Global database unique ID
     * @param ProxyConfigInfo $ProxyConfig Database proxy configuration
     * @param string $AutoArchive Whether to automatically archive
     * @param integer $AutoArchiveDelayHours Archiving processing time after pausing
     * @param string $EncryptMethod Encryption method (consists of the encryption algorithm and key pair version)
     * @param IntegrateCreateClusterConfig $IntegrateCreateClusterConfig Integrated cluster configuration information
     * @param string $StorageVersion Storage architecture type. Enumeration values: 1.0/2.0. Default value: 1.0
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("AdminPassword",$param) and $param["AdminPassword"] !== null) {
            $this->AdminPassword = $param["AdminPassword"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("StoragePayMode",$param) and $param["StoragePayMode"] !== null) {
            $this->StoragePayMode = $param["StoragePayMode"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("AlarmPolicyIds",$param) and $param["AlarmPolicyIds"] !== null) {
            $this->AlarmPolicyIds = $param["AlarmPolicyIds"];
        }

        if (array_key_exists("ClusterParams",$param) and $param["ClusterParams"] !== null) {
            $this->ClusterParams = [];
            foreach ($param["ClusterParams"] as $key => $value){
                $obj = new ParamItem();
                $obj->deserialize($value);
                array_push($this->ClusterParams, $obj);
            }
        }

        if (array_key_exists("DealMode",$param) and $param["DealMode"] !== null) {
            $this->DealMode = $param["DealMode"];
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }

        if (array_key_exists("SlaveZone",$param) and $param["SlaveZone"] !== null) {
            $this->SlaveZone = $param["SlaveZone"];
        }

        if (array_key_exists("InstanceInitInfos",$param) and $param["InstanceInitInfos"] !== null) {
            $this->InstanceInitInfos = [];
            foreach ($param["InstanceInitInfos"] as $key => $value){
                $obj = new IntegrateInstanceInfo();
                $obj->deserialize($value);
                array_push($this->InstanceInitInfos, $obj);
            }
        }

        if (array_key_exists("GdnId",$param) and $param["GdnId"] !== null) {
            $this->GdnId = $param["GdnId"];
        }

        if (array_key_exists("ProxyConfig",$param) and $param["ProxyConfig"] !== null) {
            $this->ProxyConfig = new ProxyConfigInfo();
            $this->ProxyConfig->deserialize($param["ProxyConfig"]);
        }

        if (array_key_exists("AutoArchive",$param) and $param["AutoArchive"] !== null) {
            $this->AutoArchive = $param["AutoArchive"];
        }

        if (array_key_exists("AutoArchiveDelayHours",$param) and $param["AutoArchiveDelayHours"] !== null) {
            $this->AutoArchiveDelayHours = $param["AutoArchiveDelayHours"];
        }

        if (array_key_exists("EncryptMethod",$param) and $param["EncryptMethod"] !== null) {
            $this->EncryptMethod = $param["EncryptMethod"];
        }

        if (array_key_exists("IntegrateCreateClusterConfig",$param) and $param["IntegrateCreateClusterConfig"] !== null) {
            $this->IntegrateCreateClusterConfig = new IntegrateCreateClusterConfig();
            $this->IntegrateCreateClusterConfig->deserialize($param["IntegrateCreateClusterConfig"]);
        }

        if (array_key_exists("StorageVersion",$param) and $param["StorageVersion"] !== null) {
            $this->StorageVersion = $param["StorageVersion"];
        }
    }
}
