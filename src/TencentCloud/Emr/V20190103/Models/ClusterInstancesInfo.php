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
 * Cluster instance information
 *
 * @method integer getId() Obtain ID.
 * @method void setId(integer $Id) Set ID.
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method string getFtitle() Obtain Title
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFtitle(string $Ftitle) Set Title
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getClusterName() Obtain Cluster name.
 * @method void setClusterName(string $ClusterName) Set Cluster name.
 * @method integer getRegionId() Obtain Region ID.
 * @method void setRegionId(integer $RegionId) Set Region ID.
 * @method integer getZoneId() Obtain Region ID.
 * @method void setZoneId(integer $ZoneId) Set Region ID.
 * @method integer getAppId() Obtain User AppID.
 * @method void setAppId(integer $AppId) Set User AppID.
 * @method string getUin() Obtain User UIN.
 * @method void setUin(string $Uin) Set User UIN.
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method integer getVpcId() Obtain Cluster VPCID.
 * @method void setVpcId(integer $VpcId) Set Cluster VPCID.
 * @method integer getSubnetId() Obtain Subnet ID.
 * @method void setSubnetId(integer $SubnetId) Set Subnet ID.
 * @method integer getStatus() Obtain Instance status code. Valid range:
<li>2: the cluster is running.</li>
<li>3: the cluster is being created.</li>
<li>4: the cluster is being scaled out.</li>
<li>5: Router nodes are being added to the cluster.</li>
<li>6: components are being installed in the cluster.</li>
<li>7: commands are being executed in the cluster.</li>
<li>8: the service is being restarted.</li>
<li>9: maintenance is in progress.</li>
<li>10: the service is being suspended.</li>
<li>11: the cluster is exiting maintenance.</li>
<li>12: the cluster is exiting suspension.</li>
<li>13: the configuration is being distributed.</li>
<li>14: the cluster is being terminated.</li>
<li>15: the Core node is being destroyed.</li>
<li>16: the Task node is being destroyed.</li>
<li>17: the Router node is being destroyed.</li>
<li>18: the web proxy password is being changed.</li>
<li>19: the cluster is being isolated.</li>
<li>20: the cluster is undergoing a reversal transaction.</li>
<li>21: the cluster is being recycled.</li>
<li>22: the instance is waiting for resizing.</li>
<li>23: the cluster has been isolated.</li>
<li>24: the number of nodes is being reduced.</li>
<li>33: the cluster is waiting for a refund.</li>
<li>34: the cluster has received a refund.</li>
<li>301: creation failed.</li>
<li>302: scale-out failed.</li>
 * @method void setStatus(integer $Status) Set Instance status code. Valid range:
<li>2: the cluster is running.</li>
<li>3: the cluster is being created.</li>
<li>4: the cluster is being scaled out.</li>
<li>5: Router nodes are being added to the cluster.</li>
<li>6: components are being installed in the cluster.</li>
<li>7: commands are being executed in the cluster.</li>
<li>8: the service is being restarted.</li>
<li>9: maintenance is in progress.</li>
<li>10: the service is being suspended.</li>
<li>11: the cluster is exiting maintenance.</li>
<li>12: the cluster is exiting suspension.</li>
<li>13: the configuration is being distributed.</li>
<li>14: the cluster is being terminated.</li>
<li>15: the Core node is being destroyed.</li>
<li>16: the Task node is being destroyed.</li>
<li>17: the Router node is being destroyed.</li>
<li>18: the web proxy password is being changed.</li>
<li>19: the cluster is being isolated.</li>
<li>20: the cluster is undergoing a reversal transaction.</li>
<li>21: the cluster is being recycled.</li>
<li>22: the instance is waiting for resizing.</li>
<li>23: the cluster has been isolated.</li>
<li>24: the number of nodes is being reduced.</li>
<li>33: the cluster is waiting for a refund.</li>
<li>34: the cluster has received a refund.</li>
<li>301: creation failed.</li>
<li>302: scale-out failed.</li>
 * @method string getAddTime() Obtain Adding time.
 * @method void setAddTime(string $AddTime) Set Adding time.
 * @method string getRunTime() Obtain Runtime.
 * @method void setRunTime(string $RunTime) Set Runtime.
 * @method EmrProductConfigOutter getConfig() Obtain Cluster product configuration information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setConfig(EmrProductConfigOutter $Config) Set Cluster product configuration information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMasterIp() Obtain Public network IP address of the primary node.
 * @method void setMasterIp(string $MasterIp) Set Public network IP address of the primary node.
 * @method string getEmrVersion() Obtain EMR version.
 * @method void setEmrVersion(string $EmrVersion) Set EMR version.
 * @method integer getChargeType() Obtain Charge type.
 * @method void setChargeType(integer $ChargeType) Set Charge type.
 * @method integer getTradeVersion() Obtain Transaction version.
 * @method void setTradeVersion(integer $TradeVersion) Set Transaction version.
 * @method integer getResourceOrderId() Obtain Resource order ID.
 * @method void setResourceOrderId(integer $ResourceOrderId) Set Resource order ID.
 * @method integer getIsTradeCluster() Obtain Whether it is a billing cluster.
 * @method void setIsTradeCluster(integer $IsTradeCluster) Set Whether it is a billing cluster.
 * @method string getAlarmInfo() Obtain Alarm information of cluster error status.
 * @method void setAlarmInfo(string $AlarmInfo) Set Alarm information of cluster error status.
 * @method integer getIsWoodpeckerCluster() Obtain Whether to adopt new architecture.
 * @method void setIsWoodpeckerCluster(integer $IsWoodpeckerCluster) Set Whether to adopt new architecture.
 * @method string getMetaDb() Obtain Metadatabase information.
 * @method void setMetaDb(string $MetaDb) Set Metadatabase information.
 * @method array getTags() Obtain Tag information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getHiveMetaDb() Obtain Hive metadata information.
 * @method void setHiveMetaDb(string $HiveMetaDb) Set Hive metadata information.
 * @method string getServiceClass() Obtain Cluster type: EMR,CLICKHOUSE,DRUID.
 * @method void setServiceClass(string $ServiceClass) Set Cluster type: EMR,CLICKHOUSE,DRUID.
 * @method string getAliasInfo() Obtain Alias serialization of all nodes in the cluster.
 * @method void setAliasInfo(string $AliasInfo) Set Alias serialization of all nodes in the cluster.
 * @method integer getProductId() Obtain Cluster version ID.
 * @method void setProductId(integer $ProductId) Set Cluster version ID.
 * @method string getZone() Obtain Region ID.
 * @method void setZone(string $Zone) Set Region ID.
 * @method string getSceneName() Obtain Scenario name.
 * @method void setSceneName(string $SceneName) Set Scenario name.
 * @method string getSceneServiceClass() Obtain Scenario-based cluster type.
 * @method void setSceneServiceClass(string $SceneServiceClass) Set Scenario-based cluster type.
 * @method string getSceneEmrVersion() Obtain Scenario-based EMR version.
 * @method void setSceneEmrVersion(string $SceneEmrVersion) Set Scenario-based EMR version.
 * @method string getDisplayName() Obtain Scenario-based cluster type.
 * @method void setDisplayName(string $DisplayName) Set Scenario-based cluster type.
 * @method string getVpcName() Obtain vpc name
 * @method void setVpcName(string $VpcName) Set vpc name
 * @method string getSubnetName() Obtain subnet name
 * @method void setSubnetName(string $SubnetName) Set subnet name
 * @method array getClusterExternalServiceInfo() Obtain Cluster dependency
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setClusterExternalServiceInfo(array $ClusterExternalServiceInfo) Set Cluster dependency
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getUniqVpcId() Obtain Cluster vpcid string type.
 * @method void setUniqVpcId(string $UniqVpcId) Set Cluster vpcid string type.
 * @method string getUniqSubnetId() Obtain Subnet ID string type.
 * @method void setUniqSubnetId(string $UniqSubnetId) Set Subnet ID string type.
 * @method array getTopologyInfoList() Obtain Node information
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTopologyInfoList(array $TopologyInfoList) Set Node information
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getIsMultiZoneCluster() Obtain Whether it is a cross-AZ cluster.
 * @method void setIsMultiZoneCluster(boolean $IsMultiZoneCluster) Set Whether it is a cross-AZ cluster.
 * @method boolean getIsCvmReplace() Obtain Whether to enable automatic compensation for abnormal nodes.
 * @method void setIsCvmReplace(boolean $IsCvmReplace) Set Whether to enable automatic compensation for abnormal nodes.
 * @method string getClusterTitle() Obtain Title.
 * @method void setClusterTitle(string $ClusterTitle) Set Title.
 * @method EmrProductConfigDetail getConfigDetail() Obtain Cluster product configuration information

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConfigDetail(EmrProductConfigDetail $ConfigDetail) Set Cluster product configuration information

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBindFileSystemNum() Obtain Number of file systems bound to a cluster.
 * @method void setBindFileSystemNum(integer $BindFileSystemNum) Set Number of file systems bound to a cluster.
 * @method array getClusterRelationInfoList() Obtain Bound list of the RSS cluster.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterRelationInfoList(array $ClusterRelationInfoList) Set Bound list of the RSS cluster.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRedisId() Obtain Redis information.
 * @method void setRedisId(string $RedisId) Set Redis information.
 */
class ClusterInstancesInfo extends AbstractModel
{
    /**
     * @var integer ID.
     */
    public $Id;

    /**
     * @var string Cluster ID.
     */
    public $ClusterId;

    /**
     * @var string Title
Note: this field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $Ftitle;

    /**
     * @var string Cluster name.
     */
    public $ClusterName;

    /**
     * @var integer Region ID.
     */
    public $RegionId;

    /**
     * @var integer Region ID.
     */
    public $ZoneId;

    /**
     * @var integer User AppID.
     */
    public $AppId;

    /**
     * @var string User UIN.
     */
    public $Uin;

    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var integer Cluster VPCID.
     */
    public $VpcId;

    /**
     * @var integer Subnet ID.
     */
    public $SubnetId;

    /**
     * @var integer Instance status code. Valid range:
<li>2: the cluster is running.</li>
<li>3: the cluster is being created.</li>
<li>4: the cluster is being scaled out.</li>
<li>5: Router nodes are being added to the cluster.</li>
<li>6: components are being installed in the cluster.</li>
<li>7: commands are being executed in the cluster.</li>
<li>8: the service is being restarted.</li>
<li>9: maintenance is in progress.</li>
<li>10: the service is being suspended.</li>
<li>11: the cluster is exiting maintenance.</li>
<li>12: the cluster is exiting suspension.</li>
<li>13: the configuration is being distributed.</li>
<li>14: the cluster is being terminated.</li>
<li>15: the Core node is being destroyed.</li>
<li>16: the Task node is being destroyed.</li>
<li>17: the Router node is being destroyed.</li>
<li>18: the web proxy password is being changed.</li>
<li>19: the cluster is being isolated.</li>
<li>20: the cluster is undergoing a reversal transaction.</li>
<li>21: the cluster is being recycled.</li>
<li>22: the instance is waiting for resizing.</li>
<li>23: the cluster has been isolated.</li>
<li>24: the number of nodes is being reduced.</li>
<li>33: the cluster is waiting for a refund.</li>
<li>34: the cluster has received a refund.</li>
<li>301: creation failed.</li>
<li>302: scale-out failed.</li>
     */
    public $Status;

    /**
     * @var string Adding time.
     */
    public $AddTime;

    /**
     * @var string Runtime.
     */
    public $RunTime;

    /**
     * @var EmrProductConfigOutter Cluster product configuration information
Note: this field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $Config;

    /**
     * @var string Public network IP address of the primary node.
     */
    public $MasterIp;

    /**
     * @var string EMR version.
     */
    public $EmrVersion;

    /**
     * @var integer Charge type.
     */
    public $ChargeType;

    /**
     * @var integer Transaction version.
     */
    public $TradeVersion;

    /**
     * @var integer Resource order ID.
     */
    public $ResourceOrderId;

    /**
     * @var integer Whether it is a billing cluster.
     */
    public $IsTradeCluster;

    /**
     * @var string Alarm information of cluster error status.
     */
    public $AlarmInfo;

    /**
     * @var integer Whether to adopt new architecture.
     */
    public $IsWoodpeckerCluster;

    /**
     * @var string Metadatabase information.
     */
    public $MetaDb;

    /**
     * @var array Tag information
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string Hive metadata information.
     */
    public $HiveMetaDb;

    /**
     * @var string Cluster type: EMR,CLICKHOUSE,DRUID.
     */
    public $ServiceClass;

    /**
     * @var string Alias serialization of all nodes in the cluster.
     */
    public $AliasInfo;

    /**
     * @var integer Cluster version ID.
     */
    public $ProductId;

    /**
     * @var string Region ID.
     */
    public $Zone;

    /**
     * @var string Scenario name.
     */
    public $SceneName;

    /**
     * @var string Scenario-based cluster type.
     */
    public $SceneServiceClass;

    /**
     * @var string Scenario-based EMR version.
     */
    public $SceneEmrVersion;

    /**
     * @var string Scenario-based cluster type.
     */
    public $DisplayName;

    /**
     * @var string vpc name
     */
    public $VpcName;

    /**
     * @var string subnet name
     */
    public $SubnetName;

    /**
     * @var array Cluster dependency
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ClusterExternalServiceInfo;

    /**
     * @var string Cluster vpcid string type.
     */
    public $UniqVpcId;

    /**
     * @var string Subnet ID string type.
     */
    public $UniqSubnetId;

    /**
     * @var array Node information
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $TopologyInfoList;

    /**
     * @var boolean Whether it is a cross-AZ cluster.
     */
    public $IsMultiZoneCluster;

    /**
     * @var boolean Whether to enable automatic compensation for abnormal nodes.
     */
    public $IsCvmReplace;

    /**
     * @var string Title.
     */
    public $ClusterTitle;

    /**
     * @var EmrProductConfigDetail Cluster product configuration information

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConfigDetail;

    /**
     * @var integer Number of file systems bound to a cluster.
     */
    public $BindFileSystemNum;

    /**
     * @var array Bound list of the RSS cluster.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterRelationInfoList;

    /**
     * @var string Redis information.
     */
    public $RedisId;

    /**
     * @param integer $Id ID.
     * @param string $ClusterId Cluster ID.
     * @param string $Ftitle Title
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterName Cluster name.
     * @param integer $RegionId Region ID.
     * @param integer $ZoneId Region ID.
     * @param integer $AppId User AppID.
     * @param string $Uin User UIN.
     * @param integer $ProjectId Project ID.
     * @param integer $VpcId Cluster VPCID.
     * @param integer $SubnetId Subnet ID.
     * @param integer $Status Instance status code. Valid range:
<li>2: the cluster is running.</li>
<li>3: the cluster is being created.</li>
<li>4: the cluster is being scaled out.</li>
<li>5: Router nodes are being added to the cluster.</li>
<li>6: components are being installed in the cluster.</li>
<li>7: commands are being executed in the cluster.</li>
<li>8: the service is being restarted.</li>
<li>9: maintenance is in progress.</li>
<li>10: the service is being suspended.</li>
<li>11: the cluster is exiting maintenance.</li>
<li>12: the cluster is exiting suspension.</li>
<li>13: the configuration is being distributed.</li>
<li>14: the cluster is being terminated.</li>
<li>15: the Core node is being destroyed.</li>
<li>16: the Task node is being destroyed.</li>
<li>17: the Router node is being destroyed.</li>
<li>18: the web proxy password is being changed.</li>
<li>19: the cluster is being isolated.</li>
<li>20: the cluster is undergoing a reversal transaction.</li>
<li>21: the cluster is being recycled.</li>
<li>22: the instance is waiting for resizing.</li>
<li>23: the cluster has been isolated.</li>
<li>24: the number of nodes is being reduced.</li>
<li>33: the cluster is waiting for a refund.</li>
<li>34: the cluster has received a refund.</li>
<li>301: creation failed.</li>
<li>302: scale-out failed.</li>
     * @param string $AddTime Adding time.
     * @param string $RunTime Runtime.
     * @param EmrProductConfigOutter $Config Cluster product configuration information
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $MasterIp Public network IP address of the primary node.
     * @param string $EmrVersion EMR version.
     * @param integer $ChargeType Charge type.
     * @param integer $TradeVersion Transaction version.
     * @param integer $ResourceOrderId Resource order ID.
     * @param integer $IsTradeCluster Whether it is a billing cluster.
     * @param string $AlarmInfo Alarm information of cluster error status.
     * @param integer $IsWoodpeckerCluster Whether to adopt new architecture.
     * @param string $MetaDb Metadatabase information.
     * @param array $Tags Tag information
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $HiveMetaDb Hive metadata information.
     * @param string $ServiceClass Cluster type: EMR,CLICKHOUSE,DRUID.
     * @param string $AliasInfo Alias serialization of all nodes in the cluster.
     * @param integer $ProductId Cluster version ID.
     * @param string $Zone Region ID.
     * @param string $SceneName Scenario name.
     * @param string $SceneServiceClass Scenario-based cluster type.
     * @param string $SceneEmrVersion Scenario-based EMR version.
     * @param string $DisplayName Scenario-based cluster type.
     * @param string $VpcName vpc name
     * @param string $SubnetName subnet name
     * @param array $ClusterExternalServiceInfo Cluster dependency
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $UniqVpcId Cluster vpcid string type.
     * @param string $UniqSubnetId Subnet ID string type.
     * @param array $TopologyInfoList Node information
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $IsMultiZoneCluster Whether it is a cross-AZ cluster.
     * @param boolean $IsCvmReplace Whether to enable automatic compensation for abnormal nodes.
     * @param string $ClusterTitle Title.
     * @param EmrProductConfigDetail $ConfigDetail Cluster product configuration information

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BindFileSystemNum Number of file systems bound to a cluster.
     * @param array $ClusterRelationInfoList Bound list of the RSS cluster.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RedisId Redis information.
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
    }
}
