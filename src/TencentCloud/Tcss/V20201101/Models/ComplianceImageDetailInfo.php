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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image asset details
 *
 * @method string getImageId() Obtain Image ID on the server
 * @method void setImageId(string $ImageId) Set Image ID on the server
 * @method string getImageName() Obtain Image name
 * @method void setImageName(string $ImageName) Set Image name
 * @method string getImageTag() Obtain Image tag
 * @method void setImageTag(string $ImageTag) Set Image tag
 * @method string getRepository() Obtain Path of the remote repository of the image
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRepository(string $Repository) Set Path of the remote repository of the image
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ComplianceImageDetailInfo extends AbstractModel
{
    /**
     * @var string Image ID on the server
     */
    public $ImageId;

    /**
     * @var string Image name
     */
    public $ImageName;

    /**
     * @var string Image tag
     */
    public $ImageTag;

    /**
     * @var string Path of the remote repository of the image
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Repository;

    /**
     * @param string $ImageId Image ID on the server
     * @param string $ImageName Image name
     * @param string $ImageTag Image tag
     * @param string $Repository Path of the remote repository of the image
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("ImageTag",$param) and $param["ImageTag"] !== null) {
            $this->ImageTag = $param["ImageTag"];
        }

        if (array_key_exists("Repository",$param) and $param["Repository"] !== null) {
            $this->Repository = $param["Repository"];
        }
    }
}
