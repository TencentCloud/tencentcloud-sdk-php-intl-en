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
 * Image scaling details.
 *
 * @method string getType() Obtain The scaling type. Valid values:
<li>`WidthFirst`: Specify the width and proportionally scale the height.</li>
<li>`HeightFirst`: Specify the height and proportionally scale the width.</li>
<li>`LongEdgeFirst`: Specify the long side (`LongEdge`) and proportionally scale the short side.</li>
<li>`ShortEdgeFirst`: Specify the short side (`ShortEdge`) and proportionally scale the long side.</li>
<li>Force: Specify both the height and width. The output image may be distorted.</li>
 * @method void setType(string $Type) Set The scaling type. Valid values:
<li>`WidthFirst`: Specify the width and proportionally scale the height.</li>
<li>`HeightFirst`: Specify the height and proportionally scale the width.</li>
<li>`LongEdgeFirst`: Specify the long side (`LongEdge`) and proportionally scale the short side.</li>
<li>`ShortEdgeFirst`: Specify the short side (`ShortEdge`) and proportionally scale the long side.</li>
<li>Force: Specify both the height and width. The output image may be distorted.</li>
 * @method integer getHeight() Obtain The image height (pixels). This parameter is valid only if `Type` is `HeightFirst` or `Force`.
 * @method void setHeight(integer $Height) Set The image height (pixels). This parameter is valid only if `Type` is `HeightFirst` or `Force`.
 * @method integer getWidth() Obtain The image width (pixels). This parameter is valid only if `Type` is `WidthFirst` or `Force`.
 * @method void setWidth(integer $Width) Set The image width (pixels). This parameter is valid only if `Type` is `WidthFirst` or `Force`.
 * @method integer getLongEdge() Obtain The long side of the output image (pixels). This parameter is valid only if `Type` is `LongEdgeFirst`.
 * @method void setLongEdge(integer $LongEdge) Set The long side of the output image (pixels). This parameter is valid only if `Type` is `LongEdgeFirst`.
 * @method integer getShortEdge() Obtain The short side of the output image (pixels). This parameter is valid only if `Type` is `ShortEdgeFirst`.
 * @method void setShortEdge(integer $ShortEdge) Set The short side of the output image (pixels). This parameter is valid only if `Type` is `ShortEdgeFirst`.
 */
class ImageScale extends AbstractModel
{
    /**
     * @var string The scaling type. Valid values:
<li>`WidthFirst`: Specify the width and proportionally scale the height.</li>
<li>`HeightFirst`: Specify the height and proportionally scale the width.</li>
<li>`LongEdgeFirst`: Specify the long side (`LongEdge`) and proportionally scale the short side.</li>
<li>`ShortEdgeFirst`: Specify the short side (`ShortEdge`) and proportionally scale the long side.</li>
<li>Force: Specify both the height and width. The output image may be distorted.</li>
     */
    public $Type;

    /**
     * @var integer The image height (pixels). This parameter is valid only if `Type` is `HeightFirst` or `Force`.
     */
    public $Height;

    /**
     * @var integer The image width (pixels). This parameter is valid only if `Type` is `WidthFirst` or `Force`.
     */
    public $Width;

    /**
     * @var integer The long side of the output image (pixels). This parameter is valid only if `Type` is `LongEdgeFirst`.
     */
    public $LongEdge;

    /**
     * @var integer The short side of the output image (pixels). This parameter is valid only if `Type` is `ShortEdgeFirst`.
     */
    public $ShortEdge;

    /**
     * @param string $Type The scaling type. Valid values:
<li>`WidthFirst`: Specify the width and proportionally scale the height.</li>
<li>`HeightFirst`: Specify the height and proportionally scale the width.</li>
<li>`LongEdgeFirst`: Specify the long side (`LongEdge`) and proportionally scale the short side.</li>
<li>`ShortEdgeFirst`: Specify the short side (`ShortEdge`) and proportionally scale the long side.</li>
<li>Force: Specify both the height and width. The output image may be distorted.</li>
     * @param integer $Height The image height (pixels). This parameter is valid only if `Type` is `HeightFirst` or `Force`.
     * @param integer $Width The image width (pixels). This parameter is valid only if `Type` is `WidthFirst` or `Force`.
     * @param integer $LongEdge The long side of the output image (pixels). This parameter is valid only if `Type` is `LongEdgeFirst`.
     * @param integer $ShortEdge The short side of the output image (pixels). This parameter is valid only if `Type` is `ShortEdgeFirst`.
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

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("LongEdge",$param) and $param["LongEdge"] !== null) {
            $this->LongEdge = $param["LongEdge"];
        }

        if (array_key_exists("ShortEdge",$param) and $param["ShortEdge"] !== null) {
            $this->ShortEdge = $param["ShortEdge"];
        }
    }
}
