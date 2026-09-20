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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI sample management and human face data manipulation.
 *
 * @method string getType() Obtain <p>Operation type. Available values: add, delete, reset. The reset operation clears the existing face data of the person and adds the face data specified by FaceContents.</p>
 * @method void setType(string $Type) Set <p>Operation type. Available values: add, delete, reset. The reset operation clears the existing face data of the person and adds the face data specified by FaceContents.</p>
 * @method array getFaceIds() Obtain <p>Face ID collection. This field is required when Type is delete.</p>
 * @method void setFaceIds(array $FaceIds) Set <p>Face ID collection. This field is required when Type is delete.</p>
 * @method array getFaceContents() Obtain <p>Set of strings after the face image is encoded in <a href="https://tools.ietf.org/html/rfc4648">Base64</a>. Only jpeg and png image formats are supported.</p><li>This field is required when Type is add or reset;</li><li>Array length limit: 5 images.</li>Note: The image must be a clear frontal face photo of a single person, with a resolution not less than 200*200.
 * @method void setFaceContents(array $FaceContents) Set <p>Set of strings after the face image is encoded in <a href="https://tools.ietf.org/html/rfc4648">Base64</a>. Only jpeg and png image formats are supported.</p><li>This field is required when Type is add or reset;</li><li>Array length limit: 5 images.</li>Note: The image must be a clear frontal face photo of a single person, with a resolution not less than 200*200.
 */
class AiSampleFaceOperation extends AbstractModel
{
    /**
     * @var string <p>Operation type. Available values: add, delete, reset. The reset operation clears the existing face data of the person and adds the face data specified by FaceContents.</p>
     */
    public $Type;

    /**
     * @var array <p>Face ID collection. This field is required when Type is delete.</p>
     */
    public $FaceIds;

    /**
     * @var array <p>Set of strings after the face image is encoded in <a href="https://tools.ietf.org/html/rfc4648">Base64</a>. Only jpeg and png image formats are supported.</p><li>This field is required when Type is add or reset;</li><li>Array length limit: 5 images.</li>Note: The image must be a clear frontal face photo of a single person, with a resolution not less than 200*200.
     */
    public $FaceContents;

    /**
     * @param string $Type <p>Operation type. Available values: add, delete, reset. The reset operation clears the existing face data of the person and adds the face data specified by FaceContents.</p>
     * @param array $FaceIds <p>Face ID collection. This field is required when Type is delete.</p>
     * @param array $FaceContents <p>Set of strings after the face image is encoded in <a href="https://tools.ietf.org/html/rfc4648">Base64</a>. Only jpeg and png image formats are supported.</p><li>This field is required when Type is add or reset;</li><li>Array length limit: 5 images.</li>Note: The image must be a clear frontal face photo of a single person, with a resolution not less than 200*200.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FaceIds",$param) and $param["FaceIds"] !== null) {
            $this->FaceIds = $param["FaceIds"];
        }

        if (array_key_exists("FaceContents",$param) and $param["FaceContents"] !== null) {
            $this->FaceContents = $param["FaceContents"];
        }
    }
}
