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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssociateDDoSEipAddress request structure.
 *
 * @method string getInstanceId() Obtain Anti-DDoS instance ID (only Anti-DDoS Advanced). For example, `bgpip-0000011x`.
 * @method void setInstanceId(string $InstanceId) Set Anti-DDoS instance ID (only Anti-DDoS Advanced). For example, `bgpip-0000011x`.
 * @method string getEip() Obtain EIP of the Anti-DDoS instance ID.
 * @method void setEip(string $Eip) Set EIP of the Anti-DDoS instance ID.
 * @method string getCvmInstanceID() Obtain Instance ID to bind. For example, `ins-11112222`. It can be queried in the console or obtained from `InstanceId` returned by `DescribeInstances`.
 * @method void setCvmInstanceID(string $CvmInstanceID) Set Instance ID to bind. For example, `ins-11112222`. It can be queried in the console or obtained from `InstanceId` returned by `DescribeInstances`.
 * @method string getCvmRegion() Obtain Region of the CVM instance. For example, `ap-hongkong`.
 * @method void setCvmRegion(string $CvmRegion) Set Region of the CVM instance. For example, `ap-hongkong`.
 */
class AssociateDDoSEipAddressRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS instance ID (only Anti-DDoS Advanced). For example, `bgpip-0000011x`.
     */
    public $InstanceId;

    /**
     * @var string EIP of the Anti-DDoS instance ID.
     */
    public $Eip;

    /**
     * @var string Instance ID to bind. For example, `ins-11112222`. It can be queried in the console or obtained from `InstanceId` returned by `DescribeInstances`.
     */
    public $CvmInstanceID;

    /**
     * @var string Region of the CVM instance. For example, `ap-hongkong`.
     */
    public $CvmRegion;

    /**
     * @param string $InstanceId Anti-DDoS instance ID (only Anti-DDoS Advanced). For example, `bgpip-0000011x`.
     * @param string $Eip EIP of the Anti-DDoS instance ID.
     * @param string $CvmInstanceID Instance ID to bind. For example, `ins-11112222`. It can be queried in the console or obtained from `InstanceId` returned by `DescribeInstances`.
     * @param string $CvmRegion Region of the CVM instance. For example, `ap-hongkong`.
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

        if (array_key_exists("Eip",$param) and $param["Eip"] !== null) {
            $this->Eip = $param["Eip"];
        }

        if (array_key_exists("CvmInstanceID",$param) and $param["CvmInstanceID"] !== null) {
            $this->CvmInstanceID = $param["CvmInstanceID"];
        }

        if (array_key_exists("CvmRegion",$param) and $param["CvmRegion"] !== null) {
            $this->CvmRegion = $param["CvmRegion"];
        }
    }
}
