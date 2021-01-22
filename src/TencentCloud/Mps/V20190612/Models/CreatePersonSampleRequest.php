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
 * @method string getName() Obtain Name of a material. Length limit: 20 characters.
 * @method void setName(string $Name) Set Name of a material. Length limit: 20 characters.
 * @method array getUsages() Obtain Material use case. Valid values:
1. Recognition: used for content recognition, equivalent to `Recognition.Face`
2. Review: used for detection of inappropriate content, equivalent to `Review.Face`
3. All: all of the above, equivalent to 1 and 2 combined
 * @method void setUsages(array $Usages) Set Material use case. Valid values:
1. Recognition: used for content recognition, equivalent to `Recognition.Face`
2. Review: used for detection of inappropriate content, equivalent to `Review.Face`
3. All: all of the above, equivalent to 1 and 2 combined
 * @method string getDescription() Obtain Material description. Length limit: 1,024 characters.
 * @method void setDescription(string $Description) Set Material description. Length limit: 1,024 characters.
 * @method array getFaceContents() Obtain [Base64](https://tools.ietf.org/html/rfc4648) string converted from an image. Only JPEG and PNG images are supported. Array length limit: 5 images.
Note: the image must be a relatively clear facial feature photo of one person with a size of at least 200 x 200 pixels.
 * @method void setFaceContents(array $FaceContents) Set [Base64](https://tools.ietf.org/html/rfc4648) string converted from an image. Only JPEG and PNG images are supported. Array length limit: 5 images.
Note: the image must be a relatively clear facial feature photo of one person with a size of at least 200 x 200 pixels.
 * @method array getTags() Obtain Material tag
<li>Array length limit: 20 tags;</li>
<li>Tag length limit: 128 characters.</li>
 * @method void setTags(array $Tags) Set Material tag
<li>Array length limit: 20 tags;</li>
<li>Tag length limit: 128 characters.</li>
 */
class CreatePersonSampleRequest extends AbstractModel
{
    /**
     * @var string Name of a material. Length limit: 20 characters.
     */
    public $Name;

    /**
     * @var array Material use case. Valid values:
1. Recognition: used for content recognition, equivalent to `Recognition.Face`
2. Review: used for detection of inappropriate content, equivalent to `Review.Face`
3. All: all of the above, equivalent to 1 and 2 combined
     */
    public $Usages;

    /**
     * @var string Material description. Length limit: 1,024 characters.
     */
    public $Description;

    /**
     * @var array [Base64](https://tools.ietf.org/html/rfc4648) string converted from an image. Only JPEG and PNG images are supported. Array length limit: 5 images.
Note: the image must be a relatively clear facial feature photo of one person with a size of at least 200 x 200 pixels.
     */
    public $FaceContents;

    /**
     * @var array Material tag
<li>Array length limit: 20 tags;</li>
<li>Tag length limit: 128 characters.</li>
     */
    public $Tags;

    /**
     * @param string $Name Name of a material. Length limit: 20 characters.
     * @param array $Usages Material use case. Valid values:
1. Recognition: used for content recognition, equivalent to `Recognition.Face`
2. Review: used for detection of inappropriate content, equivalent to `Review.Face`
3. All: all of the above, equivalent to 1 and 2 combined
     * @param string $Description Material description. Length limit: 1,024 characters.
     * @param array $FaceContents [Base64](https://tools.ietf.org/html/rfc4648) string converted from an image. Only JPEG and PNG images are supported. Array length limit: 5 images.
Note: the image must be a relatively clear facial feature photo of one person with a size of at least 200 x 200 pixels.
     * @param array $Tags Material tag
<li>Array length limit: 20 tags;</li>
<li>Tag length limit: 128 characters.</li>
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
