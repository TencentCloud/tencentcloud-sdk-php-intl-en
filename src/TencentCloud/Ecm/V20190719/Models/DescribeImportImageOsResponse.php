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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImportImageOs response structure.
 *
 * @method ImageOsList getImportImageOsListSupported() Obtain Supported OS types of imported images.
 * @method void setImportImageOsListSupported(ImageOsList $ImportImageOsListSupported) Set Supported OS types of imported images.
 * @method array getImportImageOsVersionSet() Obtain Supported OS versions of imported images.
 * @method void setImportImageOsVersionSet(array $ImportImageOsVersionSet) Set Supported OS versions of imported images.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeImportImageOsResponse extends AbstractModel
{
    /**
     * @var ImageOsList Supported OS types of imported images.
     */
    public $ImportImageOsListSupported;

    /**
     * @var array Supported OS versions of imported images.
     */
    public $ImportImageOsVersionSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param ImageOsList $ImportImageOsListSupported Supported OS types of imported images.
     * @param array $ImportImageOsVersionSet Supported OS versions of imported images.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("ImportImageOsListSupported",$param) and $param["ImportImageOsListSupported"] !== null) {
            $this->ImportImageOsListSupported = new ImageOsList();
            $this->ImportImageOsListSupported->deserialize($param["ImportImageOsListSupported"]);
        }

        if (array_key_exists("ImportImageOsVersionSet",$param) and $param["ImportImageOsVersionSet"] !== null) {
            $this->ImportImageOsVersionSet = [];
            foreach ($param["ImportImageOsVersionSet"] as $key => $value){
                $obj = new OsVersion();
                $obj->deserialize($value);
                array_push($this->ImportImageOsVersionSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
