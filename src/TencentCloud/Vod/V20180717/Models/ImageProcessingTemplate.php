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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * An image processing template, which can contain at most three operations, for example, cropping, scaling, and cropping again.
 *
 * @method integer getDefinition() Obtain The template ID.
 * @method void setDefinition(integer $Definition) Set The template ID.
 * @method string getType() Obtain The template type. Valid values:
<li>Preset</li>
<li>Custom</li>
 * @method void setType(string $Type) Set The template type. Valid values:
<li>Preset</li>
<li>Custom</li>
 * @method string getName() Obtain The template name.
 * @method void setName(string $Name) Set The template name.
 * @method string getComment() Obtain The template description.
 * @method void setComment(string $Comment) Set The template description.
 * @method array getOperations() Obtain An array of image processing operations. The operations will be performed in the specified order.
<li>Length limit: 3.</li>
 * @method void setOperations(array $Operations) Set An array of image processing operations. The operations will be performed in the specified order.
<li>Length limit: 3.</li>
 * @method string getCreateTime() Obtain The template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?lang=en&pg=#iso-date-format).
 * @method void setCreateTime(string $CreateTime) Set The template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?lang=en&pg=#iso-date-format).
 */
class ImageProcessingTemplate extends AbstractModel
{
    /**
     * @var integer The template ID.
     */
    public $Definition;

    /**
     * @var string The template type. Valid values:
<li>Preset</li>
<li>Custom</li>
     */
    public $Type;

    /**
     * @var string The template name.
     */
    public $Name;

    /**
     * @var string The template description.
     */
    public $Comment;

    /**
     * @var array An array of image processing operations. The operations will be performed in the specified order.
<li>Length limit: 3.</li>
     */
    public $Operations;

    /**
     * @var string The template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?lang=en&pg=#iso-date-format).
     */
    public $CreateTime;

    /**
     * @param integer $Definition The template ID.
     * @param string $Type The template type. Valid values:
<li>Preset</li>
<li>Custom</li>
     * @param string $Name The template name.
     * @param string $Comment The template description.
     * @param array $Operations An array of image processing operations. The operations will be performed in the specified order.
<li>Length limit: 3.</li>
     * @param string $CreateTime The template creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?lang=en&pg=#iso-date-format).
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
