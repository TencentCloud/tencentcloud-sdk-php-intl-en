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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Reinstallation parameter of existing instances
 *
 * @method array getInstanceIds() Obtain Cluster ID
 * @method void setInstanceIds(array $InstanceIds) Set Cluster ID
 * @method InstanceAdvancedSettings getInstanceAdvancedSettings() Obtain Additional parameter information required for the instance (currently not supported by the backend, we will implement this in future versions)
 * @method void setInstanceAdvancedSettings(InstanceAdvancedSettings $InstanceAdvancedSettings) Set Additional parameter information required for the instance (currently not supported by the backend, we will implement this in future versions)
 * @method EnhancedService getEnhancedService() Obtain Enhanced services. This parameter is used to specify whether to enable Cloud Security, Cloud Monitor and other services. If this parameter is not specified, Cloud Monitor and Cloud Security are enabled by default.
 * @method void setEnhancedService(EnhancedService $EnhancedService) Set Enhanced services. This parameter is used to specify whether to enable Cloud Security, Cloud Monitor and other services. If this parameter is not specified, Cloud Monitor and Cloud Security are enabled by default.
 * @method LoginSettings getLoginSettings() Obtain Node login information (currently only supports using Password or single KeyIds)
 * @method void setLoginSettings(LoginSettings $LoginSettings) Set Node login information (currently only supports using Password or single KeyIds)
 * @method array getSecurityGroupIds() Obtain Security group to which the instance belongs. This parameter can be obtained from the sgId field in the returned values of DescribeSecurityGroups. If this parameter is not specified, the default security group is bound. (Currently, you can only set a single sgId)
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group to which the instance belongs. This parameter can be obtained from the sgId field in the returned values of DescribeSecurityGroups. If this parameter is not specified, the default security group is bound. (Currently, you can only set a single sgId)
 * @method string getHostName() Obtain When reinstalling the system, you can specify the HostName of the modified instance (when the cluster is in HostName mode, this parameter is required, and the rule name is the same as the [Create CVM Instance](https://intl.cloud.tencent.com/document/product/213/15730?from_cn_redirect=1) API HostName except for uppercase letters not being supported.
 * @method void setHostName(string $HostName) Set When reinstalling the system, you can specify the HostName of the modified instance (when the cluster is in HostName mode, this parameter is required, and the rule name is the same as the [Create CVM Instance](https://intl.cloud.tencent.com/document/product/213/15730?from_cn_redirect=1) API HostName except for uppercase letters not being supported.
 */
class ExistedInstancesPara extends AbstractModel
{
    /**
     * @var array Cluster ID
     */
    public $InstanceIds;

    /**
     * @var InstanceAdvancedSettings Additional parameter information required for the instance (currently not supported by the backend, we will implement this in future versions)
     */
    public $InstanceAdvancedSettings;

    /**
     * @var EnhancedService Enhanced services. This parameter is used to specify whether to enable Cloud Security, Cloud Monitor and other services. If this parameter is not specified, Cloud Monitor and Cloud Security are enabled by default.
     */
    public $EnhancedService;

    /**
     * @var LoginSettings Node login information (currently only supports using Password or single KeyIds)
     */
    public $LoginSettings;

    /**
     * @var array Security group to which the instance belongs. This parameter can be obtained from the sgId field in the returned values of DescribeSecurityGroups. If this parameter is not specified, the default security group is bound. (Currently, you can only set a single sgId)
     */
    public $SecurityGroupIds;

    /**
     * @var string When reinstalling the system, you can specify the HostName of the modified instance (when the cluster is in HostName mode, this parameter is required, and the rule name is the same as the [Create CVM Instance](https://intl.cloud.tencent.com/document/product/213/15730?from_cn_redirect=1) API HostName except for uppercase letters not being supported.
     */
    public $HostName;

    /**
     * @param array $InstanceIds Cluster ID
     * @param InstanceAdvancedSettings $InstanceAdvancedSettings Additional parameter information required for the instance (currently not supported by the backend, we will implement this in future versions)
     * @param EnhancedService $EnhancedService Enhanced services. This parameter is used to specify whether to enable Cloud Security, Cloud Monitor and other services. If this parameter is not specified, Cloud Monitor and Cloud Security are enabled by default.
     * @param LoginSettings $LoginSettings Node login information (currently only supports using Password or single KeyIds)
     * @param array $SecurityGroupIds Security group to which the instance belongs. This parameter can be obtained from the sgId field in the returned values of DescribeSecurityGroups. If this parameter is not specified, the default security group is bound. (Currently, you can only set a single sgId)
     * @param string $HostName When reinstalling the system, you can specify the HostName of the modified instance (when the cluster is in HostName mode, this parameter is required, and the rule name is the same as the [Create CVM Instance](https://intl.cloud.tencent.com/document/product/213/15730?from_cn_redirect=1) API HostName except for uppercase letters not being supported.
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceAdvancedSettings",$param) and $param["InstanceAdvancedSettings"] !== null) {
            $this->InstanceAdvancedSettings = new InstanceAdvancedSettings();
            $this->InstanceAdvancedSettings->deserialize($param["InstanceAdvancedSettings"]);
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new EnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }
    }
}
