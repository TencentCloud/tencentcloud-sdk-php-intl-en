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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstancesList request structure.
 *
 * @method string getDisplayStrategy() Obtain Cluster filtering policy. Valid values: <li>clusterList: Queries the list of clusters excluding terminated ones.</li><li>monitorManage: Queries the list of clusters excluding those terminated, under creation and not successfully created.</li><li>cloudHardwareManage/componentManage: Two reserved values, which have the same implications as those of `monitorManage`.</li>
 * @method void setDisplayStrategy(string $DisplayStrategy) Set Cluster filtering policy. Valid values: <li>clusterList: Queries the list of clusters excluding terminated ones.</li><li>monitorManage: Queries the list of clusters excluding those terminated, under creation and not successfully created.</li><li>cloudHardwareManage/componentManage: Two reserved values, which have the same implications as those of `monitorManage`.</li>
 * @method integer getOffset() Obtain Page number. Default value: `0`, indicating the first page.
 * @method void setOffset(integer $Offset) Set Page number. Default value: `0`, indicating the first page.
 * @method integer getLimit() Obtain Number of returned results per page. Default value: `10`; maximum value: `100`.
 * @method void setLimit(integer $Limit) Set Number of returned results per page. Default value: `10`; maximum value: `100`.
 * @method string getOrderField() Obtain Sorting field. Valid values: <li>clusterId: Sorting by instance ID. </li><li>addTime: Sorting by instance creation time.</li><li>status: Sorting by instance status code.</li>
 * @method void setOrderField(string $OrderField) Set Sorting field. Valid values: <li>clusterId: Sorting by instance ID. </li><li>addTime: Sorting by instance creation time.</li><li>status: Sorting by instance status code.</li>
 * @method integer getAsc() Obtain Sort according to OrderField in ascending or descending order. Valid range:<li>0: Descending order.</li><li>1: Ascending order.</li>Default: 0.
 * @method void setAsc(integer $Asc) Set Sort according to OrderField in ascending or descending order. Valid range:<li>0: Descending order.</li><li>1: Ascending order.</li>Default: 0.
 * @method array getFilters() Obtain Custom query
 * @method void setFilters(array $Filters) Set Custom query
 */
class DescribeInstancesListRequest extends AbstractModel
{
    /**
     * @var string Cluster filtering policy. Valid values: <li>clusterList: Queries the list of clusters excluding terminated ones.</li><li>monitorManage: Queries the list of clusters excluding those terminated, under creation and not successfully created.</li><li>cloudHardwareManage/componentManage: Two reserved values, which have the same implications as those of `monitorManage`.</li>
     */
    public $DisplayStrategy;

    /**
     * @var integer Page number. Default value: `0`, indicating the first page.
     */
    public $Offset;

    /**
     * @var integer Number of returned results per page. Default value: `10`; maximum value: `100`.
     */
    public $Limit;

    /**
     * @var string Sorting field. Valid values: <li>clusterId: Sorting by instance ID. </li><li>addTime: Sorting by instance creation time.</li><li>status: Sorting by instance status code.</li>
     */
    public $OrderField;

    /**
     * @var integer Sort according to OrderField in ascending or descending order. Valid range:<li>0: Descending order.</li><li>1: Ascending order.</li>Default: 0.
     */
    public $Asc;

    /**
     * @var array Custom query
     */
    public $Filters;

    /**
     * @param string $DisplayStrategy Cluster filtering policy. Valid values: <li>clusterList: Queries the list of clusters excluding terminated ones.</li><li>monitorManage: Queries the list of clusters excluding those terminated, under creation and not successfully created.</li><li>cloudHardwareManage/componentManage: Two reserved values, which have the same implications as those of `monitorManage`.</li>
     * @param integer $Offset Page number. Default value: `0`, indicating the first page.
     * @param integer $Limit Number of returned results per page. Default value: `10`; maximum value: `100`.
     * @param string $OrderField Sorting field. Valid values: <li>clusterId: Sorting by instance ID. </li><li>addTime: Sorting by instance creation time.</li><li>status: Sorting by instance status code.</li>
     * @param integer $Asc Sort according to OrderField in ascending or descending order. Valid range:<li>0: Descending order.</li><li>1: Ascending order.</li>Default: 0.
     * @param array $Filters Custom query
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
        if (array_key_exists("DisplayStrategy",$param) and $param["DisplayStrategy"] !== null) {
            $this->DisplayStrategy = $param["DisplayStrategy"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Asc",$param) and $param["Asc"] !== null) {
            $this->Asc = $param["Asc"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
