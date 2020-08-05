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
 * Custom mixed stream layout parameter
 *
 * @method Canvas getCanvas() Obtain Mixed stream canvas parameter
 * @method void setCanvas(Canvas $Canvas) Set Mixed stream canvas parameter
 * @method array getInputStreamList() Obtain Stream layout. The layout of each stream cannot exceed the canvas area.
 * @method void setInputStreamList(array $InputStreamList) Set Stream layout. The layout of each stream cannot exceed the canvas area.
 */
class CustomLayout extends AbstractModel
{
    /**
     * @var Canvas Mixed stream canvas parameter
     */
    public $Canvas;

    /**
     * @var array Stream layout. The layout of each stream cannot exceed the canvas area.
     */
    public $InputStreamList;

    /**
     * @param Canvas $Canvas Mixed stream canvas parameter
     * @param array $InputStreamList Stream layout. The layout of each stream cannot exceed the canvas area.
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
        if (array_key_exists("Canvas",$param) and $param["Canvas"] !== null) {
            $this->Canvas = new Canvas();
            $this->Canvas->deserialize($param["Canvas"]);
        }

        if (array_key_exists("InputStreamList",$param) and $param["InputStreamList"] !== null) {
            $this->InputStreamList = [];
            foreach ($param["InputStreamList"] as $key => $value){
                $obj = new StreamLayout();
                $obj->deserialize($value);
                array_push($this->InputStreamList, $obj);
            }
        }
    }
}
