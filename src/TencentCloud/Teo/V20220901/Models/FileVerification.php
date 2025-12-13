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
 * Information required for HTTP access verification file when applying for a free certificate in CNAME mode integration to verify ownership of a site or domain name.
 *
 * @method string getPath() Obtain EdgeOne backend server will get file verification information via http://{Host}{URL Path} (for example http://www.example.com/.well-known/teo-verification/z12h416twn.txt). among them, this field specifies the URL Path part you need to create, and Host indicates the current accelerated domain.
 * @method void setPath(string $Path) Set EdgeOne backend server will get file verification information via http://{Host}{URL Path} (for example http://www.example.com/.well-known/teo-verification/z12h416twn.txt). among them, this field specifies the URL Path part you need to create, and Host indicates the current accelerated domain.
 * @method string getContent() Obtain Content of the verification file. The contents of this field need to be filled into the text file returned by `Path`.
 * @method void setContent(string $Content) Set Content of the verification file. The contents of this field need to be filled into the text file returned by `Path`.
 */
class FileVerification extends AbstractModel
{
    /**
     * @var string EdgeOne backend server will get file verification information via http://{Host}{URL Path} (for example http://www.example.com/.well-known/teo-verification/z12h416twn.txt). among them, this field specifies the URL Path part you need to create, and Host indicates the current accelerated domain.
     */
    public $Path;

    /**
     * @var string Content of the verification file. The contents of this field need to be filled into the text file returned by `Path`.
     */
    public $Content;

    /**
     * @param string $Path EdgeOne backend server will get file verification information via http://{Host}{URL Path} (for example http://www.example.com/.well-known/teo-verification/z12h416twn.txt). among them, this field specifies the URL Path part you need to create, and Host indicates the current accelerated domain.
     * @param string $Content Content of the verification file. The contents of this field need to be filled into the text file returned by `Path`.
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
