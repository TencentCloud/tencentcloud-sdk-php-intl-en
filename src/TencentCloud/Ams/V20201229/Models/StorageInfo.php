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
 * Indicates the information of data storage
 *
 * @method string getType() Obtain This field indicates the file access type. Valid values: **URL** (resource link), **COS** (Tencent Cloud COS). It should correspond to the access type passed in and can be used for strict verification and quick identification of the access address. If you don't pass in this parameter, the default value will be `URL`, and the system will automatically determine the access address type.
 * @method void setType(string $Type) Set This field indicates the file access type. Valid values: **URL** (resource link), **COS** (Tencent Cloud COS). It should correspond to the access type passed in and can be used for strict verification and quick identification of the access address. If you don't pass in this parameter, the default value will be `URL`, and the system will automatically determine the access address type.
 * @method string getUrl() Obtain This field indicates the link address for file access in standard URL format.<br>Note: when `Type` is `URL`, this field will not be empty. You must pass in either this parameter or the `BucketInfo` parameter.
 * @method void setUrl(string $Url) Set This field indicates the link address for file access in standard URL format.<br>Note: when `Type` is `URL`, this field will not be empty. You must pass in either this parameter or the `BucketInfo` parameter.
 * @method BucketInfo getBucketInfo() Obtain This field indicates the Tencent Cloud bucket information for file access.<br>Note: when `Type` is `COS`, this field will not be empty. You must pass in either this parameter or the `Url` parameter.
 * @method void setBucketInfo(BucketInfo $BucketInfo) Set This field indicates the Tencent Cloud bucket information for file access.<br>Note: when `Type` is `COS`, this field will not be empty. You must pass in either this parameter or the `Url` parameter.
 */
class StorageInfo extends AbstractModel
{
    /**
     * @var string This field indicates the file access type. Valid values: **URL** (resource link), **COS** (Tencent Cloud COS). It should correspond to the access type passed in and can be used for strict verification and quick identification of the access address. If you don't pass in this parameter, the default value will be `URL`, and the system will automatically determine the access address type.
     */
    public $Type;

    /**
     * @var string This field indicates the link address for file access in standard URL format.<br>Note: when `Type` is `URL`, this field will not be empty. You must pass in either this parameter or the `BucketInfo` parameter.
     */
    public $Url;

    /**
     * @var BucketInfo This field indicates the Tencent Cloud bucket information for file access.<br>Note: when `Type` is `COS`, this field will not be empty. You must pass in either this parameter or the `Url` parameter.
     */
    public $BucketInfo;

    /**
     * @param string $Type This field indicates the file access type. Valid values: **URL** (resource link), **COS** (Tencent Cloud COS). It should correspond to the access type passed in and can be used for strict verification and quick identification of the access address. If you don't pass in this parameter, the default value will be `URL`, and the system will automatically determine the access address type.
     * @param string $Url This field indicates the link address for file access in standard URL format.<br>Note: when `Type` is `URL`, this field will not be empty. You must pass in either this parameter or the `BucketInfo` parameter.
     * @param BucketInfo $BucketInfo This field indicates the Tencent Cloud bucket information for file access.<br>Note: when `Type` is `COS`, this field will not be empty. You must pass in either this parameter or the `Url` parameter.
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
