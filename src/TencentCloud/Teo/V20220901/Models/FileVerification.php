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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information required for verifying via a file. It's applicable to sites connected via CNAMEs.
 *
 * @method string getPath() Obtain EdgeOne obtains the file verification information in the format of "Scheme + Host + URL Path", (e.g. https://www.example.com/.well-known/teo-verification/z12h416twn.txt). This field is the URL path section of the URL you need to create.
 * @method void setPath(string $Path) Set EdgeOne obtains the file verification information in the format of "Scheme + Host + URL Path", (e.g. https://www.example.com/.well-known/teo-verification/z12h416twn.txt). This field is the URL path section of the URL you need to create.
 * @method string getContent() Obtain Content of the verification file. The contents of this field need to be filled into the text file returned by `Path`.
 * @method void setContent(string $Content) Set Content of the verification file. The contents of this field need to be filled into the text file returned by `Path`.
 */
class FileVerification extends AbstractModel
{
    /**
     * @var string EdgeOne obtains the file verification information in the format of "Scheme + Host + URL Path", (e.g. https://www.example.com/.well-known/teo-verification/z12h416twn.txt). This field is the URL path section of the URL you need to create.
     */
    public $Path;

    /**
     * @var string Content of the verification file. The contents of this field need to be filled into the text file returned by `Path`.
     */
    public $Content;

    /**
     * @param string $Path EdgeOne obtains the file verification information in the format of "Scheme + Host + URL Path", (e.g. https://www.example.com/.well-known/teo-verification/z12h416twn.txt). This field is the URL path section of the URL you need to create.
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
