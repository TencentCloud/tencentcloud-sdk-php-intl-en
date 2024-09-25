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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TLS information
 *
 * @method integer getVersionId() Obtain ID of TLSVERSION

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersionId(integer $VersionId) Set ID of TLSVERSION

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVersionName() Obtain TLSVERSION's Name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersionName(string $VersionName) Set TLSVERSION's Name

Note: This field may return null, indicating that no valid values can be obtained.
 */
class TLSVersion extends AbstractModel
{
    /**
     * @var integer ID of TLSVERSION

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VersionId;

    /**
     * @var string TLSVERSION's Name

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VersionName;

    /**
     * @param integer $VersionId ID of TLSVERSION

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VersionName TLSVERSION's Name

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
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }
    }
}
