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
 * Recognition information of a single invoice/ticket among multiple types of invoices/tickets
 *
 * @method string getCode() Obtain The recognition result.
`OK`: Recognition is successful.
`FailedOperation.UnsupportedInvoice`: Recognition is not supported.
`FailedOperation.UnKnowError`: Recognition failed.
For the information about other error codes, see the OCR API description for each invoice/ticket.
 * @method void setCode(string $Code) Set The recognition result.
`OK`: Recognition is successful.
`FailedOperation.UnsupportedInvoice`: Recognition is not supported.
`FailedOperation.UnKnowError`: Recognition failed.
For the information about other error codes, see the OCR API description for each invoice/ticket.
 * @method integer getType() Obtain The type of invoice/ticket to which the recognized image belongs.
-1: Unknown
0: Taxi receipt
1: Quota invoice
2: Train ticket
3: VAT invoice
5: Itinerary/Receipt of e-ticket for air transportation
8: General machine-printed invoice
9: Bus ticket
10: Ship ticket
11: VAT invoice (roll)
12: Car sales invoice
13: Toll receipt
15: Non-tax revenue invoice
16: Fully digitalized electronic invoice
 * @method void setType(integer $Type) Set The type of invoice/ticket to which the recognized image belongs.
-1: Unknown
0: Taxi receipt
1: Quota invoice
2: Train ticket
3: VAT invoice
5: Itinerary/Receipt of e-ticket for air transportation
8: General machine-printed invoice
9: Bus ticket
10: Ship ticket
11: VAT invoice (roll)
12: Car sales invoice
13: Toll receipt
15: Non-tax revenue invoice
16: Fully digitalized electronic invoice
 * @method Polygon getPolygon() Obtain The coordinates of the four vertices of the rotated image.
 * @method void setPolygon(Polygon $Polygon) Set The coordinates of the four vertices of the rotated image.
 * @method float getAngle() Obtain The rotation angle of the recognized image in the image with multiple types of invoices/tickets.
 * @method void setAngle(float $Angle) Set The rotation angle of the recognized image in the image with multiple types of invoices/tickets.
 * @method SingleInvoiceItem getSingleInvoiceInfos() Obtain The recognized content.
 * @method void setSingleInvoiceInfos(SingleInvoiceItem $SingleInvoiceInfos) Set The recognized content.
 * @method integer getPage() Obtain The number of the page on which the recognized invoice is in the image or PDF file, starting from 1 by default.
 * @method void setPage(integer $Page) Set The number of the page on which the recognized invoice is in the image or PDF file, starting from 1 by default.
 * @method string getSubType() Obtain The detailed invoice type. See the description of `SubType`.
 * @method void setSubType(string $SubType) Set The detailed invoice type. See the description of `SubType`.
 * @method string getTypeDescription() Obtain The invoice description. See the description of `TypeDescription`.
 * @method void setTypeDescription(string $TypeDescription) Set The invoice description. See the description of `TypeDescription`.
 * @method string getCutImage() Obtain The image file after cropping, encoded in Base64. This is returned if `EnableCutImage` is set to `true`.
 * @method void setCutImage(string $CutImage) Set The image file after cropping, encoded in Base64. This is returned if `EnableCutImage` is set to `true`.
 * @method string getSubTypeDescription() Obtain The description of the detailed invoice type. See the description of `SubType`.
 * @method void setSubTypeDescription(string $SubTypeDescription) Set The description of the detailed invoice type. See the description of `SubType`.
 */
class InvoiceItem extends AbstractModel
{
    /**
     * @var string The recognition result.
`OK`: Recognition is successful.
`FailedOperation.UnsupportedInvoice`: Recognition is not supported.
`FailedOperation.UnKnowError`: Recognition failed.
For the information about other error codes, see the OCR API description for each invoice/ticket.
     */
    public $Code;

    /**
     * @var integer The type of invoice/ticket to which the recognized image belongs.
-1: Unknown
0: Taxi receipt
1: Quota invoice
2: Train ticket
3: VAT invoice
5: Itinerary/Receipt of e-ticket for air transportation
8: General machine-printed invoice
9: Bus ticket
10: Ship ticket
11: VAT invoice (roll)
12: Car sales invoice
13: Toll receipt
15: Non-tax revenue invoice
16: Fully digitalized electronic invoice
     */
    public $Type;

    /**
     * @var Polygon The coordinates of the four vertices of the rotated image.
     */
    public $Polygon;

    /**
     * @var float The rotation angle of the recognized image in the image with multiple types of invoices/tickets.
     */
    public $Angle;

    /**
     * @var SingleInvoiceItem The recognized content.
     */
    public $SingleInvoiceInfos;

    /**
     * @var integer The number of the page on which the recognized invoice is in the image or PDF file, starting from 1 by default.
     */
    public $Page;

    /**
     * @var string The detailed invoice type. See the description of `SubType`.
     */
    public $SubType;

    /**
     * @var string The invoice description. See the description of `TypeDescription`.
     */
    public $TypeDescription;

    /**
     * @var string The image file after cropping, encoded in Base64. This is returned if `EnableCutImage` is set to `true`.
     */
    public $CutImage;

    /**
     * @var string The description of the detailed invoice type. See the description of `SubType`.
     */
    public $SubTypeDescription;

    /**
     * @param string $Code The recognition result.
`OK`: Recognition is successful.
`FailedOperation.UnsupportedInvoice`: Recognition is not supported.
`FailedOperation.UnKnowError`: Recognition failed.
For the information about other error codes, see the OCR API description for each invoice/ticket.
     * @param integer $Type The type of invoice/ticket to which the recognized image belongs.
-1: Unknown
0: Taxi receipt
1: Quota invoice
2: Train ticket
3: VAT invoice
5: Itinerary/Receipt of e-ticket for air transportation
8: General machine-printed invoice
9: Bus ticket
10: Ship ticket
11: VAT invoice (roll)
12: Car sales invoice
13: Toll receipt
15: Non-tax revenue invoice
16: Fully digitalized electronic invoice
     * @param Polygon $Polygon The coordinates of the four vertices of the rotated image.
     * @param float $Angle The rotation angle of the recognized image in the image with multiple types of invoices/tickets.
     * @param SingleInvoiceItem $SingleInvoiceInfos The recognized content.
     * @param integer $Page The number of the page on which the recognized invoice is in the image or PDF file, starting from 1 by default.
     * @param string $SubType The detailed invoice type. See the description of `SubType`.
     * @param string $TypeDescription The invoice description. See the description of `TypeDescription`.
     * @param string $CutImage The image file after cropping, encoded in Base64. This is returned if `EnableCutImage` is set to `true`.
     * @param string $SubTypeDescription The description of the detailed invoice type. See the description of `SubType`.
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Polygon",$param) and $param["Polygon"] !== null) {
            $this->Polygon = new Polygon();
            $this->Polygon->deserialize($param["Polygon"]);
        }

        if (array_key_exists("Angle",$param) and $param["Angle"] !== null) {
            $this->Angle = $param["Angle"];
        }

        if (array_key_exists("SingleInvoiceInfos",$param) and $param["SingleInvoiceInfos"] !== null) {
            $this->SingleInvoiceInfos = new SingleInvoiceItem();
            $this->SingleInvoiceInfos->deserialize($param["SingleInvoiceInfos"]);
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("SubType",$param) and $param["SubType"] !== null) {
            $this->SubType = $param["SubType"];
        }

        if (array_key_exists("TypeDescription",$param) and $param["TypeDescription"] !== null) {
            $this->TypeDescription = $param["TypeDescription"];
        }

        if (array_key_exists("CutImage",$param) and $param["CutImage"] !== null) {
            $this->CutImage = $param["CutImage"];
        }

        if (array_key_exists("SubTypeDescription",$param) and $param["SubTypeDescription"] !== null) {
            $this->SubTypeDescription = $param["SubTypeDescription"];
        }
    }
}
