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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDisks request structure.
 *
 * @method array getDiskIds() Obtain List of cloud disk IDs.
 * @method void setDiskIds(array $DiskIds) Set List of cloud disk IDs.
 * @method array getFilters() Obtain Filter list
disk-id
Filter by **cloud disk ID**.
Type: String
Required: No
instance-id
Filter by **instance ID**.
Type: String
Required: No
disk-name
Filter by **cloud disk name**.
Type: String
Required: No
zone
Filter by **availability zone**.
Type: String
Required: No
disk-usage
Filter by **cloud disk type**.
Type: String
Required: No
Values: `SYSTEM_DISK` and `DATA_DISK`
disk-state
Filter by **cloud disk status**.
Type: String
Required: No
Values: See `DiskState` in [Disk](https://intl.cloud.tencent.com/document/api/1207/47576?from_cn_redirect=1#Disk)
Each request can contain up to 10 `Filters` and 100 `Filter.Values`. `DiskIds` and `Filters` cannot be specified at the same time.
 * @method void setFilters(array $Filters) Set Filter list
disk-id
Filter by **cloud disk ID**.
Type: String
Required: No
instance-id
Filter by **instance ID**.
Type: String
Required: No
disk-name
Filter by **cloud disk name**.
Type: String
Required: No
zone
Filter by **availability zone**.
Type: String
Required: No
disk-usage
Filter by **cloud disk type**.
Type: String
Required: No
Values: `SYSTEM_DISK` and `DATA_DISK`
disk-state
Filter by **cloud disk status**.
Type: String
Required: No
Values: See `DiskState` in [Disk](https://intl.cloud.tencent.com/document/api/1207/47576?from_cn_redirect=1#Disk)
Each request can contain up to 10 `Filters` and 100 `Filter.Values`. `DiskIds` and `Filters` cannot be specified at the same time.
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method string getOrderField() Obtain The field by which the cloud disks are sorted. Valid values: "CREATED_TIME" (creation time), "EXPIRED_TIME" (expiration time), "DISK_SIZE" (size of cloud disks). Default value: "CREATED_TIME".
 * @method void setOrderField(string $OrderField) Set The field by which the cloud disks are sorted. Valid values: "CREATED_TIME" (creation time), "EXPIRED_TIME" (expiration time), "DISK_SIZE" (size of cloud disks). Default value: "CREATED_TIME".
 * @method string getOrder() Obtain Sorting order of the output cloud disks. Valid values: "ASC" (ascending order), "DESC" (descending order). Default value: "DESC".
 * @method void setOrder(string $Order) Set Sorting order of the output cloud disks. Valid values: "ASC" (ascending order), "DESC" (descending order). Default value: "DESC".
 */
class DescribeDisksRequest extends AbstractModel
{
    /**
     * @var array List of cloud disk IDs.
     */
    public $DiskIds;

    /**
     * @var array Filter list
disk-id
Filter by **cloud disk ID**.
Type: String
Required: No
instance-id
Filter by **instance ID**.
Type: String
Required: No
disk-name
Filter by **cloud disk name**.
Type: String
Required: No
zone
Filter by **availability zone**.
Type: String
Required: No
disk-usage
Filter by **cloud disk type**.
Type: String
Required: No
Values: `SYSTEM_DISK` and `DATA_DISK`
disk-state
Filter by **cloud disk status**.
Type: String
Required: No
Values: See `DiskState` in [Disk](https://intl.cloud.tencent.com/document/api/1207/47576?from_cn_redirect=1#Disk)
Each request can contain up to 10 `Filters` and 100 `Filter.Values`. `DiskIds` and `Filters` cannot be specified at the same time.
     */
    public $Filters;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var string The field by which the cloud disks are sorted. Valid values: "CREATED_TIME" (creation time), "EXPIRED_TIME" (expiration time), "DISK_SIZE" (size of cloud disks). Default value: "CREATED_TIME".
     */
    public $OrderField;

    /**
     * @var string Sorting order of the output cloud disks. Valid values: "ASC" (ascending order), "DESC" (descending order). Default value: "DESC".
     */
    public $Order;

    /**
     * @param array $DiskIds List of cloud disk IDs.
     * @param array $Filters Filter list
disk-id
Filter by **cloud disk ID**.
Type: String
Required: No
instance-id
Filter by **instance ID**.
Type: String
Required: No
disk-name
Filter by **cloud disk name**.
Type: String
Required: No
zone
Filter by **availability zone**.
Type: String
Required: No
disk-usage
Filter by **cloud disk type**.
Type: String
Required: No
Values: `SYSTEM_DISK` and `DATA_DISK`
disk-state
Filter by **cloud disk status**.
Type: String
Required: No
Values: See `DiskState` in [Disk](https://intl.cloud.tencent.com/document/api/1207/47576?from_cn_redirect=1#Disk)
Each request can contain up to 10 `Filters` and 100 `Filter.Values`. `DiskIds` and `Filters` cannot be specified at the same time.
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100.
     * @param integer $Offset Offset. Default value: 0.
     * @param string $OrderField The field by which the cloud disks are sorted. Valid values: "CREATED_TIME" (creation time), "EXPIRED_TIME" (expiration time), "DISK_SIZE" (size of cloud disks). Default value: "CREATED_TIME".
     * @param string $Order Sorting order of the output cloud disks. Valid values: "ASC" (ascending order), "DESC" (descending order). Default value: "DESC".
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
        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
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

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
