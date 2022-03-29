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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Input information details
 *
 * @method string getType() Obtain This field indicates the file access type. Valid values: **URL** (resource link), **COS** (Tencent Cloud COS).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set This field indicates the file access type. Valid values: **URL** (resource link), **COS** (Tencent Cloud COS).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUrl() Obtain This field indicates the link address for file access in standard URL format.<br>Note: when `Type` is `URL`, this field will not be empty.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set This field indicates the link address for file access in standard URL format.<br>Note: when `Type` is `URL`, this field will not be empty.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method BucketInfo getBucketInfo() Obtain This field indicates the Tencent Cloud bucket information for file access.<br>Note: when `Type` is `COS`, this field will not be empty.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBucketInfo(BucketInfo $BucketInfo) Set This field indicates the Tencent Cloud bucket information for file access.<br>Note: when `Type` is `COS`, this field will not be empty.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class InputInfo extends AbstractModel
{
    /**
     * @var string This field indicates the file access type. Valid values: **URL** (resource link), **COS** (Tencent Cloud COS).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string This field indicates the link address for file access in standard URL format.<br>Note: when `Type` is `URL`, this field will not be empty.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @var BucketInfo This field indicates the Tencent Cloud bucket information for file access.<br>Note: when `Type` is `COS`, this field will not be empty.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BucketInfo;

    /**
     * @param string $Type This field indicates the file access type. Valid values: **URL** (resource link), **COS** (Tencent Cloud COS).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Url This field indicates the link address for file access in standard URL format.<br>Note: when `Type` is `URL`, this field will not be empty.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param BucketInfo $BucketInfo This field indicates the Tencent Cloud bucket information for file access.<br>Note: when `Type` is `COS`, this field will not be empty.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("BucketInfo",$param) and $param["BucketInfo"] !== null) {
            $this->BucketInfo = new BucketInfo();
            $this->BucketInfo->deserialize($param["BucketInfo"]);
        }
    }
}
