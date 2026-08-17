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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Container format diagnostic result.
 *
 * @method string getCategory() Obtain 
 * @method void setCategory(string $Category) Set 
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method string getSeverityLevel() Obtain 
 * @method void setSeverityLevel(string $SeverityLevel) Set 
 * @method array getDateTimeSet() Obtain 
 * @method void setDateTimeSet(array $DateTimeSet) Set 
 * @method array getTimestampSet() Obtain 
 * @method void setTimestampSet(array $TimestampSet) Set 
 */
class ContainerDiagnoseResultItem extends AbstractModel
{
    /**
     * @var string 
     */
    public $Category;

    /**
     * @var string 
     */
    public $Type;

    /**
     * @var string 
     */
    public $SeverityLevel;

    /**
     * @var array 
     */
    public $DateTimeSet;

    /**
     * @var array 
     */
    public $TimestampSet;

    /**
     * @param string $Category 
     * @param string $Type 
     * @param string $SeverityLevel 
     * @param array $DateTimeSet 
     * @param array $TimestampSet 
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
        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SeverityLevel",$param) and $param["SeverityLevel"] !== null) {
            $this->SeverityLevel = $param["SeverityLevel"];
        }

        if (array_key_exists("DateTimeSet",$param) and $param["DateTimeSet"] !== null) {
            $this->DateTimeSet = $param["DateTimeSet"];
        }

        if (array_key_exists("TimestampSet",$param) and $param["TimestampSet"] !== null) {
            $this->TimestampSet = $param["TimestampSet"];
        }
    }
}
