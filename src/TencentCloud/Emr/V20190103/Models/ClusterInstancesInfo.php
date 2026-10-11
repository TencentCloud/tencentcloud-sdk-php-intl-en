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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster information.
 *
 * @method integer getId() Obtain <p>ID.</p>
 * @method void setId(integer $Id) Set <p>ID.</p>
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method string getFtitle() Obtain <p>Title.</p>
 * @method void setFtitle(string $Ftitle) Set <p>Title.</p>
 * @method string getClusterName() Obtain <p>Cluster name.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name.</p>
 * @method integer getRegionId() Obtain <p>Region ID.</p>
 * @method void setRegionId(integer $RegionId) Set <p>Region ID.</p>
 * @method integer getZoneId() Obtain <p>Region ID.</p>
 * @method void setZoneId(integer $ZoneId) Set <p>Region ID.</p>
 * @method integer getAppId() Obtain <p>User APPID.</p>
 * @method void setAppId(integer $AppId) Set <p>User APPID.</p>
 * @method string getUin() Obtain <p>User UIN.</p>
 * @method void setUin(string $Uin) Set <p>User UIN.</p>
 * @method integer getProjectId() Obtain <p>Project ID.</p>
 * @method void setProjectId(integer $ProjectId) Set <p>Project ID.</p>
 * @method integer getVpcId() Obtain <p>Cluster VPC ID.</p>
 * @method void setVpcId(integer $VpcId) Set <p>Cluster VPC ID.</p>
 * @method integer getSubnetId() Obtain <p>Subnet ID.</p>
 * @method void setSubnetId(integer $SubnetId) Set <p>Subnet ID.</p>
 * @method integer getStatus() Obtain <p>Status code of the instance. Valid values:</p><li>2: The cluster is running.</li><li>3: The cluster is being created.</li><li>4: The cluster is being scaled out.</li><li>5: Router nodes are being added to the cluster.</li><li>6: Components are being installed in the cluster.</li><li>7: The cluster is executing a command.</li><li>8: The service is being restarted.</li><li>9: The cluster is entering maintenance.</li><li>10: The service is being paused.</li><li>11: The cluster is exiting maintenance.</li><li>12: The cluster is exiting the pause status.</li><li>13: The configuration is being delivered.</li><li>14: The cluster is being terminated.</li><li>15: Core nodes are being terminated.</li><li>16: Task nodes are being terminated.</li><li>17: Router nodes are being terminated.</li><li>18: The webproxy password is being changed.</li><li>19: The cluster is being isolated.</li><li>20: The cluster is being reconciled.</li><li>21: The cluster is being reclaimed.</li><li>22: The configuration change is waiting.</li><li>23: The cluster has been isolated.</li><li>24: Nodes are being scaled in.</li><li>33: The cluster is waiting for a refund.</li><li>34: The cluster has been refunded.</li><li>301: Creation failed.</li><li>302: Scale-out failed.</li>
 * @method void setStatus(integer $Status) Set <p>Status code of the instance. Valid values:</p><li>2: The cluster is running.</li><li>3: The cluster is being created.</li><li>4: The cluster is being scaled out.</li><li>5: Router nodes are being added to the cluster.</li><li>6: Components are being installed in the cluster.</li><li>7: The cluster is executing a command.</li><li>8: The service is being restarted.</li><li>9: The cluster is entering maintenance.</li><li>10: The service is being paused.</li><li>11: The cluster is exiting maintenance.</li><li>12: The cluster is exiting the pause status.</li><li>13: The configuration is being delivered.</li><li>14: The cluster is being terminated.</li><li>15: Core nodes are being terminated.</li><li>16: Task nodes are being terminated.</li><li>17: Router nodes are being terminated.</li><li>18: The webproxy password is being changed.</li><li>19: The cluster is being isolated.</li><li>20: The cluster is being reconciled.</li><li>21: The cluster is being reclaimed.</li><li>22: The configuration change is waiting.</li><li>23: The cluster has been isolated.</li><li>24: Nodes are being scaled in.</li><li>33: The cluster is waiting for a refund.</li><li>34: The cluster has been refunded.</li><li>301: Creation failed.</li><li>302: Scale-out failed.</li>
 * @method string getAddTime() Obtain <p>Addition time.</p>
 * @method void setAddTime(string $AddTime) Set <p>Addition time.</p>
 * @method string getRunTime() Obtain <p>Execution duration.</p>
 * @method void setRunTime(string $RunTime) Set <p>Execution duration.</p>
 * @method EmrProductConfigOutter getConfig() Obtain <p>Cluster product configuration information.</p>
 * @method void setConfig(EmrProductConfigOutter $Config) Set <p>Cluster product configuration information.</p>
 * @method string getMasterIp() Obtain <p>Public IP address of the Master node.</p>
 * @method void setMasterIp(string $MasterIp) Set <p>Public IP address of the Master node.</p>
 * @method string getEmrVersion() Obtain <p>EMR version.</p>
 * @method void setEmrVersion(string $EmrVersion) Set <p>EMR version.</p>
 * @method integer getChargeType() Obtain <p>Billing mode.</p>
 * @method void setChargeType(integer $ChargeType) Set <p>Billing mode.</p>
 * @method integer getTradeVersion() Obtain <p>Transaction version.</p>
 * @method void setTradeVersion(integer $TradeVersion) Set <p>Transaction version.</p>
 * @method integer getResourceOrderId() Obtain <p>Resource order ID.</p>
 * @method void setResourceOrderId(integer $ResourceOrderId) Set <p>Resource order ID.</p>
 * @method integer getIsTradeCluster() Obtain <p>Whether it is a billable cluster.</p>
 * @method void setIsTradeCluster(integer $IsTradeCluster) Set <p>Whether it is a billable cluster.</p>
 * @method string getAlarmInfo() Obtain <p>Cluster error status alarm information.</p>
 * @method void setAlarmInfo(string $AlarmInfo) Set <p>Cluster error status alarm information.</p>
 * @method integer getIsWoodpeckerCluster() Obtain <p>Whether a new architecture is used.</p>
 * @method void setIsWoodpeckerCluster(integer $IsWoodpeckerCluster) Set <p>Whether a new architecture is used.</p>
 * @method string getMetaDb() Obtain <p>Meta database information.</p>
 * @method void setMetaDb(string $MetaDb) Set <p>Meta database information.</p>
 * @method array getTags() Obtain <p>Tag information.</p>
 * @method void setTags(array $Tags) Set <p>Tag information.</p>
 * @method string getHiveMetaDb() Obtain <p>Hive metadata information.</p>
 * @method void setHiveMetaDb(string $HiveMetaDb) Set <p>Hive metadata information.</p>
 * @method string getServiceClass() Obtain <p>Cluster type. Valid values: EMR, CLICKHOUSE, and DRUID.</p>
 * @method void setServiceClass(string $ServiceClass) Set <p>Cluster type. Valid values: EMR, CLICKHOUSE, and DRUID.</p>
 * @method string getAliasInfo() Obtain <p>Serialization of the aliases of all nodes in the cluster.</p>
 * @method void setAliasInfo(string $AliasInfo) Set <p>Serialization of the aliases of all nodes in the cluster.</p>
 * @method integer getProductId() Obtain <p>Cluster version ID.</p>
 * @method void setProductId(integer $ProductId) Set <p>Cluster version ID.</p>
 * @method string getZone() Obtain <p>Region ID.</p>
 * @method void setZone(string $Zone) Set <p>Region ID.</p>
 * @method string getSceneName() Obtain <p>Scenario name.</p>
 * @method void setSceneName(string $SceneName) Set <p>Scenario name.</p>
 * @method string getSceneServiceClass() Obtain <p>Scenario-based cluster type.</p>
 * @method void setSceneServiceClass(string $SceneServiceClass) Set <p>Scenario-based cluster type.</p>
 * @method string getSceneEmrVersion() Obtain <p>Scenario-based EMR version.</p>
 * @method void setSceneEmrVersion(string $SceneEmrVersion) Set <p>Scenario-based EMR version.</p>
 * @method string getDisplayName() Obtain <p>Scenario-based cluster type.</p>
 * @method void setDisplayName(string $DisplayName) Set <p>Scenario-based cluster type.</p>
 * @method string getVpcName() Obtain <p>vpc name</p>
 * @method void setVpcName(string $VpcName) Set <p>vpc name</p>
 * @method string getSubnetName() Obtain <p>subnet name</p>
 * @method void setSubnetName(string $SubnetName) Set <p>subnet name</p>
 * @method array getClusterExternalServiceInfo() Obtain <p>Cluster dependency.</p>
 * @method void setClusterExternalServiceInfo(array $ClusterExternalServiceInfo) Set <p>Cluster dependency.</p>
 * @method string getUniqVpcId() Obtain <p>Cluster VPC ID, string type.</p>
 * @method void setUniqVpcId(string $UniqVpcId) Set <p>Cluster VPC ID, string type.</p>
 * @method string getUniqSubnetId() Obtain <p>Subnet ID, string type.</p>
 * @method void setUniqSubnetId(string $UniqSubnetId) Set <p>Subnet ID, string type.</p>
 * @method array getTopologyInfoList() Obtain <p>Node information.</p>
 * @method void setTopologyInfoList(array $TopologyInfoList) Set <p>Node information.</p>
 * @method boolean getIsMultiZoneCluster() Obtain <p>Whether it is a cross-AZ cluster.</p>
 * @method void setIsMultiZoneCluster(boolean $IsMultiZoneCluster) Set <p>Whether it is a cross-AZ cluster.</p>
 * @method boolean getIsCvmReplace() Obtain <p>Whether automatic compensation for abnormal nodes is enabled.</p>
 * @method void setIsCvmReplace(boolean $IsCvmReplace) Set <p>Whether automatic compensation for abnormal nodes is enabled.</p>
 * @method string getClusterTitle() Obtain <p>Title.</p>
 * @method void setClusterTitle(string $ClusterTitle) Set <p>Title.</p>
 * @method EmrProductConfigDetail getConfigDetail() Obtain <p>Cluster product configuration information.</p>
 * @method void setConfigDetail(EmrProductConfigDetail $ConfigDetail) Set <p>Cluster product configuration information.</p>
 * @method integer getBindFileSystemNum() Obtain <p>Number of file systems bound to the cluster.</p>
 * @method void setBindFileSystemNum(integer $BindFileSystemNum) Set <p>Number of file systems bound to the cluster.</p>
 * @method array getClusterRelationInfoList() Obtain <p>Binding list of the RSS cluster.</p>
 * @method void setClusterRelationInfoList(array $ClusterRelationInfoList) Set <p>Binding list of the RSS cluster.</p>
 * @method string getRedisId() Obtain <p>Redis information.</p>
 * @method void setRedisId(string $RedisId) Set <p>Redis information.</p>
 * @method boolean getIsIOHungSelfRecovery() Obtain <p>Whether IO fault self-healing is enabled.</p>
 * @method void setIsIOHungSelfRecovery(boolean $IsIOHungSelfRecovery) Set <p>Whether IO fault self-healing is enabled.</p>
 * @method array getMetaDBGroupInfo() Obtain <p>Metadata information.</p>
 * @method void setMetaDBGroupInfo(array $MetaDBGroupInfo) Set <p>Metadata information.</p>
 */
class ClusterInstancesInfo extends AbstractModel
{
    /**
     * @var integer <p>ID.</p>
     */
    public $Id;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Title.</p>
     * @deprecated
     */
    public $Ftitle;

    /**
     * @var string <p>Cluster name.</p>
     */
    public $ClusterName;

    /**
     * @var integer <p>Region ID.</p>
     */
    public $RegionId;

    /**
     * @var integer <p>Region ID.</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>User APPID.</p>
     */
    public $AppId;

    /**
     * @var string <p>User UIN.</p>
     */
    public $Uin;

    /**
     * @var integer <p>Project ID.</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>Cluster VPC ID.</p>
     */
    public $VpcId;

    /**
     * @var integer <p>Subnet ID.</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>Status code of the instance. Valid values:</p><li>2: The cluster is running.</li><li>3: The cluster is being created.</li><li>4: The cluster is being scaled out.</li><li>5: Router nodes are being added to the cluster.</li><li>6: Components are being installed in the cluster.</li><li>7: The cluster is executing a command.</li><li>8: The service is being restarted.</li><li>9: The cluster is entering maintenance.</li><li>10: The service is being paused.</li><li>11: The cluster is exiting maintenance.</li><li>12: The cluster is exiting the pause status.</li><li>13: The configuration is being delivered.</li><li>14: The cluster is being terminated.</li><li>15: Core nodes are being terminated.</li><li>16: Task nodes are being terminated.</li><li>17: Router nodes are being terminated.</li><li>18: The webproxy password is being changed.</li><li>19: The cluster is being isolated.</li><li>20: The cluster is being reconciled.</li><li>21: The cluster is being reclaimed.</li><li>22: The configuration change is waiting.</li><li>23: The cluster has been isolated.</li><li>24: Nodes are being scaled in.</li><li>33: The cluster is waiting for a refund.</li><li>34: The cluster has been refunded.</li><li>301: Creation failed.</li><li>302: Scale-out failed.</li>
     */
    public $Status;

    /**
     * @var string <p>Addition time.</p>
     */
    public $AddTime;

    /**
     * @var string <p>Execution duration.</p>
     */
    public $RunTime;

    /**
     * @var EmrProductConfigOutter <p>Cluster product configuration information.</p>
     * @deprecated
     */
    public $Config;

    /**
     * @var string <p>Public IP address of the Master node.</p>
     */
    public $MasterIp;

    /**
     * @var string <p>EMR version.</p>
     */
    public $EmrVersion;

    /**
     * @var integer <p>Billing mode.</p>
     */
    public $ChargeType;

    /**
     * @var integer <p>Transaction version.</p>
     */
    public $TradeVersion;

    /**
     * @var integer <p>Resource order ID.</p>
     */
    public $ResourceOrderId;

    /**
     * @var integer <p>Whether it is a billable cluster.</p>
     */
    public $IsTradeCluster;

    /**
     * @var string <p>Cluster error status alarm information.</p>
     */
    public $AlarmInfo;

    /**
     * @var integer <p>Whether a new architecture is used.</p>
     */
    public $IsWoodpeckerCluster;

    /**
     * @var string <p>Meta database information.</p>
     */
    public $MetaDb;

    /**
     * @var array <p>Tag information.</p>
     */
    public $Tags;

    /**
     * @var string <p>Hive metadata information.</p>
     */
    public $HiveMetaDb;

    /**
     * @var string <p>Cluster type. Valid values: EMR, CLICKHOUSE, and DRUID.</p>
     */
    public $ServiceClass;

    /**
     * @var string <p>Serialization of the aliases of all nodes in the cluster.</p>
     */
    public $AliasInfo;

    /**
     * @var integer <p>Cluster version ID.</p>
     */
    public $ProductId;

    /**
     * @var string <p>Region ID.</p>
     */
    public $Zone;

    /**
     * @var string <p>Scenario name.</p>
     */
    public $SceneName;

    /**
     * @var string <p>Scenario-based cluster type.</p>
     */
    public $SceneServiceClass;

    /**
     * @var string <p>Scenario-based EMR version.</p>
     */
    public $SceneEmrVersion;

    /**
     * @var string <p>Scenario-based cluster type.</p>
     */
    public $DisplayName;

    /**
     * @var string <p>vpc name</p>
     */
    public $VpcName;

    /**
     * @var string <p>subnet name</p>
     */
    public $SubnetName;

    /**
     * @var array <p>Cluster dependency.</p>
     */
    public $ClusterExternalServiceInfo;

    /**
     * @var string <p>Cluster VPC ID, string type.</p>
     */
    public $UniqVpcId;

    /**
     * @var string <p>Subnet ID, string type.</p>
     */
    public $UniqSubnetId;

    /**
     * @var array <p>Node information.</p>
     */
    public $TopologyInfoList;

    /**
     * @var boolean <p>Whether it is a cross-AZ cluster.</p>
     */
    public $IsMultiZoneCluster;

    /**
     * @var boolean <p>Whether automatic compensation for abnormal nodes is enabled.</p>
     */
    public $IsCvmReplace;

    /**
     * @var string <p>Title.</p>
     */
    public $ClusterTitle;

    /**
     * @var EmrProductConfigDetail <p>Cluster product configuration information.</p>
     */
    public $ConfigDetail;

    /**
     * @var integer <p>Number of file systems bound to the cluster.</p>
     */
    public $BindFileSystemNum;

    /**
     * @var array <p>Binding list of the RSS cluster.</p>
     */
    public $ClusterRelationInfoList;

    /**
     * @var string <p>Redis information.</p>
     */
    public $RedisId;

    /**
     * @var boolean <p>Whether IO fault self-healing is enabled.</p>
     */
    public $IsIOHungSelfRecovery;

    /**
     * @var array <p>Metadata information.</p>
     */
    public $MetaDBGroupInfo;

    /**
     * @param integer $Id <p>ID.</p>
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param string $Ftitle <p>Title.</p>
     * @param string $ClusterName <p>Cluster name.</p>
     * @param integer $RegionId <p>Region ID.</p>
     * @param integer $ZoneId <p>Region ID.</p>
     * @param integer $AppId <p>User APPID.</p>
     * @param string $Uin <p>User UIN.</p>
     * @param integer $ProjectId <p>Project ID.</p>
     * @param integer $VpcId <p>Cluster VPC ID.</p>
     * @param integer $SubnetId <p>Subnet ID.</p>
     * @param integer $Status <p>Status code of the instance. Valid values:</p><li>2: The cluster is running.</li><li>3: The cluster is being created.</li><li>4: The cluster is being scaled out.</li><li>5: Router nodes are being added to the cluster.</li><li>6: Components are being installed in the cluster.</li><li>7: The cluster is executing a command.</li><li>8: The service is being restarted.</li><li>9: The cluster is entering maintenance.</li><li>10: The service is being paused.</li><li>11: The cluster is exiting maintenance.</li><li>12: The cluster is exiting the pause status.</li><li>13: The configuration is being delivered.</li><li>14: The cluster is being terminated.</li><li>15: Core nodes are being terminated.</li><li>16: Task nodes are being terminated.</li><li>17: Router nodes are being terminated.</li><li>18: The webproxy password is being changed.</li><li>19: The cluster is being isolated.</li><li>20: The cluster is being reconciled.</li><li>21: The cluster is being reclaimed.</li><li>22: The configuration change is waiting.</li><li>23: The cluster has been isolated.</li><li>24: Nodes are being scaled in.</li><li>33: The cluster is waiting for a refund.</li><li>34: The cluster has been refunded.</li><li>301: Creation failed.</li><li>302: Scale-out failed.</li>
     * @param string $AddTime <p>Addition time.</p>
     * @param string $RunTime <p>Execution duration.</p>
     * @param EmrProductConfigOutter $Config <p>Cluster product configuration information.</p>
     * @param string $MasterIp <p>Public IP address of the Master node.</p>
     * @param string $EmrVersion <p>EMR version.</p>
     * @param integer $ChargeType <p>Billing mode.</p>
     * @param integer $TradeVersion <p>Transaction version.</p>
     * @param integer $ResourceOrderId <p>Resource order ID.</p>
     * @param integer $IsTradeCluster <p>Whether it is a billable cluster.</p>
     * @param string $AlarmInfo <p>Cluster error status alarm information.</p>
     * @param integer $IsWoodpeckerCluster <p>Whether a new architecture is used.</p>
     * @param string $MetaDb <p>Meta database information.</p>
     * @param array $Tags <p>Tag information.</p>
     * @param string $HiveMetaDb <p>Hive metadata information.</p>
     * @param string $ServiceClass <p>Cluster type. Valid values: EMR, CLICKHOUSE, and DRUID.</p>
     * @param string $AliasInfo <p>Serialization of the aliases of all nodes in the cluster.</p>
     * @param integer $ProductId <p>Cluster version ID.</p>
     * @param string $Zone <p>Region ID.</p>
     * @param string $SceneName <p>Scenario name.</p>
     * @param string $SceneServiceClass <p>Scenario-based cluster type.</p>
     * @param string $SceneEmrVersion <p>Scenario-based EMR version.</p>
     * @param string $DisplayName <p>Scenario-based cluster type.</p>
     * @param string $VpcName <p>vpc name</p>
     * @param string $SubnetName <p>subnet name</p>
     * @param array $ClusterExternalServiceInfo <p>Cluster dependency.</p>
     * @param string $UniqVpcId <p>Cluster VPC ID, string type.</p>
     * @param string $UniqSubnetId <p>Subnet ID, string type.</p>
     * @param array $TopologyInfoList <p>Node information.</p>
     * @param boolean $IsMultiZoneCluster <p>Whether it is a cross-AZ cluster.</p>
     * @param boolean $IsCvmReplace <p>Whether automatic compensation for abnormal nodes is enabled.</p>
     * @param string $ClusterTitle <p>Title.</p>
     * @param EmrProductConfigDetail $ConfigDetail <p>Cluster product configuration information.</p>
     * @param integer $BindFileSystemNum <p>Number of file systems bound to the cluster.</p>
     * @param array $ClusterRelationInfoList <p>Binding list of the RSS cluster.</p>
     * @param string $RedisId <p>Redis information.</p>
     * @param boolean $IsIOHungSelfRecovery <p>Whether IO fault self-healing is enabled.</p>
     * @param array $MetaDBGroupInfo <p>Metadata information.</p>
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

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Ftitle",$param) and $param["Ftitle"] !== null) {
            $this->Ftitle = $param["Ftitle"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("RunTime",$param) and $param["RunTime"] !== null) {
            $this->RunTime = $param["RunTime"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new EmrProductConfigOutter();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("MasterIp",$param) and $param["MasterIp"] !== null) {
            $this->MasterIp = $param["MasterIp"];
        }

        if (array_key_exists("EmrVersion",$param) and $param["EmrVersion"] !== null) {
            $this->EmrVersion = $param["EmrVersion"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("TradeVersion",$param) and $param["TradeVersion"] !== null) {
            $this->TradeVersion = $param["TradeVersion"];
        }

        if (array_key_exists("ResourceOrderId",$param) and $param["ResourceOrderId"] !== null) {
            $this->ResourceOrderId = $param["ResourceOrderId"];
        }

        if (array_key_exists("IsTradeCluster",$param) and $param["IsTradeCluster"] !== null) {
            $this->IsTradeCluster = $param["IsTradeCluster"];
        }

        if (array_key_exists("AlarmInfo",$param) and $param["AlarmInfo"] !== null) {
            $this->AlarmInfo = $param["AlarmInfo"];
        }

        if (array_key_exists("IsWoodpeckerCluster",$param) and $param["IsWoodpeckerCluster"] !== null) {
            $this->IsWoodpeckerCluster = $param["IsWoodpeckerCluster"];
        }

        if (array_key_exists("MetaDb",$param) and $param["MetaDb"] !== null) {
            $this->MetaDb = $param["MetaDb"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("HiveMetaDb",$param) and $param["HiveMetaDb"] !== null) {
            $this->HiveMetaDb = $param["HiveMetaDb"];
        }

        if (array_key_exists("ServiceClass",$param) and $param["ServiceClass"] !== null) {
            $this->ServiceClass = $param["ServiceClass"];
        }

        if (array_key_exists("AliasInfo",$param) and $param["AliasInfo"] !== null) {
            $this->AliasInfo = $param["AliasInfo"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SceneName",$param) and $param["SceneName"] !== null) {
            $this->SceneName = $param["SceneName"];
        }

        if (array_key_exists("SceneServiceClass",$param) and $param["SceneServiceClass"] !== null) {
            $this->SceneServiceClass = $param["SceneServiceClass"];
        }

        if (array_key_exists("SceneEmrVersion",$param) and $param["SceneEmrVersion"] !== null) {
            $this->SceneEmrVersion = $param["SceneEmrVersion"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("ClusterExternalServiceInfo",$param) and $param["ClusterExternalServiceInfo"] !== null) {
            $this->ClusterExternalServiceInfo = [];
            foreach ($param["ClusterExternalServiceInfo"] as $key => $value){
                $obj = new ClusterExternalServiceInfo();
                $obj->deserialize($value);
                array_push($this->ClusterExternalServiceInfo, $obj);
            }
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("TopologyInfoList",$param) and $param["TopologyInfoList"] !== null) {
            $this->TopologyInfoList = [];
            foreach ($param["TopologyInfoList"] as $key => $value){
                $obj = new TopologyInfo();
                $obj->deserialize($value);
                array_push($this->TopologyInfoList, $obj);
            }
        }

        if (array_key_exists("IsMultiZoneCluster",$param) and $param["IsMultiZoneCluster"] !== null) {
            $this->IsMultiZoneCluster = $param["IsMultiZoneCluster"];
        }

        if (array_key_exists("IsCvmReplace",$param) and $param["IsCvmReplace"] !== null) {
            $this->IsCvmReplace = $param["IsCvmReplace"];
        }

        if (array_key_exists("ClusterTitle",$param) and $param["ClusterTitle"] !== null) {
            $this->ClusterTitle = $param["ClusterTitle"];
        }

        if (array_key_exists("ConfigDetail",$param) and $param["ConfigDetail"] !== null) {
            $this->ConfigDetail = new EmrProductConfigDetail();
            $this->ConfigDetail->deserialize($param["ConfigDetail"]);
        }

        if (array_key_exists("BindFileSystemNum",$param) and $param["BindFileSystemNum"] !== null) {
            $this->BindFileSystemNum = $param["BindFileSystemNum"];
        }

        if (array_key_exists("ClusterRelationInfoList",$param) and $param["ClusterRelationInfoList"] !== null) {
            $this->ClusterRelationInfoList = [];
            foreach ($param["ClusterRelationInfoList"] as $key => $value){
                $obj = new ClusterRelationMeta();
                $obj->deserialize($value);
                array_push($this->ClusterRelationInfoList, $obj);
            }
        }

        if (array_key_exists("RedisId",$param) and $param["RedisId"] !== null) {
            $this->RedisId = $param["RedisId"];
        }

        if (array_key_exists("IsIOHungSelfRecovery",$param) and $param["IsIOHungSelfRecovery"] !== null) {
            $this->IsIOHungSelfRecovery = $param["IsIOHungSelfRecovery"];
        }

        if (array_key_exists("MetaDBGroupInfo",$param) and $param["MetaDBGroupInfo"] !== null) {
            $this->MetaDBGroupInfo = [];
            foreach ($param["MetaDBGroupInfo"] as $key => $value){
                $obj = new CustomMetaDBInfo();
                $obj->deserialize($value);
                array_push($this->MetaDBGroupInfo, $obj);
            }
        }
    }
}
