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
 * DescribeRaspLicenseList request structure.
 *
 * @method array getFilters() Obtain Filter criteria.
-AssetType: asset type (CWP: CWP asset, TCSS_HOST: container host node, TCSS_EKS: container super node)
-PluginStatus: plug-in status. Valid values: `Normal` (use normally), `Abnormal` (existence of anomalies), `Unused` (inactive).
-ProtectionSwitch (Enable: enabled; Disable: not enabled)
- ProtectionVersion: Protection edition. Valid values: `Rasp`: authorization package for important period protection; `Unauthorized`: unauthorized.
- InstanceID Instance ID
- InstanceName: instance name
- InstanceIP: instance IP address (private/public IP address)
- Container node ID of NodeID
-NodeName: Container node name
- ClusterID: Container cluster ID
-ClusterName: container cluster name.
 * @method void setFilters(array $Filters) Set Filter criteria.
-AssetType: asset type (CWP: CWP asset, TCSS_HOST: container host node, TCSS_EKS: container super node)
-PluginStatus: plug-in status. Valid values: `Normal` (use normally), `Abnormal` (existence of anomalies), `Unused` (inactive).
-ProtectionSwitch (Enable: enabled; Disable: not enabled)
- ProtectionVersion: Protection edition. Valid values: `Rasp`: authorization package for important period protection; `Unauthorized`: unauthorized.
- InstanceID Instance ID
- InstanceName: instance name
- InstanceIP: instance IP address (private/public IP address)
- Container node ID of NodeID
-NodeName: Container node name
- ClusterID: Container cluster ID
-ClusterName: container cluster name.
 * @method integer getLimit() Obtain Maximum number of entries. Default value: 10.
 * @method void setLimit(integer $Limit) Set Maximum number of entries. Default value: 10.
 * @method integer getOffset() Obtain Offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0
 * @method string getOrder() Obtain Sorting order. Valid values: ASC (ascending) and DESC (descending).
 * @method void setOrder(string $Order) Set Sorting order. Valid values: ASC (ascending) and DESC (descending).
 * @method string getBy() Obtain Sort value
- LatestUpdateTime: Latest update time.
 * @method void setBy(string $By) Set Sort value
- LatestUpdateTime: Latest update time.
 */
class DescribeRaspLicenseListRequest extends AbstractModel
{
    /**
     * @var array Filter criteria.
-AssetType: asset type (CWP: CWP asset, TCSS_HOST: container host node, TCSS_EKS: container super node)
-PluginStatus: plug-in status. Valid values: `Normal` (use normally), `Abnormal` (existence of anomalies), `Unused` (inactive).
-ProtectionSwitch (Enable: enabled; Disable: not enabled)
- ProtectionVersion: Protection edition. Valid values: `Rasp`: authorization package for important period protection; `Unauthorized`: unauthorized.
- InstanceID Instance ID
- InstanceName: instance name
- InstanceIP: instance IP address (private/public IP address)
- Container node ID of NodeID
-NodeName: Container node name
- ClusterID: Container cluster ID
-ClusterName: container cluster name.
     */
    public $Filters;

    /**
     * @var integer Maximum number of entries. Default value: 10.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0
     */
    public $Offset;

    /**
     * @var string Sorting order. Valid values: ASC (ascending) and DESC (descending).
     */
    public $Order;

    /**
     * @var string Sort value
- LatestUpdateTime: Latest update time.
     */
    public $By;

    /**
     * @param array $Filters Filter criteria.
-AssetType: asset type (CWP: CWP asset, TCSS_HOST: container host node, TCSS_EKS: container super node)
-PluginStatus: plug-in status. Valid values: `Normal` (use normally), `Abnormal` (existence of anomalies), `Unused` (inactive).
-ProtectionSwitch (Enable: enabled; Disable: not enabled)
- ProtectionVersion: Protection edition. Valid values: `Rasp`: authorization package for important period protection; `Unauthorized`: unauthorized.
- InstanceID Instance ID
- InstanceName: instance name
- InstanceIP: instance IP address (private/public IP address)
- Container node ID of NodeID
-NodeName: Container node name
- ClusterID: Container cluster ID
-ClusterName: container cluster name.
     * @param integer $Limit Maximum number of entries. Default value: 10.
     * @param integer $Offset Offset. Default value: 0
     * @param string $Order Sorting order. Valid values: ASC (ascending) and DESC (descending).
     * @param string $By Sort value
- LatestUpdateTime: Latest update time.
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
