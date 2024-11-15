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
 * AddExistedInstances request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getInstanceIds() Obtain Instance list. Spot instance is not supported.
 * @method void setInstanceIds(array $InstanceIds) Set Instance list. Spot instance is not supported.
 * @method InstanceAdvancedSettings getInstanceAdvancedSettings() Obtain Detailed information of the instance
 * @method void setInstanceAdvancedSettings(InstanceAdvancedSettings $InstanceAdvancedSettings) Set Detailed information of the instance
 * @method EnhancedService getEnhancedService() Obtain Enhanced services. This parameter is used to specify whether to enable Cloud Security, Cloud Monitoring and other services. If this parameter is not specified, Cloud Monitor and Cloud Security are enabled by default.
 * @method void setEnhancedService(EnhancedService $EnhancedService) Set Enhanced services. This parameter is used to specify whether to enable Cloud Security, Cloud Monitoring and other services. If this parameter is not specified, Cloud Monitor and Cloud Security are enabled by default.
 * @method LoginSettings getLoginSettings() Obtain Node login information (currently only supports using Password or single KeyIds)
 * @method void setLoginSettings(LoginSettings $LoginSettings) Set Node login information (currently only supports using Password or single KeyIds)
 * @method string getHostName() Obtain When reinstalling the system, you can specify the HostName of the modified instance (when the cluster is in HostName mode, this parameter is required, and the rule name is the same as the [Create CVM Instance](https://intl.cloud.tencent.com/document/product/213/15730?from_cn_redirect=1) API HostName except for uppercase letters not being supported.
 * @method void setHostName(string $HostName) Set When reinstalling the system, you can specify the HostName of the modified instance (when the cluster is in HostName mode, this parameter is required, and the rule name is the same as the [Create CVM Instance](https://intl.cloud.tencent.com/document/product/213/15730?from_cn_redirect=1) API HostName except for uppercase letters not being supported.
 * @method array getSecurityGroupIds() Obtain Security group to which the instance belongs. This parameter can be obtained from the `sgId` field returned by DescribeSecurityGroups. If this parameter is not specified, the default security group is bound. (Currently, you can only set a single sgId)
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group to which the instance belongs. This parameter can be obtained from the `sgId` field returned by DescribeSecurityGroups. If this parameter is not specified, the default security group is bound. (Currently, you can only set a single sgId)
 * @method NodePoolOption getNodePool() Obtain Node pool options
 * @method void setNodePool(NodePoolOption $NodePool) Set Node pool options
 * @method array getSkipValidateOptions() Obtain Skips the specified verification. Valid values: GlobalRouteCIDRCheck, VpcCniCIDRCheck
 * @method void setSkipValidateOptions(array $SkipValidateOptions) Set Skips the specified verification. Valid values: GlobalRouteCIDRCheck, VpcCniCIDRCheck
 * @method array getInstanceAdvancedSettingsOverrides() Obtain This API is used to customize the configuration of an instance, which corresponds to the "InstanceIds" one-to-one in sequence. If the InstanceAdvancedSettingsOverrides array is passed in, the default parameter "InstanceAdvancedSettings" will be overwritten. If the parameter InstanceAdvancedSettingsOverrides is not passed in, the parameter "InstanceAdvancedSettings" will take effect for each instance. The array length of "InstanceAdvancedSettingsOverride" should be the same as the array length of "InstanceIds". If its array length is greater than the "InstanceIds" array length, an error will be reported. If its array length is less than the "InstanceIds" array length, the instance without corresponding configuration will use the default configuration.
 * @method void setInstanceAdvancedSettingsOverrides(array $InstanceAdvancedSettingsOverrides) Set This API is used to customize the configuration of an instance, which corresponds to the "InstanceIds" one-to-one in sequence. If the InstanceAdvancedSettingsOverrides array is passed in, the default parameter "InstanceAdvancedSettings" will be overwritten. If the parameter InstanceAdvancedSettingsOverrides is not passed in, the parameter "InstanceAdvancedSettings" will take effect for each instance. The array length of "InstanceAdvancedSettingsOverride" should be the same as the array length of "InstanceIds". If its array length is greater than the "InstanceIds" array length, an error will be reported. If its array length is less than the "InstanceIds" array length, the instance without corresponding configuration will use the default configuration.
 * @method string getImageId() Obtain Node image
 * @method void setImageId(string $ImageId) Set Node image
 */
class AddExistedInstancesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array Instance list. Spot instance is not supported.
     */
    public $InstanceIds;

    /**
     * @var InstanceAdvancedSettings Detailed information of the instance
     */
    public $InstanceAdvancedSettings;

    /**
     * @var EnhancedService Enhanced services. This parameter is used to specify whether to enable Cloud Security, Cloud Monitoring and other services. If this parameter is not specified, Cloud Monitor and Cloud Security are enabled by default.
     */
    public $EnhancedService;

    /**
     * @var LoginSettings Node login information (currently only supports using Password or single KeyIds)
     */
    public $LoginSettings;

    /**
     * @var string When reinstalling the system, you can specify the HostName of the modified instance (when the cluster is in HostName mode, this parameter is required, and the rule name is the same as the [Create CVM Instance](https://intl.cloud.tencent.com/document/product/213/15730?from_cn_redirect=1) API HostName except for uppercase letters not being supported.
     */
    public $HostName;

    /**
     * @var array Security group to which the instance belongs. This parameter can be obtained from the `sgId` field returned by DescribeSecurityGroups. If this parameter is not specified, the default security group is bound. (Currently, you can only set a single sgId)
     */
    public $SecurityGroupIds;

    /**
     * @var NodePoolOption Node pool options
     */
    public $NodePool;

    /**
     * @var array Skips the specified verification. Valid values: GlobalRouteCIDRCheck, VpcCniCIDRCheck
     */
    public $SkipValidateOptions;

    /**
     * @var array This API is used to customize the configuration of an instance, which corresponds to the "InstanceIds" one-to-one in sequence. If the InstanceAdvancedSettingsOverrides array is passed in, the default parameter "InstanceAdvancedSettings" will be overwritten. If the parameter InstanceAdvancedSettingsOverrides is not passed in, the parameter "InstanceAdvancedSettings" will take effect for each instance. The array length of "InstanceAdvancedSettingsOverride" should be the same as the array length of "InstanceIds". If its array length is greater than the "InstanceIds" array length, an error will be reported. If its array length is less than the "InstanceIds" array length, the instance without corresponding configuration will use the default configuration.
     */
    public $InstanceAdvancedSettingsOverrides;

    /**
     * @var string Node image
     */
    public $ImageId;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $InstanceIds Instance list. Spot instance is not supported.
     * @param InstanceAdvancedSettings $InstanceAdvancedSettings Detailed information of the instance
     * @param EnhancedService $EnhancedService Enhanced services. This parameter is used to specify whether to enable Cloud Security, Cloud Monitoring and other services. If this parameter is not specified, Cloud Monitor and Cloud Security are enabled by default.
     * @param LoginSettings $LoginSettings Node login information (currently only supports using Password or single KeyIds)
     * @param string $HostName When reinstalling the system, you can specify the HostName of the modified instance (when the cluster is in HostName mode, this parameter is required, and the rule name is the same as the [Create CVM Instance](https://intl.cloud.tencent.com/document/product/213/15730?from_cn_redirect=1) API HostName except for uppercase letters not being supported.
     * @param array $SecurityGroupIds Security group to which the instance belongs. This parameter can be obtained from the `sgId` field returned by DescribeSecurityGroups. If this parameter is not specified, the default security group is bound. (Currently, you can only set a single sgId)
     * @param NodePoolOption $NodePool Node pool options
     * @param array $SkipValidateOptions Skips the specified verification. Valid values: GlobalRouteCIDRCheck, VpcCniCIDRCheck
     * @param array $InstanceAdvancedSettingsOverrides This API is used to customize the configuration of an instance, which corresponds to the "InstanceIds" one-to-one in sequence. If the InstanceAdvancedSettingsOverrides array is passed in, the default parameter "InstanceAdvancedSettings" will be overwritten. If the parameter InstanceAdvancedSettingsOverrides is not passed in, the parameter "InstanceAdvancedSettings" will take effect for each instance. The array length of "InstanceAdvancedSettingsOverride" should be the same as the array length of "InstanceIds". If its array length is greater than the "InstanceIds" array length, an error will be reported. If its array length is less than the "InstanceIds" array length, the instance without corresponding configuration will use the default configuration.
     * @param string $ImageId Node image
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

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("NodePool",$param) and $param["NodePool"] !== null) {
            $this->NodePool = new NodePoolOption();
            $this->NodePool->deserialize($param["NodePool"]);
        }

        if (array_key_exists("SkipValidateOptions",$param) and $param["SkipValidateOptions"] !== null) {
            $this->SkipValidateOptions = $param["SkipValidateOptions"];
        }

        if (array_key_exists("InstanceAdvancedSettingsOverrides",$param) and $param["InstanceAdvancedSettingsOverrides"] !== null) {
            $this->InstanceAdvancedSettingsOverrides = [];
            foreach ($param["InstanceAdvancedSettingsOverrides"] as $key => $value){
                $obj = new InstanceAdvancedSettings();
                $obj->deserialize($value);
                array_push($this->InstanceAdvancedSettingsOverrides, $obj);
            }
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }
    }
}
