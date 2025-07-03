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
 * Storage information for the professional application.
 *
 * @method string getBucketId() Obtain The ID of bucket.
 * @method void setBucketId(string $BucketId) Set The ID of bucket.
 * @method string getStorageName() Obtain The name of bucket.
 * @method void setStorageName(string $StorageName) Set The name of bucket.
 * @method string getStorageRegion() Obtain The region of storage.
 * @method void setStorageRegion(string $StorageRegion) Set The region of storage.
 * @method string getInternetAccessDomainStatus() Obtain The status of the internet access domain name is stored. Valid values: <li>ONLINE: Active;</li> <li>DEPLOYING: In deployment.</li>
 * @method void setInternetAccessDomainStatus(string $InternetAccessDomainStatus) Set The status of the internet access domain name is stored. Valid values: <li>ONLINE: Active;</li> <li>DEPLOYING: In deployment.</li>
 * @method string getInternetAccessDomain() Obtain The internet access domain name of storage.
 * @method void setInternetAccessDomain(string $InternetAccessDomain) Set The internet access domain name of storage.
 * @method string getCreateTime() Obtain The creation time of the storage.
 * @method void setCreateTime(string $CreateTime) Set The creation time of the storage.
 */
class StorageInfo extends AbstractModel
{
    /**
     * @var string The ID of bucket.
     */
    public $BucketId;

    /**
     * @var string The name of bucket.
     */
    public $StorageName;

    /**
     * @var string The region of storage.
     */
    public $StorageRegion;

    /**
     * @var string The status of the internet access domain name is stored. Valid values: <li>ONLINE: Active;</li> <li>DEPLOYING: In deployment.</li>
     */
    public $InternetAccessDomainStatus;

    /**
     * @var string The internet access domain name of storage.
     */
    public $InternetAccessDomain;

    /**
     * @var string The creation time of the storage.
     */
    public $CreateTime;

    /**
     * @param string $BucketId The ID of bucket.
     * @param string $StorageName The name of bucket.
     * @param string $StorageRegion The region of storage.
     * @param string $InternetAccessDomainStatus The status of the internet access domain name is stored. Valid values: <li>ONLINE: Active;</li> <li>DEPLOYING: In deployment.</li>
     * @param string $InternetAccessDomain The internet access domain name of storage.
     * @param string $CreateTime The creation time of the storage.
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
        if (array_key_exists("BucketId",$param) and $param["BucketId"] !== null) {
            $this->BucketId = $param["BucketId"];
        }

        if (array_key_exists("StorageName",$param) and $param["StorageName"] !== null) {
            $this->StorageName = $param["StorageName"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("InternetAccessDomainStatus",$param) and $param["InternetAccessDomainStatus"] !== null) {
            $this->InternetAccessDomainStatus = $param["InternetAccessDomainStatus"];
        }

        if (array_key_exists("InternetAccessDomain",$param) and $param["InternetAccessDomain"] !== null) {
            $this->InternetAccessDomain = $param["InternetAccessDomain"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
