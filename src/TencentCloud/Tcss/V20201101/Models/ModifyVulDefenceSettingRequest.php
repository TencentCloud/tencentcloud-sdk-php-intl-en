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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVulDefenceSetting request structure.
 *
 * @method integer getIsEnabled() Obtain Whether it is enabled. Valid values: `0` (disabled); `1` (enabled).
 * @method void setIsEnabled(integer $IsEnabled) Set Whether it is enabled. Valid values: `0` (disabled); `1` (enabled).
 * @method integer getScope() Obtain Scope of servers for which to enable exploit prevention. Valid values: `0` (specified servers); `1` (all servers). This parameter is required when `IsEnabled` is `1`.
 * @method void setScope(integer $Scope) Set Scope of servers for which to enable exploit prevention. Valid values: `0` (specified servers); `1` (all servers). This parameter is required when `IsEnabled` is `1`.
 * @method array getHostIDs() Obtain Specified servers for which to enable exploit prevention. This parameter is required when `Scope` is `0`.
 * @method void setHostIDs(array $HostIDs) Set Specified servers for which to enable exploit prevention. This parameter is required when `Scope` is `0`.
 */
class ModifyVulDefenceSettingRequest extends AbstractModel
{
    /**
     * @var integer Whether it is enabled. Valid values: `0` (disabled); `1` (enabled).
     */
    public $IsEnabled;

    /**
     * @var integer Scope of servers for which to enable exploit prevention. Valid values: `0` (specified servers); `1` (all servers). This parameter is required when `IsEnabled` is `1`.
     */
    public $Scope;

    /**
     * @var array Specified servers for which to enable exploit prevention. This parameter is required when `Scope` is `0`.
     */
    public $HostIDs;

    /**
     * @param integer $IsEnabled Whether it is enabled. Valid values: `0` (disabled); `1` (enabled).
     * @param integer $Scope Scope of servers for which to enable exploit prevention. Valid values: `0` (specified servers); `1` (all servers). This parameter is required when `IsEnabled` is `1`.
     * @param array $HostIDs Specified servers for which to enable exploit prevention. This parameter is required when `Scope` is `0`.
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
        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("HostIDs",$param) and $param["HostIDs"] !== null) {
            $this->HostIDs = $param["HostIDs"];
        }
    }
}
