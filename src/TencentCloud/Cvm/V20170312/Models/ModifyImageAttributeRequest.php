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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyImageAttribute request structure.
 *
 * @method string getImageId() Obtain Image ID, such as `img-gvbnzy6f`. You can obtain the image ID in the following ways:<li>Call the [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) API and find the value of `ImageId` in the response.</li><li>Obtain it in the [Image console](https://console.cloud.tencent.com/cvm/image).</li>
 * @method void setImageId(string $ImageId) Set Image ID, such as `img-gvbnzy6f`. You can obtain the image ID in the following ways:<li>Call the [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) API and find the value of `ImageId` in the response.</li><li>Obtain it in the [Image console](https://console.cloud.tencent.com/cvm/image).</li>
 * @method string getImageName() Obtain New image name, which should meet the following requirements:<li>It should not exceed 60 characters.</li><li>It should be unique.</li>
 * @method void setImageName(string $ImageName) Set New image name, which should meet the following requirements:<li>It should not exceed 60 characters.</li><li>It should be unique.</li>
 * @method string getImageDescription() Obtain New image description, which should meet the following requirement:<li>It should not exceed 256 characters.</li>
 * @method void setImageDescription(string $ImageDescription) Set New image description, which should meet the following requirement:<li>It should not exceed 256 characters.</li>
 * @method string getImageFamily() Obtain Sets the image family;
 * @method void setImageFamily(string $ImageFamily) Set Sets the image family;
 * @method boolean getImageDeprecated() Obtain Sets whether the image is deprecated;
 * @method void setImageDeprecated(boolean $ImageDeprecated) Set Sets whether the image is deprecated;
 */
class ModifyImageAttributeRequest extends AbstractModel
{
    /**
     * @var string Image ID, such as `img-gvbnzy6f`. You can obtain the image ID in the following ways:<li>Call the [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) API and find the value of `ImageId` in the response.</li><li>Obtain it in the [Image console](https://console.cloud.tencent.com/cvm/image).</li>
     */
    public $ImageId;

    /**
     * @var string New image name, which should meet the following requirements:<li>It should not exceed 60 characters.</li><li>It should be unique.</li>
     */
    public $ImageName;

    /**
     * @var string New image description, which should meet the following requirement:<li>It should not exceed 256 characters.</li>
     */
    public $ImageDescription;

    /**
     * @var string Sets the image family;
     */
    public $ImageFamily;

    /**
     * @var boolean Sets whether the image is deprecated;
     */
    public $ImageDeprecated;

    /**
     * @param string $ImageId Image ID, such as `img-gvbnzy6f`. You can obtain the image ID in the following ways:<li>Call the [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) API and find the value of `ImageId` in the response.</li><li>Obtain it in the [Image console](https://console.cloud.tencent.com/cvm/image).</li>
     * @param string $ImageName New image name, which should meet the following requirements:<li>It should not exceed 60 characters.</li><li>It should be unique.</li>
     * @param string $ImageDescription New image description, which should meet the following requirement:<li>It should not exceed 256 characters.</li>
     * @param string $ImageFamily Sets the image family;
     * @param boolean $ImageDeprecated Sets whether the image is deprecated;
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

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageDescription",$param) and $param["ImageDescription"] !== null) {
            $this->ImageDescription = $param["ImageDescription"];
        }

        if (array_key_exists("ImageFamily",$param) and $param["ImageFamily"] !== null) {
            $this->ImageFamily = $param["ImageFamily"];
        }

        if (array_key_exists("ImageDeprecated",$param) and $param["ImageDeprecated"] !== null) {
            $this->ImageDeprecated = $param["ImageDeprecated"];
        }
    }
}
