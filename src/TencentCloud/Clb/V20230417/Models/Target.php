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
namespace TencentCloud\Clb\V20230417\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Forwarding target, namely, a real server bound to the CLB instance
 *
 * @method integer getPort() Obtain Listening port of the backend service.
Note: This parameter must be specified when binding to CVM (Cloud Virtual Machine) or ENI (Elastic Network Interface).
 * @method void setPort(integer $Port) Set Listening port of the backend service.
Note: This parameter must be specified when binding to CVM (Cloud Virtual Machine) or ENI (Elastic Network Interface).
 * @method string getType() Obtain Backend service type, optional: CVM (Cloud Virtual Machine), ENI (Elastic Network Interface). As an input parameter, this parameter does not take effect.
 * @method void setType(string $Type) Set Backend service type, optional: CVM (Cloud Virtual Machine), ENI (Elastic Network Interface). As an input parameter, this parameter does not take effect.
 * @method string getInstanceId() Obtain This parameter must be passed in when binding to CVM. It represents the unique ID of the CVM and can be obtained from the InstanceId field in the response of the DescribeInstances API. It indicates binding to the primary IPv4 address of the primary network interface. The following scenarios do not support specifying InstanceId: binding to non-CVM resources, binding to auxiliary network interface IPs on CVM, binding to CVM through cross-region 2.0, and binding to IPv6 addresses of CVM.
Note: You can only input one of the InstanceId or EniIp parameter.
 * @method void setInstanceId(string $InstanceId) Set This parameter must be passed in when binding to CVM. It represents the unique ID of the CVM and can be obtained from the InstanceId field in the response of the DescribeInstances API. It indicates binding to the primary IPv4 address of the primary network interface. The following scenarios do not support specifying InstanceId: binding to non-CVM resources, binding to auxiliary network interface IPs on CVM, binding to CVM through cross-region 2.0, and binding to IPv6 addresses of CVM.
Note: You can only input one of the InstanceId or EniIp parameter.
 * @method integer getWeight() Obtain The forwarding weight of the backend service after modification, with a value range of [0, 100], defaults to 10. This parameter has a higher priority than the Weight parameter in [RsWeightRule](https://www.tencentcloud.com/document/api/214/30694?from_cn_redirect=1#RsWeightRule). The final weight value is based on this Weight parameter. Only when this Weight parameter is empty, the Weight parameter in RsWeightRule will be used.
 * @method void setWeight(integer $Weight) Set The forwarding weight of the backend service after modification, with a value range of [0, 100], defaults to 10. This parameter has a higher priority than the Weight parameter in [RsWeightRule](https://www.tencentcloud.com/document/api/214/30694?from_cn_redirect=1#RsWeightRule). The final weight value is based on this Weight parameter. Only when this Weight parameter is empty, the Weight parameter in RsWeightRule will be used.
 * @method string getEniIp() Obtain This parameter must be passed in for IP binding. It supports ENI IPs and other private IP addresses. If it is an ENI, it must first bind to a CVM before binding to a CLB instance.
Note: You can only input one of the InstanceId or EniIp parameter. If it is binding a dual-stack IPV6 instance, you must pass this parameter. If it is cross-region binding, you must pass the parameter, and the InstanceId parameter is not supported.
 * @method void setEniIp(string $EniIp) Set This parameter must be passed in for IP binding. It supports ENI IPs and other private IP addresses. If it is an ENI, it must first bind to a CVM before binding to a CLB instance.
Note: You can only input one of the InstanceId or EniIp parameter. If it is binding a dual-stack IPV6 instance, you must pass this parameter. If it is cross-region binding, you must pass the parameter, and the InstanceId parameter is not supported.
 */
class Target extends AbstractModel
{
    /**
     * @var integer Listening port of the backend service.
Note: This parameter must be specified when binding to CVM (Cloud Virtual Machine) or ENI (Elastic Network Interface).
     */
    public $Port;

    /**
     * @var string Backend service type, optional: CVM (Cloud Virtual Machine), ENI (Elastic Network Interface). As an input parameter, this parameter does not take effect.
     */
    public $Type;

    /**
     * @var string This parameter must be passed in when binding to CVM. It represents the unique ID of the CVM and can be obtained from the InstanceId field in the response of the DescribeInstances API. It indicates binding to the primary IPv4 address of the primary network interface. The following scenarios do not support specifying InstanceId: binding to non-CVM resources, binding to auxiliary network interface IPs on CVM, binding to CVM through cross-region 2.0, and binding to IPv6 addresses of CVM.
Note: You can only input one of the InstanceId or EniIp parameter.
     */
    public $InstanceId;

    /**
     * @var integer The forwarding weight of the backend service after modification, with a value range of [0, 100], defaults to 10. This parameter has a higher priority than the Weight parameter in [RsWeightRule](https://www.tencentcloud.com/document/api/214/30694?from_cn_redirect=1#RsWeightRule). The final weight value is based on this Weight parameter. Only when this Weight parameter is empty, the Weight parameter in RsWeightRule will be used.
     */
    public $Weight;

    /**
     * @var string This parameter must be passed in for IP binding. It supports ENI IPs and other private IP addresses. If it is an ENI, it must first bind to a CVM before binding to a CLB instance.
Note: You can only input one of the InstanceId or EniIp parameter. If it is binding a dual-stack IPV6 instance, you must pass this parameter. If it is cross-region binding, you must pass the parameter, and the InstanceId parameter is not supported.
     */
    public $EniIp;

    /**
     * @param integer $Port Listening port of the backend service.
Note: This parameter must be specified when binding to CVM (Cloud Virtual Machine) or ENI (Elastic Network Interface).
     * @param string $Type Backend service type, optional: CVM (Cloud Virtual Machine), ENI (Elastic Network Interface). As an input parameter, this parameter does not take effect.
     * @param string $InstanceId This parameter must be passed in when binding to CVM. It represents the unique ID of the CVM and can be obtained from the InstanceId field in the response of the DescribeInstances API. It indicates binding to the primary IPv4 address of the primary network interface. The following scenarios do not support specifying InstanceId: binding to non-CVM resources, binding to auxiliary network interface IPs on CVM, binding to CVM through cross-region 2.0, and binding to IPv6 addresses of CVM.
Note: You can only input one of the InstanceId or EniIp parameter.
     * @param integer $Weight The forwarding weight of the backend service after modification, with a value range of [0, 100], defaults to 10. This parameter has a higher priority than the Weight parameter in [RsWeightRule](https://www.tencentcloud.com/document/api/214/30694?from_cn_redirect=1#RsWeightRule). The final weight value is based on this Weight parameter. Only when this Weight parameter is empty, the Weight parameter in RsWeightRule will be used.
     * @param string $EniIp This parameter must be passed in for IP binding. It supports ENI IPs and other private IP addresses. If it is an ENI, it must first bind to a CVM before binding to a CLB instance.
Note: You can only input one of the InstanceId or EniIp parameter. If it is binding a dual-stack IPV6 instance, you must pass this parameter. If it is cross-region binding, you must pass the parameter, and the InstanceId parameter is not supported.
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
    }
}
