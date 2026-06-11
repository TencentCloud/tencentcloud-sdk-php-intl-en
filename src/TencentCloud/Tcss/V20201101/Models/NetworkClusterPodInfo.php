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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Response parameters structure of the network cluster Pod
 *
 * @method string getPodName() Obtain Pod name
 * @method void setPodName(string $PodName) Set Pod name
 * @method string getNamespace() Obtain Pod Space
 * @method void setNamespace(string $Namespace) Set Pod Space
 * @method string getLabels() Obtain pod tag
 * @method void setLabels(string $Labels) Set pod tag
 * @method string getWorkloadKind() Obtain Pod Type
 * @method void setWorkloadKind(string $WorkloadKind) Set Pod Type
 */
class NetworkClusterPodInfo extends AbstractModel
{
    /**
     * @var string Pod name
     */
    public $PodName;

    /**
     * @var string Pod Space
     */
    public $Namespace;

    /**
     * @var string pod tag
     */
    public $Labels;

    /**
     * @var string Pod Type
     */
    public $WorkloadKind;

    /**
     * @param string $PodName Pod name
     * @param string $Namespace Pod Space
     * @param string $Labels pod tag
     * @param string $WorkloadKind Pod Type
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
        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("WorkloadKind",$param) and $param["WorkloadKind"] !== null) {
            $this->WorkloadKind = $param["WorkloadKind"];
        }
    }
}
