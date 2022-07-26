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
 * ForwardTKEEdgeApplicationRequestV3 request structure.
 *
 * @method string getMethod() Obtain Access to request the cluster add-on
 * @method void setMethod(string $Method) Set Access to request the cluster add-on
 * @method string getPath() Obtain Path to request the cluster add-on
 * @method void setPath(string $Path) Set Path to request the cluster add-on
 * @method string getAccept() Obtain Data format allowed to receive the requested cluster add-on
 * @method void setAccept(string $Accept) Set Data format allowed to receive the requested cluster add-on
 * @method string getContentType() Obtain Data format for requesting the cluster add-on
 * @method void setContentType(string $ContentType) Set Data format for requesting the cluster add-on
 * @method string getRequestBody() Obtain Data sent to request the cluster add-on
 * @method void setRequestBody(string $RequestBody) Set Data sent to request the cluster add-on
 * @method string getClusterName() Obtain Cluster name (for example, `cls-1234abcd`)
 * @method void setClusterName(string $ClusterName) Set Cluster name (for example, `cls-1234abcd`)
 * @method string getEncodedBody() Obtain Whether to encode the request content
 * @method void setEncodedBody(string $EncodedBody) Set Whether to encode the request content
 */
class ForwardTKEEdgeApplicationRequestV3Request extends AbstractModel
{
    /**
     * @var string Access to request the cluster add-on
     */
    public $Method;

    /**
     * @var string Path to request the cluster add-on
     */
    public $Path;

    /**
     * @var string Data format allowed to receive the requested cluster add-on
     */
    public $Accept;

    /**
     * @var string Data format for requesting the cluster add-on
     */
    public $ContentType;

    /**
     * @var string Data sent to request the cluster add-on
     */
    public $RequestBody;

    /**
     * @var string Cluster name (for example, `cls-1234abcd`)
     */
    public $ClusterName;

    /**
     * @var string Whether to encode the request content
     */
    public $EncodedBody;

    /**
     * @param string $Method Access to request the cluster add-on
     * @param string $Path Path to request the cluster add-on
     * @param string $Accept Data format allowed to receive the requested cluster add-on
     * @param string $ContentType Data format for requesting the cluster add-on
     * @param string $RequestBody Data sent to request the cluster add-on
     * @param string $ClusterName Cluster name (for example, `cls-1234abcd`)
     * @param string $EncodedBody Whether to encode the request content
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
        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Accept",$param) and $param["Accept"] !== null) {
            $this->Accept = $param["Accept"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("RequestBody",$param) and $param["RequestBody"] !== null) {
            $this->RequestBody = $param["RequestBody"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("EncodedBody",$param) and $param["EncodedBody"] !== null) {
            $this->EncodedBody = $param["EncodedBody"];
        }
    }
}
