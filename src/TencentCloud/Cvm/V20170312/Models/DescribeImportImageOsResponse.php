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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method ImageOsList getImportImageOsListSupported() 获取Supported operating system types of imported images.
 * @method void setImportImageOsListSupported(ImageOsList $ImportImageOsListSupported) 设置Supported operating system types of imported images.
 * @method array getImportImageOsVersionSet() 获取Supported operating system versions of imported images. 
 * @method void setImportImageOsVersionSet(array $ImportImageOsVersionSet) 设置Supported operating system versions of imported images. 
 * @method string getRequestId() 获取The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) 设置The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeImportImageOs response structure.
 */
class DescribeImportImageOsResponse extends AbstractModel
{
    /**
     * @var ImageOsList Supported operating system types of imported images.
     */
    public $ImportImageOsListSupported;

    /**
     * @var array Supported operating system versions of imported images. 
     */
    public $ImportImageOsVersionSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param ImageOsList $ImportImageOsListSupported Supported operating system types of imported images.
     * @param array $ImportImageOsVersionSet Supported operating system versions of imported images. 
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
