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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of CVMs and ENIs that use cross-region binding 2.0
 *
 * @method string getLocalVpcId() Obtain VPC ID of the CLB instance
 * @method void setLocalVpcId(string $LocalVpcId) Set VPC ID of the CLB instance
 * @method string getVpcId() Obtain VPC ID of the CVM or ENI instance
 * @method void setVpcId(string $VpcId) Set VPC ID of the CVM or ENI instance
 * @method string getIP() Obtain IP address of the CVM or ENI instance
 * @method void setIP(string $IP) Set IP address of the CVM or ENI instance
 * @method string getVpcName() Obtain VPC name of the CVM or ENI instance
 * @method void setVpcName(string $VpcName) Set VPC name of the CVM or ENI instance
 * @method string getEniId() Obtain ENI ID of the CVM instance
 * @method void setEniId(string $EniId) Set ENI ID of the CVM instance
 * @method string getInstanceId() Obtain ID of the CVM instance
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setInstanceId(string $InstanceId) Set ID of the CVM instance
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getInstanceName() Obtain Name of the CVM instance
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setInstanceName(string $InstanceName) Set Name of the CVM instance
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getRegion() Obtain Region of the CVM or ENI instance
 * @method void setRegion(string $Region) Set Region of the CVM or ENI instance
 */
class CrossTargets extends AbstractModel
{
    /**
     * @var string VPC ID of the CLB instance
     */
    public $LocalVpcId;

    /**
     * @var string VPC ID of the CVM or ENI instance
     */
    public $VpcId;

    /**
     * @var string IP address of the CVM or ENI instance
     */
    public $IP;

    /**
     * @var string VPC name of the CVM or ENI instance
     */
    public $VpcName;

    /**
     * @var string ENI ID of the CVM instance
     */
    public $EniId;

    /**
     * @var string ID of the CVM instance
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $InstanceId;

    /**
     * @var string Name of the CVM instance
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $InstanceName;

    /**
     * @var string Region of the CVM or ENI instance
     */
    public $Region;

    /**
     * @param string $LocalVpcId VPC ID of the CLB instance
     * @param string $VpcId VPC ID of the CVM or ENI instance
     * @param string $IP IP address of the CVM or ENI instance
     * @param string $VpcName VPC name of the CVM or ENI instance
     * @param string $EniId ENI ID of the CVM instance
     * @param string $InstanceId ID of the CVM instance
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $InstanceName Name of the CVM instance
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $Region Region of the CVM or ENI instance
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
        if (array_key_exists("LocalVpcId",$param) and $param["LocalVpcId"] !== null) {
            $this->LocalVpcId = $param["LocalVpcId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("EniId",$param) and $param["EniId"] !== null) {
            $this->EniId = $param["EniId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
