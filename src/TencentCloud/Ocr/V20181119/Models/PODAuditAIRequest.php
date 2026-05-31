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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PODAuditAI request structure.
 *
 * @method array getImageBase64List() Obtain <p>The Base64 value of the image/PDF. The Base64 must be no more than 10M, resolution is recommended to be 600*800 or higher, and supports PNG, JPG, JPEG, BMP, PDF formats. Either ImageUrl or ImageBase64 of the image must be provided. If both are provided, only use ImageUrl. Example value: /9j/4AAQSkZJRg.....s97n//2Q==</p>
 * @method void setImageBase64List(array $ImageBase64List) Set <p>The Base64 value of the image/PDF. The Base64 must be no more than 10M, resolution is recommended to be 600*800 or higher, and supports PNG, JPG, JPEG, BMP, PDF formats. Either ImageUrl or ImageBase64 of the image must be provided. If both are provided, only use ImageUrl. Example value: /9j/4AAQSkZJRg.....s97n//2Q==</p>
 * @method array getImageUrlList() Obtain <p>The Url address of the image/PDF. The image after Base64 encoding should be no more than 10M, with a resolution of 600*800 or higher, and supports PNG, JPG, JPEG, BMP, and PDF formats. The image download time should not exceed 3 seconds. Images stored in Tencent Cloud's Url can guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud. The speed and stability of non-Tencent Cloud storage URLs may be impacted to a certain extent. Example value: https://ocr-demo-1254418846.cos.ap-guangzhou.myqcloud.com/general/GeneralAccurateOCR/GeneralAccurateOCR1.JPG</p>
 * @method void setImageUrlList(array $ImageUrlList) Set <p>The Url address of the image/PDF. The image after Base64 encoding should be no more than 10M, with a resolution of 600*800 or higher, and supports PNG, JPG, JPEG, BMP, and PDF formats. The image download time should not exceed 3 seconds. Images stored in Tencent Cloud's Url can guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud. The speed and stability of non-Tencent Cloud storage URLs may be impacted to a certain extent. Example value: https://ocr-demo-1254418846.cos.ap-guangzhou.myqcloud.com/general/GeneralAccurateOCR/GeneralAccurateOCR1.JPG</p>
 * @method string getWaybillNumber() Obtain <p>Waybill number is used for pod rule review assistance</p>
 * @method void setWaybillNumber(string $WaybillNumber) Set <p>Waybill number is used for pod rule review assistance</p>
 * @method integer getSignType() Obtain <p>No      The acknowledge type, 0 is selected by default</p><p>Enumeration value:</p><ul><li>0: Doorstep/yard</li><li>1: Parcel reception room</li><li>2: Myself/others acknowledge</li><li>3: Front desk/reception</li><li>4: Express delivery collection point</li><li>5: Express cabinet</li></ul>
 * @method void setSignType(integer $SignType) Set <p>No      The acknowledge type, 0 is selected by default</p><p>Enumeration value:</p><ul><li>0: Doorstep/yard</li><li>1: Parcel reception room</li><li>2: Myself/others acknowledge</li><li>3: Front desk/reception</li><li>4: Express delivery collection point</li><li>5: Express cabinet</li></ul>
 */
class PODAuditAIRequest extends AbstractModel
{
    /**
     * @var array <p>The Base64 value of the image/PDF. The Base64 must be no more than 10M, resolution is recommended to be 600*800 or higher, and supports PNG, JPG, JPEG, BMP, PDF formats. Either ImageUrl or ImageBase64 of the image must be provided. If both are provided, only use ImageUrl. Example value: /9j/4AAQSkZJRg.....s97n//2Q==</p>
     */
    public $ImageBase64List;

    /**
     * @var array <p>The Url address of the image/PDF. The image after Base64 encoding should be no more than 10M, with a resolution of 600*800 or higher, and supports PNG, JPG, JPEG, BMP, and PDF formats. The image download time should not exceed 3 seconds. Images stored in Tencent Cloud's Url can guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud. The speed and stability of non-Tencent Cloud storage URLs may be impacted to a certain extent. Example value: https://ocr-demo-1254418846.cos.ap-guangzhou.myqcloud.com/general/GeneralAccurateOCR/GeneralAccurateOCR1.JPG</p>
     */
    public $ImageUrlList;

    /**
     * @var string <p>Waybill number is used for pod rule review assistance</p>
     */
    public $WaybillNumber;

    /**
     * @var integer <p>No      The acknowledge type, 0 is selected by default</p><p>Enumeration value:</p><ul><li>0: Doorstep/yard</li><li>1: Parcel reception room</li><li>2: Myself/others acknowledge</li><li>3: Front desk/reception</li><li>4: Express delivery collection point</li><li>5: Express cabinet</li></ul>
     */
    public $SignType;

    /**
     * @param array $ImageBase64List <p>The Base64 value of the image/PDF. The Base64 must be no more than 10M, resolution is recommended to be 600*800 or higher, and supports PNG, JPG, JPEG, BMP, PDF formats. Either ImageUrl or ImageBase64 of the image must be provided. If both are provided, only use ImageUrl. Example value: /9j/4AAQSkZJRg.....s97n//2Q==</p>
     * @param array $ImageUrlList <p>The Url address of the image/PDF. The image after Base64 encoding should be no more than 10M, with a resolution of 600*800 or higher, and supports PNG, JPG, JPEG, BMP, and PDF formats. The image download time should not exceed 3 seconds. Images stored in Tencent Cloud's Url can guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud. The speed and stability of non-Tencent Cloud storage URLs may be impacted to a certain extent. Example value: https://ocr-demo-1254418846.cos.ap-guangzhou.myqcloud.com/general/GeneralAccurateOCR/GeneralAccurateOCR1.JPG</p>
     * @param string $WaybillNumber <p>Waybill number is used for pod rule review assistance</p>
     * @param integer $SignType <p>No      The acknowledge type, 0 is selected by default</p><p>Enumeration value:</p><ul><li>0: Doorstep/yard</li><li>1: Parcel reception room</li><li>2: Myself/others acknowledge</li><li>3: Front desk/reception</li><li>4: Express delivery collection point</li><li>5: Express cabinet</li></ul>
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
        if (array_key_exists("ImageBase64List",$param) and $param["ImageBase64List"] !== null) {
            $this->ImageBase64List = $param["ImageBase64List"];
        }

        if (array_key_exists("ImageUrlList",$param) and $param["ImageUrlList"] !== null) {
            $this->ImageUrlList = $param["ImageUrlList"];
        }

        if (array_key_exists("WaybillNumber",$param) and $param["WaybillNumber"] !== null) {
            $this->WaybillNumber = $param["WaybillNumber"];
        }

        if (array_key_exists("SignType",$param) and $param["SignType"] !== null) {
            $this->SignType = $param["SignType"];
        }
    }
}
