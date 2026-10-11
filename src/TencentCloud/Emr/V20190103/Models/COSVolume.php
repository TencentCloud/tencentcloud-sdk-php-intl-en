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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * COS storage volume.
 *
 * @method string getVolumeName() Obtain Storage volume name.
 * @method void setVolumeName(string $VolumeName) Set Storage volume name.
 * @method string getSecret() Obtain Secret name.
 * @method void setSecret(string $Secret) Set Secret name.
 * @method string getRegion() Obtain Region where the COS bucket is located.
 * @method void setRegion(string $Region) Set Region where the COS bucket is located.
 * @method string getBucket() Obtain Bucket name.
 * @method void setBucket(string $Bucket) Set Bucket name.
 * @method string getSubPath() Obtain COS subdirectory.
 * @method void setSubPath(string $SubPath) Set COS subdirectory.
 */
class COSVolume extends AbstractModel
{
    /**
     * @var string Storage volume name.
     */
    public $VolumeName;

    /**
     * @var string Secret name.
     */
    public $Secret;

    /**
     * @var string Region where the COS bucket is located.
     */
    public $Region;

    /**
     * @var string Bucket name.
     */
    public $Bucket;

    /**
     * @var string COS subdirectory.
     */
    public $SubPath;

    /**
     * @param string $VolumeName Storage volume name.
     * @param string $Secret Secret name.
     * @param string $Region Region where the COS bucket is located.
     * @param string $Bucket Bucket name.
     * @param string $SubPath COS subdirectory.
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
        if (array_key_exists("VolumeName",$param) and $param["VolumeName"] !== null) {
            $this->VolumeName = $param["VolumeName"];
        }

        if (array_key_exists("Secret",$param) and $param["Secret"] !== null) {
            $this->Secret = $param["Secret"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("SubPath",$param) and $param["SubPath"] !== null) {
            $this->SubPath = $param["SubPath"];
        }
    }
}
