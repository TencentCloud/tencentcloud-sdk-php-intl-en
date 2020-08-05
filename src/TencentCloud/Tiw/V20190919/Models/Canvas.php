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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mixed stream canvas parameter
 *
 * @method LayoutParams getLayoutParams() Obtain Width and height of the mixed stream canvas
 * @method void setLayoutParams(LayoutParams $LayoutParams) Set Width and height of the mixed stream canvas
 * @method string getBackgroundColor() Obtain Background color, which is black by default. Its format is RGB. for example, "#FF0000" for the red color.
 * @method void setBackgroundColor(string $BackgroundColor) Set Background color, which is black by default. Its format is RGB. for example, "#FF0000" for the red color.
 */
class Canvas extends AbstractModel
{
    /**
     * @var LayoutParams Width and height of the mixed stream canvas
     */
    public $LayoutParams;

    /**
     * @var string Background color, which is black by default. Its format is RGB. for example, "#FF0000" for the red color.
     */
    public $BackgroundColor;

    /**
     * @param LayoutParams $LayoutParams Width and height of the mixed stream canvas
     * @param string $BackgroundColor Background color, which is black by default. Its format is RGB. for example, "#FF0000" for the red color.
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
        if (array_key_exists("LayoutParams",$param) and $param["LayoutParams"] !== null) {
            $this->LayoutParams = new LayoutParams();
            $this->LayoutParams->deserialize($param["LayoutParams"]);
        }

        if (array_key_exists("BackgroundColor",$param) and $param["BackgroundColor"] !== null) {
            $this->BackgroundColor = $param["BackgroundColor"];
        }
    }
}
