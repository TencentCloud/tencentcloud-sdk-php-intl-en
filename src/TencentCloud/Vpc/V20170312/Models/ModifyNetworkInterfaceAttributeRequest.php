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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNetworkInterfaceAttribute request structure.
 *
 * @method string getNetworkInterfaceId() Obtain The ID of the ENI instance, such as `eni-pxir56ns`.
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) Set The ID of the ENI instance, such as `eni-pxir56ns`.
 * @method string getNetworkInterfaceName() Obtain The name of the ENI. The maximum length is 60 characters.
 * @method void setNetworkInterfaceName(string $NetworkInterfaceName) Set The name of the ENI. The maximum length is 60 characters.
 * @method string getNetworkInterfaceDescription() Obtain ENI description can be named freely, but the maximum length is 60 characters.
 * @method void setNetworkInterfaceDescription(string $NetworkInterfaceDescription) Set ENI description can be named freely, but the maximum length is 60 characters.
 * @method array getSecurityGroupIds() Obtain The specified security groups to be bound with, such as ['sg-1dd51d'].
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set The specified security groups to be bound with, such as ['sg-1dd51d'].
 * @method string getTrunkingFlag() Obtain Configuration of the ENI trunking mode. Valid values: `Enable` and `Disable`. Default value: `Disable`.
 * @method void setTrunkingFlag(string $TrunkingFlag) Set Configuration of the ENI trunking mode. Valid values: `Enable` and `Disable`. Default value: `Disable`.
 */
class ModifyNetworkInterfaceAttributeRequest extends AbstractModel
{
    /**
     * @var string The ID of the ENI instance, such as `eni-pxir56ns`.
     */
    public $NetworkInterfaceId;

    /**
     * @var string The name of the ENI. The maximum length is 60 characters.
     */
    public $NetworkInterfaceName;

    /**
     * @var string ENI description can be named freely, but the maximum length is 60 characters.
     */
    public $NetworkInterfaceDescription;

    /**
     * @var array The specified security groups to be bound with, such as ['sg-1dd51d'].
     */
    public $SecurityGroupIds;

    /**
     * @var string Configuration of the ENI trunking mode. Valid values: `Enable` and `Disable`. Default value: `Disable`.
     */
    public $TrunkingFlag;

    /**
     * @param string $NetworkInterfaceId The ID of the ENI instance, such as `eni-pxir56ns`.
     * @param string $NetworkInterfaceName The name of the ENI. The maximum length is 60 characters.
     * @param string $NetworkInterfaceDescription ENI description can be named freely, but the maximum length is 60 characters.
     * @param array $SecurityGroupIds The specified security groups to be bound with, such as ['sg-1dd51d'].
     * @param string $TrunkingFlag Configuration of the ENI trunking mode. Valid values: `Enable` and `Disable`. Default value: `Disable`.
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
        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("NetworkInterfaceName",$param) and $param["NetworkInterfaceName"] !== null) {
            $this->NetworkInterfaceName = $param["NetworkInterfaceName"];
        }

        if (array_key_exists("NetworkInterfaceDescription",$param) and $param["NetworkInterfaceDescription"] !== null) {
            $this->NetworkInterfaceDescription = $param["NetworkInterfaceDescription"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("TrunkingFlag",$param) and $param["TrunkingFlag"] !== null) {
            $this->TrunkingFlag = $param["TrunkingFlag"];
        }
    }
}
