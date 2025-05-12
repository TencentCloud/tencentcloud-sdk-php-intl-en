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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenReadOnlyInstanceExclusiveAccess request structure.
 *
 * @method string getClusterId() Obtain Please use the cluster information description (https://intl.cloud.tencent.com/document/api/1003/48086?from_cn_redirect=1) to obtain the clusterId.
 * @method void setClusterId(string $ClusterId) Set Please use the cluster information description (https://intl.cloud.tencent.com/document/api/1003/48086?from_cn_redirect=1) to obtain the clusterId.
 * @method string getInstanceId() Obtain Please use the cluster information description (https://intl.cloud.tencent.com/document/api/1003/48086?from_cn_redirect=1) to obtain the instanceId.
 * @method void setInstanceId(string $InstanceId) Set Please use the cluster information description (https://intl.cloud.tencent.com/document/api/1003/48086?from_cn_redirect=1) to obtain the instanceId.
 * @method string getVpcId() Obtain Specifies the designated vpc ID. please use the "query vpc list" to obtain the vpc ID.
 * @method void setVpcId(string $VpcId) Set Specifies the designated vpc ID. please use the "query vpc list" to obtain the vpc ID.
 * @method string getSubnetId() Obtain Specified subnet ID. if vpc ID is set, SubnetId is required. please use query subnet list (https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) to get SubnetId.
 * @method void setSubnetId(string $SubnetId) Set Specified subnet ID. if vpc ID is set, SubnetId is required. please use query subnet list (https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) to get SubnetId.
 * @method integer getPort() Obtain User-Defined port.
 * @method void setPort(integer $Port) Set User-Defined port.
 * @method array getSecurityGroupIds() Obtain Security group ID. use [view security group](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) to obtain the SecurityGroupId.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group ID. use [view security group](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) to obtain the SecurityGroupId.
 */
class OpenReadOnlyInstanceExclusiveAccessRequest extends AbstractModel
{
    /**
     * @var string Please use the cluster information description (https://intl.cloud.tencent.com/document/api/1003/48086?from_cn_redirect=1) to obtain the clusterId.
     */
    public $ClusterId;

    /**
     * @var string Please use the cluster information description (https://intl.cloud.tencent.com/document/api/1003/48086?from_cn_redirect=1) to obtain the instanceId.
     */
    public $InstanceId;

    /**
     * @var string Specifies the designated vpc ID. please use the "query vpc list" to obtain the vpc ID.
     */
    public $VpcId;

    /**
     * @var string Specified subnet ID. if vpc ID is set, SubnetId is required. please use query subnet list (https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) to get SubnetId.
     */
    public $SubnetId;

    /**
     * @var integer User-Defined port.
     */
    public $Port;

    /**
     * @var array Security group ID. use [view security group](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) to obtain the SecurityGroupId.
     */
    public $SecurityGroupIds;

    /**
     * @param string $ClusterId Please use the cluster information description (https://intl.cloud.tencent.com/document/api/1003/48086?from_cn_redirect=1) to obtain the clusterId.
     * @param string $InstanceId Please use the cluster information description (https://intl.cloud.tencent.com/document/api/1003/48086?from_cn_redirect=1) to obtain the instanceId.
     * @param string $VpcId Specifies the designated vpc ID. please use the "query vpc list" to obtain the vpc ID.
     * @param string $SubnetId Specified subnet ID. if vpc ID is set, SubnetId is required. please use query subnet list (https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) to get SubnetId.
     * @param integer $Port User-Defined port.
     * @param array $SecurityGroupIds Security group ID. use [view security group](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) to obtain the SecurityGroupId.
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
