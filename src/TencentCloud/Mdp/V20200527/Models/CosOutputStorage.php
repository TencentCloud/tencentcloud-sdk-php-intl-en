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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VOD remux task cos output storage.
 *
 * @method string getBucket() Obtain cos bucket name.
 * @method void setBucket(string $Bucket) Set cos bucket name.
 * @method string getRegion() Obtain region name of your cos bucket.
 * @method void setRegion(string $Region) Set region name of your cos bucket.
 * @method string getOutputDir() Obtain cos directory of vod remux task result.
 * @method void setOutputDir(string $OutputDir) Set cos directory of vod remux task result.
 */
class CosOutputStorage extends AbstractModel
{
    /**
     * @var string cos bucket name.
     */
    public $Bucket;

    /**
     * @var string region name of your cos bucket.
     */
    public $Region;

    /**
     * @var string cos directory of vod remux task result.
     */
    public $OutputDir;

    /**
     * @param string $Bucket cos bucket name.
     * @param string $Region region name of your cos bucket.
     * @param string $OutputDir cos directory of vod remux task result.
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
        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("OutputDir",$param) and $param["OutputDir"] !== null) {
            $this->OutputDir = $param["OutputDir"];
        }
    }
}
