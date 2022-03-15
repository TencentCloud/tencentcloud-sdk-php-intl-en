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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes how to extract data
 *
 * @method string getExtractionInputPath() Obtain JsonPath, which will be `$.` by default if not specified
 * @method void setExtractionInputPath(string $ExtractionInputPath) Set JsonPath, which will be `$.` by default if not specified
 * @method string getFormat() Obtain Valid values: TEXT/JSON
 * @method void setFormat(string $Format) Set Valid values: TEXT/JSON
 * @method TextParams getTextParams() Obtain Only required for `Text`
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTextParams(TextParams $TextParams) Set Only required for `Text`
Note: this field may return null, indicating that no valid values can be obtained.
 */
class Extraction extends AbstractModel
{
    /**
     * @var string JsonPath, which will be `$.` by default if not specified
     */
    public $ExtractionInputPath;

    /**
     * @var string Valid values: TEXT/JSON
     */
    public $Format;

    /**
     * @var TextParams Only required for `Text`
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TextParams;

    /**
     * @param string $ExtractionInputPath JsonPath, which will be `$.` by default if not specified
     * @param string $Format Valid values: TEXT/JSON
     * @param TextParams $TextParams Only required for `Text`
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ExtractionInputPath",$param) and $param["ExtractionInputPath"] !== null) {
            $this->ExtractionInputPath = $param["ExtractionInputPath"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("TextParams",$param) and $param["TextParams"] !== null) {
            $this->TextParams = new TextParams();
            $this->TextParams->deserialize($param["TextParams"]);
        }
    }
}
