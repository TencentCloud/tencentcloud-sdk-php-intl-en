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
 * Information required for HTTP access verification file when verifying ownership or applying for a free certificate for a domain name in CNAME mode site integration.
 *
 * @method string getPath() Obtain The EdgeOne backend server will get the file verification information via http://{Host}{URL Path} (for example, http://www.example.com/.well-known/teo-verification/z12h416twn.txt). This field is the URL Path part you need to create, and Host is the current accelerated domain.
 * @method void setPath(string $Path) Set The EdgeOne backend server will get the file verification information via http://{Host}{URL Path} (for example, http://www.example.com/.well-known/teo-verification/z12h416twn.txt). This field is the URL Path part you need to create, and Host is the current accelerated domain.
 * @method string getContent() Obtain Verify the content of the file. You need to fill in the content of this field into the txt file returned by the Path field.
 * @method void setContent(string $Content) Set Verify the content of the file. You need to fill in the content of this field into the txt file returned by the Path field.
 */
class FileVerification extends AbstractModel
{
    /**
     * @var string The EdgeOne backend server will get the file verification information via http://{Host}{URL Path} (for example, http://www.example.com/.well-known/teo-verification/z12h416twn.txt). This field is the URL Path part you need to create, and Host is the current accelerated domain.
     */
    public $Path;

    /**
     * @var string Verify the content of the file. You need to fill in the content of this field into the txt file returned by the Path field.
     */
    public $Content;

    /**
     * @param string $Path The EdgeOne backend server will get the file verification information via http://{Host}{URL Path} (for example, http://www.example.com/.well-known/teo-verification/z12h416twn.txt). This field is the URL Path part you need to create, and Host is the current accelerated domain.
     * @param string $Content Verify the content of the file. You need to fill in the content of this field into the txt file returned by the Path field.
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
