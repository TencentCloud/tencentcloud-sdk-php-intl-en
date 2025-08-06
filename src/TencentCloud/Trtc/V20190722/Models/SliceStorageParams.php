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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Storage parameters for the slicing files.
 *
 * @method CloudSliceStorage getCloudSliceStorage() Obtain Information about Tencent COS and third-party cloud storage accounts.
 * @method void setCloudSliceStorage(CloudSliceStorage $CloudSliceStorage) Set Information about Tencent COS and third-party cloud storage accounts.
 */
class SliceStorageParams extends AbstractModel
{
    /**
     * @var CloudSliceStorage Information about Tencent COS and third-party cloud storage accounts.
     */
    public $CloudSliceStorage;

    /**
     * @param CloudSliceStorage $CloudSliceStorage Information about Tencent COS and third-party cloud storage accounts.
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
        if (array_key_exists("CloudSliceStorage",$param) and $param["CloudSliceStorage"] !== null) {
            $this->CloudSliceStorage = new CloudSliceStorage();
            $this->CloudSliceStorage->deserialize($param["CloudSliceStorage"]);
        }
    }
}
