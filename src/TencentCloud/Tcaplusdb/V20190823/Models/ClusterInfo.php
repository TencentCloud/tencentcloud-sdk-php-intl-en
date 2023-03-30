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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster details
 *
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getRegion() Obtain Cluster region
 * @method void setRegion(string $Region) Set Cluster region
 * @method string getIdlType() Obtain Cluster data description language type, such as `PROTO`, `TDR`, or `MIX`
 * @method void setIdlType(string $IdlType) Set Cluster data description language type, such as `PROTO`, `TDR`, or `MIX`
 * @method string getNetworkType() Obtain Network type
 * @method void setNetworkType(string $NetworkType) Set Network type
 * @method string getVpcId() Obtain ID of the VPC instance with which a cluster is associated
 * @method void setVpcId(string $VpcId) Set ID of the VPC instance with which a cluster is associated
 * @method string getSubnetId() Obtain ID of the subnet instance with which a cluster is associated
 * @method void setSubnetId(string $SubnetId) Set ID of the subnet instance with which a cluster is associated
 * @method string getCreatedTime() Obtain Creation time
 * @method void setCreatedTime(string $CreatedTime) Set Creation time
 * @method string getPassword() Obtain Cluster password
 * @method void setPassword(string $Password) Set Cluster password
 * @method string getPasswordStatus() Obtain Password status
 * @method void setPasswordStatus(string $PasswordStatus) Set Password status
 * @method string getApiAccessId() Obtain TcaplusDB SDK connection parameter: access ID
 * @method void setApiAccessId(string $ApiAccessId) Set TcaplusDB SDK connection parameter: access ID
 * @method string getApiAccessIp() Obtain TcaplusDB SDK connection parameter: access address
 * @method void setApiAccessIp(string $ApiAccessIp) Set TcaplusDB SDK connection parameter: access address
 * @method integer getApiAccessPort() Obtain TcaplusDB SDK connection parameter: access port
 * @method void setApiAccessPort(integer $ApiAccessPort) Set TcaplusDB SDK connection parameter: access port
 * @method string getOldPasswordExpireTime() Obtain If `PasswordStatus` is `unmodifiable`, the old password has not expired, and this field will display its expiration time; otherwise, this field will be empty
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOldPasswordExpireTime(string $OldPasswordExpireTime) Set If `PasswordStatus` is `unmodifiable`, the old password has not expired, and this field will display its expiration time; otherwise, this field will be empty
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApiAccessIpv6() Obtain TcaplusDB SDK connection parameter for accessing IPv6 addresses
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiAccessIpv6(string $ApiAccessIpv6) Set TcaplusDB SDK connection parameter for accessing IPv6 addresses
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getClusterType() Obtain Cluster type. Valid values: `0` and `1` (shared cluster), `2` (dedicated cluster).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterType(integer $ClusterType) Set Cluster type. Valid values: `0` and `1` (shared cluster), `2` (dedicated cluster).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getClusterStatus() Obtain Cluster status. Valid values: `0` (Running), `1` (Isolated. This status is caused by overdue payments), `2` (To be repossessed. This status is caused when the cluster is actively deleted.),·`3` (To be released. The resources occupied by the table can be released in this status.), `4` (Modifying).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterStatus(integer $ClusterStatus) Set Cluster status. Valid values: `0` (Running), `1` (Isolated. This status is caused by overdue payments), `2` (To be repossessed. This status is caused when the cluster is actively deleted.),·`3` (To be released. The resources occupied by the table can be released in this status.), `4` (Modifying).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getReadCapacityUnit() Obtain Read CU
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setReadCapacityUnit(integer $ReadCapacityUnit) Set Read CU
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getWriteCapacityUnit() Obtain Write CU
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setWriteCapacityUnit(integer $WriteCapacityUnit) Set Write CU
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getDiskVolume() Obtain Disk capacity
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDiskVolume(integer $DiskVolume) Set Disk capacity
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getServerList() Obtain Information of the machine at the storage layer (tcapsvr) in a dedicated cluster
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setServerList(array $ServerList) Set Information of the machine at the storage layer (tcapsvr) in a dedicated cluster
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getProxyList() Obtain Information of the machine at the access layer (tcaproxy) in a dedicated cluster
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setProxyList(array $ProxyList) Set Information of the machine at the access layer (tcaproxy) in a dedicated cluster
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getCensorship() Obtain Whether the cluster operation approval feature is enabled. Valid values: `0` (disabled), `1` (enabled)
 * @method void setCensorship(integer $Censorship) Set Whether the cluster operation approval feature is enabled. Valid values: `0` (disabled), `1` (enabled)
 * @method array getDbaUins() Obtain Approver UIN list
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setDbaUins(array $DbaUins) Set Approver UIN list
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method integer getDataFlowStatus() Obtain Whether data subscription is enabled
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDataFlowStatus(integer $DataFlowStatus) Set Whether data subscription is enabled
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method KafkaInfo getKafkaInfo() Obtain CKafka information when data subscription is enabled
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setKafkaInfo(KafkaInfo $KafkaInfo) Set CKafka information when data subscription is enabled
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getTxhBackupExpireDay() Obtain The number of days after which the cluster Txh backup file will expire and be deleted.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTxhBackupExpireDay(integer $TxhBackupExpireDay) Set The number of days after which the cluster Txh backup file will expire and be deleted.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getUlogBackupExpireDay() Obtain The number of days after which the cluster Ulog backup file will expire and be deleted.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setUlogBackupExpireDay(integer $UlogBackupExpireDay) Set The number of days after which the cluster Ulog backup file will expire and be deleted.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getIsReadOnlyUlogBackupExpireDay() Obtain Whether the expiration policy of cluster Ulog backup file is read-only. `0`: Yes; `1`: No.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setIsReadOnlyUlogBackupExpireDay(integer $IsReadOnlyUlogBackupExpireDay) Set Whether the expiration policy of cluster Ulog backup file is read-only. `0`: Yes; `1`: No.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getRestProxyStatus() Obtain restproxy Status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRestProxyStatus(integer $RestProxyStatus) Set restproxy Status
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ClusterInfo extends AbstractModel
{
    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Cluster region
     */
    public $Region;

    /**
     * @var string Cluster data description language type, such as `PROTO`, `TDR`, or `MIX`
     */
    public $IdlType;

    /**
     * @var string Network type
     */
    public $NetworkType;

    /**
     * @var string ID of the VPC instance with which a cluster is associated
     */
    public $VpcId;

    /**
     * @var string ID of the subnet instance with which a cluster is associated
     */
    public $SubnetId;

    /**
     * @var string Creation time
     */
    public $CreatedTime;

    /**
     * @var string Cluster password
     */
    public $Password;

    /**
     * @var string Password status
     */
    public $PasswordStatus;

    /**
     * @var string TcaplusDB SDK connection parameter: access ID
     */
    public $ApiAccessId;

    /**
     * @var string TcaplusDB SDK connection parameter: access address
     */
    public $ApiAccessIp;

    /**
     * @var integer TcaplusDB SDK connection parameter: access port
     */
    public $ApiAccessPort;

    /**
     * @var string If `PasswordStatus` is `unmodifiable`, the old password has not expired, and this field will display its expiration time; otherwise, this field will be empty
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OldPasswordExpireTime;

    /**
     * @var string TcaplusDB SDK connection parameter for accessing IPv6 addresses
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiAccessIpv6;

    /**
     * @var integer Cluster type. Valid values: `0` and `1` (shared cluster), `2` (dedicated cluster).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterType;

    /**
     * @var integer Cluster status. Valid values: `0` (Running), `1` (Isolated. This status is caused by overdue payments), `2` (To be repossessed. This status is caused when the cluster is actively deleted.),·`3` (To be released. The resources occupied by the table can be released in this status.), `4` (Modifying).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterStatus;

    /**
     * @var integer Read CU
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ReadCapacityUnit;

    /**
     * @var integer Write CU
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $WriteCapacityUnit;

    /**
     * @var integer Disk capacity
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DiskVolume;

    /**
     * @var array Information of the machine at the storage layer (tcapsvr) in a dedicated cluster
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ServerList;

    /**
     * @var array Information of the machine at the access layer (tcaproxy) in a dedicated cluster
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ProxyList;

    /**
     * @var integer Whether the cluster operation approval feature is enabled. Valid values: `0` (disabled), `1` (enabled)
     */
    public $Censorship;

    /**
     * @var array Approver UIN list
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $DbaUins;

    /**
     * @var integer Whether data subscription is enabled
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DataFlowStatus;

    /**
     * @var KafkaInfo CKafka information when data subscription is enabled
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $KafkaInfo;

    /**
     * @var integer The number of days after which the cluster Txh backup file will expire and be deleted.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $TxhBackupExpireDay;

    /**
     * @var integer The number of days after which the cluster Ulog backup file will expire and be deleted.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $UlogBackupExpireDay;

    /**
     * @var integer Whether the expiration policy of cluster Ulog backup file is read-only. `0`: Yes; `1`: No.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $IsReadOnlyUlogBackupExpireDay;

    /**
     * @var integer restproxy Status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RestProxyStatus;

    /**
     * @param string $ClusterName Cluster name
     * @param string $ClusterId Cluster ID
     * @param string $Region Cluster region
     * @param string $IdlType Cluster data description language type, such as `PROTO`, `TDR`, or `MIX`
     * @param string $NetworkType Network type
     * @param string $VpcId ID of the VPC instance with which a cluster is associated
     * @param string $SubnetId ID of the subnet instance with which a cluster is associated
     * @param string $CreatedTime Creation time
     * @param string $Password Cluster password
     * @param string $PasswordStatus Password status
     * @param string $ApiAccessId TcaplusDB SDK connection parameter: access ID
     * @param string $ApiAccessIp TcaplusDB SDK connection parameter: access address
     * @param integer $ApiAccessPort TcaplusDB SDK connection parameter: access port
     * @param string $OldPasswordExpireTime If `PasswordStatus` is `unmodifiable`, the old password has not expired, and this field will display its expiration time; otherwise, this field will be empty
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApiAccessIpv6 TcaplusDB SDK connection parameter for accessing IPv6 addresses
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ClusterType Cluster type. Valid values: `0` and `1` (shared cluster), `2` (dedicated cluster).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ClusterStatus Cluster status. Valid values: `0` (Running), `1` (Isolated. This status is caused by overdue payments), `2` (To be repossessed. This status is caused when the cluster is actively deleted.),·`3` (To be released. The resources occupied by the table can be released in this status.), `4` (Modifying).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ReadCapacityUnit Read CU
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $WriteCapacityUnit Write CU
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $DiskVolume Disk capacity
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $ServerList Information of the machine at the storage layer (tcapsvr) in a dedicated cluster
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $ProxyList Information of the machine at the access layer (tcaproxy) in a dedicated cluster
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Censorship Whether the cluster operation approval feature is enabled. Valid values: `0` (disabled), `1` (enabled)
     * @param array $DbaUins Approver UIN list
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param integer $DataFlowStatus Whether data subscription is enabled
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param KafkaInfo $KafkaInfo CKafka information when data subscription is enabled
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $TxhBackupExpireDay The number of days after which the cluster Txh backup file will expire and be deleted.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $UlogBackupExpireDay The number of days after which the cluster Ulog backup file will expire and be deleted.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $IsReadOnlyUlogBackupExpireDay Whether the expiration policy of cluster Ulog backup file is read-only. `0`: Yes; `1`: No.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $RestProxyStatus restproxy Status
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
        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("IdlType",$param) and $param["IdlType"] !== null) {
            $this->IdlType = $param["IdlType"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("PasswordStatus",$param) and $param["PasswordStatus"] !== null) {
            $this->PasswordStatus = $param["PasswordStatus"];
        }

        if (array_key_exists("ApiAccessId",$param) and $param["ApiAccessId"] !== null) {
            $this->ApiAccessId = $param["ApiAccessId"];
        }

        if (array_key_exists("ApiAccessIp",$param) and $param["ApiAccessIp"] !== null) {
            $this->ApiAccessIp = $param["ApiAccessIp"];
        }

        if (array_key_exists("ApiAccessPort",$param) and $param["ApiAccessPort"] !== null) {
            $this->ApiAccessPort = $param["ApiAccessPort"];
        }

        if (array_key_exists("OldPasswordExpireTime",$param) and $param["OldPasswordExpireTime"] !== null) {
            $this->OldPasswordExpireTime = $param["OldPasswordExpireTime"];
        }

        if (array_key_exists("ApiAccessIpv6",$param) and $param["ApiAccessIpv6"] !== null) {
            $this->ApiAccessIpv6 = $param["ApiAccessIpv6"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("ReadCapacityUnit",$param) and $param["ReadCapacityUnit"] !== null) {
            $this->ReadCapacityUnit = $param["ReadCapacityUnit"];
        }

        if (array_key_exists("WriteCapacityUnit",$param) and $param["WriteCapacityUnit"] !== null) {
            $this->WriteCapacityUnit = $param["WriteCapacityUnit"];
        }

        if (array_key_exists("DiskVolume",$param) and $param["DiskVolume"] !== null) {
            $this->DiskVolume = $param["DiskVolume"];
        }

        if (array_key_exists("ServerList",$param) and $param["ServerList"] !== null) {
            $this->ServerList = [];
            foreach ($param["ServerList"] as $key => $value){
                $obj = new ServerDetailInfo();
                $obj->deserialize($value);
                array_push($this->ServerList, $obj);
            }
        }

        if (array_key_exists("ProxyList",$param) and $param["ProxyList"] !== null) {
            $this->ProxyList = [];
            foreach ($param["ProxyList"] as $key => $value){
                $obj = new ProxyDetailInfo();
                $obj->deserialize($value);
                array_push($this->ProxyList, $obj);
            }
        }

        if (array_key_exists("Censorship",$param) and $param["Censorship"] !== null) {
            $this->Censorship = $param["Censorship"];
        }

        if (array_key_exists("DbaUins",$param) and $param["DbaUins"] !== null) {
            $this->DbaUins = $param["DbaUins"];
        }

        if (array_key_exists("DataFlowStatus",$param) and $param["DataFlowStatus"] !== null) {
            $this->DataFlowStatus = $param["DataFlowStatus"];
        }

        if (array_key_exists("KafkaInfo",$param) and $param["KafkaInfo"] !== null) {
            $this->KafkaInfo = new KafkaInfo();
            $this->KafkaInfo->deserialize($param["KafkaInfo"]);
        }

        if (array_key_exists("TxhBackupExpireDay",$param) and $param["TxhBackupExpireDay"] !== null) {
            $this->TxhBackupExpireDay = $param["TxhBackupExpireDay"];
        }

        if (array_key_exists("UlogBackupExpireDay",$param) and $param["UlogBackupExpireDay"] !== null) {
            $this->UlogBackupExpireDay = $param["UlogBackupExpireDay"];
        }

        if (array_key_exists("IsReadOnlyUlogBackupExpireDay",$param) and $param["IsReadOnlyUlogBackupExpireDay"] !== null) {
            $this->IsReadOnlyUlogBackupExpireDay = $param["IsReadOnlyUlogBackupExpireDay"];
        }

        if (array_key_exists("RestProxyStatus",$param) and $param["RestProxyStatus"] !== null) {
            $this->RestProxyStatus = $param["RestProxyStatus"];
        }
    }
}
