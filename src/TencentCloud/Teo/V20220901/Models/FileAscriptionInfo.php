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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Verification file, used to verify site ownership
 *
 * @method string getIdentifyPath() Obtain Directory of the verification file.
 * @method void setIdentifyPath(string $IdentifyPath) Set Directory of the verification file.
 * @method string getIdentifyContent() Obtain Content of the verification file.
 * @method void setIdentifyContent(string $IdentifyContent) Set Content of the verification file.
 */
class FileAscriptionInfo extends AbstractModel
{
    /**
     * @var string Directory of the verification file.
     */
    public $IdentifyPath;

    /**
     * @var string Content of the verification file.
     */
    public $IdentifyContent;

    /**
     * @param string $IdentifyPath Directory of the verification file.
     * @param string $IdentifyContent Content of the verification file.
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
        if (array_key_exists("IdentifyPath",$param) and $param["IdentifyPath"] !== null) {
            $this->IdentifyPath = $param["IdentifyPath"];
        }

        if (array_key_exists("IdentifyContent",$param) and $param["IdentifyContent"] !== null) {
            $this->IdentifyContent = $param["IdentifyContent"];
        }
    }
}
