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
 * RecognizeTableAccurateOCR response structure.
 *
 * @method array getTableDetections() Obtain The recognized text information. Please click the link on the left for details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTableDetections(array $TableDetections) Set The recognized text information. Please click the link on the left for details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getData() Obtain Base64-encoded Excel data.
 * @method void setData(string $Data) Set Base64-encoded Excel data.
 * @method integer getPdfPageSize() Obtain The total number of pages in the PDF file.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPdfPageSize(integer $PdfPageSize) Set The total number of pages in the PDF file.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getAngle() Obtain Image rotation angle in degrees. 0°: The horizontal direction of the text on the image; a negative value: rotate counterclockwise. Value range: -360° to 0°.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAngle(float $Angle) Set Image rotation angle in degrees. 0°: The horizontal direction of the text on the image; a negative value: rotate counterclockwise. Value range: -360° to 0°.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class RecognizeTableAccurateOCRResponse extends AbstractModel
{
    /**
     * @var array The recognized text information. Please click the link on the left for details.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TableDetections;

    /**
     * @var string Base64-encoded Excel data.
     */
    public $Data;

    /**
     * @var integer The total number of pages in the PDF file.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PdfPageSize;

    /**
     * @var float Image rotation angle in degrees. 0°: The horizontal direction of the text on the image; a negative value: rotate counterclockwise. Value range: -360° to 0°.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Angle;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $TableDetections The recognized text information. Please click the link on the left for details.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Data Base64-encoded Excel data.
     * @param integer $PdfPageSize The total number of pages in the PDF file.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Angle Image rotation angle in degrees. 0°: The horizontal direction of the text on the image; a negative value: rotate counterclockwise. Value range: -360° to 0°.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("TableDetections",$param) and $param["TableDetections"] !== null) {
            $this->TableDetections = [];
            foreach ($param["TableDetections"] as $key => $value){
                $obj = new TableInfo();
                $obj->deserialize($value);
                array_push($this->TableDetections, $obj);
            }
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("PdfPageSize",$param) and $param["PdfPageSize"] !== null) {
            $this->PdfPageSize = $param["PdfPageSize"];
        }

        if (array_key_exists("Angle",$param) and $param["Angle"] !== null) {
            $this->Angle = $param["Angle"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
