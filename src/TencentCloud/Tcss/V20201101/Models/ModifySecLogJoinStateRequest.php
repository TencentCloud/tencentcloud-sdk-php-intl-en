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
 * ModifySecLogJoinState request structure.
 *
 * @method string getLogType() Obtain Log type
Container bash: container_bash
Container startup: container_launch
K8s API: k8s_api
 * @method void setLogType(string $LogType) Set Log type
Container bash: container_bash
Container startup: container_launch
K8s API: k8s_api
 * @method boolean getState() Obtain Status. Valid values: `true` (enabled); `false` (disabled).
 * @method void setState(boolean $State) Set Status. Valid values: `true` (enabled); `false` (disabled).
 */
class ModifySecLogJoinStateRequest extends AbstractModel
{
    /**
     * @var string Log type
Container bash: container_bash
Container startup: container_launch
K8s API: k8s_api
     */
    public $LogType;

    /**
     * @var boolean Status. Valid values: `true` (enabled); `false` (disabled).
     */
    public $State;

    /**
     * @param string $LogType Log type
Container bash: container_bash
Container startup: container_launch
K8s API: k8s_api
     * @param boolean $State Status. Valid values: `true` (enabled); `false` (disabled).
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
        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
