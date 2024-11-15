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
 * DescribeTKEEdgeScript request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getInterface() Obtain Network Card Name, specifies the network card used by the kubelet on edge nodes to register with the apiserver.
 * @method void setInterface(string $Interface) Set Network Card Name, specifies the network card used by the kubelet on edge nodes to register with the apiserver.
 * @method string getNodeName() Obtain Name of the name
 * @method void setNodeName(string $NodeName) Set Name of the name
 * @method string getConfig() Obtain Node configuration in JSON format 
 * @method void setConfig(string $Config) Set Node configuration in JSON format 
 * @method string getScriptVersion() Obtain A legacy version of edgectl script can be downloaded. The latest version is downloaded by default. The version information can be checked in the script.
 * @method void setScriptVersion(string $ScriptVersion) Set A legacy version of edgectl script can be downloaded. The latest version is downloaded by default. The version information can be checked in the script.
 */
class DescribeTKEEdgeScriptRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Network Card Name, specifies the network card used by the kubelet on edge nodes to register with the apiserver.
     */
    public $Interface;

    /**
     * @var string Name of the name
     */
    public $NodeName;

    /**
     * @var string Node configuration in JSON format 
     */
    public $Config;

    /**
     * @var string A legacy version of edgectl script can be downloaded. The latest version is downloaded by default. The version information can be checked in the script.
     */
    public $ScriptVersion;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $Interface Network Card Name, specifies the network card used by the kubelet on edge nodes to register with the apiserver.
     * @param string $NodeName Name of the name
     * @param string $Config Node configuration in JSON format 
     * @param string $ScriptVersion A legacy version of edgectl script can be downloaded. The latest version is downloaded by default. The version information can be checked in the script.
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

        if (array_key_exists("Interface",$param) and $param["Interface"] !== null) {
            $this->Interface = $param["Interface"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("ScriptVersion",$param) and $param["ScriptVersion"] !== null) {
            $this->ScriptVersion = $param["ScriptVersion"];
        }
    }
}
