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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bucket information
See the basic concepts at https://intl.cloud.tencent.com/document/product/436/44352?from_cn_redirect=1
 *
 * @method string getBucket() Obtain This field indicates a bucket name in Tencent Cloud COS. For more information on buckets, see Basic Concepts (https://intl.cloud.tencent.com/document/product/436/44352?from_cn_redirect=1). 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBucket(string $Bucket) Set This field indicates a bucket name in Tencent Cloud COS. For more information on buckets, see Basic Concepts (https://intl.cloud.tencent.com/document/product/436/44352?from_cn_redirect=1). 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain This field indicates a region where a Tencent Cloud COS managed data center is deployed. COS data is stored in buckets in these regions. 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set This field indicates a region where a Tencent Cloud COS managed data center is deployed. COS data is stored in buckets in these regions. 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getObject() Obtain This field indicates an object key in Tencent Cloud COS. Object z is stored in a bucket as a basic storage unit. You can manage objects through the Tencent Cloud console, API, or SDK. For more information on objects, see Object Overview (https://intl.cloud.tencent.com/document/product/436/13324?from_cn_redirect=1). 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setObject(string $Object) Set This field indicates an object key in Tencent Cloud COS. Object z is stored in a bucket as a basic storage unit. You can manage objects through the Tencent Cloud console, API, or SDK. For more information on objects, see Object Overview (https://intl.cloud.tencent.com/document/product/436/13324?from_cn_redirect=1). 
Note: this field may return null, indicating that no valid values can be obtained.
 */
class BucketInfo extends AbstractModel
{
    /**
     * @var string This field indicates a bucket name in Tencent Cloud COS. For more information on buckets, see Basic Concepts (https://intl.cloud.tencent.com/document/product/436/44352?from_cn_redirect=1). 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Bucket;

    /**
     * @var string This field indicates a region where a Tencent Cloud COS managed data center is deployed. COS data is stored in buckets in these regions. 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string This field indicates an object key in Tencent Cloud COS. Object z is stored in a bucket as a basic storage unit. You can manage objects through the Tencent Cloud console, API, or SDK. For more information on objects, see Object Overview (https://intl.cloud.tencent.com/document/product/436/13324?from_cn_redirect=1). 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Object;

    /**
     * @param string $Bucket This field indicates a bucket name in Tencent Cloud COS. For more information on buckets, see Basic Concepts (https://intl.cloud.tencent.com/document/product/436/44352?from_cn_redirect=1). 
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Region This field indicates a region where a Tencent Cloud COS managed data center is deployed. COS data is stored in buckets in these regions. 
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Object This field indicates an object key in Tencent Cloud COS. Object z is stored in a bucket as a basic storage unit. You can manage objects through the Tencent Cloud console, API, or SDK. For more information on objects, see Object Overview (https://intl.cloud.tencent.com/document/product/436/13324?from_cn_redirect=1). 
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Object",$param) and $param["Object"] !== null) {
            $this->Object = $param["Object"];
        }
    }
}
