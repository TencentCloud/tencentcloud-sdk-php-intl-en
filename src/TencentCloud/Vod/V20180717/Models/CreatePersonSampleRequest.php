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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePersonSample request structure.
 *
 * @method string getName() Obtain Name of a sample. Length limit: 20 characters.
 * @method void setName(string $Name) Set Name of a sample. Length limit: 20 characters.
 * @method array getUsages() Obtain Usage of a sample. Valid values:
1. Recognition: used for content recognition; equivalent to `Recognition.Face`
2. Review: used for inappropriate information recognition; equivalent to `Review.Face`
3. All: equivalent to 1+2.
 * @method void setUsages(array $Usages) Set Usage of a sample. Valid values:
1. Recognition: used for content recognition; equivalent to `Recognition.Face`
2. Review: used for inappropriate information recognition; equivalent to `Review.Face`
3. All: equivalent to 1+2.
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getDescription() Obtain Description of a sample. Length limit: 1024 characters.
 * @method void setDescription(string $Description) Set Description of a sample. Length limit: 1024 characters.
 * @method array getFaceContents() Obtain String generated after the sample image is encoded by [Base64](https://tools.ietf.org/html/rfc4648). Only JPEG and PNG images are supported. Array length limit: 5 images.
Note: the image must be a relatively clear full-face photo of a person and has a resolution of no less than 200 x 200.
 * @method void setFaceContents(array $FaceContents) Set String generated after the sample image is encoded by [Base64](https://tools.ietf.org/html/rfc4648). Only JPEG and PNG images are supported. Array length limit: 5 images.
Note: the image must be a relatively clear full-face photo of a person and has a resolution of no less than 200 x 200.
 * @method array getTags() Obtain Tags of a sample
<li>Array length limit: 20 tags</li>
<li>Length limit of a tag: 128 characters</li>
 * @method void setTags(array $Tags) Set Tags of a sample
<li>Array length limit: 20 tags</li>
<li>Length limit of a tag: 128 characters</li>
 */
class CreatePersonSampleRequest extends AbstractModel
{
    /**
     * @var string Name of a sample. Length limit: 20 characters.
     */
    public $Name;

    /**
     * @var array Usage of a sample. Valid values:
1. Recognition: used for content recognition; equivalent to `Recognition.Face`
2. Review: used for inappropriate information recognition; equivalent to `Review.Face`
3. All: equivalent to 1+2.
     */
    public $Usages;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Description of a sample. Length limit: 1024 characters.
     */
    public $Description;

    /**
     * @var array String generated after the sample image is encoded by [Base64](https://tools.ietf.org/html/rfc4648). Only JPEG and PNG images are supported. Array length limit: 5 images.
Note: the image must be a relatively clear full-face photo of a person and has a resolution of no less than 200 x 200.
     */
    public $FaceContents;

    /**
     * @var array Tags of a sample
<li>Array length limit: 20 tags</li>
<li>Length limit of a tag: 128 characters</li>
     */
    public $Tags;

    /**
     * @param string $Name Name of a sample. Length limit: 20 characters.
     * @param array $Usages Usage of a sample. Valid values:
1. Recognition: used for content recognition; equivalent to `Recognition.Face`
2. Review: used for inappropriate information recognition; equivalent to `Review.Face`
3. All: equivalent to 1+2.
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $Description Description of a sample. Length limit: 1024 characters.
     * @param array $FaceContents String generated after the sample image is encoded by [Base64](https://tools.ietf.org/html/rfc4648). Only JPEG and PNG images are supported. Array length limit: 5 images.
Note: the image must be a relatively clear full-face photo of a person and has a resolution of no less than 200 x 200.
     * @param array $Tags Tags of a sample
<li>Array length limit: 20 tags</li>
<li>Length limit of a tag: 128 characters</li>
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
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
