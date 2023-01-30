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
 * DescribeAssetImageRegistryScanStatusOneKey request structure.
 *
 * @method array getImages() Obtain List of images for which to get the progress
 * @method void setImages(array $Images) Set List of images for which to get the progress
 * @method boolean getAll() Obtain Whether to get all images
 * @method void setAll(boolean $All) Set Whether to get all images
 * @method array getId() Obtain List of IDs of images for which to get the progress
 * @method void setId(array $Id) Set List of IDs of images for which to get the progress
 */
class DescribeAssetImageRegistryScanStatusOneKeyRequest extends AbstractModel
{
    /**
     * @var array List of images for which to get the progress
     */
    public $Images;

    /**
     * @var boolean Whether to get all images
     */
    public $All;

    /**
     * @var array List of IDs of images for which to get the progress
     */
    public $Id;

    /**
     * @param array $Images List of images for which to get the progress
     * @param boolean $All Whether to get all images
     * @param array $Id List of IDs of images for which to get the progress
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
        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = [];
            foreach ($param["Images"] as $key => $value){
                $obj = new ImageInfo();
                $obj->deserialize($value);
                array_push($this->Images, $obj);
            }
        }

        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
