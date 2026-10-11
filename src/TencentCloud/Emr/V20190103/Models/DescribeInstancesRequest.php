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
 * DescribeInstances request structure.
 *
 * @method string getDisplayStrategy() Obtain Cluster filtering policy. Valid values:
<li>clusterList: Queries the list of clusters except for those that have been terminated.</li>
<li>monitorManage: Queries the list of clusters except for those that have been terminated, are being created, or fail to be created.</li><li>cloudHardwareManage/componentManage: Currently these two values are reserved and temporarily have the same meaning as monitorManage.</li>
 * @method void setDisplayStrategy(string $DisplayStrategy) Set Cluster filtering policy. Valid values:
<li>clusterList: Queries the list of clusters except for those that have been terminated.</li>
<li>monitorManage: Queries the list of clusters except for those that have been terminated, are being created, or fail to be created.</li><li>cloudHardwareManage/componentManage: Currently these two values are reserved and temporarily have the same meaning as monitorManage.</li>
 * @method array getInstanceIds() Obtain Query by one or more instance IDs. The instance ID is in the format of emr-xxxxxxxx. (For the specific format of this parameter, see the section Ids.N in the API [Introduction](https://www.tencentcloud.com/document/api/213/15688?from_cn_redirect=1)). If the instance ID is not specified, the list of all the instances for the APPID is returned.
 * @method void setInstanceIds(array $InstanceIds) Set Query by one or more instance IDs. The instance ID is in the format of emr-xxxxxxxx. (For the specific format of this parameter, see the section Ids.N in the API [Introduction](https://www.tencentcloud.com/document/api/213/15688?from_cn_redirect=1)). If the instance ID is not specified, the list of all the instances for the APPID is returned.
 * @method integer getOffset() Obtain 
 * @method void setOffset(integer $Offset) Set 
 * @method integer getLimit() Obtain Number of items returned per page. Default value: 100. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of items returned per page. Default value: 100. Maximum value: 100.
 * @method integer getProjectId() Obtain It is recommended to set this parameter to -1, indicating all clusters under all projects are pulled.
If not specified, the default value is 0, indicating the clusters under the default project are pulled.
ID of the project to which the instance belongs. This parameter can be obtained from the projectId field in the return value of [DescribeProjects](https://www.tencentcloud.com/document/product/651/78725?from_cn_redirect=1).
 * @method void setProjectId(integer $ProjectId) Set It is recommended to set this parameter to -1, indicating all clusters under all projects are pulled.
If not specified, the default value is 0, indicating the clusters under the default project are pulled.
ID of the project to which the instance belongs. This parameter can be obtained from the projectId field in the return value of [DescribeProjects](https://www.tencentcloud.com/document/product/651/78725?from_cn_redirect=1).
 * @method string getOrderField() Obtain Sorting field. Valid values:
<li>clusterId: sort by instance ID.</li>
<li>addTime: sort by instance creation time.</li>
<li>status: sort by instance status code.</li>
 * @method void setOrderField(string $OrderField) Set Sorting field. Valid values:
<li>clusterId: sort by instance ID.</li>
<li>addTime: sort by instance creation time.</li>
<li>status: sort by instance status code.</li>
 * @method integer getAsc() Obtain Sorts by OrderField in ascending or descending order. Valid values:<li>0: descending order</li>
<li>1: ascending order</li>The default value is 0.
 * @method void setAsc(integer $Asc) Set Sorts by OrderField in ascending or descending order. Valid values:<li>0: descending order</li>
<li>1: ascending order</li>The default value is 0.
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var string Cluster filtering policy. Valid values:
<li>clusterList: Queries the list of clusters except for those that have been terminated.</li>
<li>monitorManage: Queries the list of clusters except for those that have been terminated, are being created, or fail to be created.</li><li>cloudHardwareManage/componentManage: Currently these two values are reserved and temporarily have the same meaning as monitorManage.</li>
     */
    public $DisplayStrategy;

    /**
     * @var array Query by one or more instance IDs. The instance ID is in the format of emr-xxxxxxxx. (For the specific format of this parameter, see the section Ids.N in the API [Introduction](https://www.tencentcloud.com/document/api/213/15688?from_cn_redirect=1)). If the instance ID is not specified, the list of all the instances for the APPID is returned.
     */
    public $InstanceIds;

    /**
     * @var integer 
     */
    public $Offset;

    /**
     * @var integer Number of items returned per page. Default value: 100. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer It is recommended to set this parameter to -1, indicating all clusters under all projects are pulled.
If not specified, the default value is 0, indicating the clusters under the default project are pulled.
ID of the project to which the instance belongs. This parameter can be obtained from the projectId field in the return value of [DescribeProjects](https://www.tencentcloud.com/document/product/651/78725?from_cn_redirect=1).
     */
    public $ProjectId;

    /**
     * @var string Sorting field. Valid values:
<li>clusterId: sort by instance ID.</li>
<li>addTime: sort by instance creation time.</li>
<li>status: sort by instance status code.</li>
     */
    public $OrderField;

    /**
     * @var integer Sorts by OrderField in ascending or descending order. Valid values:<li>0: descending order</li>
<li>1: ascending order</li>The default value is 0.
     */
    public $Asc;

    /**
     * @param string $DisplayStrategy Cluster filtering policy. Valid values:
<li>clusterList: Queries the list of clusters except for those that have been terminated.</li>
<li>monitorManage: Queries the list of clusters except for those that have been terminated, are being created, or fail to be created.</li><li>cloudHardwareManage/componentManage: Currently these two values are reserved and temporarily have the same meaning as monitorManage.</li>
     * @param array $InstanceIds Query by one or more instance IDs. The instance ID is in the format of emr-xxxxxxxx. (For the specific format of this parameter, see the section Ids.N in the API [Introduction](https://www.tencentcloud.com/document/api/213/15688?from_cn_redirect=1)). If the instance ID is not specified, the list of all the instances for the APPID is returned.
     * @param integer $Offset 
     * @param integer $Limit Number of items returned per page. Default value: 100. Maximum value: 100.
     * @param integer $ProjectId It is recommended to set this parameter to -1, indicating all clusters under all projects are pulled.
If not specified, the default value is 0, indicating the clusters under the default project are pulled.
ID of the project to which the instance belongs. This parameter can be obtained from the projectId field in the return value of [DescribeProjects](https://www.tencentcloud.com/document/product/651/78725?from_cn_redirect=1).
     * @param string $OrderField Sorting field. Valid values:
<li>clusterId: sort by instance ID.</li>
<li>addTime: sort by instance creation time.</li>
<li>status: sort by instance status code.</li>
     * @param integer $Asc Sorts by OrderField in ascending or descending order. Valid values:<li>0: descending order</li>
<li>1: ascending order</li>The default value is 0.
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

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Asc",$param) and $param["Asc"] !== null) {
            $this->Asc = $param["Asc"];
        }
    }
}
