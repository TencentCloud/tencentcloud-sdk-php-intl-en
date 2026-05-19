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
 * CreatePersonSample request structure.
 *
 * @method string getName() Obtain Material name, length limited to 20 characters.
 * @method void setName(string $Name) Set Material name, length limited to 20 characters.
 * @method array getUsages() Obtain Material application scenario. Available values:
1. Recognition: Used for content recognition, equivalent to Recognition.Face.
2. Review: For inappropriate content, equivalent to Review.Face.
3. All: Include all of the above, equivalent to 1+2.
 * @method void setUsages(array $Usages) Set Material application scenario. Available values:
1. Recognition: Used for content recognition, equivalent to Recognition.Face.
2. Review: For inappropriate content, equivalent to Review.Face.
3. All: Include all of the above, equivalent to 1+2.
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getDescription() Obtain Material description, with a length limit of 1024 characters.
 * @method void setDescription(string $Description) Set Material description, with a length limit of 1024 characters.
 * @method array getFaceContents() Obtain The material image [Base64](https://tools.ietf.org/html/rfc4648) encoded string only supports jpeg and png image formats. Array length limit: 5 images.
Note: The image must be a single portrait with clear facial features and not less than 200×200 pixels.
 * @method void setFaceContents(array $FaceContents) Set The material image [Base64](https://tools.ietf.org/html/rfc4648) encoded string only supports jpeg and png image formats. Array length limit: 5 images.
Note: The image must be a single portrait with clear facial features and not less than 200×200 pixels.
 * @method array getTags() Obtain material tag
<li>Array length limit: 20 tags;</li>
<li>Length limit for a single tag: 128 characters.</li>
 * @method void setTags(array $Tags) Set material tag
<li>Array length limit: 20 tags;</li>
<li>Length limit for a single tag: 128 characters.</li>
 */
class CreatePersonSampleRequest extends AbstractModel
{
    /**
     * @var string Material name, length limited to 20 characters.
     */
    public $Name;

    /**
     * @var array Material application scenario. Available values:
1. Recognition: Used for content recognition, equivalent to Recognition.Face.
2. Review: For inappropriate content, equivalent to Review.Face.
3. All: Include all of the above, equivalent to 1+2.
     */
    public $Usages;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Material description, with a length limit of 1024 characters.
     */
    public $Description;

    /**
     * @var array The material image [Base64](https://tools.ietf.org/html/rfc4648) encoded string only supports jpeg and png image formats. Array length limit: 5 images.
Note: The image must be a single portrait with clear facial features and not less than 200×200 pixels.
     */
    public $FaceContents;

    /**
     * @var array material tag
<li>Array length limit: 20 tags;</li>
<li>Length limit for a single tag: 128 characters.</li>
     */
    public $Tags;

    /**
     * @param string $Name Material name, length limited to 20 characters.
     * @param array $Usages Material application scenario. Available values:
1. Recognition: Used for content recognition, equivalent to Recognition.Face.
2. Review: For inappropriate content, equivalent to Review.Face.
3. All: Include all of the above, equivalent to 1+2.
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Description Material description, with a length limit of 1024 characters.
     * @param array $FaceContents The material image [Base64](https://tools.ietf.org/html/rfc4648) encoded string only supports jpeg and png image formats. Array length limit: 5 images.
Note: The image must be a single portrait with clear facial features and not less than 200×200 pixels.
     * @param array $Tags material tag
<li>Array length limit: 20 tags;</li>
<li>Length limit for a single tag: 128 characters.</li>
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
