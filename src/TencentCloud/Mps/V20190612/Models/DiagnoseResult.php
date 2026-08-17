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
 * Diagnosis result item.
 *
 * @method string getCategory() Obtain 
 * @method void setCategory(string $Category) Set 
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method float getTimestamp() Obtain 
 * @method void setTimestamp(float $Timestamp) Set 
 * @method string getDescription() Obtain 
 * @method void setDescription(string $Description) Set 
 * @method string getDateTime() Obtain 
 * @method void setDateTime(string $DateTime) Set 
 * @method string getSeverityLevel() Obtain 
 * @method void setSeverityLevel(string $SeverityLevel) Set 
 */
class DiagnoseResult extends AbstractModel
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
     * @var float 
     */
    public $Timestamp;

    /**
     * @var string 
     */
    public $Description;

    /**
     * @var string 
     */
    public $DateTime;

    /**
     * @var string 
     */
    public $SeverityLevel;

    /**
     * @param string $Category 
     * @param string $Type 
     * @param float $Timestamp 
     * @param string $Description 
     * @param string $DateTime 
     * @param string $SeverityLevel 
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

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DateTime",$param) and $param["DateTime"] !== null) {
            $this->DateTime = $param["DateTime"];
        }

        if (array_key_exists("SeverityLevel",$param) and $param["SeverityLevel"] !== null) {
            $this->SeverityLevel = $param["SeverityLevel"];
        }
    }
}
