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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Default block action configuration. When a security rule is hit and triggers a block action, if SecurityAction specifies only Name as Deny and DenyActionParameters is not specified, the default parameter configuration defined here is matched by feature module dimension and used:
<li>Default interception disposition action configuration for ManagedRules.</li>
<li>OtherModules: default block disposition action configuration for security protection rules other than managed rules (custom rules, rate limit, and Bot management function).</li>
 *
 * @method DenyActionParameters getManagedRules() Obtain Default interception disposition action configuration for managed rules. Supported configuration parameters of DenyActionParameters: <li>ReturnCustomPage: whether to use a custom page.</li><li>ResponseCode: status code of the custom page.</li><li>ErrorPageId: PageId of the custom page.</li>
 * @method void setManagedRules(DenyActionParameters $ManagedRules) Set Default interception disposition action configuration for managed rules. Supported configuration parameters of DenyActionParameters: <li>ReturnCustomPage: whether to use a custom page.</li><li>ResponseCode: status code of the custom page.</li><li>ErrorPageId: PageId of the custom page.</li>
 * @method DenyActionParameters getOtherModules() Obtain Security protection rules other than managed rules (custom rules, rate limit, and Bot management function) default interception disposition action configuration. Configuration parameters supported by DenyActionParameters: <li>ReturnCustomPage: whether to use a custom page.</li><li>ResponseCode: status code of the custom page.</li><li>ErrorPageId: PageId of the custom page.</li>
 * @method void setOtherModules(DenyActionParameters $OtherModules) Set Security protection rules other than managed rules (custom rules, rate limit, and Bot management function) default interception disposition action configuration. Configuration parameters supported by DenyActionParameters: <li>ReturnCustomPage: whether to use a custom page.</li><li>ResponseCode: status code of the custom page.</li><li>ErrorPageId: PageId of the custom page.</li>
 */
class DefaultDenySecurityActionParameters extends AbstractModel
{
    /**
     * @var DenyActionParameters Default interception disposition action configuration for managed rules. Supported configuration parameters of DenyActionParameters: <li>ReturnCustomPage: whether to use a custom page.</li><li>ResponseCode: status code of the custom page.</li><li>ErrorPageId: PageId of the custom page.</li>
     */
    public $ManagedRules;

    /**
     * @var DenyActionParameters Security protection rules other than managed rules (custom rules, rate limit, and Bot management function) default interception disposition action configuration. Configuration parameters supported by DenyActionParameters: <li>ReturnCustomPage: whether to use a custom page.</li><li>ResponseCode: status code of the custom page.</li><li>ErrorPageId: PageId of the custom page.</li>
     */
    public $OtherModules;

    /**
     * @param DenyActionParameters $ManagedRules Default interception disposition action configuration for managed rules. Supported configuration parameters of DenyActionParameters: <li>ReturnCustomPage: whether to use a custom page.</li><li>ResponseCode: status code of the custom page.</li><li>ErrorPageId: PageId of the custom page.</li>
     * @param DenyActionParameters $OtherModules Security protection rules other than managed rules (custom rules, rate limit, and Bot management function) default interception disposition action configuration. Configuration parameters supported by DenyActionParameters: <li>ReturnCustomPage: whether to use a custom page.</li><li>ResponseCode: status code of the custom page.</li><li>ErrorPageId: PageId of the custom page.</li>
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
        if (array_key_exists("ManagedRules",$param) and $param["ManagedRules"] !== null) {
            $this->ManagedRules = new DenyActionParameters();
            $this->ManagedRules->deserialize($param["ManagedRules"]);
        }

        if (array_key_exists("OtherModules",$param) and $param["OtherModules"] !== null) {
            $this->OtherModules = new DenyActionParameters();
            $this->OtherModules->deserialize($param["OtherModules"]);
        }
    }
}
