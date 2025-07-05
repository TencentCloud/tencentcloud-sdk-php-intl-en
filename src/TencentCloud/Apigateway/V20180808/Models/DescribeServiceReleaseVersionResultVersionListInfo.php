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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Service version details
 *
 * @method string getVersionName() Obtain Version ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersionName(string $VersionName) Set Version ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVersionDesc() Obtain Version description. 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVersionDesc(string $VersionDesc) Set Version description. 
Note: this field may return null, indicating that no valid values can be obtained.
 */
class DescribeServiceReleaseVersionResultVersionListInfo extends AbstractModel
{
    /**
     * @var string Version ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VersionName;

    /**
     * @var string Version description. 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VersionDesc;

    /**
     * @param string $VersionName Version ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VersionDesc Version description. 
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
        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("VersionDesc",$param) and $param["VersionDesc"] !== null) {
            $this->VersionDesc = $param["VersionDesc"];
        }
    }
}
