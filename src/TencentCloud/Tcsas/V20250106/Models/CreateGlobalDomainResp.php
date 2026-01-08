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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Response of creating a global domain name
 *
 * @method boolean getResult() Obtain Result
 * @method void setResult(boolean $Result) Set Result
 * @method array getRepeatUrls() Obtain Indicates the duplicate domain name.
 * @method void setRepeatUrls(array $RepeatUrls) Set Indicates the duplicate domain name.
 * @method array getExistsWhiteUrls() Obtain Lists allowed domain names.
 * @method void setExistsWhiteUrls(array $ExistsWhiteUrls) Set Lists allowed domain names.
 * @method array getExistsBlackUrls() Obtain Indicates the domain name already exists in the blocklist.
 * @method void setExistsBlackUrls(array $ExistsBlackUrls) Set Indicates the domain name already exists in the blocklist.
 */
class CreateGlobalDomainResp extends AbstractModel
{
    /**
     * @var boolean Result
     */
    public $Result;

    /**
     * @var array Indicates the duplicate domain name.
     */
    public $RepeatUrls;

    /**
     * @var array Lists allowed domain names.
     */
    public $ExistsWhiteUrls;

    /**
     * @var array Indicates the domain name already exists in the blocklist.
     */
    public $ExistsBlackUrls;

    /**
     * @param boolean $Result Result
     * @param array $RepeatUrls Indicates the duplicate domain name.
     * @param array $ExistsWhiteUrls Lists allowed domain names.
     * @param array $ExistsBlackUrls Indicates the domain name already exists in the blocklist.
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("RepeatUrls",$param) and $param["RepeatUrls"] !== null) {
            $this->RepeatUrls = $param["RepeatUrls"];
        }

        if (array_key_exists("ExistsWhiteUrls",$param) and $param["ExistsWhiteUrls"] !== null) {
            $this->ExistsWhiteUrls = $param["ExistsWhiteUrls"];
        }

        if (array_key_exists("ExistsBlackUrls",$param) and $param["ExistsBlackUrls"] !== null) {
            $this->ExistsBlackUrls = $param["ExistsBlackUrls"];
        }
    }
}
