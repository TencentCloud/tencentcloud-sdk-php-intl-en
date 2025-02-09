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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application configuration info
 *
 * @method string getFile() Obtain Configuration information in Base64 format
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFile(string $File) Set Configuration information in Base64 format
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DownloadApplicationConfigResp extends AbstractModel
{
    /**
     * @var string Configuration information in Base64 format
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $File;

    /**
     * @param string $File Configuration information in Base64 format
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
        if (array_key_exists("File",$param) and $param["File"] !== null) {
            $this->File = $param["File"];
        }
    }
}
