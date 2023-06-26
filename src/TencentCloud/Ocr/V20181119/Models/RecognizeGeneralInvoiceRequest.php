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
 * RecognizeGeneralInvoice request structure.
 *
 * @method string getImageBase64() Obtain The Base64-encoded value of the image.
Supported image formats: PNG, JPG, JPEG, and PDF. GIF is currently not supported.
Supported image size: The downloaded image after Base64 encoding can be up to 7 MB. The download time of the image cannot exceed 3s.
Supported image pixels: 20 to 10,000
Either `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, only `ImageUrl` is used.
 * @method void setImageBase64(string $ImageBase64) Set The Base64-encoded value of the image.
Supported image formats: PNG, JPG, JPEG, and PDF. GIF is currently not supported.
Supported image size: The downloaded image after Base64 encoding can be up to 7 MB. The download time of the image cannot exceed 3s.
Supported image pixels: 20 to 10,000
Either `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, only `ImageUrl` is used.
 * @method string getImageUrl() Obtain The URL of the image.
Supported image formats: PNG, JPG, JPEG, and PDF. GIF is currently not supported.
Supported image size: The downloaded image after Base64 encoding can be up to 7 MB. The download time of the image cannot exceed 3s.
Supported image pixels: 20 to 10,000
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
 * @method void setImageUrl(string $ImageUrl) Set The URL of the image.
Supported image formats: PNG, JPG, JPEG, and PDF. GIF is currently not supported.
Supported image size: The downloaded image after Base64 encoding can be up to 7 MB. The download time of the image cannot exceed 3s.
Supported image pixels: 20 to 10,000
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
 * @method array getTypes() Obtain The list of the types of invoices to be recognized. If this parameter is left empty, all types of invoices are recognized.
0: Taxi receipt
1: Quota invoice
2: Train ticket
3: VAT invoice
5: Itinerary/Receipt of e-ticket for air transport
8: General machine-printed invoice
9: Bus ticket
10: Ship ticket
11: VAT invoice (roll)
12: Car sales inovice
13: Toll receipt
15: Non-tax revenue invoice
16: Fully digitalized electronic invoice
-1: Other

By default, this parameter is left empty, which means to recognize all types of invoices.
When a single type is passed in, the image is recognized based on this type.
You can only specify a singe type or all types, but not some types.
 * @method void setTypes(array $Types) Set The list of the types of invoices to be recognized. If this parameter is left empty, all types of invoices are recognized.
0: Taxi receipt
1: Quota invoice
2: Train ticket
3: VAT invoice
5: Itinerary/Receipt of e-ticket for air transport
8: General machine-printed invoice
9: Bus ticket
10: Ship ticket
11: VAT invoice (roll)
12: Car sales inovice
13: Toll receipt
15: Non-tax revenue invoice
16: Fully digitalized electronic invoice
-1: Other

By default, this parameter is left empty, which means to recognize all types of invoices.
When a single type is passed in, the image is recognized based on this type.
You can only specify a singe type or all types, but not some types.
 * @method boolean getEnableOther() Obtain Whether to enable recognition of other invoices. If you enable this feature, other invoices can be recognized. Default value: `true`.	
 * @method void setEnableOther(boolean $EnableOther) Set Whether to enable recognition of other invoices. If you enable this feature, other invoices can be recognized. Default value: `true`.	
 * @method boolean getEnablePdf() Obtain Whether to enable PDF recognition. If you enable this feature, both images and PDF files can be recognized. Default value: `true`.
 * @method void setEnablePdf(boolean $EnablePdf) Set Whether to enable PDF recognition. If you enable this feature, both images and PDF files can be recognized. Default value: `true`.
 * @method integer getPdfPageNumber() Obtain The number of the PDF page that needs to be recognized. Only one single PDF page can be recognized. This parameter is valid if the uploaded file is a PDF and the value of `EnablePdf` is `true`. Default value: 1.
 * @method void setPdfPageNumber(integer $PdfPageNumber) Set The number of the PDF page that needs to be recognized. Only one single PDF page can be recognized. This parameter is valid if the uploaded file is a PDF and the value of `EnablePdf` is `true`. Default value: 1.
 * @method boolean getEnableMultiplePage() Obtain Whether to enable multi-page PDF recognition. If you enable this feature, multiple pages of a PDF file can be recognized, and the recognition results of a maximum of the first 30 pages can be returned. After you enable this feature, input parameters `EnablePdf` and `PdfPageNumber` are invalid. Default value: `false`.
 * @method void setEnableMultiplePage(boolean $EnableMultiplePage) Set Whether to enable multi-page PDF recognition. If you enable this feature, multiple pages of a PDF file can be recognized, and the recognition results of a maximum of the first 30 pages can be returned. After you enable this feature, input parameters `EnablePdf` and `PdfPageNumber` are invalid. Default value: `false`.
 * @method boolean getEnableCutImage() Obtain Whether to return the Base64-encoded value of the cropped image. Default value: `false`.
 * @method void setEnableCutImage(boolean $EnableCutImage) Set Whether to return the Base64-encoded value of the cropped image. Default value: `false`.
 */
class RecognizeGeneralInvoiceRequest extends AbstractModel
{
    /**
     * @var string The Base64-encoded value of the image.
Supported image formats: PNG, JPG, JPEG, and PDF. GIF is currently not supported.
Supported image size: The downloaded image after Base64 encoding can be up to 7 MB. The download time of the image cannot exceed 3s.
Supported image pixels: 20 to 10,000
Either `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, only `ImageUrl` is used.
     */
    public $ImageBase64;

    /**
     * @var string The URL of the image.
Supported image formats: PNG, JPG, JPEG, and PDF. GIF is currently not supported.
Supported image size: The downloaded image after Base64 encoding can be up to 7 MB. The download time of the image cannot exceed 3s.
Supported image pixels: 20 to 10,000
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
     */
    public $ImageUrl;

    /**
     * @var array The list of the types of invoices to be recognized. If this parameter is left empty, all types of invoices are recognized.
0: Taxi receipt
1: Quota invoice
2: Train ticket
3: VAT invoice
5: Itinerary/Receipt of e-ticket for air transport
8: General machine-printed invoice
9: Bus ticket
10: Ship ticket
11: VAT invoice (roll)
12: Car sales inovice
13: Toll receipt
15: Non-tax revenue invoice
16: Fully digitalized electronic invoice
-1: Other

By default, this parameter is left empty, which means to recognize all types of invoices.
When a single type is passed in, the image is recognized based on this type.
You can only specify a singe type or all types, but not some types.
     */
    public $Types;

    /**
     * @var boolean Whether to enable recognition of other invoices. If you enable this feature, other invoices can be recognized. Default value: `true`.	
     */
    public $EnableOther;

    /**
     * @var boolean Whether to enable PDF recognition. If you enable this feature, both images and PDF files can be recognized. Default value: `true`.
     */
    public $EnablePdf;

    /**
     * @var integer The number of the PDF page that needs to be recognized. Only one single PDF page can be recognized. This parameter is valid if the uploaded file is a PDF and the value of `EnablePdf` is `true`. Default value: 1.
     */
    public $PdfPageNumber;

    /**
     * @var boolean Whether to enable multi-page PDF recognition. If you enable this feature, multiple pages of a PDF file can be recognized, and the recognition results of a maximum of the first 30 pages can be returned. After you enable this feature, input parameters `EnablePdf` and `PdfPageNumber` are invalid. Default value: `false`.
     */
    public $EnableMultiplePage;

    /**
     * @var boolean Whether to return the Base64-encoded value of the cropped image. Default value: `false`.
     */
    public $EnableCutImage;

    /**
     * @param string $ImageBase64 The Base64-encoded value of the image.
Supported image formats: PNG, JPG, JPEG, and PDF. GIF is currently not supported.
Supported image size: The downloaded image after Base64 encoding can be up to 7 MB. The download time of the image cannot exceed 3s.
Supported image pixels: 20 to 10,000
Either `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, only `ImageUrl` is used.
     * @param string $ImageUrl The URL of the image.
Supported image formats: PNG, JPG, JPEG, and PDF. GIF is currently not supported.
Supported image size: The downloaded image after Base64 encoding can be up to 7 MB. The download time of the image cannot exceed 3s.
Supported image pixels: 20 to 10,000
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
     * @param array $Types The list of the types of invoices to be recognized. If this parameter is left empty, all types of invoices are recognized.
0: Taxi receipt
1: Quota invoice
2: Train ticket
3: VAT invoice
5: Itinerary/Receipt of e-ticket for air transport
8: General machine-printed invoice
9: Bus ticket
10: Ship ticket
11: VAT invoice (roll)
12: Car sales inovice
13: Toll receipt
15: Non-tax revenue invoice
16: Fully digitalized electronic invoice
-1: Other

By default, this parameter is left empty, which means to recognize all types of invoices.
When a single type is passed in, the image is recognized based on this type.
You can only specify a singe type or all types, but not some types.
     * @param boolean $EnableOther Whether to enable recognition of other invoices. If you enable this feature, other invoices can be recognized. Default value: `true`.	
     * @param boolean $EnablePdf Whether to enable PDF recognition. If you enable this feature, both images and PDF files can be recognized. Default value: `true`.
     * @param integer $PdfPageNumber The number of the PDF page that needs to be recognized. Only one single PDF page can be recognized. This parameter is valid if the uploaded file is a PDF and the value of `EnablePdf` is `true`. Default value: 1.
     * @param boolean $EnableMultiplePage Whether to enable multi-page PDF recognition. If you enable this feature, multiple pages of a PDF file can be recognized, and the recognition results of a maximum of the first 30 pages can be returned. After you enable this feature, input parameters `EnablePdf` and `PdfPageNumber` are invalid. Default value: `false`.
     * @param boolean $EnableCutImage Whether to return the Base64-encoded value of the cropped image. Default value: `false`.
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
        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = $param["Types"];
        }

        if (array_key_exists("EnableOther",$param) and $param["EnableOther"] !== null) {
            $this->EnableOther = $param["EnableOther"];
        }

        if (array_key_exists("EnablePdf",$param) and $param["EnablePdf"] !== null) {
            $this->EnablePdf = $param["EnablePdf"];
        }

        if (array_key_exists("PdfPageNumber",$param) and $param["PdfPageNumber"] !== null) {
            $this->PdfPageNumber = $param["PdfPageNumber"];
        }

        if (array_key_exists("EnableMultiplePage",$param) and $param["EnableMultiplePage"] !== null) {
            $this->EnableMultiplePage = $param["EnableMultiplePage"];
        }

        if (array_key_exists("EnableCutImage",$param) and $param["EnableCutImage"] !== null) {
            $this->EnableCutImage = $param["EnableCutImage"];
        }
    }
}
