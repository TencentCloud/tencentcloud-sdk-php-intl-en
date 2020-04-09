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
 * Information parameter of file output by video processing
 *
 * @method string getRegion() Obtain Region of the bucket where an output file is stored, such as ap-guangzhou.
 * @method void setRegion(string $Region) Set Region of the bucket where an output file is stored, such as ap-guangzhou.
 * @method string getBucket() Obtain Bucket of output file.
 * @method void setBucket(string $Bucket) Set Bucket of output file.
 * @method string getDir() Obtain Path to output file, which must end in "/".
 * @method void setDir(string $Dir) Set Path to output file, which must end in "/".
 */
class MediaOutputInfo extends AbstractModel
{
    /**
     * @var string Region of the bucket where an output file is stored, such as ap-guangzhou.
     */
    public $Region;

    /**
     * @var string Bucket of output file.
     */
    public $Bucket;

    /**
     * @var string Path to output file, which must end in "/".
     */
    public $Dir;

    /**
     * @param string $Region Region of the bucket where an output file is stored, such as ap-guangzhou.
     * @param string $Bucket Bucket of output file.
     * @param string $Dir Path to output file, which must end in "/".
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Dir",$param) and $param["Dir"] !== null) {
            $this->Dir = $param["Dir"];
        }
    }
}
