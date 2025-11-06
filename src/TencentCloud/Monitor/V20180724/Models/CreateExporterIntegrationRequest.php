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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateExporterIntegration request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getKind() Obtain Type (obtain through the DescribePrometheusIntegrations api, using the ExporterType field of each item).
 * @method void setKind(string $Kind) Set Type (obtain through the DescribePrometheusIntegrations api, using the ExporterType field of each item).
 * @method string getContent() Obtain Integrated configuration
 * @method void setContent(string $Content) Set Integrated configuration
 * @method integer getKubeType() Obtain Kubernetes cluster type, optional, valid values are as follows:.
<li>1 = TKE</li>
<li>2 = EKS</li>
<li>3 = MEKS</li>
 * @method void setKubeType(integer $KubeType) Set Kubernetes cluster type, optional, valid values are as follows:.
<li>1 = TKE</li>
<li>2 = EKS</li>
<li>3 = MEKS</li>
 * @method string getClusterId() Obtain Cluster ID, optional.
 * @method void setClusterId(string $ClusterId) Set Cluster ID, optional.
 */
class CreateExporterIntegrationRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Type (obtain through the DescribePrometheusIntegrations api, using the ExporterType field of each item).
     */
    public $Kind;

    /**
     * @var string Integrated configuration
     */
    public $Content;

    /**
     * @var integer Kubernetes cluster type, optional, valid values are as follows:.
<li>1 = TKE</li>
<li>2 = EKS</li>
<li>3 = MEKS</li>
     */
    public $KubeType;

    /**
     * @var string Cluster ID, optional.
     */
    public $ClusterId;

    /**
     * @param string $InstanceId Instance ID
     * @param string $Kind Type (obtain through the DescribePrometheusIntegrations api, using the ExporterType field of each item).
     * @param string $Content Integrated configuration
     * @param integer $KubeType Kubernetes cluster type, optional, valid values are as follows:.
<li>1 = TKE</li>
<li>2 = EKS</li>
<li>3 = MEKS</li>
     * @param string $ClusterId Cluster ID, optional.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("KubeType",$param) and $param["KubeType"] !== null) {
            $this->KubeType = $param["KubeType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
