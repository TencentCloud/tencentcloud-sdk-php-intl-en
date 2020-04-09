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
 * DescribeInstances request structure.
 *
 * @method string getDisplayStrategy() Obtain Cluster filtering policy. Valid values:
<li>clusterList: queries the list of clusters except terminated ones.</li>
<li>monitorManage: queries the list of clusters except those that have been terminated, are being created, or failed to be created.</li>
<li>cloudHardwareManage/componentManage: reserved fields with the same meaning as `monitorManage`.</li>
 * @method void setDisplayStrategy(string $DisplayStrategy) Set Cluster filtering policy. Valid values:
<li>clusterList: queries the list of clusters except terminated ones.</li>
<li>monitorManage: queries the list of clusters except those that have been terminated, are being created, or failed to be created.</li>
<li>cloudHardwareManage/componentManage: reserved fields with the same meaning as `monitorManage`.</li>
 * @method array getInstanceIds() Obtain Queries by one or more instance IDs in the format of `emr-xxxxxxxx`. For the format of this parameter, please see the `id.N` section in [API Overview](https://intl.cloud.tencent.com/document/api/213/15688). If no instance ID is entered, the list of all instances under this `APPID` will be returned.
 * @method void setInstanceIds(array $InstanceIds) Set Queries by one or more instance IDs in the format of `emr-xxxxxxxx`. For the format of this parameter, please see the `id.N` section in [API Overview](https://intl.cloud.tencent.com/document/api/213/15688). If no instance ID is entered, the list of all instances under this `APPID` will be returned.
 * @method integer getOffset() Obtain Page number. Default value: 0, indicating the first page.
 * @method void setOffset(integer $Offset) Set Page number. Default value: 0, indicating the first page.
 * @method integer getLimit() Obtain Number of returned results per page. Default value: 10. Maximum value: 100
 * @method void setLimit(integer $Limit) Set Number of returned results per page. Default value: 10. Maximum value: 100
 * @method integer getProjectId() Obtain ID of the project to which the instance belongs. This parameter can be obtained from the `projectId` field in the return value of the `DescribeProject` API. If this value is -1, the list of all instances will be returned.
 * @method void setProjectId(integer $ProjectId) Set ID of the project to which the instance belongs. This parameter can be obtained from the `projectId` field in the return value of the `DescribeProject` API. If this value is -1, the list of all instances will be returned.
 * @method string getOrderField() Obtain Sorting field. Valid values:
<li>clusterId: sorts by cluster ID.</li>
<li>addTime: sorts by instance creation time.</li>
<li>status: sorts by instance status code.</li>
 * @method void setOrderField(string $OrderField) Set Sorting field. Valid values:
<li>clusterId: sorts by cluster ID.</li>
<li>addTime: sorts by instance creation time.</li>
<li>status: sorts by instance status code.</li>
 * @method integer getAsc() Obtain Sorts according to `OrderField` in ascending or descending order. Valid values:
<li>0: descending order.</li>
<li>1: ascending order.</li>Default value: 0.
 * @method void setAsc(integer $Asc) Set Sorts according to `OrderField` in ascending or descending order. Valid values:
<li>0: descending order.</li>
<li>1: ascending order.</li>Default value: 0.
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var string Cluster filtering policy. Valid values:
<li>clusterList: queries the list of clusters except terminated ones.</li>
<li>monitorManage: queries the list of clusters except those that have been terminated, are being created, or failed to be created.</li>
<li>cloudHardwareManage/componentManage: reserved fields with the same meaning as `monitorManage`.</li>
     */
    public $DisplayStrategy;

    /**
     * @var array Queries by one or more instance IDs in the format of `emr-xxxxxxxx`. For the format of this parameter, please see the `id.N` section in [API Overview](https://intl.cloud.tencent.com/document/api/213/15688). If no instance ID is entered, the list of all instances under this `APPID` will be returned.
     */
    public $InstanceIds;

    /**
     * @var integer Page number. Default value: 0, indicating the first page.
     */
    public $Offset;

    /**
     * @var integer Number of returned results per page. Default value: 10. Maximum value: 100
     */
    public $Limit;

    /**
     * @var integer ID of the project to which the instance belongs. This parameter can be obtained from the `projectId` field in the return value of the `DescribeProject` API. If this value is -1, the list of all instances will be returned.
     */
    public $ProjectId;

    /**
     * @var string Sorting field. Valid values:
<li>clusterId: sorts by cluster ID.</li>
<li>addTime: sorts by instance creation time.</li>
<li>status: sorts by instance status code.</li>
     */
    public $OrderField;

    /**
     * @var integer Sorts according to `OrderField` in ascending or descending order. Valid values:
<li>0: descending order.</li>
<li>1: ascending order.</li>Default value: 0.
     */
    public $Asc;

    /**
     * @param string $DisplayStrategy Cluster filtering policy. Valid values:
<li>clusterList: queries the list of clusters except terminated ones.</li>
<li>monitorManage: queries the list of clusters except those that have been terminated, are being created, or failed to be created.</li>
<li>cloudHardwareManage/componentManage: reserved fields with the same meaning as `monitorManage`.</li>
     * @param array $InstanceIds Queries by one or more instance IDs in the format of `emr-xxxxxxxx`. For the format of this parameter, please see the `id.N` section in [API Overview](https://intl.cloud.tencent.com/document/api/213/15688). If no instance ID is entered, the list of all instances under this `APPID` will be returned.
     * @param integer $Offset Page number. Default value: 0, indicating the first page.
     * @param integer $Limit Number of returned results per page. Default value: 10. Maximum value: 100
     * @param integer $ProjectId ID of the project to which the instance belongs. This parameter can be obtained from the `projectId` field in the return value of the `DescribeProject` API. If this value is -1, the list of all instances will be returned.
     * @param string $OrderField Sorting field. Valid values:
<li>clusterId: sorts by cluster ID.</li>
<li>addTime: sorts by instance creation time.</li>
<li>status: sorts by instance status code.</li>
     * @param integer $Asc Sorts according to `OrderField` in ascending or descending order. Valid values:
<li>0: descending order.</li>
<li>1: ascending order.</li>Default value: 0.
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
