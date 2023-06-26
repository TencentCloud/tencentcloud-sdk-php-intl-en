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
 * RecognizeGeneralInvoice response structure.
 *
 * @method array getMixedInvoiceItems() Obtain Mixed invoice/ticket recognition result. Please click the link on the left for details.
 * @method void setMixedInvoiceItems(array $MixedInvoiceItems) Set Mixed invoice/ticket recognition result. Please click the link on the left for details.
 * @method integer getTotalPDFCount() Obtain Total number of pages in the PDF file.
 * @method void setTotalPDFCount(integer $TotalPDFCount) Set Total number of pages in the PDF file.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class RecognizeGeneralInvoiceResponse extends AbstractModel
{
    /**
     * @var array Mixed invoice/ticket recognition result. Please click the link on the left for details.
     */
    public $MixedInvoiceItems;

    /**
     * @var integer Total number of pages in the PDF file.
     */
    public $TotalPDFCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $MixedInvoiceItems Mixed invoice/ticket recognition result. Please click the link on the left for details.
     * @param integer $TotalPDFCount Total number of pages in the PDF file.
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
        if (array_key_exists("MixedInvoiceItems",$param) and $param["MixedInvoiceItems"] !== null) {
            $this->MixedInvoiceItems = [];
            foreach ($param["MixedInvoiceItems"] as $key => $value){
                $obj = new InvoiceItem();
                $obj->deserialize($value);
                array_push($this->MixedInvoiceItems, $obj);
            }
        }

        if (array_key_exists("TotalPDFCount",$param) and $param["TotalPDFCount"] !== null) {
            $this->TotalPDFCount = $param["TotalPDFCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
