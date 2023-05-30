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
 * Whiteboard parameters of the whiteboard snapshot task, such as the width and height of the whiteboard.
 *
 * @method integer getWidth() Obtain Whiteboard width. Valid range: [0,2560]. Default value: 1280.
 * @method void setWidth(integer $Width) Set Whiteboard width. Valid range: [0,2560]. Default value: 1280.
 * @method integer getHeight() Obtain Whiteboard height. Valid range: [0,2560]. Default value: 720.
 * @method void setHeight(integer $Height) Set Whiteboard height. Valid range: [0,2560]. Default value: 720.
 * @method string getInitParams() Obtain Escaped JSON string of the whiteboard initial parameters, which is passed through to the Tencent Interactive Whiteboard SDK.
 * @method void setInitParams(string $InitParams) Set Escaped JSON string of the whiteboard initial parameters, which is passed through to the Tencent Interactive Whiteboard SDK.
 */
class SnapshotWhiteboard extends AbstractModel
{
    /**
     * @var integer Whiteboard width. Valid range: [0,2560]. Default value: 1280.
     */
    public $Width;

    /**
     * @var integer Whiteboard height. Valid range: [0,2560]. Default value: 720.
     */
    public $Height;

    /**
     * @var string Escaped JSON string of the whiteboard initial parameters, which is passed through to the Tencent Interactive Whiteboard SDK.
     */
    public $InitParams;

    /**
     * @param integer $Width Whiteboard width. Valid range: [0,2560]. Default value: 1280.
     * @param integer $Height Whiteboard height. Valid range: [0,2560]. Default value: 720.
     * @param string $InitParams Escaped JSON string of the whiteboard initial parameters, which is passed through to the Tencent Interactive Whiteboard SDK.
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

        if (array_key_exists("InitParams",$param) and $param["InitParams"] !== null) {
            $this->InitParams = $param["InitParams"];
        }
    }
}
