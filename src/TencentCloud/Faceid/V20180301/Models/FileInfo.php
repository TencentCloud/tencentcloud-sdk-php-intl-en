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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The description of a file, including a download URL and the MD5 checksum and size of the file.
 *
 * @method string getUrl() Obtain The URL for downloading the file
 * @method void setUrl(string $Url) Set The URL for downloading the file
 * @method string getMD5() Obtain The 32-bit MD5 checksum of the file
 * @method void setMD5(string $MD5) Set The 32-bit MD5 checksum of the file
 * @method integer getSize() Obtain The file size
 * @method void setSize(integer $Size) Set The file size
 */
class FileInfo extends AbstractModel
{
    /**
     * @var string The URL for downloading the file
     */
    public $Url;

    /**
     * @var string The 32-bit MD5 checksum of the file
     */
    public $MD5;

    /**
     * @var integer The file size
     */
    public $Size;

    /**
     * @param string $Url The URL for downloading the file
     * @param string $MD5 The 32-bit MD5 checksum of the file
     * @param integer $Size The file size
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("MD5",$param) and $param["MD5"] !== null) {
            $this->MD5 = $param["MD5"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }
    }
}
