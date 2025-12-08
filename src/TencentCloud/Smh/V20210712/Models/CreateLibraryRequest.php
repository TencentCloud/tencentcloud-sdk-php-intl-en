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
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLibrary request structure.
 *
 * @method string getName() Obtain Media library name. up to 50 characters.
 * @method void setName(string $Name) Set Media library name. up to 50 characters.
 * @method string getRemark() Obtain Specifies the remark, up to 250 characters.
 * @method void setRemark(string $Remark) Set Specifies the remark, up to 250 characters.
 * @method string getBucketName() Obtain Specifies the full name of the bucket, which cannot be changed after creation. the current version no longer supports specified buckets.
 * @method void setBucketName(string $BucketName) Set Specifies the full name of the bucket, which cannot be changed after creation. the current version no longer supports specified buckets.
 * @method string getBucketRegion() Obtain Bucket location cannot be changed after creation. the current version no longer supports specifying bucket location.
 * @method void setBucketRegion(string $BucketRegion) Set Bucket location cannot be changed after creation. the current version no longer supports specifying bucket location.
 * @method LibraryExtension getLibraryExtension() Obtain Media library configuration item. some parameters cannot be changed after creation.
 * @method void setLibraryExtension(LibraryExtension $LibraryExtension) Set Media library configuration item. some parameters cannot be changed after creation.
 */
class CreateLibraryRequest extends AbstractModel
{
    /**
     * @var string Media library name. up to 50 characters.
     */
    public $Name;

    /**
     * @var string Specifies the remark, up to 250 characters.
     */
    public $Remark;

    /**
     * @var string Specifies the full name of the bucket, which cannot be changed after creation. the current version no longer supports specified buckets.
     */
    public $BucketName;

    /**
     * @var string Bucket location cannot be changed after creation. the current version no longer supports specifying bucket location.
     */
    public $BucketRegion;

    /**
     * @var LibraryExtension Media library configuration item. some parameters cannot be changed after creation.
     */
    public $LibraryExtension;

    /**
     * @param string $Name Media library name. up to 50 characters.
     * @param string $Remark Specifies the remark, up to 250 characters.
     * @param string $BucketName Specifies the full name of the bucket, which cannot be changed after creation. the current version no longer supports specified buckets.
     * @param string $BucketRegion Bucket location cannot be changed after creation. the current version no longer supports specifying bucket location.
     * @param LibraryExtension $LibraryExtension Media library configuration item. some parameters cannot be changed after creation.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("BucketRegion",$param) and $param["BucketRegion"] !== null) {
            $this->BucketRegion = $param["BucketRegion"];
        }

        if (array_key_exists("LibraryExtension",$param) and $param["LibraryExtension"] !== null) {
            $this->LibraryExtension = new LibraryExtension();
            $this->LibraryExtension->deserialize($param["LibraryExtension"]);
        }
    }
}
