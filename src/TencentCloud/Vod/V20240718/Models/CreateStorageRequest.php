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
namespace TencentCloud\Vod\V20240718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateStorage request structure.
 *
 * @method integer getSubAppId() Obtain <b>The ID of [VOD Professional Application](http://tencentcloud.com/document/product/266/67977).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The ID of [VOD Professional Application](http://tencentcloud.com/document/product/266/67977).</b>
 * @method string getStorageRegion() Obtain Storage region, which must be a region supported by the system. All storage regions and the regions where storage buckets have already been enabled can be queried using the [DescribeStorageRegions](https://www.tencentcloud.com/document/product/266/46542) API.
 * @method void setStorageRegion(string $StorageRegion) Set Storage region, which must be a region supported by the system. All storage regions and the regions where storage buckets have already been enabled can be queried using the [DescribeStorageRegions](https://www.tencentcloud.com/document/product/266/46542) API.
 * @method string getStorageName() Obtain The name of the storage.
<li>Only lowercase English letters, numbers, hyphens "-", and their combinations are supported.</li>
<li>The storage name cannot start or end with a "-".</li>
<li>The maximum length of the storage name is 64 characters.</li>
 * @method void setStorageName(string $StorageName) Set The name of the storage.
<li>Only lowercase English letters, numbers, hyphens "-", and their combinations are supported.</li>
<li>The storage name cannot start or end with a "-".</li>
<li>The maximum length of the storage name is 64 characters.</li>
 */
class CreateStorageRequest extends AbstractModel
{
    /**
     * @var integer <b>The ID of [VOD Professional Application](http://tencentcloud.com/document/product/266/67977).</b>
     */
    public $SubAppId;

    /**
     * @var string Storage region, which must be a region supported by the system. All storage regions and the regions where storage buckets have already been enabled can be queried using the [DescribeStorageRegions](https://www.tencentcloud.com/document/product/266/46542) API.
     */
    public $StorageRegion;

    /**
     * @var string The name of the storage.
<li>Only lowercase English letters, numbers, hyphens "-", and their combinations are supported.</li>
<li>The storage name cannot start or end with a "-".</li>
<li>The maximum length of the storage name is 64 characters.</li>
     */
    public $StorageName;

    /**
     * @param integer $SubAppId <b>The ID of [VOD Professional Application](http://tencentcloud.com/document/product/266/67977).</b>
     * @param string $StorageRegion Storage region, which must be a region supported by the system. All storage regions and the regions where storage buckets have already been enabled can be queried using the [DescribeStorageRegions](https://www.tencentcloud.com/document/product/266/46542) API.
     * @param string $StorageName The name of the storage.
<li>Only lowercase English letters, numbers, hyphens "-", and their combinations are supported.</li>
<li>The storage name cannot start or end with a "-".</li>
<li>The maximum length of the storage name is 64 characters.</li>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("StorageName",$param) and $param["StorageName"] !== null) {
            $this->StorageName = $param["StorageName"];
        }
    }
}
