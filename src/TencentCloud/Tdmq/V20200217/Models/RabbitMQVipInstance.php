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
 * RabbitMQ managed instance information.
 *
 * @method string getInstanceId() Obtain <p>Instance ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID</p>
 * @method string getInstanceName() Obtain <p>Instance name</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name</p>
 * @method string getInstanceVersion() Obtain <p>Instance version</p>
 * @method void setInstanceVersion(string $InstanceVersion) Set <p>Instance version</p>
 * @method integer getStatus() Obtain <p>Instance status. 0 indicates creating in progress, 1 indicates normal, 2 indicates isolated, 3 indicates terminated, 4 - abnormal, 5 - delivery failed</p>
 * @method void setStatus(integer $Status) Set <p>Instance status. 0 indicates creating in progress, 1 indicates normal, 2 indicates isolated, 3 indicates terminated, 4 - abnormal, 5 - delivery failed</p>
 * @method integer getNodeCount() Obtain <p>Node count</p>
 * @method void setNodeCount(integer $NodeCount) Set <p>Node count</p>
 * @method string getConfigDisplay() Obtain <p>Instance configuration specification name</p>
 * @method void setConfigDisplay(string $ConfigDisplay) Set <p>Instance configuration specification name</p>
 * @method integer getMaxTps() Obtain <p>Peak TPS</p>
 * @method void setMaxTps(integer $MaxTps) Set <p>Peak TPS</p>
 * @method integer getMaxBandWidth() Obtain <p>Peak bandwidth in Mbps</p>
 * @method void setMaxBandWidth(integer $MaxBandWidth) Set <p>Peak bandwidth in Mbps</p>
 * @method integer getMaxStorage() Obtain <p>Storage capacity in GB</p>
 * @method void setMaxStorage(integer $MaxStorage) Set <p>Storage capacity in GB</p>
 * @method integer getExpireTime() Obtain <p>Instance expiration time. The value is 0 for pay-as-you-go instances, in milliseconds. unix timestamp.</p>
 * @method void setExpireTime(integer $ExpireTime) Set <p>Instance expiration time. The value is 0 for pay-as-you-go instances, in milliseconds. unix timestamp.</p>
 * @method integer getAutoRenewFlag() Obtain <p>Auto-renewal flag. 0 means default state (not set by the user, i.e., initial state is manual renewal), 1 means auto-renew, 2 means explicitly no auto-renew (set by the user)</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set <p>Auto-renewal flag. 0 means default state (not set by the user, i.e., initial state is manual renewal), 1 means auto-renew, 2 means explicitly no auto-renew (set by the user)</p>
 * @method integer getPayMode() Obtain <p>1 indicates prepaid mode, 0 indicates postpaid</p>
 * @method void setPayMode(integer $PayMode) Set <p>1 indicates prepaid mode, 0 indicates postpaid</p>
 * @method string getRemark() Obtain <p>Remark information</p>
 * @method void setRemark(string $Remark) Set <p>Remark information</p>
 * @method string getSpecName() Obtain <p>Node specification of the cluster with corresponding flag:<br>2C8G: rabbit-vip-profession-2c8g<br>4C16G: rabbit-vip-profession-4c16g<br>8C32G: rabbit-vip-profession-8c32g<br>16C32G: rabbit-vip-basic-4<br>16C64G: rabbit-vip-profession-16c64g<br>2C4G: rabbit-vip-basic-5<br>4C8G: rabbit-vip-basic-1<br>8C16G (sold out): rabbit-vip-basic-2<br>Defaults to 4C8G: rabbit-vip-basic-1 if not specified</p>
 * @method void setSpecName(string $SpecName) Set <p>Node specification of the cluster with corresponding flag:<br>2C8G: rabbit-vip-profession-2c8g<br>4C16G: rabbit-vip-profession-4c16g<br>8C32G: rabbit-vip-profession-8c32g<br>16C32G: rabbit-vip-basic-4<br>16C64G: rabbit-vip-profession-16c64g<br>2C4G: rabbit-vip-basic-5<br>4C8G: rabbit-vip-basic-1<br>8C16G (sold out): rabbit-vip-basic-2<br>Defaults to 4C8G: rabbit-vip-basic-1 if not specified</p>
 * @method string getExceptionInformation() Obtain <p>Cluster exception information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExceptionInformation(string $ExceptionInformation) Set <p>Cluster exception information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getClusterStatus() Obtain <p>Instance status. 0 indicates creating in progress, 1 indicates normal, 2 indicates isolated, 3 indicates terminated, 4 - abnormal, 5 - delivery failed<br>To separate from the billing area, enable an additional status bit for display.</p>
 * @method void setClusterStatus(integer $ClusterStatus) Set <p>Instance status. 0 indicates creating in progress, 1 indicates normal, 2 indicates isolated, 3 indicates terminated, 4 - abnormal, 5 - delivery failed<br>To separate from the billing area, enable an additional status bit for display.</p>
 * @method string getPublicAccessEndpoint() Obtain <p>public network access point</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPublicAccessEndpoint(string $PublicAccessEndpoint) Set <p>public network access point</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getVpcs() Obtain <p>VPC access point list</p>
 * @method void setVpcs(array $Vpcs) Set <p>VPC access point list</p>
 * @method integer getCreateTime() Obtain <p>Creation time in milliseconds. unix timestamp</p>
 * @method void setCreateTime(integer $CreateTime) Set <p>Creation time in milliseconds. unix timestamp</p>
 * @method integer getInstanceType() Obtain <p>Instance type</p><p>Enumeration value:</p><ul><li>0: Managed version instance</li></ul>
 * @method void setInstanceType(integer $InstanceType) Set <p>Instance type</p><p>Enumeration value:</p><ul><li>0: Managed version instance</li></ul>
 * @method integer getIsolatedTime() Obtain <p>Isolation time in milliseconds. unix timestamp</p>
 * @method void setIsolatedTime(integer $IsolatedTime) Set <p>Isolation time in milliseconds. unix timestamp</p>
 * @method boolean getEnableDeletionProtection() Obtain <p>Whether deletion protection is enabled</p>
 * @method void setEnableDeletionProtection(boolean $EnableDeletionProtection) Set <p>Whether deletion protection is enabled</p>
 * @method array getTags() Obtain <p>Tag list</p>
 * @method void setTags(array $Tags) Set <p>Tag list</p>
 * @method string getPublicStreamAccessEndpoint() Obtain <p>public data stream Stream access point</p>
 * @method void setPublicStreamAccessEndpoint(string $PublicStreamAccessEndpoint) Set <p>public data stream Stream access point</p>
 */
class RabbitMQVipInstance extends AbstractModel
{
    /**
     * @var string <p>Instance ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Instance name</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Instance version</p>
     */
    public $InstanceVersion;

    /**
     * @var integer <p>Instance status. 0 indicates creating in progress, 1 indicates normal, 2 indicates isolated, 3 indicates terminated, 4 - abnormal, 5 - delivery failed</p>
     */
    public $Status;

    /**
     * @var integer <p>Node count</p>
     */
    public $NodeCount;

    /**
     * @var string <p>Instance configuration specification name</p>
     */
    public $ConfigDisplay;

    /**
     * @var integer <p>Peak TPS</p>
     */
    public $MaxTps;

    /**
     * @var integer <p>Peak bandwidth in Mbps</p>
     */
    public $MaxBandWidth;

    /**
     * @var integer <p>Storage capacity in GB</p>
     */
    public $MaxStorage;

    /**
     * @var integer <p>Instance expiration time. The value is 0 for pay-as-you-go instances, in milliseconds. unix timestamp.</p>
     */
    public $ExpireTime;

    /**
     * @var integer <p>Auto-renewal flag. 0 means default state (not set by the user, i.e., initial state is manual renewal), 1 means auto-renew, 2 means explicitly no auto-renew (set by the user)</p>
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>1 indicates prepaid mode, 0 indicates postpaid</p>
     */
    public $PayMode;

    /**
     * @var string <p>Remark information</p>
     */
    public $Remark;

    /**
     * @var string <p>Node specification of the cluster with corresponding flag:<br>2C8G: rabbit-vip-profession-2c8g<br>4C16G: rabbit-vip-profession-4c16g<br>8C32G: rabbit-vip-profession-8c32g<br>16C32G: rabbit-vip-basic-4<br>16C64G: rabbit-vip-profession-16c64g<br>2C4G: rabbit-vip-basic-5<br>4C8G: rabbit-vip-basic-1<br>8C16G (sold out): rabbit-vip-basic-2<br>Defaults to 4C8G: rabbit-vip-basic-1 if not specified</p>
     */
    public $SpecName;

    /**
     * @var string <p>Cluster exception information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExceptionInformation;

    /**
     * @var integer <p>Instance status. 0 indicates creating in progress, 1 indicates normal, 2 indicates isolated, 3 indicates terminated, 4 - abnormal, 5 - delivery failed<br>To separate from the billing area, enable an additional status bit for display.</p>
     */
    public $ClusterStatus;

    /**
     * @var string <p>public network access point</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PublicAccessEndpoint;

    /**
     * @var array <p>VPC access point list</p>
     */
    public $Vpcs;

    /**
     * @var integer <p>Creation time in milliseconds. unix timestamp</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>Instance type</p><p>Enumeration value:</p><ul><li>0: Managed version instance</li></ul>
     */
    public $InstanceType;

    /**
     * @var integer <p>Isolation time in milliseconds. unix timestamp</p>
     */
    public $IsolatedTime;

    /**
     * @var boolean <p>Whether deletion protection is enabled</p>
     */
    public $EnableDeletionProtection;

    /**
     * @var array <p>Tag list</p>
     */
    public $Tags;

    /**
     * @var string <p>public data stream Stream access point</p>
     */
    public $PublicStreamAccessEndpoint;

    /**
     * @param string $InstanceId <p>Instance ID</p>
     * @param string $InstanceName <p>Instance name</p>
     * @param string $InstanceVersion <p>Instance version</p>
     * @param integer $Status <p>Instance status. 0 indicates creating in progress, 1 indicates normal, 2 indicates isolated, 3 indicates terminated, 4 - abnormal, 5 - delivery failed</p>
     * @param integer $NodeCount <p>Node count</p>
     * @param string $ConfigDisplay <p>Instance configuration specification name</p>
     * @param integer $MaxTps <p>Peak TPS</p>
     * @param integer $MaxBandWidth <p>Peak bandwidth in Mbps</p>
     * @param integer $MaxStorage <p>Storage capacity in GB</p>
     * @param integer $ExpireTime <p>Instance expiration time. The value is 0 for pay-as-you-go instances, in milliseconds. unix timestamp.</p>
     * @param integer $AutoRenewFlag <p>Auto-renewal flag. 0 means default state (not set by the user, i.e., initial state is manual renewal), 1 means auto-renew, 2 means explicitly no auto-renew (set by the user)</p>
     * @param integer $PayMode <p>1 indicates prepaid mode, 0 indicates postpaid</p>
     * @param string $Remark <p>Remark information</p>
     * @param string $SpecName <p>Node specification of the cluster with corresponding flag:<br>2C8G: rabbit-vip-profession-2c8g<br>4C16G: rabbit-vip-profession-4c16g<br>8C32G: rabbit-vip-profession-8c32g<br>16C32G: rabbit-vip-basic-4<br>16C64G: rabbit-vip-profession-16c64g<br>2C4G: rabbit-vip-basic-5<br>4C8G: rabbit-vip-basic-1<br>8C16G (sold out): rabbit-vip-basic-2<br>Defaults to 4C8G: rabbit-vip-basic-1 if not specified</p>
     * @param string $ExceptionInformation <p>Cluster exception information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ClusterStatus <p>Instance status. 0 indicates creating in progress, 1 indicates normal, 2 indicates isolated, 3 indicates terminated, 4 - abnormal, 5 - delivery failed<br>To separate from the billing area, enable an additional status bit for display.</p>
     * @param string $PublicAccessEndpoint <p>public network access point</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Vpcs <p>VPC access point list</p>
     * @param integer $CreateTime <p>Creation time in milliseconds. unix timestamp</p>
     * @param integer $InstanceType <p>Instance type</p><p>Enumeration value:</p><ul><li>0: Managed version instance</li></ul>
     * @param integer $IsolatedTime <p>Isolation time in milliseconds. unix timestamp</p>
     * @param boolean $EnableDeletionProtection <p>Whether deletion protection is enabled</p>
     * @param array $Tags <p>Tag list</p>
     * @param string $PublicStreamAccessEndpoint <p>public data stream Stream access point</p>
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

        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("ConfigDisplay",$param) and $param["ConfigDisplay"] !== null) {
            $this->ConfigDisplay = $param["ConfigDisplay"];
        }

        if (array_key_exists("MaxTps",$param) and $param["MaxTps"] !== null) {
            $this->MaxTps = $param["MaxTps"];
        }

        if (array_key_exists("MaxBandWidth",$param) and $param["MaxBandWidth"] !== null) {
            $this->MaxBandWidth = $param["MaxBandWidth"];
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("ExceptionInformation",$param) and $param["ExceptionInformation"] !== null) {
            $this->ExceptionInformation = $param["ExceptionInformation"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("PublicAccessEndpoint",$param) and $param["PublicAccessEndpoint"] !== null) {
            $this->PublicAccessEndpoint = $param["PublicAccessEndpoint"];
        }

        if (array_key_exists("Vpcs",$param) and $param["Vpcs"] !== null) {
            $this->Vpcs = [];
            foreach ($param["Vpcs"] as $key => $value){
                $obj = new VpcEndpointInfo();
                $obj->deserialize($value);
                array_push($this->Vpcs, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }

        if (array_key_exists("EnableDeletionProtection",$param) and $param["EnableDeletionProtection"] !== null) {
            $this->EnableDeletionProtection = $param["EnableDeletionProtection"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("PublicStreamAccessEndpoint",$param) and $param["PublicStreamAccessEndpoint"] !== null) {
            $this->PublicStreamAccessEndpoint = $param["PublicStreamAccessEndpoint"];
        }
    }
}
