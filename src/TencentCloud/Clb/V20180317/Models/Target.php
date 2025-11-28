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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Redirect target, i.e., the real server bound to a CLB
 *
 * @method integer getPort() Obtain Specifies the listening port of the backend service.
Note: this parameter must be specified when binding to CVM (cloud virtual machine) or ENI (elastic network interface).
 * @method void setPort(integer $Port) Set Specifies the listening port of the backend service.
Note: this parameter must be specified when binding to CVM (cloud virtual machine) or ENI (elastic network interface).
 * @method string getType() Obtain Specifies the backend service type. valid values: CVM (cloud virtual machine), ENI (elastic network interface). as an input parameter, this parameter does not take effect currently.
 * @method void setType(string $Type) Set Specifies the backend service type. valid values: CVM (cloud virtual machine), ENI (elastic network interface). as an input parameter, this parameter does not take effect currently.
 * @method string getInstanceId() Obtain This parameter must be passed in when binding to CVM. it represents the unique ID of the CVM and can be obtained from the InstanceId field in the response of the DescribeInstances api. indicates binding the primary IPv4 address of the primary network interface. the InstanceId cannot be specified in the following scenarios: binding to non-CVM resources, binding to auxiliary network interface ips on CVM, binding to CVM through cross-domain 2.0, and binding to IPv6 addresses of CVM.
Note: you can only input one of the InstanceId parameter or the EniIp parameter.
 * @method void setInstanceId(string $InstanceId) Set This parameter must be passed in when binding to CVM. it represents the unique ID of the CVM and can be obtained from the InstanceId field in the response of the DescribeInstances api. indicates binding the primary IPv4 address of the primary network interface. the InstanceId cannot be specified in the following scenarios: binding to non-CVM resources, binding to auxiliary network interface ips on CVM, binding to CVM through cross-domain 2.0, and binding to IPv6 addresses of CVM.
Note: you can only input one of the InstanceId parameter or the EniIp parameter.
 * @method integer getWeight() Obtain The new forwarding weight of the real server. Value range: [0, 100]. Default: 10. This parameter takes priority over `Weight` in [`RsWeightRule`](https://intl.cloud.tencent.com/document/api/214/30694?from_cn_redirect=1#RsWeightRule). If it’s left empty, the value of `Weight` in `RsWeightRule` will be used.
 * @method void setWeight(integer $Weight) Set The new forwarding weight of the real server. Value range: [0, 100]. Default: 10. This parameter takes priority over `Weight` in [`RsWeightRule`](https://intl.cloud.tencent.com/document/api/214/30694?from_cn_redirect=1#RsWeightRule). If it’s left empty, the value of `Weight` in `RsWeightRule` will be used.
 * @method string getEniIp() Obtain This parameter must be passed in for IP binding. it supports eni ips and other private IP addresses. if it is an eni, it must first be bound to a CVM before binding to a cloud load balancer instance.
Note: only one of the InstanceId parameter and EniIp parameter can be passed. if binding a dual-stack IPV6 instance, this parameter must be passed. if it is a cross-region binding, the parameter must be passed and the InstanceId parameter is not supported.
 * @method void setEniIp(string $EniIp) Set This parameter must be passed in for IP binding. it supports eni ips and other private IP addresses. if it is an eni, it must first be bound to a CVM before binding to a cloud load balancer instance.
Note: only one of the InstanceId parameter and EniIp parameter can be passed. if binding a dual-stack IPV6 instance, this parameter must be passed. if it is a cross-region binding, the parameter must be passed and the InstanceId parameter is not supported.
 * @method string getTag() Obtain Tag.
 * @method void setTag(string $Tag) Set Tag.
 */
class Target extends AbstractModel
{
    /**
     * @var integer Specifies the listening port of the backend service.
Note: this parameter must be specified when binding to CVM (cloud virtual machine) or ENI (elastic network interface).
     */
    public $Port;

    /**
     * @var string Specifies the backend service type. valid values: CVM (cloud virtual machine), ENI (elastic network interface). as an input parameter, this parameter does not take effect currently.
     */
    public $Type;

    /**
     * @var string This parameter must be passed in when binding to CVM. it represents the unique ID of the CVM and can be obtained from the InstanceId field in the response of the DescribeInstances api. indicates binding the primary IPv4 address of the primary network interface. the InstanceId cannot be specified in the following scenarios: binding to non-CVM resources, binding to auxiliary network interface ips on CVM, binding to CVM through cross-domain 2.0, and binding to IPv6 addresses of CVM.
Note: you can only input one of the InstanceId parameter or the EniIp parameter.
     */
    public $InstanceId;

    /**
     * @var integer The new forwarding weight of the real server. Value range: [0, 100]. Default: 10. This parameter takes priority over `Weight` in [`RsWeightRule`](https://intl.cloud.tencent.com/document/api/214/30694?from_cn_redirect=1#RsWeightRule). If it’s left empty, the value of `Weight` in `RsWeightRule` will be used.
     */
    public $Weight;

    /**
     * @var string This parameter must be passed in for IP binding. it supports eni ips and other private IP addresses. if it is an eni, it must first be bound to a CVM before binding to a cloud load balancer instance.
Note: only one of the InstanceId parameter and EniIp parameter can be passed. if binding a dual-stack IPV6 instance, this parameter must be passed. if it is a cross-region binding, the parameter must be passed and the InstanceId parameter is not supported.
     */
    public $EniIp;

    /**
     * @var string Tag.
     */
    public $Tag;

    /**
     * @param integer $Port Specifies the listening port of the backend service.
Note: this parameter must be specified when binding to CVM (cloud virtual machine) or ENI (elastic network interface).
     * @param string $Type Specifies the backend service type. valid values: CVM (cloud virtual machine), ENI (elastic network interface). as an input parameter, this parameter does not take effect currently.
     * @param string $InstanceId This parameter must be passed in when binding to CVM. it represents the unique ID of the CVM and can be obtained from the InstanceId field in the response of the DescribeInstances api. indicates binding the primary IPv4 address of the primary network interface. the InstanceId cannot be specified in the following scenarios: binding to non-CVM resources, binding to auxiliary network interface ips on CVM, binding to CVM through cross-domain 2.0, and binding to IPv6 addresses of CVM.
Note: you can only input one of the InstanceId parameter or the EniIp parameter.
     * @param integer $Weight The new forwarding weight of the real server. Value range: [0, 100]. Default: 10. This parameter takes priority over `Weight` in [`RsWeightRule`](https://intl.cloud.tencent.com/document/api/214/30694?from_cn_redirect=1#RsWeightRule). If it’s left empty, the value of `Weight` in `RsWeightRule` will be used.
     * @param string $EniIp This parameter must be passed in for IP binding. it supports eni ips and other private IP addresses. if it is an eni, it must first be bound to a CVM before binding to a cloud load balancer instance.
Note: only one of the InstanceId parameter and EniIp parameter can be passed. if binding a dual-stack IPV6 instance, this parameter must be passed. if it is a cross-region binding, the parameter must be passed and the InstanceId parameter is not supported.
     * @param string $Tag Tag.
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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("EniIp",$param) and $param["EniIp"] !== null) {
            $this->EniIp = $param["EniIp"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }
    }
}
