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
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getInstanceVersion() Obtain Instance version.
 * @method void setInstanceVersion(string $InstanceVersion) Set Instance version.
 * @method integer getStatus() Obtain Instance status. Valid values: `0` (Creating), `1` (Normal), `2` (Isolated), `3` (Terminated), `4` (Abnormal), `5` (Delivery failed).
 * @method void setStatus(integer $Status) Set Instance status. Valid values: `0` (Creating), `1` (Normal), `2` (Isolated), `3` (Terminated), `4` (Abnormal), `5` (Delivery failed).
 * @method integer getNodeCount() Obtain Number of nodes
 * @method void setNodeCount(integer $NodeCount) Set Number of nodes
 * @method string getConfigDisplay() Obtain Instance specification name
 * @method void setConfigDisplay(string $ConfigDisplay) Set Instance specification name
 * @method integer getMaxTps() Obtain Peak TPS
 * @method void setMaxTps(integer $MaxTps) Set Peak TPS
 * @method integer getMaxBandWidth() Obtain Peak bandwidth in Mbps
 * @method void setMaxBandWidth(integer $MaxBandWidth) Set Peak bandwidth in Mbps
 * @method integer getMaxStorage() Obtain Storage capacity in GB
 * @method void setMaxStorage(integer $MaxStorage) Set Storage capacity in GB
 * @method integer getExpireTime() Obtain Specifies the instance expiration time in milliseconds as a unix timestamp. the value is 0 for pay-as-you-go resources.
 * @method void setExpireTime(integer $ExpireTime) Set Specifies the instance expiration time in milliseconds as a unix timestamp. the value is 0 for pay-as-you-go resources.
 * @method integer getAutoRenewFlag() Obtain Renewal mode. Valid values: `0` (Manual renewal, which is the default mode), `1` (Auto-renewal), `2` (Manual renewal, which is specified by users).
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Renewal mode. Valid values: `0` (Manual renewal, which is the default mode), `1` (Auto-renewal), `2` (Manual renewal, which is specified by users).
 * @method integer getPayMode() Obtain 1 indicates prepaid mode, 0 indicates postpaid.
 * @method void setPayMode(integer $PayMode) Set 1 indicates prepaid mode, 0 indicates postpaid.
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getSpecName() Obtain Node specification of the cluster. specifies the corresponding flag.
2C8G:rabbit-vip-profession-2c8g
4C16G:rabbit-vip-profession-4c16g
8C32G:rabbit-vip-profession-8c32g
16C32G:rabbit-vip-basic-4
16C64G:rabbit-vip-profession-16c64g
2C4G:rabbit-vip-basic-5
4C8G:rabbit-vip-basic-1
8C16G (sold out): rabbit-vip-basic-2.
Specifies the default value as 4C8G: rabbit-vip-basic-1.
 * @method void setSpecName(string $SpecName) Set Node specification of the cluster. specifies the corresponding flag.
2C8G:rabbit-vip-profession-2c8g
4C16G:rabbit-vip-profession-4c16g
8C32G:rabbit-vip-profession-8c32g
16C32G:rabbit-vip-basic-4
16C64G:rabbit-vip-profession-16c64g
2C4G:rabbit-vip-basic-5
4C8G:rabbit-vip-basic-1
8C16G (sold out): rabbit-vip-basic-2.
Specifies the default value as 4C8G: rabbit-vip-basic-1.
 * @method string getExceptionInformation() Obtain Cluster exception information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExceptionInformation(string $ExceptionInformation) Set Cluster exception information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getClusterStatus() Obtain Instance status. Valid values: `0` (Creating), `1` (Normal), `2` (Isolated), `3` (Terminated), `4` (Abnormal), `5` (Delivery failed).
This parameter is used to display the instance status additionally and distinguish from the `Status` parameter.
 * @method void setClusterStatus(integer $ClusterStatus) Set Instance status. Valid values: `0` (Creating), `1` (Normal), `2` (Isolated), `3` (Terminated), `4` (Abnormal), `5` (Delivery failed).
This parameter is used to display the instance status additionally and distinguish from the `Status` parameter.
 * @method string getPublicAccessEndpoint() Obtain Public network access point.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPublicAccessEndpoint(string $PublicAccessEndpoint) Set Public network access point.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getVpcs() Obtain VPC access point list.
 * @method void setVpcs(array $Vpcs) Set VPC access point list.
 * @method integer getCreateTime() Obtain Creation time in milliseconds. unix timestamp.
 * @method void setCreateTime(integer $CreateTime) Set Creation time in milliseconds. unix timestamp.
 * @method integer getInstanceType() Obtain Instance type. valid values: 0 (managed), 1 (Serverless).
 * @method void setInstanceType(integer $InstanceType) Set Instance type. valid values: 0 (managed), 1 (Serverless).
 * @method integer getIsolatedTime() Obtain Isolation time, in milliseconds. unix timestamp.
 * @method void setIsolatedTime(integer $IsolatedTime) Set Isolation time, in milliseconds. unix timestamp.
 * @method boolean getEnableDeletionProtection() Obtain Whether deletion protection is enabled.
 * @method void setEnableDeletionProtection(boolean $EnableDeletionProtection) Set Whether deletion protection is enabled.
 * @method array getTags() Obtain Tag list
 * @method void setTags(array $Tags) Set Tag list
 */
class RabbitMQVipInstance extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Instance version.
     */
    public $InstanceVersion;

    /**
     * @var integer Instance status. Valid values: `0` (Creating), `1` (Normal), `2` (Isolated), `3` (Terminated), `4` (Abnormal), `5` (Delivery failed).
     */
    public $Status;

    /**
     * @var integer Number of nodes
     */
    public $NodeCount;

    /**
     * @var string Instance specification name
     */
    public $ConfigDisplay;

    /**
     * @var integer Peak TPS
     */
    public $MaxTps;

    /**
     * @var integer Peak bandwidth in Mbps
     */
    public $MaxBandWidth;

    /**
     * @var integer Storage capacity in GB
     */
    public $MaxStorage;

    /**
     * @var integer Specifies the instance expiration time in milliseconds as a unix timestamp. the value is 0 for pay-as-you-go resources.
     */
    public $ExpireTime;

    /**
     * @var integer Renewal mode. Valid values: `0` (Manual renewal, which is the default mode), `1` (Auto-renewal), `2` (Manual renewal, which is specified by users).
     */
    public $AutoRenewFlag;

    /**
     * @var integer 1 indicates prepaid mode, 0 indicates postpaid.
     */
    public $PayMode;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Node specification of the cluster. specifies the corresponding flag.
2C8G:rabbit-vip-profession-2c8g
4C16G:rabbit-vip-profession-4c16g
8C32G:rabbit-vip-profession-8c32g
16C32G:rabbit-vip-basic-4
16C64G:rabbit-vip-profession-16c64g
2C4G:rabbit-vip-basic-5
4C8G:rabbit-vip-basic-1
8C16G (sold out): rabbit-vip-basic-2.
Specifies the default value as 4C8G: rabbit-vip-basic-1.
     */
    public $SpecName;

    /**
     * @var string Cluster exception information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExceptionInformation;

    /**
     * @var integer Instance status. Valid values: `0` (Creating), `1` (Normal), `2` (Isolated), `3` (Terminated), `4` (Abnormal), `5` (Delivery failed).
This parameter is used to display the instance status additionally and distinguish from the `Status` parameter.
     */
    public $ClusterStatus;

    /**
     * @var string Public network access point.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PublicAccessEndpoint;

    /**
     * @var array VPC access point list.
     */
    public $Vpcs;

    /**
     * @var integer Creation time in milliseconds. unix timestamp.
     */
    public $CreateTime;

    /**
     * @var integer Instance type. valid values: 0 (managed), 1 (Serverless).
     */
    public $InstanceType;

    /**
     * @var integer Isolation time, in milliseconds. unix timestamp.
     */
    public $IsolatedTime;

    /**
     * @var boolean Whether deletion protection is enabled.
     */
    public $EnableDeletionProtection;

    /**
     * @var array Tag list
     */
    public $Tags;

    /**
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param string $InstanceVersion Instance version.
     * @param integer $Status Instance status. Valid values: `0` (Creating), `1` (Normal), `2` (Isolated), `3` (Terminated), `4` (Abnormal), `5` (Delivery failed).
     * @param integer $NodeCount Number of nodes
     * @param string $ConfigDisplay Instance specification name
     * @param integer $MaxTps Peak TPS
     * @param integer $MaxBandWidth Peak bandwidth in Mbps
     * @param integer $MaxStorage Storage capacity in GB
     * @param integer $ExpireTime Specifies the instance expiration time in milliseconds as a unix timestamp. the value is 0 for pay-as-you-go resources.
     * @param integer $AutoRenewFlag Renewal mode. Valid values: `0` (Manual renewal, which is the default mode), `1` (Auto-renewal), `2` (Manual renewal, which is specified by users).
     * @param integer $PayMode 1 indicates prepaid mode, 0 indicates postpaid.
     * @param string $Remark Remarks
     * @param string $SpecName Node specification of the cluster. specifies the corresponding flag.
2C8G:rabbit-vip-profession-2c8g
4C16G:rabbit-vip-profession-4c16g
8C32G:rabbit-vip-profession-8c32g
16C32G:rabbit-vip-basic-4
16C64G:rabbit-vip-profession-16c64g
2C4G:rabbit-vip-basic-5
4C8G:rabbit-vip-basic-1
8C16G (sold out): rabbit-vip-basic-2.
Specifies the default value as 4C8G: rabbit-vip-basic-1.
     * @param string $ExceptionInformation Cluster exception information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ClusterStatus Instance status. Valid values: `0` (Creating), `1` (Normal), `2` (Isolated), `3` (Terminated), `4` (Abnormal), `5` (Delivery failed).
This parameter is used to display the instance status additionally and distinguish from the `Status` parameter.
     * @param string $PublicAccessEndpoint Public network access point.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Vpcs VPC access point list.
     * @param integer $CreateTime Creation time in milliseconds. unix timestamp.
     * @param integer $InstanceType Instance type. valid values: 0 (managed), 1 (Serverless).
     * @param integer $IsolatedTime Isolation time, in milliseconds. unix timestamp.
     * @param boolean $EnableDeletionProtection Whether deletion protection is enabled.
     * @param array $Tags Tag list
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
    }
}
