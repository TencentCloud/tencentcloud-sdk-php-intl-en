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
 * Cell data
 *
 * @method integer getColTl() Obtain Column index of the upper-left corner of the cell
 * @method void setColTl(integer $ColTl) Set Column index of the upper-left corner of the cell
 * @method integer getRowTl() Obtain Row index of the upper-left corner of the cell
 * @method void setRowTl(integer $RowTl) Set Row index of the upper-left corner of the cell
 * @method integer getColBr() Obtain Column index of the lower-right corner of the cell
 * @method void setColBr(integer $ColBr) Set Column index of the lower-right corner of the cell
 * @method integer getRowBr() Obtain Row index of the lower-right corner of the cell
 * @method void setRowBr(integer $RowBr) Set Row index of the lower-right corner of the cell
 * @method string getText() Obtain Recognized string text within the cell. If there are multiple lines, they are separated by "\n".
 * @method void setText(string $Text) Set Recognized string text within the cell. If there are multiple lines, they are separated by "\n".
 * @method string getType() Obtain Cell type
 * @method void setType(string $Type) Set Cell type
 * @method float getConfidence() Obtain Cell confidence
 * @method void setConfidence(float $Confidence) Set Cell confidence
 * @method array getPolygon() Obtain Four-point coordinates of the cell in the image
 * @method void setPolygon(array $Polygon) Set Four-point coordinates of the cell in the image
 */
class TableCellInfo extends AbstractModel
{
    /**
     * @var integer Column index of the upper-left corner of the cell
     */
    public $ColTl;

    /**
     * @var integer Row index of the upper-left corner of the cell
     */
    public $RowTl;

    /**
     * @var integer Column index of the lower-right corner of the cell
     */
    public $ColBr;

    /**
     * @var integer Row index of the lower-right corner of the cell
     */
    public $RowBr;

    /**
     * @var string Recognized string text within the cell. If there are multiple lines, they are separated by "\n".
     */
    public $Text;

    /**
     * @var string Cell type
     */
    public $Type;

    /**
     * @var float Cell confidence
     */
    public $Confidence;

    /**
     * @var array Four-point coordinates of the cell in the image
     */
    public $Polygon;

    /**
     * @param integer $ColTl Column index of the upper-left corner of the cell
     * @param integer $RowTl Row index of the upper-left corner of the cell
     * @param integer $ColBr Column index of the lower-right corner of the cell
     * @param integer $RowBr Row index of the lower-right corner of the cell
     * @param string $Text Recognized string text within the cell. If there are multiple lines, they are separated by "\n".
     * @param string $Type Cell type
     * @param float $Confidence Cell confidence
     * @param array $Polygon Four-point coordinates of the cell in the image
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
    }
}
