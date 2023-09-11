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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of a TKE instance
 *
 * @method string getClusterId() Obtain The cluster ID.
 * @method void setClusterId(string $ClusterId) Set The cluster ID.
 * @method string getClusterName() Obtain The cluster name.
 * @method void setClusterName(string $ClusterName) Set The cluster name.
 * @method array getNamespaceList() Obtain The list of cluster namespaces.
 * @method void setNamespaceList(array $NamespaceList) Set The list of cluster namespaces.
 * @method string getClusterType() Obtain The cluster type.
 * @method void setClusterType(string $ClusterType) Set The cluster type.
 * @method string getClusterVersion() Obtain The cluster version.
 * @method void setClusterVersion(string $ClusterVersion) Set The cluster version.
 */
class TkeInstanceDetail extends AbstractModel
{
    /**
     * @var string The cluster ID.
     */
    public $ClusterId;

    /**
     * @var string The cluster name.
     */
    public $ClusterName;

    /**
     * @var array The list of cluster namespaces.
     */
    public $NamespaceList;

    /**
     * @var string The cluster type.
     */
    public $ClusterType;

    /**
     * @var string The cluster version.
     */
    public $ClusterVersion;

    /**
     * @param string $ClusterId The cluster ID.
     * @param string $ClusterName The cluster name.
     * @param array $NamespaceList The list of cluster namespaces.
     * @param string $ClusterType The cluster type.
     * @param string $ClusterVersion The cluster version.
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

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("NamespaceList",$param) and $param["NamespaceList"] !== null) {
            $this->NamespaceList = [];
            foreach ($param["NamespaceList"] as $key => $value){
                $obj = new TkeNameSpaceDetail();
                $obj->deserialize($value);
                array_push($this->NamespaceList, $obj);
            }
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }
    }
}
