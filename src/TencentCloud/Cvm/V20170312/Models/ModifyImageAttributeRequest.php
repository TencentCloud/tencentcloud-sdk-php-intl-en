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
 * @method string getImageId() Obtain Image ID such as `img-gvbnzy6f`. You can obtain the image IDs in two ways: <br><li>Call [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) and look for `ImageId` in the response. <br><li>Look for the information in the [Image Console](https://console.cloud.tencent.com/cvm/image).
 * @method void setImageId(string $ImageId) Set Image ID such as `img-gvbnzy6f`. You can obtain the image IDs in two ways: <br><li>Call [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) and look for `ImageId` in the response. <br><li>Look for the information in the [Image Console](https://console.cloud.tencent.com/cvm/image).
 * @method string getImageName() Obtain New image name, which must meet the following requirements: <br> <li>No more than 20 characters. <br> <li>Must be unique.
 * @method void setImageName(string $ImageName) Set New image name, which must meet the following requirements: <br> <li>No more than 20 characters. <br> <li>Must be unique.
 * @method string getImageDescription() Obtain New image description, which must meet the following requirement: <br> <li> No more than 60 characters.
 * @method void setImageDescription(string $ImageDescription) Set New image description, which must meet the following requirement: <br> <li> No more than 60 characters.
 */
class ModifyImageAttributeRequest extends AbstractModel
{
    /**
     * @var string Image ID such as `img-gvbnzy6f`. You can obtain the image IDs in two ways: <br><li>Call [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) and look for `ImageId` in the response. <br><li>Look for the information in the [Image Console](https://console.cloud.tencent.com/cvm/image).
     */
    public $ImageId;

    /**
     * @var string New image name, which must meet the following requirements: <br> <li>No more than 20 characters. <br> <li>Must be unique.
     */
    public $ImageName;

    /**
     * @var string New image description, which must meet the following requirement: <br> <li> No more than 60 characters.
     */
    public $ImageDescription;

    /**
     * @param string $ImageId Image ID such as `img-gvbnzy6f`. You can obtain the image IDs in two ways: <br><li>Call [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) and look for `ImageId` in the response. <br><li>Look for the information in the [Image Console](https://console.cloud.tencent.com/cvm/image).
     * @param string $ImageName New image name, which must meet the following requirements: <br> <li>No more than 20 characters. <br> <li>Must be unique.
     * @param string $ImageDescription New image description, which must meet the following requirement: <br> <li> No more than 60 characters.
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
    }
}
