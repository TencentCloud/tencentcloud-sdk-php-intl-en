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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrometheusClusterAgents response structure.
 *
 * @method array getAgents() Obtain Information of the associated cluster
 * @method void setAgents(array $Agents) Set Information of the associated cluster
 * @method integer getTotal() Obtain The total number of the associated clusters
 * @method void setTotal(integer $Total) Set The total number of the associated clusters
 * @method boolean getIsFirstBind() Obtain Whether the TMP instance is associated with the cluster for the first time. If so, you need to configure recording rules for it. This also applies if it has no default recording rule.
 * @method void setIsFirstBind(boolean $IsFirstBind) Set Whether the TMP instance is associated with the cluster for the first time. If so, you need to configure recording rules for it. This also applies if it has no default recording rule.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribePrometheusClusterAgentsResponse extends AbstractModel
{
    /**
     * @var array Information of the associated cluster
     */
    public $Agents;

    /**
     * @var integer The total number of the associated clusters
     */
    public $Total;

    /**
     * @var boolean Whether the TMP instance is associated with the cluster for the first time. If so, you need to configure recording rules for it. This also applies if it has no default recording rule.
     */
    public $IsFirstBind;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Agents Information of the associated cluster
     * @param integer $Total The total number of the associated clusters
     * @param boolean $IsFirstBind Whether the TMP instance is associated with the cluster for the first time. If so, you need to configure recording rules for it. This also applies if it has no default recording rule.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Agents",$param) and $param["Agents"] !== null) {
            $this->Agents = [];
            foreach ($param["Agents"] as $key => $value){
                $obj = new PrometheusAgentOverview();
                $obj->deserialize($value);
                array_push($this->Agents, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("IsFirstBind",$param) and $param["IsFirstBind"] !== null) {
            $this->IsFirstBind = $param["IsFirstBind"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
