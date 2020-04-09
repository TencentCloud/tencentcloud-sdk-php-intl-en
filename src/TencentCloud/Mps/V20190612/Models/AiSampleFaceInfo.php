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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI-based sample management - face information.
 *
 * @method string getFaceId() Obtain Face image ID.
 * @method void setFaceId(string $FaceId) Set Face image ID.
 * @method string getUrl() Obtain Face image address.
 * @method void setUrl(string $Url) Set Face image address.
 */
class AiSampleFaceInfo extends AbstractModel
{
    /**
     * @var string Face image ID.
     */
    public $FaceId;

    /**
     * @var string Face image address.
     */
    public $Url;

    /**
     * @param string $FaceId Face image ID.
     * @param string $Url Face image address.
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
        if (array_key_exists("FaceId",$param) and $param["FaceId"] !== null) {
            $this->FaceId = $param["FaceId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
