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
 * Node upgrade and reinstallation parameters
 *
 * @method InstanceAdvancedSettings getInstanceAdvancedSettings() Obtain Additional parameters set for the instance
 * @method void setInstanceAdvancedSettings(InstanceAdvancedSettings $InstanceAdvancedSettings) Set Additional parameters set for the instance
 * @method EnhancedService getEnhancedService() Obtain Enhanced services. You can use this parameter to specify whether to enable services such as Cloud Security and Cloud Monitor. If this parameter is not specified, Cloud Monitor and Cloud Security will be enabled by default.
 * @method void setEnhancedService(EnhancedService $EnhancedService) Set Enhanced services. You can use this parameter to specify whether to enable services such as Cloud Security and Cloud Monitor. If this parameter is not specified, Cloud Monitor and Cloud Security will be enabled by default.
 * @method LoginSettings getLoginSettings() Obtain Node login information. For now, it only supports Password or a single KeyIds
 * @method void setLoginSettings(LoginSettings $LoginSettings) Set Node login information. For now, it only supports Password or a single KeyIds
 * @method array getSecurityGroupIds() Obtain Security group to which the instance belongs. This parameter can be obtained from the `sgId` field in the response of `DescribeSecurityGroups`. If this parameter is not specified, the default security group is bound. (Currently, you can only set a single sgId.)
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group to which the instance belongs. This parameter can be obtained from the `sgId` field in the response of `DescribeSecurityGroups`. If this parameter is not specified, the default security group is bound. (Currently, you can only set a single sgId.)
 */
class UpgradeNodeResetParam extends AbstractModel
{
    /**
     * @var InstanceAdvancedSettings Additional parameters set for the instance
     */
    public $InstanceAdvancedSettings;

    /**
     * @var EnhancedService Enhanced services. You can use this parameter to specify whether to enable services such as Cloud Security and Cloud Monitor. If this parameter is not specified, Cloud Monitor and Cloud Security will be enabled by default.
     */
    public $EnhancedService;

    /**
     * @var LoginSettings Node login information. For now, it only supports Password or a single KeyIds
     */
    public $LoginSettings;

    /**
     * @var array Security group to which the instance belongs. This parameter can be obtained from the `sgId` field in the response of `DescribeSecurityGroups`. If this parameter is not specified, the default security group is bound. (Currently, you can only set a single sgId.)
     */
    public $SecurityGroupIds;

    /**
     * @param InstanceAdvancedSettings $InstanceAdvancedSettings Additional parameters set for the instance
     * @param EnhancedService $EnhancedService Enhanced services. You can use this parameter to specify whether to enable services such as Cloud Security and Cloud Monitor. If this parameter is not specified, Cloud Monitor and Cloud Security will be enabled by default.
     * @param LoginSettings $LoginSettings Node login information. For now, it only supports Password or a single KeyIds
     * @param array $SecurityGroupIds Security group to which the instance belongs. This parameter can be obtained from the `sgId` field in the response of `DescribeSecurityGroups`. If this parameter is not specified, the default security group is bound. (Currently, you can only set a single sgId.)
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
    }
}
