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
 * Returned cluster list sample
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getStatusDesc() Obtain Status description
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setStatusDesc(string $StatusDesc) Set Status description
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method integer getZoneId() Obtain Cluster region
 * @method void setZoneId(integer $ZoneId) Set Cluster region
 * @method integer getAppId() Obtain User APPID
 * @method void setAppId(integer $AppId) Set User APPID
 * @method string getAddTime() Obtain Creation time
 * @method void setAddTime(string $AddTime) Set Creation time
 * @method string getRunTime() Obtain Running time
 * @method void setRunTime(string $RunTime) Set Running time
 * @method string getMasterIp() Obtain Cluster IP
 * @method void setMasterIp(string $MasterIp) Set Cluster IP
 * @method string getEmrVersion() Obtain Cluster version
 * @method void setEmrVersion(string $EmrVersion) Set Cluster version
 * @method integer getChargeType() Obtain Cluster billing mode
 * @method void setChargeType(integer $ChargeType) Set Cluster billing mode
 * @method integer getId() Obtain EMR ID
 * @method void setId(integer $Id) Set EMR ID
 * @method integer getProductId() Obtain Product ID
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setProductId(integer $ProductId) Set Product ID
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getProjectId() Obtain Project ID
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setProjectId(integer $ProjectId) Set Project ID
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getRegionId() Obtain Region
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRegionId(integer $RegionId) Set Region
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getSubnetId() Obtain Subnet ID
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSubnetId(integer $SubnetId) Set Subnet ID
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getVpcId() Obtain VPC ID
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setVpcId(integer $VpcId) Set VPC ID
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getZone() Obtain Region
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setZone(string $Zone) Set Region
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getStatus() Obtain Status code
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setStatus(integer $Status) Set Status code
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getTags() Obtain Instance tag
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setTags(array $Tags) Set Instance tag
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getAlarmInfo() Obtain Alarm information
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAlarmInfo(string $AlarmInfo) Set Alarm information
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getIsWoodpeckerCluster() Obtain Whether it is a Woodpecker cluster
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIsWoodpeckerCluster(integer $IsWoodpeckerCluster) Set Whether it is a Woodpecker cluster
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getVpcName() Obtain VPC name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setVpcName(string $VpcName) Set VPC name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getSubnetName() Obtain Subnet name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSubnetName(string $SubnetName) Set Subnet name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getUniqVpcId() Obtain VPC ID string
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setUniqVpcId(string $UniqVpcId) Set VPC ID string
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getUniqSubnetId() Obtain Subnet ID string
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setUniqSubnetId(string $UniqSubnetId) Set Subnet ID string
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getClusterClass() Obtain Cluster type
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setClusterClass(string $ClusterClass) Set Cluster type
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method boolean getIsMultiZoneCluster() Obtain Whether it is a multi-AZ cluster
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIsMultiZoneCluster(boolean $IsMultiZoneCluster) Set Whether it is a multi-AZ cluster
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method boolean getIsHandsCluster() Obtain Whether it is a manually deployed cluster
Note: This field may return null, indicating that no valid value can be obtained. 
 * @method void setIsHandsCluster(boolean $IsHandsCluster) Set Whether it is a manually deployed cluster
Note: This field may return null, indicating that no valid value can be obtained. 
 * @method array getOutSideSoftInfo() Obtain Client component information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutSideSoftInfo(array $OutSideSoftInfo) Set Client component information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsSupportOutsideCluster() Obtain Whether the current cluster supports external clients.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsSupportOutsideCluster(boolean $IsSupportOutsideCluster) Set Whether the current cluster supports external clients.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class EmrListInstance extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Status description
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $StatusDesc;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var integer Cluster region
     */
    public $ZoneId;

    /**
     * @var integer User APPID
     */
    public $AppId;

    /**
     * @var string Creation time
     */
    public $AddTime;

    /**
     * @var string Running time
     */
    public $RunTime;

    /**
     * @var string Cluster IP
     */
    public $MasterIp;

    /**
     * @var string Cluster version
     */
    public $EmrVersion;

    /**
     * @var integer Cluster billing mode
     */
    public $ChargeType;

    /**
     * @var integer EMR ID
     */
    public $Id;

    /**
     * @var integer Product ID
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ProductId;

    /**
     * @var integer Project ID
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ProjectId;

    /**
     * @var integer Region
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RegionId;

    /**
     * @var integer Subnet ID
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $SubnetId;

    /**
     * @var integer VPC ID
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $VpcId;

    /**
     * @var string Region
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Zone;

    /**
     * @var integer Status code
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @var array Instance tag
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Tags;

    /**
     * @var string Alarm information
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $AlarmInfo;

    /**
     * @var integer Whether it is a Woodpecker cluster
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IsWoodpeckerCluster;

    /**
     * @var string VPC name
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $VpcName;

    /**
     * @var string Subnet name
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $SubnetName;

    /**
     * @var string VPC ID string
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $UniqVpcId;

    /**
     * @var string Subnet ID string
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $UniqSubnetId;

    /**
     * @var string Cluster type
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ClusterClass;

    /**
     * @var boolean Whether it is a multi-AZ cluster
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IsMultiZoneCluster;

    /**
     * @var boolean Whether it is a manually deployed cluster
Note: This field may return null, indicating that no valid value can be obtained. 
     */
    public $IsHandsCluster;

    /**
     * @var array Client component information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OutSideSoftInfo;

    /**
     * @var boolean Whether the current cluster supports external clients.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsSupportOutsideCluster;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $StatusDesc Status description
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ClusterName Cluster name
     * @param integer $ZoneId Cluster region
     * @param integer $AppId User APPID
     * @param string $AddTime Creation time
     * @param string $RunTime Running time
     * @param string $MasterIp Cluster IP
     * @param string $EmrVersion Cluster version
     * @param integer $ChargeType Cluster billing mode
     * @param integer $Id EMR ID
     * @param integer $ProductId Product ID
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $ProjectId Project ID
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $RegionId Region
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $SubnetId Subnet ID
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $VpcId VPC ID
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Zone Region
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $Status Status code
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $Tags Instance tag
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $AlarmInfo Alarm information
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $IsWoodpeckerCluster Whether it is a Woodpecker cluster
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $VpcName VPC name
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $SubnetName Subnet name
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $UniqVpcId VPC ID string
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $UniqSubnetId Subnet ID string
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ClusterClass Cluster type
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param boolean $IsMultiZoneCluster Whether it is a multi-AZ cluster
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param boolean $IsHandsCluster Whether it is a manually deployed cluster
Note: This field may return null, indicating that no valid value can be obtained. 
     * @param array $OutSideSoftInfo Client component information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsSupportOutsideCluster Whether the current cluster supports external clients.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("RunTime",$param) and $param["RunTime"] !== null) {
            $this->RunTime = $param["RunTime"];
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AlarmInfo",$param) and $param["AlarmInfo"] !== null) {
            $this->AlarmInfo = $param["AlarmInfo"];
        }

        if (array_key_exists("IsWoodpeckerCluster",$param) and $param["IsWoodpeckerCluster"] !== null) {
            $this->IsWoodpeckerCluster = $param["IsWoodpeckerCluster"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("ClusterClass",$param) and $param["ClusterClass"] !== null) {
            $this->ClusterClass = $param["ClusterClass"];
        }

        if (array_key_exists("IsMultiZoneCluster",$param) and $param["IsMultiZoneCluster"] !== null) {
            $this->IsMultiZoneCluster = $param["IsMultiZoneCluster"];
        }

        if (array_key_exists("IsHandsCluster",$param) and $param["IsHandsCluster"] !== null) {
            $this->IsHandsCluster = $param["IsHandsCluster"];
        }

        if (array_key_exists("OutSideSoftInfo",$param) and $param["OutSideSoftInfo"] !== null) {
            $this->OutSideSoftInfo = [];
            foreach ($param["OutSideSoftInfo"] as $key => $value){
                $obj = new SoftDependInfo();
                $obj->deserialize($value);
                array_push($this->OutSideSoftInfo, $obj);
            }
        }

        if (array_key_exists("IsSupportOutsideCluster",$param) and $param["IsSupportOutsideCluster"] !== null) {
            $this->IsSupportOutsideCluster = $param["IsSupportOutsideCluster"];
        }
    }
}
