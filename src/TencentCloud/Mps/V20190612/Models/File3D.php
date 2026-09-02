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
 * Query returns each output file
 *
 * @method string getType() Obtain <p>File type: OBJ / GLB / FBX / STL / USDZ</p><p>Enumeration values:</p><ul><li>OBJ: common 3D exchange format</li><li>GLB: glTF 2.0 binary ("the JPEG of the 3D world")</li><li>FBX: Autodesk film/gaming industry standard</li><li>STL: 3D print/CAD triangle mesh</li><li>USDZ: Pixar/Apple packaged scenario description</li></ul>
 * @method void setType(string $Type) Set <p>File type: OBJ / GLB / FBX / STL / USDZ</p><p>Enumeration values:</p><ul><li>OBJ: common 3D exchange format</li><li>GLB: glTF 2.0 binary ("the JPEG of the 3D world")</li><li>FBX: Autodesk film/gaming industry standard</li><li>STL: 3D print/CAD triangle mesh</li><li>USDZ: Pixar/Apple packaged scenario description</li></ul>
 * @method string getUrl() Obtain <p>File download URL (temporary signature, general TTL 24h)</p>
 * @method void setUrl(string $Url) Set <p>File download URL (temporary signature, general TTL 24h)</p>
 * @method string getPreviewImageUrl() Obtain <p>Preview image URL (if it exists)</p>
 * @method void setPreviewImageUrl(string $PreviewImageUrl) Set <p>Preview image URL (if it exists)</p>
 */
class File3D extends AbstractModel
{
    /**
     * @var string <p>File type: OBJ / GLB / FBX / STL / USDZ</p><p>Enumeration values:</p><ul><li>OBJ: common 3D exchange format</li><li>GLB: glTF 2.0 binary ("the JPEG of the 3D world")</li><li>FBX: Autodesk film/gaming industry standard</li><li>STL: 3D print/CAD triangle mesh</li><li>USDZ: Pixar/Apple packaged scenario description</li></ul>
     */
    public $Type;

    /**
     * @var string <p>File download URL (temporary signature, general TTL 24h)</p>
     */
    public $Url;

    /**
     * @var string <p>Preview image URL (if it exists)</p>
     */
    public $PreviewImageUrl;

    /**
     * @param string $Type <p>File type: OBJ / GLB / FBX / STL / USDZ</p><p>Enumeration values:</p><ul><li>OBJ: common 3D exchange format</li><li>GLB: glTF 2.0 binary ("the JPEG of the 3D world")</li><li>FBX: Autodesk film/gaming industry standard</li><li>STL: 3D print/CAD triangle mesh</li><li>USDZ: Pixar/Apple packaged scenario description</li></ul>
     * @param string $Url <p>File download URL (temporary signature, general TTL 24h)</p>
     * @param string $PreviewImageUrl <p>Preview image URL (if it exists)</p>
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

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("PreviewImageUrl",$param) and $param["PreviewImageUrl"] !== null) {
            $this->PreviewImageUrl = $param["PreviewImageUrl"];
        }
    }
}
