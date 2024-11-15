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
 * cuDNN version information
 *
 * @method string getVersion() Obtain cuDNN version

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setVersion(string $Version) Set cuDNN version

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getName() Obtain cuDNN name

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setName(string $Name) Set cuDNN name

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getDocName() Obtain Doc name of cuDNN

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setDocName(string $DocName) Set Doc name of cuDNN

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getDevName() Obtain Dev name of cuDNN

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setDevName(string $DevName) Set Dev name of cuDNN

Note: This field may return "null", indicating that no valid value can be obtained.
 */
class CUDNN extends AbstractModel
{
    /**
     * @var string cuDNN version

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Version;

    /**
     * @var string cuDNN name

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Name;

    /**
     * @var string Doc name of cuDNN

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $DocName;

    /**
     * @var string Dev name of cuDNN

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $DevName;

    /**
     * @param string $Version cuDNN version

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $Name cuDNN name

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $DocName Doc name of cuDNN

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $DevName Dev name of cuDNN

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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DocName",$param) and $param["DocName"] !== null) {
            $this->DocName = $param["DocName"];
        }

        if (array_key_exists("DevName",$param) and $param["DevName"] !== null) {
            $this->DevName = $param["DevName"];
        }
    }
}
