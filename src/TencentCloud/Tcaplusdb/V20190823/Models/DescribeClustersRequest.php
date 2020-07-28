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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusters request structure.
 *
 * @method array getClusterIds() Obtain List of IDs of clusters to be queried
 * @method void setClusterIds(array $ClusterIds) Set List of IDs of clusters to be queried
 * @method array getFilters() Obtain Query filter
 * @method void setFilters(array $Filters) Set Query filter
 * @method integer getOffset() Obtain Query list offset
 * @method void setOffset(integer $Offset) Set Query list offset
 * @method integer getLimit() Obtain Number of returned results in query list. Default value: 20
 * @method void setLimit(integer $Limit) Set Number of returned results in query list. Default value: 20
 * @method integer getIpv6Enable() Obtain Whether to enable IPv6 address access
 * @method void setIpv6Enable(integer $Ipv6Enable) Set Whether to enable IPv6 address access
 */
class DescribeClustersRequest extends AbstractModel
{
    /**
     * @var array List of IDs of clusters to be queried
     */
    public $ClusterIds;

    /**
     * @var array Query filter
     */
    public $Filters;

    /**
     * @var integer Query list offset
     */
    public $Offset;

    /**
     * @var integer Number of returned results in query list. Default value: 20
     */
    public $Limit;

    /**
     * @var integer Whether to enable IPv6 address access
     */
    public $Ipv6Enable;

    /**
     * @param array $ClusterIds List of IDs of clusters to be queried
     * @param array $Filters Query filter
     * @param integer $Offset Query list offset
     * @param integer $Limit Number of returned results in query list. Default value: 20
     * @param integer $Ipv6Enable Whether to enable IPv6 address access
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
        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Ipv6Enable",$param) and $param["Ipv6Enable"] !== null) {
            $this->Ipv6Enable = $param["Ipv6Enable"];
        }
    }
}
