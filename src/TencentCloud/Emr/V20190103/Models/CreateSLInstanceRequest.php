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
 * @method integer getPayMode() Obtain Instance billing mode. 0 indicates postpaid, i.e., pay-as-you-go.
 * @method void setPayMode(integer $PayMode) Set Instance billing mode. 0 indicates postpaid, i.e., pay-as-you-go.
 * @method string getDiskType() Obtain Instance storage type. Fill in CLOUD_HSSD to represent high-performance cloud storage.
 * @method void setDiskType(string $DiskType) Set Instance storage type. Fill in CLOUD_HSSD to represent high-performance cloud storage.
 * @method integer getDiskSize() Obtain The disk capacity of a single node of the instance, in GB. The disk capacity of a single node should be greater than or equal to 100 and less than or equal to 250 x the number of CPU cores. The capacity adjustment step is 100.
 * @method void setDiskSize(integer $DiskSize) Set The disk capacity of a single node of the instance, in GB. The disk capacity of a single node should be greater than or equal to 100 and less than or equal to 250 x the number of CPU cores. The capacity adjustment step is 100.
 * @method string getNodeType() Obtain Instance node specification. You can fill in 4C16G, 8C32G, 16C64G, or 32C128G, which is case-insensitive.
 * @method void setNodeType(string $NodeType) Set Instance node specification. You can fill in 4C16G, 8C32G, 16C64G, or 32C128G, which is case-insensitive.
 * @method array getZoneSettings() Obtain Detailed configuration of the instance AZ. Currently, multiple availability zones are supported. The number of AZs must be 1 or 3, including the region names, VPC information, and number of nodes. The total number of nodes across all zones must be greater than or equal to 3 and less than or equal to 50.
 * @method void setZoneSettings(array $ZoneSettings) Set Detailed configuration of the instance AZ. Currently, multiple availability zones are supported. The number of AZs must be 1 or 3, including the region names, VPC information, and number of nodes. The total number of nodes across all zones must be greater than or equal to 3 and less than or equal to 50.
 * @method array getTags() Obtain List of tags to be bound to the instance.
 * @method void setTags(array $Tags) Set List of tags to be bound to the instance.
 * @method PrePaySetting getPrePaySetting() Obtain Prepaid parameter.
 * @method void setPrePaySetting(PrePaySetting $PrePaySetting) Set Prepaid parameter.
 * @method string getClientToken() Obtain The unique random identifier with a time efficiency of 5 minutes, which needs to be specified by the caller to prevent the client from creating resources repeatedly. For example: a9a90aa6-****-****-****-fae360632808.
 * @method void setClientToken(string $ClientToken) Set The unique random identifier with a time efficiency of 5 minutes, which needs to be specified by the caller to prevent the client from creating resources repeatedly. For example: a9a90aa6-****-****-****-fae360632808.
 */
class CreateSLInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var integer Instance billing mode. 0 indicates postpaid, i.e., pay-as-you-go.
     */
    public $PayMode;

    /**
     * @var string Instance storage type. Fill in CLOUD_HSSD to represent high-performance cloud storage.
     */
    public $DiskType;

    /**
     * @var integer The disk capacity of a single node of the instance, in GB. The disk capacity of a single node should be greater than or equal to 100 and less than or equal to 250 x the number of CPU cores. The capacity adjustment step is 100.
     */
    public $DiskSize;

    /**
     * @var string Instance node specification. You can fill in 4C16G, 8C32G, 16C64G, or 32C128G, which is case-insensitive.
     */
    public $NodeType;

    /**
     * @var array Detailed configuration of the instance AZ. Currently, multiple availability zones are supported. The number of AZs must be 1 or 3, including the region names, VPC information, and number of nodes. The total number of nodes across all zones must be greater than or equal to 3 and less than or equal to 50.
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
     * @var string The unique random identifier with a time efficiency of 5 minutes, which needs to be specified by the caller to prevent the client from creating resources repeatedly. For example: a9a90aa6-****-****-****-fae360632808.
     */
    public $ClientToken;

    /**
     * @param string $InstanceName Instance name.
     * @param integer $PayMode Instance billing mode. 0 indicates postpaid, i.e., pay-as-you-go.
     * @param string $DiskType Instance storage type. Fill in CLOUD_HSSD to represent high-performance cloud storage.
     * @param integer $DiskSize The disk capacity of a single node of the instance, in GB. The disk capacity of a single node should be greater than or equal to 100 and less than or equal to 250 x the number of CPU cores. The capacity adjustment step is 100.
     * @param string $NodeType Instance node specification. You can fill in 4C16G, 8C32G, 16C64G, or 32C128G, which is case-insensitive.
     * @param array $ZoneSettings Detailed configuration of the instance AZ. Currently, multiple availability zones are supported. The number of AZs must be 1 or 3, including the region names, VPC information, and number of nodes. The total number of nodes across all zones must be greater than or equal to 3 and less than or equal to 50.
     * @param array $Tags List of tags to be bound to the instance.
     * @param PrePaySetting $PrePaySetting Prepaid parameter.
     * @param string $ClientToken The unique random identifier with a time efficiency of 5 minutes, which needs to be specified by the caller to prevent the client from creating resources repeatedly. For example: a9a90aa6-****-****-****-fae360632808.
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
    }
}
