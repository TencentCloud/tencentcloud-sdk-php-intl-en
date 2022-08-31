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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance type when the Grafana instance is queried
 *
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method array getSubnetIds() Obtain Array of subnet IDs
 * @method void setSubnetIds(array $SubnetIds) Set Array of subnet IDs
 * @method string getInternetUrl() Obtain Grafana private network address
 * @method void setInternetUrl(string $InternetUrl) Set Grafana private network address
 * @method string getInternalUrl() Obtain Grafana public network address
 * @method void setInternalUrl(string $InternalUrl) Set Grafana public network address
 * @method string getCreatedAt() Obtain Creation time
 * @method void setCreatedAt(string $CreatedAt) Set Creation time
 * @method integer getInstanceStatus() Obtain Status. Valid values: `1` (creating), `2` (running), `3` (abnormal), `4` (restarting), `5` (stopping), `6` (stopped), `7` (deleted).
 * @method void setInstanceStatus(integer $InstanceStatus) Set Status. Valid values: `1` (creating), `2` (running), `3` (abnormal), `4` (restarting), `5` (stopping), `6` (stopped), `7` (deleted).
 * @method array getTagSpecification() Obtain Instance tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTagSpecification(array $TagSpecification) Set Instance tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZone() Obtain Instance AZ
 * @method void setZone(string $Zone) Set Instance AZ
 * @method integer getInstanceChargeType() Obtain Billing mode. Valid value: `1` (monthly subscription).
 * @method void setInstanceChargeType(integer $InstanceChargeType) Set Billing mode. Valid value: `1` (monthly subscription).
 * @method string getVpcName() Obtain VPC name
 * @method void setVpcName(string $VpcName) Set VPC name
 * @method string getSubnetName() Obtain Subnet name
 * @method void setSubnetName(string $SubnetName) Set Subnet name
 * @method integer getRegionId() Obtain Region ID
 * @method void setRegionId(integer $RegionId) Set Region ID
 * @method string getRootUrl() Obtain The full URL used to access this instance
 * @method void setRootUrl(string $RootUrl) Set The full URL used to access this instance
 * @method boolean getEnableSSO() Obtain Whether to enable SSO
 * @method void setEnableSSO(boolean $EnableSSO) Set Whether to enable SSO
 * @method string getVersion() Obtain Version number
 * @method void setVersion(string $Version) Set Version number
 * @method boolean getEnableSSOCamCheck() Obtain Whether to enable CAM authentication during SSO
 * @method void setEnableSSOCamCheck(boolean $EnableSSOCamCheck) Set Whether to enable CAM authentication during SSO
 */
class GrafanaInstanceInfo extends AbstractModel
{
    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var array Array of subnet IDs
     */
    public $SubnetIds;

    /**
     * @var string Grafana private network address
     */
    public $InternetUrl;

    /**
     * @var string Grafana public network address
     */
    public $InternalUrl;

    /**
     * @var string Creation time
     */
    public $CreatedAt;

    /**
     * @var integer Status. Valid values: `1` (creating), `2` (running), `3` (abnormal), `4` (restarting), `5` (stopping), `6` (stopped), `7` (deleted).
     */
    public $InstanceStatus;

    /**
     * @var array Instance tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TagSpecification;

    /**
     * @var string Instance AZ
     */
    public $Zone;

    /**
     * @var integer Billing mode. Valid value: `1` (monthly subscription).
     */
    public $InstanceChargeType;

    /**
     * @var string VPC name
     */
    public $VpcName;

    /**
     * @var string Subnet name
     */
    public $SubnetName;

    /**
     * @var integer Region ID
     */
    public $RegionId;

    /**
     * @var string The full URL used to access this instance
     */
    public $RootUrl;

    /**
     * @var boolean Whether to enable SSO
     */
    public $EnableSSO;

    /**
     * @var string Version number
     */
    public $Version;

    /**
     * @var boolean Whether to enable CAM authentication during SSO
     */
    public $EnableSSOCamCheck;

    /**
     * @param string $InstanceName Instance name
     * @param string $InstanceId Instance ID
     * @param string $Region Region
     * @param string $VpcId VPC ID
     * @param array $SubnetIds Array of subnet IDs
     * @param string $InternetUrl Grafana private network address
     * @param string $InternalUrl Grafana public network address
     * @param string $CreatedAt Creation time
     * @param integer $InstanceStatus Status. Valid values: `1` (creating), `2` (running), `3` (abnormal), `4` (restarting), `5` (stopping), `6` (stopped), `7` (deleted).
     * @param array $TagSpecification Instance tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Zone Instance AZ
     * @param integer $InstanceChargeType Billing mode. Valid value: `1` (monthly subscription).
     * @param string $VpcName VPC name
     * @param string $SubnetName Subnet name
     * @param integer $RegionId Region ID
     * @param string $RootUrl The full URL used to access this instance
     * @param boolean $EnableSSO Whether to enable SSO
     * @param string $Version Version number
     * @param boolean $EnableSSOCamCheck Whether to enable CAM authentication during SSO
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("InternetUrl",$param) and $param["InternetUrl"] !== null) {
            $this->InternetUrl = $param["InternetUrl"];
        }

        if (array_key_exists("InternalUrl",$param) and $param["InternalUrl"] !== null) {
            $this->InternalUrl = $param["InternalUrl"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new PrometheusTag();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RootUrl",$param) and $param["RootUrl"] !== null) {
            $this->RootUrl = $param["RootUrl"];
        }

        if (array_key_exists("EnableSSO",$param) and $param["EnableSSO"] !== null) {
            $this->EnableSSO = $param["EnableSSO"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("EnableSSOCamCheck",$param) and $param["EnableSSOCamCheck"] !== null) {
            $this->EnableSSOCamCheck = $param["EnableSSOCamCheck"];
        }
    }
}
