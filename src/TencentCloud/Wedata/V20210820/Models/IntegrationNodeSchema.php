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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Integrated Node Schema
 *
 * @method string getId() Obtain Schema ID Random Unique
 * @method void setId(string $Id) Set Schema ID Random Unique
 * @method string getName() Obtain Schema Name
 * @method void setName(string $Name) Set Schema Name
 * @method string getType() Obtain Schema Type
 * @method void setType(string $Type) Set Schema Type
 * @method string getValue() Obtain Schema Value
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setValue(string $Value) Set Schema Value
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getProperties() Obtain Schema Extended Attributes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProperties(array $Properties) Set Schema Extended Attributes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getAlias() Obtain Schema Alias
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAlias(string $Alias) Set Schema Alias
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getComment() Obtain Field Remarks
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setComment(string $Comment) Set Field Remarks
Note: This field may return null, indicating that no valid value can be obtained.
 */
class IntegrationNodeSchema extends AbstractModel
{
    /**
     * @var string Schema ID Random Unique
     */
    public $Id;

    /**
     * @var string Schema Name
     */
    public $Name;

    /**
     * @var string Schema Type
     */
    public $Type;

    /**
     * @var string Schema Value
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Value;

    /**
     * @var array Schema Extended Attributes
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Properties;

    /**
     * @var string Schema Alias
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Alias;

    /**
     * @var string Field Remarks
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Comment;

    /**
     * @param string $Id Schema ID Random Unique
     * @param string $Name Schema Name
     * @param string $Type Schema Type
     * @param string $Value Schema Value
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $Properties Schema Extended Attributes
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Alias Schema Alias
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Comment Field Remarks
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
