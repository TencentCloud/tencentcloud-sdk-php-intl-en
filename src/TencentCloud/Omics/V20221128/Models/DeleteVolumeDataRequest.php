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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteVolumeData request structure.
 *
 * @method string getVolumeId() Obtain Volume ID
 * @method void setVolumeId(string $VolumeId) Set Volume ID
 * @method string getPath() Obtain Path to be deleted
 * @method void setPath(string $Path) Set Path to be deleted
 */
class DeleteVolumeDataRequest extends AbstractModel
{
    /**
     * @var string Volume ID
     */
    public $VolumeId;

    /**
     * @var string Path to be deleted
     */
    public $Path;

    /**
     * @param string $VolumeId Volume ID
     * @param string $Path Path to be deleted
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
        if (array_key_exists("VolumeId",$param) and $param["VolumeId"] !== null) {
            $this->VolumeId = $param["VolumeId"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
