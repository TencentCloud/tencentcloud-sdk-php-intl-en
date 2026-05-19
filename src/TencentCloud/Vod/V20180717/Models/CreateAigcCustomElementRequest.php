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
 * CreateAigcCustomElement request structure.
 *
 * @method string getElementName() Obtain Subject name cannot exceed 20 characters.
 * @method void setElementName(string $ElementName) Set Subject name cannot exceed 20 characters.
 * @method string getElementDescription() Obtain Subject description.

Up to 100 characters.
 * @method void setElementDescription(string $ElementDescription) Set Subject description.

Up to 100 characters.
 * @method string getElementFrontalImage() Obtain Front reference image of the subject.
Support input image URL (underwrite accessible).
Image format. Valid values: .jpg, .jpeg, and .png.
The image file size must not exceed 10MB, with image width and height not less than 300px and image aspect ratio between 1:2.5 and 2.5:1.
 * @method void setElementFrontalImage(string $ElementFrontalImage) Set Front reference image of the subject.
Support input image URL (underwrite accessible).
Image format. Valid values: .jpg, .jpeg, and .png.
The image file size must not exceed 10MB, with image width and height not less than 300px and image aspect ratio between 1:2.5 and 2.5:1.
 * @method array getElementReferList() Obtain Reference list of other subjects. Upload multiple subject reference images from different angles to define the subject appearance. Upload at least 1 reference image, up to 3 reference images.
 * @method void setElementReferList(array $ElementReferList) Set Reference list of other subjects. Upload multiple subject reference images from different angles to define the subject appearance. Upload at least 1 reference image, up to 3 reference images.
 */
class CreateAigcCustomElementRequest extends AbstractModel
{
    /**
     * @var string Subject name cannot exceed 20 characters.
     */
    public $ElementName;

    /**
     * @var string Subject description.

Up to 100 characters.
     */
    public $ElementDescription;

    /**
     * @var string Front reference image of the subject.
Support input image URL (underwrite accessible).
Image format. Valid values: .jpg, .jpeg, and .png.
The image file size must not exceed 10MB, with image width and height not less than 300px and image aspect ratio between 1:2.5 and 2.5:1.
     */
    public $ElementFrontalImage;

    /**
     * @var array Reference list of other subjects. Upload multiple subject reference images from different angles to define the subject appearance. Upload at least 1 reference image, up to 3 reference images.
     */
    public $ElementReferList;

    /**
     * @param string $ElementName Subject name cannot exceed 20 characters.
     * @param string $ElementDescription Subject description.

Up to 100 characters.
     * @param string $ElementFrontalImage Front reference image of the subject.
Support input image URL (underwrite accessible).
Image format. Valid values: .jpg, .jpeg, and .png.
The image file size must not exceed 10MB, with image width and height not less than 300px and image aspect ratio between 1:2.5 and 2.5:1.
     * @param array $ElementReferList Reference list of other subjects. Upload multiple subject reference images from different angles to define the subject appearance. Upload at least 1 reference image, up to 3 reference images.
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
        if (array_key_exists("ElementName",$param) and $param["ElementName"] !== null) {
            $this->ElementName = $param["ElementName"];
        }

        if (array_key_exists("ElementDescription",$param) and $param["ElementDescription"] !== null) {
            $this->ElementDescription = $param["ElementDescription"];
        }

        if (array_key_exists("ElementFrontalImage",$param) and $param["ElementFrontalImage"] !== null) {
            $this->ElementFrontalImage = $param["ElementFrontalImage"];
        }

        if (array_key_exists("ElementReferList",$param) and $param["ElementReferList"] !== null) {
            $this->ElementReferList = [];
            foreach ($param["ElementReferList"] as $key => $value){
                $obj = new ElementReferInfo();
                $obj->deserialize($value);
                array_push($this->ElementReferList, $obj);
            }
        }
    }
}
