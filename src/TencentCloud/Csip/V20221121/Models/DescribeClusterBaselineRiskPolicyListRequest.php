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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterBaselineRiskPolicyList request structure.
 *
 * @method integer getClusterAppid() Obtain <p>Appid of the cluster's account, used to specify the account for querying baseline risk policies.</p>
 * @method void setClusterAppid(integer $ClusterAppid) Set <p>Appid of the cluster's account, used to specify the account for querying baseline risk policies.</p>
 * @method string getClusterCaMD5() Obtain <p>Cluster CaMD5</p>
 * @method void setClusterCaMD5(string $ClusterCaMD5) Set <p>Cluster CaMD5</p>
 * @method array getMemberId() Obtain List of member IDs of the group account.
 * @method void setMemberId(array $MemberId) Set List of member IDs of the group account.
 */
class DescribeClusterBaselineRiskPolicyListRequest extends AbstractModel
{
    /**
     * @var integer <p>Appid of the cluster's account, used to specify the account for querying baseline risk policies.</p>
     */
    public $ClusterAppid;

    /**
     * @var string <p>Cluster CaMD5</p>
     */
    public $ClusterCaMD5;

    /**
     * @var array List of member IDs of the group account.
     */
    public $MemberId;

    /**
     * @param integer $ClusterAppid <p>Appid of the cluster's account, used to specify the account for querying baseline risk policies.</p>
     * @param string $ClusterCaMD5 <p>Cluster CaMD5</p>
     * @param array $MemberId List of member IDs of the group account.
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
        if (array_key_exists("ClusterAppid",$param) and $param["ClusterAppid"] !== null) {
            $this->ClusterAppid = $param["ClusterAppid"];
        }

        if (array_key_exists("ClusterCaMD5",$param) and $param["ClusterCaMD5"] !== null) {
            $this->ClusterCaMD5 = $param["ClusterCaMD5"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
