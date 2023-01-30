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
 * Response parameters structure of the network cluster Pod
 *
 * @method string getPodName() Obtain Pod name
 * @method void setPodName(string $PodName) Set Pod name
 * @method string getNamespace() Obtain Pod space
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNamespace(string $Namespace) Set Pod space
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLabels() Obtain Pod label
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabels(string $Labels) Set Pod label
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkloadKind() Obtain Pod type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkloadKind(string $WorkloadKind) Set Pod type
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NetworkClusterPodInfo extends AbstractModel
{
    /**
     * @var string Pod name
     */
    public $PodName;

    /**
     * @var string Pod space
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Namespace;

    /**
     * @var string Pod label
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Labels;

    /**
     * @var string Pod type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkloadKind;

    /**
     * @param string $PodName Pod name
     * @param string $Namespace Pod space
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Labels Pod label
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkloadKind Pod type
Note: This field may return null, indicating that no valid values can be obtained.
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
