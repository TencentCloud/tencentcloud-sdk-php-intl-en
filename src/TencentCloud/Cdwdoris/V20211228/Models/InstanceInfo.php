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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance description information
 *
 * @method string getInstanceId() Obtain Cluster instance ID, "cdw-xxxx" string type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Cluster instance ID, "cdw-xxxx" string type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceName() Obtain Cluster instance name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set Cluster instance name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Status,
Init is being created. Serving is running. 
Deleted indicates the cluster has been terminated. Deleting indicates the cluster is being terminated.
Modify indicates the cluster is being changed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Status,
Init is being created. Serving is running. 
Deleted indicates the cluster has been terminated. Deleting indicates the cluster is being terminated.
Modify indicates the cluster is being changed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVersion() Obtain Version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersion(string $Version) Set Version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Region, ap-guangzhou
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region, ap-guangzhou
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZone() Obtain Availability zone, ap-guangzhou-3
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZone(string $Zone) Set Availability zone, ap-guangzhou-3
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain VPC name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set VPC name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain Subnet name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set Subnet name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPayMode() Obtain Payment type: hour and prepay
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayMode(string $PayMode) Set Payment type: hour and prepay
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpireTime() Obtain Expiration time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpireTime(string $ExpireTime) Set Expiration time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method NodesSummary getMasterSummary() Obtain Data node description information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMasterSummary(NodesSummary $MasterSummary) Set Data node description information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method NodesSummary getCoreSummary() Obtain Zookeeper node description information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCoreSummary(NodesSummary $CoreSummary) Set Zookeeper node description information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHA() Obtain High availability, being true or false
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHA(string $HA) Set High availability, being true or false
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHaType() Obtain High availability type:
0: non-high availability
1: read high availability
2: read-write high availability
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHaType(integer $HaType) Set High availability type:
0: non-high availability
1: read high availability
2: read-write high availability
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAccessInfo() Obtain Access address. Example: 10.0.0.1:9000
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccessInfo(string $AccessInfo) Set Access address. Example: 10.0.0.1:9000
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getId() Obtain Record ID, in numerical type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(integer $Id) Set Record ID, in numerical type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRegionId() Obtain Region ID, indicating the region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionId(integer $RegionId) Set Region ID, indicating the region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZoneDesc() Obtain Note about availability zone, such as Guangzhou Zone 2
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneDesc(string $ZoneDesc) Set Note about availability zone, such as Guangzhou Zone 2
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFlowMsg() Obtain Error process description information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFlowMsg(string $FlowMsg) Set Error process description information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatusDesc() Obtain Status description, such as "running"
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatusDesc(string $StatusDesc) Set Status description, such as "running"
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getRenewFlag() Obtain Automatic renewal marker
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRenewFlag(boolean $RenewFlag) Set Automatic renewal marker
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMonitor() Obtain Monitoring Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMonitor(string $Monitor) Set Monitoring Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getHasClsTopic() Obtain Whether to enable logs.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHasClsTopic(boolean $HasClsTopic) Set Whether to enable logs.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClsTopicId() Obtain Log Topic ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClsTopicId(string $ClsTopicId) Set Log Topic ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClsLogSetId() Obtain Logset ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClsLogSetId(string $ClsLogSetId) Set Logset ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEnableXMLConfig() Obtain Whether to support XML configuration management.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnableXMLConfig(integer $EnableXMLConfig) Set Whether to support XML configuration management.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegionDesc() Obtain Region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionDesc(string $RegionDesc) Set Region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEip() Obtain Elastic network interface address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEip(string $Eip) Set Elastic network interface address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCosMoveFactor() Obtain Cold and hot stratification coefficient
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCosMoveFactor(integer $CosMoveFactor) Set Cold and hot stratification coefficient
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getKind() Obtain external/local/yunti
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKind(string $Kind) Set external/local/yunti
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCosBucketName() Obtain COS bucket
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCosBucketName(string $CosBucketName) Set COS bucket
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getCanAttachCbs() Obtain cbs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCanAttachCbs(boolean $CanAttachCbs) Set cbs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBuildVersion() Obtain Minor versions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBuildVersion(string $BuildVersion) Set Minor versions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getComponents() Obtain Component Information
Note: The return type here is map[string]struct, not the string type displayed. You can refer to "Sample Value" to parse the data.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComponents(string $Components) Set Component Information
Note: The return type here is map[string]struct, not the string type displayed. You can refer to "Sample Value" to parse the data.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIfExistCatalog() Obtain Determine whether the audit log table has a catalog field.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIfExistCatalog(integer $IfExistCatalog) Set Determine whether the audit log table has a catalog field.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCharacteristic() Obtain Page features, used to block some page entrances on the front end.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCharacteristic(array $Characteristic) Set Page features, used to block some page entrances on the front end.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRestartTimeout() Obtain Timeout period, in seconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRestartTimeout(string $RestartTimeout) Set Timeout period, in seconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGraceShutdownWaitSeconds() Obtain The timeout time for the graceful restart of the kernel. If it is -1, it means it is not set.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGraceShutdownWaitSeconds(string $GraceShutdownWaitSeconds) Set The timeout time for the graceful restart of the kernel. If it is -1, it means it is not set.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCaseSensitive() Obtain Whether the table name is case sensitive, 0 refers to sensitive, 1 refers to insensitive, compared in lowercase; 2 refers to insensitive, and the table name is changed to lowercase for storage.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCaseSensitive(integer $CaseSensitive) Set Whether the table name is case sensitive, 0 refers to sensitive, 1 refers to insensitive, compared in lowercase; 2 refers to insensitive, and the table name is changed to lowercase for storage.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsWhiteSGs() Obtain Whether users can bind security groups.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsWhiteSGs(boolean $IsWhiteSGs) Set Whether users can bind security groups.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getBindSGs() Obtain Bound security group information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBindSGs(array $BindSGs) Set Bound security group information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getEnableMultiZones() Obtain Whether it is a multi-AZ.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnableMultiZones(boolean $EnableMultiZones) Set Whether it is a multi-AZ.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserNetworkInfos() Obtain User availability zone and subnet information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserNetworkInfos(string $UserNetworkInfos) Set User availability zone and subnet information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEnableCoolDown() Obtain Whether to enable hot and cold stratification. 0 refers to disabled, and 1 refers to enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnableCoolDown(integer $EnableCoolDown) Set Whether to enable hot and cold stratification. 0 refers to disabled, and 1 refers to enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCoolDownBucket() Obtain COS buckets are used for hot and cold stratification
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCoolDownBucket(string $CoolDownBucket) Set COS buckets are used for hot and cold stratification
Note: This field may return null, indicating that no valid values can be obtained.
 * @method InstanceDetail getDetails() Obtain Instance extension information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetails(InstanceDetail $Details) Set Instance extension information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEnableDlc() Obtain Whether to enable DLC. 0: disable; 1: enable.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnableDlc(integer $EnableDlc) Set Whether to enable DLC. 0: disable; 1: enable.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAccountType() Obtain Account type. 0: ordinary user; 1: CAM user.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccountType(integer $AccountType) Set Account type. 0: ordinary user; 1: CAM user.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string Cluster instance ID, "cdw-xxxx" string type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Cluster instance name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var string Status,
Init is being created. Serving is running. 
Deleted indicates the cluster has been terminated. Deleting indicates the cluster is being terminated.
Modify indicates the cluster is being changed.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @var string Region, ap-guangzhou
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string Availability zone, ap-guangzhou-3
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Zone;

    /**
     * @var string VPC name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string Subnet name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var string Payment type: hour and prepay
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayMode;

    /**
     * @var string Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Expiration time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireTime;

    /**
     * @var NodesSummary Data node description information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MasterSummary;

    /**
     * @var NodesSummary Zookeeper node description information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CoreSummary;

    /**
     * @var string High availability, being true or false
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HA;

    /**
     * @var integer High availability type:
0: non-high availability
1: read high availability
2: read-write high availability
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HaType;

    /**
     * @var string Access address. Example: 10.0.0.1:9000
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccessInfo;

    /**
     * @var integer Record ID, in numerical type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var integer Region ID, indicating the region
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionId;

    /**
     * @var string Note about availability zone, such as Guangzhou Zone 2
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneDesc;

    /**
     * @var string Error process description information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FlowMsg;

    /**
     * @var string Status description, such as "running"
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StatusDesc;

    /**
     * @var boolean Automatic renewal marker
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RenewFlag;

    /**
     * @var array Tag list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string Monitoring Information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Monitor;

    /**
     * @var boolean Whether to enable logs.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HasClsTopic;

    /**
     * @var string Log Topic ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClsTopicId;

    /**
     * @var string Logset ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClsLogSetId;

    /**
     * @var integer Whether to support XML configuration management.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnableXMLConfig;

    /**
     * @var string Region
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionDesc;

    /**
     * @var string Elastic network interface address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Eip;

    /**
     * @var integer Cold and hot stratification coefficient
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CosMoveFactor;

    /**
     * @var string external/local/yunti
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Kind;

    /**
     * @var string COS bucket
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CosBucketName;

    /**
     * @var boolean cbs
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CanAttachCbs;

    /**
     * @var string Minor versions
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BuildVersion;

    /**
     * @var string Component Information
Note: The return type here is map[string]struct, not the string type displayed. You can refer to "Sample Value" to parse the data.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Components;

    /**
     * @var integer Determine whether the audit log table has a catalog field.
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $IfExistCatalog;

    /**
     * @var array Page features, used to block some page entrances on the front end.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Characteristic;

    /**
     * @var string Timeout period, in seconds
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RestartTimeout;

    /**
     * @var string The timeout time for the graceful restart of the kernel. If it is -1, it means it is not set.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GraceShutdownWaitSeconds;

    /**
     * @var integer Whether the table name is case sensitive, 0 refers to sensitive, 1 refers to insensitive, compared in lowercase; 2 refers to insensitive, and the table name is changed to lowercase for storage.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CaseSensitive;

    /**
     * @var boolean Whether users can bind security groups.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsWhiteSGs;

    /**
     * @var array Bound security group information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BindSGs;

    /**
     * @var boolean Whether it is a multi-AZ.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnableMultiZones;

    /**
     * @var string User availability zone and subnet information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserNetworkInfos;

    /**
     * @var integer Whether to enable hot and cold stratification. 0 refers to disabled, and 1 refers to enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnableCoolDown;

    /**
     * @var string COS buckets are used for hot and cold stratification
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CoolDownBucket;

    /**
     * @var InstanceDetail Instance extension information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Details;

    /**
     * @var integer Whether to enable DLC. 0: disable; 1: enable.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnableDlc;

    /**
     * @var integer Account type. 0: ordinary user; 1: CAM user.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccountType;

    /**
     * @param string $InstanceId Cluster instance ID, "cdw-xxxx" string type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceName Cluster instance name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Status,
Init is being created. Serving is running. 
Deleted indicates the cluster has been terminated. Deleting indicates the cluster is being terminated.
Modify indicates the cluster is being changed.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Version Version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region Region, ap-guangzhou
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Zone Availability zone, ap-guangzhou-3
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcId VPC name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubnetId Subnet name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PayMode Payment type: hour and prepay
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpireTime Expiration time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param NodesSummary $MasterSummary Data node description information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param NodesSummary $CoreSummary Zookeeper node description information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HA High availability, being true or false
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $HaType High availability type:
0: non-high availability
1: read high availability
2: read-write high availability
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AccessInfo Access address. Example: 10.0.0.1:9000
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Id Record ID, in numerical type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RegionId Region ID, indicating the region
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ZoneDesc Note about availability zone, such as Guangzhou Zone 2
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FlowMsg Error process description information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StatusDesc Status description, such as "running"
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $RenewFlag Automatic renewal marker
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Monitor Monitoring Information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $HasClsTopic Whether to enable logs.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClsTopicId Log Topic ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClsLogSetId Logset ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EnableXMLConfig Whether to support XML configuration management.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegionDesc Region
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Eip Elastic network interface address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CosMoveFactor Cold and hot stratification coefficient
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Kind external/local/yunti
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CosBucketName COS bucket
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $CanAttachCbs cbs
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BuildVersion Minor versions
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Components Component Information
Note: The return type here is map[string]struct, not the string type displayed. You can refer to "Sample Value" to parse the data.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IfExistCatalog Determine whether the audit log table has a catalog field.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Characteristic Page features, used to block some page entrances on the front end.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RestartTimeout Timeout period, in seconds
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GraceShutdownWaitSeconds The timeout time for the graceful restart of the kernel. If it is -1, it means it is not set.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CaseSensitive Whether the table name is case sensitive, 0 refers to sensitive, 1 refers to insensitive, compared in lowercase; 2 refers to insensitive, and the table name is changed to lowercase for storage.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsWhiteSGs Whether users can bind security groups.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $BindSGs Bound security group information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $EnableMultiZones Whether it is a multi-AZ.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserNetworkInfos User availability zone and subnet information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EnableCoolDown Whether to enable hot and cold stratification. 0 refers to disabled, and 1 refers to enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CoolDownBucket COS buckets are used for hot and cold stratification
Note: This field may return null, indicating that no valid values can be obtained.
     * @param InstanceDetail $Details Instance extension information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EnableDlc Whether to enable DLC. 0: disable; 1: enable.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AccountType Account type. 0: ordinary user; 1: CAM user.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
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

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("MasterSummary",$param) and $param["MasterSummary"] !== null) {
            $this->MasterSummary = new NodesSummary();
            $this->MasterSummary->deserialize($param["MasterSummary"]);
        }

        if (array_key_exists("CoreSummary",$param) and $param["CoreSummary"] !== null) {
            $this->CoreSummary = new NodesSummary();
            $this->CoreSummary->deserialize($param["CoreSummary"]);
        }

        if (array_key_exists("HA",$param) and $param["HA"] !== null) {
            $this->HA = $param["HA"];
        }

        if (array_key_exists("HaType",$param) and $param["HaType"] !== null) {
            $this->HaType = $param["HaType"];
        }

        if (array_key_exists("AccessInfo",$param) and $param["AccessInfo"] !== null) {
            $this->AccessInfo = $param["AccessInfo"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneDesc",$param) and $param["ZoneDesc"] !== null) {
            $this->ZoneDesc = $param["ZoneDesc"];
        }

        if (array_key_exists("FlowMsg",$param) and $param["FlowMsg"] !== null) {
            $this->FlowMsg = $param["FlowMsg"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Monitor",$param) and $param["Monitor"] !== null) {
            $this->Monitor = $param["Monitor"];
        }

        if (array_key_exists("HasClsTopic",$param) and $param["HasClsTopic"] !== null) {
            $this->HasClsTopic = $param["HasClsTopic"];
        }

        if (array_key_exists("ClsTopicId",$param) and $param["ClsTopicId"] !== null) {
            $this->ClsTopicId = $param["ClsTopicId"];
        }

        if (array_key_exists("ClsLogSetId",$param) and $param["ClsLogSetId"] !== null) {
            $this->ClsLogSetId = $param["ClsLogSetId"];
        }

        if (array_key_exists("EnableXMLConfig",$param) and $param["EnableXMLConfig"] !== null) {
            $this->EnableXMLConfig = $param["EnableXMLConfig"];
        }

        if (array_key_exists("RegionDesc",$param) and $param["RegionDesc"] !== null) {
            $this->RegionDesc = $param["RegionDesc"];
        }

        if (array_key_exists("Eip",$param) and $param["Eip"] !== null) {
            $this->Eip = $param["Eip"];
        }

        if (array_key_exists("CosMoveFactor",$param) and $param["CosMoveFactor"] !== null) {
            $this->CosMoveFactor = $param["CosMoveFactor"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }

        if (array_key_exists("CanAttachCbs",$param) and $param["CanAttachCbs"] !== null) {
            $this->CanAttachCbs = $param["CanAttachCbs"];
        }

        if (array_key_exists("BuildVersion",$param) and $param["BuildVersion"] !== null) {
            $this->BuildVersion = $param["BuildVersion"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = $param["Components"];
        }

        if (array_key_exists("IfExistCatalog",$param) and $param["IfExistCatalog"] !== null) {
            $this->IfExistCatalog = $param["IfExistCatalog"];
        }

        if (array_key_exists("Characteristic",$param) and $param["Characteristic"] !== null) {
            $this->Characteristic = $param["Characteristic"];
        }

        if (array_key_exists("RestartTimeout",$param) and $param["RestartTimeout"] !== null) {
            $this->RestartTimeout = $param["RestartTimeout"];
        }

        if (array_key_exists("GraceShutdownWaitSeconds",$param) and $param["GraceShutdownWaitSeconds"] !== null) {
            $this->GraceShutdownWaitSeconds = $param["GraceShutdownWaitSeconds"];
        }

        if (array_key_exists("CaseSensitive",$param) and $param["CaseSensitive"] !== null) {
            $this->CaseSensitive = $param["CaseSensitive"];
        }

        if (array_key_exists("IsWhiteSGs",$param) and $param["IsWhiteSGs"] !== null) {
            $this->IsWhiteSGs = $param["IsWhiteSGs"];
        }

        if (array_key_exists("BindSGs",$param) and $param["BindSGs"] !== null) {
            $this->BindSGs = $param["BindSGs"];
        }

        if (array_key_exists("EnableMultiZones",$param) and $param["EnableMultiZones"] !== null) {
            $this->EnableMultiZones = $param["EnableMultiZones"];
        }

        if (array_key_exists("UserNetworkInfos",$param) and $param["UserNetworkInfos"] !== null) {
            $this->UserNetworkInfos = $param["UserNetworkInfos"];
        }

        if (array_key_exists("EnableCoolDown",$param) and $param["EnableCoolDown"] !== null) {
            $this->EnableCoolDown = $param["EnableCoolDown"];
        }

        if (array_key_exists("CoolDownBucket",$param) and $param["CoolDownBucket"] !== null) {
            $this->CoolDownBucket = $param["CoolDownBucket"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = new InstanceDetail();
            $this->Details->deserialize($param["Details"]);
        }

        if (array_key_exists("EnableDlc",$param) and $param["EnableDlc"] !== null) {
            $this->EnableDlc = $param["EnableDlc"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }
    }
}
