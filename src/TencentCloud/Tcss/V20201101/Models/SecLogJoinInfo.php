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
 * Security log access details
 *
 * @method integer getCount() Obtain Number of connected general nodes
 * @method void setCount(integer $Count) Set Number of connected general nodes
 * @method integer getSuperNodeCount() Obtain Number of connected super nodes
 * @method void setSuperNodeCount(integer $SuperNodeCount) Set Number of connected super nodes
 * @method boolean getIsJoined() Obtain Whether it is accessed. Valid values: `true` (accessed); `false` (not accessed).
 * @method void setIsJoined(boolean $IsJoined) Set Whether it is accessed. Valid values: `true` (accessed); `false` (not accessed).
 * @method string getLogType() Obtain Log type (
Container bash: "container_bash"
Container startup: "container_launch"
K8s API: "k8s_api"
)
 * @method void setLogType(string $LogType) Set Log type (
Container bash: "container_bash"
Container startup: "container_launch"
K8s API: "k8s_api"
)
 */
class SecLogJoinInfo extends AbstractModel
{
    /**
     * @var integer Number of connected general nodes
     */
    public $Count;

    /**
     * @var integer Number of connected super nodes
     */
    public $SuperNodeCount;

    /**
     * @var boolean Whether it is accessed. Valid values: `true` (accessed); `false` (not accessed).
     */
    public $IsJoined;

    /**
     * @var string Log type (
Container bash: "container_bash"
Container startup: "container_launch"
K8s API: "k8s_api"
)
     */
    public $LogType;

    /**
     * @param integer $Count Number of connected general nodes
     * @param integer $SuperNodeCount Number of connected super nodes
     * @param boolean $IsJoined Whether it is accessed. Valid values: `true` (accessed); `false` (not accessed).
     * @param string $LogType Log type (
Container bash: "container_bash"
Container startup: "container_launch"
K8s API: "k8s_api"
)
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("SuperNodeCount",$param) and $param["SuperNodeCount"] !== null) {
            $this->SuperNodeCount = $param["SuperNodeCount"];
        }

        if (array_key_exists("IsJoined",$param) and $param["IsJoined"] !== null) {
            $this->IsJoined = $param["IsJoined"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }
    }
}
