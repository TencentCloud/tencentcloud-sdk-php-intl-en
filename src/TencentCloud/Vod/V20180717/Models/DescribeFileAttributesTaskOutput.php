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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The output of a task to get file attributes.
 *
 * @method string getMd5() Obtain The MD5 hash of the file.
 * @method void setMd5(string $Md5) Set The MD5 hash of the file.
 * @method string getSha1() Obtain The Sha1 value of the media file.
 * @method void setSha1(string $Sha1) Set The Sha1 value of the media file.
 */
class DescribeFileAttributesTaskOutput extends AbstractModel
{
    /**
     * @var string The MD5 hash of the file.
     */
    public $Md5;

    /**
     * @var string The Sha1 value of the media file.
     */
    public $Sha1;

    /**
     * @param string $Md5 The MD5 hash of the file.
     * @param string $Sha1 The Sha1 value of the media file.
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
        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("Sha1",$param) and $param["Sha1"] !== null) {
            $this->Sha1 = $param["Sha1"];
        }
    }
}
