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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Returned result of service publishing
 *
 * @method string getReleaseDesc() Obtain Release remarks.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setReleaseDesc(string $ReleaseDesc) Set Release remarks.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getReleaseVersion() Obtain Published version ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setReleaseVersion(string $ReleaseVersion) Set Published version ID.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ReleaseService extends AbstractModel
{
    /**
     * @var string Release remarks.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ReleaseDesc;

    /**
     * @var string Published version ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ReleaseVersion;

    /**
     * @param string $ReleaseDesc Release remarks.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ReleaseVersion Published version ID.
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
        if (array_key_exists("ReleaseDesc",$param) and $param["ReleaseDesc"] !== null) {
            $this->ReleaseDesc = $param["ReleaseDesc"];
        }

        if (array_key_exists("ReleaseVersion",$param) and $param["ReleaseVersion"] !== null) {
            $this->ReleaseVersion = $param["ReleaseVersion"];
        }
    }
}
