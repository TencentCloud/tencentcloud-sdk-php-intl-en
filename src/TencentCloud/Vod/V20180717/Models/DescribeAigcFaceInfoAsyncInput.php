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
 * Asynchronously fetch AIGC face information input.
 *
 * @method array getFileInfos() Obtain <p>Input video information that needs to get face information.</p>
 * @method void setFileInfos(array $FileInfos) Set <p>Input video information that needs to get face information.</p>
 */
class DescribeAigcFaceInfoAsyncInput extends AbstractModel
{
    /**
     * @var array <p>Input video information that needs to get face information.</p>
     */
    public $FileInfos;

    /**
     * @param array $FileInfos <p>Input video information that needs to get face information.</p>
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
        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new AigcFaceInputFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }
    }
}
