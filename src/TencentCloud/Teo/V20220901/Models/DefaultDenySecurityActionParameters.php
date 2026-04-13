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
 * Default interception action configuration. When security rules are hit and trigger intercept handling actions, if SecurityAction only specifies Name as Deny and DenyActionParameters is not specified, match by feature module dimension and use the default parameter configuration defined here:
<li>Default disposition action configuration for managed rules in ManagedRules.</li>
<li>OtherModules Security protection rules (custom rule, rate limit, and Bot management function) except managed rules have default block disposition action configuration.</li>
 *
 * @method DenyActionParameters getManagedRules() Obtain The managed rule uses the default disposition action configuration. DenyActionParameters supported configuration parameters: <li>ReturnCustomPage: Whether to use a custom page.</li><li>ResponseCode: Status code of the custom page.</li><li>ErrorPageId: PageId of the custom page.</li>
 * @method void setManagedRules(DenyActionParameters $ManagedRules) Set The managed rule uses the default disposition action configuration. DenyActionParameters supported configuration parameters: <li>ReturnCustomPage: Whether to use a custom page.</li><li>ResponseCode: Status code of the custom page.</li><li>ErrorPageId: PageId of the custom page.</li>
 * @method DenyActionParameters getOtherModules() Obtain Security protection rules other than managed rules (custom rule, rate limit, and Bot management function) default to disposition action configuration. DenyActionParameters supported configuration parameters: <li>ReturnCustomPage: Whether to use custom page.</li> <li>ResponseCode: Status code of custom pages.</li> <li>ErrorPageId: PageId of custom pages.</li>
 * @method void setOtherModules(DenyActionParameters $OtherModules) Set Security protection rules other than managed rules (custom rule, rate limit, and Bot management function) default to disposition action configuration. DenyActionParameters supported configuration parameters: <li>ReturnCustomPage: Whether to use custom page.</li> <li>ResponseCode: Status code of custom pages.</li> <li>ErrorPageId: PageId of custom pages.</li>
 */
class DefaultDenySecurityActionParameters extends AbstractModel
{
    /**
     * @var DenyActionParameters The managed rule uses the default disposition action configuration. DenyActionParameters supported configuration parameters: <li>ReturnCustomPage: Whether to use a custom page.</li><li>ResponseCode: Status code of the custom page.</li><li>ErrorPageId: PageId of the custom page.</li>
     */
    public $ManagedRules;

    /**
     * @var DenyActionParameters Security protection rules other than managed rules (custom rule, rate limit, and Bot management function) default to disposition action configuration. DenyActionParameters supported configuration parameters: <li>ReturnCustomPage: Whether to use custom page.</li> <li>ResponseCode: Status code of custom pages.</li> <li>ErrorPageId: PageId of custom pages.</li>
     */
    public $OtherModules;

    /**
     * @param DenyActionParameters $ManagedRules The managed rule uses the default disposition action configuration. DenyActionParameters supported configuration parameters: <li>ReturnCustomPage: Whether to use a custom page.</li><li>ResponseCode: Status code of the custom page.</li><li>ErrorPageId: PageId of the custom page.</li>
     * @param DenyActionParameters $OtherModules Security protection rules other than managed rules (custom rule, rate limit, and Bot management function) default to disposition action configuration. DenyActionParameters supported configuration parameters: <li>ReturnCustomPage: Whether to use custom page.</li> <li>ResponseCode: Status code of custom pages.</li> <li>ErrorPageId: PageId of custom pages.</li>
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
