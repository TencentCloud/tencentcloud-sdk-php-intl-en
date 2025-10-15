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
 * @method string getVpcId() Obtain Specifies the ID of the VPC network it belongs to.
 * @method void setVpcId(string $VpcId) Set Specifies the ID of the VPC network it belongs to.
 * @method string getSubnetId() Obtain Subnet ID.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID.
 * @method string getDbVersion() Obtain Database version. valid values:. 
<li>Specifies the available values for MYSQL: 5.7, 8.0.</li>.
 * @method void setDbVersion(string $DbVersion) Set Database version. valid values:. 
<li>Specifies the available values for MYSQL: 5.7, 8.0.</li>.
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getClusterName() Obtain Cluster name, length less than 64 characters. each character value ranges from uppercase/lowercase letters, digits, special symbols ('-','_','.').
 * @method void setClusterName(string $ClusterName) Set Cluster name, length less than 64 characters. each character value ranges from uppercase/lowercase letters, digits, special symbols ('-','_','.').
 * @method string getAdminPassword() Obtain Account password (8-64 characters, a combination of uppercase and lowercase letters, digits and symbols ~!@#$%^&*_-+=`|\(){}[]:;'<>,.?/ with any three types).
 * @method void setAdminPassword(string $AdminPassword) Set Account password (8-64 characters, a combination of uppercase and lowercase letters, digits and symbols ~!@#$%^&*_-+=`|\(){}[]:;'<>,.?/ with any three types).
 * @method integer getPort() Obtain Port, default 3306, in the range of [0, 65535).
 * @method void setPort(integer $Port) Set Port, default 3306, in the range of [0, 65535).
 * @method integer getPayMode() Obtain Billing mode. 0: pay-as-you-go; 1: monthly subscription. default is pay-as-you-go.
 * @method void setPayMode(integer $PayMode) Set Billing mode. 0: pay-as-you-go; 1: monthly subscription. default is pay-as-you-go.
 * @method integer getCount() Obtain Number of clusters to purchase. value range: [1,3]. default is 1.
 * @method void setCount(integer $Count) Set Number of clusters to purchase. value range: [1,3]. default is 1.
 * @method integer getStorageLimit() Obtain Maximum storage limit of a regular instance, in GB.
When DbType is MYSQL and the storage billing mode is prepaid, this parameter should not exceed the maximum storage specification corresponding to cpu and memory.
 * @method void setStorageLimit(integer $StorageLimit) Set Maximum storage limit of a regular instance, in GB.
When DbType is MYSQL and the storage billing mode is prepaid, this parameter should not exceed the maximum storage specification corresponding to cpu and memory.
 * @method integer getTimeSpan() Obtain Specifies the annual and monthly subscription duration.
 * @method void setTimeSpan(integer $TimeSpan) Set Specifies the annual and monthly subscription duration.
 * @method string getTimeUnit() Obtain Specifies the measurement unit for annual and monthly subscription duration. valid values: 's', 'd', 'm', 'y'.
 * @method void setTimeUnit(string $TimeUnit) Set Specifies the measurement unit for annual and monthly subscription duration. valid values: 's', 'd', 'm', 'y'.
 * @method integer getAutoRenewFlag() Obtain Whether annual/monthly subscription is auto-renewed. default value is 0.
0 identifies the default renewal method, 1 means auto-renew, 2 indicates no auto-renewal.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Whether annual/monthly subscription is auto-renewed. default value is 0.
0 identifies the default renewal method, 1 means auto-renew, 2 indicates no auto-renewal.
 * @method integer getAutoVoucher() Obtain Whether to automatically select a voucher. 1: yes; 0: no. default value: 0.
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically select a voucher. 1: yes; 0: no. default value: 0.
 * @method array getResourceTags() Obtain Specifies the tag array information that needs to be bound during cluster creation.
 * @method void setResourceTags(array $ResourceTags) Set Specifies the tag array information that needs to be bound during cluster creation.
 * @method integer getStoragePayMode() Obtain Specifies the cluster storage billing mode. 0: pay-as-you-go; 1: monthly subscription. default is pay-as-you-go.
When DbType is MYSQL and the cluster billing mode for computing is postpaid (including DbMode as SERVERLESS), the storage billing mode can only be pay-as-you-go.
Rollback and clone do not support monthly subscription storage.
 * @method void setStoragePayMode(integer $StoragePayMode) Set Specifies the cluster storage billing mode. 0: pay-as-you-go; 1: monthly subscription. default is pay-as-you-go.
When DbType is MYSQL and the cluster billing mode for computing is postpaid (including DbMode as SERVERLESS), the storage billing mode can only be pay-as-you-go.
Rollback and clone do not support monthly subscription storage.
 * @method array getSecurityGroupIds() Obtain Security group id array.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group id array.
 * @method array getAlarmPolicyIds() Obtain Specifies the Alarm policy Id array.
 * @method void setAlarmPolicyIds(array $AlarmPolicyIds) Set Specifies the Alarm policy Id array.
 * @method array getClusterParams() Obtain Parameter array, temporarily supports character_set_server (utf8|latin1|gbk|utf8mb4), lower_case_table_names. valid values: 1 (case-insensitive), 0 (case-sensitive).
 * @method void setClusterParams(array $ClusterParams) Set Parameter array, temporarily supports character_set_server (utf8|latin1|gbk|utf8mb4), lower_case_table_names. valid values: 1 (case-insensitive), 0 (case-sensitive).
 * @method integer getDealMode() Obtain Transaction mode. valid values: 0 (place order and pay), 1 (place order).
 * @method void setDealMode(integer $DealMode) Set Transaction mode. valid values: 0 (place order and pay), 1 (place order).
 * @method integer getParamTemplateId() Obtain Parameter template ID. can be obtained through querying parameter template information DescribeParamTemplates.
 * @method void setParamTemplateId(integer $ParamTemplateId) Set Parameter template ID. can be obtained through querying parameter template information DescribeParamTemplates.
 * @method string getSlaveZone() Obtain Multi-AZ address.
 * @method void setSlaveZone(string $SlaveZone) Set Multi-AZ address.
 * @method array getInstanceInitInfos() Obtain Initializes configuration information, mainly used to purchase clusters with different specification instances.
 * @method void setInstanceInitInfos(array $InstanceInitInfos) Set Initializes configuration information, mainly used to purchase clusters with different specification instances.
 * @method string getGdnId() Obtain Global database unique identifier.
 * @method void setGdnId(string $GdnId) Set Global database unique identifier.
 * @method ProxyConfigInfo getProxyConfig() Obtain Database proxy configuration.
 * @method void setProxyConfig(ProxyConfigInfo $ProxyConfig) Set Database proxy configuration.
 * @method string getAutoArchive() Obtain Specifies whether to automatically archive.
 * @method void setAutoArchive(string $AutoArchive) Set Specifies whether to automatically archive.
 * @method integer getAutoArchiveDelayHours() Obtain Processing time after pausing.
 * @method void setAutoArchiveDelayHours(integer $AutoArchiveDelayHours) Set Processing time after pausing.
 * @method string getEncryptMethod() Obtain Encryption method (consists of encryption algorithm and key pair version).
 * @method void setEncryptMethod(string $EncryptMethod) Set Encryption method (consists of encryption algorithm and key pair version).
 * @method IntegrateCreateClusterConfig getIntegrateCreateClusterConfig() Obtain Describes the cluster configuration information.
 * @method void setIntegrateCreateClusterConfig(IntegrateCreateClusterConfig $IntegrateCreateClusterConfig) Set Describes the cluster configuration information.
 * @method string getStorageVersion() Obtain Storage architecture type. valid values: 1.0/2.0. default value: 1.0.
 * @method void setStorageVersion(string $StorageVersion) Set Storage architecture type. valid values: 1.0/2.0. default value: 1.0.
 */
class CreateIntegrateClusterRequest extends AbstractModel
{
    /**
     * @var string Availability zone
     */
    public $Zone;

    /**
     * @var string Specifies the ID of the VPC network it belongs to.
     */
    public $VpcId;

    /**
     * @var string Subnet ID.
     */
    public $SubnetId;

    /**
     * @var string Database version. valid values:. 
<li>Specifies the available values for MYSQL: 5.7, 8.0.</li>.
     */
    public $DbVersion;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var string Cluster name, length less than 64 characters. each character value ranges from uppercase/lowercase letters, digits, special symbols ('-','_','.').
     */
    public $ClusterName;

    /**
     * @var string Account password (8-64 characters, a combination of uppercase and lowercase letters, digits and symbols ~!@#$%^&*_-+=`|\(){}[]:;'<>,.?/ with any three types).
     */
    public $AdminPassword;

    /**
     * @var integer Port, default 3306, in the range of [0, 65535).
     */
    public $Port;

    /**
     * @var integer Billing mode. 0: pay-as-you-go; 1: monthly subscription. default is pay-as-you-go.
     */
    public $PayMode;

    /**
     * @var integer Number of clusters to purchase. value range: [1,3]. default is 1.
     */
    public $Count;

    /**
     * @var integer Maximum storage limit of a regular instance, in GB.
When DbType is MYSQL and the storage billing mode is prepaid, this parameter should not exceed the maximum storage specification corresponding to cpu and memory.
     */
    public $StorageLimit;

    /**
     * @var integer Specifies the annual and monthly subscription duration.
     */
    public $TimeSpan;

    /**
     * @var string Specifies the measurement unit for annual and monthly subscription duration. valid values: 's', 'd', 'm', 'y'.
     */
    public $TimeUnit;

    /**
     * @var integer Whether annual/monthly subscription is auto-renewed. default value is 0.
0 identifies the default renewal method, 1 means auto-renew, 2 indicates no auto-renewal.
     */
    public $AutoRenewFlag;

    /**
     * @var integer Whether to automatically select a voucher. 1: yes; 0: no. default value: 0.
     */
    public $AutoVoucher;

    /**
     * @var array Specifies the tag array information that needs to be bound during cluster creation.
     */
    public $ResourceTags;

    /**
     * @var integer Specifies the cluster storage billing mode. 0: pay-as-you-go; 1: monthly subscription. default is pay-as-you-go.
When DbType is MYSQL and the cluster billing mode for computing is postpaid (including DbMode as SERVERLESS), the storage billing mode can only be pay-as-you-go.
Rollback and clone do not support monthly subscription storage.
     */
    public $StoragePayMode;

    /**
     * @var array Security group id array.
     */
    public $SecurityGroupIds;

    /**
     * @var array Specifies the Alarm policy Id array.
     */
    public $AlarmPolicyIds;

    /**
     * @var array Parameter array, temporarily supports character_set_server (utf8|latin1|gbk|utf8mb4), lower_case_table_names. valid values: 1 (case-insensitive), 0 (case-sensitive).
     */
    public $ClusterParams;

    /**
     * @var integer Transaction mode. valid values: 0 (place order and pay), 1 (place order).
     */
    public $DealMode;

    /**
     * @var integer Parameter template ID. can be obtained through querying parameter template information DescribeParamTemplates.
     */
    public $ParamTemplateId;

    /**
     * @var string Multi-AZ address.
     */
    public $SlaveZone;

    /**
     * @var array Initializes configuration information, mainly used to purchase clusters with different specification instances.
     */
    public $InstanceInitInfos;

    /**
     * @var string Global database unique identifier.
     */
    public $GdnId;

    /**
     * @var ProxyConfigInfo Database proxy configuration.
     */
    public $ProxyConfig;

    /**
     * @var string Specifies whether to automatically archive.
     */
    public $AutoArchive;

    /**
     * @var integer Processing time after pausing.
     */
    public $AutoArchiveDelayHours;

    /**
     * @var string Encryption method (consists of encryption algorithm and key pair version).
     */
    public $EncryptMethod;

    /**
     * @var IntegrateCreateClusterConfig Describes the cluster configuration information.
     */
    public $IntegrateCreateClusterConfig;

    /**
     * @var string Storage architecture type. valid values: 1.0/2.0. default value: 1.0.
     */
    public $StorageVersion;

    /**
     * @param string $Zone Availability zone
     * @param string $VpcId Specifies the ID of the VPC network it belongs to.
     * @param string $SubnetId Subnet ID.
     * @param string $DbVersion Database version. valid values:. 
<li>Specifies the available values for MYSQL: 5.7, 8.0.</li>.
     * @param integer $ProjectId Project ID
     * @param string $ClusterName Cluster name, length less than 64 characters. each character value ranges from uppercase/lowercase letters, digits, special symbols ('-','_','.').
     * @param string $AdminPassword Account password (8-64 characters, a combination of uppercase and lowercase letters, digits and symbols ~!@#$%^&*_-+=`|\(){}[]:;'<>,.?/ with any three types).
     * @param integer $Port Port, default 3306, in the range of [0, 65535).
     * @param integer $PayMode Billing mode. 0: pay-as-you-go; 1: monthly subscription. default is pay-as-you-go.
     * @param integer $Count Number of clusters to purchase. value range: [1,3]. default is 1.
     * @param integer $StorageLimit Maximum storage limit of a regular instance, in GB.
When DbType is MYSQL and the storage billing mode is prepaid, this parameter should not exceed the maximum storage specification corresponding to cpu and memory.
     * @param integer $TimeSpan Specifies the annual and monthly subscription duration.
     * @param string $TimeUnit Specifies the measurement unit for annual and monthly subscription duration. valid values: 's', 'd', 'm', 'y'.
     * @param integer $AutoRenewFlag Whether annual/monthly subscription is auto-renewed. default value is 0.
0 identifies the default renewal method, 1 means auto-renew, 2 indicates no auto-renewal.
     * @param integer $AutoVoucher Whether to automatically select a voucher. 1: yes; 0: no. default value: 0.
     * @param array $ResourceTags Specifies the tag array information that needs to be bound during cluster creation.
     * @param integer $StoragePayMode Specifies the cluster storage billing mode. 0: pay-as-you-go; 1: monthly subscription. default is pay-as-you-go.
When DbType is MYSQL and the cluster billing mode for computing is postpaid (including DbMode as SERVERLESS), the storage billing mode can only be pay-as-you-go.
Rollback and clone do not support monthly subscription storage.
     * @param array $SecurityGroupIds Security group id array.
     * @param array $AlarmPolicyIds Specifies the Alarm policy Id array.
     * @param array $ClusterParams Parameter array, temporarily supports character_set_server (utf8|latin1|gbk|utf8mb4), lower_case_table_names. valid values: 1 (case-insensitive), 0 (case-sensitive).
     * @param integer $DealMode Transaction mode. valid values: 0 (place order and pay), 1 (place order).
     * @param integer $ParamTemplateId Parameter template ID. can be obtained through querying parameter template information DescribeParamTemplates.
     * @param string $SlaveZone Multi-AZ address.
     * @param array $InstanceInitInfos Initializes configuration information, mainly used to purchase clusters with different specification instances.
     * @param string $GdnId Global database unique identifier.
     * @param ProxyConfigInfo $ProxyConfig Database proxy configuration.
     * @param string $AutoArchive Specifies whether to automatically archive.
     * @param integer $AutoArchiveDelayHours Processing time after pausing.
     * @param string $EncryptMethod Encryption method (consists of encryption algorithm and key pair version).
     * @param IntegrateCreateClusterConfig $IntegrateCreateClusterConfig Describes the cluster configuration information.
     * @param string $StorageVersion Storage architecture type. valid values: 1.0/2.0. default value: 1.0.
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
