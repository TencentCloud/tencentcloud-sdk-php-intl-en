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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterInstances request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method integer getOffset() Obtain Offset. Default value: 0. For more information on Offset, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0. For more information on Offset, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method integer getLimit() Obtain Number of returned results. Default value: 20, maximum value: 100. For more information on Limit, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20, maximum value: 100. For more information on Limit, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
 * @method array getFilters() Obtain Filter criteria list:
InstanceIds (Instance ID), InstanceType (Instance type: Regular, Native, Virtual, External), VagueIpAddress (Fuzzy matching IP), Labels (k8s node label), NodePoolNames (Node pool name), VagueInstanceName (Fuzzy matching node name), InstanceStates (Node status), Unschedulable (Cordoning status), NodePoolIds (Node pool ID)
 * @method void setFilters(array $Filters) Set Filter criteria list:
InstanceIds (Instance ID), InstanceType (Instance type: Regular, Native, Virtual, External), VagueIpAddress (Fuzzy matching IP), Labels (k8s node label), NodePoolNames (Node pool name), VagueInstanceName (Fuzzy matching node name), InstanceStates (Node status), Unschedulable (Cordoning status), NodePoolIds (Node pool ID)
 * @method SortBy getSortBy() Obtain Sorting information
 * @method void setSortBy(SortBy $SortBy) Set Sorting information
 */
class DescribeClusterInstancesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var integer Offset. Default value: 0. For more information on Offset, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 20, maximum value: 100. For more information on Limit, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     */
    public $Limit;

    /**
     * @var array Filter criteria list:
InstanceIds (Instance ID), InstanceType (Instance type: Regular, Native, Virtual, External), VagueIpAddress (Fuzzy matching IP), Labels (k8s node label), NodePoolNames (Node pool name), VagueInstanceName (Fuzzy matching node name), InstanceStates (Node status), Unschedulable (Cordoning status), NodePoolIds (Node pool ID)
     */
    public $Filters;

    /**
     * @var SortBy Sorting information
     */
    public $SortBy;

    /**
     * @param string $ClusterId Cluster ID
     * @param integer $Offset Offset. Default value: 0. For more information on Offset, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     * @param integer $Limit Number of returned results. Default value: 20, maximum value: 100. For more information on Limit, see the relevant sections in API [Overview](https://intl.cloud.tencent.com/document/api/213/15688?from_cn_redirect=1).
     * @param array $Filters Filter criteria list:
InstanceIds (Instance ID), InstanceType (Instance type: Regular, Native, Virtual, External), VagueIpAddress (Fuzzy matching IP), Labels (k8s node label), NodePoolNames (Node pool name), VagueInstanceName (Fuzzy matching node name), InstanceStates (Node status), Unschedulable (Cordoning status), NodePoolIds (Node pool ID)
     * @param SortBy $SortBy Sorting information
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = new SortBy();
            $this->SortBy->deserialize($param["SortBy"]);
        }
    }
}
