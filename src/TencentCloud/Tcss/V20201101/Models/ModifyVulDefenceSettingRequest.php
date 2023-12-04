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
 * @method integer getScope() Obtain Servers to enable exploit prevention. Values: `0` (custom); `1` (all).
 * @method void setScope(integer $Scope) Set Servers to enable exploit prevention. Values: `0` (custom); `1` (all).
 * @method array getHostIDs() Obtain Specified servers with exploit prevention enabled
 * @method void setHostIDs(array $HostIDs) Set Specified servers with exploit prevention enabled
 * @method integer getSuperScope() Obtain Super nodes to enable exploit prevention. Values: `0` (custom); `1` (all).
 * @method void setSuperScope(integer $SuperScope) Set Super nodes to enable exploit prevention. Values: `0` (custom); `1` (all).
 * @method array getNodeIds() Obtain List of super node IDs
 * @method void setNodeIds(array $NodeIds) Set List of super node IDs
 */
class ModifyVulDefenceSettingRequest extends AbstractModel
{
    /**
     * @var integer Whether it is enabled. Valid values: `0` (disabled); `1` (enabled).
     */
    public $IsEnabled;

    /**
     * @var integer Servers to enable exploit prevention. Values: `0` (custom); `1` (all).
     */
    public $Scope;

    /**
     * @var array Specified servers with exploit prevention enabled
     */
    public $HostIDs;

    /**
     * @var integer Super nodes to enable exploit prevention. Values: `0` (custom); `1` (all).
     */
    public $SuperScope;

    /**
     * @var array List of super node IDs
     */
    public $NodeIds;

    /**
     * @param integer $IsEnabled Whether it is enabled. Valid values: `0` (disabled); `1` (enabled).
     * @param integer $Scope Servers to enable exploit prevention. Values: `0` (custom); `1` (all).
     * @param array $HostIDs Specified servers with exploit prevention enabled
     * @param integer $SuperScope Super nodes to enable exploit prevention. Values: `0` (custom); `1` (all).
     * @param array $NodeIds List of super node IDs
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

        if (array_key_exists("SuperScope",$param) and $param["SuperScope"] !== null) {
            $this->SuperScope = $param["SuperScope"];
        }

        if (array_key_exists("NodeIds",$param) and $param["NodeIds"] !== null) {
            $this->NodeIds = $param["NodeIds"];
        }
    }
}
