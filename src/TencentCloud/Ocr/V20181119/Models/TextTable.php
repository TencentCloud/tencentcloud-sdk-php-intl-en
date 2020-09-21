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
 * Form recognition result.
 *
 * @method integer getColTl() Obtain Column index of the top-left corner of the cell.
 * @method void setColTl(integer $ColTl) Set Column index of the top-left corner of the cell.
 * @method integer getRowTl() Obtain Row index of the top-left corner of the cell.
 * @method void setRowTl(integer $RowTl) Set Row index of the top-left corner of the cell.
 * @method integer getColBr() Obtain Column index of the bottom-right corner of the cell.
 * @method void setColBr(integer $ColBr) Set Column index of the bottom-right corner of the cell.
 * @method integer getRowBr() Obtain Row index of the bottom-right corner of the cell.
 * @method void setRowBr(integer $RowBr) Set Row index of the bottom-right corner of the cell.
 * @method string getText() Obtain Cell text
 * @method void setText(string $Text) Set Cell text
 * @method string getType() Obtain Cell type. Valid values: body, header, footer
 * @method void setType(string $Type) Set Cell type. Valid values: body, header, footer
 * @method integer getConfidence() Obtain Confidence. Value range: 0–100
 * @method void setConfidence(integer $Confidence) Set Confidence. Value range: 0–100
 * @method array getPolygon() Obtain Text line coordinates, which are represented as 4 vertex coordinates.
 * @method void setPolygon(array $Polygon) Set Text line coordinates, which are represented as 4 vertex coordinates.
 * @method string getAdvancedInfo() Obtain Extended field
 * @method void setAdvancedInfo(string $AdvancedInfo) Set Extended field
 */
class TextTable extends AbstractModel
{
    /**
     * @var integer Column index of the top-left corner of the cell.
     */
    public $ColTl;

    /**
     * @var integer Row index of the top-left corner of the cell.
     */
    public $RowTl;

    /**
     * @var integer Column index of the bottom-right corner of the cell.
     */
    public $ColBr;

    /**
     * @var integer Row index of the bottom-right corner of the cell.
     */
    public $RowBr;

    /**
     * @var string Cell text
     */
    public $Text;

    /**
     * @var string Cell type. Valid values: body, header, footer
     */
    public $Type;

    /**
     * @var integer Confidence. Value range: 0–100
     */
    public $Confidence;

    /**
     * @var array Text line coordinates, which are represented as 4 vertex coordinates.
     */
    public $Polygon;

    /**
     * @var string Extended field
     */
    public $AdvancedInfo;

    /**
     * @param integer $ColTl Column index of the top-left corner of the cell.
     * @param integer $RowTl Row index of the top-left corner of the cell.
     * @param integer $ColBr Column index of the bottom-right corner of the cell.
     * @param integer $RowBr Row index of the bottom-right corner of the cell.
     * @param string $Text Cell text
     * @param string $Type Cell type. Valid values: body, header, footer
     * @param integer $Confidence Confidence. Value range: 0–100
     * @param array $Polygon Text line coordinates, which are represented as 4 vertex coordinates.
     * @param string $AdvancedInfo Extended field
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
        if (array_key_exists("ColTl",$param) and $param["ColTl"] !== null) {
            $this->ColTl = $param["ColTl"];
        }

        if (array_key_exists("RowTl",$param) and $param["RowTl"] !== null) {
            $this->RowTl = $param["RowTl"];
        }

        if (array_key_exists("ColBr",$param) and $param["ColBr"] !== null) {
            $this->ColBr = $param["ColBr"];
        }

        if (array_key_exists("RowBr",$param) and $param["RowBr"] !== null) {
            $this->RowBr = $param["RowBr"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Polygon",$param) and $param["Polygon"] !== null) {
            $this->Polygon = [];
            foreach ($param["Polygon"] as $key => $value){
                $obj = new Coord();
                $obj->deserialize($value);
                array_push($this->Polygon, $obj);
            }
        }

        if (array_key_exists("AdvancedInfo",$param) and $param["AdvancedInfo"] !== null) {
            $this->AdvancedInfo = $param["AdvancedInfo"];
        }
    }
}
