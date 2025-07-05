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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The sequence number of an element group in the image
 *
 * @method array getGroups() Obtain The elements in each line.
 * @method void setGroups(array $Groups) Set The elements in each line.
 */
class GroupInfo extends AbstractModel
{
    /**
     * @var array The elements in each line.
     */
    public $Groups;

    /**
     * @param array $Groups The elements in each line.
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
        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = [];
            foreach ($param["Groups"] as $key => $value){
                $obj = new LineInfo();
                $obj->deserialize($value);
                array_push($this->Groups, $obj);
            }
        }
    }
}
