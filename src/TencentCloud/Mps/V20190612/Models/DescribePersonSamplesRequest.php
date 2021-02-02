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
 * DescribePersonSamples request structure.
 *
 * @method string getType() Obtain Type of images to pull. Valid values:
<li>UserDefine: custom image library</li>
<li>Default: default image library</li>

Default value: UserDefine. Samples in the custom image library will be pulled.
Note: you can pull the default image library only using the image name or a combination of the image name and ID, and only one face image is returned.
 * @method void setType(string $Type) Set Type of images to pull. Valid values:
<li>UserDefine: custom image library</li>
<li>Default: default image library</li>

Default value: UserDefine. Samples in the custom image library will be pulled.
Note: you can pull the default image library only using the image name or a combination of the image name and ID, and only one face image is returned.
 * @method array getPersonIds() Obtain Image ID. Array length limit: 100
 * @method void setPersonIds(array $PersonIds) Set Image ID. Array length limit: 100
 * @method array getNames() Obtain Image name. Array length limit: 20
 * @method void setNames(array $Names) Set Image name. Array length limit: 20
 * @method array getTags() Obtain Image tag. Array length limit: 20
 * @method void setTags(array $Tags) Set Image tag. Array length limit: 20
 * @method integer getOffset() Obtain Paging offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Paging offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned entries. Default value: 100. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned entries. Default value: 100. Maximum value: 100.
 */
class DescribePersonSamplesRequest extends AbstractModel
{
    /**
     * @var string Type of images to pull. Valid values:
<li>UserDefine: custom image library</li>
<li>Default: default image library</li>

Default value: UserDefine. Samples in the custom image library will be pulled.
Note: you can pull the default image library only using the image name or a combination of the image name and ID, and only one face image is returned.
     */
    public $Type;

    /**
     * @var array Image ID. Array length limit: 100
     */
    public $PersonIds;

    /**
     * @var array Image name. Array length limit: 20
     */
    public $Names;

    /**
     * @var array Image tag. Array length limit: 20
     */
    public $Tags;

    /**
     * @var integer Paging offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned entries. Default value: 100. Maximum value: 100.
     */
    public $Limit;

    /**
     * @param string $Type Type of images to pull. Valid values:
<li>UserDefine: custom image library</li>
<li>Default: default image library</li>

Default value: UserDefine. Samples in the custom image library will be pulled.
Note: you can pull the default image library only using the image name or a combination of the image name and ID, and only one face image is returned.
     * @param array $PersonIds Image ID. Array length limit: 100
     * @param array $Names Image name. Array length limit: 20
     * @param array $Tags Image tag. Array length limit: 20
     * @param integer $Offset Paging offset. Default value: 0.
     * @param integer $Limit Number of returned entries. Default value: 100. Maximum value: 100.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PersonIds",$param) and $param["PersonIds"] !== null) {
            $this->PersonIds = $param["PersonIds"];
        }

        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
