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
 * File attribute retrieval task output
 *
 * @method string getMd5() Obtain Md5 value of the media file.
 * @method void setMd5(string $Md5) Set Md5 value of the media file.
 * @method string getSha1() Obtain Sha1 value of the media file.
 * @method void setSha1(string $Sha1) Set Sha1 value of the media file.
 */
class DescribeFileAttributesTaskOutput extends AbstractModel
{
    /**
     * @var string Md5 value of the media file.
     */
    public $Md5;

    /**
     * @var string Sha1 value of the media file.
     */
    public $Sha1;

    /**
     * @param string $Md5 Md5 value of the media file.
     * @param string $Sha1 Sha1 value of the media file.
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
