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
 * DescribeCosAccessPermissions request structure.
 *
 * @method integer getRelAppId() Obtain appid
 * @method void setRelAppId(integer $RelAppId) Set appid
 * @method string getBucketName() Obtain Bucket name
 * @method void setBucketName(string $BucketName) Set Bucket name
 * @method Filter getFilter() Obtain Filter criteria.
 * @method void setFilter(Filter $Filter) Set Filter criteria.
 */
class DescribeCosAccessPermissionsRequest extends AbstractModel
{
    /**
     * @var integer appid
     */
    public $RelAppId;

    /**
     * @var string Bucket name
     */
    public $BucketName;

    /**
     * @var Filter Filter criteria.
     */
    public $Filter;

    /**
     * @param integer $RelAppId appid
     * @param string $BucketName Bucket name
     * @param Filter $Filter Filter criteria.
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
        if (array_key_exists("RelAppId",$param) and $param["RelAppId"] !== null) {
            $this->RelAppId = $param["RelAppId"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
