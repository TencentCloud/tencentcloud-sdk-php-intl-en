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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDiskStoragePool request structure.
 *
 * @method integer getLimit() Obtain Number of returned results, defaults to 20 with a maximum value of 100. For further introduction about `Limit`, see relevant sections in the API [overview](/document/product/362/15633).
 * @method void setLimit(integer $Limit) Set Number of returned results, defaults to 20 with a maximum value of 100. For further introduction about `Limit`, see relevant sections in the API [overview](/document/product/362/15633).
 * @method array getCdcIds() Obtain Specify the exclusive cluster ID list you want to query. This parameter cannot be used with Filters.

 * @method void setCdcIds(array $CdcIds) Set Specify the exclusive cluster ID list you want to query. This parameter cannot be used with Filters.

 * @method array getFilters() Obtain Filter conditions. `CdcIds` and `Filters` cannot be specified at the same time. <br><li>cdc-id - Array of String - Optional - Filter by the cluster ID. <br><li>zone - Array of String - Optional - Filter by the [availability zone](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo) where the cluster resides. <br><li>cage-id - Array of String - Optional - Filter by the ID of the cage where the cluster resides. <br><li>disk-type - Array of string - Optional - Filter by the media type of cloud disks (`CLOUD_BASIC`: HDD cloud disk | `CLOUD_PREMIUM`: Premium cloud disk. | `CLOUD_SSD`: SSD cloud disk.)
 * @method void setFilters(array $Filters) Set Filter conditions. `CdcIds` and `Filters` cannot be specified at the same time. <br><li>cdc-id - Array of String - Optional - Filter by the cluster ID. <br><li>zone - Array of String - Optional - Filter by the [availability zone](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo) where the cluster resides. <br><li>cage-id - Array of String - Optional - Filter by the ID of the cage where the cluster resides. <br><li>disk-type - Array of string - Optional - Filter by the media type of cloud disks (`CLOUD_BASIC`: HDD cloud disk | `CLOUD_PREMIUM`: Premium cloud disk. | `CLOUD_SSD`: SSD cloud disk.)
 * @method integer getOffset() Obtain Offset, defaults to 0. For further introduction about `Offset`, see the relevant sections in the API [overview](/document/product/362/15633).
 * @method void setOffset(integer $Offset) Set Offset, defaults to 0. For further introduction about `Offset`, see the relevant sections in the API [overview](/document/product/362/15633).
 */
class DescribeDiskStoragePoolRequest extends AbstractModel
{
    /**
     * @var integer Number of returned results, defaults to 20 with a maximum value of 100. For further introduction about `Limit`, see relevant sections in the API [overview](/document/product/362/15633).
     */
    public $Limit;

    /**
     * @var array Specify the exclusive cluster ID list you want to query. This parameter cannot be used with Filters.

     */
    public $CdcIds;

    /**
     * @var array Filter conditions. `CdcIds` and `Filters` cannot be specified at the same time. <br><li>cdc-id - Array of String - Optional - Filter by the cluster ID. <br><li>zone - Array of String - Optional - Filter by the [availability zone](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo) where the cluster resides. <br><li>cage-id - Array of String - Optional - Filter by the ID of the cage where the cluster resides. <br><li>disk-type - Array of string - Optional - Filter by the media type of cloud disks (`CLOUD_BASIC`: HDD cloud disk | `CLOUD_PREMIUM`: Premium cloud disk. | `CLOUD_SSD`: SSD cloud disk.)
     */
    public $Filters;

    /**
     * @var integer Offset, defaults to 0. For further introduction about `Offset`, see the relevant sections in the API [overview](/document/product/362/15633).
     */
    public $Offset;

    /**
     * @param integer $Limit Number of returned results, defaults to 20 with a maximum value of 100. For further introduction about `Limit`, see relevant sections in the API [overview](/document/product/362/15633).
     * @param array $CdcIds Specify the exclusive cluster ID list you want to query. This parameter cannot be used with Filters.

     * @param array $Filters Filter conditions. `CdcIds` and `Filters` cannot be specified at the same time. <br><li>cdc-id - Array of String - Optional - Filter by the cluster ID. <br><li>zone - Array of String - Optional - Filter by the [availability zone](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo) where the cluster resides. <br><li>cage-id - Array of String - Optional - Filter by the ID of the cage where the cluster resides. <br><li>disk-type - Array of string - Optional - Filter by the media type of cloud disks (`CLOUD_BASIC`: HDD cloud disk | `CLOUD_PREMIUM`: Premium cloud disk. | `CLOUD_SSD`: SSD cloud disk.)
     * @param integer $Offset Offset, defaults to 0. For further introduction about `Offset`, see the relevant sections in the API [overview](/document/product/362/15633).
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("CdcIds",$param) and $param["CdcIds"] !== null) {
            $this->CdcIds = $param["CdcIds"];
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
    }
}
