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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The information of the object to process.
 *
 * @method string getType() Obtain The input type, which can be `COS` or `URL`.
 * @method void setType(string $Type) Set The input type, which can be `COS` or `URL`.
 * @method CosInputInfo getCosInputInfo() Obtain The information of the COS object to process. This parameter is valid and required when `Type` is `COS`.
 * @method void setCosInputInfo(CosInputInfo $CosInputInfo) Set The information of the COS object to process. This parameter is valid and required when `Type` is `COS`.
 * @method UrlInputInfo getUrlInputInfo() Obtain The URL of the object to process. This parameter is valid and required when `Type` is `URL`.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUrlInputInfo(UrlInputInfo $UrlInputInfo) Set The URL of the object to process. This parameter is valid and required when `Type` is `URL`.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class MediaInputInfo extends AbstractModel
{
    /**
     * @var string The input type, which can be `COS` or `URL`.
     */
    public $Type;

    /**
     * @var CosInputInfo The information of the COS object to process. This parameter is valid and required when `Type` is `COS`.
     */
    public $CosInputInfo;

    /**
     * @var UrlInputInfo The URL of the object to process. This parameter is valid and required when `Type` is `URL`.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UrlInputInfo;

    /**
     * @param string $Type The input type, which can be `COS` or `URL`.
     * @param CosInputInfo $CosInputInfo The information of the COS object to process. This parameter is valid and required when `Type` is `COS`.
     * @param UrlInputInfo $UrlInputInfo The URL of the object to process. This parameter is valid and required when `Type` is `URL`.
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CosInputInfo",$param) and $param["CosInputInfo"] !== null) {
            $this->CosInputInfo = new CosInputInfo();
            $this->CosInputInfo->deserialize($param["CosInputInfo"]);
        }

        if (array_key_exists("UrlInputInfo",$param) and $param["UrlInputInfo"] !== null) {
            $this->UrlInputInfo = new UrlInputInfo();
            $this->UrlInputInfo->deserialize($param["UrlInputInfo"]);
        }
    }
}
