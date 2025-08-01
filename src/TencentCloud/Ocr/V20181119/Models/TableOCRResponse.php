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
 * TableOCR response structure.
 *
 * @method array getTextDetections() Obtain Recognized text. For more information, please click the link on the left
 * @method void setTextDetections(array $TextDetections) Set Recognized text. For more information, please click the link on the left
 * @method string getData() Obtain Base64-encoded Excel data.
 * @method void setData(string $Data) Set Base64-encoded Excel data.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class TableOCRResponse extends AbstractModel
{
    /**
     * @var array Recognized text. For more information, please click the link on the left
     */
    public $TextDetections;

    /**
     * @var string Base64-encoded Excel data.
     */
    public $Data;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $TextDetections Recognized text. For more information, please click the link on the left
     * @param string $Data Base64-encoded Excel data.
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
        if (array_key_exists("TextDetections",$param) and $param["TextDetections"] !== null) {
            $this->TextDetections = [];
            foreach ($param["TextDetections"] as $key => $value){
                $obj = new TextTable();
                $obj->deserialize($value);
                array_push($this->TextDetections, $obj);
            }
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
