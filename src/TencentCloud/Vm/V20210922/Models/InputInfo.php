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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Input information details
 *
 * @method string getType() Obtain Type. Values: `URL`, `COS`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Type. Values: `URL`, `COS`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUrl() Obtain URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBucketInfo() Obtain Bucket information. When `Type = COS`, this field is required.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBucketInfo(string $BucketInfo) Set Bucket information. When `Type = COS`, this field is required.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InputInfo extends AbstractModel
{
    /**
     * @var string Type. Values: `URL`, `COS`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string URL
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @var string Bucket information. When `Type = COS`, this field is required.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BucketInfo;

    /**
     * @param string $Type Type. Values: `URL`, `COS`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Url URL
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BucketInfo Bucket information. When `Type = COS`, this field is required.
Note: This field may return null, indicating that no valid values can be obtained.
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
            $this->BucketInfo = $param["BucketInfo"];
        }
    }
}
