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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstancePost request structure.
 *
 * @method string getInstanceName() Obtain Instance name, which is a string of up to 64 characters. It can contain letters, digits, and hyphens (-) and must start with a letter.
 * @method void setInstanceName(string $InstanceName) Set Instance name, which is a string of up to 64 characters. It can contain letters, digits, and hyphens (-) and must start with a letter.
 * @method integer getBandWidth() Obtain Instance bandwidth
 * @method void setBandWidth(integer $BandWidth) Set Instance bandwidth
 * @method string getVpcId() Obtain VPC ID. If this parameter is left empty, the classic network will be used by default.
 * @method void setVpcId(string $VpcId) Set VPC ID. If this parameter is left empty, the classic network will be used by default.
 * @method string getSubnetId() Obtain Subnet ID, which is required for a VPC but not for the classic network.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID, which is required for a VPC but not for the classic network.
 * @method integer getMsgRetentionTime() Obtain The maximum retention period for instance logs in minutes. Default value: 1,440 minutes (1 day). Max value: 12960 minutes (90 days). This parameter is optional.
 * @method void setMsgRetentionTime(integer $MsgRetentionTime) Set The maximum retention period for instance logs in minutes. Default value: 1,440 minutes (1 day). Max value: 12960 minutes (90 days). This parameter is optional.
 * @method integer getZoneId() Obtain AZ
 * @method void setZoneId(integer $ZoneId) Set AZ
 * @method integer getClusterId() Obtain Cluster ID, which can be selected when you create an instance.
 * @method void setClusterId(integer $ClusterId) Set Cluster ID, which can be selected when you create an instance.
 */
class CreateInstancePostRequest extends AbstractModel
{
    /**
     * @var string Instance name, which is a string of up to 64 characters. It can contain letters, digits, and hyphens (-) and must start with a letter.
     */
    public $InstanceName;

    /**
     * @var integer Instance bandwidth
     */
    public $BandWidth;

    /**
     * @var string VPC ID. If this parameter is left empty, the classic network will be used by default.
     */
    public $VpcId;

    /**
     * @var string Subnet ID, which is required for a VPC but not for the classic network.
     */
    public $SubnetId;

    /**
     * @var integer The maximum retention period for instance logs in minutes. Default value: 1,440 minutes (1 day). Max value: 12960 minutes (90 days). This parameter is optional.
     */
    public $MsgRetentionTime;

    /**
     * @var integer AZ
     */
    public $ZoneId;

    /**
     * @var integer Cluster ID, which can be selected when you create an instance.
     */
    public $ClusterId;

    /**
     * @param string $InstanceName Instance name, which is a string of up to 64 characters. It can contain letters, digits, and hyphens (-) and must start with a letter.
     * @param integer $BandWidth Instance bandwidth
     * @param string $VpcId VPC ID. If this parameter is left empty, the classic network will be used by default.
     * @param string $SubnetId Subnet ID, which is required for a VPC but not for the classic network.
     * @param integer $MsgRetentionTime The maximum retention period for instance logs in minutes. Default value: 1,440 minutes (1 day). Max value: 12960 minutes (90 days). This parameter is optional.
     * @param integer $ZoneId AZ
     * @param integer $ClusterId Cluster ID, which can be selected when you create an instance.
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

        if (array_key_exists("BandWidth",$param) and $param["BandWidth"] !== null) {
            $this->BandWidth = $param["BandWidth"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("MsgRetentionTime",$param) and $param["MsgRetentionTime"] !== null) {
            $this->MsgRetentionTime = $param["MsgRetentionTime"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
