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
 * Response for creating a global domain.
 *
 * @method boolean getResult() Obtain Operation result. 
 * @method void setResult(boolean $Result) Set Operation result. 
 * @method array getRepeatUrls() Obtain Duplicate domains.
 * @method void setRepeatUrls(array $RepeatUrls) Set Duplicate domains.
 * @method array getExistsWhiteUrls() Obtain Domains that already exist in the allowlist.
 * @method void setExistsWhiteUrls(array $ExistsWhiteUrls) Set Domains that already exist in the allowlist.
 * @method array getExistsBlackUrls() Obtain Domains that already exist in the blocklist. 
 * @method void setExistsBlackUrls(array $ExistsBlackUrls) Set Domains that already exist in the blocklist. 
 */
class CreateGlobalDomainResp extends AbstractModel
{
    /**
     * @var boolean Operation result. 
     */
    public $Result;

    /**
     * @var array Duplicate domains.
     */
    public $RepeatUrls;

    /**
     * @var array Domains that already exist in the allowlist.
     */
    public $ExistsWhiteUrls;

    /**
     * @var array Domains that already exist in the blocklist. 
     */
    public $ExistsBlackUrls;

    /**
     * @param boolean $Result Operation result. 
     * @param array $RepeatUrls Duplicate domains.
     * @param array $ExistsWhiteUrls Domains that already exist in the allowlist.
     * @param array $ExistsBlackUrls Domains that already exist in the blocklist. 
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
