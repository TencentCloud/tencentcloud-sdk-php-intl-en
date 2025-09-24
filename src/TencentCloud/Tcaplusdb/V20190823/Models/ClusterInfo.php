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
 * @method string getOldPasswordExpireTime() Obtain If the value of PasswordStatus is unmodifiable, it indicates that the old password has not expired. This field will display the expiration time of the old password; otherwise, the value is null.
 * @method void setOldPasswordExpireTime(string $OldPasswordExpireTime) Set If the value of PasswordStatus is unmodifiable, it indicates that the old password has not expired. This field will display the expiration time of the old password; otherwise, the value is null.
 * @method string getApiAccessIpv6() Obtain TencentDB for TcaplusDB (TcaplusDB) SDK connection parameters, which are used to access the IPv6 address.
 * @method void setApiAccessIpv6(string $ApiAccessIpv6) Set TencentDB for TcaplusDB (TcaplusDB) SDK connection parameters, which are used to access the IPv6 address.
 * @method integer getClusterType() Obtain Cluster type. 0,1: shared cluster; 2: independent cluster.
 * @method void setClusterType(integer $ClusterType) Set Cluster type. 0,1: shared cluster; 2: independent cluster.
 * @method integer getClusterStatus() Obtain Cluster status. 0: indicates normal operation; 1: indicates frozen isolation (usually due to arrears); 2: indicates to be recycled (usually when the user proactively triggers deletion); 3: pending release (indicating that resources occupied by this table can be released); 4: changing.
 * @method void setClusterStatus(integer $ClusterStatus) Set Cluster status. 0: indicates normal operation; 1: indicates frozen isolation (usually due to arrears); 2: indicates to be recycled (usually when the user proactively triggers deletion); 3: pending release (indicating that resources occupied by this table can be released); 4: changing.
 * @method integer getReadCapacityUnit() Obtain Read CU.
 * @method void setReadCapacityUnit(integer $ReadCapacityUnit) Set Read CU.
 * @method integer getWriteCapacityUnit() Obtain Write CU.
 * @method void setWriteCapacityUnit(integer $WriteCapacityUnit) Set Write CU.
 * @method integer getDiskVolume() Obtain Disk capacity.
 * @method void setDiskVolume(integer $DiskVolume) Set Disk capacity.
 * @method array getServerList() Obtain Information about the dedicated server.
 * @method void setServerList(array $ServerList) Set Information about the dedicated server.
 * @method array getProxyList() Obtain Information about the dedicated proxy server.
 * @method void setProxyList(array $ProxyList) Set Information about the dedicated proxy server.
 * @method integer getCensorship() Obtain Whether the cluster operation approval feature is enabled. Valid values: `0` (disabled), `1` (enabled)
 * @method void setCensorship(integer $Censorship) Set Whether the cluster operation approval feature is enabled. Valid values: `0` (disabled), `1` (enabled)
 * @method array getDbaUins() Obtain Approver UIN list.
 * @method void setDbaUins(array $DbaUins) Set Approver UIN list.
 * @method integer getDataFlowStatus() Obtain Whether data subscription is enabled.
 * @method void setDataFlowStatus(integer $DataFlowStatus) Set Whether data subscription is enabled.
 * @method KafkaInfo getKafkaInfo() Obtain Kafka information for data subscription.
 * @method void setKafkaInfo(KafkaInfo $KafkaInfo) Set Kafka information for data subscription.
 * @method integer getTxhBackupExpireDay() Obtain Retention period for the Txh backup file of the cluster before expiration and deletion.
 * @method void setTxhBackupExpireDay(integer $TxhBackupExpireDay) Set Retention period for the Txh backup file of the cluster before expiration and deletion.
 * @method integer getUlogBackupExpireDay() Obtain Retention period for the Ulog backup file of the cluster before expiration and deletion.
 * @method void setUlogBackupExpireDay(integer $UlogBackupExpireDay) Set Retention period for the Ulog backup file of the cluster before expiration and deletion.
 * @method integer getIsReadOnlyUlogBackupExpireDay() Obtain Whether the expiration policy for the Ulog backup file of the cluster is read-only. 0: UlogBackupExpire is read-only and cannot be modified; 1: UlogBackupExpire can be modified.
 * @method void setIsReadOnlyUlogBackupExpireDay(integer $IsReadOnlyUlogBackupExpireDay) Set Whether the expiration policy for the Ulog backup file of the cluster is read-only. 0: UlogBackupExpire is read-only and cannot be modified; 1: UlogBackupExpire can be modified.
 * @method integer getRestProxyStatus() Obtain restproxy status.
 * @method void setRestProxyStatus(integer $RestProxyStatus) Set restproxy status.
 * @method integer getShardTotalNum() Obtain Total number of shards in the cluster.
 * @method void setShardTotalNum(integer $ShardTotalNum) Set Total number of shards in the cluster.
 * @method integer getShardUsedNum() Obtain Total number of used shards.
 * @method void setShardUsedNum(integer $ShardUsedNum) Set Total number of used shards.
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
     * @var string If the value of PasswordStatus is unmodifiable, it indicates that the old password has not expired. This field will display the expiration time of the old password; otherwise, the value is null.
     */
    public $OldPasswordExpireTime;

    /**
     * @var string TencentDB for TcaplusDB (TcaplusDB) SDK connection parameters, which are used to access the IPv6 address.
     */
    public $ApiAccessIpv6;

    /**
     * @var integer Cluster type. 0,1: shared cluster; 2: independent cluster.
     */
    public $ClusterType;

    /**
     * @var integer Cluster status. 0: indicates normal operation; 1: indicates frozen isolation (usually due to arrears); 2: indicates to be recycled (usually when the user proactively triggers deletion); 3: pending release (indicating that resources occupied by this table can be released); 4: changing.
     */
    public $ClusterStatus;

    /**
     * @var integer Read CU.
     */
    public $ReadCapacityUnit;

    /**
     * @var integer Write CU.
     */
    public $WriteCapacityUnit;

    /**
     * @var integer Disk capacity.
     */
    public $DiskVolume;

    /**
     * @var array Information about the dedicated server.
     */
    public $ServerList;

    /**
     * @var array Information about the dedicated proxy server.
     */
    public $ProxyList;

    /**
     * @var integer Whether the cluster operation approval feature is enabled. Valid values: `0` (disabled), `1` (enabled)
     */
    public $Censorship;

    /**
     * @var array Approver UIN list.
     */
    public $DbaUins;

    /**
     * @var integer Whether data subscription is enabled.
     */
    public $DataFlowStatus;

    /**
     * @var KafkaInfo Kafka information for data subscription.
     */
    public $KafkaInfo;

    /**
     * @var integer Retention period for the Txh backup file of the cluster before expiration and deletion.
     */
    public $TxhBackupExpireDay;

    /**
     * @var integer Retention period for the Ulog backup file of the cluster before expiration and deletion.
     */
    public $UlogBackupExpireDay;

    /**
     * @var integer Whether the expiration policy for the Ulog backup file of the cluster is read-only. 0: UlogBackupExpire is read-only and cannot be modified; 1: UlogBackupExpire can be modified.
     */
    public $IsReadOnlyUlogBackupExpireDay;

    /**
     * @var integer restproxy status.
     */
    public $RestProxyStatus;

    /**
     * @var integer Total number of shards in the cluster.
     */
    public $ShardTotalNum;

    /**
     * @var integer Total number of used shards.
     */
    public $ShardUsedNum;

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
     * @param string $OldPasswordExpireTime If the value of PasswordStatus is unmodifiable, it indicates that the old password has not expired. This field will display the expiration time of the old password; otherwise, the value is null.
     * @param string $ApiAccessIpv6 TencentDB for TcaplusDB (TcaplusDB) SDK connection parameters, which are used to access the IPv6 address.
     * @param integer $ClusterType Cluster type. 0,1: shared cluster; 2: independent cluster.
     * @param integer $ClusterStatus Cluster status. 0: indicates normal operation; 1: indicates frozen isolation (usually due to arrears); 2: indicates to be recycled (usually when the user proactively triggers deletion); 3: pending release (indicating that resources occupied by this table can be released); 4: changing.
     * @param integer $ReadCapacityUnit Read CU.
     * @param integer $WriteCapacityUnit Write CU.
     * @param integer $DiskVolume Disk capacity.
     * @param array $ServerList Information about the dedicated server.
     * @param array $ProxyList Information about the dedicated proxy server.
     * @param integer $Censorship Whether the cluster operation approval feature is enabled. Valid values: `0` (disabled), `1` (enabled)
     * @param array $DbaUins Approver UIN list.
     * @param integer $DataFlowStatus Whether data subscription is enabled.
     * @param KafkaInfo $KafkaInfo Kafka information for data subscription.
     * @param integer $TxhBackupExpireDay Retention period for the Txh backup file of the cluster before expiration and deletion.
     * @param integer $UlogBackupExpireDay Retention period for the Ulog backup file of the cluster before expiration and deletion.
     * @param integer $IsReadOnlyUlogBackupExpireDay Whether the expiration policy for the Ulog backup file of the cluster is read-only. 0: UlogBackupExpire is read-only and cannot be modified; 1: UlogBackupExpire can be modified.
     * @param integer $RestProxyStatus restproxy status.
     * @param integer $ShardTotalNum Total number of shards in the cluster.
     * @param integer $ShardUsedNum Total number of used shards.
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

        if (array_key_exists("ShardTotalNum",$param) and $param["ShardTotalNum"] !== null) {
            $this->ShardTotalNum = $param["ShardTotalNum"];
        }

        if (array_key_exists("ShardUsedNum",$param) and $param["ShardUsedNum"] !== null) {
            $this->ShardUsedNum = $param["ShardUsedNum"];
        }
    }
}
