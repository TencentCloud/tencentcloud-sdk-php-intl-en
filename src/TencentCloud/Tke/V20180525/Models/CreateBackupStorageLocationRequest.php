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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBackupStorageLocation request structure.
 *
 * @method string getStorageRegion() Obtain Repository region, such as `ap-guangzhou`
 * @method void setStorageRegion(string $StorageRegion) Set Repository region, such as `ap-guangzhou`
 * @method string getBucket() Obtain COS bucket name. For COS storage type, it must start with the prefix `tke-backup`.
 * @method void setBucket(string $Bucket) Set COS bucket name. For COS storage type, it must start with the prefix `tke-backup`.
 * @method string getName() Obtain Backup repository name
 * @method void setName(string $Name) Set Backup repository name
 * @method string getProvider() Obtain The provider of storage service. It defaults to Tencent Cloud.
 * @method void setProvider(string $Provider) Set The provider of storage service. It defaults to Tencent Cloud.
 * @method string getPath() Obtain COS bucket path
 * @method void setPath(string $Path) Set COS bucket path
 */
class CreateBackupStorageLocationRequest extends AbstractModel
{
    /**
     * @var string Repository region, such as `ap-guangzhou`
     */
    public $StorageRegion;

    /**
     * @var string COS bucket name. For COS storage type, it must start with the prefix `tke-backup`.
     */
    public $Bucket;

    /**
     * @var string Backup repository name
     */
    public $Name;

    /**
     * @var string The provider of storage service. It defaults to Tencent Cloud.
     */
    public $Provider;

    /**
     * @var string COS bucket path
     */
    public $Path;

    /**
     * @param string $StorageRegion Repository region, such as `ap-guangzhou`
     * @param string $Bucket COS bucket name. For COS storage type, it must start with the prefix `tke-backup`.
     * @param string $Name Backup repository name
     * @param string $Provider The provider of storage service. It defaults to Tencent Cloud.
     * @param string $Path COS bucket path
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
        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
