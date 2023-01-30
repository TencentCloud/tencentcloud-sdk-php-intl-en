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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Input parameters for adding and unignoring vulnerabilities in the scan
 *
 * @method string getPocID() Obtain POC ID
 * @method void setPocID(string $PocID) Set POC ID
 * @method array getImageIDs() Obtain IDs of images to be ignored. If it is not specified, it indicates to ignore all.
 * @method void setImageIDs(array $ImageIDs) Set IDs of images to be ignored. If it is not specified, it indicates to ignore all.
 * @method string getImageType() Obtain When there is an image
Image type. Valid values: `LOCAL` (local image); `REGISTRY` (repository image).
 * @method void setImageType(string $ImageType) Set When there is an image
Image type. Valid values: `LOCAL` (local image); `REGISTRY` (repository image).
 */
class ModifyIgnoreVul extends AbstractModel
{
    /**
     * @var string POC ID
     */
    public $PocID;

    /**
     * @var array IDs of images to be ignored. If it is not specified, it indicates to ignore all.
     */
    public $ImageIDs;

    /**
     * @var string When there is an image
Image type. Valid values: `LOCAL` (local image); `REGISTRY` (repository image).
     */
    public $ImageType;

    /**
     * @param string $PocID POC ID
     * @param array $ImageIDs IDs of images to be ignored. If it is not specified, it indicates to ignore all.
     * @param string $ImageType When there is an image
Image type. Valid values: `LOCAL` (local image); `REGISTRY` (repository image).
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
        if (array_key_exists("PocID",$param) and $param["PocID"] !== null) {
            $this->PocID = $param["PocID"];
        }

        if (array_key_exists("ImageIDs",$param) and $param["ImageIDs"] !== null) {
            $this->ImageIDs = $param["ImageIDs"];
        }

        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }
    }
}
