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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateNoticeContent request structure.
 *
 * @method string getName() Obtain Template name. Supports a maximum of 255 bytes.
 * @method void setName(string $Name) Set Template name. Supports a maximum of 255 bytes.
 * @method integer getType() Obtain Template content language. Valid values: 0: Chinese; 1: English.
 * @method void setType(integer $Type) Set Template content language. Valid values: 0: Chinese; 1: English.
 * @method array getNoticeContents() Obtain Detailed configurations of a template.
 * @method void setNoticeContents(array $NoticeContents) Set Detailed configurations of a template.
 */
class CreateNoticeContentRequest extends AbstractModel
{
    /**
     * @var string Template name. Supports a maximum of 255 bytes.
     */
    public $Name;

    /**
     * @var integer Template content language. Valid values: 0: Chinese; 1: English.
     */
    public $Type;

    /**
     * @var array Detailed configurations of a template.
     */
    public $NoticeContents;

    /**
     * @param string $Name Template name. Supports a maximum of 255 bytes.
     * @param integer $Type Template content language. Valid values: 0: Chinese; 1: English.
     * @param array $NoticeContents Detailed configurations of a template.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("NoticeContents",$param) and $param["NoticeContents"] !== null) {
            $this->NoticeContents = [];
            foreach ($param["NoticeContents"] as $key => $value){
                $obj = new NoticeContent();
                $obj->deserialize($value);
                array_push($this->NoticeContents, $obj);
            }
        }
    }
}
