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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstancesList request structure.
 *
 * @method string getDisplayStrategy() Obtain Cluster filtering policy. Valid values: <li>clusterList: Queries the list of clusters excluding terminated ones.</li><li>monitorManage: Queries the list of clusters excluding those terminated, under creation and not successfully created.</li><li>cloudHardwareManage/componentManage: Two reserved values, which have the same implications as those of `monitorManage`.</li>
 * @method void setDisplayStrategy(string $DisplayStrategy) Set Cluster filtering policy. Valid values: <li>clusterList: Queries the list of clusters excluding terminated ones.</li><li>monitorManage: Queries the list of clusters excluding those terminated, under creation and not successfully created.</li><li>cloudHardwareManage/componentManage: Two reserved values, which have the same implications as those of `monitorManage`.</li>
 * @method integer getOffset() Obtain Page number. Default value: `0`, indicating the first page.
 * @method void setOffset(integer $Offset) Set Page number. Default value: `0`, indicating the first page.
 * @method integer getLimit() Obtain Number of records to be returned per page. The default value is 100, and the maximum value is 100.
If both limit and offset are 0, all records will be queried.
 * @method void setLimit(integer $Limit) Set Number of records to be returned per page. The default value is 100, and the maximum value is 100.
If both limit and offset are 0, all records will be queried.
 * @method string getOrderField() Obtain Sorting field. Valid values: <li>clusterId: Sorting by instance ID. </li><li>addTime: Sorting by instance creation time.</li><li>status: Sorting by instance status code.</li>
 * @method void setOrderField(string $OrderField) Set Sorting field. Valid values: <li>clusterId: Sorting by instance ID. </li><li>addTime: Sorting by instance creation time.</li><li>status: Sorting by instance status code.</li>
 * @method integer getAsc() Obtain Sort by OrderField in ascending or descending order. Valid values: <li>0: ascending order;</li> <li>1: descending order.</li> The default value is 0.
 * @method void setAsc(integer $Asc) Set Sort by OrderField in ascending or descending order. Valid values: <li>0: ascending order;</li> <li>1: descending order.</li> The default value is 0.
 * @method array getFilters() Obtain Custom search filter. Examples: <li>instance of filtering by ClusterId: [{"Name":"ClusterId","Values":["emr-xxxxxxxx"]}]</li><li>instance of filtering by clusterName: [{"Name": "ClusterName","Values": ["cluster_name"]}]</li><li>instance of filtering by ClusterStatus: [{"Name": "ClusterStatus","Values": ["2"]}]</li>.
 * @method void setFilters(array $Filters) Set Custom search filter. Examples: <li>instance of filtering by ClusterId: [{"Name":"ClusterId","Values":["emr-xxxxxxxx"]}]</li><li>instance of filtering by clusterName: [{"Name": "ClusterName","Values": ["cluster_name"]}]</li><li>instance of filtering by ClusterStatus: [{"Name": "ClusterStatus","Values": ["2"]}]</li>.
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
     * @var integer Number of records to be returned per page. The default value is 100, and the maximum value is 100.
If both limit and offset are 0, all records will be queried.
     */
    public $Limit;

    /**
     * @var string Sorting field. Valid values: <li>clusterId: Sorting by instance ID. </li><li>addTime: Sorting by instance creation time.</li><li>status: Sorting by instance status code.</li>
     */
    public $OrderField;

    /**
     * @var integer Sort by OrderField in ascending or descending order. Valid values: <li>0: ascending order;</li> <li>1: descending order.</li> The default value is 0.
     */
    public $Asc;

    /**
     * @var array Custom search filter. Examples: <li>instance of filtering by ClusterId: [{"Name":"ClusterId","Values":["emr-xxxxxxxx"]}]</li><li>instance of filtering by clusterName: [{"Name": "ClusterName","Values": ["cluster_name"]}]</li><li>instance of filtering by ClusterStatus: [{"Name": "ClusterStatus","Values": ["2"]}]</li>.
     */
    public $Filters;

    /**
     * @param string $DisplayStrategy Cluster filtering policy. Valid values: <li>clusterList: Queries the list of clusters excluding terminated ones.</li><li>monitorManage: Queries the list of clusters excluding those terminated, under creation and not successfully created.</li><li>cloudHardwareManage/componentManage: Two reserved values, which have the same implications as those of `monitorManage`.</li>
     * @param integer $Offset Page number. Default value: `0`, indicating the first page.
     * @param integer $Limit Number of records to be returned per page. The default value is 100, and the maximum value is 100.
If both limit and offset are 0, all records will be queried.
     * @param string $OrderField Sorting field. Valid values: <li>clusterId: Sorting by instance ID. </li><li>addTime: Sorting by instance creation time.</li><li>status: Sorting by instance status code.</li>
     * @param integer $Asc Sort by OrderField in ascending or descending order. Valid values: <li>0: ascending order;</li> <li>1: descending order.</li> The default value is 0.
     * @param array $Filters Custom search filter. Examples: <li>instance of filtering by ClusterId: [{"Name":"ClusterId","Values":["emr-xxxxxxxx"]}]</li><li>instance of filtering by clusterName: [{"Name": "ClusterName","Values": ["cluster_name"]}]</li><li>instance of filtering by ClusterStatus: [{"Name": "ClusterStatus","Values": ["2"]}]</li>.
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
