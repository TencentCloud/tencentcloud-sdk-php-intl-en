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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance associated with an enterprise security group
 *
 * @method string getInstanceId() Obtain Instance ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setInstanceId(string $InstanceId) Set Instance ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getInstanceName() Obtain Instance name
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setInstanceName(string $InstanceName) Set Instance name
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getType() Obtain Instance type. 3: CVM instance; 4: CLB instance; 5: ENI instance; 6: Cloud database
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setType(integer $Type) Set Instance type. 3: CVM instance; 4: CLB instance; 5: ENI instance; 6: Cloud database
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getVpcId() Obtain VPC ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setVpcId(string $VpcId) Set VPC ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getVpcName() Obtain VPC name
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setVpcName(string $VpcName) Set VPC name
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getPublicIp() Obtain Public IP
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setPublicIp(string $PublicIp) Set Public IP
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getIp() Obtain Private IP
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setIp(string $Ip) Set Private IP
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getSecurityGroupCount() Obtain The number of associated security groups
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setSecurityGroupCount(integer $SecurityGroupCount) Set The number of associated security groups
Note: This field may return `null`, indicating that no valid value was found.
 */
class AssociatedInstanceInfo extends AbstractModel
{
    /**
     * @var string Instance ID
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $InstanceId;

    /**
     * @var string Instance name
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $InstanceName;

    /**
     * @var integer Instance type. 3: CVM instance; 4: CLB instance; 5: ENI instance; 6: Cloud database
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Type;

    /**
     * @var string VPC ID
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $VpcId;

    /**
     * @var string VPC name
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $VpcName;

    /**
     * @var string Public IP
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $PublicIp;

    /**
     * @var string Private IP
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Ip;

    /**
     * @var integer The number of associated security groups
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $SecurityGroupCount;

    /**
     * @param string $InstanceId Instance ID
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $InstanceName Instance name
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $Type Instance type. 3: CVM instance; 4: CLB instance; 5: ENI instance; 6: Cloud database
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $VpcId VPC ID
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $VpcName VPC name
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $PublicIp Public IP
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $Ip Private IP
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $SecurityGroupCount The number of associated security groups
Note: This field may return `null`, indicating that no valid value was found.
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("SecurityGroupCount",$param) and $param["SecurityGroupCount"] !== null) {
            $this->SecurityGroupCount = $param["SecurityGroupCount"];
        }
    }
}
