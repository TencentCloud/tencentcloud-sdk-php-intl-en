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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * File verification information
 *
 * @method string getFileVerifyUrl() Obtain File verification URL guidance.
 * @method void setFileVerifyUrl(string $FileVerifyUrl) Set File verification URL guidance.
 * @method array getFileVerifyDomains() Obtain File verification domain name list.
 * @method void setFileVerifyDomains(array $FileVerifyDomains) Set File verification domain name list.
 * @method string getFileVerifyName() Obtain File verification file name.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFileVerifyName(string $FileVerifyName) Set File verification file name.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class FileVerifyInfo extends AbstractModel
{
    /**
     * @var string File verification URL guidance.
     */
    public $FileVerifyUrl;

    /**
     * @var array File verification domain name list.
     */
    public $FileVerifyDomains;

    /**
     * @var string File verification file name.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FileVerifyName;

    /**
     * @param string $FileVerifyUrl File verification URL guidance.
     * @param array $FileVerifyDomains File verification domain name list.
     * @param string $FileVerifyName File verification file name.
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
        if (array_key_exists("FileVerifyUrl",$param) and $param["FileVerifyUrl"] !== null) {
            $this->FileVerifyUrl = $param["FileVerifyUrl"];
        }

        if (array_key_exists("FileVerifyDomains",$param) and $param["FileVerifyDomains"] !== null) {
            $this->FileVerifyDomains = $param["FileVerifyDomains"];
        }

        if (array_key_exists("FileVerifyName",$param) and $param["FileVerifyName"] !== null) {
            $this->FileVerifyName = $param["FileVerifyName"];
        }
    }
}
