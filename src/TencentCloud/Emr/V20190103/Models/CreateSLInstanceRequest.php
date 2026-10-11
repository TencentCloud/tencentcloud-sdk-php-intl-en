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
 * CreateSLInstance request structure.
 *
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method integer getPayMode() Obtain Instance billing mode. Valid values: 0 (postpaid, that is, pay-as-you-go) and 1 (prepaid, that is, yearly/monthly subscription).
 * @method void setPayMode(integer $PayMode) Set Instance billing mode. Valid values: 0 (postpaid, that is, pay-as-you-go) and 1 (prepaid, that is, yearly/monthly subscription).
 * @method string getDiskType() Obtain Instance storage type. Valid values: CLOUD_HSSD (Enhanced SSD) and CLOUD_BSSD (Balanced SSD).
 * @method void setDiskType(string $DiskType) Set Instance storage type. Valid values: CLOUD_HSSD (Enhanced SSD) and CLOUD_BSSD (Balanced SSD).
 * @method integer getDiskSize() Obtain Disk capacity of a single node of the instance (GB). The disk capacity of a single node should be greater than or equal to 100 and less than or equal to 250 x the number of CPU cores. The capacity adjustment step is 100.
 * @method void setDiskSize(integer $DiskSize) Set Disk capacity of a single node of the instance (GB). The disk capacity of a single node should be greater than or equal to 100 and less than or equal to 250 x the number of CPU cores. The capacity adjustment step is 100.
 * @method string getNodeType() Obtain Instance node specifications. Valid values: 4C16G, 8C32G, 16C64G, and 32C128G. The value is case-insensitive.
 * @method void setNodeType(string $NodeType) Set Instance node specifications. Valid values: 4C16G, 8C32G, 16C64G, and 32C128G. The value is case-insensitive.
 * @method array getZoneSettings() Obtain Detailed configuration of the instance AZ, including the region name, VPC information, and number of nodes. Currently, multiple AZs are supported. The number of AZs must be 1 or 3, and the total number of nodes across all AZs must be greater than or equal to 3 and less than or equal to 50.
 * @method void setZoneSettings(array $ZoneSettings) Set Detailed configuration of the instance AZ, including the region name, VPC information, and number of nodes. Currently, multiple AZs are supported. The number of AZs must be 1 or 3, and the total number of nodes across all AZs must be greater than or equal to 3 and less than or equal to 50.
 * @method array getTags() Obtain List of tags to be bound to the instance.
 * @method void setTags(array $Tags) Set List of tags to be bound to the instance.
 * @method PrePaySetting getPrePaySetting() Obtain Prepaid parameter.
 * @method void setPrePaySetting(PrePaySetting $PrePaySetting) Set Prepaid parameter.
 * @method string getClientToken() Obtain Unique random identifier with a time-to-live of 5 minutes, which needs to be specified by the caller to prevent the client from repeatedly creating resources, for example, a9a90aa6-****-****-****-fae360632808.
 * @method void setClientToken(string $ClientToken) Set Unique random identifier with a time-to-live of 5 minutes, which needs to be specified by the caller to prevent the client from repeatedly creating resources, for example, a9a90aa6-****-****-****-fae360632808.
 * @method string getDeploymentMode() Obtain Deployment mode.
 * @method void setDeploymentMode(string $DeploymentMode) Set Deployment mode.
 * @method string getUserName() Obtain Service username, which is optional for services without the need to set usernames. The value can contain 8 to 16 characters, including uppercase letters, lowercase letters, and digits.
 * @method void setUserName(string $UserName) Set Service username, which is optional for services without the need to set usernames. The value can contain 8 to 16 characters, including uppercase letters, lowercase letters, and digits.
 */
class CreateSLInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var integer Instance billing mode. Valid values: 0 (postpaid, that is, pay-as-you-go) and 1 (prepaid, that is, yearly/monthly subscription).
     */
    public $PayMode;

    /**
     * @var string Instance storage type. Valid values: CLOUD_HSSD (Enhanced SSD) and CLOUD_BSSD (Balanced SSD).
     */
    public $DiskType;

    /**
     * @var integer Disk capacity of a single node of the instance (GB). The disk capacity of a single node should be greater than or equal to 100 and less than or equal to 250 x the number of CPU cores. The capacity adjustment step is 100.
     */
    public $DiskSize;

    /**
     * @var string Instance node specifications. Valid values: 4C16G, 8C32G, 16C64G, and 32C128G. The value is case-insensitive.
     */
    public $NodeType;

    /**
     * @var array Detailed configuration of the instance AZ, including the region name, VPC information, and number of nodes. Currently, multiple AZs are supported. The number of AZs must be 1 or 3, and the total number of nodes across all AZs must be greater than or equal to 3 and less than or equal to 50.
     */
    public $ZoneSettings;

    /**
     * @var array List of tags to be bound to the instance.
     */
    public $Tags;

    /**
     * @var PrePaySetting Prepaid parameter.
     */
    public $PrePaySetting;

    /**
     * @var string Unique random identifier with a time-to-live of 5 minutes, which needs to be specified by the caller to prevent the client from repeatedly creating resources, for example, a9a90aa6-****-****-****-fae360632808.
     */
    public $ClientToken;

    /**
     * @var string Deployment mode.
     */
    public $DeploymentMode;

    /**
     * @var string Service username, which is optional for services without the need to set usernames. The value can contain 8 to 16 characters, including uppercase letters, lowercase letters, and digits.
     */
    public $UserName;

    /**
     * @param string $InstanceName Instance name.
     * @param integer $PayMode Instance billing mode. Valid values: 0 (postpaid, that is, pay-as-you-go) and 1 (prepaid, that is, yearly/monthly subscription).
     * @param string $DiskType Instance storage type. Valid values: CLOUD_HSSD (Enhanced SSD) and CLOUD_BSSD (Balanced SSD).
     * @param integer $DiskSize Disk capacity of a single node of the instance (GB). The disk capacity of a single node should be greater than or equal to 100 and less than or equal to 250 x the number of CPU cores. The capacity adjustment step is 100.
     * @param string $NodeType Instance node specifications. Valid values: 4C16G, 8C32G, 16C64G, and 32C128G. The value is case-insensitive.
     * @param array $ZoneSettings Detailed configuration of the instance AZ, including the region name, VPC information, and number of nodes. Currently, multiple AZs are supported. The number of AZs must be 1 or 3, and the total number of nodes across all AZs must be greater than or equal to 3 and less than or equal to 50.
     * @param array $Tags List of tags to be bound to the instance.
     * @param PrePaySetting $PrePaySetting Prepaid parameter.
     * @param string $ClientToken Unique random identifier with a time-to-live of 5 minutes, which needs to be specified by the caller to prevent the client from repeatedly creating resources, for example, a9a90aa6-****-****-****-fae360632808.
     * @param string $DeploymentMode Deployment mode.
     * @param string $UserName Service username, which is optional for services without the need to set usernames. The value can contain 8 to 16 characters, including uppercase letters, lowercase letters, and digits.
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

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("ZoneSettings",$param) and $param["ZoneSettings"] !== null) {
            $this->ZoneSettings = [];
            foreach ($param["ZoneSettings"] as $key => $value){
                $obj = new ZoneSetting();
                $obj->deserialize($value);
                array_push($this->ZoneSettings, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("PrePaySetting",$param) and $param["PrePaySetting"] !== null) {
            $this->PrePaySetting = new PrePaySetting();
            $this->PrePaySetting->deserialize($param["PrePaySetting"]);
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("DeploymentMode",$param) and $param["DeploymentMode"] !== null) {
            $this->DeploymentMode = $param["DeploymentMode"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }
    }
}
