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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Optional runtime
 *
 * @method string getRuntimeType() Obtain Runtime type
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setRuntimeType(string $RuntimeType) Set Runtime type
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method array getRuntimeVersions() Obtain Runtime version list
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setRuntimeVersions(array $RuntimeVersions) Set Runtime version list
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getDefaultVersion() Obtain Default runtime version for this type
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setDefaultVersion(string $DefaultVersion) Set Default runtime version for this type
Note: This field may return "null", indicating that no valid value can be obtained.
 */
class OptionalRuntimes extends AbstractModel
{
    /**
     * @var string Runtime type
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $RuntimeType;

    /**
     * @var array Runtime version list
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $RuntimeVersions;

    /**
     * @var string Default runtime version for this type
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $DefaultVersion;

    /**
     * @param string $RuntimeType Runtime type
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param array $RuntimeVersions Runtime version list
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $DefaultVersion Default runtime version for this type
Note: This field may return "null", indicating that no valid value can be obtained.
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
        if (array_key_exists("RuntimeType",$param) and $param["RuntimeType"] !== null) {
            $this->RuntimeType = $param["RuntimeType"];
        }

        if (array_key_exists("RuntimeVersions",$param) and $param["RuntimeVersions"] !== null) {
            $this->RuntimeVersions = $param["RuntimeVersions"];
        }

        if (array_key_exists("DefaultVersion",$param) and $param["DefaultVersion"] !== null) {
            $this->DefaultVersion = $param["DefaultVersion"];
        }
    }
}
