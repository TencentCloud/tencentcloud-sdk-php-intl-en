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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Product information of hit product clone
 *
 * @method array getImages() Obtain <p>Product image</p>
 * @method void setImages(array $Images) Set <p>Product image</p>
 * @method string getName() Obtain <p>Product name</p>
 * @method void setName(string $Name) Set <p>Product name</p>
 * @method string getDescription() Obtain <p>Product description</p>
 * @method void setDescription(string $Description) Set <p>Product description</p>
 */
class CloneViralProduct extends AbstractModel
{
    /**
     * @var array <p>Product image</p>
     */
    public $Images;

    /**
     * @var string <p>Product name</p>
     */
    public $Name;

    /**
     * @var string <p>Product description</p>
     */
    public $Description;

    /**
     * @param array $Images <p>Product image</p>
     * @param string $Name <p>Product name</p>
     * @param string $Description <p>Product description</p>
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
            $this->Images = $param["Images"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
