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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Supported OS types.
 *
 * @method string getOsName() Obtain OS type
 * @method void setOsName(string $OsName) Set OS type
 * @method array getOsVersions() Obtain Supported OS versions
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOsVersions(array $OsVersions) Set Supported OS versions
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getArchitecture() Obtain Supported OS architecture
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setArchitecture(array $Architecture) Set Supported OS architecture
Note: this field may return null, indicating that no valid values can be obtained.
 */
class OsVersion extends AbstractModel
{
    /**
     * @var string OS type
     */
    public $OsName;

    /**
     * @var array Supported OS versions
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OsVersions;

    /**
     * @var array Supported OS architecture
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Architecture;

    /**
     * @param string $OsName OS type
     * @param array $OsVersions Supported OS versions
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Architecture Supported OS architecture
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
        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("OsVersions",$param) and $param["OsVersions"] !== null) {
            $this->OsVersions = $param["OsVersions"];
        }

        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }
    }
}
