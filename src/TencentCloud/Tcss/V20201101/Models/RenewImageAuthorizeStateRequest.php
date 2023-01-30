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
 * RenewImageAuthorizeState request structure.
 *
 * @method boolean getAllImages() Obtain Whether all images are unlicensed
 * @method void setAllImages(boolean $AllImages) Set Whether all images are unlicensed
 * @method array getImageIds() Obtain Image IDs
 * @method void setImageIds(array $ImageIds) Set Image IDs
 */
class RenewImageAuthorizeStateRequest extends AbstractModel
{
    /**
     * @var boolean Whether all images are unlicensed
     */
    public $AllImages;

    /**
     * @var array Image IDs
     */
    public $ImageIds;

    /**
     * @param boolean $AllImages Whether all images are unlicensed
     * @param array $ImageIds Image IDs
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
        if (array_key_exists("AllImages",$param) and $param["AllImages"] !== null) {
            $this->AllImages = $param["AllImages"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }
    }
}
