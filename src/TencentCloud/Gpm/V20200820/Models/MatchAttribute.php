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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Player attributes for matching
 *
 * @method string getName() Obtain Attribute name. It can contain up to 128 characters, supporting [a-zA-Z0-9-\.]*.
 * @method void setName(string $Name) Set Attribute name. It can contain up to 128 characters, supporting [a-zA-Z0-9-\.]*.
 * @method integer getType() Obtain Attribute type. 0: number, 1: string. Default value: 0
 * @method void setType(integer $Type) Set Attribute type. 0: number, 1: string. Default value: 0
 * @method float getNumberValue() Obtain Numeric attribute value. Default value: 0.0
 * @method void setNumberValue(float $NumberValue) Set Numeric attribute value. Default value: 0.0
 * @method string getStringValue() Obtain String attribute value. Up to 128 characters are allowed. Default value: ""
 * @method void setStringValue(string $StringValue) Set String attribute value. Up to 128 characters are allowed. Default value: ""
 * @method array getListValue() Obtain List attribute value
 * @method void setListValue(array $ListValue) Set List attribute value
 * @method array getMapValue() Obtain Map attribute value
 * @method void setMapValue(array $MapValue) Set Map attribute value
 */
class MatchAttribute extends AbstractModel
{
    /**
     * @var string Attribute name. It can contain up to 128 characters, supporting [a-zA-Z0-9-\.]*.
     */
    public $Name;

    /**
     * @var integer Attribute type. 0: number, 1: string. Default value: 0
     */
    public $Type;

    /**
     * @var float Numeric attribute value. Default value: 0.0
     */
    public $NumberValue;

    /**
     * @var string String attribute value. Up to 128 characters are allowed. Default value: ""
     */
    public $StringValue;

    /**
     * @var array List attribute value
     */
    public $ListValue;

    /**
     * @var array Map attribute value
     */
    public $MapValue;

    /**
     * @param string $Name Attribute name. It can contain up to 128 characters, supporting [a-zA-Z0-9-\.]*.
     * @param integer $Type Attribute type. 0: number, 1: string. Default value: 0
     * @param float $NumberValue Numeric attribute value. Default value: 0.0
     * @param string $StringValue String attribute value. Up to 128 characters are allowed. Default value: ""
     * @param array $ListValue List attribute value
     * @param array $MapValue Map attribute value
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

        if (array_key_exists("NumberValue",$param) and $param["NumberValue"] !== null) {
            $this->NumberValue = $param["NumberValue"];
        }

        if (array_key_exists("StringValue",$param) and $param["StringValue"] !== null) {
            $this->StringValue = $param["StringValue"];
        }

        if (array_key_exists("ListValue",$param) and $param["ListValue"] !== null) {
            $this->ListValue = $param["ListValue"];
        }

        if (array_key_exists("MapValue",$param) and $param["MapValue"] !== null) {
            $this->MapValue = [];
            foreach ($param["MapValue"] as $key => $value){
                $obj = new AttributeMap();
                $obj->deserialize($value);
                array_push($this->MapValue, $obj);
            }
        }
    }
}
