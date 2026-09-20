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
 * Image processing template supports up to three operations. For example: crop - thumbnail - crop.
 *
 * @method integer getDefinition() Obtain Unique identifier of the image processing template.
 * @method void setDefinition(integer $Definition) Set Unique identifier of the image processing template.
 * @method string getType() Obtain Template type. Valid values:
<li>Preset: system-preset template;</li>
<li>Custom: custom template.</li>
 * @method void setType(string $Type) Set Template type. Valid values:
<li>Preset: system-preset template;</li>
<li>Custom: custom template.</li>
 * @method string getName() Obtain Image processing template name.
 * @method void setName(string $Name) Set Image processing template name.
 * @method string getComment() Obtain Template description information.
 * @method void setComment(string $Comment) Set Template description information.
 * @method array getOperations() Obtain Array of image processing operations. Operations are performed in array order.
<li>Length limit: 3.</li>
 * @method void setOperations(array $Operations) Set Array of image processing operations. Operations are performed in array order.
<li>Length limit: 3.</li>
 * @method string getCreateTime() Obtain Template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class ImageProcessingTemplate extends AbstractModel
{
    /**
     * @var integer Unique identifier of the image processing template.
     */
    public $Definition;

    /**
     * @var string Template type. Valid values:
<li>Preset: system-preset template;</li>
<li>Custom: custom template.</li>
     */
    public $Type;

    /**
     * @var string Image processing template name.
     */
    public $Name;

    /**
     * @var string Template description information.
     */
    public $Comment;

    /**
     * @var array Array of image processing operations. Operations are performed in array order.
<li>Length limit: 3.</li>
     */
    public $Operations;

    /**
     * @var string Template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @param integer $Definition Unique identifier of the image processing template.
     * @param string $Type Template type. Valid values:
<li>Preset: system-preset template;</li>
<li>Custom: custom template.</li>
     * @param string $Name Image processing template name.
     * @param string $Comment Template description information.
     * @param array $Operations Array of image processing operations. Operations are performed in array order.
<li>Length limit: 3.</li>
     * @param string $CreateTime Template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Operations",$param) and $param["Operations"] !== null) {
            $this->Operations = [];
            foreach ($param["Operations"] as $key => $value){
                $obj = new ImageOperation();
                $obj->deserialize($value);
                array_push($this->Operations, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
