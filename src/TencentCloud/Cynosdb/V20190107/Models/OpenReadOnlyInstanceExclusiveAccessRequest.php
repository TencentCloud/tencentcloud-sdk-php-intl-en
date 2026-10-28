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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenReadOnlyInstanceExclusiveAccess request structure.
 *
 * @method string getClusterId() Obtain Please use [Cluster information description](https://www.tencentcloud.com/document/api/1098/40752) to get the clusterId.
 * @method void setClusterId(string $ClusterId) Set Please use [Cluster information description](https://www.tencentcloud.com/document/api/1098/40752) to get the clusterId.
 * @method string getInstanceId() Obtain Please use [Cluster information description](https://www.tencentcloud.com/document/api/1098/40752) to get the instanceId.
 * @method void setInstanceId(string $InstanceId) Set Please use [Cluster information description](https://www.tencentcloud.com/document/api/1098/40752) to get the instanceId.
 * @method string getVpcId() Obtain Designated vpc ID. Please use [query the vpc list](https://www.tencentcloud.com/document/api/215/15778?from_cn_redirect=1) to get the vpc ID.
 * @method void setVpcId(string $VpcId) Set Designated vpc ID. Please use [query the vpc list](https://www.tencentcloud.com/document/api/215/15778?from_cn_redirect=1) to get the vpc ID.
 * @method string getSubnetId() Obtain Designated subnet ID. If vpc ID is set up, SubnetId is required. Please use query subnet list (https://www.tencentcloud.com/document/api/215/15784?from_cn_redirect=1) to get SubnetId.
 * @method void setSubnetId(string $SubnetId) Set Designated subnet ID. If vpc ID is set up, SubnetId is required. Please use query subnet list (https://www.tencentcloud.com/document/api/215/15784?from_cn_redirect=1) to get SubnetId.
 * @method integer getPort() Obtain User-defined port.
 * @method void setPort(integer $Port) Set User-defined port.
 * @method array getSecurityGroupIds() Obtain Security group ID. Please use [View Security Group](https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1) to get the SecurityGroupId.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group ID. Please use [View Security Group](https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1) to get the SecurityGroupId.
 */
class OpenReadOnlyInstanceExclusiveAccessRequest extends AbstractModel
{
    /**
     * @var string Please use [Cluster information description](https://www.tencentcloud.com/document/api/1098/40752) to get the clusterId.
     */
    public $ClusterId;

    /**
     * @var string Please use [Cluster information description](https://www.tencentcloud.com/document/api/1098/40752) to get the instanceId.
     */
    public $InstanceId;

    /**
     * @var string Designated vpc ID. Please use [query the vpc list](https://www.tencentcloud.com/document/api/215/15778?from_cn_redirect=1) to get the vpc ID.
     */
    public $VpcId;

    /**
     * @var string Designated subnet ID. If vpc ID is set up, SubnetId is required. Please use query subnet list (https://www.tencentcloud.com/document/api/215/15784?from_cn_redirect=1) to get SubnetId.
     */
    public $SubnetId;

    /**
     * @var integer User-defined port.
     */
    public $Port;

    /**
     * @var array Security group ID. Please use [View Security Group](https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1) to get the SecurityGroupId.
     */
    public $SecurityGroupIds;

    /**
     * @param string $ClusterId Please use [Cluster information description](https://www.tencentcloud.com/document/api/1098/40752) to get the clusterId.
     * @param string $InstanceId Please use [Cluster information description](https://www.tencentcloud.com/document/api/1098/40752) to get the instanceId.
     * @param string $VpcId Designated vpc ID. Please use [query the vpc list](https://www.tencentcloud.com/document/api/215/15778?from_cn_redirect=1) to get the vpc ID.
     * @param string $SubnetId Designated subnet ID. If vpc ID is set up, SubnetId is required. Please use query subnet list (https://www.tencentcloud.com/document/api/215/15784?from_cn_redirect=1) to get SubnetId.
     * @param integer $Port User-defined port.
     * @param array $SecurityGroupIds Security group ID. Please use [View Security Group](https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1) to get the SecurityGroupId.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
