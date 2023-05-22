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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Line number
 *
 * @method array getLines() Obtain The elements in a line
 * @method void setLines(array $Lines) Set The elements in a line
 */
class LineInfo extends AbstractModel
{
    /**
     * @var array The elements in a line
     */
    public $Lines;

    /**
     * @param array $Lines The elements in a line
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
        if (array_key_exists("Lines",$param) and $param["Lines"] !== null) {
            $this->Lines = [];
            foreach ($param["Lines"] as $key => $value){
                $obj = new ItemInfo();
                $obj->deserialize($value);
                array_push($this->Lines, $obj);
            }
        }
    }
}
