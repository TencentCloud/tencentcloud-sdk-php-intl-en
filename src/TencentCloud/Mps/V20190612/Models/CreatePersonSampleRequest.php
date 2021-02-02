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
 * CreatePersonSample request structure.
 *
 * @method string getName() Obtain Name of an image. Length limit: 20 characters
 * @method void setName(string $Name) Set Name of an image. Length limit: 20 characters
 * @method array getUsages() Obtain Image usage. Valid values:
1. Recognition: used for content recognition; equivalent to `Recognition.Face`
2. Review: used for inappropriate information recognition; equivalent to `Review.Face`
3. All: equivalent to 1+2
 * @method void setUsages(array $Usages) Set Image usage. Valid values:
1. Recognition: used for content recognition; equivalent to `Recognition.Face`
2. Review: used for inappropriate information recognition; equivalent to `Review.Face`
3. All: equivalent to 1+2
 * @method string getDescription() Obtain Image description. Length limit: 1,024 characters
 * @method void setDescription(string $Description) Set Image description. Length limit: 1,024 characters
 * @method array getFaceContents() Obtain [Base64](https://tools.ietf.org/html/rfc4648) string converted from an image. Only JPEG and PNG images are supported. Array length limit: 5 images
Note: the image must be a relatively clear facial feature photo of one person with a size of at least 200 x 200 pixels.
 * @method void setFaceContents(array $FaceContents) Set [Base64](https://tools.ietf.org/html/rfc4648) string converted from an image. Only JPEG and PNG images are supported. Array length limit: 5 images
Note: the image must be a relatively clear facial feature photo of one person with a size of at least 200 x 200 pixels.
 * @method array getTags() Obtain Image tag
<li>Array length limit: 20 tags</li>
<li>Tag length limit: 128 characters</li>
 * @method void setTags(array $Tags) Set Image tag
<li>Array length limit: 20 tags</li>
<li>Tag length limit: 128 characters</li>
 */
class CreatePersonSampleRequest extends AbstractModel
{
    /**
     * @var string Name of an image. Length limit: 20 characters
     */
    public $Name;

    /**
     * @var array Image usage. Valid values:
1. Recognition: used for content recognition; equivalent to `Recognition.Face`
2. Review: used for inappropriate information recognition; equivalent to `Review.Face`
3. All: equivalent to 1+2
     */
    public $Usages;

    /**
     * @var string Image description. Length limit: 1,024 characters
     */
    public $Description;

    /**
     * @var array [Base64](https://tools.ietf.org/html/rfc4648) string converted from an image. Only JPEG and PNG images are supported. Array length limit: 5 images
Note: the image must be a relatively clear facial feature photo of one person with a size of at least 200 x 200 pixels.
     */
    public $FaceContents;

    /**
     * @var array Image tag
<li>Array length limit: 20 tags</li>
<li>Tag length limit: 128 characters</li>
     */
    public $Tags;

    /**
     * @param string $Name Name of an image. Length limit: 20 characters
     * @param array $Usages Image usage. Valid values:
1. Recognition: used for content recognition; equivalent to `Recognition.Face`
2. Review: used for inappropriate information recognition; equivalent to `Review.Face`
3. All: equivalent to 1+2
     * @param string $Description Image description. Length limit: 1,024 characters
     * @param array $FaceContents [Base64](https://tools.ietf.org/html/rfc4648) string converted from an image. Only JPEG and PNG images are supported. Array length limit: 5 images
Note: the image must be a relatively clear facial feature photo of one person with a size of at least 200 x 200 pixels.
     * @param array $Tags Image tag
<li>Array length limit: 20 tags</li>
<li>Tag length limit: 128 characters</li>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Usages",$param) and $param["Usages"] !== null) {
            $this->Usages = $param["Usages"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("FaceContents",$param) and $param["FaceContents"] !== null) {
            $this->FaceContents = $param["FaceContents"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
