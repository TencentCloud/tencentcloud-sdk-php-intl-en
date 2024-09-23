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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Real-name mutual trust application proof file.
 *
 * @method string getName() Obtain File name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set File name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUrl() Obtain File path.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set File path.

Note: This field may return null, indicating that no valid values can be obtained.
 */
class AuthRelationFile extends AbstractModel
{
    /**
     * @var string File name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string File path.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @param string $Name File name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Url File path.

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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
