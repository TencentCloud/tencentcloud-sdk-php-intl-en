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
 * Real-time recording whiteboard parameter, such as the whiteboard width and height
 *
 * @method integer getWidth() Obtain Whiteboard video width in the real-time recording result. The value must be equal to or greater than 2. Default value: 1280.
 * @method void setWidth(integer $Width) Set Whiteboard video width in the real-time recording result. The value must be equal to or greater than 2. Default value: 1280.
 * @method integer getHeight() Obtain Whiteboard video height in the real-time recording result. The value must be equal to or greater than 2. Default value: 960.
 * @method void setHeight(integer $Height) Set Whiteboard video height in the real-time recording result. The value must be equal to or greater than 2. Default value: 960.
 * @method string getInitParam() Obtain Whiteboard initialization parameter, which is passed through to the whiteboard SDK
 * @method void setInitParam(string $InitParam) Set Whiteboard initialization parameter, which is passed through to the whiteboard SDK
 */
class Whiteboard extends AbstractModel
{
    /**
     * @var integer Whiteboard video width in the real-time recording result. The value must be equal to or greater than 2. Default value: 1280.
     */
    public $Width;

    /**
     * @var integer Whiteboard video height in the real-time recording result. The value must be equal to or greater than 2. Default value: 960.
     */
    public $Height;

    /**
     * @var string Whiteboard initialization parameter, which is passed through to the whiteboard SDK
     */
    public $InitParam;

    /**
     * @param integer $Width Whiteboard video width in the real-time recording result. The value must be equal to or greater than 2. Default value: 1280.
     * @param integer $Height Whiteboard video height in the real-time recording result. The value must be equal to or greater than 2. Default value: 960.
     * @param string $InitParam Whiteboard initialization parameter, which is passed through to the whiteboard SDK
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
        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("InitParam",$param) and $param["InitParam"] !== null) {
            $this->InitParam = $param["InitParam"];
        }
    }
}
