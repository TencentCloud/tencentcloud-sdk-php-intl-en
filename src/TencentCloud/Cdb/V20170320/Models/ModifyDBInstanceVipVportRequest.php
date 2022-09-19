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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceVipVport request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv, cdbro-c2nl9rpv, or cdbrg-c3nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page. You can use the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872) API to query the ID, which is the value of the `InstanceId` output parameter.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv, cdbro-c2nl9rpv, or cdbrg-c3nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page. You can use the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872) API to query the ID, which is the value of the `InstanceId` output parameter.
 * @method string getDstIp() Obtain Target IP. Either this parameter or `DstPort` must be passed in.
 * @method void setDstIp(string $DstIp) Set Target IP. Either this parameter or `DstPort` must be passed in.
 * @method integer getDstPort() Obtain Target port number. Value range: 1024-65535. Either this parameter or `DstIp` must be passed in.
 * @method void setDstPort(integer $DstPort) Set Target port number. Value range: 1024-65535. Either this parameter or `DstIp` must be passed in.
 * @method string getUniqVpcId() Obtain Unified VPC ID
 * @method void setUniqVpcId(string $UniqVpcId) Set Unified VPC ID
 * @method string getUniqSubnetId() Obtain Unified subnet ID
 * @method void setUniqSubnetId(string $UniqSubnetId) Set Unified subnet ID
 * @method integer getReleaseDuration() Obtain Repossession duration in hours for old IP in the original network when changing from classic network to VPC or changing the VPC subnet. Value range: 0–168. Default value: `24`.
 * @method void setReleaseDuration(integer $ReleaseDuration) Set Repossession duration in hours for old IP in the original network when changing from classic network to VPC or changing the VPC subnet. Value range: 0–168. Default value: `24`.
 */
class ModifyDBInstanceVipVportRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv, cdbro-c2nl9rpv, or cdbrg-c3nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page. You can use the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872) API to query the ID, which is the value of the `InstanceId` output parameter.
     */
    public $InstanceId;

    /**
     * @var string Target IP. Either this parameter or `DstPort` must be passed in.
     */
    public $DstIp;

    /**
     * @var integer Target port number. Value range: 1024-65535. Either this parameter or `DstIp` must be passed in.
     */
    public $DstPort;

    /**
     * @var string Unified VPC ID
     */
    public $UniqVpcId;

    /**
     * @var string Unified subnet ID
     */
    public $UniqSubnetId;

    /**
     * @var integer Repossession duration in hours for old IP in the original network when changing from classic network to VPC or changing the VPC subnet. Value range: 0–168. Default value: `24`.
     */
    public $ReleaseDuration;

    /**
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv, cdbro-c2nl9rpv, or cdbrg-c3nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page. You can use the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872) API to query the ID, which is the value of the `InstanceId` output parameter.
     * @param string $DstIp Target IP. Either this parameter or `DstPort` must be passed in.
     * @param integer $DstPort Target port number. Value range: 1024-65535. Either this parameter or `DstIp` must be passed in.
     * @param string $UniqVpcId Unified VPC ID
     * @param string $UniqSubnetId Unified subnet ID
     * @param integer $ReleaseDuration Repossession duration in hours for old IP in the original network when changing from classic network to VPC or changing the VPC subnet. Value range: 0–168. Default value: `24`.
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

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("ReleaseDuration",$param) and $param["ReleaseDuration"] !== null) {
            $this->ReleaseDuration = $param["ReleaseDuration"];
        }
    }
}
