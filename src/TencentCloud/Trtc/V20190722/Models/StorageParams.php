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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The storage parameters.
 *
 * @method CloudStorage getCloudStorage() Obtain The third-party cloud storage information (not supported currently).
 * @method void setCloudStorage(CloudStorage $CloudStorage) Set The third-party cloud storage information (not supported currently).
 * @method CloudVod getCloudVod() Obtain The VOD information.
 * @method void setCloudVod(CloudVod $CloudVod) Set The VOD information.
 */
class StorageParams extends AbstractModel
{
    /**
     * @var CloudStorage The third-party cloud storage information (not supported currently).
     */
    public $CloudStorage;

    /**
     * @var CloudVod The VOD information.
     */
    public $CloudVod;

    /**
     * @param CloudStorage $CloudStorage The third-party cloud storage information (not supported currently).
     * @param CloudVod $CloudVod The VOD information.
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
        if (array_key_exists("CloudStorage",$param) and $param["CloudStorage"] !== null) {
            $this->CloudStorage = new CloudStorage();
            $this->CloudStorage->deserialize($param["CloudStorage"]);
        }

        if (array_key_exists("CloudVod",$param) and $param["CloudVod"] !== null) {
            $this->CloudVod = new CloudVod();
            $this->CloudVod->deserialize($param["CloudVod"]);
        }
    }
}
