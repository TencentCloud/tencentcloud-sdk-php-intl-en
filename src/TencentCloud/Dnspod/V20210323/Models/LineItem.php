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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes the line information of dns records.
 *
 * @method string getLineName() Obtain Parses the line name.
 * @method void setLineName(string $LineName) Set Parses the line name.
 * @method string getLineId() Obtain Resolution route ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLineId(string $LineId) Set Resolution route ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getUseful() Obtain Indicates whether the current line is available under the current domain.
 * @method void setUseful(boolean $Useful) Set Indicates whether the current line is available under the current domain.
 * @method string getGrade() Obtain Current line min plan level requirement.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGrade(string $Grade) Set Current line min plan level requirement.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSubGroup() Obtain Describes the sub-line list under the current line category.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubGroup(array $SubGroup) Set Describes the sub-line list under the current line category.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getLines() Obtain Specifies the lines included in the custom line grouping.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLines(array $Lines) Set Specifies the lines included in the custom line grouping.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LineItem extends AbstractModel
{
    /**
     * @var string Parses the line name.
     */
    public $LineName;

    /**
     * @var string Resolution route ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LineId;

    /**
     * @var boolean Indicates whether the current line is available under the current domain.
     */
    public $Useful;

    /**
     * @var string Current line min plan level requirement.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Grade;

    /**
     * @var array Describes the sub-line list under the current line category.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubGroup;

    /**
     * @var array Specifies the lines included in the custom line grouping.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Lines;

    /**
     * @param string $LineName Parses the line name.
     * @param string $LineId Resolution route ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Useful Indicates whether the current line is available under the current domain.
     * @param string $Grade Current line min plan level requirement.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SubGroup Describes the sub-line list under the current line category.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Lines Specifies the lines included in the custom line grouping.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("LineName",$param) and $param["LineName"] !== null) {
            $this->LineName = $param["LineName"];
        }

        if (array_key_exists("LineId",$param) and $param["LineId"] !== null) {
            $this->LineId = $param["LineId"];
        }

        if (array_key_exists("Useful",$param) and $param["Useful"] !== null) {
            $this->Useful = $param["Useful"];
        }

        if (array_key_exists("Grade",$param) and $param["Grade"] !== null) {
            $this->Grade = $param["Grade"];
        }

        if (array_key_exists("SubGroup",$param) and $param["SubGroup"] !== null) {
            $this->SubGroup = [];
            foreach ($param["SubGroup"] as $key => $value){
                $obj = new LineItem();
                $obj->deserialize($value);
                array_push($this->SubGroup, $obj);
            }
        }

        if (array_key_exists("Lines",$param) and $param["Lines"] !== null) {
            $this->Lines = $param["Lines"];
        }
    }
}
