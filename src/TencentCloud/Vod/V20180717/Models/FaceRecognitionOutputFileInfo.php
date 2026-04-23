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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Face recognition output file information
 *
 * @method string getFileType() Obtain <p>Face recognition output file type</p><p>Enumeration value:</p><ul><li>Output: Result output of task generation. The file corresponds to the result in the face recognition task return and is generated in JSON format.</li></ul>
 * @method void setFileType(string $FileType) Set <p>Face recognition output file type</p><p>Enumeration value:</p><ul><li>Output: Result output of task generation. The file corresponds to the result in the face recognition task return and is generated in JSON format.</li></ul>
 * @method string getUrl() Obtain <p>File URL of face recognition output</p>
 * @method void setUrl(string $Url) Set <p>File URL of face recognition output</p>
 */
class FaceRecognitionOutputFileInfo extends AbstractModel
{
    /**
     * @var string <p>Face recognition output file type</p><p>Enumeration value:</p><ul><li>Output: Result output of task generation. The file corresponds to the result in the face recognition task return and is generated in JSON format.</li></ul>
     */
    public $FileType;

    /**
     * @var string <p>File URL of face recognition output</p>
     */
    public $Url;

    /**
     * @param string $FileType <p>Face recognition output file type</p><p>Enumeration value:</p><ul><li>Output: Result output of task generation. The file corresponds to the result in the face recognition task return and is generated in JSON format.</li></ul>
     * @param string $Url <p>File URL of face recognition output</p>
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
        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
