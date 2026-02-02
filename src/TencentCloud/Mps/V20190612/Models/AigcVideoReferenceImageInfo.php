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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Reference image information for AIGC video generation.
 *
 * @method string getImageUrl() Obtain Image URL for video generation. The URL must be accessible from the public network and must be accessible to crawlers.
 * @method void setImageUrl(string $ImageUrl) Set Image URL for video generation. The URL must be accessible from the public network and must be accessible to crawlers.
 * @method string getReferenceType() Obtain Reference type.
Note:1. If the GV model is used, this serves as the reference method. Valid values are asset and style.
 * @method void setReferenceType(string $ReferenceType) Set Reference type.
Note:1. If the GV model is used, this serves as the reference method. Valid values are asset and style.
 */
class AigcVideoReferenceImageInfo extends AbstractModel
{
    /**
     * @var string Image URL for video generation. The URL must be accessible from the public network and must be accessible to crawlers.
     */
    public $ImageUrl;

    /**
     * @var string Reference type.
Note:1. If the GV model is used, this serves as the reference method. Valid values are asset and style.
     */
    public $ReferenceType;

    /**
     * @param string $ImageUrl Image URL for video generation. The URL must be accessible from the public network and must be accessible to crawlers.
     * @param string $ReferenceType Reference type.
Note:1. If the GV model is used, this serves as the reference method. Valid values are asset and style.
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
        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ReferenceType",$param) and $param["ReferenceType"] !== null) {
            $this->ReferenceType = $param["ReferenceType"];
        }
    }
}
