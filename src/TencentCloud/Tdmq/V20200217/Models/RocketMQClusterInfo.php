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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RocketMQ cluster's basic information
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getRegion() Obtain Region information
 * @method void setRegion(string $Region) Set Region information
 * @method integer getCreateTime() Obtain Creation time in milliseconds
 * @method void setCreateTime(integer $CreateTime) Set Creation time in milliseconds
 * @method string getRemark() Obtain Cluster remarks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Cluster remarks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPublicEndPoint() Obtain Public network access address
 * @method void setPublicEndPoint(string $PublicEndPoint) Set Public network access address
 * @method string getVpcEndPoint() Obtain VPC access address
 * @method void setVpcEndPoint(string $VpcEndPoint) Set VPC access address
 * @method boolean getSupportNamespaceEndpoint() Obtain Whether the namespace access point is supported.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSupportNamespaceEndpoint(boolean $SupportNamespaceEndpoint) Set Whether the namespace access point is supported.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getVpcs() Obtain VPC Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcs(array $Vpcs) Set VPC Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsVip() Obtain Whether it is an exclusive instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsVip(boolean $IsVip) Set Whether it is an exclusive instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getRocketMQFlag() Obtain TDMQ for RocketMQ cluster type flag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRocketMQFlag(boolean $RocketMQFlag) Set TDMQ for RocketMQ cluster type flag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Billing status (`1`: Normal; `2`: Service suspended; `3`: Terminated)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Billing status (`1`: Normal; `2`: Service suspended; `3`: Terminated)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsolateTime() Obtain Service suspension time in milliseconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsolateTime(integer $IsolateTime) Set Service suspension time in milliseconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHttpPublicEndpoint() Obtain HTTP-based public network access address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpPublicEndpoint(string $HttpPublicEndpoint) Set HTTP-based public network access address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHttpVpcEndpoint() Obtain HTTP-based VPC access address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpVpcEndpoint(string $HttpVpcEndpoint) Set HTTP-based VPC access address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInternalEndpoint() Obtain Internal TCP access address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInternalEndpoint(string $InternalEndpoint) Set Internal TCP access address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHttpInternalEndpoint() Obtain Internal HTTP access address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpInternalEndpoint(string $HttpInternalEndpoint) Set Internal HTTP access address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getAclEnabled() Obtain Whether to enable ACL authentication. For Exclusive Edition instances, ACL authentication can be disabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAclEnabled(boolean $AclEnabled) Set Whether to enable ACL authentication. For Exclusive Edition instances, ACL authentication can be disabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPublicClbId() Obtain Public network CLB instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPublicClbId(string $PublicClbId) Set Public network CLB instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVip() Obtain vip
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVip(string $Vip) Set vip
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain Specifies the VPC it belongs to.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set Specifies the VPC it belongs to.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getSupportMigration() Obtain Whether migration is supported.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSupportMigration(boolean $SupportMigration) Set Whether migration is supported.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getInstanceStatus() Obtain Instance status:
0: Creating
1: Normal
2: Isolating
3: Destroyed
4: Abnormal
5: Deliver failed
6: Changing the configuration
7: Configuration change failed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceStatus(integer $InstanceStatus) Set Instance status:
0: Creating
1: Normal
2: Isolating
3: Destroyed
4: Abnormal
5: Deliver failed
6: Changing the configuration
7: Configuration change failed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getZoneId() Obtain Indicates the AZ to which the cluster belongs.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneId(integer $ZoneId) Set Indicates the AZ to which the cluster belongs.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getZoneIds() Obtain The AZ where the cluster nodes are located. If the cluster is a cross-AZ cluster, it includes multiple AZs where the cluster nodes are located.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneIds(array $ZoneIds) Set The AZ where the cluster nodes are located. If the cluster is a cross-AZ cluster, it includes multiple AZs where the cluster nodes are located.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsFrozen() Obtain Whether it is frozen.
 * @method void setIsFrozen(boolean $IsFrozen) Set Whether it is frozen.
 * @method boolean getAutoCreateTopicEnabled() Obtain Whether to enable automatic topic creation.
 * @method void setAutoCreateTopicEnabled(boolean $AutoCreateTopicEnabled) Set Whether to enable automatic topic creation.
 * @method boolean getAdminFeatureEnabled() Obtain Whether to enable the admin feature of the cluster.
 * @method void setAdminFeatureEnabled(boolean $AdminFeatureEnabled) Set Whether to enable the admin feature of the cluster.
 * @method string getAdminAccessKey() Obtain Admin AK
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAdminAccessKey(string $AdminAccessKey) Set Admin AK
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAdminSecretKey() Obtain Admin SK
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAdminSecretKey(string $AdminSecretKey) Set Admin SK
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getEnableDeletionProtection() Obtain Whether to enable deletion protection
 * @method void setEnableDeletionProtection(boolean $EnableDeletionProtection) Set Whether to enable deletion protection
 */
class RocketMQClusterInfo extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Region information
     */
    public $Region;

    /**
     * @var integer Creation time in milliseconds
     */
    public $CreateTime;

    /**
     * @var string Cluster remarks
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var string Public network access address
     */
    public $PublicEndPoint;

    /**
     * @var string VPC access address
     */
    public $VpcEndPoint;

    /**
     * @var boolean Whether the namespace access point is supported.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SupportNamespaceEndpoint;

    /**
     * @var array VPC Information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Vpcs;

    /**
     * @var boolean Whether it is an exclusive instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsVip;

    /**
     * @var boolean TDMQ for RocketMQ cluster type flag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RocketMQFlag;

    /**
     * @var integer Billing status (`1`: Normal; `2`: Service suspended; `3`: Terminated)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Service suspension time in milliseconds
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsolateTime;

    /**
     * @var string HTTP-based public network access address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpPublicEndpoint;

    /**
     * @var string HTTP-based VPC access address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpVpcEndpoint;

    /**
     * @var string Internal TCP access address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InternalEndpoint;

    /**
     * @var string Internal HTTP access address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpInternalEndpoint;

    /**
     * @var boolean Whether to enable ACL authentication. For Exclusive Edition instances, ACL authentication can be disabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AclEnabled;

    /**
     * @var string Public network CLB instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PublicClbId;

    /**
     * @var string vip
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Vip;

    /**
     * @var string Specifies the VPC it belongs to.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var boolean Whether migration is supported.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SupportMigration;

    /**
     * @var integer Instance status:
0: Creating
1: Normal
2: Isolating
3: Destroyed
4: Abnormal
5: Deliver failed
6: Changing the configuration
7: Configuration change failed
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceStatus;

    /**
     * @var integer Indicates the AZ to which the cluster belongs.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneId;

    /**
     * @var array The AZ where the cluster nodes are located. If the cluster is a cross-AZ cluster, it includes multiple AZs where the cluster nodes are located.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneIds;

    /**
     * @var boolean Whether it is frozen.
     */
    public $IsFrozen;

    /**
     * @var boolean Whether to enable automatic topic creation.
     */
    public $AutoCreateTopicEnabled;

    /**
     * @var boolean Whether to enable the admin feature of the cluster.
     */
    public $AdminFeatureEnabled;

    /**
     * @var string Admin AK
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AdminAccessKey;

    /**
     * @var string Admin SK
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AdminSecretKey;

    /**
     * @var boolean Whether to enable deletion protection
     */
    public $EnableDeletionProtection;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $ClusterName Cluster name
     * @param string $Region Region information
     * @param integer $CreateTime Creation time in milliseconds
     * @param string $Remark Cluster remarks
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $PublicEndPoint Public network access address
     * @param string $VpcEndPoint VPC access address
     * @param boolean $SupportNamespaceEndpoint Whether the namespace access point is supported.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $Vpcs VPC Information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsVip Whether it is an exclusive instance
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $RocketMQFlag TDMQ for RocketMQ cluster type flag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Billing status (`1`: Normal; `2`: Service suspended; `3`: Terminated)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsolateTime Service suspension time in milliseconds
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HttpPublicEndpoint HTTP-based public network access address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HttpVpcEndpoint HTTP-based VPC access address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InternalEndpoint Internal TCP access address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HttpInternalEndpoint Internal HTTP access address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $AclEnabled Whether to enable ACL authentication. For Exclusive Edition instances, ACL authentication can be disabled.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PublicClbId Public network CLB instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Vip vip
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcId Specifies the VPC it belongs to.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $SupportMigration Whether migration is supported.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $InstanceStatus Instance status:
0: Creating
1: Normal
2: Isolating
3: Destroyed
4: Abnormal
5: Deliver failed
6: Changing the configuration
7: Configuration change failed
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ZoneId Indicates the AZ to which the cluster belongs.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ZoneIds The AZ where the cluster nodes are located. If the cluster is a cross-AZ cluster, it includes multiple AZs where the cluster nodes are located.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsFrozen Whether it is frozen.
     * @param boolean $AutoCreateTopicEnabled Whether to enable automatic topic creation.
     * @param boolean $AdminFeatureEnabled Whether to enable the admin feature of the cluster.
     * @param string $AdminAccessKey Admin AK
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AdminSecretKey Admin SK
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $EnableDeletionProtection Whether to enable deletion protection
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

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PublicEndPoint",$param) and $param["PublicEndPoint"] !== null) {
            $this->PublicEndPoint = $param["PublicEndPoint"];
        }

        if (array_key_exists("VpcEndPoint",$param) and $param["VpcEndPoint"] !== null) {
            $this->VpcEndPoint = $param["VpcEndPoint"];
        }

        if (array_key_exists("SupportNamespaceEndpoint",$param) and $param["SupportNamespaceEndpoint"] !== null) {
            $this->SupportNamespaceEndpoint = $param["SupportNamespaceEndpoint"];
        }

        if (array_key_exists("Vpcs",$param) and $param["Vpcs"] !== null) {
            $this->Vpcs = [];
            foreach ($param["Vpcs"] as $key => $value){
                $obj = new VpcConfig();
                $obj->deserialize($value);
                array_push($this->Vpcs, $obj);
            }
        }

        if (array_key_exists("IsVip",$param) and $param["IsVip"] !== null) {
            $this->IsVip = $param["IsVip"];
        }

        if (array_key_exists("RocketMQFlag",$param) and $param["RocketMQFlag"] !== null) {
            $this->RocketMQFlag = $param["RocketMQFlag"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("HttpPublicEndpoint",$param) and $param["HttpPublicEndpoint"] !== null) {
            $this->HttpPublicEndpoint = $param["HttpPublicEndpoint"];
        }

        if (array_key_exists("HttpVpcEndpoint",$param) and $param["HttpVpcEndpoint"] !== null) {
            $this->HttpVpcEndpoint = $param["HttpVpcEndpoint"];
        }

        if (array_key_exists("InternalEndpoint",$param) and $param["InternalEndpoint"] !== null) {
            $this->InternalEndpoint = $param["InternalEndpoint"];
        }

        if (array_key_exists("HttpInternalEndpoint",$param) and $param["HttpInternalEndpoint"] !== null) {
            $this->HttpInternalEndpoint = $param["HttpInternalEndpoint"];
        }

        if (array_key_exists("AclEnabled",$param) and $param["AclEnabled"] !== null) {
            $this->AclEnabled = $param["AclEnabled"];
        }

        if (array_key_exists("PublicClbId",$param) and $param["PublicClbId"] !== null) {
            $this->PublicClbId = $param["PublicClbId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SupportMigration",$param) and $param["SupportMigration"] !== null) {
            $this->SupportMigration = $param["SupportMigration"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("IsFrozen",$param) and $param["IsFrozen"] !== null) {
            $this->IsFrozen = $param["IsFrozen"];
        }

        if (array_key_exists("AutoCreateTopicEnabled",$param) and $param["AutoCreateTopicEnabled"] !== null) {
            $this->AutoCreateTopicEnabled = $param["AutoCreateTopicEnabled"];
        }

        if (array_key_exists("AdminFeatureEnabled",$param) and $param["AdminFeatureEnabled"] !== null) {
            $this->AdminFeatureEnabled = $param["AdminFeatureEnabled"];
        }

        if (array_key_exists("AdminAccessKey",$param) and $param["AdminAccessKey"] !== null) {
            $this->AdminAccessKey = $param["AdminAccessKey"];
        }

        if (array_key_exists("AdminSecretKey",$param) and $param["AdminSecretKey"] !== null) {
            $this->AdminSecretKey = $param["AdminSecretKey"];
        }

        if (array_key_exists("EnableDeletionProtection",$param) and $param["EnableDeletionProtection"] !== null) {
            $this->EnableDeletionProtection = $param["EnableDeletionProtection"];
        }
    }
}
