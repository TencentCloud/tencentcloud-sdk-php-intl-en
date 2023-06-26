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
 * Recognized table information
 *
 * @method array getCells() Obtain Cell content
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setCells(array $Cells) Set Cell content
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method integer getType() Obtain Type of text in the image. Valid values:
0: Non-table text
1: Text in a bordered table
2: Text in a borderless table
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method void setType(integer $Type) Set Type of text in the image. Valid values:
0: Non-table text
1: Text in a bordered table
2: Text in a borderless table
Note: This parameter may return null, indicating that no valid values can be obtained.
 * @method array getTableCoordPoint() Obtain The coordinates of the four vertices (upper-left, upper-right, lower-right, and lower-left) of the table body.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableCoordPoint(array $TableCoordPoint) Set The coordinates of the four vertices (upper-left, upper-right, lower-right, and lower-left) of the table body.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TableInfo extends AbstractModel
{
    /**
     * @var array Cell content
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $Cells;

    /**
     * @var integer Type of text in the image. Valid values:
0: Non-table text
1: Text in a bordered table
2: Text in a borderless table
Note: This parameter may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var array The coordinates of the four vertices (upper-left, upper-right, lower-right, and lower-left) of the table body.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableCoordPoint;

    /**
     * @param array $Cells Cell content
Note: This parameter may return null, indicating that no valid values can be obtained.
     * @param integer $Type Type of text in the image. Valid values:
0: Non-table text
1: Text in a bordered table
2: Text in a borderless table
Note: This parameter may return null, indicating that no valid values can be obtained.
     * @param array $TableCoordPoint The coordinates of the four vertices (upper-left, upper-right, lower-right, and lower-left) of the table body.
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
        if (array_key_exists("Cells",$param) and $param["Cells"] !== null) {
            $this->Cells = [];
            foreach ($param["Cells"] as $key => $value){
                $obj = new TableCellInfo();
                $obj->deserialize($value);
                array_push($this->Cells, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TableCoordPoint",$param) and $param["TableCoordPoint"] !== null) {
            $this->TableCoordPoint = [];
            foreach ($param["TableCoordPoint"] as $key => $value){
                $obj = new Coord();
                $obj->deserialize($value);
                array_push($this->TableCoordPoint, $obj);
            }
        }
    }
}
