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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCdbProxy request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method string getUniqVpcId() Obtain VPC ID. Obtain through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method void setUniqVpcId(string $UniqVpcId) Set VPC ID. Obtain through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method string getUniqSubnetId() Obtain Private subnet ID. Obtain through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method void setUniqSubnetId(string $UniqSubnetId) Set Private subnet ID. Obtain through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method array getProxyNodeCustom() Obtain Node specification configuration.
Parameter description in the example.
NodeCount: Number of nodes.
Region: Node region.
Zone: Node availability zone.
Cpu: Number of cores per proxy node (unit: core).
Mem: Memory size of each proxy node (unit: MB).
Remarks:
1. Database proxy supported node specifications are: 2C4000MB, 4C8000MB, 8C16000MB.
2. The above parameters (such as number of nodes, availability zone) are required. When calling the API, if incomplete, creation may fail.
 * @method void setProxyNodeCustom(array $ProxyNodeCustom) Set Node specification configuration.
Parameter description in the example.
NodeCount: Number of nodes.
Region: Node region.
Zone: Node availability zone.
Cpu: Number of cores per proxy node (unit: core).
Mem: Memory size of each proxy node (unit: MB).
Remarks:
1. Database proxy supported node specifications are: 2C4000MB, 4C8000MB, 8C16000MB.
2. The above parameters (such as number of nodes, availability zone) are required. When calling the API, if incomplete, creation may fail.
 * @method array getSecurityGroup() Obtain Security group
 * @method void setSecurityGroup(array $SecurityGroup) Set Security group
 * @method string getDesc() Obtain Description
 * @method void setDesc(string $Desc) Set Description
 * @method integer getConnectionPoolLimit() Obtain Connection pool threshold
Note: If you need to use the database proxy connection pool capability, the kernel minor version of the MySQL 8.0 primary instance must be equal to or greater than MySQL 8.0 20230630.
 * @method void setConnectionPoolLimit(integer $ConnectionPoolLimit) Set Connection pool threshold
Note: If you need to use the database proxy connection pool capability, the kernel minor version of the MySQL 8.0 primary instance must be equal to or greater than MySQL 8.0 20230630.
 * @method string getProxyVersion() Obtain Specify the Linux kernel version of the purchased proxy. Leave it blank to ship the latest version by default.
 * @method void setProxyVersion(string $ProxyVersion) Set Specify the Linux kernel version of the purchased proxy. Leave it blank to ship the latest version by default.
 */
class CreateCdbProxyRequest extends AbstractModel
{
    /**
     * @var string Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     */
    public $InstanceId;

    /**
     * @var string VPC ID. Obtain through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     */
    public $UniqVpcId;

    /**
     * @var string Private subnet ID. Obtain through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     */
    public $UniqSubnetId;

    /**
     * @var array Node specification configuration.
Parameter description in the example.
NodeCount: Number of nodes.
Region: Node region.
Zone: Node availability zone.
Cpu: Number of cores per proxy node (unit: core).
Mem: Memory size of each proxy node (unit: MB).
Remarks:
1. Database proxy supported node specifications are: 2C4000MB, 4C8000MB, 8C16000MB.
2. The above parameters (such as number of nodes, availability zone) are required. When calling the API, if incomplete, creation may fail.
     */
    public $ProxyNodeCustom;

    /**
     * @var array Security group
     */
    public $SecurityGroup;

    /**
     * @var string Description
     */
    public $Desc;

    /**
     * @var integer Connection pool threshold
Note: If you need to use the database proxy connection pool capability, the kernel minor version of the MySQL 8.0 primary instance must be equal to or greater than MySQL 8.0 20230630.
     */
    public $ConnectionPoolLimit;

    /**
     * @var string Specify the Linux kernel version of the purchased proxy. Leave it blank to ship the latest version by default.
     */
    public $ProxyVersion;

    /**
     * @param string $InstanceId Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     * @param string $UniqVpcId VPC ID. Obtain through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     * @param string $UniqSubnetId Private subnet ID. Obtain through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     * @param array $ProxyNodeCustom Node specification configuration.
Parameter description in the example.
NodeCount: Number of nodes.
Region: Node region.
Zone: Node availability zone.
Cpu: Number of cores per proxy node (unit: core).
Mem: Memory size of each proxy node (unit: MB).
Remarks:
1. Database proxy supported node specifications are: 2C4000MB, 4C8000MB, 8C16000MB.
2. The above parameters (such as number of nodes, availability zone) are required. When calling the API, if incomplete, creation may fail.
     * @param array $SecurityGroup Security group
     * @param string $Desc Description
     * @param integer $ConnectionPoolLimit Connection pool threshold
Note: If you need to use the database proxy connection pool capability, the kernel minor version of the MySQL 8.0 primary instance must be equal to or greater than MySQL 8.0 20230630.
     * @param string $ProxyVersion Specify the Linux kernel version of the purchased proxy. Leave it blank to ship the latest version by default.
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

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("ProxyNodeCustom",$param) and $param["ProxyNodeCustom"] !== null) {
            $this->ProxyNodeCustom = [];
            foreach ($param["ProxyNodeCustom"] as $key => $value){
                $obj = new ProxyNodeCustom();
                $obj->deserialize($value);
                array_push($this->ProxyNodeCustom, $obj);
            }
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("ConnectionPoolLimit",$param) and $param["ConnectionPoolLimit"] !== null) {
            $this->ConnectionPoolLimit = $param["ConnectionPoolLimit"];
        }

        if (array_key_exists("ProxyVersion",$param) and $param["ProxyVersion"] !== null) {
            $this->ProxyVersion = $param["ProxyVersion"];
        }
    }
}
