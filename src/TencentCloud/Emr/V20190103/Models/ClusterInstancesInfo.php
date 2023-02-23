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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster instance information
 *
 * @method integer getId() Obtain ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setId(integer $Id) Set ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getClusterId() Obtain Cluster ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClusterId(string $ClusterId) Set Cluster ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFtitle() Obtain Title
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFtitle(string $Ftitle) Set Title
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getClusterName() Obtain Cluster name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClusterName(string $ClusterName) Set Cluster name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getRegionId() Obtain Region ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRegionId(integer $RegionId) Set Region ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getZoneId() Obtain Region ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setZoneId(integer $ZoneId) Set Region ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getAppId() Obtain User APPID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAppId(integer $AppId) Set User APPID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUin() Obtain User UIN
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUin(string $Uin) Set User UIN
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getProjectId() Obtain Project ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(integer $ProjectId) Set Project ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getVpcId() Obtain Cluster `VPCID`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(integer $VpcId) Set Cluster `VPCID`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSubnetId() Obtain Subnet ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSubnetId(integer $SubnetId) Set Subnet ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Instance status code. Value range:
<li>2: cluster running</li>
<li>3: creating cluster.</li>
<li>4: scaling out cluster.</li>
<li>5: adding router node in cluster.</li>
<li>6: installing component in cluster.</li>
<li>7: cluster executing command.</li>
<li>8: restarting service.</li>
<li>9: entering maintenance.</li>
<li>10: suspending service.</li>
<li>11: exiting maintenance.</li>
<li>12: exiting suspension.</li>
<li>13: delivering configuration.</li>
<li>14: terminating cluster.</li>
<li>15: terminating core node.</li>
<li>16: terminating task node.</li>
<li>17: terminating router node.</li>
<li>18: changing webproxy password.</li>
<li>19: isolating cluster.</li>
<li>20: resuming cluster.</li>
<li>21: repossessing cluster.</li>
<li>22: waiting for configuration adjustment.</li>
<li>23: cluster isolated.</li>
<li>24: removing node.</li>
<li>33: waiting for refund.</li>
<li>34: refunded.</li>
<li>301: creation failed.</li>
<li>302: scale-out failed.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Instance status code. Value range:
<li>2: cluster running</li>
<li>3: creating cluster.</li>
<li>4: scaling out cluster.</li>
<li>5: adding router node in cluster.</li>
<li>6: installing component in cluster.</li>
<li>7: cluster executing command.</li>
<li>8: restarting service.</li>
<li>9: entering maintenance.</li>
<li>10: suspending service.</li>
<li>11: exiting maintenance.</li>
<li>12: exiting suspension.</li>
<li>13: delivering configuration.</li>
<li>14: terminating cluster.</li>
<li>15: terminating core node.</li>
<li>16: terminating task node.</li>
<li>17: terminating router node.</li>
<li>18: changing webproxy password.</li>
<li>19: isolating cluster.</li>
<li>20: resuming cluster.</li>
<li>21: repossessing cluster.</li>
<li>22: waiting for configuration adjustment.</li>
<li>23: cluster isolated.</li>
<li>24: removing node.</li>
<li>33: waiting for refund.</li>
<li>34: refunded.</li>
<li>301: creation failed.</li>
<li>302: scale-out failed.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAddTime() Obtain Creation time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAddTime(string $AddTime) Set Creation time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRunTime() Obtain Execution duration
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRunTime(string $RunTime) Set Execution duration
Note: this field may return null, indicating that no valid values can be obtained.
 * @method EmrProductConfigOutter getConfig() Obtain Cluster product configuration information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setConfig(EmrProductConfigOutter $Config) Set Cluster product configuration information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMasterIp() Obtain Public IP of master node
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMasterIp(string $MasterIp) Set Public IP of master node
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getEmrVersion() Obtain EMR version
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEmrVersion(string $EmrVersion) Set EMR version
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getChargeType() Obtain Billing mode
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setChargeType(integer $ChargeType) Set Billing mode
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTradeVersion() Obtain Transaction version
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTradeVersion(integer $TradeVersion) Set Transaction version
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getResourceOrderId() Obtain Resource order ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setResourceOrderId(integer $ResourceOrderId) Set Resource order ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getIsTradeCluster() Obtain Whether this is a paid cluster
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsTradeCluster(integer $IsTradeCluster) Set Whether this is a paid cluster
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAlarmInfo() Obtain Alarm information for cluster error
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAlarmInfo(string $AlarmInfo) Set Alarm information for cluster error
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getIsWoodpeckerCluster() Obtain Whether the new architecture is used
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsWoodpeckerCluster(integer $IsWoodpeckerCluster) Set Whether the new architecture is used
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMetaDb() Obtain Metadatabase information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMetaDb(string $MetaDb) Set Metadatabase information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getHiveMetaDb() Obtain Hive metadata
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHiveMetaDb(string $HiveMetaDb) Set Hive metadata
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceClass() Obtain Cluster type: EMR, CLICKHOUSE, DRUID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceClass(string $ServiceClass) Set Cluster type: EMR, CLICKHOUSE, DRUID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAliasInfo() Obtain Alias serialization of all nodes in cluster
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAliasInfo(string $AliasInfo) Set Alias serialization of all nodes in cluster
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getProductId() Obtain Cluster version ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProductId(integer $ProductId) Set Cluster version ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getZone() Obtain Availability zone
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setZone(string $Zone) Set Availability zone
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method string getSceneName() Obtain Scenario name
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setSceneName(string $SceneName) Set Scenario name
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getSceneServiceClass() Obtain Scenario-based cluster type
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setSceneServiceClass(string $SceneServiceClass) Set Scenario-based cluster type
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getSceneEmrVersion() Obtain Scenario-based EMR version
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setSceneEmrVersion(string $SceneEmrVersion) Set Scenario-based EMR version
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getDisplayName() Obtain Scenario-based cluster type
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setDisplayName(string $DisplayName) Set Scenario-based cluster type
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getVpcName() Obtain VPC name
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setVpcName(string $VpcName) Set VPC name
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getSubnetName() Obtain Subnet name
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setSubnetName(string $SubnetName) Set Subnet name
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getClusterExternalServiceInfo() Obtain Cluster dependency
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setClusterExternalServiceInfo(array $ClusterExternalServiceInfo) Set Cluster dependency
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getUniqVpcId() Obtain The VPC ID string type of the cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setUniqVpcId(string $UniqVpcId) Set The VPC ID string type of the cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getUniqSubnetId() Obtain The subnet ID string type of the cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setUniqSubnetId(string $UniqSubnetId) Set The subnet ID string type of the cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getTopologyInfoList() Obtain Node information
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTopologyInfoList(array $TopologyInfoList) Set Node information
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getIsMultiZoneCluster() Obtain Multi-AZ cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setIsMultiZoneCluster(boolean $IsMultiZoneCluster) Set Multi-AZ cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getIsCvmReplace() Obtain Whether the feature of automatic abnormal node replacement is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsCvmReplace(boolean $IsCvmReplace) Set Whether the feature of automatic abnormal node replacement is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ClusterInstancesInfo extends AbstractModel
{
    /**
     * @var integer ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var string Cluster ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterId;

    /**
     * @var string Title
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Ftitle;

    /**
     * @var string Cluster name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterName;

    /**
     * @var integer Region ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RegionId;

    /**
     * @var integer Region ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneId;

    /**
     * @var integer User APPID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @var string User UIN
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Uin;

    /**
     * @var integer Project ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var integer Cluster `VPCID`
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var integer Subnet ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var integer Instance status code. Value range:
<li>2: cluster running</li>
<li>3: creating cluster.</li>
<li>4: scaling out cluster.</li>
<li>5: adding router node in cluster.</li>
<li>6: installing component in cluster.</li>
<li>7: cluster executing command.</li>
<li>8: restarting service.</li>
<li>9: entering maintenance.</li>
<li>10: suspending service.</li>
<li>11: exiting maintenance.</li>
<li>12: exiting suspension.</li>
<li>13: delivering configuration.</li>
<li>14: terminating cluster.</li>
<li>15: terminating core node.</li>
<li>16: terminating task node.</li>
<li>17: terminating router node.</li>
<li>18: changing webproxy password.</li>
<li>19: isolating cluster.</li>
<li>20: resuming cluster.</li>
<li>21: repossessing cluster.</li>
<li>22: waiting for configuration adjustment.</li>
<li>23: cluster isolated.</li>
<li>24: removing node.</li>
<li>33: waiting for refund.</li>
<li>34: refunded.</li>
<li>301: creation failed.</li>
<li>302: scale-out failed.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Creation time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AddTime;

    /**
     * @var string Execution duration
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RunTime;

    /**
     * @var EmrProductConfigOutter Cluster product configuration information
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Config;

    /**
     * @var string Public IP of master node
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MasterIp;

    /**
     * @var string EMR version
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EmrVersion;

    /**
     * @var integer Billing mode
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ChargeType;

    /**
     * @var integer Transaction version
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TradeVersion;

    /**
     * @var integer Resource order ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceOrderId;

    /**
     * @var integer Whether this is a paid cluster
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsTradeCluster;

    /**
     * @var string Alarm information for cluster error
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AlarmInfo;

    /**
     * @var integer Whether the new architecture is used
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsWoodpeckerCluster;

    /**
     * @var string Metadatabase information
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MetaDb;

    /**
     * @var array Tag information
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string Hive metadata
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $HiveMetaDb;

    /**
     * @var string Cluster type: EMR, CLICKHOUSE, DRUID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceClass;

    /**
     * @var string Alias serialization of all nodes in cluster
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AliasInfo;

    /**
     * @var integer Cluster version ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProductId;

    /**
     * @var string Availability zone
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $Zone;

    /**
     * @var string Scenario name
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $SceneName;

    /**
     * @var string Scenario-based cluster type
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $SceneServiceClass;

    /**
     * @var string Scenario-based EMR version
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $SceneEmrVersion;

    /**
     * @var string Scenario-based cluster type
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $DisplayName;

    /**
     * @var string VPC name
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $VpcName;

    /**
     * @var string Subnet name
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $SubnetName;

    /**
     * @var array Cluster dependency
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ClusterExternalServiceInfo;

    /**
     * @var string The VPC ID string type of the cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $UniqVpcId;

    /**
     * @var string The subnet ID string type of the cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $UniqSubnetId;

    /**
     * @var array Node information
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $TopologyInfoList;

    /**
     * @var boolean Multi-AZ cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $IsMultiZoneCluster;

    /**
     * @var boolean Whether the feature of automatic abnormal node replacement is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsCvmReplace;

    /**
     * @param integer $Id ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterId Cluster ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Ftitle Title
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterName Cluster name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $RegionId Region ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ZoneId Region ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $AppId User APPID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Uin User UIN
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ProjectId Project ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $VpcId Cluster `VPCID`
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SubnetId Subnet ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Instance status code. Value range:
<li>2: cluster running</li>
<li>3: creating cluster.</li>
<li>4: scaling out cluster.</li>
<li>5: adding router node in cluster.</li>
<li>6: installing component in cluster.</li>
<li>7: cluster executing command.</li>
<li>8: restarting service.</li>
<li>9: entering maintenance.</li>
<li>10: suspending service.</li>
<li>11: exiting maintenance.</li>
<li>12: exiting suspension.</li>
<li>13: delivering configuration.</li>
<li>14: terminating cluster.</li>
<li>15: terminating core node.</li>
<li>16: terminating task node.</li>
<li>17: terminating router node.</li>
<li>18: changing webproxy password.</li>
<li>19: isolating cluster.</li>
<li>20: resuming cluster.</li>
<li>21: repossessing cluster.</li>
<li>22: waiting for configuration adjustment.</li>
<li>23: cluster isolated.</li>
<li>24: removing node.</li>
<li>33: waiting for refund.</li>
<li>34: refunded.</li>
<li>301: creation failed.</li>
<li>302: scale-out failed.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AddTime Creation time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RunTime Execution duration
Note: this field may return null, indicating that no valid values can be obtained.
     * @param EmrProductConfigOutter $Config Cluster product configuration information
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $MasterIp Public IP of master node
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $EmrVersion EMR version
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ChargeType Billing mode
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TradeVersion Transaction version
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ResourceOrderId Resource order ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $IsTradeCluster Whether this is a paid cluster
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AlarmInfo Alarm information for cluster error
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $IsWoodpeckerCluster Whether the new architecture is used
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $MetaDb Metadatabase information
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag information
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $HiveMetaDb Hive metadata
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceClass Cluster type: EMR, CLICKHOUSE, DRUID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AliasInfo Alias serialization of all nodes in cluster
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ProductId Cluster version ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Zone Availability zone
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param string $SceneName Scenario name
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $SceneServiceClass Scenario-based cluster type
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $SceneEmrVersion Scenario-based EMR version
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $DisplayName Scenario-based cluster type
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $VpcName VPC name
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $SubnetName Subnet name
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $ClusterExternalServiceInfo Cluster dependency
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $UniqVpcId The VPC ID string type of the cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $UniqSubnetId The subnet ID string type of the cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $TopologyInfoList Node information
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $IsMultiZoneCluster Multi-AZ cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $IsCvmReplace Whether the feature of automatic abnormal node replacement is enabled.
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
    }
}
