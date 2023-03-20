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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Table field information
 *
 * @method string getName() Obtain The field name.
 * @method void setName(string $Name) Set The field name.
 * @method string getType() Obtain The field type.
 * @method void setType(string $Type) Set The field type.
 * @method string getComment() Obtain The field description.
 * @method void setComment(string $Comment) Set The field description.
 * @method string getDefault() Obtain The default field value.
 * @method void setDefault(string $Default) Set The default field value.
 * @method boolean getNotNull() Obtain Whether the field is not null.
 * @method void setNotNull(boolean $NotNull) Set Whether the field is not null.
 */
class TColumn extends AbstractModel
{
    /**
     * @var string The field name.
     */
    public $Name;

    /**
     * @var string The field type.
     */
    public $Type;

    /**
     * @var string The field description.
     */
    public $Comment;

    /**
     * @var string The default field value.
     */
    public $Default;

    /**
     * @var boolean Whether the field is not null.
     */
    public $NotNull;

    /**
     * @param string $Name The field name.
     * @param string $Type The field type.
     * @param string $Comment The field description.
     * @param string $Default The default field value.
     * @param boolean $NotNull Whether the field is not null.
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

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("NotNull",$param) and $param["NotNull"] !== null) {
            $this->NotNull = $param["NotNull"];
        }
    }
}
