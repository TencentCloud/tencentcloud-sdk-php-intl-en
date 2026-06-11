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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRaspLicenseList request structure.
 *
 * @method array getFilters() Obtain Filter criteria
-AssetType Asset type (CWP Host security asset, TCSS_HOST Container host node, TCSS_EKS Container super node)
-PluginStatus Plug-in status (Normal, Abnormal, Inactive)
-ProtectionSwitch (Enable, Disable)
-ProtectionVersion Protection edition (Rasp authorization package, Unauthorized)
-Instance ID
-Instance name
-InstanceIP Instance IP (private IP address/public network IP)
-Node ID of the container node
-NodeName Container node name
-Container Cluster ID
-Cluster name of the container cluster
 * @method void setFilters(array $Filters) Set Filter criteria
-AssetType Asset type (CWP Host security asset, TCSS_HOST Container host node, TCSS_EKS Container super node)
-PluginStatus Plug-in status (Normal, Abnormal, Inactive)
-ProtectionSwitch (Enable, Disable)
-ProtectionVersion Protection edition (Rasp authorization package, Unauthorized)
-Instance ID
-Instance name
-InstanceIP Instance IP (private IP address/public network IP)
-Node ID of the container node
-NodeName Container node name
-Container Cluster ID
-Cluster name of the container cluster
 * @method integer getLimit() Obtain Maximum number of entries. Default value: 10.
 * @method void setLimit(integer $Limit) Set Maximum number of entries. Default value: 10.
 * @method integer getOffset() Obtain Offset, which is 0 by default.
 * @method void setOffset(integer $Offset) Set Offset, which is 0 by default.
 * @method string getOrder() Obtain Sorting method: ASC, DESC.
 * @method void setOrder(string $Order) Set Sorting method: ASC, DESC.
 * @method string getBy() Obtain Sort value
-Latest update time
 * @method void setBy(string $By) Set Sort value
-Latest update time
 */
class DescribeRaspLicenseListRequest extends AbstractModel
{
    /**
     * @var array Filter criteria
-AssetType Asset type (CWP Host security asset, TCSS_HOST Container host node, TCSS_EKS Container super node)
-PluginStatus Plug-in status (Normal, Abnormal, Inactive)
-ProtectionSwitch (Enable, Disable)
-ProtectionVersion Protection edition (Rasp authorization package, Unauthorized)
-Instance ID
-Instance name
-InstanceIP Instance IP (private IP address/public network IP)
-Node ID of the container node
-NodeName Container node name
-Container Cluster ID
-Cluster name of the container cluster
     */
    public $Filters;

    /**
     * @var integer Maximum number of entries. Default value: 10.
     */
    public $Limit;

    /**
     * @var integer Offset, which is 0 by default.
     */
    public $Offset;

    /**
     * @var string Sorting method: ASC, DESC.
     */
    public $Order;

    /**
     * @var string Sort value
-Latest update time
     */
    public $By;

    /**
     * @param array $Filters Filter criteria
-AssetType Asset type (CWP Host security asset, TCSS_HOST Container host node, TCSS_EKS Container super node)
-PluginStatus Plug-in status (Normal, Abnormal, Inactive)
-ProtectionSwitch (Enable, Disable)
-ProtectionVersion Protection edition (Rasp authorization package, Unauthorized)
-Instance ID
-Instance name
-InstanceIP Instance IP (private IP address/public network IP)
-Node ID of the container node
-NodeName Container node name
-Container Cluster ID
-Cluster name of the container cluster
     * @param integer $Limit Maximum number of entries. Default value: 10.
     * @param integer $Offset Offset, which is 0 by default.
     * @param string $Order Sorting method: ASC, DESC.
     * @param string $By Sort value
-Latest update time
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
