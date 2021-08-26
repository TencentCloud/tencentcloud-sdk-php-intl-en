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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIngresses request structure.
 *
 * @method string getEnvironmentId() Obtain Environment ID
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment ID
 * @method string getClusterNamespace() Obtain Environment namespace
 * @method void setClusterNamespace(string $ClusterNamespace) Set Environment namespace
 * @method integer getSourceChannel() Obtain Source channel
 * @method void setSourceChannel(integer $SourceChannel) Set Source channel
 * @method array getIngressNames() Obtain Ingress rule name list
 * @method void setIngressNames(array $IngressNames) Set Ingress rule name list
 */
class DescribeIngressesRequest extends AbstractModel
{
    /**
     * @var string Environment ID
     */
    public $EnvironmentId;

    /**
     * @var string Environment namespace
     */
    public $ClusterNamespace;

    /**
     * @var integer Source channel
     */
    public $SourceChannel;

    /**
     * @var array Ingress rule name list
     */
    public $IngressNames;

    /**
     * @param string $EnvironmentId Environment ID
     * @param string $ClusterNamespace Environment namespace
     * @param integer $SourceChannel Source channel
     * @param array $IngressNames Ingress rule name list
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("ClusterNamespace",$param) and $param["ClusterNamespace"] !== null) {
            $this->ClusterNamespace = $param["ClusterNamespace"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }

        if (array_key_exists("IngressNames",$param) and $param["IngressNames"] !== null) {
            $this->IngressNames = $param["IngressNames"];
        }
    }
}
