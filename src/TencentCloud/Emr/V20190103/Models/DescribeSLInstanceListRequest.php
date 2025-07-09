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
 * DescribeSLInstanceList request structure.
 *
 * @method string getDisplayStrategy() Obtain Instance filtering policy. Valid values: <li>clusterList: Query the list of instances except for those that have been terminated.</li> <li>monitorManage: Query the list of instances except for those that have been terminated, are being created, or fail to be created.</li>
 * @method void setDisplayStrategy(string $DisplayStrategy) Set Instance filtering policy. Valid values: <li>clusterList: Query the list of instances except for those that have been terminated.</li> <li>monitorManage: Query the list of instances except for those that have been terminated, are being created, or fail to be created.</li>
 * @method integer getOffset() Obtain Page number. The default value is 0, indicating the first page.
 * @method void setOffset(integer $Offset) Set Page number. The default value is 0, indicating the first page.
 * @method integer getLimit() Obtain Number of records to be returned per page. The default value is 10, and the maximum value is 100.	
 * @method void setLimit(integer $Limit) Set Number of records to be returned per page. The default value is 10, and the maximum value is 100.	
 * @method string getOrderField() Obtain Sorting field. Valid values: <li>clusterId: Sort by instance ID.</li> <li>addTime: Sort by instance creation time.</li> <li>status: Sort by instance status code.</li>
 * @method void setOrderField(string $OrderField) Set Sorting field. Valid values: <li>clusterId: Sort by instance ID.</li> <li>addTime: Sort by instance creation time.</li> <li>status: Sort by instance status code.</li>
 * @method integer getAsc() Obtain Sorts by OrderField in ascending or descending order. Valid values: <li>0: ascending order;</li> <li>1: descending order.</li> The default value is 0.
 * @method void setAsc(integer $Asc) Set Sorts by OrderField in ascending or descending order. Valid values: <li>0: ascending order;</li> <li>1: descending order.</li> The default value is 0.
 * @method array getFilters() Obtain Custom search filters. Examples: <li>Filter instances by ClusterId: [{"Name":"ClusterId","Values":["emr-xxxxxxxx"]}]</li><li> Filter instances by clusterName: [{"Name": "ClusterName","Values": ["cluster_name"]}]</li><li>Filter instances by ClusterStatus: [{"Name": "ClusterStatus","Values": ["2"]}]</li>
 * @method void setFilters(array $Filters) Set Custom search filters. Examples: <li>Filter instances by ClusterId: [{"Name":"ClusterId","Values":["emr-xxxxxxxx"]}]</li><li> Filter instances by clusterName: [{"Name": "ClusterName","Values": ["cluster_name"]}]</li><li>Filter instances by ClusterStatus: [{"Name": "ClusterStatus","Values": ["2"]}]</li>
 */
class DescribeSLInstanceListRequest extends AbstractModel
{
    /**
     * @var string Instance filtering policy. Valid values: <li>clusterList: Query the list of instances except for those that have been terminated.</li> <li>monitorManage: Query the list of instances except for those that have been terminated, are being created, or fail to be created.</li>
     */
    public $DisplayStrategy;

    /**
     * @var integer Page number. The default value is 0, indicating the first page.
     */
    public $Offset;

    /**
     * @var integer Number of records to be returned per page. The default value is 10, and the maximum value is 100.	
     */
    public $Limit;

    /**
     * @var string Sorting field. Valid values: <li>clusterId: Sort by instance ID.</li> <li>addTime: Sort by instance creation time.</li> <li>status: Sort by instance status code.</li>
     */
    public $OrderField;

    /**
     * @var integer Sorts by OrderField in ascending or descending order. Valid values: <li>0: ascending order;</li> <li>1: descending order.</li> The default value is 0.
     */
    public $Asc;

    /**
     * @var array Custom search filters. Examples: <li>Filter instances by ClusterId: [{"Name":"ClusterId","Values":["emr-xxxxxxxx"]}]</li><li> Filter instances by clusterName: [{"Name": "ClusterName","Values": ["cluster_name"]}]</li><li>Filter instances by ClusterStatus: [{"Name": "ClusterStatus","Values": ["2"]}]</li>
     */
    public $Filters;

    /**
     * @param string $DisplayStrategy Instance filtering policy. Valid values: <li>clusterList: Query the list of instances except for those that have been terminated.</li> <li>monitorManage: Query the list of instances except for those that have been terminated, are being created, or fail to be created.</li>
     * @param integer $Offset Page number. The default value is 0, indicating the first page.
     * @param integer $Limit Number of records to be returned per page. The default value is 10, and the maximum value is 100.	
     * @param string $OrderField Sorting field. Valid values: <li>clusterId: Sort by instance ID.</li> <li>addTime: Sort by instance creation time.</li> <li>status: Sort by instance status code.</li>
     * @param integer $Asc Sorts by OrderField in ascending or descending order. Valid values: <li>0: ascending order;</li> <li>1: descending order.</li> The default value is 0.
     * @param array $Filters Custom search filters. Examples: <li>Filter instances by ClusterId: [{"Name":"ClusterId","Values":["emr-xxxxxxxx"]}]</li><li> Filter instances by clusterName: [{"Name": "ClusterName","Values": ["cluster_name"]}]</li><li>Filter instances by ClusterStatus: [{"Name": "ClusterStatus","Values": ["2"]}]</li>
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
