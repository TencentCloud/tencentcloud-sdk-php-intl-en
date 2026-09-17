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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getFileVerifyUrl() Obtain 
 * @method void setFileVerifyUrl(string $FileVerifyUrl) Set 
 * @method array getFileVerifyDomains() Obtain 
 * @method void setFileVerifyDomains(array $FileVerifyDomains) Set 
 * @method string getFileVerifyName() Obtain 
 * @method void setFileVerifyName(string $FileVerifyName) Set 
 */
class FileVerifyInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $FileVerifyUrl;

    /**
     * @var array 
     */
    public $FileVerifyDomains;

    /**
     * @var string 
     */
    public $FileVerifyName;

    /**
     * @param string $FileVerifyUrl 
     * @param array $FileVerifyDomains 
     * @param string $FileVerifyName 
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
