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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportImage request structure.
 *
 * @method string getImageId() Obtain Image ID.
 * @method void setImageId(string $ImageId) Set Image ID.
 * @method string getImageDescription() Obtain Image description.
 * @method void setImageDescription(string $ImageDescription) Set Image description.
 * @method string getSourceRegion() Obtain Source region
 * @method void setSourceRegion(string $SourceRegion) Set Source region
 */
class ImportImageRequest extends AbstractModel
{
    /**
     * @var string Image ID.
     */
    public $ImageId;

    /**
     * @var string Image description.
     */
    public $ImageDescription;

    /**
     * @var string Source region
     */
    public $SourceRegion;

    /**
     * @param string $ImageId Image ID.
     * @param string $ImageDescription Image description.
     * @param string $SourceRegion Source region
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageDescription",$param) and $param["ImageDescription"] !== null) {
            $this->ImageDescription = $param["ImageDescription"];
        }

        if (array_key_exists("SourceRegion",$param) and $param["SourceRegion"] !== null) {
            $this->SourceRegion = $param["SourceRegion"];
        }
    }
}
